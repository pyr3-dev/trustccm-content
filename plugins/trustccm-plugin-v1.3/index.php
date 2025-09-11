<?php
ob_start(); // Ensure no prior output before redirect
/*
Plugin Name: Trustccm Plugin
Description: Add Trustccm Functionality.
Version: 1.0
Author: Danny Boy Gomez
*/


add_action('admin_menu', 'trccm_register_admin_menu');

function trccm_register_admin_menu() {
    add_menu_page(
        'TRCCM Submissions',                // Page title
        'TRCCM Contacts',                   // Menu title
        'manage_options',                  // Capability
        'trccm_contact_submissions',       // Menu slug
        'trccm_render_submissions_page',   // Callback function
        'dashicons-email',                 // Icon
        25                                 // Position
    );

     add_submenu_page(
        'trccm_contact_submissions',       // Parent slug
        'All Submissions',                 // Page title
        'All Submissions',                 // Submenu title
        'manage_options',                  // Capability
        'trccm_contact_submissions',       // Menu slug (same as parent = loads same page)
        'trccm_render_submissions_page'    // Callback function
    );

    // Example: another submenu page (e.g., Settings)
    add_submenu_page(
        'trccm_contact_submissions',       // Parent slug
        'Contact Settings',                // Page title
        'Settings',                        // Submenu title
        'manage_options',                  // Capability
        'trccm_contact_settings',          // Submenu slug
        'trccm_render_settings_page'       // Callback function
    );

     // ✅ Add this submenu for Newsletter Emails
    add_submenu_page(
        'trccm_contact_submissions',
        'Newsletter Subscribers',
        'Newsletter Emails',
        'manage_options',
        'trccm_newsletter_subscribers',
        'trccm_render_newsletter_page'
    );

}





register_activation_hook(__FILE__, 'trccm_create_tables');

function trccm_create_tables() {
    global $wpdb;
    $charset_collate = $wpdb->get_charset_collate();

    // Contact form table
    $contact_form = $wpdb->prefix . 'trccm_contact_submissions';
    $sql_contact_form = "CREATE TABLE $contact_form (
        id BIGINT UNSIGNED NOT NULL AUTO_INCREMENT,
        name VARCHAR(100),
        business_name VARCHAR(150),
        website VARCHAR(255),
        challenge TEXT,
        budget VARCHAR(50),
        phone VARCHAR(50),
        submitted_at DATETIME DEFAULT CURRENT_TIMESTAMP,
        PRIMARY KEY (id)
    ) $charset_collate;";

    // Newsletter table
    $newsletter_table = $wpdb->prefix . 'trccm_newsletter_subscribers';
    $sql_newsletter = "CREATE TABLE $newsletter_table (
        id BIGINT UNSIGNED NOT NULL AUTO_INCREMENT,
        email VARCHAR(255) NOT NULL UNIQUE,
        subscribed_at DATETIME DEFAULT CURRENT_TIMESTAMP,
        PRIMARY KEY (id)
    ) $charset_collate;";

    require_once(ABSPATH . 'wp-admin/includes/upgrade.php');
    dbDelta($sql_contact_form);
    dbDelta($sql_newsletter);
}





add_action('wp_ajax_trccm_subscribe_newsletter', 'trccm_handle_newsletter_ajax');
add_action('wp_ajax_nopriv_trccm_subscribe_newsletter', 'trccm_handle_newsletter_ajax');

function trccm_handle_newsletter_ajax() {
    if (!isset($_POST['email']) || !is_email($_POST['email'])) {
        wp_send_json_error(['message' => 'Please enter a valid email address.']);
    }

    global $wpdb;
    $email = sanitize_email($_POST['email']);
    $table = $wpdb->prefix . 'trccm_newsletter_subscribers';

    $exists = $wpdb->get_var($wpdb->prepare("SELECT COUNT(*) FROM $table WHERE email = %s", $email));
    if ($exists) {
        wp_send_json_error(['message' => 'You are already subscribed.']);
    }

    $wpdb->insert($table, [
        'email' => $email,
        'subscribed_at' => current_time('mysql'),
    ]);

    wp_send_json_success(['message' => 'Thanks for subscribing!']);
}


