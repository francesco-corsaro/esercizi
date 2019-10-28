<?php
$arr1=array(
    computer => 'mouse',
    frutta=>'banane',
    giochi=>'yo-yo',
    cucina=>'fornello',
    
);

array_push($arr1,sedie); /*aggiungo questa variabile*/
asort($arr1);/*ordino l'array*/
array_pop($arr1);/*tolgo l'ultimo elemento, in questo caso yo-yo*/
var_dump($arr1);
?>
