<?php
ini_set('memory_limit', '512M');set_time_limit(0); 
class FicheesController extends AppController {
   var $components = array('Filter.Filter');  
   var $name = 'Fichees';
  var $uses = array('Fichee');

    var $filters = array  
        (  
            'toutes' => array  
            (  
                'Fichee' => array  
                (  
                    'Fichee.Intervenant',  
 					'Fichee.Debut'=> array('label'=>'Début de la semaine'),  
					'Fichee.Semaine'=> array('label'=>'Fin de la semaine'),  
                    
                )  
            )  ,
			    'index' => array  
            (  
                'Fichee' => array  
                (  
                 //   'Fiche.Intervenant',  
 					'Fichee.Debut'=> array('label'=>'Début de la semaine'),  
					'Fichee.Semaine'=> array('label'=>'Fin de la semaine'),  
                   
                )  
            ) 
        );    
		 

    public $paginate = array(
       'limit' => 5000,
      //  'conditions' => array('status' => '1'),
        'order' => array('Fichee.id' => 'asc' ) 
    );
      
public function index() {
	$this->loadModel('Fichee');
	  $this->Fichee->validate = array();
	  $user=$this->Session->read('Auth.User.id');	

		  	$this->paginate = array(
		 'conditions' => array('user_id' => ''.$user), 
        'order' => array('Fichee.id' => 'asc' ) ,
               'limit' => 5000,
);
		
		$fichees = $this->paginate('Fichee');
        $this->set(compact('fichees'));

    }  
public function toutes() {
	$this->loadModel('Fichee');
	 $this->Fichee->validate = array();
     	        if ($this->Session->read('Auth.User.role')=='Admin' ){

		  	$this->paginate = array(
			//   'conditions' => array('Intervenant' => ''.$user), 
        'order' => array('Fichee.id' => 'asc' ) ,
               'limit' => 5000,
);
		
		$fichees = $this->paginate('Fichee');
				$this->set(compact('fichees'));}
else{   
    $this->Session->setFlash(__('<label style="color:red">Vous n avez pas le droit pour faire cette opération !</label>'));
    $this->redirect(array('action' => 'index'));
	}
    }
 
 public function ValChamp($nomchamp,$id_s,$ligne,$jour)
{
	
	$this->loadModel('Fichejour');
    $categ = $this->Fichejour->find('first',array('fields'=>array($nomchamp),'conditions'=>array('Jour'=>$jour,'id_s'=>$id_s,'ligne'=>$ligne))) ;
    return  $categ['Fichejour'][$nomchamp];
}
 
 public function ValChamp2($nomchamp,$id_s)
{
if (isset($id_s)){  
	$this->set('id',$id_s);
$this->loadModel('Fichee');
    $categ2 = $this->Fichee->find('first',array('fields'=>array($nomchamp),'conditions'=>array('Fichee.id'=>$id_s))) ;
	
    return  $categ2['Fichee'][$nomchamp];
}	
else return '';
	
}

public function ValChamp3($nomchamp,$id_s)
{
if (isset($id_s)){  
	$this->set('id',$id_s);
$this->loadModel('Fichejour');
   
	$result = $this->Fichejour->find('all', array('conditions'=>array('Fichejour.id_s'=>$id_s),'fields' => array('SUM(Fichejour.'.$nomchamp.') AS `ma_somme`')));
	$total= $result[0][0]['ma_somme'];
 return $total ;
}	
else return '';
	
}
public function  updatingTot($id,$userid){
//	echo('id sem'.$id);
	//echo('id user'.$userid);
	//totlignes
	$this->loadModel('Fichejour');
   $this->loadModel('Fichee');
   $options['conditions'] = array(

	 'Fichee.id'=>''.$id 

);
  $options['joins'] = array(
    array('table' => 'fichees',
        'alias' => 'Fichee',
        'type' => 'LEFT',
        'conditions' => array(
            'Fichee.id = Fichejour.id_s',
        )
    )
);


$options['fields'] = array(
'SUM(Fichejour.Nbl_Dos) AS `somme`'
);

$r1 = $this->Fichejour->find('all', $options);	
 $t1= $r1[0][0]['somme'];
 //  echo('t1='.$t1);
	
	//totheures
	$options2['conditions'] = array(

	 'Fichee.id'=>''.$id 

);
  $options2['joins'] = array(
    array('table' => 'fichees',
        'alias' => 'Fichee',
        'type' => 'LEFT',
        'conditions' => array(
            'Fichee.id = Fichejour.id_s',
        )
    )
);


$options2['fields'] = array(
'SUM(Fichejour.Nbh_Dos) AS `sommeh`'
);

$r2 = $this->Fichejour->find('all', $options2);	
 $t2= $r2[0][0]['sommeh'];
   // echo('t2='.$t2);
	

//$this->loadModel('Fichee');	

	$this->Fichee->updateAll(array(
   		
		 'TotHeures' => $t2,
		 'TotLignes' => $t1
		 ),
		 array(   'Fichee.id' => $id));
		
	
}
public function updating($id_s,$jour,$date,$num,$nom,$debex,$finex,$mission,$millesime,$tache,$des,$h,$nbl,$cdi,$cdd,$ap,$cont,$sold,$sal,$bul,$ligne) 
{
$this->loadModel('Fichejour');
/* echo('***'.$ligne.'****'.'      Jour' .$jour.
		' Date'. $date.
		' Numm_Dos' . $num.
		' Nom_Dos' . $nom.
		' Exercice_Deb' . $debex.
		 ' Exercice_Fin' . $finex.
		' Mission' . $mission.
		' Millesime' . $millesime.
		' Tache_Dos' . $tache.
		' Details' . "'".$des."'".
		' Nbh_Dos' .$h.
		 ' Nbl_Dos' .$nbl.
		 ' Cdi' .$cdi.
		 ' Cdd'. $cdd.
		 ' Apprent' . $ap.
		 ' Contrats' . $cont.
		 ' Soldes' . $sold.
		 ' Salaries'. $sal);
echo(' Exercice_Deb' . $debex); */
//echo(' Details' . "'".$des."'");
$this->Fichejour->updateAll(array(
   		'Fichejour.Date' => "'$date'",
		'Num_Dos' => $num,
		//'Fichejour.Nom_Dos' => "'Test3'"
		'Fichejour.Nom_Dos' => "'$nom'",
		'Fichejour.Exercice_Deb' => "'$debex'",
		 'Fichejour.Exercice_Fin' => "'$finex'",
		'Mission' => $mission,
		'Millesime' => "'$millesime'",
		'Tache_Dos' => $tache,
		'Details' => "'$des'"
		,'Nbh_Dos' => $h,
		 'Nbl_Dos' => $nbl,
		 'Cdi' => $cdi,
		 'Cdd' => $cdd,
		 'Apprent' => $ap,
		 'Contrats' => $cont,
		 'Soldes' => $sold,
		 'Autres' => $sal,
		 'Bulletins' => $bul
		 ),
		 array(   'Fichejour.id_s' => $id_s,'Fichejour.Ligne' =>  $ligne , 'Fichejour.Jour' => $jour));
		
} 
 
 public function saving($id_s,$jour,$date,$num,$nom,$debex,$finex,$mission,$millesime,$tache,$des,$h,$nbl,$cdi,$cdd,$ap,$cont,$sold,$sal,$bul,$fin,$addOrEdit) {


$this->loadModel('Fichejour');
if($fin == 0 )
{
	//echo(' fin ');
	 $nb = $this->Fichejour->find('count', array(
       'fields' => 'id',
       'conditions' => array('Jour'=>$jour,'id_s'=>$id_s)
    ));
	$nb++;
//echo(' jour '.$jour.' ligne '.$nb. ' nom '.$nom);	
if ($this->Fichejour->saveAll(array(
        'id_s' => $id_s,
		'Jour' => $jour,
		'Date' => $date,
		'Num_Dos' => $num,
		'Nom_Dos' => $nom,
		'Exercice_Deb' => $debex,
		 'Exercice_Fin' => $finex,
		'Mission' => $mission,
		'Millesime' => $millesime,
		'Tache_Dos' => $tache,
		'Details' => $des,
		'Nbh_Dos' => $h,
		 'Nbl_Dos' => $nbl,
		 'Cdi' => $cdi,
		 'Cdd' => $cdd,
		 'Apprent' => $ap,
		 'Contrats' => $cont,
		 'Soldes' => $sold,
		 'Autres' => $sal,
		 'Bulletins' => $bul,
		 'Ligne' => $nb
		  )))
	
	{
	//echo('saved');
	if ($addOrEdit == 0)
	{
		
	  ?><script language="JavaScript">
	 var currString = '<?php echo $id_s ?>';
	 location.href="http://temps.comptaffaires.org/fichees/edit/"+currString;
	 </script>
<?php   
	} 
 }
 else {
      echo('error');
}  } 
	else	 {
//echo( 'end');
	//$this->redirect(array('action' => 'edit',$id_s)); 
	// echo '<script>location.href="http://temps.comptaffaires.org/fichees/edit?id=1";</script>';
	 
	?>
	 
	
	<?php
	/* echo '<script>
	  var currString = "<?php echo $id_s ?>";
	  location.href="http://temps.comptaffaires.org/fichees/edit?id="+curr_String;
	  </script>';*/
	}
    }
		
		
		
		
	
/*public function saving2($id_s,$jour,$date){
//,$num,$nom,$debex,$finex,$mission,$millesime,$tache,$des,$h,$nbl,$cdi,$cdd,$ap,$cont,$sold,$sal,$ligne) {
echo(' paramètre1 ='.$id_s);
echo(' paramètre2 ='.$jour);
echo(' paramètre3 ='.$date);
$this->loadModel('Fichejour');
//Recherche de l'enreg selon id_s et ligne


//Modification des champs

/* if ($this->Fichejour->saveAll(array(
        'id_s' => $id_s,
		'Jour' => $jour,
		'Date' => $date,
		'Num_Dos' => $num,
		'Nom_Dos' => $nom,
		'Exercice_Deb' => $debex,
		 'Exercice_Fin' => $finex,
		'Mission' => $mission,
		'Millesime' => $millesime,
		'Tache_Dos' => $tache,
		'Details' => $des,
		'Nbh_Dos' => $h,
		 'Nbl_Dos' => $nbl,
		 'Cdi' => $cdi,
		 'Cdd' => $cdd,
		 'Apprent' => $ap,
		 'Contrats' => $cont,
		 'Soldes' => $sold,
		 'Salaries' => $sal,
		 'Ligne' => $ligne
		 
			 )))
	
	{
	
	?><script language="JavaScript">
	 var currString = '<?php echo $id_s ?>';
	 location.href="http://temps.comptaffaires.org/fichees/edit/"+currString;
	 </script>
<?php	
	 
 }
 else {
      echo('error');
}   */
	
   /* }
		*/

		

 
 
