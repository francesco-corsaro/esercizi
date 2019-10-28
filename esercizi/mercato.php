<?php
/* Si vuole realizzare un servizio Web per la gestione dell’acquisto di un insieme di prodotti 
 * da parte di un utente. Il servizio prevede le seguenti pagine:

 1)un form in cui l’utente può inserire il nome del prodotto (una stringa) 
 e il numero di pezzi che vuole acquistare. Il form permette l’inserimento di un acquisto per volta 
 e l’inserimento di più acquisti avviene inviando più volte il form in una stessa sessione.
 2)una pagina di raccolta delle richieste di acquisto che memorizza sul server gli acquisti 
 fatti col form del punto 1. Si assume che se l’utente invia più di una volta il numero di pezzi per lo stesso prodotto 
 nella stessa sessione, il numero di pezzi è uguale all’ultimo valore inserito.
 3)una pagina di riepilogo che stampa la lista dei prodotti, il totale dei pezzi 
 e il prodotto per cui è richiesto il massimo numero di pezzi. Nel caso ci siano più prodotti 
 a cui corrisponde il valore massimo di pezzi si stampa il primo nella lista.

Si scrivano il form e le due pagine di prenotazione e riepilogo usando HTML/PHP. 
Si supponga di utilizzare il metodo GET nel form.

*/

session_start();
$_SESSION["mercatone"][$_REQUEST["prodotto"]] += $_REQUEST["quantita"]; 
?>
<html>
<head>
<meta charset="UTF-8">
<title>Mercatone Corsaro: conferma</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<?php include 'css_mercatone.php';?>
</head>
<body>
<div class="topnav"><h2 style="color:#0921FF; font-family: 'Work Sans', sans-serif; font-size:3vw;">Mercatone Corsaro! <em>La qualità è di casa</em></h2></div>
<div class="content"><p><em>Riepilogo Ordine</em></p>
<?php 
$prodotto=$_REQUEST["prodotto"];
$quantita=$_REQUEST["quantita"];
echo "<p>Hai selezionato: <em>$prodotto</em></p><p>Quantità:$quantita";
?>

<p><a class="a" href="mercato.html">Nuovo ordine</a>
<a class="a" href="mercato2.php">Lista prodotti venduti</a></p>
</div>
