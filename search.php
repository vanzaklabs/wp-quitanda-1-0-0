<?php
    /*
        Template Name: Buscar - Resultados
    */
?>
<!-- SEARCH.PHP -->

<?php get_header(); ?>
       
    <section class="sec-busca">
        
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
                echo "<ol>";
                // _e("<p id='p-resultado'>RESULTADO: " . get_query_var('s') . "</p>");
                while ( $the_query->have_posts() ) {
                $the_query->the_post();
                echo "</ol>";
            ?>

                <li id="listaBusca">                    
                    <a class="linkResultado" href="<?php the_permalink(); ?>">
                        <h2 id="parBusca">
                            <?php the_title(); ?>
                        </h2>
                        <?php if (has_post_thumbnail()) : $urlCapa = get_the_post_thumbnail_url(); ?>
                            <?php echo '<div id="capaConteudoBusca" class="capaConteudoBusca" style="background: url(' . $urlCapa . '); background-size: cover;"></div>'; ?>
                        <?php endif; ?>
                        <div id="the_excerpt">
                            <?php the_excerpt(); ?>
                        </div>
                    </a>
                </li>
                                
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
        padding-top: 100px;
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
    @media (max-width: 600px){
        h1#h1-resultado-busca {
            text-wrap: pretty;
            width: fit-content;
    }
    }
    h1.alert-emojiErro {
        margin-bottom: 100px;
        padding: 0px;
    }
    h2.alert-emojiTXT {
        font-size: 40px;
    }

    #listaBusca {
        /* list-style: decimal-leading-zero; */
        list-style: none;
        padding: 20px;
        margin-bottom: 50px;
    }
    li#listaBusca {
        max-width: 850px;
        min-height: 100px;
        border-block-end: 5px solid;
    }
    li#listaBusca:last-child {
        border-block-end: 0px solid;
        margin-bottom: 0px;
    }
    a.linkResultado {
        color: var(--bg-01);
    }
    h2#parBusca {
        font-size: 40px;
    }
    div#the_excerpt {
        margin-bottom: 50px;
    }
    div#the_excerpt p {
        font-size: 20px;
    }
</style>


<?php get_footer(); ?>