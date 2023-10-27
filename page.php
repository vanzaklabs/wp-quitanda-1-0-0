<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Q</title>
    <link rel="stylesheet" href="<?php echo get_stylesheet_uri(); ?>">
	<!-- WP_HEAD() -->
	<?php wp_head(); ?>
</head>
<body>
    
    <?php get_header('home'); ?>

    <main>
        <h1>PAGE.PHP</h1>
        <?php the_content(); ?>
    </main>
    
    <?php get_footer(); ?>

    <p>1
        <?php
        echo get_template_directory_uri(); ?>
    </p>
    <p>2
        <?php
        echo get_parent_theme_file_path( '/assets/images/logo-quitanda.png' ); ?>
    </p>
    <p>3
        <?php
        echo get_stylesheet_uri( '/assets/images/logo-quitanda.png' ); ?>
    </p>
    <p>4
        <?php 
        echo get_stylesheet_uri();
        ?>
    </p>

    <p>5
        <img
        id="logo-quitanda"
        src="<?php echo get_template_directory_uri() . '/assets/images/logo-quitanda.png'; ?>">
        <style>
            #logo-quitanda{
                background-color: black;
            }
            img#logo-quitanda {
                width: 200px;
                height: 200px;
            }
        </style>
    </p>
   