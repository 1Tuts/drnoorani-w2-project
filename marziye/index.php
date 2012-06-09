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
                	<li><a href="#">خانه اصلی</a></li>
                    <li><a href="#">نمونه کارها</a>
                    	<ul>
                        	<li><a href="#">جراحی بینی</a></li>
                        	<li><a href="#">جراحی گوش</a></li>
                            <li><a href="#">جراحی حلق</a></li>
                        </ul>
                    
                    </li>
                    <li><a href="#">خدمات</a>
                    	<ul>
                        	<li><a href="#">جراحی </a></li>
                        	<li><a href="#">ویزیت</a></li>
                            <li><a href="#">مشاوره</a></li>
                        </ul>
                    </li>
                    <li><a href="#">گالری</a></li>
                    <li><a href="#">درباره ما</a></li>
                    <li><a href="#">تماس باما</a></li>
                     
				</ul>
		 	<div class="clear"></div>
			</div>
           
			<div class="logo w7 mra"><h1>drnoorani</h1></div>
			<div class="clear"></div>
        </div>
    </div>
    <div class="container-header">
	<div class="banner">
    	<div class="scroll">
			<div class="adv1">
            	<div class="desc"></div>
            </div>
            <div class="adv2">
            	<div class="desc"></div>
            </div>
            <div class="adv3">
            	<div class="desc"></div>
            </div>
            <div class="adv4">
            	<div class="desc"></div>
            </div>
        </div>
        <ul class="btn">
        	<li></li>
            <li></li>
            <li></li>
            <li></li>
        </ul>
    </div>
    

</div>
</div>
    </div>
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