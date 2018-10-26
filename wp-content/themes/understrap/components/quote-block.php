<div class="quote-box">
<?php 
$rows = get_field('quote');
if(!$rows){
$rows = get_sub_field('quote');
}
$rand_row = $rows[ array_rand( $rows ) ];?>
<div class="quote"><?php echo $rand_row['quote']; ?></div>
<div class="author"><?php echo $rand_row['author']; ?></div>
		
	
</div>

