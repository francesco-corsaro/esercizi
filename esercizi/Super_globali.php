<?php
/*
 * eSISTO GIA E SONO ACCESSIBILI DA QUALSISI PUNTO DEL NOSTRO SCRIPT
 * 
 * 
 * $GLOBALS mantiene il riferimento di tutte le variabili definite nello scope globale
 * $_SERVER
 * $_GET
 * $_POST
 * $_FILES
 * $_COCKIE
 * $_SESSION
 * $_REQUEST
 * $_ENV
 */

//globals questa funzione permette di usufruire delle variabili quando si usano le function
$var='ciao mondo';
echo $var;

echo "<br />";

echo $GLOBALS ['var'];

echo "<br />";
function test() {
    //echo =$var; se metto questo mi da errore perchè la variabile è definita fuori
    global $var; //aggiungendo la parola global la variabile può essere utilizzata
    echo $var;
    ;
}
test();
echo "<br />";
// SERVER ATTRAVERSO QUESTA FUNZUIONE POSSIAMO VEDERE QUELLO CHE SCAMBIANO SERVER E CLIENT





?>