<?php 
App::import('Controller', 'Orders');
$orders = new OrdersController;
/*
if (isset( $this->data['form']['date'])){ 
	$Date=$this->data['form']['date'];
 	echo '-------------- DATE :  '.$this->data['form']['date'];
	  $this->Session->write('Auth.User.defaultdate', $Date) ;
 } 
*/
 ?>
<link href="http://ordersentry.enterpriseesolutions.com/keyboard/css/jquery-ui.min.css" rel="stylesheet">
	<!-- still using jQuery v2.2.4 because Bootstrap doesn't support v3+ -->
	<script src="http://ordersentry.enterpriseesolutions.com/keyboard/js/jquery-latest.min.js"></script>
	<script src="http://ordersentry.enterpriseesolutions.com/keyboard/js/jquery-ui.min.js"></script> 
<!-- 	 <script src="http://ordersentry.enterpriseesolutions.com/keyboard/js/jquery-migrate-3.0.0.min.js"></script> -->

	<!-- keyboard widget css & script (required) -->
	<link href="http://ordersentry.enterpriseesolutions.com/keyboard/css/keyboard.css" rel="stylesheet">
	<script src="http://ordersentry.enterpriseesolutions.com/keyboard/js/jquery.keyboard.js"></script>
	<link href="http://ordersentry.enterpriseesolutions.com/keyboard/css/tipsy.css" rel="stylesheet">
	<link href="http://ordersentry.enterpriseesolutions.com/keyboard/css/prettify.css" rel="stylesheet">
	<script src="http://ordersentry.enterpriseesolutions.com/keyboard/js/bootstrap.min.js"></script>
	<!--<script src="http://ordersentry.enterpriseesolutions.com/keyboard/js/demo.js"></script>-->
	<script src="http://ordersentry.enterpriseesolutions.com/keyboard/js/jquery.tipsy.min.js"></script>
	<script src="http://ordersentry.enterpriseesolutions.com/keyboard/js/prettify.js"></script> <!-- syntax highlighting -->
	
	
	<!-- keyboard extensions (optional) Autocomplete -->
	<script src="http://ordersentry.enterpriseesolutions.com/keyboard/js/jquery.mousewheel.js"></script>
	<script src="http://ordersentry.enterpriseesolutions.com/keyboard/js/jquery.keyboard.extension-typing.js"></script>
	<script src="http://ordersentry.enterpriseesolutions.com/keyboard/js/jquery.keyboard.extension-autocomplete.js"></script>
	<script src="http://ordersentry.enterpriseesolutions.com/keyboard/js/jquery.keyboard.extension-caret.js"></script>

<style>
.container{min-width:1840px!important;}
/*input[value="(---)---.----"] { color: white!important; }​
input:not[value="(---)---.----"] { color: black!important; }​*/
</style>

<?php
    $this->layout = 'homepage';
    echo $this->Html->css('jquery-ui');
    //echo $this->Html->css('stickysort');
 	//	echo $this->Html->css('component');
  //  echo $this->Html->css('normalize');
 		//echo $this->Html->script('jquery-1.12.4');
 		//echo $this->Html->script('jquery-ui');
//    echo $this->Html->script('bootstrap');
 //   echo $this->Html->script('bootstrap-confirmation.min');
  //  echo $this->Html->script('jquery.stickyheader');
 

?>
  <link rel="stylesheet" href="//code.jquery.com/ui/1.12.0/themes/base/jquery-ui.css">
<style type="text/css">
	.ui-keyboard-text{font-weight:bold!important;}
.ui-keyboard.ui-widget-content.ui-widget.ui-corner-all.ui-keyboard-has-focus{
	width: 510.9px!important;
}

	#ui-datepicker-div{
  text-align: center;
  width: 390px;
  height:400px;	
	
}

.ui-datepicker td span, .ui-datepicker td a {
  display: inline-block;
  font-weight: bold!important;
  text-align: center;
  width: 70px;
  height:70px;
  line-height: 50px;
  color: black;
  
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
.ui-datepicker-prev , .ui-datepicker-next {
margin-top:7px!important;
}
.ui-datepicker-inline {
width:570px!important;
}
 .ui-datepicker {
	width:570px!important;
	
}
 .ui-widget {
	width:570px!important;
}
.ui-widget-content {
	/*width:250px!important;*/
}
.ui-menu-item{width:240px!important;}
/*.ui-helper-clearfix {
	width:570px!important;
}*/
.modal-title {color:#666666!important;}
.modal-body {color:#818181!important;}
.callout.callout-warning p {
    color: #666666;
}
.content {padding-top: 0px!important;}
.panel {
  border: 1px solid #ddd;
  background-color: #fcfcfc;
}
.panel .btn-group {
  margin: 15px 0 30px;
}
.panel .btn-group .btn {
  transition: background-color .3s ease;
}
.table-filter {
  background-color: #fff;
  border-bottom: 1px solid #eee;
}
.table-filter tbody tr:hover {
  cursor: pointer;
  background-color: #eee;
}
.table-filter tbody tr td {
  padding: 10px;
  vertical-align: middle;
  border-top-color: #eee;
}
.table-filter tbody tr.selected td {
  background-color: #eee;
}
.table-filter tr td:first-child {
  width: 38px;
}
.table-filter tr td:nth-child(2) {
  width: 35px;
}
.modal-backdrop {
  z-index: -1;
}
 a:hover {color:#330033!important;}  
 .orderth, .orderselect { cursor: hand!important;}
/*.th { cursor: pointer; cursor: hand; cursor: alias; }*/
 #parent {
  width: 100%;
  height: 340px;
  float: left;
  overflow-x: scroll;
}

      


.container {
  width: 1850px;
  margin: auto;
  max-width: 100%;
  height: 340px;
  border: 2px solid #a5a5a5;
  overflow: scroll;
  position: relative;
}
#fixTable {
  
  border-collapse: separate;
  border-spacing: 0;
  position: absolute;
  width: 100%;
}
#fixTable th,
td {
  padding: 5px 10px;
  box-sizing: border-box;
  margin: 0;
}

.top-left {
  background-color: #2e9afe!important;
  color:white!important;
  box-sizing: border-box;
  position: absolute;
  width:40%;
  min-width:160px;
}
#fixTable tr > th {width:40%;
  min-width:160px;}

.orderth, .orderselect {    font-family: 'Source Sans Pro',sans-serif!important;
              font-weight: 500!important;
              line-height: 1.1!important;}
#fixTable {
  background: white;
  border-radius:3px;
  border-collapse: collapse;
  margin: auto;
  padding:5px;
  width: 100%;

}
 
#fixTable th {
  background:#29529e;
  border-bottom:4px solid #9ea7af;
  border-right: 1px solid #343a45;
  font-size:14px;
  text-shadow: 0 1px 1px rgba(0, 0, 0, 0.1);
  vertical-align:middle;
}

#fixTable th:first-child {
  border-top-left-radius:3px;
}
 
#fixTable th:last-child {
  border-top-right-radius:3px;
  border-right:none;
}
  
#fixTable tr {
  border-top: 1px solid #C1C3D1;
  border-bottom-: 1px solid #C1C3D1;
  color:#575757;
  font-size:12px;
  font-weight:normal;
  text-shadow: 0 1px 1px rgba(256, 256, 256, 0.1);
}
 

 
#fixTable tr:first-child {
  border-top:none;
}

#fixTable tr:last-child {
  border-bottom:none;
}
 
#fixTable tr:nth-child(odd) td {
  background:#EBEBEB;
}
 


#fixTable tr:last-child td:first-child {
  border-bottom-left-radius:3px;
}
 
#fixTable tr:last-child td:last-child {
  border-bottom-right-radius:3px;
}
 
#fixTable td {
  background:#FFFFFF;
  text-align:left;
  vertical-align:middle;
  font-size:12px;
  text-shadow: -1px -1px 1px rgba(0, 0, 0, 0.1);
  border-right: 1px solid #C1C3D1;
}

#fixTable td:last-child {
  border-right: 0px;
}
.totalprod {    
        background-color: rgb(46, 154, 254)!important;
        color: white;
        border-bottom: 4px solid #9ea7af;
        font-size: 16px!important;
        font-weight: bold;
        text-align:center!important; 
            }