 public function add($id=null) {
     	      //  if ($this->Session->read('Auth.User.role')=='Admin' ){
      if (isset($id)){$this->set('id',$id);}
	  if ($this->request->is('post')) {
				$this->loadModel('Fichee');
				  
			$this->Fichee->create();
			//$id=$this->Fiche->id ;
			if ($this->Fichee->save($this->data)) {

				$this->Session->setFlash(__('Semaine ajoutée avec succès'));
				 $this->redirect(array('action' => 'add',$this->Fichee->id)); 
			}
//			else {if((!empty($id))){$this->Session->setFlash(__('Erreur, Réessayer !!!'));}}	
       			 }
			//}
//else{   
   // $this->Session->setFlash(__('<label style="color:red">Vous n avez pas le droit pour faire cette opération !</label>'));
  // $this->redirect(array('action' => 'index'));
	//}
 $this->loadModel('Dossier');	 
		$this->paginate = array(
            'paramType' => 'querystring',
            'limit' => 100,
            'maxLimit' => 300,
			'order' => array('Dossier.Numero' => 'asc' )
        );
	 
$this->set('dossiers', $this->paginate());}
 /*********/
public function edit($id=null) {
	

	if (isset ($id)  ) { $this->set('id',$id);}

	 $this->Fichee->validate = array();
    	      //  if ($this->Session->read('Auth.User.role')=='Admin' ){
$this->loadModel('Fichee');
		$fiches = $this->paginate('Fichee');
				   
				   $this->set(compact('fiches'));

		    if (!$id) {
				$this->Session->setFlash(__(' Veuillez ajouter une semaine'));
				$this->redirect(array('action'=>'add'));
			}

			$fiche = $this->Fichee->findById($id);
			 $interv = $fiche['Fichee']['user_id'];
  			 // verifier proprietaire
			 if ($interv != $this->Session->read('Auth.User.id')and !($this->Session->read('Auth.User.role')=='Admin' ))
			 {	 $this->Session->setFlash(__('<label style="color:red">vous n`avez pas le droit pour modifier cette fiche : '.$interv.'  </label>'));
			 	$this->redirect(array('action'=>'index'));
			 }
	
			if (!$fiche) {
				$this->Session->setFlash(__(' ID Invalide'));
				$this->redirect(array('action'=>'add'));
			}
			if ($this->request->is('post') || $this->request->is('put')) {
				$this->Fichee->id = $id;

/*if ($this->Fichee->save($this->request->data)) {
$this->Session->setFlash(__('Fiche modifiée avec succès'));
				 $this->redirect(array('action' => 'edit',$this->Fichee->id)); 
} else {
$this->Session->setFlash(__('Erreur, Réessayer ! .'));
}*/

}
//}else{   
  //  $this->Session->setFlash(__('<label style="color:red">Vous n avez pas le droit pour faire cette opération ! !</label>'));
 //   $this->redirect(array('action' => 'add'));
	//}
    			if (!$this->request->data) {
				$this->request->data = $fiche;
			} 
}

public function enreg($nomdos){
	$this->loadModel('Fichejour');
			//	$this->Session->setFlash(__('test'));
				$this->Fichejour->saveField('Num_Dos', '5');
				$this->Fichejour->saveField('Nom_Dos', $nomdos);
	//	 $this->loadModel('Fichee');

	 //  $this->Session->setFlash(' Test   ');
	
	//$this->loadModel('Fichejour');
 //$this->Post->saveField('Nom_Dos', 'Test');
	    		
}
/*****************/
public function deleteFiche($id = null) {
	$this->loadModel('Fichee');
	 $this->loadModel('Fichejour');
    	      if ($this->Session->read('Auth.User.role')=='Admin' ){
		
		if (!$id) {
			$this->Session->setFlash('donner l id');
			$this->redirect(array('action'=>'index'));
		}
		
        $this->Fichee->id = $id;
        if (!$this->Fichee->exists()) {
            $this->Session->setFlash(' Id Invalide   ');
			$this->redirect(array('action'=>'index'));
        }
     else
     {
		
      
		 
		 
		 
        if (($this->Fichee->delete()) && ( $this->Fichejour->deleteAll( [  'Fichejour.id_s' => $id  ],true)) ) {
			$this->Session->setFlash(__('Fiche supprimée'));
		if ($this->Session->read('Auth.User.role')=='Admin' ){		$this->redirect(array('action'=>'toutes'));}else{$this->redirect(array('action'=>'index'));}
		
		}

       else{ $this->Session->setFlash(__('Fiche n  est pas supprimée'));
	   		if ($this->Session->read('Auth.User.role')=='Admin' ){		$this->redirect(array('action'=>'toutes'));}else{$this->redirect(array('action'=>'index'));}
 }
    }

		 }else{   
   		  	$this->Session->setFlash(__('<label style="color:red">Vous n avez pas les droits pour faire cette operation !</label>'));
    	 	$this->redirect(array('action' => 'index'));	}

	
	
}
public function delete($line,$idsem,$cj) {
	
	if($cj == 1) {$jour='Lundi';}
				 if($cj == 2) {$jour='Mardi';}
				 if($cj == 3) {$jour='Mercredi';}
				 if($cj == 4) {$jour='Jeudi';}
				 if($cj == 5) {$jour='Vendredi';}
				 if($cj == 6) {$jour='Samedi';}
				 if($cj == 7) {$jour='Dimanche';}
$this->loadModel('Fichejour');
    	   //   if ($this->Session->read('Auth.User.role')=='Admin' ){
        if ($this->Fichejour->deleteAll(
    [
        'Fichejour.id_s' => $idsem, 
        'Fichejour.Ligne' => $line,
        'Fichejour.Jour' => $jour
    ],
    true
)){
			//$this->Session->setFlash(__('Enregistrement supprimé'));
			?><script language="JavaScript">
	 var currString = '<?php echo $idsem ?>';
	 location.href="http://temps.comptaffaires.org/fichees/edit/"+currString;
	 </script>
<?php
//update lines

$this->Fichejour->updateAll(array(
   		
		'Fichejour.ligne' => 'Fichejour.ligne-1',
		
		 ),
		 array(   'Fichejour.id_s ' => $idsem,'Fichejour.Ligne >' =>  $line , 'Fichejour.Jour' => $jour));
		

		
   //    else{ $this->Session->setFlash(__('Enregistrement n  est pas supprimé'));
	   		

			?><script language="JavaScript">
	 var currString = '<?php echo $idsem ?>';
	 location.href="http://temps.comptaffaires.org/fichees/edit/"+currString;
	 </script>
<?php
				
 //}
 }
		/*	  } else{   
   		  	$this->Session->setFlash(__('<label style="color:red">Vous n avez pas les droits pour faire cette operation !</label>'));
    	 	$this->redirect(array('action' => 'index'));	}*/
			
}

public function supprime($id = null) {
$this->loadModel('Fiche');
    	   //     if ($this->Session->read('Auth.User.role')=='Admin' ){
		
		if (!$id) {
			$this->Session->setFlash('donner l id');
			$this->redirect(array('action'=>'index'));
		}
		
        $this->Fiche->id = $id;
        if (!$this->Fiche->exists()) {
            $this->Session->setFlash(' Id Invalide   ');
			$this->redirect(array('action'=>'index'));
        }
     else
     {
        if ($this->Fiche->delete()){$this->Session->setFlash(__('Fiche supprimée'));$this->redirect(array('action'=>'index'));}

       else{ $this->Session->setFlash(__('Fiche n  est pas supprimée'));
        $this->redirect(array('action' => 'index'));}
    }

		//}else{   
   		 //	$this->Session->setFlash(__('<label style="color:red">Vous n avez pas les droits pour faire cette operation !</label>'));
    	//	$this->redirect(array('action' => 'index'));	}
}


public function  recap()
{}

public function NBLIgnesJr($idsem,$jour){
 $this->loadModel('Fichejour');
 //$user=$this->Session->read('Auth.User.username');	
 $total = $this->Fichejour->find('count',array('conditions' => array('id_s' => $idsem,'Jour'=>$jour))) ;
return $total;


}public function TotFiches(){
 $this->loadModel('Fiche');
 $user=$this->Session->read('Auth.User.username');	
 $total = $this->Fiche->find('count',array('conditions' => array('Intervenant' => ''.$user))) ;
return $total;
}

public function TotalFiches(){
 $this->loadModel('Fiche');
  $total = $this->Fiche->find('count') ;
return $total;
}
  
public function NomUser($id)
{$this->loadModel('User');
    $user = $this->User->find('first',array('conditions' => array('id' => ''.$id))) ;
  return  $user['User']['Nom'];
//  return  json_encode($user);
 
}

public function Username($id)
{$this->loadModel('User');
    $user = $this->User->find('first',array('conditions' => array('id' => ''.$id))) ;
  return  $user['User']['username'];
//  return  json_encode($user);
 }
 public function NomMission($id)
{$this->loadModel('Mission');
    $miss = $this->Mission->find('first',array('conditions' => array('id' => ''.$id))) ;
  return  $miss['Mission']['Nom'];
//  return  json_encode($user);
 }
 
  public function NomTache($id)
{$this->loadModel('Tache');
    $tache = $this->Tache->find('first',array('conditions' => array('id' => ''.$id))) ;
  return  $tache['Tache']['code'];
//  return  json_encode($user);
 }
  public function NomDoss($id)
{$this->loadModel('Dossier');
    $tache = $this->Dossier->find('first',array('conditions' => array('id' => ''.$id))) ;
  return  $tache['Dossier']['Nom'];
//  return  json_encode($user);
 } 
 
public function PrenomUser($id)
{$this->loadModel('User');
    $user = $this->User->find('first',array('conditions' => array('id' => ''.$id))) ;
  return  $user['User']['Prenom'];
//  return  json_encode($user);
 
}

public function ListeTaches()
{
$this->loadModel('Tache');
     $liste = $this->Tache->find('list',array('fields'=>'code','id')) ;
  return  $liste;
//  return  json_encode($user);
 
}
 public function ListeMissions()
{
$this->loadModel('Mission');
     $liste = $this->Mission->find('list',array('fields'=>'Nom','id')) ;
  return  $liste;
//  return  json_encode($user);
 
}
public function ListeTaches3($miss)
{
$this->loadModel('Tache');
     $liste = $this->Tache->find('list',array('fields'=>'code','conditions' => array('mission' => ''.$miss))) ;
  return  $liste;
//  return  json_encode($user);
 
}
 
public function ListeTaches2()
{
$this->loadModel('Tache');
     $liste = $this->Tache->find('list',array('fields'=>array('code','mission'))) ;
  return  $liste;
//  return  json_encode($user);
 
}

public function NomDossier($num)
{
$this->loadModel('Dossier');
     $liste = $this->Dossier->find('list',array('fields'=>'Nom','conditions' => array('Numero' => ''.$num))) ;
  return  $liste;
//  return  json_encode($user);
 
}
public function NomDossiers()
{
$this->loadModel('Dossier');
     $liste = $this->Dossier->find('list',array('fields'=>'Nom','order' => array('Dossier.id' => 'asc' ))) ;
  return  $liste;
//  return  json_encode($user);
 
}
//@Ran
public function NumDossiers()
{
$this->loadModel('Dossier');
     $liste = $this->Dossier->find('list',array('fields'=>'Numero','order' => array('Dossier.id' => 'asc' ))) ;
  return  $liste;
//  return  json_encode($user);
 
}

public function ListeIntervs()
{
$this->loadModel('User');
     $liste = $this->User->find('list',array('fields'=>'username')) ;
  return  $liste;
 
}    
public function Intervenants()
{
$this->loadModel('User');
 $liste = $this->User->find('list',array('fields'=>array('id','username'))) ;
 return  $liste;
 
}      

public function ListeDoss()
{
$this->loadModel('Dossier');
     $liste = $this->Dossier->find('list',array('fields'=> array('Nom','Numero','id'),'order' => array('Dossier.id' => 'asc' ) )) ;
  return  $liste ;
 
}

public function ListeDossiers()
{
$this->loadModel('Dossier');
     $liste = $this->Dossier->find('list',array('fields'=>'Numero','order' => array('Dossier.id' => 'asc' ) )) ;
  return  $liste ;
 
}

  public function getfiches() {
$this->set('fiches', $this->Fiche->find('all'));
//$this->set('_serialize',array('courses'));
   }

   
   /*************************************** Statistiques     ***********************************/
   
    public function statistiques()
   {}
   
   public function TotLignesInterv($interv){

 $this->loadModel('Fichejour');
  	 $this->loadModel('Fichee');
  $options['joins'] = array(
    array('table' => 'fichees',
        'alias' => 'Fichee',
        'type' => 'LEFT',
        'conditions' => array(
            'Fichee.id = Fichejour.id_s',
        )
    )
);

$options['conditions'] = array(
    'user_id' => ''.$interv);
$options['fields'] = array(
'SUM(Nbl_Dos) AS `somme`'
);

$r1 = $this->Fichejour->find('all', $options);	
 $t1= $r1[0][0]['somme'];
    return $t1; 
}
 
