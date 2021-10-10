<?php

add_action( 'wp_ajax_nopriv_filter', 'filter_ajax');
add_action( 'wp_ajax_filter' , 'filter_ajax');

function filter_ajax() {
    $category = $_POST['category'];

    generate_publication_posts($category);

    die();
}

?>