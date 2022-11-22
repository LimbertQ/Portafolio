<?php include("database.php");
?>
<?php

function get_personas($conn)
{
    $query = "SELECT * FROM persona";
    if ($result = $conn->query($query)) {
        while ($row = $result->fetch_array(MYSQLI_BOTH)) {
            $i = 0;
            while ($i < sizeof($row) / 2) {
                printf("%s, ", $row[$i]);
                //printf("%s (%s)\n", $row[0], $row["FECHAINGRESO"]);
                $i++;
            }
            printf("  |||  ");
        }
        $result->free();
    }
}

function set_persona($conn)
{
    //$sql = "CALL SP_insertEMB( $nombre, $edad )";
    //$sql = "CALL DB_SP_Persona_add(CI,CODPROFESION,NOMBRES,APPATERNO,APMATERNO,FECHANACIMIENTO,DIRECCION,TELEFONO,CORREO,CELULAR,SEXO,EXPEDIDOCI)"

    $CI = "872143";
    $CODPROFESION = 1;
    $NOMBRES = "Pruebsa usua";
    $APPATERNO = "Mendez";
    $APMATERNO = "Mendez";
    $FECHANACIMIENTO = "2020-10-10";
    $DIRECCION = "Av. Juan de la rosa";
    $TELEFONO = "45676542";
    $CORREO = "prueba@gmail.com";
    $CELULAR = "76542516";
    $SEXO = 'M';
    $EXPEDIDOCI = "CB";
    $stmt = $conn->prepare("CALL DB_SP_Persona_add(?,?,?,?,?,?,?,?,?,?,?,?)");
    $stmt->bind_param("sissssssssss", $CI, $CODPROFESION, $NOMBRES, $APPATERNO, $APMATERNO, $FECHANACIMIENTO, $DIRECCION, $TELEFONO, $CORREO, $CELULAR, $SEXO, $EXPEDIDOCI);
    if ($stmt->execute()) {
        printf("insertado correctamente");
    } else {
        printf("error al insertar");
    }
    $stmt->close();
}

function disable_persona($conn)
{
    //$sql = "CALL SP_insertEMB( $nombre, $edad )";
    //$sql = "CALL DB_SP_Persona_add(CI,CODPROFESION,NOMBRES,APPATERNO,APMATERNO,FECHANACIMIENTO,DIRECCION,TELEFONO,CORREO,CELULAR,SEXO,EXPEDIDOCI)"

    $CI = "872143";
    $CODPROFESION = 1;
    $NOMBRES = "Pruebsa usua";
    $APPATERNO = "Mendez";
    $APMATERNO = "Mendez";
    $FECHANACIMIENTO = "2020-10-10";
    $DIRECCION = "Av. Juan de la rosa";
    $TELEFONO = "45676542";
    $CORREO = "prueba@gmail.com";
    $CELULAR = "76542516";
    $SEXO = 'M';
    $EXPEDIDOCI = "CB";
    $stmt = $conn->prepare("CALL DB_SP_Persona_add(?,?,?,?,?,?,?,?,?,?,?,?)");
    $stmt->bind_param("sissssssssss", $CI, $CODPROFESION, $NOMBRES, $APPATERNO, $APMATERNO, $FECHANACIMIENTO, $DIRECCION, $TELEFONO, $CORREO, $CELULAR, $SEXO, $EXPEDIDOCI);
    if ($stmt->execute()) {
        printf("insertado correctamente");
    } else {
        printf("error al insertar");
    }
    $stmt->close();
}
//set_persona($conn);
get_personas($conn);




?>