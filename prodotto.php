<?php

class Prodotto {
    public $nome;
    public $prezzo;
    public $immagine;
    

    function __construct($nome, $prezzo, $immagine) {

        $this->nome = $nome;
        $this->prezzo = $prezzo;
        $this->immagine = $immagine;
    }


}

?>