   public function TotLignesIntervPeriode($interv,$debut,$fin){
	   
 $this->loadModel('Fichejour');
  	 $this->loadModel('Fichee');
  $options['joins'] = array(
    array('table' => 'fichees',
        'alias' => 'Fichee',
        'type' => 'LEFT',
        'conditions' => array(
            'Fichee.id = Fichejour.id_s',
        )
    )
);

$options['conditions'] = array(
    'user_id' => ''.$interv,
'STR_TO_DATE(Debut,"%d/%m/%Y") >= STR_TO_DATE("'.$debut.'","%d/%m/%Y")' ,
 ' STR_TO_DATE(Semaine,"%d/%m/%Y") <= STR_TO_DATE("'.$fin.'","%d/%m/%Y") '
	 
);
$options['fields'] = array(
'SUM(Nbl_Dos) AS `somme`'
);

$r1 = $this->Fichejour->find('all', $options);	
 $t1= $r1[0][0]['somme'];
    return $t1; 
}
 
   public function TotHeuresIntervPeriode($interv,$debut,$fin){
 $this->loadModel('Fichejour');
  $this->loadModel('Fichee');
  $options['joins'] = array(
    array('table' => 'fichees',
        'alias' => 'Fichee',
        'type' => 'LEFT',
        'conditions' => array(
            'Fichee.id = Fichejour.id_s',
        )
    )
);

$options['conditions'] = array(
    'user_id' => ''.$interv,
	'STR_TO_DATE(Debut,"%d/%m/%Y") >= STR_TO_DATE("'.$debut.'","%d/%m/%Y")' ,
 ' STR_TO_DATE(Semaine,"%d/%m/%Y") <= STR_TO_DATE("'.$fin.'","%d/%m/%Y") '
);
$options['fields'] = array(
'SUM(Nbh_Dos) AS `ma_somme`'
);

$result = $this->Fichejour->find('all', $options);	
 
 	

 $res= $result[0][0]['ma_somme'];
//if ($res>0){$total=$res;}
 return $res ;
} 
     public function TotHeuresInterv ($interv ){
$this->loadModel('Fichejour');
  	 $this->loadModel('Fichee');
  $options['joins'] = array(
    array('table' => 'fichees',
        'alias' => 'Fichee',
        'type' => 'LEFT',
        'conditions' => array(
            'Fichee.id = Fichejour.id_s',
        )
    )
);

$options['conditions'] = array(
    'user_id' => ''.$interv);
$options['fields'] = array(
'SUM(Nbh_Dos) AS `somme`'
);

$r1 = $this->Fichejour->find('all', $options);	
 $t1= $r1[0][0]['somme'];
    return $t1; 
} 
   
public function TotLignesDoss($num){
 $this->loadModel('Fichejour');
  	
$r1 = $this->Fichejour->find('all',array( 'conditions' => array ('Num_Dos'=>$num),'fields' => array('SUM(Nbl_Dos) AS `somme`')));

   $t1= $r1[0][0]['somme'];
     return $t1;
  }
   
  
public function NBLIgnesDoss($numdoss){
 $this->loadModel('Fichejour');
  $total = $this->Fichejour->find('all',array('conditions' => array('Num_Dos' => $numdoss),'fields' => array('SUM(Nbl_Dos)AS `somme`'))) ;
$t= $total[0][0]['somme'];
  return $t;
}
public function TotLignesDossInterv($num,$interv){
 $this->loadModel('Fichejour');
 $this->loadModel('Fichee');
  $options['joins'] = array(
    array('table' => 'fichees',
        'alias' => 'Fichee',
        'type' => 'LEFT',
        'conditions' => array(
            'Fichee.id = Fichejour.id_s',
        )
    )
);

$options['conditions'] = array(
    'Num_Dos'=>$num,
	'user_id' => ''.$interv
);
$options['fields'] = array(
'SUM(Nbl_Dos) AS `somme`'
);

$r1 = $this->Fichejour->find('all', $options);	
 $t1= $r1[0][0]['somme'];
    return $t1;
  }
     
     
public function TotLignesDossIntervMillesime($num,$interv,$millesime){
 $this->loadModel('Fichejour');
 $this->loadModel('Fichee');
  $options['joins'] = array(
    array('table' => 'fichees',
        'alias' => 'Fichee',
        'type' => 'LEFT',
        'conditions' => array(
            'Fichee.id = Fichejour.id_s',
        )
    )
);

$options['conditions'] = array(
    'Num_Dos'=>$num,
	'Millesime Like  '=>'%'.$millesime,
	'user_id' => ''.$interv
);
$options['fields'] = array(
'SUM(Nbl_Dos) AS `somme`'
);

$r1 = $this->Fichejour->find('all', $options);	
 $t1= $r1[0][0]['somme'];
    return $t1; 	

  } 
    
public function TotLignesDossMillesime($num,$millesime){
 $this->loadModel('Fichejour');
  	
$r1 = $this->Fichejour->find('all',array( 'conditions' => array ('Num_Dos'=>$num,'Millesime Like  '=>'%'.$millesime ),
'fields' => array('SUM(Fichejour.Nbl_Dos) AS `somme`')));
 
   $t1= $r1[0][0]['somme'];
   return $t1;
  } 
     
public function TotLignesDossPeriodeMillesimeI($interv,$num,$debut,$fin,$millesime){
 //echo('num '.$num);
 //echo('debut '.$debut);
 //echo('fin '.$fin);
 //echo('millesime'.$millesime);
 
 $this->loadModel('Fichejour');
   $this->loadModel('Fichee');
   $options['conditions'] = array(
'Num_Dos'=>$num,
	 'Millesime Like  '=>'%'.$millesime,
   'STR_TO_DATE(Debut,"%d/%m/%Y") >= STR_TO_DATE("'.$debut.'","%d/%m/%Y")' ,
 ' STR_TO_DATE(Semaine,"%d/%m/%Y") <= STR_TO_DATE("'.$fin.'","%d/%m/%Y") ',
 'user_id' => ''.$interv

);
  $options['joins'] = array(
    array('table' => 'fichees',
        'alias' => 'Fichee',
        'type' => 'LEFT',
        'conditions' => array(
            'Fichee.id = Fichejour.id_s',
        )
    )
);


$options['fields'] = array(
'SUM(Nbl_Dos) AS `somme`'
);

$r1 = $this->Fichejour->find('all', $options);	
 $t1= $r1[0][0]['somme'];
    return $t1; 
  }	
//@Ran
public function TotLignesPeriode($debut,$fin){
 
 //echo('debut '.$debut);
 //echo('fin '.$fin);
 
 $this->loadModel('Fichejour');
   $this->loadModel('Fichee');
   $options['conditions'] = array(
   'STR_TO_DATE(Debut,"%d/%m/%Y") >= STR_TO_DATE("'.$debut.'","%d/%m/%Y")' ,
 ' STR_TO_DATE(Semaine,"%d/%m/%Y") <= STR_TO_DATE("'.$fin.'","%d/%m/%Y") '

);
  $options['joins'] = array(
    array('table' => 'fichees',
        'alias' => 'Fichee',
        'type' => 'LEFT',
        'conditions' => array(
            'Fichee.id = Fichejour.id_s',
        )
    )
);


$options['fields'] = array(
'SUM(Nbl_Dos) AS `somme`'
);

$r1 = $this->Fichejour->find('all', $options);	
 $t1= $r1[0][0]['somme'];
    return $t1; 
  }

public function TotLignesDossPeriodeMillesim($num,$debut,$fin,$millesime){
// echo('num '.$num);
// echo('debut '.$debut);
// echo('fin '.$fin);
 //echo('millesim'.$millesime);
 
 $this->loadModel('Fichejour');
   $this->loadModel('Fichee');
   $options['conditions'] = array(
'Num_Dos'=>$num,
	 'Millesime Like  '=>'%'.$millesime,
   'STR_TO_DATE(Debut,"%d/%m/%Y") >= STR_TO_DATE("'.$debut.'","%d/%m/%Y")' ,
 ' STR_TO_DATE(Semaine,"%d/%m/%Y") <= STR_TO_DATE("'.$fin.'","%d/%m/%Y") '

);
  $options['joins'] = array(
    array('table' => 'fichees',
        'alias' => 'Fichee',
        'type' => 'LEFT',
        'conditions' => array(
            'Fichee.id = Fichejour.id_s',
        )
    )
);


$options['fields'] = array(
'SUM(Nbl_Dos) AS `somme`'
);

$r1 = $this->Fichejour->find('all', $options);	
 $t1= $r1[0][0]['somme'];
    return $t1; 
  }	

    
    
public function TotLignesDossPeriode ($doss,$debut,$fin){
	//echo('TotLignesDossPeriode');
$this->loadModel('Fichejour');
   $this->loadModel('Fichee');
   $options['conditions'] = array(
'Num_Dos'=>$doss,
  'STR_TO_DATE(Debut,"%d/%m/%Y") >= STR_TO_DATE("'.$debut.'","%d/%m/%Y")' ,
 ' STR_TO_DATE(Semaine,"%d/%m/%Y") <= STR_TO_DATE("'.$fin.'","%d/%m/%Y") '

);
  $options['joins'] = array(
    array('table' => 'fichees',
        'alias' => 'Fichee',
        'type' => 'LEFT',
        'conditions' => array(
            'Fichee.id = Fichejour.id_s',
        )
    )
);


$options['fields'] = array(
'SUM(Fichejour.Nbl_Dos) AS `somme`'
);

$r1 = $this->Fichejour->find('all', $options);	
 $t1= $r1[0][0]['somme'];
    return $t1; 
  }
   
  
public function TotHeuresIntervTachePeriode($interv,$tache,$debut,$fin){
 $this->loadModel('Fichejour');
   $this->loadModel('Fichee');
  $options['joins'] = array(
    array('table' => 'fichees',
        'alias' => 'Fichee',
        'type' => 'LEFT',
        'conditions' => array(
            'Fichee.id = Fichejour.id_s',
        )
    )
);

$options['conditions'] = array(
   'Tache_Dos'=>$tache,
   'user_id' => ''.$interv,
   'STR_TO_DATE(Debut,"%d/%m/%Y") >= STR_TO_DATE("'.$debut.'","%d/%m/%Y")' ,
 ' STR_TO_DATE(Semaine,"%d/%m/%Y") <= STR_TO_DATE("'.$fin.'","%d/%m/%Y") '

);
$options['fields'] = array(
'SUM(Fichejour.Nbh_Dos) AS `somme`'
);

$r1 = $this->Fichejour->find('all', $options);	
 $t1= $r1[0][0]['somme'];
    return $t1; 	

  }
     
	 // sans periode
public function TotHeuresIntervTache($interv,$tache){
 $this->loadModel('Fichejour');
   $this->loadModel('Fichee');
  $options['joins'] = array(
    array('table' => 'fichees',
        'alias' => 'Fichee',
        'type' => 'LEFT',
        'conditions' => array(
            'Fichee.id = Fichejour.id_s',
        )
    )
);

$options['conditions'] = array(
   'Tache_Dos'=>$tache,
   'user_id' => ''.$interv
);
$options['fields'] = array(
'SUM(Fichejour.Nbh_Dos) AS `somme`'
);

$r1 = $this->Fichejour->find('all', $options);	
 $t1= $r1[0][0]['somme'];
    return $t1; 	
  }
  
  
  // TOTAL HEURES
  
  	 // sans periode
public function TotalHeures( ){
  	
$this->loadModel('Fichejour');
   $this->loadModel('Fichee');
  $options['joins'] = array(
    array('table' => 'fichees',
        'alias' => 'Fichee',
        'type' => 'LEFT',
        'conditions' => array(
            'Fichee.id = Fichejour.id_s',
        )
    )
);

$options['conditions'] = array();
$options['fields'] = array(
'SUM(Fichejour.Nbh_Dos) AS `somme`'
);

$r1 = $this->Fichejour->find('all', $options);	
 $t1= $r1[0][0]['somme'];
    return $t1; 	

  }
  
   /* */
public function TotHeuresIntervDoss($interv,$doss){
 $this->loadModel('Fichejour');
   $this->loadModel('Fichee');
  $options['joins'] = array(
    array('table' => 'fichees',
        'alias' => 'Fichee',
        'type' => 'LEFT',
        'conditions' => array(
            'Fichee.id = Fichejour.id_s',
        )
    )
);

$options['conditions'] = array(
   'Num_Dos'=>$doss,
   'user_id' => ''.$interv 
);
$options['fields'] = array(
'SUM(Fichejour.Nbh_Dos) AS `somme`'
);

$r1 = $this->Fichejour->find('all', $options);	
 $t1= $r1[0][0]['somme'];
    return $t1; 	
 
  }  
  
