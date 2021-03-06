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

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
    <script src="../javascripts/main.js"></script>

    <title>Green Town - Opinions</title>
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
                    <a class="nav-link" href="./menu.html">Menu</a>
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
                            <a class="dropdown-item breadcrumb-item active" href="">Opinions</a>
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
                    <a class="nav-link breadcrumb-item active" href="">Opinions</a>
                </li>
                <li class="nav-item d-lg-none">
                    <a class="nav-link" href="./location.html">Location</a>
                </li>
                <li class="nav-item d-lg-none">
                    <a class="nav-link" href="./logInEmployees.php">Employees</a>
                </li>
            </ul>

            <!-- THAT BUTTON MAY HAVE THE OPTION TO CHANGE THE LANGUAGE -->
            <br>
            <a href="#" style="color:white;"><u>ENG</u></a> / <a href="./es/opiniones.html"style="color:white;"><u>ESP</u></a>
            <br>
        </div>
    </nav>

    <!-- DIV WITH BACKGROUNB IMAGE -->
    <div class="container-fluid" id="bg">

        <!-- INTRO OPINIONS -->
        <section class="container" id="whiteContainer">
            <div class="row justify-content-center" id="opinion">
                <div class="col-auto" id="contentWC">
                    <h1>In Green Town your opinion is very important</h1>
                </div>            
                <div class="col-12">
                    <p style="font-size: 1.1rem;" id="contentWC">
                        Our commitment to the environment and animals, 
                        would be nothing without you. We wanted to thank 
                        you for your visit, and we would love you to leave 
                        us a comment about your experience, which we could 
                        improve, which is what you liked the most...
                    </p>
                </div>
                <div class="col-auto">
                    <span><img src="../assets/images/peopleEating.jpg" alt="" class="img-fluid animated zoomInDown"></span>
                </div>
            </div>
        </section>
        
        <!-- OPINIONS -->
        <section class="container" id="whiteContainer">
            <div class="row" id="contentWC">
                <div class="col-12" id="opinion">
                    <h3>Opinions from real customers</h3>
                    <div id="separator"></div>
                </div>
                <div class="col-12 col-md-8 offset-md-4 col-lg-6 offset-lg-6">
                    <p><i>
                        "We do not usually eat vegan food and the truth is that not 
                        only does it not show the difference in terms of texture, 
                        but even in the taste it can taste as good or even better 
                        than a normal hamburger. I wish I could have gone with my dog."
                    </i></p>
                    <span>
                        <img src="../assets/fullStar.svg" alt="" class="stars">
                        <img src="../assets/fullStar.svg" alt="" class="stars">
                        <img src="../assets/fullStar.svg" alt="" class="stars">
                        <img src="../assets/fullStar.svg" alt="" class="stars">
                        <img src="../assets/halfStar.svg" alt="" class="stars">
                    </span>
                    <p id="commentName">John Wick</p>
                </div>
                <div class="col-12 col-md-8 col-lg-6">
                    <p><i>
                        "Even though they do not have mead or mutton from the 
                        Blue Mountains, the food was delicious. I brought the 
                        company of the Ring to eat and even Legolas the repipi 
                        enjoyed like a 'dwarf' hahaha."
                    </i></p>
                    <span>
                        <img src="../assets/fullStar.svg" alt="" class="stars">
                        <img src="../assets/fullStar.svg" alt="" class="stars">
                        <img src="../assets/fullStar.svg" alt="" class="stars">
                        <img src="../assets/fullStar.svg" alt="" class="stars">
                        <img src="../assets/fullStar.svg" alt="" class="stars">
                    </span>
                    <p id="commentName">Gimli</p>
                </div>
            </div>

            <!-- GIVE US YOUR OPINION -->
            <div class="row">  
                <div class="col-12" id="opinion">
                    <h3>Give us your opinion</h3>
                    <div id="separator"></div>
                </div>
                <div class="col-12">
                    <form id="contentWC" method="POST" action="../php/opinionsdb.php">
                        <div class="row">
                            <div class="form-check col-12 col-lg-12 d-flex align-items-center">
                                <span style="margin-bottom: 5px;">How many stars do we deserve?</span>
                                <label for="" style="margin-left: 10px;">
                                    <span>
                                        <img src="../assets/emptyStar.svg" alt="" class="stars" id="star1">
                                        <img src="../assets/emptyStar.svg" alt="" class="stars" id="star2">
                                        <img src="../assets/emptyStar.svg" alt="" class="stars" id="star3">
                                        <img src="../assets/emptyStar.svg" alt="" class="stars" id="star4">
                                        <img src="../assets/emptyStar.svg" alt="" class="stars" id="star5">
                                    </span>
                                </label>
                                <input type="text" style="border: none; background: none; margin: 0 0 5px 10px;" readonly placeholder="0" id="points" name="points" required>
                            </div>
                        </div> 
                        <br>

                        <!-- TEXT AREA PC -->
                        <div class="d-none d-lg-block">      
                            <div class="row justify-content-between">
                                <div class="col-lg-9">
                                    <div class="form-group">
                                        <textarea class="form-control border rounded border-secondary" rows="3" style="resize: none;" id="black" name="opinionText" required></textarea>
                                    </div>
                                    <div class="form-group">
                                        <input type="text" class="form-control required border rounded border-secondary" placeholder="Insert your payment ID" id="black" name="userid" required>
                                    </div>
                                </div>
                                <div class="col-lg-2">
                                    <div class="row align-item-baseline">
                                        <div class="col-12" style="padding: 10px 0;">
                                            <img src="../assets/twitter.svg" alt="" style="height: 40px; width: auto;">
                                        </div>
                                        <div class="col-12" style="padding: 10px 0;">
                                            <img src="../assets/instagram.svg" alt="" style="height: 40px; width: auto;">
                                        </div>
                                        <div class="col-12" style="padding: 10px 0;">
                                            <img src="../assets/facebook.svg" alt="" style="height: 40px; width: auto;">   
                                        </div>
                                    </div>                                                         
                                </div>
                            </div>
                        </div>

                        <!-- TEXT AREA MOBILE AND TABLET -->
                        <div class="form-group d-block d-lg-none">
                            <textarea class="form-control border rounded border-secondary" id="" rows="3" style="resize: none;"></textarea>
                        </div>
                        <div class="form-group d-block d-lg-none">
                            <input type="text" class="form-control required border rounded border-secondary" placeholder="Insert your payment ID">
                        </div>

                        <button type="submit" class="btn btn-secondary" id="black">Send us your opinion</button>
                    </form>
                </div>
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