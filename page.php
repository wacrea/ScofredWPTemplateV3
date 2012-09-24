<?php get_header(); ?>

<?php get_sidebar(); ?>

<div id="single">
		<?php if(have_posts()) : ?><?php while(have_posts()) : the_post(); ?>

			<div id="article">
			
				<h1><?php the_title(); ?></h1>
							
				<div id="the_content">
					<?php the_content(); ?>
				</div>
			
			</div>
				
		<?php endwhile; ?>
		<?php endif; ?>
</div>

<?php get_footer(); ?>