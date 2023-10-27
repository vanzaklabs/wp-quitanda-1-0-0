<?php
/*
Template Name: Texto
*/
?>

<?php
	get_header('stat');
?>	
<!-- MAIN -->
	<main id="conteudo-quitanda">
		<h1>
			<?php 
				the_title();
			?>
		</h1>
		<p>
			<?php 
				the_content();
			?>
		</p>
	</main>

<?php
	get_footer();