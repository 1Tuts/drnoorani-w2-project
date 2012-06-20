<div class="container-addresspage">
  <div class="addresspage w24">
    <div class="left w9 box1"> <p>دکتر علیرضا نورانی، فارغ التحصیل دکترای پزشکی عمومی و فارغ التحصیل رشته تخصصی گوش و حلق و بینی. </p> </div>
    <div class="right w9 last box2">
      <p> <a class="address" href="#">به سایت دکتر علیرضا نورانی خوش آمدید</a>
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
                    <article class="post">
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
        <div class="right w7 last boxr">
        	<?php
				if(have_posts()){
				while(have_posts()){
				the_post();
        	?>
            <article class="post">
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
        <div class="ml7 mr7 boxm">
        	<?php
				if(have_posts()){
				while(have_posts()){
				the_post();
        	?>
           <article class="post">
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
</div>