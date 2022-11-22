<?php
include '../../database.php';
function get_all_professions()
{
    $conn = get_connection();
    $query = "SELECT * FROM DB_VIEW_Profesion_view";
    if ($result = $conn->query($query)) {
        return $result;
    } else {
        return null;
    }
    $conn->close();
}

function disable_person_by_id(int  $id)
{
    $conn = get_connection();
    $query = "UPDATE persona SET CI = '" . ($id + 1) . "' WHERE CI='" . $id . "'";
    if ($conn->query($query) === true) {
        return true;
    } else {
        return false;
    }
}


function get_person_by_id($id)
{
    $conn = get_connection();
    $query = "SELECT * FROM persona WHERE CI='" . $id . "';";
    if ($result = $conn->query($query)) {
        return $result;
    } else {
        return null;
    }
}
function get_person($name, $apa, $ama)
{
    $conn = get_connection();
    $query = 'CALL DB_SP_Persona_search("' . $name . '","' . $apa . '","' . $ama . '")';
    if ($result = $conn->query($query)) {
        return $result;
    } else {
        return null;
    }
}

function get_persons()
{
    $conn = get_connection();
    $query = "SELECT * FROM DB_VIEW_Persona_view";
    if ($result = $conn->query($query)) {
        return $result;
    } else {
        return null;
    }
}

function person_insert($ci, $exp, $cod_prof, $nombres, $ape_paterno, $ape_materno, $fecha, $direccion, $telefono, $celular, $email, $sexo)
{
    $conn = get_connection();
    $stmt = $conn->prepare("CALL DB_SP_Persona_add(?,?,?,?,?,?,?,?,?,?,?,?)");
    $stmt->bind_param("sissssssssss", $ci, $cod_prof, $nombres, $ape_paterno, $ape_materno, $fecha, $direccion, $telefono, $email, $celular, $sexo, $exp);
    if ($stmt->execute()) {
        $stmt->close();
        return true;
    } else {
        $stmt->close();
        return false;
    }
}
function person_update($ci, $exp, $cod_prof, $nombres, $ape_paterno, $ape_materno, $fecha, $direccion, $telefono, $celular, $email, $sexo)
{
    $conn = get_connection();
    $stmt = $conn->prepare("CALL DB_SP_Persona_update(?,?,?,?,?,?,?,?,?,?,?,?)");
    $stmt->bind_param("sissssssssss", $ci, $cod_prof, $nombres, $ape_paterno, $ape_materno, $fecha, $direccion, $telefono, $email, $celular, $sexo, $exp);
    if ($stmt->execute()) {
        $stmt->close();
        return true;
    } else {
        $stmt->close();
        return false;
    }
}
