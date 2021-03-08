<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title><?php echo $title_for_layout; ?></title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
        <!-- <script src="//ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>-->


	<!--<p $this->Html->css('datepicker3');?>
  php $this->Html->css('daterangepicker-bs3');?> -->
	<?php 
   ///	 App::import('Controller', 'Profiles');
 ///  $Profiles = new ProfilesController;
 $admin=$this->Session->read('Auth.User.role')=='Admin';
 	?>
	
<style>

	
	#myTable_filter{width:100%;float:right;margin-top:5px;}
/*** align export buttons right */	
div.dt-buttons {
    float: right;
    margin-left:10px;
}
	tfoot input {text-align:center !important;}	
	
	
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
	
 	<!--	<script src="//cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script> 
	<script src="//cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.32/pdfmake.min.js"></script>
	<script src="//cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.32/vfs_fonts.js"></script> 
	 -->
  <link href="http://sales.enterpriseesolutions.com/Gentella/css/bootstrap.min.css" rel="stylesheet" type="text/css" />

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">

  <link href="http://directories.enterpriseesolutions.com/Gentella/css/green.css" rel="stylesheet" type="text/css" />
 	 
    <?php // echo $this->Html->css('Gentelella./css/maps/jquery-jvectormap-2.0.3'); ?>
  <link href="http://directories.enterpriseesolutions.com/Gentella/css/custom.css" rel="stylesheet" type="text/css" />
  <link href="http://directories.enterpriseesolutions.com/Gentella/css/custom.min.css" rel="stylesheet" type="text/css" />

    <?php echo $this->fetch('css'); ?>


</head>
<body class="nav-sm  footer_fixed" style=" margin: 0;padding_right 0px;" ng-app="">
<div class="container body">
    <div class="main_container">
        <!-- Left side column. contains the sidebar -->
    <div class="col-md-3 left_col">
        <div class="left_col scroll-view">
            <div class="navbar nav_title" style="border: 0;">
                <a href="<?php echo  Router::url('/'); ?>" class="site_title"><?php  // echo $this->Html->image('med02.png',array('style'=>'width:150px;margin-left:10px;'));  ?><!--<i class="fa fa-home"></i> <span>Med Flavour</span>--></a>
            </div>

            <div class="clearfix"></div>


            <!-- Sidebar user panel -->
    <!-- menu profile quick info -->
    <div class="profile" style="paddig-bottom:20px;margin-bottom:20px;">
        <div class="profile_pic">
            <?php  echo $this->Html->image('avatar5.png', array('class' => 'img-circle profile_img', 'style'=>'max-width:50px')) ?>
        </div>
        <div class="profile_info">
            <span>  <?php
                echo    $this->Session->read('Auth.User.username') ;

                ?></span>           

            <h2></h2>
        </div>
    </div>
    <!-- /menu profile quick info -->
            <br /> <br /> <br />
            <!-- sidebar menu: : style can be found in sidebar.less -->
        <!-- sidebar menu -->
    <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
        <div class="menu_section">
           <!-- <h3>General</h3>  -->
            <ul class="nav side-menu">
		         <li><a href="<?php echo  Router::url('/') ; ?>"><i class="fa fa-home"></i> Home  </a></li>
		         <li><a href="<?php echo  Router::url('/').'orders' ; ?>"><i class="fa fa-book"></i> Orders  </a></li>
		         <li><a href="<?php echo  Router::url('/').'products' ; ?>"><i class="fa fa-shopping-cart"></i> Products  </a></li>
		         <li><a href="<?php echo  Router::url('/').'categories' ; ?>"><i class="fa fa-tags"></i> Categories  </a></li>
		         <li><a href="<?php echo  Router::url('/').'items' ; ?>"><i class="fa fa-coffee"></i> Items  </a></li>
		         <li><a href="<?php echo  Router::url('/').'customers' ; ?>"><i class="fa fa-users"></i> Customers  </a></li>
		         <li><a href="<?php echo  Router::url('/').'users' ; ?>"><i class="fa fa-gears"></i> Parameters  </a></li>
				
      </ul>

			
        </div>

    </div>
     
	</div>
    </div>
        <!-- Header Navbar: style can be found in header.less -->

    <!-- top navigation -->
    <div class="top_nav">
        <div class="nav_menu">
            <nav class="" role="navigation">
                <div class="nav toggle">
                    <a id="menu_toggle"><i class="fa fa-bars"></i></a>
                </div>

                <ul class="nav navbar-nav navbar-right">
                    <li class="">
                        <a href="javascript:;" class="user-profile dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                            <?php   echo  $this->Html->image('avatar5.png')  ;?>
                            <?php
                                echo    $this->Session->read('Auth.User.username') ; ;
 
                                ?>
                            <span class=" fa fa-angle-down"></span>
                        </a>
                        <ul class="dropdown-menu dropdown-usermenu pull-right">
                            <li>
                                <a href="<?php echo  Router::url('/'); ?>">
                                   <!-- <span class="badge bg-red pull-right">50%</span>-->
                                    <span><i class="fa fa-home pull-right"></i> Home </span>
                                </a>
                            </li>
							<li><a href="<?php echo  Router::url('/').'users/profile' ?>"><i class="fa fa-user pull-right"></i> Profile </a></li>

                         <!--   <li><a href="#"> Help </a></li>-->
                            <li><a href="<?php echo  Router::url('/').'logout' ?>"><i class="fa fa-sign-out pull-right"></i> Log Out</a></li>
                        </ul>
                    </li>

         
                     
                    </li>
                </ul>
            </nav>
        </div>
    </div>
    <!-- /top navigation -->

	<!-- page content -->
        <div class="right_col" role="main"    style="/*height:100%!important;*/">
           
            <?php echo $this->fetch('content'); ?>
        </div>
        <!-- /page content -->

    </div>
