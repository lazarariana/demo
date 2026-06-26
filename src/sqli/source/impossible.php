<?php

$id = $_GET['id'];
$query = "SELECT first_name, last_name FROM users WHERE user_id = " . $id . " LIMIT 1;";
$stmt = $pdo->query($query);

echo "<h1>Afișare rezultate pentru ID-ul: " . $id . "</h1>";

while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
    echo "First name: " . $row['first_name'] . "<br>";
    echo "Last name: "  . $row['last_name'] . "<br>";
}
?>