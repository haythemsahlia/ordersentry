<?php
 App::uses('AuthComponent', 'Controller/Component');
App::uses('AppModel', 'Model');
class Categorie extends AppModel {
	  var $name = 'Categorie';
  var $primaryKey = 'id';
   
 
  
         var $validate = array( 
                "name"=>array( 
				
		 'required' => array(
                'rule' => array('notEmpty'),
                'message' => 'Please write a name'  ),
          "unique"=>array( 
                                "rule"=>array("checkUnique", array("name")), 
                                "message"=>"already exists" 
                        ) 
                ) 
       ); 

 	 function checkUnique($data, $fields) { 
                if (!is_array($fields)) { 
                        $fields = array($fields); 
                } 
                foreach($fields as $key) { 
                        $tmp[$key] = $this->data[$this->name][$key]; 
                } 
                if (isset($this->data[$this->name][$this->primaryKey])) { 
                        $tmp[$this->primaryKey] = "<>".$this->data[$this->name][$this->primaryKey]; 
                } 
                return $this->isUnique($tmp, false); 
        } 
		
 }// end class model
?>