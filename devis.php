<?php
include 'partial/header.php';

require_once(__DIR__ . '/variables.php');
require_once(__DIR__ . '/functions.php');


<div class= "d-flex flex-column min-vh-100">
<div class="container">
 

    <h1>Obtenez un devis pour vos besoins</h1>


    <?php require_once(__DIR__ . '/login.php'); ?>

    <?php if (isset($loggedUser)) : ?>
        <?php foreach (getRecipes($recipes) as $recipe) : ?>
            <article>
                <h3><?php echo $recipe['title']; ?></h3>
                <div><?php echo $recipe['recipe']; ?></div>
                <i><?php echo displayAuthor($recipe['author'], $users); ?></i>
            </article>
        <?php endforeach ?>
    <?php endif; ?>
</div>
</div>











<?php
include 'partial/footer.php';


?>