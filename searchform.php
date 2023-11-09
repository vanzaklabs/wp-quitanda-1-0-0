<?php
    /*
        Template Name: Buscar - Formulário
    */
?>

<!-- SEARCHFORM.PHP -->

<section id="busca">

    <form action="<?php echo home_url(); ?>/" method="get">

        <div id="inputsFormBusca">
            <h2 id="h2FormBusca">Buscar por:</h2>
            <input
            list="s"
            type="text"
            name="s"
            id="inputBuscar"
            maxlength="50"
            value="<?php the_search_query(); ?>"
            autofocus required />
            <datalist id="s">
                <option value="Encomendas">
                <option value="Quitanda Empresas">
                <option value="Quitanda Escolas">
                <option value="Trabalhe Conosco">
                <option value="Contato">
            </datalist>

            <input id="icon-busca" type="image" alt="Buscar" src="<?php bloginfo( 'template_url' ); ?>/images/icon-busca.svg" />
        </div>

        <!-- <input type="hidden" value="receitas" name="post_type" /> -->

    </form>

</section>

<style>
    input#inputBuscar {
        height: 50px;
        border: 0px;
        padding-left: 10px;
    }
    input#inputBuscar:focus {
        border: 0px;
    }
    input[type="text"] {
        width: 300px;
        -webkit-transition: width .35s ease-in-out;
        transition: width .35s ease-in-out;
    }
    input[type="text"]:focus {
        width: 600px;
    }
    div#inputsFormBusca {
        display: flex;
        align-items: center;
    }
    input#icon-busca {
        height: 40px;
        margin: 5px 5px 5px 10px;
    }
    h2#h2FormBusca {
        font-size: 40px;
        margin: 0px 10px 0px 10px;
    }
    p#p-resultado {
        font-family: 'Agipo Mono Regular';
    }
</style>