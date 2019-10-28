<?php /*Si vuole realizzare un servizio Web per la gestione della raccolta dei risultati delle partite di calcio. Il servizio prevede le seguenti pagine:

un form in cui l'utente può inserire 
1)il risultato della partita selezionando la squadra di casa e quella ospite da 
un combobox generato dinamicamente a partire dalla lista delle squadre e
 2)specificando i gol delle due squadre in due campi di testo. 
 Il form permette l'inserimento di un risultato per volta e l'inserimento di più risultati avviene inviando più volte il form in una stessa sessione.
una pagina di raccolta dei risultati che memorizza sul server le partite inserite col form del punto 1. Si assume che se l'utente invia più di una volta un risultato per la stessa partita nella stessa sessione, il punteggio memorizzato è l'ultimo inserito.
una pagina di riepilogo che stampa la classifica ordinata e calcolata assegnando 3 punti per la vittoria, 1 per il pareggio e 0 per la sconfitta.
Si scrivano il form e le due pagine di prenotazione e riepilogo usando HTML/PHP. Si supponga di utilizzare il metodo POST nel form.
*/    
?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>Pertite di calcio</title>
</head>
    <body>
<h2>I risultati pazzi</h2>
    <?php $squadre=array(Atalanta,Bologna,Cagliari,Chievo,Empoli,Fiorentina,Frosinone,Genoa,Inter,Juventus,Lazio,Milan,Napoli,Parma,Roma,Sampdoria,Sassuolo,Spal,Torino,Udinese);?>
    <p>Inserire i nomi delle squadre e i risultati nei box</p>
<form action="football1.php" method="post"  >
    <input name="casa" type="text" list="browsers" placeholder="Atalanta"/>

	<datalist id="browsers">
    	<?php 
    	foreach ($squadre as $squadra) {
    	    echo "<option value=\"$squadra\">";
    	}
    	?>
    </datalist>
    Vs
	<input name="ospite" type="text" list="browsers" placeholder="Atalanta"/>
	<datalist id="browsers">
    	<?php 
    	foreach ($squadre as $squadra) {
    	    echo "<option value=\"$squadra\">";
    	}
    	?>
    </datalist>
	
	 <input name="goal1" type="TEXT" placeholder="Risultato">
	  <input name="goal2" type="TEXT" placeholder="Risultato" >
<br>
<p><input type="submit" value="Invia"/></p>
</form>
    </body>
   
</html>