<?php
if (mail($destinatario, $oggetto, $corpo, $mail_headers))
    echo "Messaggio inviato con successo a " . $destinatario;
    else
        echo "Errore. Nessun messaggio inviato." ;