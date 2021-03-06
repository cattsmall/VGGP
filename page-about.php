<?php
/*
Template Name: About
*/
?>

<?php get_header(); ?>
<div id="container">
	<?php get_sidebar(); ?>
	<div class="description">
		<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
		<article class="post">
        	<h1 class="posttitle"><a href="<?php the_permalink(); ?>" title="<?php printf( esc_attr__( 'Permalink to %s'), the_title_attribute( 'echo=0' ) ); ?>" rel="bookmark"><?php the_title(); ?></a></h1>
			<div class="postcontent">
				<?php the_content(); ?>
			</div>
			<?php endwhile; else: ?>
			<p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
		</article>
		<?php endif; ?>
      <div class="spacer"></div>
	</div>
</div>

<?php get_footer(); ?>