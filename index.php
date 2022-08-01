<?php
require_once __DIR__. '/ProdottoCane.php';
require_once __DIR__. '/CiboCane.php';
require_once __DIR__. '/Cuccia.php';
require_once __DIR__. '/Tappetini.php';
require_once __DIR__. '/Utente.php';
require_once __DIR__. '/UtentePremium.php';

// Creo dei nuovi prodotti
$crocchetteDelux = new CiboCane('Crocchette Deluxe','Monge',20,30);
var_dump($crocchetteDelux);
$cucciaDomus = new Cuccia ('Cuccia Domus', 'Ferplast', 18);
var_dump($cucciaDomus);
$tappetiniSuper = new Tappetini ('Tappetini Super','Next',10,30);

// Metto i prodotti creati in un array
$catalogo = array($crocchetteDelux,$cucciaDomus,$tappetiniSuper);
var_dump($catalogo);

// Creo dei nuovi utenti
$anonimo = new Utente();
$anonimo->aggiungiProdotto($crocchetteDelux);
$anonimo->saldo = 3000;
var_dump($anonimo);

$carlo = new UtentePremium ('Carlo', 'carlo@email.it');
$carlo->aggiungiProdotto($cucciaDomus);
$carlo->aggiungiProdotto($tappetiniSuper);


try{
    if ($carlo->effettuaPagamento() ==="Pagamento andato a buon fine"){
        "Pagamento andato a buon fine";
    }
} catch (Exception $e){
     echo("Saldo non disponibile");
}
var_dump($carlo);


$listaUtenti = array($anonimo, $carlo);



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ArcaBooleanet</title>
</head>
<body>
    <div class="product-columns">
        <h2>Catalogo prodotti</h2>
        <?php foreach($catalogo as $prodotto) {?>
        <div class="product-col">
            <h3><?php echo($prodotto->getBasicInfo())?></h3>
        </div>
        <?php }?>
    </div>
    <hr>
    <div class="user-columns">
        <h2>Zona Utenti</h2>
        <?php foreach($listaUtenti as $user) {?>
            <div>
            <h3><?php echo($user->welcome());?></h3>
            <h5>Esito: <?php echo($user->effettuaPagamento());?></h5>
            <?foreach($user->prodottiScelti as $prodotto){?>
            <h5><?php echo($prodotto->getBasicInfo()) ?></h5>
            <?php }?>
            </div>
        <?php }?>
    </div>
</body>
</html>