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


<div class="users form index">
<h1 class="no-print" style="color:#367FA9">Users</h1><img  id="add" style="float:right;margin-left:50px;" src="http://ordersentry.enterpriseesolutions.com/app/webroot/img/add.png"></img>
  
 
<?php
    //  echo $this->Filter->filterForm('User', array('legend' => 'Recherche'));  
?>
 
   <script language="JavaScript">
 
  $(function() {
 $('.dropdown-toggle').dropdown();
 
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
<th style="width:20%"><center><?php echo $this->Paginator->sort('username', 'Username');?>  </center></th>
			<th style="width:20%"><center><?php echo $this->Paginator->sort('email', 'E-Mail');?></center></th>
			<th style="width:20%"><center><?php echo $this->Paginator->sort('Nom', 'Last Name');?></center></th>
			<th style="width:15%"><center><?php echo $this->Paginator->sort('Prenom','First Name');?></center></th>
			<th style="width:15%"><center><?php echo $this->Paginator->sort('Qualification','Type');?></center></th>
			<?php if ($this->Session->read('Auth.User.role')=='Admin')
        {echo '<th style="width:10%"><center>Delete</center></th>';} ?>
		</tr>
            </thead>
            <tbody style="max-height:750px">
                <?php $count=0; ?>
		<?php foreach($users as $user): ?>				
		<?php $count ++;?>
		<?php if($count % 2): echo '<tr>'; else: echo '<tr class="zebra">' ?>
		<?php endif; ?>
			 	<td  style="width:20%;text-align: center;"><?php echo $this->Html->link( $user['User']['username']  ,   array('action'=>'edit', $user['User']['id']),array('escape' => false) );?></td>
			<td style="width:20%;text-align: center;"><?php echo $user['User']['email']; ?></td>
			<td style="width:20%;text-align: center;"><?php echo  $user['User']['Nom']; ?></td>
			<td style="width:15%;text-align: center;"><?php echo  $user['User']['Prenom']; ?></td>
			<td style="width:15%;text-align: center;"><?php echo $user['User']['qualification']; ?></td>
				<?php if ($this->Session->read('Auth.User.role')=='Admin')
        {echo '<td style="width:10%" ><center>';
 		 	 
		echo $this->Form->postLink(
  $this->Html->image('supp.png', array('alt' => __('Delete'))), //le image
  array('action' => 'delete', $user['User']['id']), //le url
  array('escape' => false),  
  __('Are yous sure to delete the user: %s?', $user['User']['username']) //le confirm
);  echo '</center></td>'; }?>
		</tr>
		<?php endforeach; ?>
		<?php unset($user); ?>
             </tbody>
        </table>
    </div>
</div>
 
<div class="modal" id="myModal">
	<div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
		<center><h4 class="modal-title" id="myModalLabel" style="color:#0B8EB6; ;">Add a User </h4></center>        </div><div class="container"></div>
        <div style="margin-left:100px;" class="modal-body form">
 
<?php echo $this->Form->create('User',array('action'=>'add')); ?>
<fieldset></br>
 <table class= 'form'> 
<tr><td><label>Username</label></td><td><?php echo $this->Form->input('username',array('label'=>''));?></td></tr>
<tr><td><label>Last Name</label></td><td><?php echo  $this->Form->input('Nom',array('label'=>''));?></td></tr>
<tr><td><label>First Name</label></td><td><?php echo  $this->Form->input('Prenom',array('label'=>' '));?></td></tr>
<tr><td><label>Qualification </label></td><td><?php echo  $this->Form->input('qualification',array('label'=>''));?></td></tr>
<tr><td><label>Email </label></td><td><?php echo  $this->Form->input('email',array('label'=>''));?></td></tr>
<tr><td><label>Password </label></td><td><?php echo  $this->Form->input('password', array('label' => ''));?></td></tr>
<tr><td><label>Password Confirmation</label></td><td><?php echo  $this->Form->input('password_confirm', array('label' => '', 'maxLength' => 255, 'title' => 'Confirmation mot de passe', 'type'=>'password'));?></td></tr>
<tr><td><label>Type </label></td><td><?php echo  $this->Form->input('role', array(
            'options' => array( 'Admin' => 'Admin', 'Simple' => 'Simple')
        ));?></td></tr>
</table>
    </fieldset>
			<?php  
		echo $this->Form->submit('Add ', array('class' => 'form-submit',  'title' => 'Clic here to add') ); 
?>
<?php echo $this->Form->end(); ?>
         </div>
        <div class="modal-footer">
          <a href="#" data-dismiss="modal" class="btn">Close</a>
         </div>
      </div>
    </div>
</div> 


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
<script>
      $('#UserUsername').keyboard({ layout: 'qwerty',autoAccept:1 });
      $('#UserNom').keyboard({ layout: 'qwerty',autoAccept:1 });
      $('#UserPrenom').keyboard({ layout: 'qwerty' ,autoAccept:1});
      $('#UserQualification').keyboard({ layout: 'qwerty',autoAccept:1 });
      $('#UserEmail').keyboard({ layout: 'qwerty',autoAccept:1});
      $('#UserPassword').keyboard({ layout: 'qwerty',autoAccept:1});
      $('#UserPasswordConfirm').keyboard({ layout: 'qwerty',autoAccept:1 });
</script >