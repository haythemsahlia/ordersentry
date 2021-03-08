<?php
App::uses('AppController', 'Controller');
class ProductsController extends AppController {
 // var $name = 'Product';
 // var $uses = array('ingredients');
  //	Public $name='Products';    
 // var $uses = array('Product');
  
   var $filters = array  
        (  
            'index' => array  
            (  
                'Product' => array  
                (  
                    'Product.Order'  , 
					'Product.item'  => array('type'=>'select','selector'=>'getItems') ,   
                    
                ) ,
						'Order'=> array('Order.date')
            )  
        );
  
 public function index($id =null) {
  $this->Product->validate = array();
if (isset ($id)  ) { $this->set('id',$id);	
$this->paginate = array('conditions' =>array('Product.order'=>$id),
		  'limit' => 150,
        'order' => array('Product.id' => 'desc' ) 
        );}else{
  	$this->paginate = array(
		  'limit' => 150,
        'order' => array('Product.id' => 'desc' ) 
        );}
		// limit nonnnnnnnnnnnnnn
		//$Products = $this->paginate('Product');
       // $this->set(compact('Products'));
$this->set('products', $this->paginate());
	/*
$this->loadModel('Categorie');
     $liste = $this->Categorie->find('list',array('fields'=>array('name'))) ;
$this->set('categories',$liste );//*/
    }
 
