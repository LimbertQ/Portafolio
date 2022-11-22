<?php include("./../../database.php");?>
<?php require("./../header.php"); ?>
<link rel="stylesheet" href="styles">

<h1>Registrar persona</h1>
<form class= "registro" action="accion.php" method="post" enctype = "multipart/form-data">

<div class="col-sm-6">
    <div class="mb-3">
        <label for="ci" class="form-label"> Cedula de Identidad </label>
        <input type="text" name="ci" id="ci" placeholder="Ingresa numero de carnet de identidad" require>
    </div>
</div>
<br>
<div class="col-sm-6">
    <div class="mb-3">
        <label for="exp" class="form-label">Exp. </label>
        <input type="text" name="exp" id="exp" placeholder="Carnet de identidad expedido en:">
    </div>
</div>
<br>
<div class="col-sm-6">
    <div class="mb-3">
        <label for="profesion" class="form-label">Profesion </label>
        <select name="prof" id="prof">
            <option value="0">Selecciona profesion</option>
            <?php
                $profesion = $conn -> query("SELECT * FROM DB_VIEW_Profesion_view");
                while($profe=mysqli_fetch_array($profesion)){
                    echo '<option value="'.$profe[CODPROFESION].'">'.$profe[PROFESION].'</option>';
                }
            ?>
        </select>
    </div>
</div>
</form>

<?php require("./../footer.php"); ?>