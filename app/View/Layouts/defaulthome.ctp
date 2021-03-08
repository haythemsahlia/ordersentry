<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title><?php echo $title_for_layout; ?></title>
        <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
        <link href="//cdnjs.cloudflare.com/ajax/libs/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
        <!-- Ionicons -->
        <link href="//code.ionicframework.com/ionicons/1.5.2/css/ionicons.min.css" rel="stylesheet" type="text/css" />
        <!-- Theme style -->
        <?= $this->Html->css('AdminLTE');?>
      <!-- --> <?= $this->Html->css('datepicker3');?>
        <?= $this->Html->css('daterangepicker-bs3');?> 
        <?= $this->Html->css('bootstrap.min');?> 
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
          <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
        <![endif]-->
		<?php
		echo $this->Html->meta('icon');
		echo $this->Html->css('cake.generic');
		echo $this->fetch('meta');
		echo $this->fetch('css');
		echo $this->fetch('script'); ?>
		<style>.dropdown span,.dropdown i  :hover{color:white!important;font-weight:bold;}
		.dropdown:hover{color:orange;}		
		
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
    </head>
    <body class="skin-blue" style="background-color:#f9f9f9">
        <!-- header logo: style can be found in header.less -->
 <header class="main-header no-print" >
  <nav class="navbar navbar-static-top">
    <div class="container-fluid">
    <div class="navbar-header">
      <a  style="width:200px"  href="<?php echo Router::url('/') ?>" class="navbar-brand"  ><b style="color:white;font-family:'Kaushan Script', cursive;">Orders App</b></a>
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse">
        <i class="fa fa-bars"></i>
      </button>
    </div>
    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="navbar-collapse">
      <ul class="nav navbar-nav">
        <li class="dropdown"><a href="<?php echo Router::url('/') ?>"> <i class="fa fa-home"> </i> <span>  Home  </span></a></li>
         <li class="dropdown">
          <a href="<?php echo Router::url('/') ?>orders"  ><i class="fa fa-book"> </i> <span>  Orders  </span></a>
 </li>
 <li class="dropdown">
   <a href="<?php echo Router::url('/') ?>products"    ><i class="fa fa-shopping-cart"> </i> <span>  Products  </span></a>
 </li>
 <li class="dropdown">
		<a href="<?php echo Router::url('/') ?>categories"   ><i class="fa fa-tags"> </i> <span>  Categories  </span></a>
 </li><li class="dropdown">
<a href="<?php echo Router::url('/') ?>items"   ><i class="fa fa-coffee"> </i> <span>  Items  </span></a>
  </li><li class="dropdown">
<a href="<?php echo Router::url('/') ?>customers"  ><i class="fa fa-users"> </i> <span>  Customers  </span></a>
 </li>	 			
<li class="dropdown">
<a href="<?php echo Router::url('/') ?>users"   ><i class="fa fa-gears"> </i> <span>  Parameters  </span></a>
 </li>	 		
      </ul>
      <!--<form class="navbar-form navbar-left" role="search">
        <div class="form-group">
          <input type="text" class="form-control" id="navbar-search-input" placeholder="Search">
        </div>
      </form>-->
      <ul class="nav navbar-nav navbar-right">
       <!-- <li><a href="#"></a></li>-->
	   <li class="dropdown user user-menu">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <i class="fa fa-user"></i>
                                <span> <?php echo $this->Session->read('Auth.User.username') ; ?><i class="caret"></i></span>
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
    </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
            </nav>
        </header>
                <!-- Main content -->
                <section class="content">

	<div id="container">
		<!--<div id="header">
		</div>-->
		<div id="content" style="height:100%!important">
 
			<center><div id="flashMessages" class="no-print"><?php echo $this->Session->flash(); ?></div></center>
			<?php echo $this->fetch('content'); ?>

		</div>

	</div>
                </section><!-- /.content -->
            <!-- /.right-side </aside> -->
        </div><!-- ./wrapper -->
 

        <script src="//ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
        <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js" type="text/javascript"></script>
        <script src="//code.jquery.com/ui/1.11.1/jquery-ui.min.js" type="text/javascript"></script>
 
    </body>
</html>