function trccm_render_newsletter_page() {
    global $wpdb;
    $table = $wpdb->prefix . 'trccm_newsletter_subscribers';

    // Handle deletion
    if (isset($_GET['delete_id']) && is_numeric($_GET['delete_id'])) {
        $wpdb->delete($table, ['id' => intval($_GET['delete_id'])]);
        echo '<div class="notice notice-success is-dismissible"><p>Email deleted.</p></div>';
    }

    // CSV export
    if (isset($_GET['export_csv'])) {
        $filename = "newsletter-subscribers-" . date('Y-m-d') . ".csv";
        header("Content-Type: text/csv");
        header("Content-Disposition: attachment; filename={$filename}");
        header("Pragma: no-cache");
        header("Expires: 0");

        $rows = $wpdb->get_results("SELECT * FROM $table ORDER BY subscribed_at DESC", ARRAY_A);
        $output = fopen('php://output', 'w');
        fputcsv($output, ['ID', 'Email', 'Subscribed At']);
        foreach ($rows as $row) {
            fputcsv($output, [$row['id'], $row['email'], $row['subscribed_at']]);
        }
        fclose($output);
        exit;
    }

    // Pagination
    $limit = 20;
    $page = isset($_GET['paged']) ? max(1, intval($_GET['paged'])) : 1;
    $offset = ($page - 1) * $limit;
    $total = $wpdb->get_var("SELECT COUNT(*) FROM $table");
    $results = $wpdb->get_results("SELECT * FROM $table ORDER BY subscribed_at DESC LIMIT $limit OFFSET $offset");

    echo '<div class="wrap">';
    echo '<h1>Newsletter Subscribers</h1>';
    echo '<a href="?page=trccm_newsletter_subscribers&export_csv=1" class="button-primary">Export CSV</a>';

    if ($results) {
        echo '<table class="widefat fixed striped"><thead><tr><th>ID</th><th>Email</th><th>Subscribed At</th><th>Action</th></tr></thead><tbody>';
        foreach ($results as $row) {
            echo '<tr>';
            echo '<td>' . esc_html($row->id) . '</td>';
            echo '<td>' . esc_html($row->email) . '</td>';
            echo '<td>' . esc_html($row->subscribed_at) . '</td>';
            echo '<td><a href="?page=trccm_newsletter_subscribers&delete_id=' . esc_attr($row->id) . '" class="button-link-delete" onclick="return confirm(\'Are you sure?\')">Delete</a></td>';
            echo '</tr>';
        }
        echo '</tbody></table>';

        // Pagination links
        $total_pages = ceil($total / $limit);
        echo '<div class="tablenav"><div class="tablenav-pages">';
        for ($i = 1; $i <= $total_pages; $i++) {
            $class = ($i == $page) ? ' class="current-page"' : '';
            echo '<a href="?page=trccm_newsletter_subscribers&paged=' . $i . '"' . $class . '>' . $i . '</a> ';
        }
        echo '</div></div>';
    } else {
        echo '<p>No subscribers found.</p>';
    }

    echo '</div>';
}



add_shortcode('trccm_newsletter_form', 'trccm_render_newsletter_form');
function trccm_render_newsletter_form() {
    ob_start(); ?>
    <form id="trccm-newsletter-form" class="flex items-stretch space-x-2" method="post">
        <input id="newsletter" type="email" name="newsletter_email" placeholder="Enter your email" required
            class="w-full bg-transparent border border-gray-500 rounded-md px-4 py-3 placeholder-gray-400 focus:outline-none focus:ring-2" />
        <button type="submit"
            class="flex items-center space-x-2 bg-[#ca8a04] hover:bg-[#a16207] transition rounded-md px-6 py-3 font-semibold">
            <span>Subscribe</span>
            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24"
                stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M17 8l4 4m0 0l-4 4m4-4H3" />
            </svg>
        </button>
    </form>
    <p id="newsletter-response" class="mt-4 text-sm"></p>

    <script>
    document.getElementById('trccm-newsletter-form').addEventListener('submit', function (e) {
        e.preventDefault();
        const emailInput = this.querySelector('[name="newsletter_email"]');
        const messageBox = document.getElementById('newsletter-response');
        const email = emailInput.value;

        messageBox.textContent = 'Submitting...';
        messageBox.className = 'mt-4 text-sm text-gray-500';

        fetch('<?php echo admin_url("admin-ajax.php"); ?>', {
            method: 'POST',
            headers: { 'Content-Type': 'application/x-www-form-urlencoded' },
            body: new URLSearchParams({
                action: 'trccm_subscribe_newsletter',
                email: email
            })
        })
        .then(res => res.json())
        .then(data => {
            messageBox.textContent = data.data.message;
            messageBox.className = 'mt-4 text-sm ' + (data.success ? 'text-green-600' : 'text-red-600');
            if (data.success) emailInput.value = '';
        })
        .catch(() => {
            messageBox.textContent = 'Something went wrong. Please try again.';
            messageBox.className = 'mt-4 text-sm text-red-600';
        });
    });
    </script>
    <?php return ob_get_clean();
}







