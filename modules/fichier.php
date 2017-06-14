<?php

/***** Dernière modification : 14/11/2016, Romain TALDU	*****/

require(__DIR__ .'/../include/config.inc.php');
require(__DIR__ .'/../include/connexion.inc.php');
require(__DIR__ .'/model.inc.php');

// préparation connexion
$connect = new connection();
$memotri= new memotri($connect);

$ville = $_REQUEST['ville'];

if(isset($_GET['q'])) {
$q = $_GET['q'];
 
$tab1 = array("à","è","é","ê","ù","»","«","°","œ","oeil");
$tab2 = array("a","e","e","e","u","&raquo;","&laquo;","&deg;","œ","œil");
$str = str_replace($tab1,$tab2,$q);

$str = htmlentities($str); // protection
$q = htmlentities($q); // protection

 
$Sem=$memotri->semiAuto($q,$str,$ville); 
	
foreach($Sem as $key){
			
$nom_voie=$key->nom_voie;
	
 echo $nom_voie."\n";
	
}

}




?>