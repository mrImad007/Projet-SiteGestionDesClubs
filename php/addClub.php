<?php
$name = $_POST["clubName"];
$desc = $_POST["clubDesc"];
$mission = $_POST["clubMiss"];
$category = $_POST["clubCatg"];

$conn = new PDO("mysql:host=localhost;dbname=brief2;port=3306",'root','');

$ins = "INSERT INTO `clubs` (`Name`, `Description`, `Mission`, `image`, `id`, `categorie`) VALUES ('?','?','?','?','?','?')";
$del = "DELETE FROM `clubs` WHERE   "
$exe = $conn->prepare($ins);
$exe->execute();

<div class="add" action="<?php echo $_SERVER['PHP_SELF'] ?>"method="post"">
                <form action="#" method="post">
                    <input type="text" name="clubName" placeholder="Nom du club"><br><br>
                    <input type="text" name="clubDesc" placeholder="description"><br><br>
                    <input type="text" name="clubMiss" placeholder="mission"><br><br>
                    <input type="text" name="clubCatg" placeholder="category"><br><br>
                    <input type="file" id="img" name="img" accept="image/*"><br><br>
                </form>
            </div>

?>