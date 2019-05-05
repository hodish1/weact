<?php 

//Loading css and js
function add_theme_scripts() {
    //Assets
    wp_enqueue_style( 'index', get_template_directory_uri() . '/assets/css/index.css', array(), '1.1', 'all');
    wp_enqueue_script( 'script', get_template_directory_uri() . '/assets/js/main.js', array (), 1.1, true);
    wp_enqueue_script( 'header', get_template_directory_uri() . '/assets/js/header.js', array (), 1.1, true);

    //Api
    wp_enqueue_script( 'articles', get_template_directory_uri() . '/jsapp/articles.js', array (), 1.1, true);
  }
add_action( 'wp_enqueue_scripts', 'add_theme_scripts' );