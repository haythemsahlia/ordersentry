<style>
	.pagebreak { page-break-before: always!important; } /* page-break-after works, as well */
.content{
    padding-top: 0px;
}
#tab{overflow: auto!important; max-height: 750px!important;height: 750px!important;min-height: 750px!important;}
table td{
	height:25px!important;
}
table tr{
	height:25px!important;
}
/*@page {
    size: 400px 750px!important;

    margin: 0;
}*/
@media print {
	.pagebreak { page-break-before: always!important;
height:100%!important;
	} 
	 table {page-break-inside: avoid!important;}
	header nav, footer {
display: none!important;
}
		   body{margin : inherit!important; padding : 0cm 0cm 0cm 0cm!important;}
	html { overflow: hidden!important; }
    .page {
		padding: 0px 0px!important;
        margin: 0!important;
		  size: 400px 750px!important;
        border: initial;
        border-radius: initial;
        width: initial;
        min-height: initial;
        box-shadow: initial;
        background: initial;
    }
	#tab{overflow: hidden!important; max-height: 750px!important; min-height: 750px!important;}
	#tabtd{
		height:25px!important;
		margin-top:0px!important;
		margin-bottom:0px!important;
		padding-top:0px!important;
		padding-bottom:0px!important;
	}
	#tabtr{
		height:25px!important;
	}
	.wrapword{
white-space: -moz-pre-wrap !important;  /* Mozilla, since 1999 */
white-space: -webkit-pre-wrap; /*Chrome & Safari */ 
white-space: -pre-wrap;      /* Opera 4-6 */
white-space: -o-pre-wrap;    /* Opera 7 */
white-space: pre-wrap;       /* css-3 */
word-wrap: break-word;       /* Internet Explorer 5.5+ */
word-break: break-all;
white-space: normal;
}
}
.content {padding: 0px 0px!important;}
@media screen {
	.pagebreak { page-break-before: always!important; } 
    .page {
        margin: 0;
		/*  size: 400px 400px !important;*/
        border: initial;
        border-radius: initial;
        width: initial;
        min-height: initial;
        box-shadow: initial;
        background: initial;
    }
	#tabtd{
		height:25px!important;
		margin-top:0px!important;
		margin-bottom:0px!important;
		padding-top:0px!important;
		padding-bottom:0px!important;
	}
	.wrapword{
white-space: -moz-pre-wrap !important;  /* Mozilla, since 1999 */
white-space: -webkit-pre-wrap; /*Chrome & Safari */ 
white-space: -pre-wrap;      /* Opera 4-6 */
white-space: -o-pre-wrap;    /* Opera 7 */
white-space: pre-wrap;       /* css-3 */
word-wrap: break-word;       /* Internet Explorer 5.5+ */
word-break: break-all;
white-space: normal;
}
}
.navbar{
    margin-bottom: 8px!important;
}
.navbar-static-top{
    margin-bottom: 8px!important;
}
</style>
<html moznomarginboxes mozdisallowselectionprint>
<body onload="javascript:window.print()" >
<!-- width:400px!important;height:400px!important;-->
<div class="page" style="color:blue!important;overflow:hidden!important;" >
<?php 


 App::import('Controller', 'Orders');
 $orders = new OrdersController;
 App::import('Controller', 'Customers');
 $customers = new CustomersController; 
 App::import('Controller', 'Products');
 $products = new ProductsController; 
 App::import('Controller', 'Items');
 $items = new ItemsController; 
 
