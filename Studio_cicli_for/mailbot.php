<?php
$mittente=$_POST ['mit'];
$destinatario=$_POST['dest'];
$oggetto=$_POST['ogg'];
$corpo=$_POST['corpo'];

if (mail($destinatario, $oggetto, $corpo, $mittente))
    echo "Messaggio inviato con successo a " . $destinatario;
    else
        echo "Errore. Nessun messaggio inviato.";
        ?>
