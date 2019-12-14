
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" type="text/css" href="Style1.css">

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <header>
                <div class="row"><h3 class="text-center">  User details</h3></div>
                <hr/>
            </header>
            <div class="pull-right">
            <a href="uform.php" class="btn btn-info">Add user </a>
            </div>
            <table class="table  table-condensed table-bordered" >
                    <thead>
                        <tr>
                                <th>Name</th>
                                <th>Details</th>
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
                        $row = $result->fetch_assoc();
                        // echo"<pre>";
                        // print_r($row);
                    while($row = $result->fetch_assoc()) {
                    ?>
                    <tr>
    <td><?php echo  $row["name"] ?></td>

    <td><?php echo  $row["detail"] ?></td>
    <td>  <a href="updatedtail.php?&id=<?php echo $row["id"] ?>">  <i class="fa fa-edit"></i> </a> | &nbsp; <a href="delete.php?&id=<?php echo $row["id"] ?>" onclick="return confirm('are you sure u wanna delete')"  > <i class="fa fa-trash"></i> </a>  </td>
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




        </div>


    </div>



</div>


 

</tbody>
</table> 



