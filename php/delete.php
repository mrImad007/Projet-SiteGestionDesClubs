<?php
    $pdo = new PDO("myql:host=localhost;dbname=brief2;port=3306",'root','');
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    

?>