<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Frameset//EN">
<html>
<head>

<title>Insert title here</title>
 
<link href="stile_pitagora.css" rel="stylesheet" type="text/css">
</head>

    <body>
    <p>This page uses frames. The current browser you are using does not support frames.</p>
    <?php
    // Inizio tabella
    echo '<table class="tavola-pitagora">';
    for ($i=1; $i<=10; $i++) {
        // Inizio riga
        echo '<tr>';
        for ($j=1; $j<=10; $j++) {
            // Stampa cella con il valore calcolto come prodotto $i*$j
            echo '<td>' . $i*$j . '</td>';
        }
        // Fine riga
        echo '</tr>';
    }
    echo '</table>';
    // Fine tabella
    ?>
	
    </body>
    
</html>