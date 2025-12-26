<?php
// Create database
$connection = mysqli_connect("localhost","root","");

if (!$connection){
    echo mysqli_connect_error();
}


// $sql = "DROP DATABASE todo_app";
$sql = "CREATE DATABASE if  not exists todo";
$result = mysqli_query($connection,$sql);
mysqli_close($connection);




//Create tables

$connection = mysqli_connect("localhost","root","","todo");

if (!$connection){
    echo mysqli_connect_error();
}

$sql = "CREATE TABLE  IF NOT EXISTS tasks(
    `id` int(11) Primary Key AUTO_INCREMENT,
    `title` varchar(255) NOT NULL
)";
$my_query = mysqli_query($connection,$sql);

mysqli_close($connection);



















