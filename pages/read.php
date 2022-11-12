<?php include('../includes/header.php')?>
    <div class="row">
        <?php include('components/alertMessage.php') ?>
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
                            include ('../connection/dbConnection.php');
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
                                                <a href="view.php?id=<?=$student['id']?>" class="btn btn-info btn-sm">View</a>
                                                <a href="update.php?id=<?=$student['id']?>" class="btn btn-success btn-sm">Edit</a>
                                                <form action="../scripts/script.php" method="POST" class="d-inline">
                                                    <button type="submit" name="deleteStudent" value="<?=$student['id']?>" class="btn btn-danger btn-sm">Delete</button>
                                                </form>
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
<?php include('../includes/footer.php')?>
