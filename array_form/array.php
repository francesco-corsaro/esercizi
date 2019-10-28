<?php

$str='Ciao amici';
$ris=strpos($str, 'a');
var_dump($ris); // Restituisce la prima  posizione del carattere cercato 
$ris2=strrpos($str, a);//restituisce la ultima occorrenza del criterio ricercato
var_dump($ris2) ;

echo "<br />";
$frase='ciaoò sono Francesco';
$row=substr($frase, 3,-2); //con substr posso eleminare da una stringa elementi in base alla posizione
echo $row;
/* 
 * array_pop () rimuove l'ultimo elemento
 * array_shift () rimuove il primo elemento
 * array_push ()inserisce un o più elementi alla fine dell'array
 * array_unishift () inserisce uno o più elementi all'inizio dell'array
 * array_search () cerca un valore all'interno di un array
 * in_array() stesso comportamento di array search
 * array_key_exists() d se un chiave è presente all'interno di un array
 * array_merge() unisce differenti array
 * array_diff() considera 2 o più array e ritorno gli elementi che non sono in comune
 */
echo "<br><br>";
$arr= array(10,a,2,4,'b'=>20);
$ris0=array_search(a, $arr);
var_dump($ris);
echo "<br>";

$ris3=explode(' ', $str);
echo "<br>$ris3 <br>";
var_dump($ris3);




?>