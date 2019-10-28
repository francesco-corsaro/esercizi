<?php
$domanda='alfio';
$pregunta='tanuzzo';
$itre="$pregunta e $domanda hanno il miglior gingi";
$valentino="./fotine/183-1839356_download-png-moto-valentino-rossi-png.png";
echo "<p><h1>Goodmorning world</h1></p><p> $pregunta ha il gingi migliore di $domanda</p><p>$itre</p>" ;

?> 
<html>
<head>
    <meta charset=”UTF-8”/>
    <title> Gommone</title>
    <link href="https://fonts.googleapis.com/css?family=Bree+Serif&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Comfortaa&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Righteous&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Catamaran&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Cormorant+Garamond&display=swap" rel="stylesheet">
        <style type=”text/css”>

    .sitle {font-family: 'Bree Serif', serif;}
    .jac {font-family: 'Comfortaa', cursive;}
  .tor {font-family: 'Righteous', cursive;}
  .cta{font-family: 'Catamaran', sans-serif;}
  .gor{font-family: 'Cormorant Garamond', serif;}
</style>
</head>
<body>
<h1>Stiamo volando</h1>
  <img src="<?php echo $valentino?>" width="209px" height="209px" >
<br>La data corrente è: <?php echo date("d;m;y") ?>
<br>L'ora corrente è: <?php echo date("h:i:s") ?>
  
  </body>
</html>
  
