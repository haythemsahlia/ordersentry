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
         <h1 style="color:#3C8DBC"><?php echo __('  Edit Product'); ?></h1></br>
 		 <table>
<tr><td><label>Order</label></td><td><?php echo $this->Form->input('order'   ,array('required'=>'required','label'=>'','disabled'=>'disabled','style'=>'background-color:#c9c9c9!important; width:70px;margin-left:-2px' ));;?></td></tr>
<tr><td><label>Item</label></td><td><?php echo $this->Form->select('item' ,$options2 ,array('required'=>'required','disabled'=>'disabled','label'=>'','style'=>' background-color:#c9c9c9!important;;margin-left:-2px' ));;?></td></tr>
<tr><td><label>Quantity</label></td><td><?php echo $this->Form->input('quantity' ,array('required'=>'required','label'=>'','style'=>'width:70px; ;margin-left:-2px','type'=>'number' ));;?></td></tr>
<tr><td><label>Instructions</label></td><td><?php echo $this->Form->input('instructions' ,array('label'=>'','style'=>' ;text-align:left;','type'=>'textarea'  ));;?></td></tr>
<tr><td><label>Status</label></td><td><?php echo $this->Form->select('status' ,$statusoptions, array('required'=>'required','label'=>'', 'style'=>' ;text-align:left;'   ));;?></td></tr>
 </table>
        <?php  		echo $this->Form->submit('Edit', array('class' => 'form-submit',  'title' => 'Clic here to edit the product    ') ); ?>
    </fieldset>
<?php echo $this->Form->end(); ?>
</div>
</div>