    public function add()
	{

if ($this->Session->read('Auth.User.role')=='Admin' ){
if ($this->request->is('post')) {
$this->loadModel('Product');
$this->loadModel('Order');
$conditions = array(
            'Product.order' => $this->data["Product"]["order"],
            'Product.item' => $this->data["Product"]["item"]
        );
if (!($this->Product->hasAny($conditions))) {				
$this->Product->create();
if ($this->Product->save($this->request->data)) {
	
  if (isset($this->request->data['Product']['order']))
    {
      $orderid=$this->request->data['Product']['order'];
      // check order status
      App::import('Controller', 'Orders');
        $orders = new OrdersController;
      $orstatus=$orders->statusOrder($orderid);
        if ($orstatus == 3)
          {
             /*$dataorder = array('Order.id' => $orderid, 'Order.status' => 0);
             $this->Order->save($dataorder); */
             /*$this->Order->id = $orderid;
             $this->Order->status = 0;
             $this->Order->save();*/
             $this->Order->id = $this->Order->field('id', array('id' => $this->data["Product"]["order"]));
            if ($this->Order->id) {
            $this->Order->saveField('status', 0);}
          }

      $this->redirect(array('action' => 'index',$orderid));  
    }
     else {

                 $this->redirect(array('action' => 'index' ));      
  } 

 
 } else {

		  			     $this->redirect(array('action' => 'index' ));			
	}	
   }
      else
      {
        $idprod=$this->Product->find('all', array(
    'fields' => array('id'),
    'conditions' => array(
        'item' => $this->data["Product"]["item"],
        'order' => $this->data["Product"]["order"]
            )
        ));
      // $this->Session->setFlash(__('<label style="color:#eb1934">This item exist already in this order, you can edit from <a href="/products/edit/'.$idprod[0]["Product"]["id"].'/'.$conditions["Product.order"].'" >here</a></label>'));
       $this->redirect(array('action' => 'index/'.$conditions["Product.order"]));
      }
       			 }
			}
else{   
    $this->Session->setFlash(__('<label style="color:red">not authorized !</label>'));
    $this->redirect(array('action' => 'index'));
	}       

}
    public function Hadd()
  {

if ($this->Session->read('Auth.User.role')=='Admin' ){
if ($this->request->is('post')) {
$this->loadModel('Product');
$this->loadModel('Order');
$conditions = array(
            'Product.order' => $this->data["Product"]["order"],
            'Product.item' => $this->data["Product"]["item"]
        );        
if (!($this->Product->hasAny($conditions))) {       

$this->Product->create();
if ($this->Product->save($this->request->data)) {

 /*  if (isset($this->request->data['Product']['order']))
    {
      $orderid=$this->request->data['Product']['order'];
      $this->Session->setFlash(__('Product added Successfully ! '));
      //$this->redirect(array('action' => 'index',$orderid));  
    }
     else {
        $this->Session->setFlash(__('Product added Successfully !'));
        //$this->redirect(array('action' => 'index' ));      
  } 
  */
//}
 if (isset($this->request->data['Product']['order']))
    {
      $orderid=$this->request->data['Product']['order'];
      // check order status
      App::import('Controller', 'Orders');
        $orders = new OrdersController;
      $orstatus=$orders->statusOrder($orderid);
        if ($orstatus == 3)
          {
             /*$dataorder = array('Order.id' => $orderid, 'Order.status' => 0);
             $this->Order->save($dataorder); */
             /*$this->Order->id = $orderid;
             $this->Order->status = 0;
             $this->Order->save();*/
             $this->Order->id = $this->Order->field('id', array('id' => $this->data["Product"]["order"]));
            if ($this->Order->id) {
            $this->Order->saveField('status', 0);}
          }
 
    }
 } else {

        // $this->redirect(array('action' => 'index' ));      
  }
  }else
      {
        $idprod=$this->Product->find('all', array(
    'fields' => array('id'),
    'conditions' => array(
        'item' => $this->data["Product"]["item"],
        'order' => $this->data["Product"]["order"]
            )
        ));
     //  $this->Session->setFlash(__('<label style="color:#eb1934">This item exist already in this order, you can edit from <a href="/products/edit/'.$idprod[0]["Product"]["id"].'/'.$conditions["Product.order"].'" >here</a></label>'));
    //   $this->redirect(array('action' => 'index/'.$conditions["Product.order"]));
      } 
             }
      }
else{   
    $this->Session->setFlash(__('<label style="color:red">not authorized !</label>'));
    //$this->redirect(array('action' => 'index'));
  }       
}
    public function edit0($order=null) {
    	        if ($this->Session->read('Auth.User.role')=='Admin' ){


		    if (!$order) {
		//		$this->Session->setFlash(__('Id error !'));
				$this->redirect(array('action'=>'index'));
			}
 if (isset($this->request->data['Product']['item']))    {$orderid=$this->request->data['Product']['item'];}
 if (isset($this->request->data['Product']['quantity'])){$qty=$this->request->data['Product']['quantity'];}
 if (isset($this->request->data['Product']['instructions'])){$inst=$this->request->data['Product']['instructions'];}
			
			$Product = $this->Product->find('first',array('conditions'=>array('Product.order'=>$order,'Product.item'=>$orderid))) ;
			
			$idsa = $this->Product->find('first',array('fields'=>array('id'),'conditions'=>array('Product.order'=>$order,'Product.item'=>$orderid))) ;
	$ids=$idsa['Product']['id'];

		
			 if (!$Product) {
			//	$this->Session->setFlash(__(' ID error'.$ids.'**'.$order));
				$this->redirect(array('action'=>'index'));
			}

			if ($this->request->is('post') || $this->request->is('put')) {
				$this->Product->id = $ids;
		//	echo('inst='.$this->request->data['Product']['instructions']);

if ($this->Product->updateAll(array('Product.id'=>$ids,'Product.quantity'=>$qty,'Product.instructions'=>"'$inst'"),array('Product.order'=>$order,'Product.item'=>$orderid))) {
       // $this->Session->setFlash(__('Product Modified Successfully ! '));
//$this->redirect(array('action' => 'index',$order));
}

 
else {
 $this->Session->setFlash(__('error'));
}

} 
}else{   
    $this->Session->setFlash(__('<label style="color:red">not authorized !</label>'));
    $this->redirect(array('action' => 'index'));
	}
    			if (!$this->request->data) {
				$this->request->data = $Product;
			}
} 
    public function edit($id = null,$order=null,$view=null) {
    	        if ($this->Session->read('Auth.User.role')=='Admin' ){

		    if (!$id) {
		//		$this->Session->setFlash(__('Id error !'));
				$this->redirect(array('action'=>'index'));
			}

			$Product = $this->Product->findById($id);
			if (!$Product) {
			//	$this->Session->setFlash(__(' ID error'.$id));
				$this->redirect(array('action'=>'index'));
			}

			if ($this->request->is('post') || $this->request->is('put')) {
				$this->Product->id = $id;

if ($this->Product->save($this->request->data)) {
	  //$this->Session->setFlash(__('Product Modified Successfully ! '));
	 if($view=='order'){
		$this->redirect(array('controller'=>'orders','action'=>'edit',$order));
		}
		else{$this->redirect(array('controller'=>'products','action' => 'index'/*,$order*/));}
}else {
 $this->Session->setFlash(__('error'));
}

}
}else{   
    $this->Session->setFlash(__('<label style="color:red">not authorized !</label>'));
    $this->redirect(array('action' => 'index'));
	}
    			if (!$this->request->data) {
				$this->request->data = $Product;
			}
}
    public function edit3($order=null,$item=null,$view=null) {
    	        if ($this->Session->read('Auth.User.role')=='Admin' ){
 
		    if (!$order) {
				$this->Session->setFlash(__('Id error !'));
				$this->redirect(array('action'=>'index'));
			}
 $Product = $this->Product->find('first',array('conditions'=>array('Product.order'=>$order,'Product.item'=>$item)));
 
 $query = $this->Product->find('first',array('fields'=>array('id'),'conditions'=>array('order'=>$order,'item'=>$item)));
   		
$id= $query['Product']['id'];

		if (!$Product) {
				$this->Session->setFlash(__(' ID error'.$id));
				$this->redirect(array('action'=>'index'));
			}

			if ($this->request->is('post') || $this->request->is('put')) {
				$this->Product->id = $id;

if ($this->Product->save($this->request->data)) {
//	  $this->Session->setFlash(__('Product Modified Successfully ! ' ));
	  $this->redirect(array('controller'=>'orders','action'=>'edit',$order));
		
		
}else {
 $this->Session->setFlash(__('error'));
}

}
}else{   
    $this->Session->setFlash(__('<label style="color:red">not authorized !</label>'));
    $this->redirect(array('action' => 'index'));
	}
    			if (!$this->request->data) {
				$this->request->data = $Product;
			}
}
Public function pack()
{
  $id = isset($this->request->query['id'])         ? $this->request->query['id']         : null;
  $order = isset($this->request->query['order'])       ? $this->request->query['order']       : null;
  App::import('Controller', 'Products');
  $products = new ProductsController;
  App::import('Controller', 'Orders');
  $orders = new OrdersController;
  $this->loadModel('Product');
  $this->loadModel('Order');
  $this->Product->id = $this->Product->field('id', array('id' => $id));
if ($this->Product->id) {
    if($this->Product->saveField('status', 2))
      { 
        // check if all the product of the order is packed to pack all the order

        $Lproducts=$products->ListeProductsOrder($order);
        $packtheorder=true;
        foreach($Lproducts as $IdItem)
        {
          if($products->isNotPacked($IdItem,$order))
            {$packtheorder=false;}
        }
        if ($packtheorder)
          {$orders->pack($order);}

        //$this->Session->setFlash(__('Product Packed Successfully ! '));
      }
}
}
Public function pack2($item,$order)
{
		

   App::import('Controller', 'Products');
  $products = new ProductsController;
   App::import('Controller', 'Orders');
  $orders = new OrdersController;
  $this->loadModel('Product');
  echo('order'+$order);
	echo('item'+$item);
  //$this->loadModel('Order');
 // $this->Product->id = $this->Product->field('id', array('id' => $id));
//if ($this->Product->id) {
	$t0 = array( );

$nb=substr_count($item, 't');
// splice in at position 3
// $original is now a b c x d e
 for($i=0;$i < $nb; $i++){
$pos= strpos($item, 't');
$ti=substr($item,0,$pos);
array_splice( $t0, $i, 0, $ti ); 
$item=substr($item,$pos+1);
}
	//$t=array(1,7);
	if($this->Product->updateAll( array('status' => 2),
	array('Product.item'=>$t0,'Product.order'=>$order)))
    //if($this->Product->saveField('status',2,array('conditions'=>array('Product.item'=>$item,'Product.order'=>$order))))
      {
echo('ok');		  
        // check if all the product of the order is packed to pack all the order

        $Lproducts=$products->ListeProductsOrder($order);
        $packtheorder=true;
        foreach($Lproducts as $IdItem)
        {
          if($products->isNotPacked($IdItem,$order))
            {$packtheorder=false;}
        }
        if ($packtheorder)
          {$orders->pack($order);}

        //$this->Session->setFlash(__('Product Packed Successfully ! '));
		?><script language="JavaScript">
	
	 location.href="http://oe1.enterpriseesolutions.com/";
	 </script>
<?php
      }
	  else{echo('no');}
//}
}
Public function unpack()
{
  $id = isset($this->request->query['id'])         ? $this->request->query['id']         : null;
  $order = isset($this->request->query['order'])       ? $this->request->query['order']       : null;
  App::import('Controller', 'Products');
  $products = new ProductsController;
  $this->loadModel('Product');
  App::import('Controller', 'Orders');
  $orders = new OrdersController;
  $this->loadModel('Order');
  $this->Product->id = $this->Product->field('id', array('id' => $id));
if ($this->Product->id) {
    // check if the order is packed (3) to change their status
    $this->Product->saveField('status', 0);
    $orderstat = $this->Order->find('first',array('fields'=>array('status'),'conditions'=>array('Order.id'=>$order))) ;
    if ($orderstat['Order']['status'] == 3)
    {
      $this->Order->id = $this->Order->field('id',array('id' => $order));
      if ($this->Order->id) {$this->Order->saveField('status', 0);}
    }
}
}
Public function isNotPacked($item=null,$order=null)
{
  /// check this
    $this->loadModel('Product');
    $categ = $this->Product->find('first',array('fields'=>array('status'),'conditions'=>array('Product.item'=>$item,'Product.order'=>$order))) ;
  
    if ($categ['Product']['status']==2)
     {return  false;}
    else
     {return true;}
}

public function delete($id = null,$order=null,$view=null) {

     $this->loadModel('Product');
    if ($this->Session->read('Auth.User.role')=='Admin' ){
		
		if (!$id) {
			$this->Session->setFlash('donner l id');
			$this->redirect(array('action'=>'index'));
		}
		
        $this->Product->id = $id;
        if (!$this->Product->exists()) {
            $this->Session->setFlash(' Id Invalide   ');
			$this->redirect(array('action'=>'index'));
        }
     else
     {
        if ($this->Product->delete()){
			//$this->Session->setFlash(__('Product  deleted!!'));

		 if($view=='order'){
		$this->redirect(array('controller'=>'orders','action'=>'edit',$order));
		}
		else{$this->redirect(array('controller'=>'products','action'=>'index'));}
		}

       else{ //$this->Session->setFlash(__('Product not deleted  '));
        $this->redirect(array('controller'=>'orders','action' => 'edit',$order));}
    }

		 }else {   
   		 	$this->Session->setFlash(__('<label style="color:red">not authorized !</label>'));
    	    $this->redirect(array('action' => 'index'));	} 
}

public function delete3($order=null,$item=null,$view=null) {

     $this->loadModel('Product');
    if ($this->Session->read('Auth.User.role')=='Admin' ){
		 $Product = $this->Product->find('first',array('conditions'=>array('Product.order'=>$order,'Product.item'=>$item)));
 
 $query = $this->Product->find('first',array('fields'=>array('id'),'conditions'=>array('order'=>$order,'item'=>$item)));
   		
$id= $query['Product']['id'];
		if (!$id) {
			$this->Session->setFlash('donner l id');
			$this->redirect(array('action'=>'index'));
		}
		
        $this->Product->id = $id;
        if (!$this->Product->exists()) {
            $this->Session->setFlash(' Id Invalide   ');
			$this->redirect(array('action'=>'index'));
        }
     else
     {
        if ($this->Product->delete()){
			//$this->Session->setFlash(__('Product  deleted!!'));

		
		$this->redirect(array('controller'=>'orders','action'=>'edit',$order));
		
		}

       else{ $this->Session->setFlash(__('Product not deleted  '));
        $this->redirect(array('controller'=>'orders','action' => 'edit',$order));}
    }

		 }else {   
   		 	$this->Session->setFlash(__('<label style="color:red">not authorized !</label>'));
    	    $this->redirect(array('action' => 'index'));	} 
}	
 
public function TotProducts(){
 $this->loadModel('Product');
 $total = $this->Product->find('count');
return $total;
}
public function excel()
{  $cmponents = $this->Product->find('all');
   $this->set(compact('Products'));
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
          header("Content-Disposition: attachment;Filename=Products.doc");
          echo $html;
            
        }
		
    }
	
    
