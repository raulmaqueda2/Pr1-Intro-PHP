<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicios Array</title>
</head>

<body>
    <nav>
        <form action="" method="post">
            <?php
            for ($i = 0; $i < 1; $i++) {
                echo ("<button name='exercices' value='$i'>Exercise0" . ($i + 1) . "</button>");
            }
            ?>
        </form>
    </nav>
    <?php
    switch (isset($_POST['exercices']) ? $_POST['exercices'] : " ") {
        case '0':
            include("./Arrays/Exercices/ExercisesArrays.php");
            break;
        default:
            include("./Arrays/Exercices/ExercisesArrays.php");
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