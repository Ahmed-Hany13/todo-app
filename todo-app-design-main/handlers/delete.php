<?php
include "../core/validation.php";
include "../core/function.php";
if ($_SERVER['REQUEST_METHOD'] == "GET" && isset($_GET['id']) && !empty($_GET['id'])) {
    $connection = mysqli_connect('localhost','root','','todo');
    $id = trim((int)$_GET['id']);









    $sql = "SELECT * FROM `tasks` WHERE `id` = '$id'";
    $my_query = mysqli_query($connection,$sql);
    $row = mysqli_fetch_row($my_query);
    if(empty($row)){
        Set_Session("Invalid Request","danger");
    }





    $sql = "DELETE FROM `tasks` WHERE `id` = $id";
    $my_query = mysqli_query($connection,$sql);
    if(mysqli_affected_rows($connection) == 1){
        Set_Session("Data Deleted Successfully","success");
    }
    header("location:../design/index.php");
}else{
        Set_Session("Invalid Request","danger");
    }