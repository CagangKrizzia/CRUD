<?php
    session_start();
    require 'dbcon.php';
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <title>Student CRUD</title>
</head>
<body>
  
    <div class="container mt-4">

        <?php include('message.php'); ?>

        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Student Details
                            <a href="index.php" class="btn btn-danger float-end">BACK</a>
                        </h4>
                    </div>
                    <div class="card-body">

                        <table class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <!--<th>ID</th>-->
                                    <th>First Name</th>
                                    <th>Last Name</th>
                                    <th>Middle name</th>
                                    <th>Email</th>
                                    <th>Contact</th>
                                    <th>Region</th>
                                    <th>Province</th>
                                    <th>City</th>
                                    <!--<th>Passowrd</th>--->
                                </tr>
                            </thead>
                            <tbody>
                                <?php 
                                    $query = "SELECT * FROM user";
                                    $query_run = mysqli_query($con, $query);

                                    if(mysqli_num_rows($query_run) > 0)
                                    {
                                        foreach($query_run as $user)
                                        {
                                            ?>
                                            <tr>
                                               <!-- <td><?= $user['id']; ?></td>--->
                                                <td><?= $user['fname']; ?></td>
                                                <td><?= $user['lname']; ?></td>
                                                <td><?= $user['mname']; ?></td>
                                                <td><?= $user['email']; ?></td>
                                                <td><?= $user['contact']; ?></td>
                                                <td><?= $user['region']; ?></td>
                                                <td><?= $user['province']; ?></td>
                                                <td><?= $user['city']; ?></td>
                                                <!--<td><?= $student['password']; ?></td>--->
                                              
                                            </tr>
                                            <?php
                                        }
                                    }
                                    else
                                    {
                                        echo "<h5> No Record Found </h5>";
                                    }
                                ?>
                                
                            </tbody>
                        </table>

                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>