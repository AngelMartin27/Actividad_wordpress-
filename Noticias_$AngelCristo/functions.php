<?php

function noticias_angel_registrar_menus() {
    register_nav_menus(array(
        'menu_principal' => 'Menú Principal',
        'menu_redes'     => 'Menú Redes Sociales',
        'menu_legal'     => 'Menú Legal'
    ));
}
add_action('init', 'noticias_angel_registrar_menus');

function noticias_angel_estilos() {
    wp_enqueue_style('noticias_angel-style', get_stylesheet_uri());
}
add_action('wp_enqueue_scripts', 'noticias_angel_estilos');
