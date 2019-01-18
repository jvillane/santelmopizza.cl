<?php get_header(); ?>
<section class="menus">
	<ul class="prices">
		<li class="prices__item menus__price-individual">Individual</li>
		<li class="prices__item menus__price-mediana">Mediana</li>
		<li class="prices__item menus__price-familiar">Familiar</li>
	</ul>
	<h1 class="menus__title"><?php single_cat_title(); ?></h1>
	<div class="menus__subtitle"><?php echo category_description('2'); ?></div>

<?php query_posts( 'tag=clasica&cat=2&order=ASC' ); ?>
<section class="menus__tag">
<?php while ( have_posts() ) : the_post(); ?>
	<article class="menus__item">
		<ul class="menus__prices">
			<li class="menus__price menus__price-individual">$<?php the_field('individual'); ?></li>
			<li class="menus__price menus__price-mediana">$<?php the_field('mediana'); ?></li>
			<li class="menus__price menus__price-familiar">$<?php the_field('familiar'); ?></li>
		</ul>
		<h2 class="menus__product"><?php the_title() ?></h2>
		<div class="menus__detail"><?php the_content() ?></div>		
	</article>
<?php endwhile; wp_reset_query();?>
</section>

<?php query_posts( 'tag=especial&cat=2&order=ASC' ); ?>
<section class="menus__tag">
<?php while ( have_posts() ) : the_post(); ?>
	<article class="menus__item">
		<ul class="menus__prices">
			<li class="menus__price menus__price-individual">$<?php the_field('individual'); ?></li>
			<li class="menus__price menus__price-mediana">$<?php the_field('mediana'); ?></li>
			<li class="menus__price menus__price-familiar">$<?php the_field('familiar'); ?></li>
		</ul>
		<h2 class="menus__product"><?php the_title() ?></h2>
		<div class="menus__detail"><?php the_content() ?></div>		
	</article>
<?php endwhile; wp_reset_query();?>
</section>

<?php query_posts( 'tag=agregado&cat=2&order=ASC' ); ?>
<section class="menus__tag menus__tag-add">
<?php while ( have_posts() ) : the_post(); ?>
	<article class="menus__item">
		<ul class="menus__prices">
			<li class="menus__price menus__price-individual">$<?php the_field('individual'); ?></li>
			<li class="menus__price menus__price-mediana">$<?php the_field('mediana'); ?></li>
			<li class="menus__price menus__price-familiar">$<?php the_field('familiar'); ?></li>
		</ul>
		<h2 class="menus__product"><?php the_title() ?></h2>
		<div class="menus__detail"><?php the_content() ?></div>		
		</article>
<?php endwhile; wp_reset_query();?>
</section>

</section>
<?php get_sidebar(); ?>
<?php get_footer(); ?>  