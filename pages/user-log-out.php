<?php
    session_start();
    session_unset();
    header('location:log-in.php');
?>