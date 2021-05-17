<?php
 class Utente {
   private $nome;
   private $cognome;
   private $carta_credito;

   private $prodotti = []; //prodotti comprati dall'utente

   public function __construct ($nome, $cognome, $carta_credito) {
     $this->nome = $nome;
     $this->cognome = $cognome;
     $this->carta_credito = $carta_credito;
   }

   public function setNome($nome) {
     $this->nome = $nome;
   }
   public function getNome($nome) {
     return $this->nome;
   }

   public function setCognome($cognome) {
     $this->cognome = $cognome;
   }
   public function getCognome($cognome) {
     return $this->cognome;
   }

   public function setCartaCredito($carta_credito) {
     $this->nome = $carta_credito;
   }
   public function getCartaCredito($carta_credito) {
     return $this->carta_credito;
   }

   public function insertProdotto($prodotto) {
     $this->prodotti[] = $prodotto;
   }
   public function getProdotti() {
     return $this->prodotti;
   }
 }
?>