.orderselect {background-color: #a7d4ff!important; font-size: 16px!important; color:#303030;}
.user-menu:hover{background-color: #a9def8!important;}
.nav .open>a, .nav .open>a:hover, .nav .open>a:focus {
    background-color: #d9edf7!important;
    border-color: #d9edf7!important;
}
.ui-keyboard-button{padding:0px 0px 0px 0px!important;width:50px!important;height:50px!important;
    margin-left: 5px;
    margin-right: 5px;
    margin-bottom: 5px;
    margin-top: 5px;
}
.ui-keyboard-space{min-width:150px!important;}
@media only screen and (min-width: 1600px) {
 #parent {
  width: 100%;
  height: 640px;
}

.container {
  height: 640px;
}
  }
#fixTable thead td, #fixTable thead th { min-width: 95px!important; max-width: 110px!important;}

</style>

  <script>
  $( function() {

	 /*  $('#inputcustomernum').change(function(){
      $("#CustomerForm").submit(); 
})*/

	/* $( "input[name='data[form][customernum]']" ).change(function(){
      $("#CustomerForm").submit(); 
})*/


 $( "#datepicker" ).datepicker({
  onSelect: function (date) {
                        /*$('input[name=date]').val(date);
                        $("#DateForm").submit();*/
                        $('#inputdate').val(date)
                        .trigger('change');
                    },
  dateFormat: "yy-mm-dd"
});

 $('#inputdate').change(function(){
      $("#DateForm").submit(); 
})
// submit change date form
function datesubmit(date)
{
    $('input[name=date]').val(date);
    $("#DateForm").submit();
    //setTimeout('location.reload(true)',1000);
    location.reload(true);
    /*vald=$('input[name=date]').val();
    alert(vald);*/
    
}
// Fix dropdow problem
$('.dropdown-toggle').dropdown();
// table navigation buttons 
$("#orient-btn").on("click", function() {
  var orient = $('#left').html();
  if (orient === '<i class="fa fa-arrow-left"></i>')
  {
    $('#left').html('<i class="fa fa-arrow-down"></i>');
    $('#right').html('<i class="fa fa-arrow-up"></i>');}
    else
    {
      $('#left').html('<i class="fa fa-arrow-left"></i>');
      $('#right').html('<i class="fa fa-arrow-right"></i>');}
    
});
 $("#left").on("click", function() {
  var content = $('#left').html();
  if (content === '<i class="fa fa-arrow-left"></i>')
  {
    var leftPos = $('#tablediv').scrollLeft();
    var col = $(".th")[0].getBoundingClientRect();
       var colwidth = col.width;
        console.log(leftPos); 
        $("#tablediv").animate({
            scrollLeft: leftPos - colwidth
        }, 800);
  }
  else
  {
    var topPos = $('#tablediv').scrollTop();
    var col = $(".orderselect")[0].getBoundingClientRect();
    var colwidth = col.height;
    $("#tablediv").animate({
            scrollTop: topPos + colwidth
        }, 800);
  }
  });

  $("#right").on("click", function() {
   var content = $('#right').html();
  if (content === '<i class="fa fa-arrow-right"></i>')
  {
   var leftPos = $('#tablediv').scrollLeft();
   var col = $(".th")[0].getBoundingClientRect();
   var colwidth = col.width;
    console.log(leftPos); 
    $("#tablediv").animate({
        scrollLeft: leftPos + colwidth
    }, 800);
  }
  else
  {
    var topPos = $('#tablediv').scrollTop();
    var col = $(".orderselect")[0].getBoundingClientRect();
    var colwidth = col.height;
    $("#tablediv").animate({
            scrollTop: topPos - colwidth
        }, 800);
  }
  }); 	

$("#categ").click(function() {
  $('#myModal2').modal('show');
  });
$("#neworder").click(function(){
  window.location.href='/orders/add';
});
$("#dashbtn").click(function(){
  window.location.href='/dashboard';
});
$("#homebtn").click(function(){
  window.location.href='./';
});
$("#ordersbtn").click(function(){
	selectedd=document.getElementById('inputcustomerdate').value;
  window.location.href='/orders/index/'+selectedd;
});
/*
$("#printbtn").click(function() {
// preparing data
    var val;
    var itemslist ="<table cellpadding='10' style='border-top: 1px solid black;border-bottom: 1px solid black;border-bottom: 1px solid black;'>";
for(i = 0; i < $(".orderselect").length; i++) { 

var customer = $(".orderselect:eq("+i+")").text();
    var cnumber = customer.replace(/[^0-9]/g, '');
    var cname = customer.replace(/\d+/g, '');
    customer="<b>"+cname+"</b> ( "+cnumber+" )";

  itemslist=itemslist+"<tr border='1' bgcolor='#b1b1b1'><td colspan='30'>"+customer+"</td></tr>";

    $.each( $(".orderselect:eq("+i+")").closest("tr").find("td"), function(){
      var tdtext=$(this).text();
          if (tdtext != '')
          {
            var rowIndex = $(this).parent().index('.table-filter tbody tr');
            var tdIndex = $(this).index('.table-filter tbody tr:eq('+rowIndex+') td')+1;
            val = $('.table-filter th:eq(' +tdIndex+ ')').text();
            itemslist = itemslist +' <tr><td style="margin-right:10px;"><b>'+val+'</b> ( '+tdtext+' ) </td></tr>';
          }
        });

  }
    itemslist=itemslist+'</table>';
var titledate = $('#titledate').text();
// printing
  var winPrint = window.open('', '', 'left=0,top=0,width=588,height=600,toolbar=0,scrollbars=0,status=0');
            winPrint.document.write('<title>Print  Orders</title>');
            winPrint.document.write('<img src="./logo gray.jpg" />');
            winPrint.document.write('<h3>'+titledate+'</h3>');
            winPrint.document.write(itemslist);
            winPrint.document.close();
            winPrint.focus();
            winPrint.print();
            winPrint.close();
  });
*/
$('#addprodform').submit(function(e){
    
    e.preventDefault(); // Prevent Default Submission
    
    $.ajax({
  url: '/products/Hadd',
  type: 'POST',
  data: $(this).serialize(),
            beforeSend: function(){
                $('#addprodtitle').html('<h3><center>Adding ...</center></h3>');
            },
            complete:function()
            {
				//document.getElementById('intsru').value='';document.getElementById('intsru2').value='';
            //  setTimeout('location.reload(true)',1000);
            location.reload(true);
              //location.href = location.href;
            }
        });
    
});


var container = document.querySelector('.container');
  var table = document.querySelector('#fixTable');
  var leftHeaders = [].concat.apply([], document.querySelectorAll('#fixTable tbody th'));
  var topHeaders = [].concat.apply([], document.querySelectorAll('#fixTable thead th'));

  var topLeft = document.createElement('div');
  var computed = window.getComputedStyle(topHeaders[1]);
  container.appendChild(topLeft);
  topLeft.classList.add('top-left');
  //alert('width : '+computed.width );
  topLeft.style.width = '480px';
  topLeft.style.height = computed.height;
  topLeft.style.padding = '5px';
  topLeft.style.left = '0px';
  topLeft.innerHTML = "<b>ORDER #</b>                                       <b>TIME</b>                          <b>CUSTOMER</b>";

  container.addEventListener('scroll', function (e) {
    var x = container.scrollLeft;
    var y = container.scrollTop;

    leftHeaders.forEach(function (leftHeader) {
      leftHeader.style.transform = translate(x, 0);
    });
    topHeaders.forEach(function (topHeader, i) {
      if (i === 0) {
        topHeader.style.transform = translate(x, y);
      } else {
        topHeader.style.transform = translate(0, y);
      }
    });
    topLeft.style.transform = translate(x, y);
  });

  function translate(x, y) {
    return 'translate(' + x + 'px, ' + y + 'px)';
  }
  // add summary row
 /* var tablencols = document.getElementById('fixTable').rows[0].cells.length;
  var tablenrows = document.getElementById("fixTable").rows.length;
  var somm = 0;
  var rowcontent = '';
  for (j = 3; j < tablencols; j++) { 
    somm = 0;
    for (i = 0; i < tablenrows; i++) { 
      // if the item is not packed then add the quantity
      if (table.rows[i].cells[j].css('background-color') == '#f9f9f9')
      {
          somm = somm + parseFloat(table.rows[i].cells[j].innerHTML);
      }
    rowcontent+='<td>'+somm+'</td>'
    }
    somm = 0;
  }
  alert(tablenrows +' // '+tablencols);
  //$('#fixTable > tbody:last-child').append(rowcontent);
*/

       //      var rowId = $('#fixTable tr').length;
       //      var val = 0;
       //      var n ='';
       //       $("#fixTable td").each(function() {
       //       n = parseFloat($(this).val());
       //       if (!isNaN(parseFloat(n)) && isFinite(n))     
       //        {val += n;}
       // });
/*var tablenrows = document.getElementById("fixTable").rows.length;
var nrr = tablenrows-1;*/




 } );
  </script>

<body onload="if (document.getElementById('inputcustomernum').value=='(---)---.----') {document.getElementById('inputcustomernum').value='';}">
<?php
   $yesterday= date('Y-m-d', strtotime( '-1 days' )) ;

  App::import('Controller', 'Items');
 $items = new ItemsController;   
 
 App::import('Controller', 'Customers');
 $customers = new CustomersController; 
 
 App::import('Controller', 'Categories');
 $categories = new CategoriesController;
 $cats= $categories->ListeCats();
  App::import('Controller', 'Products');
 $products = new ProductsController;

  
  
  
  
  
  $date="";
  $Litems=$items->ListeItems(); 
  $Lcustomers=$customers->ListeCustomers(); 
  $Lcategories=$categories->ListeCategories(); 
 // $Lingredients=$products->ListeIngredients(); 
  $options= array('Not Ready','Rready','Packed','Delivered','Cancelled'); 
date_default_timezone_set('America/New_York');
  $today=date('Y-m-d'); 


                        ?>

   <?php if (!(isset($lastvalue))){$lastvalue="";}?>      
       <?php if (!(isset($lastvaluename))){$lastvaluename="";}?>   
<div class="modal fade" id="list" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">

    <div class="modal-dialog" style="width:auto;max-width:800px">
        <div class="modal-content">
             <div class="modal-header">
                 <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                 <h3 class="modal-title" id="myModalLabel"><center>Change Date</center></h3>
             </div>
			
             <div class="modal-body">
              <?php echo $this->Form->create('form',array('style'=>'margin-top:30px;margin-bottom:-30px','id'=>'DateForm','method'=>'POST' ));  ?>
              <center><div id="datepicker" style="margin-left:0px!important;margin-right:0px!important;margin-top:-30px;margin-bottom:30px;zoom:130%;"></div></center>
              <input name="data[form][date]" type="hidden" value="2017-01-20" id="inputdate" onchange="document.getElementById('inputcustomerdate').value=this.value;"></input>
              <?php echo $this->Form->end(); ?>
       
             </div>
         </div>
     </div>
</div>

  <?php  

// updatede by iheb on 28 dec 17 to add date to session

//$date=$today;
 $default="";
$defaultDate = $this->Session->read('Auth.User.defaultdate');
if ($defaultDate != ""){$date=$defaultDate;} else{$date=$today;}


///changing default from yesterday to today
//$date=$yesterday;
////$Lingredients=$products->ListeProductsFuture($yesterday); 
///$title='<h3>Coming Orders</h3></br>'; 
// customer phone isset & customer name isn't set
if  ((isset( $this->data['form']['customernum']) || (!(empty($this->data['form']['customernum'])))) && ((!(isset( $this->data['form']['customername']))) || ((empty($this->data['form']['customername'])))))
{$custnum=$this->data['form']['customernum'];//echo('custnum0'.$custnum);
$lastvalue=$custnum;
if  (isset( $this->data['form']['customerdate'])){$date=$this->data['form']['customerdate'];  
//echo('d0='.$date);
}
if($this->data['form']['customernum'] == '(---)---.----'){//echo('isn"t set00');
$custnum="";$custname="";$LOrders=$products->ListeOrdersPerDate($date);}
else{
	//echo('isset00');

 
$LOrders=$products->ListeOrdersPerDateCustomer($date,$custnum);//echo 'LOrders'.json_encode($LOrders);
}
}

	
	 
// customer name isset & customer phone isn't set
else if  ( (isset( $this->data['form']['customername']) || (!(empty($this->data['form']['customername']))) ) && ((!(isset( $this->data['form']['customernum']))) || ((empty($this->data['form']['customernum'])))))
{$custname=$this->data['form']['customername'];//echo('custname0'.$custname);
$lastvaluename=$custname;
//echo('isset01');
if  (isset( $this->data['form']['customerdate'])){$date=$this->data['form']['customerdate'];  
//echo('d0='.$date);
}
 
$LOrders=$products->ListeOrdersPerDateCustomername($date,$custname);//echo 'LOrders'.json_encode($LOrders);
}

// customer phone & name are set
else if  (isset( $this->data['form']['customername'])&& (!(empty($this->data['form']['customername']))) && isset( $this->data['form']['customernum']) && (!(empty($this->data['form']['customernum']))) )
{
	$custnum=$this->data['form']['customernum'];//echo('custnum0'.$custnum);
$lastvalue=$custnum;

//echo('isset02');
$custname=$this->data['form']['customername'];//echo('custname0'.$custname);
$lastvaluename=$custname;
if  (isset( $this->data['form']['customerdate'])){$date=$this->data['form']['customerdate'];  
//echo('d0='.$date);
}
 
$LOrders=$products->ListeOrdersPerDateCustomernumname($date,$custnum,$custname);//echo 'LOrders'.json_encode($LOrders);
}

 else{
	 //echo('isn"t set0');
 $custnum="";$custname="";$LOrders=$products->ListeOrdersPerDate($date);}	 
	 
	 
	 
	 
	 
	 if($date==$today){$title= 'Today Orders ('.$today.'):';}
	 else{ $title='Orders Of : '.$date.'';  }
	// $this->Session->write('Auth.User.defaultdate', $date);
$Lingredients=$products->ListeProductsPerDate($today); 
//$LOrders=$products->ListeOrdersPerDate($today); 
 
/*
print_r($LOrders);
usort($array, function($a, $b) {
   return (strtotime($a['time']) > strtotime($b['time']));
});


$LOrders = usort($LOrders, array('time'));
*/

/*
$otimes = array(); foreach ($LOrders as $lorder) {    $otimes[] = strtotime($lorder['Order']['time']);}
array_multisort($otimes, SORT_ASC, $LOrders);
*/
 $default=true;
//$date=$today;
 if  (isset( $_POST['ADate'])|| (isset ($this->data['form']['date'])&&($this->data['form']['date']!="" )&&($this->data['form']['date']!=$today ) )) {
	 $date=$this->data['form']['date'];   $title='Orders Of : '.$date.''; 
	 if  (isset( $this->data['form']['customernum'])){$custnum=$this->data['form']['customernum'];//echo('isset1');
	 if  (isset( $this->data['form']['customerdate'])){$date=$this->data['form']['customerdate']; // echo('d1='.$date);
	 }
 
	
	  $LOrders=$products->ListeOrdersPerDateCustomer($date,$custnum); 
	 }
	 else{
		 //echo('isn"t set1');
	 $custnum="";$LOrders=$products->ListeOrdersPerDate($date); }
 // $liste=$products->OrdersPerDate($date);  
 //echo 'custnum'.$custnum;
 $Lingredients=$products->ListeProductsPerDate($date); 
// $LOrders=$products->ListeOrdersPerDate($date); 
 //$LOrders=$products->ListeOrdersPerDateCustomer($date,$custnum); 

 $default=true;
   /* echo 'Ingredients '.json_encode($Lingredients) ; */}

  
 if (isset ( $_POST['Today']) ) { 
  $date=$today;
  $title= 'Today Orders ('.$today.') : '; 
  $Lingredients=$products->ListeProductsPerDate($today); 
  //$LOrders=$products->ListeOrdersPerDate($today); 
   if  (isset( $this->data['form']['customernum'])){$custnum=$this->data['form']['customernum'];//echo('isset2');
    
   if  (isset( $this->data['form']['customerdate'])){$date=$this->data['form']['customerdate']; //echo('d2='.$date);
   }
 
	  $LOrders=$products->ListeOrdersPerDateCustomer($date,$custnum); 
	 }
	 else{
		// echo('isn"t set2');
		 $custnum="";$LOrders=$products->ListeOrdersPerDate($date); }
 //  $LOrders=$products->ListeOrdersPerDateCustomer($date,$custnum); 
  $default=true;

 }   

 if (isset ( $_POST['Coming']) )
 {   $date=$yesterday;
 $title= 'Coming Orders : '; 
$default=false;
	   $Lingredients=$products->ListeProductsFuture($yesterday); 
$LOrders=$products->ListeOrdersFuture($yesterday); 

	 
 }
 // ------------------------------------- warning div
  echo '<div class="alert alert-warning alert-dismissible" id="alert" style="display: none">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                <h4><i class="icon fa fa-warning"></i> Warning!</h4>
                Please select a column from below table.
              </div>';
  echo '<div class="alert alert-warning alert-dismissible" id="alertprod" style="display: none">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                <h4><i class="icon fa fa-warning"></i> Warning!</h4>
                Please select a product cell from below table.
              </div>'; ?>
              <div class="modal fade" id="alert-modifyorder" role="dialog" aria-hidden="true" >
              <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">×</span></button>
                <h4 class="modal-title"><i class="icon fa fa-warning"></i> Warning !</h4>
              </div>
              <div class="modal-body">
                <p>Please select an order from below table</p>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-default pull-left" style="float:right!important;" data-dismiss="modal">Close</button>
              </div>
            </div>
            <!-- /.modal-content -->
          </div></div>
          <!-- Modal alert pack button without select product -->
          <div class="modal fade" id="alert-packproduct" role="dialog" aria-hidden="true" >
              <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">×</span></button>
                <h4 class="modal-title"><i class="icon fa fa-warning"></i> Warning !</h4>
              </div>
              <div class="modal-body">
                <p>Please select a product from below table</p>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-default pull-left" style="float:right!important;" data-dismiss="modal">Close</button>
              </div>
            </div>
            <!-- /.modal-content -->
          </div></div>

        
          <?php
// ---------------------------------------- change date
  echo '<div class = "alert alert-info" style="margin-top:30px;margin-left:0px;padding-top: 0px;">';
  // dashboard button
  echo '<button id="dashbtn" class="btn btn-primary btn-flat" style="margin-bottom:-50px;margin-top:10px!important;"><i class="fa fa-fw fa-dashboard"></i> Dashboard</button>';
  // Home button
  echo '<button id="homebtn" class="btn btn-primary btn-flat" style="margin-bottom:-50px;margin-top:10px!important;margin-left:10px!important;"><i class="fa fa-fw fa-home"></i> Home</button>';
    // Orders button
  echo '<button id="ordersbtn" class="btn btn-primary btn-flat" style="margin-bottom:-50px;margin-top:10px!important;margin-left:10px!important;"><i class="fa fa-fw fa-shopping-cart"></i> Orders</button>';
  echo '<center>';
  echo '<span style="font-size:20px;font-weight:bold;margin-right:20px;" id="titledate">'.$title.'  </span>';
  echo $this->Html->link('<i class="fa fa-calendar"></i> ' . 'Change date', '#list', array(
                            'data-toggle' => 'modal',
                            'data-controls-modal' => 'modal-from-dom',
                            'data-backdrop' => 'static',
                            'data-close-on-escape' => 'true',
                            'class' => 'btn btn-primary btn-lg',
                            'escape' => false,
							'id'=>'linkchangedate'
                        )); 
echo '</center>';
?>
<ul class="nav navbar-nav navbar-right" style="margin-top: -48px;margin-right: 15px;">
       <!-- <li><a href="#"></a></li>-->
     <li class="dropdown user user-menu">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <i class="fa fa-user"></i>
                                <span style="color:#31708f!important;"> <?php echo $this->Session->read('Auth.User.username') ; ?><i class="caret"></i></span>
                            </a>
                            <ul class="dropdown-menu">
                                <!-- User image -->
                                <li class="user-header bg-light-blue">
                                 <img src="http://temps.comptaffaires.org/app/webroot/img/avatar5.png"  class="img-circle" alt="User Image" /> 
                                    <p>
                                        <?php echo $this->Session->read('Auth.User.username') ;?>  </br>
                                      
                                        <small>Member since <?php echo substr( $this->Session->read('Auth.User.created'),0,10) ;?> </small>
                                    </p>
                                </li>
                                <!-- Menu Body 
                                <li class="user-body">
                                    <div class="col-xs-4 text-center">
                                        <a href="#">Followers</a>
                                    </div>
                                    <div class="col-xs-4 text-center">
                                        <a href="#">Sales</a>
                                    </div>
                                    <div class="col-xs-4 text-center">
                                        <a href="#">Friends</a>
                                    </div>
                                </li>-->
                                <!-- Menu Footer-->
                                <li class="user-footer">
                                  <div class="pull-left">
                                        <?php echo '<a   href="'. Router::url('/').'users/profile" class="btn btn-default btn-flat">Profile </a>';?>
                                    </div> 
                                    <div class="pull-right">
                                        <?php echo '<a   href="'. Router::url('/').'logout"   class="btn btn-default btn-flat">Logout</a>';?>
                                    </div>
                                </li>
                            </ul>
                        </li>
        
      </ul>
<?php
echo "</div>";

//@Ran
        
// ---------------------------------------- change Customer
  echo '<div class = "alert alert-info" style="margin-top:30px;margin-left:0px;padding-top: 0px;">';
    echo '<center>';
echo $this->Form->create('form',array('style'=>'','id'=>'CustomerForm','method'=>'POST' ));  ?>
       
			<div class="row">
			<div class="col-sm-2" style=" margin-top: 10px; padding-right: 0px;">
			<span style=" font-size: 22px;margin-top: 20px;margin-right: 0px;padding-top: 20px;">Customer phone :</span></div>
			<div class="col-sm-2" style="padding-left: 0px;">
			<input name="data[form][customernum]" type="text"  style="color:black!important;width:200px!important;margin-top: 10px;" value="<?php echo $lastvalue; ?>" id="inputcustomernum" onfocus="this.style.color = 'black';"></input>
			</div>
		<div class="col-sm-2" style=" margin-top: 10px; padding-right: 0px;">
			<span style=" font-size: 22px;margin-top: 20px;margin-right: 0px;padding-top: 20px;">Customer name :</span></div>
			<div class="col-sm-2" style="padding-left: 0px;">
			<input name="data[form][customername]" type="text"  style="width:200px!important;margin-top: 10px;" value="<?php echo $lastvaluename; ?>" id="inputcustomername"></input>
			</div>
			
			<div class="col-sm-2" style="padding-left: 0px;">
			<input type="button" value="CLR" onclick="clearing();" style="background:#3c8dbc!important;color:white;margin-top: 10px;padding-top: 8px;padding-bottom: 8px;font-size: 16px!important;width: 154px;">
			</div>
			
			</div>
			
             <input name="data[form][customerdate]" type="hidden" value="<?php echo $date; ?>" id="inputcustomerdate"></input>
              <?php echo $this->Form->end(); ?>
<?php 
echo '</center></div>';

//end 

echo '<div class="panel panel-default"> <div class="panel-body"><div class="pull-left">';

 /*echo $this->Html->link('<i class="fa fa-gear"></i> ' . 'Edit', '#list', array(
                            'data-toggle' => 'modal',
                            'data-controls-modal' => 'modal-from-dom',
                            'data-backdrop' => 'static',
                            'data-close-on-escape' => 'true',
                            'class' => 'btn btn-default',
                            'escape' => false
                        )); */

echo '</div>';
// don't display buttons for past dates
if ($date >= $today)
{
echo '<div class="pull-right">';
// pack & checkout buttons
?>
<button type="button" class="btn btn-success btn-filter"  id="packorder" style="border:gray!important;margin-right:4px;background-color: #777;"><i class="fa fa-fw fa-inbox"></i> Pack Order</button>
<?php 
echo '<button type="button" class="btn btn-success btn-filter" id="packproduct" style="margin-right:4px;"><i class="fa fa-fw fa-inbox"></i> Pack Product</button><button type="button" class="btn btn-info" id="checkout" data-toggle="modal" data-target="#confirmCheckoutOrder" data-title="Check Out Order" data-message="Are you sure you want to check out this order ?" data-controls-modal="modal-from-dom" data-backdrop="static" data-close-on-escape="true" escape=false><i class="fa fa-fw fa-check-square-o"></i> Check Out</button>' ;
/*echo '<button type="button" class="btn btn-success btn-filter" id="packproduct" style="margin-right:4px;"><i class="fa fa-fw fa-inbox"></i> Pack Product</button><button type="button" class="btn btn-warning btn-filter" id="editproduct"><i class="fa fa-pencil"></i> Edit Product</button>' ;*/
//btn btn-success btn-filter <i class="fa fa-fw fa-archive"></i>
//echo '<button type="button" class="btn btn-warning btn-filter" id="editorder"><i class="fa fa-pencil-square-o"></i> Edit Order</button> ';
/*echo '<form method="POST" action="#" accept-charset="UTF-8" name="delete-form" style="display:inline;" >
    <button type="button" class="btn btn-danger btn-filter" id="removeproduct" data-toggle="modal" data-target="#confirmDelete" data-title="Delete Product" data-message="Are you sure you want to delete this Product ?"><i class="fa fa-times"></i> Remove Product</button>
</form>';*/
echo '</div>'; 
}

 //echo 'All  Ingredients : '.json_encode ($Lingredients).'</br>';
 //echo 'All  Orders : '.json_encode ($LOrders).'</br>';
// navigation buttons
echo '<button class="btn btn-default" style="margin-bottom: 15px;margin-right: 10px;padding-bottom: 0px;padding-top: 0px;" id="orient-btn" direction="left-right"><i class="fa fa-fw fa-arrows"></i></button><div class="btn-group"><button class="btn btn-default" style="padding-bottom: 0px;padding-top: 0px;" id="left"><i class="fa fa-arrow-left"></i></button><button class="btn btn-default" style="padding-bottom: 0px;padding-top: 0px;" id="right"><i class="fa fa-arrow-right"></i></button></div>';
echo '<div class="btn-group" style="margin-top: 0px;margin-left: 20px;"><button type="button" class="btn btn-primary" id="neworder" style="border-radius: 4px;color:white;opacity:0.85;"><a style="color:white!important;" class="two"> <i class="fa fa-fw fa-plus"></i> New Order</button>
</form></div>';
// don't display buttons for past dates
if ($date >= $today)
{
// orders buttons
echo '<button type="button" class="btn btn-warning" id="modifyorder" style="margin-top: -30px;margin-left: 5px;"><i class="fa fa-pencil-square-o"></i> Modify Order</button><button type="button" class="btn btn-danger" id="cancelorder" data-toggle="modal" data-target="#confirmCancelOrder" data-title="Cancel Order" data-message="Are you sure you want to cancel this order ?" data-controls-modal="modal-from-dom" data-backdrop="static" data-close-on-escape="true" escape=false style="margin-top: -30px;margin-left: 5px;"><i class="fa fa-times"></i> Cancel Order</button><button type="button" class="btn btn-success btn-filter" id="addsuborder" data-toggle="modal" data-target="#confirmSubOrder" data-title="Attach Sub-order" data-message="Are you sure you want to attach sub-order to this order ?" data-controls-modal="modal-from-dom" data-backdrop="static" data-close-on-escape="true" escape=false style="margin-top: -30px;margin-left: 5px;opacity:0.75!important;"><i class="fa fa-fw fa-paperclip"></i> Sub-order</button>';
}
else
{
  echo '<button type="button" class="btn btn-success" id="vieworder" style="margin-top: -30px;margin-left: 5px;"><i class="fa fa-th-list"></i> View Order</button>';
}
// print button
/*<button class="btn bg-default" id="printbtn" style="border-radius: 4px;color:gray;margin-right:5px;"><i class="fa fa-fw fa-print"></i> Print</button>*/

 /*echo '<div class="btn-group" style="margin-top: 0px;margin-left: 20px;"><button id="summary" type="button" class="btn bg-light-blue"><i class="fa fa-fw fa-list-alt"></i> Summary</button>
 <button type="button" class="btn bg-aqua" id="addproduct"><i class="fa fa-fw fa-plus-square"></i> Add Product</button>
<button type="button" class="btn bg-green" id="orderitems"><i class="fa fa-fw fa-list-ul"></i> View Products</button>

<form method="POST" action="#" accept-charset="UTF-8" name="deleteorder-form" style="display:inline;" >
    <button type="button" class="btn bg-red" id="removeorder" data-toggle="modal" data-target="#confirmDeleteOrder" data-title="Delete Order" data-message="Are you sure you want to delete this order ?" style="border-radius: 0;border-top-right-radius: 4px;border-bottom-right-radius: 4px;"><i class="fa fa-times"></i> Delete Order</button>
</form></div>';*/

$productsToShow = array();
//*************************** TABLE **************************************************************************
if ($LOrders != null)
{
   $widthtable = sizeof($Lingredients) * 60 +200;
   echo '<div class="container" id="tablediv" ><table class="table table-filter" id="fixTable" style="width:'.$widthtable.'px!important;left: 0px!important;" border="1" >';
echo '<thead><tr class="titlerow"><th style="background-color:#2E9AFE;color:white;vertical-align:middle"><B><center>ORDER #</center></B></th><th style="background-color:#2E9AFE;color:white;vertical-align:middle;width:50px!important;"><B><center>TIME</center></B></th><th style="background-color:#2E9AFE;color:white;vertical-align:middle"><B><center>CUSTOMER</center></B></th>';
/*foreach($LOrders as  $order=>$ord)
 { //echo 'item:'. $IdItem ;
    
    $ListeProducts=$products->ListeProductsOrder($order);
    // add suborders products if exist
    if ($orders->SubOrders($order))
    {
      $sorders = $orders->SubOrders($order);
      foreach($sorders as  $idor)
      {
        $prodsuborder = $products->ListeProductsOrder($idor);
        
        $ListeProducts = array_unique(array_merge($ListeProducts, $prodsuborder));
      }
    }
// sort products by categories
    $productsSortedBycat = array();
    //$c =0;
    //$catsid = array_column($cats, 'id');
    // add categories as second column
    //echo "INI :";
   //print_r($ListeProducts);
    foreach ($cats as $Idcat) {
      foreach($ListeProducts as $IdItem) {
        $categitem =$items->ItemCatbyId($IdItem);
        //echo $categitem." / ".$Idcat['Categorie']['id']." || ";
        if (intval($categitem) == intval($Idcat['Categorie']['id']))
        {
          array_push($productsSortedBycat,$IdItem);
          //$productsSortedBycat[$c]=$IdItem;
          //$c ++;
        }
      }
      //echo '</br>';
    }
    //echo '</br>';
   // print_r($productsSortedBycat);
    

foreach($ListeProducts as $IdItem)
 {
    //$quantiteinit=0;
   //   $quantiteinit=$products->QuantiteFuture($IdItem,$order ) ;  

  /////// if($quantiteinit>0) {
   
    
    if (! in_array($IdItem, $productsToShow, TRUE))
    {

        //echo '<th class="th" style="width:60px!important;background-color:'.$categories->ColorById($items->ItemCatbyId($IdItem)).';color:white;" order="'.$order.'" product="'.$products->ProductID($IdItem,$order).'" ><B><center>'. $items->ItemById( $IdItem);
      echo '<th class="th" style="width:60px!important;background-color:'.$categories->ColorById($items->ItemCatbyId($IdItem)).';color:white;" order="'.$order.'" ><B><center>'. $items->ItemById( $IdItem);
        echo '</center></B></th>'; 


   }
 //////}
 }// products
 $productsToShow = array_unique(array_merge($productsToShow,$ListeProducts));
 }// ingreedients
  echo'</tr></thead><tbody>';*/
foreach($LOrders as  $order=>$ord)
 { //echo 'item:'. $IdItem ;
		
		$ListeProducts=$products->ListeProductsOrder($order);
    // add suborders products if exist
    if ($orders->SubOrders($order))
    {
      $sorders = $orders->SubOrders($order);
      foreach($sorders as  $idor)
      {
        $prodsuborder = $products->ListeProductsOrder($idor);
        
        $ListeProducts = array_unique(array_merge($ListeProducts, $prodsuborder));
      }
    }
 $listeprodno =$ListeProducts;
/*foreach($ListeProducts as $IdItem)
 {
	 
		
    if (! in_array($IdItem, $productsToShow, TRUE))
    {
      echo '<th class="th" style="width:60px!important;background-color:'.$categories->ColorById($items->ItemCatbyId($IdItem)).';color:white;" order="'.$order.'" ><B><center>'. $items->ItemById( $IdItem);
	      echo '</center></B></th>'; 
   }
 //////}
 }*/// products
 $productsToShow = array_unique(array_merge($productsToShow,$ListeProducts));
 }// ingreedients
// sort products by categories
    $productsSortedBycat = array();
    //$c =0;
    //$catsid = array_column($cats, 'id');
    // add categories as second column
    //echo "INI :";
   //print_r($ListeProducts);
    foreach ($cats as $Idcat) {
      foreach($productsToShow as $IdItem) {
        $categitem =$items->ItemCatbyId($IdItem);
        if (intval($categitem) == intval($Idcat['Categorie']['id']))
        {
          array_push($productsSortedBycat,$IdItem);
        }
      }
    }
  foreach($productsSortedBycat as $IdItem)
 {
   
      echo '<th class="th" style="width:60px!important;background-color:'.$categories->ColorById($items->ItemCatbyId($IdItem)).';color:white;letter-spacing: 1px;text-shadow: 1px 1px #747474;" order="'.$order.'" ><B><center>'. $items->ItemById($IdItem);
        echo '</center></B></th>'; 

 }
  echo'</tr></thead><tbody>';

$totcust=0;
foreach($LOrders as  $order=>$ord)
{ //  echo('order'.$order);
 //echo('date'.$date);
  $numC=$orders->customerorder($order,$date);
 // echo('numC'.$numC);
  $nomC=$customers->CustomerById($numC);
 //  echo('nomC'.$nomC);
  $cflag = $customers->CustomerFlag($numC);
  $cbgcolor ="";
  if ($cflag == 1) {$cbgcolor="background-color:#ff8080!important;";}
  /**************************  Desactive empty order display *************************************/
  /*if ((isset ( $_POST['ADate']))||(isset ( $_POST['Today'])||$default )){$totcust=$products->TotIngredCustomer($numC, $date);}else{ $totcust=$products->TotIngredCustomerFuture($numC,$date  );}
   	if (($totcust>0) ) {*/
  /**************************  Desactive empty order display *************************************/
      $corder = $orders->porderofcustomer($numC,$date);
      //$corder = $order['id'];
      $ordertime = $orders->TimeOrder($corder);
      $orstatus= $orders->statusOrder($order);
        //$color='#f9f9f9';
    switch ($orstatus) {
      case 0:
        $color='#f9f9f9';
        break;
      case 3:
        // echo "Packed"; 
        $color='#ffc200';
        break;
      case 2:
        // echo "Checked out"; 
        $color='#33CC33';
        break;
      case 4:
        // echo "canceled"; 
        $color='#FF6633';
        break;
      case 3:
        // echo "canceled"; 
        $color='#33CC33';
        break;
        default:  
        $color='#f9f9f9';
        break;

    } 
      // customer with link to edit
 	/*echo '<tr><th class="orderth" order="'.$corder.'"><center><label >'.$this->Html->link( $nomC ,   array( 'controller'=>'customers','action'=>'edit', $numC )) .'</br>'.$customers->CustomerTelById($numC).'    </label></center></th>';*/
  //format time
  $ordertime=date('h:i A', strtotime($ordertime));
  if ($ordertime === "11:59 PM") {$ordertime="P/U";}
  echo '<tr ><th class="orderselect" order="'.$corder.'" style="'.$cbgcolor.'">'.$corder.' </th><th class="orderselect" order="'.$corder.'" style="'.$cbgcolor.'text-align:center;">'.$ordertime.'</th><th class="orderselect" order="'.$corder.'" style="'.$cbgcolor.'text-align:center;"><span style="color:black;font-weight:bold;">'.$nomC.'</span></br>'.$customers->CustomerTelById($numC).'    </th>';

foreach($productsSortedBycat as $IdItem)
 {

$orderCI = $orders->porderofcustomer($numC,$date) ;
if ($products->QuantiteItem($numC,$IdItem,$orderCI))  
{ 
	$quantite=$products->QuantiteItem($numC,$IdItem,$orderCI) ;  
	
  // Color type of order product

    $idprd=$products->ProductID($IdItem,$orderCI);
  	 $statutprod= $products->statusProduct($idprd); 

 /*		
switch ($statutprod) {
    case 0:
        // echo "Not Ready";  
		$color='#FFCC33';
        break;
    case 1:
         //echo "Ready"; 
		 $color='#CCFF00';
        break;
    case 2:
        // echo "Packed"; 
		$color='#33CC33';
        break;
	case 3:
        // echo "Delivered"; 
		$color='#3399FF';
        break;
	case 4:
      //  echo "Cancelled";
	  $color='#FF6633';
        break;
}*/

if (!in_array($color, array('#33CC33', '#FF6633', '#ffc200'),true))
{
  switch ($statutprod) {
      case 2:
        // echo "Packed"; 
      $color='#FFCC33';
        break;
      case 0:
        // echo "not ready"; 
      $color='#f9f9f9';
        break;
  }
}


  if(($quantite>0) ){echo '<td class="orderprod" style="text-align:center;background-color:'.$color.';font-size:18px;min-width:50px!important;" order="'.$orderCI.'" product="'.$idprd.'" >'. $quantite.'</td>'; }
  else {
   echo '<td class="orderprod" id="emptyprod_'.$idprd.'"  style="text-align:center;background-color:'.$color.';width:80px!important;max-width:100px!important;min-width:50px!important;" order="'.$orderCI.'" product="'.$idprd.'" ></td>';}	//here
}
else {
if (!in_array($color, array('#33CC33', '#FF6633','#ffc200'),true))
    {
        $color="#f9f9f9";
    }
  echo '<td class="orderprod" id="emptyprod_'.$IdItem.'" style="text-align:center;background-color:'.$color.';width:80px!important;max-width:100px!important;min-width:50px!important;" order="'.$orderCI.'" product="'.$IdItem.'" ></td>';}
	}
/**************************  Desactive empty order display *************************************/
//}
/**************************  Desactive empty order display *************************************/
// check if current order had suborders
    if ($orders->SubOrders($order))
    {
      $sorders = $orders->SubOrders($order);
      // sort suborder ids
      sort($sorders);
      $soindex = 1;
      foreach($sorders as  $idor)
      {
        $numC=$orders->customerorder($order,$date);
        $cflag = $customers->CustomerFlag($numC);
        $cbgcolor ="background-color:#cee7ff!important;";
  if ($cflag == 1) {$cbgcolor="background-color:#ffa2a2!important;";}
  if ((isset ( $_POST['ADate']))||(isset ( $_POST['Today'])||$default )){$totcust=$products->TotIngredCustomer($numC, $date);}else{ $totcust=$products->TotIngredCustomerFuture($numC,$date  );}
    if (($totcust>0) ) {
      $ordertime = $orders->TimeOrder($idor);
      $orstatus= $orders->statusOrder($idor);
        //$color='#f9f9f9';
    switch ($orstatus) {
      case 0:
        $color='#f9f9f9';
        break;
      case 2:
        // echo "Packed"; 
        $color='#33CC33';
        break;
      case 4:
        // echo "canceled"; 
        $color='#FF6633';
        break;
      case 3:
        // echo "canceled"; 
        $color='#33CC33';
        break;
        default:  
        $color='#f9f9f9';
        break;

    } 
      // customer with link to edit
  /*echo '<tr><th class="orderth" order="'.$corder.'"><center><label >'.$this->Html->link( $nomC ,   array( 'controller'=>'customers','action'=>'edit', $numC )) .'</br>'.$customers->CustomerTelById($numC).'    </label></center></th>';*/
  //format time
  $ordertime=date('h:i A', strtotime($ordertime));
  if ($ordertime === "11:59 PM") {$ordertime="P/U";}
  $dispID = $order.'-'.$soindex;
   $secondname=$orders->customerorderSecondname2($idor,$order,$date);
  echo '<tr ><th class="orderselect" order="'.$idor.'" style="'.$cbgcolor.'color:#555555!important;">'.$dispID.' </th><th class="orderselect" order="'.$idor.'" style="'.$cbgcolor.'text-align:center;color:#555555!important;">'.$ordertime.'</th><th class="orderselect" order="'.$idor.'" style="'.$cbgcolor.'text-align:center;color:#555555!important;"><span style="color:black;font-weight:bold;"></span></br>'.$secondname.'   </th>';

foreach($productsSortedBycat as $IdItem)
 {

$orderCI = $idor;
if ($products->QuantiteItem($numC,$IdItem,$orderCI))  
{ 
  $quantite=$products->QuantiteItem($numC,$IdItem,$orderCI) ;  
  
  // Color type of order product

    $idprd=$products->ProductID($IdItem,$orderCI);
     $statutprod= $products->statusProduct($idprd); 


if (!in_array($color, array('#33CC33', '#FF6633','#ffc200'),true))
{
  switch ($statutprod) {
      case 2:
        // echo "Packed"; 
      $color='#FFCC33';
        break;
      case 0:
        // echo "not ready"; 
      $color='#f9f9f9';
        break;
  }
}


  if(($quantite>0) ){echo '<td class="orderprod" style="text-align:center;background-color:'.$color.';font-size:18px;min-width:50px!important;" order="'.$orderCI.'" product="'.$idprd.'" >'. $quantite.'</td>'; }
  else {
   echo '<td class="orderprod" id="emptyprod_'.$idprd.'"  style="text-align:center;background-color:'.$color.';width:80px!important;max-width:100px!important;min-width:50px!important;" order="'.$orderCI.'" product="'.$idprd.'" ></td>';}  //here
}
else {
if (!in_array($color, array('#33CC33', '#FF6633','#ffc200'),true))
    {
        $color="#f9f9f9";
    }
  echo '<td class="orderprod" id="emptyprod_'.$IdItem.'" style="text-align:center;background-color:'.$color.';width:80px!important;max-width:100px!important;min-width:50px!important;" order="'.$orderCI.'" product="'.$IdItem.'" ></td>';}
  }

}
  $soindex ++;
      }
    }


// end foreach order loop
}
 	
/////////}
/* totals  :echo '</tr><tr class="totalColumn" style="background-color:grey;color:white"><td><B><center>Total</center><B></td>';
 	foreach($Lingredients as $IdItem=>$order)
	{echo '<td style="background-color:grey;color:white" class="val totalCol"></td>';}*/
 echo '</tr><tr><th style="background-color:#2e9afe;"  colspan="3"></th>';
 foreach($productsSortedBycat as $tdtotal)
 {
    echo '<td class="totalprod"></td>';
 }
 echo '</tr></tbody></table></div>';
// echo 'tot' . $fiches->TotHeuresIntervMission('1','1');

 echo '</br><div style="background-color:white!important;font-weight:bold;font-size:16px;;width:350px;margin-left:35px;display:inline!important;"> <span style="color:#FFCC33"> Product Packed </span> <span style="color:#ffc200"> Order Packed </span> <span style="color:#33CC33"> Order Checked </span> <span style="color:#FF6633"> Order Cancelled </span> <span style="color:#ff8080"> Customer Flagged </span></div>';
}
else
{
  echo '<div class="callout callout-warning"> <h4><i class="fa fa-warning"></i> No Orders</h4> <p>There is no orders for this date!</p> </div>';
}
?>
<!-- Modal Dialog confirm delete -->
<div class="modal fade" id="confirmDelete" role="dialog" aria-labelledby="confirmDeleteLabel" aria-hidden="true" >
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h4 class="modal-title">Delete Product</h4>
      </div>
      <div class="modal-body">
        <p>Are you sure about this ?</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
        <button type="button" class="btn btn-danger" id="confirm">Delete</button>
      </div>
    </div>
  </div>
</div>
<!-- ORDER Modal Dialog confirm delete -->
<!--<div class="modal fade" id="confirmDeleteOrder" role="dialog" aria-labelledby="confirmDeleteLabel" aria-hidden="true" >
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h4 class="modal-title">Delete Order</h4>
      </div>
      <div class="modal-body">
        <p>Are you sure about this ?</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
        <button type="button" class="btn btn-danger" id="confirmdelete">Delete</button>
      </div>
    </div>
  </div>
</div>-->
<!-- ORDER Modal Dialog confirm check out -->
<div class="modal fade" id="confirmCheckoutOrder" role="dialog" aria-labelledby="confirmCheckoutLabel" aria-hidden="true" >
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h4 class="modal-title">Check Out Order</h4>
      </div>
      <div class="modal-body">
        <p>Please select an order from below list and then click Check Out</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-info" id="confirmcheckout"><i class="fa fa-fw fa-check"></i> Check Out</button>
        <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
      </div>
    </div>
  </div>
</div>
<!-- ORDER Modal Dialog confirm cancel -->
<div class="modal fade" id="confirmCancelOrder" role="dialog" aria-labelledby="confirmCancelLabel" aria-hidden="true" >
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h4 class="modal-title">Cancel Order</h4>
      </div>
      <div class="modal-body">
        <p>Please select an order from below list and then click Cancel Order</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" id="confirmcancel"><i class="fa fa-times"></i> Cancel Order</button>
        <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
      </div>
    </div>
  </div>
</div>
<!-- ORDER Modal Dialog confirm add sub-order -->
<div class="modal fade" id="confirmSubOrder" role="dialog" aria-labelledby="confirmCancelLabel" aria-hidden="true" >
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h4 class="modal-title">Sub-order</h4>
      </div>
      <div class="modal-body">
        <p>Please select an order from below list and then click Sub-order</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-success btn-filter" id="confirmsorder" style="opacity:0.75!important;"><i class="fa fa-fw fa-paperclip"></i> Attach Sub-order</button>
        <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
      </div>
    </div>
  </div>
</div>
<!-- Modal Dialog order summary -->
<div class="modal fade" id="ordersummary" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
<div class="modal-backdrop fade in"></div>
    <div class="modal-dialog" >
        <div class="modal-content">
             <div class="modal-header">
                 <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                 <h3 class="modal-title" id="myModalLabel"><center>Order Summary</center></h3>
             </div>
             <div class="modal-body">
              <div id="ordercustomer" class="bg-blue" style="padding:5px 10px;border-top-left-radius : 5px;
              border-top-right-radius : 5px;">
             </div>
             <h4 class="box-title bg-light-blue" style="padding:10px;margin-top:0px;border-bottom-left-radius : 5px;border-bottom-right-radius : 5px;"></h4>
             <div id="itemslist">
             </div>
            </div>
  </div>
</div>
</div>
<!-- Modal ADD Product to the order -->
<div class="modal fade" id="addprodModal" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-backdrop fade in"></div>
  <div class="modal-dialog" >
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
    <h3 class="modal-title" id="addprodtitle"></h3></div>
        <div class="modal-body form"  style="background-color:white;width:600px;">
 
  
<?php echo $this->Form->create('Product',array('action'=>'Hadd','id'=>'addprodform' )); 
$options2=$items->ListeItems();
$qualifiers=array('Regular','Hot', 'Mild',  'Very Hot', 'Extra Hot' );
?>
<input type="hidden" name="data[Product][order]" id="Oid"  />
<fieldset style="margin-left:50px">
       <table>
<div style="display:none!important;">
<?php echo $this->Form->select('item' ,$options2 , array('label'=>'','style'=>' ;margin-left:-2px','id'=>'selectitem' ));;?></div>
<?php //echo $this->Html->image('food.png',array('id'=>'categ','style'=>'width:90px')) ;?>
<tr><td><label>Quantity</label></td><td><?php echo $this->Form->input('quantity' ,array('label'=>'','style'=>'width:70px; ;margin-left:-2px','type'=>'number'/*,'default'=>'1'*/,'onclick'=>'clickfocus();','id' => 'pquantity' ));?></td><td></td></tr>
<!-- <tr><td><label>Qualifiers</label></td><td><?php //echo $this->Form->radio('qualifiers', $qualifiers, array('legend' => false)); ?></td></tr> -->
<tr><td rowspan="2" ><label>Instructions  </label></td><td style="padding-bottom: 0px!important;"><?php echo $this->Form->input('instructions' ,array('label'=>'','placeholder'=>"modifiers",'style'=>'    height: 38px ;text-align:left;','rows'=>'1','type'=>'textarea','id'=>'intsru'  ));?>
</td>
<td>
<img style='width: 50px;height: 50px;' id="tdspicy" src='/img/spicy.png' onclick='btnspicy();' > </img><img style='width: 50px;height: 50px;' id="tdcut" src='/img/box.png'onclick='btncut();'> </img><img style='width: 50px;height: 50px;' src='/img/arrows.png' onclick='btnswitch();'> </img>
</td></tr>
<tr>

<td style="padding-top: 0px!important;"><?php echo $this->Form->input('instructions2' ,array('label'=>'','placeholder'=>"item insctructions",'style'=>'    height: 38px ;text-align:left;','rows'=>'1','type'=>'textarea','id'=>'intsru2'  ));?>
</td>
</tr>
 </table>
        
    

 
 </div>
<div class="modal-footer">
  <?php     echo $this->Form->submit('Add', array('class' => 'form-submit', 'style' => 'float:left!important;margin-top:0px!important;margin-left:360px;width:70px;height:34px;background:#62af56;color:#fff', 'onclick'=>'savainst()','title' => 'Clic here to add the product    ') ); ?>
  </fieldset>
  <?php echo $this->Form->end(); ?>
        <button type="button" class="btn btn-default" onclick="document.getElementById('intsru').value='';document.getElementById('intsru2').value='';" data-dismiss="modal">Cancel</button>
      </div>
</div></div></div>


<!--<script src="//code.jquery.com/jquery-1.12.0.min.js"></script>-->
<script>

function showProducts(str) {
	//alert('str'+str);
	
    if (str == "") {
        document.getElementById("txtHint").innerHTML = "";
        return;
    } else { 
        if (window.XMLHttpRequest) {
            // code for IE7+, Firefox, Chrome, Opera, Safari
            xmlhttp = new XMLHttpRequest();
        } else {
            // code for IE6, IE5
            xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
        }
        xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                document.getElementById("txtHint").innerHTML = this.responseText;
            }
        };
        xmlhttp.open("GET","/orders/getproduct/"+str,true);
        xmlhttp.send();
    }
}

