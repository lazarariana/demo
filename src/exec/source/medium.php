<?php
$target = $_POST['ip'];
$target = str_replace(';', '', $target);
$target = str_replace('&', '', $target);

System("ping -c 4 " . $target);
?>
