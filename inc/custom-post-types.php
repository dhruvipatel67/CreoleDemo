<?php
/**
 * Custom Post Types for Sailor Theme
 *
 * @package Sailor
 */

/**
 * Register custom post types
 */
function sailor_register_custom_post_types() {
    
    // Portfolio Custom Post Type
    $portfolio_labels = array(
        'name'                  => _x( 'Portfolio Items', 'Post type general name', 'sailor' ),
        'singular_name'         => _x( 'Portfolio Item', 'Post type singular name', 'sailor' ),
        'menu_name'             => _x( 'Portfolio', 'Admin Menu text', 'sailor' ),
        'name_admin_bar'        => _x( 'Portfolio Item', 'Add New on Toolbar', 'sailor' ),
        'add_new'               => __( 'Add New', 'sailor' ),
        'add_new_item'          => __( 'Add New Portfolio Item', 'sailor' ),
        'new_item'              => __( 'New Portfolio Item', 'sailor' ),
        'edit_item'             => __( 'Edit Portfolio Item', 'sailor' ),
        'view_item'             => __( 'View Portfolio Item', 'sailor' ),
        'all_items'             => __( 'All Portfolio Items', 'sailor' ),
        'search_items'          => __( 'Search Portfolio Items', 'sailor' ),
        'parent_item_colon'     => __( 'Parent Portfolio Items:', 'sailor' ),
        'not_found'             => __( 'No portfolio items found.', 'sailor' ),
        'not_found_in_trash'    => __( 'No portfolio items found in Trash.', 'sailor' ),
        'featured_image'        => _x( 'Portfolio Image', 'Overrides the "Featured Image" phrase', 'sailor' ),
        'set_featured_image'    => _x( 'Set portfolio image', 'Overrides the "Set featured image" phrase', 'sailor' ),
        'remove_featured_image' => _x( 'Remove portfolio image', 'Overrides the "Remove featured image" phrase', 'sailor' ),
        'use_featured_image'    => _x( 'Use as portfolio image', 'Overrides the "Use as featured image" phrase', 'sailor' ),
        'archives'              => _x( 'Portfolio archives', 'The post type archive label used in nav menus', 'sailor' ),
        'insert_into_item'      => _x( 'Insert into portfolio item', 'Overrides the "Insert into post" phrase', 'sailor' ),
        'uploaded_to_this_item' => _x( 'Uploaded to this portfolio item', 'Overrides the "Uploaded to this post" phrase', 'sailor' ),
        'filter_items_list'     => _x( 'Filter portfolio items list', 'Screen reader text for the filter links heading on the post type listing screen', 'sailor' ),
        'items_list_navigation' => _x( 'Portfolio items list navigation', 'Screen reader text for the pagination heading on the post type listing screen', 'sailor' ),
        'items_list'            => _x( 'Portfolio items list', 'Screen reader text for the items list heading on the post type listing screen', 'sailor' ),
    );

    $portfolio_args = array(
        'labels'             => $portfolio_labels,
        'public'             => true,
        'publicly_queryable' => true,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'query_var'          => true,
        'rewrite'            => array( 'slug' => 'portfolio' ),
        'capability_type'    => 'post',
        'has_archive'        => true,
        'hierarchical'       => false,
        'menu_position'      => null,
        'menu_icon'          => 'dashicons-portfolio',
        'supports'           => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt', 'custom-fields' ),
        'show_in_rest'       => true,
    );

    register_post_type( 'portfolio', $portfolio_args );

    // Service Custom Post Type
    $service_labels = array(
        'name'                  => _x( 'Services', 'Post type general name', 'sailor' ),
        'singular_name'         => _x( 'Service', 'Post type singular name', 'sailor' ),
        'menu_name'             => _x( 'Services', 'Admin Menu text', 'sailor' ),
        'name_admin_bar'        => _x( 'Service', 'Add New on Toolbar', 'sailor' ),
        'add_new'               => __( 'Add New', 'sailor' ),
        'add_new_item'          => __( 'Add New Service', 'sailor' ),
        'new_item'              => __( 'New Service', 'sailor' ),
        'edit_item'             => __( 'Edit Service', 'sailor' ),
        'view_item'             => __( 'View Service', 'sailor' ),
        'all_items'             => __( 'All Services', 'sailor' ),
        'search_items'          => __( 'Search Services', 'sailor' ),
        'parent_item_colon'     => __( 'Parent Services:', 'sailor' ),
        'not_found'             => __( 'No services found.', 'sailor' ),
        'not_found_in_trash'    => __( 'No services found in Trash.', 'sailor' ),
        'featured_image'        => _x( 'Service Image', 'Overrides the "Featured Image" phrase', 'sailor' ),
        'set_featured_image'    => _x( 'Set service image', 'Overrides the "Set featured image" phrase', 'sailor' ),
        'remove_featured_image' => _x( 'Remove service image', 'Overrides the "Remove featured image" phrase', 'sailor' ),
        'use_featured_image'    => _x( 'Use as service image', 'Overrides the "Use as featured image" phrase', 'sailor' ),
        'archives'              => _x( 'Service archives', 'The post type archive label used in nav menus', 'sailor' ),
        'insert_into_item'      => _x( 'Insert into service', 'Overrides the "Insert into post" phrase', 'sailor' ),
        'uploaded_to_this_item' => _x( 'Uploaded to this service', 'Overrides the "Uploaded to this post" phrase', 'sailor' ),
        'filter_items_list'     => _x( 'Filter services list', 'Screen reader text for the filter links heading on the post type listing screen', 'sailor' ),
        'items_list_navigation' => _x( 'Services list navigation', 'Screen reader text for the pagination heading on the post type listing screen', 'sailor' ),
        'items_list'            => _x( 'Services list', 'Screen reader text for the items list heading on the post type listing screen', 'sailor' ),
    );

    $service_args = array(
        'labels'             => $service_labels,
        'public'             => true,
        'publicly_queryable' => true,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'query_var'          => true,
        'rewrite'            => array( 'slug' => 'service' ),
        'capability_type'    => 'post',
        'has_archive'        => true,
        'hierarchical'       => false,
        'menu_position'      => null,
        'menu_icon'          => 'dashicons-admin-tools',
        'supports'           => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt', 'custom-fields' ),
        'show_in_rest'       => true,
    );

    register_post_type( 'service', $service_args );

    // Team Member Custom Post Type
    $team_labels = array(
        'name'                  => _x( 'Team Members', 'Post type general name', 'sailor' ),
        'singular_name'         => _x( 'Team Member', 'Post type singular name', 'sailor' ),
        'menu_name'             => _x( 'Team', 'Admin Menu text', 'sailor' ),
        'name_admin_bar'        => _x( 'Team Member', 'Add New on Toolbar', 'sailor' ),
        'add_new'               => __( 'Add New', 'sailor' ),
        'add_new_item'          => __( 'Add New Team Member', 'sailor' ),
        'new_item'              => __( 'New Team Member', 'sailor' ),
        'edit_item'             => __( 'Edit Team Member', 'sailor' ),
        'view_item'             => __( 'View Team Member', 'sailor' ),
        'all_items'             => __( 'All Team Members', 'sailor' ),
        'search_items'          => __( 'Search Team Members', 'sailor' ),
        'parent_item_colon'     => __( 'Parent Team Members:', 'sailor' ),
        'not_found'             => __( 'No team members found.', 'sailor' ),
        'not_found_in_trash'    => __( 'No team members found in Trash.', 'sailor' ),
        'featured_image'        => _x( 'Team Member Photo', 'Overrides the "Featured Image" phrase', 'sailor' ),
        'set_featured_image'    => _x( 'Set team member photo', 'Overrides the "Set featured image" phrase', 'sailor' ),
        'remove_featured_image' => _x( 'Remove team member photo', 'Overrides the "Remove featured image" phrase', 'sailor' ),
        'use_featured_image'    => _x( 'Use as team member photo', 'Overrides the "Use as featured image" phrase', 'sailor' ),
        'archives'              => _x( 'Team archives', 'The post type archive label used in nav menus', 'sailor' ),
        'insert_into_item'      => _x( 'Insert into team member', 'Overrides the "Insert into post" phrase', 'sailor' ),
        'uploaded_to_this_item' => _x( 'Uploaded to this team member', 'Overrides the "Uploaded to this post" phrase', 'sailor' ),
        'filter_items_list'     => _x( 'Filter team members list', 'Screen reader text for the filter links heading on the post type listing screen', 'sailor' ),
        'items_list_navigation' => _x( 'Team members list navigation', 'Screen reader text for the pagination heading on the post type listing screen', 'sailor' ),
        'items_list'            => _x( 'Team members list', 'Screen reader text for the items list heading on the post type listing screen', 'sailor' ),
    );

    $team_args = array(
        'labels'             => $team_labels,
        'public'             => true,
        'publicly_queryable' => true,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'query_var'          => true,
        'rewrite'            => array( 'slug' => 'team' ),
        'capability_type'    => 'post',
        'has_archive'        => true,
        'hierarchical'       => false,
        'menu_position'      => null,
        'menu_icon'          => 'dashicons-groups',
        'supports'           => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt', 'custom-fields' ),
        'show_in_rest'       => true,
    );

    register_post_type( 'team', $team_args );
}
add_action( 'init', 'sailor_register_custom_post_types' );

