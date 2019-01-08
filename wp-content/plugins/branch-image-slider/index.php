<?php 
// Plugin Name: Branch Image Slider Plugin
// Plugin URI: www.nothing.com
// Author Name: Patrick Noceja
// Author URI: patricknoceja.azurewebsites.net/Portfolio


add_action('admin_menu','my_slider_menu');

function my_slider_menu(){
    add_menu_page('Slider Page','Slider Plugin','manage_options','slider_plugin_page','slider_edit_page');
}

function slider_edit_page(){
    ?>
    <h1>VIOLA</h1>
    <?php
}

?>