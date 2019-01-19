<?php
  //maak van het .csv-bestand een array met als elementen de rijen uit het .csv-bestand
  $csv = array_map('str_getcsv', file('invoergegevens.csv'));
?>

<!DOCTYPE html>
<html>

<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Het Gildehuis</title>
  <link rel="stylesheet" type="text/css" href="style.css">
</head>

<div class="saldoachtergrond">
  <div class="profiellijst">

    <?php $i=0; foreach (array_column($csv, 0) as $kok) {?>
      <div class="profiellijstitem">
        <img src="<?php echo "afbeeldingen/" . $kok . ".jpg"; ?>" class="profielfoto">
        <?php echo $csv[$i][1], '<br>',
                   $csv[$i][2], '<br>',
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
