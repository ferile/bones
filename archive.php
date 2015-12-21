<?php include('includes/_page-start.php'); ?> 

	<?php
	the_archive_title( '<h1 class="page-title">', '</h1>' );
	the_archive_description( '<div class="taxonomy-description">', '</div>' );
	?>
	
	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

	<article id="post-<?php the_ID(); ?>" <?php post_class( 'clearfix' ); ?> role="article">

		<header class="entry-header article-header">

			<h2 class="entry-title">
				<a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>">
					<?php the_title(); ?>
				</a>
			</h2>
			<p class="byline entry-meta vcard">
				<?php printf( __( 'Posted', 'bonestheme' ).' %1$s %2$s',
						     /* the time the post was published */
						     '<time class="updated entry-time" datetime="' . get_the_time('Y-m-d') . '" itemprop="datePublished">' . get_the_time(get_option('date_format')) . '</time>',
								/* the author of the post */
								'<span class="by">'.__('by', 'bonestheme').'</span> <span class="entry-author author" itemprop="author" itemscope itemptype="http://schema.org/Person">' . get_the_author_link( get_the_author_meta( 'ID' ) ) . '</span>'
						); ?>
			</p>

		</header>

		<div class="entry-content clearfix">

			<?php the_post_thumbnail( 'bones-thumb-300' ); ?>

			<?php the_excerpt(); ?>

		</div>

		<footer class="article-footer">

		</footer>

	</article>

	<?php endwhile; ?>

			<?php bones_page_navi(); ?>

	<?php else : ?>
		<?php include('includes/_article-notfound.php'); ?> 
	<?php endif; ?>

<?php include('includes/_page-end-sidebar.php'); ?>