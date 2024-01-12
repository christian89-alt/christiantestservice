<?php

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Christian Service </title>

    <!-- load CSS -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300">  <!-- Google web font "Open Sans" -->
    <link rel="stylesheet" href="css/bootstrap.min.css">                                  <!-- https://getbootstrap.com/ -->
    <link rel="stylesheet" href="fontawesome/css/fontawesome-all.min.css">                <!-- https://fontawesome.com/ -->
    <link rel="stylesheet" type="text/css" href="slick/slick.css"/>                       <!-- http://kenwheeler.github.io/slick/ -->
    <link rel="stylesheet" type="text/css" href="slick/slick-theme.css"/>
    <link rel="stylesheet" href="css/christianservice-style.css">   
    <link rel="stylesheet" href="css/burger.css">                            <!-- Templatemo style -->

    <script>document.documentElement.className="js";var supportsCssVars=function(){var e,t=document.createElement("style");return t.innerHTML="root: { --tmp-var: bold; }",document.head.appendChild(t),e=!!(window.CSS&&window.CSS.supports&&window.CSS.supports("font-weight","var(--tmp-var)")),t.parentNode.removeChild(t),e};supportsCssVars()||alert("Please view this in a modern browser such as latest version of Chrome or Microsoft Edge.");</script>
    
</head>

