<?php get_header(); ?>

<!-- PAGE.PHP -->
    <main id="page-main-content" class="d-flex justify-center align-center flex-column p-section bg-03 ">
        <section id="sec-wpTheLoop" class="container">
            <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

                    <article id="artigo-wpTheLoop">
                        <h1><?php the_title(); ?></h1>
                        <div class="text-p">
                        <?php the_content(); ?>
                        </div>
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
h2 {
    margin-bottom: 25px;
}
p {
    margin-bottom: 50px;
}
</style>

<?php get_footer(); ?>