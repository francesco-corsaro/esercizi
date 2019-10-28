<?php
// impostare delle variabili per le tette il culo e gli occhi. 
// assegnarle alle partecipanti
//mostrare a video le caratteristiche delle modelle
$tette= array(
    1=>'grosse',
    2=>'medie',
    3=>'piccole'
);
$culo= array('alto','pigno','piatto'
);
$occhi= array (
    1=>'verdi',
    2=>'azzurri',
    3=>'castani'
);
$dipendenti = array(
    'dirigenti' => array('Mario Rossi','Anna Bianchi'),
    'impiegati' => array('Luca Verdi','Gianni Pietri','Roberto Lima'),
    'operai' => array('Lucia Boschi','Ottavio Fanelli','Caterina Riva')
);

echo "marina $occhi[2] $culo[1] $tette[1]<br/>";

foreach ($occhi as $occhio){
    echo $occhio. '<br/>';
    
}
foreach ($culo as $culi) {
    echo $culi. '<br/>';
}
foreach ($tette as $tetta){
    echo $tetta . '<br/>';
}

foreach ($dipendenti as $ruolo => $dipendente){
    foreach ($dipendente as $nome){
        echo $ruolo .'-'.$nome. '<br/>';
    }
}
?>
