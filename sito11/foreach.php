 <html>
 <head> 
 <title>ciclo_foreach</title>
  </head>
 <body> 
<?php 
// Definisco un array di 4 elementi
$frutta = array('mela','pera','arancia','banana');

// Ora eseguo un ciclo per scorrere gli elementi dell'array
foreach ($frutta as  $frutto) {
  echo $frutto . '<br>';  
}
?>
<a><h1>array con chiave</h1></a><br />
 <?php 
$giochi= array ( //creo un array con  le chiavi impostate da me 
                 //NB: nell'esempio precedente la chiave era di default impostata da PHP
     1 => 'actionman',
     2 =>'macchinina',
     3 => 'barbie',
     4 =>'cicciobello'
 );
$giochi[]='pluto'; // così aggiungo un elemento in fondo alla lista (array) dei giochi
$giochi[2]='belen rodriguez'; // così cambio un elemento
    
 foreach ($giochi as $chiave => $gioco) {
     echo $chiave. ' - '. $gioco . '<br>';
 }
 ?>
  
  
 </body>
 </html>