public function ListeProducts()
{
	
$this->loadModel('Product');
$liste = $this->Product->find('list',array('fields'=>array('item','order'))) ;
  return  $liste;
	
}

   public function ProductID($iditem,$order)
{
	$this->loadModel('Product');
    $categ = $this->Product->find('first',array('fields'=>array('id'),'conditions'=>array('Product.item'=>$iditem,'Product.order'=>$order))) ;
    return  $categ['Product']['id'];
}


public function ListeOrdersPerDate($date)
{/// here
	$this->loadModel('Order');
   $liste = $this->Order->find('list',array( 'fields'=> array('id','time'),'conditions'=>array('AND' => array(array('date'=>$date),array('parent =' => NULL))),'order' => 'STR_TO_DATE(UCASE(time), "%l:%i %p")' )) ;
// $liste = $this->Order->find('list',array( 'fields'=> array('id','time'),'conditions'=>array('parent =' => NULL),'order' => 'STR_TO_DATE(UCASE(time), "%l:%i %p")' )) ;
  //$liste = $this->Order->find('list',array( 'fields'=> array('Order.id' ,'Order.time'),'conditions'=>array('AND' => array(array('Order.date'=>$date),array('Order.parent =' => NULL))),'order' => 'TIME_FORMAT( "Order.time", "%h:%i %p" ) ASC' )) ;
   
   //$liste = $this->Order->find('list',array( 'fields'=> array('id' ,'time'),'conditions'=>array('date'=>$date),'order' => 'Order.time ASC' )) ;
   
   /*$liste = $this->Order->find('list', array(
        'fields' => 'Order.id',
        'order' => array('Order.time' => 'asc'),
        'conditions' => array('Order.date' => $date)
    ));*/

   return  $liste;
}
//@Ran
public function ListeOrdersPerDateCustomer($date,$num)
{/// here
	$this->loadModel('Order');
     $liste = $this->Order->find('list',array( 'fields'=> array('id' ,'time'),'conditions'=>array('customerphone'=>$num,'AND' => array(array('date'=>$date),array('parent =' => NULL))),'order' => 'STR_TO_DATE(UCASE(time), "%l:%i %p")' )) ;
	//$liste = $this->Order->find('list',array( 'fields'=> array('id' ,'time'),'conditions'=>array('customerphone'=>$num,'parent =' => NULL),'order' => 'STR_TO_DATE(UCASE(time), "%l:%i %p")' )) ;
	
	
  //$liste = $this->Order->find('list',array( 'fields'=> array('Order.id' ,'Order.time'),'conditions'=>array('AND' => array(array('Order.date'=>$date),array('Order.parent =' => NULL))),'order' => 'TIME_FORMAT( "Order.time", "%h:%i %p" ) ASC' )) ;
   
   //$liste = $this->Order->find('list',array( 'fields'=> array('id' ,'time'),'conditions'=>array('date'=>$date),'order' => 'Order.time ASC' )) ;
   
   /*$liste = $this->Order->find('list', array(
        'fields' => 'Order.id',
        'order' => array('Order.time' => 'asc'),
        'conditions' => array('Order.date' => $date)
    ));*/

   return  $liste;
}
//@Ran
public function ListeOrdersPerDateCustomername($date,$name)
{/// here
	$this->loadModel('Order');
     $liste = $this->Order->find('list',array( 'fields'=> array('id' ,'time'),'conditions'=>array('customername'=>$name,'AND' => array(array('date'=>$date),array('parent =' => NULL))),'order' => 'STR_TO_DATE(UCASE(time), "%l:%i %p")' )) ;
	//$liste = $this->Order->find('list',array( 'fields'=> array('id' ,'time'),'conditions'=>array('customername'=>$name,'parent =' => NULL),'order' => 'STR_TO_DATE(UCASE(time), "%l:%i %p")' )) ;
  
   return  $liste;
}
public function ListeOrdersPerDateCustomernumname($date,$num,$name)
{/// here
	$this->loadModel('Order');
      $liste = $this->Order->find('list',array( 'fields'=> array('id' ,'time'),'conditions'=>array('customerphone'=>$num,'customername'=>$name,'AND' => array(array('date'=>$date),array('parent =' => NULL))),'order' => 'STR_TO_DATE(UCASE(time), "%l:%i %p")' )) ;
	//$liste = $this->Order->find('list',array( 'fields'=> array('id' ,'time'),'conditions'=>array('customerphone'=>$num,'customername'=>$name,'AND' =>array('parent =' => NULL)),'order' => 'STR_TO_DATE(UCASE(time), "%l:%i %p")' )) ;
  
   return  $liste;
}
public function ListeOrdersFuture($date)
{/// here
	$this->loadModel('Order');
   $liste = $this->Order->find('list',array( 'order' =>  array('Order.time asc') ,'fields'=> 'id' ,'conditions'=>array('date >'=>$date))) ;
	//$liste = $this->Order->find('list',array( 'order' =>  array('Order.time asc') ,'fields'=> 'id' )) ;
   return  $liste;
}


