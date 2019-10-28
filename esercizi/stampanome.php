<html><head>
<title>Esercizi_funzioni_predefinite_artesane</title>
</head>
<body>
<p>Oggi è il <?php echo date('d/m/Y')?> e sono le ore <?php echo date('h:i')?></p>
<?php
//inserire un variabile con il proprio nome, 
//stamparla a video con la scritta "ciao" e il nome
//creare la funzione stampa nome e stamparlo in grassetto
//esecutare la funzione stampa
//


$nome="francesco";
echo "ciao" . $nome . "<br><br><br>";
function stampa_nome($nome){
    
    echo "<br><br><strong> ciao". $nome."</strong><br><br><br>";
    
}
stampa_nome($nome);
?>
<?php
/*proviamo a fare una somma in  modo che il risultato ritorna,
 * per verifica stampiamo la somma la somma di due numeri
 */
function somma($a,$b){
    $somma=$a+$b;
    return $somma;
}
echo "<strong>" . somma(3, 8) . "Questo è il risultato</strong>";
$somma1=somma(6,9); // così possimao stampare una somma differente utilizzando la stessa funzione
echo "<p>Somma 1 invece risulta  $somma1    </p>";
?>
</body></html>