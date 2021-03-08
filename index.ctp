<link href="http://orders.enterprise-esolutions.com/keyboard/css/jquery-ui1.min.css" rel="stylesheet">
	<!-- still using jQuery v2.2.4 because Bootstrap doesn't support v3+ -->
	<script src="http://orders.enterprise-esolutions.com/keyboard/js/jquery-latest.min.js"></script>
	<script src="http://orders.enterprise-esolutions.com/keyboard/js/jquery-ui.min.js"></script> 
<!-- 	 <script src="http://orders.enterprise-esolutions.com/keyboard/js/jquery-migrate-3.0.0.min.js"></script> -->

	<!-- keyboard widget css & script (required) -->
	<link href="http://orders.enterprise-esolutions.com/keyboard/css/keyboard.css" rel="stylesheet">
	<script src="http://orders.enterprise-esolutions.com/keyboard/js/jquery.keyboard.js"></script>

	<!-- keyboard extensions (optional) Autocomplete -->
	<script src="http://orders.enterprise-esolutions.com/keyboard/js/jquery.mousewheel.js"></script>
	<script src="http://orders.enterprise-esolutions.com/keyboard/js/jquery.keyboard.extension-typing.js"></script>
	<script src="http://orders.enterprise-esolutions.com/keyboard/js/jquery.keyboard.extension-autocomplete.js"></script>
	<script src="http://orders.enterprise-esolutions.com/keyboard/js/jquery.keyboard.extension-caret.js"></script>

	<!-- demo only 
	<link rel="stylesheet" href="http://orders.enterprise-esolutions.com/keyboard/css/bootstrap.min.css">
	<link rel="stylesheet" href="http://orders.enterprise-esolutions.com/keyboard/css/font-awesome.min.css">-->
 <!--	<link href="http://orders.enterprise-esolutions.com/keyboard/css/demo.css" rel="stylesheet">-->
	<link href="http://orders.enterprise-esolutions.com/keyboard/css/tipsy.css" rel="stylesheet">
	<link href="http://orders.enterprise-esolutions.com/keyboard/css/prettify.css" rel="stylesheet">
	<script src="http://orders.enterprise-esolutions.com/keyboard/js/bootstrap.min.js"></script>
	<!--<script src="http://orders.enterprise-esolutions.com/keyboard/js/demo.js"></script>-->
	<script src="http://orders.enterprise-esolutions.com/keyboard/js/jquery.tipsy.min.js"></script>
	<script src="http://orders.enterprise-esolutions.com/keyboard/js/prettify.js"></script> <!-- syntax highlighting -->

	<script>
		var countprint=0; 
	function checkAll(bx) {
		var checked=0;
		var unchecked=0;
  var cbs = document.getElementsByTagName('input');
  for(var i=0; i < cbs.length; i++) {
    if(cbs[i].type == 'checkbox') {
	if(cbs[i].checked== true){checked=checked+1;}
    //  cbs[i].checked = bx.checked;
    }
  }
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
<script type="text/javascript" >var cn=0;

 var arraynum=new Array();
 var arraynomcust=new Array();
 var arraynumnomcust=new Array();
 </script>

 <?php
 App::import('Controller', 'Orders');
          $suborders = new OrdersController;
  App::import('Controller', 'Customers');
 $customers = new CustomersController;
  // data[Order][date]
    /*if (isset($_POST['Order']['date']))
    {
      echo "<h1>".$_POST['Order']['date']."</h1>";
    }*/
    if (isset($filterdate))
      {echo "<h3>".$filterdate."</h3>";}
    else {echo "<h3>not found date</h3>";}
   	$cust=$customers->ListeCustomers();
    $custphone2 = array_unique($customers->PhoneCustomers());
    $custphone = $customers->PhoneCustomers();
    //$custphoneDISTINCT = $customers->PhoneCustomersDISTINCT();
    $custphone = array_values($custphone);
    $custphone2 = array_values($custphone2);
    //$custphoneDISTINCT = array_values($custphoneDISTINCT);
	
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
	 arraynomcust[cn]=""+<?php echo json_encode($custname[$i]); ?>;
	 arraynumnomcust[cn]=""+<?php echo json_encode($custphone[$i]); ?>+"/"+<?php echo json_encode($custphone[$i]); ?>;
	    //alert('cn='+cn+' num='+rraynum[cn]);
		//alert(arraynum[cn]);
	
</script>
	  <?php
    }
	//$custphone = array_unique($custphone);
    $customersdata=array_values($customersdata);
 /*  App::import('Controller', 'Customers');
 $customers = new CustomersController;
  $options2=$customers->ListeCustomers();*/
 ?>
<body onload="loading();loading2();">

<!-- //echo $this->Form->input('hidden' ,array('type'=>'text','label'=>'','class'=>'datepicker','id'=>'OrderDate','default'=> date('Y-m-d'), 'required'=>'true' ));;?>-->

<div class="users form index" style="margin-top:-30px">
<h1 class="no-print" style="color:#367FA9">All Orders </h1><a  href="http://orders.enterprise-esolutions.com/orders/add" ><img  id="add" style="float:right;margin-left:50px;" src="http://orders.enterprise-esolutions.com/app/webroot/img/add.png"></img></a>