$nb=1;
//if (isset($this->data['Order']['idtoprint'])){$ids=$this->data['Order']['idtoprint'];}
 if (isset ($idtoprint)) {$ids=$idtoprint; } 
 $tab = array();

 for($i=0;$i < $nb; $i++){
$pos= strpos($ids, '/');
$tab[$i]=$ids;
$ids="";
}
//$tab[1]=$ids;
 for($j=0;$j < $nb; $j++){
	 $numC=$orders->customerorder2($tab[$j]);
	 $orders->updateprinted($tab[$j]);
	 $nomC=$customers->CustomerById($numC);
	 $numeroC=$customers->CustomerTelById($numC); 
	 $date=$orders->customerorderdate($tab[$j]);
     $status=$orders->statusOrder($tab[$j]);
     $instructionsorder=$orders->instructionssOrder($tab[$j]);
     if ($status != 2)
     {
	   $time=$orders->customerordertime($tab[$j]);
     }
     else
     {
        $time = $orders->checkedordertime($tab[$j]);
     }
	/*  echo'<h4>'.$numC.'</h4>'; */
echo'<div style="" class="pagebreak"><table id="tab" style="color:blue!important;   page-break-after: avoid!important;background-color:white; border-bottom: 1px solid blue;border-top: 1px solid blue;width:400px;max-width:400px!important;height:750px;max-height:750px!important;min-height:750px!important;">';
echo'<tr style="color:blue!important;border-bottom: 3px solid blue;"><td  colspan="2" height="25" style="width:62%!important;padding-left:5px!important;color:blue!important;margin-bottom:0px!important;margin-top:0px!important;padding-bottom:0px!important;padding-top:2px!important;"  ><b>Alima\'s Roti & Pastry</b></td><td style="padding-right:5px;padding-top:0px!important;"><b> (905)791.7684</b></td></tr>';

echo'<tr style="color:blue!important;width:90%!important;"><td colspan="2" id="tabtd" style="color:blue!important;padding-top:0px!important;" height="25">';

 
 // echo'</td><td style="color:blue!important;padding-top:0px!important;" id="tabtd" height="25">';
  //echo'<h4 style="color:blue!important;padding-top:0px;" ><b style="color:blue!important;margin : 3px 0px 3px 10px!important;font-size: 22px;">'.substr($time,0,5).'</b></h4></td>'; 


 
 if ($orders->issuborder($tab[$j]))
{
		$newid=$orders->newid($tab[$j],$date);
		$orders->updateprinted($newid);
    $parentorder = $orders->issuborder($tab[$j]);
    $sordersp = $orders->SubOrders($parentorder);
	 $secondname=$orders->customerorderSecondname($tab[$j],$date);
	 	 if ($secondname==""){$secondname=$nomC;}
    sort($sordersp);
    $key = array_search($tab[$j], $sordersp)+1;
	echo'<h4 style="color:blue!important;margin : 3px 0px 3px 10px!important;padding-top:0px;"><b style="color:blue!important;padding-top:0px!important;font-size: 18px;">'.$secondname.'</b></h4>'; 

	echo'</td><td style="color:blue!important;margin-bottom:0px!important;margin-top:0px!important;padding-bottom:0px!important;padding-top:0px!important;" ><h4 style="color:blue!important;padding-top:0px;float:right!important;margin : 3px 10px 3px 0px!important;"><b style="color:blue!important;font-size: 14px;">'.'#'.$parentorder.' - '.$key.'</b></h4></td>';
}
else{
	echo'<h4 style="color:blue!important;margin : 3px 0px 3px 10px!important;padding-top:0px;"><b style="color:blue!important;padding-top:0px!important;font-size: 18px;">'.$nomC.'</b></h4>'; 

	echo'</td><td style="color:blue!important;margin-bottom:0px!important;margin-top:0px!important;padding-bottom:0px!important;padding-top:0px!important;"><h4 style="color:blue!important;padding-top:0px;float:right!important;margin : 3px 10px 3px 0px!important;"><b style="color:blue!important;font-size: 14px;">'.'#'.$tab[$j].'</b></h4></td>';
	//echo'</td><td style="color:blue!important;margin-bottom:0px!important;margin-top:0px!important;padding-bottom:0px!important;padding-top:0px!important;"><h4 style="color:blue!important;padding-top:0px;float:right!important;margin : 3px 10px 3px 0px!important;"><b style="color:blue!important;font-size: 14px;">'.substr($time,0,5).'#'.$tab[$j].'</b></h4></td>';
	}
 
echo' </tr><tr style="color:blue!important;width:90%!important;height:25px;border-bottom: 2px solid blue;"><td style="color:blue!important;margin-bottom:0px!important;margin-top:0px!important;padding-bottom:0px!important;padding-top:0px!important;width:55%!important;" height="30" >';
 
 
 
 echo'<h4 style="color:blue!important;margin-left: 5px;"><b style="color:blue!important;font-size: 14px;">'.$numeroC.'</b></h4>';
   
   echo'<td style="color:blue!important;margin-bottom:0px!important;margin-top:0px!important;padding-bottom:0px!important;padding-top:0px!important;width:45%!important;" height="30" >';
   echo'<h4 style="color:blue!important;margin-left: 5px;"><b style="color:blue!important;font-size: 14px;">'.$time.'</b></h4>';
 
   echo'</td><td style="color:blue!important;margin-bottom:0px!important;margin-top:0px!important;padding-bottom:0px!important;padding-top:0px!important;min-width:30%!important;" height="30" >'; 

echo'<h4><p align="right"><b  style="margin-right:10px;color:blue!important;font-size: 14px;margin-left: 5px!important;">'.$date.'</b></p></h4>'; 
echo'</td></tr>';
$prod=$products->ListeProductsOrder($tab[$j]);?>
<?php $prodnb=$products->CountOrderProducts($tab[$j]);if($prodnb>0){ $width=(6/$prodnb);}else{$width=6;}?>
	<?php $count=0; //echo '<tr>';?>
  		<?php foreach($prod as $pr=>$item): ?>				
	 		<?php $count ++;?>
<?php $itemname=$items->ItemById($item) ; ?>
<?php $itemdesc=$items->DescitemByName($itemname) ; ?>
<?php $qty=$products->QuantiteItem($numC,$item,$tab[$j]) ; ?>
<?php $qul=$products->QualifiersItem($numC,$item,$tab[$j]) ; ?>

<?php if($qul != "   "){
 echo '<tr style="color:blue!important;"><td max-height="'.$width.'cm" colspan="3" style="color:blue!important;margin-bottom:0px!important;margin-top:0px!important;padding-bottom:0px!important;padding-top:0px!important;width:90%!important;font-size: 18px;font-family: serif;max-height:"'.$width.'cm!important;min-height:'.$width.'cm!important;"><p style="    margin-bottom: 0px!important;color:blue!important;font-weight:bold;margin-left: 10px;">'.$qty.'  '.$itemdesc.' - '.$qul.'</p></td> </tr>'; }
else {
 echo '<tr style="color:blue!important;"><td max-height="'.$width.'cm" colspan="3" style="color:blue!important;margin-bottom:0px!important;margin-top:0px!important;padding-bottom:0px!important;padding-top:0px!important;width:90%!important;font-size: 18px;font-family: serif;max-height:'.$width.'cm!important;min-height:'.$width.'cm!important;"><p style="    margin-bottom: 0px!important;color:blue!important;font-weight:bold;margin-left: 10px;">'.$qty.'  '.$itemdesc.'</p></td> </tr>';}
?>
		<?php endforeach; ?>
 <?php for($k=$prodnb+1;$k < 9; $k++){    ?>
 
 <?php echo '<tr style="color:blue!important;"><td height="25"></td> <td></td><td height="25">&nbsp;</td> </tr>';?>

<?php }
// ORDER #ID
/* if ($orders->issuborder($tab[$j]))
{
    $parentorder = $orders->issuborder($tab[$j]);
    $sordersp = $orders->SubOrders($parentorder);
    sort($sordersp);
    $key = array_search($tab[$j], $sordersp)+1;
    echo'<tr><td height="30" style="color:blue!important;   border-top: 1px solid blue; " colspan="2" ><h4 style="color:blue!important;float:right;margin-right: 25px;">'.$parentorder.'-'.$key.' </h4></td></tr>';
}
else
{
echo'<tr><td height="30" style="color:blue!important;   border-top: 1px solid blue; " colspan="2" ><h4 style="color:blue!important;float:right;margin-right: 25px;">'.$tab[$j].' </h4></td></tr>';
} */
   if ($instructionsorder != ""){
echo'<tr style="color:blue!important;border-top: 1px solid blue;"><td height="25" style="padding-left:10px!important;color:blue!important;margin-bottom:0px!important;margin-top:0px!important;padding-bottom:0px!important;padding-top:0px!important;" colspan="3" > '.$instructionsorder.'</td></tr>';
   }

echo'</table></div>';

//echo'</br>';
} 

?>

</div>
</body>

</html>
<script>
(function() {

    var beforePrint = function() {
        console.log('Functionality to run before printing.');
    };

    var afterPrint = function() {
        console.log('Functionality to run after printing');
		window.location="http://ordersentry.enterpriseesolutions.com/orders";
    };

    if (window.matchMedia) {
        var mediaQueryList = window.matchMedia('print');
        mediaQueryList.addListener(function(mql) {
            if (mql.matches) {
                beforePrint();
            } else {
                afterPrint();
            }
        });
    }

    window.onbeforeprint = beforePrint;
    window.onafterprint = afterPrint;

}());

</script>