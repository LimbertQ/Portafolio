<?php
//include './funcion.php';
include '../../database.php';

$codigo = $_POST['codActivo'];
$prov   = $_POST['proveedor'];

//$mod    = $_POST['modelo'];
$modelo   = $_POST['modelo'];
$proc   = $_POST['procedencia'];
$codAct = $_POST['codActivo'];
$nroSer = $_POST['nroSerie'];
$anioFabric = $_POST['anio'];
$fab    = $_POST['fechaIngr'];
$img    = $_POST['imagen'];
$fechIng2 = $_POST['fechaIngr'];
$fech3 = $_POST['fechaIngr'];
$clase2 = $_POST['clase'];
$marc  = $_POST["marca"];





$conn = get_connection();

$clase = mysqli_query($conn, "SELECT * FROM modelo WHERE MODELO='$modelo'");
if (!$clase) {
    echo "ocurrio un error";
    exit;
}
foreach ($clase as $row) {
    $codMod = $row['CODMODELO'];
}

$consulta = "SELECT * FROM DB_VIEW_Procedencia_view";
$codProc = mysqli_query($conn, "SELECT * FROM DB_VIEW_Procedencia_view WHERE PROCEDENCIA='$proc'");
if (!$codProc) {
    echo "ocurrio un error";
    exit;
}
foreach ($codProc as $row) {
    $cPro = $row['CODPROCEDENCIA'];
}

//$query = ""
$query = "INSERT INTO activo(CODACTIVO, NITPROVEEDOR, CODMODELO, DESCRIPCION, CODPROCEDENCIA, CODACTIVOFIJO, SERIE, ANIOFABRICACION, FECHAINGRESO, FOTOGRAFIA, FHREGSERV, FECHAMODIFICACION, USUARIOREGISTRO, ESTADOACTIVO) VALUES
('$codigo',
'$prov',
'$codMod',
'$modelo',
'$cPro',
'$codAct',
'$nroSer',
'$anioFabric', 
'$fab',
'$img',
'$fechIng2',
'$fech3',
'$clase2',
'$marc')";

$resultado = $conn->query($query);
if ($resultado) {
    header("Location: ./viewActivo2.php");
    exit();
} else {
    echo "error al actualizar " . $conn->error_log;
}


//active_insert($_POST['proveedor'], strtoupper($_POST['clase']), $_POST["marca"], $_POST['modelo'], $_POST['procedencia'], $_POST['fabricacion'], $_POST['nroSerie'], $_POST['codActivo'], $_POST['fechaIngreso'], $_POST['imagen']);

//echo $_POST['proveedor'], $_POST['clase'], $_POST["marca"], $_POST['modelo'], $_POST['procedencia'], $_POST['fabricacion'], $_POST['nroSerie'], $_POST['codActivo'], $_POST['fechaIngreso'], $_POST['imagen'];

//activo_insert($_POST['codActivo'], $_POST['proveedor'], $_POST['modelo'], $_POST['modelo'],$_POST['procedencia'], $_POST['codActivo'], $_POST['nroSerie'], $_POST['fechaIngreso'], $_POST['fabricacion'], $_POST['imagen'], $_POST['fechaIngreso'],$_POST['fechaIngreso'],$_POST['clase'], $_POST["marca"]);


//echo $_POST['codActivo'], $_POST['proveedor'], $_POST['modelo'], $_POST['modelo'],$_POST['procedencia'], $_POST['codActivo'], $_POST['nroSerie'], $_POST['fechaIngreso'], $_POST['fabricacion'], $_POST['imagen'], $_POST['fechaIngreso'],$_POST['fechaIngreso'],$_POST['clase'], $_POST["marca"];


//header("Location: ./viewActivo.php");
//echo  $_POST['proveedor'], $_POST['clase'], $_POST["marca"],  $_POST['modelo'], $_POST['procedencia'], $_POST['fabricacion'], $_POST['nroSerie'];
//echo $_POST["marca"];