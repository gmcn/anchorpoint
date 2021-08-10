<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Starting_Theme
 */

get_header(); ?>


<article>

<?php if (!is_front_page()): ?>
	<header class="page__header">
		<div class="container">

		<?php if (get_field('sub_heading')): ?>
			<h2 class="service-page__subheading wow fadeIn"><?php echo get_field('sub_heading'); ?></h2>
		<?php endif; ?>

		<h1 class="service-page__heading heading wow fadeIn"><?php echo the_title(); ?></h1>
			<div class="service-page__text wow fadeIn">
			<?php echo the_content(); ?>
			</div>
		</div>
	</header>
<?php endif; ?>

<?php if (is_page('gallery')): ?>

	<?php include(locate_template("template-parts/flexi-content/gallery.php")); ?>

<?php endif; ?>



<?php if (is_page('services')): ?>

	<?php include(locate_template("template-parts/content-services.php")); ?>

<?php endif; ?>

<?php include(locate_template("template-parts/flexi-content.php")); ?>

</article>


<?php
// get_sidebar();
get_footer();
