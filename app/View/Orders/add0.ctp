<?php  // changer le layout par defaut
//$this->layout = 'loginlayout'; ?>
 	<!-- jQuery (required) & jQuery UI + theme (optional) -->
	<link href="http://ordersentry.enterpriseesolutions.com/keyboard/css/jquery-ui.min.css" rel="stylesheet">
	<!-- still using jQuery v2.2.4 because Bootstrap doesn't support v3+ -->
	<script src="http://ordersentry.enterpriseesolutions.com/keyboard/js/jquery-latest.min.js"></script>
	<script src="http://ordersentry.enterpriseesolutions.com/keyboard/js/jquery-ui.min.js"></script>
	<!-- <script src="docs/js/jquery-migrate-3.0.0.min.js"></script> 
<style>input [type="text"]{color:black!important;background-color:white!important;}</style>-->
	<!-- keyboard widget css & script (required) -->
	<link href="http://ordersentry.enterpriseesolutions.com/keyboard/css/keyboard.css" rel="stylesheet">
	<script src="http://ordersentry.enterpriseesolutions.com/keyboard//js/jquery.keyboard.js"></script>

	<!-- keyboard extensions (optional) Autocomplete  -->
	<script src="http://ordersentry.enterpriseesolutions.com/keyboard/js/jquery.mousewheel.js"></script>
	<script src="http://ordersentry.enterpriseesolutions.com/keyboard/js/jquery.keyboard.extension-typing.js"></script>
	<script src="http://ordersentry.enterpriseesolutions.com/keyboard/js/jquery.keyboard.extension-autocomplete.js"></script>
	<script src="http://ordersentry.enterpriseesolutions.com/keyboard/js/jquery.keyboard.extension-caret.js"></script>

	<!-- demo only 
	<link rel="stylesheet" href="http://ordersentry.enterpriseesolutions.com/keyboard/css/bootstrap.min.css"> -->
	<link rel="stylesheet" href="http://ordersentry.enterpriseesolutions.com/keyboard/css/font-awesome.min.css">
	<link href="http://ordersentry.enterpriseesolutions.com/keyboard/css/demo.css" rel="stylesheet">
	<link href="http://ordersentry.enterpriseesolutions.com/keyboard/css/tipsy.css" rel="stylesheet">
	<link href="http://ordersentry.enterpriseesolutions.com/keyboard/css/prettify.css" rel="stylesheet"> 
	<script src="http://ordersentry.enterpriseesolutions.com/keyboard/js/bootstrap.min.js"></script>
	<script src="http://ordersentry.enterpriseesolutions.com/keyboard/js/demo.js"></script>
	<script src="http://ordersentry.enterpriseesolutions.com/keyboard/js/jquery.tipsy.min.js"></script>
	<script src="http://ordersentry.enterpriseesolutions.com/keyboard/js/prettify.js"></script> <!-- syntax highlighting -->
	<body>

	<div class="block" id="autocomplete">
		<input id="textt" type="text" placeholder="" style="color:black!important;background-color:white!important;">
		<br>

 	</div>
	<script>
		//$('#textt').keyboard({ layout: 'qwerty' });
		$('#textt').keyboard({ layout: 'qwerty' });
	</script>	