<?php get_header(); ?>

<!-- PAGE.PHP -->


    <?php if (has_post_thumbnail()) : $url = get_the_post_thumbnail_url(); ?>
        <div id="capa">
            <?php
            echo '
            <div class="capaConteudo"
            style="background: url(' . $url . ');
            background-size: cover;
            background-attachment: fixed;">
            '; ?>
        </div>
        <div id="capaTitulo">
            <h1><?php the_title(); ?></h1>
        </div>
        <?php echo '</div>' ?>

    <?php else : ?>
        <?php echo '<h1>' . the_title() . '</h1>'; ?>
    <?php endif; ?>


<main
id="page-main-content"
class="d-flex justify-center align-center flex-column p-section bg-03 ">
    <section id="sec-wpTheLoop" class="container">
        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

                <article id="artigo-wpTheLoop">

                    <div class="text-p">
                        <?php the_content(); ?>
                    </div>
                </article>

            <?php endwhile;
        else : ?>
            <article>
                <p>:-[ Ué... Não tem nada aqui! </p>
            </article>

        <?php endif; ?>
    </section>
</main>

<style>
    div#capa {
        display: grid;
        padding-top: 130px;
    }
    .capaConteudo {
        height: 600px;
        /* display: flex; */
    }
    section#sec-wpTheLoop {
        min-height: 60vh;
        padding-top: 130px;
    }

    h2 {
        margin-bottom: 25px;
    }

    /* p {
        margin-bottom: 50px;
    } */
</style>

<?php get_footer(); ?>