</div>

<!-- jQuery 2.1.4 -->
<!--<script src="http://directories.enterpriseesolutions.com/Gentella/js/jquery.min.js" ></script>-->
 

  <!---------------- Datatables  -->
 <script src="https://colorlib.com/polygon/vendors/datatables.net/js/jquery.dataTables.min.js"></script>
    <script src="https://colorlib.com/polygon/vendors/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
    <script src="https://colorlib.com/polygon/vendors/datatables.net-buttons/js/dataTables.buttons.min.js"></script>
    <script src="https://colorlib.com/polygon/vendors/datatables.net-buttons-bs/js/buttons.bootstrap.min.js"></script>
    <script src="https://colorlib.com/polygon/vendors/datatables.net-buttons/js/buttons.flash.min.js"></script>
    <script src="https://colorlib.com/polygon/vendors/datatables.net-buttons/js/buttons.html5.min.js"></script>
    <script src="https://colorlib.com/polygon/vendors/datatables.net-buttons/js/buttons.print.min.js"></script>
 
	
<!-- <script src="http://sales.enterpriseesolutions.com/Gentella/js/custom.min.js" ></script> -->

<?php echo $this->fetch('script'); ?>
<?php   echo $this->fetch('scriptBottom'); ?>



</body>
</html>
<style>
	
.no-sort::after { display: none!important; }
.no-sort { pointer-events: none!important; cursor: default!important; }
	
	input , select,textarea{color:#000000;}
	/*#myTable_filter label{font-weight:bold;color:#1ABB9C;padding-right:10px!important;}
	#myTable_filter input{font-weight:bold;color:#000000;}
	*/
	select {max-height:26px!important;}
	/*#myTable{background-color:white;}*/
	th ,th a  {color:#ffffff;font-weight:bold;text-align:center;}
	th a:hover{color:#ffffff;}
	#debug-kit-toolbar{display:none;}
	img {cursor:pointer;}
	td a {/*color:#df1d46!important; 
	      text-decoration: underline; color:#48525c;font-weight:bold;*/}
	a{cursor:pointer;}
	td a {text-decoration:underline;}/*
	input [type=submit],button .submit{color:white;background-color:#bc9611!important;min-height:20px;min-width:60px;}
	h1 {color:#bc9611!important;}*/ 
 
	body {
    color: #48525c;
    background: #2A3F54;
    font-family: "Helvetica Neue", Roboto, Calibri, "Droid Sans", sans-serif;
    font-size: 14px;
    font-weight: 100;
    line-height: 1.471;
	
	}

		#Find {
    background: no-repeat url('http://sales.enterpriseesolutions.com/img/find4.png') 0 0;
    width: 50px;
     height: 38px; 
    /* margin-left: 80px; */
    margin-right: 0px;
    padding-right: 0px;
    border: 0;
    color: transparent;
    margin-top: 20px;
    margin-bottom: 0px;
    padding-right: 69px;
    padding-left: 0px;
}
	/*textarea{max-width:180px;}*/
	img	#add {
    background: no-repeat url("http://sales.enterpriseesolutions.com/app/webroot/img/addplus.png") 0 0;
    color: transparent;  
			border: 0;
		}
/*** ---------- BIG ----------------***/
	@media (min-width: 1024px) {
		.filterForm input, .filterForm select {margin-left:5px;}	
		th {font-weight:bold;font-size:15px;}

	}
		@media  (width > 1280px)    {
			.filterForm input, .filterForm select {margin-left:5px;} 
			th   {font-weight:bold;font-size:15px;}
		}
	
	
/**** ----------------------- S M A L L  ---  D E V I C E S ------------------------****/	
	@media  (max-width: 1280px)  /*** 150 % ***/  {
		 #add {max-width:80px!important;}
		h1{font-size:20px;}
 td img{max-width:20px!important;}
table input, 	
 {
 max-width:60px;
 font-size:12px;
 }
 textarea 
 {
	 max-width:70px;max-height:60px;font-size:12px;
 }
	
select {
    width: 60px;
    font-size: 12px;

}
#Find {
	background: no-repeat url('http://sales.enterpriseesolutions.com/img/findsm.png') 0 0;
	height:30px;margin-left:0px;}
		
	.filterForm ,#myTable{max-width:580px!important;}
	.hidemobile{display:none;}	

	th {font-size:12px;}
	 #ordertable td{font-size:12px;}
		.form-submit{padding:5px 5px;}	
		
 .QTY {
 max-width:40px;
 font-size:10px;
 }
 td{font-size:12px;}
.panel-body{padding:0px!important;} 
#SearchExpire{font-size:12px;max-width:80px;}
		input [type="search"] {max-width:80px!important;}
		
		
}/***************************************************************/
	@media (max-width: 1024px) /***     ***/  {
		 #add {max-width:80px!important;}
		
 td img{max-width:20px!important;}
		h1{font-size:20px;}

		#piechart_3d{max-width:300px!important;}

	}
	
