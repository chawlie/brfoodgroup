
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
			<div>
				<div class="small-12 columns">
					<h1 class="page-title">Product Specifications</h1>
					<hr>
				</div>
			</div>
		</div>
		<div class="product-specs-main">
			<div class="row">
				<div class="small-12 large-8 columns" role="main">
					<article <?php post_class() ?> id="post-<?php the_ID(); ?>">
						<header>
							<h2 class="product-title"><?php the_title(); ?></h2>
						</header>
						<?php do_action('foundationPress_post_before_entry_content'); ?>
						<div class="entry-content">
					        <?php if($product_description !=''): ?>
					        	<p class="lead"><?= $product_description ?></p>
					        <?php endif; ?>
					        <?php if($product_image !=''): ?>
					        	<img class="product-image" src="<?= $product_image['sizes']['large']; ?>">
					        <?php endif; ?>
					        <?php if($ingredient_title !=''): ?>
					            <h3 class="ingredient-title"><?= $ingredient_title ?></h3>
					        <?php endif; ?>
					        <?php if($ingredients_statement !=''): ?>
					        	<?= $ingredients_statement ?>
					        <?php endif; ?>
					        <?php if($nutrition_facts_image !=''): ?>
					        	<div class="nut-facts-container">
						        	<div class="row">
							        	<div class="small-12 medium-6 columns">
							        		<div class="nutrition-facts-image">
									        	<a href="<?= $nutrition_facts_image['sizes']['large']; ?>" target="_blank"><img src="<?= $nutrition_facts_image['sizes']['large']; ?>"></a>
									        </div>
									    </div>
								        <div class="small-12 medium-6 columns">
									        <div class="nutrition-facts-cta">
									        	<h4>Nutrition Facts</h4>
									        	<a href="<?= $nutrition_facts_image['sizes']['large']; ?>" target="_blank" class="button">View Nutrition Facts</a>
									        </div>
								        </div>
									</div>
								</div>
					        <?php endif; ?>
						</div>
					</article>
				</div>
				<?php if($sidebar_information !=''): ?>
					<div class="product-specs-sidebar">
						<div class="small-12 medium-4 columns">
				        	<?= $sidebar_information ?>
						</div>
					</div>
				<?php endif; ?>
			</div>
		</div>
	</div>
<?php endwhile;?>
<?php get_footer(); ?>
