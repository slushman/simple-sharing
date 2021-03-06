<?php

/**
 * Provides the markup for the Button Type field
 *
 * @link       http://slushman.com
 * @since      1.0.0
 *
 * @package    Sharing_URL_Buttons
 * @subpackage Sharing_URL_Buttons/admin/partials
 */

$shared 	= new Sharing_URL_Buttons_Shared( $this->plugin_name, $this->version );
$buttons 	= $shared->get_button_array();

?><fieldset>
	<legend><?php esc_html_e( 'Click any of the following buttons to display as a sharing option:', 'simple-sharing' ); ?></legend>
	<ul id="btns-sort"><?php

	foreach ( $buttons as $button ) {

		$lower 	= strtolower( $button );
		$label 	= $shared->get_label( $button );
		$option = 0;

		if ( ! empty( $this->options['button-' . $lower] ) ) {

			$option = $this->options['button-' . $lower];

		}

		?><li class="btn-wrap" data-id="<?php echo $button ?>" id="btn-<?php echo $button; ?>" title="<?php echo $button; ?>">
			<input <?php checked( 1, $option, true ); ?> class="handle" id="button-<?php echo $lower; ?>" name="<?php echo $this->plugin_name; ?>-options[button-<?php echo $lower; ?>]" type="checkbox" value="1"  />
			<label class="ssbtn btn-<?php echo $lower; ?>" for="<?php echo $lower; ?>">
				<span class="screen-reader-text"><?php

					echo $shared->get_reader_text( $button );

				?></span><?php

				echo $label;

			?></label>
		</li><?php

	} // foreach

	?></ul>
	<input id="button-order" name="<?php echo $this->plugin_name; ?>-options[button-order]" type="hidden" value="<?php echo $this->options['button-order']; ?>">
</fieldset>
<div class="" id="button-status"></div>
