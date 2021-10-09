<?php

add_action( 'wp_ajax_nopriv_filter', 'filter_ajax');
add_action( 'wp_ajax_filter' , 'filter_ajax');

function filter_ajax() {
    $category = $_POST['category'];

    $publications_posts_query = array(
        'number-posts' => -1,
        'post_type' => 'publication'
    );

    if(isset($category)) {
        $publications_posts_query['tax_query'] = array(
            array(
                'taxonomy' => 'publications_category',
                'field' => 'term_id',
                'terms' => $category
            )
        );
    }

    $publications = new WP_Query($publications_posts_query);
// Doco has a if in here.
    while ($publications->have_posts()) :
        $publications->the_post(); ?>
        <div class="uk-card uk-card-default">
            <div class="uk-card-header">
                <div class="uk-card-title">
                    <a href=<?php the_permalink(); ?>>
                        <?php the_title(); ?></a>
                </div>
            </div>
            <div class="uk-card-body">
                <?php the_field('authors') ?>
            </div>
            <div class="uk-card-footer">
                <?php
                $post_categories = get_field('category');
                if ($post_categories) :
                    foreach ($post_categories as $post_category) : ?>
                        <span class="uk-label"><?php echo $post_category->name ?></span>
                <?php endforeach;
                endif; ?>
            </div>
        </div>
    <?php endwhile; 
    wp_reset_postdata();
    die();
}

?>