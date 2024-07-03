<head>
	<title><?PHP echo $app_title; ?></title>
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		
	<!-- Change the color of the address bar -->
	<!-- Android -->
	<meta name="theme-color" content="<?PHP echo $theme->theme_value('bar_bg_color'); ?>">
	<!-- Windows Phone -->
	<meta name="msapplication-navbutton-color" content="<?PHP echo $theme->theme_value('bar_bg_color'); ?>">
	<!-- iOS Safari -->
	<meta name="apple-mobile-web-app-status-bar-style" content="<?PHP echo $theme->theme_value('bar_bg_color'); ?>">
	
	<!-- Favicon -->
	<link rel="icon" type="image/png"  href="assets/icon.png">
	
	<?PHP require('assets/css.php'); ?> 
	
</head>