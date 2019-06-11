<?php
    session_start();

    if(!isset($_SESSION['loggedin'])) { 
        header('Location: ./errorEmployees.php');
    }          
?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="shortcut icon" href="./logoDark.ico" type="image/x-icon">
    <link rel="stylesheet" href="../styles/style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
    <link rel="stylesheet" href="https://bootswatch.com/4/lux/bootstrap.min.css">
    <link rel="stylesheet" href="https://bootswatch.com/4/lux/bootstrap.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.0/animate.min.css">
    <link href="https://fonts.googleapis.com/css?family=Fira+Sans" rel="stylesheet"> 

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>

    <title>Green Town - Employees</title>
  </head>
  <body>
    <section id="header">
        <div class="bg-primary" style="text-align: center; height: 120px;">
            <img src="../assets/greenTownTop.png" alt="" style="padding: 20px 0;">
        </div>
    </section>

    <nav class="navbar navbar-expand-lg navbar-dark bg-primary sticky-top">
        <a class="navbar-brand" href="../index.html">
            <!-- <img src="./assets/logo.png" alt="" id="imgLogo" style="height:60px;"> -->
            Green Town
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor01" aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarColor01">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item">
                    <a class="nav-link breadcrumb-item active" href="./menu.html">Menu</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="./bookATable.html">Book a Table</a>
                </li>
                <li class="nav-item dropdown">
                    <div class="d-none d-lg-block">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            About us
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown" id="confirmation">
                            <a class="dropdown-item" href="./gallery.html">Gallery</a>
                            <a class="dropdown-item" href="./opinions.php">Opinions</a>
                            <a class="dropdown-item" href="./location.html">Location</a>
                            <a class="dropdown-item" href="./logInEmployees.php">Employees</a>
                        </div>
                    </div>
                </li>

                <!-- NAVBAR ITEMS FOR MOBILE AND TABLET -->
                <li class="nav-item d-lg-none">
                    <a class="nav-link" href="./gallery.html">Gallery</a>
                </li>
                <li class="nav-item d-lg-none">
                    <a class="nav-link" href="./opinions.php">Opinions</a>
                </li>
                <li class="nav-item d-lg-none">
                    <a class="nav-link" href="./location.html">Location</a>
                </li>
            </ul>

            <!-- THAT BUTTON MAY HAVE THE OPTION TO CHANGE THE LANGUAGE -->
            <br>
            <a href="#" style="color:white;"><u>ENG</u></a> / <a href=""style="color:white;"><u>ESP</u></a>
            <br>
        </div>
    </nav>

    <!-- DIV WITH BACKGROUNB IMAGE -->
    <div class="container-fluid" id="bg" style="min-height: 600px;">
        <section class="container" id="whiteContainer">

            <div class="contentWC">
                <div class="row">
                    <div class="col-xs-12 col-sm-4" style="text-align: center;">
                        <button type="button" class="btn btn-secondary" style="color: black !important; width: 80%;" id="showGreens">SHOW GREENS</button>
                    </div>
                    <div class="col-xs-12 col-sm-4" style="text-align: center;">
                        <button type="button" class="btn btn-secondary" style="color: black !important; width: 80%;" id="showCookeds">SHOW COOKEDS</button>
                    </div>
                    <div class="col-xs-12 col-sm-4" style="text-align: center;">
                        <button type="button" class="btn btn-secondary" style="color: black !important; width: 80%;" id="showAll">SHOW ALL</button>
                    </div>
                </div>
            </div>

            <div class="contentWC" id="needToCook">
                <h1 style="text-align: center;">NEED TO COOK</h1>
                <table class="table table-hover">
                    <tbody>
                        <thead>
                            <tr>
                                <th scope="col" width="350px">Plate</th>
                                <th scope="col">Table</th>
                                <th scope="col" width="250px">Status</th>
                            </tr>
                        </thead>

                        <!-- PHP TABLE -->
                        <?php
                            require("../php/clases/DBConection.php");
                        
                            $conexion = new Conexion();

                            $date = date("d/m/y");

                            try {
                                $sql = "SELECT * FROM consuption WHERE state LIKE 'green' AND day LIKE '$date' ORDER BY hour;";
                                $res = $conexion->query($sql);
                            } catch (PDOException $e) {
                                echo 'Error de consulta' . $e->getMessage();
                                exit();
                            }

                            foreach ($res as $key => $value) {
                                $conexionAux = new Conexion();

                                try {
                                    $sqlAux = "SELECT name FROM plates WHERE id LIKE '$value[2]';";
                                    $resAux = $conexionAux->query($sqlAux);
                                } catch (PDOException $e) {
                                    echo 'Error de consulta' . $e->getMessage();
                                    exit();
                                }

                                $name = "";
                                foreach ($resAux as $key => $val) {
                                    $name = $val[0];
                                }

                                if($value[3] == "green"){
                                    $class = "btn-danger";
                                }else{
                                    $class = "btn-success";
                                }

                                try {
                                    $sqlAux = "SELECT * FROM booking WHERE ID LIKE '$value[1]';";
                                    $resAux = $conexionAux->query($sqlAux);
                                } catch (PDOException $e) {
                                    echo 'Error de consulta' . $e->getMessage();
                                    exit();
                                }

                                $table = "b";
                                foreach ($resAux as $key => $val) {
                                    $table = $val[2];
                                }

                                echo "
                                    <tr class='table-dark' style='max-height: 10px !important;'>  
                                        <td>$name</td>
                                        <td>$table</td>
                                        <td>
                                            <form method='POST' action='../php/changeStatus.php'>
                                                <input type='text' name='idConsuption' readonly style='display: none;' value='$value[0]'>
                                                <input type='text' name='stateConsuption' readonly style='display: none;' value='$value[3]'>
                                                <button type='submit' class='btn $class' style='padding: 0 10px;'>$value[3]</button>
                                            </form>
                                        </td>
                                    </tr>";

                                $conexionAux = null;
                                $resAux = null;
                            }
                            
                            $conexion = null;
                            $res = null;
                        ?>
                    </tbody>
                </table>
            </div>

            <div class="contentWC" id="alreadyDone">
                <h1 style="text-align: center;">ALREADY DONE</h1>
                <table class="table table-hover">
                    <tbody>
                        <thead>
                            <tr>
                                <th scope="col" width="350px">Plate</th>
                                <th scope="col">Table</th>
                                <th scope="col" width="250px">Status</th>
                            </tr>
                        </thead>

                        <!-- PHP TABLE -->
                        <?php
                            $conexion = new Conexion();

                            $date = date("d/m/y");
                        
                            try {
                                $sql = "SELECT * FROM consuption WHERE state LIKE 'cooked' AND day LIKE '$date' ORDER BY hour;";
                                $res = $conexion->query($sql);
                            } catch (PDOException $e) {
                                echo 'Error de consulta' . $e->getMessage();
                                exit();
                            }

                            foreach ($res as $key => $value) {
                                $conexionAux = new Conexion();

                                try {
                                    $sqlAux = "SELECT name FROM plates WHERE id LIKE '$value[2]';";
                                    $resAux = $conexionAux->query($sqlAux);
                                } catch (PDOException $e) {
                                    echo 'Error de consulta' . $e->getMessage();
                                    exit();
                                }

                                $name = "";
                                foreach ($resAux as $key => $val) {
                                    $name = $val[0];
                                }

                                if($value[3] == "green"){
                                    $class = "btn-danger";
                                }else{
                                    $class = "btn-success";
                                }

                                try {
                                    $sqlAux = "SELECT * FROM booking WHERE ID LIKE '$value[1]';";
                                    $resAux = $conexionAux->query($sqlAux);
                                } catch (PDOException $e) {
                                    echo 'Error de consulta' . $e->getMessage();
                                    exit();
                                }

                                $table = "b";
                                foreach ($resAux as $key => $val) {
                                    $table = $val[2];
                                }

                                echo "
                                    <tr class='table-dark' style='max-height: 10px !important;'>  
                                        <td>$name</td>
                                        <td>$table</td>
                                        <td>
                                            <form method='POST' action='../php/changeStatus.php'>
                                                <input type='text' name='idConsuption' readonly style='display: none;' value='$value[0]'>
                                                <input type='text' name='stateConsuption' readonly style='display: none;' value='$value[3]'>
                                                <button type='submit' class='btn $class' style='padding: 0 10px;'>$value[3]</button>
                                            </form>
                                        </td>
                                    </tr>";

                                $conexionAux = null;
                                $resAux = null;
                            }
                            
                            $conexion = null;
                            $res = null;
                        ?>
                    </tbody>
                </table>
            </div>

            <!-- IFRAME AUX -->
            <iframe name="iFrameAux" style="display:none;"></iframe>
            <button id="backEmployees" class="btn btn-secondary" style="color: rgb(44, 43, 43) !important; width: 150px; margin-top: 40px;">Back</button>
            <form method="POST" action="../php/logoff.php">
                <button type="submit" class="btn btn-secondary" style="color: rgb(44, 43, 43) !important; margin-top: 20px; width: 150px;">Log Off</button>
            </form>
        </section>
    </div>

    <!-- FOOTER -->
    <section id="footer" class="bg-primary" style="padding: 20px;">
        <div class="container" style="padding: auto;">
            <div class="row d-flex align-items-center justify-content-center">
                <div class="col-12 col-lg-2" style="padding-bottom: 20px;" id="centerText">
                    <img src="../assets/greenTownBottom.png" style="height: 80px;" alt=""></span>
                </div>
                <div class="col-12 col-lg-6 offset-lg-1" style="padding-bottom: 20px;" id="centerText">
                    &copy; Green Town - Gastro Restaurant
                    <div class="w-100"></div>
                    445 Mount Eden Road, Mount Eden, Auckland // ZIP 5022
                    <div class="w-100"></div>
                    <span><img src="../assets/phone.svg" alt="" height="16px" width="auto"></span> 00 64 9 123 4567
                </div>
                <div class="col-12 col-lg-2 offset-lg-1" style="padding-bottom: 20px;" id="centerText">
                    <div class="row">
                        <div class="col-12">
                            <img src="../assets/twitter.svg" alt="" style="height: 30px; width: auto; padding: 0 5px;">
                            <img src="../assets/instagram.svg" alt="" style="height: 30px; width: auto; padding: 0 5px;">
                            <img src="../assets/facebook.svg" alt="" style="height: 30px; width: auto; padding: 0 5px;">                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Optional JavaScript -->
    <script src="../javascripts/main.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/wow/1.1.2/wow.min.js"></script>
    <script>
        new WOW().init();
    </script>

    <!-- Script to reload the page if there is no activity on it -->
    <script>
        var time = new Date().getTime();
        
        $(document.body).bind("mousemove keypress", function(e) {
            time = new Date().getTime();
        });

        function refresh() {
            if(new Date().getTime() - time >= 60000) 
                window.location.reload(true);
            else 
                setTimeout(refresh, 10000);
        }

        setTimeout(refresh, 10000);
    </script>

    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
  </body>
</html>