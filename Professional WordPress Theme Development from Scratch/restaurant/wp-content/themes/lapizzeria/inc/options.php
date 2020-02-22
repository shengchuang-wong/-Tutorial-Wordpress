<?php

function lapi_options() {
    add_menu_page('La Pizzeria', 'La Pirzzeria Options', 'administrator', 'lapi_options', 
    'lapi_adjustments', '', 20);

    add_submenu_page( 'lapi_options', 'Reservations', 'Reservations', 'administrator', 'lapi_reservations', 'lapi_reservations');
}

add_action('admin_menu', 'lapi_options');

// add setting for google map details
function lapizzeria_settings() {

    // Google Maps Group
    register_setting('lapizzeria_options_gmaps', 'lapizzeria_gmap_latitude');
    register_setting('lapizzeria_options_gmaps', 'lapizzeria_gmap_longitude');
    register_setting('lapizzeria_options_gmaps', 'lapizzeria_gmap_zoom');
    register_setting('lapizzeria_options_gmaps', 'lapizzeria_gmap_apikey');

    // Information Group
    register_setting('lapizzeria_options_info', 'lapizzeria_info_location');
    register_setting('lapizzeria_options_info', 'lapizzeria_info_phonenumber');
}

add_action('init', 'lapizzeria_settings');

// allow user to post data for the google map details 
function lapi_adjustments() { ?>
    <div class="wrap">
        <h1>La Pizzeria Adjustments</h1>
        <form action="options.php" method="post">
            <?php
                settings_fields('lapizzeria_options_gmaps');
                do_settings_sections('lapizzeria_options_gmaps');
            ?>
            <h2>Google Maps</h2>
            <table class="form-table">
                <tr valign="top">
                    <th scope="row">Latitude: </th>
                    <td>
                        <input type="text" name="lapizzeria_gmap_latitude" value="<?php echo esc_attr(get_option('lapizzeria_gmap_latitude')) ?>" />
                    </td>
                </tr>
                <tr valign="top">
                    <th scope="row">Longitude: </th>
                    <td>
                        <input type="text" name="lapizzeria_gmap_longitude" value="<?php echo esc_attr(get_option('lapizzeria_gmap_longitude')) ?>" />
                    </td>
                </tr>
                <tr valign="top">
                    <th scope="row">Zoom: </th>
                    <td>
                        <input type="number" min="8" max="21" name="lapizzeria_gmap_zoom" value="<?php echo esc_attr(get_option('lapizzeria_gmap_zoom')) ?>" />
                    </td>
                </tr>
                <tr valign="top">
                    <th scope="row">API Key: </th>
                    <td>
                        <input type="text" name="lapizzeria_gmap_apikey" value="<?php echo esc_attr(get_option('lapizzeria_gmap_apikey')) ?>" />
                    </td>
                </tr>
            </table>

            <?php
                settings_fields('lapizzeria_options_info');
                do_settings_sections('lapizzeria_options_info');
            ?>

            <h2>Other Adjustments</h2>
            <table class="form-table">
                <tr valign="top">
                    <th scope="row">Address: </th>
                    <td>
                        <input type="text" name="lapizzeria_info_location" value="<?php echo esc_attr(get_option('lapizzeria_info_location')) ?>" />
                    </td>
                </tr>
                <tr valign="top">
                    <th scope="row">Phone Number: </th>
                    <td>
                        <input type="text" name="lapizzeria_info_phonenumber" value="<?php echo esc_attr(get_option('lapizzeria_info_phonenumber')) ?>" />
                    </td>
                </tr>
            </table>

            <?php submit_button(); ?>
        </form>
    </div>
<?php
}

function lapi_reservations() { ?>
    <div class="wrap">
        <h1>Reservations</h1>
        <table class="wp-list-table widefat striped">
            <thead>
                <tr>
                    <th class="manage-column">ID</th>
                    <th class="manage-column">Name</th>
                    <th class="manage-column">Date of Reservation</th>
                    <th class="manage-column">Email</th>
                    <th class="manage-column">Phone</th>
                    <th class="manage-column">Message</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    global $wpdb;
                    $table = $wpdb->prefix.'reservations';
                    $reservations = $wpdb->get_results("select * from $table", ARRAY_A);
                
                    foreach($reservations as $reservation) {
                        ?>
                            <tr>
                                <td><?php echo $reservation['id']; ?></td>
                                <td><?php echo $reservation['name']; ?></td>
                                <td><?php echo $reservation['date']; ?></td>
                                <td><?php echo $reservation['email']; ?></td>
                                <td><?php echo $reservation['phone']; ?></td>
                                <td><?php echo $reservation['message']; ?></td>
                            </tr>
                        <?php
                    }
                ?>
            </tbody>
        </table>
    </div>
<?php } ?>