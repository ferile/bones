<article id="post-<?php the_ID(); ?>" <?php post_class('cf'); ?> role="article" itemscope itemprop="blogPost" itemtype="http://schema.org/BlogPosting">

	<header class="article-header entry-header">
		<?php 
		if ( is_front_page() && is_home() ) { // default homepage ?>
			<h1 class="entry-title single-title" itemprop="headline" rel="bookmark"><?php the_title(); ?></h1>


		<?php } elseif ( is_front_page() ) { // static homepage ?>
			<h1 class="entry-title single-title" itemprop="headline" rel="bookmark"><?php the_title(); ?></h1>		


		<?php } elseif ( is_home() ) { // blog page ?>
			<h2 class="search-title entry-title">
				<a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>">
					<?php the_title(); ?>
				</a>
			</h2>		
			<div class="byline entry-meta vcard">
				<?php printf( __( 'Posted', 'bonestheme' ).' %1$s %2$s',
				/* the time the post was published */
				'<time class="updated entry-time" datetime="' . get_the_time('Y-m-d') . '" itemprop="datePublished">' . get_the_time(get_option('date_format')) . '</time>',
				/* the author of the post */
				'<span class="by">'.__( 'by', 'bonestheme' ).'</span> <span class="entry-author author" itemprop="author" itemscope itemptype="http://schema.org/Person">' . get_the_author_link( get_the_author_meta( 'ID' ) ) . '</span>'
				); ?>
			</div> 


		<?php } else { //everything else, search results, archives, etc ?>
			<h2 class="search-title entry-title">
				<a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>">
					<?php the_title(); ?>
				</a>
			</h2>		
		<?php } ?>

	</header>



	<div class="entry-content clearfix" itemprop="articleBody">
		<?php the_content(); ?>
	</div>


	<?php 
	if ( is_front_page() && is_home() ) { // default homepage ?>
		
	<?php } elseif ( is_front_page() ) { // static homepage ?>
		
	<?php } elseif ( is_home() ) { // blog page ?>
		<footer class="article-footer">
			<?php printf( __( 'filed under', 'bonestheme' ).': %1$s', get_the_category_list(', ') ); ?>
			<?php the_tags( '<p class="tags"><span class="tags-title">' . __( 'Tags:', 'bonestheme' ) . '</span> ', ', ', '</p>' ); ?>
		</footer> <?php // end article footer ?>

	<?php } else { //everything else, search results, archives, etc ?>

	<?php } ?>



</article> <?php // end article ?>