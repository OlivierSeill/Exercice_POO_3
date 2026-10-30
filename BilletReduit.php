<?php

class BilletReduit extends BilletPleinTarif{
    //ATTRIBUT
    private string $justificatif;

    //CONSTRUCTEUR
    public function __construct(int $newNumero, float $newPrix, Seance $newSeance, string $newJustificatif){
        parent::__construct($newNumero, $newPrix, $newSeance);
        $this->justificatif = $newJustificatif;
    }

    //GETTER et SETTER
    public function getJustificatif():string{
        return $this->justificatif;
    }

    public function setJustficatif(string $newJustificatif):void{
        $this->justificatif = $newJusitificatif;
    }

    //METHOD
     public function calculerPrix():float{
        return parent::calculerPrix()*30/100;
    }
    /*
    public function calculerPrixReduit(string $justificatif):float{
        $this->justificatif = $justificatif;
        return $this->getPrix()*30/100;
    }
    */
}

?>