<?php

class UsersController extends AppController {
 
var $components = array('Filter.Filter');  
  
    var $filters = array  
        (  
            'index' => array  
            (  
                'User' => array  
                (  
                    'User.Nom',  
					'User.Prenom',  
                   // 'User.Millesime' => array('condition' => '='),//,  
 					'User.Qualification'  
                   //'Dossier.user_id' => array  
                   // (  
                   //     'type' => 'select',  
                    //    'label' => 'Document owner',  
                   //     'selector' => 'getOwnerList'  
                    //)  
                )  
            )  
        );  
 
/*	 public $components = array(
        'Search.Prg'
    );
*/
	public $paginate = array(
        'limit' => 25,
        'conditions' => array('status' => '1'),
    	'order' => array('User.username' => 'asc' ) 
    );
	
    public function beforeFilter() {
        parent::beforeFilter();
        $this->Auth->allow('login','add'); 
    }
	


	public function login() {
		
		//if already logged-in, redirect
		if($this->Session->check('Auth.User')){
			$this->redirect(array('action' => 'index'));		
		}
		
		// if we get the post information, try to authenticate
		if ($this->request->is('post')) {
			if ($this->Auth->login()) {
				$this->Session->setFlash(__('Welcome, '. $this->Auth->user('username')));
				$this->redirect('/');			
				} else {
				$this->Session->setFlash(__('Verify Login/ Password'));
			}
		} 
	}

