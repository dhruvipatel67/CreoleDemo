<?php

/**
 * Functions which enhance the theme by hooking into WordPress
 *
 * @package Sailor
 */

/**
 * Adds custom classes to the array of body classes.
 *
 * @param array $classes Classes for the body element.
 * @return array
 */
function sailor_body_classes($classes)
{
	// Adds a class of hfeed to non-singular pages.
	if (! is_singular()) {
		$classes[] = 'hfeed';
	}

	// Adds a class of no-sidebar when there is no sidebar present.
	if (! is_active_sidebar('sidebar-1')) {
		$classes[] = 'no-sidebar';
	}

	// Add page slug as class
	if (is_singular()) {
		global $post;
		$classes[] = $post->post_name . '-page';
	}

	return $classes;
}
add_filter('body_class', 'sailor_body_classes');

/**
 * Add a pingback url auto-discovery header for single posts, pages, or attachments.
 */
function sailor_pingback_header()
{
	if (is_singular() && pings_open()) {
		printf('<link rel="pingback" href="%s">', esc_url(get_bloginfo('pingback_url')));
	}
}
add_action('wp_head', 'sailor_pingback_header');

/**
 * Get portfolio items
 */
function sailor_get_portfolio_items($count = -1, $category = '')
{
	$args = array(
		'post_type'      => 'portfolio',
		'posts_per_page' => $count,
		'post_status'    => 'publish',
	);

	if (! empty($category)) {
		$args['tax_query'] = array(
			array(
				'taxonomy' => 'portfolio_category',
				'field'    => 'slug',
				'terms'    => $category,
			),
		);
	}

	return new WP_Query($args);
}

/**
 * Get service items
 */
function sailor_get_service_items($count = -1, $category = '')
{
	$args = array(
		'post_type'      => 'service',
		'posts_per_page' => $count,
		'post_status'    => 'publish',
	);

	if (! empty($category)) {
		$args['tax_query'] = array(
			array(
				'taxonomy' => 'service_category',
				'field'    => 'slug',
				'terms'    => $category,
			),
		);
	}

	return new WP_Query($args);
}

/**
 * Get team members
 */
function sailor_get_team_members($count = -1, $department = '')
{
	$args = array(
		'post_type'      => 'team',
		'posts_per_page' => $count,
		'post_status'    => 'publish',
	);

	if (! empty($department)) {
		$args['tax_query'] = array(
			array(
				'taxonomy' => 'department',
				'field'    => 'slug',
				'terms'    => $department,
			),
		);
	}

	return new WP_Query($args);
}

/**
 * Get portfolio categories
 */
function sailor_get_portfolio_categories()
{
	$terms = get_terms(array(
		'taxonomy'   => 'portfolio_category',
		'hide_empty' => true,
	));

	return $terms;
}

/**
 * Get service categories
 */
function sailor_get_service_categories()
{
	$terms = get_terms(array(
		'taxonomy'   => 'service_category',
		'hide_empty' => true,
	));

	return $terms;
}

/**
 * Get team departments
 */
function sailor_get_team_departments()
{
	$terms = get_terms(array(
		'taxonomy'   => 'department',
		'hide_empty' => true,
	));

	return $terms;
}

/**
 * Get recent posts
 */
function sailor_get_recent_posts($count = 3)
{
	$args = array(
		'post_type'      => 'post',
		'posts_per_page' => $count,
		'post_status'    => 'publish',
	);

	return new WP_Query($args);
}

/**
 * Get related posts
 */
function sailor_get_related_posts($post_id, $count = 3)
{
	$categories = get_the_category($post_id);

	if (empty($categories)) {
		return new WP_Query();
	}

	$category_ids = array();
	foreach ($categories as $category) {
		$category_ids[] = $category->term_id;
	}

	$args = array(
		'post_type'      => 'post',
		'posts_per_page' => $count,
		'post_status'    => 'publish',
		'post__not_in'   => array($post_id),
		'category__in'   => $category_ids,
	);

	return new WP_Query($args);
}

/**
 * Get related portfolio items
 */
function sailor_get_related_portfolio_items($post_id, $count = 3)
{
	$terms = get_the_terms($post_id, 'portfolio_category');

	if (empty($terms) || is_wp_error($terms)) {
		return new WP_Query();
	}

	$term_ids = array();
	foreach ($terms as $term) {
		$term_ids[] = $term->term_id;
	}

	$args = array(
		'post_type'      => 'portfolio',
		'posts_per_page' => $count,
		'post_status'    => 'publish',
		'post__not_in'   => array($post_id),
		'tax_query'      => array(
			array(
				'taxonomy' => 'portfolio_category',
				'field'    => 'term_id',
				'terms'    => $term_ids,
			),
		),
	);

	return new WP_Query($args);
}

/**
 * Get related service items
 */
function sailor_get_related_service_items($post_id, $count = 3)
{
	$terms = get_the_terms($post_id, 'service_category');

	if (empty($terms) || is_wp_error($terms)) {
		return new WP_Query();
	}

	$term_ids = array();
	foreach ($terms as $term) {
		$term_ids[] = $term->term_id;
	}

	$args = array(
		'post_type'      => 'service',
		'posts_per_page' => $count,
		'post_status'    => 'publish',
		'post__not_in'   => array($post_id),
		'tax_query'      => array(
			array(
				'taxonomy' => 'service_category',
				'field'    => 'term_id',
				'terms'    => $term_ids,
			),
		),
	);

	return new WP_Query($args);
}

