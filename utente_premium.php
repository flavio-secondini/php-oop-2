<?php
  class Premium extends Utente {
    public $sconto_premium;

    public function __construct ($nome, $cognome, $carta_credito, $sconto_premium) {
      $this->nome = $nome;
      $this->cognome = $cognome;
      $this->carta_credito = $carta_credito;
      $this->sconto_premium = $sconto_premium;
    }

    public function setScontoPremium($sconto_premium) {
      $this->sconto_premium = $sconto_premium;
    }
  }
?>
