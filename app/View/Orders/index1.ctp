	<!--<link href="https://code.jquery.com/ui/1.9.2/themes/ui-darkness/jquery-ui.css" rel="stylesheet">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.8/jquery.js"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<!--<script src="https://code.jquery.com/ui/1.9.2/jquery-ui.min.js"></script>-->
<script src="http://code.jquery.com/jquery-1.11.1.min.js"></script>
<script src="http://code.jquery.com/ui/1.11.1/jquery-ui.min.js"></script>
<link rel="stylesheet" href="https://code.jquery.com/ui/1.11.1/themes/smoothness/jquery-ui.css" />


	<!-- keyboard widget css & script (required) -->
	<link href="http://ordersentry.enterpriseesolutions.com/keyboard/css/keyboard.css" rel="stylesheet">
	<script src="http://ordersentry.enterpriseesolutions.com/keyboard/js/jquery.keyboard.js"></script>

<!-- keyboard extensions (optional) Autocomplete -->
	<script src="http://ordersentry.enterpriseesolutions.com/keyboard/js/jquery.mousewheel.js"></script>
	<script src="http://ordersentry.enterpriseesolutions.com/keyboard/js/jquery.keyboard.extension-typing.js"></script>
	<script src="http://ordersentry.enterpriseesolutions.com/keyboard/js/jquery.keyboard.extension-autocomplete.js"></script>
	<script src="http://ordersentry.enterpriseesolutions.com/keyboard/js/jquery.keyboard.extension-caret.js"></script>

<script src="http://ordersentry.enterpriseesolutions.com/js/jquery.dataTables.min.js"></script>


<style>
	   @media print {
  a[href]:after {
    content: none !important;
  }
}
table.dataTable thead .sorting,table.dataTable thead .sorting_asc,table.dataTable thead .sorting_desc,table.dataTable thead .sorting_asc_disabled,table.dataTable thead .sorting_desc_disabled{cursor:pointer;*cursor:hand;background-repeat:no-repeat;background-position:center right}	
	
table.dataTable thead .sorting{background-image:url("http://directories.enterpriseesolutions.com/img/sort_both.png")}
table.dataTable thead .sorting_asc{background-image:url("http://directories.enterpriseesolutions.com/img/sort_asc.png")}
table.dataTable thead .sorting_desc{background-image:url("http://directories.enterpriseesolutions.com/img/sort_desc.png")}
table.dataTable thead .sorting_asc_disabled{background-image:url("http://directories.enterpriseesolutions.com/img/sort_asc_disabled.png")}
table.dataTable thead .sorting_desc_disabled{background-image:url("http://directories.enterpriseesolutions.com/img/sort_desc_disabled.png")}
	
	
	</style>


<!--<script src="http://code.jquery.com/jquery-1.11.1.min.js"></script>
<script src="http://code.jquery.com/ui/1.11.1/jquery-ui.min.js"></script>
<link rel="stylesheet" href="https://code.jquery.com/ui/1.11.1/themes/smoothness/jquery-ui.css" />-->

 <?php

$this->layout='gent';
 App::import('Controller', 'Orders');
          $suborders = new OrdersController;
  App::import('Controller', 'Customers');
 $customers = new CustomersController;
 ?>
  <?php  App::import('Controller', 'Customers');
 $customers = new CustomersController;
 $custphone = $customers->PhoneCustomers();
        $custphone = array_values($custphone);
       // $custphone2 = array_values($custphone2);
  
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
	
	?>

<div class="users form index" style="margin-top:-30px">
<div class="row">
<div class="col-sm-8"><h1 class="no-print" style="color:#367FA9">Orders </h1></div>
<div class="col-sm-4" style="margin-top:20px;">
<input id="test" class="datepicker" placeholder="YYYY-MM-DD" onchange="changedate()"/>

