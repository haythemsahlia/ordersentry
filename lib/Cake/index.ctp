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

<div class="users form index" style="margin-top:-30px">
<h1 class="no-print" style="color:#367FA9">All Orders </h1><img  id="add" style="float:right;margin-left:50px;" src="http://ordersentry.enterpriseesolutions.com/app/webroot/img/add.png"></img>

<?php
     echo $this->Filter->filterForm('Order', array('legend' => 'Recherche'));  
 $options= array('Not Ready','Ready','Packed','Delivered','Cancelled');

   	   App::import('Controller', 'Customers');
 $customers = new CustomersController;
   	$cust=$customers->ListeCustomers();
	/** here */
?>
 
</div>	
<div class="panel panel-default">
    <div class="panel-body">
        <table id="myTable" class="table table-fixedheader table-bordered table-striped">
            <thead style="color:white!important;">
                <tr>
			<th style="width:15%"><center><?php echo $this->Paginator->sort('id', 'ID');?>  </center></th>
 			 <th style="width:15%"><center><?php echo $this->Paginator->sort('date', 'Date')  ; ?></center></th>	
			 <th style="width:15%"><center><?php echo $this->Paginator->sort('time', 'Time') ; ?></center></th>
			 <th style="width:15%"><center><?php echo $this->Paginator->sort('customer', 'Customer') ; ?></center></th>
			 <th style="width:15%"><center><?php echo $this->Paginator->sort('status', 'Status') ; ?></center></th>
			 <th style="width:15%"><center>Products</center></th>
  
   			<?php if ($this->Session->read('Auth.User.role')=='Admin')
        {echo '<th style="width:10%"><center>Delete</center></th>';} ?>
		</tr>
            </thead>
            <tbody style="height:250px">
                <?php $count=0; ?>
                <?php if (isset($orders)) { ?>
		<?php foreach($orders as $order): ?>				
		<?php $count ++;?>
		<?php if($count % 2): echo '<tr>'; else: echo '<tr class="zebra">' ?>
		<?php endif; ?>
		<td  style="width:15%;text-align: center;"><?php echo $this->Html->link( $order['Order']['id']  ,   array('action'=>'edit', $order['Order']['id']),array('escape' => false) );?></td>
		<td style="width:15%;text-align: center;"> <?php echo $order['Order']['date'] ;?> </td>  
		<td style="width:15%;text-align: center;"> <?php echo $order['Order']['time'] ;?> </td>  
		<td style="width:15%;text-align: center;"> <?php echo $customers->CustomerById($order['Order']['customer'] );?> </td>  
		<td style="width:15%;text-align: center;"> <?php echo $options[$order['Order']['status']] ;?> </td>  
		<td style="width:15%;text-align: center;"> <?php echo $this->Form->postLink(
  $this->Html->image('modif.png', array('alt' => __('Edit'))), //le image
  array('controller'=>'products','action' => 'index', $order['Order']['id']), //le url
  array('escape' => false)   
); 		?> 	 
	 </td>  
 
   				<?php if ($this->Session->read('Auth.User.role')=='Admin')
        {echo '<td style="width:10%" ><center>';
 		 	 
		echo $this->Form->postLink(
  $this->Html->image('supp.png', array('alt' => __('Delete'))), //le image
  array('action' => 'delete', $order['Order']['id']), //le url
  array('escape' => false),  
  __('Are you sure to delete the order : %s?', $order['Order']['id']) //le confirm
);  echo '</center></td>'; }?>
		</tr>
		<?php endforeach; ?>
		<?php unset($order);} ?>
             </tbody>
        </table>
 
</div>


   <!--link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css"-->
  <script src="//code.jquery.com/jquery-1.10.2.js"></script>
  <script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
     <script language="JavaScript">
 
  $(function() {
  <?php if (isset($_POST['add'])){echo "$('#myModal').modal('show');";
            echo "$('#datepicker').val('".$_POST['add']."');";
        unset($_POST);
        } ?>
  
  $("#times").click(function() {
  $('#myModal2').modal('show');
  });
 
   $("#add").click(function() {
  $('#myModal').modal('show');
  });
 
 });
 </script> 
 
  
