<!DOCTYPE HTML>
<html lang="en-US">
<head>
	<meta charset="UTF-8">
	<title>dr noorani</title>
	<link rel="stylesheet" type="text/css" 
	href="<?php bloginfo('template_url') ?>/reset.css" />
	<link rel="stylesheet" type="text/css"
	 href="<?php bloginfo('template_url') ?>/1styles.css" />
	<link rel="stylesheet" type="text/css" 
	href="<?php bloginfo('template_url') ?>/style.css" />
</head>
<body>
	<div class="container-topheader ">
		<div class="topheader w24">
			<div class="menu right last">
				<ul>
					<?php
						wp_list_pages(array(
							'title_li' => '',
							'depth'    => 1
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
	<div class="container-content"></div>
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
</body>
</html>