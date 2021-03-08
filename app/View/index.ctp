<?php $this->assign('title', 'Users Assignments'); ?>
<div class="Equipes form index">
<h1 class="no-print" style="color:#367FA9">Composition of the teams (Assignments) </h1>
 
<?php
   App::import('Controller', 'Missions');
 $missions = new MissionsController;
  App::import('Controller', 'Taches');
 $task = new TachesController;
 $tasks= $task->NomstachesAll();
    echo $this->Filter->filterForm('Equipe', array('legend' => 'Recherche'));  
?>
  
</div>	
<div class="panel panel-default">
    <div class="panel-body">
        <table id="myTable" class="table table-fixedheader table-bordered table-striped">
            <thead style="color:white!important;">
                <tr>
<th style="width:20%"><center><?php echo $this->Paginator->sort('intervenant', 'User');?>  </center></th>
 			<?php if ($this->Session->read('Auth.User.role')=='Admin')
        {
			echo '<th style="width:40%"><center>'. $this->Paginator->sort('task', 'Task') .'</center></th>';	
		}
		else
		{
			echo '<th style="width:50%"><center>'. $this->Paginator->sort('task', 'Task') .'</center></th>';				
		} ?>
<th style="width:30%"><center><?php echo $this->Paginator->sort('prix1', 'Sale price per hour');?>  </center></th>
 		
  			<?php if ($this->Session->read('Auth.User.role')=='Admin')
        {echo '<th style="width:10%"><center>Actions</center></th>';} ?>
		</tr>
            </thead>
            <tbody style="height:250px">
                <?php $count=0; ?>
		<?php foreach($equipes as $equipe): ?>				
		<?php $count ++;?>
		<?php if($count % 2): echo '<tr>'; else: echo '<tr class="zebra">' ?>
		<?php endif; ?>
			 	<td  style="width:20%;text-align: center;"><?php echo $this->Html->link( $missions->IntervparID($equipe['Equipe']['intervenant'])  ,   array('action'=>'edit', $equipe['Equipe']['id']),array('escape' => false) );?></td>
 			<?php if ($this->Session->read('Auth.User.role')=='Admin')
        {		
		echo '<td style="width:40%;text-align: center;">' . $task->TaskparID(  $equipe['Equipe']['task']).'</td>';
		}
		else
		{		
		echo '<td style="width:50%;text-align: center;">' .  $task->TaskparID(  $equipe['Equipe']['mission']).'</td>';
		} ?>
<td style="width:30%;text-align: center;"><?php echo  $equipe['Equipe']['prix1']; ?></td> 		
  				<?php if ($this->Session->read('Auth.User.role')=='Admin')
        {echo '<td style="width:10%" ><center>';
echo $this->Form->postLink(
  $this->Html->image('modif.png', array('alt' => __('Modifier'))), //le image
  array('action' => 'edit', $equipe['Equipe']['id']), //le url
  array('escape' => false)   
); 		 	 
		echo $this->Form->postLink(
  $this->Html->image('supp.png', array('alt' => __('Effacer'))), //le image
  array('action' => 'delete', $equipe['Equipe']['id']), //le url
  array('escape' => false),  
  __('Are you sure to delete the assignment %s ?', $missions->IntervparID( $equipe['Equipe']['intervenant'])) //le confirm
);  echo '</center></td>'; }?>
		</tr>
		<?php endforeach; ?>
		<?php unset($equipe); ?>
             </tbody>
        </table>
 <div style="float:right;width:50px;margin-top:-10px">
<?php
if ($this->Session->read('Auth.User.role')=='Admin')
        { 
  echo $this->Form->postLink(
  $this->Html->image('excel.png', array('alt' => __('Effacer'))), //le image
  array('action' => 'excel'  ), //le url
  array('escape' => false)  
   ) //le confirm
		;}
		?>
</div>	
  <div style="float:right;width:50px;margin-top:-10px">
<?php
if ($this->Session->read('Auth.User.role')=='Admin')
        { 
  echo $this->Form->postLink(
  $this->Html->image('word.png', array( )), //l image
  array('action' => 'word'  ), //le url
  array('escape' => false)  
   ) //le confirm
		;}
		?>
</div>	
    </div>
</div>
 
<div class="equipes form" style="border:1px solid grey;margin-left:50px;margin-top: 10px;width: 500px;">
<?php 
// App::import('Controller', 'Missions');
 $miss  = new MissionsController;
 // Liste Misions 
 $mis=$miss->ListeMissions();
 //Liste intervenants actifs
 App::import('Controller', 'Users');
 $users = new UsersController;
 $listeusers= $users->ListeUsers();
 
 App::import('Controller', 'equipes');
 $equipe = new EquipesController;
 // Liste Misions 
 $intervs=$equipe->ListeIntervs();
 
 echo $this->Form->create('Equipe',array('action'=>'add')); ?>
   </br> <fieldset>
        <h3 style="color:#3C8DBC"><?php echo __('Assign a user to a task'); ?></h3></br>
 <div style="margin-left:100px;width:400px;float:left">     
<table>
<tr><td><label>User</label></td><td><?php echo $this->Form->select('intervenant',$listeusers ,array('label'=>'','style'=>'width:120px;text-align:left;margin-left:-2px' ));;?></td></tr>
<tr><td><label>Task</label></td><td><?php echo $this->Form->select('task',$tasks ,array('label'=>'','style'=>'width:120px;text-align:left;margin-left:-2px' ));;?></td></tr>
<tr><td><label>Selling price </label></td><td><?php echo $this->Form->input('prix1',array('label'=>'','style'=>'width:120px;text-align:left' ));;?></td></tr>
 </table>
<?php		echo $this->Form->submit('Add', array('class' => 'form-submit',  'title' => 'Cliquer ici pour affecter l`intervenant') ); 
?>
    </fieldset>
<?php echo $this->Form->end(); ?>
</div>
</div>