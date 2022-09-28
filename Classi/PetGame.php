<?php

include_once __DIR__. '/Product.php';
include_once __DIR__. '/../Trait/CodiceSpedizione.php';

class PetGame extends Product {

    use CodiceSpedizione;
    public $colore;
    public $nome_gioco;
  
    function __construct($parametri) {

        parent::__construct($parametri);
            $this->colore = $parametri['colore']; 
            $this->nome_gioco = $parametri['nome_gioco'];
            $this->setCodice($parametri['codice_spedizione']);
    }
}