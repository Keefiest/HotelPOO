<?php


class Client{
    // ATTRIBUTS
    private string $nom;
    private string $prenom;
    private bool $sexe;
    private DateTime $dateNaissance;    
    private $reservations;
    // CONSTRUCT
    public function __construct($nom, $prenom, $sexe, $dateNaissance){

        $this->nom= $nom;
        $this->prenom= $prenom;
        $this->sexe= $sexe;
        $this->dateNaissance= new DateTime($dateNaissance);
        $this->reservations= [];

    }
    // GETTER
    function getNom(){
        return $this->nom;
    }
    
    function getPrenom(){
        return $this->prenom;
    }
    
    function getSexe(){
        if($this->sexe==true){
            return "Mr.";
        } elseif($this->sexe==false){
            return "Mme.";
        }
    }
    
    function getDateNaissance(){
        return $this->dateNaissance;
    }

    public function getReservations(){
        return $this->reservations;
    }
    // SETTER
    function setNom(){
        return $this->nom;
    }
    
    function setPrenom(){
        return $this->prenom;
    }
    
    function setSexe(){
        return $this->sexe;
    }
    
    function setDateNaissance(){
        return $this->dateNaissance;
    }

    public function setReservations(){
        return $this->reservations;
    }
    // FONCTION CUSTOM
    public function addReservation($reservation){
        $this->reservations[]= $reservation;
    }
    

    public function showReservation(){
        
        echo "<span class='title'>Réservations de $this->prenom $this->nom</span>";
        foreach($this->reservations as $reservation){
            echo $reservation->cshowReservation().$reservation. "<br>";
            
        }
        $sum = 0;
        foreach($this->reservations as $reservation){
            $sum += $reservation->calcTotal();
        }
        return "Total :".$sum."€";
    }
    
    public function __toString(){
        return "<strong>Client : </strong>".$this->getSexe()." ".$this->nom." ".$this->prenom." (".$this->dateNaissance->format("d/m/Y").").<br>";
    }
}

?>