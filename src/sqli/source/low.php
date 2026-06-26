<?php
$id = $_GET['id'];

$query  = "SELECT first_name, last_name FROM users WHERE user_id = '$id';";
$result = mysqli_query($conn, $query);

while ($row = mysqli_fetch_assoc($result)) {
    echo "First name: " . $row['first_name'] . "<br>";
    echo "Last name: "  . $row['last_name']  . "<br>";
}
?>
