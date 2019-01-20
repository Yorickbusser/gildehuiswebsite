<?php
  $file_open = fopen("opmerkingen.csv", "a");
  fputcsv($file_open, $_POST);
  fclose($file_open);
  header('location: huistaken.php'); 
?>
