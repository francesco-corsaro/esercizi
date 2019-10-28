<?php
// Definisco un array multidimensionale di x elementi
$dipendenti = array(
    'dirigenti' => array('Mario Rossi','Anna Bianchi'),
    'impiegati' => array('Luca Verdi','Gianni Pietri','Roberto Lima'),
    'operai' => array('Lucia Boschi','Ottavio Fanelli','Caterina Riva')
);

// Ora eseguo un ciclo per scorrere gli elementi dell'array
foreach ($dipendenti as $ruolo => $nomi) { //questa prima stringa ordina di leggere il contenuto dell'array 
                                           // definendo la chiave e il contenuto (in questo caso Array) che si chiama $nomi
    
    foreach ($nomi as $nome) {             //con questa stringa ordino di leggere l'array $nomi dove ogni oggetto è definito $nome con un valore assegnato di defautl
        echo $ruolo . ' - ' . $nome . '<br>';
    }
}