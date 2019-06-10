<?php
    require("./clases/DBConection.php");

    $idC = $_POST["idConsuption"];
    $stateC = $_POST["stateConsuption"];
    echo $stateC;
    
    if($stateC ==  "green"){
        $changeTo = "cooked";
    }else{
        $changeTo = "green";
    }

    $conexion = new Conexion();
    
    try {
        $sql = "UPDATE consuption SET state = '$changeTo' WHERE ID LIKE '$idC'";
        $res = $conexion->query($sql);
    } catch (PDOException $e) {
        echo 'Error de consulta' . $e->getMessage();
        echo '<script>alert("Consuption not found")</script>';
        exit();
    }


    $conexion = null;
    $res = null;

    header("refresh:0.001; ../public/kitchen.php");
?>