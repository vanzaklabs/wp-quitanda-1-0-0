<?php get_header(); ?>

<!-- SINGLE.PHP -->

<?php if (has_post_thumbnail()) : $url = get_the_post_thumbnail_url(); ?>

    <div id="capaTituloH1">
        <p class="subtitulo fonte-serifada">
            <?php the_title(); ?>
        </p>
    </div>
    
    <div id="capa">
        <?php echo ' <div class="capaConteudo"
        style="background: url(' . $url . ');
        background-size: cover;
        background-attachment: fixed;
        background-position: center;"> '; ?>
            <!-- <div id="capaTitulo">
                
            </div> -->
        <?php echo '</div>' ?>
    </div>

<?php endif; ?>

<main
    id="page-main-content"
    class="d-flex justify-center align-center flex-column p-section bg-03">

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

<section id="conteudo-relacionado" class="d-flex justify-center align-center flex-column p-section bg-03">

        <!-- <?php include 'post-relacionado-receitas.php' ?> -->

</section>

<style>

    main#page-main-content {
        padding-top: 0px;
    }

    div#capa {
        display: grid;
        padding-top: 130px;
        background: linear-gradient(180deg, rgba(0,0,0,0) 0%, rgba(0,0,0,0.70) 100%);
    }

    .capaConteudo {
        height: 600px;
        mix-blend-mode: multiply;
    }

    div#capaTituloH1 {
        display: grid;
        height: 75vh;
        margin: 0px 0px 0px 3%;
        position: absolute;
        z-index: 1;
        align-items: end;
    }

    section#sec-wpTheLoop {
        min-height: 60vh;
        padding-top: 50px;
    }
    h1#h1Titulo {
        color: white;
        padding-bottom: 0px;
    }
    
    h2, div.text-p p {
        margin-bottom: 25px;
    }

    .alignleft {
        float: left;
        margin: 0px 20px 20px 0px;
    }

    p.subtitulo.fonte-serifada {
        color: var(--text-color-01);
        font-size: 60px;
        margin: 20px;
    }

    /* POSTS RELACIONADOS */
    section#conteudo-relacionado {
        margin-top: -85px;
        background-color: var(--bg-03);
    }

    /* MEDIA */
    @media (max-width: 400px){

        .capaConteudo {
            height: 90vh;
        }

        div#capa {
            height: 90vh;
            padding-top: 0px;
        }

        div#capaTituloH1 {
            position: absolute;
            z-index: 1;
            width: 100%;
            height: 90vh;
            display: flex;
            align-items: flex-end;
        }

        main#page-main-content {
            padding-top: 0rem;
        }

    }

</style>

<?php get_footer(); ?>