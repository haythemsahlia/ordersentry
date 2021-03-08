<link href="http://ordersentry.enterpriseesolutions.com/keyboard/css/jquery-ui.min.css" rel="stylesheet">
	<!-- still using jQuery v2.2.4 because Bootstrap doesn't support v3+ -->
	<script src="http://ordersentry.enterpriseesolutions.com/keyboard/js/jquery-latest.min.js"></script>
	<script src="http://ordersentry.enterpriseesolutions.com/keyboard/js/jquery-ui.min.js"></script> 
<!-- 	 <script src="http://ordersentry.enterpriseesolutions.com/keyboard/js/jquery-migrate-3.0.0.min.js"></script> -->

	<!-- keyboard widget css & script (required) -->
	<link href="http://ordersentry.enterpriseesolutions.com/keyboard/css/keyboard.css" rel="stylesheet">
	<script src="http://ordersentry.enterpriseesolutions.com/keyboard//js/jquery.keyboard.js"></script>

	<!-- keyboard extensions (optional) Autocomplete 
	<script src="http://ordersentry.enterpriseesolutions.com/keyboard/js/jquery.mousewheel.js"></script>
	<script src="http://ordersentry.enterpriseesolutions.com/keyboard/js/jquery.keyboard.extension-typing.js"></script>
	<script src="http://ordersentry.enterpriseesolutions.com/keyboard/js/jquery.keyboard.extension-autocomplete.js"></script>
	<script src="http://ordersentry.enterpriseesolutions.com/keyboard/js/jquery.keyboard.extension-caret.js"></script> -->

	<!-- demo only 
	<link rel="stylesheet" href="http://ordersentry.enterpriseesolutions.com/keyboard/css/bootstrap.min.css">
	<link rel="stylesheet" href="http://ordersentry.enterpriseesolutions.com/keyboard/css/font-awesome.min.css">-->
 <!--	<link href="http://ordersentry.enterpriseesolutions.com/keyboard/css/demo.css" rel="stylesheet">-->
	<link href="http://ordersentry.enterpriseesolutions.com/keyboard/css/tipsy.css" rel="stylesheet">
	<link href="http://ordersentry.enterpriseesolutions.com/keyboard/css/prettify.css" rel="stylesheet">
	<script src="http://ordersentry.enterpriseesolutions.com/keyboard/js/bootstrap.min.js"></script>
	<!--<script src="http://ordersentry.enterpriseesolutions.com/keyboard/js/demo.js"></script>-->
	<script src="http://ordersentry.enterpriseesolutions.com/keyboard/js/jquery.tipsy.min.js"></script>
	<script src="http://ordersentry.enterpriseesolutions.com/keyboard/js/prettify.js"></script> <!-- syntax highlighting -->
<?php
// *******  Index PRODUCT *******************************

  App::import('Controller', 'Orders');
 $orders = new OrdersController;
 // Liste Misions 
 $options=$orders->ListeOrders();
  
  App::import('Controller', 'Items');
 $items = new ItemsController;
 
 $options2=$items->ListeItems();
 
 $qualifiers=array('Regular','Hot', 'Mild',  'Very Hot', 'Extra Hot' );
   App::import('Controller', 'Categories');
 $cats = new CategoriesController;
 $categories= $cats->ListeCats();
  
//echo $this->Html->script('jquery-1.12.4');
 //   echo $this->Html->script('jquery-ui');
// echo $this->Html->script('bootstrap');
// echo $this->Html->script('jquery.numpad');
 $def="";
 if (isset ($id)) {$def=$id; } 
 ?>
<!--<img  id="add" style="float:right;margin-right:100px;" src="http://ordersentry.enterpriseesolutions.com/app/webroot/img/add.png"></img>-->
<body onload="addclr();">
<div class="users form index" style="margin-top:-30px">
<h1 class="no-print" style="color:#367FA9">Products <?php $def=""; if (isset ($id)/*||($id!=null)*/) {echo 'of the Order '. $id.'</h1>'; $def=$id; }else{echo 'of Orders</h1>';   echo $this->Filter->filterForm('Order', array('legend' => 'Recherche'));} ?>
 

