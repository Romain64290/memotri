<?php

/***** Dernière modification : 08/09/2016, Romain TALDU	*****/

class memotri {

    private $con;

    public function __construct(connection $con) {
        $this->con = $con->con;
    }
	

/**************************************************************************
 Affiche Info réunion
***************************************************************************/

function semiAuto($q,$str,$ville)
  {
 
 $q="%".$q."%";
 $str="%".$str."%";
 $ville="%".$ville."%";
  
  try{

	  	$select = $this->con->prepare('SELECT DISTINCT nom_voie 
		FROM memotri
		WHERE (nom_voie LIKE :q OR nom_voie LIKE :str) AND nom_commune LIKE :ville
		LIMIT 0, 10
	    ');
			
		$select->bindParam(':q', $q, PDO::PARAM_STR);
		$select->bindParam(':str', $str, PDO::PARAM_STR);	
		$select->bindParam(':ville', $ville, PDO::PARAM_STR);			
		$select->execute();
		
		$data = $select->fetchAll(PDO::FETCH_OBJ);
		
		}
		
	 catch (PDOException $e){
       echo $e->getMessage() . " <br><b>Erreur </b>\n";
	throw $e;
        exit;
    }
	 
 return $data;
  }   

/**************************************************************************
 Recherche adresse
***************************************************************************/

function chercheAdresse($num_voie,$ville,$nom_voie)
  {
  
  
  
  try{
    	
		$select = $this->con->prepare('SELECT * 
		FROM memotri 
		WHERE num_voie= :num_voie AND nom_voie= :nom_voie AND nom_commune= :ville
	    ');	
			
		$select->bindParam(':num_voie', $num_voie, PDO::PARAM_STR);	
		$select->bindParam(':nom_voie', $nom_voie, PDO::PARAM_STR);	
		$select->bindParam(':ville', $ville, PDO::PARAM_STR);		
		$select->execute();
		
		$data = $select->fetch();
		
		}
		
	 catch (PDOException $e){
       echo $e->getMessage() . " <br><b>Erreur</b>\n";
	throw $e;
        exit;
    }
	 
 return $data;
  }   
	

}