<div class="container-addresspage">
  <div class="addresspage w24">
    <div class="left w9 box1"> <span> گوش و حلق وبینی شاخه‌ای از پزشکی است که به تخصص تشخیص و درمان اختلالات گوش، گلو و بینی، و سر و گردن ارتباط دارد. گوش‌وگلووبینی یکی از رقابتی‌ترین تخصص‌ها برای پزشکان است. </span> </div>
    <div class="right w9 last box2">
      <p> <a href="#">به سایت دکتر علیرضا نورانی خوش آمدید</a>
      <div class="text"><span>متخصص گوش و حلق وبینی</span></div>
      </p>
    </div>
  </div>
</div>
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

