<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- Font awesome icons -->
    <script src="https://use.fontawesome.com/releases/v5.13.0/js/all.js" crossorigin="anonymous"></script>
    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <link rel="stylesheet" type="text/css" href="css/main.css">
    <!-- Google fonts-->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css" />
    <link href="https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic" rel="stylesheet" type="text/css" />
    <link href="https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700" rel="stylesheet" type="text/css" />
</head>
<body data-spy="scroll" data-target=".navbar" data-offset="300">
    <!-- Navigation -->
    <nav class="navbar fixed-top navbar-expand-lg navbar-dark" id="main-nav">
        <a class="navbar-brand" href="#">Senna Terpstra</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item"><a class="nav-link" href="#home">Home</a></li>
                <li class="nav-item"><a class="nav-link" href="#aboutme">Over mij</a></li>
                <li class="nav-item"><a class="nav-link" href="#projects">Projecten</a></li>
                <li class="nav-item"><a class="nav-link" href="#contact">Contact</a></li>
            </ul>
        </div>
    </nav>
    <!-- Masthead -->
    <header class="masthead">
        <div class="container h-100" id="home">
            <div class="row h-100 align-items-center">
                <div class="col-12 text-center">
                    <h1 class="font-weight-light text-white display-1">Portfolio.</h1>
                    <p class="lead text-white">Senna Terpstra</p>
                    <li class="nav-item btn btn-primary"><a class="nav-link text-white font-weight-bold" href="#aboutme">Over mij</a></li>
                </div>
            </div>
        </div>
    </header>
<body>
    <!-- about me -->
    <section class="py-5 infosection" id="aboutme">
    <div class="container h-100">
        <div class="row">
            <div class="col-6">
                <h2 class="titles">Over mij</h2>
                <p>Ik ben Senna en ben 17 jaar oud. Ik woon in Leeuwarden en Franeker. Mijn hobby's zijn: Netflix kijken, met vrienden afspreken en progammeren. Naast school heb ik een bijbaantje als
                    vakkenvuller en kassier bij de action. 
                </p>
            </div>
            <div class="col-5">
                <img class="projectimg" src="assets/portraitplaceholder.png">
            </div>
        </div>
    </div>
    </section>
    <!-- Projects -->
    <section class="py-5 bg-light" id="projects">
        <div class="container">
            <h1 class="titles text-center">Projecten</h1>
            <div class="row">
                <div class="col-lg-4 col-sm-6 mb-4">
                    <div class="card" style="width: 18rem;">
                        <img class="card-img-top" src="assets/projectimage.jpg">
                        <div class="card-body text-center">
                            <h5 class="card-title projecttitle">Project titel</h5>
                            <a href="#" class="btn btn-primary" data-toggle="modal" data-target="#portfolioModal1">Meer info.</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6 mb-4">
                    <div class="card" style="width: 18rem;">
                        <img class="card-img-top" src="assets/projectimage.jpg">
                        <div class="card-body text-center">
                            <h5 class="card-title projecttitle">Project titel</h5>
                            <a href="#" class="btn btn-primary">Meer info.</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6 mb-4">
                    <div class="card" style="width: 18rem;">
                        <img class="card-img-top" src="assets/projectimage.jpg">
                        <div class="card-body text-center">
                            <h5 class="card-title projecttitle">Project titel</h5>
                            <a href="#" class="btn btn-primary">Meer info.</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6 mb-4">
                    <div class="card" style="width: 18rem;">
                        <img class="card-img-top" src="assets/projectimage.jpg">
                        <div class="card-body text-center">
                            <h5 class="card-title projecttitle">Project titel</h5>
                            <a href="#" class="btn btn-primary">Meer info.</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6 mb-4">
                    <div class="card" style="width: 18rem;">
                        <img class="card-img-top" src="assets/projectimage.jpg">
                        <div class="card-body text-center">
                            <h5 class="card-title projecttitle">Project titel</h5>
                            <a href="#" class="btn btn-primary">Meer info.</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Contact -->
    <section class="py-5 infosection" id="contact">
        <div class="container">
            <h2 class="titles text-center">Contact</h2>
            <p class="text-center">Telefoonnummer: 06 48319249<br>Email: sennaterpstra@gmail.com</p>
        </div>
    </section>
</body>
<!-- Footer-->
<footer class="footer py-4 bg-light">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-4 text-lg-left">Copyright © Portfolio Senna Terpstra 2020</div>
                    <div class="col-lg-4 my-3 my-lg-0">
                        <a class="btn btn-dark btn-social mx-2" href="#!"><i class="fab fa-twitter"></i></a><a class="btn btn-dark btn-social mx-2" href="https://www.facebook.com/senna.terpstra/"><i class="fab fa-facebook-f"></i></a><a class="btn btn-dark btn-social mx-2" href="https://www.instagram.com/sennaterpstra/"><i class="fab fa-instagram"></i></a>
                    </div>
                    <div class="col-lg-4 text-lg-left"></div>
                </div>
            </div>
        </footer>
        <!-- Portfolio Modals--><!-- Modal 1-->
        <div class="portfolio-modal modal fade" id="portfolioModal1" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-8">
                                <div class="modal-body">
                                    <!-- Project Details Go Here-->
                                    <h2 class="text-uppercase">Project naam</h2>
                                    <p class="item-intro text-muted">Lorem ipsum dolor sit amet consectetur.</p>
                                    <img class="img-fluid d-block mx-auto" src="assets/projectimage.jpg" alt="" />
                                    <p>Informatie project <br> Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, </p>
                                    <ul class="list-inline">
                                        <li>Datum: 01-05-2019 tot 01-06-2019</li>
                                        <li>Klant: Basisschool de vlinder</li>
                                        <li>Categorie: Onderwijs</li>
                                    </ul>
                                    <button class="btn btn-primary" data-dismiss="modal" type="button"><i class="fas fa-times mr-1"></i>Close Project</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</html>