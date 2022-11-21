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
<?php
                $name = $_POST["clubName"];
                $desc = $_POST["clubDesc"];
                $mission = $_POST["clubMiss"];
                $category = $_POST["clubCatg"];
            
                $conn = new PDO("mysql:host=localhost;dbname=brief2;port=3306",'root','');
                $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

                $ins = "INSERT INTO `clubs` (`Name`, `Description`, `Mission`, `image`, `id`, `categorie`) VALUES ('?','?','?','?','?','?')";
                $exe = $conn->prepare($ins);
                $exe->execute();
?>
                <div class="forms" action="<?php echo $_SERVER['PHP_SELF'] ?> "method="post">
                    <form method="post">
                        <input type="text" name="clubName" placeholder="Nom du club"><br><br>
                        <input type="text" name="clubDesc" placeholder="description"><br><br>
                        <input type="text" name="clubMiss" placeholder="mission"><br><br>
                        <input type="text" name="clubCatg" placeholder="category"><br><br>
                        <input type="file" id="img" name="img" accept="image/*"><br><br>
                    </form>
                </div>
</body>
</html>