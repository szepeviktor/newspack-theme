/**
 * File amp-fallback.js.
 *
 * AMP fallback JavaScript.
 */

(function() {


	// Search toggle.
	var headerContain           = document.getElementById( 'masthead' ),
		headerSearch            = document.getElementById( 'header-search' ),
		headerSearchInput       = headerSearch.getElementsByTagName( 'input' )[0],
		searchToggle            = document.getElementById( 'search-toggle' ),
		searchToggleTextContain = searchToggle.getElementsByTagName( 'span' )[0],
		searchToggleTextDefault = searchToggleTextContain.innerText;

	searchToggle.addEventListener('click', function() {

		// Toggle the search visibility.
		headerContain.classList.toggle( 'hide-header-search' );

		// Toggle screen reader text label and aria settings.
		if ( searchToggleTextDefault === searchToggleTextContain.innerText ) {
			searchToggleTextContain.innerText = newspackScreenReaderText.close_search;
			headerSearch.setAttribute( 'aria-expanded', 'true' );
			searchToggle.setAttribute( 'aria-expanded', 'true' );
			headerSearchInput.focus();

		} else {
			searchToggleTextContain.innerText = searchToggleTextDefault;
			headerSearch.setAttribute( 'aria-expanded', 'false' );
			searchToggle.setAttribute( 'aria-expanded', 'false' );
			searchToggle.focus();
		}

	}, false );


	// Mobile menu fallback.

	var menuToggle = document.getElementsByClassName( 'mobile-menu-toggle' ),
		body = document.getElementsByTagName( 'body' )[0];

	for ( var i = 0; i < menuToggle.length; i++ ) {
		menuToggle[i].addEventListener( 'click', function() {
			body.classList.toggle( 'menu-opened' );
		}, false );
	}


} )();
