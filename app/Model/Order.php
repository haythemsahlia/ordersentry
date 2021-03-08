<?php
 App::uses('AuthOrder', 'Controller/Order');
App::uses('AppModel', 'Model');
class Order extends AppModel {
	  var $name = 'Order';
  var $primaryKey = 'id';
   
 
  
        var $validate = array( 
            	/*'customer' => array(
            'required' => array(
                'rule' => array('notEmpty'),
                'message' => 'Please Select a customer'  )),*/
				'date' => array(
         
			 'between' => array( 
				'rule' => array('between', 3, 15), 
				
				'message' => 'verify the date'
			),
				),
				'time' => array(
            'required' => array(
                'rule' => array('notEmpty'),
                'message' => 'Please Select the time'  ),
			 'between' => array( 
				'rule' => array('between', 3, 15), 
				'required' => true, 
				'message' => 'verify the time'
			),
				)
				
							); 
 
 public function getItems()
{
 $cust = ClassRegistry::init('Item');
     $liste = $cust->find('list',array('fields'=>array('id','name'))) ;
  return  $liste;
	
}
public function getStatus()
{
$options= array('Not Ready'=>'Not Ready','Rready'=>'Rready','Packed'=>'Packed','Delivered'=>'Delivered','Cancelled'=>'Cancelled');
 return  $options;
}

public function getCustomers()
{
 $cust = ClassRegistry::init('Customer');
     $liste = $cust->find('list',array('fields'=>array('name'))) ;
  return  $liste;
	
}
public function getCustomersPhones()
{
 $cust = ClassRegistry::init('Customer');
     $liste = $cust->find('list',array('fields'=>array('phone'))) ;
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