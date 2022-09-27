<?php

include_once __DIR__. '/Product.php';

class PetGame extends Product {
    public $colore;
    public $nome_gioco;
  
    function __construct($parametri) {

        parent::__construct($parametri);
            $this->colore = $parametri['colore']; 
            $this->nome_gioco = $parametri['nome_gioco'];
    }
}