<?php
 App::uses('AuthComponent', 'Controller/Component');
App::uses('AppModel', 'Model');
class Item extends AppModel {
	  var $name = 'Item';
  var $primaryKey = 'id';
   
 
  
         var $validate = array( 
		   /* "categorie"=>array( 
		  'required' => array(
                'rule' => array('notEmpty'),
                'message' => 'required'  )
				),*/
                "name"=>array( 
				
			 'required' => array(
                'rule' => array('notEmpty'),
                'message' => 'required'  ),
              "unique"=>array( 
                                "rule"=>array("checkUnique", array("name")), 
                                "message"=>"already exists" 
                        ) 
                )  
       ); 
	   
public function getCats()
{
 $cat = ClassRegistry::init('Categorie');
     $liste = $cat->find('list',array('fields'=>array('name'))) ;
  return  $liste;
	
}
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