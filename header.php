<?php
    // Header
    wp_head();
?>

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
