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
	 <style>
	 .ui-state-default{color:black!important;}


.ui-datepicker td span, .ui-datepicker td a {
  display: inline-block;
  font-weight: bold;
  text-align: center;
  width: 50px;
  height:50px;
  line-height: 50px;
  color: black;
  text-shadow: 1px 1px 0px black;
  filter: dropshadow(color=black, offx=1, offy=1);
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
  width: 70px;
  height: 70px;
}
 .tds2{
	background-color:#00BFFF!important; 

	text-align:center;
	color:white;
	 cursor:pointer;
 }
 </style>
<style>
.form-control.ui-widget-content.ui-corner-all.ui-autocomplete-input.ui-keyboard-preview{width: 206.40626px;}
@import url(http://fonts.googleapis.com/css?family=Lato:300);
@import url(http://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.min.css);
body
{
    margin: 0;
    padding: 0;
   <!-- font-family: 'Lato' , sans-serif;-->
    color: #333;
    background-size: 100%;
    -webkit-font-smoothing: antialiased;
    -webkit-text-size-adjust: none;
    background-color: #475264;
}
.content{padding-top:0px;}
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
    <!--font-family: 'Lato' , sans-serif;-->
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
 #myTable #myTable2 td{height:50px!important;
    overflow: hidden;
    text-overflow: ellipsis;
    white-space: nowrap;}th a {color:white!important;}
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
#tab td {height:30px!important;padding-top:0px!important;}
#tab input{height:30px!important;font-size:15px!important;cursor:pointer;text-weight:bold;text-align:center;}
.ui-autocomplete { 
            position: absolute; 
            cursor: default; 
            height: 150px; 
            overflow-y: scroll; 
            overflow-x: hidden;
            z-index: 100!important;
        }
</style>
<!-- O P -->
 <link rel="stylesheet" type="text/css" href="/css/stylekeyboard.css" />
<!-- Abréviations // Nom complets items -->
<?php App::import('Controller', 'Items');
 $items = new ItemsController; ?>
<script type="text/javascript" >var cn2=0;
 var arrayabrv=new Array();
 var arraynom=new Array();
  
 </script>

<?php 

 $datan=array();
  
   //recuperation noms et numéros dossiers
  $abrv =$items->Abrv();
  $abrv =array_values($abrv);
  $nomsitems =$items->Nomsitems();
  $nomsitems =array_values($nomsitems);
  $datan = array();
      for ($i=0; $i < sizeof($nomsitems) ; $i++) { 
	   ?>
	  <script type="text/javascript">   //alert('cn='+cn);
	  cn2=cn2+1;</script><?php
      $datan[$i]=array("value"=>$abrv[$i], "label"=>$nomsitems[$i], "desc"=>$nomsitems[$i]);
	  ?>
	  <script type="text/javascript">
     arrayabrv[cn2]= ""+<?php echo json_encode($abrv[$i]); ?>;
     arraynom[cn2]= ""+<?php echo json_encode($nomsitems[$i]); ?>;
</script>
	  <?php
    }
	  $datan =array_values($datan);
	
	?>
  
<script  type="text/javascript">
var arrayspicy=new Array();
var arraycut=new Array();
arrayspicy[0]="No pepper";
arrayspicy[1]="SL.PEP";
arrayspicy[2]="Pepper";

arraycut[0]="Cut in 2";
arraycut[1]="Cut in 3";
arraycut[2]="Cut in 4";
arraycut[3]="Plastic 2's";
</script>
  <?php App::import('Controller', 'Orders');
 $orders = new OrdersController;
 // Liste Misions 
 $options=$orders->ListeOrders();
 $options2=$items->ListeItems();
 
 $qualifiers=array('Regular','Hot', 'Mild',  'Very Hot', 'Extra Hot' );
   App::import('Controller', 'Categories');
 $cats = new CategoriesController;
 $categories= $cats->ListeCats();

?>

  <script type="text/javascript" >var cn=0;
var cni=0;
 var arraynum=new Array();
 var arraynuminactif=new Array();
 var arraynominactif=new Array();
 var arraynumnominactif=new Array();
 var arraynomcust=new Array();
 var arraynumnomcust=new Array();
 </script>
 <body onload="styleauto();">
<div class=" form" style="margin-left: 30px;padding-top:0px;margin-top:0px;background-color:#f9f9f9;">
 <?php
 
 $options= array('Not Ready','Rready','Packed','Delivered','Cancelled');
  App::import('Controller', 'Customers');
 $customers = new CustomersController;
   	$cust=$customers->ListeCustomers();
    $custphone2 = array_unique($customers->PhoneCustomers());
    $custphone = $customers->PhoneCustomers();
    $custphoneinactif = $customers->PhoneCustomersInactif();
    $custnameinactif = $customers->NameCustomersInactif();
    //$custphoneDISTINCT = $customers->PhoneCustomersDISTINCT();
    $custphone = array_values($custphone);
    $custphoneinactif = array_values($custphoneinactif);
    $custnameinactif = array_values($custnameinactif);
    $custphone2 = array_values($custphone2);
    //$custphoneDISTINCT = array_values($custphoneDISTINCT);
	
    $custname = $customers->ListeCustomers();
    $custname = array_values($custname);
    $customersdata = array();
    $customersdata2 = array();
    $customersdata3 = array();
    for ($i=0; $i < sizeof($custphone) ; $i++) { 
	?>
	  <script type="text/javascript">  // alert('cn='+cn);
	  cn=cn+1;</script><?php
      $customersdata[$i]=array("value"=>$custphone[$i], "label"=>$custphone[$i], "desc"=>$custname[$i]);
	  	$customersdata2[$i]=$custphone[$i].'  '.$custname[$i];
      $customersdata3[$i]=$custname[$i].'  '.$custphone[$i];
		?>
	  <script type="text/javascript">
     arraynum[cn]= ""+<?php echo json_encode($custphone[$i]); ?>;
    arraynomcust[cn]=""+<?php echo json_encode($custname[$i]); ?>;
	 arraynumnomcust[cn]=""+<?php echo json_encode($custphone[$i]); ?>+"/"+<?php echo json_encode($custphone[$i]); ?>;

</script>
	  <?php
    }
	
	 for ($ii=0; $ii < sizeof($custphoneinactif) ; $ii++) { 
	?>
	  <script type="text/javascript">  
	  cni=cni+1;
     arraynuminactif[cni]= ""+<?php echo json_encode($custphoneinactif[$ii]); ?>;
     arraynominactif[cni]= ""+<?php echo json_encode($custnameinactif[$ii]); ?>;
	 
</script>
	  <?php
    }
	
	//$custphone = array_unique($custphone);
    $customersdata=array_values($customersdata);
	$customersdata2=array_values($customersdata2);
    $customersdata3=array_values($customersdata3);
 /*  App::import('Controller', 'Customers');
 $customers = new CustomersController;
  $options2=$customers->ListeCustomers();*/
 ?>
 <script  type="text/javascript">
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
                $('#addcustomerLabel').html('<center>Adding ...</center>');
            },
            complete:function()
            {
              //location.reload(true);
              setTimeout(function(){ $('#addcustomerLabel').html('<b style="color:green">Customer added successfully !</b>');},5000);
              $('#customer_id').val(phonec);
              $('#myModal4').hide();
              
            }
        });
    
});  	
 
 
   } );
  

  </script>
