<?php 
$con = mysqli_connect("localhost", "root", "", "php_crud");

if (!$con) {
    die('Connection Failed'. mysqli_connect_error());
}

?>