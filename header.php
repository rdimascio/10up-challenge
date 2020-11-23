<?php
    // Header
    // wp_head();
?>

<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=0, viewport-fit=cover">
        <?php wp_head(); ?>
    </head>

    <body>
        <header class="header">
            <div class="header-wrapper">
                <a href="/" rel="noopener" class="header-logo">
                    <?php get_template_part('template-parts/header-logo'); ?>
                </a>
                <a href="#" rel="noopener" id="headerMenuIcon" class="header-menu">
                    <?php get_template_part('template-parts/menu-icon'); ?>
                </a>
            </div>
        </header>

<?php get_template_part('template-parts/menu'); ?>