<?php echo $this->Form->create('Order',array('action'=>'add')); ?>
<fieldset>
         <h1 style="color:#3C8DBC;margin-top:0px;"><?php echo __('Add An Order '); ?></h1></br></br>
		<!-- <div style="margin-left:100px;width:400px;float:left"> -->
		<div class="col-sm-12" style="margin-left:0px;padding-left:0px;" id="myModal" >
		 <table style="border-collapse: separate;border-spacing: 10px; border:solid 3px #929393">
		
<tr>
<td style="width:30%!important;"><label style="color:#2AB9E6;font-size: 18px;">Date</label><?php echo $this->Form->input('date' ,array('type'=>'text','label'=>'','class'=>'datepicker','id'=>'datepicker','style'=>'margin-top: 20px ;margin-left:8px;width:150px;height: 37.727271px;font-size: 22px;font-weight: bold;','default'=> date('Y-m-d'),'onchange'=>'Verif();', 'required'=>'true' ));;?></br></td>
<td style="width:20%!important;padding-left: 25px;"><label style="color:#2AB9E6;font-size: 18px;margin-top:-28px;">Customer</label></br></br><div style="float:left;"><?php echo $this->Form->input('customer',['type' => 'text','placeholder'=>'(___) ___-____','pattern'=>'^\(([0-9]{3})\)[.]?([0-9]{3})[-. ]?([0-9]{4})$','maxlength'=>13,'onchange'=>'checkPhone();newCustomer()', 'label' => '','id'=>'customer_id','style'=>'margin-top: 10px;margin-bottom:0px!important;margin-left:10px!important;height: 37.727271px;font-size: 22px;font-weight: bold;','class'=>' form-control', 'required'=>'true']);?></div><div style=""> <img src="/img/Family-icon.png" style="display: none; margin-left: 20px;margin-top: 15px;" width="30px" id="custs2" /></div>
<!-- echo $this->Form->input('',array('type'=>'text','style'=>'height:10px;color:#F9F9F9;size: 5px;font-size: 12px;border:none;background-color : #F9F9F9!important;font-weight: bold;margin-top:0px!important;','id'=>'info','required'=>false,'value'=>'')); -->
</td>
<td ><?php echo $this->Form->input('customername', ['type' => 'text','onchange'=>'existingcustomer();','placeholder' => 'customer name','label' => '',/*'onfocusout'=>'hidekeyboard();',*/'class'=>'',/*'onfocus'=>'showkeyboard();',*/'id'=>'customer_name','style'=>'margin-left:10px!important;margin-top: 47px;height: 37.727271px;font-size: 22px;font-weight: bold;', 'required'=>'true']);?></td>

