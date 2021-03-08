<link href="http://ordersentry.enterpriseesolutions.com/keyboard/css/jquery-ui.min.css" rel="stylesheet">
	<!-- still using jQuery v2.2.4 because Bootstrap doesn't support v3+ -->
	<script src="http://ordersentry.enterpriseesolutions.com/keyboard/js/jquery-latest.min.js"></script>
	<script src="http://ordersentry.enterpriseesolutions.com/keyboard/js/jquery-ui.min.js"></script> 
<!-- 	 <script src="http://ordersentry.enterpriseesolutions.com/keyboard/js/jquery-migrate-3.0.0.min.js"></script> -->

	<!-- keyboard widget css & script (required) -->
	<link href="http://ordersentry.enterpriseesolutions.com/keyboard/css/keyboard.css" rel="stylesheet">
	<script src="http://ordersentry.enterpriseesolutions.com/keyboard//js/jquery.keyboard.js"></script>

	<!-- keyboard extensions (optional) Autocomplete -->
	<script src="http://ordersentry.enterpriseesolutions.com/keyboard/js/jquery.mousewheel.js"></script>
	<script src="http://ordersentry.enterpriseesolutions.com/keyboard/js/jquery.keyboard.extension-typing.js"></script>
	<script src="http://ordersentry.enterpriseesolutions.com/keyboard/js/jquery.keyboard.extension-autocomplete.js"></script>
	<script src="http://ordersentry.enterpriseesolutions.com/keyboard/js/jquery.keyboard.extension-caret.js"></script>

		<link href="http://ordersentry.enterpriseesolutions.com/keyboard/css/tipsy.css" rel="stylesheet">
	<link href="http://ordersentry.enterpriseesolutions.com/keyboard/css/prettify.css" rel="stylesheet">
	<script src="http://ordersentry.enterpriseesolutions.com/keyboard/js/bootstrap.min.js"></script>
	<!--<script src="http://ordersentry.enterpriseesolutions.com/keyboard/js/demo.js"></script>-->
	<script src="http://ordersentry.enterpriseesolutions.com/keyboard/js/jquery.tipsy.min.js"></script>
	<script src="http://ordersentry.enterpriseesolutions.com/keyboard/js/prettify.js"></script> <!-- syntax highlighting -->
	<body onload="addclr();">
<div class="users form index" style="margin-top:-30px">
<h1 class="no-print" style="color:#367FA9">Customers </h1><img  id="add" style="float:right;margin-left:50px;" src="http://ordersentry.enterpriseesolutions.com/app/webroot/img/add.png"></img>
  
<?php

      echo $this->Filter->filterForm('Customer', array('legend' => 'Recherche'));  
   	
?>
<script type="text/javascript" >var cn=0;

 var arraynum=new Array();
 var arraynomcust=new Array();
 var arraynumnomcust=new Array();
 </script>

 <?php
 
  App::import('Controller', 'Customers');
 $customers2 = new CustomersController;
   	$cust=$customers2->ListeCustomers();
    $custphone2 = array_unique($customers2->PhoneCustomers());
    $custphone = $customers2->PhoneCustomers();
    $custphone = array_values($custphone);
    $custphone2 = array_values($custphone2);
    //$custphoneDISTINCT = array_values($custphoneDISTINCT);
	
    $custname = $customers2->ListeCustomers();
    $custname = array_values($custname);
    $customersdata = array();
    for ($i=0; $i < sizeof($custphone) ; $i++) { 
	?>
	  <script type="text/javascript">  // alert('cn='+cn);
	  cn=cn+1;</script><?php
      $customersdata[$i]=array("value"=>$custphone[$i], "label"=>$custphone[$i], "desc"=>$custname[$i]);
	  	  ?>
	  <script type="text/javascript">
     arraynum[cn]= ""+<?php echo json_encode($custphone[$i]); ?>;
	 arraynomcust[cn]=""+<?php echo json_encode($custname[$i]); ?>;
	 arraynumnomcust[cn]=""+<?php echo json_encode($custphone[$i]); ?>+"/"+<?php echo json_encode($custphone[$i]); ?>; 
</script>
	  <?php
    }
    $customersdata=array_values($customersdata);
  ?>
  <script>$('.dropdown-toggle').dropdown();</script>
  <script language="JavaScript">


  $(function() {
 
 
   $("#add").click(function() {
  $('#myModal').modal('show');
  });
 
 
 });
 </script> 
 
