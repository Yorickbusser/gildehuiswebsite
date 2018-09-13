<?php
$allemaaltijden = array_map('str_getcsv', file('invoergegevens.csv'));


function saldocalculator($allemaaltijden, $huisgenoot){
  $saldo=0;
  $oudeschuld = array("daan"=>175.86, "yana"=>87.66, "yorick"=>277.07, "kris"=>154.86,
  "joris"=>127.91, "alex"=>408.67, "rick"=>-55.29,
  "lana"=>-115.30, "emma"=>7.66, "ej"=>25.87, "femke"=>132.16);


  foreach($allemaaltijden as $avondmaal){
    //We berekenen eerst het aantal personen n
    //dat heeft meegegeten met het avondmaal.
    $n=0;
    for($i=4; $i<=count($avondmaal)-1; $i++){
      if($avondmaal[$i] !== "0"){
        $n=$n+1;
      }
    }
    //Als de huisgenoot heeft meegegeten, dan moeten
    //er kosten aan het saldo worden toegevoegd.
    if(in_array($huisgenoot, $avondmaal)){
      $saldo=$saldo - $avondmaal[3]/$n;
    }
    //als je de kok van het avondmaal bent geweest, dan moet
    //de prijs van de maaltijd bij je saldo worden opgeteld.
    if($avondmaal[0]==$huisgenoot){
        $saldo=$saldo+$avondmaal[3];
    }
  }
  return $saldo - $oudeschuld[$huisgenoot];
}
$lanarood= -round(saldocalculator($allemaaltijden, lana));
$lanagroen= 255-2*$lanarood;
$jorisrood= -round(saldocalculator($allemaaltijden, joris));
$jorisgroen= 255-2*$jorisrood;
$yorickrood= -round(saldocalculator($allemaaltijden, yorick));
$yorickgroen= 255-2*$yorickrood;
$yanarood= -round(saldocalculator($allemaaltijden, yana));
$yanagroen= 255-2*$yanarood;
$daanrood= -round(saldocalculator($allemaaltijden, daan));
$daangroen= 255-2*$daanrood;
$emmarood= -round(saldocalculator($allemaaltijden, emma));
$emmagroen= 255-2*$emmarood;
$krisrood= -round(saldocalculator($allemaaltijden, kris));
$krisgroen= 255-2*$krisrood;
$ejrood= -round(saldocalculator($allemaaltijden, ej));
$ejgroen= 255-2*$ejrood;
$alexrood= -round(saldocalculator($allemaaltijden, alex));
$alexgroen= 255-2*$alexrood;
$rickrood= -round(saldocalculator($allemaaltijden, rick));
$rickgroen= 255-2*$rickrood;
$femkerood= -round(saldocalculator($allemaaltijden, femke));
$femkegroen= 255-2*$femkerood;
?>

<!DOCTYPE html>
<html>

  <head>
    <title>Het Gildehuis</title>
    <link rel="stylesheet" type="text/class" href="style.css">
  </head>

  <body>
    <div class="declarerenachtergrond">
      <div class="dividertekst">
        <h1>Bekijk je saldo</h1><br>

        <table>
          <tr>
            <th>Huisgenoot</th>
            <th>Saldo</th>
          </tr>
          <tr>
            <th>Lana</th>
            <th><div style="color: rgb(<?php echo $lanarood;?>,<?php echo $lanagroen;?>,0);">
              <?php echo "€".round(saldocalculator($allemaaltijden, lana),2);?></div></th>
          </tr>
          <tr>
            <th>yorick</th>
            <th><div style="color: rgb(<?php echo $yorickrood;?>,<?php echo $yorickgroen;?>,0);">
              <?php echo "€".round(saldocalculator($allemaaltijden, yorick),2);?></div></th>
          </tr>
          <tr>
            <th>Joris</th>
            <th><div style="color: rgb(<?php echo $jorisrood;?>,<?php echo $jorisgroen;?>,0);">
              <?php echo "€".round(saldocalculator($allemaaltijden, joris),2);?></div></th>
          </tr>
          <tr>
            <th>Yana</th>
            <th><div style="color: rgb(<?php echo $yanarood;?>,<?php echo $yanagroen;?>,0);">
              <?php echo "€".round(saldocalculator($allemaaltijden, yana),2);?></div></th>
          </tr>
          <tr>
            <th>Emma</th>
            <th><div style="color: rgb(<?php echo $emmarood;?>,<?php echo $emmagroen;?>,0);">
              <?php echo "€".round(saldocalculator($allemaaltijden, emma),2);?></div></th>
          </tr>
          <tr>
            <th>Kris</th>
            <th><div style="color: rgb(<?php echo $krisrood;?>,<?php echo $krisgroen;?>,0);">
              <?php echo "€".round(saldocalculator($allemaaltijden, kris),2);?></div></th>
          </tr>
          <tr>
            <th>EJ</th>
            <th><div style="color: rgb(<?php echo $ejrood;?>,<?php echo $ejgroen;?>,0);">
              <?php echo "€".round(saldocalculator($allemaaltijden, ej),2);?></div></th>
          </tr>
          <tr>
            <th>Alex</th>
            <th><div style="color: rgb(<?php echo $alexrood;?>,<?php echo $alexgroen;?>,0);">
              <?php echo "€".round(saldocalculator($allemaaltijden, alex),2);?></div></th>
          </tr>
          <tr>
            <th>Rick</th>
            <th><div style="color: rgb(<?php echo $rickrood;?>,<?php echo $rickgroen;?>,0);">
              <?php echo "€".round(saldocalculator($allemaaltijden, rick),2);?></div></th>
          </tr>
          <tr>
            <th>Femke</th>
            <th><div style="color: rgb(<?php echo $femkerood;?>,<?php echo $femkegroen;?>,0);">
              <?php echo "€".round(saldocalculator($allemaaltijden, femke),2);?></div></th>
          </tr>
          <tr>
            <th>Daan</th>
            <th><div style="color: rgb(<?php echo $daanrood;?>,<?php echo $daangroen;?>,0);">
              <?php echo "€".round(saldocalculator($allemaaltijden, daan),2);?></div></th>
          </tr>

        </table>
      </div>
    </div>
  </body>

</html>