function trccm_render_submissions_page() {
    global $wpdb;
    $table = $wpdb->prefix . 'trccm_contact_submissions';

    // Handle Delete
    if (isset($_GET['action']) && $_GET['action'] === 'delete' && isset($_GET['id'])) {
        $id = intval($_GET['id']);
        $wpdb->delete($table, ['id' => $id]);
        echo '<div class="notice notice-success"><p>Submission deleted.</p></div>';
    }

    // Handle Update
    if (isset($_POST['trccm_update_submission'])) {
        $id = intval($_POST['id']);
        $wpdb->update($table, [
            'name' => sanitize_text_field($_POST['name']),
            'business_name' => sanitize_text_field($_POST['business_name']),
            'website' => esc_url_raw($_POST['website']),
            'challenge' => sanitize_textarea_field($_POST['challenge']),
            'budget' => sanitize_text_field($_POST['budget']),
            'phone' => sanitize_text_field($_POST['phone']),
        ], ['id' => $id]);

        echo '<div class="notice notice-success"><p>Submission updated.</p></div>';
    }

    // Handle Edit Form Display
    if (isset($_GET['action']) && $_GET['action'] === 'edit' && isset($_GET['id'])) {
        $edit_id = intval($_GET['id']);
        $entry = $wpdb->get_row("SELECT * FROM $table WHERE id = $edit_id", ARRAY_A);

        if ($entry) {
            echo '<div class="wrap"><h2>Edit Submission</h2>';
            echo '<form method="post">';
            echo '<input type="hidden" name="id" value="' . esc_attr($entry['id']) . '">';
            echo '<table class="form-table"><tbody>';
            echo '<tr><th>Name</th><td><input type="text" name="name" value="' . esc_attr($entry['name']) . '" class="regular-text" required></td></tr>';
            echo '<tr><th>Business</th><td><input type="text" name="business_name" value="' . esc_attr($entry['business_name']) . '" class="regular-text"></td></tr>';
            echo '<tr><th>Website</th><td><input type="url" name="website" value="' . esc_url($entry['website']) . '" class="regular-text"></td></tr>';
            echo '<tr><th>Challenge</th><td><textarea name="challenge" class="large-text">' . esc_textarea($entry['challenge']) . '</textarea></td></tr>';
            echo '<tr><th>Budget</th><td><input type="text" name="budget" value="' . esc_attr($entry['budget']) . '" class="regular-text"></td></tr>';
            echo '<tr><th>Phone</th><td><input type="text" name="phone" value="' . esc_attr($entry['phone']) . '" class="regular-text"></td></tr>';
            echo '</tbody></table>';
            echo '<p><input type="submit" name="trccm_update_submission" class="button button-primary" value="Update Submission"></p>';
            echo '</form></div>';
        }
    }

    // Pagination
    $per_page = 10;
    $paged = isset($_GET['paged']) ? max(1, intval($_GET['paged'])) : 1;
    $offset = ($paged - 1) * $per_page;

    $total_items = $wpdb->get_var("SELECT COUNT(*) FROM $table");
    $results = $wpdb->get_results(
        $wpdb->prepare("SELECT * FROM $table ORDER BY submitted_at DESC LIMIT %d OFFSET %d", $per_page, $offset),
        ARRAY_A
    );

    echo '<div class="wrap">';
    echo '<h1 class="wp-heading-inline">TRCCM Contact Submissions</h1>';
    echo '<table class="widefat fixed striped">';
    echo '<thead>
            <tr>
                <th>Name</th>
                <th>Business</th>
                <th>Website</th>
                <th>Challenge</th>
                <th>Budget</th>
                <th>Phone</th>
                <th>Submitted</th>
                <th>Actions</th>
            </tr>
          </thead><tbody>';

    if ($results) {
        foreach ($results as $row) {
            $edit_url = admin_url('admin.php?page=trccm_contact_submissions&action=edit&id=' . $row['id']);
            $delete_url = admin_url('admin.php?page=trccm_contact_submissions&action=delete&id=' . $row['id']);
            echo '<tr>';
            echo '<td>' . esc_html($row['name']) . '</td>';
            echo '<td>' . esc_html($row['business_name']) . '</td>';
            echo '<td><a href="' . esc_url($row['website']) . '" target="_blank">' . esc_html($row['website']) . '</a></td>';
            echo '<td>' . esc_html($row['challenge']) . '</td>';
            echo '<td>' . esc_html($row['budget']) . '</td>';
            echo '<td>' . esc_html($row['phone']) . '</td>';
            echo '<td>' . esc_html($row['submitted_at']) . '</td>';
            echo '<td><a href="' . esc_url($edit_url) . '" class="button">Edit</a> ';
            echo '<a href="' . esc_url($delete_url) . '" class="button delete-button" onclick="return confirm(\'Are you sure?\')">Delete</a></td>';
            echo '</tr>';
        }
    } else {
        echo '<tr><td colspan="8">No submissions found.</td></tr>';
    }

    echo '</tbody></table>';

    // Pagination links
    $total_pages = ceil($total_items / $per_page);
    if ($total_pages > 1) {
        $base_url = admin_url('admin.php?page=trccm_contact_submissions');
        echo '<div class="tablenav bottom"><div class="tablenav-pages">';
        for ($i = 1; $i <= $total_pages; $i++) {
            $class = ($i === $paged) ? ' class="current-page button"' : ' class="button"';
            echo '<a href="' . esc_url($base_url . '&paged=' . $i) . '"' . $class . '>' . $i . '</a> ';
        }
        echo '</div></div>';
    }

    echo '</div>';
}


