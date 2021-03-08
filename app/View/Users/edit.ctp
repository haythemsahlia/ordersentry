<!-- app/View/Users/add.ctp -->
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

<div style="background-color:white!important;margin-left:30px;">

  <div class=" form" style="margin-left:30px;margin-right:50px;width:600px;float:left;background-color:white!important;padding:30px;border:1px solid black;border-radius: 25px;">
<?php echo $this->Form->create('User',array('enctype'=>'multipart/form-data')); ?>
    <fieldset>
        <legend><?php echo __('Modifier Intervenant'); ?></legend>

        <?php   
  //  echo  '<div style="float:right"><img src="http://localhost/Temps/app/webroot'.$this->data['User']['thumb'].'"       alt="User Image" width="150px" height="150px"/></div>';
		echo  '<div style="float:right"><img src="http://temps.comptaffaires.org/app/webroot/img/avatar5.png"   class="img-circle"   alt="User Image" width="150px" height="150px"/></div>';
		echo $this->Form->hidden('id', array('value' => $this->data['User']['id']));
		echo $this->Form->input('username', array(   'label' => 'Nom Utilisateur'));
		echo $this->Form->input('Nom');
       echo $this->Form->input('Prenom');
      echo $this->Form->input('email');
      echo $this->Form->input('qualification');
      

         if ($this->Session->read('Auth.User.role')=='Admin')
        {
        echo $this->Form->input('role', array(
            'options' => array( 'Admin' => 'Admin', 'Simple' => 'Simple')
        ));
    } else{  echo $this->Form->input('role', array('readonly' => 'readonly', 'label' => 'Rôle ( Seul l Administrateur peut changer le rôle )'));}
     //  echo  '  '.$this->Form->input('thumb_file', array('type'=>'file','label'=>'Image','required' => 0)).' ';
		echo $this->Form->submit('Save', array('class' => 'form-submit',  'title' => 'Cliquer ici pour valider les changements ') ); 
?>
    </fieldset>
<?php echo $this->Form->end(); ?>
</div></div>
<script>
	$('.dropdown-toggle').dropdown();
      $('#UserUsername').keyboard({ layout: 'qwerty' });
      $('#UserNom').keyboard({ layout: 'qwerty' });
      $('#UserPrenom').keyboard({ layout: 'qwerty' });
      $('#UserQualification').keyboard({ layout: 'qwerty' });
      $('#UserEmail').keyboard({ layout: 'qwerty' });
      $('#UserPassword').keyboard({ layout: 'qwerty' });
      $('#UserPasswordConfirm').keyboard({ layout: 'qwerty' });
</script >
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