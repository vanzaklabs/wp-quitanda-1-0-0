<?php
$posts_rel = array(
    'post_type' => 'receitas',
    'posts_per_page' => 3,
        // 'posts_per_page' => -1,
    'post_status' => 'publish',
        // 'post__not_in' => array( get_the_ID() ),
    'orderby' => 'rand',
);

$post_relacionado = new WP_Query( $posts_rel );

if( $post_relacionado->have_posts() ) : ?>

    <h1>MAIS RECEITAS</h1>

    <div id="box-posts">             
        <ul id="lista-posts">
            <?php while( $post_relacionado->have_posts() ): $post_relacionado->the_post(); ?>
                <li id="item-lista-post">
                    <img src="<?php echo $url_post_rel; ?>" alt="">
                    <?php the_title(); ?>
                </li>
            <?php endwhile; ?>
        </ul>
    </div>

<?php
endif;
wp_reset_postdata();
?>