<?php $image = get_field( 'image' );  ?>
<?php $caption = get_field( 'caption' ); ?>
<?php $url = get_field( 'url' ); ?>
<?php $height = get_field( 'height' ); ?>
<?php $image_position = get_sub_field( 'image_position' );  ?>
<?php if(!$image){

	$image = get_sub_field( 'image' );
	$caption = get_sub_field( 'caption' );
	$url = get_sub_field( 'url' );
	$new_window = get_sub_field( 'open_in_new_window');
	$height = get_sub_field( 'height' );
	$image_position = get_sub_field( 'image_position' ); 
}

?>
						
<?php get_sub_field( 'caption' ); ?>
<div class="image-block">
	<?php if ( $caption ) { ?>
	<div class="caption-box"><?php echo $caption ?></div>
	
<?php } ?>
<?php if ( $url ) { ?>
<a href="<?php echo $url ?>" <?php if ( $new_window == 1 ) { ?>target="_blank"<?php } ?> ><?php } ?>
	<img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>"  style="<?php if(!$height){} else{?> height: <?php echo $height; ?>px;<?php } ?> object-position: <?php echo $image_position; ?>; "/>
<?php if ( $url ) { ?></a><?php } ?>

</div>