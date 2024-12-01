<?php 

/*
@package sunsettheme
================================================
-- Audio Post Format
================================================
*/

?>


<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header text-center">
		
		<?php the_title( '<h1 class="entry-title"><a href="'. esc_url( get_permalink() ) .'" rel="bookmark">', '</a></h1>'); ?>
		
		<div class="entry-meta">
			<?php echo sunset_posted_meta(); ?>
		</div>
		
	</header>
	
	<div class="entry-content">
		
		<?php 
      $content = do_shortcode( apply_filters( 'the_content', $post->$post_content ) );
      $embed = get_media_embedded_in_content( $content, array( 'audio', 'iframe' ) );
    ?>
	 
	</div><!-- .entry-content -->
	
	<footer class="entry-footer">
		<?php echo sunset_posted_footer(); ?>
	</footer>
	
</article>