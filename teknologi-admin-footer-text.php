<?php

/**
 * Plugin Name: Danish Board of Technology admin footer
 * Description: Replace the admin footer text with one customised for sites built by The Danish Board of Technology
 * Version: 1.0.0
 * Plugin URI: https://github.com/teknologi/teknologi-admin-footer-text
 * Author: Hans Czajkowski Jørgensen
 * Text Domain: teknologi_admin_footer_text
 * Domain Path: /languages
 * License:     GPL2

 * Danish Board of Technology admin footer is free software: you can redistribute
 * it and/or modify it under the terms of the GNU General Public License
 * as published by the Free Software Foundation, either version 2 of the
 * License, or any later version.
*
 * Danish Board of Technology admin footer is distributed in the hope that it will
 * be useful, but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
 * GNU General Public License for more details.

 * You should have received a copy of the GNU General Public License
 * along with Danish Board of Technology admin footer. If not, see
 * https://www.gnu.org/licenses/old-licenses/gpl-2.0.en.html.
*/
namespace Teknologi_Custom_Footer;

/**
 * Custom footer for the WordPress admin area
 */

class Teknologi_Custom_Footer
{
    public function __construct()
    {
      add_filter( 'admin_footer_text', array($this, 'custom_footer_admin') );
    }

    public function custom_footer_admin() {
      echo '<span id="footer-thankyou">' . __('Built by', 'teknologi_admin_footer_text') . ' <a href="' . __('https://tekno.dk/?lang=en', 'teknologi_admin_footer_text') . '" target="_blank">' . __('The Danish Board of Technology Foundation', 'teknologi_admin_footer_text') . '</a> ' . __('using', 'teknologi_admin_footer_text', 'teknologi_admin_footer_text') . ' <a href="https://wordpress.org" target="_blank">WordPress</a></span>';
    }

    public function teknologi_custom_footer_load_plugin_textdomain() {
        load_plugin_textdomain( 'teknologi_admin_footer_text', FALSE, basename( dirname( __FILE__ ) ) . '/languages/' );
    }
}

function load() {
    $teknologi_custom_footer = new Teknologi_Custom_Footer();
    $teknologi_custom_footer->teknologi_custom_footer_load_plugin_textdomain();
}

add_action('plugins_loaded', 'Teknologi_Custom_Footer\load');
