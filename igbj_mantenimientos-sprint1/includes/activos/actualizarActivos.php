<?php
//include './funcion.php';
include '../../database.php';





$proc = $_POST['procedencia'];

//$cod = $_POST['codigo'];
$cod = $_POST['codigo'];
$desc   = $_POST['descripcion'];
$serie = $_POST['serie'];
$anio  = $_POST['anio'];
$fecIng = $_POST['fecIng'];

$conn = get_connection();

//UPDATE activo set DESCRIPCION='nuevo' WHERE (CODACTIVO = '222222')
$query = "UPDATE activo set DESCRIPCION='$desc', SERIE='$serie', ANIOFABRICACION='$anio', FECHAINGRESO='$fecIng' WHERE (CODACTIVO = '$cod')";


$resultado = $conn->query($query);
header("Location: ./viewActivo2.php");
exit();
