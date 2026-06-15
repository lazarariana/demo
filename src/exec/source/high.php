<?php
$target = $_POST['ip'];

$substitutions = [
    '&'  => '',
    ';'  => '',
    '|'  => '',
    '-'  => '',
    '$'  => '',
    '('  => '',
    ')'  => '',
    '`'  => '',
    '||' => '',
];

$target = str_replace(array_keys($substitutions), array_values($substitutions), $target);

System("ping -c 4 " . $target);
?>
