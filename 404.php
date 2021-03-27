<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package wp_bootstrap
 */

get_header(); ?>

	<section id="primary" class="content-area col-sm-12 col-lg-8">
		<div id="main" class="site-main" role="main">

			<section class="error-404 not-found">
				<header class="page-header">
					<h1 class="page-title"><?php esc_html_e( 'Oops! That page can&rsquo;t be found.', 'wp-bootstrap' ); ?></h1>
				</header>

				<div class="page-content">
					<p><?php esc_html_e( 'It looks like nothing was found at this location. Maybe try one of the links below or a search?', 'wp-bootstrap' ); ?></p>

					<?php
						get_search_form();


					?>

				</div><!-- .page-content -->
			</section><!-- .error-404 -->

		</div>
	</section>

<?php
get_sidebar();
get_footer();
