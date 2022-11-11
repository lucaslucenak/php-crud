<?php session_start();
require '../connection/dbConnection.php';
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
</head>
<body>
    <div class="row">
        <div class="col-md-12">
            <div class="card-body">
                <table class="table table-bordered table-striped">
                    <thead>
                    <tr>
                        <th>Id</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Phone</th>
                        <th>Age</th>
                        <th>Course</th>
                        <th>Action</th>
                    </tr>
                    </thead>
                    <tbody>
                        <?php
                            $connection = new Connection();
                            $query = "SELECT * FROM tb_student";
                            $query_run = mysqli_query($connection->con, $query);

                            if (mysqli_num_rows($query_run) > 0) {
                                foreach($query_run as $student) {
                                    ?>
                                        <tr>
                                            <td><?= $student['id']?></td>
                                            <td><?= $student['name']?></td>
                                            <td><?= $student['email']?></td>
                                            <td><?= $student['phone']?></td>
                                            <td><?= $student['age']?></td>
                                            <td><?= $student['course']?></td>
                                            <td>
                                                <a href="" class="btn btn-info btn-sm">View</a>
                                                <a href="" class="btn btn-success btn-sm">Edit</a>
                                                <a href="" class="btn btn-danger btn-sm">Delete</a>
                                            </td>
                                        </tr>
                                    <?php

                                }
                            }
                            else {
                                echo "<h5>No Records Found.</h5>";
                            }
                        ?>
                    </tbody>
                </table>
            </div>
            <a href="../index.php" class="btn btn-danger float-end">BACK</a>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body>
</html>
