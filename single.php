<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php post_title(); ?></title>
    <link rel="stylesheet" href="<?php get_stylesheet_uri(); ?>">
</head>
<body>
    <?php get_header('home'); ?>
    <main>
        <?php the_content(); ?>
    </main>
    <?php get_footer(); ?>

    <?php
    
    get_title();
    echo get_theme_file_uri( 'images/logo.png' );
    echo get_parent_theme_file_path( 'images/logo.png' );
    ?>