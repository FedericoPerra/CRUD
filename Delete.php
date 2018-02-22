<?php
include("config.php");

$id=$_POST['identification'];
$sql = "DELETE FROM credenziali WHERE id=$id";

if ($conn->query($sql) == TRUE) {
    echo "Record deleted successfully";
    header('location:index.php');
} else {
    echo "Error deleting record: " . $conn->error;
}

$conn->close();

?>