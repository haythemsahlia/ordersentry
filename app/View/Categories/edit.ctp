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

<?php echo $this->Form->create('Categorie'); ?>
<fieldset>
         <h1 style="color:#3C8DBC"><?php echo __('Edit Category'); ?></h1></br>
 		 <table>
<tr><td><label>Name</label></td><td><?php echo $this->Form->input('name' ,array('label'=>'','style'=>' ;margin-left:-2px' ));;?></td></tr>
<tr><td><label>Description</label></td><td><?php echo $this->Form->input('description' ,array('label'=>'','style'=>' ;text-align:left;' ,'type' => 'textarea' ));;?></td></tr>
<tr><td><label>Color</label></td><td><?php echo $this->Form->input('color' ,array('label'=>'','style'=>' ;text-align:left;' ,'type' => 'color' ));;?></td></tr>
 </table>
        <?php  		echo $this->Form->submit('Save', array('class' => 'form-submit',  'title' => 'Clic here to edit the Categori    ') ); ?>
    </fieldset>
<?php echo $this->Form->end(); ?>
</div>
</div>
<script>
	$('.dropdown-toggle').dropdown();
      $('#CategorieDescription').keyboard({ layout: 'qwerty' });
      $('#CategorieName').keyboard({ layout: 'qwerty' });
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