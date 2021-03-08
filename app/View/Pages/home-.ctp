<?php
 		echo $this->Html->css('jquery-ui');
 		echo $this->Html->script('jquery-1.12.4');
 		echo $this->Html->script('jquery-ui');

?>
  <link rel="stylesheet" href="//code.jquery.com/ui/1.12.0/themes/base/jquery-ui.css">
		 
  <script>
  $( function() {
 $( "#datepicker" ).datepicker({
  dateFormat: "yy-mm-dd"
});    	
   } );
 
  </script>

<?php
   $yesterday= date('Y-m-d', strtotime( '-1 days' )) ;

  App::import('Controller', 'Items');
 $items = new ItemsController;   
 
 App::import('Controller', 'Customers');
 $customers = new CustomersController; 
 
 App::import('Controller', 'Categories');
 $categories = new CategoriesController;
 
  App::import('Controller', 'Products');
 $products = new ProductsController;
 
  App::import('Controller', 'Orders');
 $orders = new OrdersController;
  $date="";
  $Litems=$items->ListeItems(); 
  $Lcustomers=$customers->ListeCustomers(); 
  $Lcategories=$categories->ListeCategories(); 
 // $Lingredients=$products->ListeIngredients(); 
  $options= array('Not Ready','Rready','Packed','Delivered','Cancelled'); $today=date('Y-m-d'); 
echo '  <center><h2>'.$today.'</h2></center>';
echo '<table style="width:300px;" ><tr>';
  echo $this->Form->create('form',array('style'=>'margin-top:30px;margin-bottom:-30px','id'=>'DateForm'));  
  echo  ' <td>'.$this->Form->input('date',array('id'=>'datepicker','label'=>'Date','style'=>'width:150px','dateFormat'=>'Y-m-d'    ,'placeholder'=> $today     )).'</td> '; 
   echo  '<td>'.$this->Form->input('View date',array('style'=>' ','type'=>'submit','name'=>'ADate' ,'label'=>''  )).'</td> ';  
   echo  '<td>'.$this->Form->input('Today',array('style'=>' ','type'=>'submit','name'=>'Today' ,'label'=>''  )).'</td> ';  
   echo  '<td>'.$this->Form->input('Coming',array('style'=>' ','type'=>'submit','name'=>'Coming','label'=>''  )).'</td> ';  

   echo $this->Form->end();   // echo 'Ingredients '.json_encode($Lingredients) ;
 echo ' </tr></table>';
?>
   </br>
   </br>
   </br>
   </br>
  <?php  
$date=$yesterday;
$Lingredients=$products->ListeProductsFuture($yesterday); 
$title='<h3>Coming Orders</h3></br>';

 if  (isset( $_POST['ADate'])|| (isset ($this->data['form']['date'])&&($this->data['form']['date']!="" ) )) {
	 $date=$this->data['form']['date'];   $title='<h3>  Orders Of : '.$date.' </h3></br>'; 
 // $liste=$products->OrdersPerDate($date);  
 $Lingredients=$products->ListeProductsPerDate($date); 
   /* echo 'Ingredients '.json_encode($Lingredients) ; */}
 
  
 if (isset ( $_POST['Today']) ) { $date=$today;
$title= '<h3>  Today ('.$today.')Orders : </h3></br>'; 
  $Lingredients=$products->ListeProductsPerDate($today); 
 
 }   

 if (isset ( $_POST['Coming']) )
 {   $date=$yesterday;
 $title= '<h3> Coming Orders : </h3></br>'; 

	   $Lingredients=$products->ListeProductsFuture($yesterday); 

	 
 }
 echo $title;
 /*
else{
   $date=$yesterday;
   echo '<h3>4  Coming orders : </h3></br>'; 
 //  echo ' yesterday +1 :'.$yesterday;
   $Lingredients=$products->ListeIngredientsFuture($yesterday); 
}
 */
 
 //// echo 'Date :'.$date.'</br>';
/* echo 'Ingredients :'.json_encode($Lingredients);*/
   echo '<table  id="sum_table" class="recap" style="background-color:white;border:1px solid black;margin-top:-15px">
<tr class="titlerow"><th style="background-color:#2E9AFE;color:white;width:150px;max-width:300px!important"><B><center>     Customer   /   Item      </center></B></th>';
 	foreach($Lingredients as $IdItem=>$order)
	{$quantiteinit=0;
			$quantiteinit=$products->QuantiteFuture( $IdItem,$order/*,$date*/) ;  

	if($quantiteinit>0)	{echo '<th style="background-color:'.$categories->ColorById($items->ItemCatbyId($IdItem)).';color:white;"><B><center>'./*$items->ItemById( $IdItem) */ $this->Html->link( $items->ItemById( $IdItem)  ,   array('controller'=>'products','action'=>'edit', $products->ProductID($IdItem,$order))) ;
	echo  $this->Form->postLink(
  $this->Html->image('supp.png', array('style' => 'margin-left:50px')), //le image
  array('controller'=>'products','action' => 'delete',  $products->ProductID($IdItem,$order)), //le url
  array('escape' => false),  
  __('Are you sure to delete the product : %s from the order ?',   $items->ItemById( $IdItem)))  ;    
echo '	</br></br>  ('.$this->Html->link( 'ORDER: '.$order  ,   array('controller'=>'orders','action'=>'edit', $order)).')</br>Date :'.$orders->DateOrder($order).'</center></B></th>';}
}
 echo'</tr>';