</div>
</div>
<a  href="http://ordersentry.enterpriseesolutions.com/orders/add" ><img  id="add" style="float:right;margin-left:50px;" src="http://ordersentry.enterpriseesolutions.com/app/webroot/img/add.png"></img></a>
<!--<a  href="http://ordersentry.enterpriseesolutions.com/orders/index0" ><h2 id="add2" style="float:right;margin-left:50px;" >Test2</h1></a>-->

<?php

 $options= array('Not Ready','Ready','Checked out','Packed','Cancelled');
 
 
	/** here */
?>

</div>
 
<div style="float:right;margin-left: 100px;/*margin-top: 170px;*/">
<?php $parameter   = "<script language='JavaScript'> return validate(this);</script>";?>
<?php echo $this->Form->create('Order',array('onsubmit'=>'show_alert();','class'=>'printform','controller'=>'orders','action'=>'printorders')); ?>
<?php echo $this->Form->input('nbprint',array('type'=>'hidden' ,'id'=>'nbprint') ) ;?> 
 <?php echo $this->Form->input('idtoprint',array('type'=>'hidden', 'id'=>'idtoprint') ) ;?>
<?php echo $this->Form->submit('Sauvgarder',array('name'=>'Save','onclick'=>'getid();','id'=>'linkk','type'=>'image','src' => 'http://ordersentry.enterpriseesolutions.com/app/webroot/img/printer.png')); ?>
		<?php echo $this->Form->end(); ?>
 <!-- <div>Select All :</br> <input type="checkbox" onclick="checkAll(this)"></div>-->

</div>
 
<div class="panel panel-default">
    <div class="panel-body">
	
     <div id="checkboxes">
	<!-- <table id="myTable" class="table table-fixedheader table-bordered table-striped">-->
	  <table id="myTable" class="table table-striped jambo_table">
            <thead style="color:white!important;">
                <tr>
			<th style="width:10%"><h4 style="margin-top:0px;"> <center>ID </center></h4></th>
 			 <th style="width:10%"><h4 style="margin-top:0px;"> <center>Date</center></h4></th>	
			 <th style="width:10%"><h4 style="margin-top:0px;"> <center>Time</center></h4></th>
			 <th style="width:15%"><h4 style="margin-top:0px;"> <center>CustomerName</center></h4></th>
			 <th style="width:15%"><h4 style="margin-top:0px;"> <center>CustomerPhone</center></h4></th>
			 <!--<th style="width:12%"><h4 style="margin-top:0px;"> <center>Status</center></h4></th>-->
			 <th class="no-sort" style="padding-top:2px!important;width:10%;padding-left: 0px;padding-right: 1px;"><h4 style="font-size: 15px;margin-top:0px;padding-left: 0px;margin-left: 0px;"> <center>Edit/Add Products</center></h4></th>
  
   			<?php if ($this->Session->read('Auth.User.role')=='Admin')
        {echo '<th class="no-sort" style="width:10%"><h4 style="margin-top:0px;"> <center>Check out</center></h4></th>';} ?>
		<?php if ($this->Session->read('Auth.User.role')=='Admin')
        {echo '<th class="no-sort" style="width:10%"><h4 style="margin-top:0px;"> <center>Delete</center></h4></th>';} ?>
		<th style="width:10%"><h4 style="margin-top:0px;"> <center>Print<input name="checkAll" type="checkbox" onclick="checkAll(this);"></center></h4></th>

		</tr>
            </thead>
			<tfoot>
			<tr>
			<th >ID</th>
			<th >Date</th>
			<th >Time</th>
			<th >CustomerName</th>
			<th >CustomerPhone</th>
			<!--<th >Status</th>-->
			<th ></th>

  
   			<?php if ($this->Session->read('Auth.User.role')=='Admin')
        {echo '<th></th>';} ?>
		<?php if ($this->Session->read('Auth.User.role')=='Admin')
        {echo '<th ></th>';} ?>
		<th></th>

		</tr>
			</tfoot>
            <tbody style="max-height:750px">
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
	   date_default_timezone_set('America/New_York');
