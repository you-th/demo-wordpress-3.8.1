<?php
function dez_custom_image_options() { ?>
<table class="form-table">
<tbody>
<tr valign="top"><th scope="row"><?php _e( 'Custom Header Overlay with logo:', TEMPLATE_DOMAIN ); ?></th>
<td>
<?php
$radio_setting = get_theme_mod('custom_header_overlay');
?>
<input id="custom_header_overlay" type="radio" name="custom_header_overlay" value="Yes" <?php if ( isset($radio_setting) && $radio_setting == 'Yes' ) { echo "checked='checked'"; } ?> />&nbsp;<?php _e('Yes', TEMPLATE_DOMAIN); ?>&nbsp;&nbsp;&nbsp;
<input id="custom_header_overlay" type="radio" name="custom_header_overlay" value="No" <?php if ( isset($radio_setting) && $radio_setting == 'No' ) { echo "checked='checked'"; } ?> />&nbsp;<?php _e('No', TEMPLATE_DOMAIN); ?>
<br /><label class="description" for="custom_header_overlay"><?php _e('Enable or disable custom header overlay with your logo', TEMPLATE_DOMAIN); ?></label>
</td>
</tr>
</tbody>
</table>

<?php } // end my_custom_image_options


function save_dez_custom_options() {
if ( isset( $_POST['custom_header_overlay'] )  ) {
// validate the request itself by verifying the _wpnonce-custom-header-options nonce
// (note: this nonce was present in the normal Custom Header form already, so we didn't have to add our own)
check_admin_referer( 'custom-header-options', '_wpnonce-custom-header-options' );
// be sure the user has permission to save theme options (i.e., is an administrator)
if ( current_user_can('manage_options') ) {
// NOTE: Add your own validation methods here
set_theme_mod( 'custom_header_overlay', $_POST['custom_header_overlay'] );
}
}
return;
}

add_action('custom_header_options', 'dez_custom_image_options');
add_action('admin_head', 'save_dez_custom_options');
?>