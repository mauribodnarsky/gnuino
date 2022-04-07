<?php
/**
 * Promotion Headline Options
 *
 * @package Signify_Corporate
 */

/**
 * Add promotion headline options to theme options
 *
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 */
function signify_promo_head_options( $wp_customize ) {
	$wp_customize->add_section( 'signify_promotion_headline', array(
			'title' => esc_html__( 'Promotion Headline', 'signify-corporate' ),
			'panel' => 'signify_theme_options',
		)
	);

	signify_register_option( $wp_customize, array(
			'name'              => 'signify_promo_head_visibility',
			'default'           => 'disabled',
			'sanitize_callback' => 'signify_sanitize_select',
			'choices'           => signify_section_visibility_options(),
			'label'             => esc_html__( 'Enable on', 'signify-corporate' ),
			'section'           => 'signify_promotion_headline',
			'type'              => 'select',
		)
	);

	signify_register_option( $wp_customize, array(
			'name'              => 'signify_promotion_headline_description',
			'sanitize_callback' => 'wp_kses_post',
			'active_callback'   => 'signify_is_promotion_headline_active',
			'label'             => esc_html__( 'Section Description', 'signify-corporate' ),
			'section'           => 'signify_promotion_headline',
			'type'              => 'textarea',
		)
	);

	signify_register_option( $wp_customize, array(
			'name'              => 'signify_promotion_headline',
			'default'           => '0',
			'sanitize_callback' => 'signify_sanitize_post',
			'active_callback'   => 'signify_is_promotion_headline_active',
			'label'             => esc_html__( 'Page', 'signify-corporate' ),
			'section'           => 'signify_promotion_headline',
			'type'              => 'dropdown-pages',
		)
	);
}
add_action( 'customize_register', 'signify_promo_head_options' );

/** Active Callback Functions **/
if ( ! function_exists( 'signify_is_promotion_headline_active' ) ) :
	/**
	* Return true if promotion headline is active
	*
	* @since 1.0.0
	*/
	function signify_is_promotion_headline_active( $control ) {
		$enable = $control->manager->get_setting( 'signify_promo_head_visibility' )->value();

		return signify_check_section( $enable );
	}
endif;
