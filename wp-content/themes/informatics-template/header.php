<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WP_Bootstrap_4
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
	<link rel="stylesheet" href="/wp-content/themes/informatics-template/informatics.css">
	<script src="https://cdn.jsdelivr.net/npm/vue"></script>
	<script src="/wp-content/themes/informatics-template/assets/js/informatics.js"></script>
	<link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,700" rel="stylesheet">
	<script src="https://unpkg.com/scrollreveal@4.0.0/dist/scrollreveal.min.js"></script>
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<!-- Load Facebook SDK for JavaScript -->
	<div id="fb-root"></div>
	<script>(function(d, s, id) {
	  var js, fjs = d.getElementsByTagName(s)[0];
	  if (d.getElementById(id)) return;
	  js = d.createElement(s); js.id = id;
	  js.src = 'https://connect.facebook.net/en_US/sdk/xfbml.customerchat.js#xfbml=1&version=v2.12&autoLogAppEvents=1';
	  fjs.parentNode.insertBefore(js, fjs);
	}(document, 'script', 'facebook-jssdk'));</script>	
	
	<!-- Your customer chat code -->
	<div class="fb-customerchat"
	  attribution=setup_tool
	  page_id="114527305251290">
	</div>
	
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'wp-bootstrap-4' ); ?></a>
	
	<header id="masthead" class="fixed-top site-header <?php if ( get_theme_mod( 'sticky_header', 0 ) ) : echo 'sticky-top'; endif; ?>">
		<div id="social-medias-top" class="container-fluid" style="background-color: #e5e5e5; color:#c2c2c2;">
			<div class="row">
                <div class="col-md-6 d-flex align-items-center justify-content-center justify-content-md-start">
                    <p class="p-1 m-1"><i class="fas fa-share-alt"></i> Our Social</p>
                    <a class="btn btn-link p-1 m-1" href="https://facebook.com/informaticsph" target="_blank" style="color:#3B5998;"><i class="fab fa-facebook-f"></i></a>
                    <a class="btn btn-link p-1 m-1" href="https://twitter.com/informaticsph" target="_blank" style="color: #00acee;"><i class="fab fa-twitter"></i></a>
                    <a class="btn btn-link p-1 m-1" href="https://youtube.com/informaticsph" target="_blank" style="color: #FF0000"><i class="fab fa-youtube"></i></a>
                </div>
                <div class="col-md-6 text-md-right text-center">
                    <p class="p-1 m-1">
                        <a href="mailto:info.marketing@informatics.com.ph"><i class="oi oi-envelope-closed"></i> info.marketing@informatics.com.ph</a>
                    </p>
                </div>
            </div>
		</div>	
		<nav id="site-navigation" class="main-navigation navbar navbar-expand-lg">
			<?php if( get_theme_mod( 'header_within_container', 0 ) ) : ?><div class="container"><?php endif; ?>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target=".navbar-collapse" aria-controls="primary-menu-wrap" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
				</button>
				<?php the_custom_logo(); ?>

				<div class="site-branding-text">
					<?php
						if ( is_front_page() && is_home() ) : ?>
		                    <h1 class="site-title h3 mb-0"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home" class="navbar-brand mb-0"><?php bloginfo( 'name' ); ?></a></h1>
		                <?php else : ?>
		                    <h2 class="site-title h3 mb-0"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home" class="navbar-brand mb-0"><?php bloginfo( 'name' ); ?></a></h2>
		                <?php
						endif;

						if ( get_theme_mod( 'show_site_description', 1 ) ) {
		                    $description = get_bloginfo( 'description', 'display' );
		                    if ( $description || is_customize_preview() ) : ?>
		                        <p class="site-description"><?php echo esc_html( $description ); ?></p>
		                    <?php
		                    endif;
		                }
					?>
				</div>
					<div id="search-icon-wrap-1" style="margin-right:-20px;"><i id="search-icon-1" class="fa fa-search"></i></div>
					<button class="navbar-toggler" type="button" data-toggle="collapse" data-target=".social-media-collapse" aria-controls="social-media-dropdown" aria-expanded="false" aria-label="Toggle navigation">
						<div id="dots-icon-wrap" class="mr-1"><i class="fa fa-ellipsis-h" style="color:#007bff"></i></div>
					</button>		
					 <!-- <div id="dots-icon-wrap" class="pr-3"><i class="fa fa-ellipsis-h" style="color:#007bff"></i></div> -->
					 <div id="social-media-dropdown" class="collapse social-media-collapse">
						<ul id="social-media-menu" class="navbar-nav ml-auto">
							<li class="nav-item menu-item menu-item-type-custom menu-item-object-custom menu-item-home">
								<a href="#" class="nav-link"><i class='fab fa-facebook mr-2'></i>Facebook</a>
							</li>
							<li class="nav-item menu-item menu-item-type-custom menu-item-object-custom menu-item-home">
								<a href="#" class="nav-link"><i class='fab fa-twitter-square mr-2'></i>Twitter</a>
							</li>
							<li class="nav-item menu-item menu-item-type-custom menu-item-object-custom menu-item-home">
								<a href="#" class="nav-link"><i class='fab fa-youtube-square mr-2'></i>Youtube</a>
							</li>
							<li class="nav-item menu-item menu-item-type-custom menu-item-object-custom menu-item-home">
								<a href="#" class="nav-link"><i class='oi oi-envelope-closed'></i> info.marketing@informatics.com.ph</a>
							</li>
						</ul>
					 </div>
				<?php
					wp_nav_menu( array(
						'theme_location'  => 'menu-1',
						'menu_id'         => 'primary-menu',
						'container'       => 'div',
						'container_class' => 'collapse navbar-collapse',
						'container_id'    => 'primary-menu-wrap',
						'menu_class'      => 'navbar-nav ml-auto',
			            'fallback_cb'     => '__return_false',
			            'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',
			            'depth'           => 2,
			            'walker'          => new WP_bootstrap_4_walker_nav_menu()
					) );
				?>
				<div id="search-icon-wrap-2" class="pl-2"><i id="search-icon-2" class="fa fa-search"></i></div>
			<?php if( get_theme_mod( 'header_within_container', 0 ) ) : ?></div><!-- /.container --><?php endif; ?>
		</nav><!-- #site-navigation -->
		<nav id="site-sub-navigation" class="main-navigation navbar navbar-expand-lg navbar-default">
			<?php
					wp_nav_menu( array(
						'theme_location'  => 'menu-2',
						'menu_id'         => 'secondary-menu',
						'container'       => 'div',
						'container_class' => 'collapse navbar-collapse',
						'container_id'    => 'secondary-menu-wrap',
						'menu_class'      => 'navbar-nav ml-auto',
			            'fallback_cb'     => '__return_false',
			            'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',
			            'depth'           => 2,
			            'walker'          => new WP_bootstrap_4_walker_nav_menu()
					) );
				?>
		<?php if( get_theme_mod( 'header_within_container', 0 ) ) : ?></div><!-- /.container --><?php endif; ?>
		</nav>
		<div class="white">
		<?php get_search_form(true);?>
	    </div>
	</header><!-- #masthead -->
	
	<div id="content" class="site-content">
	<?php 
 		include 'template-parts/head-carousel.php';
	?>
		<?php if ( function_exists('yoast_breadcrumb')  && !is_home()) {?>
	<div class="section-container-holder p-2" style="background-color: #e5e5e5; color: #c2c2c2;">
		<div class="section-container">
			<div class="content">
				<div class="container-fluid">
					<div class="col-md-12 d-flex align-items-center justify-content-center">
						<?php 
	                     if(get_the_title()=="Bachelor of Science in Accounting Information System"){
							 echo "<h3 class='m-0 p-0 float-left flex-grow-1'>" . "Bachelor's Degreee Program" . "</h3>";
						 }else{
							echo "<h3 class='m-0 p-0 float-left flex-grow-1'>" . get_the_title() . "</h3>";	 
						 }
						yoast_breadcrumb('<p id="breadcrumbs"class="m-0 p-0 text-right flex-grow-1">','</p>');
						?>
					</div>
				</div>
			</div>
		</div>
	</div>
	<?php } ?> 
	