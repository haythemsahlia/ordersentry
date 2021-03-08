<?php
 App::uses('AuthIngredient', 'Controller/Product');
App::uses('AppModel', 'Model');
class Product extends AppModel {
	  var $name = 'Product';
  var $primaryKey = 'id';
   
    var $validate = array( 
            	'order' => array(
            'required' => array(
                'rule' => array('notEmpty'),
                'message' => 'Please Select an order'  )),
				
				'item' => array(
            'required' => array(
                'rule' => array('notEmpty'),
                'message' => 'Please Select an item'  ),
	 
				),
				'quantity' => array(
            'required' => array(
                'rule' => array('notEmpty'),
                'message' => 'Please Select the quantity'  ),
 
				)
				
							);

 public function getItems()
{
 $cust = ClassRegistry::init('Item');
     $liste = $cust->find('list',array('fields'=>array('id','name'))) ;
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