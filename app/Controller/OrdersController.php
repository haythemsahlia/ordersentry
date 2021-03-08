<?php
App::uses('AppController', 'Controller');
use Cake\I18n\Time;
class OrdersController extends AppController {
    public $myGlobalVar;  
public $helpers = array('Html',  "Session");

    public function beforeFilter()
    {
         //this can be anything array, object, string, etc .....
       //  $this->myGlobalVar = "08-03-2017";
       //  $this->myGlobalVar =date('Y-m-d');
    }
//=> array('default'=>''.$this->myGlobalVar)
 // var $name = 'Order';
 // var $uses = array('orders');
  	Public $name='Orders';   
 
  var $uses = array('Order', 'Product','Customer'); 
 // $time = Time::now();
  
//var $dt=date("Y-m-d");
     // => array('default'=>  $dt)

/*var $components = array
        (
          'Session',
          'Filter.Filter' => array('nopersist' => array('index') )
        );*/
		    var $filters = array  
        (  
		 'add' => array  
            (  
                'Order' => array  
                (  
                   'Order.id' => array('class'=>'keyboardInput')  , 
                    'Order.date' , 
					'Order.Customer' => array('type'=>'select','selector'=>'getCustomers') ,  
                  
                )  
            )  ,
            'index0' => array  
            (  
                'Order' => array  
                (  
                    'Order.customerphone'  => array('label'=>'Customer Phone','condition'=>'like') , 
                    'Order.customername'  => array('label'=>'Customer Name') ,
                    'Order.date' ,
                    //=> array('default' => $today) ,
                    'Order.time'   ,
                    'Order.id'  
				
                    
					 //   'Order.phone'  => array('type'=>'select','selector'=>'getCustomersPhones') 
                                )
									/*,
                'Customer'=> array  
                (	'Customer.phone'  => array('type'=>'text','selector'=>'getCustomersPhones') 
                    								
            )  */
        )
		 ,
            'index0' => array  
            (  
                'Order' => array  
                (  
                    'Order.customerphone'  => array('label'=>'Customer Phone','condition'=>'like') , 
                    'Order.customername'  => array('label'=>'Customer Name') ,
                    'Order.date' ,
                    //=> array('default' => $today) ,
                    'Order.time'   ,
                    'Order.id'  
				
                    
					 //   'Order.phone'  => array('type'=>'select','selector'=>'getCustomersPhones') 
                                )
									/*,
                'Customer'=> array  
                (	'Customer.phone'  => array('type'=>'text','selector'=>'getCustomersPhones') 
                    								
            )  */
        )
           // ,'nopersist' => array('index') 

            ); 

	
// function store date on session
       public function StoreDate($Date ) {
		   			 $this->loadModel('Order');
			$defaultDate = $this->Session->read('Auth.User.defaultdate');

		 /*  	  $dateord=$this->data['form']['date'];
		  $this->Session->write('Auth.User.defaultdate', $dateord);*/
		   if( isset ( $Date))
		  {
			   $this->Session->write('Auth.User.defaultdate', $Date) ;
  
		  }
 
	   } 
		

 public function index1() {
 $dt=date("Y-m-d");
//   $date=date('Y-mm-dd');
   $this->Order->validate = array();

  	$this->paginate = array(
		  'limit' => 1000
		//,
		/*'conditions'=>array('Order.date'=>$dt)		,*/
       // 'order' => array('Order.id' => 'desc' )
		//'order' => array('Order.date' => 'desc' ) 
        );
		// limit nonnnnnnnnnnnnnn
		//$orders = $this->paginate('Order');
       // $this->set(compact('orders'));
  $this->set('orders', $this->paginate(['parent' => null]));

  /*if (isset($this->Filter->formData['Order']['date'])) {
         //$filterdate = $this->request->data['order']['date'];
    //$output = $this->Filter->settings;
    //print_r($this->Filter->formData['Order']['date']);
    $output = $this->Filter->formData['Order']['date'];
    $this->set('filterdate', $output);
    }
    else {$this->set('filterdate','no date selected');}*/
//$this->Order->find('all', array('nofilter' => true));  
    $this->Filter->nopersist = array();
    $this->Filter->nopersist["Orders"] = true;
    }
     //Test Ran
	      
