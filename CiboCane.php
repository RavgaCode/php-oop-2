<?php
require_once __DIR__. '/ProdottoCane.php';

class CiboCane extends ProdottoCane{
    public $peso;
    public $categoria ='Cibo per cani';

    // override
    public function __construct($_modello, $_marca, $_prezzo, $_peso){
        $this->modello = $_modello;
        $this->marca = $_marca;
        $this->prezzo = $_prezzo;
        $this->peso = $_peso;
    }
}

?>