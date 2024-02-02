<?php
require('fpdf/fpdf.php'); // Asegúrate de ajustar la ruta al directorio donde guardaste FPDF

class PDF extends FPDF
{
    // Encabezado de página
    // Encabezado de página
    function Header()
    {
        // Logo
        $this->Image('../imagenes/logo.png',10,6,30); // Asume que tienes un logo en la misma carpeta, ajusta la ruta según sea necesario
        $this->SetFont('Arial', 'B', 15);
        // Movernos a la derecha
        $this->Cell(80);
        // Título
        $this->Cell(30, 10, 'Detalle de Venta', 0, 1, 'C');
        // Salto de línea
        $this->Ln(20);
    }

    // Pie de página
    function Footer()
    {
        $this->SetY(-15);
        $this->SetFont('Arial', 'I', 8);
        $this->Cell(0, 10, 'Pagina '.$this->PageNo().'/{nb}', 0, 0, 'C');
    }

    function TablaVentas($header, $ventas)
    {
        // Ajuste de los anchos para cada columna
        $w = array(20, 35, 25, 20, 45, 20, 25); // Ajusta el último valor para la imagen
    
        // Cabecera
        $this->SetFillColor(255, 0, 0);
        $this->SetTextColor(255);
        $this->SetDrawColor(128, 0, 0);
        $this->SetLineWidth(.3);
        $this->SetFont('', 'B');
        foreach ($header as $i => $col) {
            $this->Cell($w[$i], 7, $col, 1, 0, 'C', true);
        }
        $this->Ln();
    
        // Datos
        $this->SetFillColor(224, 235, 255);
        $this->SetTextColor(0);
        $this->SetFont('');
        foreach ($ventas as $row) {
            $this->Cell($w[0], 6, $row['idcodigo'], 'LR', 0, 'L');
            $this->Cell($w[1], 6, $row['producto'], 'LR', 0, 'L');
            $this->Cell($w[2], 6, number_format($row['precio_unitario']), 'LR', 0, 'R');
            $this->Cell($w[3], 6, $row['cantidad'], 'LR', 0, 'R');
            $this->Cell($w[4], 6, $row['descripcion'], 'LR', 0, 'L');
            $this->Cell($w[5], 6, $row['Categoria'], 'LR', 0, 'L');
            
            // Imagen
            if ($row['imagen'] && file_exists($row['imagen'])) { // Asegúrate de que el archivo existe
                $x = $this->GetX();
                $y = $this->GetY();
                $this->Cell($w[6], 6, $this->Image($row['imagen'], $x, $y, 20), 'LR', 0, 'C', false); // 20 de ancho, altura auto
                $this->SetXY($x + $w[6], $y);
            } else {
                $this->Cell($w[6], 6, '', 'LR'); // Celda vacía si no hay imagen o no se encuentra el archivo
            }
            
            $this->Ln();
        }
        // Línea de cierre
        $this->Cell(array_sum($w), 0, '', 'T');
    }
    
}

// Inclusión del script de conexión a la base de datos
include "../compartido/conexion.php"; // Asegúrate de que este es el camino correcto al archivo de conexión

// Obtención de las ventas de la base de datos
$query = "SELECT * FROM ventas";
$result = mysqli_query($conn, $query);
$ventas = array();
while($row = mysqli_fetch_assoc($result)) {
    $ventas[] = $row;
}

// Creación del documento PDF
$pdf = new PDF();
$header = array('ID', 'Producto', 'Precio', 'Cantidad', 'Descripción', 'Categoría', 'Imagen');
$pdf->AliasNbPages();
$pdf->AddPage();
$pdf->SetFont('Arial','',12);
$pdf->TablaVentas($header, $ventas);
$pdf->Output();
?>
