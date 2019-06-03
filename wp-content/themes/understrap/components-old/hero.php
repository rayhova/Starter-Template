<?php $hero_type = get_field( 'hero_type' ); ?>

<?php if($hero_type == "image"): ?>
	<?php if ( have_rows( 'slider' ) ) : ?>

		<section class="hero">
			<div id="hero-slide" class="carousel slide" data-ride="">
				<div class="carousel-inner">
					<?php $count = 0; 
					$repeater = get_field( 'slider' );
					$row_count = count($repeater);
					$rand = rand(1,$row_count );?>

					<?php while ( have_rows( 'slider' ) ) : the_row();?>
					<?php $image = get_sub_field( 'image' ); ?>
					<?php $row_number = get_row_index(); ?>
						<div class="carousel-item <?php if ($row_number == $rand) {
	                ?> active <?php }?> slide-<?php echo $row_number; ?>">
						 	<img class="d-block w-100" src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>">
						 	<div class="carousel-caption">
							    <h1><?php the_sub_field( 'headline' ); ?></h1>
							    <p><?php the_sub_field( 'subheadline' ); ?></p>
							    <?php require __DIR__ . '/cta.php'; ?>
						 	</div>
						</div>
					<?php 
					
					endwhile; ?>
				</div><!-- carousel-inner -->
			</div> 
		</section>
		<!-- <script type="text/javascript">
		jQuery(function($){
			$('.carousel').carousel();
			});
		</script> -->
	<?php else : ?>
		<?php // no rows found ?>
	<?php endif; ?>
<?php endif ; ?>

<?php if($hero_type == "pattern"): ?>
	<?php if ( have_rows( 'pattern_hero' ) ) : ?>
		<?php while ( have_rows( 'pattern_hero' ) ) : the_row(); 
			$icon = get_sub_field( 'icon' );?>
			<section class="hero patterned" style="background-color: <?php the_sub_field( 'background_color' ); ?>;">
				<div id="hero-slide" class="carousel slide" data-ride="carousel">
					<div class="carousel-inner">
						<div class="hero-icon"><?php get_template_part('lib/images/icon', $icon.'.svg');?></div>	 	
					 	<div class="carousel-caption">
						    <h2><?php the_sub_field( 'headline' ); ?></h2>
						    <p><?php the_sub_field( 'subheadline' ); ?></p>
						    <?php require __DIR__ . '/cta.php'; ?>
					 	</div>
					 </div>
				</div>
						

			</section>
		<?php endwhile; ?>
	<?php endif; ?>

<?php endif; ?>
