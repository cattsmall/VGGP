<?php
/*
Template Name: Index-REPLAY
*/
?>
<?php get_header(); ?>
   <div id="container">
   <?php get_sidebar(); ?>
		<div class="description">
        

		<iframe width="800" height="450" src="http://www.youtube.com/embed/IaK7tvsGNvs" frameborder="0" allowfullscreen></iframe>



			<!--<object bgcolor='#000000' data='http://www.twitch.tv/widgets/archive_embed_player.swf' height='350' id='gamevid' type='application/x-shockwave-flash' width='825'>
				<param name='movie' value='http://www.twitch.tv/widgets/archive_embed_player.swf'>
				<param name='allowScriptAccess' value='always'>
				<param name='allowNetworking' value='all'>
				<param name='allowFullScreen' value='true'>
				<param name='flashvars' value='title=Video+Game+Grand+Prix%3A+Megaman+X+-+Pokezel+Vs+Xlom&archive_id=308713960&auto_play=false&channel=videogamegp&start_volume=25'>
			</object>

			<br>
			<a href="http://www.twitch.tv/videogamegp#r=-rid-&amp;s=em" class="trk" style="padding:2px 0px 4px; display:block; width: 825px; font-weight:normal; font-size:10px; text-align:center;">Watch live video from videogamegp on TwitchTV</a> -->

			

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
			<div class="post">
            <h1 class="posttitle"><a href="<?php the_permalink(); ?>" title="<?php printf( esc_attr__( 'Permalink to %s'), the_title_attribute( 'echo=0' ) ); ?>" rel="bookmark"><?php the_title(); ?></a></h1>
<div class="postcontent">
			<?php the_content(); ?>
            <div class="divider"></div>
		</div>
<?php endwhile; else: ?>
<p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
<?php endif; ?>
</div>
<div class="spacer"></div>
</div>
<?php get_footer(); ?>

			