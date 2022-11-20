<?php
    session_start();
    if(!isset($_SESSION['username'])){
        if(isset($_POST['name'])){
            $pdo = new PDO("mysql:host=localhost;port=3306;dbname=brief2", 'root','');
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

            $name = $_POST['name'];
            $password = $_POST['password'];

            $query = "SELECT * FROM `admin` WHERE username = '$name' AND password = '$password'";
            $stet = $pdo->prepare($query);
            $stet->execute();

            $user = $stet->fetchAll(PDO::FETCH_ASSOC);

            if (!$user) {
                header('Location: ./index.php');}
                $_SESSION['username'] = $name;
            }else{
                header('Location: ./index.php');
            }
    }
    ?>
    

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css'><link href="https://fonts.googleapis.com/css2?family=Inter:wght@300&family=Open+Sans:ital@1&family=Roboto:wght@300&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="./css/ClubGes.css">
    <title>gestion des clubs</title>
</head>
<body>
        <!-- start navigation -->
        <div class="nav">
            <div class="logo">
               <a href="index.php" style="color: black;">
                <img src="logo.png" alt="logo">
            </a>
            </div>
            <div class="menu">
                <a href="gestionClub.php">Clubs</a>
                <a href="membreGestion.php">Membres</a>
            </div>
        </div><br>
        <!-- end navigation -->

        <!-- start content -->
        <div class="title"><h1>Gestion des clubs</h1></div>
        <header>
            <!-- club 1 -->
            <div class="addBtn">
                <a href="addClub.php">
                <button>Ajouter Club</button>
                </a>
            </div>
            <div class="club">
                <div class="img">
                    <img src="greenInvest.jpg" alt="#">
                </div>
                <div class="name">
                    Club des Arts et métiers
                </div>
                <div class="btns">
                    <button class="mdfy">Modifier</button>
                    <button class="dlt">Supprimer</button> 
                </div>
            </div><br><br>
            <!-- club 2 -->
            <div class="club">
                <div class="img">
                    <img src="greenInvest.jpg" alt="#">
                </div>
                <div class="name">
                    Club des Arts et métiers
                </div>
                <div class="btns">
                    <button class="mdfy">Modifier</button>
                    <button class="dlt">Supprimer</button>
                </div>
            </div><br><br>
            <!-- club 3 -->
            <div class="club">
                <div class="img">
                    <img src="greenInvest.jpg" alt="#">
                </div>
                <div class="name">
                    Club des Arts et métiers
                </div>
                <div class="btns">
                    <button class="mdfy">Modifier</button>
                    <button class="dlt">Supprimer</button>
                </div>
            </div><br><br>
            <!-- end content -->
            <div>
                <a href="logout.php">
                    <button>log out</button>
                </a>
            </div>
            <!--/.footer-->
                <footer id="footer"  class="footer">
                    <div class="container">
                        <div class="hm-footer-copyright text-center" style="width:1500px ;">
                            <div class="footer-social">
                                <a href="#"><i class="fa fa-facebook"></i></a>
                                <a href="#"><i class="fa fa-instagram"></i></a>
                                <a href="#"><i class="fa fa-linkedin"></i></a>
                            </div>
                                <p style="font-family:Inter ;">
                                &copy;copyright. designed and developed by <a href="https://www.linkedin.com/in/imad-eddine-zaoui-a2ab95246/"><span style="color: rgb(65, 166, 255);">ZAOUI Imad Eddine</span></a>
                                </p>
                        </div>
                    </div>
                </footer>
        </header>
</body>

</html>