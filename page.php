<?php get_header(); ?>

<!-- PAGE.PHP -->
    <main id="page-main-content">
        <section id="sec-wpTheLoop">
            <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                    <article id="artigo-wpTheLoop">
                        <header>
                            <h1><?php the_title(); ?></h1>
                            By: <?php the_author(); ?>
                        </header>
                        <?php the_content(); ?>
                    </article>
                <?php endwhile; else : ?>
                    <article>
                        <p>:-[ Ué... Não tem nada aqui! </p>
                    </article>
            <?php endif; ?>
        </section>
    </main>

<style>

section#sec-wpTheLoop {
    min-height: 60vh;
    padding-top: 130px;
}

</style>

<?php get_footer(); ?>