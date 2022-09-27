<?php

class Product {
    public $nome;
    public $descrizione;
    public $prezzo;
    public $quantita;
    public $volume;

    function __construct($parametri) {
        $this->nome = $parametri['nome']; 
        $this->descrizione = $parametri['descrizione']; 
        $this->prezzo = $parametri['prezzo']; 
        $this->quantita = $parametri['quantita']; 
        $this->volume = $parametri['volume']; 
    }
}