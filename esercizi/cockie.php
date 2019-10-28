<html>
<body>
<?php
/* CREAZIONE E LETTURA DI UN COCKIE
 * setcockie(name, value, expire, path,domain, secur, httponly);
 * 
 */
$mail=$_POST['mail'];
setcookie('first', "$mail",strtotime('+ 3 hours'));

echo $_COOKIE['first']. "questa è la tua mail";
?>
<p><a href="/esercizi/cockie.html">Indietro</a></p>

</body></html>