</div>	
<div class="panel panel-default">
    <div class="panel-body">
        <table id="myTable" class="table table-fixedheader table-bordered table-striped">
            <thead style="color:white!important;">
                <tr>
<th style="width:15%"><center><?php echo $this->Paginator->sort('name', 'Name');?>  </center></th>
<th style="width:15%"><center><?php echo $this->Paginator->sort('phone', 'Phone');?>  </center></th>
<th style="width:15%"><center><?php echo $this->Paginator->sort('city', 'City');?>  </center></th>
 			<?php if ($this->Session->read('Auth.User.role')=='Admin')
        {
			echo '<th style="width:45%"><center>'. $this->Paginator->sort('address', 'Address') .'</center></th>';	
		}
		else
		{
			echo '<th style="width:55%"><center>'. $this->Paginator->sort('address', 'Address') .'</center></th>';				
		} ?>
   			<?php if ($this->Session->read('Auth.User.role')=='Admin')
        {echo '<th style="width:10%"><center>Delete</center></th>';} ?>
		</tr>
            </thead>
            <tbody style="max-height:750px">
                <?php $count=0; ?>
                <?php if (isset($customers)) { ?>
		<?php foreach($customers as $customer): ?>				
		<?php $count ++;?>
		<?php if($count % 2): echo '<tr>'; else: echo '<tr class="zebra">' ?>
		<?php endif; $flag= $customer['Customer']['flag'];
			if ($flag){$style="background-color:#ff8080;color:black!important;font-weight:bold;";}else{$style="";}
				?>
			 	<td  style="width:15%;text-align: center;<?php echo $style ;?>"><?php echo $this->Html->link( $customer['Customer']['name']  ,   array('action'=>'edit', $customer['Customer']['id']),array('escape' => false) );?></td>
				<td  style="width:15%;text-align: center;"><?php echo   $customer['Customer']['phone']  ;?></td>
				<td  style="width:15%;text-align: center;"><?php echo  $customer['Customer']['city']   ;?></td>
 			<?php if ($this->Session->read('Auth.User.role')=='Admin')
        {		
		echo '<td style="width:45%;text-align: left;">' . $customer['Customer']['address'].'</td>';
		}
		else
		{		
		echo '<td style="width:55%;text-align: left;">' . $customer['Customer']['address'].'</td>';
		} ?>
   				<?php if ($this->Session->read('Auth.User.role')=='Admin')
        {echo '<td style="width:10%" ><center>';
 		 	 
		echo $this->Form->postLink(
  $this->Html->image('supp.png', array('alt' => __('Delete'))), //le image
  array('action' => 'delete', $customer['Customer']['id']), //le url
  array('escape' => false),  
  __('Are you sure to delete the customer : %s?', $customer['Customer']['name']) //le confirm
);  echo '</center></td>'; }?>
		</tr>
		<?php endforeach; ?>
		<?php unset($customer);} ?>
             </tbody>
        </table>
 		<span style="margin-left:50px;font-size:18px;font-weight:bold;color:#ff8080">Customer flagged	</span>	
    </div>
</div>

<div class="modal" id="myModal">
	<div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
		<center><h4 class="modal-title" id="myModalLabel" style="color:#0B8EB6; ;">Add a Customer </h4></center>        </div><div class="container"></div>
        <div style="margin-left:100px;" class="modal-body form">
 
<?php echo $this->Form->create('Customer',array('action'=>'add')); ?>
<fieldset></br>
 <table class= 'form'>
