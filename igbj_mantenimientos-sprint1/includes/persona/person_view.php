<?php
require("./../header.php");
include "./functions.php";
?>
<div class="container my-4">
    <h1 class="text-center">
        PERSONAS REGISTRADAS EN EL SISTEMA
    </h1>
    <form action="./person_view_action.php" method="POST">
        <input class="form-control-lg" type="search" name="last_name1" id="search" placeholder="Perez">
        <input class="form-control-lg" type="search" name="last_name2" id="search" placeholder="Mamani">
        <input class="form-control-lg" type="search" name="name" id="search" placeholder="Juan Carlos">
        <button class="btn btn-primary">
            BUSCAR
        </button>
    </form>

    <table class="table table-striped">
        <thead class="table-success">
            <tr>
                <th>Apellido Paterno</th>
                <th>Apellido Materno</th>
                <th>Nombres</th>
                <th>Cedula de Identidad</th>
                <th>Fecha de Nacimiento</th>
                <th>Profesion</th>
                <th>Direccion</th>
                <th>Telefono</th>
                <th>Celular</th>
                <th>Email</th>
                <th>Sexo</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $result;
            $result =  get_person($_GET["name"], $_GET["apa"], $_GET["ama"]);
            if (!$_GET["name"] && !$_GET["apa"] && !$_GET["ama"]) {  /* en caso de que no existan parametros para buscar */
                $result =  get_persons();
            }
            if ($result) {
                while ($row = $result->fetch_array(MYSQLI_BOTH)) {
            ?>
                    <tr>
                        <td>
                            <?php echo $row["APPATERNO"] ?>
                        </td>
                        <td>
                            <?php echo $row["APMATERNO"] ?>
                        </td>
                        <td>
                            <?php echo $row["NOMBRES"] ?>
                        </td>
                        <td>
                            <?php echo $row["CI"] ?>
                        </td>
                        <td>
                            <?php echo $row["FECHANACIMIENTO"] ?>
                        </td>
                        <td>
                            <?php
                            if ($professions =  get_all_professions()) {
                                while ($prof = $professions->fetch_array(MYSQLI_BOTH)) {
                                    if ($prof["CODPROFESION"] == $row["CODPROFESION"]) {
                                        echo $prof["PROFESION"];
                                        break;
                                    }
                                }
                            }
                            $professions->free();
                            ?>
                        </td>
                        <td>
                            <?php echo $row["DIRECCION"] ?>
                        </td>
                        <td>
                            <?php echo $row["TELEFONO"] ?>
                        </td>
                        <td>
                            <?php echo $row["CELULAR"] ?>
                        </td>
                        <td>
                            <?php echo $row["CORREO"] ?>
                        </td>
                        <td>
                            <?php echo $row["SEXO"] ?>
                        </td>
                        <td>
                            <a class="btn btn-danger" href="./person_disable_action.php?id=<?php echo $row["CI"]; ?>">
                                DESHABILITAR
                            </a>
                            <a class="btn btn-info" href="./person_update.php?id=<?php echo $row["CI"]; ?>">
                                MODIFICAR
                            </a>
                        </td>
                    </tr>
            <?php

                }
                $result->free();
            }
            ?>
        </tbody>
    </table>
</div>
<?php require("./../footer.php"); ?>