<?php
/**
 * The Template for displaying all single posts.
 *
 * @package WordPress
 * @subpackage Twenty_Thirteen
 * @since Twenty Thirteen 1.0
 */

get_header(); ?>

<div id="primary" class="row-fluid content-area">
	<div id="content" class="site-content clearfix" role="main">

		<div class="span3">
			<?=get_sidebar('left')?>
		</div>
		<div class="span9">
		<?php /* The loop */ ?>
		<?php while ( have_posts() ) : the_post(); ?>
			<?php get_template_part( 'content', get_post_format() ); ?>
		<?php endwhile; ?>
		</div>

	</div><!-- #content -->
</div><!-- #primary -->

<?php get_footer(); ?>