</script>
<!-- Modal for pack order -->
<div class="modal" id="packorderModal">
	<div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header" id="myModalLabelorderpack">   
        <!-- <center><h4 class="modal-title" id="myModalLabelorderpack2" style="color:#0B8EB6; ;"></h4></center>   -->
		 </div><!--<div class="container"></div>-->
		 
        <input type="hidden" id="ordertopackid"  value="" onchange=""/>
		
		<div style="margin-left:40px;" id="txtHint" class="modal-body form">
		
	
		
	<!-- 	foreach($LOrders as  $order=>$ord)
	{ //echo 'item:'. $IdItem ;
		// echo json_encode($order);
		 $ListeProducts=$products->ListeProductsOrder($order);
		
	?>	<script language="JavaScript">
	 var otp =document.getElementById('ordertopackid').value;
	 var tttt= echo $ListeProducts[1]; ?>;
	 alert(tttt);
	
	 </script>
	
		

		$ListeProducts=$products->ListeProductsOrder($order);
		 echo json_encode($ListeProducts);

 
 $listeprodno =$ListeProducts;
 	// echo json_encode($listeprodno);
// products
 $productsToShow = array_unique(array_merge($productsToShow,$ListeProducts));
 
 ?>
 	<script language="JavaScript">
	 </script>
  }?>-->

         </div>
        <div class="modal-footer">
          <a href="#" data-dismiss="modal" class="btn btnclose">Close</a>
         </div>
      </div>
    </div>
