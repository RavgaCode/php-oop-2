<?php
class ProdottoCane{
    public $modello;
    public $marca;
    public $prezzo;
    public $descrizione;

    public function __construct($_modello, $_marca, $_prezzo){
        $this->modello = $_modello;
        $this->marca = $_marca;
        $this->prezzo = $_prezzo;
    }
    public function getBasicInfo(){
        return "$this->modello - Prezzo: $this->prezzo Euro";
    }
}


?>