<html>
<body>
<h1>Esercizi sulle date e sull'orario</h1>
<br>Che giorno è?<?php echo date("d/m/y") ?>
<br>Che ore sono? <?php echo date("H:i:s")?>
<br>La mia data di nascita in UNIX è: <?php echo mktime(0,0,0,5,18,1990)//data?>
<br>Sono nato il 18/05/1990
<?php 
$data_isc=mktime (0,0,0,07,07,2019);//data predefinita dal programmatore
$data_oggi= mktime (0,0,0,date("m"),date("d"),date("Y"));// data di oggi in UNIX
$diff=$data_oggi-$data_isc;//PHP fa le operazioni solo in unix
echo "<br>Studio web design da $diff secondi";
$giorni=floor($diff/86400);
echo "<br>studio web design da $giorni giorni";
?>
<div>

 
Fra 15 giorni sarà il:
<?php 
// stringa per la scadenza
echo  date("d/m/y",mktime (0,0,0,date("m"),date("d")+15,date("Y")));
?>
</div>
<div>

<?php 
$scaddate=floor($data_isc/84600);
$scadenza=date("$data_isc", mktime (0,0,0,date("m"),date("d")+60,date("Y")));//così facciamo i calcoli con le date
$ggscad=floor($scadenza/86400);//conversioni secondi in giorni
echo "Il corso scade il: $ggscad";

?>
</div>





</body>
</html>