<?php
    /*
        Template Name: Buscar - Formulário
    */
?>
<!-- SEARCHFORM.PHP -->

<section id="busca">

    <form action="<?php echo home_url(); ?>/" method="get">

        <label for="search">Buscar</label>
        
        <input type="text" name="s" id="search" value="<?php the_search_query(); ?>" />
        <input type="image" alt="Search" src="<?php bloginfo( 'template_url' ); ?>/images/search.png" />

        <input type="hidden" value="receitas" name="post_type" />

    </form>

</section>