	public function logout() {
		$this->redirect($this->Auth->logout());
	}
	
	
	
/************************/
    public function index() {
    	// $this->Prg->commonProcess();
	/*
		$this->paginate = array(
			'limit' => 4,
			'order' => array('User.username' => 'asc' )
		);
	*/
		$this->paginate = array(
            'paramType' => 'querystring',
            'limit' => 10,
            'maxLimit' => 30,
			'order' => array('User.username' => 'asc' )
        );
		/*
		$users = $this->paginate('User');
		$this->set(compact('users'));*/
		//$this->paginate['conditions'] = $this->User->parseCriteria($this->Prg->parsedParams());
$this->set('users', $this->paginate());
    }

/*************************/
    public function add() {
    	        if ($this->Session->read('Auth.User.role')=='Admin' ){
        if ($this->request->is('post')) {
				
			$this->User->create();
			if ($this->User->save($this->request->data)) {
				$this->Session->setFlash(__('User added successfully'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('Error  , try again.'));
			}	
       			 }
			}
else{   
    $this->Session->setFlash(__('<label style="color:red">Not Authorized !</label>'));
    $this->redirect(array('action' => 'index'));
	}

}
/****************************************/
    public function edit($id = null) {
		  $this->User->validate = array();
    	        if ($this->Session->read('Auth.User.role')=='Admin' ){

		    if (!$id) {
				$this->Session->setFlash(__('Id manquant !'));
				$this->redirect(array('action'=>'index'));
			}

			$user = $this->User->findById($id);
			if (!$user) {
				$this->Session->setFlash(__(' Wrong ID '));
				$this->redirect(array('action'=>'index'));
			}

			if ($this->request->is('post') || $this->request->is('put')) {
				$this->User->id = $id;

if ($this->User->save($this->request->data)) {
$this->Session->setFlash(__('User Modified Successfully  '));
$this->redirect(array('action' => 'index'));
} else {
//$this->Session->setFlash(__('Utilisateur modifié avec succès'));
}

}
}else{   
    $this->Session->setFlash(__('<label style="color:red">Not Authorized !</label>'));
    $this->redirect(array('action' => 'index'));
	}
    			if (!$this->request->data) {
				$this->request->data = $user;
			}
}
/*
public function edit($id = null) {

if (!$id) {
$this->Session->setFlash('Please provide a user id');
$this->redirect(array('action'=>'index')); //need to change this for redirect to page it came from
}

$user = $this->User->findById($id);
if (!$user) {
$this->Session->setFlash('Invalid User ID Provided');
$this->redirect(array('action'=>'index')); //check
}

if ($this->request->is('post') || $this->request->is('put')) {
$this->User->id = $id;

if (!$this->data['User']['password_update']) {	// check if password is empty

// just save updated email as nothing else has changed, first check it is new

$newemail = $this->data['User']['email'];
if ($newemail == $user['User']['email']) {
$this->Session->setFlash(__('No changes made!'));
} else {
$this->User->saveField('email', $newemail);
$this->Session->setFlash(__('The user email has been updated'));
$this->redirect(array('action' => 'index', $id));
}
} else {	// not empty so save all new data

if ($this->User->save($this->request->data)) {
$this->Session->setFlash(__('The user has been updated'));
$this->redirect(array('action' => 'index', $id));
} else {
$this->Session->setFlash(__('Unable to update your user.'));
}
}
}

if (!$this->request->data) {
$this->request->data = $user;
}
}
*/

/************************/
    public function delete($id = null) {

    	        if ($this->Session->read('Auth.User.role')=='Admin' ){

		
		if (!$id) {
			$this->Session->setFlash('Please provide a user id');
			$this->redirect(array('action'=>'index'));
		}
		
        $this->User->id = $id;
        if (!$this->User->exists()) {
            $this->Session->setFlash('Wrong ID ');
			$this->redirect(array('action'=>'index'));
        }
     else
     {
        if ($this->User->delete()){$this->Session->setFlash(__('User deleted successfully   '));$this->redirect(array('action'=>'index'));}

       else{ $this->Session->setFlash(__('Error  '));
        $this->redirect(array('action' => 'index'));}
    }

			}else{   
   		 	$this->Session->setFlash(__('<label style="color:red">Not Authorized !</label>>'));
    		$this->redirect(array('action' => 'index'));	}
}
	public function activate($id = null) {
		
		if (!$id) {
			$this->Session->setFlash('Id manquant');
			$this->redirect(array('action'=>'index'));
		}
		
        $this->User->id = $id;
        if (!$this->User->exists()) {
            $this->Session->setFlash('Invalide  id ');
			$this->redirect(array('action'=>'index'));
        }
        if ($this->User->saveField('status', 1)) {
            $this->Session->setFlash(__('User re-activated'));
            $this->redirect(array('action' => 'index'));
        }
        $this->Session->setFlash(__('User was not re-activated'));
        $this->redirect(array('action' => 'index'));
    }


public function TotUsers(){
    $total = $this->User->find('count');
return $total;
}


/************************/
public function profile(){
	  $this->User->validate = array();
 	$id=$this->Session->read('Auth.User.id');

		    if (!$id) {
				$this->Session->setFlash('Erreur ! ');
				$this->redirect(array('action'=>'index'));
			}

			$user = $this->User->findById($id);
			if (!$user) {
				$this->Session->setFlash('Error !');
				$this->redirect(array('action'=>'index'));
			}

			if ($this->request->is('post') || $this->request->is('put')) {
				$this->User->id = $id;

if (!$this->data['User']['password_update']) {	// check if password is empty

// just save updated email as nothing else has changed, first check it is new
 
$newemail = $this->data['User']['email'];
//$thumb = $this->data['User']['thumb'];
if ($newemail != $user['User']['email']) {
$this->User->saveField('email', $newemail);}
/*
 if ($thumb != $user['User']['thumb']){
 $this->User->saveField('thumb_file', $thumb);}//*/
$this->Session->setFlash(__('Profile edited  successfully '));
$this->redirect(array('action' => 'index' ));

} else {	// not empty so save all new data
				if ($this->User->save($this->request->data)) {
					$this->Session->setFlash(__('Profile edited  successfully'));
					$this->redirect(array('action' => 'index'));
				}else{
					$this->Session->setFlash(__('Error !'));
				}		
    }

}
 		if (!$this->request->data) {
				$this->request->data = $user;
			}

}
public function isAuthorized($user) {
    // Admin can access every action
    if (isset($user['role']) && $user['role'] === 'Admin') {
        return true;
    }
 
    // Default deny
    return false;
}
} // end class
 


?>