<div class="equipes form">
<?php 
$this->assign('title', 'Assignement');
 App::import('Controller', 'Missions');
 $miss  = new MissionsController;
 // Liste Misions 
// $missions=$miss->ListeMissions();
 App::import('Controller', 'Taches');
 $task = new TachesController;
 $tasks= $task->NomstachesAll();
 App::import('Controller', 'equipes');
 $equipes = new EquipesController;
 // Liste Misions 
 $intervs=$equipes->ListeIntervs();
?>
<?php echo $this->Form->create('Equipe'); ?>
    <fieldset>
        <h1 style="color:#3C8DBC"><?php echo __('Updating user assignement to task'); ?></h1></br>
		<div style="margin-left:100px;width:400px;float:left">     
<table>
<tr><td><label>User</label></td><td><?php echo $this->Form->select('intervenant',$intervs ,array('label'=>'','style'=>'width:120px;text-align:left;margin-left:-2px' ));;?></td></tr>
<tr><td><label>Task</label></td><td><?php echo $this->Form->select('task',$tasks ,array('label'=>'','style'=>'width:120px;text-align:left;margin-left:-2px' ));;?></td></tr>
<tr><td><label>Selling Price</label></td><td><?php echo $this->Form->input('prix1',array('label'=>'','style'=>'width:120px;text-align:left' ));;?></td></tr>
 </table>
        <?php
  	echo $this->Form->submit('Edit', array('class' => 'form-submit',  'title' => 'Cliquer ici pour modifier ') ); 
?>
    </fieldset>
<?php echo $this->Form->end(); ?>
</div>
</div>