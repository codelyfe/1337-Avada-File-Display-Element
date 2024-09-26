<?php
/*
Plugin Name: 1337 Avada File Display Element
Description: Avada Fusion Builder element that allows the user to select and display a file with an icon, title, description, and download button.
Version: 1.0
Author: Randal Burger
Author URI: https://shipwr3ck.com
License: GPLv2
License URI: https://www.gnu.org/licenses/gpl-2.0.html
*/

if (!defined('ABSPATH')) {
    exit;
}

// Register the custom Avada element
function register_avada_file_display_element() {
    if (function_exists('fusion_builder_map')) {
        fusion_builder_map(
            array(
                'name' => esc_attr__('File Display Block', 'avada-file-display'),
                'shortcode' => 'file_display_block',
                'icon' => 'fusiona-folder',
                'description' => esc_attr__('Display a file with an icon, title, description, and download button.', 'avada-file-display'),
                'params' => array(
                    array(
                        'type' => 'upload',
                        'heading' => esc_attr__('Select File', 'avada-file-display'),
                        'param_name' => 'file_url',
                        'value' => '',
                        'description' => esc_attr__('Upload or select the file you want to display.', 'avada-file-display'),
                    ),
                    array(
                        'type' => 'iconpicker',
                        'heading' => esc_attr__('Select Icon', 'avada-file-display'),
                        'param_name' => 'file_icon',
                        'value' => 'fusiona-folder',
                        'description' => esc_attr__('Choose an icon to represent the file.', 'avada-file-display'),
                    ),
                    array(
                        'type' => 'textfield',
                        'heading' => esc_attr__('Title', 'avada-file-display'),
                        'param_name' => 'file_title',
                        'value' => '',
                        'description' => esc_attr__('Enter the title of the file.', 'avada-file-display'),
                    ),
                    array(
                        'type' => 'textarea',
                        'heading' => esc_attr__('Description', 'avada-file-display'),
                        'param_name' => 'file_description',
                        'value' => '',
                        'description' => esc_attr__('Add a description for the file.', 'avada-file-display'),
                    ),
                    array(
                        'type' => 'textfield',
                        'heading' => esc_attr__('Button Text', 'avada-file-display'),
                        'param_name' => 'button_text',
                        'value' => esc_attr__('Download', 'avada-file-display'),
                        'description' => esc_attr__('Enter the text for the download button.', 'avada-file-display'),
                    ),
                    array(
                        'type' => 'textfield',
                        'heading' => esc_attr__('Custom CSS Class', 'avada-file-display'),
                        'param_name' => 'custom_class',
                        'value' => '',
                        'description' => esc_attr__('Add a custom CSS class for styling.', 'avada-file-display'),
                    ),
                )
            )
        );
    }
}
add_action('fusion_builder_before_init', 'register_avada_file_display_element');

// Shortcode for displaying the file with icon, title, description, and button
function file_display_block_shortcode($atts) {
    $args = shortcode_atts(
        array(
            'file_url' => '',
            'file_icon' => 'fusiona-folder',
            'file_title' => '',
            'file_description' => '',
            'button_text' => 'Download',
            'custom_class' => ''
        ),
        $atts
    );

    if (empty($args['file_url'])) {
        return esc_html__('No file selected.', 'avada-file-display');
    }

    ob_start();
    ?>
    <div class="file-display-block <?php echo esc_attr($args['custom_class']); ?>">
        <div class="file-icon">
            <i class="<?php echo esc_attr($args['file_icon']); ?>"></i>
        </div>
        <div class="file-content">
            <h3 class="file-title"><?php echo esc_html($args['file_title']); ?></h3>
            <p class="file-description"><?php echo esc_html($args['file_description']); ?></p>
            <a href="<?php echo esc_url($args['file_url']); ?>" class="file-download-button" download>
                <?php echo esc_html($args['button_text']); ?>
            </a>
        </div>
    </div>
    <?php
    return ob_get_clean();
}
add_shortcode('file_display_block', 'file_display_block_shortcode');
