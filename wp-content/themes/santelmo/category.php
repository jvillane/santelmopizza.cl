<?php get_header(); ?>
<section class="menus">
	<h1 class="menus__title"><?php single_cat_title(); ?></h1>	
		<div class="menus__subtitle"><?php echo category_description(); ?></div>
<section class="menus__tag">
<?php if (have_posts ()) : while (have_posts ()) : the_post(); ?>

		<article class="menus__item">
			<ul class="menus__prices">
				<li class="menus__price">$<?php the_field('unidad'); ?></li>
			</ul>
			<h2 class="menus__product"><?php the_title() ?></h2>
			<div class="menus__detail"><?php the_content() ?></div>		
		</article>

<?php endwhile; endif; ?>
</section>

</section>
<?php get_sidebar(); ?>
<?php get_footer(); ?>  