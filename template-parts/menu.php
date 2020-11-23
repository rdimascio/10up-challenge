<div id="headerMenu" class="menu hide">
    <div class="menu-wrapper">
        <span id="headerMenuClose" class="menu-close">&times;</span>

        <?php
            wp_nav_menu([
                'theme_location' => 'header',
                'container_class' => 'menu-header-wrapper',
                'menu_class' => 'menu-header',
                'fallback_cb' => false,
            ]);
        ?>
    </div>
</div>