public function ListeProductsOrder($order)
{ 
  $this->loadModel('Product');
  $liste = $this->Product->find('list',array('fields'=>array( 'Product.item' ),'conditions'=>array('Product.order'=>$order))) ;
  return  $liste;
}
public function ListeProductsofOrder($order)
{ 
  $this->loadModel('Product');
  $liste = $this->Product->find('list',array('fields'=>array( 'Product.item','Product.order'),'conditions'=>array('Product.order'=>$order))) ;
  return  $liste;
}

public function ListeProductsPerDate($date)
{/// here
	$this->loadModel('Order');
     $ids = $this->Order->find('list',array( 'order' => array(array('Order.date' => 'asc'),array('Order.time' => 'asc')) ,'fields'=> 'id' ,'conditions'=>array('date'=>$date))) ;
	//$ids = $this->Order->find('list',array( 'order' => array(array('Order.date' => 'asc'),array('Order.time' => 'asc')) ,'fields'=> 'id' )) ;
    //$id= $categ['Order'] ['id'];
  $this->loadModel('Product');
     $liste = $this->Product->find('list',array('fields'=>array( 'Product.item','Product.order'),'conditions'=>array('Product.order'=>$ids))) ;
 /////echo 'Liste par date :'.json_encode($liste);
 return  $liste;
}
public function ListeProductsFuture($date)
{/// here
//ini_set('date.timezone', 'UTC');

	$this->loadModel('Order');
	////$now=date('H:i:s');
	/////echo ''.$now ;
     $ids = $this->Order->find('list',array( 'order' => array(array('Order.date' => 'asc'),array('Order.time' => 'asc')) ,'fields'=>array('id'),'conditions'=>array('date > '=>$date , 'status'=>'< 3'))) ;
    //$id= $categ['Order'] ['id'];
// $ids = explode(',', $listeid);
 //echo json_encode($ids);
$this->loadModel('Product');
     $liste = $this->Product->find('list',array('fields'=>array( 'Product.item','Product.order'),'conditions'=>array('Product.order'=>$ids))) ;
  return  $liste;
	
}


