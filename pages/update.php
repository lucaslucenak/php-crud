<?php include('../includes/header.php')?>
<div class="container mt-5">

    <?php include('components/alertMessage.php') ?>

    <div class="row">
        <div class="col-md-12">
            <div class="card">

                <div class="card-header">
                    <h4>Edit Student
                        <a href="read.php" class="btn btn-danger float-end">Back</a>
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
                                    <form action="../scripts/script.php" method="POST">

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
<?php include('../includes/footer.php')?>