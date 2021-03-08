<!-- app/View/Users/add.ctp -->
<div class="users form">
<?php echo $this->Form->create('User',array('enctype'=>'multipart/form-data')); ?>
    <fieldset>
         
        <?php 

	   echo        ' <div class="box" style="width:600px;float:right;padding:50px">' ;
        echo $this->Form->hidden('id', array('value' => $this->data['User']['id']));

		echo '<div class="input-group" style="width:230px;color:black"> <span   class="input-group-addon"  ><i class="fa fa-user" ></i></span>                               
     '. $this->Form->input('username', array( 'readonly' => 'readonly', 'label' => 'Nom d `utilisateur ne peut pas être changé !','class'=>'form-control')).'</div>';
		echo   '<div style="width:230px" class="input-group" > <span   class="input-group-addon"  ><i class="fa fa-envelope" ></i></span>'.$this->Form->input('email', array('required' => 0,'class'=>'form-control')).'</div>';
        echo  '<div class="input-group" style="width:230px"> <span   class="input-group-addon"  ><i class="fa fa-unlock" ></i></span>'.$this->Form->input('password_update', array( 'label' => 'Nouveau mot de passe</br><div style="font-size:11px"> (Laissez vide si vous ne voulez pas changer)</div>', 'maxLength' => 255, 'type'=>'password','required' => false,'class'=>'form-control')).'</div>';
		echo   $this->Form->input('password_confirm_update', array('label' => 'Confirmer le nouveau mot de passe ', 'maxLength' => 255, 'title' => 'Confirmer Nouveau mot de passe', 'type'=>'password','required' => false )) ;

        if ($this->Session->read('Auth.User.role')=='Admin')
        {echo '<div  style="width:230px" class="input-group" > <span   class="input-group-addon"  ><i class="fa fa-users" ></i></span>'.$this->Form->input('role', array(
            'options' => array( 'Admin' => 'Admin', 'Simple User' => 'Simple User')   )).'</div>';}
     
    /*   echo '<div style="width:230px" class="input-group" > <span  class="input-group-addon"  ><i class="fa fa-file-photo-o" ></i></span>'.$this->Form->input('thumb_file', array('type'=>'file','label'=>'Image','class'=>'form-control')).'</div>';*/
		echo $this->Form->submit('Modifier ', array('class' => 'form-submit',  'title' => 'Cliquer ici pour modifir le profil' )); 
       echo  '</div>';

     //     if ($this->Session->read("Auth.User.thumb")!=""){echo'  <div class="box" style="background-color:;float:left;width:200px;height:420px"><center> <img src="http://test.enterprise-esolutions.com/app/webroot/'.$this->Session->read('Auth.User.thumb') .' " class="img-circle" alt="User Image" /></br>';}
      // else {
	  echo '<div class="box" style="background-color:;float:left;width:200px;height:420px"><center> <img src="http://ordersentry.enterpriseesolutions.com/app/webroot/img/user.png" class="img-circle" alt="User Image" /></br>';
	  // ';}

                                                 if ($this->Session->read("Auth.User.role")==="Admin"){echo'<center> <img src="http://ordersentry.enterpriseesolutions.com/app/webroot/img/admin.png" width="80px" />';}
                                                 else{echo'<center> <img src="http://ordersentry.enterpriseesolutions.com/app/webroot/img/simple.png" width="80px" />';}
                          echo' </br>        <h4>'.$this->Session->read("Auth.User.role").'</h4> ';                         
                                             echo '  <h6><I>Membre Depuis : </I>'.substr($this->Session->read("Auth.User.created"),0,10).'</h6></center>
 </div>';

?>
    </fieldset>
<?php echo $this->Form->end(); ?>
</div>

<style>
.input-group-addon, .input-group-btn, .input-group .form-control {
  display:table-row!important;
  height: 30px!important;
  vertical-align: center;
}

.input-group-addon {
padding: 6px 12px;
font-size: 18px;
font-weight: 400;
line-height: 1;
color:#3c8dbc;
text-align: center  ;

 }
.input-group-addon .fa{padding-top: 5px;}
.form-control {width:230px;}
 .form select {width:auto;}
</style>