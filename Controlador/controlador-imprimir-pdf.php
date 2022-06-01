<?php 

require('fpdf/fpdf.php');

class PDF extends FPDF
{
// Cabecera de página
    function Header()
    {
        // Logo
       // $this->Image('logo_pb.png',10,8,33);
        // Arial bold 15
        $this->SetFont('Arial','B',15);
        // Movernos a la derecha
        $this->Cell(60);
        // Título
        $this->Cell(70,10,'Reporte de productores',0,1,'C');
        // Salto de línea
        $this->Ln(20);

        $this->cell(30,10,'Nombre',1,0,'C,',0);
        $this->cell(30,10,'Apellido',1,0,'C,',0);
        $this->cell(30,10,'cedula_p',1,0,'C,',0);
        $this->cell(30,10,'fecha natal',1,0,'C,',0);
        $this->cell(40,10,'correo',1,0,'C,',0);
        $this->cell(30,10,'telefono',1,1,'C,',0);
    }

    // Pie de página
    function Footer()
    {
        // Posición: a 1,5 cm del final
        $this->SetY(-15);
        // Arial italic 8
        $this->SetFont('Arial','I',8);
        // Número de página
        $this->Cell(0,10,'Page '.$this->PageNo().'/{nb}',0,0,'C');
    }

}// fin de la clase pdf


$pdf = new PDF();
$pdf->AddPage();
$pdf->SetFont('Arial','',10);
//$pdf->Cell(40,10,utf8_decode('¡Hola, Mundo!'));

require_once 'Modelo/claseproductor.php';

$objproductor = new Productor();

$resultado = $objproductor->consultarProductor();

foreach ($resultado as $resul) {

  $pdf->cell(30,10,$resul['nombre_p'],1,0,'C,',0);
  $pdf->cell(30,10,$resul['apellido_p'],1,0,'C,',0);
  $pdf->cell(30,10,$resul['cedula_p'],1,0,'C,',0);
  $pdf->cell(30,10,$resul['fecha_p'],1,0,'C,',0);
  $pdf->cell(40,10,$resul['correo_p'],1,0,'C,',0);
  $pdf->cell(30,10,$resul['telefono'],1,1,'C,',0);
}


$pdf->Output();



?>