add_action('wp_ajax_trccm_submit_contact_form', 'trccm_handle_ajax_form');
add_action('wp_ajax_nopriv_trccm_submit_contact_form', 'trccm_handle_ajax_form');

function trccm_handle_ajax_form() {
    global $wpdb;
    $table = $wpdb->prefix . 'trccm_contact_submissions';

    // Validate required field
    if (empty($_POST['name'])) {
        wp_send_json_error(['message' => 'Name is required.']);
    }

    $data = [
        'name'          => sanitize_text_field($_POST['name']),
        'business_name' => sanitize_text_field($_POST['business_name']),
        'website'       => esc_url_raw($_POST['website']),
        'challenge'     => sanitize_textarea_field($_POST['challenge']),
        'budget'        => sanitize_text_field($_POST['budget']),
        'phone'         => sanitize_text_field($_POST['phone']),
    ];

    $inserted = $wpdb->insert($table, $data);

    if ($inserted) {
        wp_send_json_success(['message' => 'Submitted successfully']);
    } else {
        error_log('TRCCM Insert Error: ' . $wpdb->last_error); // log error
        wp_send_json_error(['message' => 'DB Insert failed']);
    }
}

function trccm_render_settings_page () {

     echo "Settings Page";
}



// * Common SEO Functionality *//

if (!defined('ABSPATH')) exit;

class common_SEO_Plugin {
    public function __construct() {
        add_action('add_meta_boxes', [$this, 'add_seo_meta_box']);
        add_action('save_post', [$this, 'save_seo_meta']);
        add_action('wp_head', [$this, 'output_seo_meta'], 1);
        add_action('admin_menu', [$this, 'add_homepage_seo_menu']);
        add_action('admin_init', [$this, 'register_homepage_seo_settings']);
    }

    // Add SEO Meta Box to Posts and Pages
    public function add_seo_meta_box() {
        $post_types = ['page', 'post'];
        foreach ($post_types as $type) {
            add_meta_box(
                'common_seo_meta',
                'common SEO Settings',
                [$this, 'seo_meta_box_callback'],
                $type,
                'normal',
                'high'
            );
        }
    }

