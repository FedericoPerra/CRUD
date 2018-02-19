<?php
include("config.php");

$id=$_POST['identification'];
$sql = "DELETE FROM credenziali WHERE id=$id";

if ($conn->query($sql) == TRUE) {
    echo "Record deleted successfully";
    header('Location: http://localhost/tabellaCRUD/CRUD/index.php');
} else {
    echo "Error deleting record: " . $conn->error;
}

$conn->close();

?>