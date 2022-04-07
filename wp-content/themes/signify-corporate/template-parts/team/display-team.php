<?php
/**
 * The template for displaying team content
 *
 * @package Signify_Corporate
 */
?>

<?php
$enable_content = get_theme_mod( 'signify_team_option', 'disabled' );

if ( ! signify_check_section( $enable_content ) ) {
	// Bail if team content is disabled.
	return;
}

$classes[] = 'team-section';
$classes[] = 'section';
$classes[] = 'text-align-center';
$classes[] = 'page';

$signify_title       = get_theme_mod( 'signify_team_title' );
$signify_description = get_theme_mod( 'signify_team_description' );

if ( ! $signify_title && ! $signify_description ) {
	$classes[] = 'no-section-heading';
}

?>

<div id="team-content-section" class="<?php echo esc_attr( implode( ' ', $classes ) ); ?>">
	<div class="wrapper">
		<?php signify_section_header( '', $signify_title, $signify_description ); ?>

		<div class="team-content-wrapper section-content-wrapper layout-four">
			<?php get_template_part( 'template-parts/team/content', 'team' ); ?>
		</div><!-- .team-wrapper -->
	</div><!-- .wrapper -->
</div><!-- #team-section -->
