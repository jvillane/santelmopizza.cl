<!doctype HTML>
<html <?php language_attributes(); ?> >
	<head>
<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-117497572-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-117497572-1');
</script>
		<title><?php bloginfo('name'); ?><?php wp_title(); ?></title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta charset="<?php bloginfo('charset'); ?>">
		<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
		<meta name="description" content="Santelmo Ñuñoa. Pizzas y Pastas"/>
		<link href='https://fonts.googleapis.com/css?family=Lato' rel='stylesheet' type='text/css'>
		<link rel='stylesheet' id='vc_google_fonts_satisfyregular-css'  href='http://fonts.googleapis.com/css?family=Satisfy%3Aregular&subset=latin&ver=4.4.1' type='text/css' media='all' />	
		<link rel="stylesheet" href="<?php bloginfo( 'stylesheet_url' ); ?>">
		<link rel="apple-touch-icon" sizes="57x57" href="<?php bloginfo('template_directory'); ?>/favicon/apple-icon-57x57.png">
		<link rel="apple-touch-icon" sizes="60x60" href="<?php bloginfo('template_directory'); ?>/favicon/apple-icon-60x60.png">
		<link rel="apple-touch-icon" sizes="72x72" href="<?php bloginfo('template_directory'); ?>/favicon/apple-icon-72x72.png">
		<link rel="apple-touch-icon" sizes="76x76" href="<?php bloginfo('template_directory'); ?>/favicon/apple-icon-76x76.png">
		<link rel="apple-touch-icon" sizes="114x114" href="<?php bloginfo('template_directory'); ?>/favicon/apple-icon-114x114.png">
		<link rel="apple-touch-icon" sizes="120x120" href="<?php bloginfo('template_directory'); ?>/favicon/apple-icon-120x120.png">
		<link rel="apple-touch-icon" sizes="144x144" href="<?php bloginfo('template_directory'); ?>/favicon/apple-icon-144x144.png">
		<link rel="apple-touch-icon" sizes="152x152" href="<?php bloginfo('template_directory'); ?>/favicon/apple-icon-152x152.png">
		<link rel="apple-touch-icon" sizes="180x180" href="<?php bloginfo('template_directory'); ?>/favicon/apple-icon-180x180.png">
		<link rel="icon" type="image/png" sizes="192x192"  href="<?php bloginfo('template_directory'); ?>/favicon/android-icon-192x192.png">
		<link rel="icon" type="image/png" sizes="32x32" href="<?php bloginfo('template_directory'); ?>/favicon/favicon-32x32.png">
		<link rel="icon" type="image/png" sizes="96x96" href="<?php bloginfo('template_directory'); ?>/favicon/favicon-96x96.png">
		<link rel="icon" type="image/png" sizes="16x16" href="<?php bloginfo('template_directory'); ?>/favicon/favicon-16x16.png">
		<meta name="msapplication-TileColor" content="#ffffff">
		<meta name="msapplication-TileImage" content="/ms-icon-144x144.png">
		<meta name="theme-color" content="#ffffff">
		<script   src="https://code.jquery.com/jquery-2.2.4.min.js"   integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44="   crossorigin="anonymous"></script>
		<?php wp_head(); ?>
	</head>
<body <?php body_class(); ?>> 
<?php if( is_home() ): ?>
<aside  class="background"
	<?php 
		echo ' style="background-image: url(';
		echo bloginfo('template_directory');
		echo '/images/portada0' ; 		
		echo rand(1,3);
		echo '.jpg';
		echo ')"';
	?>
></aside>
<?php else : ?>

<aside class="background"
	<?php if (is_category()) {
		echo ' style="background-image: url(';
		echo z_taxonomy_image_url();			
		echo ')"';
	}?>	
>
</aside>

<?php endif ;?>




<section class="wrapper">
	<header class="header">
		<aside class="cta"><a class="cta__link" href="tel:+56229332723">562 2933 2723</a><a class="cta__link" href="tel:+56229814357">562 2981 4357</a></aside>
		<a href="/"><figure class="header__logo"></figure></a>
		<a href="/"><h1 class="header__title">Santelmo</h1></a>
		<h2 class="header__subtitle">Ñuñoa</h2>
		<nav class="header__nav">				 			
							<?php wp_nav_menu( array( 'theme_location' => 'header-menu', 'container' => false ) ); ?>
		</nav>
	</header>	