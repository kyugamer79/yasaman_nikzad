<?php defined('ABSPATH') || exit; ?>



<?php get_header()  ?>




<main class="default-page | container mb-36 text-primary-100">




	<div class="img-wrapper">
		<?= wp_get_attachment_image(get_post_thumbnail_id(), 'full'); 		?>
	</div>
	<div class="clr-fix-8"></div>
	<div class="paragraph">
		<h1>
			<?php the_title() 			?>
		</h1>

		<time datetime="<?php echo get_the_date('c'); ?>" itemprop="datePublished"><?php echo get_the_date(); ?></time>
		<section class="single-post-content">
			<?php the_content()
			?>
		</section>
	</div>
</main>
<?php //get_footer() 
?>