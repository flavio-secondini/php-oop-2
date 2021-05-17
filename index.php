<?php
 require_once './utente.php';
 require_once './prodotto.php';
 require_once './offerta.php';
 require_once './utente_premium.php';

 $utente = new Utente ('Mario', 'Rossi', 'Mastercard');

 $prodotto_1 = new Prodotto ('Aspirapolvere', 'Elettrodomestici', 80);
 $prodotto_2 = new Prodotto ('microonde', 'Elettrodomestici', 40);

 $offerta = new Offerta ('20%', 'offerta123');

 $utente_premium = new Premium ('Fabio', 'Bianchi', 'Postepay', '10%');

 var_dump($utente);
 var_dump($prodotto_1);
 var_dump($prodotto_2);
 var_dump($offerta);
 var_dump($utente_premium);

 $utente->insertProdotto($prodotto_2);

 var_dump($utente);
?>
