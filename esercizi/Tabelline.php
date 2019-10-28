<html>
	<head>
	<link href="stile_pitagora.css" rel="stylesheet" type="text/css">
		<title>Le tabelline</title>
		/* Questo è il codice CSS inline per la table */
    table {border: 1px solid gray; border-collapse: collapse;}
    tr, td {border: 1px solid gray; border-collapse: collapse; padding: 5px; text-align: center;}
    table.tavola-pitagora td {height: 20px; width: 20px;}
	</head>
	<body bgcolor="#FEF6EB">
		<table bordercolor="orange" >
		
								
	<?php 	function riga($m,$i) {
			   for ($i = 1; $i <= 10; $i++) {
			        echo "<td>" .$i*$m . "</td>" ; } ;}
				
			$flag=0;
			if ($flag==0) {
			    
			     for ($o = 1; $o < 10; $o++) {
			    
			     echo "<tr>" . riga($o) . "</tr>";
			     }$flag=1;
			}
			elseif ($flag==1){
			    for ($o = 1; $o < 10; $o++) {
			        
			        echo "<tr bgcolor=\"#008000\">" . riga($o) . "</tr>";
			    } $flag=0 ;
			}
			?> 
			
		
        </table>
    </body>
</html>