<style>
#tab td {height:30px!important;padding-top:0px!important;}
#tab input{height:30px!important;font-size:15px!important;cursor:pointer;text-weight:bold;text-align:center;}
</style>
<script language="JavaScript">
function timing(elm)
 { 
var idelm=elm.id;
var val =document.getElementById(idelm).value ;
document.getElementById('temps').value=val; 
  $('#myModal2').modal('hide');

 }
 
 function customer(elm)
 { 

 liste = document.getElementById('cust');
 liste.options.selectedIndex = elm;
   $('#myModal3').modal('hide');
 }
 </script>
 
<div class="modal" id="myModal">
	<div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
		<center><h4 class="modal-title" id="addordertitle" style="color:#0B8EB6; ;">Add an order </h4></center>        </div><div class="container"></div>
        <div class="modal-body form">
 

<?php echo $this->Form->create('Order',array('action'=>'add')); ?></br>
<fieldset style="margin-left:50px">
 <table>
 <tr><td><label>Date</label></td><td><?php echo $this->Form->input('date' ,array('type'=>'text','label'=>'','id'=>'datepicker','style'=>' ;margin-left:-2px;width:150px;','default'=> date('Y-m-d') ));;?></td></tr>
<tr><td><label>Time</label></td><td><?php echo $this->Form->time('time' ,array('label'=>''  ,'style'=>' ;text-align:left;font-size:14px;font-weight:blod;' ,'id'=>'temps','onfocusout'=>''  ));;?></td><td>  <?php echo $this->Html->image('heure.png',array('id'=>'times')) ;?> </td></tr>
<tr><td><label>Customer</label></td><td><?php echo $this->Form->input('customer', ['type' => 'text','id'=>'customer_id']);?></td><td>  <?php echo $this->Html->image('user3.png',array('id'=>'users','style'=>'margin-left:5px;')) ;?> </td><td>  <?php echo $this->Html->image('details_open.png',array('id'=>'adduser','style'=>'margin-left:5px;')) ;?> </td></tr>
<tr><td><label>Status</label></td><td><?php echo $this->Form->select('status' ,$options, array('label'=>'', 'style'=>' ;text-align:left;', 'default'=>'0', 'selected'=>'1'  ));;?></td></tr>
 </table>
 <?php  		echo $this->Form->submit('Add  ', array('class' => 'form-submit', 'id' => 'addorder-submit',  'title' => 'Clic here to add the order    ') ); ?>
    </fieldset>
<?php echo $this->Form->end(); ?>
         </div>
        <div class="modal-footer">
          <a href="#" data-dismiss="modal" class="btn">Close</a>
         </div>
      </div>
    </div>
</div>
<div class="modal" id="myModal2" data-backdrop="static" style="margin-left:-150px;">
	<div class="modal-dialog">
      <div class="modal-content" style="width:800px!important;">
        <div class="modal-header" style="width:800px!important;">
          <button id="three" type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
          <h4 class="modal-title" id="myModalLabel" style=";color:#0B8EB6;width:800px!important;"><center>Select Pick Up Time</center></h4>
        </div><div class="container"></div>
        <div class="modal-body" style="width:800px!important;">
