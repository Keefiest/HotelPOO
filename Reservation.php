
   

    

<?php
    class Reservation{
        // ATTRIBUT
        private string $idreservation;
        private DateTime $dateDebut;
        private DateTime $dateFin;
        private Hotel $hotel;
        private Chambre $chambre;
        private Client $client;
        // CONSTRUCT
        public function __construct(string $idreservation, $dateDebut, $dateFin, Hotel $hotel, Chambre $chambre, Client $client){
            $this->idreservation=$idreservation;
            $this->dateDebut= new DateTime($dateDebut);
            $this->dateFin= new DateTime($dateFin);
            $this->hotel=$hotel;
            $this->chambre=$chambre;
            $this->client=$client;
            $chambre->setEtat(true);
            $this->hotel->addReservation($this);
            $this->chambre->addReservation($this);
            $this->client->addReservation($this);
            
        }
        // GETTER
        public function getIdreservation(){
            return $this->idreservation;
        }

        public function getHotel(){
            return $this->hotel;
        }
        public function getDateDebut(){
            return $this->dateDebut;
        }
        public function getDateFin(){
            return $this->dateDebut;
        }

        public function getChambre(){
            return $this->chambre;
        }

        public function getClient(){
            return $this->client;
        }
        // SETTER
        public function setHotel($hotel){
            return $this->hotel;
        }

        public function setDateDebut($dateDebut){
            return $this->dateDebut;
        }
        public function setDateFin($dateFin){
            return $this->dateDebut;
        }

        public function setChambre($chambre){
            return $this->chambre;
        }

        public function setClient($client){
            return $this->client;
        }

        public function setIdreservation($idreservation){
            return $this->idreservation;
        }
        // FONCTION CUSTOM
        public function calcTotal(){
            $nbJour = date_diff(($this->dateDebut), ($this->dateFin));
            $intJour = $nbJour->days;
            return (($this->chambre->getPrix())*$intJour);
        }
        public function cshowReservation(){
            return "<span class='txt'><strong><br>Hotel: ".$this->hotel->getNom()." <span class='etoile'>".$this->hotel->getNbEtoile()."<i class='fa-regular fa-star'></i></span> ".$this->hotel->getVille()."</strong>/ Chambre : ".$this->chambre->getNumero()." (".$this->chambre->getLits()." lits ".$this->chambre->getPrix()." € -".$this->chambre->getWifi().") "."</span>";
        }
        
        public function hshowReservation(){
            return " <span class='txt'><br>(ID:".$this->idreservation.") ".$this->client->getNom()." ".$this->client->getPrenom()." - Chambre ".$this->chambre->getNumero()." - du ".$this->dateDebut->format('d/m/Y')." au ".$this->dateFin->format("d/m/Y")."</span>";
        }       
        // TO STRING
        public function __toString(){
            return " <span class='txt'> du ".$this->dateDebut->format('d/m/Y')." au ".$this->dateFin->format('d/m/Y')."(ID:".$this->idreservation.")</span>";
        }
    }
?>

