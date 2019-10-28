<html><head>
<title>colori
</title></head>
<body>
<p style= "color:#FF7904;">Ciao belli!</p><br />
<?php

echo " <font color= #FF7904>Hello</font> <br />";
$ciao="<p>Ciao!Oggi è domenica!</p><p>Domani è lunedi</p>";
echo date("w") . "<br />";
if(date("w")==4){
    echo " <font color= #FF7904>{$ciao}</font>";
}
elseif (date("w")==0)

?>
</body></html>