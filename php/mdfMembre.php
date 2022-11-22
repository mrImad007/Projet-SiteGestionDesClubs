<?php 
  $pdo = new PDO("mysql:host=localhost;dbname=brief;port=3307",'root','');
  $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $id = $_GET['id'];

    $show = "SELECT * FROM membres WHERE id = '$id'";
    $sh=$pdo->prepare($show);
    $sh->execute();

    $membre = $sh->fetchAll(PDO::FETCH_ASSOC);
    // var_dump($membre[0]['Name']);
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
            <a class="menb" href="gestionMembre.php">Membres</a>
            <!-- ---------- logout -------------- -->
            <!-- <div class="logout-btn"> -->
            <button class="btnlog" action="#" method="POST" type="submit">déconnecter</button>
            <!-- </div> -->
        </div>

    </div>
    <br />
    <!-- end navigation -->
<section>

    <h2>Modifier Club</h2>
    
    <div class="forms" action="<?php echo $_SERVER['PHP_SELF'] ?> " method="post">
        <form method="post">
            <input type="text" name="membreName" placeholder="Nom" value="<?php echo $membre[0]['name'];?>"><br><br>
            <input type="text" name="membreAge" placeholder="Age" value="<?php echo $membre[0]['age'];?>"><br><br>
            <input type="text" id="img" name="img" placeholder="image URL" value="<?php echo $membre[0]['image'];?>"><br><br>
            <input type="text" name="membreClub" placeholder="Club" value="<?php echo $membre[0]['club']; ?>"><br><br>
            <button type="submit">Modifier</button>
        </form>
    </div>
    
</section>

<?php
                  $pdo = new PDO("mysql:host=localhost;dbname=brief;port=3307",'root','');
                  $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

                if(isset($_POST['membreName'])){
                    
                $name = $_POST['membreName'];
                $age = $_POST['membreAge'];
                $club = $_POST['membreClub'];
                $img = $_POST['img'];

                $update= "UPDATE `membres`
                 SET `name` = '$name', `age` = '$age' , `club` = '$club' , `image` = '$img'    
                 WHERE id = '$id';";

                $exe = $pdo->prepare($update);
                $exe->execute();

                header('Location: ./gestionMembre.php');
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