<?php
App::import('Vendor', 'PHPExcel', array('file' => 'PHPExcel.php'));
$phpExcel = new PHPExcel();

$sheet = $phpExcel->getActiveSheet();
$sheet->setTitle("My Sheet");
 
$date=date('d/M/Y_H:i:s ');
header("Content-Type: application/vnd.ms-excel");
header("Content-Disposition: attachment; filename=\"Liste Intervenants ".$date.".xls\"");

$sheet->setCellValue("E2", "   Liste Intervenants ");
 
// changer stye

$sheet->getStyle("C2:I2")->applyFromArray(array(
    'font'  => array(
        'bold'  => true,
        'color' => array('rgb' => 'ffffff'),
        'size'  => 15,
        'name'  => 'Verdana',
    				),

      'borders' => array(
        'left' => array(
          'style' => PHPExcel_Style_Border::BORDER_THIN,
        ),
        'right' => array(
          'style' => PHPExcel_Style_Border::BORDER_THIN,
        ),
        'bottom' => array(//BORDER_NONE
          'style' => PHPExcel_Style_Border::BORDER_THIN,
        ),
        'top' => array(
          'style' => PHPExcel_Style_Border::BORDER_THIN,
        ), 
      ),
      'fill' => array(
        'type' => PHPExcel_Style_Fill::FILL_SOLID,
        'startcolor' => array(
          'rgb' => '00BFFF',//FFFFFFCC
        ),
      ),

    ));
$sheet->getStyle("A4:K4")->applyFromArray(array(
    'font'  => array(
        'bold'  => true,
        'color' => array('rgb' => '0174DF'),
        'size'  => 13,
        'name'  => 'Arial'
    				),

      'borders' => array(
        'left' => array(
          'style' => PHPExcel_Style_Border::BORDER_THIN,
        ),
        'right' => array(
          'style' => PHPExcel_Style_Border::BORDER_THIN,
        ),
        'bottom' => array(//BORDER_NONE
          'style' => PHPExcel_Style_Border::BORDER_THIN,
        ),
        'top' => array(
          'style' => PHPExcel_Style_Border::BORDER_THIN,
        ), 
      ),
      'fill' => array(
        'type' => PHPExcel_Style_Fill::FILL_SOLID,
        'startcolor' => array(
          'rgb' => 'D1FBFF',
        ),
      ),

    ));
// entetes
$sheet->setCellValue("A4", "Identifiant");
$sheet->setCellValue("B4", "Nom");
$sheet->setCellValue("C4", "Prenom");
$sheet->setCellValue("D4", "Qualification");
$sheet->setCellValue("E4", "Email");
//largeur colonnes
$sheet->getColumnDimension("A")->setWidth(18);
$sheet->getColumnDimension("B")->setWidth(18);
$sheet->getColumnDimension("C")->setWidth(18);
$sheet->getColumnDimension("D")->setWidth(18);
$sheet->getColumnDimension("E")->setWidth(18);
//alignement centré
$sheet->getStyle("A4")->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_CENTER);
$sheet->getStyle("B4")->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_CENTER);
$sheet->getStyle("C4")->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_CENTER);
$sheet->getStyle("D4")->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_CENTER);
$sheet->getStyle("E4")->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_CENTER);
//$phpExcel->setActiveSheetIndex(0);
// fusionner cellules
//$sheet->mergeCells("C2:I2");
//changer largeur
//$sheet2->getColumnDimension("A")->setWidth(40);
$count=5;
foreach ( $users as $user ){
$colA='A'.strval($count);
$colB='B'.strval($count);
$colC='C'.strval($count);
$colD='D'.strval($count);
$colE='E'.strval($count);
	$username=$user['User']['username']; 
	$Nom=$user['User']['Nom']; 
	$Prenom=$user['User']['Prenom']; 
	$qualification=$user['User']['qualification']; 
	$email=$user['User']['email']; 
 
	$phpExcel->getActiveSheet()->setCellValue($colA,$username);
	$phpExcel->getActiveSheet()->setCellValue($colB,$Nom);
	$phpExcel->getActiveSheet()->setCellValue($colC,$Prenom);
	$phpExcel->getActiveSheet()->setCellValue($colD,$qualification);
	$phpExcel->getActiveSheet()->setCellValue($colE,$email);
 
	$count++;
}
// ajout filtre
 $sheet->setAutoFilter("A4:E4");
 /*
 //creer dexieme page
$sheet2 = $phpExcel->createSheet();
// nommer la page
$sheet2 ->setTitle("Sheet N° 2");
 // modifier valeur cellule
 $phpExcel->getActiveSheet()->setCellValue('A4','1');
 // appliquer fonction (somme)
$phpExcel->getActiveSheet()->setCellValue("A5", "=SUM(A1:A4)");
// fusionner cellules
$phpExcel->getActiveSheet()->mergeCells("A1:E3");
//changer largeur
$sheet2->getColumnDimension("A")->setWidth(40);
// regler largeur automatique
 $sheet2->getColumnDimension("A")->setAutoSize(true);
// changer alignement à droite
$sheet2->getStyle("G1")->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_RIGHT);
// changer stye
$sheet2->getStyle("A1:F1")->applyFromArray(array("font" => array( "bold" => true)));
//ajouter sort
*/
//$sheet2->setAutoFilter("A1:C9");
// changer auteur
$phpExcel ->getProperties()->setCreator("eSolutions");
// changer titre
$phpExcel->getProperties()->setTitle("Title2");
 
$objWriter = PHPExcel_IOFactory::createWriter($phpExcel, "Excel5");
$objWriter->save("php://output");
exit;
?>