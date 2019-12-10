<?php
include('config.php');
$name=$_POST["name"];
$detail=$_POST["detail"];

$sql = "INSERT INTO patientdetail (name, detail)VALUES ('$name','$detail')";


if ($conn->query($sql) === TRUE) {
echo"<script>alert('new record created successfully')</script>";
echo"<script>window.location.href='userDetails.php'</script>";



   // echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
 
?>           