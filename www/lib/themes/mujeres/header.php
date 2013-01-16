<?php
	if(!defined("_access")) {
		die("Error: You don't have permission to access here...");
	}

	if(segment(0) === "cocina") {
		$logo = "cocina";
		$menuList = '<li><a href="'. path("blog/tag/". slug(__("Appetizers"))) .'">'. __("Appetizers") .'</a></li>
					<li><a href="'. path("blog/tag/". slug(__("Poultry"))) .'">'. __("Poultry") .'</a></li>
					<li><a href="'. path("blog/tag/". slug(__("Meat"))) .'">'. __("Meat") .'</a></li>
					<li><a href="'. path("blog/tag/". slug(__("Salads"))) .'">'. __("Salads") .'</a></li>
					<li><a href="'. path("blog/tag/". slug(__("Seafood"))) .'">'. __("Seafood") .'</a></li>
					<li><a href="'. path("blog/tag/". slug(__("Desserts"))) .'">'. __("Desserts") .'</a></li>							
					<li><a href="'. path("blog/tag/". slug(__("Sushi"))) .'">'. __("Sushi") .'</a></li>
					<li><a href="'. path("blog/tag/". slug(__("Vegetables"))) .'">'. __("Vegetables") .'</a></li>
					<li><a href="'. path("blog/tag/". slug(__("Others"))) .'">'. __("Others") .'</a></li>';
	} elseif(segment(0) === "casa") {
		$logo = "casa";
		$menuList = '<li><a href="'. path("blog/tag/". slug(__("Garden"))) .'" title="'. __("Garden") .'">'. __("Garden") .'</a></li>
					<li><a href="'. path("blog/tag/". slug(__("Decoration"))) .'" title="'. __("Decoration") .'">'. __("Decoration") .'</a></li>
					<li><a href="'. path("blog/tag/". slug(__("Saving"))) .'" title="'. __("Saving") .'">'. __("Saving") .'</a></li>
					<li><a href="'. path("blog/tag/". slug(__("Prevention of accidents"))) .'" title="'. __("Prevention of accidents") .'">'. __("Accidents") .'</a></li>
					<li><a href="'. path("blog/tag/". slug(__("Appliances"))) .'" title="'. __("Appliances") .'">'. __("Appliances") .'</a></li>';
	} elseif(segment(0) === "belleza") {
		$logo = "belleza";
		$menuList = '<li><a href="'. path("blog/tag/". slug(__("Fashion"))) .'" title="'. __("Fashion") .'">'. __("Fashion") .'</a></li>
					<li><a href="'. path("blog/tag/". slug(__("Makeup"))) .'" title="'. __("Makeup") .'">'. __("Makeup") .'</a></li>
					<li><a href="'. path("blog/tag/". slug(__("Clothing"))) .'" title="'. __("Clothing") .'">'. __("Clothing") .'</a></li>
					<li><a href="'. path("blog/tag/". slug(__("Shoes"))) .'" title="'. __("Shoes") .'">'. __("Shoes") .'</a></li>
					<li><a href="'. path("blog/tag/". slug(__("Accessories"))) .'" title="'. __("Accessories") .'">'. __("Accessories") .'</a></li>';
	} elseif(segment(0) === "familia") {
		$logo = "familia";
		$menuList = '<li><a href="'. path("blog/tag/". slug(__("Maternity"))) .'" title="'. __("Maternity") .'">'. __("Maternity") .'</a></li>
					<li><a href="'. path("blog/tag/". slug(__("Children"))) .'" title="'. __("Children") .'">'. __("Children") .'</a></li>
					<li><a href="'. path("blog/tag/". slug(__("Teens"))) .'" title="'. __("Teens") .'">'. __("Teens") .'</a></li>
					<li><a href="'. path("blog/tag/". slug(__("Marriage"))) .'" title="'. __("Marriage") .'">'. __("Marriage") .'</a></li>
					<li><a href="'. path("blog/tag/". slug(__("Education"))) .'" title="'. __("Education") .'">'. __("Education") .'</a></li>';
	} elseif(segment(0) === "salud") {
		$logo = "salud";
		$menuList = '<li><a href="'.  path("blog/tag/". slug(__("Exercise"))) .'" title="'.  __("Exercise") .'">'.  __("Exercise") .'</a></li>
					<li><a href="'.  path("blog/tag/". slug(__("Diets"))) .'" title="'.  __("Diets") .'">'.  __("Diets") .'</a></li>
					<li><a href="'.  path("blog/tag/". slug(__("Allergies"))) .'" title="'.  __("Allergies") .'">'.  __("Allergies") .'</a></li>
					<li><a href="'.  path("blog/tag/". slug(__("Infections"))) .'" title="'.  __("Infections") .'">'.  __("Infections") .'</a></li>
					<li><a href="'.  path("blog/tag/". slug(__("Skin"))) .'" title="'.  __("Skin") .'">'.  __("Skin") .'</a></li>';
	} elseif(segment(0) === "sexualidad") {
		$logo = "sexualidad";
		$menuList = '<li><a href="'.  path("blog/tag/". slug(__("Exercise"))) .'" title="'.  __("Exercise") .'">'.  __("Exercise") .'</a></li>
					<li><a href="'.  path("blog/tag/". slug(__("Diets"))) .'" title="'.  __("Diets") .'">'.  __("Diets") .'</a></li>
					<li><a href="'.  path("blog/tag/". slug(__("Allergies"))) .'" title="'.  __("Allergies") .'">'.  __("Allergies") .'</a></li>
					<li><a href="'.  path("blog/tag/". slug(__("Infections"))) .'" title="'.  __("Infections") .'">'.  __("Infections") .'</a></li>
					<li><a href="'.  path("blog/tag/". slug(__("Skin"))) .'" title="'.  __("Skin") .'">'.  __("Skin") .'</a></li>';
	} else {
		$logo = "logo";
		$menuList = '<li><a href="'. path("blog/tag/". slug(__("Appetizers"))) .'">'. __("Appetizers") .'</a></li>
					<li><a href="'. path("blog/tag/". slug(__("Poultry"))) .'">'. __("Poultry") .'</a></li>
					<li><a href="'. path("blog/tag/". slug(__("Meat"))) .'">'. __("Meat") .'</a></li>
					<li><a href="'. path("blog/tag/". slug(__("Salads"))) .'">'. __("Salads") .'</a></li>
					<li><a href="'. path("blog/tag/". slug(__("Seafood"))) .'">'. __("Seafood") .'</a></li>
					<li><a href="'. path("blog/tag/". slug(__("Desserts"))) .'">'. __("Desserts") .'</a></li>							
					<li><a href="'. path("blog/tag/". slug(__("Sushi"))) .'">'. __("Sushi") .'</a></li>
					<li><a href="'. path("blog/tag/". slug(__("Vegetables"))) .'">'. __("Vegetables") .'</a></li>
					<li><a href="'. path("blog/tag/". slug(__("Others"))) .'">'. __("Others") .'</a></li>';
	}
