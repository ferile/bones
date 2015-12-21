<?php if ( is_active_sidebar( 'sidebar1' ) ) : ?> 
	</main>
	<?php get_sidebar(); ?>
	</div> <?php // END .column-wrapper ?>
 
<?php else : ?>
	</main>
<?php endif; ?>

<?php get_footer(); ?>