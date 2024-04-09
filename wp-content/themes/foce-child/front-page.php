<body>
<html>
<?php

get_header();
?>

    <main id="primary" class="site-main">

        <section class="banner">
            <div class="bloc_video"
            data-0="transform:translateY(0px)" data-200="transform:translateY(-170px);">
                <?php
                    $background_video = get_theme_file_uri("assets/video/background_video.mp4");
                ?>
                <video class="background_video" autoplay loop muted poster="<?php echo get_theme_file_uri("assets/images/banner.png")?>">
                    <source src="<?php echo $background_video; ?>" type="video/mp4">
                </video>
            </div>
            <div class="bloc_img_logo" style="position: sticky">
                <img class="img_logo" src="<?php echo get_stylesheet_directory_uri() . '/assets/images/logo.png'; ?>" alt="logo Fleurs d'oranger & chats errants">  
            </div>
        </section>

        <section id="#story" class="story">
            <h2 class="title_animation"><span>L'histoire</span></h2>

            <article id="" class="story__article">
                <p><?php echo get_theme_mod('story'); ?></p>
            </article>

            <?php
            $args = array(
                'post_type' => 'characters',
                'posts_per_page' => -1,
                'meta_key'  => '_main_char_field',
                'orderby'   => 'meta_value_num',

            );
            $characters_query = new WP_Query($args);
            ?>

            <article id="characters">

            <?php get_template_part( 'template-parts/slider' ); ?>

            <!--slider SwiperJS
                <div class="main-character">
                    <h3 class="title_animation"><span>Les personnages</span></h3>
                    /* <?php
                    $main_character = $characters_query->posts[0];
                    echo '<figure>';
                    echo get_the_post_thumbnail( $main_character->ID, 'full' );
                    echo '<figcaption>'. $main_character->post_title . '</figcaption>';
                    echo '</figure>';
                    $characters_query->next_post();
                    ?> */   
            </div>
                <div class="other-characters">
                    /* <?php
                    while ( $characters_query->have_posts() ) {
                        $characters_query->the_post();
                        echo '<figure>';
                        echo get_the_post_thumbnail( get_the_ID(), 'full' );
                        echo '<figcaption>';
                        the_title();
                        echo'</figcaption>';
                        echo '</figure>';
                    }
                    ?> */
                </div>
                -->
            </article>

            <article id="place">
                <?php
                    $background_img_place = get_stylesheet_directory_uri() . "/assets/images/Studio_Koukaki-image_place.png";
                    $background_img_nuage1 = get_stylesheet_directory_uri() . "/assets/images/little_cloud.png";
                    $background_img_nuage2 = get_stylesheet_directory_uri() . "/assets/images/big_cloud.png";
                ?>
                <img class="background_img_place" src="<?php echo $background_img_place ?>" type="image" alt="Image de fond colorée">
                <div class="place_nuages">
                    <div class="place_text">
                        <h3 class="title_animation"><span>Le Lieu</span></h3>
                        <p><?php echo get_theme_mod('place'); ?></p>
                    </div>
                    <img class="little_cloud" src="<?php echo $background_img_nuage1 ?>" type="image" alt="Image de petits nuages"
                    style="position: absolute" data-center-top="left:700px; transform:translateX(300px);" data-top="left:1000px; transform:translateX(-600px);">
                    <img class="big_cloud" src="<?php echo $background_img_nuage2 ?>" type="image" alt="Image de gros nuages"
                    style="position: absolute" data-center-top="left:900px; transform:translateX(300px);" data-top="left:1300px; transform:translateX(-600px);">
                </div>
            </article>

        </section>

        <section id="studio">
            <h2 class="title_animation"><span>Studio Koukaki</span></h2>
            <div>
                <p>Acteur majeur de l’animation, Koukaki est un studio intégré fondé en 2012 qui créé, produit et distribue des programmes originaux dans plus de 190 pays pour les enfants et les adultes. Nous avons deux sections en activité : le long métrage et le court métrage. Nous développons des films fantastiques, principalement autour de la culture de notre pays natal, le Japon.</p>
                <p>Avec une créativité et une capacité d’innovation mondialement reconnues, une expertise éditoriale et commerciale à la pointe de son industrie, le Studio Koukaki se positionne comme un acteur incontournable dans un marché en forte croissance. Koukaki construit chaque année de véritables succès et capitalise sur de puissantes marques historiques. Cette année, il vous présente “Fleurs d’oranger et chats errants”.</p>
            </div>
        </section>

        <section id="oscars">           

        <?php get_template_part( 'template-parts/oscars' ); ?>

        </section>

    </main><!-- #main -->

<?php
get_footer();
?>

<script src="./wp-content/themes/foce-child/js/skrollr.min.js" type="text/javascript"></script>
<script>
    var s = skrollr.init();
</script>

</body>
</html>
