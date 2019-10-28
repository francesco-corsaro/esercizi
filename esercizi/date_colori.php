<?php
/* elaborare un programma che da il benvenuto all'utente cambiando il colore della scitta in base al giorno della settimana
 * Lunedi=rosso color: #F10404;
 * Martedi=arancione color: #FF7904;
 * mercoledì=giallo  color: #F7FF18 ;
 * giovedì=verde color: #10FF20;
 * venerdi=blu1 color: #50A2FF;
 * sabato=viola color: #952978;
 * domenica=nero
 *  
 * stringa per colorare frasi sotto php --> echo " <font color= #FF7904>TESTO</font> <br />";
 * 
 * 1)utilizzare la funzione date("w") per stabilire il giorno della settimana. 
 * NB:domenica ha valore 0 lunedi valore 1 e così via
 * 2)verificare a quale giorno corrisponde se lunedi martedi o ecc..
 * 3)stampare il messaggio di benvenuto
 * 
 * messaggio di benvenuto " Buongiorno Utente, oggi è il xx/xx/xxxx "
 */
$oggi=strtotime("now");
$oggconv=date("d/m/Y", $oggi);
$utente="francesco";

//con i seguenti script possiamo inserire il giorno della settimana in italiano
$giorni = array("Domenica", "Lunedì", "Martedì", "Mercoledì", "Giovedì", "Venerdì", "Sabato");
$giorno=date("w");
$nome_giorno = $giorni[$giorno];

$messaggio="<p><strong>Ciao!</strong> $utente</p><p>Oggi è $nome_giorno $oggconv";
if($giorno==4){
echo "<font color= #FF7904>$messaggio</font> <br />";
}
if ($giorno==0) {
    echo $messaggio;
};
if ($giorno==1) {
    echo "<font color=#F10404 >$messaggio</font> <br />" ;
}
if ($giorno==2) {
    echo "<font color= #FF7904 >$messaggio</font> <br />" ;
}
if ($giorno==3) {
    echo "<font color= #F7FF18 >$messaggio</font> <br />"  ;
}
if ($giorno==5) {
    echo "<font color= #50A2FF >$messaggio</font> <br />"  ;
}
if ($giorno==6) {
    echo "<font color= #952978 >$messaggio</font> <br />"   ;
}




?>