<?php
     echo $this->Filter->filterForm('Order', array('legend' => 'Recherche'));  
 $options= array('Not Ready','Ready','Checked out','Packed','Cancelled');

 App::import('Controller', 'Customers');
 $customers = new CustomersController;
   	$cust=$customers->ListeCustomers();
    $custphone = $customers->PhoneCustomers();
    $custphone = array_values($custphone);
    $custname = $customers->ListeCustomers();
    $custname = array_values($custname);
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
    $customersdata3=array_values($customersdata3);
	/** here */
?>

</div>
<script>
	$('.dropdown-toggle').dropdown();
function loading(){
$('#OrderFilter table tr:last').append('<td><input type="submit" value="CLR" onclick="clearing();" style="background:#3c8dbc!important;color:white; margin-top: 30px;    padding-top: 8px;padding-bottom: 8px;font-size: 16px!important;"/></td>');

}
function loading2(){
	var offset = 4;
//var today=new Date( new Date().getTime() - offset * 3600 * 1000).toUTCString().replace( / GMT$/, "" );
var today=new Date( new Date().getTime() - offset * 3600 * 1000);
	//var today = new Date();
	//alert('today='+today);
	/* var hh=today.getHours();
	alert('hour='+hh);
		var mm=today.getMinutes();
	alert('minutes='+mm); */
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
var today =yyyy+'-'+mm+'-'+dd;

if ( (document.getElementById('OrderDate').value == "") && (document.getElementById('OrderCustomerphone').value == "") && (document.getElementById('OrderCustomername').value == "") && (document.getElementById('OrderTime').value == "") && (document.getElementById('OrderId').value == "")   )
{
document.getElementById('OrderDate').value=today;
$('#Find').click();
}
}
 $( function() {
	 $( "#CLR" ).click(function() {
	 document.getElementById('OrderCustomername').value="";
	document.getElementById('OrderCustomerphone').value="";
	document.getElementById('OrderTime').value="";
	document.getElementById('OrderDate').value="";
	document.getElementById('OrderId').value="";
 	  });
	   
$( "#OrderDate" ).datepicker(
  {	 
	 
  dateFormat: "yy-mm-dd" ,
  firstDay: 1 //,regional:["fr"]
} );   
	  
 $( "input[value='data[Order][date]']" ).datepicker({
  dateFormat: "yy-mm-dd"
}); 
   } ); 
   
$( function() {
 $('.printform').submit(function(e){
	 
	
	if  (countprint>0) 
	{
	 if(confirm("There is an order already printed: Print again?"))
    document.forms[0].submit();
  else
 e.preventDefault(); 
countprint=0;
	 
	}
	 });  	
 
 
   } );
   function clearing(){
	   var today = new Date();
var dd = today.getDate();
var mm = today.getMonth()+1; //January is 0!

var yyyy = today.getFullYear();
if(dd<10){
    dd='0'+dd;
} 
if(mm<10){
    mm='0'+mm;
} 
var today =yyyy+'-'+mm+'-'+dd;

	   document.getElementById('OrderCustomername').value="";
	document.getElementById('OrderCustomerphone').value="";
	document.getElementById('OrderTime').value="";
	document.getElementById('OrderDate').value=today;
	document.getElementById('OrderId').value="";
   }
</script>	
<div style="float:left;margin-left: 100px;margin-top: 170px;">
<?php $parameter   = "<script language='JavaScript'> return validate(this);</script>";?>
<?php echo $this->Form->create('Order',array('onsubmit'=>'show_alert();','class'=>'printform','controller'=>'orders','action'=>'printorders')); ?>
<?php echo $this->Form->input('nbprint',array('type'=>'hidden' ,'id'=>'nbprint') ) ;?> 
 <?php echo $this->Form->input('idtoprint',array('type'=>'hidden', 'id'=>'idtoprint') ) ;?>
<?php echo $this->Form->submit('Sauvgarder',array('name'=>'Save','onclick'=>'getid();','id'=>'linkk','type'=>'image','src' => 'http://orders.enterprise-esolutions.com/app/webroot/img/printer.png')); ?>
		<?php echo $this->Form->end(); ?>
 <!-- <div>Select All :</br> <input type="checkbox" onclick="checkAll(this)"></div>-->

</div>
 
