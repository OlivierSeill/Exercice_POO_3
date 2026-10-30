<?php

class BilletEnfant extends BilletPleinTarif{
    //ATTRIBUT
    private int $age;

    //CONSTRUCTEUR
public function __construct(int $newNumero, float $newPrix, Seance $newSeance, int $newAge){
        parent::__construct($newNumero, $newPrix, $newSeance);
        $this->age = $newAge;
    }

    //GETTER et SETTER
    public function getAge():int{
        return $this->age;
    }

    public function setAge(int $newAge):void{
        $this->age = $newAge;
    }

    //METHOD
    public function calculerPrix():float{
        return parent::calculerPrix();
    }
    /*
    public function calculerPrixEnfant(int $age):float{
        $this->age = $age;
        return $this->getPrix();
    }
    */
}

?>