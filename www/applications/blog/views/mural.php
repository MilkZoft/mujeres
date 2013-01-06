<?php if(!defined("_access")) die("Error: You don't have permission to access here..."); ?>

<?php
	if(is_array($mural)) {
		foreach($mural as $m) { ?>
			<li>
    			<img src="<?php echo path($m['Image_Mural'], TRUE) ?>" />
    			<div class="flex-caption">
    				<a href="<?php echo path("blog/". $m["Year"] ."/". $m["Month"] ."/". $m["Day"] ."/". $m["Slug"]); ?>"><?php echo $m["Title"] ?></a>
    			</div>
    		</li>
<?php 	}
	}
?>