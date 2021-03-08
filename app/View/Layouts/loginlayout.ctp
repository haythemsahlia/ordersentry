<!doctype html>
<html lang="en-US">
<head>

	<meta charset="utf-8">

	<title>Login</title>

	<link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Varela+Round">
<!-- Theme style -->
        <?= $this->Html->css('login');?>
	<!--[if lt IE 9]>
		<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->
	<?php echo $this->fetch('css'); ?>
</head>

<body>
	<div id="login">
		<h2><center><span class="fontawesome-lock"></span>LOGIN</center></h2>
			<?php echo $this->Session->flash(); ?>
			<?php echo $this->fetch('content'); ?>
	</div>
</body>	
</html>