<?php
/*
Template Name: Product Specs
*/
get_header(); ?>
<div class="row">
	<div class="small-12 large-12 columns" role="main">
        <div class="ps-page-title text-center">
            <h1>Product Information</h1>
            <p>Click on a product to view nutritional information and much more.</p>
        </div>
        <div class="product-container">
			<?php
            $paged = ( get_query_var('paged') ) ? get_query_var('paged') : 1;
            $args = array(
                'post_type' => 'product_specs',
                'posts_per_page' => -1,
                'paged' => $paged,
                'orderby' => 'menu_order',
                'order' => 'ASC',
            );
            $my_query = new WP_Query($args); ?>
            <?php /* Start loop */ ?>
            <?php while ($my_query->have_posts()): $my_query->the_post(); ?>
                <?php
                $product_image = get_field('product_image');
                $product_overview = get_field('product_overview');
                ?>
                <div class="small-12 medium-4 columns text-center">
                    <article class="product-card">
                        <header class="card-header">
                            <a href="<?php the_permalink(); ?>" class="btn btn--link"><img class="product-image" src="<?= $product_image['sizes']['large']; ?>"></a>
                            <h4 class="u--color-maroon u--margin-bottom-0 u--margin-top-0"><a class="u--color-maroon" href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
                            <!--<div class="card-date"><small><?php //the_time('F d, Y'); ?> in <?php //the_category(', '); ?></small></div>-->
                        </header>
                        <div class="card-content">
                            <p class="u--font-weight-bold"><?= $product_overview; ?></p>
                            <a href="<?php the_permalink(); ?>" class="btn btn--link">View More Info <i class="fa fa-angle-right"></i></a>
                        </div>
                    </article>
                </div>
            <?php endwhile; ?>
            <?php wp_reset_postdata(); ?>
        </div>
	</div>
</div>

<?php get_footer(); ?>