<div class="panel panel-default">
    <div class="panel-body">
	
     <div id="checkboxes">
	 <table id="myTable" class="table table-fixedheader table-bordered table-striped">
            <thead style="color:white!important;">
                <tr>
			<th style="width:10%"><h4 style="margin-top:0px;"> <center><?php echo $this->Paginator->sort('id', 'ID');?>  </center></h4></th>
 			 <th style="width:10%"><h4 style="margin-top:0px;"> <center><?php echo $this->Paginator->sort('date', 'Date')  ; ?></center></h4></th>	
			 <th style="width:10%"><h4 style="margin-top:0px;"> <center><?php echo $this->Paginator->sort('time', 'Time') ; ?></center></h4></th>
			 <th style="width:15%"><h4 style="margin-top:0px;"> <center><?php echo $this->Paginator->sort('customer', 'Customer') ; ?></center></h4></th>
			 <th style="width:15%"><h4 style="margin-top:0px;"> <center><?php echo $this->Paginator->sort('customer phone', 'Customer phone') ; ?></center></h4></th>
			 <th style="width:12%"><h4 style="margin-top:0px;"> <center><?php echo $this->Paginator->sort('status', 'Status') ; ?></center></h4></th>
			 <th style="width:12%;padding-left: 0px;padding-right: 1px;"><h4 style="font-size: 15px;margin-top:0px;padding-left: 0px;margin-left: 0px;"> <center>Edit / Add Products</center></h4></th>
  
   			<?php if ($this->Session->read('Auth.User.role')=='Admin')
        {echo '<th style="width:8%"><h4 style="margin-top:0px;"> <center>Delete</center></h4></th>';} ?>
		<th style="width:8%"><h4 style="margin-top:0px;"> <center>Print<input name="checkAll" type="checkbox" onclick="checkAll(this)"></center></h4></th>

		</tr>
            </thead>
            <tbody style="height:250px">
                <?php $count=0; ?>
                <?php if (isset($orders)) { ?>
		<?php foreach($orders as $order): ?>		
<?php	 $custr= $order['Order']['customer'];
		$flag=  $customers->CustomerFlag($custr);
		
			if ($flag){$style="background-color:#ff8080;color:black!important;font-weight:bold;";}else{$style="";}		
				?>		
				
		<?php $count ++;?>
		<?php if($count % 2): echo '<tr>'; else: echo '<tr class="zebra">' ?>   
		<?php endif; ?>
		<td  style="width:10%;text-align: center;"><h4 style="margin-top:5px;color:#428bca!important;">
      <?php 
        if ($order['Order']['status'] != 2)
        //  {echo $this->Html->link(  sprintf("%06d", $order['Order']['id']  ),   array('action'=>'edit', $order['Order']['id']),array('escape' => false) );}
          {echo $this->Html->link(   $order['Order']['id'] ,   array('action'=>'edit', $order['Order']['id']),array('escape' => false) );}
        else
        {
         // echo sprintf("%06d", $order['Order']['id']  );
          echo  $order['Order']['id'] ;
        }
	
   $print=$suborders->Orderprinted($order['Order']['id']);
   if ($print){$style2="background-color:#70d1bd;color:black!important;font-weight:bold;";}else{$style2="";}		
			   ?>
    </h4></td>
		<td style="width:10%;text-align: center;"> <h4 style="margin-top:5px;"><?php echo $order['Order']['date'] ;?></h4> </td>  
		<td style="width:10%;text-align: center;"><h4 style="margin-top:5px;"> 
      <?php 
        if ($order['Order']['status'] == 2)
           {
                  $otime = $order['Order']['cootime'];
				 $otime  = date("g:i a", strtotime($otime));
				 
                  echo  strtoupper ($otime);
               //   echo substr($otime,0,5);
                  }else{
					 $ttime  = date("g:i a", strtotime($order['Order']['time']));  
                  echo  strtoupper ($ttime);
               //   echo substr($ttime,0,5);
				  }
      ?>
      
    </h4> </td>  
		<td style="width:15%;text-align: center;<?php echo $style; ?>"> <h4 style="margin-top:5px;"><?php echo $order['Order']['customername'] ; 
		//$this->Html->link( $order['Order']['customername']  ,   array('controller'=>'customers','action'=>'edit', $order['Order']['customer']),array('escape' => false) );
		?></h4> </td>  
		<td style="width:15%;text-align: center;"> <h4 style="margin-top:5px;"><?php echo $order['Order']['customerphone'];?><!--hp echo $this->Html->link( ($order['Order']['customerphone'] ) ,   array('controller'=>'customers','action'=>'edit', $order['Order']['customer']),array('escape' => false) );?>--></h4> </td>  
		<td style="width:12%;text-align: center;"> <h4 style="margin-top:5px;"><?php echo $options[$order['Order']['status']] ;?> </h4></td>  
		<td style="width:12%;text-align: center;"><h4 style="margin-top:5px;"> <?php 
date_default_timezone_set('Australia/Melbourne');
$date = date('m-d-Y h:i:s a', time());   
echo('date='.$date);
   if ($order['Order']['status'] != 2)
    {echo $this->Form->postLink(
            $this->Html->image('modif.png', array('alt' => __('Edit'),'style'=>'')), //le image
              array('controller'=>'orders','action' => 'edit', $order['Order']['id']), //le url
              array('escape' => false)   
            ); }	
    ?> 	</h4> 
	 </td>  
 
   				<?php if ($this->Session->read('Auth.User.role')=='Admin')
        {echo '<td style="width:8%" ><h4 style="margin-top:5px;"> <center>';
 		 	 
		echo $this->Form->postLink(
  $this->Html->image('supp.png', array('alt' => __('Delete'))), //le image
  array('action' => 'delete', $order['Order']['id']), //le url
  array('escape' => false),  
  __('Are you sure to delete the order : %s?', $order['Order']['id']) //le confirm
);  echo '</center></h4></td>'; }?>
<td id="tdchkeckbox" style="width:8%;text-align: center;<?php echo $style2; ?>"><center><h4><center>

 <?php echo $this->Form->input('prt',array('type'=>'checkbox','label'=>' ','style'=>'opacity:2!important;float:center;margin-left: 30px!important;','id'=>''.$order['Order']['id'],'name'=>''.$order['Order']['id']  ))?> </center></h4> </center></td>
		</tr>
    <?php
          
          if ($suborders->SubOrders($order['Order']['id']))
          {
            $sorders = $suborders->SubOrders($order['Order']['id']);
            sort($sorders);
            $counts =0;
            foreach($sorders as  $idor)
            {
              $counts ++;
              if($counts % 2): echo '<tr>'; else: echo '<tr class="zebra">';  
              endif;
              $sotime = $suborders->TimeOrder($idor);
              $sodate = $suborders->DateOrder($idor);
              $numC=$suborders->customerorder($idor,$sodate);
              $sostatus = $suborders->statusOrder($idor);
              if ($sostatus == 2)
                {$sotime = $suborders->checkedordertime($idor);}
              echo '<td  style="width:10%;text-align: center;"><h4 style="margin-top:5px;color:#428bca!important;">';
              $idstring = $order['Order']['id'].'-'.$counts ;
                if ($sostatus != 2)
                {echo $this->Html->link(  $idstring,   array('action'=>'edit', $idor),array('escape' => false) );}
                else
                {echo $idstring;}
              echo "</h4></td>";
              echo '<td style="width:10%;text-align: center;"> <h4 style="margin-top:5px;">';
              echo $sodate;
              echo "</h4></td>";
              echo '<td style="width:10%;text-align: center;"><h4 style="margin-top:5px;">'; 
            //  echo substr($sotime,0,5) ;
			   $sotime  = date("g:i a", strtotime($sotime));
				 
                  echo  strtoupper ($sotime);
               //
              echo '</h4></td>';
              echo '<td style="width:15%;text-align: center;"> <h4 style="margin-top:5px;">';
              echo $this->Html->link( $customers->CustomerById($numC ) ,   array('controller'=>'customers','action'=>'edit', $numC),array('escape' => false) );
              echo '</h4></td>';
              echo '<td style="width:15%;text-align: center;"> <h4 style="margin-top:5px;">';
              echo $this->Html->link( $customers->CustomerTelById($numC ) ,   array('controller'=>'customers','action'=>'edit', $numC),array('escape' => false) );
              echo '</h4></td>'; 
              echo '<td style="width:12%;text-align: center;"> <h4 style="margin-top:5px;">';
              echo $options[$sostatus] ;
              echo '</h4></td>';
              echo '<td style="width:12%;text-align: center;"><h4 style="margin-top:5px;">';
              if ($sostatus != 2)
              {
                echo $this->Form->postLink(
                   $this->Html->image('modif.png', array('alt' => __('Edit'),'style'=>'')), //le image
                   array('controller'=>'orders','action' => 'edit', $idor), //le url
                   array('escape' => false)   
                   );
              }
              echo '</h4></td>'; 
              if ($this->Session->read('Auth.User.role')=='Admin')
                {echo '<td style="width:8%" ><h4 style="margin-top:5px;"> <center>';
       
                  echo $this->Form->postLink(
                  $this->Html->image('supp.png', array('alt' => __('Delete'))), //le image
                  array('action' => 'delete', $idor), //le url
                  array('escape' => false),  
                  __('Are you sure to delete the order : %s?', $idstring) //le confirm
                  );  
                  echo '</center></h4></td>';
                }
              echo '<td style="width:8%;text-align: center;"><h4><center>';
              echo $this->Form->input('prt',array('type'=>'checkbox','label'=>' ','style'=>'opacity:2!important;float:center;margin-left: 30px!important;','id'=>''.$idor,'name'=>''.$idor  )); 
              echo '</center></h4></td>';
              echo '</tr>';
            }
          }
    ?>
		<?php endforeach; ?>
		<?php unset($order);} ?>
             </tbody>
        </table>
