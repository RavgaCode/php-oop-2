<?php
require_once __DIR__. '/Utente.php';

class UtentePremium extends Utente{
    public $nome;
    public $email;
    // override
    public $sconto = 20;
    
    public function __construct($_nome, $_email){
        $this->nome = $_nome;
        $this->email = $_email;
    }
}


?>