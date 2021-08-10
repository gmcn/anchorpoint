<?php
/**
 * Template part for displaying posts
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Starting_Theme
 */

?>


<article class="post-page">
<div class="container post-page__container">
<div class="news-list post-page__filter">
<header class="news-list__header wow fadeIn">


	<div class="post-sb__date">
	<a class="tag" href="/latest-news">News</a>
	<span class="delimiter">/</span>
	<span><?php echo the_date('d M, Y'); ?></span>
	</div>

	<h1 class="news-list__heading post-page__heading heading">
		<?php echo the_title(); ?>
	</h1>

</header>
</div>
<div class="post-page__main-pic wow fadeIn">

<?php echo get_the_post_thumbnail(); ?>

</div>

<div class="post-page__wrapper">

<section class="post-sb post-sb--main">

	<?php echo the_content(); ?>


<!-- <div class="post-sb__content-gallery">

	<div class="post-sb__content-gallery-item col-md-6">
		<img src="img/post/item-1.jpg" alt="">
		<div class="post-sb__pic-caption">Images by <a href="#" target="_blank">@tim_arterbury</a>
		</div>
	</div>

	<div class="post-sb__content-gallery-item col-md-6">
		<img src="img/post/item-2.jpg" alt="">
		<div class="post-sb__pic-caption">Images by <a href="#" target="_blank">@tim_arterbury</a>
		</div>
	</div>

</div> -->



