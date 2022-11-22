<?php include 'database.php'; ?>
<?php include("./../header.php") ?>


<!-- <link rel="stylesheet" href="/styles/activo.css">  -->
<div class="container">
    <h1>Activo</h1>
    <form action="./actualizarActivos.php" method="post">
        <div class="selectores">

            <br>
            <div class="mb-3">
                <label class="form-check-label" class="form-check-label" for="Procedencia" class="form-label">Procedecia</label>
                <select class="form-control" name="procedencia" id="proc" class="form-control" style="width:150px" required>

                    <?php
                    /* $origen= $conn -> query("SELECT * FROM DB_VIEW_Procedencia_view");
                    while($proc=mysqli_fetch_array($origen)){
                        echo '<option value=' .$proc[CODPROCEDENCIA].'">'.$proc[PROCEDENCIA].'</option>';
                    } */
                    $codigo = $_GET["codigo"];

                    

                    
                    $conn = get_connection();
                    $clase = mysqli_query($conn, "SELECT * FROM DB_VIEW_Activo_view a WHERE CODACTIVO='$codigo'");
                    if (!$clase) {
                        echo "ocurrio un error";
                        exit;
                    }

                    foreach ($clase as $row) {
                    }
                    //echo '<option>' .$row["CODPROCEDENCIA"]. '</option>';
                    $cod = $row["CODPROCEDENCIA"];
                    
                    $result = mysqli_query($conn, "SELECT PROCEDENCIA FROM procedencia WHERE CODPROCEDENCIA= '$cod'");
                    if (!$result) {
                        echo "ocurrio un error";
                        exit;
                    }
                    foreach ($result as $row2) {
                        
                    }

                    echo '<option>' .$row2["PROCEDENCIA"]. '</option>';

                    $result = mysqli_query($conn, "SELECT PROCEDENCIA FROM db_view_procedencia_view");
                    if (!$result) {
                        echo "ocurrio un error";
                        exit;
                    }
                    foreach ($result as $row2) {
                        echo '<option>' . $row2["PROCEDENCIA"] . '</option>';
                    }

                    ?>
                </select>
            </div>
            <br>

            <div class="mb-3">
                <label class="form-check-label" for="Serie" class="form-label">Codigo</label>
                
                <br>
                <?php
                
                    echo '<input class="form-control" readonly="readonly" name="codigo" value=' . $var = $_GET["codigo"] . '>';
                ?>

            </div>
            <br>

            <div class="mb-3">
                <label class="form-check-label" for="Serie" class="form-label">Descripcion</label>
                <br>
                <?php
                    echo '<input class="form-control" name="descripcion" value=' . $row['DESCRIPCION'] . '>';
                ?>

            </div>
            <br>

            <div class="mb-3">
                <label class="form-check-label" for="Serie" class="form-label">Serie</label>
                <br>
                <?php
                    echo '<input class="form-control" name="serie" value=' . $row['SERIE'] . '>';
                ?>

            </div>
            <br>

            <div class="mb-3">
                <label class="form-check-label" for="Serie" class="form-label">Año de fabricacion</label>
                <select class="form-control22" name="anio" id="prov" class="form-control" style="width:170px" required>
                    <br>
                    <?php
                    echo '<option>' . $row['ANIOFABRICACION'] . '</option>';
                    for ($i = 1980; $i < 2051; $i++) {
                        echo '<option>' . $i . '</option>';
                    }
                    ?>
                </select>

            </div>
            <br>

            <div class="mb-3">
                <label class="form-check-label" for="FechaIng" class="form-label">Fecha de Ingreso</label>
                <br>
                <?php
                echo '<input type="date" name="fecIng" value=' . $row['FECHAINGRESO'] . '>';
                ?>
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
                            <center><img height="200px" src="data:image/jpeg;base64,<?php echo base64_encode($row['FOTOGRAFIA']); ?>" /></center>
                            <br>
                            <input type="file" name="imagen" accept="image/png, image/jpeg" required />
                            <div class="invalid-feedback">Necesita ingresar una imagen</div>
                    </div>

                </div>


                <div class="d-flex justify-content-center flex-nowrap my-3">
                    <input type="submit" value="guardar" />
                    <input type="reset" value="cancelar" />
                </div>
            </div>

    </form>


</div>
<?php
include("./../footer.php");
?>