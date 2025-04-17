<?php
$conn = new mysqli('localhost', 'root', '', 'final');
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$delete_id = intval($_POST['delete_id']);
$conn->query("DELETE FROM string_info WHERE string_id = $delete_id");

$conn->close();
header("Location: showAll.php");
exit();
?>
