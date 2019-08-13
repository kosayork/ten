<!DOCTYPE html>
<html lang="ja">
<?php get_header(); ?>

<body>

<?php get_template_part('head'); ?>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
		<div class="unit-voice-detail">
			<div class="unit-voice-detail__inner">
					<h1 class="heading__voice-catch-detail"><?php the_field('voice_read'); ?></h1>
					<span class="voice-unit__name"><?php the_field('voice_name'); ?></span>
					<span class="voice-unit__menu"><?php the_field('voice_menu'); ?></span>
						<?php the_content(); ?>

					<?php endwhile; else : ?>
		<p>
			<?php _e( '記事が見つかりませんでした。' ); ?>
		</p>
		<?php endif; ?>

<div class="btn__wrapper"><a href="/#voice" class="btn__def">もどる</a></div>
		</div>
</div>
		<?php get_footer(); ?>
</body>

</html>
