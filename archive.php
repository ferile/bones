<?php include('includes/_page-start.php'); ?> 

	<?php
		the_archive_title( '<h1 class="page-title">', '</h1>' );
		the_archive_description( '<div class="taxonomy-description">', '</div>' );
	?>
	
	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
		<?php include('includes/_article-body.php'); ?>
	<?php endwhile; ?>
		<?php bones_page_navi(); ?>
	<?php else : ?>
		<?php include('includes/_article-notfound.php'); ?> 
	<?php endif; ?>

<?php include('includes/_page-end-sidebar.php'); ?>