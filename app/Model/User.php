<?php
App::uses('AuthComponent', 'Controller/Component');

class User extends AppModel {
   // public $hasMany = 'Fiche';
	public $actsAs = array(
		'Upload.Upload' => array( 'fields' => array( 'thumb' => 'img/users/:id1000/:y-:m-:id'   )),
        'Search.Searchable'
    );
	  public $filterArgs = array(
        'username' => array(
            'type' => 'like',
            'field' => 'username'
        ),
        'email' => array(
            'type' => 'like',
            'field' => 'email'
        )
    );

	public $avatarUploadDir = 'img/avatars';
    
	public $validate = array(
        'username' => array(
        	'nonEmpty' => array(
                'rule' => array('notEmpty'),
                'message' => 'le nom d utilisateur est obligatoire',
				'allowEmpty' => false
            ),
			'between' => array( 
				'rule' => array('between', 3, 15), 
				'required' => true, 
				'message' => 'nom d utilisateur doit etre entre 5 et 15 caracteres'
			),
			 'unique' => array(
				'rule'    => array('isUniqueUsername'),
				'message' => 'This username is already in use'
			),
			'alphaNumericDashUnderscore' => array(
				'rule'    => array('alphaNumericDashUnderscore'),
				'message' => 'nom d utilisateur doit etre des lettres, nombres et underscores'
			),
        ),
        'password' => array(
            'required' => array(
                'rule' => array('notEmpty'),
                'message' => 'le mot de passe est obligatoire'
            ),
			'min_length' => array(
				'rule' => array('minLength', '6'),  
				'message' => 'le mot de passe doit avoir au moin 6 caracteres'
			)
        ),
		
		'password_confirm' => array(
            'required' => array(
                'rule' => array('notEmpty'),
                'message' => 'SVP confirmez le mot de passe.'
            ),
			 'equaltofield' => array(
				'rule' => array('equaltofield','password'),
				'message' => 'les deux mot de passes doivent correspondre.'
			)
        ),
		
		'email' => array(
			'required' => array(
				'rule' => array('email', true),    
				'message' => 'Email incorrect.'    
			),
			 'unique' => array(
				'rule'    => array('isUniqueEmail'),
				'message' => 'Email utilisé deja',
			),/*
			'between' => array( 
				'rule' => array('between', 6, 20), 
				'message' => 'nom d utilisateur doit etre entre 6 et 20 caracteres'
			)*/
		),
       // 'role' => array(
        //    'valid' => array(
             //   'rule' => array('inList', array('king', 'queen', 'bishop', 'rook', 'knight', 'pawn')),
           //     'message' => 'Please enter a valid role',
         //       'allowEmpty' => false
         //   )
      //  ),
		
		
		'password_update' => array(
			'min_length' => array(
				'rule' => array('minLength', '6'),   
				'message' => 'le mot de passe doit avoir 6 caracteres au moins',
				'allowEmpty' => true,
				'required' => false
			)
        ),
		'password_confirm_update' => array(
			 'equaltofield' => array(
				'rule' => array('equaltofield','password_update'),
				'message' => 'Both passwords must match.',
				'required' => false,
			)
        ),
		 'thumb_file' => array(
        'rule' => array('fileExtension', array('jpg','png'))
    )

		
    );
	
		/**
	 * Before isUniqueUsername
	 * @param array $options
	 * @return boolean
	 */
	function isUniqueUsername($check) {

		$username = $this->find(
			'first',
			array(
				'fields' => array(
					'User.id',
					'User.username'
				),
				'conditions' => array(
					'User.username' => $check['username']
				)
			)
		);

		if(!empty($username)){
			if($this->data[$this->alias]['id'] == $username['User']['id']){
				return true; 
			}else{
				return false; 
			}
		}else{
			return true; 
		}
    }

	/**
	 * Before isUniqueEmail
	 * @param array $options
	 * @return boolean
	 */
	function isUniqueEmail($check) {

		$email = $this->find(
			'first',
			array(
				'fields' => array(
					'User.id'
				),
				'conditions' => array(
					'User.email' => $check['email']
				)
			)
		);

		if(!empty($email)){
			if($this->data[$this->alias]['email'] == $email['User']['id']){
				return true; 
			}else{
				return false; 
			}
		}else{
			return true; 
		}
    }
	
	public function alphaNumericDashUnderscore($check) {
        // $data array is passed using the form field name as the key
        // have to extract the value to make the function generic
        $value = array_values($check);
        $value = $value[0];

        return preg_match('/^[a-zA-Z0-9_ \-]*$/', $value);
    }
	
	public function equaltofield($check,$otherfield) 
    { 
        //get name of field 
        $fname = ''; 
        foreach ($check as $key => $value){ 
            $fname = $key; 
            break; 
        } 
        return $this->data[$this->name][$otherfield] === $this->data[$this->name][$fname]; 
    } 

	/**
	 * Before Save
	 * @param array $options
	 * @return boolean
	 */
	 public function beforeSave($options = array()) {
		// hash our password
		if (isset($this->data[$this->alias]['password'])) {
			$this->data[$this->alias]['password'] = AuthComponent::password($this->data[$this->alias]['password']);
		}
		
		// if we get a new password, hash it
		if (isset($this->data[$this->alias]['password_update'])) {
			$this->data[$this->alias]['password'] = AuthComponent::password($this->data[$this->alias]['password_update']);
		}
	
		// fallback to our parent
		return parent::beforeSave($options);
	}
 
}//end

?>