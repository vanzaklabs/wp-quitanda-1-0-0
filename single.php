<?php get_header(); ?>

<main>
    <section>
        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                <article>
                    <header>
                        <h2><?php the_title(); ?></h2>
                        By: <?php the_author(); ?>
                    </header>
                    <?php the_content(); ?>
                </article>
            <?php endwhile; else : ?>
            <article>
                <p>Não há conteúdo para ser exibido aqui!</p>
            </article>
        <?php endif; ?>
    </section>
</main>

<?php get_footer(); ?>