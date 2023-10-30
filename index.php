<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>

	<meta charset="<?php bloginfo( 'charset' ); ?>" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />

    <title><?php post_title(); ?></title>
    <link rel="stylesheet" href="<?php echo get_stylesheet_uri(); ?>">

	<?php wp_head(); ?>

</head>

<p>GET HEADER - HOME</p>

<?php get_header('home'); ?>

<body <?php body_class(); ?>>
    <?php wp_body_open(); ?>
    <main>

        <p>THE CONTENT</p>

        <?php the_content(); ?>

    </main>
</body>

<p>GET FOOTER</p>

<?php get_footer(); ?>