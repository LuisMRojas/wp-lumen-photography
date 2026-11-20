/* Lumen — aparición progresiva de imágenes y secciones al hacer scroll. */
( function () {
	if ( ! ( 'IntersectionObserver' in window ) ) {
		return;
	}
	var targets = document.querySelectorAll(
		'.wp-block-gallery .wp-block-image, .lumen-series .wp-block-column, .lumen-service, .lumen-journal .wp-block-post'
	);
	var io = new IntersectionObserver(
		function ( entries ) {
			entries.forEach( function ( entry ) {
				if ( entry.isIntersecting ) {
					entry.target.classList.add( 'is-visible' );
					io.unobserve( entry.target );
				}
			} );
		},
		{ rootMargin: '0px 0px -8% 0px' }
	);
	targets.forEach( function ( el, i ) {
		el.classList.add( 'lumen-reveal' );
		el.style.transitionDelay = ( i % 3 ) * 90 + 'ms';
		io.observe( el );
	} );
} )();
