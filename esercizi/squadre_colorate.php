<html>
<head>
<title>Squadre di calcio</title>
</head>
<body>
<table>

<?php
//scrivere le squadre di calcio del campionato 1986-87 stamparle a video in modo che le righe abbiano colori alternati
$squadre=array(Milan,inter, napoli,juventus,genoa, catania,bologna,parma,brescia,chievo,sampdoria,bari,roma,lazio,udinese,atalanta,);
$flag_color=0;
for ($i= 0; $i < 17; $i++) {
    if ($flag_color==0) {
        echo "<tr><td bgcolor=\" #819295\">" . $squadre[$i] . "</td></tr>"   ;
        $flag_color=1;
    } 
     else{
        echo "<tr><td bgcolor=\"#362C95\"> " . $squadre[$i] . "</td></tr>";
        $flag_color=0;
    }
   
}



?>
</table>
</body>
</html>