</div> 

 <script type="text/javascript" charset="utf-8">
 function fncheckout(q){
				
			//	alert('fncheckout');
				$.get("/orders/checkout/"+q+"/0").complete(function()
            {location.reload(true);});
			}
function fnpack(q){
				
				//alert('fnpack');
			
					var count=0; 
	var list="";
      var selected = [];
$('#checkboxes input:checked').each(function() {
	
    selected.push($(this).attr('name'));
	
	if (($(this).attr('name')) != "checkAll" ){
		
		if(($(this).closest('td').css("background-color")) == "rgb(112, 209, 189)"){countprint=countprint+1;}
		count=count+1;
	list=list+$(this).attr('name')+'t';	
	}
	

});
//alert('list'+list);
//alert('count'+count);
$.get("/products/pack2/"+list+"/"+q).complete(function()
            {
				//alert('complete');
				 location.reload(true);
	 
			});  
				
/*for (i = 0; i < count; i++) { 
   // alert('i'+i);
	var p = list.indexOf("t");
	var res = list.substring(0, p);
	//alert('res='+res);
	list=list.substring(p+1);
	//alert('list'+list);
	//$.get("/products/pack2?id="+res+"&order="+q).complete(function()
	 $.get("/products/pack2/"+res+"/"+q).complete(function()
            {
				 a=$('[order=""+q][product=""+res]');
				
				alert(a.css('color'));
				a.css('color') ='red'; 
				
				
	 
			});  
				
			}*/
			
}
 /* $.get("/products/pack?id="+res+"&order="+q).complete(function()
            {location.reload(true);}); */
				
			
 //@ran
