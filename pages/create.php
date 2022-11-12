<?php include('../includes/header.php')?>
    <div class="container mt-5">



        <div class="row">
            <div class="col-md-12">
                <div class="card">

                    <div class="card-header">
                        <h4>Add Student
                            <a href="../index.php" class="btn btn-danger float-end">Back</a>
                        </h4>
                    </div>
                    
                    <div class="card-body">
                        <form action="../scripts/script.php" method="POST">

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
<?php include('../includes/footer.php')?>