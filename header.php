<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <?php wp_head(); ?>
    <!-- EL STYLE ESTA CARGAFO CON UNA FUNCION EN FUNCTIONS -->
</head>
<body>
    <header class="site-header">
    <div class="header-container">
        <div class="logo">
            <a href="<?php echo esc_url(home_url('/')); ?>">
                <img src="<?php echo get_template_directory_uri(); ?>/img/logo.png" alt="<?php bloginfo('name'); ?>">
            </a>
        </div>
        
        <button class="menu-toggle" aria-label="Menú móvil">
            <span class="hamburger"></span>
        </button>
        
        <nav class="main-navigation">
            <?php wp_nav_menu(array(
                'theme_location' => 'menu-principal',
                'container' => false,
                'menu_class' => 'menu-wrapper',
                'fallback_cb' => false
            )); ?>
        </nav>
    </div>
</header>
