<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Frameset//EN">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>Squadre di calcio</title>
</head>

    <body>
    <p><h1>Squadre di calcio</h1></p>
    <p>Seleziona la tua squadra e scopri quanti scudetti aveva vinto nel 1987.</p>
    <form action="/array_form/programmino.php" method="post"  >
    <select name="squadre" placeholder="Seleziona squadra"> 
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
   echo "<option value=\"$chiave\" > $chiave </option>" ;
}
?>
	<br>
	<p><input type="submit" value="invia"/></p>

  </select> <br />                      
    
    
	</form>
    </body>
    
</html>