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

    <section id="sec-resultado">

        <?php
            $s = get_search_query();
            $args = array(
                's' => $s,
                'posts_per_page' => -1,
                // 'orderby' => 'comment_count',
                'post_status' => 'published',
                // 'category_name' => 'health',
                'post_type' => array( 'post', 'page', 'receitas')
            );
            // The WP Query
            $the_query = new WP_Query( $args );

            if ( $the_query->have_posts() ) {
                // _e("<p id='p-resultado'>RESULTADO: " . get_query_var('s') . "</p>");
                while ( $the_query->have_posts() ) {
                $the_query->the_post();
            ?>
                                
        <a href="<?php the_permalink(); ?>">
            <p>
                <?php the_title(); ?>
            </p>
            <?php if (has_post_thumbnail()) : $urlCapa = get_the_post_thumbnail_url(); ?>
                <?php echo '<div class="capaConteudoBusca" style="background: url(' . $urlCapa . '); background-size: cover;"></div>'; ?>
            <?php endif; ?>
        </a>
                                
        <?php
            }
        } else {
        ?>

        <div>
            <h2 class="alert-emojiTXT">
                Ops!
                <br>
                Não encontramos nada com o termo: <?php echo get_search_query(); ?>!
            </h2>
            <h1 class="alert-emojiErro">
                :-/
            </h1>
        </div>

        <?php } ?>

    </section>


<!-- STYLE IN FILE -->
<style>
    section.sec-busca {
        padding-top: 60px;
    }
    section#sec-resultado {
        margin: 20px;
        display: grid;
        justify-content: center;
    }
    .capaConteudoBusca {
        height: 250px;
    }
    h1#h1-resultado-busca {
        margin: 60px 20px -60px 20px;
    }
    h1.alert-emojiErro {
        margin-bottom: 100px;
        padding: 0px;
    }
    h2.alert-emojiTXT {
        font-size: 40px;
    }
</style>


<?php get_footer(); ?>