$date = date('Y-m-d');   
//echo('date='.$date);

   if ( ($order['Order']['status'] != 2) && ( strtotime($order['Order']['date']) >=  strtotime($date) ) )

             //   if ($sostatus != 2)
                  {echo $this->Html->link(   $order['Order']['id'] ,   array('action'=>'edit', $order['Order']['id']),array('escape' => false) );}
        else
					{echo $this->Html->link(  $order['Order']['id'],   array('action'=>'view', $order['Order']['id']),array('escape' => false) );}
               

	
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
		<td style="width:11%;text-align: center;<?php echo $style; ?>"> <h4 style="margin-top:5px;"><?php echo $order['Order']['customername'] ; 
		//$this->Html->link( $order['Order']['customername']  ,   array('controller'=>'customers','action'=>'edit', $order['Order']['customer']),array('escape' => false) );
		?></h4> </td>  
		<td style="width:15%;text-align: center;"> <h4 style="margin-top:5px;"><?php echo $order['Order']['customerphone'];?><!--hp echo $this->Html->link( ($order['Order']['customerphone'] ) ,   array('controller'=>'customers','action'=>'edit', $order['Order']['customer']),array('escape' => false) );?>--></h4> </td>  
		<!--<td style="width:12%;text-align: center;"> <h4 style="margin-top:5px;"> echo $options[$order['Order']['status']] ;?> </h4></td>  -->
		<td style="width:8%;text-align: center;"><h4 style="margin-top:5px;"> <?php 
