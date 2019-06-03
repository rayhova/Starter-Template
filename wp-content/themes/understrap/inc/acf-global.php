<?php $logo = get_field( 'logo', 'option' ); ?>
<?php
function logo() {
	$logo = get_field( 'logo_image', 'option' );
	if(!$logo):
		
	else: 
	
	echo '<a href="/"><img id="site-logo" class="style-svg"  src="'.$logo['url'].' " alt="'.$logo['alt'].'" /></a>';
	endif;
}