    // SEO Meta Box Content
    public function seo_meta_box_callback($post) {
        $seo_title     = get_post_meta($post->ID, '_common_seo_title', true);
        $seo_desc      = get_post_meta($post->ID, '_common_seo_description', true);
        $meta_keywords = get_post_meta($post->ID, '_common_meta_keywords', true);
        $focus_keyword = get_post_meta($post->ID, '_common_focus_keyword', true);
        $robots        = get_post_meta($post->ID, '_common_robots_meta', true);
        ?>
        <p><label>SEO Title:</label>
        <input type="text" name="common_seo_title" value="<?php echo esc_attr($seo_title); ?>" style="width:100%;"></p>

        <p><label>Meta Description:</label>
        <textarea name="common_seo_description" rows="3" style="width:100%;"><?php echo esc_textarea($seo_desc); ?></textarea></p>

        <p><label>Meta Keywords:</label>
        <input type="text" name="common_meta_keywords" value="<?php echo esc_attr($meta_keywords); ?>" style="width:100%;">
        <small>Comma-separated (e.g., sell house fast, home buyers Florida)</small></p>

        <p><label>Focus Keyword:</label>
        <input type="text" name="common_focus_keyword" value="<?php echo esc_attr($focus_keyword); ?>" style="width:100%;"></p>

        <p><label>Meta Robots:</label>
        <select name="common_robots_meta" style="width:100%;">
            <option value="index, follow" <?php selected($robots, 'index, follow'); ?>>index, follow</option>
            <option value="noindex, follow" <?php selected($robots, 'noindex, follow'); ?>>noindex, follow</option>
            <option value="index, nofollow" <?php selected($robots, 'index, nofollow'); ?>>index, nofollow</option>
            <option value="noindex, nofollow" <?php selected($robots, 'noindex, nofollow'); ?>>noindex, nofollow</option>
        </select></p>
        <?php
    }

    // Save Meta Fields
    public function save_seo_meta($post_id) {
        if (defined('DOING_AUTOSAVE') && DOING_AUTOSAVE) return;
        if (!current_user_can('edit_post', $post_id)) return;

        update_post_meta($post_id, '_common_seo_title', sanitize_text_field($_POST['common_seo_title']));
        update_post_meta($post_id, '_common_seo_description', sanitize_textarea_field($_POST['common_seo_description']));
        update_post_meta($post_id, '_common_meta_keywords', sanitize_text_field($_POST['common_meta_keywords']));
        update_post_meta($post_id, '_common_focus_keyword', sanitize_text_field($_POST['common_focus_keyword']));
        update_post_meta($post_id, '_common_robots_meta', sanitize_text_field($_POST['common_robots_meta']));
    }

    // Output Meta Tags in <head>
    public function output_seo_meta() {
        global $post;
        if (!is_singular() && !is_front_page()) return;

        $seo_title     = '';
        $seo_desc      = '';
        $robots        = '';
        $meta_keywords = '';
        $focus_kw      = '';
        $url           = home_url();
        $site_name     = get_bloginfo('name');

        if (is_front_page()) {
            $seo_title     = get_option('common_homepage_seo_title');
            $seo_desc      = get_option('common_homepage_seo_description');
            $robots        = get_option('common_homepage_robots_meta');
            $meta_keywords = get_option('common_homepage_meta_keywords');
            $focus_kw      = get_option('common_homepage_focus_keyword');
        } elseif (is_singular() && isset($post->ID)) {
            $seo_title     = get_post_meta($post->ID, '_common_seo_title', true);
            $seo_desc      = get_post_meta($post->ID, '_common_seo_description', true);
            $robots        = get_post_meta($post->ID, '_common_robots_meta', true);
            $meta_keywords = get_post_meta($post->ID, '_common_meta_keywords', true);
            $focus_kw      = get_post_meta($post->ID, '_common_focus_keyword', true);
            $url           = get_permalink($post->ID);
        }

        if (!empty($seo_title)) {
            echo '<title>' . esc_html($seo_title) . '</title>' . "\n";
            echo '<meta property="og:title" content="' . esc_attr($seo_title) . '">' . "\n";
        }

        if (!empty($seo_desc)) {
            echo '<meta name="description" content="' . esc_attr($seo_desc) . '">' . "\n";
            echo '<meta property="og:description" content="' . esc_attr($seo_desc) . '">' . "\n";
        }

        if (!empty($robots)) {
            echo '<meta name="robots" content="' . esc_attr($robots) . '">' . "\n";
        }

        if (!empty($meta_keywords)) {
            echo '<meta name="keywords" content="' . esc_attr($meta_keywords) . '">' . "\n";
        }

        if (!empty($focus_kw)) {
            echo '<meta name="common-focus-keyword" content="' . esc_attr($focus_kw) . '">' . "\n";
        }

        // Open Graph general tags
        echo '<meta property="og:type" content="website">' . "\n";
        echo '<meta property="og:url" content="' . esc_url($url) . '">' . "\n";
        echo '<meta property="og:site_name" content="' . esc_attr($site_name) . '">' . "\n";
    }

