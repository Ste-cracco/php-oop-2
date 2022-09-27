<?php

include_once __DIR__. '/Product.php';

class PetDress extends Product {
    public $taglia;
    public $materiale;
  
    function __construct($parametri) {

        parent::__construct($parametri);
            $this->taglia = $parametri['taglia']; 
            $this->materiale = $parametri['materiale'];
    }
}