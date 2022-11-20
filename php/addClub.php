<?php
$name = $_POST["clubName"];
$desc = $_POST["clubDesc"];
$mission = $_POST["clubMiss"];
$category = 

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