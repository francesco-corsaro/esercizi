<?php
$mittente=$_POST ['mit'];
$destinatario=$_POST['dest'];
$oggetto=$_POST['ogg'];
$corpo=$_POST['corpo'];
$mail_headers = "From:$mittente " .  " <" .  $mittente . ">\r\n";
$mail_headers .= "Reply-To: " .  $mittente . "\r\n";
$mail_headers .= "X-Mailer: PHP/" . phpversion();
mail($destinatario, $oggetto, $corpo, $mail_headers);



        
echo " il messaggio lo manda $mittente <br />";
echo"il messaggio arriva a $destinatario <br />";
echo"<a href=\"form_mail.html\">Indietro</a>";
    
        ?>