<tr><td><label>Complete Name</label></td><td><?php echo $this->Form->input('name' ,array('id'=>'textt','label'=>'','style'=>' ;margin-left:-2px' , 'required'=>'true', 'pattern'=>'[a-zA-Z0-9\s]+' ));?></td><td></td></tr>
<tr><td><label>Phone</label></td><td><?php echo $this->Form->input('phone' ,array('id'=>'phone','placeholder'=>'(___)___.____','pattern'=>'^\(([0-9]{3})\)[.]?([0-9]{3})[-. ]?([0-9]{4})$','maxlength'=>13,'onchange'=>'checkPhone();','class'=>'elem','label'=>'','style'=>' ;text-align:left;','type'=>'text'  , 'required'=>'true'));;?></td>
<td><!--<button type="button" onclick="btn416()" style="margin-right:10px!important;margin-bottom:10px!important;" class="btn btn-round btn-default">416</button><button type="button" style="margin-bottom:10px!important;" onclick="btn905()" class="btn btn-round btn-default">905</button>--></td>
</tr>
<tr><td><label>City</label></td><td><?php echo $this->Form->input('city' ,array('id'=>'city','label'=>'','style'=>' ;text-align:left;'   ));;?></td><td></td></tr>
<tr><td><label>Address</label></td><td><?php echo $this->Form->input('address' ,array('id'=>'address','label'=>'','style'=>' ;text-align:left;' ,'type' => 'textarea' ));;?></td><td></td></tr>
 </table>
  <?php  		echo $this->Form->submit('Add', array('class' => 'form-submit',  'title' => 'Clic here to add    ') ); ?>
    </fieldset>
<?php echo $this->Form->end(); ?>
         </div>
        <div class="modal-footer">
          <a href="#" data-dismiss="modal" class="btn">Close</a>
         </div>
      </div>
    </div>
</div> 
</body>
 <script>
	 
var custs=<?php echo json_encode($custname); ?>;
$('#CustomerName')
	.keyboard({ layout: 'qwerty',autoAccept:1 })
	.autocomplete({
		//source: custs
		source: function(request, response) {
        var results = $.ui.autocomplete.filter(custs, request.term);
        
        response(results.slice(0, 50));
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
	
		var custnums=<?php echo json_encode($custphone2); ?>;
$('#CustomerPhone')
	.keyboard({ layout: 'num',autoAccept:1 })
	.autocomplete({
		//source: custnums
		source: function(request, response) {
        var results = $.ui.autocomplete.filter(custnums, request.term);
        
        response(results.slice(0, 50));
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
		  
  $('#textt').keyboard({ layout: 'qwerty',autoAccept:1 });
  $('#phone').keyboard({ layout: 'num' ,autoAccept:1});
  $('#city').keyboard({ layout: 'qwerty',autoAccept:1 });
  $('#address').keyboard({ layout: 'qwerty',autoAccept:1 });
//  $('#CustomerName').keyboard({ layout: 'qwerty' });
  //$('#CustomerPhone').keyboard({ layout: 'num' });
 	
</script>


<style>
.modal-content{
    width: 612px;
}
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
<script>
	function addclr(){
	//	alert('here');
	$('#CustomerFilter table tr:last').append('<td><input type="submit" value="CLR" onclick="btnclr();" style="background:#3c8dbc!important;color:white; margin-top: 30px;    padding-top: 8px;padding-bottom: 8px;font-size: 16px!important;"/></td>');
	
}
function btnclr(){
	document.getElementById('CustomerName').value="";
	document.getElementById('CustomerPhone').value="";
	}
/* function btn905(){

		elm=document.getElementById('CustomerPhone');
		elm.value='(905)';
				 $( "#CustomerPhone" ).focus();
	 }
function btn416(){
		elm=document.getElementById('CustomerPhone');
		elm.value='(416)';
				 $( "#CustomerPhone" ).focus();
	 }*/
function checkPhone(){
	elm=document.getElementById('phone');
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
<style>
	.ui-menu-item-wrapper{    font-size: 38px!important;}
.ui-menu-item{    font-size: 38px!important;}
.ui-keyboard-button{padding:0px 0px 0px 0px!important;width:80px!important;height:80px!important;
    margin-left: 5px;
    margin-right: 5px;
    margin-bottom: 5px;
    margin-top: 5px;
}
	.ui-keyboard-space{min-width:190px!important;}
	.ui-keyboard-text{font-size:40px!important;}
	.ui-keyboard-shift{width:100px!important;}
/*.ui-autocomplete {     height: 600px!important;}*/
.ui-autocomplete { 
            position: absolute; 
            cursor: default; 
            height: 500px; 
            overflow-y: scroll; 
            overflow-x: hidden;
            z-index: 100!important;
        }

	.ui-keyboard-bksp{width:90px!important;}
</style>