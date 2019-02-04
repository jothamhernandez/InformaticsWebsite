<?php 
// Plugin Name: Program Form List Plugin
// Plugin URI: www.nothing.com
// Author Name: Patrick Noceja
// Author URI: patricknoceja.azurewebsites.net/Portfolio


add_action('admin_menu','my_program_list_menu');

function my_program_list_menu(){
    add_menu_page('Program List Page','User Emails','manage_options','program_list_page','program_list_edit_page');
}

function program_list_edit_page(){
    ?>
    <h1>User Emails</h1>
    <div class="container">
        <table id="customers">
            <tr>
                <th>Company</th>
                <th>Contact</th>
                <th>Country</th>
            </tr>
            <tr>
                <td>Alfreds Futterkiste</td>
                <td>Maria Anders</td>
                <td>Germany</td>
            </tr>
        </table>
    </div>
    <?php
}

?>
