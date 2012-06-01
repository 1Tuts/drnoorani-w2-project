<!DOCTYPE HTML>
<html>
<head>
<meta charset="utf-8">
<title>dr noorani</title>
<link rel="stylesheet"  type="text/css" href="<?php bloginfo('template_url') ?>/reset.css"/>
<link rel="stylesheet"  type="text/css" href="<?php bloginfo('template_url') ?>/1styles.css"/>
<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url') ?>/style.css" />
<script type="text/javascript" src="<?php bloginfo('template_url') ?>/jquery.js"></script>
<script type="text/javascript" src="<?php bloginfo('template_url') ?>/menu.js"></script>
</head>
	<div class="container-topheader">
    	<div class="topheader w24">
        	<div class="topmenu right last">
				<ul>	
                	<?php 
						wp_list_pages(array(
							'title_li'=>'',
							'depth'=>1
						
						));
					
					?>
				</ul>
		 	<div class="clear"></div>
			</div>
           
			<div class="logo w7 mra"><h1>drnoorani</h1></div>
			<div class="clear"></div>
        </div>
    </div>
    <div class="container-header"></div>
	<div class="container-addresspage"></div>
	<div class="container-content">
		<div class="content w24">
			<?php
				if(have_posts()){
				while(have_posts()){
				the_post();
			?>
			<article class='post'>
				<h2><?php the_title(); ?></h2>
				<p>
					<?php the_content(); ?>
				</p>
			</article>
			<?php
					}
				}else{
					echo 'Nothing ...';
				}
			?>
		</div>
	</div>
	<div class="container-footer">
		<div class="toggle">
			<div class="contenfooter w24">
				<div class="pont"></div>
				<div class="plus left">+</div>
				<div class="clear"></div>
			</div>
		</div>
		<div class="footernav">
			<div class="con-footernav w24"></div>
		</div>
	</div>
<body>
</body>
</html>