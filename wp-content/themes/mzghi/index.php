<?php get_header(); ?>


<?php
$custom_logo = wp_get_attachment_image( get_theme_mod( 'custom_logo' ), 'full' );
?>




<div class="container">

	<nav class="navbar navbar-light bg-light navbar-expand-lg justify-content-between">

		<a class="navbar-brand" href="<?php echo home_url() ?>">
			<?php echo $custom_logo ?>
		</a>

		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>

		<?php
		wp_nav_menu( array(
			'menu'              => 'Menu_primary',
			'theme_location'  => 'top-menu',
			'depth'           => 2,
			'container'       => 'div',
			'container_id'    => 'navbarNavDropdown',
			'container_class' => 'collapse navbar-collapse',
			'menu_class'      => 'nav navbar-nav mr-auto',
			'fallback_cb'     => 'WP_Bootstrap_Navwalker::fallback',
			'walker'          => new WP_Bootstrap_Navwalker()
		) );
		?>
	</nav>



	<header class="site-header">
		<h1><a href="<?php echo home_url() ?>"><?php bloginfo('name'); ?></a></h1>
		<h5><?php bloginfo('description'); ?></h5>
	</header>

	<?php 
	if(have_posts()) :
		while (have_posts()) : the_post(); ?>

			<article class="post">
				<h2><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h2>
				<?php the_content(); ?>
			</article>

		<?php endwhile;
	else:
		echo "<p>Tidak ada artikel</p>";
	endif;
	?>

	<footer class="site-footer">
		<div class="attrib">Copyright &copy; <?php echo date('Y'); ?> <a href="<?php echo home_url() ?>"><?php bloginfo('name'); ?></a> | Developed by <a href="http://ardianta.github.io">Ardianta</a></div>
	</footer>




	<?php get_footer(); ?>