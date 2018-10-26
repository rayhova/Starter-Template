<?php if ( !have_rows( 'cta' ) ):
$cta_text = get_field( 'cta_text' );
$cta_link = get_field( 'page_link' );
if(!$cta_text){
	$cta_text = get_sub_field( 'cta_text' );
	$cta_link = get_sub_field( 'page_link' );
} ?>
<a href="<?php echo $cta_link ?>" class="cta-button"><?php echo $cta_text ?></a>



<?php elseif ( have_rows( 'cta' ) ) : ?>
	<?php while ( have_rows( 'cta' ) ) : the_row(); ?>
		<?php $cta_text = get_sub_field( 'cta_text' );
		if($cta_text): ?> 
			<a href="<?php the_sub_field( 'page_link' ); ?>" class="cta-button"><?php echo $cta_text ?></a>
		<?php endif; ?>
		
	<?php 

	endwhile;
 endif; ?>