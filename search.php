<?php
    /*
        Template Name: Buscar - Resultados
    */
?>
<!-- SEARCH.PHP -->

<?php get_header(); ?>
       
    <section class="sec-busca">
        <div>
            <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-search" width="40" height="40" viewBox="0 0 24 24" stroke-width="1.25" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                <path d="M10 10m-7 0a7 7 0 1 0 14 0a7 7 0 1 0 -14 0"></path>
                <path d="M21 21l-6 -6"></path>
            </svg>
        </div>
        <h1 id="h1-resultado-busca">
            Busca por: <?php echo get_search_query(); ?>
        </h1>
    </section>

    <section>

        <?php
            $s=get_search_query();
            $args = array(
                            's' =>$s,
                            'post_type' => 'receitas', 'post', 'pages'
                        );
                        // The Query
            $the_query = new WP_Query( $args );
            if ( $the_query->have_posts() ) {
                    _e("<p style='font-weight:bold;color:#000'>RESULTADO PARA: " . get_query_var('s')."</p>");
                    while ( $the_query->have_posts() ) {
                    $the_query->the_post();
                            ?>
                                <li>
                                    <a href="<?php the_permalink(); ?>">
                                        <?php the_title(); ?>
                                    </a>
                                </li>
                            <?php
                    }
                }else{
            ?>

        <h2 style='font-weight:bold;color:#000'>NADA ENCONTRADO</h2>
        <div class="alert alert-info">
        <p>Sorry, but nothing matched your search criteria. Please try again with some different keywords.</p>
        </div>

        <?php } ?>

    </section>


<!-- STYLE IN FILE -->
<style>
</style>


<?php get_footer(); ?>