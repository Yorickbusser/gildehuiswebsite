<?php
  //maak van het .csv-bestand een array met als elementen de rijen uit het .csv-bestand
  $csv = array_map('str_getcsv', file('invoergegevens.csv'));
?>


<html style="background-color: black;">

<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Het Gildehuis</title>
  <link rel="stylesheet" type="text/css" href="style.css">
</head>

<div class="declaratiesachtergrond">
  <div class="profiellijst">
    <h1>De Kooklijst</h1>
    Dit is een overzicht van alles dat is gekookt. Een foto van de kok is te
    zien naast de datum, het gerecht, de prijs en de meeeters.
    <br><br>
    <?php $i=0; foreach (array_column($csv, 0) as $kok) {?>
      <div class="profiellijstitem">
        <img src="<?php echo "afbeeldingen/" . $kok . ".jpg"; ?>" class="profielfoto">
        <?php echo '<br>',
                   $csv[$i][1], '<br>',
                   '<b>', $csv[$i][2], '</b>', '<br>',
                   '€', $csv[$i][3], '<br>',
                   $csv[$i][4], ', ', $csv[$i][5], ', ', $csv[$i][6], ', ',
                   $csv[$i][7], ', ', $csv[$i][8], ', ', $csv[$i][9], ', ',
                   $csv[$i][10], ', ', $csv[$i][11], ', ', $csv[$i][12], ', ',
                   $csv[$i][13];
        ?>
      </div>
    <?php $i=$i+1;};  ?>
  </div>
</div>



</html>
