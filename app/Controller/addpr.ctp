  <link href="http://code.jquery.com/ui/1.10.2/themes/smoothness/jquery-ui.css" rel="Stylesheet"></link>
<script src='https://cdn.rawgit.com/pguso/jquery-plugin-circliful/master/js/jquery.circliful.min.js'></script>
<script src="http://code.jquery.com/ui/1.10.2/jquery-ui.js" ></script><style>/*
#idtab
{
    display:table;
}
tr, #addprtobatchform1, #addprtobatchform2
{
    display:table-row;
}
td
{
    display:table-cell;
}
.select{
	    background-color: #00BFFF;
		    color: #fff;
			    border-radius: 20px;
    font-size: 11px;
	border: none;
    font-size: 12px;
    height: 29px;
    padding: 5px;
    width: auto;
    margin: 8px;
	clear: both;
    font-size: 120%;
    vertical-align: text-bottom;
}*/
</style>
 <script type="text/javascript" >var cna=0;

 var arraynames=new Array();
 var arrayaddress=new Array();
 </script>
 <?php
   	 App::import('Controller', 'Categories');
 $categs = new CategoriesController;
 $cats = $categs->ListeCategories();
 
  App::import('Controller', 'Profiles');
 $profilesC = new ProfilesController;
 $names = $profilesC->ProfilesPerCountry($this->Session->read('Auth.User.country'));
 $address = $profilesC->AddressPerCountry($this->Session->read('Auth.User.country'));
 $names = array_values($names);
     $address = array_values($address);
	   $datan = array();
	 
	 for ($j=0; $j < sizeof($names) ; $j++) { 
	?>
	  <script type="text/javascript">  // alert('cn='+cn);
	  cna=cna+1;</script>
	  <?php 
	     $datan[$j]=array("value"=>$names[$j], "label"=>$address[$j]);
	?>
	  <script type="text/javascript">
     arraynames[cna]= ""+<?php echo json_encode($names[$j]); ?>;
     arrayaddress[cna]= ""+<?php echo json_encode($address[$j]); ?>;
	 console.log(arraynames[cna]);
	 console.log(arrayaddress[cna]);
	 </script>
	  <?php
    }
    $datan =array_values($datan);
 $listep = $profilesC->ListeProfiles();
  $noms=  array_values($listep);

?>
 <?php if (isset ($id)) {$id=$id; } else {echo 'not set';$id=""; }?>
<?php
 $valinit=$profilesC->TotProfilesPerBatch($id);
 echo $this->Form->input('nbprinit',array('type'=>'hidden','id'=>'nbprinit','value'=>$valinit)); ?>

  <script>
   $( function() {
 
 $("input[id^='nompi']").autocomplete({minLength: 0,
      source:  <?php echo json_encode($noms); ?>
    }); 
								  
   } );
 
  </script>

        <div style="background-color:white;padding-top:20px;" >
 <div class="row"><div class="col-sm-10"><center><h1  style=";color:#1ABB9C; ;">Add a Batch </h1></center></div><div class="col-sm-1"><input value ="<?php echo $valinit; ?>" type="text" id="compteur" style="font-size: 36px!important;width:80px;height:80px;text-align: center" /></div><div class="col-sm-1">
 <?php echo $this->Form->postLink($this->Html->image('close6.png', array('style'=>'width:','alt' => __('close'))), //le image
  array('action' => 'close', $id), //le url
  array('escape' => false));?>
 </div></div>       
 <center><h5 id="addproftitle" style="color:#0B8EB6; ;"> </h5></center>       

</br>
<style>
DIV.table 
{
    display:table;
}
FORM.tr, DIV.tr
{
    display:table-row;
}
SPAN.td
{
    display:table-cell;
	vertical-align: middle;
	height: 50px!important;
    overflow: hidden;
    text-overflow: ellipsis;
    white-space: nowrap;
    word-wrap: break-word;
	border: 1px solid #ddd;
	min-height: 35px!important;
	padding-top: 8px!important;
}
.button{    border-radius: 15px!important;}
button{    border-radius: 15px!important;}
</style>

<div class="table" style="padding:15px 15px 15px 15px;">
<div class="tr" style="background-color:#3f5367!important;color:white!important;text-align:center;font-weight:bold;">
  <span class="td"><label>Num</label></span>
  <span class="td"><label>Name</label></span>
  <span class="td"><label>Category</label></span>
  <span class="td"><label>Address</label></span>

  <span class="td"><label>Contact info</label></span>
  <span class="td"><label>Tagline</label></span>
  <span class="td"><label>Add</label></span>
 
 <input type="hidden" id="nbpr" value="1"/>
 </div>

<?php echo $this->Form->create('Profile',array(/*'action'=>'add/b',*/'id'=>'addprtobatchformi','class'=>'tr '/*,'novalidate'=>'novalidate'*/)); ?>

<span class="td"><center><b>Pr1</b></center></span>
<span class="td">
<?php echo $this->Form->input('batch' ,array('type'=>'hidden','id'=>'idbatch','value'=>''.$id,'label'=>'','style'=>' ;margin-left:-2px'/* , 'required'=>'true' */));?>
<?php echo $this->Form->input('name' ,array('id'=>'nompi1','onchange'=>'listduplicate(this.value);','label'=>'','style'=>' margin-left: 2px!important;margin-right: 3px!important;', 'pattern'=>'[a-zA-Z0-9\s]+' ));?></span>
<span class="td"><?php echo $this->Form->select('category' ,$cats,array('id'=>'cati1','label'=>'','class'=>'select','style'=>' margin-bottom: 0px;;text-align:left;'   ));;?></span>
<span class="td">
<center>
<?php echo $this->Form->input('address' ,array('id'=>'addressi1','placeholder'=>'Address line 1','label'=>'','style'=>'width:90%;margin-bottom: 0px; ;text-align:left;'  ));;?>
<?php echo $this->Form->input('address2' ,array('id'=>'address2i1','placeholder'=>'Address line 2','label'=>'','style'=>'width:90%; margin-bottom: 0px;text-align:left;'  ));;?>
<div class="row">
<center>
<div class="col-sm-5">
<?php echo $this->Form->input('city' ,array('id'=>'cityi1','placeholder'=>'City','label'=>'','style'=>' margin-left: 13%;width: 110%;margin-bottom: 0px;text-align:left;'   ));;?>
</div>
<div class="col-sm-5">
<?php echo $this->Form->input('region' ,array('id'=>'regioni1','placeholder'=>'Region','label'=>'','style'=>'margin-left: 13%;width: 120%;margin-bottom:0px;text-align:left;'   ));;?>

