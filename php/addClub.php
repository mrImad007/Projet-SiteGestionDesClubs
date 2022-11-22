<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css'>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300&family=Open+Sans:ital@1&family=Roboto:wght@300&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="./assets/css/addclub-style.css" />
    <title>Ajouter des clubs</title>
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
            <a class="menb" href="membreGestion.php">Membres</a>
            <!-- ---------- logout -------------- -->
            <!-- <div class="logout-btn"> -->
            <button class="btnlog" action="#" method="POST" type="submit">déconnecter</button>
            <!-- </div> -->
        </div>

    </div>
    <br />
    <!-- end navigation -->
<section>

    <h2>Ajouter Club</h2>
    
    <div class="forms" action="<?php echo $_SERVER['PHP_SELF'] ?> " method="post">
        <form method="post">
            <input type="text" name="clubName" placeholder="Nom du club"><br><br>
            <input type="text" name="clubMiss" placeholder="mission"><br><br>
            <input type="text" id="img" name="img" placeholder="image URL"><br><br>
            <input type="text" name="clubCatg" placeholder="category"><br><br>
            <textarea type="text" name="clubDesc" placeholder="description"></textarea><br><br>
            <button>Ajouter</button>
        </form>
    </div>
    
</section>
<?php

$pdo = new PDO("mysql:host=localhost;port=3307;dbname=brief", 'root','');
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

if(isset($_POST['clubName'])){
$name = $_POST['clubName'];
$desc = $_POST['clubDesc'];
$mission = $_POST['clubMiss'];
$category = $_POST['clubCatg'];

$ins = "INSERT INTO `clubs` (`Name`, `Description`, `Mission`, `image`, `categorie`) VALUES ('$name','$desc','$mission','','$category')";
$exe = $pdo->prepare($ins);
$exe->execute();

echo '<script type="text/JavaScript"> 
alert("CLub ajouté par sucess");
</script>';

header('Location: ./gestionClub.php');
}
?>


    <!--/.footer-->
    <footer id="footer" class="footer">
        <div class="copyright">
            <p>Copyright 2022 <a href="#"> Karim Cherraoui - Imad Eddine ZAOUI </a>YouCode Student. Tous droits reservé</p>
        </div>
    </footer>
</body>

</html>


