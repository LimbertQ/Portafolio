<?php

//header('Location: ./person_view.php?name=' . $_POST["name"] . '&apa=' . $_POST["last_name1"] . '&ama=' . $_POST["last_name2"]);
header('Location: ./person_view.php?' . (($_POST["name"]) ? 'name=' . $_POST["name"] : '') . (($_POST["last_name1"]) ? '&apa=' . $_POST["last_name1"] : '') . (($_POST["last_name2"]) ? '&ama=' . $_POST["last_name2"] : ''));
exit();