/**
 * Get breadcrumbs
 */
function sailor_breadcrumbs()
{
	// Home
	$home_link = '<li class="breadcrumb-item"><a href="' . esc_url(home_url('/')) . '">' . esc_html__('Home', 'sailor') . '</a></li>';

	// Start breadcrumbs
	$breadcrumbs = '<nav aria-label="breadcrumb"><ol class="breadcrumb">' . $home_link;

	// Single post
	if (is_single() && 'post' == get_post_type()) {
		$categories = get_the_category();
		if (! empty($categories)) {
			$category = $categories[0];
			$breadcrumbs .= '<li class="breadcrumb-item"><a href="' . esc_url(get_category_link($category->term_id)) . '">' . esc_html($category->name) . '</a></li>';
		}
		$breadcrumbs .= '<li class="breadcrumb-item active" aria-current="page">' . get_the_title() . '</li>';
	}

	// Page
	elseif (is_page()) {
		$breadcrumbs .= '<li class="breadcrumb-item active" aria-current="page">' . get_the_title() . '</li>';
	}

	// Category
	elseif (is_category()) {
		$breadcrumbs .= '<li class="breadcrumb-item active" aria-current="page">' . single_cat_title('', false) . '</li>';
	}

	// Tag
	elseif (is_tag()) {
		$breadcrumbs .= '<li class="breadcrumb-item active" aria-current="page">' . single_tag_title('', false) . '</li>';
	}

	// Author
	elseif (is_author()) {
		$breadcrumbs .= '<li class="breadcrumb-item active" aria-current="page">' . get_the_author() . '</li>';
	}

	// Archive
	elseif (is_archive()) {
		$breadcrumbs .= '<li class="breadcrumb-item active" aria-current="page">' . get_the_archive_title() . '</li>';
	}

	// Search
	elseif (is_search()) {
		$breadcrumbs .= '<li class="breadcrumb-item active" aria-current="page">' . esc_html__('Search Results', 'sailor') . '</li>';
	}

	// 404
	elseif (is_404()) {
		$breadcrumbs .= '<li class="breadcrumb-item active" aria-current="page">' . esc_html__('Page Not Found', 'sailor') . '</li>';
	}

	// End breadcrumbs
	$breadcrumbs .= '</ol></nav>';

	return $breadcrumbs;
}

/**
 * Get page title
 */
function sailor_page_title()
{
	if (is_home()) {
		$title = esc_html__('Blog', 'sailor');
	} elseif (is_archive()) {
		$title = get_the_archive_title();
	} elseif (is_search()) {
		$title = sprintf(esc_html__('Search Results for: %s', 'sailor'), '<span>' . get_search_query() . '</span>');
	} elseif (is_404()) {
		$title = esc_html__('Page Not Found', 'sailor');
	} else {
		$title = get_the_title();
	}

	return $title;
}

/**
 * Get page subtitle
 */
function sailor_page_subtitle()
{
	if (is_home()) {
		$subtitle = esc_html__('Latest News & Updates', 'sailor');
	} elseif (is_category()) {
		$subtitle = sprintf(esc_html__('Posts in category: %s', 'sailor'), single_cat_title('', false));
	} elseif (is_tag()) {
		$subtitle = sprintf(esc_html__('Posts tagged with: %s', 'sailor'), single_tag_title('', false));
	} elseif (is_author()) {
		$subtitle = sprintf(esc_html__('Posts by: %s', 'sailor'), get_the_author());
	} elseif (is_archive()) {
		$subtitle = esc_html__('Archives', 'sailor');
	} elseif (is_search()) {
		$subtitle = esc_html__('Search Results', 'sailor');
	} elseif (is_404()) {
		$subtitle = esc_html__('404 Error', 'sailor');
	} else {
		$subtitle = '';
	}

	return $subtitle;
}



/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Check for updates
 */
function sailor_check_updates()
{
	// Don't break on development/staging sites
	if (! defined('AUTOMATIC_UPDATER_DISABLED') || ! AUTOMATIC_UPDATER_DISABLED) {

		// Check for WordPress core updates
		wp_version_check();

		// Check for plugin updates
		wp_update_plugins();

		// Check for theme updates
		wp_update_themes();
	}
}
add_action('init', 'sailor_check_updates');

/**
 * Enable auto updates for security
 */
add_filter('auto_update_plugin', '__return_true');
add_filter('auto_update_theme', '__return_true');

/**
 * Show update notifications for admin users
 */
function sailor_update_notification()
{
	if (current_user_can('update_core')) {
		$update_data = wp_get_update_data();

		if ($update_data['counts']['total'] > 0) {
?>
			<div class="notice notice-warning is-dismissible">
				<p><?php
					printf(
						esc_html__('Updates available: %d total (%d plugins, %d themes, %d WordPress)', 'sailor'),
						$update_data['counts']['total'],
						$update_data['counts']['plugins'],
						$update_data['counts']['themes'],
						$update_data['counts']['wordpress']
					);
					?></p>
				<p><a href="<?php echo esc_url(admin_url('update-core.php')); ?>" class="button button-primary"><?php esc_html_e('Update Now', 'sailor'); ?></a></p>
			</div>
<?php
		}
	}
}
add_action('admin_notices', 'sailor_update_notification');

?>