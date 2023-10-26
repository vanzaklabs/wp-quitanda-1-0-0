<?php

register_nav_menus( array(
    'primary'   => __( 'Primary Menu', 'menuHeaderEsq' ),
    'secondary' => __( 'Secondary Menu', 'menuHeaderDir' )
) );

add_filter('use_block_editor_for_post', '__return_false', 10);

?>