</tr>
<tr>
<td></td>
<td colspan="2">
<input type="textarea" rows="2" style="height: 30px;color: rgb(75, 180, 232);font-size: 18px;border: none;margin-left:25px;font-weight: bold;max-width: 600px!important;width: 600px !important;background-color: rgb(249, 249, 249) !important;margin-top: -20px !important;" id="info" readonly disabled />

</td>
</tr>
<tr><td><div style=" float: left; clear: none; "><div style="display:inline-block;"><label style="color:#2AB9E6;font-size: 18px;">Time</label><?php echo $this->Form->input('time' ,array('label'=>''  ,'min'=>'08:00', 'max'=>'20:00','style'=>' height: 37.727271px;font-size: 22px;font-weight: bold;;text-align:left;margin-left:10px;width:100px;' ,'id'=>'temps','onfocusout'=>'', 'required'=>'true'  ));;?></div><div style="display:inline-block;"><?php echo $this->Html->image('heure.png',array('id'=>'times', 'style'=>'')) ;?></div></div></td>
<!--<td style="padding-left: 25px;"> echo $this->Form->input('customername', ['type' => 'text','onchange'=>'existingcustomer();','placeholder' => 'customer name','label' => '',/*'onfocusout'=>'hidekeyboard();',*/'class'=>'',/*'onfocus'=>'showkeyboard();',*/'id'=>'customer_name','style'=>'margin-left:10px!important;margin-top: 40px;height: 37.727271px;font-size: 22px;font-weight: bold;', 'required'=>'true']);</td>-->
<td> <?php  		echo $this->Form->submit('Add', array('class' => 'form-submit', 'style'=>'margin-top:23px!important;margin-left:23px;', 'title' => 'Clic here to add the order    ') ); ?>
</td>
<td></td>
</tr>
 </table>
 <!--<td><img src="/img/customer.png" style="display:none;" width="40px" id="custs" /></td>-->

 
 </div>
 
             </fieldset>
<?php echo $this->Form->end(); ?>
</div>
<script>

var custs=<?php echo json_encode($customersdata3); ?>;
var nameee='';
var phoneee='';
//var custs=<?php echo json_encode($custname); ?>;
$('#customer_name')
	.keyboard({ layout: 'qwerty',autoAccept:1 })
	.autocomplete({
		source: custs
			,
    select: function( event, ui ) {
	  	var x = document.getElementsByClassName("ui-keyboard-preview");
		//alert(x[0].value);
		nameee=x[0].value;
		pos=x[0].value.indexOf('  ');
		x[0].value=x[0].value.substr(pos+2);
		ui.item.value=ui.item.value.substr(0,pos);
		x[0].value=ui.item.value; 
        return false; 
	    }
	})
	// position options added after v1.23.4
	.addAutocomplete({
		position : {
			of : null,        // when null, element will default to kb.$keyboard
			my : 'right top', // 'center top', (position under keyboard)
			at : 'left top',  // 'center bottom',
			collision: 'flip'
		}
	})
	.addTyping();
	//var custnums=<?php echo json_encode($custphone); ?>;
	var custnums=<?php echo json_encode($customersdata2); ?>;
	
    var accentMap = {
      ")": " ",
      ".": " ",
      "(": " "
    };
    var normalize = function( term ) {
      var ret = "";
      for ( var i = 0; i < term.length; i++ ) {
        ret += accentMap[ term.charAt(i) ] || term.charAt(i);
      }
	  ret = ret.replace(/\s/g, '');
	  return ret;
    };
	//var custnums=<?php echo json_encode($custphone2); ?>;
$('#customer_id')
	.keyboard({ layout: 'num',autoAccept:1 })
	.autocomplete({
		//source: custnums
		    source: function( request, response ) {
				  var term = $.trim(request.term)
        var matcher = new RegExp( $.ui.autocomplete.escapeRegex( request.term ), "i" );
        response( $.grep( custnums, function( value ) {
          value = value.label || value.value || value;
          return matcher.test( value ) || matcher.test( normalize( value ) );
        }) );
      }
	 	,
    select: function( event, ui ) {
	
		ui.item.value=ui.item.value.substr(0,13);
		var x = document.getElementsByClassName("ui-keyboard-preview");
		phoneee=x[0].value;
		x[0].value=ui.item.value;
        return false;
    } 
			})
	// position options added after v1.23.4
	.addAutocomplete({
		position : {
			of : null,        // when null, element will default to kb.$keyboard
			my : 'right top', // 'center top', (position under keyboard)
			at : 'left top',  // 'center bottom',
			collision: 'flip'
		}
		//,		 open: function( event, ui ) {alert('here');}
	})