<div style="background-color:white!important;font-weight:bold;font-size:16px;;width:350px;margin-left:35px;display:inline!important;">  <span style="color:#ff8080"> Customer Flagged </span><span style="marginh-right:20px;color:#70d1bd"> Order Printed </span></div>
</div>
</div>
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
<td style="width:40px!important;padding:8px 8px 8px 8px !important;"><input style="background-color:#CCFF66!important;height: 73.506942px!important;width: 70px!important;font-weight: bold;font-size: 20px!important;" id="t1" type="text" readonly  name="08:00" value="08:00"  onclick="timing(this)"/> </td>
<td style=" ;width:40px!important;padding:8px 8px 8px 8px !important;"><input style="background-color:#CCFF66!important;height: 73.506942px!important;width: 70px!important;font-weight: bold;font-size: 20px!important;" id="t2" type="text" readonly name="09:00" value="09:00" onclick="timing(this)"/> </td>
<td style=" ;width:40px!important;padding:8px 8px 8px 8px !important;"><input style="background-color:#CCFF66!important;height: 73.506942px!important;width: 70px!important;font-weight: bold;font-size: 20px!important;" id="t3" type="text" readonly name="10:00" value="10:00" onclick="timing(this)"/> </td>
<td style=" ;width:40px!important;padding:8px 8px 8px 8px !important;"><input  style="background-color:#CCFF66!important;height: 73.506942px!important;width: 70px!important;font-weight: bold;font-size: 20px!important;" id="t4" type="text" readonly name="11:00" value="11:00" onclick="timing(this)"/> </td>
<td style="width:40px!important;padding:8px 8px 8px 8px !important;"><input  style="background-color:#CC9900!important;color:white;height: 73.506942px!important;width: 70px!important;font-weight: bold;font-size: 20px!important;"id="t5" type="text" readonly name="12:00" value="12:00" onclick="timing(this)"/> </td>
<td style="width:40px!important;padding:8px 8px 8px 8px !important;"><input style="background-color:#CC9900!important;color:white;height: 73.506942px!important;width: 70px!important;font-weight: bold;font-size: 20px!important;" id="t6" type="text" readonly name="13:00" value="1:00" onclick="timing(this)"/> </td>
<td style="width:40px!important;padding:8px 8px 8px 8px !important;"><input style="background-color:#CC9900!important;color:white;height: 73.506942px!important;width: 70px!important;font-weight: bold;font-size: 20px!important;" id="t7" type="text" readonly name="14:00" value="2:00" onclick="timing(this)"/> </td>
<td style="width:40px!important;padding:8px 8px 8px 8px !important;"><input style="background-color:#CC9900!important;color:white;height: 73.506942px!important;width: 70px!important;font-weight: bold;font-size: 20px!important;" id="t8" type="text" readonly name="15:00" value="3:00" onclick="timing(this)"/> </td>
<td style="width:40px!important;padding:8px 8px 8px 8px !important;"><input style="background-color:#CC9900!important;color:white;height: 73.506942px!important;width: 70px!important;font-weight: bold;font-size: 20px!important;" id="t9" type="text" readonly name="16:00" value="4:00" onclick="timing(this)"/> </td>
<td style="width:40px!important;padding:8px 8px 8px 8px !important;"><input style="background-color:#CC9900!important;color:white;height: 73.506942px!important;width: 70px!important;font-weight: bold;font-size: 20px!important;" id="t10" type="text" readonly name="17:00" value="5:00" onclick="timing(this)"/></td>
<td style="width:40px!important;padding:8px 8px 8px 8px !important;"><input style="background-color:#CC9900!important;color:white;height: 73.506942px!important;width: 70px!important;font-weight: bold;font-size: 20px!important;" id="t11" type="text" readonly name="18:00" value="6:00" onclick="timing(this)"/> </td>
<td style="width:40px!important;padding:8px 8px 8px 8px !important;"><input style="background-color:#CC9900!important;color:white;height: 73.506942px!important;width: 70px!important;font-weight: bold;font-size: 20px!important;" id="t12" type="text" readonly name="19:00" value="7:00" onclick="timing(this)"/></td>

