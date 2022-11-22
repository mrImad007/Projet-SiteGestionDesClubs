<?php

session_start();

$pdo = new PDO("mysql:host=localhost;port=3306;dbname=brief2", 'root','');
  $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

  $shw = "SELECT * FROM `membres`";
  $exe = $pdo->prepare($shw);
  $exe->execute();

  $membres =$exe->fetchAll(PDO::FETCH_ASSOC);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./assets/css/gestMemb.css">
    <title>Document</title>
</head>
<body>
        <!-- start navigation -->
        <div class="nav">
            <div class="logo">
                <a href="index.html" style="color: black;">
                <img src="./images/logo.png" alt="logo">
            </a>
            </div>
            <div class="menu">
                <a href="gestionClub.php">Clubs</a>
                <a class="menb" href="gestionMembre.php">Membres</a>
                <a href="./logOut.php">
                <button class="btnlog" type = "submit" >Déconnecter</button>
                </a>
            </div>
        </div><br>
        <!-- end navigation -->
<section>
<?php foreach($membres as $membre): ?>
    <div class="boxes">
        <div class="box">
                <div class="cont-box">
                    <img class="img-profile" src="<?php echo $membre['image']; ?>">
                    <div class="box-name">
                        <h5>Name</h5>
                        <p class="name"><?php echo $membre['name']; ?></p>
                    </div>
                    <div class="box-age">
                        <h5>Age </h5>
                        <p class="age"><?php echo $membre['age']; ?></p>
                    </div>
                    <div class="box-club">
                        <h5>Club </h5>
                        <p class="club"><?php echo $membre['club']; ?></p>
                    </div>
                    <div class="crud-btn">
                        
                        <form action="./mdfMembre.php" method="get">
                            <input type="hidden" name="id" value="<?php echo $membre['id']; ?>">
                            <button class="ajt-club">Modifier</button> 
                        </form>

                        <form action="./deleteMembre.php" method="get">
                            <input type="hidden" name="id" value="<?php echo $membre['id']; ?>">
                            <button class="remov-memb" type="submit">Supprimer</button> 
                        </form>
                    </div>
                    
                    
                </div>
                
            </div>
            
        </div>
    <?php endforeach; ?>
    </section>
        
        
        
    
        
        
        
        <!--/.footer-->
    <footer id="footer" class="footer">
    <div class="copyright">
        <p>Copyright 2022 <a href="#"> Karim Cherraoui - Imad Eddine ZAOUI </a>YouCode Student. Tous droits reservé</p>
          </div>                
    </footer>
</body>
</html>