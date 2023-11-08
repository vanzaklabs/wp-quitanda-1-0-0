<?php
    /*
        Template Name: Buscar - Formulário
    */
?>

<!-- SEARCHFORM.PHP -->

<section id="busca">

    <form action="<?php echo home_url(); ?>/" method="get">

        <label for="search">Buscar</label>
        
        <input list="s" type="text" name="s" id="search" value="<?php the_search_query(); ?>" autofocus required />
        <datalist id="s">
            <option value="Encomendas">
            <option value="Quitanda Empresas">
            <option value="Quitanda Escolas">
            <option value="Trabalhe Conosco">
            <option value="Contato">
        </datalist>
        <input type="image" alt="Search" src="<?php bloginfo( 'template_url' ); ?>/images/search.png" />

        <!-- <input type="hidden" value="receitas" name="post_type" /> -->

    </form>

</section>

<style>
    input#search {
        height: 150px;
        width: 510px;
        color: white;
        background-color: transparent;
        border: 0px;
    }
    input#search:focus {
        border: 0px;
    }
</style>