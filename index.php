<?php
require_once __DIR__. '/ProdottoCane.php';
require_once __DIR__. '/CiboCane.php';
require_once __DIR__. '/Cuccia.php';
require_once __DIR__. '/Tappetini.php';
require_once __DIR__. '/Utente.php';
require_once __DIR__. '/UtentePremium.php';


$crocchetteDelux = new CiboCane('Crocchette Deluxe','Monge',20,30);
var_dump($crocchetteDelux);
$cucciaDomus = new Cuccia ('Cuccia Domus', 'Ferplast', 18);
var_dump($cucciaDomus);

$gianni = new Utente();
$gianni->aggiungiProdotto($crocchetteDelux);
var_dump($gianni);

$carlo = new UtentePremium ('Carlo', 'carlo@email.it');
var_dump($carlo);
?>

