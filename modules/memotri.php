<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Memotri</title>
	<style>
#pagewrap {
	width: 2100px;
	margin-left:18px;
}

#soleil1{
position:absolute;
top: 126px;
left: 284px;
z-index:1;
}

#soleil2{
position:absolute;
top: 328px;
left: 284px;
z-index:1;
}

#soleil3{
position:absolute;
top: 532px;
left: 284px;
z-index:1;
}

#texte1 {
position:absolute;
top: 135px;
left: 370px;
width:310px;
}

#texte2 {
position:absolute;
top: 337px;
left: 370px;
width:310px;
}

#texte3 {
position:absolute;
top: 541px;
left: 370px;
width:310px;
Line-Height: 9pt;
}

#envrac {
position:absolute;
top: 576px;
left: 438px;
}

h3 {
font-family: Arial, "Helvetica Neue", Helvetica, sans-serif;
font-weight : 800;
font-size: 12px;
}

h4 {
font-family: Arial, "Helvetica Neue", Helvetica, sans-serif;
font-weight : 600;
font-size: 11px;
}

#txtsacjaune {
position:absolute;
top: 320px;
left: 353px;
width:360px;
Line-Height: 7pt;
}

#txtcomposthiver {
position:absolute;
top: 716px;
left: 20px;
width:590px;
}

	</style>
  </head>
<body>
<div id="pagewrap">
	<img src="img/memotri.jpg" width="1050"> 
	<div id="soleil1">
		<?php if ($feq_cs=="C1"){echo "<img src=\"img/soleil_1.png\" width=\"71\">";}else{echo "<img src=\"img/soleil_1b.png\" width=\"71\">";} ?>
		  
		</div>
	<div id="soleil2"><img src="img/soleil_2.png" width="71"></div>

		<div id="texte1"><h3>Votre bac jaune est collecté le <?php echo $jour_cs; ?></h3></div>
		<div id="texte2"><h3 style="color:white">Votre bac gris est collecté <?php echo $jour_om; ?></h3></div>
		
		
		<div id="txtsacjaune"><h4 style="color:black">
			<?php if ($jour_cs=="mercredi matin"){echo "Les sacs jaunes sont disponibles en Mairie de Pau.";} ?>
			</h4></div>
			
			
		
		<?php if ($jour_bio !=""){?>
		<div id="soleil3"><img src="img/soleil_3.png" width="71"></div>
		<div id="texte3"><h3 style="color:white">Votre bac marron est collecté <?php echo $jour_bio; ?></h3></div>
		<div id="envrac"><img src="img/envrac2.png" width="253"></div>
		<div id="txtcomposthiver"><h4 style="color:black">Collecte hivernale du bac marron : dates, fréquences et jours de collecte sur <a href="http://www.agglo-pau.fr/dechets">agglo-pau.fr/dechets</a></h4></div>
     
     
       <?php } else{?>
       	
	<div id="envrac"><img src="img/envrac.png" width="253"></div>
		
     <?php } ?>
     
     
     
</div>
<div id="pagewrap">
	<img src="img/memotri-verso.jpg" width="1050"> 
</div>
</body>
</html>