<?php
$id = $_GET['id'];

$stmt = mysqli_prepare(
    $conn,
    "SELECT first_name, last_name FROM users WHERE user_id = ?"
);

mysqli_stmt_bind_param($stmt, "s", $id);
mysqli_stmt_execute($stmt);

$result = mysqli_stmt_get_result($stmt);

while ($row = mysqli_fetch_assoc($result)) {
    echo "First name: " . htmlspecialchars($row['first_name'], ENT_QUOTES, 'UTF-8') . "<br>";
    echo "Last name: "  . htmlspecialchars($row['last_name'], ENT_QUOTES, 'UTF-8') . "<br>";
}
?>
