<?php
include('config.php');
$id=$_POST["uid"];
$name=$_POST["name"];
$detail=$_POST["detail"];
echo $sql = "UPDATE patientdetail SET name='$name',detail='$detail' WHERE id=$id";
if ($conn->query($sql) === TRUE) {
    echo"<script>alert('new record updated successfully')</script>";
    echo"<script>window.location.href='userDetails.php'</script>";
    echo "Record updated successfully";
} else {
    echo "Error updating record: " . $conn->error;
}

$conn->close();
?>
