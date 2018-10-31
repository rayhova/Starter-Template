<?php $logo = get_field( 'logo', 'option' ); ?>

<?php

function logo() {
	$logo = get_field( 'logo', 'option' );
	if(!$logo):
		 if ( is_front_page() && is_home() ) : ?>

			<h1 class="navbar-brand mb-0"><a rel="home" href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" itemprop="url"><?php bloginfo( 'name' ); ?></a></h1>

		<?php else : ?>

			<a class="navbar-brand" rel="home" href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" itemprop="url"><?php bloginfo( 'name' ); ?></a>

		<?php endif; 
	else: 
	
	echo '<a href="/"><img id="site-logo"  src="'.$logo['url'].' " alt="'.$logo['alt'].'" /></a>';
	endif;
}
