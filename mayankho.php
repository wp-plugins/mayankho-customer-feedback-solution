<?php
/*
Plugin Name: Mayankho
Plugin URI: http://wordpress.org/extend/plugins/mayankho/
Description: Enables <a href="http://www.mayankho.com">Mayankho</a> on all pages.
Version: 1.0.6
Author: Martijn van Vreeden
Author URI: http://www.mayankho.com
*/

function activate_mayankho() {
  add_option('mayankho_code', 'Add your Mayankho code here');
}

function deactive_mayankho() {
  delete_option('mayankho_code');
}

function admin_init_mayankho() {
  register_setting('mayankho', 'mayankho_code');
}

function admin_menu_mayankho() {
  add_options_page('Mayankho', 'Mayankho', 'manage_options', 'mayankho', 'options_page_mayankho');
}

function options_page_mayankho() {
  include(plugin_dir_path( __FILE__ ).'options.php');  
}

function mayankho() {
  $mayankho_code = get_option('mayankho_code');
?>
<script type="text/javascript">
<?php echo $mayankho_code ?>
</script>
<?php
}

register_activation_hook(__FILE__, 'activate_mayankho');
register_deactivation_hook(__FILE__, 'deactive_mayankho');

if (is_admin()) {
  add_action('admin_init', 'admin_init_mayankho');
  add_action('admin_menu', 'admin_menu_mayankho');
}

if (!is_admin()) {
  add_action('wp_head', 'mayankho');
}

?>