/*****************************************************************/	
	@media (max-width: 1100px) /*** 175 % ***/  {
		 td img{max-width:25px!important;}
		h1{font-size:20px;}
		 #add {max-width:80px!important;}

table input, 	
 {
 max-width:60px;
 font-size:10px;
 }
 textarea 
 {
	 max-width:90px;max-height:60px;font-size:10px;
 }
	
select {
    width: 60px;
    font-size: 9px;
   /* max-height: 19px;*/
}
#Find {
	background: no-repeat url('http://sales.enterpriseesolutions.com/img/findsm.png') 0 0;
	height:30px;margin-left:0px;}
		
		
	.filterForm , #myTable{max-width:580px!important;}
	.hidemobile{display:none;}	

 	.form-submit{padding:5px 5px;}	
	
	 .QTY {
 max-width:40px;
 font-size:10px;
 }
		th ,td{font-size:10px;}
	#OrderTime , label[for='OrderTime']{ display:none;}
.panel-body{padding:0px!important;} 
#SearchExpire{font-size:10px;max-width:80px;}
		input [type="search"] {max-width:80px!important;}

}/**************************************************************************/
	
	
@media (min-width: 768px) and (max-width: 980px) {
 img #add {width:60px!important;}
 td img{max-width:20px!important;}
		h1{font-size:20px;}

	#piechart_3d{max-width:800px!important;}
table input, 	
 {
 max-width:60px;
 font-size:10px;
 }
 textarea 
 {
	 max-width:70px;max-height:60px;font-size:10px;
 }
	
select {
    width: 60px;
    font-size:10px;
   /* max-height: 19px;*/
}
#Find {
	background: no-repeat url('http://sales.enterpriseesolutions.com/img/findsm.png') 0 0;
	height:30px;margin-left:0px;}
		
			
	.filterForm ,#myTable{max-width:700px!important;}
	.hidemobile{display:none;}	

	th {font-size:10px;}
	 #ordertable td{font-size:10px;}
	.form-submit{padding:5px 5px;}	
	
	 .QTY {
 		max-width:40px;
 		font-size:10px;
		 }
		th ,td{font-size:10px;}
	#OrderTime , label[for='OrderTime']{ display:none;}
.panel-body{padding:0px!important;} 
#SearchExpire{font-size:10px;max-width:80px;}
input [type="search"] {max-width:80px!important;}

	
}/*************************************************************************/
 
