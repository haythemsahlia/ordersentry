<?php

   App::import('Controller', 'Items');
 $items = new ItemsController;   
 
 App::import('Controller', 'Customers');
 $customers = new CustomersController; 
 
 App::import('Controller', 'Categories');
 $categories = new CategoriesController;
 
  App::import('Controller', 'Ingredients');
 $ingredients = new IngredientsController;
 
  $Litems=$items->ListeItems(); 
  $Lcustomers=$customers->ListeCustomers(); 
  $Lcategories=$categories->ListeCategories(); 
  $Lingredients=$ingredients->ListeIngredients(); 
 
  echo $this->Form->create('form',array('style'=>'margin-top:30px;margin-bottom:-30px'));  
  echo $this->Form->input('date',array('label'=>'','type'=>'date')); 
  echo $this->Form->submit(); 
  echo $this->Form->end();    echo 'Ingredients '.json_encode($Lingredients) ;
?>
   </br>
   </br>
   </br>
   </br>
  <?php  
  $date="";
 if (isset ($this->data['form']['date']) ) {$date=$this->data['form']['date'];
    $Lingredients=$ingredients->ListeIngredientsPerDate(); 
  }
   echo '<table  id="sum_table" class="recap" style="background-color:white;border:1px solid black;margin-top:-15px">
<tr class="titlerow"><th style="background-color:#2E9AFE;color:white;width:150px;"><B><center>     Customer   /   Item      </center></B></th>';
 	foreach($Lingredients as $IdItem=>$order)
	{echo '<th style="background-color:'.$categories->ColorById($items->ItemCatbyId($IdItem)).';color:white;"><B><center>num order: '.$order.'/ Nom Item'.$items->ItemById( $IdItem).'</center></B></th>';}
 echo'</tr>';
 
foreach ($Lcustomers as  $numC=>$nomC)
{ 
  	  echo '<tr><td style="background-color:#3C8DBC;color:white; "><center><label >'.$nomC.'</label></center></td>';
/*	foreach($Litems as $Num=>$Nom)
	{
 		 
	// 	echo '<td>'.$Nom.'</td>';
	if (($doss!="")&&($mill!="")){echo '<td class="rowDataSd val " style=" width:'.$width.'%">'. $fiches->TotalHeuresIntervDossMission1($num,$doss,$Nom.$mill).'</td>';  }
		else { if($mill!=""){echo '<td class="rowDataSd val" style=" width:'.$width.'%">'. $fiches->TotalHeuresIntervMission1($num,$Nom.$mill).'</td>';  }}
	}*/
	
} echo '</tr><tr class="totalColumn" style="background-color:grey;color:white"><td><B><center>Total</center><B></td>';
 	foreach($Litems as $NumItem=>$NomItem)
	{echo '<td style="background-color:grey;color:white" class="val totalCol"></td>';}
echo '</tr></table>';
 
// echo 'tot' . $fiches->TotHeuresIntervMission('1','1');

 
?>
<script src="//code.jquery.com/jquery-1.12.0.min.js"></script>
<script>
    /*   var totals=[0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0];
         $(document).ready(function(){
            var $dataRows=$("#sum_table tr:not('.totalColumn, .titlerow')");
             $dataRows.each(function() {
                $(this).find('.rowDataSd').each(function(i){        
                    totals[i]+=parseInt( $(this).html());
                });
            });
            $("#sum_table td.totalCol").each(function(i){  
                $(this).html("  "+totals[i]);
            });

			 
        });*/
</script>








 