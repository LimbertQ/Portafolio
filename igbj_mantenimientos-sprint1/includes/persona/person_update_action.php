<?php


include './functions.php';



person_update($_POST['ci'], strtoupper($_POST['exp']), $_POST["profesion"], $_POST['nombres'], $_POST['ape_paterno'], $_POST['ape_materno'], $_POST['fecha'], $_POST['direccion'], $_POST['telefono'], $_POST['celular'], $_POST['email'], $_POST["gender"]);

header("Location: ./person_view.php");
exit();
