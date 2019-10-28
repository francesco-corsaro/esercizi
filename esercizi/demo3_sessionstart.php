<?php
session_start();
$_SESSION[sposato];
/*$_SESSION["controllo"]='si';*/
/*$_REQUEST['sposa'];*/
$si='si';
$no='non';
?><html>
<head>
<title></title>
</head>
<body>
<h1>Prova di una session_start()</h1>
<?php /*utilizzo un altra variabile session della prima demo*/?>
<p>Il colore è <?php echo $_SESSION[colore];?></p>
<p>L'oggetto è un <?php echo $_SESSION[tipo];?></p>
<p>Il proprietario è <?php echo $_SESSION[persona];/*qui la varibile persona la chiamo 
                                                        come una variabile globale $session */?>
<p>Egli ha <?php echo $_SESSION[eta];?> </p>
    <p><?php
        /*qui utilizzo la variabile mandata per $_POST della pagina precedente*/     
    echo $_SESSION['sposato'];  ?></p>
    <br>
<a href="demo_sessionstart.php">Demo 1</a>
<br>
<a href="demo2_sessionstart.php">Demo 2</a>
<br>
<?php var_dump($_SESSION['sposato']);?>
</body>
</html>