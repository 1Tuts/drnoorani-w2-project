<?php 
	get_header();
	
	get_template_part('topmenu','top');
	
?>


<div class="container-header">

<?php
	
	if($post->ID == '75'){
		
		get_template_part('topbanner','top');

	}elseif($post->ID == '17'){
		
		get_template_part('topgallery','top');
		
	}elseif($post->ID == '13'){
		
		get_template_part('contact-us','page');
		
	}elseif($post->ID == '15'){
		
		get_template_part('about-us','page');
		
	}else{
		
		get_template_part('content_page','page');
	}
	
?>

</div>


<div class="co-content">

<?php

	 if($post->ID == '75'){

		get_template_part('content', 'page');
		
	}

?>

</div>

<?php
	
	get_footer();
	
?>

	
	
	