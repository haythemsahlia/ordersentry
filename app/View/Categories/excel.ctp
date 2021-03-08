<?php
  App::import('Vendor', 'PHPExcel', array('file' => 'PHPExcel.php'));
$phpExcel = new PHPExcel();

    App::import('Controller', 'Missions');
 $missions = new MissionsController;
 
   
$this->PhpExcel->createWorksheet()
    ->setDefaultFont('Calibri', 12);
	
	$objPHPExcel = new PHPExcel();
$objPHPExcel= $this->PhpExcel->getActiveSheet();
 
$objPHPExcel->setTitle("Liste des Tâches");
// define table cells
$table = array(
    array('label' => __('Numéro'), 'filter' => true),
    array('label' => __('Nom'), 'filter' => true),
    array('label' => __('Type'))
);

$objPHPExcel->setCellValue("B2", "                            Liste des Tâches");
$objPHPExcel->getStyle("A2:D2")->applyFromArray(array(
    'font'  => array(
        'bold'  => true,
        'color' => array('rgb' => 'ffffff'),
        'size'  => 13,
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
// add heading with different font and bold text
//////////$this->PhpExcel->addTableHeader($table, array('name' => 'Cambria', 'bold' => true,'row'=>'4'));
 /*
// add data
foreach ($data as $d) {
    $this->PhpExcel->addTableRow(array(
        $d['User']['identifiant'],
        $d['Type']['nom'],
        $d['User']['prenom'],
      //  $d['User']['description'],
      //  $d['User']['modified']
    ));
}
*/
$objPHPExcel->getStyle("A4:D4")->applyFromArray(array(
    'font'  => array(
        'bold'  => true,
        'color' => array('rgb' => '0174DF'),
        'size'  => 12,
        'name'  => 'Arial',
    	'filter' => true			),

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
$objPHPExcel->setCellValue("A4", "Code");
$objPHPExcel->setCellValue("B4", "Description");
$objPHPExcel->setCellValue("C4", "Mission");
$objPHPExcel->setCellValue("D4", "Type");
  


$objPHPExcel->getColumnDimension("A")->setWidth(18);
$objPHPExcel->getColumnDimension("B")->setWidth(52);
$objPHPExcel->getColumnDimension("C")->setWidth(18);
$objPHPExcel->getColumnDimension("D")->setWidth(18);
 
 
//alignement centré
$objPHPExcel->getStyle("A")->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_LEFT);
$objPHPExcel->getStyle("B")->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_LEFT);
$objPHPExcel->getStyle("C")->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_LEFT);
$objPHPExcel->getStyle("D")->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_LEFT);
   

$count=5;
foreach ( $taches as $tache ){
$colA='A'.strval($count);
$colB='B'.strval($count);
$colC='C'.strval($count);
$colD='D'.strval($count);
  
 $code=$tache['Tache']['code'];
$descr= $tache['Tache']['description'];
$miss=$missions->MissionparID( $tache['Tache']['mission']);
  $type=$tache['Tache']['type'];
 
//$objPHPExcel->getActiveSheet()->setCellValue($colA,$username);
$objPHPExcel->setCellValue($colA,$code);
$objPHPExcel->setCellValue($colB,$descr);
$objPHPExcel->setCellValue($colC,$miss);
 $objPHPExcel->setCellValue($colD,$type);
 
	$count++;
}

 $objPHPExcel->setAutoFilter("A4:D4");

// close table and output
$this->PhpExcel->addTableFooter()
    ->output();
	
?>