</tr>
<tr>
<td style=" ;width:40px!important;padding:8px 8px 8px 8px !important;"><input style="background-color:#CCFF66!important;height: 73.506942px!important;width: 70px!important;font-weight: bold;font-size: 20px!important;"  id="t01" type="text" readonly name="08:15" value="08:15" onclick="timing(this)"/> </td>
<td style=" ;width:40px!important;padding:8px 8px 8px 8px !important;"><input  style="background-color:#CCFF66!important;height: 73.506942px!important;width: 70px!important;font-weight: bold;font-size: 20px!important;" id="t02" type="text" readonly name="09:15" value="09:15" onclick="timing(this)"/> </td>
<td style=" ;width:40px!important;padding:8px 8px 8px 8px !important;"><input style=" background-color:#CCFF66!important;height: 73.506942px!important;width: 70px!important;font-weight: bold;font-size: 20px!important;;"  id="t03" type="text" readonly name="10:15" value="10:15" onclick="timing(this)"/> </td>
<td style=" ;width:40px!important;padding:8px 8px 8px 8px !important;"><input  style="background-color:#CCFF66!important;height: 73.506942px!important;width: 70px!important;font-weight: bold;font-size: 20px!important;;" id="t04" type="text" readonly name="11:15" value="11:15" onclick="timing(this)"/> </td>
<td style="width:40px!important;padding:8px 8px 8px 8px !important;"><input style="background-color:#CC9900!important;color:white;height: 73.506942px!important;width: 70px!important;font-weight: bold;font-size: 20px!important;" id="t05" type="text" readonly name="12:15" value="12:15" onclick="timing(this)"/> </td>
<td style="width:40px!important;padding:8px 8px 8px 8px !important;"><input style="background-color:#CC9900!important;color:white;height: 73.506942px!important;width: 70px!important;font-weight: bold;font-size: 20px!important;" id="t06" type="text" readonly name="13:15" value="1:15" onclick="timing(this)"/> </td>
<td style="width:40px!important;padding:8px 8px 8px 8px !important;"><input style="background-color:#CC9900!important;color:white;height: 73.506942px!important;width: 70px!important;font-weight: bold;font-size: 20px!important;" id="t07" type="text" readonly name="14:15" value="2:15" onclick="timing(this)"/> </td>
<td style="width:40px!important;padding:8px 8px 8px 8px !important;"><input style="background-color:#CC9900!important;color:white;height: 73.506942px!important;width: 70px!important;font-weight: bold;font-size: 20px!important;" id="t08" type="text" readonly name="15:15" value="3:15" onclick="timing(this)"/> </td>
<td style="width:40px!important;padding:8px 8px 8px 8px !important;"><input style="background-color:#CC9900!important;color:white;height: 73.506942px!important;width: 70px!important;font-weight: bold;font-size: 20px!important;" id="t09" type="text" readonly name="16:15" value="4:15" onclick="timing(this)"/> </td>
<td style="width:40px!important;padding:8px 8px 8px 8px !important;"><input style="background-color:#CC9900!important;color:white;height: 73.506942px!important;width: 70px!important;font-weight: bold;font-size: 20px!important;" id="t010" type="text" readonly name="17:15" value="5:15" onclick="timing(this)"/></td>
<td style="width:40px!important;padding:8px 8px 8px 8px !important;"><input style="background-color:#CC9900!important;color:white;height: 73.506942px!important;width: 70px!important;font-weight: bold;font-size: 20px!important;" id="t011" type="text" readonly name="18:15" value="6:15" onclick="timing(this)"/> </td>
<td style="width:40px!important;padding:8px 8px 8px 8px !important;"><input style="background-color:#CC9900!important;color:white;height: 73.506942px!important;width: 70px!important;font-weight: bold;font-size: 20px!important;" id="t012" type="text" readonly name="19:15" value="7:15" onclick="timing(this)"/></td>
</tr>
<tr>
<td style="width:40px!important;padding:8px 8px 8px 8px !important;"><input style="background-color:#CCFF66!important;height: 73.506942px!important;width: 70px!important;font-weight: bold;font-size: 20px!important;"  id="M1" type="text" readonly name="08:30" value="08:30" onclick="timing(this)"/> </td>
<td style="width:40px!important;padding:8px 8px 8px 8px !important;"><input  style="background-color:#CCFF66!important;height: 73.506942px!important;width: 70px!important;font-weight: bold;font-size: 20px!important;" id="M2" type="text" readonly name="09:30" value="09:30" onclick="timing(this)"/> </td>
<td style="width:40px!important;padding:8px 8px 8px 8px !important;"><input style="background-color:#CCFF66!important;height: 73.506942px!important;width: 70px!important;font-weight: bold;font-size: 20px!important;"  id="M3" type="text" readonly name="10:30" value="10:30" onclick="timing(this)"/> </td>
<td style="width:40px!important;padding:8px 8px 8px 8px !important;"><input style="background-color:#CCFF66!important;height: 73.506942px!important;width: 70px!important;font-weight: bold;font-size: 20px!important;"  id="M4" type="text" readonly name="11:30" value="11:30" onclick="timing(this)"/> </td>
<td style="width:40px!important;padding:8px 8px 8px 8px !important;"><input style="background-color:#CC9900!important;color:white;height: 73.506942px!important;width: 70px!important;font-weight: bold;font-size: 20px!important;" id="M5" type="text" readonly name="12:30" value="12:30" onclick="timing(this)"/> </td>
<td style="width:40px!important;padding:8px 8px 8px 8px !important;"><input style="background-color:#CC9900!important;color:white;height: 73.506942px!important;width: 70px!important;font-weight: bold;font-size: 20px!important;" id="M6" type="text" readonly name="13:30" value="1:30" onclick="timing(this)"/> </td>
<td style="width:40px!important;padding:8px 8px 8px 8px !important;"><input style="background-color:#CC9900!important;color:white;height: 73.506942px!important;width: 70px!important;font-weight: bold;font-size: 20px!important;" id="M7" type="text" readonly name="14:30" value="2:30" onclick="timing(this)"/> </td>
<td style="width:40px!important;padding:8px 8px 8px 8px !important;"><input style="background-color:#CC9900!important;color:white;height: 73.506942px!important;width: 70px!important;font-weight: bold;font-size: 20px!important;" id="M8" type="text" readonly name="15:30" value="3:30" onclick="timing(this)"/> </td>
<td style="width:40px!important;padding:8px 8px 8px 8px !important;"><input style="background-color:#CC9900!important;color:white;height: 73.506942px!important;width: 70px!important;font-weight: bold;font-size: 20px!important;" id="M9" type="text" readonly name="16:30" value="4:30" onclick="timing(this)"/> </td>
<td style="width:40px!important;padding:8px 8px 8px 8px !important;"><input style="background-color:#CC9900!important;color:white;height: 73.506942px!important;width: 70px!important;font-weight: bold;font-size: 20px!important;" id="M10" type="text" readonly name="17:30" value="5:30" onclick="timing(this)"/></td>
<td style="width:40px!important;padding:8px 8px 8px 8px !important;"><input style="background-color:#CC9900!important;color:white;height: 73.506942px!important;width: 70px!important;font-weight: bold;font-size: 20px!important;" id="M11" type="text" readonly name="18:30" value="6:30" onclick="timing(this)"/> </td>
<td style="width:40px!important;padding:8px 8px 8px 8px !important;"><input style="background-color:#CC9900!important;color:white;height: 73.506942px!important;width: 70px!important;font-weight: bold;font-size: 20px!important;" id="M12" type="text" readonly name="19:30" value="7:30" onclick="timing(this)"/></td>
</tr>
<tr>
<td style="width:40px!important;padding:8px 8px 8px 8px !important;"><input style="background-color:#CCFF66!important;height: 73.506942px!important;width: 70px!important;font-weight: bold;font-size: 20px!important;"  id="M01" type="text" readonly name="08:45" value="08:45" onclick="timing(this)"/> </td>
<td style="width:40px!important;padding:8px 8px 8px 8px !important;"><input style="background-color:#CCFF66!important;height: 73.506942px!important;width: 70px!important;font-weight: bold;font-size: 20px!important;"  id="M02" type="text" readonly name="09:45" value="09:45" onclick="timing(this)"/> </td>
<td style="width:40px!important;padding:8px 8px 8px 8px !important;"><input style="background-color:#CCFF66!important;height: 73.506942px!important;width: 70px!important;font-weight: bold;font-size: 20px!important;" id="M03" type="text" readonly name="10:45" value="10:45" onclick="timing(this)"/> </td>
<td style="width:40px!important;padding:8px 8px 8px 8px !important;"><input style="background-color:#CCFF66!important;height: 73.506942px!important;width: 70px!important;font-weight: bold;font-size: 20px!important;"  id="M04" type="text" readonly name="11:45" value="11:45" onclick="timing(this)"/> </td>
<td style="width:40px!important;padding:8px 8px 8px 8px !important;"><input style="background-color:#CC9900!important;color:white;height: 73.506942px!important;width: 70px!important;font-weight: bold;font-size: 20px!important;" id="M05" type="text" readonly name="12:45" value="12:45" onclick="timing(this)"/> </td>
<td style="width:40px!important;padding:8px 8px 8px 8px !important;"><input style="background-color:#CC9900!important;color:white;height: 73.506942px!important;width: 70px!important;font-weight: bold;font-size: 20px!important;"id="M06" type="text" readonly name="13:45" value="1:45" onclick="timing(this)"/> </td>
<td style="width:40px!important;padding:8px 8px 8px 8px !important;"><input style="background-color:#CC9900!important;color:white;height: 73.506942px!important;width: 70px!important;font-weight: bold;font-size: 20px!important;"id="M07" type="text" readonly name="14:45" value="2:45" onclick="timing(this)"/> </td>
<td style="width:40px!important;padding:8px 8px 8px 8px !important;"><input style="background-color:#CC9900!important;color:white;height: 73.506942px!important;width: 70px!important;font-weight: bold;font-size: 20px!important;"id="M08" type="text" readonly name="15:45" value="3:45" onclick="timing(this)"/> </td>
<td style="width:40px!important;padding:8px 8px 8px 8px !important;"><input style="background-color:#CC9900!important;color:white;height: 73.506942px!important;width: 70px!important;font-weight: bold;font-size: 20px!important;"id="M09" type="text" readonly name="16:45" value="4:45" onclick="timing(this)"/> </td>
<td style="width:40px!important;padding:8px 8px 8px 8px !important;"><input style="background-color:#CC9900!important;color:white;height: 73.506942px!important;width: 70px!important;font-weight: bold;font-size: 20px!important;"id="M010" type="text" readonly name="17:45" value="5:45" onclick="timing(this)"/></td>
<td style="width:40px!important;padding:8px 8px 8px 8px !important;"><input style="background-color:#CC9900!important;color:white;height: 73.506942px!important;width: 70px!important;font-weight: bold;font-size: 20px!important;"id="M011" type="text" readonly name="18:45" value="6:45" onclick="timing(this)"/> </td>
<td style="width:40px!important;padding:8px 8px 8px 8px !important;"><input style="background-color:#CC9900!important;color:white;height: 73.506942px!important;width: 70px!important;font-weight: bold;font-size: 20px!important;"id="M012" type="text" readonly name="19:45" value="7:45" onclick="timing(this)"/></td>
</tr>
</table> 
</center>	        </div>
        <div class="modal-footer">
          <a href="#" data-dismiss="modal" class="btn">Close</a>
         </div>
      </div>
    </div>
