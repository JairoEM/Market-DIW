<?php
    require("./clases/DBConection.php");

    $conexion = new Conexion();

    $idPlate = $_POST["idPlate"];
    $idBill = $_POST["idUpdated"];

    try {
        $sql = "INSERT INTO consuption VALUES ('$idBill','$idPlate','');";
        $res = $conexion->query($sql);
    } catch (PDOException $e) {
        echo 'Error de consulta' . $e->getMessage();
        exit();
    }

    $conexion = null;
    $res = null;
?>