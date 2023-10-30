<?php
/**
 * HEADER - HOME
 */
?>
<h1>HEADER HOME</h1>

<link rel="stylesheet" href="https://cdn.plyr.io/3.7.8/plyr.css" />

    <div class="announcement-bar bg-02 d-flex justify-center align-center" id="announcement-bar">
            <div class="container">
                <div class="d-flex justify-announ align-center">
                    <p id="anb_l" class="text-black">
                        <a class="a_annbar" target="_blank" href="https://www.google.com/search?q=RUA+MATEUS+GROU%2C+159+-+PINHEIROS&oq=RUA+MATEUS+GROU%2C+159+-+PINHEIROS&gs_lcrp=EgZjaHJvbWUyBggAEEUYOTIGCAEQRRg90gEHNjgxajBqMagCALACAA&sourceid=chrome&ie=UTF-8#">
                            RUA MATEUS GROU, 159 - PINHEIROS
                        </a>
                    </p>
                    <p id="anb_m" class="text-black d-none-mobile">SEG A SEX 7H - 22H • SÁB E DOM 7H - 21H • FERIADOS 7H - 21h</p>
                    <p id="anb_r"><a href="<?php site_url();?>/contato" class="text-black d-none-mobile">CONTATO</a></p>
                </div>
            </div>
    </div>

    <div class="logo-effect">
        <header class="bg-01" id="header">
            <div class="menu-desktop container">
                <div class=" d-flex justify-between align-center">
                    <nav>
                        <ul>
                            <li><a href="institucional.html" class="text-white">Sobre Nós</a></li>
                            <li><a href="#quitanda-escolas" class="text-white">Quitanda Escolas</a></li>
                            <li><a href="#quitanda-empresas" class="text-white">Quitanda Empresas</a></li>
                        </ul>
                    </nav>

                    <nav>
                        <ul>
                            <li><a href="#minha-quitanda" class="text-white">Minha Quitanda</a></li>
                            <li><a href="https://www.ifood.com.br/delivery/sao-paulo-sp/quitanda-pinheiros/efe332d7-74fa-48a8-949d-ac1a45ab4738" class="text-white">Encomendas</a></li>
                            <li><a href="https://www.ifood.com.br/delivery/sao-paulo-sp/quitanda-pinheiros/efe332d7-74fa-48a8-949d-ac1a45ab4738" class="text-white">Compre Online</a><span class="yellow-underline"></span>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>


            <div class="menu-mobile" id="menu-mobile">
                <div class="container nav-mob" id="navmobrepo">
                    <input type="checkbox" id="checkbox-menu" onclick="hamburguer()">

                    <label for="checkbox-menu" class="labelmenu">
                        <span></span>
                        <span></span>
                    </label>
                </div>

                <nav id="nav-mob" class="d-none-menu-mobile">
                    <ul>
                        <li><a href="institucional.html" class="text-white">sobre nós</a></li>
                        <li><a href="institucional.html" class="text-white">quitanda escolas</a></li>
                        <li><a href="institucional.html" class="text-white">quitanda empresas</a></li>
                        <li><a href="institucional.html" class="text-white">minha quitanda</a></li>
                        <li><a href="institucional.html" class="text-white">encomendas</a></li>
                        <li><a href="institucional.html" class="text-white">compre online</a><span class="yellow-underline"></span></li>
                        <li>
                            <div class="text-white social-nav">
                                <a href="#">
                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M3 7C3 6.46957 3.21071 5.96086 3.58579 5.58579C3.96086 5.21071 4.46957 5 5 5H19C19.5304 5 20.0391 5.21071 20.4142 5.58579C20.7893 5.96086 21 6.46957 21 7V17C21 17.5304 20.7893 18.0391 20.4142 18.4142C20.0391 18.7893 19.5304 19 19 19H5C4.46957 19 3.96086 18.7893 3.58579 18.4142C3.21071 18.0391 3 17.5304 3 17V7Z"
                                            stroke="white" stroke-width="1.25" stroke-linecap="round"
                                            stroke-linejoin="round" />
                                        <path d="M3 7L12 13L21 7" stroke="white" stroke-width="1.25"
                                            stroke-linecap="round" stroke-linejoin="round" />
                                    </svg>
                                </a>
                                <a href="#">
                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M9.5 9.5C9.5 10.163 9.76339 10.7989 10.2322 11.2678C10.7011 11.7366 11.337 12 12 12C12.663 12 13.2989 11.7366 13.7678 11.2678C14.2366 10.7989 14.5 10.163 14.5 9.5C14.5 8.83696 14.2366 8.20107 13.7678 7.73223C13.2989 7.26339 12.663 7 12 7C11.337 7 10.7011 7.26339 10.2322 7.73223C9.76339 8.20107 9.5 8.83696 9.5 9.5Z"
                                            stroke="#F9F9F9" stroke-width="1.25" stroke-linecap="round"
                                            stroke-linejoin="round" />
                                        <path d="M6.42798 12.4939L13.742 3.24194" stroke="#F9F9F9" stroke-width="1.25"
                                            stroke-linecap="round" stroke-linejoin="round" />
                                        <path d="M10.0019 7.93501L7.06494 5.39001" stroke="#F9F9F9" stroke-width="1.25"
                                            stroke-linecap="round" stroke-linejoin="round" />
                                        <path d="M17.6929 6.59302L9.35693 16.572" stroke="#F9F9F9" stroke-width="1.25"
                                            stroke-linecap="round" stroke-linejoin="round" />
                                        <path
                                            d="M17.591 6.37604C18.063 7.28304 18.306 8.29004 18.3 9.31104C18.3041 10.4119 18.0579 11.4993 17.58 12.491C16.9813 13.5556 16.2818 14.5602 15.491 15.491C14.707 16.424 14.001 17.421 13.381 18.471C13.067 19.091 12.813 19.741 12.624 20.409C12.503 20.769 12.347 21 12.002 21C11.687 21 11.539 20.864 11.376 20.407C11.1833 19.7233 10.9224 19.0606 10.597 18.429C10.1718 17.6999 9.69633 17.0012 9.17403 16.338C8.29703 15.154 6.99503 13.803 6.32103 12.267C5.90216 11.3345 5.6903 10.3223 5.70003 9.30004C5.69289 7.81564 6.21636 6.37753 7.17603 5.24504C7.76399 4.54063 8.49983 3.97432 9.33131 3.58632C10.1628 3.19833 11.0695 2.99816 11.987 3.00004C12.637 2.99771 13.2836 3.09345 13.905 3.28404C14.6931 3.53061 15.4246 3.93079 16.0572 4.46147C16.6898 4.99216 17.2111 5.64287 17.591 6.37604Z"
                                            stroke="#F9F9F9" stroke-width="1.25" stroke-linecap="round"
                                            stroke-linejoin="round" />
                                    </svg>
                                </a>
                                <a href="#">
                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M6.66 17.52C5.76161 17.073 4.96983 16.438 4.33835 15.6581C3.70686 14.8782 3.25043 13.9717 3 13C5 13 6 12 6 10.49C6 6.57 8.25 3 13.38 3C18 3 21 6.51 21 11C21.0065 12.2943 20.7019 13.5712 20.112 14.7232C19.522 15.8753 18.664 16.8687 17.61 17.62"
                                            stroke="white" stroke-width="1.25" stroke-linecap="round"
                                            stroke-linejoin="round" />
                                        <path d="M10 18.6899C11.0977 18.8973 12.2129 18.9978 13.33 18.9899H13.87"
                                            stroke="white" stroke-width="1.25" stroke-linecap="round"
                                            stroke-linejoin="round" />
                                        <path
                                            d="M14 19C14 19.5304 14.2107 20.0391 14.5858 20.4142C14.9609 20.7893 15.4696 21 16 21C16.5304 21 17.0391 20.7893 17.4142 20.4142C17.7893 20.0391 18 19.5304 18 19C18 18.4696 17.7893 17.9609 17.4142 17.5858C17.0391 17.2107 16.5304 17 16 17C15.4696 17 14.9609 17.2107 14.5858 17.5858C14.2107 17.9609 14 18.4696 14 19Z"
                                            stroke="white" stroke-width="1.25" stroke-linecap="round"
                                            stroke-linejoin="round" />
                                        <path
                                            d="M6 19C6 19.5304 6.21071 20.0391 6.58579 20.4142C6.96086 20.7893 7.46957 21 8 21C8.53043 21 9.03914 20.7893 9.41421 20.4142C9.78929 20.0391 10 19.5304 10 19C10 18.4696 9.78929 17.9609 9.41421 17.5858C9.03914 17.2107 8.53043 17 8 17C7.46957 17 6.96086 17.2107 6.58579 17.5858C6.21071 17.9609 6 18.4696 6 19Z"
                                            stroke="white" stroke-width="1.25" stroke-linecap="round"
                                            stroke-linejoin="round" />
                                        <path d="M16 9H16.01" stroke="white" stroke-width="1.25" stroke-linecap="round"
                                            stroke-linejoin="round" />
                                        <path d="M11 9H11.01" stroke="white" stroke-width="1.25" stroke-linecap="round"
                                            stroke-linejoin="round" />
                                    </svg>
                                </a>
                                <a href="#">
                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M4 8C4 6.93913 4.42143 5.92172 5.17157 5.17157C5.92172 4.42143 6.93913 4 8 4H16C17.0609 4 18.0783 4.42143 18.8284 5.17157C19.5786 5.92172 20 6.93913 20 8V16C20 17.0609 19.5786 18.0783 18.8284 18.8284C18.0783 19.5786 17.0609 20 16 20H8C6.93913 20 5.92172 19.5786 5.17157 18.8284C4.42143 18.0783 4 17.0609 4 16V8Z"
                                            stroke="white" stroke-width="1.25" stroke-linecap="round"
                                            stroke-linejoin="round" />
                                        <path
                                            d="M9 12C9 12.7956 9.31607 13.5587 9.87868 14.1213C10.4413 14.6839 11.2044 15 12 15C12.7956 15 13.5587 14.6839 14.1213 14.1213C14.6839 13.5587 15 12.7956 15 12C15 11.2044 14.6839 10.4413 14.1213 9.87868C13.5587 9.31607 12.7956 9 12 9C11.2044 9 10.4413 9.31607 9.87868 9.87868C9.31607 10.4413 9 11.2044 9 12Z"
                                            stroke="white" stroke-width="1.25" stroke-linecap="round"
                                            stroke-linejoin="round" />
                                        <path d="M16.5 7.5V7.51" stroke="white" stroke-width="1.25"
                                            stroke-linecap="round" stroke-linejoin="round" />
                                    </svg>
                                </a>
                            </div>
                        </li>
                    </ul>
                </nav>
            </div>
        </header>

        <div class="logo-absolute" id="logo">
            <svg xmlns="http://www.w3.org/2000/svg" width="390" height="390" viewBox="0 0 53 61" fill="none"
                id="logosvg">
                <path
                    d="M25.9141 45.2883C18.5561 44.5889 14.65 38.1008 14.65 23.4713C14.65 8.45819 18.1645 1.52693 26.1087 1.52693C34.3128 1.52693 38.35 8.52264 38.35 23.4713C38.35 35.8108 36.136 42.8081 31.5784 44.5889C31.2526 44.7154 30.2112 45.0973 29.3643 45.2246C30.3406 43.8887 31.3829 40.4537 31.3829 37.1476C31.3829 33.4572 30.0157 29.0053 25.0664 29.0053C22.0723 29.0053 19.9233 30.9762 19.9233 33.3935C19.9233 35.9374 21.6822 37.0195 24.0258 37.5908C26.3042 38.1637 27.7365 39.3103 27.7365 42.4254C27.7365 43.5712 27.0851 45.3512 27.0851 45.3512C26.6291 45.3512 26.3685 45.3512 25.9141 45.2883ZM12.0442 58.3273C10.0256 58.3273 8.85464 57.0558 8.85464 55.5925C8.85464 54.13 10.287 52.7933 13.1517 52.7933C16.3429 52.7933 20.1847 54.1929 20.8345 54.8947C20.8345 54.8947 18.1001 58.3273 12.0442 58.3273ZM28.4523 46.8144C29.8203 46.7516 30.8618 46.5598 31.9692 46.3696C41.8002 44.5252 53 37.4006 53 23.4076C53 8.26881 39.977 3.8147e-06 25.8482 3.8147e-06C11.7845 3.8147e-06 0 7.88688 0 23.4076C0 37.6544 12.5002 44.9072 23.5706 46.6879C24.7415 46.8781 25.3278 46.9417 26.4996 46.9417C26.4996 46.9417 26.1739 47.5146 25.9784 47.8974C25.7838 48.2777 25.1975 49.0416 25.1975 49.0416L23.3735 48.3414C19.4022 46.8781 16.8632 46.2415 12.5654 46.2415C7.09658 46.2415 2.92983 49.6765 2.92983 53.6224C2.92983 57.6295 6.18457 60.1733 11.1982 60.1733C14.8446 60.1733 18.2296 59.0927 21.1611 56.6754L22.3972 55.6561L24.0901 56.6102C28.3236 58.9638 31.1223 61 36.07 61C44.9255 61 49.0279 56.0389 52.544 49.1689C52.8697 48.5323 52.934 47.8974 52.544 47.7048C52.1531 47.5146 51.8926 47.7685 51.5017 48.405C49.8088 51.2679 44.9914 52.8561 41.1496 52.8561C36.5268 52.8561 33.6621 52.4758 29.3643 50.7595L26.695 49.6765C27.0851 49.1689 27.4108 48.7862 27.7365 48.2148C27.9979 47.7685 28.2577 47.3229 28.4523 46.8144Z"
                    fill="white" />
            </svg>
        </div>
        <span id="ancoragem"></span>
    </div>