</div>
</body>
   <script>
function addclr(){

	$('#OrderFilter table tr:last').append('<td><input type="submit" id="CLR" value="CLR" onclick="clearing();" style="background:#3c8dbc!important;color:white; margin-top: 30px;    padding-top: 8px;padding-bottom: 8px;font-size: 16px!important;"/></td>');
	//$('#OrderFilter table tr:last').append('<td><button style="width:100px;font-size: 18px;" class="btn btn-block btn-primary btn-flat">CLR</button></td>');
	//$('#OrderFilter table tr:last').after('<tr><td>test</td></tr>');

}
function btnclr(){
	document.getElementById('OrderCustomername').value="";
	document.getElementById('OrderCustomerphone').value="";
	document.getElementById('OrderTime').value="";
	document.getElementById('OrderDate').value="";
	document.getElementById('OrderId').value="";

}
/* 
$( "id*='ui-id-'" ).click(function() {
alert('here');
});
 */
	     $( "#OrderDate" ).click(function() {
	  $( "#OrderDate" ).val('');
 	  });
	   
  $( function() {
	
 $( "#datepicker" ).datepicker({
  dateFormat: "yy-mm-dd".
  
});

	  
 $( "#OrderDate" ).datepicker({
  dateFormat: "yy-mm-dd"
}); 
   } ); 

  </script> 