?>
<!DOCTYPE html>
<html lang="<?php echo _get("webLang"); ?>">
<head>
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	
	<?php echo $this->getMeta(); ?>
	
	<title><?php echo $this->getTitle(); ?></title>
	
    <link rel="stylesheet" href="<?php echo path("www/lib/css/default.css", TRUE); ?>" type="text/css">
	<link rel="stylesheet" href="<?php echo $this->themePath; ?>/css/style.css" type="text/css">
	<link rel="shortcut icon" href="<?php echo $this->themePath; ?>/images/favicon.ico">

	<?php 
		echo $this->getCSS(); 
	 	
	 	echo $this->js("jquery", NULL, TRUE);   
	?>

	<script type="text/javascript" src="<?php echo $this->themePath; ?>/js/porlets.js"></script>
        
    <script type="text/javascript">
		var PATH = "<?php print path(); ?>";
		
		var URL  = "<?php print _get('webURL'); ?>";
	</script>

	<link href="http://fonts.googleapis.com/css?family=ABeeZee" rel="stylesheet" type="text/css">

	<link rel="stylesheet" href="<?php echo $this->themePath; ?>/js/flexslider/flexslider.css" type="text/css">	
	<script src="<?php echo $this->themePath; ?>/js/flexslider/jquery.flexslider.min.js"></script>

	<script type="text/javascript">
		$(function() {
	    	$('.flexslider').flexslider();
	  	});
	</script>
