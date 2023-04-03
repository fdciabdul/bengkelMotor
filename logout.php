<?php
   
    include './config/config.php';
    $db->query("UPDATE user SET is_login = '0' WHERE id = '$_SESSION[id]'");
    $db->query("UPDATE user SET status_notif = '0' WHERE username = '" . $_SESSION['username'] . "'");
    session_start();
    session_destroy();
    header('location:login.php');
?>