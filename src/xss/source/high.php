<?php
$name = preg_replace('/<(.*)s(.*)c(.*)r(.*)i(.*)p(.*)t/i', '', $_GET['name']);

echo "<h1>Hello " . $name . "</h1>";
?>
