<?php include('includes/_page-start.php'); ?> 

	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
		<?php include('includes/_article-body.php'); ?>
	<?php endwhile; ?>

	<?php else : ?>
		<?php include('includes/_article-notfound.php'); ?> 
	<?php endif; ?>

<?php include('includes/_page-end-sidebar.php'); ?>
