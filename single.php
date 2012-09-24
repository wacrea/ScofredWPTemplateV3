<?php get_header(); ?>

<?php get_sidebar(); ?>

<div id="single">
		<?php if(have_posts()) : ?><?php while(have_posts()) : the_post(); ?>

			<div id="article">
			
				<h1><?php the_title(); ?></h1>
				
				<div id="meta">
					<span style="float:left;margin-right: 20px;"><?php the_time('j F Y') ?></span>		
				
					<span style="float:right; margin-left: 20px;background: yellow;-webkit-border-radius: 3px;-moz-border-radius: 3px;border-radius: 3px;"><?php edit_post_link('Editer', '', ''); ?></span>
				</div>
							
				<div id="the_content" style="text-align: justify;">								
					<?php the_content(); ?>
				</div>
				
				<a href="https://twitter.com/share" class="twitter-share-button" data-via="Scofred_" data-lang="fr">Tweeter</a>
<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src="//platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>

<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_US/all.js#xfbml=1";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>

<div class="fb-like" data-send="true" data-width="450" data-show-faces="false"></div>
			
			</div>
			
			<div id="comments_div">
			<?php comments_template(); ?>
			</div>
				
		<?php endwhile; ?>
		<?php endif; ?>
</div>

<?php get_footer(); ?>