<?php include("database.php")?>
<?php include("includes/header.php")?>
<link rel="stylesheet" href="styles">

   <h1>Registrar Activo</h1>

<form class= "registro" action="accion.php" method="post" enctype = "multipart/form-data">

<div class="col-sm-6">
<div class="mb-3">
<label for="descripcion" class="form-label">Codigo Activo Fijo</label>
<input type="text"  id="codigo" name="codigo" class="form-control" required >
</div>
</div>
 <br>
 <div class="mb-3">
    <label for="anio" class="form-label">Año de Fabricacion del Equipos</label>
    <select name="anio" id="anio" class="form-control" required>
        <option value="opcion1">2018</option>
        <option value="opcion1">2019</option>
        <option value="opcion1">2020</option>
    </select>
 </div>
 <br>
 <div class="col-sm-6">
<div class="mb-3">
<label for="serie" class="form-label">Serie de Equipo</label>
<input type="text"  id="serie" name="serie" class="form-control" required >
</div>
</div>
 <br>
 <div class="row">
    <div class="col-sm-12">
    <div class="mb-3">
<label for="modelos" class="form-label">Modelo de Equipo</label>
<input type="text"  id="modelo" name="modelo" class="form-control" required >
    </div>   
</div>
</div>
<br>
<div class="row">
    <div class="col-sm-12">
    <div class="mb-3">
<label for="marcas" class="form-label">Marca de Equipo</label>
<select name="marcas" id="marcas" class="form-control" required>
    <option value="opcion1">opcion1</option>
    <option value="opcion2">opcion2</option>
    <option value="opcion3">opcion3</option>
  </select>
    </div>   
</div>
</div>
<br>
<div class="row">
    <div class="col-sm-12">
    <div class="mb-3">
<label for="procedencia" class="form-label">Procedencia de Equipo</label>
<select name="procedencia" id="procedencia" class="form-control" required>
    <option value="opcion1">opcion1</option>
    <option value="opcion2">opcion2</option>
    <option value="opcion3">opcion3</option>
  </select>
    </div>   
</div>
</div>
<br>
<div class="col-sm-6">
<div class="mb-3">
<label for="fecha" class="form-label">Fecha ingreso del Equipo </label>
<input type="date"  id="fecha" name="fecha" class="form-control" required >
</div>
</div>
<br>
<div class="col-sm-6">
<div class="mb-3">
<label for="descripcion" class="form-label">Descripcion </label>
<input type="text"  id="descripcion" name="descripcion" class="form-control" required >
</div>
</div>
<br>
<div class="mb-3">
<div class="row">
        <div class="col-sm-12">
            <div class="form-group">
            <label for="imagen" class="form-label">Subir Foto </label>
                <input type="file" class="form-control-file" name="foto" id="foto" required>
            </div>
        </div>
    </div>
</div>
<br>
<div class="mb-3">
<input type="hidden" name="accion" value="insertar_equipos">
<button type="submit" class="btn btn-success">Guardar</button>
</div>
</form>
<?php include("includes/footer.php")?>