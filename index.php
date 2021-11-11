<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Starting_Theme
 */

get_header(); ?>


<div class="container services__container">
	<h1 class="service-page__heading heading wow fadeIn"> <?php echo get_the_title('22'); ?> </h1>
	<div class="service-page__text wow fadeIn">

	<?php
		$post = get_post(22); // specific post
		$the_content = apply_filters('the_content', $post->post_content);
		echo $the_content;
	?>

	</div>
</div>

	<?php include(locate_template("template-parts/news/featured.php")); ?>

	<?php include(locate_template("template-parts/news/loop.php")); ?>

<?php
// get_sidebar();
get_footer();
