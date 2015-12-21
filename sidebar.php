<?php if ( is_active_sidebar( 'sidebar1' ) ) : ?>
	<div id="sidebar" class="sidebar column column-34 clearfix" role="complementary">
		<h2 class="visually-hidden">Sidebar</h2>
		<?php dynamic_sidebar( 'sidebar1' ); ?>
	</div>
<?php endif; ?>