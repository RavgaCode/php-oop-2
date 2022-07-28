<?php
require_once __DIR__. '/ProdottoCane.php';
require_once __DIR__. '/CiboCane.php';
require_once __DIR__. '/Cuccia.php';

$crocchetteDelux = new CiboCane('Crocchette Deluxe','Monge',20,30);
var_dump($crocchetteDelux);
$cucciaDomus = new Cuccia ('Cuccia Domus', 'Ferplast', 18);
var_dump($cucciaDomus);
?>