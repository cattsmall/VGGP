<?php
/*
Template Name: events
*/
?>

<?php get_header(); ?>
<div id="container">
   <?php get_sidebar(); ?>
	<div class="description">
		<div class="post">
			<h1 class="posttitle"><a href="<?php the_permalink(); ?>" title="<?php printf( esc_attr__( 'Permalink to %s'), the_title_attribute( 'echo=0' ) ); ?>" rel="bookmark">Past Races</a></h1>
			<p>Missed an epic showdown or revenge match? Catch up on past events here!</p>
			<div class="divider"></div>
		</div>
		<?php query_posts('category_name=past&showposts=10'); ?>
		<?php while (have_posts()) : the_post(); ?>
	    <div class="post">
    		<h1 ><a href="<?php the_permalink(); ?>" title="<?php printf( esc_attr__( 'Permalink to %s'), the_title_attribute( 'echo=0' ) ); ?>" rel="bookmark"><?php the_title(); ?></a></h1>
			<div class="postcontent">
				<?php the_content(); ?>
            	<div class="divider"></div>
            </div>
		</div>
		<?php endwhile;?>
	</div>

<div class="spacer"></div>

<?php get_footer(); ?>