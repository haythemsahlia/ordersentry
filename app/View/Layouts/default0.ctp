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
    </head>
    <body class="skin-blue">
        <!-- header logo: style can be found in header.less -->
        <header class="header">
            <a href="http://temps.comptaffaires.org" class="logo">
                <!-- Ajout the class icon to your logo image or logo icon to Ajout the margining -->
                Fiches Temps
            </a>
            <!-- Header Navbar: style can be found in header.less -->
            <nav class="navbar navbar-static-top" role="navigation">
                <!-- Sidebar toggle button-->
 <style>
.flag:hover,.flag:active,.flag:focus,.flag:hover {background: rgba(0, 0, 0, 0.1);}
.flag{position: relative;
display: block;
pAjouting: 15px 15px;
height: 50px;
width:50px;
cursor: pointer
}
 
</style>
                <a href="#" class="navbar-btn sidebar-toggle" data-toggle="offcanvas" role="button">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </a>
                <div class="navbar-right">
                    <ul class="nav navbar-nav"><!--Traductions  
                       <li class=" messages-menu"><i class="fa flag"  title="Français"> 
         <?php  /* echo $this->Html->link($this->Html->image('fr.png'), array('language'=>'fra'), array('escape' => false));?> </i>
                        </li>
                       <li class=" messages-menu"><i class="fa flag" title="English"> 
         <?php   echo $this->Html->link($this->Html->image('en.png'), array('language'=>'eng'), array('escape' => false));*/ ?> </i>
                        </li>             -->           
                         <!-- Messages: style can be found in dropdown.less
                        <li class=" messages-menu">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <i class="fa  "><img src="http://temps.comptaffaires.org/app/webroot/img/fr.png" /></i>
                             </a>
                         </li>
                        <!-- Utilisateur Account: style can be found in dropdown.less -->
                        <li class="dropdown user user-menu">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <i class="fa fa-user"></i>
                                <span> <?php echo $this->Session->read('Auth.User.username') ; ?><i class="caret"></i></span>
                            </a>
                            <ul class="dropdown-menu">
                                <!-- user image -->
                                <li class="user-header bg-light-blue">
								<img src="http://temps.comptaffaires.org/img/avatar5.png" class="img-circle" alt="user Image" />   
                                    <p>
                                        <?php echo $this->Session->read('Auth.User.username') ;?>  </br>
                                      
                                        <small><?php echo __('Member since');?> <?php echo substr( $this->Session->read('Auth.User.created'),0,10) ;?> </small>
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
                                        <a href="#" class="btn btn-default btn-flat"><?php echo __('Profile');?> </a>
                                    </div>
                                    <div class="pull-right">
                                        <a href="http://temps.comptaffaires.org/logout" class="btn btn-default btn-flat"><?php echo __('Sign out');?></a>
                                    </div>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </nav>
        </header>
        <div class="wrapper row-offcanvas row-offcanvas-left">
            <!-- Left side column. contains the logo and sidebar -->
            <aside class="left-side sidebar-offcanvas">
                <!-- sidebar: style can be found in sidebar.less -->
                <section class="sidebar">
                    <!-- Sidebar user panel -->
                    <div class="user-panel">
                        <div class="pull-left image">
                           <?php /* echo  '<img  class="img-circle" alt="user Image" src="http://temps.comptaffaires.org/app/webroot'.  $this->Session->read('Auth.User.thumb') .'" ></img>'; */ ?>
                          <img  class="img-circle" alt="user Image" src="http://localhost/Temps/app/webroot/img/avatar5.png" ></img>
                        </div>
                        <div class="pull-left info">
                            <p><div style="font-size:12px"><?php echo __('Hello');?>, <?php echo $this->Session->read('Auth.User.username') ; ?></div></p>
                            <a href="#"><i class="fa fa-circle text-success"></i> <?php echo __('Online');?></a>
                        </div>
                    </div>
                    <!-- search form 
                    <form action="#" method="get" class="sidebar-form">
                        <div class="input-group">
                            <input type="text" name="q" class="form-control" placeholder="Search..."/>
                            <span class="input-group-btn">
                                <button type='submit' name='seach' id='search-btn' class="btn btn-flat"><i class="fa fa-search"></i></button>
                            </span>
                        </div>
                    </form>-->
					
                    <!-- /.search form -->
                    <!-- sidebar menu: : style can be found in sidebar.less -->
                    <ul class="sidebar-menu">
                        <li>
                            <a href="http://temps.comptaffaires.org">
                                <i class="fa fa-home"></i> <span><?php echo __('Home');?></span>
                            </a>
                        </li>
                        <li class="treeview">
                            <a href="#">
                                <i class="fa fa-gears"></i> <span><?php echo __('Parameters');?></span>
                                <i class="fa fa-angle-left pull-right"></i>
                            </a>
                            <ul class="treeview-menu">
                                <li><a href="http://temps.comptaffaires.org/Users"><i class="fa fa-angle-double-right"></i><?php echo __('Liste Utilisateurs');?></a></li>
                                <li><a href="http://temps.comptaffaires.org/Users/Ajout"><i class="fa fa-angle-double-right"></i><?php echo __('Ajout Utilisateur');?> </a></li>
                            </ul>
                        </li>
                        <li class="treeview">
                            <a href="#">
                                <i class="fa fa-male"></i>
                                <span><?php echo __(' Intervenants');?></span>
                                <i class="fa fa-angle-left pull-right"></i>
                            </a>
                            <ul class="treeview-menu">
                                <li><a href="http://temps.comptaffaires.org/Intervenants"><i class="fa fa-angle-double-right"></i><?php echo __(' Liste Intervenants');?></a></li>
                                <li><a href="http://temps.comptaffaires.org/Intervenants/Ajout"><i class="fa fa-angle-double-right"></i><?php echo __('Ajout Intervenant');?> </a></li>
                                
                            </ul>
                        </li>
                        <li class="treeview">
                            <a href="#">
                                <i class="fa fa-book"></i>
                                <span><?php echo __('Dossiers');?></span>
                                <i class="fa fa-angle-left pull-right"></i>
                            </a>
                            <ul class="treeview-menu">
                                <li><a href="http://temps.comptaffaires.org/Dossiers"><i class="fa fa-angle-double-right"></i><?php echo __('Listee Dossiers');?> </a></li>
                                <li><a href="http://temps.comptaffaires.org/Dossiers/Ajout"><i class="fa fa-angle-double-right"></i><?php echo __('Ajout Dossier');?> </a></li>
                        </li>
                              
                    </ul>
                </section>
                <!-- /.sidebar -->
            </aside>

            <!-- Right side column. Contains the navbar and content of the page -->
            <aside class="right-side">
                <!-- Content Header (Page header) 
                <section class="content-header">
                    <h1>
                        <small> </small>
                    </h1>
                    <ol class="breadcrumb">
                        <li><a href="http://temps.comptaffaires.org/"><i class="fa fa-map-marker"></i> Home </a><?php /*  echo $this->here; */ ?> </li>
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
            </aside><!-- /.right-side -->
        </div><!-- ./wrapper -->
 
        <script src="//ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
        <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js" type="text/javascript"></script>
        <script src="//code.jquery.com/ui/1.11.1/jquery-ui.min.js" type="text/javascript"></script>

        <!-- Sparkline -->
        <?= $this->Html->script('jquery.sparkline.min');?>
        <!-- jvectormap -->
        <?= $this->Html->script('jquery-jvectormap-1.2.2.min');?>
        <?= $this->Html->script('jquery-jvectormap-world-mill-en');?>
        <!-- jQuery Knob Chart -->
        <?= $this->Html->script('jquery.knob');?>
        <!-- daterangepicker -->
		<?= $this->Html->script('daterangepicker');?>
        <!-- datepicker -->
        <?= $this->Html->script('bootstrap-datepicker');?>
		<?= $this->Html->script('icheck.min');?>
        <!-- Bootstrap WYSIHTML5 -->
       	<?= $this->Html->script('bootstrap3-wysihtml5.all.min');?>
        <!-- iCheck -->
		<?= $this->Html->script('icheck.min');?>
        <!-- AdminLTE App -->
        <?= $this->Html->script('app');?>

        <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
        <?= $this->Html->script('dashboard');?>

        <?php $this->Html->script('demo'); ?>

    </body>
</html>