 public function index($selecteddate = null) {
	if ($selecteddate != null){$this->set('selecteddate',$selecteddate);}

 $dt=date("Y-m-d");
//   $date=date('Y-mm-dd');
   $this->Order->validate = array();
 
	 // storing session
		  $dateord=$this->Session->read('Auth.User.defaultdate');
		  if ($selecteddate != null){
				$this->paginate = array('limit' => 100,'conditions'=>array('Order.date'=>$selecteddate));
	$this->set('orders', $this->paginate(['parent' => null]));
  $this->Session->write('Auth.User.defaultdate', $selecteddate);
		  }
		else{  
			if (isset($dateord)){
				
					$this->paginate = array('limit' => 100,'conditions'=>array('Order.date'=>$dateord));
	$this->set('orders', $this->paginate(['parent' => null]));
	
			}else{
				
					$this->paginate = array('limit' => 100,'conditions'=>array('Order.date'=>$dt));
	$this->set('orders', $this->paginate(['parent' => null]));
			//	$selecteddate=$dt;
	
			}
  	}
   

    }
 public function index0() {

    
   $this->Order->validate = array();

  	$this->paginate = array(
		  'limit' => 10000000, 
        'order' => array('Order.time' => 'asc' ) ,
		'conditions'=>array('Order.date' => $dateord )
		//'order' => array('Order.date' => 'desc' ) 
        );
		// limit nonnnnnnnnnnnnnn
		//$orders = $this->paginate('Order');
       // $this->set(compact('orders'));
  $this->set('orders', $this->paginate(['parent' => null]));

  if (isset($this->Filter->formData['Order']['date'])) {
         //$filterdate = $this->request->data['order']['date'];
    //$output = $this->Filter->settings;
    //print_r($this->Filter->formData['Order']['date']);
    $output = $this->Filter->formData['Order']['date'];
    $this->set('filterdate', $output);
    }
    else {$this->set('filterdate','no date selected');}
//$this->Order->find('all', array('nofilter' => true));  
    $this->Filter->nopersist = array();
    $this->Filter->nopersist["Orders"] = true;
    }
	
	
/******************************       A D D    O R D E R     ****************************************************************/	
	
