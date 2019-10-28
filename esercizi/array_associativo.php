<?php
$elenco_squadre=array();
$elenco_squadre["Ascoli"]=0;
$elenco_squadre["Atalanta"]=0;
$elenco_squadre["Avellino"]=0;
$elenco_squadre["Brescia"]=0;
$elenco_squadre["Como"]=0;
$elenco_squadre["Empoli"]=0;
$elenco_squadre["Fiorentina"]=2;
$elenco_squadre["Inter"]=12;
$elenco_squadre["Juventus"]=22;
$elenco_squadre["Milan"]=10;
$elenco_squadre["Napoli"]=0;
$elenco_squadre["Roma"]=2;
$elenco_squadre["Sampdoria"]=0;
$elenco_squadre["Torino"]=7;
$elenco_squadre["Udinese"]=0;
$elenco_squadre["Verona"]=1;

while (list($chiave, $valore)= each($elenco_squadre)) {
   echo "<p>La $chiave ha vinto $valore scudetti" ;
}



?>