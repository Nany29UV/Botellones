<?php

require('./fpdf.php');

class PDF extends FPDF
{
   function Header()
   {
      include '../../Login/con_db.php';

      $consulta_info = $conn->query(" select *from llenados ");
      $dato_info = $consulta_info->fetch_object();
      $this->Image('logollenado.png', 75, 4, 60); 
      $this->SetFont('Arial', 'B', 19); 
      $this->Cell(45); 
      $this->SetTextColor(0, 0, 0); 
  
      $this->Ln(50);

      $this->SetTextColor(1, 129, 147);
      $this->Cell(50); 
      $this->SetFont('Arial', 'B', 15);
      $this->Cell(100, 10, utf8_decode("REPORTE DE LLENADO"), 0, 1, 'C', 0);
      $this->Ln(7);


      $this->SetFillColor(1, 129, 147);; 
      $this->SetTextColor(255, 255, 255); 
      $this->SetDrawColor(1, 129, 147);; 
      $this->SetFont('Arial', 'B', 11);
      $this->Cell(37, 10, utf8_decode('Id'), 1, 0, 'C', 1);
      $this->Cell(37, 10, utf8_decode('Cliente'), 1, 0, 'C', 1);
      $this->Cell(37, 10, utf8_decode('Fecha'), 1, 0, 'C', 1);
      $this->Cell(37, 10, utf8_decode('Hora'), 1, 0, 'C', 1);
      $this->Cell(37, 10, utf8_decode('Cantidad'), 1, 1, 'C', 1);
   }

   function Footer()
   {
      $this->SetY(-15); 
      $this->SetFont('Arial', 'I', 8); 
      $this->Cell(0, 10, utf8_decode('Página ') . $this->PageNo() . '/{nb}', 0, 0, 'C'); 

      $this->SetY(-15);
      $this->SetFont('Arial', 'I', 8); 
      $hoy = date('d/m/Y');
      $this->Cell(355, 10, utf8_decode($hoy), 0, 0, 'C');
   }
}
include '../../Login/con_db.php';

$pdf = new PDF();
$pdf->AddPage(); 
$pdf->AliasNbPages();

$i = 0;
$pdf->SetFont('Arial', '', 12);
$pdf->SetDrawColor(163, 163, 163);

$consulta_reporte_llenados = $conn->query("SELECT llenados.id, llenados.cedulaC, llenados.fecha, llenados.hora, llenados.cantidad FROM llenados");

while ($datos_reporte = $consulta_reporte_llenados->fetch_object()) {    
   $i = $i + 1;
/* TABLA */
   $pdf->Cell(37, 10, utf8_decode("$i"), 1, 0, 'C', 0);
   $pdf->Cell(37, 10, utf8_decode("$datos_reporte->cedulaC"), 1, 0, 'C', 0);
   $pdf->Cell(37, 10, utf8_decode("$datos_reporte->fecha"), 1, 0, 'C', 0);
   $pdf->Cell(37, 10, utf8_decode("$datos_reporte->hora"), 1, 0, 'C', 0);
   $pdf->Cell(37, 10, utf8_decode("$datos_reporte->cantidad"), 1, 1, 'C', 0);  
   }

$pdf->Output('ReporteLlenado.pdf', 'I');
