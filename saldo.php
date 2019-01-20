<?php
$allemaaltijden = array_map('str_getcsv', file('invoergegevens.csv'));

/*We maken een functie die een huisgenoot (aangegeven met $huisgenoot)
en een lijst met maaltijden (angegeven met $allemaaltijden) stuurt naar het saldo van deze huisgenoot.*/
function saldocalculator($allemaaltijden, $huisgenoot){
  /*we beginnen met een saldo van 0 euro*/
  $saldo=0;

  /*voor elke maaltijd in de maaltijdenlijst gaan we iets doen.*/
  foreach($allemaaltijden as $avondmaal){
    /*Voor de gegeven maaltijd berekenen we het aantal personen $n
    dat heeft meegegeten met het avondmaal.*/
    $n=0;
    for($i=4; $i<=count($avondmaal)-1; $i++){
      if($avondmaal[$i] !== "0"){
        $n=$n+1;
      }
    }
    /*Als de huisgenoot heeft meegegeten, dan moeten
    er kosten aan het saldo worden toegevoegd.*/
    if(in_array($huisgenoot, $avondmaal)){
      $saldo=$saldo - $avondmaal[3]/$n;
    }
    //als je de kok van het avondmaal bent geweest, dan moet
    //de prijs van de maaltijd bij je saldo worden opgeteld.
    if($avondmaal[0]==$huisgenoot){
        $saldo=$saldo+$avondmaal[3];
    }
  }
  /*We zetten de nog openstaande schuld in de array $oudeschuld.*/
  $oudeschuld = array("daan"=>175.86, "yana"=>87.66, "yorick"=>277.07, "kris"=>154.86,
  "joris"=>127.91, "alex"=>408.67, "rick"=>-55.29,
  "lana"=>-115.30, "emma"=>7.66, "ej"=>25.87, "femke"=>132.16);

  return $saldo - $oudeschuld[$huisgenoot];
}



/*We berekenen voor elk saldo een kleur. Hoe meer schuld hoe roder, hoe minder schul hoe groener.*/
$lanarood= -round(saldocalculator($allemaaltijden, "lana"));
$lanagroen= 255-2*$lanarood;
$jorisrood= -round(saldocalculator($allemaaltijden, "joris"));
$jorisgroen= 255-2*$jorisrood;
$yorickrood= -round(saldocalculator($allemaaltijden, "yorick"));
$yorickgroen= 255-2*$yorickrood;
$yanarood= -round(saldocalculator($allemaaltijden, "yana"));
$yanagroen= 255-2*$yanarood;
$daanrood= -round(saldocalculator($allemaaltijden, "daan"));
$daangroen= 255-2*$daanrood;
$emmarood= -round(saldocalculator($allemaaltijden, "emma"));
$emmagroen= 255-2*$emmarood;
$krisrood= -round(saldocalculator($allemaaltijden, "kris"));
$krisgroen= 255-2*$krisrood;
$ejrood= -round(saldocalculator($allemaaltijden, "ej"));
$ejgroen= 255-2*$ejrood;
$alexrood= -round(saldocalculator($allemaaltijden, "alex"));
$alexgroen= 255-2*$alexrood;
$rickrood= -round(saldocalculator($allemaaltijden, "rick"));
$rickgroen= 255-2*$rickrood;
$femkerood= -round(saldocalculator($allemaaltijden, "femke"));
$femkegroen= 255-2*$femkerood;
?>


<html style="background-color: black;">

  <head>
    <title>Het Gildehuis</title>
    <link rel="stylesheet" type="text/css" href="style.css">
  </head>

  <div class="saldoachtergrond">
    <div class="profiellijst">
      <h1>Saldo-overzicht</h1>
      Bekijk hier je saldo. Je kunt je schuld aflossen naar de rekening van het huis met IBAN NL83 INGB 0000 9517 45.
      Aflossingen worden niet direct hier weergegeven.

      <div class="profiellijstitem">
        <img src="afbeeldingen/img1.jpg" class="profielfoto">
        <h1 style="line-height:200px;">
          <div style="color: rgb(<?php echo $yorickrood;?>,<?php echo $yorickgroen;?>,0);">
            <?php echo "€".round(saldocalculator($allemaaltijden, "yorick"),2);?>
          </div>
        </h1>
      </div>

      <div class="profiellijstitem">
        <img src="afbeeldingen/yana.jpg" class="profielfoto">
        <h1 style="line-height:200px;">
          <div style="color: rgb(<?php echo $yanarood;?>,<?php echo $yanagroen;?>,0);">
            <?php echo "€".round(saldocalculator($allemaaltijden, "yana"),2);?>
          </div>
        </h1>
      </div>

      <div class="profiellijstitem">
        <img src="afbeeldingen/kris.jpg" class="profielfoto">
        <h1 style="line-height:200px;">
          <div style="color: rgb(<?php echo $krisrood;?>,<?php echo $krisgroen;?>,0);">
            <?php echo "€".round(saldocalculator($allemaaltijden, "kris"),2);?>
          </div>
        </h1>
      </div>

      <div class="profiellijstitem">
        <img src="afbeeldingen/femke.jpg" class="profielfoto">
        <h1 style="line-height:200px;">
          <div style="color: rgb(<?php echo $femkerood;?>,<?php echo $femkegroen;?>,0);">
            <?php echo "€".round(saldocalculator($allemaaltijden, "femke"),2);?>
          </div>
        </h1>
      </div>

      <div class="profiellijstitem">
        <img src="afbeeldingen/EJbrak.jpg" class="profielfoto">
        <h1 style="line-height:200px;">
          <div style="color: rgb(<?php echo $ejrood;?>,<?php echo $ejgroen;?>,0);">
            <?php echo "€".round(saldocalculator($allemaaltijden, "ej"),2);?>
          </div>
        </h1>
      </div>

      <div class="profiellijstitem">
        <img src="afbeeldingen/joris.jpg" class="profielfoto">
        <h1 style="line-height:200px;">
          <div style="color: rgb(<?php echo $jorisrood;?>,<?php echo $jorisgroen;?>,0);">
            <?php echo "€".round(saldocalculator($allemaaltijden, "joris"),2);?>
          </div>
        </h1>
      </div>

      <div class="profiellijstitem">
        <img src="afbeeldingen/emma.jpg" class="profielfoto">
        <h1 style="line-height:200px;">
          <div style="color: rgb(<?php echo $emmarood;?>,<?php echo $emmagroen;?>,0);">
            <?php echo "€".round(saldocalculator($allemaaltijden, "emma"),2);?>
          </div>
        </h1>
      </div>

      <div class="profiellijstitem">
        <img src="afbeeldingen/daan.jpg" class="profielfoto">
        <h1 style="line-height:200px;">
          <div style="color: rgb(<?php echo $daanrood;?>,<?php echo $daangroen;?>,0);">
            <?php echo "€".round(saldocalculator($allemaaltijden, "daan"),2);?>
          </div>
        </h1>
      </div>
      </div>
      <a href="index.php">Terug</a>
    </div>


</html>
