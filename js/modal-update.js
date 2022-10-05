/* eslint-disable linebreak-style */
/**
 * File modal.js.
 *
 * Handles custom javascript/jquery functions
 */
( function() {
	const hamburgerMenu = document.querySelector( '#hamburger-menu' );
	const projectMobileMenu = document.querySelector( '#project-second-link' );
	const nav1 = document.querySelector( '#nav-1' );
	const nav2 = document.querySelector( '#nav-2' );
	const nav3 = document.querySelector( '#nav-3' );
	const nav4 = document.querySelector( '#nav-4' );
	const nav5 = document.querySelector( '#nav-5' );
	const navItems = [ nav1, nav2, nav3, nav4, nav5 ];
	const btn = document.querySelector( '#open-modal' ); // Get the button that opens the modal
	const modal = document.querySelector( '.modal' ); // Get the modal
	const span = document.querySelector( '.close-modal' ); // Get the <span> element that closes the modal

	// Control Navigation Animation
	function navAnimation( val1, val2 ) {
		//forEach(function(element, index) { /* ... */ })
		navItems.forEach( ( nav, i ) => {
			if ( nav ) {
				nav.classList.replace( `slide-${ val1 }-${ i + 1 }`, `slide-${ val2 }-${ i + 1 }` );
			}
		} );
	}

	function toggleNav() {
		const hamburgerMenuH = document.querySelector( '.hamburger-menu' );
		const overlayO = document.querySelector( '.overlay' );
		// Toggle: Hamburger Open/Close
		hamburgerMenuH.classList.toggle( 'active' );

		//   Toggle: Menu Active
		overlayO.classList.toggle( 'overlay-active' );

		if ( overlayO.classList.contains( 'overlay-active' ) ) {
			// Animate In - Overlay
			overlayO.classList.replace( 'overlay-slide-up', 'overlay-slide-down' );

			// Animate In - Nav Items
			navAnimation( 'out', 'in' );
		} else {
			// Animate Out - Overlay
			overlayO.classList.replace( 'overlay-slide-down', 'overlay-slide-up' );

			// Animate Out - Nav Items
			navAnimation( 'in', 'out' );
		}
	}

	// Events Listeners
	if ( hamburgerMenu ) {
		hamburgerMenu.addEventListener( 'click', toggleNav );
	}

	if ( projectMobileMenu ) {
		projectMobileMenu.addEventListener( 'click', toggleNav );
	}

	if ( navItems ) {
		navItems.forEach( ( nav ) => {
			if ( nav ) {
				nav.addEventListener( 'click', toggleNav );
			}
		} );
	}

	//Modal
	btn.addEventListener( 'click', function() {
		modal.style.display = 'block';
	} );
	// When the user clicks on <span> (x), close the modal

	span.addEventListener( 'click', function() {
		modal.style.display = 'none';
	} );
}() );
