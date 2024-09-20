<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicios 1-5</title>
</head>
<?php

?>
<body>
    <nav>
        <form action="" method="post">
            <?php
            for ($i = 0; $i < 2 ; $i++) {
                echo ("<button name='exercices' value='$i'>Exercise0" . ($i + 1) . "</button>");
            }
            ?>
        </form>
    </nav>
    <?php
    switch (isset($_POST['exercices']) ? $_POST['exercices'] : " ") {
        case '0':
            include("./Sessions/Exercices/ExerciseSession01.php");
            break;
        case '1':
            include("./Sessions/Exercices/ExerciseSession02.php");
            break;
        default:
            include("./Sessions/Exercices/ExerciseSession01.php");
            break;
    }
    ?>
</body>
<style>
    body {
        align-items: center;
        text-align: center;
    }
</style>

</html>