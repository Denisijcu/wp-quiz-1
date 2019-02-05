<?php

function bsimple_scripts() {

    wp_enqueue_style( 'bsimple-style', get_stylesheet_uri(),null,microtime() );
    wp_enqueue_style( 'bsimple-materialize', 'https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css' );
    wp_enqueue_script('bsimple-materializes', 'https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js');
}

add_action( 'wp_enqueue_scripts', 'bsimple_scripts' );
?>

