<?php
/**
 * Front page template for RETEGO Framework.
 */

get_header();
?>

<main id="main" class="site-main front-page" tabindex="-1">
	<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
		<?php get_template_part( 'template-parts/front-page/hero' ); ?>
		<?php get_template_part( 'template-parts/front-page/customer-problems' ); ?>
		<?php get_template_part( 'template-parts/front-page/solutions' ); ?>
		<?php get_template_part( 'template-parts/front-page/technology-partners' ); ?>
		<?php get_template_part( 'template-parts/front-page/featured-projects' ); ?>
		<?php get_template_part( 'template-parts/front-page/industries' ); ?>
		<?php get_template_part( 'template-parts/front-page/why-retego' ); ?>
		<?php get_template_part( 'template-parts/front-page/faq' ); ?>
		<?php get_template_part( 'template-parts/front-page/contact-cta' ); ?>
	<?php endwhile; endif; ?>
</main>

<?php get_footer(); ?>
