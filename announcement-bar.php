<!-- announcement-bar.php -->

<div id="divBuscador" class="ocultarDivBuscador">
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
                    
                    <ul>
                        <li>
                            <div class="text-black social-nav">
                                <a href="mailto:gerente.pinheiros@quitanda.com">
                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M3 7C3 6.46957 3.21071 5.96086 3.58579 5.58579C3.96086 5.21071 4.46957 5 5 5H19C19.5304 5 20.0391 5.21071 20.4142 5.58579C20.7893 5.96086 21 6.46957 21 7V17C21 17.5304 20.7893 18.0391 20.4142 18.4142C20.0391 18.7893 19.5304 19 19 19H5C4.46957 19 3.96086 18.7893 3.58579 18.4142C3.21071 18.0391 3 17.5304 3 17V7Z"
                                            stroke="black" stroke-width="1.25" stroke-linecap="round"
                                            stroke-linejoin="round" />
                                        <path d="M3 7L12 13L21 7" stroke="black" stroke-width="1.25"
                                            stroke-linecap="round" stroke-linejoin="round" />
                                    </svg>
                                </a>
                                
                                <a href="https://www.instagram.com/quitandapinheiros/">
                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M4 8C4 6.93913 4.42143 5.92172 5.17157 5.17157C5.92172 4.42143 6.93913 4 8 4H16C17.0609 4 18.0783 4.42143 18.8284 5.17157C19.5786 5.92172 20 6.93913 20 8V16C20 17.0609 19.5786 18.0783 18.8284 18.8284C18.0783 19.5786 17.0609 20 16 20H8C6.93913 20 5.92172 19.5786 5.17157 18.8284C4.42143 18.0783 4 17.0609 4 16V8Z"
                                            stroke="black" stroke-width="1.25" stroke-linecap="round"
                                            stroke-linejoin="round" />
                                        <path
                                            d="M9 12C9 12.7956 9.31607 13.5587 9.87868 14.1213C10.4413 14.6839 11.2044 15 12 15C12.7956 15 13.5587 14.6839 14.1213 14.1213C14.6839 13.5587 15 12.7956 15 12C15 11.2044 14.6839 10.4413 14.1213 9.87868C13.5587 9.31607 12.7956 9 12 9C11.2044 9 10.4413 9.31607 9.87868 9.87868C9.31607 10.4413 9 11.2044 9 12Z"
                                            stroke="black" stroke-width="1.25" stroke-linecap="round"
                                            stroke-linejoin="round" />
                                        <path d="M16.5 7.5V7.51" stroke="black" stroke-width="1.25"
                                            stroke-linecap="round" stroke-linejoin="round" />
                                    </svg>
                                </a>
                            </div>
                        </li>
                    </ul>


                    <button id="btnAbreBuscador">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="20" viewBox="0 0 21 20" fill="none">
                            <path d="M19.7309 18.3109L16.0209 14.6309C17.461 12.8353 18.1584 10.5562 17.9697 8.2622C17.781 5.9682 16.7206 3.83368 15.0064 2.29754C13.2923 0.761407 11.0547 -0.0595894 8.75382 0.00337096C6.45294 0.0663314 4.26362 1.00846 2.63604 2.63604C1.00846 4.26362 0.0663314 6.45294 0.00337096 8.75382C-0.0595894 11.0547 0.761407 13.2923 2.29754 15.0064C3.83368 16.7206 5.9682 17.781 8.2622 17.9697C10.5562 18.1584 12.8353 17.461 14.6309 16.0209L18.3109 19.7009C18.4039 19.7946 18.5145 19.869 18.6363 19.9198C18.7582 19.9706 18.8889 19.9967 19.0209 19.9967C19.1529 19.9967 19.2836 19.9706 19.4055 19.9198C19.5273 19.869 19.6379 19.7946 19.7309 19.7009C19.9111 19.5144 20.0119 19.2652 20.0119 19.0059C20.0119 18.7466 19.9111 18.4974 19.7309 18.3109ZM9.0209 16.0209C7.63643 16.0209 6.28305 15.6104 5.13191 14.8412C3.98076 14.072 3.08356 12.9788 2.55374 11.6997C2.02393 10.4206 1.88531 9.01314 2.1554 7.65527C2.4255 6.2974 3.09219 5.05012 4.07115 4.07115C5.05012 3.09219 6.2974 2.4255 7.65527 2.1554C9.01314 1.88531 10.4206 2.02393 11.6997 2.55374C12.9788 3.08356 14.072 3.98076 14.8412 5.13191C15.6104 6.28305 16.0209 7.63643 16.0209 9.0209C16.0209 10.8774 15.2834 12.6579 13.9706 13.9706C12.6579 15.2834 10.8774 16.0209 9.0209 16.0209Z" fill="black"/>
                        </svg>
                    </button>

                    <p id="p-anbar" class="text-black"><a href="mailto:gerente.pinheiros@quitanda.com" class="text-black d-none-mobile">FALE CONOSCO</a></p>
                    
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