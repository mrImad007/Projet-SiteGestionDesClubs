<?php 
    session_start();
    unset($_SESSION['user']);
    session_destroy($_SESSION['user']);
    header('Location: ./index.php')
?>
