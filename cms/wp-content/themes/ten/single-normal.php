<!DOCTYPE html>
<html lang="ja">
<?php get_header(); ?>

<body>

<?php get_template_part('head'); ?>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
		<div class="unit-voice-detail">
			<div class="unit-voice-detail__inner">
					<h1 class="heading__voice-catch-detail"><?php the_title(); ?></h1>
					<span class="def-unit__date"><?php the_time('Y.m.d'); ?></span>
						<?php the_content(); ?>

					<?php endwhile; else : ?>
		<p>
			<?php _e( '記事が見つかりませんでした。' ); ?>
		</p>
		<?php endif; ?>

<div class="btn__wrapper"><a href="/#tentoten" class="btn__def">もどる</a></div>
		</div>
</div>
		<?php get_footer(); ?>
</body>

</html>
