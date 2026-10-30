<?php

class BilletPleinTarif{
    //ATTRIBUT : encapsulation typage nom_variable
    private int $numero;
    private float $prix;
    private Seance $seance;


    //CONSTRUCTEUR
    public function __construct(int $newNumero, float $newPrix, Seance $newSeance){
        $this->numero = $newNumero;
        $this->prix = $newPrix;
        $this->seance = $newSeance;
    }

    //GETTER ET SETTER
    public function getNumero():int{
        return $this->numero;
    }
    public function setNumero(int $newNumero):void{
        $this->numero = $newNumero;
    }

    public function getPrix():float{
        return $this->prix;
    }
    public function setPrix(float $newPrix):void{
        $this->prix = $newPrix;
    }

    public function getSeance():Seance{
        return $this->seance;
    }
    public function setSeance(Seance $newSeance):void{
        $this->seance = $newSeance;
    }

    //METHODES
    public function calculerPrix():float{
        return $this->prix;
    }
    
    public function imprimerDetails():void{
        $details="Séance numéro du".$this->getSeance()->getDate()." à ".$this->getSeance()->getHeure()." pour le film : ".$this->getSeance()->getFilm().". Numéro de billet :".$this->getNumero();
        
        echo($details);
    }
}
