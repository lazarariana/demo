<?php
$id = $_SESSION['id'];

$stmt = mysqli_prepare(
    $conn,
    "SELECT first_name, last_name FROM users WHERE user_id = ? LIMIT 1"
);

mysqli_stmt_bind_param($stmt, "s", $id);
mysqli_stmt_execute($stmt);

$result = mysqli_stmt_get_result($stmt);

while ($row = mysqli_fetch_assoc($result)) {
    echo "First name: " . htmlspecialchars($row['first_name'], ENT_QUOTES, 'UTF-8') . "<br>";
}
?>