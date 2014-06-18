<?php get_header(); ?>

	<main role="main" class="row">
		<!-- section -->
		<section class="col-md-8">

			<h1><?php _e( 'Latest Posts', 'html5blank' ); ?></h1>

			<?php get_template_part('loop'); ?>

			<?php get_template_part('pagination'); ?>

		</section>
		<!-- /section -->

		<?php get_sidebar(); ?>
	</main>



<?php get_footer(); ?>