<style>
#tab td {height:30px!important;padding-top:0px!important;}
#tab input{height:30px!important;font-size:15px!important;cursor:pointer;text-weight:bold;text-align:center;}
</style>

 <style>
 .ui-menu-item{
    padding-bottom: 0px!important;
}
 .tds{
	background-color:#00BFFF!important; 
	border: 1px black solid;
	text-align:center;
	color:white;
	 cursor:pointer;
 }
 </style>

<style>
 #myTable td{height:50px!important;
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
   </style>
   <script >
     $("#OrderTime").click(function() {
  $('#myModal2').modal('show');
  });

  $("#OrderTime").click(function() {
  $('#myModal2').modal('show');
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
document.getElementById('OrderTime').value=time; 
  $('#myModal2').modal('hide');

 }
  function getid(){
	 
	var count=0; 
	var list="";
      var selected = [];
$('#checkboxes input:checked').each(function() {
	
    selected.push($(this).attr('name'));
	
	if (($(this).attr('name')) != "checkAll" ){
		
		if(($(this).closest('td').css("background-color")) == "rgb(112, 209, 189)"){countprint=countprint+1;}
		count=count+1;
	list=list+$(this).attr('name')+'/';	
	}
	

});
	document.getElementById("nbprint").value=count;
	document.getElementById("idtoprint").value=list;
	
//alert(list);
}
   </script >
     <script>

var custs= <?php echo json_encode($customersdata3); ?>;
var nameee='';
var phoneee='';
$('#OrderCustomername')
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
	//	var custnums=<?php echo json_encode($custphone2); ?>;
$('#OrderCustomerphone')
	.keyboard({ layout: 'num',autoAccept:1 })
	.autocomplete({
		
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
	})
	.addTyping();
  // ui-menu-item-wrapper ui-keyboard
    $( "#OrderCustomerphone" ).change(function() {

	 if (phoneee.length > 13){
	 document.getElementById('OrderCustomername').value=phoneee.substr(15);
	 document.getElementById('OrderCustomerphone').value=phoneee.substr(0,13);
	
	 }
}); 
  $( "#OrderCustomername" ).change(function() {
	 	   if ((nameee.length > 15)  ){
	pos=nameee.indexOf('  ');
	document.getElementById('OrderCustomerphone').value=nameee.substr(pos+2);
		  }
});
      $('#OrderId').keyboard({ layout: 'num2' ,autoAccept:1});
//	  $('#OrderTime').keyboard({ layout: 'num' ,autoAccept:1});
	  </script >
	   <style type="text/css">
 		   input[type=checkbox] {cursor:pointer;}
		   input[type=checkbox] {float:center!important;}
#ui-datepicker-div{
  text-align: center;
  width: 390px;
  height:400px;	
	  
}
 .ui-datepicker-calendar .ui-state-default a {color: blue!important;
    font-size: 18px!important;
		   }
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
}
  .checkbox{height:18px!important;}
