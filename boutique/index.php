<?php
include 'partial/header.php';

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>website with login and register form</title>
    <link href="https://fonts.googleapis.com/css2?family=Kenia&amp;display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style/bootstrap.min.css">
    <link rel="stylesheet" href="style/all.min.css">
    <link rel="stylesheet" href="style/style2.css">

</head>
<body>
    <header>
        <h2 class="logo">Logo</h2>
        <nav class="navigation">
            <a href="#">Acceuil</a>
            <a href="#">Apropos</a>
            <a href="#">Articles</a>
            <a href="#">Contact</a>
            <button class="btnLogin-popup">Connexion</button>
            <button class="btnLogin-popup"><a href="pages/admin.html">Administration</a></button>
        </nav>
    </header>
    <main>
        <section class="body">
            <div class="wrapper un <?= $message ??'' ?> ">
                <span class="icon-close">
                <i>x</i>
                </span>

                <!-- login -->
                <div class="form-box login">
                    <h2>Connexion</h2>
                    <form action="login.php" method="post">
                        <div class="input-box">
                            <span class="icon">
                                <i class="fa fa-envelope"></i>
                            </span>
                            <input type="email" name="email" required>
                            <label>Email</label>
                        </div>
                        <div class="input-box">
                            <span class="icon">
                                <i class="fa fa-lock"></i>
                            </span>
                            <input type="password" name="password" required>
                            <label>Password</label>
                        </div>
                        <div class="remember-forgot">
                            <label><input type="checkbox">Se souvenir de moi
                            </label>
                            <a href="#">Mot de pass oublié?</a>
                        </div>
                        <button type="submit" class="btn">Connexion</button>
                            <div style="color: #ca3b20">
                            </div>
                        <div class="login-register">
                            <p>Vous n'avez pas de compte?<a href="#" class="register-link">S'inscrire</a></p>
                        </div>
                    </form>

                </div>
                <!-- signin -->
                <div class="form-box register">
                    <h2>S'inscrire</h2>
                    <form action="signin.php" method="POST">
                        <div class="input-box">
                            <span class="icon">
                                <i class="fa fa-user"></i>
                            </span>
                            <input type="text" name="nom" required>
                            <label>Nom d'utilisateur</label>
                        </div>
                        <div class="input-box">
                            <span class="icon">
                                <i class="fa fa-envelope"></i>
                            </span>
                            <input type="email" name="email" required>
                            <label>Email</label>
                        </div>
                        <div class="input-box">
                            <span class="icon">
                                <i class="fa fa-lock"></i>
                            </span>
                            <input type="password" name="password" required>
                            <label>Password</label>
                        </div>
                        <div class="remember-forgot">
                            <label><input type="checkbox">J'accept les termes & conditions
                            </label>
                        </div>
                        <button type="submit" class="btn">S'inscrire</button>
                            <div style="color: #ca3b20">
                            </div>
                        <div class="login-register">
                            <p>Vous avez deja un compte?<a href="#" class="login-link">Connexion</a></p>
                        </div>
                    </form>

                </div>
            </div> 
            <div class="wrapper deux">
                <div>
                    <h3>Trouver ton prochain</h3>
                    <h2>Article  ici</h2>
                </div>
            </div>
        </section>
        <section class="site-section aos-init aos-animate" id='sticky'>
            <div class="container">
                <div class="row justify-content-center mb-5">
                    <div class="col-md-7 text-center border-primary">
                        <h2 class="font-weight-light text-primary">Nos articles</h2>
                        <p class="color-black-opacity-5">Nos articles les plus demandé</p>
                    </div>
                </div>
                <div class="row">
                        <div class="col-md-4 mb-4 col-lg-4" style="max-width: 300px;">
                            <div class="listing-item">
                                <div class="listing-image">
                                    <img src="images/mesh-genova.JPG" alt="Image" class="img-fluid">
                                </div>
                                <div class="listing-item-content">
                                    <a href="./pages/commande.html" class="bookmark" data-toggle="tooltip" data-placement="left" title="Bookmark">
                                        <span class="fas fa-cart-arrow-down"></span>
                                    </a>
                                    <a class="px-3 mb-3 category" href="#">30$</a>
                                    <h2 class="mb-1"><a href="#">nom de l'article</a></h2>
                                    <span class="address"><address></address></span>
                                </div>
                            </div>
                        </div>
                </div>
            </div>
        </section>
    </main>
    <footer>
    <div class="container">
        
        <div class="row pt-5 mt-5 text-center">
          <div class="col-md-12">
            <div class="border-top pt-5">
            <p>
            Copyright ©<script>document.write(new Date().getFullYear());</script>2023 All rights reserved | This template is made with <i class="icon-heart"></i> by <a href="https://accrodev.xyz" target="_blank">AccroDev</a>
            </p>
            </div>
          </div>
          
        </div>
      </div>
    </footer>
    <script src="boutique/script/script.js"></script>
</body>
</html>

<?php
include 'partial/footer.php';

?>