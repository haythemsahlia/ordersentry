<?php $cakeDescription = __d('cake_dev', 'CakePHP: the rapid development php framework');
$cakeVersion = __d('cake_dev', 'CakePHP %s', Configure::version()) ; ?>

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
<header class="main-header">
  <nav class="navbar navbar-static-top">
    <div class="container-fluid">
    <div class="navbar-header">
      <a href=href="http://temps.comptaffaires.org/ class="navbar-brand"  ><b style="color:white;font-family:'Kaushan Script', cursive;">Fiches Temps</b></a>
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse">
        <i class="fa fa-bars"></i>
      </button>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="navbar-collapse">
      <ul class="nav navbar-nav">
        <li class="active"><a href="#"<i class="fa fa-home"> </i> <span>  Accueil  </span></a></li>
         <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-calendar"> </i> <span>  Fiches  </span></a>
          <ul class="dropdown-menu" role="menu">
           <?php if ($this->Session->read('Auth.User.role')=='Admin')
								{ echo '<li><a href="http://temps.comptaffaires.org/fiches/toutes"><i class="fa fa-angle-double-right"></i>Toutes Les Fiches</a></li>';}?>
                                    <li class="divider"></li><li><a href="http://temps.comptaffaires.org/fiches"><i class="fa fa-angle-double-right"></i>  Mes Fiches </a></li>
                                    <li class="divider"></li><li><a href="http://temps.comptaffaires.org/fiches/add"><i class="fa fa-angle-double-right"></i>  Ajout Fiche </a></li>
			</ul></li><li class="dropdown">
		<a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-gears"> </i> <span>  Paramètres  </span></a>
          <ul class="dropdown-menu" role="menu">
                                    <li class="divider"></li><li><a href="http://temps.comptaffaires.org/users/profile"><i class="fa fa-angle-double-right"></i>  Profil </a></li>
         	</ul></li><li class="dropdown">
<a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-folder"> </i> <span>  Dossiers  </span></a>
          <ul class="dropdown-menu" role="menu">
                                    <li><a href="http://temps.comptaffaires.org/dossiers"><i class="fa fa-angle-double-right"></i>  Dossiers </a></li><li class="divider">
                                   <?php if ($this->Session->read('Auth.User.role')=='Admin')
								{ echo '<li><a href="http://temps.comptaffaires.org/dossiers"><i class="fa fa-angle-double-right"></i>  Ajout Dosier</a></li>';}?>
			</ul></li><li class="dropdown">
<a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-users"> </i> <span>  intervenants  </span></a>
          <ul class="dropdown-menu" role="menu">
                                    <li><a href="http://temps.comptaffaires.org/users"><i class="fa fa-angle-double-right"></i>  Intervenants </a></li><li class="divider">
                                   <?php if ($this->Session->read('Auth.User.role')=='Admin')
								{ echo '<li><a href="http://temps.comptaffaires.org/users/add"><i class="fa fa-angle-double-right"></i>  Ajout Intervenant</a></li>';}?>
			</ul></li><li class="dropdown">
<a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-question-circle"> </i> <span>  Aide  </span></a>
          <ul class="dropdown-menu" role="menu">
                </li><li><a href="http://temps.comptaffaires.org/Aide"><i class="fa fa-angle-double-right"></i>Liste des codes </a></li>
			</ul>			
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
                                      
                                        <small>Membre depuis <?php echo substr( $this->Session->read('Auth.User.created'),0,10) ;?> </small>
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
                                        <a href="http://temps.comptaffaires.org/users/profile" class="btn btn-default btn-flat">Profil </a>
                                    </div> 
                                    <div class="pull-right">
                                        <a href="http://temps.comptaffaires.org/logout" class="btn btn-default btn-flat">Déconnexion</a>
                                    </div>
                                </li>
                            </ul>
                        </li>
        
      </ul>
    </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
            </nav>
        </header>
        <div class="wrapper row-offcanvas row-offcanvas-left">
              
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
<?php 
/*
<li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown"><?php echo $this->Session->read('Auth.User.username') ; ?> <span class="caret"></span></a>
          <ul class="dropdown-menu" role="menu" style="background-color:#E6E6E6;">
            <li><a href="http://temps.comptaffaires.org"><i style="float:left" class="fa fa-home"></i><B>  Accueil</B></a></li>
            <li><a href="http://temps.comptaffaires.org/users/profile"><i  style="float:left" class="fa fa-user"></i><B>  Profil</B></a></li>
            <li class="divider"></li>
            <li><a href="http://temps.comptaffaires.org/logout"><i  style="float:left" class="fa fa-share"></i><B>  Déconnexion</B></a></li>
          </ul>
        </li>*/
?>