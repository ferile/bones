<?php include('includes/_page-start.php'); ?> 

	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
		<?php include('includes/_article-body.php'); ?>
		<?php comments_template(); ?>
	<?php endwhile; endif; ?> 

<?php include('includes/_page-end-sidebar.php'); ?> 