$('#checkout2').click(function(){
	alert('here');
	
/* $.get("/orders/checkout/"+order+"/0").complete(function()
            {location.reload(true);});
	 */		
});
function savainst(){
	document.getElementById('intsru').value=document.getElementById('intsru').value+'   '+document.getElementById('intsru2').value;
}

 function clickfocus(){
	 
	 $( ".ui-widget-content ui-corner-all ui-keyboard-preview" ).focus();
 }

 var lastorder;
 $('.orderth').click(function(){
 /*  var currentorder = $('.orderth').index(this);
   // ORDER ID
   var orid =$(this).attr('order');
  
      if ((currentorder!=lastorder) && (lastorder != null))
        {
          $('.orderth:eq('+lastorder+')').css('box-shadow', '');

        }
$(this).css('box-shadow', 'inset 0 0 30px 100px #07b');
lastorder=currentorder;*/
///products/index/39

    // order edit products
    var order = $(this).attr('order');
    location.href = "./products/index/"+order;



 });
 $('.orderselect').click(function(){
   var currentorder = $('.orderselect').index(this);
   // button activation
    $('#modifyorder').prop("disabled", false);
    $('#addsuborder').prop("disabled", false);
    $('#checkout').prop("disabled", false);
    $('#cancelorder').prop("disabled", false);
    $('#cancelorder').css('background-color','#f56954');
    $('#cancelorder').css('color','#fff');
    $('#cancelorder').html('<i class="fa fa-times"></i> Cancel Order');
  if ((currentorder!=lastorder) && (lastorder != null))
  {
    
    $('.orderselect:eq('+lastorder+')')
        .css('box-shadow', '');
      }
      // Highlight column 
    var bgcolor=$(this).css('background-color');
    
  bgcolor = shadeColor1(bgcolor,-0.4);
    $(this).css('box-shadow', 'inset 0 0 30px 100px '+bgcolor);
    // check if selected order is suborder or a checked out one
    var sordertxt = '<span style="color:black;font-weight:bold;"></span><br>    .  .   ';
    var coordertxt = 'P/U';
    if (($(".orderselect:eq("+currentorder+")").html() == sordertxt) || ($(".orderselect:eq("+(currentorder+1)+")").html() == sordertxt) || ($(".orderselect:eq("+(currentorder+2)+")").html() == sordertxt))
    {
      $('#addsuborder').prop("disabled", true);
    }
    if (($(".orderselect:eq("+currentorder+")").html() == coordertxt) || ($(".orderselect:eq("+(currentorder+1)+")").html() == coordertxt) || ($(".orderselect:eq("+(currentorder-1)+")").html() == coordertxt))
    {
      $('#modifyorder').prop("disabled", true);
      $('#addsuborder').prop("disabled", true);
      $('#cancelorder').prop("disabled", true);
      $('#checkout').prop("disabled", true);
 
    }

    // case cancelled order : switch the cancel button to uncancel 
      var row_index = $(this).parent().index()+1;

      if ($('#fixTable').find('tr:eq('+row_index+')').find('td:eq(0)').css('background-color') === 'rgb(255, 102, 51)')
      {
        //$('#cancelorder').prop("disabled", true);
        $('#checkout').prop("disabled", true);
        $('#cancelorder').css('background-color','#ffaa9d');
        $('#cancelorder').css('color','#f4543c');
        $('#cancelorder').html('<i class="fa fa-fw fa-undo"></i> Uncancel Order');
      }


        lastorder = currentorder;

 });
 $('#modifyorder').click(function(){
    if (lastorder != null)
    {
    var order = $(".orderselect:eq("+lastorder+")").attr('order');
    location.href = "./orders/edit/"+order;}
    else
    {
      $('#alert-modifyorder').modal('show');
    }
  });
 // order view
