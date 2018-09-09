<?php
echo shell_exec('sh script.sh');
sleep(1);
$adressen = file_get_contents('textfile.txt');
$yorick='Helaas, Yorick is nu niet thuis';
if (strpos($adressen, '192.168.1.79') !== false) {
    $yorick= 'Fantastisch, je lievelingshuisgenoot Yorick is thuis! Toon hem hoeveel je van hem houdt door je huistaak te doen.';
}
//is ej weer brak?
?>

<!DOCTYPE html>
<html>

<head>
  <title>Het Gildehuis</title>
  <link rel="stylesheet" type="text/class" href="style.css">
</head>

<body>
  <div class="yorick">
    <div class="dividertekst">
      <h1><?php echo $yorick; ?></h1>
    </div>
  </div>
</body>

</html>