<center>
<table id="tab"  >
<tr>
<td style="width:20px!important;"><input style="background-color:#CCFF66!important;" id="t1" type="text" readonly value="08:00" onclick="timing(this)"/> </td>
<td style=" ;width:20px!important;"><input style="background-color:#CCFF66!important;" id="t2" type="text" readonly value="09:00" onclick="timing(this)"/> </td>
<td style=" ;width:20px!important;"><input style="background-color:#CCFF66!important;" id="t3" type="text" readonly value="10:00" onclick="timing(this)"/> </td>
<td style=" ;width:20px!important;"><input  style="background-color:#CCFF66!important;" id="t4" type="text" readonly value="11:00" onclick="timing(this)"/> </td>
<td style="width:20px!important;"><input  style="background-color:#CC9900!important;color:white;"id="t5" type="text" readonly value="12:00" onclick="timing(this)"/> </td>
<td style="width:20px!important;"><input style="background-color:#CC9900!important;color:white;" id="t6" type="text" readonly value="13:00" onclick="timing(this)"/> </td>
<td style="width:20px!important;"><input style="background-color:#CC9900!important;color:white;" id="t7" type="text" readonly value="14:00" onclick="timing(this)"/> </td>
<td style="width:20px!important;"><input style="background-color:#CC9900!important;color:white;" id="t8" type="text" readonly value="15:00" onclick="timing(this)"/> </td>
<td style="width:20px!important;"><input style="background-color:#CC9900!important;color:white;" id="t9" type="text" readonly value="16:00" onclick="timing(this)"/> </td>
<td style="width:20px!important;"><input style="background-color:#CC9900!important;color:white;" id="t10" type="text" readonly value="17:00" onclick="timing(this)"/></td>
<td style="width:20px!important;"><input style="background-color:#CC9900!important;color:white;" id="t11" type="text" readonly value="18:00" onclick="timing(this)"/> </td>
<td style="width:20px!important;"><input style="background-color:#CC9900!important;color:white;" id="t12" type="text" readonly value="19:00" onclick="timing(this)"/></td>