/**
 * Register custom taxonomies
 */
function sailor_register_taxonomies() {
    
    // Portfolio Category Taxonomy
    $portfolio_cat_labels = array(
        'name'              => _x( 'Portfolio Categories', 'taxonomy general name', 'sailor' ),
        'singular_name'     => _x( 'Portfolio Category', 'taxonomy singular name', 'sailor' ),
        'search_items'      => __( 'Search Portfolio Categories', 'sailor' ),
        'all_items'         => __( 'All Portfolio Categories', 'sailor' ),
        'parent_item'       => __( 'Parent Portfolio Category', 'sailor' ),
        'parent_item_colon' => __( 'Parent Portfolio Category:', 'sailor' ),
        'edit_item'         => __( 'Edit Portfolio Category', 'sailor' ),
        'update_item'       => __( 'Update Portfolio Category', 'sailor' ),
        'add_new_item'      => __( 'Add New Portfolio Category', 'sailor' ),
        'new_item_name'     => __( 'New Portfolio Category Name', 'sailor' ),
        'menu_name'         => __( 'Categories', 'sailor' ),
    );

    $portfolio_cat_args = array(
        'hierarchical'      => true,
        'labels'            => $portfolio_cat_labels,
        'show_ui'           => true,
        'show_admin_column' => true,
        'query_var'         => true,
        'rewrite'           => array( 'slug' => 'portfolio-category' ),
        'show_in_rest'      => true,
    );

    register_taxonomy( 'portfolio_category', array( 'portfolio' ), $portfolio_cat_args );

    // Service Category Taxonomy
    $service_cat_labels = array(
        'name'              => _x( 'Service Categories', 'taxonomy general name', 'sailor' ),
        'singular_name'     => _x( 'Service Category', 'taxonomy singular name', 'sailor' ),
        'search_items'      => __( 'Search Service Categories', 'sailor' ),
        'all_items'         => __( 'All Service Categories', 'sailor' ),
        'parent_item'       => __( 'Parent Service Category', 'sailor' ),
        'parent_item_colon' => __( 'Parent Service Category:', 'sailor' ),
        'edit_item'         => __( 'Edit Service Category', 'sailor' ),
        'update_item'       => __( 'Update Service Category', 'sailor' ),
        'add_new_item'      => __( 'Add New Service Category', 'sailor' ),
        'new_item_name'     => __( 'New Service Category Name', 'sailor' ),
        'menu_name'         => __( 'Categories', 'sailor' ),
    );

    $service_cat_args = array(
        'hierarchical'      => true,
        'labels'            => $service_cat_labels,
        'show_ui'           => true,
        'show_admin_column' => true,
        'query_var'         => true,
        'rewrite'           => array( 'slug' => 'service-category' ),
        'show_in_rest'      => true,
    );

    register_taxonomy( 'service_category', array( 'service' ), $service_cat_args );

    // Team Department Taxonomy
    $team_dept_labels = array(
        'name'              => _x( 'Departments', 'taxonomy general name', 'sailor' ),
        'singular_name'     => _x( 'Department', 'taxonomy singular name', 'sailor' ),
        'search_items'      => __( 'Search Departments', 'sailor' ),
        'all_items'         => __( 'All Departments', 'sailor' ),
        'parent_item'       => __( 'Parent Department', 'sailor' ),
        'parent_item_colon' => __( 'Parent Department:', 'sailor' ),
        'edit_item'         => __( 'Edit Department', 'sailor' ),
        'update_item'       => __( 'Update Department', 'sailor' ),
        'add_new_item'      => __( 'Add New Department', 'sailor' ),
        'new_item_name'     => __( 'New Department Name', 'sailor' ),
        'menu_name'         => __( 'Departments', 'sailor' ),
    );

    $team_dept_args = array(
        'hierarchical'      => true,
        'labels'            => $team_dept_labels,
        'show_ui'           => true,
        'show_admin_column' => true,
        'query_var'         => true,
        'rewrite'           => array( 'slug' => 'department' ),
        'show_in_rest'      => true,
    );

    register_taxonomy( 'department', array( 'team' ), $team_dept_args );
}
add_action( 'init', 'sailor_register_taxonomies' );

