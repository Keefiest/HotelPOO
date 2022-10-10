<?php

class Chambre{
    // ATTRIBUTS    
    private int $numero;
    private float $prix;
    private bool $wifi;
    private bool $etat;
    private int $lits;
    private Hotel $hotel;
    private $reservations;
    // CONSTRUCT
    public function __construct($numero, $prix, $wifi, $etat, $lits, Hotel $hotel){
        $this->numero= $numero;
        $this->prix= $prix;
        $this->wifi= $wifi;
        $this->etat= $etat;
        $this->lits= $lits;
        $this->hotel= $hotel;
        $this->hotel->addChambre($this);
        $this->reservations=[];

    }
    // GETTER
    public function getNumero(){
        return $this->numero;
    }

    public function getPrix(){
        return $this->prix;
    }

    public function getWifi(){
        if($this->wifi==true){
            return "Wifi:Oui";
        } elseif($this->wifi==false){
            return "Wifi:Non";
        }
    }

    public function getWifiIcon(){
        if($this->wifi==true){
            return "<i class='fa-solid fa-wifi'></i>";
        } elseif($this->wifi==false){
            return "<i class='fa-regular fa-circle-xmark'></i>";
        }
    }

    public function getEtat(){
        if($this->etat==true){
            return "Etat:Réservé";
        } elseif($this->etat==false){
            return "Etat:Libre";
        }
    }

    public function getEtatColor(){
        if($this->etat==true){
            return "<span class='rouge'>Réservé </span>";
        } elseif($this->etat==false){
            return "<span class='vert'> Libre </span>";
        }
    }

    public function getLits(){
        return $this->lits;
    }

    public function getReservations(){
        return $this->reservations;
    }
    // SETTER
    public function setNumero($numero) {
        $this->numero = $numero;
    }

    public function setPrix($prix) {
        $this->prix = $prix;
    }

    public function setWifi($wifi) {
        $this->wifi = $wifi;
    }

    public function setEtat($etat) {
        $this->etat = $etat;
    }
    public function setLits($lits){
        $this->lits = $lits;
    }
    public function setReservations($reservations){
        return $this->reservations = $reservations;
    }
    // FONCTION CUSTOM
    public function addReservation($reservation){
        $this->reservations[]= $reservation;
    }

    public function showReservation(){
        echo "$this->numero réserve :";
        foreach($this->reservations as $reservation){
            echo $reservation . "<br>";
        }
    }
    // TO STRING
    public function __toString(){
            return "La chambre numéro ".$this->numero." : Prix :".$this->prix."€ / ".$this->getWifi()." ".$this->getEtat()." </br>";
    }

}
?>