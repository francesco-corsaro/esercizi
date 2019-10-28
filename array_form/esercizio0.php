<?php
//array_merge() unisce differenti array 
//array_values()ritorna in un nuovo array tutti gli array contenuti in un paramento
//array_replace()
$arr1=array(10,20);
$arr2=array('a'=>10, 'b'=>300);
$arr3=array(20, 'b'=>309);
$unione=array_merge($arr1,$arr2,$arr3);
var_dump($unione);//notare che nell arr2 la chiave b è uguale alla chiave b dell arr3. 
                  //data la sequenza la chiave b viene sovrascritta
echo "<br>";

$arr4=array(giallo,verde, azzurro);
$arr5=array(Giallo,verde,rosa);
$arr6=array(azzurro,rosa,);

$diff=array_diff($arr4, $arr5,$arr6);
var_dump($diff);
echo "<br> <br />";

//array value
$arr7=array(10,'a'=>20,40);
var_dump($arr7);
$arr7new=array_values($arr7);
var_dump($arr7new);


?>