<?php
  class Prodotto {
    private $nome;
    private $categoria;
    private $prezzo;

    public function __construct ($nome, $categoria, $prezzo) {
      $this->nome = $nome;
      $this->categoria = $categoria;
      $this->prezzo = $prezzo;
    }

    public function setNome($nome) {
      $this->nome = $nome;
    }
    public function getNome($nome) {
      return $this->nome;
    }

    public function setCategoria($categoria) {
      $this->categoria = $categoria;
    }
    public function getCategoria($categoria) {
      return $this->categoria;
    }

    public function setPrezzo($prezzo) {
      $this->prezzo = $prezzo;
    }
    public function getPrezzo($prezzo) {
      return $this->prezzo;
    }
  }
?>
