<?php
session_start();
require 'dbConnection.php';

if (isset($_POST['saveStudent'])) {
    $name = mysqli_real_escape_string($con, $_POST['name']);
    $email = mysqli_real_escape_string($con, $_POST['email']);
    $phone = mysqli_real_escape_string($con, $_POST['phone']);
    $age = mysqli_real_escape_string($con, $_POST['age']);
    $course = mysqli_real_escape_string($con, $_POST['course']);

    $query = "INSERT INTO tb_student(name, email, phone, age, course) VALUES ('$name', '$email', '$phone', '$age', '$course')";
    $query_run = mysqli_query($con, $query);

    if ($query_run) {
        $_SESSION['message'] = 'Student saved!';
        header("Location: create.php");
        exit(0);
    }
    else {
        $_SESSION['message'] = 'Student not saved! :(';
        header("Location: create.php");
        exit(0);
    }
}

?>