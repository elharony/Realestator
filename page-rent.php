<?php get_header(); ?>

<main class="page-rent">

    <section class="hero">
        <div class="container">Rent Chalet & Caviar</div>
    </section>

    <section class="items">
        <div class="container">
            <?php echo do_shortcode('[es_my_listing layout="3_col" category="for rent" posts_per_page="6" show_filter="0"]'); ?>
        </div>
    </section>

</main>


<?php get_footer(); ?>