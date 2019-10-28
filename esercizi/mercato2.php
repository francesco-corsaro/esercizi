<?php
/*una pagina di riepilogo che stampa la lista dei prodotti, il totale dei pezzi 
 e il prodotto per cui è richiesto il massimo numero di pezzi. Nel caso ci siano più prodotti 
 a cui corrisponde il valore massimo di pezzi si stampa il primo nella lista.
 */
session_start();
$_SESSION["mercatone"]//[$_REQUEST["prodotto"]] += $_REQUEST["quantita"];
?>
<html>
<head>
<title>Lista aquisti</title>
<?php include 'css_mercatone.php';?>

</head>
<body>
<div class="topnav"><h2 style="color:#0921FF; font-family: 'Work Sans', sans-serif; font-size:3vw;">Lista prodotti venduti</h2></div>
<div class="content">
<?php 
foreach ($_SESSION["mercatone"] as $prodotto=>$quantita){
    echo "$prodotto: quantità $quantita  <br />";
    $tot += $quantita;  //$tot +=$quantita fa la somma di tutti i valori all'interno del ciclo
    if ($quantita>$qmax) {
        $qmax=$quantita;
        $prodX=$prodotto;
    }
}
    //var_dump($_SESSION["mercatone"]);
?>
<p>Il prodotto più ventuto è <?php echo $prodX ?></p>
<p>Sono stati venduti <?php echo $tot?> prodotti</p>
<p><a class="a"href="mercato.html">Nuovo ordine</a>
<a class="a" href="mercato.php">Riepilogo ordine</a></p>
</div>
</body>
</html> 