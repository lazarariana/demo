<?php
$id = $_GET['id'];

$stmt = $pdo->prepare("SELECT first_name, last_name FROM users WHERE user_id = :id LIMIT 1;");
$stmt->execute(['id' => $id]);

while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
    echo "First name: " . htmlspecialchars($row['first_name'], ENT_QUOTES, 'UTF-8') . "<br>";
    echo "Last name: "  . htmlspecialchars($row['last_name'],  ENT_QUOTES, 'UTF-8') . "<br>";
}
?>
