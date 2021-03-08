<style>
.ui-keyboard-button{padding:0px 0px 0px 0px!important;width:50px!important;height:50px!important;
    margin-left: 5px;
    margin-right: 5px;
    margin-bottom: 5px;
    margin-top: 5px;
}
</style>
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
 <?php $flagoptions= array('Not flagged','Flagged'); ?>
 <?php $statusoptions= array('active','inactive'); ?>
  
<?php echo $this->Form->create('Customer'); ?>
<fieldset>
         <h1 style="color:#3C8DBC"><?php echo __('Edit Customer '); ?></h1></br>
<?php echo $this->Form->input('id' ,array('label'=>'','type'=>'hidden','required'=>'required','style'=>' ;margin-left:-2px' ));;?> 		
		<table>
<tr><td><label>Complete Name</label></td><td><?php echo $this->Form->input('name' ,array('label'=>'','required'=>'required','style'=>' ;margin-left:-2px' ));;?></td></tr>
<!--<tr><td><label>Phone</label></td><td><?php // echo $this->Form->input('phone' ,array('label'=>'','style'=>' ;text-align:left;width:150px','type'=>'number'  ));;?></td></tr>-->
<tr><td><label>Phone</label></td><td><?php echo $this->Form->input('phone' ,array('placeholder'=>'(___)___.____','onchange'=>'checkPhone()','class'=>'elem','label'=>'','pattern'=>'^\(([0-9]{3})\)[.]?([0-9]{3})[-. ]?([0-9]{4})$','maxlength'=>13,'style'=>' ;text-align:left;','type'=>'text'  , 'required'=>'true'));;?></td>
<td><button type="button" onclick="btn416()" style="margin-right:10px!important;margin-bottom:10px!important;" class="btn btn-round btn-default">416</button><button type="button" style="margin-bottom:10px!important;" onclick="btn905()" class="btn btn-round btn-default">905</button></td>
<tr>
<tr><td><label>City</label></td><td><?php echo $this->Form->input('city' ,array('label'=>'','style'=>' ;text-align:left;'   ));;?></td></tr>
<tr><td><label>Address</label></td><td><?php echo $this->Form->input('address' ,array('label'=>'','style'=>' ;text-align:left;' ,'type' => 'textarea' ));;?></td></tr>
<tr><td><label>Comment</label></td><td><?php echo $this->Form->input('comment' ,array('label'=>'','style'=>' ;text-align:left;' ,'placeholder'=>'Add a comment ...','type' => 'textarea' ));?>
                                      </td></tr> 
<tr><td><label>Status</label></td><td><?php echo $this->Form->select('status' ,$statusoptions, array('label'=>'', 'style'=>' ;text-align:left;' ,'default'=>'active'  ));;?></td></tr>
<tr><td><label>Flag</label></td><td><?php echo $this->Form->select('flag' ,$flagoptions, array('label'=>'', 'style'=>' ;text-align:left;' ,'default'=>'Not flagged'  ));;?></td></tr>
 
 </table>
        <?php  		echo $this->Form->submit('Save', array('class' => 'form-submit',  'title' => 'Clic here to edit the Customer  ') ); ?>
    </fieldset>
<?php echo $this->Form->end(); ?>
</div>
</div>
<script>
function btn905(){
		elm=document.getElementById('CustomerPhone');
		elm.value='(905)';
	 }
function btn416(){
		elm=document.getElementById('CustomerPhone');
		elm.value='(416)';
	 }
function checkPhone(){
	elm=document.getElementById('CustomerPhone');
	//format (416)1231234
	if ( (elm.value.length == 12) && (elm.value[8] != '.') && (elm.value[0] == '(' ) && (elm.value[4] == ')') ){
	part1=elm.value.substring(0,8);
	part2=elm.value.substring(8,(elm.value.length));
	elm.value=part1+'.'+part2;
	}
	//format 416123.1234
	if ( (elm.value.length == 11) && (elm.value[6] == '.') && (elm.value[0] != '(' ) && (elm.value[4] != ')') ){
	part1=elm.value.substring(0,8);
	part2=elm.value.substring(8,(elm.value.length));
	elm.value='('+elm.value.substring(0,3)+')'+elm.value.substring(3,6)+elm.value.substring(6,(elm.value.length));
	}
	//format 4161231234
	if ( (elm.value.length == 10) && (elm.value[6] != '.') && (elm.value[0] != '(' ) && (elm.value[4] != ')') ){
	part1=elm.value.substring(0,8);
	part2=elm.value.substring(8,(elm.value.length));
	elm.value='('+elm.value.substring(0,3)+')'+elm.value.substring(3,6)+'.'+elm.value.substring(6,(elm.value.length));
	}
	
	
	
}	 
</script>   
<script>
	$('.dropdown-toggle').dropdown();
      $('#CustomerPhone').keyboard({ layout: 'num' });
      $('#CustomerName').keyboard({ layout: 'qwerty' });
      $('#CustomerCity').keyboard({ layout: 'qwerty' });
      $('#CustomerAddress').keyboard({ layout: 'qwerty' });
      $('#CustomerComment').keyboard({ layout: 'qwerty' });
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