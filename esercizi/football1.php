<?php
/*Si vuole realizzare un servizio Web per la gestione della raccolta dei risultati delle partite di calcio. Il servizio prevede le seguenti pagine:

un form in cui l'utente può inserire
1)il risultato della partita selezionando la squadra di casa e quella ospite da
un combobox generato dinamicamente a partire dalla lista delle squadre e
2)specificando i gol delle due squadre in due campi di testo
Il form permette l'inserimento di un risultato per volta e l'inserimento di più risultati avviene inviando più volte il form in una stessa sessione.
3)una pagina di raccolta dei risultati che memorizza sul server le partite inserite col form del punto 1. 
Si assume che se l'utente invia più di una volta un risultato per la stessa partita nella stessa sessione, il punteggio memorizzato è l'ultimo inserito.
4)una pagina di riepilogo che stampa la classifica ordinata e calcolata assegnando 3 punti per la vittoria, 1 per il pareggio e 0 per la sconfitta.
Si scrivano il form e le due pagine di prenotazione e riepilogo usando HTML/PHP. Si supponga di utilizzare il metodo POST nel form.
*/
session_start();
$_SESSION["football1"]
[$_REQUEST["casa"]]+= $_REQUEST["goal1"];
$_SESSION["football2"][1]
[$_REQUEST["ospite"]]  += $_REQUEST["goal2"];
$casa=$_REQUEST["casa"];
$ospite=$_REQUEST["ospite"];
?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>Pertite di calcio</title>
</head>
    <body>
    <div>
    <p>La partita: <?php echo $casa?>&nbsp; Vs &nbsp;<?php echo $ospite?></p>
    <p>è finita <?php echo $_REQUEST ["goal1"] ?> : <?php echo $_REQUEST ["goal2"]?>?</p>
    </div>
    <div>
    <p><a class="a" href="football2.php">Conferma</a>
	<a class="a" href="football_form.php">Torna indietro</a></p>
	</div>
	</body>
</html>