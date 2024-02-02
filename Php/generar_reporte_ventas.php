<?php
require('fpdf/fpdf.php'); 

class PDF extends FPDF
{
   
    function Header()
    {
      
        $this->Image('../imagenes/logo.png',10,6,30); 
        $this->SetFont('Arial', 'B', 15);
       
        $this->Cell(80);
        
        $this->Cell(30, 10, 'Detalle de Venta', 0, 1, 'C');
      
        $this->Ln(20);
    }

   
    function Footer()
    {
        $this->SetY(-15);
        $this->SetFont('Arial', 'I', 8);
        $this->Cell(0, 10, 'Pagina '.$this->PageNo().'/{nb}', 0, 0, 'C');
    }

    function TablaVentas($header, $ventas)
    {
        
        $w = array(20, 35, 25, 20, 45, 20, 25); 
       
        $this->SetFillColor(255, 0, 0);
        $this->SetTextColor(255);
        $this->SetDrawColor(128, 0, 0);
        $this->SetLineWidth(.3);
        $this->SetFont('', 'B');
        foreach ($header as $i => $col) {
            $this->Cell($w[$i], 7, $col, 1, 0, 'C', true);
        }
        $this->Ln();
    
        
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
            
            
            if ($row['imagen'] && file_exists($row['imagen'])) { 
                $x = $this->GetX();
                $y = $this->GetY();
                $this->Cell($w[6], 6, $this->Image($row['imagen'], $x, $y, 20), 'LR', 0, 'C', false); 
                $this->SetXY($x + $w[6], $y);
            } else {
                $this->Cell($w[6], 6, '', 'LR'); 
            }
            
            $this->Ln();
        }
        
        $this->Cell(array_sum($w), 0, '', 'T');
    }
    
}


include "../compartido/conexion.php"; 


$query = "SELECT * FROM ventas";
$result = mysqli_query($conn, $query);
$ventas = array();
while($row = mysqli_fetch_assoc($result)) {
    $ventas[] = $row;
}


$pdf = new PDF();
$header = array('ID', 'Producto', 'Precio', 'Cantidad', 'Descripción', 'Categoría', 'Imagen');
$pdf->AliasNbPages();
$pdf->AddPage();
$pdf->SetFont('Arial','',12);
$pdf->TablaVentas($header, $ventas);
$pdf->Output();
?>
