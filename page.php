<?php get_header(); ?>
   <div id="container">
   <?php get_sidebar(); ?>
		<div class="description">
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
			<article class="post">
            <h1 class="posttitle"><a href="<?php the_permalink(); ?>" title="<?php printf( esc_attr__( 'Permalink to %s'), the_title_attribute( 'echo=0' ) ); ?>" rel="bookmark"><?php the_title(); ?></a></h1>
<div class="postcontent">
			<?php the_content(); ?>
            <div class="divider"></div>
		</article>
<?php endwhile; else: ?>
<p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
<?php endif; ?>
</div>
</div>
</div><div class="spacer"></div>

<?php get_footer(); ?>