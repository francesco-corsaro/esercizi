<?php
session_start();  /*faccio partire una nuova sessione*/

/*definisco le variabili*/

    $_SESSION[colore]='giallo';
    $_SESSION[tipo]='ombrello';
    
    $_SESSION[eta]='15';
    /*$_REQUEST['sposa'];*/
?>

<html>
<head>
<title></title>
</head>
<body>
<?php /*utilizzo solo le prime variabili*/?>
<h1>Prova di una session_start()</h1>
<p>Il colore è <?php echo $_SESSION[colore];?></p>
<p>L'oggetto è un <?php echo $_SESSION[tipo];?></p>
<?php /*Ricordati di mettere echo per visualizzare le variabili*/?>
<p>Egli ha <?php echo $_SESSION[eta];?> </p>
<form action="demo2_sessionstart.php" method="post">
<p>sei sposato? <input checked="checked" name="sposa" type="radio" value="Si"/>SI  ||
				<input checked="checked" name="sposa" type="radio" value="Non"/>NO</p>
<p><input type="submit" value="Invia"/></p>
</form>
<a href="demo2_sessionstart.php">Demo 2</a>
<?php 
echo $_REQUEST['sposa'].'sei sposato';
?>
</body>
</html>