<?php
    session_start();
    include('./isLoged.php');
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css'>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300&family=Open+Sans:ital@1&family=Roboto:wght@300&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="./assets/css/addclub-style.css" />
    <title>Ajouter des membres</title>
</head>

<body>

    <!-- start navigation -->
    <div class="nav">
        <div class="logo">
            <a href="index.php" style="color: black">
                <img src="./images/logo.png" alt="logo" />
            </a>
        </div>
        <div class="menu">
            <a href="gestionClub.php">Clubs</a>
            <a class="menb" href="gestionMembre.php">Membres</a>
            <!-- ---------- logout -------------- -->
            <!-- <div class="logout-btn"> -->
            <a href="./logout.php">
                <button class="btnlog" type="submit">Déconnecter</button>
            </a>
            <!-- </div> -->
        </div>

    </div>
    <br />
    <!-- end navigation -->
<section>

    <h2>Ajouter un Membre</h2>
    
    <div class="forms" action="<?php echo $_SERVER['PHP_SELF'] ?> " method="post">
        <form method="post">
            <input type="text" name="memberName" placeholder="Nom du membre"><br><br>
            <input type="text" id="img" name="img" placeholder="image URL"><br><br>
            <input type="text" name="membreAge" placeholder="Age"><br><br>
            <input type="text" name="membreClass" placeholder="Class"><br><br>
            <textarea type="text" name="membreClub" placeholder="Club"></textarea><br><br>
            <button>Ajouter</button>
        </form>
    </div>
    
</section>

<?php

$pdo = new PDO("mysql:host=localhost;port=3306;dbname=brief2", 'root','');
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

if(isset($_POST['memberName'])){
$name = $_POST['memberName'];
$age = $_POST['membreAge'];
$class = $_POST['membreClass'];
$club = $_POST['membreCLub'];
$img = $_POST['img'];

$ins = "INSERT INTO `membres` (`Name`, `image`, `class`, `age`, `club`) VALUES ('$name','$img','$class','$age','$club')";
$exe = $pdo->prepare($ins);
$exe->execute();

header('Location: ./gestionClub.php');
}
?>


    <!--/.footer-->
    <footer id="footer" class="footer">
        <div class="copyright">
            <p>Copyright 2022 <a href="https://www.linkedin.com/in/imad-eddine-zaoui-a2ab95246/">Imad Eddine ZAOUI </a>YouCode Student. Tous droits reservé</p>
        </div>
    </footer>
</body>

</html>