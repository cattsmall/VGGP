<?php
/*
Template Name: Index-LIVE
*/
?>
<?php get_header(); ?>
   <div id="container">
   <?php get_sidebar(); ?>
		<div class="description">
  <center>
		<object type="application/x-shockwave-flash" height="420" width="800" id="live_embed_player_flash" data="http://www.twitch.tv/widgets/live_embed_player.swf?channel=weneedarockman" bgcolor="#000000">
      <param name="allowFullScreen" value="true" />
      <param name="allowScriptAccess" value="always" />
      <param name="allowNetworking" value="all" />
      <param name="movie" value="http://www.twitch.tv/widgets/live_embed_player.swf" />
      <param name="flashvars" value="hostname=www.twitch.tv&channel=weneedarockman&auto_play=true&start_volume=25" />
    </object>
    <a href="http://www.twitch.tv/weneedarockman" class="trk" style="padding:2px 0px 4px; display:block; width:345px; font-weight:normal; font-size:10px; text-decoration:underline; text-align:center;">Watch live video from weneedarockman on www.twitch.tv</a>
<br>
<br>
		<iframe frameborder="0" scrolling="no" id="chat_embed" src="http://twitch.tv/chat/embed?channel=weneedarockman&amp;popout_chat=true" height="400" width="800"></iframe>

</center>



		
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
			