<?php
/*
Plugin Name: Wlagence Divi Reservit
Plugin URI:  alexandre.ninja
Description: Intégration de Reservit en module Divi
Version:     1.0.0
Author:      Alexandre Gagner
Author URI:  alexandre.ninja
License:     GPL2
License URI: https://www.gnu.org/licenses/gpl-2.0.html
Text Domain: wldr-wlagence-divi-reservit
Domain Path: /languages

Wlagence Divi Reservit is free software: you can redistribute it and/or modify
it under the terms of the GNU General Public License as published by
the Free Software Foundation, either version 2 of the License, or
any later version.

Wlagence Divi Reservit is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
GNU General Public License for more details.

You should have received a copy of the GNU General Public License
along with Wlagence Divi Reservit. If not, see https://www.gnu.org/licenses/gpl-2.0.html.
*/


if ( ! function_exists( 'wldr_initialize_extension' ) ):
/**
 * Creates the extension's main class instance.
 *
 * @since 1.0.0
 */
function wldr_initialize_extension() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/WlagenceDiviReservit.php';
}
add_action( 'divi_extensions_init', 'wldr_initialize_extension' );
endif;
