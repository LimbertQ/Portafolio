<?php include '../../database.php'; ?>
<?php include("./../header.php") ?>


<!-- <link rel="stylesheet" href="/styles/activo.css">  -->
<div class="container">
    <h1>Activo</h1>
    <form action="./registroActivos.php" method="post">
        <div class="selectores">
            <div class="form-group">
                <label class="form-check-label" class="form-label">Proovedor</label>
                <select class="form-control" name="proveedor" id="prov" class="form-control" style="width:150px" required>
                    <option value="opcion1">Selecciona proveedor</option>
                    <?php
                    $con = get_connection();
                    $consulta = "SELECT NIT FROM proveedor";

                    $resultConsulta = $con->query($consulta);
                    if ($resultConsulta) {

                        while ($row = $resultConsulta->fetch_array(MYSQLI_BOTH)) {
                            echo '<option>' . $row["NIT"] . '</option>';
                        }
                    } else {
                        echo '<option> esta fallando </option>';
                    }
                    ?>
                </select>


            </div>

            <br>
            <div class="mb-3">
                <label class="form-check-label" for="Clase" class="form-label">Clase</label>
                <select class="form-control" name="clase" id="desc" class="form-control" style="width:150px" required>
                    <option value="opcion1">Selecciona clase de equipo</option>
                    <?php
                    /* $clase = $conn -> query("SELECT * FROM DB_VIEW_Claseactivo_view");
                    while($class=mysqli_fetch_array($clase)){
                        echo '<option value="' .$class[CODCLASE].'">'.$class[CLASE].'</option>';
                    } */

                    $consulta = "SELECT CLASE FROM claseactivo";

                    $resultConsulta = $con->query($consulta);
                    if ($resultConsulta) {

                        while ($row = $resultConsulta->fetch_array(MYSQLI_BOTH)) {
                            echo '<option>' . $row["CLASE"] . '</option>';
                        }
                    } else {
                        echo '<option> esta fallando </option>';
                    }

                    ?>
                </select>
            </div>
            <br>


            <div class="mb-3">
                <label class="form-check-label" for="Marca" class="form-label">Marca</label>
                <select class="form-control" name="marca" id="marc" class="form-control1" style="width:150px" required>
                    <option value="0">Selecciona marca</option>
                    <?php
                    /* $datos = $conn -> query("SELECT * FROM DB_VIEW_ClaseactivoMarca_view");
                    while($valor=mysqli_fetch_array($datos)){
                        echo '<option value="' .$valor[CODCLASE].'">'.$valor[MARCA].'</option>';
                    } */

                    $consulta = "SELECT MARCA FROM marca";

                    $resultConsulta = $con->query($consulta);
                    if ($resultConsulta) {

                        while ($row = $resultConsulta->fetch_array(MYSQLI_BOTH)) {
                            echo '<option>' . $row["MARCA"] . '</option>';
                        }
                    } else {
                        echo '<option> esta fallando </option>';
                    }
                    ?>
                </select>


            </div>

            <br>
            <div class="mb-3">
                <label class="form-check-label" for="Modelo" class="form-label">Modelo</label>
                <select class="form-control" name="modelo" id="modelo" class="form-control" style="width:150px" required>
                    <option value="opcion1"></option>
                    <?php
                    /* $origen= $conn -> query("SELECT * FROM DB_VIEW_Procedencia_view");
                    while($proc=mysqli_fetch_array($origen)){
                        echo '<option value=' .$proc[CODPROCEDENCIA].'">'.$proc[PROCEDENCIA].'</option>';
                    } */

                    $conn = get_connection();

                    $result = mysqli_query($conn, "SELECT MODELO FROM modelo");
                    if (!$result) {
                        echo "ocurrio un error";
                        exit;
                    }
                    foreach ($result as $row2) {
                        echo '<option>' . $row2["MODELO"] . '</option>';
                    }

                    ?>
                </select>
            </div>
            <br>

            <div class="mb-3">
                <label class="form-check-label" class="form-check-label" for="Procedencia" class="form-label">Procedecia</label>
                <select class="form-control" name="procedencia" id="proc" class="form-control" style="width:150px" required>
                    <option>Pais de origen</option>
                    <?php
                    /* $origen= $conn -> query("SELECT * FROM DB_VIEW_Procedencia_view");
                    while($proc=mysqli_fetch_array($origen)){
                        echo '<option value=' .$proc[CODPROCEDENCIA].'">'.$proc[PROCEDENCIA].'</option>';
                    } */

                    $consulta = "SELECT * FROM DB_VIEW_Procedencia_view";

                    $resultConsulta = $con->query($consulta);
                    if ($resultConsulta) {

                        while ($row = $resultConsulta->fetch_array(MYSQLI_BOTH)) {
                            echo '<option>' . $row["PROCEDENCIA"] . '</option>';
                        }
                    } else {
                        echo '<option> esta fallando </option>';
                    }
                    ?>
                </select>
            </div>
            <br>
        </div>

        <br>

        <div class="entradas">
            <div class="mb-3">
                <label class="form-check-label" for="Año Fabricacion" class="form-label">Año Fabricacion</label>
                <select class="form-control22" name="anio" id="prov" style="width:170px" required>
                    <option value="año de fabricación"></option>
                    <?php
                    for ($i = 1980; $i < 2051; $i++) {
                        echo '<option>' . $i . '</option>';
                    }
                    ?>

                </select>
            </div>
            <br>

            <div class="mb-3">
                <label class="form-check-label" for="Serie" class="form-label">Numero Serie</label>
                <input class="form-control" name="nroSerie" type="text" id="Marca" name="marca" class="form-control" required>
            </div>
            <br>

            <div class="mb-3">
                <label class="form-check-label" for="CodigoActFijo" class="form-label">Codigo Activo Fijo</label>
                <input class="form-control" name="codActivo" type="text" id="codAct" name="marca" class="form-control" required>
            </div>
            <br>

            <div class="mb-3">
                <label class="form-check-label" for="FechaIng" class="form-label">Fecha de Ingreso</label>
                <br>
                <input type="date" id="FechIng" name="fechaIngr" value="2018-07-22" min="2022-01-01" max="2022-12-31" required>
            </div>

        </div>

        <div class=imgs>
            <div class="imagen">


                <style>
                    #output {
                        position: relative;
                        left: 70px;
                    }
                </style>
                <img id="output" top="" width="200px" height="200px" />
                <div style="opacity: 0;">
                    Textosasasa
                </div>
                <div class="row">
                    <input type="file" name="imagen" accept="image/png, image/jpeg" required />
                    <div class="invalid-feedback">Necesita ingresar una imagen</div>
                </div>


            </div>


            <div class="d-flex justify-content-center flex-nowrap my-3">


                <input type="submit" value="registrar" />
                <input type="submit" value="guardar" />

                <a href="./viewActivo2.php">
                    <button>cancelar</button>

                </a>


            </div>
        </div>

    </form>


</div>
<?php
include("./../footer.php");
?>