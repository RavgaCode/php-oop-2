<?php

class Utente{
    public $sconto = 0;
    public $nome = 'Straniero';
    public $saldo = 0;
    public $welcome = 'Benvenuto Straniero';
    public $prodottiScelti = [];
    
    public function welcome(){
        return "Benvenuto $this->nome";
    }
    public function aggiungiProdotto($prodotto) {
        $this->prodottiScelti[] = $prodotto;
    }
    
    public function getProdottiScelti() {
        return $this->prodottiScelti;
    }
    public function calcolaPrezzoTotale() {
        
        $sommaTotale = 0;
        foreach($this->prodottiScelti as $prodotto) {
            $sommaTotale += $prodotto->prezzo;
        }
    
        
        $sommaTotale -= $sommaTotale * $this->sconto / 100;
    
        return $sommaTotale;
    }
    public function effettuaPagamento() {
        $totaleDaPagare = $this->calcolaPrezzoTotale();
        var_dump($totaleDaPagare);
    
        if($this->saldo < $totaleDaPagare) {
            die('Saldo non disponibile');
        } else {
            return 'ok';
        }
    }
}

?>