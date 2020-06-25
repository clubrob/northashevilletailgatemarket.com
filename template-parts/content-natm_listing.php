<?php

/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package natm-v1
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<?php
		if (is_singular()) :
			the_title('<h1 class="entry-title">', '</h1>');
		else :
			the_title('<h2 class="entry-title"><a href="' . esc_url(get_permalink()) . '" rel="bookmark">', '</a></h2>');
		endif;
		?>
		<?php
		$business_category = get_the_category();
		?>
		<h3><?php echo $business_category[0]->name; ?></h3>
	</header><!-- .entry-header -->
	<div class="entry-content wp-block-group">
		<?php natm_v1_post_thumbnail(); ?>
		<?php
		the_content(sprintf(
			wp_kses(
				/* translators: %s: Name of current post. Only visible to screen readers */
				__('Continue reading<span class="screen-reader-text"> "%s"</span>', 'natm-v1'),
				array(
					'span' => array(
						'class' => array(),
					),
				)
			),
			get_the_title()
		));
		?>

		<div class="natm_listing-description my-l">
			<?php the_field('business_description'); ?>
		</div>
		<?php
		$business_address = get_field('business_address');
		$business_website = get_field('business_website');
		$business_phone = get_field('business_phone');

		if ($business_address || $business_website ||	$business_phone) :
		?>
		<h4>Contact Information</h4>
		<?php
		endif;
		if ($business_address) :
		?>
			<div class="natm_listing-address">
				<p>
					<b>Address:</b>
					<?php echo $business_address; ?>
				</p>
			</div>
		<?php
		endif;

		if ($business_website) :
		?>
			<div class="natm_listing-website">
				<p>
					<b>Visit Website:</b> <a href="<?php echo $business_website; ?>"><?php echo $business_website; ?></a>
				</p>
			</div>
		<?php
		endif;

		if ($business_phone) :
		?>
			<div class="natm_listing-phone">
				<p>
					<b>Phone:</b> <?php echo $business_phone; ?>
				</p>
			</div>
		<?php endif; ?>
	</div><!-- .entry-content -->

	<footer class="entry-footer">
		<?php natm_v1_entry_footer(); ?>
	</footer><!-- .entry-footer -->
</article><!-- #post-<?php the_ID(); ?> -->
