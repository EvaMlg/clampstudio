<?php

/**
 * Single Product Image
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/single-product/product-image.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see     https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce\Templates
 * @version 3.5.1
 */

defined('ABSPATH') || exit;

// Note: `wc_get_gallery_image_html` was added in WC 3.3.2 and did not exist prior. This check protects against theme overrides being used on older versions of WC.
if (!function_exists('wc_get_gallery_image_html')) {
	return;
}

global $product;

$columns           = apply_filters('woocommerce_product_thumbnails_columns', 4);
$post_thumbnail_id = $product->get_image_id();
$wrapper_classes   = apply_filters(
	'woocommerce_single_product_image_gallery_classes',
	array(
		'woocommerce-product-gallery',
		'woocommerce-product-gallery--' . ($post_thumbnail_id ? 'with-images' : 'without-images'),
		'woocommerce-product-gallery--columns-' . absint($columns),
		'images',
	)
);
?>


<!-- Slider -->



<!-- Swiper -->
<div class="left-fixed">
	<div class="swiper mySwiper left-swiper dressedSwiper" id="dressedSwiper">
		<div class="swiper-wrapper left-wrapper">
			<div class="swiper-slide">
				<?php if (get_field('image_slider_1')) : ?>
					<img src="<?php the_field('image_slider_1'); ?>" />
				<?php endif; ?>
			</div>
			<div class="swiper-slide">
				<?php if (get_field('image_slider_2')) : ?>
					<img src="<?php the_field('image_slider_2'); ?>" />
				<?php endif; ?>
			</div>
			<div class="swiper-slide">
				<?php if (get_field('image_slider_3')) : ?>
					<img src="<?php the_field('image_slider_3'); ?>" />
				<?php endif; ?>
			</div>
			<div class="swiper-slide">
				<?php if (get_field('image_slider_4')) : ?>
					<img src="<?php the_field('image_slider_4'); ?>" />
				<?php endif; ?>
			</div>
			<div class="swiper-slide">
				<?php if (get_field('image_slider_5')) : ?>
					<img src="<?php the_field('image_slider_5'); ?>" />
				<?php endif; ?>
			</div>
			<div class="swiper-slide">
				<?php if (get_field('image_slider_6')) : ?>
					<img src="<?php the_field('image_slider_6'); ?>" />
				<?php endif; ?>
			</div>
			<div class="swiper-slide">
				<?php if (get_field('image_slider_7')) : ?>
					<img src="<?php the_field('image_slider_7'); ?>" />
				<?php endif; ?>
			</div>
			<div class="swiper-slide">
				<?php if (get_field('image_slider_8')) : ?>
					<img src="<?php the_field('image_slider_8'); ?>" />
				<?php endif; ?>
			</div>
			<div class="swiper-slide">
				<?php if (get_field('image_slider_9')) : ?>
					<img src="<?php the_field('image_slider_9'); ?>" />
				<?php endif; ?>
			</div>
			<div class="swiper-slide">
				<?php if (get_field('image_slider_10')) : ?>
					<img src="<?php the_field('image_slider_10'); ?>" />
				<?php endif; ?>
			</div>


		</div>
		<div class="swiper-button-next"></div>
		<div class="swiper-button-prev"></div>
	</div>

	<div class="nakedSwiper" id="nakedSwiper">
		<div class="swiper-wrapper">
			<div class="swiper-slide">
				<?php if (get_field('image_slider_naked_1')) : ?>
					<img src="<?php the_field('image_slider_naked_1'); ?>" />
				<?php endif; ?>
			</div>
			<div class="swiper-slide">
				<?php if (get_field('image_slider_naked_2')) : ?>
					<img src="<?php the_field('image_slider_naked_2'); ?>" />
				<?php endif; ?>
			</div>
			<div class="swiper-slide">
				<?php if (get_field('image_slider_naked_3')) : ?>
					<img src="<?php the_field('image_slider_naked_3'); ?>" />
				<?php endif; ?>
			</div>
			<div class="swiper-slide">
				<?php if (get_field('image_slider_naked_4')) : ?>
					<img src="<?php the_field('image_slider_naked_4'); ?>" />
				<?php endif; ?>
			</div>
			<div class="swiper-slide">
				<?php if (get_field('image_slider_naked_5')) : ?>
					<img src="<?php the_field('image_slider_naked_5'); ?>" />
				<?php endif; ?>
			</div>
			<div class="swiper-slide">
				<?php if (get_field('image_slider_naked_6')) : ?>
					<img src="<?php the_field('image_slider_naked_6'); ?>" />
				<?php endif; ?>
			</div>


		</div>
		<div class="swiper-button-next"><img src="/wp-content/themes/newtheme/src/assets/img/DROITE.png')"></div>
		<div class="swiper-button-prev"><img src="/wp-content/themes/newtheme/src/assets/img/GAUCHE.png')"></div>
	</div>
</div>




<!-- Scroll de droite, produit détourés -->

<div class="right-scroll">
	<div class="<?php echo esc_attr(implode(' ', array_map('sanitize_html_class', $wrapper_classes))); ?>" data-columns="<?php echo esc_attr($columns); ?>" style="opacity: 0; transition: opacity .25s ease-in-out;">
		<figure class="woocommerce-product-gallery__wrapper">
			<?php
			if ($post_thumbnail_id) {
				$html = wc_get_gallery_image_html($post_thumbnail_id, true);
			} else {
				$html  = '<div class="swiper-slide">';
				$html .= sprintf('<img src="%s" alt="%s" class="swiper-slide" />', esc_url(wc_placeholder_img_src('woocommerce_single')), esc_html__('Awaiting product image', 'woocommerce'));
				$html .= '</div>';
			}

			echo apply_filters('woocommerce_single_product_image_thumbnail_html', $html, $post_thumbnail_id); // phpcs:disable WordPress.XSS.EscapeOutput.OutputNotEscaped

			do_action('woocommerce_product_thumbnails');
			?>
		</figure>
	</div>
</div>