<body>
    <!-- 

        <div id="root">
        <div id="topnav" class="topnav">
          <a id="home_link" class="topnav_link" href="/">HOME</a>
      
         
          <nav role="navigation" id="topnav_menu">
            <a class="topnav_link" href="/about">ABOUT</a>
            <a class="topnav_link" href="/contact-us">CONTACT</a>
          </nav>
      
          <a id="topnav_hamburger_icon" href="javascript:void(0);" onclick="showResponsiveMenu()">
           
            <span></span>
            <span></span>
            <span></span>
          </a>
      
          
          <nav role="navigation" id="topnav_responsive_menu">
            <ul>
              <li><a href="/">HOME</a></li>
              <li><a href="/about">ABOUT</a></li>
              <li><a href="/contact-us">CONTACT</a></li>
              <li><a href="/privacy-policy">PRIVACY POLICY</a></li>
              <li><a href="/terms-and-conditions">TERMS AND CONDITIONS</a></li>
            </ul>
          </nav>
        </div>
      </div>

    -->
    
   
    


         <div :class="[classNameA, {classNameB : condition}]"></div>
    <div id="mysidenav" class="container">
        <a id="closeBtn" href="#" class="close">&times;</a>
        <nav class="navbar">
            <a href="#" class="logo">CD</a>
            <ul class="nav-links">
                <li><a href="#">Accueil</a></li>
                <li><a href="#">Transition digital</a></li>
                <li><a href="#">Création entreprise</a></li>
                <li><a href="#">Contact</a></li>
                <button>Sign In</button>
                <button>Sign Up</button>
            </ul>
            <i class="fas fa-bars fa-2x" id="burger"></i>
        </nav>
    

    </div>
    
   
    
    <div id="tm-bg"></div>
    <div id="tm-wrap">
        <div class="tm-main-content">
            <div class="container tm-site-header-container">
                <div class="row">
                    <div class="col-sm-12 col-md-6 col-lg-6 col-md-col-xl-6 mb-md-0 mb-sm-4 mb-4 tm-site-header-col">
                        <div class="tm-site-header">
                            <h1 class="mb-4">Christian Duboc </h1>
                            <img src="img/underline.png" class="img-fluid mb-4">
                            <p>Spécialiste de l'entreprise, je vous accompagne dans le développement, la gestion et l'optimisation de votre entreprise au quotidien.</p>        
                        </div>                        
                    </div>
                    <div class="col-sm-12 col-md-6 col-lg-6 col-xl-6">
                        <div class="content">
                            <div class="grid">
                                <div class="grid__item" id="home-link">
                                    <div class="product">
                                        <div class="tm-nav-link">
                                            <i class="fas fa-home fa-3x tm-nav-icon"></i>
                                            <span class="tm-nav-text">Mes services </span>
                                            <div class="product__bg"></div>        
                                        </div>                                    
                                        <div class="product__description">
                                            <div class="row mb-3">
                                                <div class="col-12">
                                                    <h2 class="tm-page-title">Ce que je vous propose</h2>
                                                    <p>Créer, développer, optimiser votre entreprise, voila ce que je vous propose.</p>
                                                    <p></p>        
                                                </div>
                                            </div>                                        
                                            <div class="row">
                                                <div class="col-sm-12 col-md-6 col-lg-6 col-xl-6">
                                                    <h4>Développement web et mobile</h4>
                                                    <img src="img/welcome-1.jpg" class="img-fluid mb-3">
                                                    <p>Développeur web freelance, je suis à votre écoute pour réaliser vos projets web et mobile.</p>
                                                    <p>Je vous  propose mes compétences en développement frontend ou backend selon vos besoins.
                                                        Compétences : </p>
                                                        <ul>
                                                            <li>WordPress, E-commerce/ Création de site vitrine</li>
                                                            <li>HTML5 / CSS3 / React Js( Next Js) / NodeJs</li>   
                                                            <li>Gestion de projet /Méthodologie scrum</li>

                                                        </ul>
                                                        <p>Je vous accompagne dans la mise en place complète de votre démarche numérique et dans l'optimisation de vos outils web.</p>

                                                    <a href="#" class="btn tm-btn-gray">En savoir plus </a>
                                                    <h4>Assitance administrative</h4>
                                                    <img src="img/consulting-assistance.jpg" class="img-fluid mb-3">
                                                    <p>La réalisation des tâches administratives est la mission principale d’un assistant administratif. Parmi les tâches qu’il assure, on trouve :

                                                        <UL>
                                                            <li>Participation aux audits financiers</li>
                                                            <li>A la gestion des ressources humaines</li>
                                                            <li>Assitance à la mise en place de votre politique de développement.</li>
                                                        </UL>
                                                    
                                                    <a href="#" class="btn tm-btn-gray">En savoir plus</a>
                                                </div>
                                                <div class="col-sm-12 col-md-6 col-lg-6 col-xl-6">
                                                    <h4>Développement commercial</h4>
                                                    <img src="img/consulting-gcf7c77d2b_640.jpg" class="img-fluid">
                                                    <p>Bon nombre d’entreprises disparaissent chaque jour faute d’un développement commercial suffisant. Elles disposent pourtant d’un réel savoir-faire</p>
                                                    <p>Leur patrimoine client ne s’est pas renouvelé, certains sont partis et elles ne se sont pas dotées des moyens suffisants pour en conquérir de nouveaux, ou elles n'ont pas réalisé les transformations profondes qui sont intervenus durant les dernières decennies.</p>
                                                    <p>Je vous accompagne dans la transformation et l'optimisation de vos aspects commerciaux.</p>
                                                    <a href="#" class="btn tm-btn-gray">En savoir plus</a>
                                                    
                                                    <h4>Gestion de projet</h4>
                                                    <img src="img/welcome-2.jpg" class="img-fluid">
                                                    <p>La gestion de projet web est un processus complexe qui implique la planification, l’organisation et le suivi de la réalisation du projet web.</p>
                                                    <p>Cela peut inclure la création d’un site web, la mise à jour d’un site existant ou la mise en place de nouvelles fonctionnalités pour un site web (cela fonctionne aussi avec une application). Pour gérer efficacement un projet web, il est important de suivre certaines étapes clés qui vous mèneront à la réussite du projet.</p>
                                                    
                                                    <a href="#" class="btn tm-btn-gray">En savoir plus</a>
                                                    
                                                </div>                                        
                                            </div>
                                            
                                        </div>
                                    </div>
                                </div>

                                <div class="grid__item" id="team-link">
                                    <div class="product">
                                        <div class="tm-nav-link">
                                            <i class="fas fa-users fa-3x tm-nav-icon"></i>
                                            <span class="tm-nav-text">A propos de moi </span>
                                            <div class="product__bg"></div>            
                                        </div>                                     
                                        <div class="product__description">
                                            <div class="p-sm-4 p-2">
                                                <div class="row mb-3">
                                                    <div class="col-12">
                                                        <h2 class="tm-page-title">Mon parcours</h2>        
                                                    </div>
                                                </div>
                                                <div class="row tm-reverse-sm">
                                                    <div class="col-sm-12 col-md-8 col-lg-8 col-xl-8">
                                                        <p class="mb-4">Spécialiste de l'entreprise, je suis à votre écoute pour aider dans le développement de votre entreprise.</p>
                                                        <p> Je vous  propose mes de mettre à votre disposition mon expertise en matière de développement , de gestion et d'optimisation d'entreprise.</p>
                                                        <p>J'interviens notamment depuis plus de 20 ans dans les domaines suivants: 
                                                            <ul>
                                                                <li>Assistance au développement commercial et accompagnement à la transition digitale </li>
                                                                <li>Développement d'application web et mobile</li>
                                                                <li>Gestion de projet</li>
                                                                <li>Assistance administrative et création d'entreprise en France et à l'étranger</li>
                                                                <li>Etablissement prévisionnel financiers</li>
                                                            </ul>
                                                            <p>
                                                            Encore peu connu par les chefs d’entreprise de TPE et PME, le consulting permet aux dirigeants d’être accompagné de manière opérationnelle par un consultant qui va leur apporter la prise de recul nécessaire, un savoir-faire sur son domaine d’expertise et son expérience.</p>
                                                            <p> Cela va permettre aux dirigeants de prendre les bonnes décisions afin de minimiser les risques pour le développement de la société.</p>

                                                         
                                                                                  
                                                        <p class="mb-4"></p>
                                                        <p class="mb-5"></p>
                                                        <a href="#" class="btn tm-btn-gray">Me contacter</a>        
                                                    </div>                                                
                                                    <div class="col-sm-12 col-md-4 col-lg-4 col-xl-4 mb-lg-0 mb-sm-4 mb-4">
                                                        <img src="img/charlesdeluvio-rRWiVQzLm7k-unsplash.jpg" class="img-fluid">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="grid__item">
                                    <div class="product">
                                        <div class="tm-nav-link">
                                            <i class="fas fa-handshake fa-3x tm-nav-icon"></i>
                                            <span class="tm-nav-text">Création société Offshore</span>
                                            <div class="product__bg"></div>             
                                        </div>                                                                 
                                        <div class="product__description">
                                            <div class="p-sm-4 p-2">
                                                <div class="row mb-3">
                                                    <div class="col-12">
                                                        <h2 class="tm-page-title">Fond d'investissement</h2>        
                                                    </div>
                                                </div>
                                                <div class="row mb-3">
                                                    <div class="col-12">
                                                        <p>Vous envisager de vous développer à l'international? Je vous accompagne et vous aide à: </p>
                                                        <ul>

                                                            <li>Créer votre société </li>
                                                            <li>Recruter votre personnel</li>
                                                            <li>Trouver vos bureaux</li>
                                                            <li>Introduction bancaire et recherche de financement</li>
                                                            
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-12">
                                                        <div class="p-sm-4 p-2 tm-img-container">
                                                            <div class="tm-img-slider" id="tmImgSlider">
                                                              <a href="#" class="tm-slider-img-link"><img src="img/carlos-muza-hpjSkU2UYSU-unsplash.jpg" alt="Creation de société 1" class="img-fluid tm-slider-img"></a>
                                                              <a href="#" class="tm-slider-img-link"><img src="img/react (1).jpg" alt="react technologie" class="img-fluid tm-slider-img"></a>
                                                              <a href="#" class="tm-slider-img-link"><img src="img/consulting-gcf7c77d2b_640.jpg" alt="Image 3" class="img-fluid tm-slider-img"></a>
                                                              <a href="#" class="tm-slider-img-link"><img src="img/moritz-mentges-5MlBMYDsGBY-unsplash.jpg" alt="wordpress" class="img-fluid tm-slider-img"></a>
                                                              <a href="#" class="tm-slider-img-link"><img src="img/woman-1169324_1920.jpg" alt="Image 5" class="img-fluid tm-slider-img"></a>
                                                              <a href="#" class="tm-slider-img-link"><img src="img/tax-office-2668214_1280 (1).jpg" alt="Optimisation fiscale" class="img-fluid tm-slider-img"></a>
                                                            </div>
                                                        </div>  
                                                    </div>
                                                </div>
                                            </div>
                                        </div>       
                                    </div>
                                </div>

                                <div class="grid__item">
                                    <div class="product">
                                        <div class="tm-nav-link">
                                            <i class="fas fa-comments fa-3x tm-nav-icon"></i>
                                            <span class="tm-nav-text">Contact</span>
                                            <div class="product__bg"></div>             
                                        </div>                                                              
                                        <div class="product__description">
                                            <div class="pt-sm-4 pb-sm-4 pl-sm-5 pr-sm-5 pt-2 pb-2 pl-3 pr-3">
                                                <div class="row mb-3">
                                                    <div class="col-12">
                                                        <h2 class="tm-page-title">Nous contacter </h2>        
                                                    </div>
                                                </div>
                                                <div class="row mb-4">
                                                    <div class="col-12">
                                                        <p>Besoin de plus d'informations sur mes services? N'hésitez pas à me contacter? </p>
                                                        <p>Echangeons sur votre projet et commençons notre collaboration ! </p>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-12">
                                                        <form action="contact.php" method="post" class="contact-form">
                                                            <div class="row">
                                                                <div class="form-group col-md-6 col-lg-6 col-xl-6">
                                                                  <input type="text" id="contact_name" name="contact_name" class="form-control" placeholder="Name"  required/>
                                                                </div>
                                                                <div class="form-group col-md-6 col-lg-6 col-xl-6 tm-col-email">
                                                                  <input type="email" id="contact_email" name="contact_email" class="form-control" placeholder="Email"  required/>
                                                                </div>
                                                            </div>                                                        
                                                            <div class="form-group">
                                                              <textarea id="contact_message" name="contact_message" class="form-control" rows="9" placeholder="Message" required></textarea>
                                                            </div>
                                                            <button type="submit" class="btn btn-primary tm-btn-submit">Submit</button>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>                                            
                                        </div>
                                    </div>
                                </div>
                            </div> 
                        </div>                       
                    </div>
                </div>                
            </div>
            <footer>
                <p class="small tm-copyright-text">Copyright &copy; <span class="tm-current-year">2020</span> Boosthub 
                
                Design: <a rel="nofollow" href="https://www.offshoreservices.com" class="tm-text-highlight">Christian DUBOC</a></p>
            </footer>
        </div> <!-- .tm-main-content -->  
    </div>
    <!-- load JS -->
    <script src="js/jquery-3.2.1.slim.min.js"></script>         <!-- https://jquery.com/ -->    
    <script src="slick/slick.min.js"></script>                  <!-- http://kenwheeler.github.io/slick/ -->  
    <script src="js/anime.min.js"></script>                     <!-- http://animejs.com/ -->
    <script src="js/main.js"></script>  
    <script src="js/burger.js"></script>
    <script>      

        function setupFooter() {
            var pageHeight = $('.tm-site-header-container').height() + $('footer').height() + 100;

            var main = $('.tm-main-content');

            if($(window).height() < pageHeight) {
                main.addClass('tm-footer-relative');
            }
            else {
                main.removeClass('tm-footer-relative');   
            }
        }

        /* DOM is ready
        ------------------------------------------------*/
        $(function(){

            setupFooter();

            $(window).resize(function(){
                setupFooter();
            });

            $('.tm-current-year').text(new Date().getFullYear());  // Update year in copyright           
        });

    </script>             

</body>
</html>