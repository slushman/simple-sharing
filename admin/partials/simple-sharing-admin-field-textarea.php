<?php

/**
 * Provides the markup for any textarea field
 *
 * @link       http://slushman.com
 * @since      1.0.0
 *
 * @package    Sharing_URL_Buttons
 * @subpackage Sharing_URL_Buttons/admin/partials
 */

if ( ! empty( $atts['label'] ) ) {

	?><label for="<?php echo esc_attr( $atts['id'] ); ?>"><?php esc_html_e( $atts['label'], 'simple-sharing' ); ?>: </label><?php

}

?><textarea
	class="<?php echo esc_attr( $atts['class'] ); ?>"
	cols="<?php echo esc_attr( $atts['cols'] ); ?>"
	id="<?php echo esc_attr( $atts['id'] ); ?>"
	name="<?php echo esc_attr( $atts['name'] ); ?>"
	rows="<?php echo esc_attr( $atts['rows'] ); ?>"><?php

	echo esc_textarea( $atts['value'] );

?></textarea>
<span class="description"><?php esc_html_e( $atts['description'], 'simple-sharing' ); ?></span>