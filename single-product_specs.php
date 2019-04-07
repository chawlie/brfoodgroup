
<?php get_header(); ?>
<?php while (have_posts()) : the_post(); ?>
	<?php
    $product_description = get_field('product_description');
    $product_image = get_field('product_image');
    $ingredient_title = get_field('ingredient_title');
    $ingredients_statement = get_field('ingredients_statement');
    $nutrition_facts_image = get_field('nutrition_facts_image');
    $sidebar_information = get_field('sidebar_information');
    ?>
	<div class="product-specs">
		<div class="row">
			<h1>Product Specifications</h1>
			<hr>
			<section class="section product-specs-main">
				<div class="small-12 large-8 columns" role="main">
					<article <?php post_class() ?> id="post-<?php the_ID(); ?>">
						<header>
							<h2 class="entry-title"><?php the_title(); ?></h2>
						</header>
						<?php do_action('foundationPress_post_before_entry_content'); ?>
						<div class="entry-content">
				        <?php if($product_description !=''): ?>
				        	<?= $product_description ?>
				        <?php endif; ?>
				        <?php if($product_image !=''): ?>
				        	<img src="<?= $product_image['sizes']['large']; ?>">
				        <?php endif; ?>
				        <?php if($ingredient_title !=''): ?>
				            <h3><?= $ingredient_title ?></h3>
				        <?php endif; ?>
				        <?php if($ingredients_statement !=''): ?>
				        	<?= $ingredients_statement ?>
				        <?php endif; ?>
				        <?php if($nutrition_facts_image !=''): ?>
				        	<img src="<?= $nutrition_facts_image['sizes']['large']; ?>">
				        <?php endif; ?>
						</div>
					</article>
				</div>
			</section>
			<?php if($sidebar_information !=''): ?>
				<section class="product-specs-sidebar">
					<div class="small-12 medium-4 columns">
			        	<?= $sidebar_information ?>
					</div>
				</section>
			<?php endif; ?>
		</div>
	</div>
<?php endwhile;?>
<?php get_footer(); ?>
