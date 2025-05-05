<?php
/**
 * Plugin Name: Hello World
 * Description: A simple Hello World plugin.
 * Version: 1.0
 * Author: Ahmad
 */

 add_action('admin_notices', function() {
    echo '<div class="notice notice-success"><p>Hello World!</p></div>';
});