@media (min-width: 480px) and (max-width: 767px) {
 img #add {width:60px!important;}

 td img{max-width:20px!important;}
		h1{font-size:20px;}

	#piechart_3d{max-width:700px!important;}
	
table input, 	
 {
 max-width:60px;
 font-size:10px;
 }
  textarea 
 {
	 max-width:70px;max-height:60px;font-size:10px;
 }

 select {
    width: 60px;
    font-size:10px;
  /*  max-height: 19px;*/
}
	
#Find {
	background: no-repeat url('http://sales.enterpriseesolutions.com/img/findsm.png') 0 0;
	height:30px;margin-left:0px;}
		
		
	.filterForm ,#myTable{max-width:700px!important;}
	.hidemobile{display:none;}	
  	.form-submit{padding:5px 5px;}	
	
 .QTY {
 max-width:40px;
 font-size:10px;
 }
		th ,td{font-size:10px;}
	#OrderTime , label[for='OrderTime']{ display:none;}
.panel-body{padding:0px!important;} 
#SearchExpire{font-size:10px;max-width:80px;}
 	input [type="search"] {max-width:80px!important;}


}/************/
 
@media (max-width:767px){
 img #add {width:60px!important;}

	 td img{max-width:25px!important;}
		h1{font-size:20px;}

#piechart_3d{max-width:700px!important;}
	
table input, 	
 {
 max-width:60px;
 font-size:10px;
 }
	
   textarea 
 {
	 max-width:80px;max-height:60px;font-size:10px;
 }
	
select {
    width: 60px;
    font-size:10px;
 /*   max-height: 19px;*/
}

#Find {
	background: no-repeat url('http://sales.enterpriseesolutions.com/img/findsm.png') 0 0;
	height:30px;margin-left:0px;}
		
		
	.filterForm ,#myTable{max-width:700px!important;}
	.hidemobile{display:none;}	
	th,td {font-size:10px;}
 	.form-submit{padding:5px 5px;}	
	#OrderTime , label[for='OrderTime']{ display:none;}
.panel-body{padding:0px!important;} 
#SearchExpire{font-size:10px;max-width:80px;}
		input [type="search"] {max-width:80px!important;}

}/*******************************************************************************************/
 
@media (max-width: 479px) {
 img #add {width:60px!important;}

 td img{max-width:20px!important;}

	#piechart_3d{max-width:400px!important;}
	
table input, 	
 {
 max-width:60px;
 font-size:10px;
 }
	
   textarea 
 {
	 max-width:70px;max-height:60px;font-size:10px;
 }
	
select {
    width: 60px;
    font-size:10px;
 /*   max-height: 19px;*/
}

#Find {
	background: no-repeat url('http://sales.enterpriseesolutions.com/img/findsm.png') 0 0;
	height:30px;margin-left:0px;}
		
		
	.filterForm ,#myTable{max-width:400px!important;}
	.hidemobile{display:none;}	
	th,td {font-size:10px;}

	.form-submit{padding:5px 5px;}	
    .QTY {
 		max-width:40px;
 		font-size:10px;
 		}
	#OrderTime , label[for='OrderTime']{ display:none;}
.panel-body{padding:0px!important;} 
#SearchExpire{font-size:10px;max-width:80px;}
		input [type="search"] {max-width:80px!important;}
}/************/
 

  .form-submit{
 line-height:100%;
cursor:pointer; /*forces the cursor to change to a hand when the button is hovered*/
padding:5px 25px; /*add some padding to the inside of the button*/
background:#1ABB9C; /*the colour of the button*/
border:1px solid #33842a; /*required or the default border for the browser will appear*/
/*give the button curved corners, alter the size as required*/
-moz-border-radius: 10px;
-webkit-border-radius: 10px;
border-radius: 10px;
/*give the button a drop shadow*/
-webkit-box-shadow: 0 0 4px rgba(0,0,0, .75);
-moz-box-shadow: 0 0 4px rgba(0,0,0, .75);
box-shadow: 0 0 4px rgba(0,0,0, .75);
/*style the text*/
color:#f3f3f3;
font-size:1.1em;
}	
	
	
table{border-bottom-color:rgb(221, 221, 221);
	border-bottom-style:solid;
border-bottom-width:2px;
border-collapse:collapse;
border-top-color:rgb(115, 135, 156);
border-top-style:none;
border-top-width:0px;
box-sizing:border-box;
color:rgb(115, 135, 156);
}
	
	#myModal td input {margin-left:6px;margin-bottom:12px;}
	
	#myTable_filter label {
    font-weight: bold;
    color: #1ABB9C;
    padding-right: 10px!important;
}
	
	input,textarea {font-weight:bold;}
	#myTable_filter input{max-width:80px;}
	
	</style>
	
	