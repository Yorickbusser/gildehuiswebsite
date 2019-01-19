<?php
  $file_open = fopen("invoergegevens.csv", "a");
  fputcsv($file_open, $_POST);
  fclose($file_open);

  //maak van het .csv-bestand een array met als elementen de rijen uit het .csv-bestand
  $csv = array_map('str_getcsv', file('invoergegevens.csv'));
  array_column($csv, 0)[0];

?>

<!DOCTYPE html>
<html>

<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Het Gildehuis</title>
  <link rel="stylesheet" type="text/css" href="style.css">
</head>

<div class="profielenachtergrond">
  <div class="profiellijst">



    <?php $i=0; foreach (array_column($csv, 0) as $kok) {?>

      <div class="profiellijstitem">
        <img src="<?php echo "afbeeldingen/" . $kok . ".jpg"; ?>" class="profielfoto">
        <?php echo $csv[$i][1], '<br>',
                   $csv[$i][2], '<br>',
                   $csv[$i][3], '<br>',
                   $csv[$i][4], $csv[$i][5], $csv[$i][6], $csv[$i][7], $csv[$i][8],
                   $csv[$i][9];
        ?>
      </div>

    <?php $i=$i+1;};  ?>



    <div class="profiellijstitem">
      <img src="<?php echo "afbeeldingen/" . $csv[0][0] . ".jpg"; ?>" class="profielfoto">
      <?php print_r($csv[0]); ?>
    </div>







  </div>
</div>



</html>
