<link href="http://ordersentry.enterpriseesolutions.com/keyboard/css/jquery-ui.min.css" rel="stylesheet">
	<!-- still using jQuery v2.2.4 because Bootstrap doesn't support v3+ -->
	<script src="http://ordersentry.enterpriseesolutions.com/keyboard/js/jquery-latest.min.js"></script>
	<script src="http://ordersentry.enterpriseesolutions.com/keyboard/js/jquery-ui.min.js"></script> 
<!-- 	 <script src="http://ordersentry.enterpriseesolutions.com/keyboard/js/jquery-migrate-3.0.0.min.js"></script> -->

	<!-- keyboard widget css & script (required) -->
	<link href="http://ordersentry.enterpriseesolutions.com/keyboard/css/keyboard.css" rel="stylesheet">
	<script src="http://ordersentry.enterpriseesolutions.com/keyboard//js/jquery.keyboard.js"></script>
	<link href="http://ordersentry.enterpriseesolutions.com/keyboard/css/tipsy.css" rel="stylesheet">
	<link href="http://ordersentry.enterpriseesolutions.com/keyboard/css/prettify.css" rel="stylesheet">
	<script src="http://ordersentry.enterpriseesolutions.com/keyboard/js/bootstrap.min.js"></script>
	<!--<script src="http://ordersentry.enterpriseesolutions.com/keyboard/js/demo.js"></script>-->
	<script src="http://ordersentry.enterpriseesolutions.com/keyboard/js/jquery.tipsy.min.js"></script>
	<script src="http://ordersentry.enterpriseesolutions.com/keyboard/js/prettify.js"></script> <!-- syntax highlighting -->

<div class=" form">
 <?php
  App::import('Controller', 'Orders');
 $orders = new OrdersController;
 // Liste Misions 
 $options=$orders->ListeOrders();
  
  App::import('Controller', 'Items');
 $items = new ItemsController;
 // Liste Misions 
 $options2=$items->ListeItems();
 
 $qualifiers=array('Regular','Hot', 'Mild',  'Very Hot', 'Extra Hot' );
  $statusoptions= array('Not Ready','Rready','Packed','Delivered','Cancelled');
 ?>
<div style="background-color:white!important;margin-left:30px;">

  <div class=" form" style="margin-left:30px;margin-right:50px;width:600px;float:left;background-color:white!important;padding:30px;border:1px solid black;border-radius: 25px;">

<?php echo $this->Form->create('Product' ); ?>
<fieldset>
         <h1 style="color:#3C8DBC"><?php echo __('   Product of the order '); ?></h1></br>
 		 <table>
<tr><td><label>Order</label></td><td><?php echo $this->Form->select('order' ,$options  ,array('label'=>'','style'=>' ;margin-left:-2px' ));;?></td></tr>
<tr><td><label>Item</label></td><td><?php echo $this->Form->select('item' ,$options2 ,array('label'=>'','style'=>' ;margin-left:-2px' ));;?></td></tr>
<tr><td><label>Quantity</label></td><td><?php echo $this->Form->input('quantity' ,array('label'=>'','style'=>'width:70px; ;margin-left:-2px','type'=>'number' ));;?></td></tr>
<tr><td><label>Instructions</label></td><td><?php echo $this->Form->input('instructions' ,array('label'=>'','style'=>' ;text-align:left;','type'=>'textarea'  ));;?></td></tr>
<tr><td><label>Status</label></td><td><?php echo $this->Form->select('status' ,$statusoptions, array('label'=>'', 'style'=>' ;text-align:left;'   ));;?></td></tr>
 </table>
        <?php  		echo $this->Form->submit('Save', array('class' => 'form-submit',  'title' => 'Clic here to edit the product    ') ); ?>
    </fieldset>
<?php echo $this->Form->end(); ?>
</div>
</div>
<script>
		$('.dropdown-toggle').dropdown();
      $('#ProductQuantity').keyboard({ layout: 'num' });
      $('#ProductInstructions').keyboard({ layout: 'qwerty' });
</script >
<style>
.ui-keyboard-button{padding:0px 0px 0px 0px!important;width:80px!important;height:80px!important;
    margin-left: 5px;
    margin-right: 5px;
    margin-bottom: 5px;
    margin-top: 5px;
}
	.ui-keyboard-space {
    width: 250px!important;
    }
</style>