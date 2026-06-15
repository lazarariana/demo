<?php
$target = $_POST['ip'];

if (!filter_var($target, FILTER_VALIDATE_IP)) {
    die("Invalid IP address");
}

$cmd = sprintf("ping -c 4 %s", escapeshellarg($target));

system($cmd);
?>