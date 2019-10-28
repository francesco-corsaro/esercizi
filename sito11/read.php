<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Scheda_di_controllo</title>
    <meta name="description" content="Roughly 155 characters">
    <link rel="stylesheet" type="text/css" href="mystyle.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
    <script src="script.js"></script>
  </head>
  <body>
<?php
$tuo_nome=$_POST ['nome'];
$cognome=$_POST['cognome'];
$eta=$_POST['age'];
$gen=$_POST['gene'];
$y_mail=$_POST ['mail'];
$problema=$_POST['problema'];
//$cantante1=$_POST ['c1'];
//$cantante2=$_POST ['c2'];
//$cantante3=$_POST ['c3'];
$cantanti=$_POST ['c'];
$commenti=$_POST['note'];
?>

<h1>Ciao</h1><?php echo "$tuo_nome $cognome"?>
<p>La tua email <em><?php echo $y_mail ?> è stata registrata con successo!  </em></p> 
<p><h3>Diseguito i dati da te inseriti</h3></p>
<p>Genere: <?php echo $gen?>&emsp;Età:<?php echo $eta?>&nbsp;anni</p>
<p>Il problema da te individuato è: <?php echo $problema?></p>
<p>Eventuali commenti <?php echo $commenti ?></p>

<p>Sei venuto a conoscenza dell'associazione tramite: <?php foreach ($cantanti as $modo){
    echo $modo. '<br />';
}
?></p>
</body>
</html>

