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
    <div class="swiper-container">
        <h3><span class="titre titre-animation1">Les</span> <span class="titre titre-animation2"> personnages</span></h3>
        <div class="swiper-wrapper">
            <?php
            while ($characters_query->have_posts()) {
                $characters_query->the_post();
                echo '<div class="swiper-slide">';
                echo '<figure>';
                echo get_the_post_thumbnail(get_the_ID(), 'full');
                echo '<figcaption>' . get_the_title() . '</figcaption>';
                echo '</figure>';
                echo '</div>';
            }
            ?>
        </div>
        <!-- Pagination (optional) -->
        <div class="swiper-pagination"></div>
    </div>
</article>