     /* avec periode*/
public function TotHeuresIntervDossPeriode($interv,$doss,$debut,$fin){
  $this->loadModel('Fichejour');
   $this->loadModel('Fichee');
  $options['joins'] = array(
    array('table' => 'fichees',
        'alias' => 'Fichee',
        'type' => 'LEFT',
        'conditions' => array(
            'Fichee.id = Fichejour.id_s',
        )
    )
);

$options['conditions'] = array(
'Num_Dos'=>$doss,
     'user_id' => ''.$interv,
  'STR_TO_DATE(Debut,"%d/%m/%Y") >= STR_TO_DATE("'.$debut.'","%d/%m/%Y")' ,
 ' STR_TO_DATE(Semaine,"%d/%m/%Y") <= STR_TO_DATE("'.$fin.'","%d/%m/%Y") '

);
$options['fields'] = array(
'SUM(Fichejour.Nbh_Dos) AS `somme`'
);

$r1 = $this->Fichejour->find('all', $options);	
 $t1= $r1[0][0]['somme'];
    return $t1; 
  }
  
  // avec millesime
public function TotHeuresIntervDossPeriodeMillesime($interv,$doss,$debut,$fin,$millesime){	
$this->loadModel('Fichejour');
   $this->loadModel('Fichee');
  $options['joins'] = array(
    array('table' => 'fichees',
        'alias' => 'Fichee',
        'type' => 'LEFT',
        'conditions' => array(
            'Fichee.id = Fichejour.id_s',
        )
    )
);

$options['conditions'] = array(
'Num_Dos'=>$doss,
     'user_id' => ''.$interv,
	 'Millesime Like  '=>'%'.$millesime,
   'STR_TO_DATE(Debut,"%d/%m/%Y") >= STR_TO_DATE("'.$debut.'","%d/%m/%Y")' ,
 ' STR_TO_DATE(Semaine,"%d/%m/%Y") <= STR_TO_DATE("'.$fin.'","%d/%m/%Y") '

);
$options['fields'] = array(
'SUM(Fichejour.Nbh_Dos) AS `somme`'
);

$r1 = $this->Fichejour->find('all', $options);	
 $t1= $r1[0][0]['somme'];
    return $t1; 
  
  }       
 
  // avec millesime sans periode
public function TotHeuresIntervDossMillesime($interv,$doss,$millesime){
 $this->loadModel('Fichejour');
   $this->loadModel('Fichee');
  $options['joins'] = array(
    array('table' => 'fichees',
        'alias' => 'Fichee',
        'type' => 'LEFT',
        'conditions' => array(
            'Fichee.id = Fichejour.id_s',
        )
    )
);

$options['conditions'] = array(
'Num_Dos'=>$doss,
     'user_id' => ''.$interv,
	 'Millesime Like  '=>'%'.$millesime
);
$options['fields'] = array(
'SUM(Fichejour.Nbh_Dos) AS `somme`'
);

$r1 = $this->Fichejour->find('all', $options);	
 $t1= $r1[0][0]['somme'];
    return $t1; 
  
  }       
  

  // avec millesime sans periode
public function TotHeuresDoss($doss){
 $this->loadModel('Fichee');
$this->loadModel('Fichejour');
   $this->loadModel('Fichee');
  $options['joins'] = array(
    array('table' => 'fichees',
        'alias' => 'Fichee',
        'type' => 'LEFT',
        'conditions' => array(
            'Fichee.id = Fichejour.id_s',
        )
    )
);

$options['conditions'] = array(
'Num_Dos'=>$doss
   
);
$options['fields'] = array(
'SUM(Fichejour.Nbh_Dos) AS `somme`'
);

$r1 = $this->Fichejour->find('all', $options);	
 $t1= $r1[0][0]['somme'];
    return $t1; 
  
  }       
     
   
  // avec millesime sans periode
public function TotHeuresDossMillesime($doss,$millesime){
 $this->loadModel('Fichejour');
   $this->loadModel('Fichee');
  $options['joins'] = array(
    array('table' => 'fichees',
        'alias' => 'Fichee',
        'type' => 'LEFT',
        'conditions' => array(
            'Fichee.id = Fichejour.id_s',
        )
    )
);

$options['conditions'] = array(
'Num_Dos'=>$doss,
	 'Millesime Like  '=>'%'.$millesime
);
$options['fields'] = array(
'SUM(Fichejour.Nbh_Dos) AS `somme`'
);

$r1 = $this->Fichejour->find('all', $options);	
 $t1= $r1[0][0]['somme'];
    return $t1; 
  
  }       
     
   


/****   FICHE DE TEMPS GLOBALE  ****/


public function TotHeuresIntervDossMission($interv,$doss,$miss,$task){
 
 $this->loadModel('Fichejour');
   $this->loadModel('Fichee');
   $options['conditions'] = array(
//'Nom_Dos'=>$doss,
'Num_Dos'=>$doss,
     'user_id' => ''.$interv,
	 'Millesime Like  '=>'%'.$miss.'%'
);
  $options['joins'] = array(
    array('table' => 'fichees',
        'alias' => 'Fichee',
        'type' => 'LEFT',
        'conditions' => array(
            'Fichee.id = Fichejour.id_s',
        )
    )
);


$options['fields'] = array(
'SUM(Fichejour.Nbh_Dos) AS `somme`'
);

$r1 = $this->Fichejour->find('all', $options);	
 $t1= $r1[0][0]['somme'];
   
 
 $st= $t1;
 $prix=0;	
$this->loadModel('Equipe');
     $mission = $this->Equipe->find('first',array('fields'=>'Equipe.prix1','conditions' => array ('Equipe.intervenant'=>$interv,'Equipe.mission'=>$task)) );
if  ( isset( $mission['Equipe']['prix1'])){$prix=$mission['Equipe']['prix1'];}
  
 return $st*$prix;

 return $st;
  }
 
  
/// total heures Sans prix 
public function TotalHeuresIntervMission1($interv ,$miss){
//	echo(' miss=  '+$miss);
 $this->loadModel('Fichejour');
   $this->loadModel('Fichee');
  $options['joins'] = array(
    array('table' => 'fichees',
        'alias' => 'Fichee',
        'type' => 'LEFT',
        'conditions' => array(
            'Fichee.id = Fichejour.id_s',
        )
    )
);

$options['conditions'] = array(
'Num_Dos'=>$doss,
     'user_id' => ''.$interv,
	 'Mission Like  '=>$miss
   
);
$options['fields'] = array(
'SUM(Fichejour.Nbh_Dos) AS `somme`'
);

$r1 = $this->Fichejour->find('all', $options);	
 $t1= $r1[0][0]['somme'];
   if($t1>0) {return $t1; }
   else {return 0;}
 }

  
 //// sans prix

public function TotalHeuresIntervDossMission($interv,$doss,$miss){

 $this->loadModel('Fichejour');
   $this->loadModel('Fichee');
  $options['joins'] = array(
    array('table' => 'fichees',
        'alias' => 'Fichee',
        'type' => 'LEFT',
        'conditions' => array(
            'Fichee.id = Fichejour.id_s',
        )
    )
);

$options['conditions'] = array(

'Num_Dos'=>$doss,
 'user_id' => ''.$interv ,
  'Mission like'=>'%'.$miss.'%'
);
$options['fields'] = array(
'SUM(Fichejour.Nbh_Dos) AS `somme`'
);

$r1 = $this->Fichejour->find('all', $options);	
 $t1= $r1[0][0]['somme'];
    return $t1; 
 }
 
 
public function TotalHeuresIntervDossMission1($interv,$doss,$miss){
	//echo('doss='+$doss);
$this->loadModel('Fichejour');
   $this->loadModel('Fichee');
   
   $options['conditions'] = array(
'Num_Dos'=>$doss,
     'user_id' => ''.$interv,
	'Millesime  Like  '=>$miss
);
  $options['joins'] = array(
    array('table' => 'fichees',
        'alias' => 'Fichee',
        'type' => 'LEFT',
        'conditions' => array(
            'Fichee.id = Fichejour.id_s',
        )
    )
);


$options['fields'] = array(
'SUM(Fichejour.Nbh_Dos) AS `somme`'
);
$t1=0;
$r1 = $this->Fichejour->find('all', $options);	
 $t1= $r1[0][0]['somme'];
 if ($t1>0){    return $t1;}
 else {return 0;}
   
   }
 
 
 // avec periode
public function TotalHeuresIntervDossMissionPeriode($interv,$doss,$miss,$debut,$fin){
 $this->loadModel('Fichejour');
   $this->loadModel('Fichee');
   $options['conditions'] = array(
'Num_Dos'=>$doss,
     'user_id' => ''.$interv,
	'Mission like'=>'%'.$miss.'%',
  'STR_TO_DATE(Debut,"%d/%m/%Y") >= STR_TO_DATE("'.$debut.'","%d/%m/%Y")' ,
 ' STR_TO_DATE(Semaine,"%d/%m/%Y") <= STR_TO_DATE("'.$fin.'","%d/%m/%Y") '

);
  $options['joins'] = array(
    array('table' => 'fichees',
        'alias' => 'Fichee',
        'type' => 'LEFT',
        'conditions' => array(
            'Fichee.id = Fichejour.id_s',
        )
    )
);


$options['fields'] = array(
'SUM(Fichejour.Nbh_Dos) AS `somme`'
);

$r1 = $this->Fichejour->find('all', $options);	
 $t1= $r1[0][0]['somme'];
    return $t1; 
  }
 
  // avec millesime
public function TotalHeuresIntervDossMissionPeriodeMillesime($interv,$doss,$miss,$debut,$fin,$millesime){
$this->loadModel('Fichejour');
   $this->loadModel('Fichee');
   $options['conditions'] = array(
'Num_Dos'=>$doss,
'Mission like'=>'%'.$miss.'%',
     'user_id' => ''.$interv,
	'Millesime Like  '=>'%'.$millesime,
   'STR_TO_DATE(Debut,"%d/%m/%Y") >= STR_TO_DATE("'.$debut.'","%d/%m/%Y")' ,
 ' STR_TO_DATE(Semaine,"%d/%m/%Y") <= STR_TO_DATE("'.$fin.'","%d/%m/%Y") '

);
  $options['joins'] = array(
    array('table' => 'fichees',
        'alias' => 'Fichee',
        'type' => 'LEFT',
        'conditions' => array(
            'Fichee.id = Fichejour.id_s',
        )
    )
);


$options['fields'] = array(
'SUM(Fichejour.Nbh_Dos) AS `somme`'
);

$r1 = $this->Fichejour->find('all', $options);	
 $t1= $r1[0][0]['somme'];
    return $t1; 
  }
 
 
  // avec millesime   sans periode
public function TotalHeuresIntervDossMissionMillesime($interv,$doss,$miss,$millesime){
	
  	/* here supp periode*/
$this->loadModel('Fichejour');
   $this->loadModel('Fichee');
   $options['conditions'] = array(
     'Num_Dos'=>$doss,
     'user_id' => ''.$interv,
	 'Millesime Like  '=>'%'.$millesime,
	 'Mission like'=>    '%'.$miss.'%');
  $options['joins'] = array(
    array('table' => 'fichees',
        'alias' => 'Fichee',
        'type' => 'LEFT',
        'conditions' => array(
            'Fichee.id = Fichejour.id_s',
        )
    )
);


$options['fields'] = array(
'SUM(Fichejour.Nbh_Dos) AS `somme`'
);

$r1 = $this->Fichejour->find('all', $options);	
 $t1= $r1[0][0]['somme'];
    return $t1; 
  }
 
 /// Heures Dossier et Mission  1020
public function TotalHeuresDossMission($doss,$miss){
$this->loadModel('Fichejour');
   $this->loadModel('Fichee');
   $options['conditions'] = array(
'Num_Dos'=>$doss,
    'Mission'=>$miss
);
  $options['joins'] = array(
    array('table' => 'fichees',
        'alias' => 'Fichee',
        'type' => 'LEFT',
        'conditions' => array(
            'Fichee.id = Fichejour.id_s',
        )
    )
);


$options['fields'] = array(
'SUM(Fichejour.Nbh_Dos) AS `somme`'
);

$r1 = $this->Fichejour->find('all', $options);	
 $t1= $r1[0][0]['somme'];
    return $t1; 
  }
  
