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
    global $wpdb;
    $emails = $wpdb->get_results("SELECT * from info_user_emails");
    print_r($emails);
    ?>
    <h1>User Emails</h1>
    <div class="container">
        <table id="email-table">
            <tr>
                <th>Email</th>
                <th>Message</th>
                <th>Date</th>
            </tr>
            <?php foreach($emails as $email){?>
            <tr>
                <td><?php echo $email->email; ?></td>
                <td><?php echo $email->message; ?></td>
                <td><?php echo $email->date; ?></td>
            </tr>
            <?php } ?>
        </table>
    </div>
    <?php
}

function email_list_style(){
?>
<style>
#email-table td{
    padding:14px;
}
</style>
<?php 
}

add_action('admin_head','email_list_style');
?>
