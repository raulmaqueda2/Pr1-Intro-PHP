<?php

$lista = [];
$nombre = " ";
$cantidad = " ";
$precio = " ";

if ((isset($_COOKIE['lista']))) {
    $lista = json_decode($_COOKIE['lista']);
}
if (isset($_POST['nombre'])) {
    $nombre = $_POST['nombre'];
}
if (isset($_POST['cantidad'])) {
    $cantidad = $_POST['cantidad'];
}
if (isset($_POST['precio'])) {
    $precio = $_POST['precio'];
}

if ($nombre == "" | $cantidad == "" | $precio == "" | isset($_POST['rest']) | isset($_POST['del'])) {
    if (isset($_POST['rest'])) {
        restartItems();
    } elseif (isset($_POST['del'])) {
        delItem($_POST['del']);
    } else {
        echo "Faltan parametros";
    }
} else {
    try {
        if (isset($_POST['add'])) {
            addItem([$nombre, $cantidad, $precio]);
        } elseif (isset($_POST['update'])) {
            updateItem([$nombre, $cantidad, $precio], $_POST['update']);
        } else {
            throw new Exception("Error ", 1);
        }
    } catch (\Throwable $th) {
        //echo $th;
    }
}

if (!(isset($_COOKIE['lista'])) || $lista != json_decode($_COOKIE['lista'])) {
    setcookie('lista', json_encode($lista));
}
print_r($GLOBALS['lista']);
function addItem(array $valores)
{
    for ($i = 0; $i < count($GLOBALS['lista']); $i++) {
        if (!$GLOBALS['lista'][$i] == []) {
            if (strtoupper($GLOBALS['lista'][$i][0]) == strtoupper($valores[0])) {
                throw new Exception("Error ", 1);
            }
        }
    }
    $GLOBALS['lista'][count($GLOBALS['lista'])] = $valores;
}
function updateItem(array $valores, int $indice)
{
    $GLOBALS['lista'][$indice] = $valores;
}
function delItem(int $indice)
{
    $GLOBALS['lista'][$indice] = [];
}
function restartItems()
{
    $GLOBALS['lista'] = [];
}
function calAll(){
    $a = 0;
    for ($i=0; $i < count($GLOBALS['lista']); $i++) { 
        $a += $GLOBALS['lista'][$i][1]*$GLOBALS['lista'][$i][2];
    }
    echo $a;
    return $a;
}
function mostrarTabla()
{
?>
    <form action="" method="post">
        <table>
            <tr>
                <td>Nombre</td>
                <td>cantidad</td>
                <td>precio</td>
                <td>coste</td>
                <td>Acciones</td>
            </tr>
            <?php
            foreach ($GLOBALS['lista'] as $key => $value) {
                if ($value == []) {
                } else {
                    print "<tr>";
                    print "<td>";
                    print "$value[0]";
                    print "</td>";
                    print "<td>";
                    print "$value[1]";
                    print "</td>";
                    print "<td>";
                    print "$value[2]";
                    print "</td>";
                    print "<td>";
                    print $value[2]*$value[1];
                    print "</td>";
                    print "<td>";
                    print "<button name='edit' value='$key'>editar</button> <button name='del' value='$key'>eliminar</button>";
                    print "</td>";
                    print "</tr>";
                }
            }
            ?>
            <tr>
                <td colspan="3">total</td>
                <td><?php isset($_POST['cal'])? calAll():"NA" ?></td>
                <td><button name="cal" value="1">Calcular Todo</button></td>
            </tr>
        </table>
    </form>

<?php
}
function form()
{
    if (isset($_POST['edit'])) {
        if (!($_POST['edit'] == null)) {
            print "
                <p>Nombre: <input   value='" . $GLOBALS['lista'][$_POST['edit']][0] . "' name='nombre' type='text'></p>
                <p>Cantidad: <input value='" . $GLOBALS['lista'][$_POST['edit']][1] . "' name='cantidad' type='number'></p>
                <p>Precio: <input   value='" . $GLOBALS['lista'][$_POST['edit']][2] . "' name='precio' type='number'></p>
                <button name='update'   value='$_POST[edit]'>Actualizar</button>
                <button name='rest'     value='1'>Reiniciar </button>

            ";
        }
    } else {
        print "
            <p>Nombre:      <input name='nombre'    type='text'  ></p>
            <p>Cantidad:    <input name='cantidad'  type='number'></p>
            <p>Precio:      <input name='precio'    type='number'></p>
            <button name='add'      value='1'>Añadir    </button>
            <button name='rest'     value='1'>Reiniciar </button>
    ";
    }
}
