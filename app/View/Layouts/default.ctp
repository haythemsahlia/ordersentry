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
		.dropdown:hover{color:orange;}		</style>
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
    </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
            </nav>
        </header>
             <!-- Left side column. contains the logo and sidebar -->
     

            <!-- Right side column. Contains the navbar and content of the page -->
              <!--<aside class="right-side">
               Content Header (Page header) 
                <section class="content-header">
                    <h1>
                        <small> </small>
                    </h1>
                    <ol class="breadcrumb">
                        <li><a href="http://ordersentry.enterpriseesolutions.com/"><i class="fa fa-map-marker"></i> Home </a><?php /*  echo $this->here; */ ?> </li>
                    <!--     <li><a href="#">Examples</a></li>
                        <li class="active">Blank page</li> 
                    </ol>
                </section> -->

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
 
<?php
     /*   <!-- Sparkline -->
        <?= $this->Html->script('jquery.sparkline.min'); 
        <!-- jvectormap -->
        <?= $this->Html->script('jquery-jvectormap-1.2.2.min'); 
        <?= $this->Html->script('jquery-jvectormap-world-mill-en'); 
        <!-- jQuery Knob Chart -->
        <?= $this->Html->script('jquery.knob'); 
        <!-- daterangepicker -->
		<?= $this->Html->script('daterangepicker'); 
        <!-- datepicker -->
        <?= $this->Html->script('bootstrap-datepicker'); 
		<?= $this->Html->script('icheck.min'); 
        <!-- Bootstrap WYSIHTML5 -->
       	<?= $this->Html->script('bootstrap3-wysihtml5.all.min'); 
        <!-- iCheck -->
		<?= $this->Html->script('icheck.min'); */
      //AdminLTE App ?>
        <!--// $this->Html->script('app');?>
    // $this->Html->script('dashboard');?>

    // $this->Html->script('demo'); ?>
-->

        <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
   
        

    </body>
</html>
