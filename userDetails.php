
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>


<a href="uform.php" class="btn btn-info">add user </a>
<table  border="1"  class="table" width="60%">
<thead>
  <tr>
   <th>Name</th>  <th>Discription</th>

   <th>Action</th>
  
  </tr>
</thead>
<tbody>
<?php

include('config.php');
$sql = "SELECT  id,name, detail FROM patientdetail order by id desc";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    // output data of each row

while($row = $result->fetch_assoc()) {
 ?>
 <tr>
    <td><?php echo  $row["name"] ?></td>

    <td><?php echo  $row["detail"] ?></td>
    <td>  <a href="updatedtail.php?&id=<?php echo $row["id"] ?>">  Edit </a> | &nbsp; <a href="delete.php?&id=<?php echo $row["id"] ?>" onclick="return confirm('are you sure u wanna delete')"  > Delete </a>  </td>
   </tr> 
<?php
        
    
    }
} else {
    echo "0 results";
}
$conn->close();
?>

</tbody>
</table>



