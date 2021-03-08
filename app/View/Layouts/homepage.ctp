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
        <?= $this->Html->script('app');?>

        <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
        <?= $this->Html->script('dashboard');?>

        <?php $this->Html->script('demo'); ?>
        

    </body>
</html>
