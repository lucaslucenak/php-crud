<?php
session_start();
require './connection/dbConnection.php';

$connection = new Connection();

if (isset($_POST['saveStudent'])) {
    $name = mysqli_real_escape_string($connection->con, $_POST['name']);
    $email = mysqli_real_escape_string($connection->con, $_POST['email']);
    $phone = mysqli_real_escape_string($connection->con, $_POST['phone']);
    $age = mysqli_real_escape_string($connection->con, $_POST['age']);
    $course = mysqli_real_escape_string($connection->con, $_POST['course']);

    $query = "INSERT INTO tb_student(name, email, phone, age, course) VALUES ('$name', '$email', '$phone', '$age', '$course')";
    $query_run = mysqli_query($connection->con, $query);

    if ($query_run) {
        $_SESSION['message'] = 'Student saved!';
        header("Location: pages/create.php");
        exit(0);
    }
    else {
        $_SESSION['message'] = 'Student not saved! :(';
        header("Location: pages/create.php");
        exit(0);
    }
}

?>