<?php

include_once __DIR__. '/Product.php';

class PetFood extends Product {
    public $scadenza;
  
    function __construct($parametri) {

        parent::__construct($parametri);
            $this->scadenza = $parametri['scadenza'];
    }
}