// send Product controller and fix showing only concerned items (qty item>0) + fix showing per date
public function QuantiteFuture( $Item,$order/*,$date*/)
{	//$date= date('Y-m-d', strtotime( '-1 days' )) ;

	$this->loadModel('Order');
     $ordr  = $this->Order->find('first',array('fields'=>array('id'),'conditions'=>array( 'id'=>$order/*,'date > '=>$date*/))) ;
		//$date= date('Y-m-d', strtotime( '-1 days' )) ;

if (isset( $ordr['Order']['id']))	{$ord=  $ordr['Order']['id'];}else{$ord=0;}  
	$this->loadModel('Product');
     $qte = $this->Product->find('first',array('fields'=>array( 'Product.quantity'),'conditions'=>array('Product.item'=>$Item,'Product.order'=>$ord))) ;
if (isset( $qte['Product']['quantity']))	{$quantity=  intval($qte['Product']['quantity']);}else{$quantity=0;}
 //echo  $quantity .'</br>';
	return $quantity ; 
}

public function QuantiteItem($numC,$Item,$order)
{
	$this->loadModel('Order');
     $ordr  = $this->Order->find('first',array('fields'=>array('id'),'conditions'=>array('customer'=>$numC,'id'=>$order))) ;
	
if (isset( $ordr['Order']['id']))	{$ord=  $ordr['Order']['id'];}else{$ord=0;}  
	$this->loadModel('Product');
     $qte = $this->Product->find('first',array('fields'=>array( 'Product.quantity'),'conditions'=>array('Product.item'=>$Item,'Product.order'=>$ord))) ;
if (isset( $qte['Product']['quantity']))	{$quantity=  intval($qte['Product']['quantity']);}else{$quantity=0;}
//echo json_encode ($qte ) .'</br>';
	return $quantity  ;
}

