<?php 
	get_header();
	
	get_template_part('topmenu','top');
	
?>

<div class="container-header">

<?php
	
	if($post->ID == '75'){
		
		get_template_part('topbanner','top');

	}else{
		
		get_template_part('content_page','page');
	}
	
?>

</div>

<div class="container-content">

<?php

	 if($post->ID == '75'){

		get_template_part('content', 'page');
		
	}else{
		
		get_template_part('content_page','page');
	}

?>

</div>

<?php
	
	get_footer();
	
?>

	
	
	