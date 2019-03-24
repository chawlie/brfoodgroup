<?php
/*
Template Name: Home Page
*/
get_header(); ?>
<div class="hero-slider">
	<div class="single-item">
		<div><img src="<?php bloginfo('template_url'); ?>/assets/img/hero-01.jpg"></div>
		<div><img src="<?php bloginfo('template_url'); ?>/assets/img/hero-02.jpg"></div>
		<div><img src="<?php bloginfo('template_url'); ?>/assets/img/hero-03.jpg"></div>
		<div><img src="<?php bloginfo('template_url'); ?>/assets/img/hero-04.jpg"></div>
	</div>
	<div class="hero-text">
		<div class="row">
			<div class="small-12 medium-10 push-1 columns text-center">
				<h1>Our Passion Is Your Profit.</h1>
			</div>
		</div>
	</div>
</div>
<div class="welcome">
	<div class="row">
		<div class="small-12 medium-5 columns">
			<img src="<?php bloginfo('template_url'); ?>/assets/img/rawkolache.jpg">
		</div>
		<div class="welcome-text">
			<div class="small-12 medium-7 columns">
				<h2>Welcome to The BR Food Group</h2>
				<p>When you combine experts in baking, professionals in research and development, skilled customer service reps and savvy food brokers, what you’re left with are the raw ingredients for success.</p>
				<a href="<?php echo home_url( '/about/' ); ?>"><span class="button">Learn More About Us</span></a>
			</div>
		</div>
	</div>
</div>
<div class="features">
	<div class="row">
		<div class="small-12 medium-4 columns text-center">
			<a href="<?php echo home_url( '/clients/' ); ?>">
				<section class="home-feature">
					<img class="icon" src="<?php bloginfo('template_url'); ?>/assets/img/magnify.svg">
					<img src="<?php bloginfo('template_url'); ?>/assets/img/packaging.jpg">
					<span class="button">Our Client List</span>
				</section>
			</a>
		</div>
		<div class="small-12 medium-4 columns text-center">
			<a href="<?php echo home_url( '/products/' ); ?>">
				<section class="home-feature">
					<img class="icon" src="<?php bloginfo('template_url'); ?>/assets/img/bread.svg">
					<img src="<?php bloginfo('template_url'); ?>/assets/img/sausage-egg.jpg">
					<span class="button">Our Products</span>
				</section>
			</a>
		</div>
		<div class="small-12 medium-4 columns text-center">
			<a href="<?php echo home_url( '/contact/' ); ?>">
				<section class="home-feature">
				<img class="icon" src="<?php bloginfo('template_url'); ?>/assets/img/envelope.svg">
				<img src="<?php bloginfo('template_url'); ?>/assets/img/temperature.jpg">
				<span class="button">Contact Us</span>
				</section>
			</a>
		</div>
	</div>
</div>
<?php get_footer(); ?>
