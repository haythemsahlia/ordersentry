<head>

</head>
<body>

<?php  // changer le layout par defaut
$this->layout = 'loginlayout'; ?>

<?php echo $this->Session->flash('auth'); ?>
<?php echo $this->Form->create('User'); ?>
    <fieldset>
    	
        <?php echo $this->Form->input('username',array('label'=>'Username'));
        echo '</br>';
        echo $this->Form->input('password',array('label'=>'Password'));
        echo '</br>';
    ?>

    

<?php 
$options = array(
    'label' => 'Enter',
    'div' => array(
        'class' => '',
    )
);
echo $this->Form->end($options);

?>


</fieldset>
</body>

<style>
.notice{color:#FE2E2E!important;font-weight: bold; background: #eeeeee; padding-left: 25px;}
h2{background-color: #fdbe6b!important;}

body{

background: url(img/CoverAlima.svg) repeat center center fixed;
-webkit-background-size: cover;
-moz-background-size: cover;
-o-background-size: cover;
background-size: cover;}

 input[type="submit"]{cursor:pointer!important;    background-color: #754e3a!important;}

 input[type="submit"]:hover {background-color: #7b5d4efa!important;}
</style>
