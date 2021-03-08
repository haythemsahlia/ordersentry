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
  <!-- select full screen widget css & script (required) -->
  <link href="http://ordersentry.enterpriseesolutions.com/selectfull/bootstrap-fullscreen-select.css" rel="stylesheet">
  <script src="http://ordersentry.enterpriseesolutions.com/selectfull/bootstrap-fullscreen-select.js"></script>

 <body onload="addclr();">
<div class="users form index" style="margin-top:-30px">
<h1 class="no-print" style="color:#367FA9">Items</h1><img  id="add" style="float:right;margin-left:50px;" src="http://ordersentry.enterpriseesolutions.com/app/webroot/img/add.png"></img>
 
 
<?php

   echo $this->Filter->filterForm('Item', array('legend' => 'Search'));  

   	   App::import('Controller', 'Categories');
 $categories = new CategoriesController;
?>
 
  <!-- <script src="//code.jquery.com/jquery-1.10.2.js"></script>
  <script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>-->
   <script language="JavaScript">
 /*$( document ).ready(function() {
    $('.mobileSelect-container').on( "click", '.mobileSelect-control', function(e){
    $('.mobileSelect-savebtn').click();
    //alert('CLICKED 2');
});
});*/
  $(function() {
 $('.dropdown-toggle').dropdown();
 
   $("#add").click(function() {
  $('#myModal').modal('show');
  });

  /*$(".mobileSelect-control").click(function() {
    //$('.mobileSelect-container').css('display','none');
    $(".mobileSelect-savebtn").trigger('click');
  });*/


 });
 </script> 
</div>	
<div class="panel panel-default">

    <div class="panel-body">
        <table id="myTable" class="table table-fixedheader table-bordered table-striped">
            <thead style="color:white!important;">
                <tr>
<th style="width:25%"><center><?php echo $this->Paginator->sort('name', 'Name');?>  </center></th>
<th style="width:25%"><center><?php echo $this->Paginator->sort('categry', 'Category');?>  </center></th>
<th style="width:40%"><center><?php echo $this->Paginator->sort('description', 'Description') ; ?></center></th> 	
 
   			<?php if ($this->Session->read('Auth.User.role')=='Admin')
        {echo '<th style="width:10%"><center>Delete</center></th>';} ?>
		</tr>
            </thead>
            <tbody style="height:250px">
                <?php $count=0; ?>
                <?php if (isset($items)) { ?>
		<?php foreach($items as $item): ?>				
		<?php $count ++;?>
		<?php if($count % 2): echo '<tr>'; else: echo '<tr class="zebra">' ?>
		<?php endif; ?>
		 <td  style="width:25%;text-align: center;"><?php echo $this->Html->link( $item['Item']['name']  ,   array('action'=>'edit', $item['Item']['id']),array('escape' => false) );?></td>
		 <td  style="width:25%;text-align: center;"><?php echo  $categories->CatById( $item['Item']['categorie'] ) ;?></td>
		 <td style="width:40%;text-align: left;"><?php echo  $item['Item']['description']?> </td> 
 
   				<?php if ($this->Session->read('Auth.User.role')=='Admin')
        {echo '<td style="width:10%" ><center>';
 	 	 
		echo $this->Form->postLink(
  $this->Html->image('supp.png', array('alt' => __('Delete'))), //le image
  array('action' => 'delete', $item['Item']['id']), //le url
  array('escape' => false),  
  __('Are you sure to delete the item : %s?', $item['Item']['name']) //le confirm
);  echo '</center></td>'; }?>
		</tr>
		<?php endforeach; ?>
		<?php unset($item);} ?>
             </tbody>
        </table>
 
 				
    </div>
</div>
 
 <div class=" form">
 
<?php
 App::import('Controller', 'Categories');
 $categories = new CategoriesController;
 // Liste Misions 
 $options=$categories->ListeCategories();
 ?>
 
 

<div class="modal" id="myModal">
	<div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
		<center><h4 class="modal-title" id="myModalLabel" style="color:#0B8EB6; ;">Add an Item </h4></center>        </div><div class="container"></div>
        <div style="margin-left:100px;" class="modal-body form">
 
<?php echo $this->Form->create('Item',array('action'=>'add')); ?>
<fieldset></br>
 <table class= 'form'>
<tr><td><label>Category</label></td><td><?php echo $this->Form->select('categorie' ,$options ,array('required'=>'required','label'=>'','style'=>' ;margin-left:-2px', 'class' => 'form-control mobileSelect','id'=>'categitem',"data-btntext-save"=>"Select"));;?></td></tr>
<tr><td><label>Name</label></td><td><?php echo $this->Form->input('name' ,array('required'=>'required','label'=>'','style'=>' ;margin-left:-2px' ));;?></td></tr>
<tr><td><label>Description</label></td><td><?php echo $this->Form->input('description' ,array('label'=>'','style'=>' ;text-align:left;' ,'type' => 'textarea' ));;?></td></tr>
 </table>
  <?php  		echo $this->Form->submit('Add', array('class' => 'form-submit', 'onclick'=>'verif()', 'title' => 'Clic here to add    ') ); ?>
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
   function addclr(){
	$('#ItemFilter table tr:last').append('<td><input type="submit" value="CLR" onclick="btnclr();" style="background:#3c8dbc!important;color:white; margin-top: 30px;    padding-top: 8px;padding-bottom: 8px;font-size: 16px!important;"/></td>');
	
}
function btnclr(){
	document.getElementById('ItemCategorie').value="";
	}
   function verif(){
	   if (document.getElementById('ItemDescription').value=="")
	   {
		  document.getElementById('ItemDescription').value=document.getElementById('ItemName').value; 
	   }
   }
   </script>
   <script>
      $('#ItemName').keyboard({ layout: 'qwerty',autoAccept:1 });
      $('#ItemDescription').keyboard({ layout: 'qwerty',autoAccept:1 });
       $('#categitem').mobileSelect();
      //data-btntext-save="Save this man!"
      $('#ItemCategorie').attr("data-btntext-save","Select");
      $('#ItemCategorie').mobileSelect();
       /*$('.mobileSelect-container').on( "click", '.mobileSelect-control', function(e){
          $('.mobileSelect-savebtn').click();
        });*/
       /*$(".mobileSelect-control").click(function() {
    //$('.mobileSelect-container').css('display','none');
    //$(".mobileSelect-savebtn").trigger('click');
  });
    }*/ 

$(".mobileSelect-container").on("added-class", function() {
    
    $('.mobileSelect-savebtn').click();
    $('.mobileSelect-savebtn').on("click",function() {
  $('#ItemCategorie').mobileSelect('refresh');
  $('#ItemCategorie').mobileSelect('hide');
  });
   // $(".mobileSelect").mobileSelect('hide');

});
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