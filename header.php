<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="<?php bloginfo("charset"); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <!-- SEO Essentials -->
    <title>
        <?php is_front_page() ? bloginfo("name") : wp_title("&raquo;", true, "right")?>
    </title>

    <?php wp_head(); ?>
</head>
<body>

        <header class="main-header">
            <div class="container">
                <div class="logo">
                    <a href="<?php echo get_home_url(); ?>">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/logo.png" alt="Logo">
                    </a>
                </div>
                <?php display_menu() ?>
            </div>
        </header>