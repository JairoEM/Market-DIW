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
        <section class="container" id="whiteContainer" style="text-align: center;">
            <div class="contentWC">
                <div class="row">
                    <div class="col-6">
                        <button type="button" class="btn btn-outline-secondary" id="newOrder">NEW BOOK</button>
                    </div>
                    <div class="col-6">
                        <button type="button" class="btn btn-outline-secondary" id="oldOrder">OLD BOOK</button>
                    </div>
                </div>

                <div class="row" id="createOrder" style="width: 300px; margin: 40px auto 0; display: none;">
                    <form action="../php/createBook.php" method="POST">
                        <div class="form-group">
                            <label for="customerName">Customer Name</label>
                            <input type="text" class="form-control" id="customerName" name="customerName" style="width: 300px; color: black !important;">
                        </div>

                        <div class="form-group">
                            <label for="waiterID">Waiter ID</label>
                            <input type="text" class="form-control" id="waiterID" name="waiterID" style="color: black !important;" placeholder="<?php echo $_SESSION['username']; ?>">
                        </div>

                        <div class="form-group">
                            <label for="hourBook">Date of the book</label>
                            <input type="text" class="form-control" id="hourBook" name="hourBook" style="color: black !important;" pattern="(0[1-9]|1[0-9]|2[0-9]|3[01])-(0[1-9]|1[012]) ([01]?[0-9]{1}|2[0-3]{1}):[0-5]{1}[0-9]{1}" placeholder="00-00 00:00">
                            <small style="font-size: 0.6em;">Let it empty if you are doing the book now</small>
                        </div>

                        <div class="form-group">
                            <label for="tableNumber">Table</label>
                            <input type="number" class="form-control" id="tableNumber" name="tableNumber" min="1" max="30" style="color: black !important;" placeholder="1">
                        </div>

                        <input type="submit" class="btn btn-outline-secondary" value="Create Order">
                    </form>
                </div>

                <div class="row" id="showOrders" style="display: none; margin-top: 30px;">
                    <!-- TABLE -->
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th scope="col">Booking ID</th>
                                <th scope="col">Customer Name</th>
                                <th scope="col">Day</th>
                                <th scope="col"></th>
                            </tr>
                        </thead>
                        <tbody>

                            <!-- PHP TABLE -->
                            <?php
                                require("../php/clases/DBConection.php");

                                $conexion = new Conexion();
                                $obtainOrder = array();
                                $count = 0;
                    
                                try {
                                    $sql = "SELECT * FROM booking";
                                    $res = $conexion->query($sql);
                                } catch (PDOException $e) {
                                    echo 'Error de consulta' . $e->getMessage();
                                    exit();
                                }

                                foreach ($res as $key => $value) {
                                    echo "
                                        <tr class='table-dark'>
                                            <td scope='row'>$value[0]</td>
                                            <td>$value[3]</td>
                                            <td>$value[4]</td>
                                            <td><button type='button' class='btn btn-primary buttonID' id='$value[0]' style='padding: 0 10px;'>Select</button></td>
                                        </tr>";
                                    
                                    array_push($obtainOrder, $value[0]);
                                    $count++;
                                }

                                $conexion = null;
                                $res = null;
                            ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </section>
        
        <section class="container tabContent" id="whiteContainer" style="display: none;">
            <p>All the plates will be added to <input type="text" class="idUpdated" name="idUpdated" readonly style="background: none; border: 0;"></p>
            <div class="contentWC">
                <ul class="nav nav-tabs" style="background:rgba(255,255,255, 0.3);">
                    <li class="nav-item">
                        <a class="nav-link" href="#eP" role="tab" aria-selected="true" data-toggle="tab" style="color: black !important;">ENTRANTS</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#mdP" role="tab" aria-selected="false" data-toggle="tab" style="color: black !important;">MAIN DISHES</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#sdP" role="tab" aria-selected="false" data-toggle="tab" style="color: black !important;">SIDE DISHES</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#vbP" role="tab" aria-selected="false" data-toggle="tab" style="color: black !important;">VEGAN BURGERS</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#dP" role="tab" aria-selected="false" data-toggle="tab" style="color: black !important;">DESSERTS</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#xP" role="tab" aria-selected="false" data-toggle="tab" style="color: black !important;">DRINKS</a>
                    </li>
                </ul>
            </div>

            <div class="tab-content">
                <!-- ENTRANTS DISHES -->
                <div id="eP" class="tab-pane fade show active" role="tabpanel">
                    <table class="table table-hover">
                        <tbody>
                            <!-- PHP TABLE -->
                            <?php
                                $conexion = new Conexion();
                                $count = 1;
                                $name = 'E';

                                try {
                                    $sql = "SELECT * FROM plates WHERE ID LIKE 'E%'";
                                    $res = $conexion->query($sql);
                                } catch (PDOException $e) {
                                    echo 'Error de consulta' . $e->getMessage();
                                    exit();
                                }

                                foreach ($res as $key => $value) {
                                    $fullName = $name . strval($count);

                                    echo "
                                        <tr class='table-dark' style='max-height: 10px !important;'>
                                            <form method='POST' action='../php/addOrder.php' target='iFrameAux'>
                                                <td scope='row' id='idPlate' width='20px'><input type='text' readonly value='$fullName' name='idPlate' readonly style='background: none; border: 0; color: black !important;'></td>
                                                <td>$value[1]</td>
                                                <td>$value[2]$</td>
                                                <td>      
                                                    <input type='text' class='idUpdated' name='idUpdated' readonly style='display: none;'>
                                                    <button type='submit' class='btn btn-primary' style='padding: 0 10px;'>ADD</button>
                                                </td>
                                            </form>
                                        </tr>";
                                    $count++;
                                }
                                
                                $conexion = null;
                                $res = null;
                            ?>
                        </tbody>
                    </table>
                </div>

                <!-- MAIN DISHES -->
                <div id="mdP" class="tab-pane fade" role="tabpanel">
                    <table class="table table-hover">
                        <tbody>
                            <!-- PHP TABLE -->
                            <?php
                                $conexion = new Conexion();
                                $count = 1;
                                $name = 'M';

                                try {
                                    $sql = "SELECT * FROM plates WHERE ID LIKE 'M%'";
                                    $res = $conexion->query($sql);
                                } catch (PDOException $e) {
                                    echo 'Error de consulta' . $e->getMessage();
                                    exit();
                                }

                                foreach ($res as $key => $value) {
                                    $fullName = $name . strval($count);

                                    echo "
                                        <tr class='table-dark' style='max-height: 10px !important;'>
                                            <form method='POST' action='../php/addOrder.php' target='iFrameAux'>
                                                <td scope='row' id='idPlate' width='20px'><input type='text' readonly value='$fullName' name='idPlate' readonly style='background: none; border: 0; color: black !important;'></td>
                                                <td>$value[1]</td>
                                                <td>$value[2]$</td>
                                                <td>      
                                                    <input type='text' class='idUpdated' name='idUpdated' readonly style='display: none;'>
                                                    <button type='submit' class='btn btn-primary' style='padding: 0 10px;'>ADD</button>
                                                </td>
                                            </form>
                                        </tr>";
                                    $count++;
                                }
                                
                                $conexion = null;
                                $res = null;
                            ?>
                        </tbody>
                    </table>
                </div>

                <!-- SIDE DISHES -->
                <div id="sdP" class="tab-pane fade" role="tabpanel">
                    <table class="table table-hover">
                        <tbody>
                            <!-- PHP TABLE -->
                            <?php
                                $conexion = new Conexion();
                                $count = 1;
                                $name = 'S';

                                try {
                                    $sql = "SELECT * FROM plates WHERE ID LIKE 'S%'";
                                    $res = $conexion->query($sql);
                                } catch (PDOException $e) {
                                    echo 'Error de consulta' . $e->getMessage();
                                    exit();
                                }

                                foreach ($res as $key => $value) {
                                    $fullName = $name . strval($count);

                                    echo "
                                        <tr class='table-dark' style='max-height: 10px !important;'>
                                            <form method='POST' action='../php/addOrder.php' target='iFrameAux'>
                                                <td scope='row' id='idPlate' width='20px'><input type='text' readonly value='$fullName' name='idPlate' readonly style='background: none; border: 0; color: black !important;'></td>
                                                <td>$value[1]</td>
                                                <td>$value[2]$</td>
                                                <td>      
                                                    <input type='text' class='idUpdated' name='idUpdated' readonly style='display: none;'>
                                                    <button type='submit' class='btn btn-primary' style='padding: 0 10px;'>ADD</button>
                                                </td>
                                            </form>
                                        </tr>";
                                    $count++;
                                }
                                
                                $conexion = null;
                                $res = null;
                            ?>
                        </tbody>
                    </table>
                </div>

                <!-- VEGAN BURGERS -->
                <div id="vbP" class="tab-pane fade" role="tabpanel">
                    <table class="table table-hover">
                        <tbody>
                            <!-- PHP TABLE -->
                            <?php
                                $conexion = new Conexion();
                                $count = 1;
                                $name = 'V';

                                try {
                                    $sql = "SELECT * FROM plates WHERE ID LIKE 'V%'";
                                    $res = $conexion->query($sql);
                                } catch (PDOException $e) {
                                    echo 'Error de consulta' . $e->getMessage();
                                    exit();
                                }

                                foreach ($res as $key => $value) {
                                    $fullName = $name . strval($count);

                                    echo "
                                        <tr class='table-dark' style='max-height: 10px !important;'>
                                            <form method='POST' action='../php/addOrder.php' target='iFrameAux'>
                                                <td scope='row' id='idPlate' width='20px'><input type='text' readonly value='$fullName' name='idPlate' readonly style='background: none; border: 0; color: black !important;'></td>
                                                <td>$value[1]</td>
                                                <td>$value[2]$</td>
                                                <td>      
                                                    <input type='text' class='idUpdated' name='idUpdated' readonly style='display: none;'>
                                                    <button type='submit' class='btn btn-primary' style='padding: 0 10px;'>ADD</button>
                                                </td>
                                            </form>
                                        </tr>";
                                    $count++;
                                }
                                
                                $conexion = null;
                                $res = null;
                            ?>
                        </tbody>
                    </table>
                </div>

                <!-- DESSERTS -->
                <div id="dP" class="tab-pane fade" role="tabpanel">
                    <table class="table table-hover">
                        <tbody>
                            <!-- PHP TABLE -->
                            <?php
                                $conexion = new Conexion();
                                $count = 1;
                                $name = 'D';

                                try {
                                    $sql = "SELECT * FROM plates WHERE ID LIKE 'D%'";
                                    $res = $conexion->query($sql);
                                } catch (PDOException $e) {
                                    echo 'Error de consulta' . $e->getMessage();
                                    exit();
                                }

                                foreach ($res as $key => $value) {
                                    $fullName = $name . strval($count);

                                    echo "
                                        <tr class='table-dark' style='max-height: 10px !important;'>
                                            <form method='POST' action='../php/addOrder.php' target='iFrameAux'>
                                                <td scope='row' id='idPlate' width='20px'><input type='text' readonly value='$fullName' name='idPlate' readonly style='background: none; border: 0; color: black !important;'></td>
                                                <td>$value[1]</td>
                                                <td>$value[2]$</td>
                                                <td>      
                                                    <input type='text' class='idUpdated' name='idUpdated' readonly style='display: none;'>
                                                    <button type='submit' class='btn btn-primary' style='padding: 0 10px;'>ADD</button>
                                                </td>
                                            </form>
                                        </tr>";
                                    $count++;
                                }
                                
                                $conexion = null;
                                $res = null;
                            ?>
                        </tbody>
                    </table>
                </div>

                <!-- DRINKS -->
                <div id="xP" class="tab-pane fade" role="tabpanel">
                    <table class="table table-hover">
                        <tbody>
                            <!-- PHP TABLE -->
                            <?php
                                $conexion = new Conexion();
                                $count = 1;
                                $name = 'X';

                                try {
                                    $sql = "SELECT * FROM plates WHERE ID LIKE 'X%'";
                                    $res = $conexion->query($sql);
                                } catch (PDOException $e) {
                                    echo 'Error de consulta' . $e->getMessage();
                                    exit();
                                }

                                foreach ($res as $key => $value) {
                                    $fullName = $name . strval($count);

                                    echo "
                                        <tr class='table-dark' style='max-height: 10px !important;'>
                                            <form method='POST' action='../php/addOrder.php' target='iFrameAux'>
                                                <td scope='row' id='idPlate' width='20px'><input type='text' readonly value='$fullName' name='idPlate' readonly style='background: none; border: 0; color: black !important;'></td>
                                                <td>$value[1]</td>
                                                <td>$value[2]$</td>
                                                <td>      
                                                    <input type='text' class='idUpdated' name='idUpdated' readonly style='display: none;'>
                                                    <button type='submit' class='btn btn-primary' style='padding: 0 10px;'>ADD</button>
                                                </td>
                                            </form>
                                        </tr>";
                                    $count++;
                                }
                                
                                $conexion = null;
                                $res = null;
                            ?>
                        </tbody>
                    </table>
                </div>
            </div>    

            <!-- IFRAME AUX -->
            <iframe name="iFrameAux" style="display:none;"></iframe>
        </section>

        <section class="container" id="whiteContainer">
                <button id="backEmployees" class="btn btn-secondary" style="color: rgb(44, 43, 43) !important; margin-top: 20px; width: 150px;">Back</button>
                <form method="POST" action="../php/logoff.php">
                    <button type="submit" class="btn btn-secondary" style="color: rgb(44, 43, 43) !important; margin-top: 20px; width: 150px;">Log Off</button>
                </form>
            </div>
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

    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
  </body>
</html>