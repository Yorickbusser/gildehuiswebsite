<?php
  $file_open = fopen("invoergegevens.csv", "a");
  fputcsv($file_open, $_POST);
  fclose($file_open);

  $allemaaltijden = array_map('str_getcsv', file('invoergegevens.csv'));
  //$huisgenotenlijst = array("Lana"=>0, "Joris"=>1, "Yorick"=>2);


  function saldocalculator($allemaaltijden, $huisgenootnummer){
    $saldo=0;

    foreach($allemaaltijden as $avondmaal){

      if($avondmaal[$huisgenootnummer+2]==1){

        $n=0;
        for($i=2; $i<=count($avondmaal)-1; $i++){
          $n = $n + $avondmaal[$i];
        }

        $saldo = $saldo - $avondmaal[0]/$n;
        if($avondmaal[1]==$huisgenootnummer){
          $saldo=$saldo+$avondmaal[0];
        }

      }
    }
    return $saldo;
  }
  echo "Het saldo van Yorick is " . saldocalculator($allemaaltijden, 2);

//idee:welkomstbericht gekoppeld aan ip-adres van apparaat
//idee: automatisch bonnetje scannen met de database van onze ah
//berichten plaatsen
//zien wie er thuis is door ip telefoon
?>

<!DOCTYPE html>
<html>
  <body bgcolor="#dbc769">

    <h1>De Gildehuiswebsite
    </h1>
    <h3>Welkom op de website van het Gildehuis,
      voor het verhalen van al uw boodschaps- en huisinkoopkosten.
      De website is alleen vanuit het huis toegankelijk.
    </h3>

    Dag Lana, Joris en Yorick<br>

    <form action="index.php" method="post">
      De kosten van het avondeten zijn
      <input name="bedrag" type="number" step="0.01"><br>
      Voer uw naam in
      <input name="kok" type="text"><br>
      Wie hebben er meegegeten?<br>
      <input type="hidden" name="meeeter1" value=0>
      <input type="hidden" name="meeeter2" value=0>
      <input type="hidden" name="meeeter3" value=0>
      <input type="checkbox" name="meeeter1" value=1 />Lana<br>
      <input type="checkbox" name="meeeter2" value=1 />Joris<br>
      <input type="checkbox" name="meeeter3" value=1 />Yorick<br>
      <input type="submit" value="Verhaal kosten">
    </form>

  </body>
</html>













<?php

function saldocalculator($allemaaltijden, $huisgenoot){
  $saldo=0;
  foreach($allemaaltijden as $avondmaal){
    //We berekenen eerst het aantal personen n
    //dat heeft meegegeten met het avondmaal.
    $n=count($avondmaal);
    if(in_array(0, $avondmaal)){
      $n=$n - 1;
    }
    //Als de huisgenoot heeft meegegeten, dan moeten
    //er kosten aan het saldo worden toegevoegd.
    if(in_array($huisgenoot, $avondmaal)){
      $saldo=$saldo - $avondmaal[0]/$n;
    }
    //als je de kok van het avondmaal bent geweest, dan moet
    //de prijs van de maaltijd bij je saldo worden opgeteld.
    if($avondmaal[1]==$huisgenootnummer){
        $saldo=$saldo+$avondmaal[0];
    }
  }
  return $saldo;
}
?>