    public function add($id =null) {
		 
      if ($this->Session->read('Auth.User.role')=='Admin' ){
		  
      if ($this->request->is('post')) {
		
			 $this->loadModel('Order');
       $this->loadModel('Customer');
	  
		  // storing session
		  $dateord=$this->data["Order"]["date"];
		  $this->Session->write('Auth.User.defaultdate', $dateord);
	  // echo ('d1 '.$this->Session->read('Auth.User.defaultdate'));
       $cphone = $this->data["Order"]["customer"];
       $cname = $this->data["Order"]["customername"];
       $cust = $this->Customer->find('first',array('fields'=>array('id'),'conditions'=>array('phone'=>$cphone,'name'=>$cname,'status'=>'0'))) ;
       $cust2 = $this->Customer->find('first',array('fields'=>array('id'),'conditions'=>array('phone'=>$cphone,'name'=>$cname,'status'=>'1'))) ;
	   //@Ran
	       if (! empty($cust2))
    {
       $customerid =  $cust2['Customer']['id'];
	   $this->Customer->updateAll(array('Customer.status'=>'0'),array('Customer.id'=>$customerid));
        $conditions = array(
            'Order.date' => $this->data["Order"]["date"],
            'Order.customer' => $customerid
        );
        $this->request->data["Order"]["customer"]=$customerid;
        if (!($this->Order->hasAny($conditions))) {
        

			$this->Order->create();
      $this->Order->read(null, 1);
      $this->Order->set(array(
        'date' => $this->data["Order"]["date"],
        'time' => $this->data["Order"]["time"],
        'customer' => $this->request->data["Order"]["customer"],
        'customername' => $cname,
        'customerphone' => $cphone
       ));
      if ($this->Order->save()) {
                 //  $this->Session->setFlash(__('Order added Successfully ! You can add products'));
                  $id = $this->Order->id ;
                  
                       $this->redirect(array('controller'=>'orders','action' => 'edit',$id));      
        
                  } else {
                  //$this->Session->setFlash(__('Impossible to add the order, try again.'));
                }
        }
      else
      {
        $idorder=$this->Order->find('all', array(
    'fields' => array('id'),
    'conditions' => array(
        'date' => $this->data["Order"]["date"],
        'customer' => $this->data["Order"]["customer"]
            )
        ));
 		$this->Session->setFlash(__('<label style="color:#eb1934">The customer have already an order for that date, you can edit from <a href="/orders/edit/'.$idorder[0]["Order"]["id"].'" >here</a></label>'));
        //echo '<label style="color:#eb1934">The customer have already an order for that date, you can edit from <a href="/orders/edit/'.$idorder[0]["Order"]["id"].'" >here</a></label>';
        //$this->redirect(array('action' => 'index'));
      }

  }
	   //
    if (! empty($cust))
    {
       $customerid =  $cust['Customer']['id'];
        $conditions = array(
            'Order.date' => $this->data["Order"]["date"],
            'Order.customer' => $customerid
        );
        $this->request->data["Order"]["customer"]=$customerid;
        if (!($this->Order->hasAny($conditions))) {
        

			$this->Order->create();
      $this->Order->read(null, 1);
      $this->Order->set(array(
        'date' => $this->data["Order"]["date"],
        'time' => $this->data["Order"]["time"],
        'customer' => $this->request->data["Order"]["customer"],
        'customername' => $cname,
        'customerphone' => $cphone
       ));
      if ($this->Order->save()) {
                 //  $this->Session->setFlash(__('Order added Successfully ! You can add products'));
                  $id = $this->Order->id ;
                  
                       $this->redirect(array('controller'=>'orders','action' => 'edit',$id));      
        
                  } else {
                  //$this->Session->setFlash(__('Impossible to add the order, try again.'));
                }
        }
      else
      {
        $idorder=$this->Order->find('all', array(
    'fields' => array('id'),
    'conditions' => array(
        'date' => $this->data["Order"]["date"],
        'customer' => $this->data["Order"]["customer"]
            )
        ));
		  //$this->Session->setFlash(__('<label style="color:#eb1934">The customer have already an order for that date, you can edit from <a href="/orders/edit/'.$idorder[0]["Order"]["id"].'" >here</a></label>'));  ".$idorder[0]['Order']['id']."
        //echo "<script>ShowCustomDialog2();</script>";
			  $this->redirect(array(
    'controller' => 'orders', 'action' => 'add', '?' => array(
        'oe' => $idorder[0]["Order"]["id"]
    )
));
		  //$this->redirect(array('action' => 'index'));
      }

  }
  else {
    // new customer

    $this->loadModel('Customer');
    $this->Customer->create();
    $data = array('phone'=>$cphone,'name'=>$cname);
    $this->Customer->save($data);

    //get new customer id
    $cust = $this->Customer->find('first',array('fields'=>array('id'),'conditions'=>array('phone'=>$cphone,'name'=>$cname)));
    $customerid =  $cust['Customer']['id'];
    // save the new order
    $this->request->data["Order"]["customer"]=$customerid;
    
      $this->Order->create();
      $this->Order->read(null, 1);
      $this->Order->set(array(
        'date' => $this->data["Order"]["date"],
        'time' => $this->data["Order"]["time"],
        'customer' => $customerid,
        'customername' => $cname,
        'customerphone' => $cphone
       ));
      if ($this->Order->save()) {
                 //  $this->Session->setFlash(__('Order added Successfully ! Start saving products of orders '));
                  $id = $this->Order->id ;
                  
                      //@Ran $this->redirect(array('controller'=>'products','action' => 'index',$id));      
                       $this->redirect(array('controller'=>'orders','action' => 'edit',$id));      
        
                  } else {
                //  $this->Session->setFlash(__('Impossible to add the order, try again.'));
                }
  }
			}}
else{   
    $this->Session->setFlash(__('<label style="color:red">not authorized !</label>'));
    $this->redirect(array('action' => 'index'));
	}       
 //Ordres of Products
  $this->loadModel('Product');
  //$this->loadModel('Order');
 $this->Product->validate = array();
if (isset ($id)  ) { $this->set('id',$id);	
$this->Product->paginate = array('conditions' =>array('Product.order'=>$id),
		  'limit' => 100,
		  /*'join' =>    array('table' => 'orders',
        'alias' => 'orders',
        'type' => 'LEFT',
        'conditions' => array(
            'Order.id = Product.order',
        )
    )
,*/
        'order' => array('Product.id' => 'asc' ) 
        );}else{
  	$this->Product->paginate = array(
		  'limit' => 100,
       // 'order' => array('Product.id' => 'asc' ) 
        );}
		
//if (isset ($products)  ) { $this->set($this->set('products', $products));}
$this->set('products', $this->Product->find('all',array('conditions'=>array('Product.order'=>$id))));
	

	
 
}
    public function add0($id =null) {
      if ($this->Session->read('Auth.User.role')=='Admin' ){
      if ($this->request->is('post')) {
			 $this->loadModel('Order');
       $this->loadModel('Customer');
       $cphone = $this->data["Order"]["customer"];
       $cname = $this->data["Order"]["customername"];
       $cust = $this->Customer->find('first',array('fields'=>array('id'),'conditions'=>array('phone'=>$cphone,'name'=>$cname))) ;
    if (! empty($cust))
    {
       $customerid =  $cust['Customer']['id'];
        $conditions = array(
            'Order.date' => $this->data["Order"]["date"],
            'Order.customer' => $customerid
        );
        $this->request->data["Order"]["customer"]=$customerid;
        if (!($this->Order->hasAny($conditions))) {
        

			$this->Order->create();
      $this->Order->read(null, 1);
      $this->Order->set(array(
        'date' => $this->data["Order"]["date"],
        'time' => $this->data["Order"]["time"],
        'customer' => $this->request->data["Order"]["customer"],
        'customername' => $cname,
        'customerphone' => $cphone
       ));
      if ($this->Order->save()) {
                 //  $this->Session->setFlash(__('Order added Successfully ! You can add products'));
                  $id = $this->Order->id ;
                  
                       $this->redirect(array('controller'=>'orders','action' => 'edit',$id));      
        
                  } else {
                  //$this->Session->setFlash(__('Impossible to add the order, try again.'));
                }
        }
      else
      {
        $idorder=$this->Order->find('all', array(
    'fields' => array('id'),
    'conditions' => array(
        'date' => $this->data["Order"]["date"],
        'customer' => $this->data["Order"]["customer"]
            )
        ));
        $this->Session->setFlash(__('<label style="color:#eb1934">The customer have already an order for that date, you can edit from <a href="/orders/edit/'.$idorder[0]["Order"]["id"].'" >here</a></label>'));
        $this->redirect(array('action' => 'index'));
      }

  }
  else {
    // new customer

    $this->loadModel('Customer');
    $this->Customer->create();
    $data = array('phone'=>$cphone,'name'=>$cname);
    $this->Customer->save($data);

    //get new customer id
    $cust = $this->Customer->find('first',array('fields'=>array('id'),'conditions'=>array('phone'=>$cphone,'name'=>$cname)));
    $customerid =  $cust['Customer']['id'];
    // save the new order
    $this->request->data["Order"]["customer"]=$customerid;
    
      $this->Order->create();
      $this->Order->read(null, 1);
      $this->Order->set(array(
        'date' => $this->data["Order"]["date"],
        'time' => $this->data["Order"]["time"],
        'customer' => $this->request->data["Order"]["customer"],
        'customername' => $cname,
        'customerphone' => $cphone
       ));
      if ($this->Order->save()) {
                 //  $this->Session->setFlash(__('Order added Successfully ! Start saving products of orders '));
                  $id = $this->Order->id ;
                  
                      //@Ran $this->redirect(array('controller'=>'products','action' => 'index',$id));      
                       $this->redirect(array('controller'=>'orders','action' => 'edit',$id));      
        
                  } else {
                //  $this->Session->setFlash(__('Impossible to add the order, try again.'));
                }
  }
			}}
else{   
    $this->Session->setFlash(__('<label style="color:red">not authorized !</label>'));
    $this->redirect(array('action' => 'index'));
	}       
 //Ordres of Products
  $this->loadModel('Product');
  //$this->loadModel('Order');
 $this->Product->validate = array();
if (isset ($id)  ) { $this->set('id',$id);	
$this->Product->paginate = array('conditions' =>array('Product.order'=>$id),
		  'limit' => 100,
		  /*'join' =>    array('table' => 'orders',
        'alias' => 'orders',
        'type' => 'LEFT',
        'conditions' => array(
            'Order.id = Product.order',
        )
    )
,*/
        'order' => array('Product.id' => 'asc' ) 
        );}else{
  	$this->Product->paginate = array(
		  'limit' => 100,
       // 'order' => array('Product.id' => 'asc' ) 
        );}
		
//if (isset ($products)  ) { $this->set($this->set('products', $products));}
$this->set('products', $this->Product->find('all',array('conditions'=>array('Product.order'=>$id))));
	

	
 
}
//@Ran
    public function editprevious($id = null) {
    	        if ($this->Session->read('Auth.User.role')=='Admin' ){

		    if (!$id) {
				$this->Session->setFlash(__('Id error !'));
				$this->redirect(array('action'=>'index'));
			}

			$Order = $this->Order->findById($id);
			if (!$Order) {
				$this->Session->setFlash(__(' ID error'));
				$this->redirect(array('action'=>'index'));
			}

			if ($this->request->is('post') || $this->request->is('put')) {
				$this->Order->id = $id;

if ($this->Order->save($this->request->data)) {
//$this->Session->setFlash(__('Order modified successfully '));
				 $this->redirect(array('action' => 'edit',$id)); 
} else {
//$this->Session->setFlash(__('Utilisateur modifié avec succès'));
}

}
}else{   
    $this->Session->setFlash(__('<label style="color:red">not authorized !</label>'));
    $this->redirect(array('action' => 'index'));
	}
    			if (!$this->request->data) {
				$this->request->data = $Order;
			}
}       
 public function edit($id = null) {
	if ($id != null){$this->set('id',$id);}
    	        if ($this->Session->read('Auth.User.role')=='Admin' ){

		    if (!$id) {
			//	$this->Session->setFlash(__('Id error !'));
				$this->redirect(array('action'=>'index'));
			}

			$Order = $this->Order->findById($id);
			if (!$Order) {
		//		$this->Session->setFlash(__(' ID error'));
				$this->redirect(array('action'=>'index'));
			}

			if ($this->request->is('post') || $this->request->is('put')) {
				$this->Order->id = $id;

if ($this->Order->save($this->request->data)) {
//$this->Session->setFlash(__('Order modified successfully '));
						// $this->redirect(array('action' => 'edit',$id)); 
		return $this->redirect('http://ordersentry.enterpriseesolutions.com/');
} else {
//$this->Session->setFlash(__('Utilisateur modifié avec succès'));
}

}
}else{   
    $this->Session->setFlash(__('<label style="color:red">not authorized !</label>'));
    $this->redirect(array('action' => 'index'));
	}
    			if (!$this->request->data) {
				$this->request->data = $Order;
			}
			
//@Ran
//Ordres of Products
  $this->loadModel('Product');
  //$this->loadModel('Order');
 $this->Product->validate = array();
if (isset ($id)  ) { $this->set('id',$id);	
$this->Product->paginate = array('conditions' =>array('Product.order'=>$id),
		  'limit' => 100,
		  /*'join' =>    array('table' => 'orders',
        'alias' => 'orders',
        'type' => 'LEFT',
        'conditions' => array(
            'Order.id = Product.order',
        )
    )
,*/
        'order' => array('Product.id' => 'asc' ) 
        );}else{
  	$this->Product->paginate = array(
		  'limit' => 100,
       // 'order' => array('Product.id' => 'asc' ) 
        );}
		
//if (isset ($products)  ) { $this->set($this->set('products', $products));}
$this->set('products', $this->Product->find('all',array('conditions'=>array('Product.order'=>$id))));
	
			
}
 public function view($id = null) {
	if ($id != null){$this->set('id',$id);}
    	        if ($this->Session->read('Auth.User.role')=='Admin' ){

		    if (!$id) {
			//	$this->Session->setFlash(__('Id error !'));
				$this->redirect(array('action'=>'index'));
			}

			$Order = $this->Order->findById($id);
			if (!$Order) {
		//		$this->Session->setFlash(__(' ID error'));
				$this->redirect(array('action'=>'index'));
			}

			if ($this->request->is('post') || $this->request->is('put')) {
				$this->Order->id = $id;

if ($this->Order->save($this->request->data)) {
//$this->Session->setFlash(__('Order modified successfully '));
						// $this->redirect(array('action' => 'edit',$id)); 
		return $this->redirect('http://ordersentry.enterpriseesolutions.com/');
} else {
//$this->Session->setFlash(__('Utilisateur modifié avec succès'));
}

}
}else{   
    $this->Session->setFlash(__('<label style="color:red">not authorized !</label>'));
    $this->redirect(array('action' => 'index'));
	}
    			if (!$this->request->data) {
				$this->request->data = $Order;
			}
			
//@Ran
//Ordres of Products
  $this->loadModel('Product');
  //$this->loadModel('Order');
 $this->Product->validate = array();
if (isset ($id)  ) { $this->set('id',$id);	
$this->Product->paginate = array('conditions' =>array('Product.order'=>$id),
		  'limit' => 100,
		  /*'join' =>    array('table' => 'orders',
        'alias' => 'orders',
        'type' => 'LEFT',
        'conditions' => array(
            'Order.id = Product.order',
        )
    )
,*/
        'order' => array('Product.id' => 'asc' ) 
        );}else{
  	$this->Product->paginate = array(
		  'limit' => 100,
       // 'order' => array('Product.id' => 'asc' ) 
        );}
		
//if (isset ($products)  ) { $this->set($this->set('products', $products));}
$this->set('products', $this->Product->find('all',array('conditions'=>array('Product.order'=>$id))));
	
			
}
  public function edit2($id = null) {
	if ($id != null){$this->set('id',$id);}
    	        if ($this->Session->read('Auth.User.role')=='Admin' ){

		    if (!$id) {
			//	$this->Session->setFlash(__('Id error !'));
				$this->redirect(array('action'=>'index'));
			}

			$Order = $this->Order->findById($id);
			if (!$Order) {
			//	$this->Session->setFlash(__(' ID error'));
				$this->redirect(array('action'=>'index'));
			}

			if ($this->request->is('post') || $this->request->is('put')) {
				$this->Order->id = $id;

if ($this->Order->save($this->request->data)) {
//$this->Session->setFlash(__('Order modified successfully '));
						 $this->redirect(array('action' => 'edit2',$id)); 
} else {
//$this->Session->setFlash(__('Utilisateur modifié avec succès'));
}

}
}else{   
    $this->Session->setFlash(__('<label style="color:red">not authorized !</label>'));
    $this->redirect(array('action' => 'index'));
	}
    			if (!$this->request->data) {
				$this->request->data = $Order;
			}
			
//@Ran
//Ordres of Products
  $this->loadModel('Product');
  //$this->loadModel('Order');
 $this->Product->validate = array();
if (isset ($id)  ) { $this->set('id',$id);	
$this->Product->paginate = array('conditions' =>array('Product.order'=>$id),
		  'limit' => 100,
		  /*'join' =>    array('table' => 'orders',
        'alias' => 'orders',
        'type' => 'LEFT',
        'conditions' => array(
            'Order.id = Product.order',
        )
    )
,*/
        'order' => array('Product.id' => 'asc' ) 
        );}else{
  	$this->Product->paginate = array(
		  'limit' => 100,
       // 'order' => array('Product.id' => 'asc' ) 
        );}
		
//if (isset ($products)  ) { $this->set($this->set('products', $products));}
$this->set('products', $this->Product->find('all',array('conditions'=>array('Product.order'=>$id))));
	
			
}

public function delete($id = null) {
	//echo('here2');
 $this->loadModel('Order');
    	       if ($this->Session->read('Auth.User.role')=='Admin' ){
		
		if (!$id) {
			//$this->Session->setFlash(' id error');
			$this->redirect(array('action'=>'index'));
		}
		
        $this->Order->id = $id;
        if (!$this->Order->exists()) {
          //  $this->Session->setFlash(' Id error   ');
			$this->redirect(array('action'=>'index'));
        }
     else
     {
        if ($this->Order->delete()){
			$this->loadModel('Product');
			$this->Product->deleteAll(array('order'=>$id),false);
			$this->Session->setFlash(__('Order  deleted'));$this->redirect(array('action'=>'index'));
			
			}

       else{ $this->Session->setFlash(__('order not deleted'));
        $this->redirect(array('action' => 'index'));}
    }

		 }else {   
   		 	$this->Session->setFlash(__('<label style="color:red">not authorized !</label>'));
    	    $this->redirect(array('action' => 'index'));	} 
}
public function remove($id = null) {
 // $this->autoRender = false;

$this->loadModel('Order');

             if ($this->Session->read('Auth.User.role')=='Admin' ){
    if (!$id) {
      $this->Session->setFlash(' id error');
    }
    
        $this->Order->id = $id;
        if (!$this->Order->exists()) {
            $this->Session->setFlash(' Id error   ');
        }
     else
     {
        if ($this->Order->delete()){
      $this->loadModel('Product');
      $this->Product->deleteAll(array('order'=>$id),false);
      $this->Session->setFlash(__('Order  deleted'));
      
      }

       else{ $this->Session->setFlash(__('order not deleted'));}
    }

     }else {   
        $this->Session->setFlash(__('<label style="color:red">not authorized !</label>')); }
//$this->redirect('/');
              //$this->render('./ Pages/home');
}	
 
public function TotOrders(){
 $this->loadModel('Order');
 $total = $this->Order->find('count');
return $total;
}
public function excel()
{  $Orders = $this->Order->find('all');
   $this->set(compact('Orders'));
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
          header("Content-Disposition: attachment;Filename=Orders.doc");
          echo $html;
            
        }
		
    }
	
 
