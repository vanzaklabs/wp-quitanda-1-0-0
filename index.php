<?php get_header(); ?>

<!-- INDEX.PHP -->

<main class="conteudo-main">
    <section class="conteudo conteudo-wpTheLoop">

        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

                <article>
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


<?php get_footer(); ?>