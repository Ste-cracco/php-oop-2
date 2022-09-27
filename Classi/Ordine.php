<?php

include_once __DIR__. '/Product.php';


class Ordine { 
    public $prezzo_totale;
    public $costo_spedizione;
    public $volume;

    function __construct($prezzo_totale) {
        $this->getPrezzoFinale($prezzo_totale);
        $this->getCostoSpedizione($prezzo_totale);

    }

    public function getPrezzoFinale($array) {

        // foreach($array as $el) {
        //     $this->prezzo_totale = $el->prezzo * $el->quantita;
        // }

        for($i=0; $i < count($array); $i++) {
            $this->prezzo_totale += $array[$i]->prezzo * $array[$i]->quantita;
        }
    }

    public function getCostoSpedizione($array) {
        for($i=0; $i < count($array); $i++) {
            $this->volume += $array[$i]->volume;
        }
        
        if($this->prezzo_totale > 200 ) {
            $this->costo_spedizione = 0;
        } else if($this->volume < 100) {
            $this->costo_spedizione = 10;
        }
        else if($this->volume >= 100 && $this->volume < 199) {
            $this->costo_spedizione = 50;
        }
        else if($this->volume >= 200 && $this->volume < 299) {
            $this->costo_spedizione = 80;
        }
        else if($this->volume >= 300) {
            $this->costo_spedizione = 50;
        }
    }
}
