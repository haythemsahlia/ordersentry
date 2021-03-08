<!-- echo $this->Html->css('jquery-ui');
   	echo $this->Html->script('jquery-1.12.4');
 		echo $this->Html->script('jquery-ui');
    echo $this->Html->script('bootstrap');
    echo $this->Html->script('bootstrap-confirmation.min');  -->
	<link href="http://ordersentry.enterpriseesolutions.com/keyboard/css/jquery-ui1.min.css" rel="stylesheet">
	<!-- still using jQuery v2.2.4 because Bootstrap doesn't support v3+ -->
	<script src="http://ordersentry.enterpriseesolutions.com/keyboard/js/jquery-latest.min.js"></script>
	<script src="http://ordersentry.enterpriseesolutions.com/keyboard/js/jquery-ui.min.js"></script>
	<!-- <script src="docs/js/jquery-migrate-3.0.0.min.js"></script> -->

	<!-- keyboard widget css & script (required) -->
	<link href="http://ordersentry.enterpriseesolutions.com/keyboard/css/keyboard.css" rel="stylesheet">
	<script src="http://ordersentry.enterpriseesolutions.com/keyboard/js/jquery.keyboard.js"></script>

	<!-- keyboard extensions (optional) Autocomplete -->
	<script src="http://ordersentry.enterpriseesolutions.com/keyboard/js/jquery.mousewheel.js"></script>
	<script src="http://ordersentry.enterpriseesolutions.com/keyboard/js/jquery.keyboard.extension-typing.js"></script>
	<script src="http://ordersentry.enterpriseesolutions.com/keyboard/js/jquery.keyboard.extension-autocomplete.js"></script>
	<script src="http://ordersentry.enterpriseesolutions.com/keyboard/js/jquery.keyboard.extension-caret.js"></script> 

	<!-- demo only 
	<link rel="stylesheet" href="http://ordersentry.enterpriseesolutions.com/keyboard/css/bootstrap.min.css">
	<link rel="stylesheet" href="http://ordersentry.enterpriseesolutions.com/keyboard/css/font-awesome.min.css">-->
 <!--	<link href="http://ordersentry.enterpriseesolutions.com/keyboard/css/demo.css" rel="stylesheet">-->
	<link href="http://ordersentry.enterpriseesolutions.com/keyboard/css/tipsy.css" rel="stylesheet">
	<link href="http://ordersentry.enterpriseesolutions.com/keyboard/css/prettify.css" rel="stylesheet">
	<script src="http://ordersentry.enterpriseesolutions.com/keyboard/js/bootstrap.min.js"></script>
	<!--<script src="http://ordersentry.enterpriseesolutions.com/keyboard/js/demo.js"></script>-->
	<script src="http://ordersentry.enterpriseesolutions.com/keyboard/js/jquery.tipsy.min.js"></script>
	<script src="http://ordersentry.enterpriseesolutions.com/keyboard/js/prettify.js"></script> <!-- syntax highlighting -->
	<!-- Style alerte window -->
<!--	 <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
  <link rel="stylesheet" href="/resources/demos/style.css">
  <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>-->
<style>
#lblMessage{    font-size: 150%!important;}
#lblMessage2{    font-size: 150%!important;}
#lblMessage3{    font-size: 150%!important;}
.ui-dialog-titlebar{background:red!important;height:50px!important;}
.ui-dialog-titlebar-close{width:25px!important;height:25px!important;}
 .showcss{ display:block;}
  .hidecss{ display:none;}
  
.panel-default{border:none!important;}
.content{padding-top:0px;
    padding-left: 5px;
}
@import url(http://fonts.googleapis.com/css?family=Lato:300);
@import url(http://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.min.css);
body
{
    margin: 0;
    padding: 0;
    font-family: 'Lato' , sans-serif;
    color: #333;
    background-size: 100%;
    -webkit-font-smoothing: antialiased;
    -webkit-text-size-adjust: none;
    background-color: #475264;
}
p
{
    margin: 0;
    padding: 0 0 10px 0;
    line-height: 20px;
}
.panel-body{
	 background-color: #f9f9f9;
}
.span4
{
    width: 70px;
    float: left;
    margin: 0 8px 5px 5px;
}

.phone
{
    margin-top: 15px;
    background: #fff;
}
.tel
{
    margin-bottom: 10px;
    margin-top: 10px;
    border: 1px solid #9e9e9e;
    border-radius: 0px;
}
.num-pad
{
    padding-left: 0px;
}
.num-pad2
{
    padding-left: 0px;
}

.num 
{
    border: 1px solid #9e9e9e;
    -webkit-border-radius: 999px;
    border-radius: 999px;
    -moz-border-radius: 999px;
    height: 70px;
    background-color: #fff;
    color: #333;
    cursor: pointer;
}
.num2 
{
    border: 1px solid #9e9e9e;
    -webkit-border-radius: 999px;
    border-radius: 999px;
    -moz-border-radius: 999px;
    height: 70px;
    background-color: #fff;
    color: #333;
    cursor: pointer;
}
.num:hover 
{
    background-color: #9e9e9e;
    color: #fff;
    transition-property: background-color .2s linear 0s;
    -moz-transition: background-color .2s linear 0s;
    -webkit-transition: background-color .2s linear 0s;
    -o-transition: background-color .2s linear 0s;
}
.num2:hover 
{
    background-color: #9e9e9e;
    color: #fff;
    transition-property: background-color .2s linear 0s;
    -moz-transition: background-color .2s linear 0s;
    -webkit-transition: background-color .2s linear 0s;
    -o-transition: background-color .2s linear 0s;
}
.txt
{
    font-size: 30px;
    text-align: center;
    margin-top: 15px;
    font-family: 'Lato' , sans-serif;
    line-height: 30px;
    color: #333;
}
.small
{
    font-size: 15px;
}

.btn 
{
    font-weight: bold;
    -webkit-transition: .1s ease-in background-color;
    -webkit-font-smoothing: antialiased;
    letter-spacing: 1px;
}
.btn:hover 
{
    transition-property: background-color .2s linear 0s;
    -moz-transition: background-color .2s linear 0s;
    -webkit-transition: background-color .2s linear 0s;
    -o-transition: background-color .2s linear 0s;
}

.active 
{
    color: #3498db;
}
</style>
<!--Style Products of the Order  --> 
  <style>
  
    #myTable2 td{white-space: nowrap;}
 #myTable #myTable2 td{height:50px!important;
    overflow: hidden;
    text-overflow: ellipsis;
  }th a {color:white!important;}
 table.table-fixedheader {
    width: 100%;   
}
/*table td{height:35px!important;}*/
 
 table.table-fixedheader, table.table-fixedheader>thead, table.table-fixedheader>tbody, table.table-fixedheader>thead>tr, table.table-fixedheader>tbody>tr, table.table-fixedheader>thead>tr>th, table.table-fixedheader>tbody>td {
    display: block;
}
table.table-fixedheader>thead>tr:after, table.table-fixedheader>tbody>tr:after {
    content:' ';
    display: block;
    visibility: hidden;
    clear: both;
}
 
 table.table-fixedheader>tbody {
    overflow-y: scroll;
     
}  
   table.table-fixedheader>thead {
    overflow-y: scroll;    
}
 
 table.table-fixedheader>thead::-webkit-scrollbar {
    background-color: inherit;
}
 
table.table-fixedheader>thead>tr>th:after, table.table-fixedheader>tbody>tr>td:after {
    content:' ';
    display: table-cell;
    visibility: hidden;
    clear: both;
}
 
 table.table-fixedheader>thead tr th, table.table-fixedheader>tbody tr td {
    float: left;
    word-wrap:break-word;
}
#idtextarea1{
	font-size:18px!important;
}
   </style>
<style>
#ui-datepicker-div{
  text-align: center;
  width: 390px;
  height:400px;	
	
}

