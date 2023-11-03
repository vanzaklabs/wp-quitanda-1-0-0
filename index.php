<?php get_header(); ?>

<!-- INDEX.PHP -->

<main class="conteudo-main">

    <h1>
        <?php bloginfo('name');?>
            <span class="subtitulo">
                <?php wp_title(''); ?>
            </span>
    </h1>

    <section class="conteudo conteudo-wpTheLoop">
        
        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

            <article id="card-artigo" class="container">

                <?php if ( has_post_thumbnail() ) { ?>

                    <div id="capa-gradiente">
                        <div class="conteudo-txt">
                                <h2>
                                    <a
                                        id="conteudo-link"
                                        href="<?php the_permalink(); ?>"
                                        title="<?php the_title_attribute(); ?>">
                                        <?php the_title(); ?>
                                    </a>
                                </h2>
                                <?php the_excerpt(); ?>
                        </div>
                    <div id="capa-artigo" style="background-image: url('<?php the_post_thumbnail_url( null, 'medium' ); ?>');">
                   
                        
                    </div> 
                    </div>

                <?php } ?>
                
            </article>

            <?php endwhile; else : ?>
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
    span.subtitulo {
        font-family: italic;
        font-weight: lighter;
        font-size: 70%;
        display: block;
        line-height: 25px;
    }
    article.container {
        margin: auto;
    }
    article#card-artigo {
        margin-bottom: 50px;
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
        width: 80%;
        padding-top: 250px;
        color: white;
        position: absolute;
        z-index: 1;
    }
</style>
<?php get_footer(); ?>