<?php

/**
 * Template part for displaying results in search pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package natm-v1
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<?php
		the_title(sprintf('<h4 class="entry-title"><a href="%s" rel="bookmark">', esc_url(get_permalink())), '</a></h4>');
		?>
	</header><!-- .entry-header -->

	<div class="entry-content">
		<div class="entry-image">
			<?php natm_v1_post_thumbnail(); ?>
		</div>
		<div class="entry-summary">
			<?php
			$post_type = get_post_type();

			if ($post_type === 'natm_listing') {
				$business_description = get_field('business_description');
				$trimmed = wp_trim_words($business_description, 30);
				printf('<p>%s</p>', $trimmed);
			} else {
				the_excerpt();
			}
			?>
		</div>
	</div><!-- .entry-summary -->
</article><!-- #post-<?php the_ID(); ?> -->
