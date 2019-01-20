<?php
echo shell_exec('sh script.sh');
sleep(1);
$adressen = file_get_contents('textfile.txt');
print_r($adressen);
echo "De volgende huisgenootjes zijn thuis:";

if (strpos($adressen, '192.168.2.9') !== false) {
    echo 'Yorick, ';
}
if (strpos($adressen, '192.168.2.8') !== false) {
    echo 'Jan, ';
}
if (strpos($adressen, '192.168.2.10') !== false) {
    echo 'Ayla, ';
}
if (strpos($adressen, 'ayla') !== false) {
    echo 'Ayla, ';
}
if (strpos($adressen, '192.168.1.128') !== false) {
    echo '';
}

?>


<html>

</html>
