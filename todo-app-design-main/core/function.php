<?php
session_start();

function Set_Session($message, $type)
{
    $_SESSION['message'] = [
        'message' => $message,
        'type' => $type,
    ];
}


function Show_Session()
{
    if (isset($_SESSION['message'])) {
        $message = $_SESSION['message']['message'];
        $type = $_SESSION['message']['type'];
        echo "<div class='alert alert-$type'>$message</div>";
        unset($_SESSION['message']);
    }
}