public function ListeOrders()
{
   $this->loadModel('Order');
   $liste = $this->Order->find('list',array('fields'=>array('id'))) ;
  return  $liste;
	
}

   public function DateOrder($id)
{
	$this->loadModel('Order');
    $categ = $this->Order->find('first',array('fields'=>array('date'),'conditions'=>array('id'=>$id))) ;
    return  $categ['Order']['date'];
}



   public function TimeOrder($id)
{
	$this->loadModel('Order');
    $categ = $this->Order->find('first',array('fields'=>array('time'),'conditions'=>array('id'=>$id))) ;
    return  $categ['Order']['time'];
}


   public function statusOrder($id)
{
	$this->loadModel('Order');
    $categ = $this->Order->find('first',array('fields'=>array('status'),'conditions'=>array('id'=>$id))) ;
    return  $categ['Order']['status'];
}

   public function instructionssOrder($id)
{
	$this->loadModel('Order');
    $categ = $this->Order->find('first',array('fields'=>array('instructionorder'),'conditions'=>array('id'=>$id))) ;
    return  $categ['Order']['instructionorder'];
}

   public function orderofcustomer($customer,$date)
{
  $this->loadModel('Order');
    $sprd = $this->Order->find('first',array('fields'=>array('id'),'conditions'=>array('customer'=>$customer,'date'=>$date))) ;
    if (empty($sprd))
      {return false;}
    else {return  $sprd['Order']['id'];}
}

   public function porderofcustomer($customer,$date)
{
  $this->loadModel('Order');
    $sprd = $this->Order->find('first',array('fields'=>array('id'),'conditions'=>array('customer'=>$customer,'date'=>$date,'parent ='=>null))) ;
    if (empty($sprd))
      {return false;}
    else {return  $sprd['Order']['id'];}
}

   public function customerorder($id,$date)
{
  $this->loadModel('Order');
    $orcustomer = $this->Order->find('first',array('fields'=>array('customer'),'conditions'=>array('id'=>$id,'date'=>$date))) ;
    if (empty($orcustomer))
      {return false;}
    else {return  $orcustomer['Order']['customer'];}
}
   public function newid($id,$date)
{
  $this->loadModel('Order');
    $orcustomer = $this->Order->find('first',array('fields'=>array('id'),'conditions'=>array('parent'=>$id,'date'=>$date))) ;
    if (empty($orcustomer))
      {return false;}
    else {return  $orcustomer['Order']['id'];}
}
   public function customerorderSecondname($id,$date)
{
  $this->loadModel('Order');
    $orcustomer = $this->Order->find('first',array('fields'=>array('customername2'),'conditions'=>array('id'=>$id,'date'=>$date))) ;
    if (empty($orcustomer))
      {return false;}
    else {return  $orcustomer['Order']['customername2'];}
}
   public function customerorderSecondname2($newid,$id,$date)
{
  $this->loadModel('Order');
    $orcustomer = $this->Order->find('first',array('fields'=>array('customername2'),'conditions'=>array('id'=>$newid,'parent'=>$id,'date'=>$date))) ;
    if (empty($orcustomer))
      {return false;}
    else {return  $orcustomer['Order']['customername2'];}
}
//@Ran
   public function customerorder2($order)
{
  $this->loadModel('Order');
    $orcustomer = $this->Order->find('first',array('fields'=>array('customer'),'conditions'=>array('id'=>$order))) ;
    if (empty($orcustomer))
      {return false;}
    else {return  $orcustomer['Order']['customer'];}
}
 public function customerorderdate($order)
{
  $this->loadModel('Order');
    $orcustomer = $this->Order->find('first',array('fields'=>array('date'),'conditions'=>array('id'=>$order))) ;
    if (empty($orcustomer))
      {return false;}
    else {return  $orcustomer['Order']['date'];}
}
public function customerordertime($order)
{
  $this->loadModel('Order');
    $orcustomer = $this->Order->find('first',array('fields'=>array('time'),'conditions'=>array('id'=>$order))) ;
    if (empty($orcustomer))
      {return false;}
    else {return  $orcustomer['Order']['time'];}
}



   public function checkstatus($id)
{
  $this->loadModel('Order');
    $orcustomer = $this->Order->find('first',array('fields'=>array('customer'),'conditions'=>array('id'=>$id,'date'=>$date))) ;
    if (empty($orcustomer))
      {return false;}
    else {return  $orcustomer['Order']['customer'];}
}
Public function pack($id=null)
{
  $this->loadModel('Order');
  $this->Order->id = $this->Order->field('id', array('id' => $id));
if ($this->Order->id) {
 $this->Order->saveField('status', 3);
 //$this->Order->saveField('time', '23:59:59');
}
}