$totcust=0;
foreach ($Lcustomers as  $numC=>$nomC)
{  if ((isset ( $_POST['ADate']))||(isset ( $_POST['Today']) )){$totcust=$products->TotIngredCustomer($numC, $date);}else{ $totcust=$products->TotIngredCustomerFuture($numC,$date  );}
   	if (($totcust>0) ) {
 	echo '<tr><td style=" ; "><center><label >'.$this->Html->link( $nomC ,   array( 'controller'=>'customers','action'=>'edit', $numC )) .'</br>'.$customers->CustomerTelById($numC).'    </label></center></td>';
 	foreach($Lingredients as $IdItem=>$order)
	{
		
// $nomitem=$items->NameitemById($IdItem);  
	$quantite=$products->QuantiteItem($numC,$IdItem,$order) ;  
	
  // Color type of order
  	 $statutorder= $orders->StatusOrder($order); 
	$color='#f9f9f9'; 
 		
switch ($statutorder) {
    case 0:
        // echo "Not Ready";  
		$color='#FFCC33';
        break;
    case 1:
         //echo "Ready"; 
		 $color='#CCFF00';
        break;
    case 2:
        // echo "Packed"; 
		$color='#33CC33';
        break;
	case 3:
        // echo "Delivered"; 
		$color='#3399FF';
        break;
	case 4:
      //  echo "Cancelled";
	  $color='#FF6633';
        break;
}
	//	echo 'Color  : '.$color .'</br>'; 
  if(($quantite>0) ){echo '<td style="text-align:center;background-color:'.$color.';font-size:18px;">'. $quantite.'</td>'; }
  else { echo '<td style="text-align:center;background-color:#f9f9f9">0</td>';}	//here
	 
////echo '<td>'.$IdItem.'nom:'.$nomitem.'</td>';
	 } 
	
//} 

  

}  /*
if (($date =="")    ) {
	
	echo '<tr><td style="background-color:#3C8DBC;color:white; "><center><label >'.$nomC.'</label></center></td>';
 	foreach($Lingredients as $IdItem=>$order)
	{//$nomitem=$items->NameitemById($IdItem);  
	$quantite=$products->QuantiteItem($numC,$IdItem,$order) ;  
	
  // Color type of order
  	 $statutorder= $orders->StatusOrder($order); 
	$color='#f9f9f9'; 
 		
switch ($statutorder) {
    case 0:
        // echo "Not Ready";  
		$color='#FFFF99';
        break;
    case 1:
         //echo "Ready"; 
		 $color='#CCFF00';
        break;
    case 2:
        // echo "Packed"; 
		$color='#33CC33';
        break;
	case 3:
        // echo "Delivered"; 
		$color='#3399FF';
        break;
	case 4:
      //  echo "Cancelled";
	  $color='#FF6633';
        break;
}
	//	echo 'Color  : '.$color .'</br>'; 
	 if($quantite>0){echo '<td style="text-align:center;background-color:'.$color.'">'. $quantite.'</td>'; }
	 else { echo '<td style="text-align:center;background-color:#f9f9f9">0</td>';}	//here
	 	} 
	
}*/
}
/*echo '</tr><tr class="totalColumn" style="background-color:grey;color:white"><td><B><center>Total</center><B></td>';
 	foreach($Lingredients as $IdItem=>$order)
	{echo '<td style="background-color:grey;color:white" class="val totalCol"></td>';}*/
echo '</tr></table>';
 
// echo 'tot' . $fiches->TotHeuresIntervMission('1','1');

 echo '</br></br><table style="background-color:white!important;font-weight:bold;font-size:16px;;width:350px;"><tr><td> <span style="color:#FFCC33">Not Ready </span></td><td><span style="color:#CCFF00"> Ready </span></td><td><span style="color:#33CC33"> Packed </span></td><td><span style="color:#3399FF"> Delivered </span></td><td><span style="color:#FF6633"> Cancelled </span></td></tr></table>';
?>
<script src="//code.jquery.com/jquery-1.12.0.min.js"></script>
<script>

public function send()
{
alert('test');
document.getElementById("DateForm").submit();	
	
}
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


<style> a:hover {color:#330033!important;}  </style>

 


 