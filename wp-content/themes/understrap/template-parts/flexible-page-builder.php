<?php if ( have_rows( 'flexible_page_builder' ) ): ?>
	<?php $i = 0; ?>
	<?php while ( have_rows( 'flexible_page_builder' ) ) : the_row();
	$i++; ?>
		<?php if ( get_row_layout() == 'full_width_image' ) : ?>
			<?php include( get_template_directory() . '/components/image-block.php'); ?>
		<?php elseif ( get_row_layout() == 'wysiwyg_block' ) : ?>
			<?php include( get_template_directory() . '/components/wysiwyg-block.php'); ?>
		<?php elseif ( get_row_layout() == 'accordion_block' ) : ?>
			<?php include( get_template_directory() . '/components/accordion-block.php'); ?>
		<?php elseif ( get_row_layout() == 'testimonial_block' ) : ?>
			<?php include( get_template_directory() . '/components/quote-block.php'); ?>
		<?php endif; ?>
	<?php endwhile; ?>
<?php else: ?>
	<?php // no layouts found ?>
<?php endif; ?>