</tr>
<tr>
<td style=" ;width:20px!important;"><input style="background-color:#CCFF66!important;"  id="t01" type="text" readonly value="08:15" onclick="timing(this)"/> </td>
<td style=" ;width:20px!important;"><input  style="background-color:#CCFF66!important;" id="t02" type="text" readonly value="09:15" onclick="timing(this)"/> </td>
<td style=" ;width:20px!important;"><input style=" background-color:#CCFF66!important;;"  id="t03" type="text" readonly value="10:15" onclick="timing(this)"/> </td>
<td style=" ;width:20px!important;"><input  style="background-color:#CCFF66!important;;" id="t04" type="text" readonly value="11:15" onclick="timing(this)"/> </td>
<td style="width:20px!important;"><input style="background-color:#CC9900!important;color:white;" id="t05" type="text" readonly value="12:15" onclick="timing(this)"/> </td>
<td style="width:20px!important;"><input style="background-color:#CC9900!important;color:white;" id="t06" type="text" readonly value="13:15" onclick="timing(this)"/> </td>
<td style="width:20px!important;"><input style="background-color:#CC9900!important;color:white;" id="t07" type="text" readonly value="14:15" onclick="timing(this)"/> </td>
<td style="width:20px!important;"><input style="background-color:#CC9900!important;color:white;" id="t08" type="text" readonly value="15:15" onclick="timing(this)"/> </td>
<td style="width:20px!important;"><input style="background-color:#CC9900!important;color:white;" id="t09" type="text" readonly value="16:15" onclick="timing(this)"/> </td>
<td style="width:20px!important;"><input style="background-color:#CC9900!important;color:white;" id="t010" type="text" readonly value="17:15" onclick="timing(this)"/></td>
<td style="width:20px!important;"><input style="background-color:#CC9900!important;color:white;" id="t011" type="text" readonly value="18:15" onclick="timing(this)"/> </td>
<td style="width:20px!important;"><input style="background-color:#CC9900!important;color:white;" id="t012" type="text" readonly value="19:15" onclick="timing(this)"/></td>
</tr>
<tr>
<td style="width:20px!important;"><input style="background-color:#CCFF66!important;"  id="M1" type="text" readonly value="08:30" onclick="timing(this)"/> </td>
<td style="width:20px!important;"><input  style="background-color:#CCFF66!important;" id="M2" type="text" readonly value="09:30" onclick="timing(this)"/> </td>
<td style="width:20px!important;"><input style="background-color:#CCFF66!important;"  id="M3" type="text" readonly value="10:30" onclick="timing(this)"/> </td>
<td style="width:20px!important;"><input style="background-color:#CCFF66!important;"  id="M4" type="text" readonly value="11:30" onclick="timing(this)"/> </td>
<td style="width:20px!important;"><input style="background-color:#CC9900!important;color:white;" id="M5" type="text" readonly value="12:30" onclick="timing(this)"/> </td>
<td style="width:20px!important;"><input style="background-color:#CC9900!important;color:white;" id="M6" type="text" readonly value="13:30" onclick="timing(this)"/> </td>
<td style="width:20px!important;"><input style="background-color:#CC9900!important;color:white;" id="M7" type="text" readonly value="14:30" onclick="timing(this)"/> </td>
<td style="width:20px!important;"><input style="background-color:#CC9900!important;color:white;" id="M8" type="text" readonly value="15:30" onclick="timing(this)"/> </td>
<td style="width:20px!important;"><input style="background-color:#CC9900!important;color:white;" id="M9" type="text" readonly value="16:30" onclick="timing(this)"/> </td>
<td style="width:20px!important;"><input style="background-color:#CC9900!important;color:white;" id="M10" type="text" readonly value="17:30" onclick="timing(this)"/></td>
<td style="width:20px!important;"><input style="background-color:#CC9900!important;color:white;" id="M11" type="text" readonly value="18:30" onclick="timing(this)"/> </td>
<td style="width:20px!important;"><input style="background-color:#CC9900!important;color:white;" id="M12" type="text" readonly value="19:30" onclick="timing(this)"/></td>
</tr>
<tr>
<td style="width:20px!important;"><input style="background-color:#CCFF66!important;"  id="M01" type="text" readonly value="08:45" onclick="timing(this)"/> </td>
<td style="width:20px!important;"><input style="background-color:#CCFF66!important;"  id="M02" type="text" readonly value="09:45" onclick="timing(this)"/> </td>
<td style="width:20px!important;"><input style="background-color:#CCFF66!important;" id="M03" type="text" readonly value="10:45" onclick="timing(this)"/> </td>
<td style="width:20px!important;"><input style="background-color:#CCFF66!important;"  id="M04" type="text" readonly value="11:45" onclick="timing(this)"/> </td>
<td style="width:20px!important;"><input style="background-color:#CC9900!important;color:white;" id="M05" type="text" readonly value="12:45" onclick="timing(this)"/> </td>
<td style="width:20px!important;"><input style="background-color:#CC9900!important;color:white;"id="M06" type="text" readonly value="13:45" onclick="timing(this)"/> </td>
<td style="width:20px!important;"><input style="background-color:#CC9900!important;color:white;"id="M07" type="text" readonly value="14:45" onclick="timing(this)"/> </td>
<td style="width:20px!important;"><input style="background-color:#CC9900!important;color:white;"id="M08" type="text" readonly value="15:45" onclick="timing(this)"/> </td>
<td style="width:20px!important;"><input style="background-color:#CC9900!important;color:white;"id="M09" type="text" readonly value="16:45" onclick="timing(this)"/> </td>
<td style="width:20px!important;"><input style="background-color:#CC9900!important;color:white;"id="M010" type="text" readonly value="17:45" onclick="timing(this)"/></td>
<td style="width:20px!important;"><input style="background-color:#CC9900!important;color:white;"id="M011" type="text" readonly value="18:45" onclick="timing(this)"/> </td>
<td style="width:20px!important;"><input style="background-color:#CC9900!important;color:white;"id="M012" type="text" readonly value="19:45" onclick="timing(this)"/></td>
</tr>
</table> 
</center>	        </div>
        <div class="modal-footer">
          <a href="#" data-dismiss="modal" class="btn">Close</a>
         </div>
      </div>
    </div>
