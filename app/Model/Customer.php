<?php
 App::uses('AppModel', 'Model');
class Customer extends AppModel {
	  var $name = 'Customer';
  var $primaryKey = 'id';
   
 
  
        var $validate = array( 
                "name"=>array( 
                        "unique"=>array( 
                                "rule"=>array("checkUnique", array("name","phone")), 
                                "message"=>"already exists, " 
                        ) 
                ) 
       ); 
 /*
     var $validate = array( 
                "name"=>array( 
                        "unique"=>array( 
                                "rule"=>array("checkUnique", array("name","phone")), 
                                "message"=>"already exists, " 
                        ) ,
                        "required"=>array( 
                                "rule"=>'required', 
                                "message"=>"required" 
                        ) 
								) ,
								
				"phone"=>array(
				 "required"=>array( 
                                "rule"=>'required', 
                                "message"=>"required" 
                        ) 
				)				
       ); 
 
 */
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

	public function getCustomersPhones()
{
 $cust = ClassRegistry::init('Customer');
 $liste = $cust->find('list',array('fields'=>array('phone'))) ;
  return  $liste;
	
}
	
	/*public function getFlags()
{
  $liste  = array('Flagged'=>'1','Regular'=>'0');
  return  $liste;
	
}	*/
	
 }// end class model
?>