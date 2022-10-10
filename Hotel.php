<?php

    class Hotel{
        // ATTRIBUTS
        private string $nom;
        private int $nbEtoile;
        private string $adresse;
        private string $ville;
        private $chambres;
        private $reservations;
        // CONSTRUCT
        public function __construct($nom, $nbEtoile, $adresse, $ville){
            $this->nom= $nom;
            $this->nbEtoile= $nbEtoile;
            $this->adresse= $adresse;
            $this->ville= $ville;
            $this->chambres= [];
            $this->reservations= [];
            
        }
        // GETTER
        public function getNom(){
            return $this->nom;
        }

        public function getNbEtoile(){
            return $this->nbEtoile;
        }

        public function getAdresse(){
            return $this->adresse;
        }

        public function getVille(){
            return $this->ville;
        }

        public function getChambres(){
            return count($this->chambres);
        }

        public function getReservations(){
            return count($this->reservations);
        }
        // SETTER
        public function setNom(){
            return $this->nom;
        }

        public function setNbEtoile(){
            return $this->nbEtoile;
        }

        public function setAdresse(){
            return $this->adresse;
        }

        public function setVille(){
            return $this->ville;
        }

        public function setChambres(){
            return $this->chambres;
        }

        public function setReservations(){
            return $this->reservations;
        }
        // FONCTION CUSTOM
        public function chambreDispo(){
            return $this->getChambres()-$this->getReservations();
        }


        public function addChambre($chambre){
            $this->chambres[]= $chambre;
        }

        public function showChambreStatus(){
            echo "<span class='title'>Status des chambres de $this->nom $this->nbEtoile $this->ville </span><br><table><thead><td>Chambre</td><td>Prix</td><td>Wifi</td><td>Etat</td></thead>";
            foreach($this->chambres as $chambre){
                echo "<tbody><td>Chambre ".$chambre->getNumero()." </td><td> ".$chambre->getPrix()."€ </td><td> ".$chambre->getWifiIcon()." </td><td> ".$chambre->getEtatColor()."</td></tbody>";
            }
            echo "</table>";
            
        }

        public function addReservation($reservation){
            $this->reservations[]= $reservation;
        }

        public function showReservation(){
            if ($this->getReservations()>=1){
                echo "<span class='title'></br>Réservations de l'hôtel : ".$this->nom." <span class='etoile'>".$this->nbEtoile." <i class='fa-regular fa-star'></i></span> ".$this->ville."</span></br><span class='vert'>".$this->getReservations()." Réservations</span>";
                foreach($this->reservations as $reservation){
                    echo " ".$reservation->hshowReservation(). "<br>";
                }
            }else{
                echo "<span class='title'></br>Réservations de l'hôtel : ".$this->nom." <span class='etoile'>".$this->nbEtoile." <i class='fa-regular fa-star'></i></span> ".$this->ville."</span> </br> <span class='vert'>".$this->getReservations()." Réservations</span>";
                echo "<br>Aucune réservation !<br>";
            }
        }
        // TO STRING
        public function __toString(){
            return " <span class='title'>".$this->nom." ".$this->nbEtoile." étoiles ".$this->ville."</span></br><span class='txt'> ".$this->adresse." </br>Nombre de chambres : ".$this->getChambres()."</br> Nombre de réservation : ".$this->getReservations()."</br> Chambres libres : ".$this->chambreDispo()."</span>";
            
        }

    }

?>