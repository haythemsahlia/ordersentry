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


<div class="users form index" style="margin-top:-30px">
<h1 class="no-print" style="color:#367FA9">Categories  of Items</h1><img  id="add" style="float:right;margin-left:50px;" src="http://ordersentry.enterpriseesolutions.com/app/webroot/img/add.png"></img>
 
<?php

   //   echo $this->Filter->filterForm('Tache', array('legend' => 'Recherche'));  

   	
?>
 
 
</div>	
 <!-- <script src="//code.jquery.com/jquery-1.10.2.js"></script>
  <script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>-->
   <script language="JavaScript">
 
  $(function() {
 
 $('.dropdown-toggle').dropdown();
   $("#add").click(function() {
  $('#myModal').modal('show');
  });
 
 });
 </script> 
 
<div class="panel panel-default">
    <div class="panel-body">
        <table id="myTable" class="table table-fixedheader table-bordered table-striped">
            <thead style="color:white!important;">
                <tr>
<th style="width:30%"><center><?php echo $this->Paginator->sort('name', 'Name');?>  </center></th>
<th style="width:35%"><center><?php echo $this->Paginator->sort('description', 'description') ;?></center></th>	
<th style="width:20%"><center> <?php echo $this->Paginator->sort('color', 'color') ;?>   </center></th>

   		 <?php if ($this->Session->read('Auth.User.role')=='Admin')
        {echo '<th style="width:15%"><center>Delete</center></th>';} ?>
		</tr>
            </thead>
            <tbody style="height:250px">
                <?php $count=0; ?>
                <?php if (isset($categories)) { ?>
		<?php foreach($categories as $categorie): ?>				
		<?php $count ++;?>
		<?php if($count % 2): echo '<tr>'; else: echo '<tr class="zebra">' ?>
		<?php endif; ?>
		 <td  style="width:30%;text-align: center;"><?php echo $this->Html->link( $categorie['Categorie']['name']  ,   array('action'=>'edit', $categorie['Categorie']['id']),array('escape' => false) );?></td>
		 <td  style="width:35%;text-align: center;"><?php echo $categorie['Categorie']['description'] ; ?></td>
		 <td  style="width:20%;text-align: center;background-color:<?php echo $categorie['Categorie']['color'] ; ?>"></td>
 
   		 <?php if ($this->Session->read('Auth.User.role')=='Admin')
        {echo '<td style="width:15%" ><center>';
  		 	 
		echo $this->Form->postLink(
  $this->Html->image('supp.png', array('alt' => __('Delete'))), //le image
  array('action' => 'delete', $categorie['Categorie']['id']), //le url
  array('escape' => false),  
  __('Are you sure to delete the categorie : %s?', $categorie['Categorie']['name']) //le confirm
);  echo '</center></td>'; }?>
		</tr>
		<?php endforeach; ?>
		<?php unset($categorie);} ?>
             </tbody>
        </table>
 			
    </div>
</div>
 
<div class="modal" id="myModal">
	<div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
		<center><h4 class="modal-title" id="myModalLabel" style="color:#0B8EB6; ;">Add a category </h4></center>        </div><div class="container"></div>
        <div style="margin-left:100px;" class="modal-body form">
 
<?php echo $this->Form->create('Categorie',array('action'=>'add')); ?>
<fieldset></br>
 <table class= 'form'>
<tr><td><label>Name</label></td><td><?php echo $this->Form->input('name' ,array('label'=>'','style'=>' ;margin-left:-2px' ));;?></td></tr>
<tr><td><label>Description</label></td><td><?php echo $this->Form->input('description' ,array('label'=>'','style'=>' ;text-align:left;' ,'type' => 'textarea' ));;?></td></tr>
<tr><td><label>Color</label></td><td><?php echo $this->Form->input('color' ,array('label'=>'','style'=>' ;text-align:left;' ,'type' => 'color' ));;?></td></tr>
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
      $('#CategorieDescription').keyboard({ layout: 'qwerty',autoAccept:1 });
      $('#CategorieName').keyboard({ layout: 'qwerty',autoAccept:1 });
</script >
<style>
.ui-keyboard-button{padding:0px 0px 0px 0px!important;width:80px!important;height:80px!important;
    margin-left: 5px;
    margin-right: 5px;
    margin-bottom: 5px;
    margin-top: 5px;
}
	.ui-keyboard-space {
    width: 250px!important;
    }
</style>