 /// Heures Dossier et Mission   // avec periode
public function TotalHeuresDossMissionPeriode($doss,$miss,$debut,$fin){
$this->loadModel('Fichejour');
   $this->loadModel('Fichee');
   $options['conditions'] = array(
'Num_Dos'=>$doss,
    'Mission'=>$miss,
 'STR_TO_DATE(Debut,"%d/%m/%Y") >= STR_TO_DATE("'.$debut.'","%d/%m/%Y")' ,
 ' STR_TO_DATE(Semaine,"%d/%m/%Y") <= STR_TO_DATE("'.$fin.'","%d/%m/%Y") '

);
  $options['joins'] = array(
    array('table' => 'fichees',
        'alias' => 'Fichee',
        'type' => 'LEFT',
        'conditions' => array(
            'Fichee.id = Fichejour.id_s',
        )
    )
);


$options['fields'] = array(
'SUM(Fichejour.Nbh_Dos) AS `somme`'
);

$r1 = $this->Fichejour->find('all', $options);	
 $t1= $r1[0][0]['somme'];
    return $t1; 
  }
  
    
 ///  Avec Millesime
public function TotalHeuresDossMissionPeriodeMillesime($doss,$miss,$debut,$fin,$millesime){
$this->loadModel('Fichejour');
   $this->loadModel('Fichee');
   $options['conditions'] = array(
'Num_Dos'=>$doss,
    'Mission'=>$miss, 
	 'Millesime Like  '=>'%'.$millesime,
  'STR_TO_DATE(Debut,"%d/%m/%Y") >= STR_TO_DATE("'.$debut.'","%d/%m/%Y")' ,
 ' STR_TO_DATE(Semaine,"%d/%m/%Y") <= STR_TO_DATE("'.$fin.'","%d/%m/%Y") '

);
  $options['joins'] = array(
    array('table' => 'fichees',
        'alias' => 'Fichee',
        'type' => 'LEFT',
        'conditions' => array(
            'Fichee.id = Fichejour.id_s',
        )
    )
);


$options['fields'] = array(
'SUM(Fichejour.Nbh_Dos) AS `somme`'
);

$r1 = $this->Fichejour->find('all', $options);	
 $t1= $r1[0][0]['somme'];
    return $t1; 
 
  }
    
    
 ///  Avec Millesime  sans periode
public function TotalHeuresDossMissionMillesime($doss,$miss,$millesime){
 $this->loadModel('Fichejour');
   $this->loadModel('Fichee');
   $options['conditions'] = array(
'Num_Dos'=>$doss,
    'Mission'=>$miss, 
	 'Millesime Like  '=>'%'.$millesime
);
  $options['joins'] = array(
    array('table' => 'fichees',
        'alias' => 'Fichee',
        'type' => 'LEFT',
        'conditions' => array(
            'Fichee.id = Fichejour.id_s',
        )
    )
);


$options['fields'] = array(
'SUM(Fichejour.Nbh_Dos) AS `somme`'
);

$r1 = $this->Fichejour->find('all', $options);	
 $t1= $r1[0][0]['somme'];
    return $t1; 
  }	
	
	
 /// Heures Dossier   // avec periode
public function TotalHeuresDossPeriode($doss,$debut,$fin){
	//echo('TotalHeuresDossPeriode');
 $this->loadModel('Fichejour');
   $this->loadModel('Fichee');
   $options['conditions'] = array(
'Num_Dos'=>$doss,
  'STR_TO_DATE(Debut,"%d/%m/%Y") >= STR_TO_DATE("'.$debut.'","%d/%m/%Y")' ,
 ' STR_TO_DATE(Semaine,"%d/%m/%Y") <= STR_TO_DATE("'.$fin.'","%d/%m/%Y") '

);
  $options['joins'] = array(
    array('table' => 'fichees',
        'alias' => 'Fichee',
        'type' => 'LEFT',
        'conditions' => array(
            'Fichee.id = Fichejour.id_s',
        )
    )
);


$options['fields'] = array(
'SUM(Fichejour.Nbh_Dos) AS `somme`'
);

$r1 = $this->Fichejour->find('all', $options);	
 $t1= $r1[0][0]['somme'];
    return $t1; 
  }
    
// avec millesime
  
public function TotalHeuresDossPeriodeMillesime($doss,$debut,$fin,$millesime){
 $this->loadModel('Fichejour');
   $this->loadModel('Fichee');
   $options['conditions'] = array(
'Num_Dos'=>$doss,
	 'Millesime Like  '=>'%'.$millesime,
   'STR_TO_DATE(Debut,"%d/%m/%Y") >= STR_TO_DATE("'.$debut.'","%d/%m/%Y")' ,
 ' STR_TO_DATE(Semaine,"%d/%m/%Y") <= STR_TO_DATE("'.$fin.'","%d/%m/%Y") '

);
  $options['joins'] = array(
    array('table' => 'fichees',
        'alias' => 'Fichee',
        'type' => 'LEFT',
        'conditions' => array(
            'Fichee.id = Fichejour.id_s',
        )
    )
);


$options['fields'] = array(
'SUM(Fichejour.Nbh_Dos) AS `somme`'
);

$r1 = $this->Fichejour->find('all', $options);	
 $t1= $r1[0][0]['somme'];
    return $t1; 
  }	
	
 /// Heures Dossier   
public function TotalHeuresDoss ($doss ){
$this->loadModel('Fichejour');
   $this->loadModel('Fichee');
   $options['conditions'] = array(
'Num_Dos'=>$doss);
  $options['joins'] = array(
    array('table' => 'fichees',
        'alias' => 'Fichee',
        'type' => 'LEFT',
        'conditions' => array(
            'Fichee.id = Fichejour.id_s',
        )
    )
);


$options['fields'] = array(
'SUM(Fichejour.Nbh_Dos) AS `somme`'
);

$r1 = $this->Fichejour->find('all', $options);	
 $t1= $r1[0][0]['somme'];
    return $t1; 
  }
   
 /// Heures  Mission
public function TotalHeuresMission($miss){
$this->loadModel('Fichejour');
   $this->loadModel('Fichee');
   $options['conditions'] = array(
'Mission'=>$miss);
  $options['joins'] = array(
    array('table' => 'fichees',
        'alias' => 'Fichee',
        'type' => 'LEFT',
        'conditions' => array(
            'Fichee.id = Fichejour.id_s',
        )
    )
);


$options['fields'] = array(
'SUM(Fichejour.Nbh_Dos) AS `somme`'
);

$r1 = $this->Fichejour->find('all', $options);	
 $t1= $r1[0][0]['somme'];
    return $t1; 
  }
 
  
 /// Heures Dossier et Mission  // avec periode
public function TotalHeuresMissionPeriode($miss,$debut,$fin){
	//echo('TotalHeuresMissionPeriode');
 $this->loadModel('Fichejour');
   $this->loadModel('Fichee');
   $options['conditions'] = array(
     'Mission'=>$miss,
	'STR_TO_DATE(Debut,"%d/%m/%Y") >= STR_TO_DATE("'.$debut.'","%d/%m/%Y")' ,
 ' STR_TO_DATE(Semaine,"%d/%m/%Y") <= STR_TO_DATE("'.$fin.'","%d/%m/%Y") '
);
  $options['joins'] = array(
    array('table' => 'fichees',
        'alias' => 'Fichee',
        'type' => 'LEFT',
        'conditions' => array(
            'Fichee.id = Fichejour.id_s',
        )
    )
);


$options['fields'] = array(
'SUM(Fichejour.Nbh_Dos) AS `somme`'
);

$r1 = $this->Fichejour->find('all', $options);	
 $t1= $r1[0][0]['somme'];
    return $t1; 
  }
 /// Heures Dossier et Tache
public function TotalHeuresDossTache($doss,$tache){
$this->loadModel('Fichejour');
   $this->loadModel('Fichee');
   $options['conditions'] = array(
'Num_Dos'=>$doss,
    	'Tache_Dos'=>$tache
);
  $options['joins'] = array(
    array('table' => 'fichees',
        'alias' => 'Fichee',
        'type' => 'LEFT',
        'conditions' => array(
            'Fichee.id = Fichejour.id_s',
        )
    )
);


$options['fields'] = array(
'SUM(Fichejour.Nbh_Dos) AS `somme`'
);

$r1 = $this->Fichejour->find('all', $options);	
 $t1= $r1[0][0]['somme'];
    return $t1; 
  }
 
 /// Heures Dossier et Tache  Avec periode
public function TotalHeuresDossTachePeriode($doss,$tache,$debut,$fin){
	//echo('TotalHeuresDossTachePeriode');
$this->loadModel('Fichejour');
   $this->loadModel('Fichee');
   $options['conditions'] = array(
'Num_Dos'=>$doss,
    'Tache_Dos'=>$tache,
  'STR_TO_DATE(Debut,"%d/%m/%Y") >= STR_TO_DATE("'.$debut.'","%d/%m/%Y")' ,
 ' STR_TO_DATE(Semaine,"%d/%m/%Y") <= STR_TO_DATE("'.$fin.'","%d/%m/%Y") '

);
  $options['joins'] = array(
    array('table' => 'fichees',
        'alias' => 'Fichee',
        'type' => 'LEFT',
        'conditions' => array(
            'Fichee.id = Fichejour.id_s',
        )
    )
);


$options['fields'] = array(
'SUM(Fichejour.Nbh_Dos) AS `somme`'
);

$r1 = $this->Fichejour->find('all', $options);	
 $t1= $r1[0][0]['somme'];
    return $t1; 
  } 
  

 /// Heures Dossier et Tache  Avec periode
public function TotalHeuresDossTachePeriodeMillesime($doss,$tache,$debut,$fin,$millesime){
$this->loadModel('Fichejour');
   $this->loadModel('Fichee');
   $options['conditions'] = array(
'Num_Dos'=>$doss,
    'Tache_Dos'=>$tache,
	 'Millesime Like  '=>'%'.$millesime,
   'STR_TO_DATE(Debut,"%d/%m/%Y") >= STR_TO_DATE("'.$debut.'","%d/%m/%Y")' ,
 ' STR_TO_DATE(Semaine,"%d/%m/%Y") <= STR_TO_DATE("'.$fin.'","%d/%m/%Y") '

);
  $options['joins'] = array(
    array('table' => 'fichees',
        'alias' => 'Fichee',
        'type' => 'LEFT',
        'conditions' => array(
            'Fichee.id = Fichejour.id_s',
        )
    )
);


$options['fields'] = array(
'SUM(Fichejour.Nbh_Dos) AS `somme`'
);

$r1 = $this->Fichejour->find('all', $options);	
 $t1= $r1[0][0]['somme'];
    return $t1; 
  }   
  

 /// Heures Dossier et Tache  sans periode avec millesime
public function TotalHeuresDossTacheMillesime($doss,$tache,$millesime){
$this->loadModel('Fichejour');
   $this->loadModel('Fichee');
   $options['conditions'] = array(
'Num_Dos'=>$doss,
 'Millesime Like  '=>'%'.$millesime,
	'Tache_Dos'=>$tache
  );
  $options['joins'] = array(
    array('table' => 'fichees',
        'alias' => 'Fichee',
        'type' => 'LEFT',
        'conditions' => array(
            'Fichee.id = Fichejour.id_s',
        )
    )
);


$options['fields'] = array(
'SUM(Fichejour.Nbh_Dos) AS `somme`'
);

$r1 = $this->Fichejour->find('all', $options);	
 $t1= $r1[0][0]['somme'];
    return $t1; 
  }     
  
  
 /// Heures  Tache   
public function TotalHeuresTache($tache){
 $this->loadModel('Fichejour');
   $this->loadModel('Fichee');
   $options['conditions'] = array(
'Tache_Dos'=>$tache
);
  $options['joins'] = array(
    array('table' => 'fichees',
        'alias' => 'Fichee',
        'type' => 'LEFT',
        'conditions' => array(
            'Fichee.id = Fichejour.id_s',
        )
    )
);


$options['fields'] = array(
'SUM(Fichejour.Nbh_Dos) AS `somme`'
);

$r1 = $this->Fichejour->find('all', $options);	
 $t1= $r1[0][0]['somme'];
    return $t1; 
  }
  
