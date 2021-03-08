<div class=" form">
 
<?php
 App::import('Controller', 'Categories');
 $categories = new CategoriesController;
 // Liste Misions 
 $options=$categories->ListeCategories();
 ?>
<?php echo $this->Form->create('Item'); ?>
<fieldset>
         <h1 style="color:#3C8DBC"><?php echo __('Add an Item'); ?></h1></br>
		 <div style="margin-left:100px;width:400px;float:left"> 
		 <table>
<tr><td><label>Category</label></td><td><?php echo $this->Form->select('categorie' ,$options ,array('label'=>'','style'=>' ;margin-left:-2px' ));;?></td></tr>
<tr><td><label>Name</label></td><td><?php echo $this->Form->input('name' ,array('label'=>'','style'=>' ;margin-left:-2px' ));;?></td></tr>
<tr><td><label>Description</label></td><td><?php echo $this->Form->input('description' ,array('label'=>'','style'=>' ;text-align:left;' ,'type' => 'textarea' ));;?></td></tr>
 </table>
        <?php  		echo $this->Form->submit('Add', array('class' => 'form-submit','onclick'=>'verif()',  'title' => 'Clic here to add the Item    ') ); ?>
    </fieldset>
<?php echo $this->Form->end(); ?>
</div>
</div>
   <script>
   function verif(){
	   if (document.getElementById('ItemDescription').value=="")
	   {
		  document.getElementById('ItemDescription').value=document.getElementById('ItemName').value; 
	   }
   }
   </script>