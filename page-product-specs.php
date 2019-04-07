<?php
/*
Template Name: Product Specs
*/
get_header(); ?>
<div class="row">
	<div class="small-12 large-12 columns" role="main">

	<?php /* Start loop */ ?>
	<?php while (have_posts()) : the_post(); ?>
		<?php
                $paged = ( get_query_var('paged') ) ? get_query_var('paged') : 1;
                $args = array(
                    'post_type' => 'product_specs',
                    'posts_per_page' => -1,
                    'paged' => $paged,
                    'orderby' => 'menu_order',
                    'order' => 'ASC',
                );
                $total_pages = "";
                $my_query = new WP_Query($args); ?>
                <?php while ($my_query->have_posts()): $my_query->the_post(); ?>
                    <?php
                    $total_pages = $my_query->max_num_pages;
                    $excerpt = get_the_excerpt();
                    $excerpt = substr($excerpt, 0, 100) . '...';
                    ?>
                    <div class="grid__col-xs-12 grid__col-md-6 grid__col-lg-3 sp--post">
                        <article class="card">
                            <?php
                            // if (has_post_thumbnail()):
                            //     echo '<a href="'.the_permalink().'">'.the_post_thumbnail('post-thumb-detail').'</a>';
                            // endif;
                            ?>
                            <header class="card-header">
                                <h4 class="u--color-maroon u--margin-bottom-0 u--margin-top-0"><a class="u--color-maroon" href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
                                <!--<div class="card-date"><small><?php //the_time('F d, Y'); ?> in <?php //the_category(', '); ?></small></div>-->
                            </header>
                            <div class="card-content">
                                <p class="u--font-weight-bold"><?= $excerpt; ?></p>
                                <a href="<?php the_permalink(); ?>" class="btn btn--link">Read More <i class="fa fa-long-arrow-right" aria-hidden="true"></i></a>
                            </div>
                        </article>
                    </div>
                <?php endwhile; ?>
                <?php wp_reset_postdata(); ?>
	<?php endwhile; // End the loop ?>

	</div>
</div>

<?php get_footer(); ?>
