<?php get_header(); ?>
 
<?php 
  // $wp_query = new WP_Query( array('category_name' => 'unicorns') );
  // var_dump($wp_query);
?>
 
 
<div id="primary" class="content-area">
  <main id="main" class="site-main" role="main">
    <div class="container">
      
      <?php 
     
        if( have_posts() ) :
          while( have_posts() ) : the_post();
            get_template_part( 'template-parts/content', get_post_format() );
          endwhile;
        endif;
 
      ?>
    
    </div>
  </main>
</div>
 

<?php get_footer(); ?>

 