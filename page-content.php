<?php
/*
Template Name: Content
*/
?>

<?php get_header(); ?>
<!-- CONTENT -->
        

<main
id="page-main-content"
class="d-flex justify-center align-center flex-column p-section bg-03 ">
    <section id="sec-wpTheLoop" class="container">
		<div id="capaTituloH1">
			<h1 id="h1Titulo"><?php the_title(); ?></h1>
		</div>
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
        background: linear-gradient(180deg, rgba(0,0,0,0) 0%, rgba(0,0,0,0.70) 100%);
    }
    .capaConteudo {
        height: 600px;
        mix-blend-mode: multiply;
    }
    div#capaTitulo {
        max-width: 90%;
        display: flex;
        margin: auto;
        text-align: -webkit-center;
        height: 600px;
        align-items: flex-end;
    }
    div#capaTituloH1 {
        position: absolute;
        z-index: 1;
        width: 100%;
        margin-top: 450px;
    }
    section#sec-wpTheLoop {
        min-height: 60vh;
        padding-top: 130px;
    }

    h1#h1Titulo {
        color: white;
        padding-bottom: 0px;
    }
    h2, div.text-p p {
        margin-bottom: 25px;
    }

</style>

<?php get_footer(); ?>