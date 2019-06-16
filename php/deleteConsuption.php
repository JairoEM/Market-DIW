<?php
    require("./clases/DBConection.php");

    $idC = $_POST["idConsuption"];
    $idP = $_POST["idPlate"];

    $conexion = new Conexion();
    
    try {
        $sql = "DELETE FROM consuption WHERE ID LIKE '$idC';";
        $res = $conexion->query($sql);
    } catch (PDOException $e) {
        echo 'Error de consulta' . $e->getMessage();
        echo '<script>alert("Consuption not found")</script>';
        exit();
    }

    try {
        $sql = "SELECT * FROM plates WHERE ID LIKE '$idP';";
        $res = $conexion->query($sql);
    } catch (PDOException $e) {
        echo 'Error de consulta' . $e->getMessage();
        exit();
    }

    $countPlate = 0;
    foreach ($res as $key => $value) {
        $countPlate = $value[3];
    }
    $countPlate++;

    try {
        $sql = "UPDATE plates SET quantity = $countPlate WHERE ID LIKE '$idP';";
        $res = $conexion->query($sql);
    } catch (PDOException $e) {
        echo 'Error de consulta' . $e->getMessage();
        exit();
    }  

    $conexion = null;
    $res = null;

    header("refresh:0.1; ../public/kitchen.php");
?>