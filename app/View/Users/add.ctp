<!-- app/View/Users/add.ctp -->
<div class="users form">

<?php echo $this->Form->create('User',array('enctype'=>'multipart/form-data')); ?>
    <fieldset>
        <legend><?php echo __('Ajout Intervenant'); ?></legend>
        <?php echo $this->Form->input('username',array('label'=>'Nom utilisateur'));
		echo $this->Form->input('Nom',array('label'=>'Nom'));
		echo $this->Form->input('Prenom',array('label'=>'Prénom'));
       echo $this->Form->input('qualification',array('label'=>'Qualification'));
       	   echo $this->Form->input('email',array('label'=>'Email'));
               echo $this->Form->input('password', array('label' => 'Mot de passe  '));
		echo $this->Form->input('password_confirm', array('label' => 'Confirmation mot de passe  ', 'maxLength' => 255, 'title' => 'Confirmation mot de passe', 'type'=>'password'));
        echo $this->Form->input('role', array(
            'options' => array( 'Admin' => 'Admin', 'Simple' => 'Simple')
        ));
		/*echo '  '.$this->Form->input('thumb_file', array('type'=>'file','label'=>'Image')).' ';*/

		echo $this->Form->submit('Ajouter', array('class' => 'form-submit',  'title' => 'Clicquer ici pour ajouter l intervenant') ); 
?>
    </fieldset>
<?php echo $this->Form->end(); ?>
</div>
<style>
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