<div class="post-sb__bottom wow fadeIn">
	<div class="post-sb__tags">

		<?php
		$posttags = get_the_tags(); ?>
		<?php if ($posttags) : ?>

			<?php
		  foreach($posttags as $tag) {
		    echo '<a href="/tag/' . $tag->name .'/" class="post-sb__tag-item" target="_blank">' . $tag->name . '</a>';
		  } ?>

		<?php endif; ?>

		</div>


	<div class="post-sb__socials">
	<p>Share on</p>
		<ul class="social post-sb__social">
			<li class="social__item">
				<a class="social__link fb" href="https://www.facebook.com/sharer/sharer.php?u=<?php echo the_permalink(); ?>&t=<?php echo the_title() ?>" onclick="javascript:window.open(this.href, '', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=300,width=600');return false;" target="_blank" title="Share on Facebook">
					<svg id="facebook" viewBox="0 0 64 64">
					<path d="M47.9 25.6H40V15h6.5c1.1 0 2-.9 2-2V2c0-1.1-.9-2-2-2h-7.6C30.7 0 25 5.9 25 14.4v11.2h-9c-1.5 0-2.7 1.2-2.7 2.8v7.4c0 1.5 1.2 2.7 2.7 2.7h9v22.9c0 1.5 1.2 2.7 2.7 2.7h9.8c.6 0 1.2-.3 1.6-.7.5-.5.7-1.2.7-1.8V38.4h6.8c1.3 0 2.4-.9 2.6-2.1v-.2l1.4-7.1c.2-.8 0-1.6-.6-2.4-.4-.5-1.2-.9-2.1-1z"></path>
					</svg>
				<span class="visually-hidden">Facebook</span>
				</a>
			</li>
			<li class="social__item">
					<a class="social__link tw" href="https://twitter.com/share?url=<?php echo the_permalink(); ?>&text=<?php echo the_title() ?>" onclick="javascript:window.open(this.href, '', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=300,width=600');return false;" target="_blank" title="Share on Twitter">
					<svg id="twitter" viewBox="0 0 64 64">
						<path d="M20.1 58.1c24.2 0 37.4-20 37.4-37.4 0-.5 0-1.1-.1-1.7 2.6-1.9 4.8-4.2 6.5-6.8-2.4 1.1-4.9 1.8-7.6 2.1 2.7-1.6 4.8-4.2 5.8-7.3-2.6 1.5-5.3 2.6-8.4 3.2C51.3 7.6 47.9 6 44.1 6c-7.3 0-13.2 5.9-13.2 13.2 0 1 .1 2 .3 3-10.6-.6-20.3-5.8-26.8-13.8-1.1 2-1.8 4.2-1.8 6.6 0 4.6 2.3 8.6 5.9 10.9-2.2-.1-4.2-.7-5.9-1.6v.1c0 6.3 4.5 11.7 10.5 12.9-1.1.3-2.3.5-3.4.5-.9 0-1.7-.1-2.5-.3 1.7 5.2 6.5 9 12.3 9.1-4.5 3.5-10.2 5.6-16.3 5.6-1.2.1-2.2 0-3.2-.1 5.7 3.8 12.7 6 20.1 6"></path>
				</svg>
				<span class="visually-hidden">Twitter</span>
				</a>
			</li>
			<li class="social__item">
				<a class="social__link" href="https://www.linkedin.com/shareArticle?mini=true&url=<?php echo the_title() ?> - <?php echo the_permalink(); ?>" target="_blank">

					<svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 18 18">
						<path id="Path_42" data-name="Path 42" d="M16.625-16H1.375a1.352,1.352,0,0,0-1,.375A1.2,1.2,0,0,0,0-14.75V.75a1.2,1.2,0,0,0,.375.875,1.352,1.352,0,0,0,1,.375h15.25a1.352,1.352,0,0,0,1-.375A1.2,1.2,0,0,0,18,.75v-15.5a1.2,1.2,0,0,0-.375-.875A1.352,1.352,0,0,0,16.625-16ZM5.375-.625H2.625V-9.25h2.75ZM4-10.375a1.362,1.362,0,0,1-1.062-.5A1.664,1.664,0,0,1,2.5-12a1.447,1.447,0,0,1,.438-1.062A1.447,1.447,0,0,1,4-13.5a1.447,1.447,0,0,1,1.063.438A1.447,1.447,0,0,1,5.5-12a1.664,1.664,0,0,1-.437,1.125A1.362,1.362,0,0,1,4-10.375ZM15.375-.625h-2.75v-4.25a6.663,6.663,0,0,0-.125-1.5,1.292,1.292,0,0,0-1.25-.75A1.342,1.342,0,0,0,10-6.5a3.127,3.127,0,0,0-.375,1.625v4.25H7V-9.25H9.625v1.125a2.506,2.506,0,0,1,.938-.937A2.848,2.848,0,0,1,12.125-9.5,2.808,2.808,0,0,1,14.75-8.25a5.068,5.068,0,0,1,.625,2.875Z" transform="translate(0 16)" fill="#666"/>
					</svg>



					<span class="visually-hidden">Linkedin</span>
				</a>
			</li>
			<li class="social__item">
				<a class="social__link wa" href="https://wa.me/?text=<?php echo the_title() ?> - <?php echo the_permalink(); ?>" data-action="share/whatsapp/share" target="_blank">

					<svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 18 18">
					  <path id="whatsapp" d="M15.206,2.556A8.719,8.719,0,0,0,1.487,13.074L.25,17.591l4.621-1.212A8.708,8.708,0,0,0,9.037,17.44h0A8.721,8.721,0,0,0,15.206,2.556ZM9.04,15.968h0a7.236,7.236,0,0,1-3.688-1.01L5.085,14.8l-2.742.719.732-2.674L2.9,12.573a7.245,7.245,0,1,1,6.138,3.4Zm3.974-5.426c-.218-.109-1.289-.636-1.488-.709s-.345-.109-.49.109-.563.709-.69.854-.254.164-.472.055A5.949,5.949,0,0,1,8.123,9.77,6.57,6.57,0,0,1,6.911,8.261c-.127-.218,0-.325.1-.445a6.161,6.161,0,0,0,.544-.745.4.4,0,0,0-.018-.382c-.054-.109-.49-1.181-.671-1.617s-.356-.367-.49-.374-.272-.008-.417-.008a.8.8,0,0,0-.581.273A2.443,2.443,0,0,0,4.611,6.78,4.237,4.237,0,0,0,5.5,9.034a9.709,9.709,0,0,0,3.721,3.289,12.467,12.467,0,0,0,1.242.459,2.986,2.986,0,0,0,1.372.086,2.244,2.244,0,0,0,1.47-1.036,1.82,1.82,0,0,0,.127-1.036C13.377,10.705,13.232,10.651,13.014,10.542Zm0,0" transform="translate(-0.25)" fill-rule="evenodd"/>
					</svg>


					<span class="visually-hidden">Whatsapp</span>
				</a>
			</li>
		</ul>
	</div>
</div>

<section class="post-sb__related wow fadeIn">
	<div class="post-sb__related-title">Related Posts</div>
	<div class="post-sb__related-wrapper">

		<?php
		$args = array(
		  'post_type' => 'post',
			'posts_per_page' => 3,
		);
		$query = new WP_Query( $args );
		if ( $query->have_posts() ) : ?>


		<?php while ( $query->have_posts() ) : $query->the_post();

		$date = get_the_date('M d, Y');

		?>

			<div class="post-related col-sm-4">
			<div class="post-related__pic">
			<?php echo get_the_post_thumbnail(); ?>
			</div>
			<div class="post-related__date"><?php echo $date ?></div>
			<a class="post-related__title" href="<?php echo the_permalink(); ?>" target="_blank"><?php the_title(); ?></a>
		</div>


		<?php endwhile; ?>
	<?php endif; ?>
	<?php wp_reset_postdata(); ?>


	</div>
</section>



</section>
</div>
</div>
</article>
