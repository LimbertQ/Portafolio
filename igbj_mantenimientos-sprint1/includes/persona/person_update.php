<?php require("./../header.php"); ?>
<div class="container">
    <?php
    include "./functions.php";
    $person = [];
    if ($persons =  get_person_by_id($_GET["id"])) {
        $person = $persons->fetch_array(MYSQLI_BOTH);
    }
    ?>
    <h1 class="h1 text-center">
        EDITAR DATOS DE <?php echo $person["NOMBRES"]; ?>
    </h1>
    <form action="./person_update_action.php" method="post">
        <div class="form-group">
            <label for="ci">Cedula de Identidad:</label>
            <input class="form-control" type="text" name="ci" id="ci" maxlength="50" value="<?php echo $person["CI"]; ?>" required>
            <label for="exp">Exp:</label>
            <select class="form-control" name="exp" id="exp" required>
                <?php
                $abbr = ["BNI", "CBBA", "CHQ", "LPZ", "ORU", "PND", "PSI", "SCZ", "TJA"];
                foreach ($abbr as $value) {
                ?>
                    <option value="<?php echo $value; ?>" <?php if ($person["EXPEDIDOCI"] == $value) echo ' selected="true"'; ?>>
                        <?php echo $value; ?>
                    </option>
                <?php

                }
                ?>
            </select>



        </div>
        <div class="form-group">
            <label for="prof">Profesion:</label>
            <select class="form-control" name="profesion" id="prof" required>
                <?php
                if ($professions =  get_all_professions()) {
                    while ($row = $professions->fetch_array(MYSQLI_BOTH)) {
                ?>
                        <option value="<?php echo $row["CODPROFESION"]; ?>" <?php if ($person["CODPROFESION"] == $row["CODPROFESION"]) echo ' selected="true"'; ?>>
                            <?php echo $row["PROFESION"] ?>
                        </option>
                <?php

                    }
                    $professions->free();
                } else {
                    echo '<option value="Sin Profesion">Sin Profesion</option>';
                }
                ?>
            </select>
        </div>
        <div class="form-group">
            <label for="name">Nombres:</label>
            <input class="form-control" type="text" name="nombres" id="name" value="<?php echo $person["NOMBRES"]; ?>" pattern="[a-zA-ZñÑ ]{2,50}" required>
        </div>
        <div class="form-group">
            <label for="apa">Ap. Paterno:</label>
            <input class="form-control" type="text" name="ape_paterno" id="apa" value="<?php echo $person["APPATERNO"]; ?>" pattern="[a-zA-ZñÑ ]{2,50}" required>
        </div>
        <div class="form-group">
            <label for="ama">Ap. Materno:</label>
            <input class="form-control" type="text" name="ape_materno" id="ama" value="<?php echo $person["APMATERNO"]; ?>" pattern="[a-zA-ZñÑ ]{2,50}" required>
        </div>
        <div class="form-group">
            <label for="date">Fecha Nacimiento:</label>
            <input class="form-control" type="date" name="fecha" id="date" value="<?php echo $person["FECHANACIMIENTO"]; ?>" required>
        </div>
        <div class="form-group">
            <label for="dir">Direccion:</label>
            <input class="form-control" type="text" name="direccion" id="dir" value="<?php echo $person["DIRECCION"]; ?>" pattern="[a-zA-ZñÑ 0-9.]{2,50}" required>
        </div>
        <div class="form-group">
            <label for="tel">Telefono:</label>
            <input class="form-control" type="text" name="telefono" id="tel" value="<?php echo $person["TELEFONO"]; ?>" pattern="[0-9]{7,8}" required>
        </div>
        <div class="form-group">
            <label for="cel">Celular:</label>
            <input class="form-control" type="text" name="celular" id="cel" value="<?php echo $person["CELULAR"]; ?>" pattern="[0-9]{7,8}">
        </div>
        <div class="form-group">
            <label for="email">Email:</label>
            <input class="form-control" type="email" name="email" id="email" maxlength="50" value="<?php echo $person["CORREO"]; ?>" required>
        </div>
        <div class="form-group">
            <div></div>
            <div class="form-check-inline">
                <label class="form-check-label" for="radio1">
                    <input class="form-check-input" name="gender" type="radio" value="M" <? if ($person["SEXO"] == "M") echo "checked"; ?> required>Masculino
                </label>
            </div>
            <div class="form-check-inline">
                <label class="form-check-label" for="radio1">
                    <input class="form-check-input" name="gender" type="radio" value="F" <? if ($person["SEXO"] == "F") echo "checked"; ?> required>Femenino
                </label>
            </div>
        </div>
        <div class="row justify-content-center">
            <button class="btn" type="submit">Guardar</button>
            <a class="btn" href="/includes/persona/person_view.php">
                Cancelar
            </a>
        </div>
        <?php
        ?>

    </form>
</div>
<script>
</script>

<?php require("./../footer.php"); ?>