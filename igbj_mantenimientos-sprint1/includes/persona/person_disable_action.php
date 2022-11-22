<?php
include './functions.php';


if ($_GET['id']) {
    if (disable_person_by_id($_GET['id'])) {
        header('Location: /includes/persona/person_view.php');
        exit();
    } else {
        echo "error al insertar";
    }
}