 /// Heures  Tache   // avec periode
public function TotalHeuresTachePeriode($tache,$debut,$fin){
$this->loadModel('Fichejour');
   $this->loadModel('Fichee');
   $options['conditions'] = array(
'Tache_Dos'=>$tache,
   'STR_TO_DATE(Debut,"%d/%m/%Y") >= STR_TO_DATE("'.$debut.'","%d/%m/%Y")' ,
 ' STR_TO_DATE(Semaine,"%d/%m/%Y") <= STR_TO_DATE("'.$fin.'","%d/%m/%Y") '

);
  $options['joins'] = array(
    array('table' => 'fichees',
        'alias' => 'Fichee',
        'type' => 'LEFT',
        'conditions' => array(
            'Fichee.id = Fichejour.id_s',
        )
    )
);


$options['fields'] = array(
'SUM(Fichejour.Nbh_Dos) AS `somme`'
);

$r1 = $this->Fichejour->find('all', $options);	
 $t1= $r1[0][0]['somme'];
    return $t1; 
  }
 
public function TotaldesHeuresIntervMission($interv,$miss){
$this->loadModel('Fichejour');
   $this->loadModel('Fichee');
   $options['conditions'] = array(
     'user_id' => ''.$interv,
	'Mission'=>$miss
);
  $options['joins'] = array(
    array('table' => 'fichees',
        'alias' => 'Fichee',
        'type' => 'LEFT',
        'conditions' => array(
            'Fichee.id = Fichejour.id_s',
        )
    )
);


$options['fields'] = array(
'SUM(Fichejour.Nbh_Dos) AS `somme`'
);

$r1 = $this->Fichejour->find('all', $options);	
 $t1= $r1[0][0]['somme'];
    return $t1; 
  }
 
/* avec periode*/
public function TotaldesHeuresIntervMissionPeriode($interv,$miss,$debut,$fin){
$this->loadModel('Fichejour');
   $this->loadModel('Fichee');
   $options['conditions'] = array(
     'user_id' => ''.$interv,
	'Mission'=>$miss,
  'STR_TO_DATE(Debut,"%d/%m/%Y") >= STR_TO_DATE("'.$debut.'","%d/%m/%Y")' ,
 ' STR_TO_DATE(Semaine,"%d/%m/%Y") <= STR_TO_DATE("'.$fin.'","%d/%m/%Y") '

);
  $options['joins'] = array(
    array('table' => 'fichees',
        'alias' => 'Fichee',
        'type' => 'LEFT',
        'conditions' => array(
            'Fichee.id = Fichejour.id_s',
        )
    )
);


$options['fields'] = array(
'SUM(Fichejour.Nbh_Dos) AS `somme`'
);

$r1 = $this->Fichejour->find('all', $options);	
 $t1= $r1[0][0]['somme'];
    return $t1; 
  } 
  
  
  /*  heures intervenant par tach et dossier**/
public function TotalHeuresIntervDossTache($interv,$doss,$tache){
$this->loadModel('Fichejour');
   $this->loadModel('Fichee');
   $options['conditions'] = array(
'Num_Dos'=>$doss,
     'user_id' => ''.$interv,
	'Tache_Dos'=>$tache
);
  $options['joins'] = array(
    array('table' => 'fichees',
        'alias' => 'Fichee',
        'type' => 'LEFT',
        'conditions' => array(
            'Fichee.id = Fichejour.id_s',
        )
    )
);


$options['fields'] = array(
'SUM(Fichejour.Nbh_Dos) AS `somme`'
);

$r1 = $this->Fichejour->find('all', $options);	
 $t1= $r1[0][0]['somme'];
    return $t1; 
  } 
  /*** ajouter periode*/
 public function TotalHeuresIntervDossTachePeriode($interv,$doss,$tache ,$debut,$fin){
$this->loadModel('Fichejour');
   $this->loadModel('Fichee');
   $options['conditions'] = array(
'Num_Dos'=>$doss,
     'user_id' => ''.$interv,
	'Tache_Dos'=>$tache,
   'STR_TO_DATE(Debut,"%d/%m/%Y") >= STR_TO_DATE("'.$debut.'","%d/%m/%Y")' ,
 ' STR_TO_DATE(Semaine,"%d/%m/%Y") <= STR_TO_DATE("'.$fin.'","%d/%m/%Y") '

);
  $options['joins'] = array(
    array('table' => 'fichees',
        'alias' => 'Fichee',
        'type' => 'LEFT',
        'conditions' => array(
            'Fichee.id = Fichejour.id_s',
        )
    )
);


$options['fields'] = array(
'SUM(Fichejour.Nbh_Dos) AS `somme`'
);

$r1 = $this->Fichejour->find('all', $options);	
 $t1= $r1[0][0]['somme'];
    return $t1; 
  } 
  
   // Avec Millesime
   public function TotalHeuresIntervDossTachePeriodeMillesime($interv,$doss,$tache ,$debut,$fin,$millesime){
 $this->loadModel('Fichejour');
   $this->loadModel('Fichee');
   $options['conditions'] = array(
'Num_Dos'=>$doss,
     'user_id' => ''.$interv,
	 'Millesime Like  '=>'%'.$millesime,
	 'Tache_Dos'=>$tache,
  'STR_TO_DATE(Debut,"%d/%m/%Y") >= STR_TO_DATE("'.$debut.'","%d/%m/%Y")' ,
 ' STR_TO_DATE(Semaine,"%d/%m/%Y") <= STR_TO_DATE("'.$fin.'","%d/%m/%Y") '

);
  $options['joins'] = array(
    array('table' => 'fichees',
        'alias' => 'Fichee',
        'type' => 'LEFT',
        'conditions' => array(
            'Fichee.id = Fichejour.id_s',
        )
    )
);


$options['fields'] = array(
'SUM(Fichejour.Nbh_Dos) AS `somme`'
);

$r1 = $this->Fichejour->find('all', $options);	
 $t1= $r1[0][0]['somme'];
    return $t1; 
  } 
   
