<?php
echo shell_exec('sh script.sh');
sleep(1);
$adressen = file_get_contents('textfile.txt');

if (strpos($adressen, '192.168.1.79') !== false) {
    echo 'Yorick, ';
}
if (strpos($adressen, 'alex') !== false) {
    echo 'Alex, ';
}
if (strpos($adressen, '192.168.2.10') !== false) {
    echo 'EJ, ';
}
if (strpos($adressen, 'ayla') !== false) {
    echo 'Ayla, ';
}
if (strpos($adressen, '192.168.1.128') !== false) {
    echo '';
}

echo "zijn thuis.="


 ?>


<html>



</html>