input[type=checkbox]{opacity:2!important;margin-left:1px!important;position: relative!important;height:18px!important;width:18px!important;background:#ddd!important;}
  
    input[type=hidden]{height: 32px!important;}

  .iCheck-helper{background:#ddd!important;opacity:0!important;}
  .ui-corner-all {padding:10px!important;}
#OrderCustomerphone{width: 132px;}
  #OrderCustomer{width:110px!important;}
  #OrderDate{width:97px!important;}
  #OrderTime{width:87px!important;}
  #OrderId{width:87px!important;}
  
ui-keyboard-button.ui-keyboard-actionkey.ui-keyboard-enter.ui-keyboard-widekey.ui-state-default.ui-corner-all.ui-state-active{display:none!important;}
#OrderCustomername{
    padding-left: 3px!important;
    padding-right: 2px!important;
     width:135px!important;
}
input[type=button]{width:100px!important;}
 </style>
<style>
.ui-menu-item-wrapper{max-width:180px;}
.ui-menu-item{max-width:190px;}
#tab input{background-color:#CCFF66!important;margin-bottom: 8px;margin-top: 8px;height: 44.886359999999996px!important;}
#tab{  border-spacing: 25px!important;}
.ui-keyboard-button{padding:0px 0px 0px 0px!important;width:80px!important;height:80px!important;
    margin-left: 5px;
    margin-right: 5px;
    margin-bottom: 5px;
    margin-top: 5px;
}
.ui-keyboard-space{min-width:150px!important;}
.ui-datepicker-prev{
    width: 60px!important;
    height: 46px!important;
    background-color: lightgrey;
}
.ui-datepicker-next{
    width: 60px!important;
    height: 46px!important;
    background-color: lightgrey;
}	
.ui-datepicker td a{width: 75.544px!important;
    height: 75.544px!important;
	    font-size: 28px;}
#ui-datepicker-div {width: 608.16px!important;height: 600.08px!important;}
</style>