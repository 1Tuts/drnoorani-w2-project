	<?php
		get_header();
	
		get_template_part('topmenu','top');
	
	?>
    
<div class="container-header">
  	<?php
		if($post->post_name != 'نمونه کارها' && $post->post_name !=' خدمات' && $post->post_name!='تصاویر'  && $post->post_name!='درباره ما'  && $post->post_name!='ارتباط باما'){
			get_template_part('topbanner','top');
			}elseif($post->post_name == 'تصاویر'){
				get_template_part('topgallery','top');
				}elseif($post->post_name == 'درباره ما'){
					get_template_part('aboutus','page');
					}elseif($post->post_name == 'ارتباط باما'){
						get_template_part('contactus','page');
						}
	?>
</div>

<div class="co-content">
  	<?php
		if($post->post_name != 'خانه اصلی'){
			get_template_part('content','page');
			
			}else{
				get_template_part('content_page','page');
				
				}
	?>
</div>

	<?php
        get_footer();
    ?>
