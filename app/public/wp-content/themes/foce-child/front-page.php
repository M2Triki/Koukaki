<?php

get_header();
?>

    <main id="primary" class="site-main">
        <section class="banner">
            <video autoplay muted loop poster="<?php echo get_template_directory_uri() . '/assets/images/logo.png'; ?>" class="background-video">
                <source src="https://course.oc-static.com/projects/D%C3%A9veloppeur+Web/DWP+IW_P9+Studio+d'animation/Studio+Koukaki-vide%CC%81o+header+sans+son+(1).mp4" type="video/mp4">"
            </video>
            <img src="<?php echo get_template_directory_uri() . '/assets/images/logo.png'; ?> " alt="logo Fleurs d'oranger & chats errants">
            <!-- <h1 class="titre-site">Koukaki Studio</h1> -->
        </section>

        <section id="story" class="story">
            <h2><span class="titre titre-animation1">L'histoire</span></h2>
            <article id="" class="story__article">
                <p><?php echo get_theme_mod('story'); ?></p>
            </article>
            
            <?php get_template_part( 'template-parts/characters' ); ?>

            <article id="place">
                <div>
                    <h3><span class="titre titre-animation1">Le </span><span class="titre titre-animation2">Lieu</span></h3>
                    <p><?php echo get_theme_mod('place'); ?></p>
                </div>
                <div class="container-nuages" data-top="transform:translateX(-300px);" data-bottom="transform:translateX(0px);">
                    <img src="<?php echo get_stylesheet_directory_uri() . '/assets/images/nuages.png'; ?>" alt="Nuages">
                </div>
            </article>

            
        </section>
        
        
        <section id="studio">
            <h2><span class="titre titre-animation1">Studio </span><span class="titre titre-animation2">Koukaki</span></h2>
            <div>
                <p>Acteur majeur de l’animation, Koukaki est un studio intégré fondé en 2012 qui créé, produit et distribue des programmes originaux dans plus de 190 pays pour les enfants et les adultes. Nous avons deux sections en activité : le long métrage et le court métrage. Nous développons des films fantastiques, principalement autour de la culture de notre pays natal, le Japon.</p>
                <p>Avec une créativité et une capacité d’innovation mondialement reconnues, une expertise éditoriale et commerciale à la pointe de son industrie, le Studio Koukaki se positionne comme un acteur incontournable dans un marché en forte croissance. Koukaki construit chaque année de véritables succès et capitalise sur de puissantes marques historiques. Cette année, il vous présente “Fleurs d’oranger et chats errants”.</p>
            </div>
        </section>
    </main>

    <?php get_template_part( 'template-parts/section-oscars' ); ?>
    
    <?php
get_footer();
