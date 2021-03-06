<?php
/**
 * Template Name: Blank without Container
 */

get_header();
?>
    <section id="primary" class="content-area">
        <div id="main" class="site-main" role="main">
            <?php
                while ( have_posts() ) : the_post();
                    get_template_part( 'template-parts/content', 'notitle' );
                endwhile;
            ?>
        </div>
    </section>

<?php
get_footer();
