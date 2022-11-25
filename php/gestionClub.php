<?php
session_start();
if(!isset($_SESSION['user'])){
  if (isset($_POST['user'])){
    $pdo = new PDO("mysql:host=localhost;port=3306;dbname=brief2",'root','');
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $name = $_POST['user'];
    $password = $_POST['pass'];
    $query = "SELECT * FROM `admin` WHERE username = '$name' AND `password` = '$password'";
    $stet = $pdo->prepare($query);
    $stet->execute();
    $user = $stet->fetchAll(PDO::FETCH_ASSOC);
    
    if (!$user){
      header('Location: ./index.php'); 
    }
    else{
      $_SESSION['user'] = $name;
    }
  }
}
?>

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
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300&family=Open+Sans:ital@1&family=Roboto:wght@300&display=swap" rel="stylesheet" />
  <link rel="stylesheet" href="./assets/css/ClubGes.css" />
  <title>gestion des clubs</title>
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
      <a href="./logOut.php">
        <button class="btnlog" type="submit">Déconnecter</button>
      </a>
      <!-- </div> -->
    </div>

  </div>
  <br />
  <!-- end navigation -->

  <!-- start content -->
  <div class="title">
    <h1>Gestion des clubs</h1>
  </div>
  <div class="addclub">
    <a href="./addClub.php">
      <button>Ajouter Club</button>
    </a>
  </div><br><br>
  <section>
    <?php foreach ($clubs as $club) : ?>
      <!-- club 1 -->
      <div class="club">
        <div class="img">
          <img src="<?php echo $club['image'] ?>" alt="#" />
        </div>
        <div class="name"><?php echo $club['Name'] ?>s</div>
        <div class="btns">

          <form action="./mdfClub.php" method="get">
            <input type="hidden" name="id" value="<?php echo $club['id']; ?>">
            <button class="mdfy">Modifier</button>
          </form>

          <form action="./deleteClub.php" method="get">
            <input type="hidden" name="id" value="<?php echo $club['id']; ?>">
            <button type="submit" class="dlt">Supprimer</button>
          </form>
        </div>
      </div>
      <br /><br />
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