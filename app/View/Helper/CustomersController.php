<?php
App::uses('AppController', 'Controller');
class CustomersController extends AppController {
 // var $name = 'Customer';
 // var $uses = array('customers');
  	Public $name='Customers';    
  var $uses = array('Customer');
   var $filters = array  
        (  
            'index' => array  
            (  
                'Customer' => array  
                (  
                    'Customer.name'  , 
					'Customer.city'  ,  
                    
                )  
            )  
        );
  
  
 public function index() {
   $this->Customer->validate = array();

  	$this->paginate = array(
		  'limit' => 100,
        'customer' => array('Customer.id' => 'asc' ) 
        );
		// limit nonnnnnnnnnnnnnn
		//$customers = $this->paginate('Customer');
       // $this->set(compact('customers'));
$this->set('customers', $this->paginate());
    }
 
    public function add() {
      if ($this->Session->read('Auth.User.role')=='Admin' ){
      if ($this->request->is('post')) {
				
			$this->Customer->create();
			if ($this->Customer->save($this->request->data)) {
				 $this->Session->setFlash(__('Customer added Successfully '));
				 
				   if (isset($this->request->data['Customer']['redirect']))
    {
      //$redirect=$this->request->data['Customer']['Customer'];
  			     $this->redirect(array('controller'=>'orders','action' => 'index' ));	
 	}
			  //  $this->redirect(array('action' => 'index')); 
 			} else {
				$this->Session->setFlash(__('Impossible to add the customer, try again.'));
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

			$Customer = $this->Customer->findById($id);
			if (!$Customer) {
				$this->Session->setFlash(__(' ID error'));
				$this->redirect(array('action'=>'index'));
			}

			if ($this->request->is('post') || $this->request->is('put')) {
				$this->Customer->id = $id;

if ($this->Customer->save($this->request->data)) {
$this->Session->setFlash(__('Category modified successfully '));
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
				$this->request->data = $Customer;
			}
}

 
public function delete($id = null) {
$this->loadModel('Customer');
    	       if ($this->Session->read('Auth.User.role')=='Admin' ){
		
		if (!$id) {
			$this->Session->setFlash('donner l id');
			$this->redirect(array('action'=>'index'));
		}
		
        $this->Customer->id = $id;
        if (!$this->Customer->exists()) {
            $this->Session->setFlash(' Id error   ');
			$this->redirect(array('action'=>'index'));
        }
     else
     {
        if ($this->Customer->delete()){$this->Session->setFlash(__('customer  deleted'));$this->redirect(array('action'=>'index'));}

       else{ $this->Session->setFlash(__('customer not deleted'));
        $this->redirect(array('action' => 'index'));}
    }

		 }else {   
   		 	$this->Session->setFlash(__('<label style="color:red">not authorized !</label>'));
    	    $this->redirect(array('action' => 'index'));	}
}
	
 
public function TotCustomers(){
 $this->loadModel('Customer');
 $total = $this->Customer->find('count');
return $total;
}
public function excel()
{  $Customers = $this->Customer->find('all');
   $this->set(compact('Customers'));
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
          header("Content-Disposition: attachment;Filename=Customers.doc");
          echo $html;
            
        }
		
    }
	
    
public function ListeCustomers()
{
	
$this->loadModel('Customer');
     $liste = $this->Customer->find('list',array('fields'=>array('name'))) ;
  return  $liste;
	
}

   public function CustomerById( $id)
{
	
$this->loadModel('Customer');
     $cust = $this->Customer->find('first',array('fields'=>array('name'),'conditions'=>array('id'=>$id))) ;
  return  $cust['Customer']['name'];
	
}


   public function CustomerTelById( $id)
{
	
$this->loadModel('Customer');
     $cust = $this->Customer->find('first',array('fields'=>array('phone'),'conditions'=>array('id'=>$id))) ;
  return  $cust['Customer']['phone'];
	
}

} // end class

?>