    // Avec Millesime  sans periode
   public function TotalHeuresIntervDossTacheMillesime($interv,$doss,$tache , $millesime){
	   
$this->loadModel('Fichejour');
   $this->loadModel('Fichee');
   $options['conditions'] = array(
'Num_Dos'=>$doss,
     'user_id' => ''.$interv,
	 'Millesime Like  '=>'%'.$millesime,
	 'Tache_Dos'=>$tache
  );
  $options['joins'] = array(
    array('table' => 'fichees',
        'alias' => 'Fichee',
        'type' => 'LEFT',
        'conditions' => array(
            'Fichee.id = Fichejour.id_s',
        )
    )
);


$options['fields'] = array(
'SUM(Fichejour.Nbh_Dos) AS `somme`'
);

$r1 = $this->Fichejour->find('all', $options);	
 $t1= $r1[0][0]['somme'];
    return $t1; 
  }  
  
/* heures interv mission avec prix heure :*/
public function TotHeuresIntervMission($interv ,$miss,$task){
$this->loadModel('Fichejour');
   $this->loadModel('Fichee');
   $options['conditions'] = array(
     'user_id' => ''.$interv,
	'Millesime Like  '=>'%'.$miss.'%'
);
  $options['joins'] = array(
    array('table' => 'fichees',
        'alias' => 'Fichee',
        'type' => 'LEFT',
        'conditions' => array(
            'Fichee.id = Fichejour.id_s',
        )
    )
);


$options['fields'] = array(
'SUM(Fichejour.Nbh_Dos) AS `somme`'
);

$r1 = $this->Fichejour->find('all', $options);	
 $t1= $r1[0][0]['somme'];
    return $t1; 
$prix=0;	
$this->loadModel('Equipe');
     $mission = $this->Equipe->find('first',array('fields'=>'Equipe.prix1','conditions' => array ('Equipe.intervenant'=>$interv,'Equipe.mission'=>$task)) );
if  ( isset( $mission['Equipe']['prix1'])){$prix=$mission['Equipe']['prix1'];}
  
 return $t1*$prix;
  }

public function ListeIntervenants()
{
$this->loadModel('User');
     $liste = $this->User->find('list',array('fields'=>'username')) ;
  return  $liste;
 }
public function calcul( $miss,$task)
{$intervs=$this->ListeIntervenants();$valInterv=0;
foreach ($intervs as  $num=>$nom)
{$valInterv=$valInterv+$this->TotHeuresIntervMission($num ,$miss,$task);}
return $valInterv;
}
public function calculDoss( $doss,$miss,$task)
{$intervs=$this->ListeIntervenants();$valInterv=0;
foreach ($intervs as  $num=>$nom)
{$valInterv=$valInterv+$this->TotHeuresIntervDossMission($num ,$doss,$miss,$task);}
return $valInterv;
}


public function TotalBulletinsIntervDossMission($interv,$doss,$miss,$champ){
//	echo('doss='.$doss.'miss='.$miss);
$this->loadModel('Fichejour');
   $this->loadModel('Fichee');
   $options['conditions'] = array(
'Num_Dos'=>$doss,
     'user_id' => ''.$interv,
	 'Millesime Like  '=>'%'.$miss);
  $options['joins'] = array(
    array('table' => 'fichees',
        'alias' => 'Fichee',
        'type' => 'LEFT',
        'conditions' => array(
            'Fichee.id = Fichejour.id_s',
        )
    )
);


$options['fields'] = array(
'SUM(Fichejour.'.$champ.') AS `somme`'
);
$t1=0;
$r1 = $this->Fichejour->find('all', $options);	
 $t1= $r1[0][0]['somme'];
   if ($t1 > 0) {return $t1; }
else {return 0;}
  }

// bulletins sans interv
/*
public function TotalBulletinsDossMission($doss,$miss,$champ){
 $this->loadModel('Fiche');
  	
$r1 = $this->Fiche->find('all',array( 'conditions' => array ('Lundi_Nom_Dos1'=>$doss,'Lundi_Millesime1 Like  '=>'%'.$miss.'%'),'fields' => array('SUM(Fiche.Lundi_'.$champ.'1) AS `somme`')));
$r2 = $this->Fiche->find('all',array( 'conditions' => array ('Lundi_Nom_Dos2'=>$doss,'Lundi_Millesime2 Like  '=>'%'.$miss.'%' ),'fields' => array('SUM(Fiche.Lundi_'.$champ.'2) AS `somme`')));
$r3 = $this->Fiche->find('all',array( 'conditions' => array ('Lundi_Nom_Dos3'=>$doss,'Lundi_Millesime3 Like  '=>'%'.$miss.'%' ),'fields' => array('SUM(Fiche.Lundi_'.$champ.'3) AS `somme`')));
$r4 = $this->Fiche->find('all',array( 'conditions' => array ('Lundi_Nom_Dos4'=>$doss,'Lundi_Millesime4 Like  '=>'%'.$miss.'%' ),'fields' => array('SUM(Fiche.Lundi_'.$champ.'4) AS `somme`')));
$r5 = $this->Fiche->find('all',array( 'conditions' => array ('Lundi_Nom_Dos5'=>$doss,'Lundi_Millesime5 Like  '=>'%'.$miss .'%'),'fields' => array('SUM(Fiche.Lundi_'.$champ.'5) AS `somme`')));

$r6 = $this->Fiche->find('all',array( 'conditions' => array ('Mardi_Nom_Dos1'=>$doss,'Mardi_Millesime1 Like  '=>'%'.$miss.'%' ),'fields' => array('SUM(Fiche.Mardi_'.$champ.'1) AS `somme`')));
$r7 = $this->Fiche->find('all',array( 'conditions' => array ('Mardi_Nom_Dos2'=>$doss,'Mardi_Millesime2 Like  '=>'%'.$miss .'%'),'fields' => array('SUM(Fiche.Mardi_'.$champ.'2) AS `somme`')));
$r8 = $this->Fiche->find('all',array( 'conditions' => array ('Mardi_Nom_Dos3'=>$doss,'Mardi_Millesime3 Like  '=>'%'.$miss.'%' ),'fields' => array('SUM(Fiche.Mardi_'.$champ.'3) AS `somme`')));
$r9 = $this->Fiche->find('all',array( 'conditions' => array ('Mardi_Nom_Dos4'=>$doss,'Mardi_Millesime4 Like  '=>'%'.$miss.'%' ),'fields' => array('SUM(Fiche.Mardi_'.$champ.'4) AS `somme`')));
$r10 = $this->Fiche->find('all',array( 'conditions' => array ('Mardi_Nom_Dos5'=>$doss,'Mardi_Millesime5 Like  '=>'%'.$miss.'%' ),'fields' => array('SUM(Fiche.Mardi_'.$champ.'5) AS `somme`')));
   
$r11 = $this->Fiche->find('all',array( 'conditions' => array ('Mercredi_Nom_Dos1'=>$doss,'Mercredi_Millesime1 Like  '=>'%'.$miss.'%' ),'fields' => array('SUM(Fiche.Mercredi_'.$champ.'1) AS `somme`')));
$r12 = $this->Fiche->find('all',array( 'conditions' => array ('Mercredi_Nom_Dos2'=>$doss,'Mercredi_Millesime2 Like  '=>'%'.$miss.'%' ),'fields' => array('SUM(Fiche.Mercredi_'.$champ.'2) AS `somme`')));
$r13 = $this->Fiche->find('all',array( 'conditions' => array ('Mercredi_Nom_Dos3'=>$doss,'Mercredi_Millesime3 Like  '=>'%'.$miss .'%'),'fields' => array('SUM(Fiche.Mercredi_'.$champ.'3) AS `somme`')));
$r14 = $this->Fiche->find('all',array( 'conditions' => array ('Mercredi_Nom_Dos4'=>$doss,'Mercredi_Millesime4 Like  '=>'%'.$miss.'%' ),'fields' => array('SUM(Fiche.Mercredi_'.$champ.'4) AS `somme`')));
$r15 = $this->Fiche->find('all',array( 'conditions' => array ('Mercredi_Nom_Dos5'=>$doss,'Mercredi_Millesime5 Like  '=>'%'.$miss.'%' ),'fields' => array('SUM(Fiche.Mercredi_'.$champ.'5) AS `somme`')));
 
$r16 = $this->Fiche->find('all',array( 'conditions' => array ('Jeudi_Nom_Dos1'=>$doss,'Jeudi_Millesime1 Like  '=>'%'.$miss.'%' ),'fields' => array('SUM(Fiche.Jeudi_'.$champ.'1) AS `somme`')));
$r17 = $this->Fiche->find('all',array( 'conditions' => array ('Jeudi_Nom_Dos2'=>$doss,'Jeudi_Millesime2 Like  '=>'%'.$miss.'%' ),'fields' => array('SUM(Fiche.Jeudi_'.$champ.'2) AS `somme`')));
$r18 = $this->Fiche->find('all',array( 'conditions' => array ('Jeudi_Nom_Dos3'=>$doss,'Jeudi_Millesime3 Like  '=>'%'.$miss.'%' ),'fields' => array('SUM(Fiche.Jeudi_'.$champ.'3) AS `somme`')));
$r19 = $this->Fiche->find('all',array( 'conditions' => array ('Jeudi_Nom_Dos4'=>$doss,'Jeudi_Millesime4 Like  '=>'%'.$miss.'%' ),'fields' => array('SUM(Fiche.Jeudi_'.$champ.'4) AS `somme`')));
$r20 = $this->Fiche->find('all',array( 'conditions' => array ('Jeudi_Nom_Dos5'=>$doss,'Jeudi_Millesime5 Like  '=>'%'.$miss.'%' ),'fields' => array('SUM(Fiche.Jeudi_'.$champ.'5) AS `somme`')));
 
$r21 = $this->Fiche->find('all',array( 'conditions' => array ('Vendredi_Nom_Dos1'=>$doss,'Vendredi_Millesime1 Like  '=>'%'.$miss.'%' ),'fields' => array('SUM(Fiche.Vendredi_'.$champ.'1) AS `somme`')));
$r22 = $this->Fiche->find('all',array( 'conditions' => array ('Vendredi_Nom_Dos2'=>$doss,'Vendredi_Millesime2 Like  '=>'%'.$miss.'%' ),'fields' => array('SUM(Fiche.Vendredi_'.$champ.'2) AS `somme`')));
$r23 = $this->Fiche->find('all',array( 'conditions' => array ('Vendredi_Nom_Dos3'=>$doss,'Vendredi_Millesime3 Like  '=>'%'.$miss.'%' ),'fields' => array('SUM(Fiche.Vendredi_'.$champ.'3) AS `somme`')));
$r24 = $this->Fiche->find('all',array( 'conditions' => array ('Vendredi_Nom_Dos4'=>$doss,'Vendredi_Millesime4 Like  '=>'%'.$miss.'%' ),'fields' => array('SUM(Fiche.Vendredi_'.$champ.'4) AS `somme`')));
$r25 = $this->Fiche->find('all',array( 'conditions' => array ('Vendredi_Nom_Dos5'=>$doss,'Vendredi_Millesime5 Like  '=>'%'.$miss.'%' ),'fields' => array('SUM(Fiche.Vendredi_'.$champ.'5) AS `somme`')));
 
$r26 = $this->Fiche->find('all',array( 'conditions' => array ('Samedi_Nom_Dos1'=>$doss,'Samedi_Millesime1 Like  '=>'%'.$miss.'%' ),'fields' => array('SUM(Fiche.Samedi_'.$champ.'1) AS `somme`')));
$r27 = $this->Fiche->find('all',array( 'conditions' => array ('Samedi_Nom_Dos2'=>$doss,'Samedi_Millesime2 Like  '=>'%'.$miss.'%' ),'fields' => array('SUM(Fiche.Samedi_'.$champ.'2) AS `somme`')));
$r28 = $this->Fiche->find('all',array( 'conditions' => array ('Samedi_Nom_Dos3'=>$doss,'Samedi_Millesime3 Like  '=>'%'.$miss.'%' ),'fields' => array('SUM(Fiche.Samedi_'.$champ.'3) AS `somme`')));
$r29 = $this->Fiche->find('all',array( 'conditions' => array ('Samedi_Nom_Dos4'=>$doss,'Samedi_Millesime4 Like  '=>'%'.$miss.'%' ),'fields' => array('SUM(Fiche.Samedi_'.$champ.'4) AS `somme`')));
$r30 = $this->Fiche->find('all',array( 'conditions' => array ('Samedi_Nom_Dos5'=>$doss,'Samedi_Millesime5 Like  '=>'%'.$miss.'%' ),'fields' => array('SUM(Fiche.Samedi_'.$champ.'5) AS `somme`')));


$r31 = $this->Fiche->find('all',array( 'conditions' => array ('Dimanche_Nom_Dos1'=>$doss,'Dimanche_Millesime1 Like  '=>'%'.$miss.'%' ),'fields' => array('SUM(Fiche.Dimanche_'.$champ.'1) AS `somme`')));
$r32 = $this->Fiche->find('all',array( 'conditions' => array ('Dimanche_Nom_Dos2'=>$doss,'Dimanche_Millesime2 Like  '=>'%'.$miss.'%' ),'fields' => array('SUM(Fiche.Dimanche_'.$champ.'2) AS `somme`')));
$r33 = $this->Fiche->find('all',array( 'conditions' => array ('Dimanche_Nom_Dos3'=>$doss,'Dimanche_Millesime3 Like  '=>'%'.$miss.'%' ),'fields' => array('SUM(Fiche.Dimanche_'.$champ.'3) AS `somme`')));
  
   $t1= $r1[0][0]['somme'];
   $t2= $r2[0][0]['somme'];  $t3= $r3[0][0]['somme'];  $t4= $r4[0][0]['somme']; $t5= $r5[0][0]['somme'];
   $t6= $r6[0][0]['somme']; $t7= $r7[0][0]['somme']; $t8= $r8[0][0]['somme']; $t9= $r9[0][0]['somme']; $t10= $r10[0][0]['somme'];
   $t11= $r11[0][0]['somme'];  $t12= $r12[0][0]['somme']; $t13= $r13[0][0]['somme']; $t14= $r14[0][0]['somme']; $t15= $r15[0][0]['somme'];
  $t16= $r16[0][0]['somme'];  $t17= $r17[0][0]['somme']; $t18= $r18[0][0]['somme']; $t19= $r19[0][0]['somme']; $t20= $r20[0][0]['somme'];
  $t21= $r21[0][0]['somme'];  $t22= $r22[0][0]['somme']; $t23= $r23[0][0]['somme']; $t24= $r24[0][0]['somme']; $t25= $r25[0][0]['somme'];
  $t26= $r26[0][0]['somme'];  $t27= $r27[0][0]['somme']; $t28= $r28[0][0]['somme']; $t29= $r29[0][0]['somme']; $t30= $r30[0][0]['somme'];
  $t31= $r31[0][0]['somme'];  $t32= $r32[0][0]['somme']; $t33= $r33[0][0]['somme'];   
 $st= $t1+$t2+$t3+$t4+$t5+$t6+$t7+$t8+$t9+$t10+$t11+$t12+$t13+$t14+$t15+$t16+$t17+$t18+$t19+$t20+$t21+$t22+$t23+$t24+$t25+$t26+$t27+$t28+$t29+$t30+$t31+$t32+$t33;
$c =0;
if ( $champ =='salaries'){
	 
	 if ($t1>0){$c=$c+1;}  if ($t2>0){$c=$c+1;}  if ($t3>0){$c=$c+1;}  if ($t4>0){$c=$c+1;}  if ($t5>0){$c=$c+1;}  if ($t6>0){$c=$c+1;}  if ($t7>0){$c=$c+1;}  if ($t8>0){$c=$c+1;}  if ($t9>0){$c=$c+1;}  if ($t10>0){$c=$c+1;}  if ($t11>0){$c=$c+1;}  if ($t12>0){$c=$c+1;}  if ($t13>0){$c=$c+1;}  if ($t14>0){$c=$c+1;}  if ($t15>0){$c=$c+1;}  
	 if ($t16>0){$c=$c+1;}  if ($t17>0){$c=$c+1;}  if ($t18>0){$c=$c+1;}  if ($t19>0){$c=$c+1;}  if ($t20>0){$c=$c+1;}  if ($t21>0){$c=$c+1;}  if ($t22>0){$c=$c+1;}  if ($t23>0){$c=$c+1;}  if ($t24>0){$c=$c+1;}  if ($t25>0){$c=$c+1;}  
	 if ($t26>0){$c=$c+1;}  if ($t27>0){$c=$c+1;}  if ($t28>0){$c=$c+1;}  if ($t29>0){$c=$c+1;}  if ($t30>0){$c=$c+1;}  if ($t31>0){$c=$c+1;}  if ($t32>0){$c=$c+1;}  if ($t33>0){$c=$c+1;}  
	 // return $st/ $c;
	 return   $c;  
	  // return   $st;  
	 }
	 else{		 
	 return $st;	 
	 }
   }
*/
  
// lignes sans interv

public function TotalLignesDossMission($doss,$miss ){
$this->loadModel('Fichejour');
   $this->loadModel('Fichee');
   $options['conditions'] = array(
'Num_Dos'=>$doss,
	'Millesime Like  '=>'%'.$miss.'%'
   );
  $options['joins'] = array(
    array('table' => 'fichees',
        'alias' => 'Fichee',
        'type' => 'LEFT',
        'conditions' => array(
            'Fichee.id = Fichejour.id_s',
        )
    )
);


$options['fields'] = array(
'SUM(Fichejour.Nbl_Dos) AS `somme`'
);

$r1 = $this->Fichejour->find('all', $options);	
 $t1= $r1[0][0]['somme'];
    return $t1; 
  }

