<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicios</title>
</head>

<body>
    <nav>
        <form action="" method="post">
            <?php
            $archivos = scandir("./Exercices");
            for ($i = 0; $i < count($archivos) - 2; $i++) {
                echo ("<button name='exercices' value='$i'>Exercise0" . ($i + 1) . "</button>");
            }
            ?>
        </form>
    </nav>
    <?php
    switch (isset($_POST['exercices']) ? $_POST['exercices'] : " ") {
        case '0':
            include("./Exercices/Exercise01.php");
            break;
        case '1':
            include("./Exercices/Exercise02.php");
            break;
        case '2':
            include("./Exercices/Exercise03.php");
            break;
        case '3':
            include("./Exercices/Exercise04.php");
            break;
        case '4':
            include("./Exercices/Exercise05.php");
            break;
        default:
            include("./Exercices/Exercise01.php");
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