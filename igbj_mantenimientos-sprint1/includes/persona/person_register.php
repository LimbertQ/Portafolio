<?php require("./../header.php"); ?>
<div class="container">
    <h1 class="h1 text-center">
        REGISTRAR NUEVA PERSONA
    </h1>
    <form action="./person_register_action.php" method="post">
        <div class="form-group">
            <label for="ci">Cedula de Identidad:</label>
            <input class="form-control" type="text" name="ci" id="ci" maxlength="50" required>
            <select class="form-control" name="exp" id="exp" required>
                <?php
                $abbr = ["BNI", "CBBA", "CHQ", "LPZ", "ORU", "PND", "PSI", "SCZ", "TJA"];
                foreach ($abbr as $value) {
                ?>
                    <option value="<?php echo $value; ?>">
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
                include "./functions.php";
                if ($professions =  get_all_professions()) {
                    while ($row = $professions->fetch_array(MYSQLI_BOTH)) {
                ?>
                        <option value="<?php echo $row["CODPROFESION"]; ?>">
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
            <input class="form-control" type="text" name="nombres" id="name" pattern="[a-zA-ZñÑ ]{2,50}" required>
        </div>
        <div class="form-group">
            <label for="apa">Ap. Paterno:</label>
            <input class="form-control" type="text" name="ape_paterno" id="apa" pattern="[a-zA-ZñÑ ]{2,50}" required>
        </div>
        <div class="form-group">
            <label for="ama">Ap. Materno:</label>
            <input class="form-control" type="text" name="ape_materno" id="ama" pattern="[a-zA-ZñÑ ]{2,50}" required>
        </div>
        <div class="form-group">
            <label for="date">Fecha Nacimiento:</label>
            <input class="form-control" type="date" name="fecha" id="date" required>
        </div>
        <div class="form-group">
            <label for="dir">Direccion:</label>
            <input class="form-control" type="text" name="direccion" id="dir" pattern="[a-zA-ZñÑ 0-9.]{2,50}" required>
        </div>
        <div class="form-group">
            <label for="tel">Telefono:</label>
            <input class="form-control" type="text" name="telefono" id="tel" pattern="[0-9]{7,8}" required>
        </div>
        <div class="form-group">
            <label for="cel">Celular:</label>
            <input class="form-control" type="text" name="celular" id="cel" pattern="[0-9]{7,8}">
        </div>
        <div class="form-group">
            <label for="email">Email:</label>
            <input class="form-control" type="email" name="email" id="email" maxlength="50" required>
        </div>

        <div class="form-group">
            <div></div>
            <div class="form-check-inline">
                <label class="form-check-label" for="radio1">
                    <input class="form-check-input" name="gender" type="radio" value="M" required>Masculino
                </label>
            </div>
            <div class="form-check-inline">
                <label class="form-check-label" for="radio1">
                    <input class="form-check-input" name="gender" type="radio" value="F" required>Femenino
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
<?php require("./../footer.php"); ?>