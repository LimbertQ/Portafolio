<?php
//include './funcion.php';
include '../../database.php';



//$cod = $_POST['codigo'];
$cod = $_GET["codigo2"];

$conn = get_connection();

//UPDATE activo set DESCRIPCION='nuevo' WHERE (CODACTIVO = '222222')
$query = "DELETE FROM activo WHERE CODACTIVO = '$cod'";


$resultado = $conn->query($query);
if ($resultado) {
    header("Location: ./viewActivo2.php");
    exit();
}
