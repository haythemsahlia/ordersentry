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
<div style="background-color:white!important;margin-left:30px;">

  <div class=" form" style="margin-left:30px;margin-right:50px;width:600px;float:left;background-color:white!important;padding:30px;border:1px solid black;border-radius: 25px;">

 <?php
    	   App::import('Controller', 'Customers');
 $customers = new CustomersController;
   	$cust=$customers->ListeCustomers();
 $options= array('Not Ready','Rready','Packed','Delivered','Cancelled');
  ?>
<?php echo $this->Form->create('Order' ); ?></br>
<fieldset>
         <h1 style="color:#3C8DBC"><?php echo __('Edit an Order'); ?></h1></br>
 		 <table>
 <tr><td><label>ID</label></td><td><?php echo $this->Form->input('id' ,array('type'=>'text','label'=>'','id'=>'id','style'=>' ;margin-left:-2px;width:130px;background-color:#F2F2F2!important' ,'readonly'=>'true'));;?></td></tr>
 <tr><td><label>Date</label></td><td><?php echo $this->Form->input('date' ,array('type'=>'text','label'=>'','id'=>'datepicker','style'=>' ;margin-left:-2px','default'=> date('Y-m-d') ));;?></td></tr>
<tr><td><label>Time</label></td><td><?php echo $this->Form->input('time' ,array('label'=>'','type'=>'time','style'=>' ;text-align:left;'   ));;?></td></tr>
<tr><td><label>Customer</label></td><td><?php echo $this->Form->select('customer', $cust,array('label'=>'','style'=>' ;text-align:left;'   ));;?></td></tr>
<tr><td><label>Status</label></td><td><?php echo $this->Form->select('status' ,$options, array('label'=>'', 'style'=>' ;text-align:left;'   ));;?></td></tr>
 </table>
 <?php  		echo $this->Form->submit('Edit  ', array('class' => 'form-submit',  'title' => 'Clic here to add the order    ') ); ?>
    </fieldset>
<?php echo $this->Form->end(); ?>
</div>
</div>