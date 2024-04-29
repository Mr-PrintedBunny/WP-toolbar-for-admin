<?php
/**
  Plugin Name: Hides the admin toolbar from non-admins
  Description: Hide amdin toolbar if role "no admin"
  Author: Mr.PrintedBunny
  Version: 1.0
  License: GPL2
 
  Copyright (c) 2024,  Mr.PrintedBunny
**/

if (!defined('ABSPATH')) {
  die;
}

 function htatfna_hide_admin_bar() {
  if (current_user_can('administrator')) {
    add_filter('show_admin_bar', '__return_true');
 } 
  else { 
    add_filter('show_admin_bar', '__return_false');
  }
}
 add_action('after_setup_theme', 'htatfna_hide_admin_bar');
