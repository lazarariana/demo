<?php
$name = str_replace('<script>', '', $_GET['name']);

echo "<h1>Hello " . $name . "</h1>";
?>