Public function checkout($id=null,$view)
{
  $this->loadModel('Order');
  $this->Order->id = $this->Order->field('id', array('id' => $id));
if ($this->Order->id) {
 $orstatus = $this->Order->find('first',array('fields'=>array('status'),'conditions'=>array('id'=>$id))) ;
    if ($orstatus != 2)
      {
        // change order items status 
        App::import('Controller', 'Products');
        $products = new ProductsController;
        $ListeProducts=$products->ListeProductsOrder($id);
        foreach($ListeProducts as $IdItem)
          {
              $this->loadModel('Product');
              $this->Product->id = $this->Product->field('id', array('item' => $IdItem,'order' => $id));
              if ($this->Product->id) {
                $this->Product->saveField('status', 2);
              }
          }
        // change order status
        $otime = $this->Order->find('first',array('fields'=>array('time'),'conditions'=>array('id'=>$id))) ;
        $this->Order->saveField('cootime',$otime['Order']['time']);
        $this->Order->saveField('status', 2);
        $this->Order->saveField('time', '11:59 PM');

       
		if($view==1){  $this->redirect(array('action' => 'index'));}
		else{return true;}
      }
    else 
	{	if($view==1){  $this->redirect(array('action' => 'index'));}
		else
	{return  false;}}
 
}
}
   public function checkedordertime($id)
{
  $this->loadModel('Order');
    $ortime = $this->Order->find('first',array('fields'=>array('cootime'),'conditions'=>array('id'=>$id))) ;
    if (empty($ortime))
      {return false;}
    else {return  $ortime['Order']['cootime'];}
}
Public function ListFromid($ids,$nb){
	
	echo ('id orders to print'.$ids);
/* 	var $arrayid=array();
	for($i=0; $i++; $i< $nb){
		$array[$i]=
	}
	 $this->loadModel('Order');
	  $liste = $this->Order->find('list',array('conditions'=>array('id'=>$arrayid))) ;
  return  $liste; */
	//$this->set('orders', $this->paginate());
}
Public function printorders() {

}
Public function printorders0($idtoprint) {
		if ($idtoprint != null){$this->set('idtoprint',$idtoprint);}
	
    	        if ($this->Session->read('Auth.User.role')=='Admin' ){

	
			$Order = $this->Order->findById($idtoprint);
		
				$this->Order->id = $idtoprint;

if ($this->Order->save($this->request->data)) { 
		return $this->redirect('http://ordersentry.enterpriseesolutions.com/orders/printorders0/'.$idtoprint);
} 

}else{   
    $this->Session->setFlash(__('<label style="color:red">not authorized !</label>'));
    $this->redirect(array('action' => 'index'));
	}
    			if (!$this->request->data) {
				$this->request->data = $Order;
			}
			
//@Ran
//Ordres of Products
  $this->loadModel('Product');

 $this->Product->validate = array();
if (isset ($idtoprint)  ) { $this->set('id',$idtoprint);	
$this->Product->paginate = array('conditions' =>array('Product.order'=>$idtoprint),
		  'limit' => 100,
        'order' => array('Product.id' => 'asc' ) 
        );}else{
  	$this->Product->paginate = array(
		  'limit' => 100,
         );}
		
$this->set('products', $this->Product->find('all',array('conditions'=>array('Product.order'=>$idtoprint))));

}
Public function cancel($id=null)
{
  $this->loadModel('Order');
  $this->Order->id = $this->Order->field('id', array('id' => $id));
if ($this->Order->id) {
 $orstatus = $this->Order->find('first',array('fields'=>array('status'),'conditions'=>array('id'=>$id))) ;
    if ($orstatus != 4)
      {
        // change order items status 
        /*App::import('Controller', 'Products');
        $products = new ProductsController;
        $ListeProducts=$products->ListeProductsOrder($id);
        foreach($ListeProducts as $IdItem)
          {
              $this->loadModel('Product');
              $this->Product->id = $this->Product->field('id', array('item' => $IdItem,'order' => $id));
              if ($this->Product->id) {
                $this->Product->saveField('status', 4);
              }
          }*/
        // change order status
        $this->Order->saveField('status', 4);

        return true;
      }
    else 
      {return  false;}
 
}
}
Public function uncancel($id=null)
{
  $this->loadModel('Order');
  $this->Order->id = $this->Order->field('id', array('id' => $id));
if ($this->Order->id) {
 $orstatus = $this->Order->find('first',array('fields'=>array('status'),'conditions'=>array('id'=>$id))) ;

    if ($orstatus['Order']['status'] == 4)
      {
        // change order items status 
        /*App::import('Controller', 'Products');
        $products = new ProductsController;
        $ListeProducts=$products->ListeProductsOrder($id);
        foreach($ListeProducts as $IdItem)
          {
              $this->loadModel('Product');
              $this->Product->id = $this->Product->field('id', array('item' => $IdItem,'order' => $id));
              if ($this->Product->id) {
                $this->Product->saveField('status', 4);
              }
          }*/
        // change order status
        $this->Order->saveField('status', 0);

        return true;
      }
    else 
      {return  false;}
 
}
}

