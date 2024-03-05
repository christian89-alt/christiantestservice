<?php
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />

  <title>Conseil entreprise | Développement web & mobile</title>
  <meta name="keywords" content="" />
  <meta name="description" content="" />
  <meta http-equiv="X-UA-Compatible" content="IE=Edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <link rel="stylesheet" href="./assets/css/animate.min.css" />
  <link rel="stylesheet" href="./assets/css/burger.css" />
  <link rel="stylesheet" href="./assets/css/bootstrap.min.css" />
  <link rel="stylesheet" href="./assets/css/font-awesome.min.css" />
  <link href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700" rel="stylesheet" type="text/css" />
  <link rel="stylesheet" href="./assets/css/christianservice-style.css" />
  <script src="js/jquery.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/jquery.singlePageNav.min.js"></script>
  <script src="js/typed.js"></script>
  <script src="js/wow.min.js"></script>
  <script src="js/custom.js"></script>
</head>

<body id="top">
  <!-- start preloader -->
  <div class="preloader">
    <div class="sk-spinner sk-spinner-wave">
      <div class="sk-rect1"></div>
      <div class="sk-rect2"></div>
      <div class="sk-rect3"></div>
      <div class="sk-rect4"></div>
      <div class="sk-rect5"></div>
    </div>
  </div>
  <!-- end preloader -->

  <!-- start header -->
  <header>
    <div class="container">
      <div class="row">
        <div class="col-md-3 col-sm-4 col-xs-12">
          <p>
            <i class="fa fa-phone"></i><span> Téléphone</span>+33 7 67 53 36
            25
          </p>
        </div>
        <div class="col-md-3 col-sm-4 col-xs-12">
          <p>
            <i class="fa fa-envelope-o"></i><span> Email</span><a href="#">c.duboc43@gmail.com</a>
          </p>
        </div>
        <div class="col-md-5 col-sm-4 col-xs-12">
          <ul class="social-icon">
            <li><a href="./contact-us.php"><span>ME CONTACTER</span></a></li>
          </ul>
        </div>
      </div>
    </div>
  </header>
  <!-- end header -->

  <!-- start navigation -->
  <div class="container-fluid main">
    <nav class="navbar navbar-default">
      <div class="container-fluid">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span> 
          </button>
          <a class="navbar-brand" href="./index.html">Offshore Services </a>
        </div>
        <div class="collapse navbar-collapse" id="myNavbar">
          <ul class="nav navbar-nav">
            <li><a href="./index.html">Accueil</a></li>
            <li><a href="./web-developpement.html">Web & Mobil</a></li>
            <li><a href="./agence_commerciale.html">Assistance commerciale</a></li>
            <li><a href="./offshore.html">Offshore</a></li>
            <li><a href="./contact-us.html">Contact</a></li> 
          </ul>
        </div>
      </div>
    </nav>
  <!-- end navigation -->

  <!-- start home -->
  <section id="home">
    <div class="container">
      <div class="row">
        <div class="col-md-offset-2 col-md-8">
          <h1 class="wow fadeIn" data-wow-offset="50" data-wow-delay="0.9s">
            Une expertise pour <span>l'entreprise et le créateur </span>
          </h1>
          <div class="element">
            <div class="sub-element">
              Offshore service, spécialiste de l'entreprise
            </div>
            <div class="sub-element">
              Développement web et mobile, gestion de projet web
            </div>
            <div class="sub-element">
              Développement et optimisation entreprise
            </div>
          </div>
          <a data-scroll href="#about" class="btn btn-default wow fadeInUp" data-wow-offset="50"
            data-wow-delay="0.6s">GET STARTED</a>
        </div>
      </div>
    </div>
  </section>
  <!-- end home -->

  <!-- start contact -->
  <section id="contact">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <h2 class="wow bounceIn" data-wow-offset="50" data-wow-delay="0.3s">
            NOUS <span>CONTACTER</span>
          </h2>
        </div>
        <div class="col-md-6 col-sm-6 col-xs-12 wow fadeInLeft" data-wow-offset="50" data-wow-delay="0.9s">
          <form action="#" method="post">
            <label>NOM</label>
            <input name="fullname" type="text" class="form-control" id="fullname" />

            <label>EMAIL</label>
            <input name="email" type="email" class="form-control" id="email" />

            <label>MESSAGE</label>
            <textarea name="message" rows="4" class="form-control" id="message"></textarea>

            <input type="submit" class="form-control" />
          </form>
        </div>
        <div class="col-md-6 col-sm-6 col-xs-12 wow fadeInRight" data-wow-offset="50" data-wow-delay="0.6s">
          <address>
            <p class="address-title">Adresse</p>
            <span>N'hésitez pas à me contacter pour que nous échangions sur votre projet!</span>
            <p><i class="fa fa-phone"></i> + 33 7 67 53 36 25</p>
            <p><i class="fa fa-envelope-o"></i> c.duboc43@gmail.com</p>
          
          </address>
          <ul class="social-icon">
            <li>
              <h4>WE ARE SOCIAL</h4>
            </li>
            <li><a href="#" class="fa fa-facebook"></a></li>
            <li><a href="#" class="fa fa-twitter"></a></li>
            <li><a href="#" class="fa fa-instagram"></a></li>
          </ul>
        </div>
      </div>
    </div>
  </section>
  <!-- end contact -->

  <!-- start copyright -->
  <footer id="copyright">
    <div class="container">
      <div class="row">
        <div class="col-md-12 text-center">
          <p class="wow bounceIn" data-wow-offset="50" data-wow-delay="0.3s">
            Copyright &copy; Offshores Services
          </p>
        </div>
      </div>
    </div>
  </footer>
  <!-- end copyright -->
</body>

</html>