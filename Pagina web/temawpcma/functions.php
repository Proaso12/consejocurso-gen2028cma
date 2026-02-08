<?php
function mi_tema_enqueue_estilos() {
    wp_enqueue_style('mi-tema-style', get_stylesheet_uri());

    wp_enqueue_style(
        'header-css',
        get_template_directory_uri() . '/assets/header.css',
        array(), // Dependencias
        filemtime(get_template_directory() . '/assets/header.css') // Control de caché
    );

    wp_enqueue_style(
        'google-fonts',
        'https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100..900;1,100..900&display=swap',
        false
    );
}
add_action('wp_enqueue_scripts', 'mi_tema_enqueue_estilos');

function mi_tema_setup() {
    add_theme_support('title-tag');

    register_nav_menus(array(
        'menu-superior' => __('Menú Superior', 'mi-tema'),
        'menu-inferior' => __('Menú Inferior', 'mi-tema'),
    ));
}
add_action('after_setup_theme', 'mi_tema_setup');

function shortcode_presidente_individual($atts) {
    global $wpdb;
    $tabla = $wpdb->prefix . 'presidentescurso';

    // Leer el atributo del shortcode, por ejemplo columna="presidente7A"
    $atts = shortcode_atts(['columna' => ''], $atts);

    // Sanitizar el nombre de la columna (muy importante por seguridad)
    $columna = sanitize_key($atts['columna']);

    // Si no se especificó columna, no hacer nada
    if (empty($columna)) {
        return 'Columna no especificada';
    }

    // Obtener el valor desde la base de datos
    $valor = $wpdb->get_var("SELECT `$columna` FROM $tabla LIMIT 1");

    // Si no existe el valor, mostrar texto por defecto
    return esc_html($valor ?: 'No registrado');
}
add_shortcode('presidente', 'shortcode_presidente_individual');