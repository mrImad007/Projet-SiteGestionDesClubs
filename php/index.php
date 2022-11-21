<?php
    $pdo = new PDO("mysql:host=localhost;dbname=brief2;port=3306",'root','');
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $show = 'SELECT * FROM clubs ';
    $sh=$pdo->prepare($show);
    $sh->execute();

    $clubs = $sh->fetchAll(PDO::FETCH_ASSOC);
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/home.css">
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
                    <img src="logo.png" alt="logo">
                </a>
            </div>
            <div class="menu">
                <!-- <a href="index.html">Home</a> -->
                <i class="uil uil-signin"></i>
            </div>
        </div>
        <div class="sign-box">
            <div class="signinform">
                <h3>Sign in</h3>
                <p>Log in to access your management account on Youcode Clubs</p>

            <form action="gestionClub.php" method="POST">
            <div class="inputboite">
                  <input type="text" name="name" placeholder="Username" />
                </div>
                <div class="inputboite">
                  <input type="password" placeholder="Password" name="password"/>
                </div>
                <div class="inputboite connect-btn">
                  <input class="connect" type="submit" value="Connect" />
                </div>
              </div>
            </form>

        </div>
    </header>
    <!-- end navigation -->
    <div class="contenu">
            <!-- start content -->
    <h1>La vie estudiantine</h1>

    <div class="intro">
        <h2>La dynamique associative des élèves</h2>
        <div class="text">
            <p>La formation à l’Ecole Youcode va au-delà du cadre strictement scolaire, les initiatives du travail associatif sont vivement encouragées. La vie associative vient pour compléter les études, Elle permet aux élèves de forger leur personnalité en développant davantage le sens de contact et le travail en équipe dont le maître mot est : agissons ensemble.
            Youcode considère la participation à la vie associative comme un complément indispensable de son projet éducatif. Dans cette perspective, un bouquet d’association a vu le jour permettant considérablement aux élèves de l’Ecole de rompre avec le système traditionnel et de développer ainsi un esprit communautaire et associatif.</p>
        </div>
        <div class="ttl">
            <h2>Listes des clubs de l’école</h2>
        </div>
    </div>

    <div class="container" style="flex-wrap: wrap; gap: 30px;">
        <!-- club 1 -->
        <?php foreach($clubs as $club) : ?>
        <div class="club">
            <div class="cont">
                <div class="img">
                    <img src="greenInvest.jpg" alt="#">
                </div>
                <div class="description">
                    <h3><?php echo $club['Name'] ;?></h3>
                    <h4>Presentation</h4>
                    <p>
                    <?php echo $club['Description'] ;?>
                    </p>
                    <ul class="tasks">
                        <li><?php echo $club['Mission'] ?></li>
                        
                    </ul>
                </div>
            </div>
        </div>
        <?php endforeach; ?>
    </div>
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




    <script type="text/javascript" src="./js.js"></script>
</body>
</html>