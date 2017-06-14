<?php

/***** Dernière modification : 14/11/2016, Romain TALDU	*****/

require(__DIR__ .'/../include/config.inc.php');
require(__DIR__ .'/../include/connexion.inc.php');

$adresse = empty($_REQUEST['adresse']) ? "" : $_REQUEST['adresse'];
$ville = empty($_REQUEST['ville']) ? "ARTIGUELOUTAN" : $_REQUEST['ville'] ;


?>

<!DOCTYPE html>

<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title></title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.5 -->
    <link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
     <!-- Font Awesome -->
    <link rel="stylesheet" href="../plugins/font-awesome-4.6.3/css/font-awesome.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="../plugins/ionicons-2.0.1/css/ionicons.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="../dist/css/AdminLTE.min.css">
   
    <link rel="stylesheet" href="../dist/css/skins/skin-blue.min.css">


<link type="text/css" rel="stylesheet" href="../include/css/jquery.autocomplete.css" />
<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.0/jquery.min.js"></script>
<script type="text/javascript" src="../include/js/jquery.autocomplete.js"></script>
    

</head>
 <body class="hold-transition skin-blue sidebar-mini">

 
  	<!-- Main content -->
        <section class="content">
          <div class="row">
            
            <div class="col-md-12">
          
          
          
<h3>Connaître le jour de sortie des bacs et télécharger le mémotri</h3>
		
	
<form name="adminForm">
			
<table cellspacing="1">
	<tbody>
			
		<tr height="30px"> <td width="120px" > Votre commune: </td>
		  <td >
		    
 <select name="ville" id="ville" class="inputbox" size="1"  onChange="javascript:submitformulaire('actualise');">
<option value="ARTIGUELOUTAN"  <?php if($ville=="ARTIGUELOUTAN"){echo"selected='selected'";}?>>Artigueloutan</option>
<option value="BILLERE" <?php if($ville=="BILLERE"){echo"selected='selected'";}?>>Billere</option>
<option value="BIZANOS" <?php if($ville=="BIZANOS"){echo"selected='selected'";}?>>Bizanos</option>
<option value="GAN" <?php if($ville=="GAN"){echo"selected='selected'";}?>>Gan</option>
<option value="GELOS" <?php if($ville=="GELOS"){echo"selected='selected'";}?>>Gelos</option>
<option value="IDRON" <?php if($ville=="IDRON"){echo"selected='selected'";}?>>Idron</option>
<option value="JURANCON" <?php if($ville=="JURANCON"){echo"selected='selected'";}?>>Jurançon</option>
<option value="LEE" <?php if($ville=="LEE"){echo"selected='selected'";}?>>Lee</option>
<option value="LESCAR" <?php if($ville=="LESCAR"){echo"selected='selected'";}?>>Lescar</option>
<option value="LONS" <?php if($ville=="LONS"){echo"selected='selected'";}?>>Lons</option>
<option value="MAZERES-LEZONS"  <?php if($ville=="MAZERES-LEZONS"){echo"selected='selected'";}?>>Mazeres-Lezons</option>
<option value="OUSSE"  <?php if($ville=="OUSSE"){echo"selected='selected'";}?>>Ousse</option>
<option value="PAU"  <?php if($ville=="PAU"){echo"selected='selected'";}?>>Pau</option>
<option value="SENDETS" <?php if($ville=="SENDETS"){echo"selected='selected'";}?>>Sendets</option>	</select>	 
</select>
		        
		    </td>
		  
		  </tr>
           <tr height="30px">
          <td >N° de voie:</td>
          <td>  <input name="num_voie" type="text" id="num_voie" size="5"/>
            
           
  </td>
     
        </tr>
        <tr height="30px">
          <td >Libellé de  voie:</td>
          <td>
          	
          

      <input type="text" name="nom_voie" id="t_collecte"/></td>
          
        </td>
          
        </tr>
		
        
        <tr height="30px">
          <td ></td>
          <td>

      <input name="soumettre" type="button" id="soumettre" value="Envoyer" onClick="javascript:submitformulaire('send')"/>
            
            
            
            
            
            
            </td>
          
        </tr>
        
        
	</tbody>
	</table>
	<br>
                      </form>
	
	<?php if($adresse=="no") {echo"<FONT COLOR=\"#FF0000\" size=\"3\">Adresse inconnue, veuillez nous contacter au 05 59 14 64 30.</FONT>"; }?>
				<table >
					<tr>
						<td width="60%">
						<p>Si vous ne trouvez pas votre adresse, merci de taper un mot clé de votre adresse.<br>
Par exemple : &quot;rue des fleurs&quot;, tapez &quot;fleurs&quot;.</p>						  
						 
						</td>
					</tr>
				</table>

                   </div>
              
             
              

          </div>

         
        </section><!-- /.content -->
      </div><!-- /.content-wrapper -->
      
      

	
<script language="JavaScript">
 
function submitformulaire(type){
	
	if(type == 'actualise') {
	document.adminForm.method = "post";
	document.adminForm.action = "index.php";
	document.adminForm.submit();
	}

else{
	
					if(type == 'send') {		
			if (document.adminForm.num_voie.value!="")
			{document.adminForm.method = "post";
			document.adminForm.action = "conv_memotri_pdf.php";
			document.adminForm.target = "_blank";
			document.adminForm.submit();}
			else{alert("Vous devez saisir un muméro de voie !");}
			
			}
			

}}


</SCRIPT> 
    
<script type="text/javascript">

$(document).ready(function() {
	$('#t_collecte').autocomplete('fichier.php?ville=<?php echo $ville; ?>');
});

</script>



</body>
</html>

