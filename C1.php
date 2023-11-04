<?php 
require_once( 'Exo1.php');
class evaluation{
    private $nom;
    private $info_professeur;
    private $date_evaluation;
    private $duree;
    
    public function __construct($Nom, $Info_professeur, $Date_evaluation, $Durée ){
        $this->nom=$Nom;
        $this->info_professeur=$Info_professeur;
        $this->date_evaluation=$Date_evaluation;
        $this->duree=$Duree;
    }

    public function getNom(){
        return $this->nom;
    }
    public function getinfoprof(){
        return $this->info_professeur;
    }
    public function getdate(){
        return $this->date_evaluation;
    }
    public function getduree(){
        return $this->duree;
    }

    public function EVALUATION(){
        echo " L'evaluation en $this->nom est suivi par $info_professeur et doit fait fait le $this->date_evaluation en $this->duree avec  "; 
    } 
 }
 $evaluation1= new evaluation("POO",$professeur1->getNom(),"19/09/2023", "2heures");
 $evaluation1= EVALUATION();
 ?>
