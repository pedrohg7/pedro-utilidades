<?php

/*
Plugin Name: Pedro Utilidades
Description: Funcionalidades personalizadas para el blog SneakersHub
Version: 1.1.0
Author: Pedro Manuel Herrera García
License: GPL-2.0-or-later
Text Domain: pedro-utilidades
*/

// Impedir el acceso directo al archivo.
if (!defined('ABSPATH')) {
    exit;
}

// Añadir una caja al final de las entradas.
function sneakershub_caja_contacto($contenido) {

    // Comprobar que estamos viendo una entrada individual.
    if (is_singular('post') && in_the_loop() && is_main_query()) {

        // Buscar la página Contacto.
        $contacto = get_page_by_path('contacto');

        if ($contacto) {

            // Obtener la URL de la página Contacto.
            $url = get_permalink($contacto->ID);

            // Crear la caja con el enlace.
            $caja = '<div class="caja-contacto">';
            $caja .= '<p>¿Te ha gustado? Escríbeme desde ';
            $caja .= '<a href="' . esc_url($url) . '">Contacto</a>.</p>';
            $caja .= '</div>';

            // Añadir la caja al final del contenido.
            $contenido .= $caja;
        }
    }

    return $contenido;
}

add_filter('the_content', 'sneakershub_caja_contacto');

// Shortcode que muestra el año actual.
function sneakershub_anio() {

    return wp_date('Y');
}

add_shortcode('anio', 'sneakershub_anio');

// Eliminar la etiqueta que muestra la versión de WordPress.
remove_action('wp_head', 'wp_generator');

// Hacer que el logotipo enlace a la portada del blog.
function sneakershub_login_url() {

    return home_url('/');
}

add_filter('login_headerurl', 'sneakershub_login_url');

// Personalizar el texto del enlace del logotipo.
function sneakershub_login_texto() {

    return 'SneakersHub - Ir a la portada';
}

add_filter('login_headertext', 'sneakershub_login_texto');

// Mostrar un aviso encima del formulario de acceso.
function sneakershub_login_aviso($mensaje) {

    $aviso = '<p class="message">';
    $aviso .= esc_html('Acceso restringido al equipo de SneakersHub');
    $aviso .= '</p>';

    return $aviso . $mensaje;
}

add_filter('login_message', 'sneakershub_login_aviso');