/**
 * Add meta boxes for custom post types
 */
function sailor_add_meta_boxes() {
    
    // Portfolio Meta Box
    add_meta_box(
        'portfolio_details',
        __( 'Portfolio Details', 'sailor' ),
        'sailor_portfolio_details_callback',
        'portfolio',
        'normal',
        'default'
    );

    // Service Meta Box
    add_meta_box(
        'service_details',
        __( 'Service Details', 'sailor' ),
        'sailor_service_details_callback',
        'service',
        'normal',
        'default'
    );

    // Team Member Meta Box
    add_meta_box(
        'team_details',
        __( 'Team Member Details', 'sailor' ),
        'sailor_team_details_callback',
        'team',
        'normal',
        'default'
    );
}
add_action( 'add_meta_boxes', 'sailor_add_meta_boxes' );

/**
 * Portfolio meta box callback
 */
function sailor_portfolio_details_callback( $post ) {
    wp_nonce_field( 'sailor_portfolio_details', 'sailor_portfolio_details_nonce' );
    
    $client = get_post_meta( $post->ID, '_portfolio_client', true );
    $project_date = get_post_meta( $post->ID, '_portfolio_date', true );
    $project_url = get_post_meta( $post->ID, '_portfolio_url', true );
    
    ?>
    <p>
        <label for="portfolio_client"><?php _e( 'Client:', 'sailor' ); ?></label>
        <input type="text" id="portfolio_client" name="portfolio_client" value="<?php echo esc_attr( $client ); ?>" class="widefat">
    </p>
    <p>
        <label for="portfolio_date"><?php _e( 'Project Date:', 'sailor' ); ?></label>
        <input type="text" id="portfolio_date" name="portfolio_date" value="<?php echo esc_attr( $project_date ); ?>" class="widefat">
    </p>
    <p>
        <label for="portfolio_url"><?php _e( 'Project URL:', 'sailor' ); ?></label>
        <input type="url" id="portfolio_url" name="portfolio_url" value="<?php echo esc_url( $project_url ); ?>" class="widefat">
    </p>
    <?php
}

