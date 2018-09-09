<?php
$allemaaltijden = array_map('str_getcsv', file('invoergegevens.csv'));

function saldocalculator($allemaaltijden, $huisgenoot){
  $saldo=0;
  foreach($allemaaltijden as $avondmaal){
    //We berekenen eerst het aantal personen n
    //dat heeft meegegeten met het avondmaal.
    $n=0;
    for($i=2; $i<=count($avondmaal)-1; $i++){
      if($avondmaal[i] !== 0){
        $n=$n+1;
      }
    }
    //Als de huisgenoot heeft meegegeten, dan moeten
    //er kosten aan het saldo worden toegevoegd.
    if(in_array($huisgenoot, $avondmaal)){
      $saldo=$saldo - $avondmaal[0]/$n;
    }
    //als je de kok van het avondmaal bent geweest, dan moet
    //de prijs van de maaltijd bij je saldo worden opgeteld.
    if($avondmaal[1]==$huisgenoot){
        $saldo=$saldo+$avondmaal[0];
    }
  }
  return $saldo;
}
echo "Het saldo van Yorick is " . saldocalculator($allemaaltijden, yorick);
?>
