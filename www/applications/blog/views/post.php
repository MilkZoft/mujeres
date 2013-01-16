<?php 			
	$URL = path("blog/". $post["Year"] ."/". $post["Month"] ."/". $post["Day"] ."/". $post["Slug"]);		
	$in  = ($post["Tags"] !== "") ? __("in") : NULL;
?>
		<div class="post">
			<div class="post-title">
				<a href="<?php echo $URL; ?>" title="<?php echo stripslashes($post["Title"]); ?>">
					<?php echo stripslashes($post["Title"]); ?>
				</a>
			</div>
			
		
			<div class="post-left">
				<?php echo __("Published") ." ". howLong($post["Start_Date"]) ." $in ". exploding($post["Tags"], "blog/tag/") ." " . __("by") . ' <a href="'. path("blog/author/". $post["Author"]) .'">'. $post["Author"] .'</a>'; ?>
			</div>
			
			<div class="post-right">
				<?php
					if($post["Enable_Comments"]) {
                    	echo fbComments($URL, TRUE);
					}
				?>
			</div>
			
			<div class="clear"></div>
				
			<div class="post-content">
				<div class="social" style="float: left; margin-top: 5px; margin-bottom: 10px;">
					<a href="https://twitter.com/share" class="twitter-share-button" data-url="<?php echo $URL; ?>" data-text="<?php echo $post["Content"]; ?>" data-via="mujeresen" data-lang="<?php echo _get("webLang"); ?>">Tweet</a>
				</div>

				<div class="clear"></div>
				<?php					
					echo showContent($post["Content"], $URL); 
				?>

				<br /><br />

				<?php 
					echo display('<p><script type="text/javascript">
							google_ad_client = "ca-pub-4006994369722584";
							/* mujeresen.la */
							google_ad_slot = "9139966704";
							google_ad_width = 728;
							google_ad_height = 90;
							</script>
							<script type="text/javascript"
							src="http://pagead2.googlesyndication.com/pagead/show_ads.js">
							</script></p>', 4);
				?>
			</div>
		</div>
		<br /></br />
		<?php
			if($post["Enable_Comments"]) {
				echo fbComments($URL);
			}
		?>
