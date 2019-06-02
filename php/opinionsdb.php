<?php
    require("./clases/DBConection.php");

    $id = $_POST["userid"];
    $text = $_POST["opinionText"];
    $points = $_POST["points"];

    echo $id;
    echo $text;
    echo $points;

    $conexion = new Conexion();
    
    try {
        $sql = "SELECT * FROM booking WHERE ID LIKE '".$id."'";
        $res = $conexion->query($sql);
    } catch (PDOException $e) {
        echo 'Error de consulta' . $e->getMessage();
        exit();
    }

    if(!empty($sql)){
        $sqlB = "INSERT INTO opinions VALUES ('$id','$text','$points')";
        $resB = $conexion->query($sqlB); 
    }


    $conexion = null;
    $res = null;
    $resB = null;

?>