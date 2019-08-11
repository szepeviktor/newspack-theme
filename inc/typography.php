<?php
/**
 * Newspack Theme: Typography
 *
 * @package Newspack
 */

/**
 * Generate the CSS for custom typography.
 */
function newspack_custom_typography_css() {

	$font_body   = newspack_font_stack( get_theme_mod( 'font_body', '' ), get_theme_mod( 'font_body_stack', 'serif' ) );
	$font_header = newspack_font_stack( get_theme_mod( 'font_header', '' ), get_theme_mod( 'font_header_stack', 'serif' ) );

	$css_blocks        = '';
	$editor_css_blocks = '';

	if ( get_theme_mod( 'font_header', '' ) ) {
		$css_blocks .= "
		/* _headings.scss */
		.author-description .author-link,
		.comment-metadata,
		.comment-reply-link,
		.comments-title,
		.comment-author .fn,
		.discussion-meta-info,
		.entry-meta,
		.entry-footer,
		.main-navigation,
		.no-comments,
		.not-found .page-title,
		.error-404 .page-title,
		.page-links,
		.page-description,
		.pagination .nav-links,
		.sticky-post,
		.site-title,
		.site-info,
		#cancel-comment-reply-link,
		h1,
		h2,
		h3,
		h4,
		h5,
		h6,

		/* _tables.scss */
		table,

		/* _buttons.scss */
		.button,
		button,
		input[type=\"button\"],
		input[type=\"reset\"],
		input[type=\"submit\"],

		/* _captions.scss */
		.wp-caption-text,
		.gallery-caption,

		/* _infinite_scroll.scss */
		.site-main #infinite-handle span button,
		.site-main #infinite-handle span button:hover,
		.site-main #infinite-handle span button:focus,

		/* _menu-main-navigation.scss */
		.main-navigation button,

		/* _menu-tertiary-navigation.scss */
		.tertiary-menu,

		/* _menu-top-navigation.scss */
		.secondary-menu,

		/* _next_previous.scss */
		.comment-navigation .nav-previous,
		.comment-navigation .nav-next,

		/* _comments.scss */
		.comment-list .pingback .comment-body,
		.comment-list .trackback .comment-body,

		.comment-list .pingback .comment-body .comment-edit-link,
		.comment-list .trackback .comment-body .comment-edit-link,


		.comment-form label,
		.comment-form .comment-notes,

		/* _widgets.scss */
		.widget_archive ul li,
		.widget_categories ul li,
		.widget_meta ul li,
		.widget_nav_menu ul li,
		.widget_pages ul li,
		.widget_recent_comments ul li,
		.widget_recent_entries ul li,
		.widget_rss ul li,

		.widget_tag_cloud .tagcloud,

		/* _copy.scss */
		blockquote cite

		{
			font-family: $font_header;
		}";

		if ( 'style-1' === get_theme_mod( 'active_style_pack', 'default' ) ) {
			$css_blocks .= "
			.entry .entry-content .has-drop-cap:not(:focus)::first-letter {
				font-family: $font_header;
			}";
		}

		if ( 'style-2' === get_theme_mod( 'active_style_pack', 'default' ) ) {
			$css_blocks .= "
			.entry .entry-content .has-drop-cap:not(:focus)::first-letter {
				font-family: $font_header;
			}";
		}

		$editor_css_blocks .= "
		.editor-block-list__layout .editor-block-list__block h1,
		.editor-block-list__layout .editor-block-list__block h2,
		.editor-block-list__layout .editor-block-list__block h3,
		.editor-block-list__layout .editor-block-list__block h4,
		.editor-block-list__layout .editor-block-list__block h5,
		.editor-block-list__layout .editor-block-list__block h6,
		.editor-block-list__layout .editor-block-list__block figcaption,
		.editor-block-list__layout .editor-block-list__block .gallery-caption,

		/* Post Title */
		.editor-styles-wrapper .editor-post-title .editor-post-title__block .editor-post-title__input,

		/* Table Block */
		.editor-block-list__layout .editor-block-list__block .wp-block-table,

		/* Cover Block */
		.editor-block-list__layout .editor-block-list__block .wp-block-cover h2,
		.editor-block-list__layout .editor-block-list__block .wp-block-cover .wp-block-cover-text,

		/* Button Block */
		.editor-block-list__layout .editor-block-list__block .wp-block-button .wp-block-button__link,

		/* Blockquote Block */
		.editor-block-list__layout .editor-block-list__block .wp-block-quote cite,
		.editor-block-list__layout .editor-block-list__block .wp-block-quote footer,
		.editor-block-list__layout .editor-block-list__block .wp-block-quote .wp-block-quote__citation,

		/* Pullquote Block */
		.editor-block-list__layout .editor-block-list__block .wp-block[data-type='core/pullquote'] .wp-block-pullquote__citation,
		.editor-block-list__layout .editor-block-list__block .wp-block[data-type='core/pullquote'][data-align='left'] .wp-block-pullquote__citation,
		.editor-block-list__layout .editor-block-list__block .wp-block[data-type='core/pullquote'][data-align='right'] .wp-block-pullquote__citation,

		/* File Block */
		.editor-block-list__layout .editor-block-list__block .wp-block-file,

		/* Widget blocks */
		.editor-block-list__layout .editor-block-list__block ul.wp-block-archives li,
		.editor-block-list__layout .editor-block-list__block .wp-block-categories li,
		.editor-block-list__layout .editor-block-list__block .wp-block-latest-posts li,

		/* Latest Comments blocks */
		.editor-block-list__layout .editor-block-list__block .wp-block-latest-comments .wp-block-latest-comments__comment-meta,

		/* Classic Editor */
		.editor-block-list__layout .editor-block-list__block .wp-caption dd,
		.editor-block-list__layout .editor-block-list__block .wp-block-freeform blockquote cite

		{
			font-family: $font_header;
		}
		";

		if ( 'style-1' === get_theme_mod( 'active_style_pack', 'default' ) ) {
			$editor_css_blocks .= "
			.editor-block-list__layout .editor-block-list__block .wp-block-paragraph.has-drop-cap:not(:focus)::first-letter

			{
				font-family: $font_header;
			}
			";
		}

		if ( 'style-2' === get_theme_mod( 'active_style_pack', 'default' ) ) {
			$editor_css_blocks .= "
			.editor-block-list__layout .editor-block-list__block .wp-block-paragraph.has-drop-cap:not(:focus)::first-letter

			{
				font-family: $font_header;
			}
			";
		}
	}

	if ( get_theme_mod( 'font_body', '' ) ) {
		$css_blocks .= "
		/* _typography.scss */
		body,
		button,
		input,
		select,
		optgroup,
		textarea,

		/* _blocks.scss */
		.entry .entry-content .wp-block-verse,
		.page-title
		{
			font-family: $font_body;
		}
		";

		$editor_css_blocks .= "
			.editor-block-list__layout .editor-block-list__block,
			.editor-default-block-appender .editor-default-block-appender__content
			{
				font-family: $font_body;
			}
		";
	}

	if ( '' !== $css_blocks ) {
		$theme_css = $css_blocks;
	} else {
		$theme_css = '';
	}

	if ( '' !== $editor_css_blocks ) {
		$editor_css = $editor_css_blocks;
	} else {
		$editor_css = '';
	}

	if ( function_exists( 'register_block_type' ) && is_admin() ) {
		$theme_css = $editor_css;
	}

	return $theme_css;
}

/**
 * Generate link elements for custom typography stylesheets.
 */
function newspack_custom_typography_link( $theme_mod ) {
	$font_code = get_theme_mod( $theme_mod, '' );
	if ( ! $font_code ) {
		return false;
	}
	return $font_code;
}

/**
 * Fallback font stacks
 */
function newspack_get_font_stacks() {
	return array(
		'serif'      => array(
			'name'  => __( 'Serif' ),
			'fonts' => array(
				'Georgia',
				'Garamond',
				'Times New Roman',
				'serif',
			),
		),
		'sans_serif' => array(
			'name'  => __( 'Sans Serif' ),
			'fonts' => array(
				'-apple-system',
				'BlinkMacSystemFont',
				'Segoe UI',
				'Roboto',
				'Oxygen',
				'Ubuntu',
				'Cantarell',
				'Fira Sans',
				'Droid Sans',
				'Helvetica Neue',
				'sans-serif',
			),
		),
	);
}

/**
 * Prepare fallback font stacks for use in a Select element
 */
function newspack_get_font_stacks_as_select_choices() {
	$stacks = array();
	foreach ( newspack_get_font_stacks() as $key => $value ) {
		$stacks[ $key ] = wp_kses( $value['name'], null );
	}
	return $stacks;
}

/**
 * Prepare a font-family definition with a primary font and fallbacks.
 */
function newspack_font_stack( $primary_font, $fallback_id ) {
	$stacks = newspack_get_font_stacks();
	$fonts  = isset( $stacks[ $fallback_id ] ) ? $stacks[ $fallback_id ]['fonts'] : array();
	array_unshift( $fonts, $primary_font );
	foreach ( $fonts as &$font ) {
		$font = '"' . $font . '"';
	}
	return implode( ',', $fonts );
}
