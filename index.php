<?php get_header(); ?>

<main class="page-home">


    <section class="intro">
        <div class="container">
            <h2 class="section-heading">Looking for a Chalet or Caviar?</h2>
            <p class="section-description">Realestator is your guide to Buy/Rent Chalets & Caviar in Aspen, Colorado!</p>
        </div>
    </section>

    <section class="items container">
        <section class="items-sell">
            <h3 class="section-heading">Buy</h3>
            <?php echo do_shortcode('[es_my_listing layout="2_col" category="for sale" posts_per_page="2" show_filter="0"]'); ?>
            <a href="<?php echo get_home_url(); ?>/buy/" class="btn">See All</a>
        </section>
        <section class="items-rent">
            <h3 class="section-heading">Rent</h3>
            <?php echo do_shortcode('[es_my_listing layout="2_col" category="for rent" posts_per_page="2" show_filter="0"]'); ?>
            <a href="<?php echo get_home_url(); ?>/rent/" class="btn">All Rentals</a>
        </section>
    </section>

</main>


<?php get_footer(); ?>