<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicios 1-5</title>
</head>

<body>
    <nav>
        <form action="" method="post">
            <?php
            for ($i = 0; $i < 5 ; $i++) {
                echo ("<button name='exercices' value='$i'>Exercise0" . ($i + 1) . "</button>");
            }
            ?>
        </form>
    </nav>
    <?php
    switch (isset($_POST['exercices']) ? $_POST['exercices'] : " ") {
        case '0':
            include("./Ex1-5/Exercices/Exercise01.php");
            break;
        case '1':
            include("./Ex1-5/Exercices/Exercise02.php");
            break;
        case '2':
            include("./Ex1-5/Exercices/Exercise03.php");
            break;
        case '3':
            include("./Ex1-5/Exercices/Exercise04.php");
            break;
        case '4':
            include("./Ex1-5/Exercices/Exercise05.php");
            break;
        case '5':
            include("./Ex1-5/Exercices/ExercisesArrays.php");
            break;
        default:
            include("./Ex1-5/Exercices/Exercise01.php");
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