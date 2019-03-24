<?php
/*
Template Name: Products
*/
get_header(); ?>
<div class="row">
	<div class="small-12 large-12 columns" role="main">

	<?php /* Start loop */ ?>
	<?php while (have_posts()) : the_post(); ?>
		<article <?php post_class() ?> id="post-<?php the_ID(); ?>">
			<header>
				<h1 class="entry-title"><?php the_title(); ?></h1>
			</header>
			<div class="entry-content">
				<?php the_content(); ?>
			</div>
			<footer>
				<?php wp_link_pages(array('before' => '<nav id="page-nav"><p>' . __('Pages:', 'FoundationPress'), 'after' => '</p></nav>' )); ?>
				<p><?php the_tags(); ?></p>
			</footer>
			<?php comments_template(); ?>
		</article>
	<?php endwhile; // End the loop ?>

	</div>
</div>
<div class="row">
	<div class="small-12 medium-4 columns">
		<p><strong>Pre-Baked Kolaches</strong></p>
		<ul>
			<li>Pork/Beef Link</li>
			<li>Pork/Beef &amp; Cheese Link</li>
			<li>Pork/Beef, Jalapeño &amp; Cheese Link</li>
			<li>Sausage, Egg &amp; Cheese</li>
			<li>Bacon, Egg &amp; Cheese</li>
			<li>Apple</li>
			<li>Blueberry</li>
			<li>Cherry</li>
			<li>Cream Cheese</li>
			<li>Strawberry &amp; Cream Cheese</li>
		</ul>
        <p><strong>Bagel Dots</strong></p>
        <ul>
            <li>Cinnamon and Raisin Bagel Dot</li>
            <li>Kitchen Sink Bagel Dot</li>
            <li>Jalapeño and Cheese Bagel Dot</li>
            <li>Chocolate Bagel Dot</li>
            <li>Plain Jane Bagel Dot</li>
            <li>Barry Delicious Bagel Dot</li>
        </ul>
	</div>
	<div class="small-12 medium-4 columns">
		<p><strong>Roller Grill Products</strong></p>
		<ul>
			<li>Bacon and Cheddar Sausage Roll</li>
			<li>Blueberry Sausage Roll</li>
			<li>Corn Dog</li>
			<li>French Toast Roll</li>
			<li>Italian Sausage &amp; Herb Roll</li>
			<li>Jalapeño &amp; Cheese Sausage Roll</li>
		</ul>
		<p><strong><span>Muffins</span></strong></p>
		<ul>
			<li>Banana</li>
			<li>Blueberry</li>
			<li>Apply</li>
			<li>Carrot Cake</li>
			<li>Cran Apple with Almonds</li>
			<li>White Chocolate Macadamia</li>
		</ul>
	</div>
	<div class="small-12 medium-4 columns">
		<p><strong>Mini-Pies</strong></p>
		<ul>
			<li>Apple</li>
			<li>Cherry</li>
			<li>Blueberry</li>
			<li>Pecan</li>
			<li>Pumpkin</li>
		</ul>
        <p><strong>Monkey Bread</strong></p>
        <ul>
            <li>Cinnamon &amp; Sugar</li>
            <li>Chocolate &amp; Toffee</li>
        </ul>
	</div>
</div>
<div class="row">
  <div class="large-12 columns">
    <h1>Product Photos</h1>
        <ul class="small-block-grid-1 medium-block-grid-2 large-block-grid-3">
          <li><img alt="Monkey Bread" title="Monkey Bread" src="<?php bloginfo('template_url'); ?>/assets/img/monkey-bread.jpg"></a></li>
          <li><img alt="Bacon Egg Cheese Kolache" title="Bacon Egg Cheese Kolache" src="<?php bloginfo('template_url'); ?>/assets/img/product-bacon.jpg"></a></li>
          <li><img alt="Breakfast Link Kolache" title="Breakfast Link Kolache" src="<?php bloginfo('template_url'); ?>/assets/img/product-breakfastlink.jpg"></a></li>
          <li><img alt="Ham Egg & Cheese Kolache" title="Ham Egg & Cheese Kolache" src="<?php bloginfo('template_url'); ?>/assets/img/product-hameggcheese.jpg"></a></li>
          <li><img alt="Sausage Link Kolache" title="Sausage Link Kolache" src="<?php bloginfo('template_url'); ?>/assets/img/product-sausage-link.jpg"></a></li>
          <li><img alt="Sausage Egg & Cheese Kolache" title="Sausage Egg & Cheese Kolache" src="<?php bloginfo('template_url'); ?>/assets/img/product-sausage-egg.jpg"></a></li>
          <li><img alt="Apple Kolache" title="Apple Kolache" src="<?php bloginfo('template_url'); ?>/assets/img/product-apple.jpg"></li>
          <li><img alt="Strawberry Kolache" title="Strawberry Kolache" src="<?php bloginfo('template_url'); ?>/assets/img/product-strawberry.jpg"></a></li>
          <li><img alt="Cheery Kolache" title="Cheery Kolache" src="<?php bloginfo('template_url'); ?>/assets/img/product-cherry.jpg"></a></li>
          <li><img alt="Cheese Kolache" title="Cheese Kolache" src="<?php bloginfo('template_url'); ?>/assets/img/product-cheese.jpg"></a></li>

          <li><img alt="Cinnamon Bagel Dot" title="Cinnamon Bagel Dot" src="<?php bloginfo('template_url'); ?>/assets/img/product-bdot-cinnamon.jpg"></a></li>
          <li><img alt="Everything Bagel Dot" title="Everything Bagel Dot" src="<?php bloginfo('template_url'); ?>/assets/img/product-bdot-everything.jpg"></a></li>
          <li><img alt="Jalapeño Bagel Dot" title="Jalapeño Bagel Dot" src="<?php bloginfo('template_url'); ?>/assets/img/product-bdot-jalapeno.jpg"></a></li>
          <li><img alt="Nutella Bagel Dot" title="Nutella Bagel Dot" src="<?php bloginfo('template_url'); ?>/assets/img/product-bdot-nutella.jpg"></a></li>
          <li><img alt="Plain Bagel Dot" title="Plain Bagel Dot" src="<?php bloginfo('template_url'); ?>/assets/img/product-bdot-plain.jpg"></a></li>
          <li><img alt="Strawberry Bagel Dot" title="Strawberry Bagel Dot" src="<?php bloginfo('template_url'); ?>/assets/img/product-bdot-strawberry.jpg"></a></li>
        </ul>
     </div>
</div>


<?php get_footer(); ?>