$('#vieworder').click(function(){
    if (lastorder != null)
    {
    var order = $(".orderselect:eq("+lastorder+")").attr('order');
    location.href = "./orders/view/"+order;}
    else
    {
      $('#alert-modifyorder').modal('show');
    }
  });
 /*
$('#summary').click(function(){
    if (lastorder != null)
    {
      
    $(".orderth:eq("+lastorder+")").css('box-shadow', '');
    var order = $(".orderth:eq("+lastorder+")").attr('order');

    $(".box-title").html("Order : "+order);
    // items of the order
    var val;
    var itemslist ='<ul class="list-group">';
    var index= lastorder+1;
    var customer="error";
    $.each( $(".orderth:eq("+lastorder+")").closest("tr").find("td"), function(){
      var tdtext=$(this).text();
          if (tdtext != '')
          {
            var rowIndex = $(this).parent().index('.table-filter tbody tr');
            var tdIndex = $(this).index('.table-filter tbody tr:eq('+rowIndex+') td')+1;
          val = $('.table-filter th:eq(' +tdIndex+ ')').text();
          itemslist = itemslist +'<li class="list-group-item"><small class="badge pull-right bg-black">'+tdtext+'</small><b>'+val+'</b></li>';
          }
        });
    itemslist=itemslist+'</ul>';
    $("#itemslist").html(itemslist);
    var customer = $(".orderth:eq("+lastorder+")").text();
    var cnumber = customer.replace(/[^0-9]/g, '');
    var cname = customer.replace(/\d+/g, '');
    customer="<h4>"+cname+"<small class='label pull-right' style='background-color:white; color:#333'><i class='fa fa-fw fa-phone'></i>  "+cnumber+"</small></h4>";
    $("#ordercustomer").html(customer);

    $('#ordersummary').modal('show');
  }
    else
    {$('#alert').show();}
  });
*/
// Order > show items
///products/index/39
$('#orderitems').click(function(){
    if (lastorder != null)
    {
    var order = $(".orderth:eq("+lastorder+")").attr('order');
    location.href = "./products/index/"+order;}
    else
    {$('#alert').show();}
  });
// order edit
$('#orderedit').click(function(e){
  e.preventDefault();
    if (lastorder != null)
    {
    var order = $(".orderth:eq("+lastorder+")").attr('order');
    var urlorder = '/orders/edit/'+order;
    //$('#EditModal').find('#ordercontent').load(urlorder);
    //$('#EditModal').modal('show');
    //iframe orderframe
    //$('#orderframe').load(urlorder); 
    //$('#EditModal').modal('show');
    location.href = urlorder;
    }
    else
    {$('#alert').show();}
  });

// delete order
/*
$('#removeorder').click(function(){
  if (lastorder != null)
    { 
    var order = $(".orderth:eq("+lastorder+")").attr('order');
    //$("form[name='deleteorder-form']").attr('action', '/orders/remove/'+order); 
  //$("form[name='deleteorder-form']").get(0).setAttribute('action', '/orders/remove/'+order);
    $('#confirmDeleteOrder').on('show.bs.modal', function (e) {
      $(this).find('.modal-body p').html("Are you sure you want to delete order <b>"+order+"</b> ?");
      $title = $(e.relatedTarget).attr('data-title');
      $(this).find('.modal-title').text($title);
  });

 // Form confirm (yes/ok) handler, submits form /
  $('#confirmDeleteOrder').find('.modal-footer #confirmdelete').on('click', function(){
      //$(this).data('form').submit();
       $.get("/orders/remove/"+order);
       setTimeout('location.reload(true)',1000);
       //location.href = location.href;
  });
    }else
    {$('#alert').show();}
  }); 
*/
// checkout order
$('#checkout').click(function(){
  if (lastorder != null)
    { 
    var order = $(".orderselect:eq("+lastorder+")").attr('order');
    var row_index = $(".orderselect:eq("+lastorder+")").parent().index()+1;
    var orderid = $('#fixTable').find('tr:eq('+row_index+')').find('th:eq(0)').html();
    //$("form[name='deleteorder-form']").attr('action', '/orders/remove/'+order); 
  //$("form[name='deleteorder-form']").get(0).setAttribute('action', '/orders/remove/'+order);
    $('#confirmCheckoutOrder').on('show.bs.modal', function (e) {
      $('#confirmcheckout').prop("disabled", false);
      $(this).find('.modal-body p').html("Are you sure you want to Check Out the order <b>"+orderid+"</b> ?");
      $title = $(e.relatedTarget).attr('data-title');
      $(this).find('.modal-title').text($title);
  });

 // Form confirm (yes/ok) handler, submits form /
  $('#confirmCheckoutOrder').find('.modal-footer #confirmcheckout').on('click', function(){
      //$(this).data('form').submit();
       $.get("/orders/checkout/"+order+"/0").complete(function()
            {location.reload(true);});
      //setTimeout('location.reload(true)',100);
       //location.href = location.href;
  });
    }else
    {
      $('#confirmCheckoutOrder').find('.modal-title').html('<i class="icon fa fa-warning"></i>  Warning !');
      $('#confirmcheckout').prop("disabled", true);
    }
  }); 

// cancel order

