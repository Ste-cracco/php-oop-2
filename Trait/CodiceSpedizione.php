<?php

trait CodiceSpedizione {

    public $codice_spedizione;

    public function setCodice($codice_spedizione) {
        $this->codice_spedizione = $codice_spedizione;
    }

    public function getCodice() {
        return $this->codice_spedizione;
    }
}
