<?php
session_start();
$_SESSION[persona]=Frank;
$_POST["sposa"];
$si="Si";
$no='Non';
/*$_REQUEST['sposa'];*/?>
<html>
<head>
<title></title>
</head>
<body>
<h1>Prova di una session_start()</h1>
<?php /*definisco la variabile nome (questa cosa non funziona
$nome='Andrea';*/?>
<?php /*utilizzo altre due variabili session*/?>
<p>Il colore è <?php echo $_SESSION[colore];?></p>
<p>L'oggetto è un <?php echo $_SESSION[tipo];?></p>
<p>Il proprietario è <?php echo $_SESSION[persona]; /*qui dico di mostrare la variabile globale*/?></p>

<p><?php echo $_POST["sposa"];  ?> sei sposato</p>
<p><?php 
    /*Per rendere globale una variabile arrivata da post 
     * basta conforntarla con una presente in questa paggina
     * è assegnarli un valore da ricordare nelle prossime pagine
     */
    if ($_POST["sposa"]==$si) {
        echo $si.'sei sposato';
        $_SESSION[sposato]='sei sposato';
    } else {
        echo $no. ' sei sposato';
        $_SESSION[sposato]='non sei sposato';
    }  ?></p>

<br><br>
<a href="demo_sessionstart.php">Demo 1</a>

<br>
<a href="demo3_sessionstart.php">Demo 3</a>
<br>
<?php var_dump($_POST["sposa"]);?>

</body>
</html>