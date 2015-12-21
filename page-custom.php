<?php
/*
	Template Name: Custom Page Example
*/
?>

<?php include('includes/_page-start.php'); ?> 

	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
		<?php include('includes/_article-body.php'); ?>
		<?php comments_template(); ?>
	<?php endwhile; else : ?> 
		<?php include('includes/_article-notfound.php'); ?> 
	<?php endif; ?>

<?php include('includes/_page-end-sidebar.php'); ?>