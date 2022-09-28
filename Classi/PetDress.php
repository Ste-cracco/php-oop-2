<?php

include_once __DIR__. '/Product.php';
include_once __DIR__. '/../Trait/CodiceSpedizione.php';

class PetDress extends Product {

    use CodiceSpedizione;
    public $taglia;
    public $materiale;
  
    function __construct($parametri) {

        parent::__construct($parametri);
            $this->taglia = $parametri['taglia']; 
            $this->materiale = $parametri['materiale'];
            $this->setCodice($parametri['codice_spedizione']);
    }
}