    // Homepage SEO Settings Admin Page
    public function add_homepage_seo_menu() {
        add_submenu_page(
            'options-general.php',
            'Homepage SEO',
            'Homepage SEO',
            'manage_options',
            'common-homepage-seo',
            [$this, 'homepage_seo_settings_page']
        );
    }

    public function homepage_seo_settings_page() {
        ?>
        <div class="wrap">
            <h1>Homepage SEO Settings</h1>
            <form method="post" action="options.php">
                <?php
                settings_fields('common_homepage_seo_group');
                do_settings_sections('common-homepage-seo');
                submit_button();
                ?>
            </form>
        </div>
        <?php
    }

    public function register_homepage_seo_settings() {
        register_setting('common_homepage_seo_group', 'common_homepage_seo_title');
        register_setting('common_homepage_seo_group', 'common_homepage_seo_description');
        register_setting('common_homepage_seo_group', 'common_homepage_robots_meta');
        register_setting('common_homepage_seo_group', 'common_homepage_focus_keyword');
        register_setting('common_homepage_seo_group', 'common_homepage_meta_keywords');

        add_settings_section('common_homepage_seo_section', '', null, 'common-homepage-seo');

        add_settings_field('common_homepage_seo_title', 'SEO Title', function () {
            echo '<input type="text" name="common_homepage_seo_title" value="' . esc_attr(get_option('common_homepage_seo_title')) . '" style="width:100%;">';
        }, 'common-homepage-seo', 'common_homepage_seo_section');

        add_settings_field('common_homepage_seo_description', 'Meta Description', function () {
            echo '<textarea name="common_homepage_seo_description" rows="3" style="width:100%;">' . esc_textarea(get_option('common_homepage_seo_description')) . '</textarea>';
        }, 'common-homepage-seo', 'common_homepage_seo_section');

        add_settings_field('common_homepage_meta_keywords', 'Meta Keywords', function () {
            echo '<input type="text" name="common_homepage_meta_keywords" value="' . esc_attr(get_option('common_homepage_meta_keywords')) . '" style="width:100%;">';
        }, 'common-homepage-seo', 'common_homepage_seo_section');

        add_settings_field('common_homepage_focus_keyword', 'Focus Keyword', function () {
            echo '<input type="text" name="common_homepage_focus_keyword" value="' . esc_attr(get_option('common_homepage_focus_keyword')) . '" style="width:100%;">';
        }, 'common-homepage-seo', 'common_homepage_seo_section');

        add_settings_field('common_homepage_robots_meta', 'Meta Robots', function () {
            $value = get_option('common_homepage_robots_meta');
            ?>
            <select name="common_homepage_robots_meta" style="width:100%;">
                <option value="index, follow" <?php selected($value, 'index, follow'); ?>>index, follow</option>
                <option value="noindex, follow" <?php selected($value, 'noindex, follow'); ?>>noindex, follow</option>
                <option value="index, nofollow" <?php selected($value, 'index, nofollow'); ?>>index, nofollow</option>
                <option value="noindex, nofollow" <?php selected($value, 'noindex, nofollow'); ?>>noindex, nofollow</option>
            </select>
            <?php
        }, 'common-homepage-seo', 'common_homepage_seo_section');
    }
}

new common_SEO_Plugin();

// * End Common SEO Functionality *//