$('#cancelorder').click(function(){
  if (lastorder != null)
    { 
    var order = $(".orderselect:eq("+lastorder+")").attr('order');
    var row_index = $(".orderselect:eq("+lastorder+")").parent().index()+1;
    var orderid = $('#fixTable').find('tr:eq('+row_index+')').find('th:eq(0)').html();
    
    // check the action (cancel/uncancel)
    if ( $(this).css('color') == 'rgb(255, 255, 255)')
    {
      $('#confirmCancelOrder').on('show.bs.modal', function (e) {
      $('#confirmcancel').prop("disabled", false);
      $('#confirmCancelOrder').find('.modal-footer #confirmcancel').html('<i class="fa fa-times"></i> Cancel Order');
      $(this).find('.modal-body p').html("Are you sure you want to Cancel the order <b>"+orderid+"</b> ?");
      $title = $(e.relatedTarget).attr('data-title');
      $(this).find('.modal-title').text($title);
      });

    // Form confirm (yes/ok) handler, submits form /
      $('#confirmCancelOrder').find('.modal-footer #confirmcancel').on('click', function(){
      //$(this).data('form').submit();
       $.get("/orders/cancel/"+order).complete(function()
            {location.reload(true);});
      });
    }
    //uncancel action
    else
    {
      $('#confirmCancelOrder').on('show.bs.modal', function (e) {
      $('#confirmcancel').prop("disabled", false);
      $(this).find('.modal-body p').html("Are you sure you want to Uncancel the order <b>"+orderid+"</b> ?");
      $(this).find('.modal-title').text('Uncancel Order');
      $('#confirmCancelOrder').find('.modal-footer #confirmcancel').html('<i class="fa fa-undo"></i> Uncancel Order');
      });

    // Form confirm (yes/ok) handler, submits form /
      $('#confirmCancelOrder').find('.modal-footer #confirmcancel').on('click', function(){
      //$(this).data('form').submit();
       $.get("/orders/uncancel/"+order).complete(function() {location.reload(true);});
      });
    }

    }else
    {
      
      $('#confirmCancelOrder').find('.modal-title').html('<i class="icon fa fa-warning"></i>  Warning !');
      $('#confirmcancel').prop("disabled", true);
      //$('#alert').show();}
    }
  }); 

// attach Sub-order
$('#addsuborder').click(function(){
  if (lastorder != null)
    {
      var sordertxt = '<span style="color:black;font-weight:bold;"></span><br>    .  .   ';
    if (($(".orderselect:eq("+lastorder+")").html() != sordertxt) && ($(".orderselect:eq("+(lastorder+1)+")").html() != sordertxt) && ($(".orderselect:eq("+(lastorder+2)+")").html() != sordertxt))
    { 
        var order = $(".orderselect:eq("+lastorder+")").attr('order');
        //$("form[name='deleteorder-form']").attr('action', '/orders/remove/'+order); 
        //$("form[name='deleteorder-form']").get(0).setAttribute('action', '/orders/remove/'+order);
        $('#confirmSubOrder').on('show.bs.modal', function (e) {
        $('#confirmsorder').prop("disabled", true);
        $(this).find('.modal-body p').html("Are you sure you want to Attach Sub-order to the order <b>"+order+"</b> ?");
        $title = $(e.relatedTarget).attr('data-title');
        $(this).find('.modal-title').text($title);
        $('#confirmSubOrder').find('.modal-footer #confirmsorder').prop("disabled", false); 
        });

        // Form confirm (yes/ok) handler, submits form /
        $('#confirmSubOrder').find('.modal-footer #confirmsorder').on('click', function(){
          //submit the order id to the order controller
          //$.get("/orders/addsuborder/"+order);
          //e.preventDefault(); // Prevent Default Submission
    
          /*$.ajax({
            type: 'get',
            url: "/orders/addsuborder/"+order,
            complete: function(html){
              var obj = jQuery.parseJSON(html);
              alert(html);
                    }
          });*/
        $.ajax({
            url: "/orders/addsuborder/",
            type: 'POST',

            data: {"id": order },
            success: function(status){ 
                    // {"msg":"558"}    
                    var soid = "./orders/edit/"+status.replace (/(^")|("$)/g, '');
                    //alert(soid);
                    location.href = soid; 
            }, 
            error: function(xhr,textStatus,error){ 
                alert(error);}
        });

        });
    }
    else
        {
          $('#confirmSubOrder').on('show.bs.modal', function (e) {
            $('#confirmSubOrder').find('.modal-body p').html("<b>A Sub-order is selected! </b></br>You can't attach a sub-order  to a sub-order, please select an order.");
            $('#confirmSubOrder').find('.modal-footer #confirmsorder').prop("disabled", true); 
          });
        }
    }else
    {
      $('#confirmSubOrder').find('.modal-title').html('<i class="icon fa fa-warning"></i>  Warning !');
      $('#confirmsorder').prop("disabled", true);
    }
  });


// add product to the order
$('#addproduct').click(function(){
    if (lastorder != null)
    {
      var orderindex = lastorder + 1;
      var order = $(".orderselect:eq("+lastorder+")").attr("order");
      $('#Oid').val(order);
      var val =$('#Oid').val();
        $('#addprodtitle').html('<center>Add a product to the order <b>'+val+'</b></center>');
        
        $('#addprodModal').modal('toggle');
    }
    else
    {$('#alert').show();}
  });
<?php 
if ($date >= $today)
{
  ?>
// add quatity to empty product order
$('.orderprod[id^="emptyprod_"]').click(function(){
    if ($(this).css('background-color') == 'rgb(249, 249, 249)')
      {
        var order = $(this).attr("order");
            var rowIndex = $(this).parent().index('.table-filter tbody tr');
                  var tdIndex = $(this).index('.table-filter tbody tr:eq('+rowIndex+') td')+3;
            var   product = $('.table-filter th:eq(' +tdIndex+ ')').text();
            $('#Oid').val(order);
              $('#addprodtitle').html('<center>Add <b>'+product+'</b> to the order</center>');
              $('#selectitem option').filter(function() { return $.trim( $(this).text() ) == product; }).attr('selected',true);
              $('#addprodModal').modal('show');
      }

  });
<?php } ?>
///************************ ITEMS SCRIPT*-*-*-*-*-*-*-*-*-
/* var lastcl;
$('.th').click(function(){
  var col = $(this).parent().children().index($(this))+1;
  if ((lastcl!=col) && (lastcl != null))
  {
    $('.table-filter tr > td:nth-child('+lastcl+'), .table-filter tr > .th:nth-child('+lastcl+')')
        .css('box-shadow', '');

      }
    $('.table-filter tr > td:nth-child('+col+'), .table-filter tr > .th:nth-child('+col+')')
        .css('box-shadow', 'inset 0 0 30px 100px #aaa');

        lastcl = col;
});*/


/////////////////////////////////*********************PRODUCT SCRIPT**********************
/*  pach order */
   $('#packorder').click(function(){
	
    if (lastorder != null)
    {
		 var order = $(".orderselect:eq("+lastorder+")").attr('order');
   
  	//alert('order '+order);

  
  document.getElementById('ordertopackid').value=order;
  //document.getElementById("submit2").click();
  $('#packorderModal').modal('show');
  $('#myModalLabelorderpack').html('<h3 style="color:#0B8EB6; ;"><center>Order <b>'+order+'</b></h3></br><h4></h4></center>');
  showProducts(order);
    }
    else {
          $('#alert-modifyorder').modal('show');  
    }
 
	
	});
	
function shadeColor1(color, percent) {  // deprecated. See below.
        var f=color.split(","),t=percent<0?0:255,p=percent<0?percent*-1:percent,R=parseInt(f[0].slice(4)),G=parseInt(f[1]),B=parseInt(f[2]);
    return "rgb("+(Math.round((t-R)*p)+R)+","+(Math.round((t-G)*p)+G)+","+(Math.round((t-B)*p)+B)+")";

}

 var lastprodcl;
$('.orderprod:not([id])').click(function(){
  var colprod = $('.orderprod').index(this);
  if ((lastprodcl!=colprod) && (lastprodcl != null))
  {
    $('.orderprod:eq('+lastprodcl+')')
        .css('box-shadow', '');

      }
      // Highlight column 
    var bgcolor=$(this).css('background-color');
 
    $('#packproduct').prop("disabled", false);
    // change pack button to unpack if the product already packed
    switch (bgcolor){
      case 'rgb(255, 204, 51)':
        $('#packproduct').css('background-color','#a2e4c6');
        $('#packproduct').css('color','#00a65a');
        $('#packproduct').html('<i class="fa fa-fw fa-undo"></i> Unpack Product');
        break;
      case 'rgb(255, 194, 0)':
        $('#packproduct').css('background-color','#a2e4c6');
        $('#packproduct').css('color','#00a65a');
        $('#packproduct').html('<i class="fa fa-fw fa-undo"></i> Unpack Product');
        break;
      case 'rgb(249, 249, 249)':
        $('#packproduct').css('background-color','#00a65a');
        $('#packproduct').css('color','#fff');
        $('#packproduct').html('<i class="fa fa-fw fa-inbox"></i> Pack Product');
        break;
      case 'rgb(51, 204, 51)':
        $('#packproduct').prop("disabled", true);
        break;
      case 'rgb(255, 102, 51)':
        $('#packproduct').prop("disabled", true);
        break;
    }
    // case packed order / not checked out
      var row_index = $(this).parent().index()+1;

      if ((bgcolor === 'rgb(51, 204, 51)') && ($('#fixTable').find('tr:eq('+row_index+')').find('th:eq(1)').html() !== 'P/U'))
      {
        $('#packproduct').prop("disabled", false);
        $('#packproduct').css('background-color','#a2e4c6');
        $('#packproduct').css('color','#00a65a');
        $('#packproduct').html('<i class="fa fa-fw fa-undo"></i> Unpack Product');
      }
  bgcolor = shadeColor1(bgcolor,-0.2);
    $(this).css('box-shadow', 'inset 0 0 30px 100px '+bgcolor);

        lastprodcl = colprod;
});

  $('#packproduct').click(function(){
    if (lastprodcl != null)
    {
    var order = $('.orderprod:eq('+lastprodcl+')').attr("order");
    var prod = $('.orderprod:eq('+lastprodcl+')').attr("product");
    // check the action (pack/unpack)
    if ( $(this).css('color') == 'rgb(255, 255, 255)')
    {
      $.get("/products/pack?id="+prod+"&order="+order).complete(function()
            {location.reload(true);});
      //setTimeout('location.reload(true)',1000);
    }
    else
    {
      $.get("/products/unpack?id="+prod+"&order="+order).complete(function()
            {location.reload(true);});
     // setTimeout('location.reload(true)',1000);
    }
    }
    else {
          $('#alert-packproduct').modal('show');  
    }
  });
/*
  $('#editproduct').click(function(){
    var prod = $('.orderprod:eq('+lastprodcl+')').attr("product");
    location.href = "./products/edit/"+prod;
  });
*/
/*
  $('#removeproduct').click(function(){
    var prod = $('.orderprod:eq('+lastprodcl+')').attr("product");
    var order = $('.orderprod:eq('+lastprodcl+')').attr("order");

    var rowIndex = $('.orderprod:eq('+lastprodcl+')').parent().index('.table-filter tbody tr');
    var tdIndex = $('.orderprod:eq('+lastprodcl+')').index('.table-filter tbody tr:eq('+rowIndex+') td')+1;

    var name =$('.table-filter th:eq('+tdIndex+')').text();
    $('#confirmDelete').on('show.bs.modal', function (e) {
      $(this).find('.modal-body p').html("Are you sure you want to delete product <b>"+name+"</b> from order <b>"+order+"</b> ?");
      $title = $(e.relatedTarget).attr('data-title');
      $(this).find('.modal-title').text($title);

  });

 // Form confirm (yes/ok) handler, submits form /
  $('#confirmDelete').find('.modal-footer #confirm').on('click', function(){
      $.get("/products/delete/"+prod);
      setTimeout('location.reload(true)',1000);
  });

  }); 
*/
// items list script
function timing(elm)
 { 
var idelm=elm.id;
var val =document.getElementById(idelm).value ;
document.getElementById('temps').value=val; 
  $('#myModal2').modal('hide');

 }
 
   function visibilite(divId)
    {  
    //divPrecedent.style.display='none';
  divPrecedent=document.getElementById(divId);
       if(divPrecedent.style.display==='none')
       {divPrecedent.style.display='table-row';  }
       else
         {divPrecedent.style.display='none';     }
    }
 function select(elem)
 {
 var idelm=elem.id;
 
 nomelm= idelm.replace("item", "");
 
 sel=document.getElementById('selectitem');

sel.options.selectedIndex = nomelm;

 //document.getElementById("selectitem").value=nomelm;
$('#myModal2').modal('hide'); 
    
 }
