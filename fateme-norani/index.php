<?php 
	get_header();
	get_template_part('menu','top');
	get_template_part('banner','top');
?>
			
	
	<div class="container-addresspage"></div>
	<div class="container-content">
		<?php get_template_part('content','page');
	</div>
	<?php get_footer(); ?>