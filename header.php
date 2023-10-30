<?php
/**
 * HEADER
 */
?>

<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>

	<meta charset="<?php bloginfo( 'charset' ); ?>" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />

    <title><?php bloginfo('name'); ?> &raquo; <?php is_front_page() ? bloginfo('description') : wp_title(''); ?></title>
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">

	<?php wp_head(); ?>

</head>

<body <?php body_class(); ?>>

    <div class="announcement-bar bg-02 d-flex justify-center align-center" id="announcement-bar">
        <div class="container">
            <div class="d-flex justify-announ align-center">
                <p class="text-black">RUA MATEUS GROU, 159 - PINHEIROS</p>
                <p class="text-black d-none-mobile">SEGUNDA A SEXTA 7H - 22H • SÁBADO E DOMINGO 7H - 21H • FERIADOS 7H -
                    21h</p>
                    <div class="d-flex align-center" style="gap: 20px;">
                        <button><svg xmlns="http://www.w3.org/2000/svg" width="16" height="20" viewBox="0 0 21 20" fill="none">
                            <path d="M19.7309 18.3109L16.0209 14.6309C17.461 12.8353 18.1584 10.5562 17.9697 8.2622C17.781 5.9682 16.7206 3.83368 15.0064 2.29754C13.2923 0.761407 11.0547 -0.0595894 8.75382 0.00337096C6.45294 0.0663314 4.26362 1.00846 2.63604 2.63604C1.00846 4.26362 0.0663314 6.45294 0.00337096 8.75382C-0.0595894 11.0547 0.761407 13.2923 2.29754 15.0064C3.83368 16.7206 5.9682 17.781 8.2622 17.9697C10.5562 18.1584 12.8353 17.461 14.6309 16.0209L18.3109 19.7009C18.4039 19.7946 18.5145 19.869 18.6363 19.9198C18.7582 19.9706 18.8889 19.9967 19.0209 19.9967C19.1529 19.9967 19.2836 19.9706 19.4055 19.9198C19.5273 19.869 19.6379 19.7946 19.7309 19.7009C19.9111 19.5144 20.0119 19.2652 20.0119 19.0059C20.0119 18.7466 19.9111 18.4974 19.7309 18.3109ZM9.0209 16.0209C7.63643 16.0209 6.28305 15.6104 5.13191 14.8412C3.98076 14.072 3.08356 12.9788 2.55374 11.6997C2.02393 10.4206 1.88531 9.01314 2.1554 7.65527C2.4255 6.2974 3.09219 5.05012 4.07115 4.07115C5.05012 3.09219 6.2974 2.4255 7.65527 2.1554C9.01314 1.88531 10.4206 2.02393 11.6997 2.55374C12.9788 3.08356 14.072 3.98076 14.8412 5.13191C15.6104 6.28305 16.0209 7.63643 16.0209 9.0209C16.0209 10.8774 15.2834 12.6579 13.9706 13.9706C12.6579 15.2834 10.8774 16.0209 9.0209 16.0209Z" fill="black"/>
                          </svg></button>
                        <p><a href="" class="text-black d-none-mobile">CONTATO</a></p>
                    </div>
            </div>
        </div>
    </div>

        <header class="bg-01" id="header">
        <div class="menu-desktop container">
            <div class=" d-flex justify-between align-center">
                <nav>
                    <?php
                                wp_nav_menu( array( 
                                    'theme_location' => 'menuHeaderEsq', 
                                    'container_class' => 'text-white'
                                    )
                                ); 
                            ?>
                </nav>
                <div class="elemento-no-topo" id="logo">
                    <a href="<?php echo esc_url(home_url( '/' )); ?>">
                        <img src="<?php echo get_template_directory_uri() ?>/images/logo.svg" alt="" style="width: 60px;">
                    </a>
                </div>
                <nav>
                    <?php
                                wp_nav_menu( array( 
                                    'theme_location' => 'menuHeaderDir', 
                                    'container_class' => 'text-white'
                                    )
                                ); 
                            ?>
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
                        <li><a href="institucional.html" class="text-white">compre online</a></li>
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