<?php
App::uses('AppController', 'Controller');
class OrdersController extends AppController {
 // var $name = 'Order';
 // var $uses = array('orders');
  	Public $name='Orders';    
  var $uses = array('Order');
   var $filters = array  
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
 
    public function add() {
      if ($this->Session->read('Auth.User.role')=='Admin' ){
      if ($this->request->is('post')) {
			 $this->loadModel('Order');
    
        $conditions = array(
            'Order.date' => $this->data["Order"]["date"],
            'Order.customer' => $this->data["Order"]["customer"]
        );
        if (!($this->Order->hasAny($conditions))) {
        

			$this->Order->create();
      if ($this->Order->save($this->request->data)) {
                   $this->Session->setFlash(__('Order added Successfully '));
                  $id = $this->Order->id ;
                  
                       $this->redirect(array('controller'=>'products','action' => 'index',$id));      
        
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
			}
else{   
    $this->Session->setFlash(__('<label style="color:red">not authorized !</label>'));
    $this->redirect(array('action' => 'index'));
	}       
 
}
    public function edit($id = null) {
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
				 $this->redirect(array('action' => 'index')); 
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

 
public function delete($id = null) {
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

} // end class

?>