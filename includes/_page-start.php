<?php get_header(); ?>
 
<?php if ( is_active_sidebar( 'sidebar1' ) ) : ?> 
<div class="column-wrapper">
	<main id="site-content" class="column column-66 clearfix" role="main" itemscope itemprop="mainContentOfPage" itemtype="http://schema.org/Blog">

<?php else : ?>
<main id="site-content" class="clearfix" role="main" itemscope itemprop="mainContentOfPage" itemtype="http://schema.org/Blog">
<?php endif; ?>