<?php
/*
Template Name: Texto + Capa
*/
?>

<?php
	get_header('stat');
?>	

	
	<section id="capa-conteudo-quitanda" style="background-image: url('<?php echo get_template_directory_uri(); ?>/images/capa-conteudo-sdw.png')">
	<!-- https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/ -->
	<?php if (has_post_thumbnail()) {
							// $img_bg = the_post_thumbnail();
							$img_bg = get_the_post_thumbnail_url();
							$titulo_capa = get_the_title(); } 
							?>
			<?php 
			echo "<div id='capa-conteudo' style='background-image: url(". $img_bg . ";'>" . "<h1 id='capa-titulo'>" . $titulo_capa . "</h1></div>"; 
			?>
	</section>
	

	<!-- MAIN -->
	<main id="conteudo-quitanda">
		<p>
			<?php 
				the_content();
			?>
		</p>
	</main>


<?php get_footer();