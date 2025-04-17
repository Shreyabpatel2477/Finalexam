<?php include 'header.php'; ?>

<h2>All Records</h2>
<?php
$conn = new mysqli('localhost', 'root', '', 'final');
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$result = $conn->query("SELECT * FROM string_info");

while ($row = $result->fetch_assoc()) {
    echo "ID: " . $row['string_id'] . " | Message: " . $row['message'] . "<br>";
}

$conn->close();
?>

<h3>Delete a Record</h3>
<form method="POST" action="delete.php">
    <input type="number" name="delete_id" placeholder="Enter string_id to delete" required>
    <button type="submit">Delete</button>
</form>

</body>
</html>