</div>
</center>
</div>
<div class="row">
<center>
<div class="col-sm-5">
<?php echo $this->Form->input('country' ,array('id'=>'countryi1','placeholder'=>'Country','label'=>'','style'=>'margin-left: 13%;width: 110%;margin-bottom: 5px;text-align:left;' ,'type'=>'text','value'=>$this->Session->read('Auth.User.country')  ));;?>
</div>
<div class="col-sm-5">
<?php echo $this->Form->input('pcode' ,array('id'=>'code','placeholder'=>'Zip Code','label'=>'','style'=>' margin-left: 13%;width: 120%;margin-bottom: 5px;text-align:left;'   ));;?>
</div>
</center>
</div>
</center>
</span> 

<span class="td">
<center>
<?php echo $this->Form->input('phone' ,array('id'=>'phonei1','placeholder'=>'Phone','class'=>'elem','label'=>'','style'=>'height:34px; width:90%;text-align:left;','type'=>'text' /* , 'required'=>'true'*/));;?>
<?php echo $this->Form->input('email' ,array('id'=>'email','placeholder'=>'Email','label'=>'','style'=>' width:90%;  text-align:left; '  ,'type' => 'email'  ));;?>
<?php echo $this->Form->input('website' ,array('id'=>'website','placeholder'=>'Website','label'=>'','style'=>'  width:90%;  text-align:left;'   ));;?>
</center>
</span>
<span class="td"><?php echo $this->Form->input('tagline' ,array('id'=>'tag','label'=>'','style'=>'height: 100px;width: 90%!important;margin: 8px!important;text-align:left;height:67px;' ,'type' => 'textarea' ));;?></span>
<span class="td">
 <?php  		echo $this->Form->button('', array('type'=>'button', 'onclick'=>'fctsubmit();','id'=>'subi', 'style'=>'width: 62px;height:62px;margin-left: 0px;background:url(http://sales.enterpriseesolutions.com/app/webroot/img/addd.png)','title' => 'Clic here to add    ') ); ?>
	<button onclick="fctsubmitedit(1,document.getElementById('nompi1').value)" id="subediti" style="display:none;width: 62px;height:62px;margin-left: 0px;background:url(http://directories.enterpriseesolutions.com/app/webroot/img/edit.png"> </button>
 </span>
<?php 
 $by = $this->Session->read('Auth.User.username') ;
echo  $this->Form->hidden('addedby' ,array('value'=>$by));
echo  $this->Form->hidden('status' ,array('value'=>0));?>

   <?php echo $this->Form->end(); ?>

 </div>
       </div>
	   <div class="modal" id="myModal">
	<div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
		<center><h4 class="modal-title" id="myModalLabel" style="color:#0B8EB6; ;">Warning </h4></center>        </div><div class="container"></div>
        <div style="margin-left:10px;" class="modal-body form">

<p style="color:red;display:none;"id="pnotif0"><b>This is a possible Duplicate - Do you want to continue adding?</b></p></td></tr>
<p style="display:none;"id="pnotif"></p>
         </div>
        <div class="modal-footer">
          <a href="#" data-dismiss="modal" class="btn">Close</a>
         </div>
      </div>
    </div>
