<?php

include_once __DIR__. '/Product.php';


class Ordine { 
    public $prezzo_totale;

    function __construct($prezzo_totale) {
        $this->getPrezzoFinale($prezzo_totale);
    }

    public function getPrezzoFinale($array) {

        // foreach($array as $el) {
        //     $this->prezzo_totale = $el->prezzo * $el->quantita;
        // }

        for($i=0; $i < count($array); $i++) {
            $this->prezzo_totale = $array[$i]->prezzo * $array[$i]->quantita;
        }
    }
}
