<?php
 require 'connect.php';
session_start();
 if(isset($_POST['purchase'])){
    $_SESSION['id'] = $_POST['purchase'];
    echo  $_SESSION['id'];
    header("Location: purchase.php");
}
else if(isset($_POST['return'])){
    $_SESSION['id'] = $_POST['return'];
    echo  $_SESSION['id'];
    header("Location: return.php");
}
else if(isset($_POST['edit'])){
    $_SESSION['id'] = $_POST['edit'];
    echo  $_SESSION['id'];
    header("Location: edit.php");
 } 
 else if(isset($_POST['delete'])){
    $_SESSION['id'] = $_POST['delete'];
    echo  $_SESSION['id'];
    header("Location: delete.php");
 }
 ?> 