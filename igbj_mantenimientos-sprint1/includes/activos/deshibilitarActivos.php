<?php
include './functions.php';


if ($_GET['codActivo']) {
    if (disable_person_by_id($_GET['codActivo'])) {
        header('Location: /includes/persona/person_view.php');
        exit();
    } else {
        echo "error al insertar";
    }
}
