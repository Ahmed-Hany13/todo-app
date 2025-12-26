<?php
include "../core/validation.php";
include "../core/function.php";
if ($_SERVER['REQUEST_METHOD'] == "POST" && isset($_POST['title']) ) {
    $connection = mysqli_connect('localhost','root','','todo');
    $id = trim((int)$_GET['id']);
    $title = trim(htmlspecialchars(htmlentities($_POST['title'])));
    validateTask("title");




    $sql = "UPDATE `tasks` set `title` = '$title' WHERE `id` = '$id'";
    $my_query = mysqli_query($connection,$sql);



    if(mysqli_affected_rows($connection) == 1){
        Set_Session("Data Updated Successfully","success");
    }

    header("location:../design/index.php");
    mysqli_close($connection);
}
