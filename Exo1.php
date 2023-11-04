 
 
 <?php

class ETUDIANT{ 
    protected $nom;
    protected $prenom;
    protected $matricule;
    protected $date_de_naissance; 

    public function __construct($nomenvoyer, $prenomenvoyer, $matriculeenvoyer, $date_de_naissance){
        $this->nom = $nomenvoyer;
        $this->prenom = $prenomenvoyer;
        $this->matricule = $matriculeenvoyer;
        $this->date_de_naissance = $date_de_naissance;
    }

    function presenter_etudiant(){
        echo "Je m'appelle " . $this->nom . " " . $this->prenom . ", mon matricule est " . $this->matricule . " et je suis né le " . $this->date_de_naissance . "<br>";
    }

    function faire_Cour(){ 
        echo "Je fais des cours en Informatique<br>";
    }

    function faire_Evaluation(){
        echo "Je fais des évaluations<br>";
    }

    public function getNom(){  
        return $this->nom;
    }

    public function setNom($nom){
        $this->nom = $nom;
    }

    public function getP(){
        return $this->prenom;
    }

    public function setP($prenom){
        $this->prenom = $prenom;
    }

    public function getM(){ 
        return $this->matricule; 
    }

    public function setM($matricule){  
        $this->matricule = $matricule;
    }
   
} 

class PROFESSEUR extends ETUDIANT{ 
    private $salaire;
    private $voiture;
    private $specialite;

    public function __construct($nomenvoyer, $prenomenvoyer, $matriculeenvoyer, $date_de_naissance, $salaire, $voiture, $specialite){
        parent::__construct($nomenvoyer, $prenomenvoyer, $matriculeenvoyer, $date_de_naissance);
        $this->salaire = $salaire;
        $this->voiture = $voiture;
        $this->specialite = $specialite;
    }

    function presenter_professeur(){ 
        echo "Je m'appelle " . $this->nom . " " . $this->prenom . ", mon matricule est " . $this->matricule . ", ma spécialité est " . $this->specialite . ", mon salaire est de " . $this->salaire . " et j'ai une voiture de marque " . "<br>";
    } 

    function evaluer_etudiant($date_evaluation){
        echo "L'évaluation a eu lieu le $date_evaluation<br>";
    }
}

$etudiant1 = new ETUDIANT("DIALLO", "Ibrahima","01010101" , "01/01/1995");
$etudiant1->presenter_etudiant();
$etudiant1->faire_Cour();
$etudiant1->faire_Evaluation();

$professeur1= new PROFESSEUR("THIOUB","Dokhé","19191919", "01/01/2001", 50000.00, true, "Informatique");
$professeur1->evaluer_etudiant("2023-10-25");
$professeur1->presenter_professeur();
$professeur1->getNom();
?> 
