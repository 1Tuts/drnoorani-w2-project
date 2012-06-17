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
				'title_li' => '',
				'child_of' => 6 ,
				'depth' => 1
			));
		?>
      </ul>
      <div class="clear"></div>
    </div>
    <div class="logo w7 mra"> <span><a href="http://www.drnoorani.ir">دکتر علیرضا نورانی</a></span>
      <h3>متخصص گوش و حلق و بینی</h3>
    </div>
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
<div class="container-addresspage">
  <div class="addresspage w24">
    <div class="left w9 box1"> 
    <span> گوش و حلق وبینی شاخه‌ای از پزشکی است که به تخصص تشخیص و درمان اختلالات گوش، گلو و بینی، و سر و گردن ارتباط دارد. گوش‌وگلووبینی یکی از رقابتی‌ترین تخصص‌ها برای پزشکان است.
     </span>
    </div>
    <div class="right w9 last box2">
      <p>
          <a href="#">به سایت دکتر علیرضا نورانی خوش آمدید</a> 
          <div class="text"><span>متخصص گوش و حلق وبینی</span></div>
      </p>
    </div>
  </div>
</div>
<div class="container-content">
  <div class="content w24">
    <div class="left w7 boxl">
      <?php
				if(have_posts()){
				while(have_posts()){
				the_post();
        	?>
      <h2>
        <?php the_title(); ?>
      </h2>
      <p>
        <?php the_content(); ?>
      </p>
      <?php
                	}
            	}else{
                	echo 'Nothing ...';
            	}
        	?>
    </div>
    <div class="right w7 last boxr">
      <?php
				if(have_posts()){
				while(have_posts()){
				the_post();
        	?>
      <h2>
        <?php the_title(); ?>
      </h2>
      <p>
        <?php the_content(); ?>
      </p>
      <?php
                	}
            	}else{
                	echo 'Nothing ...';
            	}
        	?>
    </div>
    <div class="ml7 mr7 boxm">
      <?php
				if(have_posts()){
				while(have_posts()){
				the_post();
        	?>
      <h2>
        <?php the_title(); ?>
      </h2>
      <p>
        <?php the_content(); ?>
      </p>
      <?php
                	}
            	}else{
                	echo 'Nothing ...';
            	}
        	?>
    </div>
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
</body></html>