<?php

/***** Dernière modification : 14/11/2016, Romain TALDU	*****/

require(__DIR__ .'/../include/config.inc.php');
require(__DIR__ .'/../include/connexion.inc.php');
require(__DIR__ .'/model.inc.php');

// préparation connexion
$connect = new connection();
$memotri= new memotri($connect);


$num_voie=$_REQUEST['num_voie'];
$ville=$_REQUEST['ville'];
$nom_voie=$_REQUEST['nom_voie'];

$adresse=$memotri->chercheAdresse($num_voie,$ville,$nom_voie); 

if(!$adresse){header('Location: index.php?adresse=no');exit;}
	
$id_collecte=$adresse['id_collecte'];
$jour_om=$adresse['jour_om'];
$jour_cs=$adresse['jour_cs'];
$jour_bio=$adresse['jour_bio'];
$zonage=$adresse['zonage'];
$feq_cs=$adresse['feq_cs'];



  // get the HTML
    ob_start();
    require(__DIR__ .'/memotri.php');
    $content = ob_get_clean();
	
	  // convert to PDF
    require_once(__DIR__.'/../plugins/html2pdf-4.5.1/vendor/autoload.php');
    try
    {
        $html2pdf = new HTML2PDF('L', 'A4', 'fr');
        $html2pdf->pdf->SetDisplayMode('fullpage');
        $html2pdf->writeHTML($content, isset($_GET['vuehtml']));
        $html2pdf->Output('memotri.pdf');
    }
    catch(HTML2PDF_exception $e) {
        echo $e;
        exit;
    }

?>

