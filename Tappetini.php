<?php
require_once __DIR__.'/ProdottoCane.php';
require_once __DIR__. '/Fornitore.php';

class Tappetini extends ProdottoCane{
    use Fornitore;

    public $categoria = 'Accessori';
    public $pezzi;

    // override
    public function __construct($_modello, $_marca, $_prezzo,$_pezzi){
        $this->modello = $_modello;
        $this->marca = $_marca;
        $this->prezzo = $_prezzo;
        $this->pezzi = $_pezzi;
    }
}
?>