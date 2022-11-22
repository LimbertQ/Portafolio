<?php include '../../database.php'; ?>
<?php include("./../header.php") ?>
<link rel="stylesheet" href="styles">



<div>

    <a href="activo.php">
        <button>crear</button>
    </a>
    <h1 class="text-center">
        ACTIVOS REGISTRADOS EN EL SISTEMA
    </h1>

    <form action="" method="get">
        <input class="form-control-lg" type="text" name="busqueda" placeholder="activo">
        <button class="btn btn-primary">
            BUSCAR
        </button>
    </form>

    <table class="table">
        <thead class=" thead-dark">
            <tr>
                <th scope="col">Acciones</th>
                <th scope="col">Procedecia</th>
                <th scope="col">Codigo de Activo</th>
                <th scope="col">Fotografia</th>
                <th scope="col">Descripcion</th>
                <th scope="col">Serie</th>
                <th scope="col">Año de fabricacion</th>
                <th scope="col">Año de ingreso</th>
            </tr>
        </thead>
        <tbody id="datos">
            <?php

            $conn = get_connection();
            if (isset($_GET['busqueda'])) {
                $busqueda = $_GET['busqueda'];

                //$clase = mysqli_query($conn, "SELECT * FROM DB_VIEW_Activo_view WHERE CODACTIVO = '$busqueda' or ANIOFABRICACION = '$busqueda'");
            

                if($busqueda === ""){
                    $clase = mysqli_query($conn, "SELECT * FROM DB_VIEW_Activo_view");
                }else{
                    //$clase = mysqli_query($conn, "SELECT * FROM DB_VIEW_Activo_view WHERE CODACTIVO = '$busqueda' or ANIOFABRICACION = '$busqueda'");
                    //$clase = mysqli_query($conn, "SELECT DB_SP_Activo_search('$busqueda')");
                    $clase = mysqli_query($conn, "SELECT * FROM DB_VIEW_Activo_view a WHERE a.DESCRIPCION= '$busqueda'");
                }
            } else {
                $clase = mysqli_query($conn, "SELECT * FROM DB_VIEW_Activo_view");
            }

                
            if (!$clase) {
                echo "ocurrio un error";
                exit;
            }



            
            foreach ($clase as $row) {
                $cod = $row['CODACTIVO'];
                $result = mysqli_query($conn, "SELECT PROCEDENCIA FROM db_view_procedencia_view p, db_view_activo_view a WHERE a.CODACTIVO = '$cod' and P.CODPROCEDENCIA = A.CODPROCEDENCIA");
                foreach ($result as $row2){
                }
            ?>
                <tr>
                    <th>
                        

                        <a href="./actualizar.php?codigo=<?php echo $row['CODACTIVO']; ?>">
                            <button>modificar</button>
                        </a>

                        <a href="./eliminar.php?codigo2=<?php echo $row['CODACTIVO'] ?>">
                            <button>eliminar</button>
                        </a>

                        <input type="reset" value="cancelar" />
                    </th>
                    <th name="codAct"><?php echo $row['CODPROCEDENCIA']; ?></th>
                    <th name="codAct"><?php echo $cod; ?></th>
                    <th>
                        <center><img height="110px" src="data:image/jpeg;base64,<?php echo base64_encode($row['FOTOGRAFIA']); ?>" /></center>
                    </th>
                    <th><?php echo $row['DESCRIPCION']; ?></th>
                    <th><?php echo $row['SERIE']; ?></th>
                    <th><?php echo $row['ANIOFABRICACION']; ?></th>
                    <th><?php echo $row['FECHAINGRESO']; ?></th>
                    <th>

                    </th>
                </tr>

            <?php
            }
            ?>
        </tbody>
    </table>
</div>
<?php include("./../footer.php") ?>