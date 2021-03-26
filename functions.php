<?php

function estsb_setup(){
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
}

add_action('after_setup_theme', 'estsb_setup');

function estsb_register_asset(){
    wp_register_style( 'bootstrap', 'https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css' );
    wp_register_style( 'font-awesome', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css' );
    wp_register_script('bootstrap', 'https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js', ['popper', 'jquery'], []);
    wp_register_script('popper', 'https://cdn.jsdelivr.net/npm/@popperjs/core@2.6.0/dist/umd/popper.min.js', [], null, true);
    wp_register_script('jquery', 'https://code.jquery.com/jquery-3.6.0.min.js', [], false, true);
    wp_enqueue_style( 'bootstrap' );
    wp_enqueue_style( 'font-awesome' );
    wp_enqueue_script( 'bootstrap' );
}

add_action( 'wp_enqueue_scripts', 'estsb_register_asset' );

function estsb_title_separator(){
    return '|';
}

add_filter( 'document_title_separator', 'estsb_title_separator' );

function estsb_document_title_parts($title){
    return $title;
}

add_filter('document_title_parts', 'estsb_document_title_parts');

//remove <p> from posts
function remove_p_from_posts($content){
    remove_filter( 'the_content', 'wpautop' );
    return $content;
}

add_filter( 'the_content', 'remove_p_from_posts', 0);