<?php
/**
 * Hero template part for the front page.
 */
?>

<section class="hero" aria-labelledby="hero-title">
	<div class="container">
		<div class="hero__content">
			<p class="hero__eyebrow">RETEGO Framework</p>
			<h1 id="hero-title">Řídíme vstup, vjezd a provoz objektů.</h1>
			<p class="hero__subtitle">Řešení tam, kde běžná nestačí.</p>
			<p class="hero__description">Navrhujeme a propojujeme přístupové systémy, závory, turnikety, kamerové systémy, čtení registračních značek a automatizaci vjezdů do jednoho funkčního celku.</p>
			<div class="hero__actions">
				<a class="button button--primary" href="#contact">Nezávazná konzultace</a>
				<a class="button button--secondary" href="#realizace">Naše realizace</a>
			</div>
		</div>
		<div class="hero__media" aria-label="Projektová fotografie">
			<img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/hero-project.jpg' ); ?>" alt="Projektový detail řešení RETEGO" />
		</div>
	</div>
</section>
