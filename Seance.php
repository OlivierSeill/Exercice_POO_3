<?php

class Seance{
    //ATTRIBUT : encapsulation typage nom_variable
    private string $date;
    private string $heure;
    private string $film;


    //CONSTRUCTEUR
    public function __construct(string $newDate, string $newHeure, string $newFilm){
        $this->date = $newDate;
        $this->heure = $newHeure;
        $this->film = $newFilm;
    }

    //GETTER ET SETTER
    public function getDate():string{
        return $this->date;
    }
    public function setDate(string $newDate):void{
        $this->date = $newDate;
    }

    public function getHeure():string{
        return $this->heure;
    }
    public function setHeure(string $newHeure):void{
        $this->heure = $newHeure;
    }

    public function getFilm():string{
        return $this->film;
    }
    public function setFilm(string $newFilm):void{
        $this->film = $newFilm;
    }
    
    // public function demarrer():void{
    //     echo "<p>Démarrage de la $this->nomVehicule Vrooom !!!!</p>";
    // }

    // public function detect():string{
    //     $type="";
    //     if ($this->nbrRoue == 2) {
    //         $type = "moto";
    //     } else if ($this->nbrRoue == 4){
    //         $type = "voiture";
    //     }
    //     return $type;
    // }

    // public function boost():void{
    //     $this->setVitesse($this->vitesse+50);
    // }

    // public function plusRapide(Vehicule $autre):Vehicule{
    //     $result = $this;
    //     if ($this->vitesse < $autre->vitesse){
    //         $result=$autre;
    //     }
    //     return $result;
    // }
}

?>