// suborders function return the list of suborders otherwise return false
public function SubOrders($id=null)
{
   $this->loadModel('Order');
   $liste = $this->Order->find('list',array( 'fields'=>array('id'),'conditions'=>array('parent'=>$id)));
   if (empty($liste))
      {return false;}
    else 
      {return  $liste;}
  
}	  
// Addsuborders function create suborder header and redirect to the edit page
public function addsuborder($id=null)
{
      
       $this->loadModel('Order');
       $this->loadModel('Customer');
       $id = $this->request->data['id'];
        
       //$datao["Order"]["parent"]=$id;
       $ordate = $this->Order->find('first',array('fields'=>array('date'),'conditions'=>array('id'=>$id)));
       $sodate = $ordate["Order"]["date"];
       //$datao["Order"]["date"]=$ordate;
       $ortime = $this->Order->find('first',array('fields'=>array('time'),'conditions'=>array('id'=>$id)));
       $sotime = $ortime["Order"]["time"];
       //$datao["Order"]["time"]=$ortime;
       $orcust = $this->Order->find('first',array('fields'=>array('customer'),'conditions'=>array('id'=>$id)));
       $socust = $orcust["Order"]["customer"];
       $orcustinfo = $this->Customer->find('first',array('fields'=>array('phone','name'),'conditions'=>array('id'=>$socust)));
       $socustname = $orcustinfo["Customer"]["name"];
       $socustphone = $orcustinfo["Customer"]["phone"];
       //$datao["Order"]["customer"]=$orcust;
       //echo $ordate.' / '.$ortime;

       $this->Order->create();
       $this->Order->read(null, 1);
       $this->Order->set(array(
        'parent' => $id,
        'date' => $sodate,
        'time' => $sotime,
        'customer' => $socust,
        'customername' => $socustname,
        'customerphone' => $socustphone
       ));
      if ($this->Order->save()) {
                 //  $this->Session->setFlash(__('Order added Successfully ! You can add products'));
                  $idsor = $this->Order->id ;
                    
                  //$this->redirect(array('controller'=>'orders','action' => 'edit',$idsor));      
                      //echo '<script>location.href = "/orders/edit/'.$idsor.'";</script>';
                      /*
                      exit();*/
                    
        
                  } 
     else {$idsor = 'error';}
  //echo $idsor;
  $status=$idsor;                
            $this->response->body(json_encode($status));

            return $this->response;

}
// check if order is suborder for the edition
public function issuborder($id=null)
{ 
  $this->loadModel('Order');
    $orparent = $this->Order->find('first',array('fields'=>array('parent'),'conditions'=>array('id'=>$id))) ;
    if (empty($orparent))
      {return false;}
    else {return  $orparent['Order']['parent'];}
}  
//@Ran
public function updateprinted($id){
	
	$this->Order->updateAll(array('Order.printed'=>'1'),array('Order.id'=>$id));
	
}
   public function Orderprinted( $id)
{

$this->loadModel('Order');
     $cust = $this->Order->find('first',array('fields'=>array('printed'),'conditions'=>array('id'=>$id/*,'status'=>'active'*/))) ;

if (empty($cust))
      {return false;}
    else	{ return  $cust['Order']['printed'];}
  
}
public function ListeOrdersCustomerspecDate($date)
{
   $this->loadModel('Order');
   $custfordate = $this->Order->find('list',array('fields'=>array('customername','customerphone'),'conditions'=>array('date'=>$date))) ;
  return  $custfordate;
  
}
public function getproduct($q) {
		if (isset ($q)  ) { $this->set('q',$q);	}

	}
} // end class


?>