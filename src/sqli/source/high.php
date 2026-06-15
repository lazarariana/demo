<?php
$id = $_SESSION['id'];

$query  = "SELECT first_name, last_name FROM users WHERE user_id = '$id' LIMIT 1;";
$result = mysqli_query($conn, $query);

while ($row = mysqli_fetch_assoc($result)) {
    echo "First name: " . $row['first_name'] . "<br>";
}
?>
