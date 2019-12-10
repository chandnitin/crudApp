<?php
include('config.php');
$id=$_GET['id'];
$sql = "DELETE FROM patientdetail WHERE id=$id";

if ($conn->query($sql) === TRUE) {
    echo"<script>alert ('Record deleted successfully')</script>";
    echo "<script>window.location.href='userDetails.php'</script>";
    echo "Record deleted successfully";
} else {
    echo "Error deleting record: " . $conn->error;
}

$conn->close();
?>