<?php get_header(); ?>

<div id="main-area">
	<div class="container">
		<div id="content-area" class="clearfix">
			<div id="left-area">
				<?php get_template_part('loop', 'page'); ?>
				<?php if ( 'on' == et_get_option( 'nimble_show_pagescomments', 'false' ) ) comments_template( '', true ); ?>
			</div> <!-- end #left-area -->	
			
			<?php get_sidebar(); ?>
		</div> <!-- end #content-area -->
	</div> <!-- end .container -->
</div> <!-- end #main-area -->
	
<?php get_footer(); ?>