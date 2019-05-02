<?php

//Remove Admin Bar
add_action('after_setup_theme', 'remove_admin_bar');
function remove_admin_bar() {
    show_admin_bar(false);
}

//Image for post
add_theme_support( 'post-thumbnails' ); 