// Polling for the sake of my intern tests
var interval = setInterval(function() {
    if(document.readyState === 'complete') {
        clearInterval(interval);
        done();
    }    
}, 100);
 /*$(document).ready(function() {
$('#linkchangedate').click(function(){
  $( "#datepicker" ).datepicker({
  onSelect: function (date) {
                     
                        $('#inputdate').val(date)
                        .trigger('change');
                    },
  dateFormat: "yy-mm-dd"
});
}) 
} */ 
function send()
{
document.getElementById("DateForm").submit(); 
  
}

//$("#calc").click(function () {
        //first get number of rows in the table (because we have one input per row)
        var count = $("#fixTable tr").length;
        var tablencols = document.getElementById('fixTable').rows[0].cells.length;
        //loop through the rows and get the sum of every input value except the last
        for (j = 0; j < tablencols; j++) { 
        var sum = 0;
        for (var i = 0; i < (count - 1); i++) {
            //get the value and add it to sum
            //check if product isn't packed or order checked out
            if ($("#fixTable tr:eq("+i+") td:eq("+j+")").css('background-color') == 'rgb(249, 249, 249)'){
            //check if its a number
            if(!isNaN(parseInt($("#fixTable tr:eq("+i+") td:eq("+j+")").text(), 10))){
                sum += parseInt($("#fixTable  tr:eq("+i+") td:eq("+j+")").text(), 10);
            }
          }
        }
        $("#fixTable tr:last td:eq("+j+")").text(sum);
        }
        //assign the last input's value (in last row) to the sum
        
   // });
	  </script>
<input type="hidden" id="previousspicy" />
	<input type="hidden" id="previouscut" />
	<input type="hidden" id="lastselected" />
 </body>

<script>
      $('#intsru').keyboard({ layout: 'qwerty',autoAccept:1 });
      $('#intsru2').keyboard({ layout: 'qwerty',autoAccept:1 });
      $('#pquantity').keyboard({ layout: 'num',autoAccept:1 });
	
	  	  </script>
  <style>
  .ui-keyboard-button{padding:0px 0px 0px 0px!important;width:80px!important;height:80px!important;
    margin-left: 5px;
    margin-right: 5px;
    margin-bottom: 5px;
    margin-top: 5px;
}
#tab input{background-color:#CCFF66!important;margin-bottom: 8px;margin-top: 8px;height: 44.886359999999996px!important;}
#tab{  border-spacing: 25px!important;}

	  .ui-menu-item-wrapper{max-width:240px!important;}
	  .ui-menu-item-wrapper{width:240px!important;}
.ui-menu-item{max-width:190px;}
	   .iCheck-helper{background:#ddd!important;opacity:0!important;}
  .ui-corner-all {padding:10px!important;}

ui-keyboard-button.ui-keyboard-actionkey.ui-keyboard-enter.ui-keyboard-widekey.ui-state-default.ui-corner-all.ui-state-active{display:none!important;}
.ui-keyboard.ui-widget-content.ui-widget.ui-corner-all.ui-keyboard-has-focus{
	width: auto!important;
}
  </style>
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
  <script>
  function btnspicy(){
	  //alert('here0');
	last= document.getElementById("lastselected").value;

	  document.getElementById('tdspicy').style.border = '1px solid black';
	document.getElementById('tdcut').style.border = '1px solid #E6E6E6';
	
		 if(document.getElementById('previouscut').value==arraycut[4]){document.getElementById("intsru").value=arrayspicy[0];}
else { 
	if ( (last==2) && ( (document.getElementById("intsru").value) !="") )
	{document.getElementById("intsru").value=arrayspicy[0]+' - '+(document.getElementById('previouscut').value);}
	else {//alert('here1');
		document.getElementById("intsru").value=arrayspicy[0]+' - '+(document.getElementById('previouscut').value);}
		
  }
			// divkeyboard=document.getElementById('containerkeyboard'); 
			 document.getElementById("previousspicy").value=arrayspicy[0];
	if (last==""){document.getElementById("intsru").value=arrayspicy[0];}
   document.getElementById("lastselected").value=1;
   //$("#intsru").focus();
 }
      /* $("#intsru").click(function () {
	$("#intsru").focus();
        });
 */
 function btncut(){
last= document.getElementById("lastselected").value;
	  document.getElementById('tdspicy').style.border = '1px solid #E6E6E6';
	  document.getElementById('tdcut').style.border = '1px solid black';

		 if(document.getElementById('previousspicy').value==arrayspicy[3]){document.getElementById("intsru").value=arraycut[0];}
else { 
	 if ( (last==1) && ( (document.getElementById("intsru").value) !="") ){document.getElementById("intsru").value=(document.getElementById('previousspicy').value)+' - '+arraycut[0];
	
		}
		
	 else{  document.getElementById("intsru").value=(document.getElementById('previousspicy').value)+' - '+arraycut[0];
	 	
	 }
 }
 if (last==""){document.getElementById("intsru").value=arraycut[0];}
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
if(new1==arrayspicy[3]){document.getElementById("intsru").value=new2;}
else{
if((new2=="") || (  new2==arraycut[4])){document.getElementById("intsru").value=new1;}

else{	document.getElementById("intsru").value=new1+' - '+new2;
//alert('here1');
}
		}
		}
	if(last==2)
	{
if(new2==arraycut[4]){document.getElementById("intsru").value=new1;}
else{
if((new1=="") || (  new1==arrayspicy[3])){
		
		document.getElementById("intsru").value=new2;}
else{		document.getElementById("intsru").value=new1+' - '+new2;
//alert('here1');
}
		}
		}
		
		
	//	alert('test'+document.getElementById('write').value+'test');
	  if (document.getElementById('intsru').value=="    -    "){
		  
		  document.getElementById('intsru').value="";
		
	  }                                     
	  if (document.getElementById('intsru').value=="Pepper -    ")
	  {document.getElementById('intsru').value="Pepper ";}
 }
 
  </script>
   			<script language="JavaScript">
		var countprint=0; 
	function checkAll(bx) {
	//alert('here');
		var checked=0;
		var unchecked=0;
  var cbs = document.getElementsByTagName('input');
  for(var i=0; i < cbs.length; i++) {
    if(cbs[i].type == 'checkbox') {
	if(cbs[i].checked== true){checked=checked+1;}
    //  cbs[i].checked = bx.checked;
    }
  }
  //alert('checked='+checked);
  //check
  if (checked>0)
  { 
	    for(var i=0; i < cbs.length; i++) {
    if(cbs[i].type == 'checkbox') {
	if(cbs[i].checked== true){checked=checked+1;}
      cbs[i].checked = bx.checked;
    }
  }
  }
  //uncheck
  else{
	 
	    for(var i=0; i < cbs.length; i++) {
    if(cbs[i].type == 'checkbox') {
	if(cbs[i].checked== true){checked=checked+1;}
      cbs[i].checked = false;
    }
  }
  } 
}
 	
	
 </script>
 <!-- @Ran -->
 <?php
 App::import('Controller', 'Customers');
 $customers = new CustomersController;
    if (isset($date))
      {

         $dateorders = new OrdersController;
        $cust=$dateorders->ListeOrdersCustomerspecDate($date);
        //$custphone2 = array_unique($customers->PhoneCustomers());
        $custphone2 = array_unique(array_values($cust));
        //$custphone = $customers->PhoneCustomers();
        $custphone = array_values($cust);
        $custphone = array_values($custphone);
        $custphone2 = array_values($custphone2);
        //$custname = $customers->ListeCustomers(); 
        $custname = array_keys($cust);
        $custname = array_values($custname);
        /*********************************************************************************************/
      }
    // if there is no filter for date
    else 
      {
        $cust=$customers->ListeCustomers();
        $custphone2 = array_unique($customers->PhoneCustomers());
        $custphone = $customers->PhoneCustomers();
        //$custphoneDISTINCT = $customers->PhoneCustomersDISTINCT();
        $custphone = array_values($custphone);
        $custphone2 = array_values($custphone2);
        //$custphoneDISTINCT = array_values($custphoneDISTINCT);
  
        $custname = $customers->ListeCustomers();
        $custname = array_values($custname);
      }

      //  $custname = $customers->ListeCustomers();     
      //  $custphone = $customers->PhoneCustomers();
		
		//$custname = array_values($custname);	
      //  $custphone = array_values($custphone);
 $customersdata = array();
    $customersdata2 = array();
    $customersdata3 = array();
    for ($i=0; $i < sizeof($custphone) ; $i++) { 
      $customersdata[$i]=array("value"=>$custphone[$i], "label"=>$custphone[$i], "desc"=>$custname[$i]);
      $customersdata2[$i]=$custphone[$i].'  '.$custname[$i];
      $customersdata3[$i]=$custname[$i].'  '.$custphone[$i];
    }
    $customersdata=array_values($customersdata);
    $customersdata2=array_values($customersdata2);
    $customersdata3=array_values($customersdata3);?>
 <script>
 
 	var custnums=<?php echo json_encode($customersdata2); ?>;
	var phone="";
 $('#inputcustomernum')
	.keyboard({ layout: 'num',autoAccept:1 })
	.autocomplete({
		
		source:custnums
/*		function( request, response ) {
				  var term = $.trim(request.term)
        var matcher = new RegExp( $.ui.autocomplete.escapeRegex( request.term ), "i" );
        response( $.grep( custnums, function( value ) {
          value = value.label || value.value || value;
          return matcher.test( value ) || matcher.test( normalize( value ) );
        }) );
      }*/
		 	,
    select: function( event, ui ) {

		ui.item.value=ui.item.value.substr(0,13);
	
		 $('#inputcustomernum').value=ui.item.value;
		 $("input[name='data[form][customernum]']").value=ui.item.value;
	
	
		var x = document.getElementsByClassName("ui-keyboard-preview");
			phoneee=x[0].value;
			phone=phoneee.substr(0,13);
		x[0].value=ui.item.value;
		// $("#CustomerForm").submit(); 
        return false;
    },
	focusin: function() {
		//alert('focusin');
	}
	,
	change:function(){
	//	alert('phone'+phone);
		$('#inputcustomernum').value=phone;
		$("#CustomerForm").submit(); 
		
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
	
	var custnames=<?php echo json_encode($customersdata3); ?>;
	var name="";
 $('#inputcustomername')
	.keyboard({ layout: 'qwerty',autoAccept:1 })	
	.autocomplete({
		
		source:custnames
/*		function( request, response ) {
				  var term = $.trim(request.term)
        var matcher = new RegExp( $.ui.autocomplete.escapeRegex( request.term ), "i" );
        response( $.grep( custnums, function( value ) {
          value = value.label || value.value || value;
          return matcher.test( value ) || matcher.test( normalize( value ) );
        }) );
      }*/
		 	,
    select: function( event, ui ) {

		ui.item.value=ui.item.value.substr(0,13);
	
		 $('#inputcustomername').value=ui.item.value;
		
	
		var x = document.getElementsByClassName("ui-keyboard-preview");
			nameee=x[0].value;
	
		 pos=x[0].value.indexOf('  ');
		x[0].value=x[0].value.substr(pos+2);
		ui.item.value=ui.item.value.substr(0,pos);
		name=nameee.substr(0,pos);
		//alert(name);
		x[0].value=ui.item.value;
		// $("#CustomerForm").submit(); 
        return false;
    },
	focusin: function() {
		//alert('focusin');
	}
	,
	change:function(){
		//alert('name'+name);
		$('#inputcustomername').value=name;
		$("#CustomerForm").submit(); 
		
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
	function clearing(){
		document.getElementById('inputcustomernum').style.color = "white";
		document.getElementById('inputcustomernum').value='(---)---.----';
		document.getElementById('inputcustomername').value='';
		//location.reload();
		$("#CustomerForm").submit(); 
	}
 </script>
 