.addTyping();
	//cut
	    $( "#customer_id" ).change(function() {
 	 if (phoneee.length > 13){
	 document.getElementById('customer_name').value=phoneee.substr(15);
	 document.getElementById('customer_id').value=phoneee.substr(0,13);
	 phoneee="";
	 }
}); 
   $( "#customer_name" ).change(function() {
		  ind1=nameee.indexOf('416');
	  ind2=nameee.indexOf('905');

	   if ((nameee.length > 15)  ){
	pos=nameee.indexOf('  ');
	
	 document.getElementById('customer_id').value=nameee.substr(pos+2);
	 
	// document.getElementById('customer_name').value=document.getElementById('customer_name').value.substr(0,pos);
	 nameee='';

	 }
});
	 
</script>
<script  type="text/javascript">
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
	/* document.getElementById('customer_id').addEventListener('input', function (e) {
  var x = e.target.value.replace(/\D/g, '').match(/(\d{0,3})(\d{0,3})(\d{0,4})/);
  e.target.value = !x[2] ? x[1] : '(' + x[1] + ')' + x[2] + (x[3] ? '.' + x[3] : '');
});*/
	 function btn905(){
		 document.getElementById('custs2').style.display='none';
		  document.getElementById('customer_name').value='';
		elm=document.getElementById('customer_id');
		elm.value='(905)';
		 $( "#customer_id" ).focus();
	 }
	 function btn416(){
		 document.getElementById('custs2').style.display='none';
		 document.getElementById('customer_name').value='';
		elm=document.getElementById('customer_id');
		elm.value='(416)';
		 $( "#customer_id" ).focus();
	 }
	 
   function showkeyboard(){
	   
	document.getElementById('containerkeyboard').style.display='block'; 
   }
     function hidekeyboard(){
	   
	document.getElementById('containerkeyboard').style.display='none'; 
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
    $('#customer_id').focus();
   		
    });


});
</script>
     <script language="JavaScript">
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
		//just for testing h="13";
	//alert('hour='+h);
	var m=today.getMinutes();
	//alert('minutes='+m); 
	if (h < 12 ) {
	//	alert('h<12');
		for (i=1 ; i<= 16 ; i++) {
			x=document.getElementsByClassName(i);
			val=x[0].value;
			pos=val.indexOf(':');
		    h1=val.substr(0,pos);
			m1=val.substr(pos+1);
		//	alert('h1='+h1);
			//alert('m1='+m1);
			//if(h<10){h="0"+h;}
			if(h1<h){
				//alert(h1+'<'+h);
				//alert('disabled'+x[0].value);
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
		//just for testing h="13";
	//alert('hour='+h);
	var m=today.getMinutes();
	//alert('minutes='+m); 
	if (h < 12 ) {
	//	alert('h<12');
		for (i=1 ; i<= 16 ; i++) {
			x=document.getElementsByClassName(i);
			val=x[0].value;
			pos=val.indexOf(':');
		    h1=val.substr(0,pos);
			m1=val.substr(pos+1);
		//	alert('h1='+h1);
			//alert('m1='+m1);
			//if(h<10){h="0"+h;}
			if(h1<h){
				//alert(h1+'<'+h);
				//alert('disabled'+x[0].value);
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
 
 
 $('#custs').click(function(){
	$('#myModalcust').modal({show:true})
});
  
  $('#custs2').click(function(){
	$('#myModalcust2').modal({show:true})
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
 function checkPhone(){
	
	elm=document.getElementById('customer_id');
	//format (416)1231234
	if ( (elm.value.length == 12) && (elm.value[8] != '.') && (elm.value[0] == '(' ) && (elm.value[4] == ')') ){
	part1=elm.value.substring(0,8);
	part2=elm.value.substring(8,(elm.value.length));
	elm.value=part1+'.'+part2;
	}
	//format 416123.1234
	if ( (elm.value.length == 11) && (elm.value[6] == '.') && (elm.value[0] != '(' ) && (elm.value[4] != ')') ){
	
	elm.value='('+elm.value.substring(0,3)+')'+elm.value.substring(3,6)+elm.value.substring(6,(elm.value.length));
	}
	//format 4161231234
	if ( (elm.value.length == 10) && (elm.value[6] != '.') && (elm.value[0] != '(' ) && (elm.value[4] != ')') ){

	elm.value='('+elm.value.substring(0,3)+')'+elm.value.substring(3,6)+'.'+elm.value.substring(6,(elm.value.length));
	}
	//format (416)12312345
	if ( (elm.value.length == 13) && (elm.value[8] != '.') && (elm.value[0] == '(' ) && (elm.value[4] == ')') ){
	
	part1=elm.value.substring(0,8);
	part2=elm.value.substring(8,(elm.value.length)-1);
	elm.value=part1+'.'+part2;
	}
	//format 416123123456..
	if ( (elm.value.length > 10) && (elm.value[6] != '.') && (elm.value[8] != '.') && (elm.value[0] != '(' ) && (elm.value[4] != ')') ){

	elm.value='('+elm.value.substring(0,3)+')'+elm.value.substring(3,6)+'.'+elm.value.substring(6,10);
	}
	//format 416123.123456..
	if ( (elm.value.length > 11) && (elm.value[6] == '.') && (elm.value[0] != '(' ) && (elm.value[4] != ')') ){

	elm.value='('+elm.value.substring(0,3)+')'+elm.value.substring(3,11);
	}
	
	
}
function checkName(age) {
	 name=document.getElementById('customer_name').value;
    return age == name;
}
function existingcustomer(){
	result="";ct=0;
	num=document.getElementById('customer_id').value;
	name=document.getElementById('customer_name').value;
     var k=arraynum.indexOf(num);
     var k2=arraynomcust.indexOf(name);
	 var ki=arraynuminactif.indexOf(num);
     var ki2=arraynominactif.indexOf(name);
	 nbname=arraynomcust.filter(checkName).length;

if( (document.getElementById('customer_id').value.length < 13)  && (nbname==1)){
	
	document.getElementById('customer_id').value=arraynum[k2];
}   
	 for(cnt=0; cnt<= arraynum.length; cnt++){
		  
		  if (num == arraynum[cnt] ){
			  ct=ct+1;
			  result=result+"/"+arraynomcust[cnt];
		  }
}
	 result=result.substring(1);
	 result=result+"/";
	  mdf=true;ch="";
		  for( cnt2=1;cnt2 <= ct;cnt2++){
			   pos=result.indexOf('/');
			   ch=result.substr(0,pos);
			  result=result.substr(pos+1);
			  if(name==ch){mdf=false;}
		  }
		 if ( (k != -1) && (num.length==13) &&   (mdf==true) && (name.length>1) )   {
	document.getElementById('custs2').style.display="none";
	document.getElementById('info').style.color='red';
	document.getElementById('info').value='New customer with an existing phone number!';
 } 
 if( (num == arraynuminactif[ki2] ) && (ki2 != -1)   )
 {document.getElementById('info').style.color='green';
	document.getElementById('custs2').style.display="none";
	document.getElementById('info').value='Customer will be reactivated ! ';
	}
	
		 if( (document.getElementById('info').value=="New Customer! Please enter the name.") && (k2 != -1) ){
		 document.getElementById('info').value='';
		 
	 }
}
function checkAdult(age) {
	 num=document.getElementById('customer_id').value;
    return age == num;
}
 function newCustomer(){
	   $("#tabcust2 > tbody tr").remove();
	   $("#tabcust2").empty();
  result="";ct=0;
	num=document.getElementById('customer_id').value;
	name=document.getElementById('customer_name').value;
	  var k=arraynum.indexOf(num);
	
	  
	 for(cnt=0; cnt<= arraynum.length; cnt++){
		  
		  if (num == arraynum[cnt] ){
			  ct=ct+1;
			  result=result+"/"+arraynomcust[cnt];
		
		  }
		  
		  
	 }
	 result=result.substring(1);

	 result=result+"/";

	  mdf=true;ch="";
	   $("#tabcust2 > tbody tr").remove();
	   $("#tabcust2").empty();
		  for( cnt2=1;cnt2 <= ct;cnt2++){
			   pos=result.indexOf('/');
			   ch=result.substr(0,pos);
		row = $("<tr></tr>");
   col1 = $("<td></td>");
   
   row.append(col1).prependTo("#tabcust2");  
			  $('#tabcust2 tr:last').after('<center><tr><center><td ><center><input style="background-color:#00BFFF!important;width:30%;" class="tds2" id="'+ch+'"  name="'+ch+'" value="'+ch+'"   type="text" readonly    onclick="customer2(this)"/></input></center> </td></center></tr></center>');
			  	
			  result=result.substr(pos+1);
			
		  }
	 num=document.getElementById('customer_id').value;
	  var k=arraynum.indexOf(num);
	  var ki=arraynuminactif.indexOf(num);
	  
	  //Activation
 if ( ( ki!=-1) && (arraynominactif[ki]== name) && (num.length==13)){
	document.getElementById('info').style.color='green';
	document.getElementById('custs2').style.display="none";
	document.getElementById('info').value='Customer will be reactivated ! ';
	document.getElementById('customer_name').value='';
 }
	 if (( k==-1) && ( ki==-1) && (num.length==13)){
	document.getElementById('info').style.color='green';
	document.getElementById('custs2').style.display="none";
	document.getElementById('info').value='New Customer! Please enter the name.';
	document.getElementById('customer_name').value='';
 }if ( (k != -1)   ){
	document.getElementById('info').value='';
 }
 
 nbnum=arraynum.filter(checkAdult).length; 
if(nbnum > 1){	document.getElementById('info').style.color='#ee4b4b';document.getElementById('info').value='Phone number related to more than one customer';

document.getElementById('custs2').style.display="inline";
}
 if(nbnum == 1){document.getElementById('customer_name').value=arraynomcust[k];}
 }
 </script> 
<script  type="text/javascript">
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
//document.getElementById('info').value=telephone;

}


</script>
<!-- Modal customers -->
 <div class="modal" id="myModalcust" data-backdrop="static" style="margin-left:-150px;">
	<div class="modal-dialog">
      <div class="modal-content" style="width:800px!important;">
        <div class="modal-header" style="width:800px!important;">
          <button id="three" type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
          <h4 class="modal-title" id="myModalLabel" style=";color:#0B8EB6;width:800px!important;"><center>Select a customer</center></h4>
        </div><div class="container"></div>
        <div class="modal-body" style="width:800px!important;">
<center>
<table id='tab'  >
 
 	 		<?php $count=0; echo '<tr class="tds2">';?>
  		<?php foreach($cust as $num=>$nom): ?>				
	 		<?php $count ++;?>
		
		<?php $tel=$customers->CustomerTelById($num); ?>
 <?php echo '<td ><input style="background-color:#00BFFF!important;width:100%;" class="tds2" value="'.$nom.'"  name="'.$nom.'"   id='.$tel.' type="text" readonly    onclick="customer(this)"/></input> </td>';?>
	<?php if(($count % 5==0) ): echo '</tr><tr class="tds2">'; //else: echo '' ?>
	<?php endif;endforeach; ?>

</tr> 
</table> 
</center>	        </div>
        <div class="modal-footer">
          <a href="#" data-dismiss="modal" class="btn">Close</a>
         </div>
      </div>
    </div>
</div>

<!-- End Modal customers -->
<!-- Modal customers2 -->
 <div class="modal" id="myModalcust2" data-backdrop="static" style="margin-left:-150px;">
	<div class="modal-dialog">
      <div class="modal-content" style="width:800px!important;">
        <div class="modal-header" style="width:800px!important;">
          <button id="three" type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
          <h4 class="modal-title" id="myModalLabel" style=";color:#0B8EB6;width:800px!important;"><center>Select a customer</center></h4>
        </div><div class="container"></div>
        <div class="modal-body" style="width:800px!important;">
<center>
<table id='tabcust2'  >
 <tbody>

 </tbody>

</table> 
</center>	        </div>
        <div class="modal-footer">
          <a href="#" data-dismiss="modal" class="btn">Close</a>
         </div>
      </div>
    </div>
</div>
<!-- end -->

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
<td style=" ;width:40px!important;padding:8px 8px 8px 8px !important;"><input style="background-color:#CCFF66;height: 73.506942px!important;width: 70px!important;font-weight: bold;font-size: 20px!important;" id="t2" type="text" readonly class ="5" name="09:00" value="09:00" onclick="timing(this)"/> </td>
<td style=" ;width:40px!important;padding:8px 8px 8px 8px !important;"><input style="background-color:#CCFF66;height: 73.506942px!important;width: 70px!important;font-weight: bold;font-size: 20px!important;" id="t3" type="text" readonly class ="9" name="10:00" value="10:00" onclick="timing(this)"/> </td>
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
		         
          <a href="#" style="border: 1px solid black;" data-dismiss="modal" class="btn">Close</a>
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


 
	<!-- Product of order  -->
	<div>
	<?php
// *******  Index PRODUCT *******************************

 $def="";
 if (isset ($id)) {$def=$id; } 
 ?>



   <!--link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css"-->
     <script language="JavaScript">
	  function customer2(elm)
 {
  var nom=elm.name;

  document.getElementById('customer_name').value=nom;
  
 $('#myModalcust2').modal('hide');
 }
 function customer(elm)
 {var tel=elm.id;
  var nom=elm.name;
  document.getElementById('customer_id').value=tel;
  document.getElementById('customer_name').value=nom;
  
 //liste = document.getElementById('cust');
 //liste.options.selectedIndex = elm;
 $('#myModalcust').modal('hide');
 }
  $(function() {

     $("#addP").click(function() {
  $('#myModalAddProduct2').modal('show');
  });
 
 
  $("#categ").click(function() {
  $('#myModalAddProduct2').modal('show');
  });
 
 });
 </script> 
 
 
	<!-- Modal -->   
<div class="modal fade" id="myModalAddProduct2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="margin-left:-590px;">
<div class="modal-dialog">
<div class="modal-content" style="  width:1200px!important;" >
<center><div class="modal-header" style=" width:1200px!important;padding-bottom: 0px;padding-top: 0px;margin-top: 5px;border-bottom-width: 5px;">

<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
<center><h2 class="modal-title" id="addprodtitle" style="color:#0B8EB6;width:900px!important;">Add Products to the Order</h2></center>
</div></center> 
<?php echo $this->Form->create('Product',array('action'=>'Hadd','class'=>'addprodformc','id'=>'addprodform' ));
/*  if (isset ($id)) {$def=$id;} 
   if ($def!="") {  
    echo $this->Form->hidden('orderid', ['value'=>$def]);
   } */ 
   ?>
<input type="hidden" name="data[Product][order]" id="Oid"  />
<div class="modal-body"  style="margin: 0 auto;float: left;height:700px;width:1200px!important;background: #E6E6E6;" >

<div id="divforpart1" style="width:900px!important;float:left;">
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
			<tr><textarea rows="1" cols="50"  id="idtextarea1"  > </textarea></tr>
			<script type="text/javascript"> var nbcateg=<?php echo json_encode($count); ?>;</script>
 <?php $count=0; ?>
                <?php if (isset($categories)) {  ?>
				
		<?php foreach($categories as $categorie){ ?>				
		<?php $count ++;?>
  <tr style="display:none;" id="list<?php echo $categorie['Categorie']['id']; ?>" >
  		<?php  $itemsCat=$items->ItemsCateg($categorie['Categorie']['id']);  ;?>
		
		 <?php foreach($itemsCat as $id=> $nom)  
		{echo '<td style=" border: 0.5px solid black;background-color: #E6E6E6;text-align: center;width:146.6px;font-size:18px;cursor:pointer;" id="item'.$id.'" name="'.$nom.'" onclick="select(this);"><B>'.$nom.'</B></td>' ;}?>				
 		</td>
		 
		<?php unset($categorie);}
		?></tr>
		
			
		<?php } ?>




		  </tbody>
 
</table> <!--style="display:none;"-->
<textarea rows="4" cols="50"  id="write" style="display:none;margin-bottom:5px;" ></textarea>
	<!-- keyboard -->
<div id="containerkeyboard" style=" margin-left: 150px;margin-top:5px; display:none;">
 <ul id="keyboard">
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
        <li id="liid"class="capslock">caps lock</li>
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
<div id="divforpad" style="width:250px!important;margin-left:15px;float:left;">

<!--  Pad -->                   
<input type="text" id="inputqty_id" onchange="saveqty()" size="35" style="font-size:20px;background-color:yellow!important;width:100px!important;height:50px!important;"/> 
<p  style="color:black; font-weight: bold;display:inline;font-size: 20px;">		&#32;	&#32;&lsaquo;	&lsaquo; QTY </p>
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
                        <div class="num2">
                            <div class="txt">
                                0
                            </div>
                        </div>
                    </div>
                    <div class="span4">
                        <div class="num2">
                            <div class="txt">
                                .
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
	<?php  		echo $this->Form->submit('ENTER', array('class' => 'btn btn-round btn-default', 'style'=>'background:#fafafa!important;color:#333;border-color:#ddd!important;margin-left: 10px;width: 226.22222px;height: 64.22222px;', 'title' => 'Clic here to add the product    ') ); ?>

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

</div><!-- /.modal-content -->
</div><!-- /.modal-dialog -->
</div><!-- /.modal -->

<fieldset style="margin-left:50px">
  		
<?php echo $this->Form->input('order',array('label'=>'','id'=>'Order','style'=>' ;margin-left:-2px' ,'type'=>'hidden' ,  'default'=>$def     ));;?>
<?php echo $this->Form->input('item',array('label'=>'','id'=>'Item','style'=>' ;margin-left:-2px','type'=>'hidden' ));?>
<?php echo $this->Form->input('quantity',array('label'=>'','id'=>'Quantity','style'=>'width:70px; ;margin-left:-2px','type'=>'hidden' ));?>
<?php echo $this->Form->input('instructions' ,array('label'=>'','type'=>'hidden','id'=>'Instructions','style'=>' ;text-align:left;'  ));?>
 
          </fieldset>
<?php echo $this->Form->end(); ?>
</div><!-- /.modal -->
	<!-- Script Product of order -->
	<input type="hidden" id="previousspicy" />
	<input type="hidden" id="previouscut" />
	<input type="hidden" id="lastselected" />
</body>	
<script language="JavaScript">
 function styleauto(){
		 document.getElementById('ui-id-3').style.color='blue';
 }

   function visibilite(divId)
    {  
divtextarea=document.getElementById('write');
if( divtextarea.style.display != 'inline' ) {divtextarea.style.display='inline';}
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
		 $("#myTable2 > tbody >#list"+i+"").last().after("<tr style='background-color:#abaeb2!important;height:50px;display:table-row;' id='listimg"+i+"'  ><td id='tdspicy' style='width:15%!important;background-color:white;border: 1px solid #E6E6E6;' ><img style='width: 100px;height: 60px;' src='/img/spicy.png' onclick='btnspicy();' > </img></td><td style='width:15%!important;background-color:white;border: 1px solid #E6E6E6;' id='tdcut' ><img style='width: 100px;height: 60px;' src='/img/box.png'onclick='btncut();'> </img></td><td style='width:15%!important;background-color:white;' ><img style='width: 100px;height: 60px;' src='/img/arrows.png' onclick='btnswitch();'> </img></td><td style='height:78px;width:29%!important;background-color:white!important;' ></td><td style='background-color:white!important;padding-left:0px!important;padding-right:0px!important;padding-top:0px!important;padding-bottom:0px!important;width:13%!important;'><button id='btnclr' style='background-color:white!important;width: 110px!important;height: 76px!important;padding-top:0px!important;padding-bottom:0px!important;'  type='button'  onclick=document.getElementById('write').value='';  class='btn btn-round btn-default'>CLR</button></td><td style='background-color:white!important;padding-left:0px!important;padding-right:0px!important;padding-top:0px!important;padding-bottom:0px!important;width:13%!important;'><button id='btnenter' style='background-color:white!important;width: 110px!important;height: 76px!important;padding-top:0px!important;padding-bottom:0px!important;'  type='button'  onclick='enterbtn();' class='btn btn-round btn-default'>Enter</button></td></tr>");
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
	
 function select(elem)
 {
	
 var idelm=elem.id;

  nomelm= idelm.replace("item", "");
 document.getElementById(idelm).style.backgroundColor='#73e05e';

 sel=document.getElementById('Item');

sel.value= nomelm;

idelem=elem.id;
	
	abrv=elem.getAttribute("name");
	 
	 var ka=arrayabrv.indexOf(abrv);
		document.getElementById('idtextarea1').value=arraynom[ka];
		
 }

  
 function enterbtn(){
	//$('#myModalAddProduct2').modal('hide');	 
	//alert("hello from enterbtn");
	 document.getElementById('tdspicy').style.border = '1px solid #E6E6E6';
	  document.getElementById('tdcut').style.border = '1px solid #E6E6E6';

	       divkeyboard=document.getElementById('containerkeyboard'); 
		   divkeyboard.style.display = 'none';
		   document.getElementById('Instructions').value= document.getElementById('write').value;
		   document.getElementById("write").value=''; 
 }
 
 function btnspicy(){
	last= document.getElementById("lastselected").value; 
	  document.getElementById('tdspicy').style.border = '1px solid black';
	  document.getElementById('tdcut').style.border = '1px solid #E6E6E6';
	if ( (last==2) && ( (document.getElementById("write").value) !="") )
	{document.getElementById("write").value=arrayspicy[0]+' - '+(document.getElementById('previouscut').value);}
	else {document.getElementById("write").value=arrayspicy[0];}
		
	
			 divkeyboard=document.getElementById('containerkeyboard'); 
			 document.getElementById("previousspicy").value=arrayspicy[0];
			
		
  if(  divkeyboard.style.display == 'none' )  { 		 
		 divkeyboard.style.display='block';
  }
   document.getElementById("lastselected").value=1;
 }
 
 function btncut(){
last= document.getElementById("lastselected").value;
	  document.getElementById('tdspicy').style.border = '1px solid #E6E6E6';
	  document.getElementById('tdcut').style.border = '1px solid black';

	 	 
	 if ( (last==1) && ( (document.getElementById("write").value) !="") ){document.getElementById("write").value=(document.getElementById('previousspicy').value)+' - '+arraycut[0];
	
		}
	 else{  document.getElementById("write").value=arraycut[0];
	 	
	 }
	
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
	{ if(new2==""){document.getElementById("write").value=new1;}
else{	document.getElementById("write").value=new1+' - '+new2;}
		}
	if(last==2)
	{ if(new1==""){document.getElementById("write").value=new2;}
else{		document.getElementById("write").value=new1+' - '+new2;}
		}
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

    });
 /*  $('#ui-id-3').each(function () {
$(this).html($(this).html().replace("/", "<span style='color:red;' class='red'>/</span>"));
  }); */
  
});
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
function btnup(){
	current=document.getElementById('inputqty_id').value;
	if( current != ""){
		
		document.getElementById('inputqty_id').value=(parseInt(current))+1;
	}
}
function btndown(){
	
	current=document.getElementById('inputqty_id').value;
	if( current != ""){
		
		document.getElementById('inputqty_id').value=(parseInt(current))-1;
	}
}

</script>
	<!-- keyboard -->
	<style>
.ui-keyboard-button{padding:0px 0px 0px 0px!important;width:80px!important;height:80px!important;
    margin-left: 5px;
    margin-right: 5px;
    margin-bottom: 5px;
    margin-top: 5px;
}
ui-state-default{
    width: 65.544px!important;
    height: 65.544px!important;
}
.ui-datepicker td a{width: 70.544px!important;
    height: 70.544px!important;
	    font-size: 28px;}
	
	
	/*.ui-datepicker-unselectable {width: 81px!important;height: 100px!important;}
	 .ui-state-disabled {width: 81px!important;height: 100px!important;}*/
#ui-datepicker-div {width: 608.16px!important;height: 580.08px!important;}
.ui-menu-item-wrapper{    font-size: 38px!important;}
.ui-menu-item{    font-size: 38px!important;}
#tab input{background-color:#CCFF66!important;margin-bottom: 8px;margin-top: 8px;height: 44.886359999999996px!important;}
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

.ui-datepicker-prev{
    width: 40px!important;
    height: 40px!important;
    background-color: lightgrey;
}
.ui-datepicker-next{
    width: 40px!important;
    height: 40px!important;
    background-color: lightgrey;
}
.ui-datepicker-title {height:40px; font-size: 18px!important;}
	.ui-keyboard-space{min-width:190px!important;}
	.ui-keyboard-text{font-size:40px!important;}
	.ui-keyboard-shift{width:100px!important;}
    .ui-autocomplete{height: 600px!important;}
	.ui-keyboard-bksp{width:90px!important;}
</style>
