<?php include('includes/_page-start-no-sidebar.php'); ?> 
 
<article id="post-not-found" class="hentry clearfix">

	<header class="article-header">
		<h1><?php _e( 'Article Not Found', 'bonestheme' ); ?></h1>
	</header>

	<div class="entry-content">
		<p><?php _e( 'The article you were looking for was not found, but maybe try looking again!', 'bonestheme' ); ?></p>
	</div>

	<section class="search">
		<p><?php get_search_form(); ?></p>
	</section>

	<footer class="article-footer">
		<p><?php _e( 'This is the 404.php template.', 'bonestheme' ); ?></p>
	</footer>

</article>

<?php include('includes/_page-end-no-sidebar.php'); ?>