</div>	
<div class="panel panel-default">
    <div class="panel-body">
        <table id="myTable" class="table table-fixedheader table-bordered table-striped">
            <thead style="color:white!important;">
                <tr>
		<th style="width:15%"><center><h4 style="margin-top:0px;"> <?php echo $this->Paginator->sort('order', 'Order');?> </h4> </center></th>
		<th style="width:20%"><center><h4 style="margin-top:0px;"> <?php echo $this->Paginator->sort('item', 'Item') ;?></h4>  </center></th>
		<th style="width:15%"><center><h4 style="margin-top:0px;"> <?php echo $this->Paginator->sort('quantity', 'Quantity');?></h4>  </center></th>
		<th style="width:35%"><center><h4 style="margin-top:0px;"> <?php echo $this->Paginator->sort('instructions', 'Instructions') ; ?> </h4></center></th> 	
 
   			<?php if ($this->Session->read('Auth.User.role')=='Admin')
        {echo '<th style="width:15%"><h4 style="margin-top:0px;"> <center>Delete</center></h4></th>';} ?>
		</tr>
            </thead>
            <tbody style="height:250px">
                <?php $countp=0; ?>
                <?php if (isset($products)) { ?>
		<?php foreach($products as $product): ?>				
		<?php $countp ++;?>
		<?php if($countp % 2): echo '<tr>'; else: echo '<tr class="zebra">' ?>
		<?php endif; ?>
 		
			 	<td  style="width:15%;text-align: center;"><h4 style="margin-top:5px;"> <?php echo $this->Html->link(  sprintf("%06d", $product['Product']['order'] ) ,   array('controller'=>'orders','action'=>'edit', $product['Product']['order']),array('escape' => false) );?></h4></td>
		 <td style="width:20%;text-align: center;"><h4 style="margin-top:5px;"> <?php    echo $this->Html->link($items->ItemById(  $product['Product']['item'] ),   array('controller'=>'products','action'=>'edit', $product['Product']['id'], $def,'product'));?> </h4></td> 
		 <td style="width:15%;text-align: center;"><h4 style="margin-top:5px;"> <?php echo  $product['Product']['quantity'] ?></h4> </td>                                
		  <td style="width:35%;text-align: center;"><h4 style="height:19px!important;margin-top:5px;"> <?php echo  $product['Product']['instructions'] ?> </h4></td> 
 
   				<?php if ($this->Session->read('Auth.User.role')=='Admin')
        {echo '<td style="width:15%" ><h4 style="margin-top:5px;"> <center>';
 		 	 
		echo $this->Form->postLink(
  $this->Html->image('supp.png', array('alt' => __('Delete'))), //le image
    array('controller'=>'products','action' => 'delete',$product['Product']['id'],$def,'product'), //le url
 
  array('escape' => false),  
  __('Are you sure to delete the product : %s?', $items->ItemById($product['Product']['item'])) //le confirm
);  echo '</center></h4></td>'; }?>
		</tr>
		<?php endforeach; ?>
		<?php unset($product);} ?>
             </tbody>
        </table>
 				
    </div>
</div>
</body>
 
<style>
#tab td {height:30px!important;padding-top:0px!important;}
#tab input{height:30px!important;font-size:15px!important;cursor:pointer;text-weight:bold;text-align:center;}
</style>
<style>
 #myTable td{height:50px!important;
    overflow: hidden;
    text-overflow: ellipsis;
    white-space: nowrap;}th a {color:white!important;}
 table.table-fixedheader {
    width: 100%;   
}
/*table td{height:35px!important;}*/
 
 table.table-fixedheader, table.table-fixedheader>thead, table.table-fixedheader>tbody, table.table-fixedheader>thead>tr, table.table-fixedheader>tbody>tr, table.table-fixedheader>thead>tr>th, table.table-fixedheader>tbody>td {
    display: block;
}
table.table-fixedheader>thead>tr:after, table.table-fixedheader>tbody>tr:after {
    content:' ';
    display: block;
    visibility: hidden;
    clear: both;
}
 
 table.table-fixedheader>tbody {
    overflow-y: scroll;
     
}  
   table.table-fixedheader>thead {
    overflow-y: scroll;    
}
 
 table.table-fixedheader>thead::-webkit-scrollbar {
    background-color: inherit;
}
 
table.table-fixedheader>thead>tr>th:after, table.table-fixedheader>tbody>tr>td:after {
    content:' ';
    display: table-cell;
    visibility: hidden;
    clear: both;
}
 
 table.table-fixedheader>thead tr th, table.table-fixedheader>tbody tr td {
    float: left;
    word-wrap:break-word;
}
   </style>
<script>
	$('.dropdown-toggle').dropdown();
function addclr(){
	$('#OrderFilter table tr:last').append('<td><input type="submit" value="CLR" onclick="btnclr();" style="background:#3c8dbc!important;color:white; margin-top: 30px;    padding-top: 8px;padding-bottom: 8px;font-size: 16px!important;"/></td>');
	
}
function btnclr(){
	document.getElementById('ProductOrder').value="";
	document.getElementById('ProductItem').value="";


}
      $('#ProductOrder').keyboard({ layout: 'num',autoAccept:1 });
	 
	  </script >
<style>
	.ui-menu-item-wrapper{    font-size: 38px!important;}
.ui-menu-item{    font-size: 38px!important;}
.ui-keyboard-button{padding:0px 0px 0px 0px!important;width:80px!important;height:80px!important;
    margin-left: 5px;
    margin-right: 5px;
    margin-bottom: 5px;
    margin-top: 5px;
}
	.ui-keyboard-space{min-width:190px!important;}
	.ui-keyboard-text{font-size:40px!important;}
	.ui-keyboard-shift{width:100px!important;}
.ui-autocomplete {     height: 600px!important;}
	.ui-keyboard-bksp{width:90px!important;}
</style>