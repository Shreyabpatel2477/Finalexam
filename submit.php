<?php
$conn = new mysqli('localhost', 'root', '', 'final');
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$message = $conn->real_escape_string($_POST['message']);
$sql = "INSERT INTO string_info (message) VALUES ('$message')";
$conn->query($sql);

$conn->close();
header("Location: index.php");
exit();
?>
