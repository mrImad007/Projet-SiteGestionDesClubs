
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css'><link href="https://fonts.googleapis.com/css2?family=Inter:wght@300&family=Open+Sans:ital@1&family=Roboto:wght@300&display=swap" rel="stylesheet">
    <title>Ajouter des clubs</title>
</head>
<body>
                <div class="forms" action="<?php echo $_SERVER['PHP_SELF'] ?> "method="post">
                    <form method="post">
                        <input type="text" name="clubName" placeholder="Nom du club"><br><br>
                        <input type="text" name="clubDesc" placeholder="description"><br><br>
                        <input type="text" name="clubMiss" placeholder="mission"><br><br>
                        <input type="file" id="img" name="img" accept="image/*"><br><br>
                        <input type="text" name="clubCatg" placeholder="category"><br><br>
                        <button>add</button>
                    </form>
                </div>

                <?php

                $pdo = new PDO("mysql:host=localhost;port=3306;dbname=brief2", 'root','');
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
</body>
</html>


