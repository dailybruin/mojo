<?php
function mojo_handle_scripts() {
	wp_register_script('less',get_template_directory_uri().'/js/less-1.1.5.min.js');
	wp_enqueue_script('jquery');
	wp_enqueue_script('less');

}

add_action('wp_enqueue_scripts', 'mojo_handle_scripts');
register_nav_menu( 'primary', 'Primary Menu' );



function mojo_add_custom_user_profile_fields( $user ) {
?>
	<h3><?php _e('Extra Profile Information'); ?></h3>
	<table class="form-table">
		<tr>
			<th>
				<label for="twitter_handle"><?php _e('Twitter Username'); ?>
			</label></th>
			<td>
				<input type="text" name="twitter_handle" id="twitter_handle" value="<?php echo esc_attr( get_the_author_meta( 'twitter_handle', $user->ID ) ); ?>" class="regular-text" /><br />
				<span class="description"><?php _e('Please enter your twitter username if you would like it to be displayed on your profile.'); ?></span>
			</td>
		</tr>
	</table>
<?php }
function mojo_save_custom_user_profile_fields( $user_id ) {
	if ( !current_user_can( 'edit_user', $user_id ) )
		return FALSE;
	$twitter = $_POST['twitter_handle'];
	if($twitter[0] != '@' && $twitter != '')
		$twitter = '@'.$twitter;
	update_usermeta( $user_id, 'twitter_handle', $twitter );
}
add_action( 'show_user_profile', 'mojo_add_custom_user_profile_fields' );
add_action( 'edit_user_profile', 'mojo_add_custom_user_profile_fields' );
add_action( 'personal_options_update', 'mojo_save_custom_user_profile_fields' );
add_action( 'edit_user_profile_update', 'mojo_save_custom_user_profile_fields' );
/* Change login logo */
function mojo_login_logo() {
echo '<style type="text/css">
    h1 a { background-image:url('.get_bloginfo('template_url').'/img/login-logo.png) !important; }
</style>';
}

add_action('login_head', 'mojo_login_logo');

?>