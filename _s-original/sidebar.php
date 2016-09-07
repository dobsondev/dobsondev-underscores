<?php
/**
 * The sidebar containing the main widget area.
 *
 * @package _sSs
 */

if ( ! is_active_sidebar( 'sidebar-1' ) ) {
	return;
}
?>

<div id="sidebar" class="widget-area small-12 large-4 columns" role="complementary">
	<?php dynamic_sidebar( 'sidebar-1' ); ?>
</div><!-- #sidebar -->
