<?php
App::uses('AppController', 'Controller');
	App::import('Controller', 'Items');
	$items = new ItemsController;
class CategoriesController extends AppController {

 
 // var $name = 'Categorie';
 // var $uses = array('categories');
  	Public $name='Categories';    
  var $uses = array('Categorie');
  /*
   var $filters = array  
        (  
            'index' => array  
            (  
                'Categori' => array  
                (  
                    'Categori.code'  , 
					'Categori.mission' => array('type'=>'select','selector'=>'getMisssions') ,  
                    
                )  
            )  
        );
  
  */
 public function index() {
  // $this->Categorie->validate = array();

  	$this->paginate = array(
		  'limit' => 100,
        'order' => array('Categorie.id' => 'asc' ) 
        );
		// limit nonnnnnnnnnnnnnn
		//$categories = $this->paginate('Categorie');
       // $this->set(compact('categories'));
$this->set('categories', $this->paginate());
    }
 
    public function add() {
      if ($this->Session->read('Auth.User.role')=='Admin' ){
      if ($this->request->is('post')) {
				
			$this->Categorie->create();
			if ($this->Categorie->save($this->request->data)) {
	 $this->Session->setFlash(__('Category added Successfully '));
 			     $this->redirect(array('action' => 'index')); 
			    $this->redirect(array('action' => 'add')); 
 			} else {
				$this->Session->setFlash(__('Impossible to add Category, try again.'));
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

			$Categorie = $this->Categorie->findById($id);
			if (!$Categorie) {
				$this->Session->setFlash(__(' ID error'));
				$this->redirect(array('action'=>'index'));
			}

			if ($this->request->is('post') || $this->request->is('put')) {
				$this->Categorie->id = $id;

if ($this->Categorie->save($this->request->data)) {
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
				$this->request->data = $Categorie;
			}
}

 
public function delete($id = null) {
$this->loadModel('Categorie');
    	       if ($this->Session->read('Auth.User.role')=='Admin' ){
		
		if (!$id) {
			$this->Session->setFlash('donner l id');
			$this->redirect(array('action'=>'index'));
		}
		
        $this->Categorie->id = $id;
        if (!$this->Categorie->exists()) {
            $this->Session->setFlash(' Id Invalide   ');
			$this->redirect(array('action'=>'index'));
        }
     else
     {
		 $this->loadModel('Item');
		     
 
$number = $this->Item->find('count',array('conditions'=>array('categorie'=>$id)) );	
 	if ($number==0){
		
		if ($this->Categorie->delete()){$this->Session->setFlash(__('Category  deleted'));$this->redirect(array('action'=>'index'));}

       else{ $this->Session->setFlash(__('Category could not be deleted!'));
        $this->redirect(array('action' => 'index'));} 
		
	}
	else{
		  $this->Session->setFlash(__('The category could not be deleted! Delete related items and try again.'));
        $this->redirect(array('action' => 'index')); 
		
	} 
	
       /*  if ($this->Categorie->delete()){$this->Session->setFlash(__('Category  deleted'));$this->redirect(array('action'=>'index'));}

       else{ $this->Session->setFlash(__('Category n  est pas supprimée'));
        $this->redirect(array('action' => 'index'));} */
    }

		 }else {   
   		 	$this->Session->setFlash(__('<label style="color:red">not authorized !</label>'));
    	    $this->redirect(array('action' => 'index'));	}
}
	
 
public function TotCategories(){
 $this->loadModel('Categorie');
 $total = $this->Categorie->find('count');
return $total;
}
public function excel()
{  $Categories = $this->Categorie->find('all');
   $this->set(compact('Categories'));
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
          header("Content-Disposition: attachment;Filename=Categories.doc");
          echo $html;
            
        }
		
    }
	
   public function CatById($id)
{
	
$this->loadModel('Categorie');
     $categ = $this->Categorie->find('first',array('fields'=>array('name'),'conditions'=>array('id'=>$id))) ;
  return  $categ['Categorie']['name'];
	
}
   public function ColorById($id)
{
	$this->loadModel('Categorie');
    $categ = $this->Categorie->find('first',array('fields'=>array('color'),'conditions'=>array('id'=>$id))) ;
    return  $categ['Categorie']['color'];
	
}
public function ListeCategories()
{
	
$this->loadModel('Categorie');
     $liste = $this->Categorie->find('list',array('fields'=>array('name'))) ;
  return  $liste;
	
}


public function ListeCats()
{	$this->loadModel('Categorie');
  $categ = $this->Categorie->find('all',array('fields'=>array('Categorie.id,Categorie.name,Categorie.color'))) ; 
 return  $categ ;
 }
	 public function ListeCategoriesId()
{
	
$this->loadModel('Categorie');
     $liste = $this->Categorie->find('list',array('fields'=>array('id'),'order' => array('Categorie.id' => 'asc' ))) ;
  return  $liste;
	
}
} // end class

?>