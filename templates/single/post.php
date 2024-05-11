<?php defined('ABSPATH') || exit; ?>



<?php get_header()  ?>


<main>
	<section class="default-page | mb-36 text-primary-100">




		<div class="img-wrapper">
			<?= wp_get_attachment_image(get_post_thumbnail_id(), 'full'); 		?>
		</div>
		<div class="clr-fix-8"></div>
		<div class="paragraph">
			<h1>
				<?php the_title() ?>
			</h1>
			<div class="text-secondary-400">
				<time datetime="2024-04-29T12:18:26+03:30" itemprop="datePublished">2024/04/29</time>
				<!-- <time datetime="<?php //echo get_the_date('c'); 
										?>" itemprop="datePublished"><?php //echo get_the_date(); 
																		?></time> -->
			</div>
			<section class="single-post-content">
				<?php the_content()
				?>
			</section>
		</div>
	</section>


	<div class="comments-wrapper mb-284 ">
		<?php comments_template(); ?>
	</div>


</main>
<?php get_footer() ?>