
<html>
<head>
	<script src="http://oe1.enterpriseesolutions.com/keyboard/js/jquery-latest.min.js"></script>
	<script src="http://oe1.enterpriseesolutions.com/keyboard/js/jquery-ui.min.js"></script> 
<style>
#navbar-collapse{display:none!important;}
.container-fluid{display:none!important;}
.navbar{display:none!important;}
.main-header no-print{display:none!important;}
table {
    width: 100%;
    border-collapse: collapse;
}

table, td, th {
    border: 1px solid black;
    padding: 5px;
}

th {text-align: left;}
</style>
</head>
<body>
<?php
//$q = intval($_GET['q']);
?>
<?php App::import('Controller', 'Items');
 $items = new ItemsController; 
 App::import('Controller', 'Products');
 $prod = new ProductsController;
  App::import('Controller', 'Orders');
 $orders = new OrdersController;
  App::import('Controller', 'Customers');
 $customers = new CustomersController;
 ?>
   <?php $products=$prod->ListeProductsOrder($q); 
   //echo json_encode($products);
   ?>
   <?php
		/*$order=;
$numC=$orders->customerorder($order,$date);
  $nomC=$customers->CustomerById($numC);*/
  $ordertime = $orders->TimeOrder($q);
  $date=$orders->customerorderdate($q);
  $numC=$orders->customerorder($q,$date);
  $mobile=$customers->CustomerTelById($numC);
  $nomC=$customers->CustomerById($numC);
  
  $ordertime=date('h:i A', strtotime($ordertime));
  if ($ordertime === "11:59 PM") {$ordertime="P/U";}
  echo'<div class="modal-header" style="border-bottom-color:rgb(229, 229, 229);border-bottom-style:solid;border-bottom-width:1px;">';
  echo'<h4><span style="margin-right: 20px;color:black;">Customer :</span><span style="margin-right: 20px;">'.$nomC.' </span><span>'.$mobile.'</span></h4>';
  echo'<h4><span style="margin-right: 60px;color:black;">Time :</span><span>'.$ordertime.'</span></h4>';
 echo '</div>';
 
		?>
     <div id="checkboxes">
	 
 <table id="myTable" class="table table-fixedheader table-bordered table-striped">
            <thead style="color:white!important;">
                <tr id="idtr0">
		<!--<th style="width:15%"><center>Order<?php  // echo $this->Paginator->sort('order', 'Order');?>  </center></th>-->
		<th style="width:50%"><center>Item<?php  //echo $this->Paginator->sort('item', 'Item') ;?>  </center></th>
		
   			<?php if ($this->Session->read('Auth.User.role')=='Admin')
        {echo '<th style="width:50%;padding-left: 0px;padding-right: 0px;"><center>Pack<input name="checkAll" type="checkbox" style="width:20px!important;" onclick="checkAll(this);"></center></th>';} ?>
		</tr>
            </thead>
            <tbody style="height:auto!important;">
                <?php $countp=0; $prods="";?>
             
		<?php foreach($products as $product): ?>				
		<?php $countp ++;?>
		<?php if($countp % 2): echo '<tr id="idtr">'; else: echo '<tr id="idtr" class="zebra">' ?>
		<?php endif; ?>
 		
			 <?php $prods=$prods+$product+'/' ; ?>
		 <td class="productselect" style="height:63px!important;padding-top:18px!important;width:50%;text-align: center;font-size: 130%;font-weight: bold;color:#1896df;"
		
		 onclick="prodselect(this);" onMouseOver="this.style.cursor='pointer';" >
      <?php  echo $items->ItemById(  $product ); ?>
     </td> 
		 
   				<?php if ($this->Session->read('Auth.User.role')=='Admin')
        {
 		 	 if($prod->statusProduct2(  $product,$q )==2){
				 echo '<td style="width:50%;" ><center>';
				 echo'<img src="/img/pack.png" style="height: 45px;"></img>';
			 }
			 else{
				 echo '<td style="width:50%;padding-left: 22%;" ><center>';
				 echo'<input type="checkbox" style="width:20px;" id="'.$product.'" name="'.$product.'"></input>';
				 
				 
				 
		/*echo $this->Form->postLink(
  $this->Html->image('topack.png', array('style'=>'height: 45px;','alt' => __('ToPack'))), //le image
  array('controller'=>'products','action' => ''), //le url
			 array('escape' => false));*/

			 } echo '</center></td>'; }?>
		</tr>
		<?php endforeach; ?>
		<?php unset($product); ?>
             </tbody>  
        </table>
		</div>
		<center><button type="button" class="btn btn-success btn-filter" id="packproduct2" onclick="fnpack(<?php echo $q ?>);" style="margin-right:4px;"><i class="fa fa-fw fa-inbox"></i> Pack Products</button>
		<button type="button" class="btn btn-info" id="checkout2"  onclick="fncheckout(<?php echo $q ?>);" data-title="Check Out Order" ><i class="fa fa-fw fa-check-square-o"></i> Check Out</button></center>

 		
</body>
</html>
