<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php bloginfo('name'); ?></title>
    <?php wp_head(); ?>
</head>
<body>

<header>
    <img src="<?php echo get_template_directory_uri(); ?>/images/logo.png" alt="Logo">
    <h1><?php bloginfo('name'); ?></h1>
    <p><?php bloginfo('description'); ?></p>

    <nav>
        <?php
            wp_nav_menu(array(
                'theme_location' => 'menu_principal',
                'container' => false
            ));
        ?>
    </nav>
</header>

<main>
    <?php
        if ( have_posts() ) {
            while ( have_posts() ) {
                the_post();
                echo '<article class="entrada">';
                echo '<h2>' . get_the_title() . '</h2>';
                the_content();
                echo '</article>';
            }
        } else {
            echo '<p>No hay noticias todavía.</p>';
        }
    ?>
</main>

<footer>
    <div class="footer-menus">
        <div>
            <h3>Síguenos</h3>
            <?php
                wp_nav_menu(array(
                    'theme_location' => 'menu_redes',
                    'container' => false
                ));
            ?>
        </div>

        <div>
            <h3>Legal</h3>
            <?php
                wp_nav_menu(array(
                    'theme_location' => 'menu_legal',
                    'container' => false
                ));
            ?>
        </div>
    </div>

    <p>© <?php echo date('Y'); ?> Noticias Ángel. Todos los derechos reservados.</p>

    <?php wp_footer(); ?>
</footer>

</body>
</html>