.ui-datepicker td span, .ui-datepicker td a {
  display: inline-block;
  font-weight: bold;
  text-align: center;
  width: 50px;
  height:50px;
  line-height: 50px;
  color: black;
  text-shadow: 1px 1px 0px red;
  filter: dropshadow(color=red, offx=1, offy=1);
}
.ui-datepicker-calendar .ui-state-default {
  background: #ededed;
  background: -moz-linear-gradient(top,  #ededed 0%, #dedede 100%);
  background: -webkit-gradient(linear, left top, left bottom, color-stop(0%,#ededed), color-stop(100%,#dedede));
  background: -webkit-linear-gradient(top,  #ededed 0%,#dedede 100%);
  background: -o-linear-gradient(top,  #ededed 0%,#dedede 100%);
  background: -ms-linear-gradient(top,  #ededed 0%,#dedede 100%);
  background: linear-gradient(top,  #ededed 0%,#dedede 100%);
  filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#ededed', endColorstr='#dedede',GradientType=0 );
  -webkit-box-shadow: inset 1px 1px 0px 0px rgba(250, 250, 250, .5);
  -moz-box-shadow: inset 1px 1px 0px 0px rgba(250, 250, 250, .5);
  box-shadow: inset 1px 1px 0px 0px rgba(250, 250, 250, .5);
}
.ui-datepicker-unselectable .ui-state-default {
  background: black;
  color: black;
}
#tab td {height:30px!important;padding-top:0px!important;}
#tab input{height:30px!important;font-size:15px!important;cursor:pointer;text-weight:bold;text-align:center;}
</style>
<!-- O P -->
 <link rel="stylesheet" type="text/css" href="/css/stylekeyboard.css" />
<!-- Abréviations // Nom complets items -->
<?php App::import('Controller', 'Items');
 $items = new ItemsController; ?>
<script type="text/javascript" >

var codejs1="";
var  previousselected="";
var  tomodify="";
var indice=0;
var exist=false;
var forget=false;
var cn2=0;
var comptprod=0;
 var arrayprodid=new Array();
 var arrayprodqty=new Array();
 var arrayprodinst=new Array();
 var arrayprodinst2=new Array();
 var arrayabrv=new Array();
 var arraynom=new Array();
 var arraynumero=new Array();
 var tomodify2 = false;
 var selected2 = false;
  
 </script>

<?php 

 $datan=array();
  
   //recuperation noms et numéros dossiers
  $abrv =$items->Abrv();
  $abrv =array_values($abrv);
  $nomsitems =$items->Nomsitems();
  $nomsitems =array_values($nomsitems); 
  $numerositems =$items->Numerositems();
  $numerositems =array_values($numerositems);
  $datan = array();
      for ($i=0; $i < sizeof($nomsitems) ; $i++) { 
	   ?>
	  <script type="text/javascript">   //alert('cn='+cn);
	  cn2=cn2+1;</script><?php
      $datan[$i]=array("value"=>$abrv[$i], "label"=>$nomsitems[$i], "desc"=>$numerositems[$i]);
	  ?>
	  <script type="text/javascript">
	
	//  alert('cn='+cn);
     arrayabrv[cn2]= ""+<?php echo json_encode($abrv[$i]); ?>;
     arraynom[cn2]= ""+<?php echo json_encode($nomsitems[$i]); ?>;
     arraynumero[cn2]= ""+<?php echo json_encode($numerositems[$i]); ?>;
	   
	
	
</script>
	  <?php
    }
	  $datan =array_values($datan);
	
	?>
  
<script>
var arrayspicy=new Array();
var arraycut=new Array();
arrayspicy[0]="No pepper";
arrayspicy[1]="SL.PEP";
arrayspicy[2]="Pepper";
arrayspicy[3]="   ";

arraycut[0]="Cut in 2";
arraycut[1]="Cut in 3";
arraycut[2]="Cut in 4";
arraycut[3]="Plastic 2's";
arraycut[4]="   ";
</script>
<!-- exist items in order -->
<?php $itemsinorder =$items->itemsinorder($id);
 $itemsinorderinst =$items->itemsinorderinst($id);
 $itemsinorderqty =$items->itemsinorderqty($id);
  $itemsinorder =array_values($itemsinorder);
  $itemsinorderinst =array_values($itemsinorderinst);
  $itemsinorderqty =array_values($itemsinorderqty);
  $datan2 = array();
      for ($j=0; $j < sizeof($itemsinorder) ; $j++) { 
	   ?>
	  <script type="text/javascript">   //alert('cn='+cn);
	  comptprod=comptprod+1;</script><?php
     $datan2[$j]=array("value"=>$itemsinorder[$j], "label"=>$itemsinorderinst[$j], "desc"=>$itemsinorderqty[$j]);
	   ?>
	  <script type="text/javascript">
	

     arrayprodid[comptprod]= ""+<?php echo json_encode($itemsinorder[$j]); ?>;
     arrayprodqty[comptprod]= ""+<?php echo json_encode($itemsinorderqty[$j]); ?>;
     arrayprodinst[comptprod]= ""+<?php echo json_encode($itemsinorderinst[$j]); ?>;
  
	   
	
	
</script>
	  <?php
    }
	  $datan2 =array_values($datan2);
	
	?>

  <?php

App::import('Controller', 'Products');
 $prods = new ProductsController;


  App::import('Controller', 'Orders');
 $orders = new OrdersController;
 // Liste Misions 
 $options=$orders->ListeOrders();
  
  
 
 $options2=$items->ListeItems();
 
 $qualifiers=array('Regular','Hot', 'Mild',  'Very Hot', 'Extra Hot' );
   App::import('Controller', 'Categories');
 $cats = new CategoriesController;
 $categories= $cats->ListeCats();

// $this->Html->script('jquery-1.12.4');
 //$this->Html->script('jquery-ui');
?>
<link rel="stylesheet" href="//code.jquery.com/ui/1.12.0/themes/base/jquery-ui.css">
<!--<script src="//code.jquery.com/jquery-1.10.2.js"></script>
  <script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
  <script src="//code.jquery.com/jquery-1.10.2.js"></script>
  <script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
 echo $this->Html->script('//code.jquery.com/jquery-1.10.2.js', array('inline' => false));  ?>
 echo $this->Html->script('//code.jquery.com/ui/1.11.4/jquery-ui.js', array('inline' => false));  ?>

  -->
   <?php
 		echo $this->Html->css('jquery-ui');
 		?>
  <link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
  
  <link rel="stylesheet" href="/resources/demos/style.css">
<?php echo $this->Html->css('//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css', array('inline' => false));  ?>

  <script type="text/javascript" >var cn=0;

 var arraynum=new Array();
 </script>
 <body onload="stoppropagation=false;">
<div>
<div class="col-xs-4 form" style="width:35%!important;padding-left: 0px;padding-top:0px;margin-top:0px;background-color:#f9f9f9;padding-right: 5px;">
 <?php
 
 $options= array('Not Ready','Ready','Packed','Delivered','Cancelled');
  App::import('Controller', 'Customers');
 $customers = new CustomersController;
 $idcust= $orders->customerorder2($id);
  	$flagcust=$customers->CustomerFlag($idcust);
	
   	$cust=$customers->ListeCustomers();
  
    $custphone = $customers->PhoneCustomers();
    $custphone = array_values($custphone);
    $custname = $customers->ListeCustomers();
    $custname = array_values($custname);
    $customersdata = array();
    for ($i=0; $i < sizeof($custphone) ; $i++) { 
	?>
	  <script type="text/javascript">  // alert('cn='+cn);
	  cn=cn+1;</script><?php
      $customersdata[$i]=array("value"=>$custphone[$i], "label"=>$custphone[$i], "desc"=>$custname[$i]);
	  	  ?>
	  <script type="text/javascript">
	
	//alert('cn='+cn);
     arraynum[cn]= ""+<?php echo json_encode($custphone[$i]); ?>;
	    //alert('cn='+cn+' num='+rraynum[cn]);
		//alert(arraynum[cn]);
	
</script>
	  <?php
    }
    $customersdata=array_values($customersdata);
 /*  App::import('Controller', 'Customers');
 $customers = new CustomersController;
  $options2=$customers->ListeCustomers();*/
 ?>
 <script>
  var dateToday = new Date();
  $( function() {
 $( ".datepicker" ).datepicker(
  {
	   minDate: dateToday,
  dateFormat: "yy-mm-dd" ,
  firstDay: 1 //,regional:["fr"]
} );    
 //$( ".datepicker" ).datepicker( $.datepicker.regional[ "fr" ] );
 $('#custaddform').submit(function(e){
    var phonec=$('#CustomerPhone').val();
    e.preventDefault(); // Prevent Default Submission
    
    $.ajax({
  url: '/customers/ajaxadd',
  type: 'POST',
  data: $(this).serialize(),
            beforeSend: function(){
				
				stoppropagation=true;
                $('#addcustomerLabel').html('<center>Adding ...</center>');
				stoppropagation=true;
				
            },
            complete:function()
            {
				stoppropagation=false;
              //location.reload(true);
              setTimeout(function(){ $('#addcustomerLabel').html('<b style="color:green">Customer added successfully !</b>');},5000);
              $('#customer_id').val(phonec);
              $('#myModal4').hide();
              
            },
			success :function()
            {stoppropagation=false;}
        });
    
});  	
 
 
   } );
  

  </script>

  <?php 
        if ($orders->issuborder($id)){
        echo $this->Form->create('Order' ); ?>


<fieldset>
      <!--   <h2 style="color:#367FA9;margin-top:10px;"> //echo __('Edit The Order '); </h2></br>-->
    <!-- <div style="margin-left:100px;width:400px;float:left"> -->
    <div style="margin-left: 0px;clear: both;padding-left: 5px;" id="myModal" >
    
    
<?php echo $this->Form->input('id' ,array('type'=>'hidden','label'=>'','id'=>'id','style'=>' ;margin-left:-2px;width:130px;background-color:#F2F2F2!important' ,'readonly'=>'true'));;?>
<table style="border-collapse: separate;border-spacing: 10px; border:3px solid #929393">
<tr><td width="28%"><label style="color:#2AB9E6;font-size: 15px;">Date</label><?php echo $this->Form->input('date' ,array('type'=>'text','label'=>'','class'=>'datepicker','id'=>'datepicker', 'disabled' => 'disabled','style'=>';width:100px;', 'required'=>'required' ,'default'=> date('Y-m-d'),'onchange'=>'Verif();' ));;?></td>
<td width="22%"><label style="color:#2AB9E6;font-size: 15px;">Time</label><div style="float:left;" ><div style="float:left;">
<?php echo $this->Form->input('time' ,array('label'=>false  ,'style'=>'width:75px; text-align:left;font-size:14px;font-weight:blod;margin-top:20px!important;' , 'required'=>'required', 'READONLY' => 'readonly'  ));;?></div></div></td>

<td width="28%"><label style="color:#2AB9E6;font-size: 15px;">Customer Name</label>
<?php echo $this->Form->input('customername',array('type'=>'text','label'=> false, 'required'=>'required' , 'disabled' => 'disabled','style'=>'background-color: #F9F9F9!important;font-size: 15px;border:none!important;    border-bottom:none!important;font-size: 15px;margin-top:20px!important;'   ));;?></td>
<?php //echo $this->Form->input('customername' ,array('type'=>'text','label' => false,'disabled' => 'disabled','style'=>'background-color: #F9F9F9!important;font-size: 20px;border:none!important;    height: 50px;border-bottom:none!important;font-size: 20px;' ));?>

<td  width="22%">
<label style="color:#2AB9E6;font-size: 15px;">Second Name</label>
<?php echo $this->Form->input('customername2' ,array('label'=>''  ,'style'=>' text-align:left;font-size:15px;font-weight:blod;margin-top:20px!important;width:280px!important;' , 'placeholder'=>'customer second name' )); ?></td>
</tr>
</table><table style="border-collapse: separate;border-spacing: 10px; border:3px solid #929393">
<tr ><td ><?php echo $this->Form->input('instructionorder' ,array('type'=>'textarea','label' => false,'placeholder'=>'Order Instructions ...','style'=>'  width: 616px!important;max-width: 616px!important;  height: 100px;background-color: white!important;font-size: 16px;' ));?></td>
</tr>
</table>
  <?php     echo $this->Form->submit('Save', array('class' => 'form-submit', 'id'=>'idsave','style'=>'margin-top:0px;margin-right:60px;margin-left:0px;', 'title' => 'Clic here to edit the order    ') ); ?>

 </div>
 
           </fieldset>
<?php echo $this->Form->end();   ?>
  <?php 
        }else{
        echo $this->Form->create('Order' ); ?>


<fieldset>
      <!--   <h2 style="color:#367FA9;margin-top:10px;"> //echo __('Edit The Order '); </h2></br>-->
		<!-- <div style="margin-left:100px;width:400px;float:left"> -->
		<div style="margin-left: 0px;clear: both;padding-left: 5px;" id="myModal" >
		
		
<?php echo $this->Form->input('id' ,array('type'=>'hidden','label'=>'','id'=>'id','style'=>' ;margin-left:-2px;width:130px;background-color:#F2F2F2!important' ,'readonly'=>'true'));;?>
<table style="border-collapse: separate;border-spacing: 10px; border:3px solid #929393">
<tr><td width="28%"><label style="color:#2AB9E6;font-size: 15px;">Date</label><?php echo $this->Form->input('date' ,array('type'=>'text','label'=>'','class'=>'datepicker','id'=>'datepicker','style'=>'font-size: 15px;width:100px;', 'required'=>'required' ,'default'=> date('Y-m-d'),'onchange'=>'Verif();' ));;?></td>
<td width="25%"><label style="color:#2AB9E6;font-size: 15px;">Time</label>
<div style="float:left;" ><div style="float:left;">
<?php echo $this->Form->input('time' ,array('label'=>'','style'=>' text-align:left;font-size:15px;font-weight:blod;width:65px;' ,'id'=>'temps','onfocusout'=>'', 'required'=>'required'  ));;?></div>
<div style="float:left;margin-top: 11px;"><?php echo $this->Html->image('heure.png',array('id'=>'times', 'style'=>'')) ;?></div></div></td>
<td width="25%" style="padding-left:20px;"><label style="color:#2AB9E6;font-size: 15px;">Customer Name</label> 
<?php //echo $this->Form->select('customer', $cust,array('label'=>'', 'required'=>'required' ,'style'=>'text-align:left;'   ));;?>
<?php echo $this->Form->input('customername' ,array('type'=>'text','label' => false,'disabled' => 'disabled','style'=>'background-color: #F9F9F9!important;border:none!important;    height: 50px;border-bottom:none!important;font-size: 15px;padding-top:18px;' ));?>
</td><td width="22%" >
<div style="float:left;"><label style="color:#2AB9E6;font-size: 15px;">Customer Phone</label> <?php echo $this->Form->input('customerphone' ,array('type'=>'text','label' => false,'disabled' => 'disabled','style'=>'    height: 50px;background-color: #F9F9F9!important;font-size: 15px;border:none!important;border-bottom:none!important;padding-top:18px;' ));?></div>
</td>
<!--echo $this->Form->input('customer',['type' => 'hidden','placeholder'=>'(___) ___-____','pattern'=>'^\(([0-9]{3})\)[.]?([0-9]{3})[-. ]?([0-9]{4})$','maxlength'=>13,'onchange'=>'newCuntomer()', 'label' => '','id'=>'customer_id','style'=>'margin-bottom:0px!important;margin-left:10px!important;','class'=>'form-control', 'required'=>'true']);

<td ><!--<button id="btn1"  type="button"  style="margin-right:10px!important;" class="btn btn-round btn-default">#</button>--><!--<button type="button" onclick="btn416()" style="margin-right:10px!important;" class="btn btn-round btn-default">416</button><button type="button" onclick="btn905()" class="btn btn-round btn-default">905</button>-->

</tr>
</table><table style="border-collapse: separate;border-spacing: 10px; border:3px solid #929393">
<tr ><td >
<!--<label style="color:#2AB9E6;font-size: 20px;">Order Instructions</label> -->
<?php echo $this->Form->input('instructionorder' ,array('type'=>'textarea','label' => false,'placeholder'=>'Order Instructions ...','style'=>'      max-width: 330px!important;  height: 50px;background-color: white!important;font-size: 16px;margin-bottom:0px;' ));?>
</td>
<?php if($flagcust==1 ){?> 
<td>
<?php echo $this->Html->image('Flag-red-icon.png',array('id'=>'flag', 'style'=>'margin-left:50px;"')) ;?>
</td>
<?php } ?>

</tr>
</table>
  <?php  		echo $this->Form->submit('Save', array('class' => 'form-submit', 'style'=>'margin-bottom:5px; margin-top:0px!important;margin-right:60px;margin-left:0px;', 'title' => 'Clic here to edit the order    ') ); ?>

 </div>
 
           </fieldset>
<?php echo $this->Form->end(); 
      }
  ?>

 	<?php
// *******  Index PRODUCT *******************************

 $def="";
 if (isset ($id)) {$def=$id; } 
 ?>

<div class="users form index" style="width:600px;margin-top:-30px;padding-bottom:0px;">
<!--<img  id="addP" style="float:right;margin-right: -100px;margin-top: 20px;" src="/img/add.png"></img>-->
<div style="float:left;">
<h3 class="no-print" style="color:#367FA9;padding-top:10px;">Products <?php $def=""; if (isset ($id)/*||($id!=null)*/) {echo 'of Order '. $id.'</h1>'; $def=$id; }else{echo 'of Orders</b</h3>'; $this->Filter->filterForm('Order', array('legend' => 'Recherche')); 
 } ?>
<!-- $this->Filter->filterForm('Order', array('legend' => 'Recherche')); -->
</div>
<!--<div style="float:left;margin-left: 165px;margin-top: 10px;">
 <img  style='width:50px;height:50px;' onclick='refresh();' src='/img/refresh.ico'> </img> 
</div>-->
</div>	
<div class="panel panel-default">
    <div class="panel-body" style="  padding-top: 35px;padding-left: 0px;padding-right: 0px;margin-top:5px!important; ">
        <table id="myTable" class="table table-fixedheader table-bordered table-striped">
            <thead style="color:white!important;">
                <tr id="idtr0">
		<!--<th style="width:15%"><center>Order<?php  // echo $this->Paginator->sort('order', 'Order');?>  </center></th>-->
		<th style="width:25%"><center>Item<?php  //echo $this->Paginator->sort('item', 'Item') ;?>  </center></th>
		<th style="width:20%;padding-left: 0px;padding-right: 0px;"><center>Quantity<?php  //echo $this->Paginator->sort('quantity', 'Quantity');?>  </center></th>
		<th style="width:40%"><center>Instructions<?php //echo $this->Paginator->sort('instructions', 'Instructions') ; ?> </center></th> 	
 
   			<?php if ($this->Session->read('Auth.User.role')=='Admin')
        {echo '<th style="width:15%;padding-left: 0px;padding-right: 0px;"><center>Delete</center></th>';} ?>
		</tr>
            </thead>
            <tbody style="height:auto!important;">
                <?php $countp=0; ?>
                <?php if (isset($products)) { ?>
		<?php foreach($products as $product): ?>				
		<?php $countp ++;?>
		<?php if($countp % 2): echo '<tr id="idtr">'; else: echo '<tr id="idtr" class="zebra">' ?>
		<?php endif; ?>
 		
			 	<!--<td  style="width:15%;text-align: center;"> echo $this->Html->link( $product['Product']['order']  ,   array('controller'=>'orders','action'=>'edit', $product['Product']['order']),array('escape' => false) );
				</td> -->
		 <td class="productselect" style="width:25%;text-align: center;font-size: 130%;font-weight: bold;color:#1896df;" <?php echo 'prodid="'.$product["Product"]["id"].'" orderid="'.$def.'"'; ?> onclick="prodselect(this);" onMouseOver="this.style.cursor='pointer';" >
      <?php  echo $items->ItemById(  $product['Product']['item'] ); ?>
     </td> 
		 <td class="productselect" style="width:20%;text-align: center;font-size: 130%;font-weight: bold;" onclick="prodselect(this);" onMouseOver="this.style.cursor='pointer';"><?php echo  $product['Product']['quantity'] 	?> </td> 
		
		 <td class="productselect" style="min-height:39px!important;width:40%;text-align: center;font-size: 130%;font-weight: bold;" onclick="prodselect(this);" onMouseOver="this.style.cursor='pointer';"><?php  echo $product['Product']['instructions'] 	 ?></td> 
 
   				<?php if ($this->Session->read('Auth.User.role')=='Admin')
        {echo '<td style="width:15%" ><center>';
 		 	 
		echo $this->Form->postLink(
  $this->Html->image('supp.png', array('style'=>'height: 21px;','alt' => __('Delete'))), //le image
  array('controller'=>'products','action' => 'delete',$product['Product']['id'],$def,'order'), //le url
  array('escape' => false),  
  __('Are you sure to delete the product : %s?', $items->ItemById($product['Product']['item'])) //le confirm
);  echo '</center></td>'; }?>
		</tr>
		<?php endforeach; ?>
		<?php unset($product);} ?>
             </tbody>
        </table>
 			
    </div>
</div>

  </div>
  <div  class="col-xs-8" style="float:left!important;width:65%!important">
<!-- <div class="modal fade" id="myModalAddProduct2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="margin-left:-590px;">
<div class="modal-dialog">
<div class="modal-content" style="  width:1200px!important;" >
<center><div class="modal-header" style=" width:1200px!important;padding-bottom: 0px;padding-top: 0px;margin-top: 5px;border-bottom-width: 5px;">

<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button> //Add Products to the Order
-->
<center><h2 class="modal-title" id="addprodtitle" style="color:#0B8EB6;width:900px!important;"></h2></center>
<!--</div>--></center> 
<?php echo $this->Form->create('Product',array('action'=>'Hadd','class'=>'addprodformc','id'=>'addprodform' ));
/*  if (isset ($id)) {$def=$id;} 
   if ($def!="") {  
    echo $this->Form->hidden('orderid', ['value'=>$def]);
   } */ 
   ?>
<input type="hidden" name="data[Product][order]" id="Oid"  />
<div class="modal-body"  style="margin: 0 auto;float: left;padding-left:5px!important;height:800px;width:1070px!important;background: #E6E6E6;" >

<div id="divforpart1" style="width:800px!important;float:left;">
          <table id="myTable2" style=" margin-bottom: 10px;" class="table table-fixedheader table-bordered table-striped">
  
            <tbody style=" "><tr>
                <?php $count=0; ?>
                <?php if (isset($categories)) {  ?>
				
		<?php foreach($categories as $categorie){ ?>				
		<?php $count ++;?>
 
		 <th id="<?php echo $categorie['Categorie']['id']; ?>" class="categ"  style="cursor:pointer;font-weight;font-size:20px;width:850px;background-color:<?php echo $categorie['Categorie']['color']; ?>!important;text-align: center;" onclick="visibilite('list<?php echo $categorie['Categorie']['id']; ?>')"><?php echo $categorie['Categorie']['name'];?>
		 </th>
	
		<?php unset($categorie);}} ?>
          </tr> 
		  	 <!--test-->
			<tr><textarea style="font-weight:bold;color:red;font-size:30px!important;" rows="1" cols="50"  id="idtextarea1" readonly > </textarea></tr>
			<script type="text/javascript"> var nbcateg=<?php echo json_encode($count); ?>;</script>
 <?php $count=0; ?>
                <?php if (isset($categories)) {  ?>
				
		<?php foreach($categories as $categorie){ ?>				
		<?php $count ++;?>
  <tr style="display:none;" id="list<?php echo $categorie['Categorie']['id']; ?>" >
  		<?php  $itemsCat=$items->ItemsCateg($categorie['Categorie']['id']);  ;?>
		
		 <?php foreach($itemsCat as $id=> $nom)  
		{echo '<td style=" border: 0.5px solid black;background-color: #E6E6E6;text-align: center;    width: 155px!important;font-size:18px;cursor:pointer;    height: 53.66666px;" id="item'.$id.'" class="items" name="'.$nom.'" onclick="select(this);"><B>'.$nom.'</B></td>' ;}?>				
 		</td>
		 
		<?php unset($categorie);}
		?></tr>
		
			
		<?php } ?>




		  </tbody>
 
</table> <!--style="display:none;"-->
</br></br>
<textarea rows="1" cols="50"  id="write"  placeholder="modifiers" onchange="eliminatespace();" style="display:none;margin-bottom:5px;" ></textarea>
<textarea rows="2" cols="50" placeholder="item insctructions" id="write2" style="display:none;margin-bottom:5px;" ></textarea>
	<!-- keyboard -->
<div id="containerkeyboard" style=" margin-left: 50px;margin-top:5px;display:none;">
 <ul id="keyboard" style="
    width: 1000px;
    height: 600px;
    margin-left: 0px!important;
    margin-right: 0px!important;
">
        <li id="liid" class="symbol"><span class="off">`</span><span class="on">~</span></li>
        <li id="liid" class="symbol"><span class="off">1</span><span class="on">!</span></li>
        <li id="liid" class="symbol"><span class="off">2</span><span class="on">@</span></li>
        <li id="liid" class="symbol"><span class="off">3</span><span class="on">#</span></li>
        <li id="liid" class="symbol"><span class="off">4</span><span class="on">$</span></li>
        <li id="liid" class="symbol"><span class="off">5</span><span class="on">%</span></li>
        <li id="liid" class="symbol"><span class="off">6</span><span class="on">^</span></li>
        <li id="liid"class="symbol"><span class="off">7</span><span class="on">&amp;</span></li>
        <li id="liid"class="symbol"><span class="off">8</span><span class="on">*</span></li>
        <li id="liid"class="symbol"><span class="off">9</span><span class="on">(</span></li>
        <li id="liid"class="symbol"><span class="off">0</span><span class="on">)</span></li>
        <li id="liid"class="symbol"><span class="off">-</span><span class="on">_</span></li>
        <li id="liid"class="symbol"><span class="off">=</span><span class="on">+</span></li>
        <li id="liid"class="delete lastitem">delete</li>
        <li id="liid"class="tab">tab</li>
        <li id="liid"class="letter">q</li>
        <li id="liid"class="letter">w</li>
        <li id="liid"class="letter">e</li>
        <li id="liid"class="letter">r</li>
        <li id="liid"class="letter">t</li>
        <li id="liid"class="letter">y</li>
        <li id="liid"class="letter">u</li>
        <li id="liid"class="letter">i</li>
        <li id="liid"class="letter">o</li>
        <li id="liid"class="letter">p</li>
        <li id="liid"class="symbol"><span class="off">[</span><span class="on">{</span></li>
        <li id="liid"class="symbol"><span class="off">]</span><span class="on">}</span></li>
        <li id="liid"class="symbol lastitem"><span class="off">\</span><span class="on">|</span></li>
        <li id="liid"class="capslock">CapLk</li>
        <li id="liid"class="letter">a</li>
        <li id="liid"class="letter">s</li>
        <li id="liid"class="letter">d</li>
        <li id="liid"class="letter">f</li>
        <li id="liid"class="letter">g</li>
        <li id="liid"class="letter">h</li>
        <li id="liid"class="letter">j</li>
        <li id="liid"class="letter">k</li>
        <li id="liid"class="letter">l</li>
        <li id="liid"class="symbol"><span class="off">;</span><span class="on">:</span></li>
        <li id="liid"class="symbol"><span class="off">'</span><span class="on">&quot;</span></li>
        <li id="liid"class="return lastitem"><B> ↵</B></li>
        <li id="liid"class="left-shift">shift</li>
        <li id="liid"class="letter">z</li>
        <li id="liid"class="letter">x</li>
        <li id="liid"class="letter">c</li>
        <li id="liid"class="letter">v</li>
        <li id="liid"class="letter">b</li>
        <li id="liid"class="letter">n</li>
        <li id="liid"class="letter">m</li>
        <li id="liid"class="symbol"><span class="off">,</span><span class="on">&lt;</span></li>
        <li id="liid"class="symbol"><span class="off">.</span><span class="on">&gt;</span></li>
        <li id="liid"class="symbol"><span class="off">/</span><span class="on">?</span></li>
        <li id="liid"class="right-shift lastitem">shift</li>
        <li id="liid"class="space lastitem">&nbsp;</li>
    </ul>

</div>	
</div> 
<div id="divforpad" style="width:200px!important;margin-left:20px;float:left;">

<!--  Pad -->                   
<input type="text" id="inputqty_id" onchange="saveqty()" size="35" style="font-weight:bold;color:red;font-size:30px;background-color:yellow!important;width:100px!important;height:50px!important;"/> 
<p  style="color:black; font-weight: bold;display:inline;font-size: 20px;">		&#32;	&#32;&lsaquo;	&lsaquo; QTY </p>
 </br></br>
 <div class="row"  id="divpad2">
        <div class="phone" style="max-width:300px;min-width:400px;" >
       <!-- <div class="col-md-4 col-md-offset-4 phone"> -->
            <div class="row1">
                <div class="col-md-10">
                   <div class="num-pad2">
                    <div class="span4">
                        <div class="num2">
                            <div class="txt">
                                7
                            </div>
                        </div>
                    </div>
                    <div class="span4">
                        <div class="num2">
                            <div class="txt">
                               8
                            </div>
                        </div>
                    </div>
                    <div class="span4">
                        <div class="num2">
                            <div class="txt">
                                9 
                            </div>
                        </div>
                    </div>
                    <div class="span4">
                        <div class="num2">
                            <div class="txt">
                                4 
                            </div>
                        </div>
                    </div>
                    <div class="span4">
                        <div class="num2">
                            <div class="txt">
                                5 
                            </div>
                        </div>
                    </div>
                    <div class="span4">
                        <div class="num2">
                            <div class="txt">
                                6 
                            </div>
                        </div>
                    </div>
                    <div class="span4">
                        <div class="num2">
                            <div class="txt">
                                1 
                            </div>
                        </div>
                    </div>
                    <div class="span4">
                        <div class="num2">
                            <div class="txt">
                                2 
                            </div>
                        </div>
                    </div>
                    <div class="span4">
                        <div class="num2">
                            <div class="txt">
                                3 
                            </div>
                        </div>
                    </div>
                    <div class="span4">
                        <div class="">
                            <div >
                                .
                            </div>
                        </div>
                    </div>
                    <div class="span4">
                        <div class="num2">
                            <div class="txt">
                                0
                            </div>
                        </div>
                    </div>
                    <div class="span4">
                        <div class="num2">
                            <div class="txt">
                                <--
                            </div>
                        </div>
                    </div>
                    </div>
                   
                              </div>
            </div>
     
        </div>
    </div>
	</br>
	</br>
	<?php  		echo $this->Form->submit('ENTER', array('name'=>'btnsub1','disabled'=>'false','id'=>'btnsub1','onclick'=>'enterbtn2();stoppropagation=true','class' => 'btn btn-round btn-default', 'style'=>'margin-top:5px;background:#fafafa!important;color:#333;border-color:#ddd!important;margin-left: 10px;width: 226.22222px;height: 64.22222px;', 'title' => 'Clic here to add the product    ') ); ?>
	<fieldset style="margin-left:50px">
  <?php // $qty=""; $inst="";	?>	
<?php echo $this->Form->input('order',array('label'=>'','id'=>'Order','style'=>' ;margin-left:-2px' ,'type'=>'hidden' ,  'default'=>$def     ));;?>
<?php echo $this->Form->input('item',array('label'=>'','id'=>'Item','style'=>' ;margin-left:-2px','type'=>'hidden' ));?>
<?php echo $this->Form->input('quantity',array('label'=>'','id'=>'Quantity','style'=>'width:70px; ;margin-left:-2px','type'=>'hidden' ));?>
<?php echo $this->Form->input('instructions' ,array('label'=>'','type'=>'hidden','id'=>'Instructions','style'=>' ;text-align:left;'  ));?>
 
          </fieldset>
<?php echo $this->Form->end(); ?>

<?php echo $this->Form->create('Product',array('action'=>'edit0/'.$def,'class'=>'addprodformc2','id'=>'addprodform2' ));?>
<?php echo $this->Form->input('id',array('label'=>'','id'=>'id2','style'=>' ;margin-left:-2px' ,'type'=>'hidden'     ));;?>
<?php echo $this->Form->input('order',array('label'=>'','id'=>'Order2','style'=>' ;margin-left:-2px' ,'type'=>'hidden' ,  'default'=>$def     ));;?>
<?php echo $this->Form->input('item',array('label'=>'','id'=>'Item2','style'=>' ;margin-left:-2px','type'=>'hidden' ));?>
<?php echo $this->Form->input('quantity',array('label'=>'','id'=>'Quantity2','style'=>'width:70px; ;margin-left:-2px','type'=>'hidden' ));?>
<?php echo $this->Form->input('instructions' ,array('label'=>'','type'=>'hidden','id'=>'Instructions2','style'=>' ;text-align:left;'  ));?>
 

<?php  		echo $this->Form->submit('MODIFY', array('name'=>'btnsub2','id'=>'btnsub2','onclick'=>'modifybtn()','disabled'=>'true','class' => 'btn btn-round bt/n-default', 'style'=>'border-color:#ddd!important;margin-top:5px;background:#fafafa!important;color:#333;cborder-color:#ddd!important;margin-left: 10px;width: 226.22222px;height: 64.22222px;', 'title' => 'Clic here to modify the product    ') ); ?>
</br></br>
<?php echo $this->Form->end(); ?>
	<!--button type="button" style="margin-left: 10px;width: 226.22222px;height: 64.22222px;" class="btn btn-round btn-default">ENTER</button>-->
	<table>
	 <tr>
    <td><button type="button" onclick="btnup();" style="margin-left: 10px;width: 113.11111px;height: 64.22222px;font-size:28px; text-align: center; " class="btn btn-round btn-default"><B>↑</B></button></td>
    
    <td rowspan="2"><button type="button" id="btndone" style="height: 128.44444px;width: 113.11111px;color:#333;" class="btn btn-round btn-default">DONE</button></td>
  </tr>
  <tr>
    <td><button type="button" onclick="btndown();" style="margin-left: 10px;width: 113.11111px;height: 64.22222px;font-size:28px;" class="btn btn-round btn-default"><B>↓</B></button></td>

  </tr>
	</table>
 
</div>
<!--
</div> /.modal-content
</div>/.modal-dialog 
</div>/.modal 


</div> /.modal -->
 </div> 
  
  
  
  
</div>
</div>
<script>
		 $('.dropdown-toggle').dropdown();
	 $(document).ready(

    function(){
        $("#btn1").click(function () {
		//	alert('hello');
            $("#divpad").show();
            //$("#divpad").toggle();
		
/* var elem=document.getElementById('divpad');
		 var theCSSprop = window.getComputedStyle(elem, null).getPropertyValue("display");
		 alert('/'+theCSSprop+'/'); */
	//if (theCSSprop=='block'){$("#divpad").toggle();}
        });

    });
	 document.getElementById('customer_id').addEventListener('input', function (e) {
  var x = e.target.value.replace(/\D/g, '').match(/(\d{0,3})(\d{0,3})(\d{0,4})/);
  e.target.value = !x[2] ? x[1] : '(' + x[1] + ')' + x[2] + (x[3] ? '.' + x[3] : '');
});
	 function btn905(){
		elm=document.getElementById('customer_id');
		elm.value='(905)';
				
	 }
	 function btn416(){
		elm=document.getElementById('customer_id');
		elm.value='(416)';
		
	 }
	 
   
  
 $(document).ready(function () {

    $('.num').click(function () {
        var num = $(this);elm=document.getElementById('customer_id');
        var text = $.trim(num.find('.txt').clone().children().remove().end().text());
		
        var telNumber = $('#customer_id');
		$(telNumber).val(telNumber.val() + text);
		
		if(elm.value.length==8){elm.value=elm.value+'.';}
		if(text=='<--'){elm.value=elm.value.substring(0,(elm.value.length)-4);}
	if( ((elm.value[8])!='.') && (elm.value.length==9)){d=elm.value[8];elm.value=elm.value.substring(0,(elm.value.length)-1)+'.'+d;}
	
	if((elm.value[0])!='('){elm.value='('+elm.value;}
	if( ((elm.value[4])!=')') && (elm.value.length==5)){d=elm.value[4];elm.value=elm.value.substring(0,(elm.value.length)-1)+')'+d;}
		if(elm.value.length>13){elm.value=elm.value.substring(0,(elm.value.length)-1);}
		
		/* //test
		var tags = <?php echo json_encode($custphone); ?>;
    var customers = <?php echo json_encode($customersdata); ?>;
$( "#customer_id" ).autocomplete({
  minLenght: 0,
  source: customers
}).data( "autocomplete" )._renderItem = function( ul, item ) {
        return $( '<li></li>' )
        .data( "item.autocomplete", item )
        .append( item.label+' ** ' +item.desc)
        .appendTo( ul )
   }; */
		
		
		
		
    });


});
</script>
<!--<script type="text/javascript" src="../js/jquery-1.4.2.min.js"></script>
<script type="text/javascript" src="../js/jquery-ui-1.8.custom.min.js"></script>-->
     <script language="JavaScript">
	 /* function HideDisplay(){
		var elem=document.getElementById('divpad');
		 var theCSSprop = window.getComputedStyle(elem, null).getPropertyValue("visibility");
		alert(theCSSprop);
		elem.setProperty ('visibility', 'visible', '');
	 } */

	 
	
  $(function() {
  <?php if (isset($_POST['add'])){echo "$('#myModal').modal('show');";
            echo "$('#datepicker').val('".$_POST['add']."');";
        unset($_POST);
        } ?>
  
  $("#times").click(function() {

  
   for (i=1 ; i<= 48 ; i++) {
			x=document.getElementsByClassName(i);
			x[0].disabled = false;
			x[0].style.color ="black";
				}
  var offset = 0;
var today=new Date( new Date().getTime() - offset * 3600 * 1000);
	
	var dd = today.getDate();
//alert('dd='+dd);
var mm = today.getMonth()+1; //January is 0!
//alert('mm='+mm);
var yyyy = today.getFullYear();
//alert('yyyy='+yyyy);
if(dd<10){
    dd='0'+dd;
} 
if(mm<10){
    mm='0'+mm;
} 
var today2 =yyyy+'-'+mm+'-'+dd;

	if (today2== document.getElementById('datepicker').value ){
//	alert('it s today!');
	 	 var h=today.getHours();
		//just for testing 
		//h="13";
//	alert('hour='+h);
	var m=today.getMinutes();
//	alert('minutes='+m); 
	if (h < 12 ) {
		for (i=1 ; i<= 16 ; i++) {
			x=document.getElementsByClassName(i);
			val=x[0].value;
			pos=val.indexOf(':');
		    h1=val.substr(0,pos);
			m1=val.substr(pos+1);
			//alert('m1='+m1);
			//if(h<10){h="0"+h;}
			if(h1<h){
				x[0].disabled = true;
				x[0].style.color="grey";
			
				}
			if(h1==h){	
			    if(m1<m){
					x[0].disabled = true;
						x[0].style.color ="grey";
					
				}
				
				}
			
			
		}
	}
	//h>=12
	else{
		for (i=1 ; i<= 16 ; i++) {
			x=document.getElementsByClassName(i);
			x[0].disabled = true;
			x[0].style.color ="grey";
				}
		for (i=17 ; i<= 48 ; i++) {
			
				x=document.getElementsByClassName(i);
			val=x[0].name;
			pos=val.indexOf(':');
		    h1=val.substr(0,pos);
			m1=val.substr(pos+1);
	    	if(h1<h){
				x[0].disabled = true;
				x[0].style.color="grey";
			
				}
			if(h1==h){	
			    if(m1<m){
					x[0].disabled = true;
						x[0].style.color ="grey";
					
				}
				
				}
		}
		
	}
	
	}
  $('#myModal2').modal('show');
  });
   $("#temps").click(function() {
	    
   for (i=1 ; i<= 48 ; i++) {
			x=document.getElementsByClassName(i);
			x[0].disabled = false;
			x[0].style.color ="black";
				}
  var offset = 0;
var today=new Date( new Date().getTime() - offset * 3600 * 1000);
	
	var dd = today.getDate();
//alert('dd='+dd);
var mm = today.getMonth()+1; //January is 0!
//alert('mm='+mm);
var yyyy = today.getFullYear();
//alert('yyyy='+yyyy);
if(dd<10){
    dd='0'+dd;
} 
if(mm<10){
    mm='0'+mm;
} 
var today2 =yyyy+'-'+mm+'-'+dd;

	if (today2== document.getElementById('datepicker').value ){
//	alert('it s today!');
	 	 var h=today.getHours();
		//just for testing 
		//h="13";
//	alert('hour='+h);
	var m=today.getMinutes();
//	alert('minutes='+m); 
	if (h < 12 ) {
		for (i=1 ; i<= 16 ; i++) {
			x=document.getElementsByClassName(i);
			val=x[0].value;
			pos=val.indexOf(':');
		    h1=val.substr(0,pos);
			m1=val.substr(pos+1);
			//alert('m1='+m1);
			//if(h<10){h="0"+h;}
			if(h1<h){
				x[0].disabled = true;
				x[0].style.color="grey";
			
				}
			if(h1==h){	
			    if(m1<m){
					x[0].disabled = true;
						x[0].style.color ="grey";
					
				}
				
				}
			
			
		}
	}
	//h>=12
	else{
		for (i=1 ; i<= 16 ; i++) {
			x=document.getElementsByClassName(i);
			x[0].disabled = true;
			x[0].style.color ="grey";
				}
		for (i=17 ; i<= 48 ; i++) {
			
				x=document.getElementsByClassName(i);
			val=x[0].name;
			pos=val.indexOf(':');
		    h1=val.substr(0,pos);
			m1=val.substr(pos+1);
	    	if(h1<h){
				x[0].disabled = true;
				x[0].style.color="grey";
			
				}
			if(h1==h){	
			    if(m1<m){
					x[0].disabled = true;
						x[0].style.color ="grey";
					
				}
				
				}
		}
		
	}
	
	}
  $('#myModal2').modal('show');
  });
 
   $("#add").click(function() {
  $('#myModal').modal('show');
  });
 
 });
 function timing(elm)
 { 
var idelm=elm.id;
var time =document.getElementById(idelm).name ;

// Check correct time format and split into components
  time = time.toString ().match (/^([01]\d|2[0-3])(:)([0-5]\d)(:[0-5]\d)?$/) || [time];

  if (time.length > 1) { // If time format correct
    time = time.slice (1);  // Remove full string match value
    time[5] = +time[0] < 12 ? 'AM' : 'PM'; // Set AM/PM
    time[0] = +time[0] % 12 || 12; // Adjust hours

  }
 time= time.join (''); // return adjusted time or original string
 // var str = theText.split('A').join('')
 part1=time.substr(0,time.length-2);
 part2=time.substr(-2);
 time=part1+' '+part2;
document.getElementById('temps').value=time; 
  $('#myModal2').modal('hide');

 }
 
 function customer(elm)
 { 

 liste = document.getElementById('cust');
 liste.options.selectedIndex = elm;
   $('#myModal3').modal('hide');
 }
 function newCuntomer(){
	 
  

	// alert('hello from newCuntomer');
	 num=document.getElementById('customer_id').value;
	  var k=arraynum.indexOf(num);
	 if (( k==-1) && (num.length==13)){
	document.getElementById('info').value='New Customer! Please enter the name.';
 }if (k != -1){
	document.getElementById('info').value='';
 }
 }
 </script> 
<script>
function Verif(){
	 var dateToday = new Date();
	
	 d=dateToday.getDate();
	 m=dateToday.getMonth();
	 y=dateToday.getFullYear();
	 m=m+1;
	date= document.getElementById('datepicker').value;
	iddate=document.getElementById('datepicker');
    var day = date.substr(8, 2);
    var month = date.substr(5, 2);
	var year = date.substr(0, 4);
	  nbmonth= parseInt(month);
	  nbday= parseInt(day);
	  nbyear= parseInt(year);
	  //check if date passed
	   cond=true;
	  if (y>nbyear){ alert("Date in the past !");	cond=false; iddate.value="";  }
	  if ((y==nbyear) && ( m>nbmonth) ){alert("Date in the past !");cond=false;	 iddate.value=""; }
	  if ((y==nbyear) && (m==nbmonth) && ( d>nbday) ){alert("Date in the past !");cond=false;iddate.value="";	  }
	 
	  if (cond){
	   if(  (nbmonth <0) || (nbmonth>12)){alert("Please enter a date in format 'yy-mm-dd' ");}
	if (( [1, 3,5,7,8,10,12].includes(nbmonth))&& ( (day> 31) || (day <0)    )){	alert("Please enter a valid date in format 'yy-mm-dd' ");iddate.value="";}
	if (( [4,6,9,11].includes(nbmonth))&& ( (day> 30) || (day <0)    )){	alert("Please enter a valid date in format 'yy-mm-dd' ");iddate.value="";}
	if ( (nbmonth == 2) && ( (day > 29) || ( day < 0)  ) ) {	alert("Please enter a valid date in format 'yy-mm-dd' ");iddate.value="";}
	var n1 = date.indexOf("-");
	var n2 = date.indexOf("-",5);
	if (  ((date.length)!= 10) || (n1 != 4) || (n2 != 7) ){
		
		
		alert("Please enter a date in format 'yy-mm-dd' ");
		
	}
	  }
}
$('.button').click(function(){
  var buttonId = $(this).attr('id');
  $('#modal-container').removeAttr('class').addClass(buttonId);
  $('body').addClass('modal-active');
})

$('#modal-container').click(function(){
  $(this).addClass('out');
  $('body').removeClass('modal-active');
});
function addfn(){
  $('#CustomerPhone').val($('#customer_id').val());

  $('#myModal4').modal('show');
}

function custfill(ncust, telephone){
	/* ncust=ncust.substr(12); */
	//alert(ncust);
$( "#customer_name" ).val(ncust);document.getElementById('info').value='';
$( "#customer_id" ).val(telephone);
document.getElementById('info').value=telephone;

}
    var NoResultsLabel = "<button class='btn btn-default btn-sm' onclick='addfn();' ><i class='fa fa-fw fa-plus-square'></i> Add new customer</button>";
    var tags = <?php echo json_encode($custphone); ?>;
    var customers = <?php echo json_encode($customersdata); ?>;
$( "#customer_id" ).autocomplete({
  minLenght: 0,
  source: customers
}).data( "autocomplete" )._renderItem = function( ul, item ) {
        return $( '<li></li>' )
        .data( "item.autocomplete", item )
        .append( '<a onclick=custfill($(this).text().substr(17),"'+item.label+'"); >'+ item.label+' ** ' +item.desc+'</a>')
        .appendTo( ul )
   };
  


</script>

<div class="modal" id="myModal2" data-backdrop="static" style="margin-left:-480px;">
	<div class="modal-dialog">
      <div class="modal-content" style="width:1100px!important;">
        <div class="modal-header" style="width:1100px!important;">
          <button id="three" type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
          <h4 class="modal-title" id="myModalLabel" style=";color:#0B8EB6;width:1100px!important;"><center>Select Pick Up Time</center></h4>
        </div><div class="container"></div>
        <div class="modal-body" style="width:1100px!important;">
<center>
<table id="tab"  >
<tr>
<td style="width:40px!important;padding:8px 8px 8px 8px !important;"><input style="background-color:#CCFF66;height: 73.506942px!important;width: 70px!important;font-weight: bold;font-size: 20px!important;" id="t1" type="text" readonly class ="1" name="08:00" value="08:00" onclick="timing(this)"/> </td>
<td style=" ;width:40px!important;padding:8px 8px 8px 8px !important;"><input style="background-color:#CCFF66!important;height: 73.506942px!important;width: 70px!important;font-weight: bold;font-size: 20px!important;" id="t2" type="text" readonly class ="5" name="09:00" value="09:00" onclick="timing(this)"/> </td>
<td style=" ;width:40px!important;padding:8px 8px 8px 8px !important;"><input style="background-color:#CCFF66!important;height: 73.506942px!important;width: 70px!important;font-weight: bold;font-size: 20px!important;" id="t3" type="text" readonly class ="9" name="10:00" value="10:00" onclick="timing(this)"/> </td>
<td style=" ;width:40px!important;padding:8px 8px 8px 8px !important;"><input  style="background-color:#CCFF66!important;height: 73.506942px!important;width: 70px!important;font-weight: bold;font-size: 20px!important;" id="t4" type="text" readonly class ="13" name="11:00" value="11:00" onclick="timing(this)"/> </td>
<td style="width:40px!important;padding:8px 8px 8px 8px !important;"><input  style="background-color:#CC9900!important;color:white;height: 73.506942px!important;width: 70px!important;font-weight: bold;font-size: 20px!important;"id="t5" type="text" readonly class ="17" name="12:00" value="12:00" onclick="timing(this)"/> </td>
<td style="width:40px!important;padding:8px 8px 8px 8px !important;"><input style="background-color:#CC9900!important;color:white;height: 73.506942px!important;width: 70px!important;font-weight: bold;font-size: 20px!important;" id="t6" type="text" readonly class ="21" name="13:00" value="1:00" onclick="timing(this)"/> </td>
<td style="width:40px!important;padding:8px 8px 8px 8px !important;"><input style="background-color:#CC9900!important;color:white;height: 73.506942px!important;width: 70px!important;font-weight: bold;font-size: 20px!important;" id="t7" type="text" readonly class ="25" name="14:00" value="2:00" onclick="timing(this)"/> </td>
<td style="width:40px!important;padding:8px 8px 8px 8px !important;"><input style="background-color:#CC9900!important;color:white;height: 73.506942px!important;width: 70px!important;font-weight: bold;font-size: 20px!important;" id="t8" type="text" readonly class ="29" name="15:00" value="3:00" onclick="timing(this)"/> </td>
<td style="width:40px!important;padding:8px 8px 8px 8px !important;"><input style="background-color:#CC9900!important;color:white;height: 73.506942px!important;width: 70px!important;font-weight: bold;font-size: 20px!important;" id="t9" type="text" readonly class ="33" name="16:00" value="4:00" onclick="timing(this)"/> </td>
<td style="width:40px!important;padding:8px 8px 8px 8px !important;"><input style="background-color:#CC9900!important;color:white;height: 73.506942px!important;width: 70px!important;font-weight: bold;font-size: 20px!important;" id="t10" type="text" readonly class ="37" name="17:00" value="5:00" onclick="timing(this)"/></td>
<td style="width:40px!important;padding:8px 8px 8px 8px !important;"><input style="background-color:#CC9900!important;color:white;height: 73.506942px!important;width: 70px!important;font-weight: bold;font-size: 20px!important;" id="t11" type="text" readonly class ="41" name="18:00" value="6:00" onclick="timing(this)"/> </td>
<td style="width:40px!important;padding:8px 8px 8px 8px !important;"><input style="background-color:#CC9900!important;color:white;height: 73.506942px!important;width: 70px!important;font-weight: bold;font-size: 20px!important;" id="t12" type="text" readonly class ="45" name="19:00" value="7:00" onclick="timing(this)"/></td>

</tr>
<tr>
<td style=" ;width:40px!important;padding:8px 8px 8px 8px !important;"><input style="background-color:#CCFF66!important;height: 73.506942px!important;width: 70px!important;font-weight: bold;font-size: 20px!important;"  id="t01" type="text" readonly class ="2" name="08:15" value="08:15" onclick="timing(this)"/> </td>
<td style=" ;width:40px!important;padding:8px 8px 8px 8px !important;"><input  style="background-color:#CCFF66!important;height: 73.506942px!important;width: 70px!important;font-weight: bold;font-size: 20px!important;" id="t02" type="text" readonly class ="6" name="09:15" value="09:15" onclick="timing(this)"/> </td>
<td style=" ;width:40px!important;padding:8px 8px 8px 8px !important;"><input style=" background-color:#CCFF66!important;height: 73.506942px!important;width: 70px!important;font-weight: bold;font-size: 20px!important;;"  id="t03" type="text" readonly class ="10" name="10:15" value="10:15" onclick="timing(this)"/> </td>
<td style=" ;width:40px!important;padding:8px 8px 8px 8px !important;"><input  style="background-color:#CCFF66!important;height: 73.506942px!important;width: 70px!important;font-weight: bold;font-size: 20px!important;;" id="t04" type="text" readonly class ="14" name="11:15" value="11:15" onclick="timing(this)"/> </td>
<td style="width:40px!important;padding:8px 8px 8px 8px !important;"><input style="background-color:#CC9900!important;color:white;height: 73.506942px!important;width: 70px!important;font-weight: bold;font-size: 20px!important;" id="t05" type="text" readonly class ="18" name="12:15" value="12:15" onclick="timing(this)"/> </td>
<td style="width:40px!important;padding:8px 8px 8px 8px !important;"><input style="background-color:#CC9900!important;color:white;height: 73.506942px!important;width: 70px!important;font-weight: bold;font-size: 20px!important;" id="t06" type="text" readonly class ="22" name="13:15" value="1:15" onclick="timing(this)"/> </td>
<td style="width:40px!important;padding:8px 8px 8px 8px !important;"><input style="background-color:#CC9900!important;color:white;height: 73.506942px!important;width: 70px!important;font-weight: bold;font-size: 20px!important;" id="t07" type="text" readonly class ="26" name="14:15" value="2:15" onclick="timing(this)"/> </td>
<td style="width:40px!important;padding:8px 8px 8px 8px !important;"><input style="background-color:#CC9900!important;color:white;height: 73.506942px!important;width: 70px!important;font-weight: bold;font-size: 20px!important;" id="t08" type="text" readonly class ="30" name="15:15" value="3:15" onclick="timing(this)"/> </td>
<td style="width:40px!important;padding:8px 8px 8px 8px !important;"><input style="background-color:#CC9900!important;color:white;height: 73.506942px!important;width: 70px!important;font-weight: bold;font-size: 20px!important;" id="t09" type="text" readonly class ="34" name="16:15" value="4:15" onclick="timing(this)"/> </td>
<td style="width:40px!important;padding:8px 8px 8px 8px !important;"><input style="background-color:#CC9900!important;color:white;height: 73.506942px!important;width: 70px!important;font-weight: bold;font-size: 20px!important;" id="t010" type="text" readonly class ="38" name="17:15" value="5:15" onclick="timing(this)"/></td>
<td style="width:40px!important;padding:8px 8px 8px 8px !important;"><input style="background-color:#CC9900!important;color:white;height: 73.506942px!important;width: 70px!important;font-weight: bold;font-size: 20px!important;" id="t011" type="text" readonly class ="42" name="18:15" value="6:15" onclick="timing(this)"/> </td>
<td style="width:40px!important;padding:8px 8px 8px 8px !important;"><input style="background-color:#CC9900!important;color:white;height: 73.506942px!important;width: 70px!important;font-weight: bold;font-size: 20px!important;" id="t012" type="text" readonly class ="46" name="19:15" value="7:15" onclick="timing(this)"/></td>
</tr>
<tr>
<td style="width:40px!important;padding:8px 8px 8px 8px !important;"><input style="background-color:#CCFF66!important;height: 73.506942px!important;width: 70px!important;font-weight: bold;font-size: 20px!important;"  id="M1" type="text" readonly class ="3" name="08:30" value="08:30" onclick="timing(this)"/> </td>
<td style="width:40px!important;padding:8px 8px 8px 8px !important;"><input  style="background-color:#CCFF66!important;height: 73.506942px!important;width: 70px!important;font-weight: bold;font-size: 20px!important;" id="M2" type="text" readonly class ="7" name="09:30" value="09:30" onclick="timing(this)"/> </td>
<td style="width:40px!important;padding:8px 8px 8px 8px !important;"><input style="background-color:#CCFF66!important;height: 73.506942px!important;width: 70px!important;font-weight: bold;font-size: 20px!important;"  id="M3" type="text" readonly class ="11" name="10:30" value="10:30" onclick="timing(this)"/> </td>
<td style="width:40px!important;padding:8px 8px 8px 8px !important;"><input style="background-color:#CCFF66!important;height: 73.506942px!important;width: 70px!important;font-weight: bold;font-size: 20px!important;"  id="M4" type="text" readonly class ="15" name="11:30" value="11:30" onclick="timing(this)"/> </td>
<td style="width:40px!important;padding:8px 8px 8px 8px !important;"><input style="background-color:#CC9900!important;color:white;height: 73.506942px!important;width: 70px!important;font-weight: bold;font-size: 20px!important;" id="M5" type="text" readonly class ="19" name="12:30" value="12:30" onclick="timing(this)"/> </td>
<td style="width:40px!important;padding:8px 8px 8px 8px !important;"><input style="background-color:#CC9900!important;color:white;height: 73.506942px!important;width: 70px!important;font-weight: bold;font-size: 20px!important;" id="M6" type="text" readonly class ="23" name="13:30" value="1:30" onclick="timing(this)"/> </td>
<td style="width:40px!important;padding:8px 8px 8px 8px !important;"><input style="background-color:#CC9900!important;color:white;height: 73.506942px!important;width: 70px!important;font-weight: bold;font-size: 20px!important;" id="M7" type="text" readonly class ="27" name="14:30" value="2:30" onclick="timing(this)"/> </td>
<td style="width:40px!important;padding:8px 8px 8px 8px !important;"><input style="background-color:#CC9900!important;color:white;height: 73.506942px!important;width: 70px!important;font-weight: bold;font-size: 20px!important;" id="M8" type="text" readonly class ="31" name="15:30" value="3:30" onclick="timing(this)"/> </td>
<td style="width:40px!important;padding:8px 8px 8px 8px !important;"><input style="background-color:#CC9900!important;color:white;height: 73.506942px!important;width: 70px!important;font-weight: bold;font-size: 20px!important;" id="M9" type="text" readonly class ="35" name="16:30" value="4:30" onclick="timing(this)"/> </td>
<td style="width:40px!important;padding:8px 8px 8px 8px !important;"><input style="background-color:#CC9900!important;color:white;height: 73.506942px!important;width: 70px!important;font-weight: bold;font-size: 20px!important;" id="M10" type="text" readonly class ="39" name="17:30" value="5:30" onclick="timing(this)"/></td>
<td style="width:40px!important;padding:8px 8px 8px 8px !important;"><input style="background-color:#CC9900!important;color:white;height: 73.506942px!important;width: 70px!important;font-weight: bold;font-size: 20px!important;" id="M11" type="text" readonly class ="43" name="18:30" value="6:30" onclick="timing(this)"/> </td>
<td style="width:40px!important;padding:8px 8px 8px 8px !important;"><input style="background-color:#CC9900!important;color:white;height: 73.506942px!important;width: 70px!important;font-weight: bold;font-size: 20px!important;" id="M12" type="text" readonly class ="47" name="19:30" value="7:30" onclick="timing(this)"/></td>
</tr>
<tr>
<td style="width:40px!important;padding:8px 8px 8px 8px !important;"><input style="background-color:#CCFF66!important;height: 73.506942px!important;width: 70px!important;font-weight: bold;font-size: 20px!important;"  id="M01" type="text" readonly class ="4" name="08:45" value="08:45" onclick="timing(this)"/> </td>
<td style="width:40px!important;padding:8px 8px 8px 8px !important;"><input style="background-color:#CCFF66!important;height: 73.506942px!important;width: 70px!important;font-weight: bold;font-size: 20px!important;"  id="M02" type="text" readonly class ="8" name="09:45" value="09:45" onclick="timing(this)"/> </td>
<td style="width:40px!important;padding:8px 8px 8px 8px !important;"><input style="background-color:#CCFF66!important;height: 73.506942px!important;width: 70px!important;font-weight: bold;font-size: 20px!important;" id="M03" type="text" readonly class ="12" name="10:45" value="10:45" onclick="timing(this)"/> </td>
<td style="width:40px!important;padding:8px 8px 8px 8px !important;"><input style="background-color:#CCFF66!important;height: 73.506942px!important;width: 70px!important;font-weight: bold;font-size: 20px!important;"  id="M04" type="text" readonly class ="16" name="11:45" value="11:45" onclick="timing(this)"/> </td>
<td style="width:40px!important;padding:8px 8px 8px 8px !important;"><input style="background-color:#CC9900!important;color:white;height: 73.506942px!important;width: 70px!important;font-weight: bold;font-size: 20px!important;" id="M05" type="text" readonly class ="20" name="12:45" value="12:45" onclick="timing(this)"/> </td>
<td style="width:40px!important;padding:8px 8px 8px 8px !important;"><input style="background-color:#CC9900!important;color:white;height: 73.506942px!important;width: 70px!important;font-weight: bold;font-size: 20px!important;"id="M06" type="text" readonly class ="24" name="13:45" value="1:45" onclick="timing(this)"/> </td>
<td style="width:40px!important;padding:8px 8px 8px 8px !important;"><input style="background-color:#CC9900!important;color:white;height: 73.506942px!important;width: 70px!important;font-weight: bold;font-size: 20px!important;"id="M07" type="text" readonly class ="28" name="14:45" value="2:45" onclick="timing(this)"/> </td>
<td style="width:40px!important;padding:8px 8px 8px 8px !important;"><input style="background-color:#CC9900!important;color:white;height: 73.506942px!important;width: 70px!important;font-weight: bold;font-size: 20px!important;"id="M08" type="text" readonly class ="32" name="15:45" value="3:45" onclick="timing(this)"/> </td>
<td style="width:40px!important;padding:8px 8px 8px 8px !important;"><input style="background-color:#CC9900!important;color:white;height: 73.506942px!important;width: 70px!important;font-weight: bold;font-size: 20px!important;"id="M09" type="text" readonly class ="36" name="16:45" value="4:45" onclick="timing(this)"/> </td>
<td style="width:40px!important;padding:8px 8px 8px 8px !important;"><input style="background-color:#CC9900!important;color:white;height: 73.506942px!important;width: 70px!important;font-weight: bold;font-size: 20px!important;"id="M010" type="text" readonly class ="40" name="17:45" value="5:45" onclick="timing(this)"/></td>
<td style="width:40px!important;padding:8px 8px 8px 8px !important;"><input style="background-color:#CC9900!important;color:white;height: 73.506942px!important;width: 70px!important;font-weight: bold;font-size: 20px!important;"id="M011" type="text" readonly class ="44" name="18:45" value="6:45" onclick="timing(this)"/> </td>
<td style="width:40px!important;padding:8px 8px 8px 8px !important;"><input style="background-color:#CC9900!important;color:white;height: 73.506942px!important;width: 70px!important;font-weight: bold;font-size: 20px!important;"id="M012" type="text" readonly class ="48" name="19:45" value="7:45" onclick="timing(this)"/></td>
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
          <h4 class="modal-title" id="addcustomerLabel" style=";color:#0B8EB6;width:500px!important;"><center>Add a Customer</center></h4>
        </div><div class="container"></div>
        <div  class="modal-body" style="width:500px!important;">
  
<?php echo $this->Form->create('Customer', array('Controller'=>'Customer','action'=>'ajaxadd','id'=>'custaddform')); ?>
<fieldset>
 		 <table style="margin-left:100px" class="form">

<tr><td><label>Complete Name</label></td><td><?php echo $this->Form->input('name' ,array('label'=>'','style'=>' ;margin-left:-2px' ));;?></td></tr>
<tr><td><label>Phone</label></td><td><?php echo $this->Form->input('phone' ,array('label'=>'','id' => 'CustomerPhone','style'=>' ;text-align:left;width:150px','type'=>'number'  ));;?></td></tr>
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
	<!-- Product of order  -->
	<div>
	<!--<div id="dialog" title="Basic dialog" style="display:none;">
  <p>This is the default dialog which is useful for displaying information. The dialog window can be moved, resized and closed with the 'x' icon.</p>
</div>-->


        <div id="dialog" title="Alert message" style="display: none">
            <div class="ui-dialog-content ui-widget-content">
                <p>
                    <span class="ui-icon ui-icon-alert" style="float: left; margin: 0 7px 20px 0"></span>
                    <label id="lblMessage">
                    </label>
                </p>
            </div>
        </div>
		  <div id="dialog2" title="Alert message" style="display: none">
            <div class="ui-dialog-content ui-widget-content">
                <p>
                    <span class="ui-icon ui-icon-alert" style="float: left; margin: 0 7px 20px 0"></span>
                    <label id="lblMessage2">
                    </label>
                </p>
            </div>
        </div>




   <!--link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css"-->
     <script language="JavaScript">

  $(function() {

     $("#addP").click(function() {
  $('#myModalAddProduct2').modal('show');
  });
 
 
  $("#categ").click(function() {
  $('#myModalAddProduct2').modal('show');
  });
 
 });
/*  $('#addprodform').submit(function(e){
     // alert("here");
	  // return false;
    e.preventDefault(); // Prevent Default Submission
    alert("here");
    $.ajax({
  url: '/products/hadd',
  type: 'POST',
  data: $(this).serialize(),
            beforeSend: function(){
                $('#addprodtitle').html('<h3><center>Adding ...</center></h3>');
            },
            complete:function()
            {
              location.reload(true);
              //location.href = location.href;
            }
        });
    
}); */
 </script> 
 
 
	<!-- Modal -->   

	<!-- Script Product of order -->
	<input type="hidden" id="previousspicy" />
	<input type="hidden" id="previouscut" />
	<input type="hidden" id="lastselected" />
	 </body>
<script language="JavaScript">
 // product selection
 var lastproduct;
function prodselect(col){
	selected2=false;
   var currentproduct = $('.productselect').index(col);
  if ((currentproduct!=lastproduct) && (lastproduct != null))
  {
    $('.productselect:eq('+lastproduct+')').closest('tr').children('td,th')
        .css('background-color', '#f9f9f9');

  }
      // Highlight column 
      $('.productselect:eq('+currentproduct+')').closest('tr').children('td,th').css('background-color', '#d3d3d3');
      // load product informations
      var name = $('.productselect:eq('+currentproduct+')').closest('tr').children('td').eq(0).text();
      var qte = $('.productselect:eq('+currentproduct+')').closest('tr').children('td').eq(1).text();
      var instr = $('.productselect:eq('+currentproduct+')').closest('tr').children('td').eq(2).text();
      tomodify2 = true;

      var nsname = name.replace(/\s/g, '');
      $("#myTable2 td:contains("+nsname+")").text(function(){ 

        var cat_index = $(this).closest('tr').attr('id');
        cat_index = cat_index.replace('list','');
        cat_index = '#'+cat_index;
        $(cat_index).trigger('click');
        $(this).click();
        //$(this).trigger('click');
        //$(this).css('background-color','rgb(115, 224, 94)');

      });
      $('#btnsub1').prop('disabled',true);
      $('#btnsub2').prop('disabled',false);
      $('#tdspicy').css('border','1px solid #E6E6E6');
      $('#tdcut').css('border','1px solid #E6E6E6');
     $('#'+previousselected).val(nsname);
      $('#inputqty_id').val(parseInt(qte));
	  
	  var pinstr = instr.indexOf("  - ");
	  if( pinstr > -1){
		instr1=instr.substring(0, pinstr);
	  instr2=instr.substring(pinstr+4);
      $('#write').val(instr1);
      $('#write2').val(instr2);
	  }
	  else{
		 $('#write').val(instr);  
	  }
	  
      $('#Quantity2').val(parseInt(qte));
      $('#Instructions2').val(instr);
      

      var ka=arrayabrv.indexOf(nsname);
      var kn=arraynom.indexOf(arraynom[ka]);
     
    var pid =arraynumero[kn]; 
    //alert(pid);
    $('#Item2').val(pid);
       $('#id2').val(pid);
      //alert(ka);

      $('#idtextarea1').val(arraynom[ka]);
  
        lastproduct = currentproduct;
        selected2=true;

 }
 
/* 
function timing(elm)
 { 
var idelm=elm.id;
var val =document.getElementById(idelm).value ;
document.getElementById('temps').value=val; 
  $('#myModal2').modal('hide');

 }
 */
   /* $('#myModalAddProduct2').on('shown', function() {
     alert('hello');
	 document.getElementById('Quantity').value="";
	 document.getElementById('Item').value="";
	 document.getElementById('write').value="";
    }) */
	function modifybtn(){
	if (tomodify2 == false)
    {  last="";//added after send mail
        document.getElementById("lastselected").value="";
        document.getElementById("previouscut").value="";
        document.getElementById("previousspicy").value="";
        document.getElementById('idtextarea1').value=tomodify;    
         
          t= document.getElementById(previousselected).getAttribute("name");
          
          
           var k=arrayabrv.indexOf(t);
          
          prev=arraynom[k];
        
         var kn=arraynom.indexOf(tomodify);
         
        document.getElementById('Item2').value=arraynumero[kn];    
        document.getElementById('Instructions2').value= document.getElementById('write').value+'  - '+document.getElementById('write2').value; 
        document.getElementById('id2').value=arraynumero[kn];    
         var x = document.getElementsByName(arrayabrv[kn]);
        
        if (tomodify != prev){ 
          document.getElementById(previousselected).style.backgroundColor='#ddd';
          x[0].style.backgroundColor='#73e05e';
          }
          setTimeout(
      function() 
      {
      if(document.getElementById('inputqty_id').value.length ==0 ){
      document.getElementById('inputqty_id').value="1";
      document.getElementById('Quantity2').value="1";
      }
    
      }, 1500);
              
          
          
       setTimeout(
      function() 
      {
      
        document.getElementById('btnsub1').disabled = false;
        document.getElementById('btnsub2').disabled = true;
         document.getElementById('inputqty_id').value='';
           document.getElementById('idtextarea1').value='';
           document.getElementById('write').value='';
           document.getElementById('write2').value='';
           document.getElementById(previousselected).style.backgroundColor='#ddd';
           arrayprodinst[indice]=document.getElementById('Instructions2').value;
           arrayprodqty[indice]=document.getElementById('Quantity2').value;
           x[0].style.backgroundColor='#ddd';
      }, 1500);

    }
    else
    {
		selected2=false;
      document.getElementById('Instructions2').value= document.getElementById('write').value+'  - '+document.getElementById('write2').value; 
      last="";//added after send mail
        document.getElementById("lastselected").value="";
        document.getElementById("previouscut").value="";
        document.getElementById("previousspicy").value="";
        document.getElementById('idtextarea1').value=tomodify;    
         
          t= document.getElementById(previousselected).getAttribute("name");
          
          
           var k=arrayabrv.indexOf(t);
          
          prev=arraynom[k];
        
         var kn=arraynom.indexOf(tomodify);
            
         var x = document.getElementsByName(arrayabrv[kn]);
        
        if (tomodify != prev){ 
          document.getElementById(previousselected).style.backgroundColor='#ddd';
          x[0].style.backgroundColor='#73e05e';
          }
          setTimeout(
      function() 
      {
      if(document.getElementById('inputqty_id').value.length ==0 ){
      document.getElementById('inputqty_id').value="1";
      document.getElementById('Quantity2').value="1";
      }
    
      }, 1500);
              
          
          
       setTimeout(
      function() 
      {
      
        document.getElementById('btnsub1').disabled = false;
        document.getElementById('btnsub2').disabled = true;
         document.getElementById('inputqty_id').value='';
           document.getElementById('idtextarea1').value='';
           document.getElementById('write').value='';
           document.getElementById('write2').value='';
           document.getElementById(previousselected).style.backgroundColor='#ddd';
           arrayprodinst[indice]=document.getElementById('Instructions2').value;
           arrayprodqty[indice]=document.getElementById('Quantity2').value;
           x[0].style.backgroundColor='#ddd';
      }, 1500);
       tomodify2 = false;
    }
	}
		
 function select(elem)
 {
	 if (selected2==false)
	 {
	// alert(stoppropagation);
	if(stoppropagation == false){
 
if(previousselected !=""){
	
	 document.getElementById(previousselected).style.backgroundColor='#ddd';
}
var idelm=elem.id;
  nomelm= idelm.replace("item", "");
 document.getElementById(idelm).style.backgroundColor='#73e05e';

 sel=document.getElementById('Item');
 sel2=document.getElementById('Item2');
 sel3=document.getElementById('id2');

sel.value= nomelm;
	
sel2.value= nomelm;
sel3.value= nomelm;

idelem=elem.id;
	
	abrv=elem.getAttribute("name");
	
	  codejs1 = elem.getAttribute("name");
   
	var ka=arrayabrv.indexOf(abrv);
		document.getElementById('idtextarea1').value=arraynom[ka];
	
			previousselected=idelm;
		//tomodify=idelm;
	}	
	}	
 }
	function enterbtn2(){
		
		last="";//addded after send mail
		document.getElementById("lastselected").value="";
		document.getElementById("previouscut").value="";
		document.getElementById("previousspicy").value="";
		item=document.getElementById('Item').value;
		q=document.getElementById('Quantity').value;
		if(item==""){
		//	alert('You should select an item !');
			forget=true;
		  $(document).ready(function(){
                
ShowCustomDialog();

                  });
		//test alerte
		  /* $( "#dialog" ).animate({
          backgroundColor: "#aa0000",
          color: "#fff",
          width: 500
        }, 1000 );
	 $( "#dialog" ).dialog(); */
		
		
		}
		else{
			forget=false;
		 var k=arrayprodid.indexOf(item);
		
		  if( k == -1){
 //btn enter
			  document.getElementById('tdspicy').style.border = '1px solid #E6E6E6';
	  document.getElementById('tdcut').style.border = '1px solid #E6E6E6';

	    /*    divkeyboard=document.getElementById('containerkeyboard'); 
		   divkeyboard.style.display = 'none';
		  */  document.getElementById('Instructions').value= document.getElementById('write').value+'  - '+document.getElementById('write2').value;
		   document.getElementById('Instructions2').value= document.getElementById('write').value+'  - '+document.getElementById('write2').value;

		 
			 
			 //end btn enter1
	  var codejs2=document.getElementById('Quantity').value;
if (codejs2==""){codejs2=1;}
	var codejs3=document.getElementById('Instructions').value;
	  document.getElementById("write").value=''; 
	  document.getElementById("write2").value=''; 
it=document.getElementById('Item').value;

or=document.getElementById('Order').value;
conf='"'+'Are you sure to delete the product : '+codejs1+' ?"';
var x = document.getElementById("myTable").rows.length;

var d= <?php echo json_encode($def); ?>;
var d2= <?php echo json_encode($def); ?>;


var codejs5='pointer';
if ((codejs1 != "") && (document.getElementById('idtextarea1').value != "")){
if(x==1){
	
	$("<tr id='idtr'><td orderid='"+d+"' prodid='' onMouseOver='this.style.cursor="+codejs5+";'  onclick='prodselect(this);' class='productselect' style='width:25%;color:#428bca;text-align:center;font-size:130%;font-weight:bold;'>"+codejs1+" </td> <td style='width:20%;text-align: center;font-size: 130%;font-weight: bold;'>"+codejs2+"</td>	 <td style='width:40%;text-align: center;font-size: 130%;font-weight: bold;min-height:39px!important;'>"+codejs3+"</td> <td style='width:15%'><a onclick='return confirm("+conf+")' href='http://ordersentry.enterpriseesolutions.com/products/delete3/"+or+"/"+it+"/order'><center><img  style='min-width:18px!important;height: 21px;' src='/img/supp.png'> </img> </center></a></td></tr>").prependTo("#myTable > tbody");
	}
else{
	
	$("#myTable > tbody >#idtr").last().after("<tr id='idtr'><td  orderid='"+d+"' prodid='' onMouseOver='this.style.cursor="+codejs5+";'  onclick='prodselect(this);' class='productselect' style='width:25%;color:#428bca;text-align: center;font-size: 130%;font-weight: bold;'> "+codejs1+"</td><td style='width:20%;text-align: center;font-size: 130%;font-weight: bold;'>"+codejs2+"</td>	 <td style='width:40%;text-align: center;font-size: 130%;font-weight: bold;min-height:39px!important;'>"+codejs3+"</td> <td style='width:15%'><a onclick='return confirm("+conf+")' href='http://ordersentry.enterpriseesolutions.com/products/delete3/"+or+"/"+it+"/order'><center><img  style='height: 21px;min-width:18px!important;' src='/img/supp.png'> </img> </center></a></td></tr>");
	}
		//	$('#myTable > tbody > tr:first').before("<tr id='idtr'><td style='width:30%;color:#428bca;text-align: center;'><a href='http://ordersentry.enterpriseesolutions.com/products/edit3/"+or+"/"+it+"/order'>"+codejs1+"</a> </td> <td style='width:20%;text-align: center;'>"+codejs2+"</td>	 <td style='width:35%;text-align: center;'>"+codejs3+"</td> <td style='width:15%'><a onclick='return confirm("+conf+")' href='http://ordersentry.enterpriseesolutions.com/products/delete3/"+or+"/"+it+"/order'><center><img  style='min-width:18px!important;' src='/img/supp.png'> </img> </center></a></td></tr>");
	
	}
	}
		if(document.getElementById('inputqty_id').value.length ==0 ){
			
		document.getElementById('inputqty_id').value="1";
		/* $( "#inputqty_id" ).val()="1";
		alert('here'); */
		document.getElementById('Quantity').value="1";
	
			}
	//	alert(document.getElementById('inputqty_id').value.length );
		item=document.getElementById('Item').value;
		itemst=document.getElementById('Instructions').value;
		itemqty=document.getElementById('Quantity').value;
		 var k=arrayprodid.indexOf(item);
		 indice=k;
		  if( k == -1){
			
			 comptprod=comptprod+1;
			 arrayprodid[comptprod]=item;
			 arrayprodinst[comptprod]=itemst;
			 arrayprodqty[comptprod]=itemqty;
			  exist=false;
			  document.getElementById('inputqty_id').value='';
			 document.getElementById('idtextarea1').value='';
			 document.getElementById('write').value='';
			 document.getElementById('write2').value='';
			 	
			 document.getElementById(previousselected).style.backgroundColor='#ddd';
		 }
		 else{
			 
			 exist=true;
		
			   var txt;
			  /*   $(document).ready(function(){
                
ShowCustomDialog2();

                  }); */
				   $(document).ready(function(){
					    alert('here');
	title='Warning';	              
content='This item already in this order! Would you like to modify?!';
btn1text='Yes';
btn2text='No';
functionText='GoToAssetList';
parameterList=null;
			  var btn1css;
                var btn2css;

                if (btn1text == '') {
                    btn1css = "hidecss";
                } else {
                    btn1css = "showcss";
                }

             if (btn2text == '') {
                    btn2css = "hidecss";
                } else {
                    btn2css = "showcss";
                } 
				alert('here3');
                $("#lblMessage2").html(content);

                $("#dialog2").dialog({
                    resizable: false,
                    title: title,
                    modal: true,
                    width: '600px',
					minHeight: 300,
                    height: 'auto',
                    bgiframe: false,
					 classes: {"ui-dialog": "highlight" },
                    hide: { effect: 'scale', duration: 400 },

                    buttons: [
                                    {
                                        text: btn1text,
                                        "class": btn1css,height: '50px',width:'100px',
                                        click: function () {
											alert('have to close');
											    $('#dialog2').hide();
                                               //     $("#dialog2").dialog('close');                                  
											   //  $( this ).dialog( "close" );
                                       		document.getElementById('tdspicy').style.border = '1px solid #E6E6E6';
	  document.getElementById('tdcut').style.border = '1px solid #E6E6E6';
	
	
		document.getElementById('btnsub1').disabled = true;
		document.getElementById('btnsub2').disabled = false;

     document.getElementById('inputqty_id').value=arrayprodqty[k] ;
	 
     document.getElementById('idtextarea1').value="" ;
	document.getElementById('write').value= arrayprodinst[k];
	//document.getElementById('write2').value= arrayprodinst2[k];
	abrv=document.getElementById(previousselected).getAttribute("name");
		 var ka=arrayabrv.indexOf(abrv);
		document.getElementById('idtextarea1').value=arraynom[ka];
		
		
		tomodify=arraynom[ka];
	
		// block select product to modify from list
    $('.productselect').attr('onclick','');
    $('.items').attr('onclick','');

  //$("#dialog2").dialog('close');

                                        }
                                    },
									{
                                        text: btn2text,
                                        "class": btn1css,height: '50px',width:'100px',
                                        click: function () {
											//   $("#dialog2").dialog('close'); 
                                              	setTimeout(
  function() 
  {
	
	  document.getElementById('inputqty_id').value='';
			 document.getElementById('idtextarea1').value='';
			 document.getElementById('write').value='';
			 document.getElementById('write2').value='';
			 codejs1="";
			 codejs2="";
			 codejs3="";
/* 			 document.getElementById('Quantity').value='';
			 document.getElementById('Item').value='';
			 document.getElementById('Instructions').value=''; */
		
			 document.getElementById(previousselected).style.backgroundColor='#ddd';
  }, 1500);                                      
                                          

                                        }
										
                                    }
                                ]
                });
				//end fct dailog
				  
				  
 });
				  
				  
   /* var r = confirm("This item already in this order! Would you like to modify? ");
    if (r == true) {
		document.getElementById('tdspicy').style.border = '1px solid #E6E6E6';
	  document.getElementById('tdcut').style.border = '1px solid #E6E6E6';
	
	
		document.getElementById('btnsub1').disabled = true;
		document.getElementById('btnsub2').disabled = false;

     document.getElementById('inputqty_id').value=arrayprodqty[k] ;
	 
     document.getElementById('idtextarea1').value="" ;
	document.getElementById('write').value= arrayprodinst[k];
	//document.getElementById('write2').value= arrayprodinst2[k];
	abrv=document.getElementById(previousselected).getAttribute("name");
		 var ka=arrayabrv.indexOf(abrv);
		document.getElementById('idtextarea1').value=arraynom[ka];
		
		
		tomodify=arraynom[ka];
	
		// block select product to modify from list
    $('.productselect').attr('onclick','');
    $('.items').attr('onclick','');
// var x = document.getElementsByClassName("items");


  
    } else {
		setTimeout(
  function() 
  {
	
	  document.getElementById('inputqty_id').value='';
			 document.getElementById('idtextarea1').value='';
			 document.getElementById('write').value='';
			 document.getElementById('write2').value='';
			 codejs1="";
			 codejs2="";
			 codejs3="";
		// document.getElementById('Quantity').value='';
			// document.getElementById('Item').value='';
			// document.getElementById('Instructions').value=''; 
		
			 document.getElementById(previousselected).style.backgroundColor='#ddd';
  }, 1500);
         	
    }*/
  
			 } 
			 
		}
	}
   function visibilite(divId)
    {  
divtextarea=document.getElementById('write');
divtextarea2=document.getElementById('write2');
if( divtextarea.style.display != 'inline' ) {divtextarea.style.display='inline';divtextarea2.style.display='inline';}
divtextarea=document.getElementById('containerkeyboard');
//if( divtextarea.style.display != 'block' ) {divtextarea.style.display='block';}
//if( divtextarea.style.display != 'inline' ) {divtextarea.style.display='none';}
// divtextarea.style.display='inline';
	//alert('nb=   '+nbcateg);
 for (i=1; i<= nbcateg ; i++){
	// alert(i);
	 var tested='list'+i;
	 if(divId == tested )
	   {
		   //alert('div visible='+divId);
		 divPrecedent=document.getElementById(divId); 
		 //divtextarea=document.getElementById('write'); 
		 
  if( (divPrecedent != null) && ( divPrecedent.style.display != 'table-row' )) { 		 
		 divPrecedent.style.display='table-row';
		// divtextarea.style.display='inline';
		var nn='write';
		var vide='';
		//<td style='background-color:white!important;padding-left:0px!important;padding-right:0px!important;padding-top:0px!important;padding-bottom:0px!important;width:13%!important;'><button id='btnenter' style='background-color:white!important;width: 110px!important;height: 76px!important;padding-top:0px!important;padding-bottom:0px!important;'  type='button'  onclick='enterbtn();' class='btn btn-round btn-default'>Enter</button></td>
		 $("#myTable2 > tbody >#list"+i+"").last().after("<tr style='background-color:#abaeb2!important;height:50px;display:table-row;' id='listimg"+i+"'  ><td id='tdspicy' style='width:15%!important;background-color:white;border: 1px solid #E6E6E6;' ><img style='width: 100px;height: 60px;' src='/img/spicy.png' onclick='btnspicy();' > </img></td><td style='width:15%!important;background-color:white;border: 1px solid #E6E6E6;' id='tdcut' ><img style='width: 100px;height: 60px;' src='/img/box.png'onclick='btncut();'> </img></td><td style='width:15%!important;background-color:white;' ><img style='width: 100px;height: 60px;' src='/img/arrows.png' onclick='btnswitch();'> </img></td><td style='height:78px;width:40.7%!important;background-color:white!important;' ></td><td style='background-color:white!important;padding-left:0px!important;padding-right:0px!important;padding-top:0px!important;padding-bottom:0px!important;width:13%!important;'><button id='btnclr' style='background-color:white!important;width: 110px!important;height: 76px!important;padding-top:0px!important;padding-bottom:0px!important;'  type='button'  onclick=document.getElementById('write').value='';  class='btn btn-round btn-default'>CLR</button></td></tr>");
	   }}
	   else
		   { odiv='list'+i; odivimg='listimg'+i;
	  // alert('=='+odiv);
	   OtherDiv=document.getElementById(odiv); 
	 
			   OtherDiv.style.display='none'; 
			     OtherDivIMG=document.getElementById(odivimg); 
				// alert(OtherDivIMG);
			 if(OtherDivIMG != null){ OtherDivIMG.style.display='none'; }

			   }

	}
  
	
     
    }


  
 function enterbtn(){
	//$('#myModalAddProduct2').modal('hide');	 
	//alert("hello from enterbtn");
	 document.getElementById('tdspicy').style.border = '1px solid #E6E6E6';
	  document.getElementById('tdcut').style.border = '1px solid #E6E6E6';

	       divkeyboard=document.getElementById('containerkeyboard'); 
		   divkeyboard.style.display = 'none';
		   document.getElementById('Instructions').value= document.getElementById('write').value;
		   document.getElementById('Instructions').value= document.getElementById('write2').value;
		   document.getElementById('Instructions2').value= document.getElementById('write').value;
		   document.getElementById('Instructions2').value= document.getElementById('write2').value;
		   document.getElementById("write").value=''; 
		   document.getElementById("write2").value=''; 
 }
 
/*	
 function saveqty(){
	
 document.getElementById('Quantity').value= document.getElementById('inputqty_id').value;
  //document.getElementById("inputqty_id").value='';  
	 
 }

function btnclr(){
	 document.getElementById("write").value=''; 
}
*/
function refresh(){
	location.reload();
}
 function btnspicy(){
	 
		/*  else {alert(writeprev);
		// document.getElementById("write").value=writeprev+'\\\n';
		//  document.getElementById("write").value =  document.getElementById("write").value.replace(/\r?\n/g, '<br />');
		// alert(writeprev.length);
		document.getElementById("write").value = document.getElementById("write").value+"\n";
		 }
  */
	last= document.getElementById("lastselected").value; 
	  document.getElementById('tdspicy').style.border = '1px solid black';
	  document.getElementById('tdcut').style.border = '1px solid #E6E6E6';
	   if(document.getElementById('previouscut').value==arraycut[4]){document.getElementById("write").value=arrayspicy[0];}
else { 
	if ( (last==2) && ( (document.getElementById("write").value) !="") )
	{document.getElementById("write").value=arrayspicy[0]+' - '+(document.getElementById('previouscut').value);}
	else {document.getElementById("write").value=arrayspicy[0]+' - '+(document.getElementById('previouscut').value);}
		
	
			 divkeyboard=document.getElementById('containerkeyboard'); 
			 	if (last==""){document.getElementById("write").value=arrayspicy[0];}
			 document.getElementById("previousspicy").value=arrayspicy[0];
 }
		
 // if(  divkeyboard.style.display == 'none' )  { 		 
//		 divkeyboard.style.display='block';  }
   document.getElementById("lastselected").value=1; 
 }
 
 function btncut(){
last= document.getElementById("lastselected").value;
	  document.getElementById('tdspicy').style.border = '1px solid #E6E6E6';
	  document.getElementById('tdcut').style.border = '1px solid black';
if(document.getElementById('previousspicy').value==arrayspicy[3]){document.getElementById("write").value=arraycut[0];}
else { 
	 	 
	 if ( (last==1) && ( (document.getElementById("write").value) !="") ){document.getElementById("write").value=(document.getElementById('previousspicy').value)+' - '+arraycut[0];
	
		} 
	 else{  document.getElementById("write").value=(document.getElementById('previousspicy').value)+' - '+arraycut[0];
	 	
	 }
	 }
	 if (last==""){document.getElementById("write").value=arraycut[0];}
document.getElementById("previouscut").value=arraycut[0];
	document.getElementById("lastselected").value=2; 
 }
 
 function btnswitch(){
 new1=document.getElementById('previousspicy').value;
	 new2=document.getElementById('previouscut').value;
	 
	 last= document.getElementById("lastselected").value;
	
	 previous=document.getElementById('previousspicy').value;
	 previous2=document.getElementById("previouscut").value;
		  var k1=arrayspicy.indexOf(''+previous);
		  var k2=arraycut.indexOf(previous2);
	
	  if(last==1){
	  if( k1> -1)
	  {
		  if ( k1 == (arrayspicy.length-1) )
		  {
		  document.getElementById("previousspicy").value=arrayspicy[0];
		  new1=arrayspicy[0];
		  }
		  else
		  { 
	   
	  k1=k1+1;
	  document.getElementById("previousspicy").value=arrayspicy[k1];
		  new1=arrayspicy[k1];
		  
		  }
	  }
 }
 if(last==2){
	  if( k2> -1) 
	  {
		if (k2 == (arraycut.length-1) )
		  {
	
		 new2=arraycut[0];  
		
		   document.getElementById("previouscut").value=arraycut[0];
		     
		  }
		  else
		  {
	
			  k2=k2+1;
			  document.getElementById("previouscut").value=arraycut[k2];
			  
		  new2=arraycut[k2];
		
		  }  
		  
	  }
	  
 }
	if(last==1) 
	{
		if(new1==arrayspicy[3]){document.getElementById("write").value=new2;}
else{
		if((new2=="") || (  new2==arraycut[4])){document.getElementById("write").value=new1;}
else{	document.getElementById("write").value=new1+' - '+new2;
//alert('here1');
}
		}
		}
	if(last==2)
	{ 
if(new2==arraycut[4]){document.getElementById("write").value=new1;}
else{
if((new1=="") || (  new1==arrayspicy[3])){document.getElementById("write").value=new2;}
else{		document.getElementById("write").value=new1+' - '+new2;
//alert('here1');
}
		}
		}
		
		
	//	alert('test'+document.getElementById('write').value+'test');
	  if (document.getElementById('write').value=="    -    "){
		  
		  document.getElementById('write').value="";
		
	  }                                     
	  if (document.getElementById('write').value=="Pepper -    ")
	  {document.getElementById('write').value="Pepper ";}
 }
 //Pad Quantity
$(document).ready(function () {

    $('.num2').click(function () {
        var num2 = $(this);elm=document.getElementById('inputqty_id');
        var text = $.trim(num2.find('.txt').clone().children().remove().end().text());
		
        var inputqty = $('#inputqty_id');
		$(inputqty).val(inputqty.val() + text);
		if(text=='<--'){elm.value=elm.value.substring(0,(elm.value.length)-4);}
		 document.getElementById('Quantity').value= document.getElementById('inputqty_id').value;
		 document.getElementById('Quantity2').value= document.getElementById('inputqty_id').value;

    });


});
$('#btndone').click(function() {
		var vide=false;
	if ( (document.getElementById('write').value == "") &&   (document.getElementById('inputqty_id').value == "") && (document.getElementById('idtextarea1').value.length <2))  
	{//location.reload();


		vide=true;
		 $( "#OrderEditForm" ).submit();
		}
	
	if(vide == false)
	{
	
var result = confirm("Last item not saved ! Want to leave?");
        if (result) {
		 $( "#OrderEditForm" ).submit();
		}
		}
	
    
});
function btnup(){
	current=document.getElementById('inputqty_id').value;
	if( current == ""){
		document.getElementById('inputqty_id').value=1;
		 document.getElementById('Quantity').value= document.getElementById('inputqty_id').value;
		 document.getElementById('Quantity2').value= document.getElementById('inputqty_id').value;

	}
	if( current != ""){
		
		document.getElementById('inputqty_id').value=(parseInt(current))+1;
		 document.getElementById('Quantity').value= document.getElementById('inputqty_id').value;
		 document.getElementById('Quantity2').value= document.getElementById('inputqty_id').value;
	}
}
function eliminatespace(){
	
	//alert('test'+document.getElementById('write').value+'test');
	  if (document.getElementById('write').value=="    -    "){
		  
		  document.getElementById('write').value="";
	  }
}
function btndown(){
	
	current=document.getElementById('inputqty_id').value;
	if( current != ""){
		
		document.getElementById('inputqty_id').value=(parseInt(current))-1;
		 document.getElementById('Quantity').value= document.getElementById('inputqty_id').value;
		 document.getElementById('Quantity2').value= document.getElementById('inputqty_id').value;
	}
}

$('#OrderCustomername2')	.keyboard({ layout: 'qwerty',autoAccept:1 });
$('#OrderInstructionorder')	.keyboard({ layout: 'qwerty',autoAccept:1 });
$('#write')	.keyboard({ layout: 'qwerty',autoAccept:1 });
$('#write2')	.keyboard({ layout: 'qwerty',autoAccept:1 });
 $(document).ready(function() {
  $('.addprodformc').on('submit', function(e){

      e.preventDefault();
	
    $.ajax({
  url: '/products/hadd',
  type: 'POST',
  data: $(this).serialize(),
            beforeSend: function(){
				if((exist==false) && (forget ==false)){
					stoppropagation=true;
					$('#addprodtitle').html('<h3><center>Adding ...</center></h3>');
					stoppropagation=true;
					//alert("here1");
             	 }
                 },
            complete:function()
            {
				stoppropagation=true;
              //location.reload(true);
   setTimeout(
  function() 
  {
	  if(forget==true){
		  document.getElementById('Quantity').value=q;
	  }
	  else{
		 document.getElementById('Quantity').value=''; 
	  }
	   
	   document.getElementById('Item').value='';
	   document.getElementById('Instructions').value='';
	   $('#addprodtitle').html('<h3><center></center></h3>');
    //do something special
	stoppropagation=false;
	  
  }, 1000);
			
            
		
            },
			success :function()
            {stoppropagation=false;}
        });
    stoppropagation=false;
  });
  
  
});
//form modify
$(document).ready(function() {
  $('.addprodformc2').on('submit', function(e){

      e.preventDefault();
	//alert('here');
    $.ajax({
		
  url: '/products/edit0/'+<?php echo json_encode($def); ?>,
  type: 'POST',
  data: $(this).serialize(),
            beforeSend: function(){
				//alert('here1');
				//if(exist==false){
					stoppropagation=true;
			$('#addprodtitle').html('<h3><center>Modifying ...</center></h3>');
			 stoppropagation=true;
             	// }
                
            },
            complete:function()
            {
				  e.stopImmediatePropagation();
          //// reactive select product to modify from list
          if ($('.productselect').attr('onclick') != 'prodselect(this);')
          {  $('.productselect').attr('onclick','prodselect(this);');}
	  if ($('.items').attr('onclick') != 'select(this);')
          {  $('.items').attr('onclick','select(this);');} 
              //location.reload(true);
                setTimeout(
  function() 
  {
	   $('#addprodtitle').html('<h3><center></center></h3>');
   document.getElementById('Quantity2').value='';
	
	   document.getElementById('Instructions2').value='';
  }, 1000);
                location.reload();
               // $( "#myTable" ).load( "./orders/edit/681" , "update=true");
			             },
			success :function()
            {stoppropagation=false;}
        });
    stoppropagation=false;

  });


  });

 /* $(document).ready(function() {
  $('.addprodformc2').on('submit', function(e){

      e.preventDefault();
	
    $.ajax({
  url: '/products/edit',
  type: 'POST',
  data: $(this).serialize(),
            beforeSend: function(){
				if(exist==false){
			$('#addprodtitle').html('<h3><center>Modifing ...</center></h3>');
			  	 }
                
            },
            complete:function()
            {
              //location.reload(true);
             
			 $('#addprodtitle').html('<h3><center>Added</center></h3>');
             $('#addprodtitle').html('<h3><center>Add Products to the Order</center></h3>');
		
            }
        });
    
  });
}); */
/*
$('#btndone').click(function() {
	var exist=false;
	if ( (document.getElementById('Instructions').value != "") ||    (document.getElementById('Quantity').value != "") ||  (document.getElementById('Item').value != ""))  
	{exist=true;}
	
	if(exist){
		var result = confirm("Want to leave?");
        if (result) {
		location.reload();
		}
		}
	else
	{location.reload();}
	
    
});
$(document).ready(function() {
      $('#myModalAddProduct2').on('shown', function() {
     alert('hello');
	 document.getElementById('Quantity').value="";
	 document.getElementById('Item').value="";
	 document.getElementById('write').value="";
    })
}); */

 // $('pquantity').numpad();
</script>
<!--<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.3.2/jquery.min.js"></script>
<script type="text/javascript" src="/js/keyboard.js"></script>-->


<?php
//  if( isset($_POST['btnsub2'])){}
  //$prods->edit($def,$id);
  ?>
  <style>
   #myTable td{height:50px!important;
    overflow: hidden;
    text-overflow: ellipsis;
   }th a {color:white!important;}
 table.table-fixedheader {
    width: 100%;   
}
/*table td{height:35px!important;}*/
 
 table.table-fixedheader, table.table-fixedheader>thead, table.table-fixedheader>tbody, table.table-fixedheader>thead>tr, table.table-fixedheader>tbody>tr, table.table-fixedheader>thead>tr>th, table.table-fixedheader>tbody>td {
    display: block;
}
table.table-fixedheader>thead>tr:after, table.table-fixedheader>tbody>tr:after {
    content:' ';
    display: block;
    visibility: hidden;
    clear: both;
}
 
 table.table-fixedheader>tbody {
    overflow-y: scroll;
     
}  
   table.table-fixedheader>thead {
    overflow-y: scroll;    
}
 
 table.table-fixedheader>thead::-webkit-scrollbar {
    background-color: inherit;
}
 
table.table-fixedheader>thead>tr>th:after, table.table-fixedheader>tbody>tr>td:after {
    content:' ';
    display: table-cell;
    visibility: hidden;
    clear: both;
}
 
 table.table-fixedheader>thead tr th, table.table-fixedheader>tbody tr td {
    float: left;
    word-wrap:break-word;
}
	  #tab input{background-color:#CCFF66!important;height: 73.506942px!important;width: 70px!important;font-weight: bold;font-size: 20px!important;margin-bottom: 8px;margin-top: 8px;height: 44.886359999999996px!important;}
#tab{  border-spacing: 25px!important;}
.ui-state-hover, .ui-state-active {
    color: #ffffff;
    text-decoration: none;
    background-color: #0088cc;
    border-radius: 0px;
    -webkit-border-radius: 0px;
    -moz-border-radius: 0px;
    background-image: none;
}
.ui-keyboard-button{padding:0px 0px 0px 0px!important;width:80px!important;height:80px!important;
    margin-left: 5px;
    margin-right: 5px;
    margin-bottom: 5px;
    margin-top: 5px;
}
.ui-keyboard-space {
    width: 150px!important;
    }
	.ui-keyboard-space{min-width:150px!important;}

ui-state-default{
    width: 65.544px!important;
    height: 65.544px!important;
}
.ui-datepicker td a{width: 75.544px!important;
    height: 75.544px!important;
	    font-size: 28px;}
	
	
	/*.ui-datepicker-unselectable {width: 81px!important;height: 100px!important;}
	 .ui-state-disabled {width: 81px!important;height: 100px!important;}*/
#ui-datepicker-div {width: 608.16px!important;height: 580.08px!important;}
.ui-menu-item-wrapper{    font-size: 38px!important;}
.ui-menu-item{    font-size: 38px!important;}
#tab input{background-color:#CCFF66!important;height: 73.506942px!important;width: 70px!important;font-weight: bold;font-size: 20px!important;margin-bottom: 8px;margin-top: 8px;height: 44.886359999999996px!important;}
#tab{  border-spacing: 25px!important;}
.ui-state-hover, .ui-state-active {
    color: #ffffff;
    text-decoration: none;
    background-color: #0088cc;
    border-radius: 0px;
    -webkit-border-radius: 0px;
    -moz-border-radius: 0px;
    background-image: none;
}
.ui-datepicker-next{width:40px!important;}
#liid{
	    height: 50px!important;
    width: 46px!important;
	    font-size: 22px!important;
		font-weight:bold!important;
}
	  .ui-keyboard-space{min-width:190px!important;}
	.ui-keyboard-text{font-size:40px!important;}
	.ui-keyboard-shift{width:100px!important;}

	.ui-keyboard-bksp{width:90px!important
  </style>
  <script>



			function ShowCustomDialog()
			{
                
			ShowDialogBox('Warning','You should select an item !','Ok', 'GoToAssetList',null);
			}
				function ShowCustomDialog2()
			{
                
			ShowDialogBox2('Warning','This item already in this order! Would you like to modify?!','Yes','No', 'GoToAssetList',null);
			}


            function ShowDialogBox(title, content, btn1text,  functionText, parameterList) {
                var btn1css;
                var btn2css;

                if (btn1text == '') {
                    btn1css = "hidecss";
                } else {
                    btn1css = "showcss";
                }

              /*   if (btn2text == '') {
                    btn2css = "hidecss";
                } else {
                    btn2css = "showcss";
                } */
                $("#lblMessage").html(content);

                $("#dialog").dialog({
                    resizable: false,
                    title: title,
                    modal: true,
                    width: '600px',
					minHeight: 300,
                    height: 'auto',
                    bgiframe: false,
					 classes: {"ui-dialog": "highlight" },
                    hide: { effect: 'scale', duration: 400 },

                    buttons: [
                                    {
                                        text: btn1text,
                                        "class": btn1css,height: '50px',width:'100px',
                                        click: function () {
                                                                                    
                                            $("#dialog").dialog('close');

                                        }
                                    }
                                ]
                });
            }
//modify
   function ShowDialogBox2(title, content, btn1text,btn2text,  functionText, parameterList) {
                var btn1css;
                var btn2css;

                if (btn1text == '') {
                    btn1css = "hidecss";
                } else {
                    btn1css = "showcss";
                }

             if (btn2text == '') {
                    btn2css = "hidecss";
                } else {
                    btn2css = "showcss";
                } 
                $("#lblMessage2").html(content);

                $("#dialog2").dialog({
                    resizable: false,
                    title: title,
                    modal: true,
                    width: '600px',
					minHeight: 300,
                    height: 'auto',
                    bgiframe: false,
					 classes: {"ui-dialog": "highlight" },
                    hide: { effect: 'scale', duration: 400 },

                    buttons: [
                                    {
                                        text: btn1text,
                                        "class": btn1css,height: '50px',width:'100px',
                                        click: function () {
                                                                                    
                                          alert('test');

                                        }
                                    },
									{
                                        text: btn2text,
                                        "class": btn1css,height: '50px',width:'100px',
                                        click: function () {
                                                                                    
                                             $("#dialog2").dialog('close'); 

                                        }
                                    }
                                ]
                });
            }
  </script>