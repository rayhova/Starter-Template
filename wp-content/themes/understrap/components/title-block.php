<?php $title = get_field( 'title' ); 
$sub_header = get_field( 'sub_header' );
$background_color = get_field( 'background_color' );
$cta_text = get_field( 'cta_text' );
$page_link = get_field( 'page_link' );
$outside_url = get_field( 'outside_url' );
if(!$title){

	$title = get_sub_field( 'title' );
	$sub_header = get_sub_field( 'sub_header' );
	$background_color = get_sub_field( 'background_color' );
	$cta_text = get_sub_field( 'cta_text' );
	$page_link = get_sub_field( 'page_link' );
	$outside_url = get_sub_field( 'outside_url' );
}

?>
						

<div class="title-block <?php echo $background_color ?>">
	<div class="title-box">
		<hr align="left">
		<div class="title"><?php echo $title ?>	</div>
		<div class="sub_header"><?php echo $sub_header ?></div>
		<a class="btn bg-secondary" href="<?php if(!$outside_url): echo $page_link; else: echo $outside_url; endif;?>"><?php echo $cta_text ?></a>
	</div>
</div>