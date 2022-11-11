<?php
class Connection {
    public $con;

    public function __construct() {
        $this->con = mysqli_connect("localhost", "root", "", "php_crud");
    }
}
?>