</div> 
		 <script>
		 

	/*  $(document).ready(function() {
			  nb=document.getElementById('nbpr').value;

	  });*/
	 /* function fctsubmit(){
	  //alert('here');
    // e.preventDefault();
	//alert('nb'+nb);
	nb=document.getElementById('nbpr').value;
	nbinit=document.getElementById('nbprinit').value;
			document.getElementById('compteur').value=parseInt(nb)+parseInt(nbinit);
			currentnb=parseInt(nb)+parseInt(nbinit);
			if (currentnb==100){alert('Your batch contain 100 profiles!');}
			document.getElementById('addprtobatchformi').id = 'addprtobatchform'+nb;

if(nb==1){document.getElementById('subediti').id = 'subediti'+nb;}
			if (nb==1 ){
				document.getElementById('nompi').id = 'nompi'+nb;
				document.getElementById('addressi').id = 'addressi'+nb;
				document.getElementById('address2i').id = 'address2i'+nb;
				document.getElementById('regioni').id = 'regioni'+nb;
				document.getElementById('cityi').id = 'cityi'+nb;
				document.getElementById('countryi').id = 'countryi'+nb;
				document.getElementById('phonei').id = 'phonei'+nb;
				}
			
			document.getElementById('subi').id = 'sub'+nb;
			document.getElementById('sub'+nb).style.display = 'none';
			anb=nb-1;
			//alert('anb'+anb);
			document.getElementById('subediti'+nb).style.display = 'block';
		//	document.getElementById('subediti'+anb).style.display = 'none';
			$("#nompi"+nb).prop("readonly", true);
			document.getElementById("nompi"+nb).style.backgroundColor ="rgba(128, 128, 128, 0.24)!important";
   $.ajax({
  url: '/profiles/add/b',
  type: 'POST',
  data: $("#addprtobatchform"+nb+"").serialize(),
            beforeSend: function(){
			
					stoppropagation=true;
					$('#addproftitle').html('<h5><center>Adding ...</center></h5>');
					stoppropagation=true;
					//alert("here1");
             	
                 },
            complete:function()
            {
				stoppropagation=true;
				
				arraynames.push(document.getElementById('nompi'+nb).value);
				arrayaddress.push('new address');
              //location.reload(true);
   setTimeout(
  function() 
  {
	// $('#addproftitle').html('<h3><center>Added</center></h3>');
	 $('#addproftitle').html('<h3><center></center></h3>');
    //do something special
	stoppropagation=false;
	
	  
  }, 1000);
		     },
			success :function()
            {stoppropagation=false;
			console.log('before add adr');
			arraynames.push(document.getElementById('nompi'+nb).value);
				arrayaddress.push('new address');
          console.log(document.getElementById('nompi'+nb).value);
		//	alert('success');
			var codephp0=<?php echo json_encode($this->Form->create('Profile',array('id'=>'addprtobatchformi','class'=>'tr')).$this->Form->input('batch' ,array('type'=>'hidden','id'=>'batch2','value'=>''.$id,'label'=>'','style'=>' ;margin-left:-2px')));?>;
			var codephp01=<?php echo json_encode($this->Form->create('Profile',array('id'=>'addprtobatchformi','class'=>'tr zebra')).$this->Form->input('batch' ,array('type'=>'hidden','id'=>'batch2','value'=>''.$id,'label'=>'','style'=>' ;margin-left:-2px')));?>;

			var codephp1=<?php echo json_encode($this->Form->input('name' ,array('id'=>'nompi','onchange'=>'listduplicate(this.value);','label'=>'','style'=>' ;margin-left:-2px' , 'required'=>'false', 'pattern'=>'[a-zA-Z0-9\s]+' )));?>;
			var codephp2=<?php echo json_encode($this->Form->select('category' ,$cats,array('id'=>'cati',"class"=>'select','label'=>'','style'=>' margin-bottom: 0px;;text-align:left;'   )));;?>;
			var codephp3=<?php echo json_encode($this->Form->input('address' ,array('id'=>'addressi','placeholder'=>'Address line 1','label'=>'','style'=>'margin-bottom: 0px; ;text-align:left;'  )). $this->Form->input('address2' ,array('id'=>'address22','placeholder'=>'Address line 2','label'=>'','style'=>' margin-bottom: 0px;text-align:left;'  )));;?>;
			var codephp4=<?php echo json_encode($this->Form->input('city' ,array('id'=>'cityi','placeholder'=>'City','label'=>'','style'=>' margin-left: 20%;margin-bottom: 0px;text-align:left;'   )));;?>;
			var codephp5=<?php echo json_encode($this->Form->input('region' ,array('id'=>'regioni','placeholder'=>'Region','label'=>'','style'=>' margin-left: 20%;margin-bottom:0px;text-align:left;'   )));;?>;
			var codephp6=<?php echo json_encode($this->Form->input('country' ,array('id'=>'countryi','placeholder'=>'Country','label'=>'','style'=>'margin-left: 20%;margin-bottom: 5px;text-align:left;' ,'type'=>'text' ,'value'=>$this->Session->read('Auth.User.country') )));;?>;
			var codephp7=<?php echo json_encode($this->Form->input('pcode' ,array('id'=>'code2','placeholder'=>'Zip Code','label'=>'','style'=>' margin-left: 20%;margin-bottom: 5px;text-align:left;'   )));;?>;
			var codephp8=<?php echo json_encode($this->Form->input('phone' ,array('id'=>'phonei','placeholder'=>'Phone','class'=>'elem','label'=>'','style'=>' ;text-align:left;','type'=>'text'  )). $this->Form->input('email' ,array('id'=>'email2','placeholder'=>'Email','label'=>'','style'=>'     font-size: 140%;text-align:left; '  ,'type' => 'email'  )). $this->Form->input('website' ,array('id'=>'website2','placeholder'=>'Website','label'=>'','style'=>'text-align:left;'   )));;?>;
			var codephp9=<?php echo json_encode($this->Form->input('tagline' ,array('id'=>'tag2','label'=>'','style'=>' ;text-align:left;' ,'type' => 'textarea' )));;?>;
			var codephp10=<?php echo json_encode($this->Form->button('', array('type'=>'button','class' => '','id'=>'subi','onclick'=>'fctsubmit();',  'style'=>'width: 62px;height:62px;margin-left: 0px;background:url(http://sales.enterpriseesolutions.com/app/webroot/img/addd.png)','title' => 'Clic here to add    ') ).$this->Form->hidden('addedby' ,array('value'=>''. $this->Session->read('Auth.User.username'))).$this->Form->hidden('status' ,array('value'=>0,'id'=>'status2')));?>;
			var codephp11=<?php echo json_encode($this->Form->end() );?>;
 //alert('before append');
//alert('nb'+nb);
			//$(".idtab").last().after('<tr id="pr2" style="border-bottom:1px solid black!important;">'+codephp0+'<span class="td"><center><b>Pr2</b></center></span><span class="td">'+codephp1+'</span><span class="td">'+codephp2+'</span><span class="td"><center>'+codephp3+'<div class="row"><center><div class="col-sm-5">'+codephp4+'</div><div class="col-sm-5"></div></center></div><div class="row"><center><div class="col-sm-5">'+codephp6+'</div><div class="col-sm-5">'+codephp7+'</div></center></div></span><span class="td"><center>'+codephp8+'</center></span><span class="td">'+codephp9+'</span><span class="td">'+codephp10+'</span></tr>');
		//	$( ".addprtobatchform1" ).append( "</br><div class='row tr' style='display:inline-block'><p>Test</p></div>" );
			count=parseInt(document.getElementById('nbpr').value)+1;
			idbatch=document.getElementById("nbpr").value;
			//alert("nompi"+count);
		//	name=document.getElementById("nompi"+count).value;
		
																																																																																																																																																		//onclick='ajout("+jour+","+idl+")' 
			if((nb%2) == 0){
			$( "#addprtobatchform"+nb+"" ).after( ''+codephp0+'<span class="td"><center><b>Pr'+count+'</b></center></span><span class="td">'+codephp1+'</span><span class="td">'+codephp2+'</span><span class="td"><center>'+codephp3+'<div class="row"><center><div class="col-sm-5">'+codephp4+'</div><div class="col-sm-5">'+codephp5+'</div></center></div><div class="row"><center><div class="col-sm-5">'+codephp6+'</div><div class="col-sm-5">'+codephp7+'</div></center></div></center></span> <span class="td"><center>'+codephp8+'</center></span><span class="td">'+codephp9+'</span><span class="td"> '+codephp10+'<button id="subediti'+count+'" style="display:none;width: 62px;height:62px;margin-left: 0px;background:url(http://directories.enterpriseesolutions.com/app/webroot/img/edit.png"> </button> </span>'+codephp11+'' );
				
				document.getElementById('nompi').id = 'nompi'+count; 
				document.getElementById('addressi').id = 'addressi'+count; 
				document.getElementById('address2i').id = 'address2i'+count; 
				document.getElementById('regioni').id = 'regioni'+count; 
				document.getElementById('cityi').id = 'cityi'+count; 
				document.getElementById('countryi').id = 'countryi'+count; 
				document.getElementById('phonei').id = 'phonei'+count; 
				ncount="nompi"+count;
				//alert('ncount= '+ncount);
					names=document.getElementById(ncount).value;
				
				
					
					
					//alert('names'+names);
			$("#subediti"+count+"").attr('onClick', '$("#addprtobatchform"+count+"").attr("onsubmit","return false;");fctsubmitedit('+count+','+names+');');
			}
			else{
			$( "#addprtobatchform"+nb+"" ).after( ''+codephp01+'<span class="td"><center><b>Pr'+count+'</b></center></span><span class="td">'+codephp1+'</span><span class="td">'+codephp2+'</span><span class="td"><center>'+codephp3+'<div class="row"><center><div class="col-sm-5">'+codephp4+'</div><div class="col-sm-5">'+codephp5+'</div></center></div><div class="row"><center><div class="col-sm-5">'+codephp6+'</div><div class="col-sm-5">'+codephp7+'</div></center></div></center></span> <span class="td"><center>'+codephp8+'</center></span><span class="td">'+codephp9+'</span><span class="td"> '+codephp10+'<button  id="subediti'+count+'" style="display:none;width: 62px;height:62px;margin-left: 0px;background:url(http://directories.enterpriseesolutions.com/app/webroot/img/edit.png"> </button> </span>'+codephp11+'' );
			document.getElementById('nompi').id = 'nompi'+count; 
				document.getElementById('addressi').id = 'addressi'+count; 
				document.getElementById('address2i').id = 'address2i'+count; 
				document.getElementById('regioni').id = 'regioni'+count; 
				document.getElementById('cityi').id = 'cityi'+count; 
				document.getElementById('countryi').id = 'countryi'+count; 			
				document.getElementById('phonei').id = 'phonei'+count; 			
		  ncount="nompi"+count;
		 
			names=document.getElementById(ncount).value;

			$("#subediti"+count+"").attr('onClick', '$("#addprtobatchform"+count+"").attr("onsubmit","return false;");fctsubmitedit('+count+','+'"'+names+'"'+');');
			}
	
			document.getElementById('nbpr').value=parseInt(document.getElementById('nbpr').value)+1;
nb=document.getElementById('nbpr').value;
//alert('nb after append'+nb);
			}
        });
    stoppropagation=false;
	  }*/
  //});
  
  function fctsubmitedit(nb,nomp){
			  nb=document.getElementById('nbpr').value;
	 nomp=document.getElementById('nompi'+nb).value;

	 batch=document.getElementById('idbatch').value,
		nba=nb-1;

//$('#addprtobatchform1').attr('action', 'editbpr');	
$('#addprtobatchform1').attr('onsubmit','return false;');
$('#addprtobatchform'+nb+'').attr('onsubmit','return false;');

  $.ajax({
  url: '/profiles/editbpr/'+batch+'/'+nomp,
  type: 'POST',
  data: $("#addprtobatchform"+nb+"").serialize(),
            beforeSend: function(){
				
				
					stoppropagation=true;
					$('#addproftitle').html('<h5><center>Modifing ...</center></h5>');
					stoppropagation=true;
	                 },
            complete:function()
            {
				stoppropagation=true;
   setTimeout(
  function() 
  {
	 $('#addproftitle').html('<h3><center></center></h3>');
   
	stoppropagation=false;
	  
  }, 1000);
		     },
			success :function()
            {stoppropagation=false;
	
			}
        });
    stoppropagation=false;
	  }
		 </script>
 <script>
 function listduplicate(nameentred){
	 console.log('Start check duplication');
	ch='';
	document.getElementById("pnotif0").style.display="none!important";
document.getElementById("pnotif").style.display="none!important";
	var array1 = ((nameentred.replace(/[^a-zA-Z ]/g, "")).toUpperCase()).split(" ");
	 arrayindex = []; 
	 arraylength = []; 
	 arrayCountWordDupl = []; 
	 arrayWordDupl = []; 
console.log('before loop');
console.log('arraynames.length'+arraynames.length);
    for (i = 1; i < arraynames.length; i++) {
		console.log('i= '+i);
	  arraylength.push(arraynames[i].split(' ').length);
     var  array2=((arraynames[i].replace(/[^a-zA-Z ]/g, "")).toUpperCase()).split(" ");
	 
var cnt=0;
duplicated=false;
	 var result = array1.filter(function(n) {

  if( array2.indexOf(n) > -1)
  {

	 duplicated=true;
	  cnt=cnt+1;
	
	
	

  }

});
 
if(duplicated ==true){ 
 arrayindex.push(i); 
	 arrayCountWordDupl.push(cnt); 
arrayWordDupl.push(arraynames[i]);
	console.log('arraynames[i]= '+arraynames[i]);
	 }
}

  for (j = 0; j < arrayindex.length; j++) {
l=arraylength[j];
	   	console.log('j= '+j);
	  if(	  (arrayCountWordDupl[j] > 1) &&	  ( ((Math.floor(l/2))+1) <= arrayCountWordDupl[j] )	  )
	  {
		
		  document.getElementById("pnotif0").style.display="block";
document.getElementById("pnotif").style.display="block";
var numOfTrue = 0;
for(var k=0;k<arrayWordDupl.length;k++){
    if(arrayWordDupl[k] == arraynames[arrayindex[j]])
       numOfTrue++;
  	console.log('arrayWordDupl[k]'+arrayWordDupl[k]);
}

if( (numOfTrue <= 1)){
	  $('#myModal').modal('show');
	console.log('jj='+j);
if (j==0){ch=ch+' '+'<b>'+arraynames[arrayindex[j]]+'   '+'<span style="color:brown;">'+arrayaddress[arrayindex[j]]+'</span></b></br>';}
else{ch=ch+' '+'<b style="margin-left: 24%;">'+arraynames[arrayindex[j]]+'   '+'<span style="color:brown;">'+arrayaddress[arrayindex[j]]+'</span></b></br>';}
	
	  $("#pnotif").html('<b>Possible duplicates: </b>'+ch);
}
	    
  }
  }
 
}
	 

 	
</script>		   <link rel="stylesheet" href="//code.jquery.com/ui/1.12.0/themes/base/jquery-ui.css">
  <link href="http://directories.enterpriseesolutions.com/keyboard/css/tipsy.css" rel="stylesheet">
	<link href="http://directories.enterpriseesolutions.com/keyboard/css/prettify.css" rel="stylesheet">
	<!--<script src="http://directories.enterpriseesolutions.com/keyboard/js/bootstrap.min.js"></script>-->
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js" type="text/javascript"></script>
<style>
	/*
#idtab
{
    display:table;
}
tr, #addprtobatchform1, #addprtobatchform2
{
    display:table-row;
}
td
{
    display:table-cell;
}
.select{
	margin-bottom: 0px;
	text-align:left;
	width: 180px;
	margin-right: 2px;
	margin-left: 2px;
	margin-top: 20px;
	background-color: #00BFFF;
	color: #fff;
	border-radius: 20px;
    font-size: 11px;
	border: none;
    font-size: 12px;
    height: 29px;
    padding: 5px;
	clear: both;
    font-size: 120%;
    vertical-align: text-bottom;
}
textarea{width:180px!important;}*/
</style>
 <script type="text/javascript" >var cna=0;

 var arraynames=new Array();
 var arrayaddress=new Array();
 </script>
 <?php
   	 App::import('Controller', 'Categories');
 $categs = new CategoriesController;
 $cats = $categs->ListeCategories();
 
  App::import('Controller', 'Profiles');
 $profilesC = new ProfilesController;
 $names = $profilesC->ProfilesPerCountry($this->Session->read('Auth.User.country'));
 $address = $profilesC->AddressPerCountry($this->Session->read('Auth.User.country'));
 $names = array_values($names);
     $address = array_values($address);
	   $datan = array();
	 
	 for ($j=0; $j < sizeof($names) ; $j++) { 
	?>
	  <script type="text/javascript">  // alert('cn='+cn);
	  cna=cna+1;</script>
	  <?php 
	     $datan[$j]=array("value"=>$names[$j], "label"=>$address[$j]);
	?>
	  <script type="text/javascript">
     arraynames[cna]= ""+<?php echo json_encode($names[$j]); ?>;
     arrayaddress[cna]= ""+<?php echo json_encode($address[$j]); ?>;
	 console.log(arraynames[cna]);
	 console.log(arrayaddress[cna]);
	 </script>
	  <?php
    }
    $datan =array_values($datan);
 $listep = $profilesC->ListeProfiles();
  $noms=  array_values($listep);

