<?php
// Definisco un array di 5 modelle con le loro caratteristiche
$modelle= array(
    'barby'=> array('tette grosse','bel culo','occhi azzurri'),
    'antonella'=> array('tette C', 'culo alto e sodo','occhi verdi'),
    'sabrina'=>array('tette piccole','culo a pigno sodo','occhi verdi'),
    'giusy'=>array('tette C','culo piatto','occhi azzurri')
);

// Ora eseguo un ciclo per scorrere gli elementi dell'array
foreach ($modelle as $modella => $carat){
    foreach ($carat as $carats){
        echo $modella. '-'. $carats .'<br>';
    }
}
    