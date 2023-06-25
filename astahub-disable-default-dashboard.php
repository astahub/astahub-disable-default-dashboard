<?php
/*
Plugin Name: Astahub - Disable default Dashboard items
Plugin URI: https://github.com/astahub/astahub-disable-default-dashboard
Description: Disable build in dashboard items widget.
Author: harisrozak
Author URI: https://github.com/harisrozak
Version: 1.1
Text Domain: astahub-disable-dashboard-items
License: GPL version 2 or later - http://www.gnu.org/licenses/old-licenses/gpl-2.0.html
*/

add_action('admin_init', 'astahub_disable_default_dashboard_items', 11);
function astahub_disable_default_dashboard_items() {
    remove_action( 'welcome_panel', 'wp_welcome_panel' );
    remove_meta_box( 'dashboard_incoming_links', 'dashboard', 'normal' );
    remove_meta_box( 'dashboard_plugins', 'dashboard', 'normal' );
    remove_meta_box( 'dashboard_primary', 'dashboard', 'side' );
    remove_meta_box( 'dashboard_secondary', 'dashboard', 'normal' );
    remove_meta_box( 'dashboard_quick_press', 'dashboard', 'side' );
    remove_meta_box( 'dashboard_recent_drafts', 'dashboard', 'side' );
    remove_meta_box( 'dashboard_recent_comments', 'dashboard', 'normal' );
    remove_meta_box( 'dashboard_right_now', 'dashboard', 'normal' );
    remove_meta_box( 'dashboard_activity', 'dashboard', 'normal'); // since 3.8
    remove_meta_box( 'dashboard_site_health', 'dashboard', 'normal'); // since 5.0
}