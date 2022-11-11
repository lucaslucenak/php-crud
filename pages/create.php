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
                        <h4>Add Student
                            <a href="../index.php" class="btn btn-danger float-end">BACK</a>
                        </h4>
                    </div>
                    
                    <div class="card-body">
                        <form action="../script.php" method="POST">

                            <div class="mb-3">
                                <label>Name:</label>
                                <input type="text" name="name" class="form-control">
                            </div>

                            <div class="mb-3">
                                <label>Email:</label>
                                <input type="text" name="email" class="form-control">
                            </div>

                            <div class="mb-3">
                                <label>Phone:</label>
                                <input type="text" name="phone" class="form-control">
                            </div>

                            <div class="mb-3">
                                <label>Age:</label>
                                <input type="text" name="age" class="form-control">
                            </div>

                            <div class="mb-3">
                                <label>Course:</label>
                                <input type="text" name="course" class="form-control">
                            </div>

                            <div class="mb-3">
                                <button type="submit" name="saveStudent" class="btn btn-primary">Save Student</button>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body>
</html>