<?php $image = get_field( 'image' ); 

if(!$image){

	$image = get_sub_field( 'image' );
}

?>
						
<?php get_sub_field( 'caption' ); ?>
<div class="image-block">
<?php if ( $image ) { ?>
	<img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
<?php } ?>
</div>