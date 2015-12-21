<article class="baseline-large" id="post-<?php the_ID(); ?>" <?php post_class('cf'); ?> role="article" itemscope itemprop="blogPost" itemtype="http://schema.org/BlogPosting">

	<header class="article-header entry-header">
		<?php 
		if ( is_front_page() && is_home() ) { // default homepage ?>
			<h1 class="entry-title single-title" itemprop="headline" rel="bookmark"><?php the_title(); ?></h1>

		<?php } elseif ( is_front_page() || is_page_template()) { // static homepage ?>
			<h1 class="entry-title single-title" itemprop="headline" rel="bookmark"><?php the_title(); ?></h1>		

		<?php } elseif ( is_home() ) { // blog page ?>
			<h2 class="entry-title blog-title">
				<a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>">
					<?php the_title(); ?>
				</a>
			</h2>
			<div class="article-meta baseline-medium">
				<?php printf( __( 'Posted', 'bonestheme' ).' %1$s %2$s',
				/* the time the post was published */
				'<time class="updated entry-time" datetime="' . get_the_time('Y-m-d') . '" itemprop="datePublished">' . get_the_time(get_option('date_format')) . '</time>',
				
				/* the author of the post */
				'<span class="by">'.__( 'by', 'bonestheme' ).'</span> <span class="entry-author author" itemprop="author" itemscope itemptype="http://schema.org/Person">' . get_the_author_link( get_the_author_meta( 'ID' ) ) . '</span>'
				); ?>
			</div> 

		<?php } elseif ( is_search()  || is_archive() ) { // Search page ?>
			<h2 class="entry-title search-title ">
				<a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>">
					<?php the_title(); ?>
				</a>
			</h2>
 
		<?php  } else { // Any other page type ?>
			<h1 class="entry-title single-title" itemprop="headline" rel="bookmark"><?php the_title(); ?></h1>		
		<?php } ?>

	</header>



	<div class="entry-content clearfix" itemprop="articleBody">
		<?php 
		if ( is_search() || is_archive()) {  // Only Search results or Archives
			the_post_thumbnail( 'bones-thumb-300' );
			the_excerpt();
		} else {
			the_content();
		} 
		?>
	</div>


	<?php  
	if ( !is_page()  ) { // Blog listing or article ?>
		<footer class="article-footer">
			<?php printf( __( 'Categories', 'bonestheme' ).': %1$s', get_the_category_list(', ') ); ?>
			<?php the_tags( '<p class="tags"><span class="tags-title">' . __( 'Tags:', 'bonestheme' ) . '</span> ', ', ', '</p>' ); ?>
		</footer>
	<?php } ?>

</article>