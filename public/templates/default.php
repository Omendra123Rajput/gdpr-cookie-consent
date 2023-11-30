<?php
/**
 * The public-facing functionality of the plugin.
 *
 * @link       https://club.wpeka.com
 *
 * @package    Gdpr_Cookie_Consent
 * @subpackage Gdpr_Cookie_Consent/public
 */
error_log("default.php the_options");
error_log(print_r($the_options['lgpd_notify'], true));
error_log(print_r($the_options, true));
// error_log("default.php the_options");
// error_log(print_r($the_options['gdpr_notify'], true));
if ( 'popup' === $the_options['cookie_bar_as'] ) {
	?>
	<div class="gdprmodal gdprfade" id="gdpr-<?php echo esc_html( $the_options['cookie_bar_as'] ); ?>" role="dialog" data-keyboard="false" data-backdrop="<?php echo esc_html( $the_options['backdrop'] ); ?>">
	<div class="gdprmodal-dialog gdprmodal-dialog-centered">
		<!-- Modal content-->
		<div class="gdprmodal-content">
			<div class="gdprmodal-body">
	<?php
}
?>
<!-- WP Cookie Consent ( for GDPR, CCPA & ePrivacy ) v{{ version }} by WPEka Club - https://wordpress.org/plugins/gdpr-cookie-consent/ -->
<div id="<?php echo esc_html( $the_options['container_id'] ); ?>" class="<?php echo esc_html( $the_options['container_class'] ); ?> <?php echo esc_html( $the_options['theme_class'] ); ?>">
	<?php require plugin_dir_path( __FILE__ ) . $the_options['skin_template']; ?>
</div>
<?php
if ( 'popup' === $the_options['cookie_bar_as'] ) {
	?>
	</div>
		</div>
	</div>
</div>
	<?php
}
if ( ! empty( $the_options['lgpd_notify'] )) {
	error_log("inside lgpd_notify");
	if ( ! empty( $the_options['cookie_data'] ) ) {
		error_log("inside lgpd_notify cookie_data");
		if ( 'banner' === $the_options['cookie_bar_as'] && ! $the_options['button_settings_as_popup'] ) {//phpcs:ignore
			error_log("inside lgpd_notify cookie_data if");
		} else {
			error_log("inside lgpd_notify cookie_data else");
			?>
			<div class="gdpr_messagebar_detail <?php echo esc_html( $the_options['button_settings_layout_skin'] ); ?> <?php echo esc_html( $the_options['template_parts'] ); ?> <?php echo esc_html( $the_options['theme_class'] ); ?>">
			<?php include plugin_dir_path( __FILE__ ) . $the_options['layout_skin_template']; ?>
		</div>
			<?php
		}
	}
	if ( ! empty( $the_options['show_again'] ) ) {
		?>
		<div id="<?php echo esc_html( $the_options['show_again_container_id'] ); ?>" class="<?php echo esc_html( $the_options['container_class'] ); ?>">
		<span><?php echo esc_html__( $the_options['show_again_text'], 'gdpr-cookie-consent' ); //phpcs:ignore ?></span>
	</div>
		<?php
	}
}
if ( ! empty( $the_options['gdpr_notify'] )) {
	error_log("inside lgpd_notify");
	if ( ! empty( $the_options['cookie_data'] ) ) {
		error_log("inside lgpd_notify cookie_data");
		if ( 'banner' === $the_options['cookie_bar_as'] && ! $the_options['button_settings_as_popup'] ) {//phpcs:ignore
			error_log("inside lgpd_notify cookie_data if");
		} else {
			error_log("inside lgpd_notify cookie_data else");
			?>
			<div class="gdpr_messagebar_detail <?php echo esc_html( $the_options['button_settings_layout_skin'] ); ?> <?php echo esc_html( $the_options['template_parts'] ); ?> <?php echo esc_html( $the_options['theme_class'] ); ?>">
			<?php include plugin_dir_path( __FILE__ ) . $the_options['layout_skin_template']; ?>
		</div>
			<?php
		}
	}
	if ( ! empty( $the_options['show_again'] ) ) {
		?>
		<div id="<?php echo esc_html( $the_options['show_again_container_id'] ); ?>" class="<?php echo esc_html( $the_options['container_class'] ); ?>">
		<span><?php echo esc_html__( $the_options['show_again_text'], 'gdpr-cookie-consent' ); //phpcs:ignore ?></span>
	</div>
		<?php
	}
}
if ( ! empty( $the_options['eprivacy_notify'] ) ) {
	if ( ! empty( $the_options['show_again'] ) ) {
		?>
		<div id="<?php echo esc_html( $the_options['show_again_container_id'] ); ?>" class="<?php echo esc_html( $the_options['container_class'] ); ?>">
			<span><?php echo esc_html__( $the_options['show_again_text'], 'gdpr-cookie-consent' );//phpcs:ignore ?></span>
		</div>
		<?php
	}
}

if ( ! empty( $the_options['ccpa_notify'] ) ) {
	?>
<div class="ccpa_messagebar_detail <?php echo esc_html( $the_options['button_settings_layout_skin'] ); ?> <?php echo esc_html( $the_options['template_parts'] ); ?>">
	<?php include plugin_dir_path( __FILE__ ) . 'modals/ccpa.php'; ?>
</div>
	<?php
}
