<?php

require 'connect.php';
session_start();

if(isset($_POST['edit'])){
    $_SESSION['id'] = $_POST['edit'];
    echo  $_SESSION['id'];
    header("Location: edit.php");
}



?>