/**
 * Service meta box callback
 */
function sailor_service_details_callback( $post ) {
    wp_nonce_field( 'sailor_service_details', 'sailor_service_details_nonce' );
    
    $icon = get_post_meta( $post->ID, '_service_icon', true );
    
    ?>
    <p>
        <label for="service_icon"><?php _e( 'Service Icon (Bootstrap Icon class):', 'sailor' ); ?></label>
        <input type="text" id="service_icon" name="service_icon" value="<?php echo esc_attr( $icon ); ?>" class="widefat">
        <span class="description"><?php _e( 'Enter Bootstrap Icon class (e.g., bi-briefcase, bi-card-checklist). See <a href="https://icons.getbootstrap.com/" target="_blank">Bootstrap Icons</a> for available icons.', 'sailor' ); ?></span>
    </p>
    <?php
}

/**
 * Team member meta box callback
 */
function sailor_team_details_callback( $post ) {
    wp_nonce_field( 'sailor_team_details', 'sailor_team_details_nonce' );
    
    $position = get_post_meta( $post->ID, '_team_position', true );
    $twitter = get_post_meta( $post->ID, '_team_twitter', true );
    $facebook = get_post_meta( $post->ID, '_team_facebook', true );
    $instagram = get_post_meta( $post->ID, '_team_instagram', true );
    $linkedin = get_post_meta( $post->ID, '_team_linkedin', true );
    
    ?>
    <p>
        <label for="team_position"><?php _e( 'Position:', 'sailor' ); ?></label>
        <input type="text" id="team_position" name="team_position" value="<?php echo esc_attr( $position ); ?>" class="widefat">
    </p>
    <p>
        <label for="team_twitter"><?php _e( 'Twitter URL:', 'sailor' ); ?></label>
        <input type="url" id="team_twitter" name="team_twitter" value="<?php echo esc_url( $twitter ); ?>" class="widefat">
    </p>
    <p>
        <label for="team_facebook"><?php _e( 'Facebook URL:', 'sailor' ); ?></label>
        <input type="url" id="team_facebook" name="team_facebook" value="<?php echo esc_url( $facebook ); ?>" class="widefat">
    </p>
    <p>
        <label for="team_instagram"><?php _e( 'Instagram URL:', 'sailor' ); ?></label>
        <input type="url" id="team_instagram" name="team_instagram" value="<?php echo esc_url( $instagram ); ?>" class="widefat">
    </p>
    <p>
        <label for="team_linkedin"><?php _e( 'LinkedIn URL:', 'sailor' ); ?></label>
        <input type="url" id="team_linkedin" name="team_linkedin" value="<?php echo esc_url( $linkedin ); ?>" class="widefat">
    </p>
    <?php
}

