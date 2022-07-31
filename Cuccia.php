<?php
require_once __DIR__. '/ProdottoCane.php';
require_once __DIR__. '/Fornitore.php';

class Cuccia extends ProdottoCane{
    use Fornitore;

    public $categoria = 'Cuccia';
}
?>