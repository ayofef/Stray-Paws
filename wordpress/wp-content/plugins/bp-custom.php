<?php
// hacks and mods will go here

function buddydev_hide_favourite_button() {
	return false;
}
add_filter('bp_activity_can_favorite', 'buddydev_hide_favourite_button' );

// change BP /activity/ slug to /dashboard/
define( 'BP_ACTIVITY_SLUG', 'Timeline' );

// Change the name for the "Activity" tab to "Dashboard",
// and reference the newly defined slug /dashboard/
function bpcodex_rename_profile_tabs() {
    // Change "Activity" to "Dashboard"
    buddypress()->members->nav->edit_nav( array( 'name' => __( 'Timeline', 'textdomain' ) ), 'Timeline' );
}
add_action( 'bp_actions', 'bpcodex_rename_profile_tabs' );


///removing public message
add_filter('bp_get_send_public_message_button',
'__return_false');

define('BP_DEFAULT_COMPONENT', 'profile' );





?>
