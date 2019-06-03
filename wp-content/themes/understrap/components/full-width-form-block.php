<?php $title = get_field( 'title' ); 
$copy = get_field( 'copy' );
$form = get_field( 'form' );
$background_color = get_field( 'background_color' );

if(!$title){

$title = get_sub_field( 'title' );
$copy = get_sub_field( 'copy' );
$form = get_sub_field( 'form' );
$background_color = get_sub_field( 'background_color' );
}

?>

<section class="form <?php echo $background_color ?>">
	<div class="container">
		<h2><?php echo $title ?></h2>
		<p><?php echo $copy ?></p>
		<?php gravity_form($form, false, false, false, '', true, $form); ?>
	</div>
</section>