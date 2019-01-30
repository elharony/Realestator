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

        <header>
            This is a header
        </header>