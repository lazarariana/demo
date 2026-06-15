<?php
$target = $_POST['ip'];

if (filter_var($target, FILTER_VALIDATE_IP)) {
    System("ping -c 4 " . escapeshellarg($target));
} else {
    echo "Invalid IP address.";
}
?>
