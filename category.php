<?php get_header(); ?>

<?php get_sidebar(); ?>

<div id="articles">

	<h1><?php single_cat_title(); ?></h1>
				
		<?php if(have_posts()) : ?><?php while(have_posts()) : the_post(); ?>
		
		<a href="<?php the_permalink(); ?>" title='<?php echo lang('Lire','Read'); ?> : "<?php the_title(); ?>"'>
		
			<?php if(has_post_thumbnail()): ?>
				
				<?php $url = wp_get_attachment_url( get_post_thumbnail_id($post->ID) ); ?>
				
				<div class="article" style="background: url(<?php echo $url ?>) top center no-repeat;">
				
				<div class="meta_thumb">
					<h2><?php the_title(); ?></h2>
				</div>
				
			<?php else: ?>
				
				<div class="article">
			
				<img alt="Scofred" class="nothumb" src="<?php echo bloginfo('template_url'); ?>/images/logo.png" height="150" />
				
				<div class="meta_nothumb">
					<h2><?php the_title(); ?></h2>
				</div>
			<?php endif; ?>
		
		</div>
		</a>
				
		<?php endwhile; ?>
		<?php endif; ?>
		
		<div id="pagination">
		<?php wp_pagenavi(); ?>
		</div>
</div>

<?php get_footer(); ?>