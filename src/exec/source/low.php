<?php
$target = $_POST['ip'];

System("ping -c 4 " . $target);
?>