?>
 <?php if (isset ($id)) {$id=$id; } else {echo 'not set';$id=""; }?>
<?php
 $valinit=$profilesC->TotProfilesPerBatch($id);
 echo $this->Form->input('nbprinit',array('type'=>'hidden','id'=>'nbprinit','value'=>$valinit)); ?>

  <script>
   $( function() {
 
 $("input[id^='nompi']").autocomplete({minLength: 0,
      source:  <?php echo json_encode($noms); ?>
    }); 
								  
   } );
 
  </script>

<style>
	/*
DIV.table 
{
    display:table;
}
FORM.tr, DIV.tr
{
    display:table-row;
}
SPAN.td
{
    display:table-cell;
	vertical-align: middle;
	height: 50px!important;
    overflow: hidden;
    text-overflow: ellipsis;
    white-space: nowrap;
    word-wrap: break-word;
	border: 1px solid #ddd;
	min-height: 35px!important;
	padding-top: 8px!important;
}
.button{    border-radius: 15px!important;}
button{    border-radius: 15px!important;}*/
	
</style>

       
	   <div class="modal" id="myModal">
	<div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
		<center><h4 class="modal-title" id="myModalLabel" style="color:#0B8EB6; ;">Warning </h4></center>        </div><div class="container"></div>
        <div style="margin-left:10px;" class="modal-body form">

