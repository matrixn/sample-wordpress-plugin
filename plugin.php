<?php
/*
Plugin Name: My New Plugin Demo
Description: A simple "Hello World" plugin.
Author: Your Name
Version: 1.1.1
*/

require_once __DIR__ . '/vendor/autoload.php';

use Zion\WordPressLicense\Config;
use Zion\WordPressLicense\LicenseManager;

$licenseManager = new LicenseManager(new Config(
    apiUrl: 'https://license.zion3d.ro/api/v1',
    productSlug: 'my-new-plugin-demo',
    productKey: 'zion_uwmrn2stfd1o5w4jk2dse2qdiokgkzf7nhnacp7h',
    pluginFile: __FILE__,
));

function hello_world_display() {
  echo "Hello World using a template changed by Vikas 17 aug Push 1";
}

add_action( 'wp_footer', 'hello_world_display' );

