<?php

include_once __DIR__. '/Product.php';
include_once __DIR__. '/../Trait/CodiceSpedizione.php';

class PetFood extends Product {

    use CodiceSpedizione;
    public $scadenza;
  
    function __construct($parametri) {

        parent::__construct($parametri);
            $this->scadenza = $parametri['scadenza'];
            $this->setCodice($parametri['codice_spedizione']);
    }
}

