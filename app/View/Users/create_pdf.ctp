<?php

ob_start(); 
$this->autoLayout = false;

App::import('Vendor','xtcpdf');
 
$pdf = new XTCPDF('L', PDF_UNIT, 'A4', true, 'UTF-8', false);

$pdf->SetMargins (15, 13, 15, true);
// set default header data
$pdf->SetHeaderMargin(3);
 	
$pdf->SetHeaderData('', '', 'Course informations :  ');
$pdf->SetFooterMargin(PDF_MARGIN_FOOTER);

$pdf->AddPage();
 /*
$html = '</pre>
<h1>Professors List :</h1>
<pre>';*/
$pdf->Write(0, '', '', 0, 'L', true, 0, false, false, 0);
 


$pdf->writeHTML('tesst', true, false, false, false, '');


$pdf->lastPage();
ob_end_clean();
echo $pdf->Output('Course_info.pdf', 'D');?>