<?php 
  /*  
    This is the template for the header
    @package sunsettheme
  */
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <title><?php bloginfo('name'); wp_title(); ?></title>
  <meta name="description" content="<?php bloginfo('description'); ?>">
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="profile" href="http://gmpg.org/xfn/11">
  <?php if(is_singular() && pings_open(get_queried_object())) : ?>
    <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">
  <?php endif; ?>
  <?php wp_head(); ?>
   
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<div class="container">
		
		<div class="row">
			<div class="col-xs-12">
				
				<header class="header-container background-image text-center" style="background-image: url(<?php header_image(); ?>);">
					
					<div class="header-content table">
						<div class="table-cell">
							<h1 class="site-title sunset-icon">
								<span class="sunset-logo"></span>
								<span class="hide"><?php bloginfo( 'name' ); ?></span>
							</h1>
							<h2 class="site-description"><?php bloginfo( 'description' ); ?></h2>
						</div><!-- .table-cell -->
					</div><!-- .header-content -->
					
					<div class="nav-container">
            <nav class="navbar navbar-sunset">
              <?php 
                wp_nav_menu( array(
                  'theme_location' => 'primary',
                  'container' => false,
                  'menu_class' => 'nav navbar-nav'
                ) );
              ?>
            </nav>
          </div><!-- .nav-container -->

          <nav class="navbar navbar-expand-md navbar-light bg-light">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">LOGO</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#main-menu" aria-controls="main-menu" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        
        <div class="collapse navbar-collapse" id="main-menu">
           <!-- <div class="navbar-nav"> -->
            <?php
           
            wp_nav_menu(array(
                'theme_location' => 'main-menu',
                'container_class' => 'collapse navbar-collapse',
                'container_id'    => 'navbarNavDropdown',
                'menu_class'      => 'navbar-nav ms-auto',
                'fallback_cb'     => '',
                'menu_id'         => 'main-menu',
                'depth'           => 2
                // 'walker' => new bootstrap_5_wp_nav_menu_walker()
            ));
          
 
            ?>
           
           
        </div>
    </div>
          </nav>
					
				</header><!-- .header-container -->
				
			</div><!-- .col-xs-12 -->
		</div><!-- .row -->
		
	</div><!-- .container-fluid -->