/**
 * Save portfolio meta box data
 */
function sailor_save_portfolio_details( $post_id ) {
    if ( ! isset( $_POST['sailor_portfolio_details_nonce'] ) ) {
        return;
    }

    if ( ! wp_verify_nonce( $_POST['sailor_portfolio_details_nonce'], 'sailor_portfolio_details' ) ) {
        return;
    }

    if ( defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE ) {
        return;
    }

    if ( ! current_user_can( 'edit_post', $post_id ) ) {
        return;
    }

    if ( isset( $_POST['portfolio_client'] ) ) {
        update_post_meta( $post_id, '_portfolio_client', sanitize_text_field( $_POST['portfolio_client'] ) );
    }

    if ( isset( $_POST['portfolio_date'] ) ) {
        update_post_meta( $post_id, '_portfolio_date', sanitize_text_field( $_POST['portfolio_date'] ) );
    }

    if ( isset( $_POST['portfolio_url'] ) ) {
        update_post_meta( $post_id, '_portfolio_url', esc_url_raw( $_POST['portfolio_url'] ) );
    }
}
add_action( 'save_post_portfolio', 'sailor_save_portfolio_details' );

/**
 * Save service meta box data
 */
function sailor_save_service_details( $post_id ) {
    if ( ! isset( $_POST['sailor_service_details_nonce'] ) ) {
        return;
    }

    if ( ! wp_verify_nonce( $_POST['sailor_service_details_nonce'], 'sailor_service_details' ) ) {
        return;
    }

    if ( defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE ) {
        return;
    }

    if ( ! current_user_can( 'edit_post', $post_id ) ) {
        return;
    }

    if ( isset( $_POST['service_icon'] ) ) {
        update_post_meta( $post_id, '_service_icon', sanitize_text_field( $_POST['service_icon'] ) );
    }
}
add_action( 'save_post_service', 'sailor_save_service_details' );

/**
 * Save team member meta box data
 */
function sailor_save_team_details( $post_id ) {
    if ( ! isset( $_POST['sailor_team_details_nonce'] ) ) {
        return;
    }

    if ( ! wp_verify_nonce( $_POST['sailor_team_details_nonce'], 'sailor_team_details' ) ) {
        return;
    }

    if ( defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE ) {
        return;
    }

    if ( ! current_user_can( 'edit_post', $post_id ) ) {
        return;
    }

    if ( isset( $_POST['team_position'] ) ) {
        update_post_meta( $post_id, '_team_position', sanitize_text_field( $_POST['team_position'] ) );
    }

    if ( isset( $_POST['team_twitter'] ) ) {
        update_post_meta( $post_id, '_team_twitter', esc_url_raw( $_POST['team_twitter'] ) );
    }

    if ( isset( $_POST['team_facebook'] ) ) {
        update_post_meta( $post_id, '_team_facebook', esc_url_raw( $_POST['team_facebook'] ) );
    }

    if ( isset( $_POST['team_instagram'] ) ) {
        update_post_meta( $post_id, '_team_instagram', esc_url_raw( $_POST['team_instagram'] ) );
    }

    if ( isset( $_POST['team_linkedin'] ) ) {
        update_post_meta( $post_id, '_team_linkedin', esc_url_raw( $_POST['team_linkedin'] ) );
    }
}
add_action( 'save_post_team', 'sailor_save_team_details' );
