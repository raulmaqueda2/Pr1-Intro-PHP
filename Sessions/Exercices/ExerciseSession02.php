<?php
session_start();
if (!(isset($_COOKIE['array']))) {
    $array = [rand(10, 30), rand(10, 30), rand(10, 30),];
    setcookie('array', json_encode($array));
} else {
    $array = json_decode($_COOKIE['array']);
}

if (isset($_POST['mod'])) {

    $array[$_POST["sel"]] = $_POST['val'];
    unset($_COOKIE);
    setcookie('array', json_encode($array));


}
if (isset($_POST['res'])) {

    $array[$_POST["sel"]] = $_POST['val'];
    unset($_COOKIE);
    $array = [rand(10, 30), rand(10, 30), rand(10, 30),];
    setcookie('array', json_encode($array));


}
?>
<form action="" method="post">
    <p>Selecionar:

        <select name="sel" id="">
            <?php
            for ($i = 0; $i < count($array); $i++) {
                echo ("<option value='$i'>pos$i : $array[$i]</option>");
            }
            ?>
        </select>
    </p>
    <p> Nuevo valor: 
        <input name="val" type="number">
    </p>
    <button name="mod" value="1">modificar</button>
    <button name="med" value="1">promedio</button>
    <button name="res" value="1">reset</button>

</form>
<p>Actualmente: <?php for ($i=0; $i < count($array); $i++) { 
          echo $array[$i]." " ;
    }; ?></p>





<?php if (isset($_POST['med'])) {
    # code...
?>
<p> promedio: <?php echo array_sum($array)/count($array); ?> </p>

<?php

}?>

