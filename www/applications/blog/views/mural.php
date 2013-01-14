<?php if(!defined("_access")) die("Error: You don't have permission to access here..."); ?>

<script type="text/javascript">
	$(function() {
		$('#slides').slides({
			preload: true,
			preloadImage: 'img/loading.gif',
			play: 5000,
			pause: 2500,
			hoverPause: true
		});
	});
</script>

<div class="flexslider">
	<ul class="slides">
	<?php
		if(is_array($mural)) {				
			foreach($mural as $post) {
				$URL = path("blog/". $post["Year"] ."/". $post["Month"] ."/". $post["Day"] ."/". $post["Slug"]);
	?>
				
			    		<li>
			    			<img src="<?php echo path($post["Image_Mural"], TRUE); ?>" class="no-border" />
			    			<div class="mural-info">
								<a href="<?php echo $URL; ?>" title="<?php echo $post["Title"]; ?>">
									<span class="mural-title"><?php echo $post["Title"]; ?></span>
								</a>
							</div>	
			    		</li>
	<?php      			
			}
		}
	?>		
	</ul>
</div>