<!-- announcement-bar.php -->

<div id="divBuscador">
    <div class="annBarBuscador">
        <button id="btnFechaBuscador">
            <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-x" width="24" height="24" viewBox="0 0 24 24" stroke-width="1.25" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                <path d="M18 6l-12 12"></path>
                <path d="M6 6l12 12"></path>
            </svg>
        </button>
    </div>
    <div id="searchForm">
        <?php get_search_form(); ?>
    </div>
</div>

<div class="announcement-bar bg-02 d-flex justify-center align-center" id="announcement-bar">
    <div class="container">
        <div class="d-flex justify-announ align-center">

            <p
            id="p-anbar"
            class="text-black">
            RUA MATEUS GROU, 159 - PINHEIROS</p>
            <p
            id="p-anbar"
            class="text-black d-none-mobile">
            SEGUNDA A SEXTA 7H - 22H • SÁBADO E DOMINGO 7H - 21H • FERIADOS 7H - 21h</p>

                <div class="d-flex align-center" style="gap: 20px;">
                    <button id="btnAbreBuscador">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="20" viewBox="0 0 21 20" fill="none">
                            <path d="M19.7309 18.3109L16.0209 14.6309C17.461 12.8353 18.1584 10.5562 17.9697 8.2622C17.781 5.9682 16.7206 3.83368 15.0064 2.29754C13.2923 0.761407 11.0547 -0.0595894 8.75382 0.00337096C6.45294 0.0663314 4.26362 1.00846 2.63604 2.63604C1.00846 4.26362 0.0663314 6.45294 0.00337096 8.75382C-0.0595894 11.0547 0.761407 13.2923 2.29754 15.0064C3.83368 16.7206 5.9682 17.781 8.2622 17.9697C10.5562 18.1584 12.8353 17.461 14.6309 16.0209L18.3109 19.7009C18.4039 19.7946 18.5145 19.869 18.6363 19.9198C18.7582 19.9706 18.8889 19.9967 19.0209 19.9967C19.1529 19.9967 19.2836 19.9706 19.4055 19.9198C19.5273 19.869 19.6379 19.7946 19.7309 19.7009C19.9111 19.5144 20.0119 19.2652 20.0119 19.0059C20.0119 18.7466 19.9111 18.4974 19.7309 18.3109ZM9.0209 16.0209C7.63643 16.0209 6.28305 15.6104 5.13191 14.8412C3.98076 14.072 3.08356 12.9788 2.55374 11.6997C2.02393 10.4206 1.88531 9.01314 2.1554 7.65527C2.4255 6.2974 3.09219 5.05012 4.07115 4.07115C5.05012 3.09219 6.2974 2.4255 7.65527 2.1554C9.01314 1.88531 10.4206 2.02393 11.6997 2.55374C12.9788 3.08356 14.072 3.98076 14.8412 5.13191C15.6104 6.28305 16.0209 7.63643 16.0209 9.0209C16.0209 10.8774 15.2834 12.6579 13.9706 13.9706C12.6579 15.2834 10.8774 16.0209 9.0209 16.0209Z" fill="black"/>
                        </svg>
                    </button>
                    <p id="p-anbar" class="text-black"><a href="" class="text-black d-none-mobile">CONTATO</a></p>
                </div>
        </div>
    </div>
</div>

<style>
    .exibirDivBuscador{
        display: block;
    }
    .ocultarDivBuscador{
        display: none;
    }
    #divBuscador {
        background-color: var(--bg-02-buscador);
        position: fixed;
        z-index: 99999999;
        height: 100vh;
        width: 100%;
    }
    .annBarBuscador {
        width: 100%;
        display: grid;
    }
    svg.icon.icon-tabler.icon-tabler-x {
        height: 40px;
        width: 40px;
    }
    div#searchForm {
        display: grid;
        justify-content: center;
        align-content: center;
        height: -webkit-fill-available;
        -webkit-transition: width .35s ease-in-out;
        transition: width .35s ease-in-out;
    }
</style>

<script src="<?php echo get_template_directory_uri() ?>/js/buscar.js"></script>