<?php
    require("./clases/DBConection.php");

    $usuario = $_POST["employeeID"];
    $pass = $_POST["employeePass"];

    $conexion = new Conexion();
    
    try {
        $sql = "SELECT * FROM employees WHERE ID LIKE '".$usuario."'";
        $res = $conexion->query($sql);
    } catch (PDOException $e) {
        echo 'Error de consulta' . $e->getMessage();
        exit();
    }


    foreach ($res as $key => $value) {        
        if($value[0] == $usuario){
            if($value[1] == $pass){
                session_start();        

                $_SESSION['loggedin'] = true;
                $_SESSION['username'] = $usuario;
                $_SESSION['password'] = $pass;
    
                header('Location: ../public/employees.php');
                exit;
            }
        }
    }

    $conexion = null;
    $res = null;

    header("refresh:0.1; ../public/errorEmployees.php");
?>