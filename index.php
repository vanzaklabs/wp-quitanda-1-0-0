<?php get_header(); ?>

<!-- INDEX.PHP -->

<main class="conteudo-main">

    <h1 id="titulo-blog">
        <?php bloginfo('name');?>
            <span class="subtitulo fonte-serifada">
                <?php wp_title(''); ?>
            </span>
    </h1>

    <section class="conteudo conteudo-wpTheLoop">
    
        <?php $query_args = array(
                'post_type' => 'receitas',
                'post_status' => 'publish',
                'order' => 'DESC',
                'orderby' => 'title',
                'posts_per_page' => '20',
            );

            // The Query
            $the_query = new WP_Query( $query_args ); 
        ?>

        <?php if ($the_query->have_posts()) : while ($the_query->have_posts()) : $the_query->the_post(); ?>
            
            <article id="card-artigo" class="container">
                
                <?php if ( has_post_thumbnail() ) { ?>

                    <a
                        id="conteudo-link"
                        href="<?php the_permalink(); ?>"
                        title="<?php the_title_attribute(); ?>">

                        <div id="capa-gradiente">
                            
                            <div class="conteudo-txt">
                                <p class="subtitulo fonte-serifada">
                                        <?php the_title(); ?>
                                </p>
                            </div>

                            <div id="capa-artigo" style="background-image: url('<?php the_post_thumbnail_url( null, 'medium' ); ?>');">  
                            </div> 

                        </div>
                    </a>

                <?php } ?>
                
            </article>

            <?php endwhile; ?>

                <div class="nav-previous alignleft">
                    <?php next_posts_link( 'Older posts' ); ?>
                </div>
                <div class="nav-next alignright">
                    <?php previous_posts_link( 'Newer posts' ); ?>
                </div>

            <?php else : ?>
                <article>
                    <p>Não há conteúdo para ser exibido aqui!</p>
                </article>
            <?php endif; ?>

    </section>

</main>

<style>
    main.conteudo-main {
        min-height: 70vh;
        padding-top: 170px;
        padding-bottom: 30px;
        background-color: var(--bg-03);
    }
    #titulo-blog{     
        margin: 10px 0px 0px 0px;
    }
    section.conteudo.conteudo-wpTheLoop {
        display: flex;
        flex-wrap: wrap;
        padding: 20px;
    }
    /* #card-artigo:nth-child(odd) {
        margin-right: 20px;
    } */
    span.subtitulo {
        font-size: 70%;
        display: block;
        line-height: 55px;
    }
    article.container {
        margin: auto;
    }
    article#card-artigo {
        width: 50%;
        margin-bottom: 50px;
        width: -webkit-fill-available;
    }
    #capa-gradiente{
        background: linear-gradient(180deg, rgba(0,0,0,0) 0%, rgba(0,0,0,0.70) 100%);
    }
    #capa-artigo {
        display: flex;
        background-position: center;
        background-size: cover;
        width: 100%;
        height: 500px;
        mix-blend-mode: multiply;
    }
    a#conteudo-link {
        color: white;
        font-size: 50px;
    }
    .conteudo-txt {
        margin: 80px;
        /* width: 40%; */
        padding-top: 310px;
        color: white;
        position: absolute;
        z-index: 1;
    }
    p.subtitulo.fonte-serifada {
        font-size: 40px;
    }

    @media (max-width: 400px){
        main.conteudo-main{
            padding-bottom: 0px;
            /* margin-bottom: -50px; */
        }
        #titulo-blog {
            margin: 0px 0px -20px 0px;
        }
        article#card-artigo {
            width: 100%;
            margin-bottom: 0px;
        }
        #card-artigo:nth-child(odd) {
            margin-right: 0px;
        }
        section.conteudo.conteudo-wpTheLoop {
            display: contents;
        }
        span.subtitulo {
            line-height: 30px;
        }
        .conteudo-txt {
            margin: 20px;
            width: 90%;
        }
    }

</style>

<?php get_footer(); ?>