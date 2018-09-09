<?php
  $file_open = fopen("invoergegevens.csv", "a");
  fputcsv($file_open, $_POST);
  fclose($file_open);

  //print_r($_POST);
  echo "U heeft voor ".$_POST[bedrag]." euro aan boodschappen gedeclareerd";
//idee:welkomstbericht gekoppeld aan ip-adres van apparaat
//idee: automatisch bonnetje scannen met de database van onze ah
//berichten plaatsen
//zien wie er thuis is door ip telefoon
//is de ah nog open?
//is de uni nog open?
//is de wasmachine vrij? ja geen idee man
?>
