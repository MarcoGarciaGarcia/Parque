<?php
require('includes/db_connect.php');
require('includes/fpdf/fpdf.php');

// Recibir datos del formulario
$nombre = $_POST['nombre'];
$adultos = $_POST['adultos'];
$ninos = $_POST['ninos'];
$camping = $_POST['camping'];
$cabana_4 = $_POST['cabana_4'];
$cabana_6 = $_POST['cabana_6'];
$sillas = $_POST['sillas'];
$mesas = $_POST['mesas'];
$sombrillas = $_POST['sombrillas'];

// Precios unitarios
$precio_adulto = 180;
$precio_nino = 120;
$precio_camping = 350;
$precio_cabana_4 = 2500;
$precio_cabana_6 = 3000;
$precio_silla = 30;
$precio_mesa = 50;
$precio_sombrilla = 50;

// Calcular total
$total = ($adultos * $precio_adulto) + ($ninos * $precio_nino) +
         ($camping * $precio_camping) + ($cabana_4 * $precio_cabana_4) + ($cabana_6 * $precio_cabana_6) +
         ($sillas * $precio_silla) + ($mesas * $precio_mesa) + ($sombrillas * $precio_sombrilla);

// Insertar en la base de datos
$stmt = $conn->prepare("INSERT INTO ventas (nombre, adultos, ninos, camping, cabana_4, cabana_6, sillas, mesas, sombrillas, total) 
                        VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
$stmt->bind_param("siiiiiiiii", $nombre, $adultos, $ninos, $camping, $cabana_4, $cabana_6, $sillas, $mesas, $sombrillas, $total);
$stmt->execute();
$venta_id = $stmt->insert_id;
$stmt->close();

// Crear ticket en PDF
$pdf = new FPDF();
$pdf->AddPage();
$pdf->SetFont('Arial', 'B', 16);
$pdf->Cell(0, 10, "Parque Acuático - Ticket de Compra", 0, 1, 'C');
$pdf->SetFont('Arial', '', 12);
$pdf->Ln(5);
$pdf->Cell(0, 10, "Cliente: $nombre", 0, 1);
$pdf->Cell(0, 10, "Fecha: " . date("Y-m-d H:i:s"), 0, 1);
$pdf->Ln(5);

// Encabezados de tabla
$pdf->SetFont('Arial', 'B', 12);
$pdf->Cell(80, 10, "Descripcion", 1);
$pdf->Cell(30, 10, "Cantidad", 1);
$pdf->Cell(30, 10, "Subtotal", 1);
$pdf->Ln();

$pdf->SetFont('Arial', '', 12);
if ($adultos > 0) {
    $pdf->Cell(80, 10, "Entradas Adulto", 1);
    $pdf->Cell(30, 10, $adultos, 1);
    $pdf->Cell(30, 10, "$" . ($adultos * $precio_adulto), 1);
    $pdf->Ln();
}
if ($ninos > 0) {
    $pdf->Cell(80, 10, "Entradas Niño", 1);
    $pdf->Cell(30, 10, $ninos, 1);
    $pdf->Cell(30, 10, "$" . ($ninos * $precio_nino), 1);
    $pdf->Ln();
}
if ($camping > 0) {
    $pdf->Cell(80, 10, "Espacio Casa de Campaña", 1);
    $pdf->Cell(30, 10, $camping, 1);
    $pdf->Cell(30, 10, "$" . ($camping * $precio_camping), 1);
    $pdf->Ln();
}
if ($cabana_4 > 0) {
    $pdf->Cell(80, 10, "Cabaña para 4 personas", 1);
    $pdf->Cell(30, 10, $cabana_4, 1);
    $pdf->Cell(30, 10, "$" . ($cabana_4 * $precio_cabana_4), 1);
    $pdf->Ln();
}
if ($cabana_6 > 0) {
    $pdf->Cell(80, 10, "Cabaña para 6 personas", 1);
    $pdf->Cell(30, 10, $cabana_6, 1);
    $pdf->Cell(30, 10, "$" . ($cabana_6 * $precio_cabana_6), 1);
    $pdf->Ln();
}
if ($sillas > 0) {
    $pdf->Cell(80, 10, "Sillas", 1);
    $pdf->Cell(30, 10, $sillas, 1);
    $pdf->Cell(30, 10, "$" . ($sillas * $precio_silla), 1);
    $pdf->Ln();
}
if ($mesas > 0) {
    $pdf->Cell(80, 10, "Mesas", 1);
    $pdf->Cell(30, 10, $mesas, 1);
    $pdf->Cell(30, 10, "$" . ($mesas * $precio_mesa), 1);
    $pdf->Ln();
}
if ($sombrillas > 0) {
    $pdf->Cell(80, 10, "Sombrillas", 1);
    $pdf->Cell(30, 10, $sombrillas, 1);
    $pdf->Cell(30, 10, "$" . ($sombrillas * $precio_sombrilla), 1);
    $pdf->Ln();
}

// Total
$pdf->SetFont('Arial', 'B', 14);
$pdf->Cell(80, 10, "TOTAL A PAGAR", 1);
$pdf->Cell(30, 10, "", 1);
$pdf->Cell(30, 10, "$" . $total, 1);
$pdf->Ln(20);

// Guardar PDF
$ticket_filename = "tickets/ticket_$venta_id.pdf";
$pdf->Output("F", $ticket_filename);

// Redirigir al usuario al ticket
header("Location: $ticket_filename");
exit;
?>