public function QualifiersItem($numC,$Item,$order)
{
	$this->loadModel('Order');
     $ordr  = $this->Order->find('first',array('fields'=>array('id'),'conditions'=>array('customer'=>$numC,'id'=>$order))) ;
	
if (isset( $ordr['Order']['id']))	{$ord=  $ordr['Order']['id'];}else{$ord=0;}  
	$this->loadModel('Product');
     $qul = $this->Product->find('first',array('fields'=>array( 'Product.instructions'),'conditions'=>array('Product.item'=>$Item,'Product.order'=>$ord))) ;
if (isset( $qul['Product']['instructions']))	{$instructions=  $qul['Product']['instructions'];}else{$instructions="";}
//echo json_encode ($qte ) .'</br>';
	return $instructions  ;
}


public function CountOrderProducts( $order){
 
 $this->loadModel('Product');
 $total = $this->Product->find('count',array('conditions'=>array('Product.order'=>$order )));
return $total;
}
 
public function TotIngredCustomer($customer ,$date){
	$this->loadModel('Order');

     $ids = $this->Order->find('list',array('fields'=>array('id'),'conditions'=>array('date '=>$date,'customer'=>$customer))) ;
 
	$total=0;
 $this->loadModel('Product');
 $total = $this->Product->find('count',array('conditions'=>array('Product.order'=>$ids/*,'Product.item'=>$item*/)));
return $total;
}

