<?php
      $pdo = new PDO("mysql:host=localhost;dbname=brief;port=3307",'root','');
      $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $id = $_GET['id'];
    $delete = "DELETE FROM membres WHERE id = '$id'";
    $exe = $pdo->prepare($delete);
    $exe->execute();

    header('Location: ./gestionMembre.php');

?>
