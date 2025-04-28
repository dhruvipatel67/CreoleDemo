<?php

/**
 * WP Bootstrap Navwalker
 *
 * @package WP-Bootstrap-Navwalker
 */

// Exit if accessed directly.
if (! defined('ABSPATH')) {
	exit;
}

/**
 * Class WP_Bootstrap_Navwalker
 *
 * Bootstrap 5 walker with accessibility enhancements.
 */
class WP_Bootstrap_Navwalker extends Walker_Nav_Menu
{

	/**
	 * Starts the list before the elements are added.
	 *
	 *
	 * @since WP 3.0.0
	 *
	 * @see Walker_Nav_Menu::start_lvl()
	 *
	 * @param string   $output Used to append additional content (passed by reference).
	 * @param int      $depth  Depth of menu item. Used for padding.
	 * @param stdClass $args   An object of wp_nav_menu() arguments.
	 */
	public function start_lvl(&$output, $depth = 0, $args = null)
	{
		if (isset($args->item_spacing) && 'discard' === $args->item_spacing) {
			$t = '';
			$n = '';
		} else {
			$t = "\t";
			$n = "\n";
		}
		$indent = str_repeat($t, $depth);

		// Default class.
		$classes = array('dropdown-menu');

		/**
		 * Filters the CSS class(es) applied to a menu list element.
		 *
		 * @since WP 4.8.0
		 *
		 * @param array    $classes The CSS classes that are applied to the menu `<ul>` element.
		 * @param stdClass $args    An object of `wp_nav_menu()` arguments.
		 * @param int      $depth   Depth of menu item. Used for padding.
		 */
		$class_names = join(' ', apply_filters('nav_menu_submenu_css_class', $classes, $args, $depth));
		$class_names = $class_names ? ' class="' . esc_attr($class_names) . '"' : '';

		$output .= "{$n}{$indent}<ul$class_names>{$n}";
	}

