<?php
      $pdo = new PDO("mysql:host=localhost;port=3306;dbname=brief2", 'root','');
      $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $id = $_GET['id'];
    $delete = "DELETE FROM membres WHERE id = '$id'";
    $exe = $pdo->prepare($delete);
    $exe->execute();

    header('Location: ./gestionMembre.php');

?>
