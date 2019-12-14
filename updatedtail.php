<?php

 $id= $_GET['id'];

include('config.php');
$sql = "SELECT  id,name, detail FROM patientdetail where id= $id";
$result = $conn->query($sql);
$row = $result->fetch_assoc();
$name=$row['name'];
$details=$row['detail'];

?>

    <!DOCTYPE html>
    <html lang="en">

    <head>
        <title>Bootstrap Example</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
    </head>

    <body>

        <div class="container">
            <div class="row">
                <div class="col-md-9">
                    <div class="panel panel-info" style="padding:10px;">
                      
                      <div class="panel-heading">User Info</div>
                      <div class="panel-body " >
                          <form class="form-horizontal" action="update.php" method="post">
                              <div class="form-group col-sm-10">
                                  <input type="hidden" name="uid" id="uid" value="<?php echo $id; ?>">
                                  <label for="name">My name:</label>
                                  <input type="text" class="form-control col-sm-" id="name" name="name" value="<?php echo $name ?>">
                              </div>
                              <div class="form-group col-sm-10">
                                  <label for="detail">Details:</label>
                                  <input type="text" class="form-control" id="detail" name="detail" value="<?php echo $details?>">
                              </div>
                              <div class="form-group col-sm-10">
                              <button type="submit" class="btn btn-default">Submit</button>
                            </div>
                          </form>

                    </div>
                </div>

                </div>

            </div>
           

        </div>
    </body>

    </html>