public function TotIngredCustomerFuture($customer ,$date ){
	$this->loadModel('Order');
      $ids = $this->Order->find('list',array('fields'=>array('id'),'conditions'=>array('date > '=>$date,'customer'=>$customer))) ;
 
	$total=0;
 $this->loadModel('Product');
 $total = $this->Product->find('count',array('conditions'=>array('Product.order'=>$ids/*,'Product.item'=>$item*/)));
return $total;
}




public function TotIngredCustomerOrder($customer ,$date,$order){
	$this->loadModel('Order');

     $ids = $this->Order->find('list',array('fields'=>array('id'),'conditions'=>array('Order.id'=>$order,'date '=>$date,'customer'=>$customer))) ;
 
	$total=0;
 $this->loadModel('Product');
 $total = $this->Product->find('count',array('conditions'=>array('Product.order'=>$ids/*,'Product.item'=>$item*/)));
return $total;
}

public function TotIngredCustomerFutureOrder($customer ,$date,$order ){
	$this->loadModel('Order');
      $ids = $this->Order->find('list',array('fields'=>array('id'),'conditions'=>array('Order.id'=>$order,'date > '=>$date,'customer'=>$customer))) ;
 
	$total=0;
 $this->loadModel('Product');
 $total = $this->Product->find('count',array('conditions'=>array('Product.order'=>$ids/*,'Product.item'=>$item*/)));
return $total;
}

   public function statusProduct($id)
{
  $this->loadModel('Product');
    $sprd = $this->Product->find('first',array('fields'=>array('status'),'conditions'=>array('id'=>$id))) ;
    return  $sprd['Product']['status'];
}
 public function statusProduct2($item,$order)
{
  $this->loadModel('Product');
    $sprd = $this->Product->find('first',array('fields'=>array('status'),'conditions'=>array('Product.order'=>$order,'item'=>$item))) ;
    return  $sprd['Product']['status'];
}
   public function orderofproduct($id)
{
  $this->loadModel('Product');
    $sprd = $this->Product->find('first',array('fields'=>array('order'),'conditions'=>array('id'=>$id))) ;
    return  $sprd['Product']['order'];
}

} // end class
?>