<?php
App::uses('AppController', 'Controller');
class ItemsController extends AppController {
 // var $name = 'Item';
 // var $uses = array('items');
  	Public $name='Items';    
  var $uses = array('Item');
 
   var $filters = array  
        (  
            'index' => array  
            (  
                'Item' => array  
                (  
                  //  'Item.name'  , 
					'Item.categorie' => array('label'=>'Category','type'=>'select','selector'=>'getCats') ,  
                    
                )  
            )  
        );
   
 public function index() {
 // $this->Item->validate = array();

  	$this->paginate = array(
		  'limit' => 100,
        'order' => array('Item.id' => 'asc' ) 
        );
		// limit nonnnnnnnnnnnnnn
		//$items = $this->paginate('Item');
       // $this->set(compact('items'));
$this->set('items', $this->paginate());
    }
 
    public function add() {
      if ($this->Session->read('Auth.User.role')=='Admin' ){
      if ($this->request->is('post')) {
				
			$this->Item->create();
			if ($this->Item->save($this->request->data)) {
				 $this->Session->setFlash(__('Item added Successfully '));
  			     $this->redirect(array('action' => 'index'));			

			    $this->redirect(array('action' => 'add')); 
 			} else {
				$this->Session->setFlash(__('Impossible to add the item, try again.'));
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

			$Item = $this->Item->findById($id);
			if (!$Item) {
				$this->Session->setFlash(__(' ID error'));
				$this->redirect(array('action'=>'index'));
			}

			if ($this->request->is('post') || $this->request->is('put')) {
				$this->Item->id = $id;

if ($this->Item->save($this->request->data)) {
$this->Session->setFlash(__('Item modified successfully '));
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
				$this->request->data = $Item;
			}
}

 
public function delete($id = null) {
$this->loadModel('Item');
    	       if ($this->Session->read('Auth.User.role')=='Admin' ){
		
		if (!$id) {
			$this->Session->setFlash('donner l id');
			$this->redirect(array('action'=>'index'));
		}
		
        $this->Item->id = $id;
        if (!$this->Item->exists()) {
            $this->Session->setFlash(' Id Invalide   ');
			$this->redirect(array('action'=>'index'));
        }
     else
     {
		 $this->loadModel('Product');
		     
 
$number = $this->Product->find('count',array('conditions'=>array('item'=>$id)) );	
 	if ($number==0){
		
		if ($this->Item->delete()){$this->Session->setFlash(__('Item  deleted'));$this->redirect(array('action'=>'index'));}

       else{ $this->Session->setFlash(__('Item could not be deleted!'));
        $this->redirect(array('action' => 'index'));} 
		
	}
	else{
		  $this->Session->setFlash(__('Item could not be deleted! Delete related products and try again.'));
        $this->redirect(array('action' => 'index')); 
		
	} 

		
    }

		 }else {   
   		 	$this->Session->setFlash(__('<label style="color:red">not authorized !</label>'));
    	    $this->redirect(array('action' => 'index'));	}
}
	
 
public function TotItems(){
 $this->loadModel('Item');
 $total = $this->Item->find('count');
return $total;
}
public function excel()
{  $Items = $this->Item->find('all');
   $this->set(compact('Items'));
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
          header("Content-Disposition: attachment;Filename=Items.doc");
          echo $html;
            
        }
		
    }
	
    
public function ListeItems()
{
	
$this->loadModel('Item');
     $liste = $this->Item->find('list',array('fields'=>array('id','name'))) ;
  return  $liste;
	
}
//@Ran
	 public function DescitemByName($name)
{
	
$this->loadModel('Item');
     $item = $this->Item->find('first',array('fields'=>array('description'),'conditions'=>array('name'=>$name))) ;
  return  $item['Item']['description'];
	
}
   public function ItemById($id)
{
	
$this->loadModel('Item');
     $item = $this->Item->find('first',array('fields'=>array('name'),'conditions'=>array('id'=>$id))) ;
  return  $item['Item']['name'];
	
}

   public function NameitemById($id)
{
	
$this->loadModel('Item');
     $item = $this->Item->find('first',array('fields'=>array('name'),'conditions'=>array('id'=>$id))) ;
  return  $item['Item']['name'];
	
}

   public function ItemCatbyId($id)
{ 
 $this->loadModel('Item');
 $item = $this->Item->find('first',array('fields'=>array('categorie'),'conditions'=>array('id'=>$id))) ;
  return  $item['Item']['categorie'];
	
}

   public function ItemsCateg($id)
{ 
 $this->loadModel('Item');
     $liste = $this->Item->find('list',array( 'conditions'=>array('categorie'=>$id),'fields'=>array('id','name'))) ;
  return  $liste;
	
}

//@Ran
public function Abrv()
{
$this->loadModel('Item');
     $liste = $this->Item->find('list',array('fields'=>'name','order' => array('Item.id' => 'asc' ))) ;
  return  $liste;
//  return  json_encode($user);
 
}  
public function Numerositems()
{
$this->loadModel('Item');
     $liste = $this->Item->find('list',array('fields'=>'id','order' => array('Item.id' => 'asc' ))) ;
  return  $liste;
//  return  json_encode($user);
 
} 
public function Nomsitems()
{
$this->loadModel('Item');
     $liste = $this->Item->find('list',array('fields'=>'description','order' => array('Item.id' => 'asc' ))) ;
  return  $liste;
//  return  json_encode($user);
 
}

//@Ran
public function itemsinorder($id)
{
$this->loadModel('Product');
     $liste = $this->Product->find('list',array('fields'=>'item','conditions'=>array('order'=>$id),'order' => array('Product.id' => 'asc' ))) ;
  return  $liste;
//  return  json_encode($user);
 
}
public function itemsinorderinst($id)
{
$this->loadModel('Product');
     $liste = $this->Product->find('list',array('fields'=>'instructions','conditions'=>array('order'=>$id),'order' => array('Product.id' => 'asc' ))) ;
  return  $liste;
//  return  json_encode($user);
 
}
public function itemsinorderqty($id)
{
$this->loadModel('Product');
     $liste = $this->Product->find('list',array('fields'=>'quantity','conditions'=>array('order'=>$id),'order' => array('Product.id' => 'asc' ))) ;
  return  $liste;
//  return  json_encode($user);
 
}




} // end class

?>