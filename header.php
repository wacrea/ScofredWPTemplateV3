<!DOCTYPE HTML>
<html>
<head>
 
	<title><?php bloginfo('name') ?> <?php if ( is_single() ) ?> <?php wp_title(); ?> - William AGAY</title>
 
	<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
	<meta name="generator" content="WordPress <?php bloginfo('version'); ?>" />
	<!-- leave this for stats -->
	<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="screen" />
	<link rel="alternate" type="application/rss+xml" title="RSS 2.0" href="http://feeds.feedburner.com/Scofred" />
	<link rel="alternate" type="text/xml" title="RSS .92" href="http://feeds.feedburner.com/Scofred" />
	<link rel="alternate" type="application/atom+xml" title="Atom 0.3" href="<?php bloginfo('atom_url'); ?>" />
	<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" /><?php wp_head(); ?>
	
	<link rel="icon" type="image/png" href="<?php echo bloginfo('template_url'); ?>/images/favicon.png" />
	
	<script src="<?php echo bloginfo('template_url'); ?>/js/jquery.min.js" type="text/javascript"></script>
	<script src="<?php bloginfo('template_url'); ?>/js/opa.js" type="text/javascript"></script>
 
	<?php //wp_get_archives('type=monthly&format=link'); ?>
	<?php //comments_popup_script(); // off by default ?>
	<?php wp_head(); ?>
	
	<script type="text/javascript">

	  var _gaq = _gaq || [];
	  _gaq.push(['_setAccount', 'UA-15509303-12']);
	  _gaq.push(['_trackPageview']);

	  (function() {
		var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
		ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
		var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
	  })();

	</script>
	
	<link href='http://fonts.googleapis.com/css?family=Oswald:300,400' rel='stylesheet' type='text/css'>
 
</head>
<body>

<div class="barre">
	<div class="lang">
		<nav>
			<a href="<?php echo bloginfo('url'); ?>/category/fr"><?php echo lang('Français', 'French'); ?></a>
			<a class="all" href="<?php echo bloginfo('url'); ?>"><?php echo lang('Tout', 'All'); ?></a>
			<a href="<?php echo bloginfo('url'); ?>/category/en"><?php echo lang('Anglais','English'); ?></a>
		</nav>
	</div>
</div>

<a href="http://github.com/WilliamAgay">
	<img alt="Fork me" src="<?php echo bloginfo('template_url'); ?>/images/forkme.png" style="position:absolute;top:0;right:0;" />
</a>

<header>
	<div id="header">
	
		<a href="<?php echo bloginfo('url'); ?>">
			<div id="logo">
			<p class="cigle">S</p>
			<p class="nom">www.<span class="scofred">Scofred</span>.com</p>
			</div>
		</a>
			
		<div id="menu">
			<nav>
				<ul>
					<li><a href="<?php echo bloginfo('url'); ?>" title="<?php echo lang('Accueil du blog', 'Blog home'); ?>"><?php echo lang('Accueil', 'Home'); ?></a></li>
					<li><a href="http://www.williamagay.fr/creations" title="<?php echo lang('Venez voir mes créations !', 'Come see my creations !'); ?>"><?php echo lang('Mes créations', 'My creations'); ?></a></li>
					<li><a href="http://www.williamagay.fr/podcast" title="<?php echo lang('Je suis assez actif en podcast','I\'m pretty active in podcast'); ?>"><?php echo lang('Podcast','Podcast'); ?></a></li>
					<li><a href="http://www.williamagay.fr/contact" title="<?php echo lang('Contactez-moi !','Contact me !'); ?>"><?php echo lang('Contact','Contact'); ?></a></li>
				</ul>
			</nav>
		</div>
		
		<div class="recherche">
			<form role="search" method="get" id="searchform" action="<?php echo home_url( '/' ); ?>">
					<input style="margin-left: 25px;margin-top: 20px;" type="text" name="s" id="s" placeholder="<?php echo lang('Recherchez','Search'); ?>" />
					<input type="submit" id="searchsubmit" value="Go" />
			</form>
		</div>
		
		<div class="social">
			<a href="http://www.twitter.com/scofred_"><img height="50" alt="Twitter" title="Sur Twitter" src="<?php echo bloginfo('template_url'); ?>/images/twitter.png"></a>
			<a href="<?php echo bloginfo('rss_url'); ?>"><img height="50" alt="Flux RSS" title="Flux RSS" src="<?php echo bloginfo('template_url'); ?>/images/rss.png"></a>
			<a href="http://www.flickr.com/photos/scofred/"><img height="50" alt="Flickr" title="Sur Flickr" src="<?php echo bloginfo('template_url'); ?>/images/flickr.png"></a>
		</div>
		
	</div>
</header>

<div id="page">