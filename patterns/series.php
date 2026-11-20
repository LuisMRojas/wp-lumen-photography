<?php
/**
 * Title: Series destacadas
 * Slug: lumen/series
 * Categories: lumen, gallery
 * Keywords: series, proyectos, portafolio
 * Viewport width: 1400
 */

$lumen_series = array(
	array( 'seed' => 'lumen-series-coast', 'num' => '01', 'title' => 'Mar de invierno', 'meta' => 'Patagonia · 2025 · 24 fotografías' ),
	array( 'seed' => 'lumen-series-city', 'num' => '02', 'title' => 'Ciudad en pausa', 'meta' => 'Ciudad de México · 2024 · 36 fotografías' ),
	array( 'seed' => 'lumen-series-faces', 'num' => '03', 'title' => 'Oficios que resisten', 'meta' => 'Retrato documental · 2023 · 18 fotografías' ),
);
?>
<!-- wp:group {"anchor":"series","align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|50","bottom":"var:preset|spacing|40"}}},"layout":{"type":"constrained","contentSize":"1320px"}} -->
<div id="series" class="wp-block-group alignfull" style="padding-top:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--40)"><!-- wp:columns {"verticalAlignment":"bottom"} -->
<div class="wp-block-columns are-vertically-aligned-bottom"><!-- wp:column {"verticalAlignment":"bottom"} -->
<div class="wp-block-column is-vertically-aligned-bottom"><!-- wp:heading {"className":"is-style-lumen-eyebrow"} -->
<h2 class="wp-block-heading is-style-lumen-eyebrow">Series</h2>
<!-- /wp:heading -->

<!-- wp:heading {"level":3,"fontSize":"x-large"} -->
<h3 class="wp-block-heading has-x-large-font-size">Proyectos de largo aliento</h3>
<!-- /wp:heading --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"bottom"} -->
<div class="wp-block-column is-vertically-aligned-bottom"><!-- wp:paragraph {"textColor":"muted"} -->
<p class="has-muted-color has-text-color">Cada serie nace de semanas —a veces años— de volver al mismo lugar hasta que la gente deja de notar la cámara.</p>
<!-- /wp:paragraph --></div>
<!-- /wp:column --></div>
<!-- /wp:columns -->

<!-- wp:columns {"align":"wide","className":"lumen-series","style":{"spacing":{"margin":{"top":"var:preset|spacing|40"},"blockGap":{"left":"var:preset|spacing|30"}}}} -->
<div class="wp-block-columns alignwide lumen-series" style="margin-top:var(--wp--preset--spacing--40)"><?php foreach ( $lumen_series as $i => $s ) : ?><!-- wp:column<?php echo 1 === $i ? ' {"style":{"spacing":{"padding":{"top":"var:preset|spacing|40"}}}}' : ''; ?> -->
<div class="wp-block-column"<?php echo 1 === $i ? ' style="padding-top:var(--wp--preset--spacing--40)"' : ''; ?>><!-- wp:image {"aspectRatio":"4/5","scale":"cover","sizeSlug":"large","linkDestination":"none","className":"is-style-lumen-grain"} -->
<figure class="wp-block-image size-large is-style-lumen-grain"><img src="https://picsum.photos/seed/<?php echo esc_attr( $s['seed'] ); ?>/900/1125" alt="<?php echo esc_attr( $s['title'] ); ?>" style="aspect-ratio:4/5;object-fit:cover"/></figure>
<!-- /wp:image -->

<!-- wp:paragraph {"textColor":"accent","fontSize":"small"} -->
<p class="has-accent-color has-text-color has-small-font-size"><?php echo esc_html( $s['num'] ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":4,"fontSize":"large"} -->
<h4 class="wp-block-heading has-large-font-size"><?php echo esc_html( $s['title'] ); ?></h4>
<!-- /wp:heading -->

<!-- wp:paragraph {"textColor":"muted","fontSize":"small"} -->
<p class="has-muted-color has-text-color has-small-font-size"><?php echo esc_html( $s['meta'] ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:column --><?php endforeach; ?></div>
<!-- /wp:columns --></div>
<!-- /wp:group -->
