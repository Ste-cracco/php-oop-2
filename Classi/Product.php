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
        try {
            $this->setQuantita($parametri['quantita']);
        } catch(Exception $e) {
            echo $e->getMessage();
        }
        $this->volume = $parametri['volume']; 
    }

    public function setQuantita($quantita) {
        if (is_int($quantita)) {
            $this->quantita = $quantita;
        } else {
            // segnalare errore
            throw new Exception('La quantità inserita non è valida');
        }
    }
}