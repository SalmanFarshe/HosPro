<?php
    session_start();
    $admin_mood = $_SESSION['admin_mood'];
    if(!$admin_mood)
    {
        header('location:admin.php');
    }
?>