<?php
/**
 * Title: Servicios y tarifas
 * Slug: lumen/services
 * Categories: lumen, services
 * Keywords: servicios, precios, tarifas
 * Viewport width: 1400
 */

$lumen_services = array(
	array( 'Retrato', 'Sesión de 2 horas en exterior o estudio, 25 imágenes editadas y galería privada en línea.', 'desde $180' ),
	array( 'Editorial', 'Producción para revistas y marcas: preproducción, scouting, dirección de arte y licencias de uso.', 'desde $650' ),
	array( 'Eventos íntimos', 'Bodas civiles, aniversarios y encuentros de hasta 60 personas. Cobertura documental sin poses.', 'desde $900' ),
);
?>
<!-- wp:group {"anchor":"servicios","align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|50","bottom":"var:preset|spacing|50"}}},"layout":{"type":"constrained","contentSize":"1320px"}} -->
<div id="servicios" class="wp-block-group alignfull" style="padding-top:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--50)"><!-- wp:heading {"className":"is-style-lumen-eyebrow"} -->
<h2 class="wp-block-heading is-style-lumen-eyebrow">Servicios</h2>
<!-- /wp:heading -->

<!-- wp:heading {"level":3,"fontSize":"x-large"} -->
<h3 class="wp-block-heading has-x-large-font-size">Cómo podemos trabajar juntos</h3>
<!-- /wp:heading -->

<!-- wp:columns {"style":{"spacing":{"margin":{"top":"var:preset|spacing|40"},"blockGap":{"left":"var:preset|spacing|30"}}}} -->
<div class="wp-block-columns" style="margin-top:var(--wp--preset--spacing--40)"><?php foreach ( $lumen_services as $i => $svc ) : ?><!-- wp:column {"className":"lumen-service","style":{"spacing":{"padding":{"top":"var:preset|spacing|30"}}}} -->
<div class="wp-block-column lumen-service" style="padding-top:var(--wp--preset--spacing--30)"><!-- wp:paragraph {"textColor":"accent","fontSize":"small"} -->
<p class="has-accent-color has-text-color has-small-font-size">0<?php echo (int) $i + 1; ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":4,"fontSize":"large"} -->
<h4 class="wp-block-heading has-large-font-size"><?php echo esc_html( $svc[0] ); ?></h4>
<!-- /wp:heading -->

<!-- wp:paragraph {"textColor":"muted"} -->
<p class="has-muted-color has-text-color"><?php echo esc_html( $svc[1] ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"lumen-price","fontSize":"large"} -->
<p class="lumen-price has-large-font-size"><?php echo esc_html( $svc[2] ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:column --><?php endforeach; ?></div>
<!-- /wp:columns --></div>
<!-- /wp:group -->
