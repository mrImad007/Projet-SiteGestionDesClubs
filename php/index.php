<?php
$pdo = new PDO("mysql:host=localhost;port=3306;dbname=brief2", 'root','');
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

$show = 'SELECT * FROM clubs ';
$sh = $pdo->prepare($show);
$sh->execute();

$clubs = $sh->fetchAll(PDO::FETCH_ASSOC);
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./assets/css/home.css">
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css'>
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300&family=Open+Sans:ital@1&family=Roboto:wght@300&display=swap" rel="stylesheet">
    <title>Home</title>
</head>

<body>
    <header>
        <!-- start navigation -->
        <div class="nav">
            <div class="logo">
                <a href="index.php" title="Recode your future">
                    <img src="./images/logo.png" alt="logo">
                </a>
            </div>
            <div class="menu">
                <!-- <a href="index.html">Home</a> -->
                <i class="uil uil-signin"></i>
            </div>
        </div>

        <form class="sign-box" action="./gestionClub.php" method="post">
            <div class="signinform">
                <h3>Sign in</h3>
                <p>Log in to access your management account on Youcode Clubs</p>
                <div class="inputboite">
                    <input type="text" name="user" placeholder="Username"  />
                </div>
                <div class="inputboite">
                    <input type="password" name="pass" placeholder="Password" require />
                </div>
                <div class="inputboite connect-btn">
                    <button class="connect">Connect</button>
                </div>
            </div>
        </form>
    </header>
    <!-- end navigation -->
    <section>

        <div class="contenu">
            <!-- start content -->
            <h1>LA VIE ESTUDIANTINE</h1>

            <div class="intro">
                <h2>La dynamique associative des élèves</h2>
                <div class="text">
                    <p>La formation à l’Ecole Youcode va au-delà du cadre strictement scolaire, les initiatives du travail associatif sont vivement encouragées. La vie associative vient pour compléter les études, Elle permet aux élèves de forger leur personnalité en développant davantage le sens de contact et le travail en équipe dont le maître mot est : agissons ensemble.</p>
                    <p>Youcode considère la participation à la vie associative comme un complément indispensable de son projet éducatif. Dans cette perspective, un bouquet d’association a vu le jour permettant considérablement aux élèves de l’Ecole de rompre avec le système traditionnel et de développer ainsi un esprit communautaire et associatif.</p>
                </div>
                <div class="ttl">
                    <h2>Listes des clubs de l’école</h2>
                </div>
            </div>

            <div class="container">
                <?php foreach($clubs as $club) : ?>
                <!-- club 1 -->
                <div class="club">
                    <div class="cont">
                        <div class="img">
                            <img src="<?php echo $club['image'];?>" alt="#">
                        </div>
                        <div class="description">
                            <h3><?php echo $club['Name'];?></h3>
                            <h4>Presentation</h4>
                            <p>
                            <?php echo $club['Description'];?>
                            </p>
                            <h4>Missions</h4>
                            <ul class="tasks">
                                <li><?php echo $club['Mission'];?></li>
                                
                            </ul>
                        </div>
                    </div>
                </div>
                <?php endforeach;?>
            </div>
        </div>
    </section>
    <!--/.footer-->
    <footer id="footer" class="footer">
        <div class="copyright">
            <p>Copyright 2022 <a href="#"> Karim Cherraoui - Imad Eddine ZAOUI </a>YouCode Student. Tous droits reservé</p>
        </div>
    </footer>




    <script type="text/javascript" src="./assets/js.js"></script>

</body>

</html>
