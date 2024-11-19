<?php
    session_start();
    $user_mood = $_SESSION['user_mood'];
    if(!$user_mood)
    {
        header('location:log-in.php');
    }
?>