<?php include('includes/_page-start.php'); ?> 

	<h1 class="archive-title">
		<?php _e( 'Search Results for:', 'bonestheme' ); ?>
		<?php echo esc_attr(get_search_query()); ?>
	</h1>

	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

	<?php include('includes/_article-body.php'); ?>

	<?php endwhile; ?>
		<?php bones_page_navi(); ?> 
	<?php else : ?>
		<?php include('includes/_search-notfound.php'); ?> 
	<?php endif; ?>

<?php include('includes/_page-end-sidebar.php'); ?>