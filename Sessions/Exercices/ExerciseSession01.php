<?php
session_start();

$trabajador = "Inserta tu nombre...";

$bebidas = [
    "leche" => 0,
    "refresco" => 0,
];

if (isset($_COOKIE['bebidas'])) {
    $bebidas = json_decode($_COOKIE['bebidas'], true);
}
if (isset($_POST['sel'])) {
    if (isset($_POST['cantidad'])) {
        if (isset($_POST['add'])) {
            if ($_POST['sel'] === "leche") {
                $bebidas['leche'] += $_POST['cantidad'];
            } else {
                $bebidas['refresco'] += $_POST['cantidad'];
            }
        }
        if (isset($_POST['del'])) {
            if ($_POST['sel'] === "leche") {
                if ($_POST['cantidad'] <= $bebidas['leche']) {
                    $bebidas['leche'] -= $_POST['cantidad'];
                } else {
                    echo " Error";
                }
            } else {
                if ($_POST['cantidad'] <= $bebidas['leche']) {
                    $bebidas['refresco'] -= $_POST['cantidad'];
                } else {
                    echo " Error";
                }
            }
        }
        if (isset($_POST['rest'])) {
            $bebidas = [
                "leche" => 0,
                "refresco" => 0,
            ];
        }
        setcookie("bebidas", json_encode($bebidas));
    }
}
if (!(isset($_COOKIE['bebidas']))) {
    setcookie('bebidas', json_encode($bebidas));
}


if (isset($_POST['trabajador'])) {
    $trabajador = $_POST['trabajador'];
    $_SESSION['trabajador'] = $trabajador;
    setcookie('trabajador', $trabajador);
}
if (isset($_COOKIE["trabajador"])) {
    $trabajador = $_COOKIE["trabajador"];
}
?>

<form action="" method="post">
    <p>Nombre trabajador: <input name="trabajador" type="text" placeholder="<?php echo $trabajador; ?>"> <button>Guardar</button></p>
</form>
<form action="" method="post">
    <p>Seleciona un producto:
        <select name="sel" id="">
            <option value="leche">leche</option>
            <option value="refresco">refresco</option>
        </select>
    </p>
    <p>Cantidad: <input name="cantidad" type="number" min="1" max="100" value=1 required> </p>
    <p>
        <button name="add" value="1">Añadir</button>
        <button name="del" value="1">Eliminar</button>
        <button name="rest" value="1">Resetear</button>
    </p>
    <h3>Stocks tienda: </h3>
    <h7>
        <p>Leche: <?php echo $bebidas["leche"]; ?> </p>
        <p>Refrescos: <?php echo $bebidas["refresco"]; ?> </p>

    </h7>

</form>