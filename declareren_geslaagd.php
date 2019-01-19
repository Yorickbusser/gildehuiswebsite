<?php
  $file_open = fopen("invoergegevens.csv", "a");
  fputcsv($file_open, $_POST);
  fclose($file_open);
?>

<html>

  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Het Gildehuis</title>
    <link rel="stylesheet" type="text/css" href="style.css">
  </head>

  <div class="saldoachtergrond">
    <div class="profiellijst">
      <h1>Declareren geslaagd</h1>
      <div class="profiellijstitem">
        <img src="<?php echo "afbeeldingen/" . $_POST[kok] . ".jpg"; ?>" class="profielfoto">
        <?php
          echo $_POST[datum],'<br>', $_POST[gerecht], '<br>', '€', $_POST[bedrag], '<br>';
          $i=0;
          foreach($_POST as $eter) {
            if($i>3){echo $eter, ', ';};
            $i=$i+1;
          };
        ?>
      </div>
    </div>

    <a href="alledeclaraties.php">Overzicht maaltijden</a><br><br>
    <a href="index.php">Terug</a>

  </div>

</html>
