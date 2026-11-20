<?php
/**
 * Title: Galería mosaico con lightbox
 * Slug: lumen/gallery
 * Categories: lumen, gallery
 * Keywords: galería, mosaico, masonry, lightbox
 * Viewport width: 1400
 */

// Proporciones variadas para que el mosaico respire.
$lumen_sizes = array( '1200/1600', '1200/800', '1200/1500', '1200/900', '1200/1200', '1200/1700', '1200/800', '1200/1400', '1200/850', '1200/1600', '1200/1000', '1200/780' );
?>
<!-- wp:group {"anchor":"galeria","align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|40","bottom":"var:preset|spacing|50"}}},"layout":{"type":"constrained","contentSize":"1320px"}} -->
<div id="galeria" class="wp-block-group alignfull" style="padding-top:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--50)"><!-- wp:group {"layout":{"type":"flex","justifyContent":"space-between","verticalAlignment":"bottom"}} -->
<div class="wp-block-group"><!-- wp:heading {"fontSize":"x-large"} -->
<h2 class="wp-block-heading has-x-large-font-size">Selección <em>2023 — 2026</em></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"textColor":"muted","fontSize":"small"} -->
<p class="has-muted-color has-text-color has-small-font-size">Haz clic en cualquier imagen para ampliarla</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:gallery {"linkTo":"none","imageCrop":false,"align":"wide","className":"is-style-lumen-masonry"} -->
<figure class="wp-block-gallery alignwide has-nested-images columns-default is-style-lumen-masonry"><?php foreach ( $lumen_sizes as $i => $size ) : ?><!-- wp:image {"lightbox":{"enabled":true},"sizeSlug":"large","linkDestination":"none"} -->
<figure class="wp-block-image size-large"><img src="https://picsum.photos/seed/lumen-gallery-<?php echo (int) $i; ?>/<?php echo esc_attr( $size ); ?>" alt="<?php echo esc_attr( sprintf( 'Fotografía %d de la selección', $i + 1 ) ); ?>"/></figure>
<!-- /wp:image -->

<?php endforeach; ?></figure>
<!-- /wp:gallery --></div>
<!-- /wp:group -->