</head>

<body>	
	<div id="topbar-wrapper">
		<div id="topbar">
			<nav>
				<ul>
					<li><a href="<?php echo path(slug(__("kitchen")), FALSE, FALSE); ?>" title="<?php echo __("Kitchen"); ?>"><?php echo __("Kitchen"); ?></a></li>
					<li><a href="<?php echo path(slug(__("beauty")), FALSE, FALSE); ?>" title="<?php echo __("Beauty"); ?>"><?php echo __("Beauty"); ?></a></li>
					<li><a href="<?php echo path(slug(__("_home")), FALSE, FALSE); ?>" title="<?php echo __("_Home"); ?>"><?php echo __("_Home"); ?></a></li>
					<li><a href="<?php echo path(slug(__("family")), FALSE, FALSE); ?>" title="<?php echo __("Family"); ?>"><?php echo __("Family"); ?></a></li>
					<li><a href="<?php echo path(slug(__("health")), FALSE, FALSE); ?>" title="<?php echo __("Health"); ?>"><?php echo __("Health"); ?></a></li>
					<li><a href="<?php echo path(slug(__("sexuality")), FALSE, FALSE); ?>" title="<?php echo __("Sexuality"); ?>"><?php echo __("Sexuality"); ?></a></li>
					<script type="text/javascript">
						if((screen.width > 800) && (screen.height > 600)) {
							//document.write('<li><a href="#" title="<?php echo __("Forums"); ?>"><?php echo __("Forums"); ?></a></li> <li><a href="#" title="<?php echo __("Feedback"); ?>"><?php echo __("Feedback"); ?></a></li>');
						}
					</script>				
				</ul>
			</nav>

			<!--
			<div id="top-box-register" class="toggle">
				<span class="bold"><?php echo __("Are you new?, Register!"); ?></span><br />

				<form action="es/users/register" method="post" class="form-register">
					<fieldset>
						<input id="register-name" name="name" class="register-input" type="text" required placeholder="<?php echo __("Full Name"); ?>" /> <br />
						<input id="register-email" name="email" class="register-input" type="email" required placeholder="Email" /> <br />
						<input id="register-password" name="password" class="register-input" type="password" required placeholder="<?php echo __("Password"); ?>" /> <br />
						<input name="register" class="register-submit" type="submit" value="¡Regístrate!" />
					</fieldset>
				</form>
			</div>

			<div id="top-box-login" class="toggle">
				<span class="bold"><?php echo __("Have an account?, Connect!"); ?></span><br />

				<form action="http://www.codejobs.biz/es/users/login" method="post" class="form-login">
					<fieldset>
						<input id="login-username" name="username" class="login-input" type="text" required placeholder="<?php echo __("Username or Email"); ?>" /> <br />
						<input id="login-password" name="password" class="login-input" type="password" required placeholder="<?php echo __("Password"); ?>" /> 
						<br />
						<a href="http://www.codejobs.biz/es/users/recover"><?php echo __("Forgot your password?"); ?></a>

						<input name="login" class="login-submit" type="submit" value="<?php echo __("Login"); ?>" />
					</fieldset>
				</form>
			</div>

			<div id="top-box-profile" class="toggle">
				<div class="top-box-profile">
					<div style="float: left; width: 90px;">
						<img src="http://www.codejobs.biz/www/lib/files/images/users/" alt="" />
					</div>

					<div style="float: left; width: 170px; line-height: 15px;">
						<span class="bold"></span> <br />
						<span class="small grey"><a href="#">Ver mi página de perfil</a></span><br />

						<div style="width: 170px; border-top: 1px dotted #CCC; margin-top: 5px; margin-bottom: 5px;"></div>
						
						<span class="small grey"><a href="#">Mensajes Directos</a></span><br />
						<span class="small grey"><a href="#">Ayuda</a></span><br />

						<div style="width: 170px; border-top: 1px dotted #CCC; margin-top: 5px; margin-bottom: 5px;"></div>

						<span class="small grey"><a href="http://www.codejobs.biz/es/blog/admin"><strong>Mis publicaciones</strong>: 0</a></span><br />
						<span class="small grey"><a href="http://www.codejobs.biz/es/codes/admin"><strong>Mis códigos</strong>: 0</a></span><br />
						<span class="small grey"><a href="http://www.codejobs.biz/es/bookmarks/admin"><strong>Mis marcadores</strong>: 0</a></span><br />
						<!--span class="small grey"><strong>Mis empleos</strong>: <a href="#">0</a></span><br />
						<span class="small grey"><strong>Mis cursos</strong>: <a href="#">0</a></span><br />
						<span class="small grey"><strong>Mis puntos</strong>: 0</span><br /->

						<div style="width: 170px; border-top: 1px dotted #CCC; margin-top: 5px; margin-bottom: 5px;"></div>

						<span class="small grey bold"><a href="http://www.codejobs.biz/es/codes/add">Publicar un código</a></span><br />
						<span class="small grey"><a href="#">Publicar un empleo</a></span><br />
						<span class="small grey bold"><a href="http://www.codejobs.biz/es/bookmarks/add">Publicar un marcador</a></span><br />
						<span class="small grey"><a href="#">Publicar una entrada</a></span><br />

						<div style="width: 170px; border-top: 1px dotted #CCC; margin-top: 5px; margin-bottom: 5px;"></div>

						<span class="small grey"><a href="#">Actualizar mi currículum</a></span><br />

						<div style="width: 170px; border-top: 1px dotted #CCC; margin-top: 5px; margin-bottom: 5px;"></div>

						<span class="small grey"><a href="http://www.codejobs.biz/es/cpanel">Ir al Panel de Control</a></span><br />
							
						<span class="small grey"><a href="http://www.codejobs.biz/es/users/logout">Desconectar</a></span><br />
					</div>

					<div class="clear"></div>
				</div>
			</div>

			<div id="top-box">
				<ul class="top-box-ul">
					<li class="float-right">
						<a id="display-login" href="#" title="Conectar">
							<?php echo __("Login"); ?> <img class="noborder" src="http://www.codejobs.biz/www/lib/themes/newcodejobs/images/arrow-down.png" class="noborder" />
						</a>
					</li>
					
					<li class="float-right">
						<a id="display-register" href="#" title="Regístrar">
							<?php echo __("Register"); ?> <img class="noborder" src="http://www.codejobs.biz/www/lib/themes/newcodejobs/images/arrow-down.png" class="noborder" />
						</a>
					</li>
				</ul>
			</div>-->
		</div>

		<div class="clear"></div>
	</div>

	<div class="container">
		<header>
			<a href="<?php echo path(); ?>" title="<?php echo __("Women in the Kitchen"); ?>"><img class="logo noborder" src="<?php echo $this->themePath; ?>/images/<?php echo $logo; ?>.png" alt="Mujeres en la Cocina" /></a>
			
				<nav class="menu">
					<ul>
						<?php echo $menuList; ?>
						<script type="text/javascript">
							if(screen.width > 800) {
								var social = '<li class="social"><a href="#" title="Facebook"><img class="down noborder" src="<?php echo $this->themePath; ?>/images/social/facebook.png" alt="Facebook" /></a></li>';
									social = social + '<li class="social"><a href="http://twitter.com/mujeresen" title="Twitter"><img class="down noborder" src="<?php echo $this->themePath; ?>/images/social/twitter.png" alt="Twitter" /></a></li>';
								document.write(social);
							}
						</script>
					</ul>

					<script type="text/javascript">
						if(screen.width < 800) {
							var social = '<div style="width: 120px; margin-left: 105px;"><a href="#" title="Facebook"><img class="down noborder" src="<?php echo $this->themePath; ?>/images/social/facebook.png" alt="Facebook" /></a>';
								social = social + ' <a href="http://twitter.com/mujeresen" title="Twitter"><img class="down noborder" src="<?php echo $this->themePath; ?>/images/social/twitter.png" alt="Twitter" /></a>';
							document.write(social);
						}
					</script>
				</nav>
			</header>

  			<?php 
  				$this->execute("Blog_Controller", "mural");
  			?>

  			<div class="ads">
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

  			<a name="top">&nbsp;</a>
		  		