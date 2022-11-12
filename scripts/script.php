<?php
    session_start();
    require '../connection/dbConnection.php';

    $connection = new Connection();

    if (isset($_POST['saveStudent'])) {
        $name = mysqli_real_escape_string($connection->con, $_POST['name']);
        $email = mysqli_real_escape_string($connection->con, $_POST['email']);
        $phone = mysqli_real_escape_string($connection->con, $_POST['phone']);
        $age = mysqli_real_escape_string($connection->con, $_POST['age']);
        $course = mysqli_real_escape_string($connection->con, $_POST['course']);

        $query = "INSERT INTO tb_student(name, email, phone, age, course) VALUES ('$name', '$email', '$phone', '$age', '$course')";
        $queryRun = mysqli_query($connection->con, $query);

        if ($queryRun) {
            $_SESSION['message'] = 'Student saved!';
            header("Location: ../pages/read.php");
            exit(0);
        }
        else {
            $_SESSION['message'] = 'Student not saved! :(';
            header("Location: ../pages/read.php");
            exit(0);
        }
    }

    if (isset($_POST['updateStudent'])) {
        $id = mysqli_real_escape_string($connection->con, $_POST['id']);
        $name = mysqli_real_escape_string($connection->con, $_POST['name']);
        $email = mysqli_real_escape_string($connection->con, $_POST['email']);
        $phone = mysqli_real_escape_string($connection->con, $_POST['phone']);
        $age = mysqli_real_escape_string($connection->con, $_POST['age']);
        $course = mysqli_real_escape_string($connection->con, $_POST['course']);
        printf("%d, %s, %s, %s, %d, %s", $id, $name, $email, $phone, $age, $course);

        $query = "UPDATE tb_student SET name='$name', email='$email', phone='$phone', age=$age, course='$course' WHERE id=$id";
        $queryRun = mysqli_query($connection->con, $query);

        if ($queryRun) {
            $_SESSION['message'] = 'Student updated!';
            header("Location: ../pages/read.php");
            exit(0);
        }
        else {
            $_SESSION['message'] = 'Student not updated! :(';
            header("Location: ../pages/read.php");
            exit(0);
        }
    }

    if(isset($_POST['deleteStudent'])) {
        $studentId = mysqli_real_escape_string($connection->con, $_POST['deleteStudent']);
        $query = "DELETE FROM tb_student WHERE id='$studentId'";
        $queryRun = mysqli_query($connection->con, $query);

        if ($queryRun) {
            $_SESSION['message'] = 'Student deleted!';
            header("Location: ../pages/read.php");
        }
        else {
            $_SESSION['message'] = 'Student not deleted! :(';
            header("Location: ../pages/read.php");
        }
    }

?>