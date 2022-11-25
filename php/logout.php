<?php 
    session_start();
    unset($_SESSION['user']);
    session_destroy();
    if(!isset($_SESSION['user'])){
        header('Location: ./index.php');
    }
    else{
        header('Location: ./gestionMembre.php');
    }
?>
