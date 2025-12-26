<?php
include "../core/validation.php";
include __DIR__ . "/../core/function.php";
$connection = mysqli_connect("localhost","root","","todo");


if($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['title']))
{
    $id = $_POST['id'];
    $title = trim(htmlspecialchars(htmlentities($_POST['title'])));
    $error = validateTask($title);
    if(!empty($error)){
        Set_Session($error , "danger");
        header("Location: ../design/index.php");
        exit;
    }
    else{
        $sql = "INSERT INTO `tasks`(title) Values('$title')";
        $my_query = mysqli_query($connection,$sql);
        Set_Session("Data Inserted Successfully","success");
    }
    header("location:../design/index.php");
    
}








