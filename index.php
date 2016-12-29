<?php 
	$path = get_bloginfo('template_url');
	$backgrounds = rand(1, 5);
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="UTF-8">
	<title>felipe s almeida &middot; ui designer & art director</title>
	<link rel="shortcut icon" href="<?php echo $path; ?>/assets/img/favicon.ico" type="image/ico" /> 
	<link rel="stylesheet" href="<?php echo $path; ?>/assets/css/main.css">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" />

	<script>
		(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
		(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
		m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
		})(window,document,'script','//www.google-analytics.com/analytics.js','ga');

		ga('create', 'UA-46486022-2', 'auto');
		ga('send', 'pageview');
	</script>
</head>
<?php 
	$args = array (
		'post_type'	=> array( 'background' ),
		'orderby'	=> 'rand'
	);

	$backgrounds = new WP_Query( $args );

	if ( $backgrounds->have_posts() ) :
		while ( $backgrounds->have_posts() ) :
			$backgrounds->the_post();
			$background = wp_get_attachment_image_src( get_post_thumbnail_id(), 'full' ); 
?>
<body style="background: url(<?php echo $background[0]; ?>);">
<?php
		endwhile;
	endif;
	wp_reset_postdata();
?>
	<section class="info">
		<h1 class="title">felipe s almeida</h1>
		<h2 class="sub-title">ui designer & art director</h2>

		<nav class="links">
			<ul>
				<li class="email"><a href="mailto:felipe@felipesalmeida.com.br" target="_blank">e-mail</a></li>
				<!--<li class="behance"><a href="https://www.behance.net/felipesalmeida" target="_blank">behance</a></li>-->
				<li class="twitter"><a href="https://twitter.com/felipesalmeida" target="_blank">twitter</a></li>
				<li class="instagram"><a href="https://instagram.com/felipesalmeida" target="_blank">instagram</a></li>
				<li class="tumblr"><a href="https://felipesalmeida.tumblr.com" target="_blank">tumblr</a></li>
			</ul>
		</nav>

		<a href="tel:13997532202" class="tel">+55 13 99753-2202</a>
	</section>
</body>
</html>