<p style="color:red;display:none;"id="pnotif0"><b>This is a possible Duplicate - Do you want to continue adding?</b></p></td></tr>
<p style="display:none;"id="pnotif"></p>
         </div>
        <div class="modal-footer">
          <a href="#" data-dismiss="modal" class="btn">Close</a>
         </div>
      </div>
    </div>
</div> 
		 <script>
		 

	/*  $(document).ready(function() {
			  nb=document.getElementById('nbpr').value;

	  });*/
	  function fctsubmit(){
		  	nb=document.getElementById('nbpr').value;
			
	if(document.getElementById('nompi'+nb).value==""){
		alert('Profile name required !');
	}
	else if(document.getElementById('cati'+nb).value=="")
	{alert('Category required !');}
    else if(document.getElementById('addressi'+nb).value=="")
	{alert('Address required !');}
else if(document.getElementById('cityi'+nb).value=="")
	{alert('City required !');}
else if(document.getElementById('regioni'+nb).value=="")
	{alert('Region required !');}
else if(document.getElementById('countryi'+nb).value=="")
	{alert('Country required !');}
else if(document.getElementById('phonei'+nb).value=="")
	{alert('Phone number required !');}
	else{
	nb=document.getElementById('nbpr').value;
	nbinit=document.getElementById('nbprinit').value;
			document.getElementById('compteur').value=parseInt(nb)+parseInt(nbinit);
			currentnb=parseInt(nb)+parseInt(nbinit);
			if (currentnb==100){alert('Your batch contain 100 profiles!');}
			document.getElementById('addprtobatchformi').id = 'addprtobatchform'+nb;

if(nb==1){document.getElementById('subediti').id = 'subediti'+nb;}
		/*	if (nb==1 ){
				document.getElementById('nompi').id = 'nompi'+nb; 
				document.getElementById('addressi').id = 'addressi'+nb; 
				document.getElementById('address2i').id = 'address2i'+nb; 
				document.getElementById('regioni').id = 'regioni'+nb; 
				document.getElementById('cityi').id = 'cityi'+nb; 
				document.getElementById('countryi').id = 'countryi'+nb; 			
				document.getElementById('phonei').id = 'phonei'+nb; 			
		 
				}*/
			
			document.getElementById('subi').id = 'sub'+nb;
			document.getElementById('sub'+nb).style.display = 'none';
			anb=nb-1;
			//alert('anb'+anb);
			document.getElementById('subediti'+nb).style.display = 'block';
		//	document.getElementById('subediti'+anb).style.display = 'none';
			$("#nompi"+nb).prop("readonly", true);
			document.getElementById("nompi"+nb).style.backgroundColor ="rgba(128, 128, 128, 0.24)!important";
   $.ajax({
  url: '/profiles/add/b',
  type: 'POST',
  data: $("#addprtobatchform"+nb+"").serialize(),
            beforeSend: function(){
			
					stoppropagation=true;
					$('#addproftitle').html('<h5><center>Adding ...</center></h5>');
					stoppropagation=true;
					//alert("here1");
             	
                 },
            complete:function()
            {
				stoppropagation=true;
				
				arraynames.push(document.getElementById('nompi'+nb).value);
				arrayaddress.push(document.getElementById('addressi'+nb).value+' '+document.getElementById('address2i'+nb).value+' '+document.getElementById('regioni'+nb).value+' '+document.getElementById('cityi'+nb).value+' '+document.getElementById('countryi'+nb).value);
              //location.reload(true);
   setTimeout(
  function() 
  {
	// $('#addproftitle').html('<h3><center>Added</center></h3>');
	 $('#addproftitle').html('<h3><center></center></h3>');
    //do something special
	stoppropagation=false;
	
	  
  }, 1000);
		     },
			success :function()
            {stoppropagation=false;
			console.log('before add adr');
			arraynames.push(document.getElementById('nompi'+nb).value);
				//arrayaddress.push('new address');
				arrayaddress.push(document.getElementById('addressi'+nb).value+' '+document.getElementById('address2i'+nb).value+' '+document.getElementById('regioni'+nb).value+document.getElementById('cityi'+nb).value+document.getElementById('countryi'+nb).value);
            
          console.log(document.getElementById('nompi'+nb).value);
		//	alert('success');
			var codephp0=<?php echo json_encode($this->Form->create('Profile',array(/*'action'=>'add/b',*/'id'=>'addprtobatchformi','class'=>'tr')).$this->Form->input('batch' ,array('type'=>'hidden','id'=>'batch2','value'=>''.$id,'label'=>'','style'=>' ;margin-left:-2px')));?>;
			var codephp01=<?php echo json_encode($this->Form->create('Profile',array(/*'action'=>'add/b',*/'id'=>'addprtobatchformi','class'=>'tr zebra')).$this->Form->input('batch' ,array('type'=>'hidden','id'=>'batch2','value'=>''.$id,'label'=>'','style'=>' ;margin-left:-2px')));?>;

			var codephp1=<?php echo json_encode($this->Form->input('name' ,array('id'=>'nompi','onchange'=>'listduplicate(this.value);','label'=>'','style'=>'margin-left: 2px!important;margin-right: 3px!important;' , 'required'=>'false', 'pattern'=>'[a-zA-Z0-9\s]+' )));?>;
			var codephp2=<?php echo json_encode($this->Form->select('category' ,$cats,array('id'=>'cati',"class"=>'select','label'=>'','style'=>' margin-bottom: 0px;;text-align:left;'   )));;?>;
			var codephp3=<?php echo json_encode($this->Form->input('address' ,array('id'=>'addressi','placeholder'=>'Address line 1','label'=>'','style'=>'width:90%;margin-bottom: 0px; ;text-align:left;'  )). $this->Form->input('address2' ,array('id'=>'address2i','placeholder'=>'Address line 2','label'=>'','style'=>'width:90%; margin-bottom: 0px;text-align:left;'  )));;?>;
			var codephp4=<?php echo json_encode($this->Form->input('city' ,array('id'=>'cityi','placeholder'=>'City','label'=>'','style'=>' margin-left: 13%;width: 110%;margin-bottom: 0px;text-align:left;'   )));;?>;
			var codephp5=<?php echo json_encode($this->Form->input('region' ,array('id'=>'regioni','placeholder'=>'Region','label'=>'','style'=>'margin-left: 13%;width: 120%;margin-bottom:0px;text-align:left;'   )));;?>;
			var codephp6=<?php echo json_encode($this->Form->input('country' ,array('id'=>'countryi','placeholder'=>'Country','label'=>'','style'=>'margin-left: 13%;width: 110%;margin-bottom: 5px;text-align:left;' ,'type'=>'text' ,'value'=>$this->Session->read('Auth.User.country') )));;?>;
			var codephp7=<?php echo json_encode($this->Form->input('pcode' ,array('id'=>'code2','placeholder'=>'Zip Code','label'=>'','style'=>' margin-left: 13%;width: 120%;margin-bottom: 5px;text-align:left;'   )));;?>;
			var codephp8=<?php echo json_encode($this->Form->input('phone' ,array('id'=>'phonei','placeholder'=>'Phone','class'=>'elem','label'=>'','style'=>'height:34px; width:90%;text-align:left;','type'=>'text'  )). $this->Form->input('email' ,array('id'=>'email2','placeholder'=>'Email','label'=>'','style'=>'   width:90%;  font-size: 140%;text-align:left; '  ,'type' => 'email'  )). $this->Form->input('website' ,array('id'=>'website2','placeholder'=>'Website','label'=>'','style'=>'height:34px;width:90%;text-align:left;'   )));;?>;
			var codephp9=<?php echo json_encode($this->Form->input('tagline' ,array('id'=>'tag2','label'=>'','style'=>'height: 100px;width: 90%!important;margin: 8px!important;text-align:left;' ,'type' => 'textarea' )));;?>;
			var codephp10=<?php echo json_encode($this->Form->button('', array('type'=>'button','class' => '','id'=>'subi','onclick'=>'fctsubmit();',  'style'=>'width: 62px;height:62px;margin-left: 0px;background:url(http://sales.enterpriseesolutions.com/app/webroot/img/addd.png)','title' => 'Clic here to add    ') ).$this->Form->hidden('addedby' ,array('value'=>''. $this->Session->read('Auth.User.username'))).$this->Form->hidden('status' ,array('value'=>0,'id'=>'status2')));?>;
			var codephp11=<?php echo json_encode($this->Form->end() );?>;
 //alert('before append');
//alert('nb'+nb);
			//$(".idtab").last().after('<tr id="pr2" style="border-bottom:1px solid black!important;">'+codephp0+'<span class="td"><center><b>Pr2</b></center></span><span class="td">'+codephp1+'</span><span class="td">'+codephp2+'</span><span class="td"><center>'+codephp3+'<div class="row"><center><div class="col-sm-5">'+codephp4+'</div><div class="col-sm-5"></div></center></div><div class="row"><center><div class="col-sm-5">'+codephp6+'</div><div class="col-sm-5">'+codephp7+'</div></center></div></span><span class="td"><center>'+codephp8+'</center></span><span class="td">'+codephp9+'</span><span class="td">'+codephp10+'</span></tr>');
		//	$( ".addprtobatchform1" ).append( "</br><div class='row tr' style='display:inline-block'><p>Test</p></div>" );
			count=parseInt(document.getElementById('nbpr').value)+1;
			idbatch=document.getElementById("nbpr").value;
			//alert("nompi"+count);
		//	name=document.getElementById("nompi"+count).value;
		
																																																																																																																																																		//onclick='ajout("+jour+","+idl+")' 
			if((nb%2) == 0){
			$( "#addprtobatchform"+nb+"" ).after( ''+codephp0+'<span class="td"><center><b>Pr'+count+'</b></center></span><span class="td">'+codephp1+'</span><span class="td">'+codephp2+'</span><span class="td"><center>'+codephp3+'<div class="row"><center><div class="col-sm-5">'+codephp4+'</div><div class="col-sm-5">'+codephp5+'</div></center></div><div class="row"><center><div class="col-sm-5">'+codephp6+'</div><div class="col-sm-5">'+codephp7+'</div></center></div></center></span> <span class="td"><center>'+codephp8+'</center></span><span class="td">'+codephp9+'</span><span class="td"> '+codephp10+'<button id="subediti'+count+'" style="display:none;width: 62px;height:62px;margin-left: 0px;background:url(http://directories.enterpriseesolutions.com/app/webroot/img/edit.png"> </button> </span>'+codephp11+'' );
				
				document.getElementById('nompi').id = 'nompi'+count; 
				document.getElementById('cati').id = 'cati'+count; 
				document.getElementById('addressi').id = 'addressi'+count; 
				document.getElementById('address2i').id = 'address2i'+count; 
				document.getElementById('regioni').id = 'regioni'+count; 
				document.getElementById('cityi').id = 'cityi'+count; 
				document.getElementById('countryi').id = 'countryi'+count; 			
		 
				ncount="nompi"+count;
				//alert('ncount= '+ncount);
					names=document.getElementById(ncount).value;
				
				
					
					
					//alert('names'+names);
			$("#subediti"+count+"").attr('onClick', '$("#addprtobatchform"+count+"").attr("onsubmit","return false;");fctsubmitedit('+count+','+names+');');
			}
			else{
			$( "#addprtobatchform"+nb+"" ).after( ''+codephp01+'<span class="td"><center><b>Pr'+count+'</b></center></span><span class="td">'+codephp1+'</span><span class="td">'+codephp2+'</span><span class="td"><center>'+codephp3+'<div class="row"><center><div class="col-sm-5">'+codephp4+'</div><div class="col-sm-5">'+codephp5+'</div></center></div><div class="row"><center><div class="col-sm-5">'+codephp6+'</div><div class="col-sm-5">'+codephp7+'</div></center></div></center></span> <span class="td"><center>'+codephp8+'</center></span><span class="td">'+codephp9+'</span><span class="td"> '+codephp10+'<button  id="subediti'+count+'" style="display:none;width: 62px;height:62px;margin-left: 0px;background:url(http://directories.enterpriseesolutions.com/app/webroot/img/edit.png"> </button> </span>'+codephp11+'' );
			document.getElementById('nompi').id = 'nompi'+count;  
			document.getElementById('cati').id = 'cati'+count;  
				document.getElementById('addressi').id = 'addressi'+count; 
				document.getElementById('address2i').id = 'address2i'+count; 
				document.getElementById('regioni').id = 'regioni'+count; 
				document.getElementById('cityi').id = 'cityi'+count; 
				document.getElementById('countryi').id = 'countryi'+count; 			
				document.getElementById('phonei').id = 'phonei'+count; 			
		 			
		  ncount="nompi"+count;
		 
			names=document.getElementById(ncount).value;

			$("#subediti"+count+"").attr('onClick', '$("#addprtobatchform"+count+"").attr("onsubmit","return false;");fctsubmitedit('+count+','+'"'+names+'"'+');');
			}
	
			document.getElementById('nbpr').value=parseInt(document.getElementById('nbpr').value)+1;
nb=document.getElementById('nbpr').value;
//alert('nb after append'+nb);
			}
        });
    stoppropagation=false;
	  }
	  }
  //});
  
  function fctsubmitedit(nb,nomp){
			  nb=document.getElementById('nbpr').value;
	 nomp=document.getElementById('nompi'+nb).value;

	 batch=document.getElementById('idbatch').value,
		nba=nb-1;

//$('#addprtobatchform1').attr('action', 'editbpr');	
$('#addprtobatchform1').attr('onsubmit','return false;');
$('#addprtobatchform'+nb+'').attr('onsubmit','return false;');

  $.ajax({
  url: '/profiles/editbpr/'+batch+'/'+nomp,
  type: 'POST',
  data: $("#addprtobatchform"+nb+"").serialize(),
            beforeSend: function(){
				
				
					stoppropagation=true;
					$('#addproftitle').html('<h5><center>Modifing ...</center></h5>');
					stoppropagation=true;
	                 },
            complete:function()
            {
				stoppropagation=true;
   setTimeout(
  function() 
  {
	 $('#addproftitle').html('<h3><center></center></h3>');
   
	stoppropagation=false;
	  
  }, 1000);
		     },
			success :function()
            {stoppropagation=false;
	
			}
        });
    stoppropagation=false;
	  }
		 </script>
 <script>
 function listduplicate(nameentred){
	 console.log('Start check duplication');
	ch='';
	document.getElementById("pnotif0").style.display="none!important";
document.getElementById("pnotif").style.display="none!important";
	var array1 = ((nameentred.replace(/[^a-zA-Z ]/g, "")).toUpperCase()).split(" ");
	 arrayindex = []; 
	 arraylength = []; 
	 arrayCountWordDupl = []; 
	 arrayWordDupl = []; 
console.log('before loop');
console.log('arraynames.length'+arraynames.length);
    for (i = 1; i < arraynames.length; i++) {
		console.log('i= '+i);
	  arraylength.push(arraynames[i].split(' ').length);
     var  array2=((arraynames[i].replace(/[^a-zA-Z ]/g, "")).toUpperCase()).split(" ");
	 
var cnt=0;
duplicated=false;
	 var result = array1.filter(function(n) {

  if( array2.indexOf(n) > -1)
  {

	 duplicated=true;
	  cnt=cnt+1;
	
	
	

  }

});
 
if(duplicated ==true){ 
 arrayindex.push(i); 
	 arrayCountWordDupl.push(cnt); 
arrayWordDupl.push(arraynames[i]);
	console.log('arraynames[i]= '+arraynames[i]);
	 }
}

  for (j = 0; j < arrayindex.length; j++) {
l=arraylength[j];
	   	console.log('j= '+j);
	  if(	  (arrayCountWordDupl[j] > 1) &&	  ( ((Math.floor(l/2))+1) <= arrayCountWordDupl[j] )	  )
	  {
		
		  document.getElementById("pnotif0").style.display="block";
document.getElementById("pnotif").style.display="block";
var numOfTrue = 0;
for(var k=0;k<arrayWordDupl.length;k++){
    if(arrayWordDupl[k] == arraynames[arrayindex[j]])
       numOfTrue++;
  	console.log('arrayWordDupl[k]'+arrayWordDupl[k]);
}

if( (numOfTrue <= 1)){
	  $('#myModal').modal('show');
	console.log('jj='+j);
if (j==0){ch=ch+' '+'<b>'+arraynames[arrayindex[j]]+'   '+'<span style="color:brown;">'+arrayaddress[arrayindex[j]]+'</span></b></br>';}
else{ch=ch+' '+'<b style="margin-left: 24%;">'+arraynames[arrayindex[j]]+'   '+'<span style="color:brown;">'+arrayaddress[arrayindex[j]]+'</span></b></br>';}
	
	  $("#pnotif").html('<b>Possible duplicates: </b></br>'+ch);
}
	    
  }
  }
 
}
	 

 	
</script>		 