date_default_timezone_set('America/New_York');
$date = date('Y-m-d');   
//echo('date='.$date);

   if ( ($order['Order']['status'] != 2) && ( strtotime($order['Order']['date']) >=  strtotime($date) ) )
    {echo $this->Form->postLink(
            $this->Html->image('modif.png', array('alt' => __('Edit'),'style'=>'')), //le image
              array('controller'=>'orders','action' => 'edit', $order['Order']['id']), //le url
              array('escape' => false)   
            ); }	
    ?> 	</h4> 
	 </td>  
	
   				<?php if ($this->Session->read('Auth.User.role')=='Admin')
        {
			echo '<td style="width:8%;padding-top: 0px!important;padding-bottom: 0px;padding-left: 0px;padding-right: 0px;" ><h4 style="margin-top:5px;"> <center>';
		 if ($order['Order']['status'] == 2){?><img src="http://ordersentry.enterpriseesolutions.com/app/webroot/img/Checkedout.png" style="width:40px"/><?php }
			else{
					echo $this->Form->postLink(
  $this->Html->image('checkout.png', array('style'=>'width:40px','alt' => __('Checkout'))), //le image
  array('action' => 'checkout', $order['Order']['id'],1), //le url
  array('escape' => false) //le confirm
);
		}
  echo '</center></h4></td>';
			
			echo '<td style="width:8%" ><h4 style="margin-top:5px;"> <center>';
 		 	 
		echo $this->Form->postLink(
  $this->Html->image('supp.png', array('alt' => __('Delete'))), //le image
  array('action' => 'delete', $order['Order']['id']), //le url
  array('escape' => false),  
  __('Are you sure to delete the order : %s?', $order['Order']['id']) //le confirm
);  echo '</center></h4></td>'; }?>
<td id="tdchkeckbox" style="width:8%;text-align: center;<?php echo $style2; ?>"><center><h4><center>

 <?php echo $this->Form->input('prt',array('type'=>'checkbox','label'=>'??','style'=>'margin-left: 30px!important;opacity:2!important;float:center;','id'=>''.$order['Order']['id'],'name'=>''.$order['Order']['id']  ))?> </center></h4> </center></td>
		</tr>
    <?php
          
          if ($suborders->SubOrders($order['Order']['id']))
          {
			  	$newid=$suborders->newid($order['Order']['id'],$date);
			  $print=$suborders->Orderprinted($newid);
   if ($print){$style2="background-color:#70d1bd;color:black!important;font-weight:bold;";}else{$style2="";}		
	
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
              $secondname=$suborders->customerorderSecondname($idor,$sodate);
              $sostatus = $suborders->statusOrder($idor);
              if ($sostatus == 2)
                {$sotime = $suborders->checkedordertime($idor);}
              echo '<td  style="width:10%;text-align: center;"><h4 style="margin-top:5px;color:#428bca!important;">';
              $idstring = $order['Order']['id'].'-'.$counts ;
			      date_default_timezone_set('America/New_York');
$date = date('Y-m-d');   
//echo('date='.$date);

   if ( ($sostatus != 2) && ( strtotime($order['Order']['date']) >=  strtotime($date) ) )

             //   if ($sostatus != 2)
                {echo $this->Html->link(  $idstring,   array('action'=>'edit', $idor),array('escape' => false) );}
                else
					{echo $this->Html->link(  $idstring,   array('action'=>'view', $idor),array('escape' => false) );}
               
               // {echo $idstring;}
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
             /* echo '<td style="width:15%;text-align: center;"> <h4 style="margin-top:5px;">';
              echo $this->Html->link( $customers->CustomerById($numC ) ,   array('controller'=>'customers','action'=>'edit', $numC),array('escape' => false) );
              echo '</h4></td>';
              echo '<td style="width:15%;text-align: center;"> <h4 style="margin-top:5px;">';
              echo $this->Html->link( $customers->CustomerTelById($numC ) ,   array('controller'=>'customers','action'=>'edit', $numC),array('escape' => false) );
              echo '</h4></td>'; */
              ?>
              <td style="width:11%;text-align: center;<?php echo $style; ?>"> <h4 style="margin-top:5px;"><?php echo $secondname; 
    //$this->Html->link( $order['Order']['customername']  ,   array('controller'=>'customers','action'=>'edit', $order['Order']['customer']),array('escape' => false) );
    ?></h4> </td>  
    <td style="width:15%;text-align: center;"> <h4 style="margin-top:5px;"><?php echo $order['Order']['customerphone'];?><!--hp echo $this->Html->link( ($order['Order']['customerphone'] ) ,   array('controller'=>'customers','action'=>'edit', $order['Order']['customer']),array('escape' => false) );?>--></h4> </td>
             <?php
			///echo  '<td style="width:12%;text-align: center;"> <h4 style="margin-top:5px;">';
              /// $options[$sostatus] ;
              /// '</h4></td>';
              echo '<td style="width:8%;text-align: center;"><h4 style="margin-top:5px;">';
              date_default_timezone_set('America/New_York');
$date = date('Y-m-d');   
//echo('date='.$date);

   if ( ($sostatus != 2) && ( strtotime($order['Order']['date']) >=  strtotime($date) ) )

              {
                echo $this->Form->postLink(
                   $this->Html->image('modif.png', array('alt' => __('Edit'),'style'=>'')), //le image
                   array('controller'=>'orders','action' => 'edit', $idor), //le url
                   array('escape' => false)   
                   );
              }
              echo '</h4></td>'; 

 
              if ($this->Session->read('Auth.User.role')=='Admin')
                {
				echo '<td style="width:8%;padding-top: 0px!important;padding-bottom: 0px;padding-left: 0px;padding-right: 0px;" ><h4 style="margin-top:5px;"> <center>';
 		 	 if ($sostatus == 2){?><img src="http://ordersentry.enterpriseesolutions.com/app/webroot/img/Checkedout.png" style="width:40px"/><?php }
			 else{
				 		echo $this->Form->postLink(
  $this->Html->image('checkout.png', array('style'=>'width:40px','alt' => __('Checkout'))), //le image
  array('action' => 'checkout', $order['Order']['id'],1), //le url
  array('escape' => false) //le confirm
);  
			 }
echo '</center></h4></td>';	
					
					
					echo '<td style="width:8%" ><h4 style="margin-top:5px;"> <center>';
       
                  echo $this->Form->postLink(
                  $this->Html->image('supp.png', array('alt' => __('Delete'))), //le image
                  array('action' => 'delete', $idor), //le url
                  array('escape' => false),  
                  __('Are you sure to delete the order : %s?', $idstring) //le confirm
                  );  
                  echo '</center></h4></td>';
                }
				
              echo '<td id="tdchkeckbox" style="width:8%;text-align: center;'. $style2.';"><h4><center>';
              echo $this->Form->input('prt',array('type'=>'checkbox','label'=>'??','style'=>'opacity:2!important;float:center;margin-left: 30px!important;','id'=>''.$idor,'name'=>''.$idor  )); 
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
          <button id="three" type="button" class="close" data-dismiss="modal" aria-hidden="true">??</button>
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
          <a href="#" onclick="document.getElementById('OrderTime').value=''; $('#myModal2').modal('hide');" style="border: 1px solid black;margin-right: 40px;" class="btn">Clear</a>
          <a href="#" data-dismiss="modal" style="border: 1px solid black;" class="btn">Close</a>
         </div>
      </div>
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
		
 

</body>
   <script>
   function changedate(){
	   alert('here');
	      selecteddate=document.getElementById('test').value;
	   window.location.replace("http://ordersentry.enterpriseesolutions.com/orders/index/"+selecteddate) ;
   }
  /* $('#changedateform').submit(function(e){
	   selecteddate=document.getElementById('test').value;
   })*/
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
<script>   
	//data table script for multi and uni search
	jQuery(document).ready(function() {
jQuery( function( $) {
	
	var custs= <?php echo json_encode($customersdata3); ?>;
	console.log(custs.length);
var nameee='';
var phoneee='';
//(document).ready(function() {
    // Setup - add a text input to each footer cell
   $('#myTable tfoot th').each( function () {
	     var title = $(this).text();
        if (title.localeCompare('ID') == 0){
        $(this).html( '<center><input id="ID" type="number" style="color:grey;max-width:80px"  type="number" placeholder="'+title+'"  /></center>' );
		
		
		$('input[id="ID"]').keyboard({ layout: 'num2' ,usePreview : false,autoAccept:0,change        : function(e, keyboard, el) { document.getElementById("ID").focus();}
		, position : {    at2: 'center bottom'  },
  });
		}
        if (title.localeCompare('Date') == 0){
        $(this).html( '<center><input id="Date" style="color:grey;max-width:100px;"  placeholder="'+title+'"  /></center>' );
		$('input[id="Date"]').keyboard({ layout: 'num2' ,autoAccept:1,change        : function(e, keyboard, el) { document.getElementById("Date").focus();}
		, position : {    at2: 'center bottom'  },
  })
;
		
		}
      if (title.localeCompare('Time') == 0){
        $(this).html( '<center><input id="Time" style="color:grey;max-width:100px;"  placeholder="'+title+'"  /></center>' );
		$('input[id="Time"]').keyboard({ layout: 'num2' ,usePreview : false,autoAccept:1,change        : function(e, keyboard, el) { document.getElementById("Time").focus();}
		, position : {    at2: 'center bottom'  },
  });

		}
      if (title.localeCompare('CustomerName') == 0){
        $(this).html( '<center><input id="CustomerName" style="color:grey;max-width:80px;"  placeholder="'+title+'"  /></center>' );
		jQuery( function( $) {
		$('input[id="CustomerName"]').keyboard({ layout: 'qwerty' ,usePreview : false,autoAccept:1,change        : function(e, keyboard, el) { document.getElementById("CustomerName").focus();}
		, position : {    at2: 'center bottom'  },
  })
	.autocomplete({
		source: custs
				,
    select: function( event, ui ) {
	
	  	var x = document.getElementsByClassName("ui-keyboard-preview");
		
		//nameee=x[0].value;
	
		 pos=ui.item.value.indexOf('  ');
	//	x[0].value=x[0].value.substr(pos+2);
		phone=ui.item.value.substr(pos+2);
		ui.item.value=ui.item.value.substr(0,pos);
		
	//x[0].value=ui.item.value; 
	//alert(ui.item.value);
		document.getElementById('CustomerName').value=ui.item.value;
		document.getElementById('CustomerPhone').value=phone;
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
		
		  $('input[id="CustomerName"]').change(function() {
	 	   if ((nameee.length > 15)  ){
	pos=nameee.indexOf('  ');
	document.getElementById('CustomerPhone').value=nameee.substr(pos+2);
		  }
});
		});
		}
      if (title.localeCompare('CustomerPhone') == 0){
        $(this).html( '<center><input id="CustomerPhone" style="color:grey;max-width:80px;"  placeholder="'+title+'"  /></center>' );
		
		jQuery( function( $) {
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
		$('input[id="CustomerPhone"]').keyboard({ layout: 'num' ,usePreview : false,autoAccept:1,change        : function(e, keyboard, el) { document.getElementById("CustomerPhone").focus();}
		, position : {    at2: 'center bottom'  },
  })

	
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
	pos=ui.item.value.indexOf('  ');
	//	x[0].value=x[0].value.substr(pos+2);
		name=ui.item.value.substr(pos+2);
		ui.item.value=ui.item.value.substr(0,13);
		
	//x[0].value=ui.item.value; 
	//alert(ui.item.value);
		document.getElementById('CustomerName').value=name;
		document.getElementById('CustomerPhone').value=ui.item.value;
	/*	ui.item.value=ui.item.value.substr(0,13);
		var x = document.getElementsByClassName("ui-keyboard-preview");
			phoneee=x[0].value;
		x[0].value=ui.item.value;*/
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
 /*   $( 'input[id="CustomerPhone"]').change(function() {

	 if (phoneee.length > 13){
	 document.getElementById('CustomerName').value=phoneee.substr(15);
	 document.getElementById('CustomerPhone').value=phoneee.substr(0,13);
	
	 }
}); */
	
	
		});
	}

          
			
   
   });
 
    // DataTable
 var table = $('#myTable').DataTable( {
        "order": [[ 0, "desc" ]],
   dom: 'Blfrtip',
 
	  "columnDefs": [ {
          "targets": 'no-sort',
          "orderable": false,
    } ],
	 
	  buttons: [						 
                    {
                    extend: 'print',
                    text: '????Print',
					className : 'fa fa-print',						
                    exportOptions: {
                    columns: [ 0,1,2,3,4 ]
	
                	}
                    },
                    {
                    extend: 'csv',
                    text: '????Csv',
					className : 'fa fa-file-o',						
                    exportOptions: {
                    columns: [ 0,1,2,3,4]
                	}
                    },
				 {
                    extend: 'excel',
                    text: '????Excel',
					className : 'fa fa-file-excel-o',
                    exportOptions: {
                    columns: [ 0,1,2,3,4 ]
               	}
                    },				
				{
                    extend: 'pdf',
                    text: '????Pdf',
					className : 'fa fa-file-pdf-o',					
                    exportOptions: {
                    columns: [ 0,1,2,3,4 ]
                	}
                    },
				 {
                    extend: 'copy',
                    text: '????Copy',
					className : 'fa fa-copy',					 
                    exportOptions: {
                    columns: [ 0,1,2,3,4 ]
                	}
                  }/*,
		   		{
                    extend: 'colvis',
                    text: '????Columns',
					className : 'fa fa-hand-o-up',	
				}*/
                ]
	 
    } );
  	$('input[type="search"]').ready(function() {
  // Handler for .ready() called.
  //alert('ready');
   $('input[type="search"]').keyboard({ layout: 'qwerty',autoAccept:1 ,usePreview : false,change: function(e, keyboard, el) {

$('input[type="search"]').focus();
	$('input[type="search"]').bind('focus', function () {
                    $('input[type="search"]').triggerHandler('input');
});

   
   }
		, position : {    at2: 'center bottom'  },
  });
 
});
    // Apply the search
    table.columns().every( function () {
        var that = this;
 
        $( 'input', this.footer() ).on( 'keyup change', function () {
		//	alert('keyup');
            if ( that.search() !== this.value ) {
                that
                    .search( this.value )
                    .draw();
            }
        } );
		$( 'input', this.footer() ).on( 'focus', function () {
			//alert('focus');
            if ( that.search() !== this.value ) {
                that
                    .search( this.value )
                    .draw();
            }
        } );
	/*	$('input[type="search"]' ).on( 'focus', function () {
		//	alert('keyup');
            if ( that.search() !== this.value ) {
                that
                    .search( this.value )
                    .draw();
            }
        } );*/
    } );
	


	 

} );	   
} );	   
	   	
	
</script>   
 
	<script>
		var countprint=0; 
	function checkAll(bx) {
	//	alert('here');
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

//$.noConflict();
//jQuery( document ).ready(function( $ ) {
	jQuery(document).ready(function() {
jQuery( function( $) {
 $('.printform').submit(function(e){
	 

	if  (countprint>0) 
	{
	// $(document).ready(function(){
		   e.preventDefault();
title='Warning';	              
content='Order already printed. Print again?';
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
                    buttons: [   { //yes
                                        text: btn1text,
                                        "class": btn1css,height: '50px',width:'100px',
                                        click: function () {
										
											
												getid();
											$("#dialog2").dialog('close'); 
											   $('.ui-dialog').hide();
												
													// $(this).unbind('submit').submit();
                                          
											$( function() {
											document.forms[1].submit(); 
											});
											//$('#OrderPrintordersForm').submit();
										//	window.location.href = "http://ordersentry.enterpriseesolutions.com/orders/printorders";
											  //	alert('yes3');

                                        }
                                    },
									{ //No
                                        text: btn2text,
                                        "class": btn1css,height: '50px',width:'100px',
                                        click: function () {
										//	alert('no');
									   $("#dialog2").dialog('close'); 
											    $('.ui-dialog').hide();
				                      e.preventDefault(); 
                                      countprint=0;
                                        }  }  ]
                });
				//end fct dailog
			//  });
	}
	 });  	
 
 
   } );
  } );
 </script>
	  
	   <style type="text/css">
	   
 		   input[type=checkbox] {cursor:pointer;}
		   input[type=checkbox] {float:center!important;}
#ui-datepicker-div{
  text-align: center;
  width: 390px;
  height:400px;	
	  
}
.ui-button-text{
	
	
    padding-top: 0px;
    padding-left: 15px;
    padding-bottom: 0px;
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
/* updates 08-12 larger autocomplete inputs */
.ui-menu-item-wrapper{max-width:340px;}
.ui-menu-item{max-width:350px;}
.ui-widget {
    font-size: 1.5em!important;
}
	/* end updates */
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

#lblMessage2{    font-size: 150%!important;}

.ui-dialog-titlebar{background:red!important;height:50px!important;}
.ui-dialog-titlebar-close{width:25px!important;height:25px!important;}
 .showcss{ display:inline;}
  .hidecss{ display:none;}
  .ui-button-text{color:black;}
	
/* Updates 08-12 filterform inputs larger*/
  .filterForm td {
    max-width: 200px!important;
}
#OrderCustomerphone {
    width: 182px!important;
}
#OrderCustomername {
    padding-left: 3px!important;
    padding-right: 2px!important;
    width: 185px!important;
}
#OrderDate {
    width: 117px!important;
}
#OrderTime {
    width: 117px!important;
}
#OrderId {
    width: 117px!important;
}
	.form input[type="text"], .form input[type="number"], input[type="date"], input[type="time"] {
    font: 200 18px/30px Arial, Helvetica, sans-serif;
    height: 40px;
    margin: 6px 6px 16px 0px;
}

</style>
<script language='JavaScript'>
$.noConflict();
jQuery( document ).ready(function( $ ) {
 $( ".datepicker" ).datepicker(
  {	 
	   
  dateFormat: "yy-mm-dd" ,
  firstDay: 1 //,regional:["fr"]
} );  
});
</script>

<style>
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
</style>