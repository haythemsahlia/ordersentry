<div class=" form">
 

<?php echo $this->Form->create('Categorie'); ?>
<fieldset>
         <h1 style="color:#3C8DBC"><?php echo __('Add '); ?></h1></br>
		 <div style="margin-left:100px;width:400px;float:left"> 
		 <table>
<tr><td><label>Name</label></td><td><?php echo $this->Form->input('name' ,array('label'=>'','style'=>' ;margin-left:-2px' ));;?></td></tr>
<tr><td><label>Description</label></td><td><?php echo $this->Form->input('description' ,array('label'=>'','style'=>' ;text-align:left;' ,'type' => 'textarea' ));;?></td></tr>
 </table>
        <?php  		echo $this->Form->submit('Add', array('class' => 'form-submit',  'title' => 'Clic here to add    ') ); ?>
    </fieldset>
<?php echo $this->Form->end(); ?>
</div>
</div>