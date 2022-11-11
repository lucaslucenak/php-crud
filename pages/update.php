<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
</head>
<body>
<div class="container mt-5">

    <?php include('../includes/alertMessage.php') ?>

    <div class="row">
        <div class="col-md-12">
            <div class="card">

                <div class="card-header">
                    <h4>Edit Student
                        <a href="../index.php" class="btn btn-danger float-end">Back</a>
                    </h4>
                </div>

                <div class="card-body">
                    <?php
                        include('../connection/dbConnection.php');
                        $con = new Connection();

                        if(isset($_GET['id'])) {
                            $studentId = mysqli_real_escape_string($con->con, $_GET['id']);
                            $query = "SELECT * FROM tb_student WHERE id = '$studentId'";
                            $queryRun = mysqli_query($con->con, $query);

                            if (mysqli_num_rows($queryRun) > 0) {
                                $student = mysqli_fetch_array($queryRun);
                                ?>
                                    <form action="../script.php" method="POST">

                                        <input type="hidden" name="id" value="<?=$student['id']?>">

                                        <div class="mb-3">
                                            <label>Name:</label>
                                            <input type="text" name="name" class="form-control" value="<?=$student['name']?>">
                                        </div>

                                        <div class="mb-3">
                                            <label>Email:</label>
                                            <input type="text" name="email" class="form-control" value="<?=$student['email']?>">
                                        </div>

                                        <div class="mb-3">
                                            <label>Phone:</label>
                                            <input type="text" name="phone" class="form-control" value="<?=$student['phone']?>">
                                        </div>

                                        <div class="mb-3">
                                            <label>Age:</label>
                                            <input type="text" name="age" class="form-control" value="<?=$student['age']?>">
                                        </div>

                                        <div class="mb-3">
                                            <label>Course:</label>
                                            <input type="text" name="course" class="form-control" value="<?=$student['course']?>">
                                        </div>

                                        <div class="mb-3">
                                            <button type="submit" name="updateStudent" class="btn btn-primary">Update Student</button>
                                        </div>

                                    </form>
                                <?php
                            }
                            else {
                                echo "<h4>No such Student Found</h4>";
                            }
                        }
                    ?>


                </div>
            </div>
        </div>
    </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body>
</html>