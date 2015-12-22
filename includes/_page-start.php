<?php get_header(); ?>
 
<?php if ( is_active_sidebar( 'sidebar1' ) ) : ?> 
<div class="column-wrapper medium-column-wrapper"> 
	<main id="site-content" class="column column-70 / medium-column-60 / clearfix" role="main" itemscope itemprop="mainContentOfPage" itemtype="http://schema.org/Blog">
 
<?php else : ?>
<main id="site-content" class="clearfix" role="main" itemscope itemprop="mainContentOfPage" itemtype="http://schema.org/Blog">
<?php endif; ?> 