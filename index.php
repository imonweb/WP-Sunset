<?php get_header(); ?>
 
<pre>
 <?php 
  $wp_query = new WP_Query( array('category_name' => 'unicorns') );

  // var_dump($wp_query);

?>
</pre>

<?php

 echo '<h1>HELLO WORLD!</h1>';

?>
 

<?php get_footer(); ?>

 