	/**
	 * Starts the element output.
	 *
	 *
	 * @since WP 3.0.0
	 * @since WP 4.4.0 The {@see 'nav_menu_item_args'} filter was added.
	 *
	 * @see Walker_Nav_Menu::start_el()
	 *
	 * @param string   $output Used to append additional content (passed by reference).
	 * @param WP_Post  $item   Menu item data object.
	 * @param int      $depth  Depth of menu item. Used for padding.
	 * @param stdClass $args   An object of wp_nav_menu() arguments.
	 * @param int      $id     Current item ID.
	 */
	public function start_el(&$output, $item, $depth = 0, $args = null, $id = 0)
	{
		if (isset($args->item_spacing) && 'discard' === $args->item_spacing) {
			$t = '';
			$n = '';
		} else {
			$t = "\t";
			$n = "\n";
		}
		$indent = ($depth) ? str_repeat($t, $depth) : '';

		$classes   = empty($item->classes) ? array() : (array) $item->classes;
		$classes[] = 'menu-item-' . $item->ID;

		// Add .dropdown or .active classes where they are needed.
		if ($this->has_children) {
			$classes[] = 'dropdown';
		}
		if (in_array('current-menu-item', $classes, true) || in_array('current-menu-parent', $classes, true)) {
			$classes[] = 'active';
		}

		// Add .dropdown-item class to items in dropdown menus.
		if ($depth > 0) {
			$classes[] = 'dropdown-item';
		}

		/**
		 * Filters the arguments for a single nav menu item.
		 *
		 * @since WP 4.4.0
		 *
		 * @param stdClass $args  An object of wp_nav_menu() arguments.
		 * @param WP_Post  $item  Menu item data object.
		 * @param int      $depth Depth of menu item. Used for padding.
		 */
		$args = apply_filters('nav_menu_item_args', $args, $item, $depth);

		/**
		 * Filters the CSS classes applied to a menu item's list item element.
		 *
		 * @since WP 3.0.0
		 * @since WP 4.1.0 The `$depth` parameter was added.
		 *
		 * @param array    $classes The CSS classes that are applied to the menu item's `<li>` element.
		 * @param WP_Post  $item    The current menu item.
		 * @param stdClass $args    An object of wp_nav_menu() arguments.
		 * @param int      $depth   Depth of menu item. Used for padding.
		 */
		$class_names = join(' ', apply_filters('nav_menu_css_class', array_filter($classes), $item, $args, $depth));
		$class_names = $class_names ? ' class="' . esc_attr($class_names) . '"' : '';

		/**
		 * Filters the ID applied to a menu item's list item element.
		 *
		 * @since WP 3.0.1
		 * @since WP 4.1.0 The `$depth` parameter was added.
		 *
		 * @param string   $menu_id The ID that is applied to the menu item's `<li>` element.
		 * @param WP_Post  $item    The current menu item.
		 * @param stdClass $args    An object of wp_nav_menu() arguments.
		 * @param int      $depth   Depth of menu item. Used for padding.
		 */
		$id = apply_filters('nav_menu_item_id', 'menu-item-' . $item->ID, $item, $args, $depth);
		$id = $id ? ' id="' . esc_attr($id) . '"' : '';

		$output .= $indent . '<li' . $id . $class_names . '>';

		$atts           = array();
		$atts['title']  = ! empty($item->attr_title) ? $item->attr_title : '';
		$atts['target'] = ! empty($item->target) ? $item->target : '';
		if ('_blank' === $item->target && empty($item->xfn)) {
			$atts['rel'] = 'noopener noreferrer';
		} else {
			$atts['rel'] = $item->xfn;
		}
		$atts['href']         = ! empty($item->url) ? $item->url : '#';
		$atts['aria-current'] = $item->current ? 'page' : '';

		// Add .dropdown-toggle class and data-bs-toggle="dropdown" to parent items.
		if ($depth === 0 && $this->has_children) {
			$atts['class']         = 'dropdown-toggle';
			$atts['data-bs-toggle'] = 'dropdown';
			$atts['aria-expanded'] = 'false';
		}

		// Add .dropdown-item class to child items.
		if ($depth > 0) {
			$atts['class'] = 'dropdown-item';
		}

		// Add active class to current nav item.
		if (in_array('current-menu-item', $classes, true)) {
			$atts['class'] .= ' active';
		}

		/**
		 * Filters the HTML attributes applied to a menu item's anchor element.
		 *
		 * @since WP 3.6.0
		 * @since WP 4.1.0 The `$depth` parameter was added.
		 *
		 * @param array $atts {
		 *     The HTML attributes applied to the menu item's `<a>` element, empty strings are ignored.
		 *
		 *     @type string $title        Title attribute.
		 *     @type string $target       Target attribute.
		 *     @type string $rel          The rel attribute.
		 *     @type string $href         The href attribute.
		 *     @type string $aria-current The aria-current attribute.
		 * }
		 * @param WP_Post  $item  The current menu item.
		 * @param stdClass $args  An object of wp_nav_menu() arguments.
		 * @param int      $depth Depth of menu item. Used for padding.
		 */
		$atts = apply_filters('nav_menu_link_attributes', $atts, $item, $args, $depth);

		$attributes = '';
		foreach ($atts as $attr => $value) {
			if (is_scalar($value) && '' !== $value && false !== $value) {
				$value       = ('href' === $attr) ? esc_url($value) : esc_attr($value);
				$attributes .= ' ' . $attr . '="' . $value . '"';
			}
		}

		/** This filter is documented in wp-includes/post-template.php */
		$title = apply_filters('the_title', $item->title, $item->ID);

		/**
		 * Filters a menu item's title.
		 *
		 * @since WP 4.4.0
		 *
		 * @param string   $title The menu item's title.
		 * @param WP_Post  $item  The current menu item.
		 * @param stdClass $args  An object of wp_nav_menu() arguments.
		 * @param int      $depth Depth of menu item. Used for padding.
		 */
		$title = apply_filters('nav_menu_item_title', $title, $item, $args, $depth);

		$item_output  = $args->before;
		$item_output .= '<a' . $attributes . '>';
		$item_output .= $args->link_before . $title . $args->link_after;

		// Add dropdown toggle icon for parent items.
		if ($depth === 0 && $this->has_children) {
			$item_output .= ' <i class="bi bi-chevron-down toggle-dropdown"></i>';
		}

		$item_output .= '</a>';
		$item_output .= $args->after;

		/**
		 * Filters a menu item's starting output.
		 *
		 * The menu item's starting output only includes `$args->before`, the opening `<a>`,
		 * the menu item's title, the closing `</a>`, and `$args->after`. Currently, there is
		 * no filter for modifying the opening and closing `<li>` for a menu item.
		 *
		 * @since WP 3.0.0
		 *
		 * @param string   $item_output The menu item's starting HTML output.
		 * @param WP_Post  $item        Menu item data object.
		 * @param int      $depth       Depth of menu item. Used for padding.
		 * @param stdClass $args        An object of wp_nav_menu() arguments.
		 */
		$output .= apply_filters('walker_nav_menu_start_el', $item_output, $item, $depth, $args);
	}

	/**
	 * Traverse elements to create list from elements.
	 *
	 * Display one element if the element doesn't have any children otherwise,
	 * display the element and its children. Will only traverse up to the max
	 * depth and no ignore elements under that depth. It is possible to set the
	 * max depth to include all depths, see walk() method.
	 *
	 * This method should not be called directly, use the walk() method instead.
	 *
	 * @since WP 2.5.0
	 *
	 * @see Walker::start_lvl()
	 *
	 * @param object $element           Data object.
	 * @param array  $children_elements List of elements to continue traversing (passed by reference).
	 * @param int    $max_depth         Max depth to traverse.
	 * @param int    $depth             Depth of current element.
	 * @param array  $args              An array of arguments.
	 * @param string $output            Used to append additional content (passed by reference).
	 */
	public function display_element($element, &$children_elements, $max_depth, $depth, $args, &$output)
	{
		if (! $element) {
			return;
		}

		$id_field = $this->db_fields['id'];
		$id       = $element->$id_field;

		// Display this element.
		$this->has_children = ! empty($children_elements[$id]);
		if (isset($args[0]) && is_object($args[0])) {
			$args[0]->has_children = $this->has_children;
		}

		parent::display_element($element, $children_elements, $max_depth, $depth, $args, $output);
	}
}
