

<?php
  $file_open = fopen("invoergegevens.csv", "a");
  fputcsv($file_open, $_POST);
  fclose($file_open);
?>

<!DOCTYPE html>
<html>

<head>
  <title>Het Gildehuis</title>
  <link rel="stylesheet" type="text/class" href="style.css">
</head>

<div class="allemaaltijden">
  <div class="dividertekstlijst">
    <h1>Overzicht van alle maaltijden</h1>

    <?php
    echo "<table>\n\n";
    $f = fopen("invoergegevens.csv", "r");
    while (($line = fgetcsv($f)) !== false) {
            echo "<tr>";
            foreach ($line as $cell) {
              if($cell !== "0"){
                    echo "<td> &nbsp" . htmlspecialchars($cell) . "&nbsp </td>";}
            }
            echo "</tr>\n";
    }
    fclose($f);
    echo "\n</table>";
    //idee:welkomstbericht gekoppeld aan ip-adres van apparaat
    //idee: automatisch bonnetje scannen met de database van onze ah
    //berichten plaatsen
    //zien wie er thuis is door ip telefoon
    //is de ah nog open?
    //is de uni nog open?
    //is de wasmachine vrij? ja geen idee man
    ?>

    <br><a href="index.php">terug</a>
  </div>
</div>



</html>