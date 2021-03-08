<div class=" form">
 
<?php
/* App::import('Controller', 'Orders');
 $orders = new OrdersController;
 // Liste Misions 
 $options=$orders->ListeOrders();
 */
  App::import('Controller', 'Items');
 $items = new ItemsController;
 // Liste Misions 
 $options2=$items->ListeItems();
 ?>
<?php echo $this->Form->create('Item'); ?>
<fieldset>
         <h1 style="color:#3C8DBC"><?php echo __('Add a Component to the Item '); ?></h1></br>
		 <div style="margin-left:100px;width:400px;float:left"> 
		 <table>
<tr><td><label>Order</label></td><td><?php echo $this->Form->select('order' ,$options2 ,array('label'=>'','style'=>' ;margin-left:-2px' ));;?></td></tr>
<tr><td><label>Item</label></td><td><?php echo $this->Form->select('item' ,$options2 ,array('label'=>'','style'=>' ;margin-left:-2px' ));;?></td></tr>
<tr><td><label>Quantity</label></td><td><?php echo $this->Form->input('quantity' ,array('label'=>'','style'=>' ;margin-left:-2px' ));;?></td></tr>
<tr><td><label>Qualifiers</label></td><td><?php echo $this->Form->input('qualifiers' ,array('label'=>'','style'=>' ;text-align:left;'   ));;?></td></tr>
<tr><td><label>Instructions</label></td><td><?php echo $this->Form->input('instructions' ,array('label'=>'','style'=>' ;text-align:left;'  ));;?></td></tr>
 </table>
        <?php  		echo $this->Form->submit('Add', array('class' => 'form-submit',  'title' => 'Clic here to add the Item    ') ); ?>
    </fieldset>
<?php echo $this->Form->end(); ?>
</div>
</div>