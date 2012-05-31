<div class="container-banner">
		<div class="banner">
			<div class="scroll">
				<?php
			
					$dir ='/images/banner1';
					$allowed_type = array('jpg','jpeg','png','gif');
					
					
					$d = dir($dir);
					$pics_len=0;
					while( $f = $d->read() ){
						$file_type = end(explode('.',$f));
						if( !in_array(strtolower($file_type),$allowed_type) ) continue;

						$file_name = substr($f,0,-strlen($file_type)-1);
						$desc_path = "$dir/$file_name.txt";

						//$desc_text = file_exists($desc_path) ? file_get_contents($desc_path) : ""; // remove for dummies
						if( file_exists($desc_path) ){
							$desc_text = file_get_contents($desc_path);
							$desc_html = "<div class='desc'>$desc_text</div>"; // div.desc have padding and visible even its free.
						}else{
							$desc_html = "";
						}

						echo "<div>$desc_html<img src='$dir/$f' /></div>";
						$pics_len ++;
					}
			
			?>
			</div>
			<ul class="btn">
        	<?php
				for($i=0;$i<$pics_len;$i++) echo '<li></li>';
			?>
        </ul>
		</div>
	</div>