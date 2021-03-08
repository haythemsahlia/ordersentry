<?php
App::uses('AppController', 'Controller');

class OrdersController extends AppController {
 // var $name = 'Order';
 // var $uses = array('orders');
  	Public $name='Orders';   
 
  var $uses = array('Order', 'Product'); 


  	/* Public $name='Products';    
  var $uses = array('Product');  */
    /* var $filters = array  
        (  
            'index' => array  
            (  
                'Order' => array  
                (  
                    'Order.id'  , 
                    'Order.date' , 
					'Order.Customer' => array('type'=>'select','selector'=>'getCustomers') ,  
                    
                )  
            )  
        );  */
		    var $filters = array  
        (  
		 'add' => array  
            (  
                'Order' => array  
                (  
                   'Order.id'  , 
                    'Order.date' , 
					'Order.Customer' => array('type'=>'select','selector'=>'getCustomers') ,  
                  
                )  
            )  ,
            'index' => array  
            (  
                'Order' => array  
                (  
                    'Order.id'  , 
                    'Order.date'  , 
					'Order.time' ,   
					'Order.customer'  => array('type'=>'select','selector'=>'getCustomers') ,   
					'Order.status'  => array('type'=>'select','selector'=>'getStatus') ,   
                                    )  
            )  
        ); 
  
   
 public function index() {
   $this->Order->validate = array();

  	$this->paginate = array(
		  'limit' => 100,
        'order' => array('Order.id' => 'desc' ) 
        );
		// limit nonnnnnnnnnnnnnn
		//$orders = $this->paginate('Order');
       // $this->set(compact('orders'));
$this->set('orders', $this->paginate());
    }
 
    public function add($id =null) {
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
      if ($this->Order->save($this->request->data)) {
                   $this->Session->setFlash(__('Order added Successfully ! You can add products'));
                  $id = $this->Order->id ;
                  
                       $this->redirect(array('controller'=>'orders','action' => 'edit',$id));      
        
                  } else {
                  $this->Session->setFlash(__('Impossible to add the order, try again.'));
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
        $this->Session->setFlash(__('<label style="color:#eb1934">The customer have already an order for that date, you can edit from <a href="/products/index/'.$idorder[0]["Order"]["id"].'" >here</a></label>'));
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
      if ($this->Order->save($this->request->data)) {
                   $this->Session->setFlash(__('Order added Successfully ! Start saving products of orders '));
                  $id = $this->Order->id ;
                  
                      //@Ran $this->redirect(array('controller'=>'products','action' => 'index',$id));      
                       $this->redirect(array('controller'=>'orders','action' => 'edit',$id));      
        
                  } else {
                  $this->Session->setFlash(__('Impossible to add the order, try again.'));
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
$this->Session->setFlash(__('Order modified successfully '));
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
$this->Session->setFlash(__('Order modified successfully '));
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
$this->Session->setFlash(__('Order modified successfully '));
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
	echo('here2');
 $this->loadModel('Order');
    	       if ($this->Session->read('Auth.User.role')=='Admin' ){
		
		if (!$id) {
			$this->Session->setFlash(' id error');
			$this->redirect(array('action'=>'index'));
		}
		
        $this->Order->id = $id;
        if (!$this->Order->exists()) {
            $this->Session->setFlash(' Id error   ');
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

   public function orderofcustomer($customer,$date)
{
  $this->loadModel('Order');
    $sprd = $this->Order->find('first',array('fields'=>array('id'),'conditions'=>array('customer'=>$customer,'date'=>$date))) ;
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

Public function checkout($id=null)
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
        $this->Order->saveField('status', 2);
        $this->Order->saveField('time', '23:59:59');

        return true;
      }
    else 
      {return  false;}
 
}
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
Public function cancel($id=null)
{
  $this->loadModel('Order');
  $this->Order->id = $this->Order->field('id', array('id' => $id));
if ($this->Order->id) {
 $orstatus = $this->Order->find('first',array('fields'=>array('status'),'conditions'=>array('id'=>$id))) ;
    if ($orstatus != 4)
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
                $this->Product->saveField('status', 4);
              }
          }
        // change order status
        $this->Order->saveField('status', 4);

        return true;
      }
    else 
      {return  false;}
 
}
}
	   

} // end class


?>