</div>

 
 <div class="modal" id="myModal3" data-backdrop="static" style="margin-left:-150px;">
	<div class="modal-dialog">
      <div class="modal-content" style="width:800px!important;">
        <div class="modal-header" style="width:800px!important;">
          <button id="three" type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
          <h4 class="modal-title" id="myModalLabel" style=";color:#0B8EB6;width:800px!important;"><center>Select a Customer</center></h4>
        </div><div class="container"></div>
        <div class="modal-body" style="width:800px!important;">
<center>
<table id="tab"  >
 
 	 		<?php $count=0; echo '<tr>';?>
  		<?php foreach($cust as $num=>$nom): ?>				
	 		<?php $count ++;?>
		<?php if(($count % 5==0) ): echo '</tr><tr>'; //else: echo '' ?>
		<?php endif; ?>
 <?php echo '<td class="tds" style="" id='.$count.' type="text" readonly    onclick="customer('.$count.')"/><B>'.$nom.'</B> </td>';?>
		<?php endforeach; ?>

</tr> 
</table> 
</center>	        </div>
        <div class="modal-footer">
          <a href="#" data-dismiss="modal" class="btn">Close</a>
         </div>
      </div>
    </div>
</div>





 <div class="modal" id="myModal4" data-backdrop="static" style="margin-left:-150px;">
	<div class="modal-dialog">
      <div class="modal-content" style="width:500px!important;">
        <div class="modal-header" style="width:500px!important;">
          <button id="three" type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
          <h4 class="modal-title" id="myModalLabel" style=";color:#0B8EB6;width:500px!important;"><center>Add a Customer</center></h4>
        </div><div class="container"></div>
        <div  class="modal-body" style="width:500px!important;">
  
<?php echo $this->Form->create('Customer', array('Controller'=>'Customer','action'=>'add')); ?>
<fieldset>
 		 <table style="margin-left:100px" class="form">
		     <?php echo $this->Form->hidden('redirect', ['value'=>1]);?>

<tr><td><label>Complete Name</label></td><td><?php echo $this->Form->input('name' ,array('label'=>'','style'=>' ;margin-left:-2px' ));;?></td></tr>
<tr><td><label>Phone</label></td><td><?php echo $this->Form->input('phone' ,array('label'=>'','style'=>' ;text-align:left;width:150px','type'=>'number'  ));;?></td></tr>
<tr><td><label>City</label></td><td><?php echo $this->Form->input('city' ,array('label'=>'','style'=>' ;text-align:left;'   ));;?></td></tr>
<tr><td><label>Address</label></td><td><?php echo $this->Form->input('address' ,array('label'=>'','style'=>' ;text-align:left;' ,'type' => 'textarea' ));;?></td></tr>
 </table>
<?php  		echo $this->Form->submit('Add', array('class' => 'form-submit',  'title' => 'Clic here to add the Customer  ') ); ?>
    </fieldset>
<?php echo $this->Form->end(); ?>
</div>
  <div class="modal-footer">
          <a href="#" data-dismiss="modal" class="btn">Close</a>
         </div>
	        </div>
   
      </div>
    </div>
 






 <style>
 .tds{
	background-color:#00BFFF!important; 
	border: 1px black solid;
	text-align:center;
	color:white;
	 cursor:pointer;
 }
 </style>
 
<script>

$('.button').click(function(){
  var buttonId = $(this).attr('id');
  $('#modal-container').removeAttr('class').addClass(buttonId);
  $('body').addClass('modal-active');
})

$('#modal-container').click(function(){
  $(this).addClass('out');
  $('body').removeClass('modal-active');
});
 
$('#users').click(function(){
	$('#myModal3').modal({show:true})
});
 
 $('#adduser').click(function(){
	$('#myModal4').modal({show:true})
});

</script>
<script>
    jQuery('#customer_id').autocomplete({
        source:'<?php echo Router::url(array("controller" => "Customers", "action" => "getAll")); ?>',
        minLength: 2
    });
</script>