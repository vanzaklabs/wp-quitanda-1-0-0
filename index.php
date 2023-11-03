<?php get_header(); ?>

<!-- INDEX.PHP -->

<main class="conteudo-main">
    <section class="conteudo conteudo-wpTheLoop">

        <h1>
            <?php bloginfo('name');?>
                <span class="subtitulo">
                    <?php wp_title(''); ?>
                </span>
        </h1>
        
        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

                <article class="container">
                    <?php if ( has_post_thumbnail() ) { ?>
                        <div id="capa-artigo">
                        <br><br><br><br><br><br>
                        </div>
                    <?php } ?>
                    <h2>
                        <a
                            href="<?php the_permalink(); ?>"
                            title="<?php the_title_attribute(); ?>">
                            <?php the_title(); ?>
                        </a>
                    </h2>
                    Por: <?php the_author(); ?>
                    <?php the_excerpt(); ?>
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
    #capa-artigo{
        background-image: url("<?php the_post_thumbnail_url( null, 'medium' ); ?>");
    }
</style>
<?php get_footer(); ?>