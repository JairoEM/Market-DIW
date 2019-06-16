<?php
    require("./clases/DBConection.php");

    $name = $_POST["nameCustomer"];
    $id = $_POST["idCustomer"];
    $hour = date("h:i:s");
    $totalPrice = 0;

    $bookingID = "";

    $conexion = new Conexion();


    // Creation of the html to upload correctly the iFrame
    echo"
    <!doctype html>
        <html lang='en'>
        <head>
            <!-- Required meta tags -->
            <meta charset='utf-8'>
            <meta name='viewport' content='width=device-width, initial-scale=1, shrink-to-fit=no'>

            <!-- Bootstrap CSS -->
            <link rel='stylesheet' href='../styles/style.css'>
            <link rel='stylesheet' href='https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css' integrity='sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS' crossorigin='anonymous'>
            <link rel='stylesheet' href='https://bootswatch.com/4/lux/bootstrap.min.css'>
            <link rel='stylesheet' href='https://bootswatch.com/4/lux/bootstrap.css'>
            <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.0/animate.min.css'>
            <link href='https://fonts.googleapis.com/css?family=Fira+Sans' rel='stylesheet'> 

            <style>
            *, h1, h2, h3, h4 { color: black !important;}
            </style>

            <script src='https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js'></script>
            <script src='https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js'></script>

            <title>Green Town - Log In</title>
        </head>
        <body>
            <div>
    ";


    try {
        $sqlName = "SELECT * FROM booking WHERE fullname LIKE '$name';";
        $resName = $conexion->query($sqlName);
    } catch (PDOException $e) {
        echo 'There is no booking with that name' . $e->getMessage();
    }

    try {
        $sqlID = "SELECT * FROM booking WHERE ID LIKE '$id';";
        $resID = $conexion->query($sqlID);
    } catch (PDOException $e) {
        echo 'There is no booking with that ID' . $e->getMessage();
    }

    

    // Check if the $sqlName statement found any coincidences
    if(($name != null) || ($name != "")){

        foreach ($resName as $key => $value) {
            $bookingID = $value[0];

            echo "
                <div id='bill' style='max-width: 300px !important; margin-left: 10px; margin-top: 10px'>
                    <h3 style='text-align: center'>GREEN TOWN</h3>
                    
                    <div class='row'>
                        <div class='col-6'>
                            Customer:
                        </div>
                        <div class='col-auto'>
                            $value[3]
                        </div>
                    </div>

                    <div class='row'>
                        <div class='col-6'>
                            Hour:
                        </div>
                        <div class='col-auto'>
                            $hour
                        </div>
                    </div>

                    <div class='row'>
                        <div class='col-6'>
                            Booking ID:
                        </div>
                        <div class='col-auto'>
                            $value[0]
                        </div>
                    </div>

                    <hr/>

                    <div class='row'>
                        <div class='col-12'>
                            <u style='margin-left: 10px;'>Consuptions</u>
                        </div>
                        <div class='col-12'>";
    

                    // Check for the name of all plates and do the sum of all values
                    // First of all, we take the ID of them on the consuption table
                    try {
                        $sqlConsuption = "SELECT * FROM consuption WHERE bookingID LIKE '$value[0]';";
                        $resConsuption = $conexion->query($sqlConsuption);
                    } catch (PDOException $e) {
                        echo 'There is no consuptions with that bookingID' . $e->getMessage();
                        break;
                    }

                    foreach ($resConsuption as $key => $value) {

                        // Now, we the id, we can select the name of them and write it
                        // We also sum the value of the plate to a summation -> $totalPrice
                        try {
                            $sqlPlate = "SELECT * FROM plates WHERE id LIKE '$value[2]';";
                            $resPlate = $conexion->query($sqlPlate);
                        } catch (PDOException $e) {
                            echo 'There is no plates with that plateID' . $e->getMessage();
                            break;
                        }

                        foreach ($resPlate as $key => $value) {
                            // Summation
                            $totalPrice = $totalPrice + $value[2];

                            // Write the name on the table
                            echo "
                                <div class='row'>
                                    <div class='col-6'>
                                        $value[1]
                                    </div>
                                    <div class='col-auto'>
                                        $value[2]
                                    </div>
                                </div>
                            ";
                        }
                    }
                 
                    
            echo "           
                        </div>
                    </div>

                    <hr/>

                    <div class='row'>
                        <div class='col-6'>
                            Total Price:
                        </div>
                        <div class='col-auto'>
                            $totalPrice €
                        </div>
                    </div>

                    <hr/>

                    <h4 style='text-align: center;'>Thank you for your visit</h4>
                    <h4 style='text-align: center;'>Come back soon!</h4>
                </div>
            ";
        }

    }else{

        // Check if the $sqlID statement found any coincidences
        if(($id != null) && ($id != "")){

            foreach ($resID as $key => $value) {
                $bookingID = $value[0];

                echo "
                    <div id='bill' style='max-width: 300px !important; margin-left: 10px; margin-top: 10px'>
                        <h3 style='text-align: center'>GREEN TOWN</h3>
                        
                        <div class='row'>
                            <div class='col-6'>
                                Customer:
                            </div>
                            <div class='col-auto'>
                                $value[3]
                            </div>
                        </div>

                        <div class='row'>
                            <div class='col-6'>
                                Hour:
                            </div>
                            <div class='col-auto'>
                                $hour
                            </div>
                        </div>

                        <div class='row'>
                            <div class='col-6'>
                                Booking ID:
                            </div>
                            <div class='col-auto'>
                                $value[0]
                            </div>
                        </div>

                        <hr/>

                        <div class='row'>
                            <div class='col-12'>
                                <u style='margin-left: 10px;'>Consuptions</u>
                            </div>
                            <div class='col-12'>";
        

                        // Check for the name of all plates and do the sum of all values
                        // First of all, we take the ID of them on the consuption table
                        try {
                            $sqlConsuption = "SELECT * FROM consuption WHERE bookingID LIKE '$value[0]';";
                            $resConsuption = $conexion->query($sqlConsuption);
                        } catch (PDOException $e) {
                            echo 'There is no consuptions with that bookingID' . $e->getMessage();
                            break;
                        }

                        foreach ($resConsuption as $key => $value) {

                            // Now, we the id, we can select the name of them and write it
                            // We also sum the value of the plate to a summation -> $totalPrice
                            try {
                                $sqlPlate = "SELECT * FROM plates WHERE id LIKE '$value[2]';";
                                $resPlate = $conexion->query($sqlPlate);
                            } catch (PDOException $e) {
                                echo 'There is no plates with that plateID' . $e->getMessage();
                                break;
                            }

                            foreach ($resPlate as $key => $value) {
                                // Summation
                                $totalPrice = $totalPrice + $value[2];

                                // Write the name on the table
                                echo "
                                    <div class='row'>
                                        <div class='col-6'>
                                            $value[1]
                                        </div>
                                        <div class='col-auto'>
                                            $value[2]
                                        </div>
                                    </div>
                                ";
                            }
                        }
                    
                        
                echo "           
                            </div>
                        </div>

                        <hr/>

                        <div class='row'>
                            <div class='col-6'>
                                Total Price:
                            </div>
                            <div class='col-auto'>
                                $totalPrice €
                            </div>
                        </div>

                        <hr/>

                        <h4 style='text-align: center;'>Thank you for your visit</h4>
                        <h4 style='text-align: center;'>Come back soon!</h4>
                    </div>
                ";
            }
        
        }else{
            echo "Customer not found";
        }
    }

    
    // Closing the HTML
    echo "
                </div>
            </body>
        </html>
    ";


    $totalPrice = number_format($totalPrice, 2);
    // Update of the table bill with the total price and the status
    try {
        $sqlUpdate = "UPDATE bill SET totalprice = $totalPrice, status = 'pay' WHERE bookingid LIKE '$bookingID';";
        $resUpdate = $conexion->query($sqlUpdate);
    } catch (PDOException $e) {
        echo 'The bill table can not be updated' . $e->getMessage();
    } 
?>