  /// Lignes avec Intervenant

public function TotalLignesIntervDossMission($interv,$doss,$miss ){
//	echo('mis='.$miss.'doss='.$doss);
$this->loadModel('Fichejour');
   $this->loadModel('Fichee');
   $options['conditions'] = array(
'Num_Dos'=>$doss,
     'user_id' => ''.$interv,
	 'Millesime Like  '=>'%'.$miss.'%'
);
  $options['joins'] = array(
    array('table' => 'fichees',
        'alias' => 'Fichee',
        'type' => 'LEFT',
        'conditions' => array(
            'Fichee.id = Fichejour.id_s',
        )
    )
);


$options['fields'] = array(
'SUM(Fichejour.Nbl_Dos) AS `somme`'
);
$t1=0;
$r1 = $this->Fichejour->find('all', $options);	
 $t1= $r1[0][0]['somme'];
   if($t1>0){ return $t1; }
   else {return 0;}
  }

  
  
  /// Lignes avec Intervenant  sans dossier
public function TotalLignesIntervMission($interv,$miss ){
//	echo('miss='.$miss);
$this->loadModel('Fichejour');
   $this->loadModel('Fichee');
   $options['conditions'] = array(
     'user_id' => ''.$interv,
	'Millesime Like  '=>'%'.$miss.'%');
  $options['joins'] = array(
    array('table' => 'fichees',
        'alias' => 'Fichee',
        'type' => 'LEFT',
        'conditions' => array(
            'Fichee.id = Fichejour.id_s',
        )
    )
);


$options['fields'] = array(
'SUM(Fichejour.Nbh_Dos) AS `somme`'
);
$t1=0;
$r1 = $this->Fichejour->find('all', $options);	
 $t1= $r1[0][0]['somme'];
   if($t1>0) {return $t1; }
   else{return 0;}
  }
  
    
  
  /// Lignes 
//pas encore  
public function TotalLignes(  ){
 $this->loadModel('Fichee');
 $this->loadModel('Fichejour');
  	
$r1 = $this->Fichejour->find('all',array( 'fields' => array('SUM(Fichejour.Nbl_Dos) AS `somme`')));
$this->loadModel('Fichejour');
   $this->loadModel('Fichee');
  // $options['conditions'] = array();
  $options['joins'] = array(
    array('table' => 'fichees',
        'alias' => 'Fichee',
        'type' => 'LEFT',
        'conditions' => array(
            'Fichee.id = Fichejour.id_s',
        )
    )
);


$options['fields'] = array(
'SUM(Fichejour.Nbl_Dos) AS `somme`'
);

$r1 = $this->Fichejour->find('all', $options);	
 $t1= $r1[0][0]['somme'];
    return $t1; 
  }
  
  
  // bulletins sans dossier

public function TotalBulletinsIntervMission($interv,$miss,$champ){
	//echo('miss='.$miss);
$this->loadModel('Fichejour');
   $this->loadModel('Fichee');
   $options['conditions'] = array(
     'user_id' => ''.$interv,
	 'Millesime Like  '=>'%'.$miss.'%'
   );
  $options['joins'] = array(
    array('table' => 'fichees',
        'alias' => 'Fichee',
        'type' => 'LEFT',
        'conditions' => array(
            'Fichee.id = Fichejour.id_s',
        )
    )
);


$options['fields'] = array(
'SUM(Fichejour.'.$champ.') AS `somme`'
);
$t1=0;
$r1 = $this->Fichejour->find('all', $options);	
 $t1= $r1[0][0]['somme'];
      if ($t1 > 0) {return $t1; }
else {return 0;} 
 /*
if ( $champ=='salaries'){
	 $c =0;
	 if ($t1>0){$c=$c+1;}  if ($t2>0){$c=$c+1;}  if ($t3>0){$c=$c+1;}  if ($t4>0){$c=$c+1;}  if ($t5>0){$c=$c+1;}  if ($t6>0){$c=$c+1;}  if ($t7>0){$c=$c+1;}  if ($t8>0){$c=$c+1;}  if ($t9>0){$c=$c+1;}  if ($t10>0){$c=$c+1;}  if ($t11>0){$c=$c+1;}  if ($t12>0){$c=$c+1;}  if ($t13>0){$c=$c+1;}  if ($t14>0){$c=$c+1;}  if ($t15>0){$c=$c+1;}  
	 if ($t16>0){$c=$c+1;}  if ($t17>0){$c=$c+1;}  if ($t18>0){$c=$c+1;}  if ($t19>0){$c=$c+1;}  if ($t20>0){$c=$c+1;}  if ($t21>0){$c=$c+1;}  if ($t22>0){$c=$c+1;}  if ($t23>0){$c=$c+1;}  if ($t24>0){$c=$c+1;}  if ($t25>0){$c=$c+1;}  
	 if ($t26>0){$c=$c+1;}  if ($t27>0){$c=$c+1;}  if ($t28>0){$c=$c+1;}  if ($t29>0){$c=$c+1;}  if ($t30>0){$c=$c+1;}  if ($t31>0){$c=$c+1;}  if ($t32>0){$c=$c+1;}  if ($t33>0){$c=$c+1;}  
	//  return $st/ $c;
	  return  $c;
	 }
	 else{		 
	 return $st;	 
	 }
	 */
	 
  }
  
public function TotalBulletinsDossMission($doss,$miss,$champ){
$this->loadModel('Fichejour');
   $this->loadModel('Fichee');
   $options['conditions'] = array(
'Num_Dos'=>$doss,
	 'Millesime Like  '=>'%'.$miss.'%'
  
);
  $options['joins'] = array(
    array('table' => 'fichees',
        'alias' => 'Fichee',
        'type' => 'LEFT',
        'conditions' => array(
            'Fichee.id = Fichejour.id_s',
        )
    )
);


$options['fields'] = array(
'SUM(Fichejour.'.$champ.') AS `somme`'
);

$r1 = $this->Fichejour->find('all', $options);	
 $t1= $r1[0][0]['somme'];
   if ($t1 > 0) {return $t1; }
else {return 0;}

   }
  
 //ask iheb
public function CountSalarDossMission($doss,$miss ){
 //'Lundi_Nom_Dos1'=>$doss,'Lundi_Millesime1 Like  '=>'%'.$miss.'%','Fiche.Lundi_salaries1'=>' >0' ),'fields'=>'id'));

$this->loadModel('Fichejour');
   $this->loadModel('Fichee');
   $options['conditions'] = array(
'Nom_Dos'=>$doss,
	 'Millesime Like  '=>'%'.$miss.'%');
  $options['joins'] = array(
    array('table' => 'fichees',
        'alias' => 'Fichee',
        'type' => 'LEFT',
        'conditions' => array(
            'Fichee.id = Fichejour.id_s',
        )
    )
);


$options['fields'] = array(
'id'
);

$r1 = $this->Fichejour->find('all', $options);	
 
   	 
  $t1 = sizeof($r1);
	 return $t1;
   }
  
  public function excel()
{  $fiches = $this->Fichee->find('all', array('fields'=>array('Intervenant','Debut','Semaine','TotHeures','TotLignes')));
   $this->set(compact('fiches'));
	}
	
	
	
     // Export Function (pdf, excle, doc )
public function export_report_all_format($file_type, $filename, $html)
    {    
      $date=date('d/M/Y_H:i:s ');
 
        if($file_type == 'pdf')
        {
    
            App::import('Vendor', 'dompdf', array('file' => 'dompdf' . DS . 'dompdf_config.inc.php'));
            $this->dompdf = new DOMPDF();        
            $papersize = "legal";
            $orientation = 'landscape';        
            $this->dompdf->load_html($html);
            $this->dompdf->set_paper($papersize, $orientation);        
            $this->dompdf->render();
            $this->dompdf->stream("$filename.pdf");
            $this->dompdf->output();
            die();
                
        }    
        else if($file_type == 'xls')
        {    
            $file = $filename.".xls";
            header('Content-Type: text/html');
            header("Content-type: application/x-msexcel"); //tried adding  charset='utf-8' into header
            header("Content-Disposition: attachment; filename=$file");
            echo $html;
            
        }
        else if($file_type == 'doc')
        {                
            $file = $filename.".doc";
          header("Content-type: application/vnd.ms-word");
          header("Content-Disposition: attachment;Filename=fiches.doc");
          echo $html;
            
        }
		
    }
	
	
	function word(){
$file_type = 'doc';
$filename="";
  $fiches = $this->Fichee->find('all',array('fields'=>array('Intervenant','Debut','Semaine','TotHeures','TotLignes')));
 
    $this->set(compact('fiches'));
 
$html =  '<html><head><meta http-equiv="Content-Type" content="text/html; charset=utf-8" /></head><body><style>
.datagrid table { border-collapse: collapse; text-align: left; width: 800px; } table{ max-width: 800px;font: normal 12px/150% Arial, Helvetica, sans-serif; background: #fff; overflow: hidden; border: 1px solid #006699; -webkit-border-radius: 3px; -moz-border-radius: 3px; border-radius: 3px; }.datagrid table td, .datagrid table th { padding: 3px 10px; }.datagrid table thead th {background:-webkit-gradient( linear, left top, left bottom, color-stop(0.05, #006699), color-stop(1, #00557F) );background:-moz-linear-gradient( center top, #006699 5%, #00557F 100% );filter:progid:DXImageTransform.Microsoft.gradient(startColorstr="#006699", endColorstr="#00557F");background-color:#006699; color:#FFFFFF; font-size: 15px; font-weight: bold; border-left: 1px solid #0070A8; } .datagrid table thead th:first-child { border: none; }.datagrid table tbody td { color: #00496B; border-left: 1px solid #E1EEF4;font-size: 12px;font-weight: normal; }.datagrid table tbody .alt td { background: #E1EEF4; color: #00496B; }.datagrid table tbody td:first-child { border-left: none; }.datagrid table tbody tr:last-child td { border-bottom: none; }.datagrid table tfoot td div { border-top: 1px solid #006699;background: #E1EEF4;} .datagrid table tfoot td { padding: 0; font-size: 12px } .datagrid table tfoot td div{ padding: 2px; }.datagrid table tfoot td ul { margin: 0; padding:0; list-style: none; text-align: right; }.datagrid table tfoot  li { display: inline; }.datagrid table tfoot li a { text-decoration: none; display: inline-block;  padding: 2px 8px; margin: 1px;color: #FFFFFF;border: 1px solid #006699;-webkit-border-radius: 3px; -moz-border-radius: 3px; border-radius: 3px; background:-webkit-gradient( linear, left top, left bottom, color-stop(0.05, #006699), color-stop(1, #00557F) );background:-moz-linear-gradient( center top, #006699 5%, #00557F 100% );filter:progid:DXImageTransform.Microsoft.gradient(startColorstr="#006699", endColorstr="#00557F");background-color:#006699; }.datagrid table tfoot ul.active, .datagrid table tfoot ul a:hover { text-decoration: none;border-color: #006699; color: #FFFFFF; background: none; background-color:#00557F;}div.dhtmlx_window_active, div.dhx_modal_cover_dv { position: fixed !important; }
th{height:40px;text-align:center;}  </style>
<center>
<H1 style="font-family: "Times New Roman", Times, serif;""> Liste des Fiches<H1></br></br>
<div class="datagrid"><table>
<thead><tr><th>Début</th><th>Fin</th><th>Intervenant</th><th>Total Heures</th><th>Total Lignes</th> </tr></thead>
<tbody>';
 
$count=0; 
foreach ( $fiches as $fiche ){
//for ($i=0;$i<15;$i++){
$count ++;
if($count % 2){ $html .='<tr class="alt">'; }else {$html .='<tr >' ;}
    $html .= '
<td><center>'. $fiche['Fichee']['Debut']  .'</center></td><td><center>'.   $fiche['Fichee']['Semaine'] .'</center></td><td><center>'.   $fiche['Fichee']['Intervenant'] .'</center></td><td><center>'. $fiche['Fichee']['TotHeures'].'</center></td><td><center>'. $fiche['Fichee']['TotLignes'].'</center></td>';

  
}
$html .= '</tbody>
</table></div></center></body></html>'; 
$this->export_report_all_format($file_type, $filename, $html);


}	
	
} // end class
?>