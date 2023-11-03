<?php
    /*
    Template Name: Blog Receitas
    */
?>

<?php get_header(); ?>

<!-- RECEITAS -->

<main>
    
    <section id="conteudo-receitas">
        <div>
            <?php
                $lista_posts = wp_get_post_categories( $post_id,
                        array(
                        'fields'    => 'receitas',
                        'order'     => 'DESC'
                        )
                    );
                if ( $lista_posts ) {
                    foreach ( $lista_posts as $post_receita ) {
                        echo esc_html( $post_receita ) . '<br />';
                    }
                } ?>
        </div>
    </section>

</main>

<style>
    #conteudo-receitas {
        height: 70vh;
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
        padding-top: 50px;
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