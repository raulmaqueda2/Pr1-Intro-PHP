<?php
session_start();
include './list.php';

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Compra</title>
</head>

<body>
    <h1>Compra lista</h1>
    <form action="" method="post">
        <?php form()?> 
    </form>
    <?php mostrarTabla()?>
</body>

</html>