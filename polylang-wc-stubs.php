<?php

namespace {
    /**
     * @package Polylang-WC
     */
    /**
     * Manages the coupons.
     *
     * @since 0.9
     */
    class PLLWC_Coupons
    {
        /**
         * Product language data store.
         *
         * @var object
         */
        protected $data_store;
        /**
         * Constructor.
         *
         * @since 0.9
         */
        public function __construct()
        {
        }
        /**
         * Translates products and categories restrictions in coupons.
         * Hooked to the filter 'woocommerce_coupon_loaded'.
         *
         * @since 0.3.6
         *
         * @param object $data Coupon properties.
         */
        public function coupon_loaded($data)
        {
        }
        /**
         * Returns the translated product id or the current product id if it is not translated.
         *
         * @since 1.0
         *
         * @param int $id Product id.
         * @return int Translated product id.
         */
        protected function maybe_get_translated_product($id)
        {
        }
        /**
         * Returns the translated term id or the current term id if it is not translated.
         *
         * @since 1.0
         *
         * @param int $id Term id.
         * @return int Translated term id.
         */
        protected function maybe_get_translated_term($id)
        {
        }
    }
    /**
     * @package Polylang-WC
     */
    /**
     * Manages the coupons in the backend.
     *
     * @since 0.3.6
     */
    class PLLWC_Admin_Coupons extends \PLLWC_Coupons
    {
        /**
         * Constructor.
         *
         * @since 0.3.6
         */
        public function __construct()
        {
        }
        /**
         * Filters the product category per language.
         *
         * @since 0.3.6
         *
         * @param array $args       Arguments passed to WP_Term_Query.
         * @param array $taxonomies Taxonomies passed to WP_Term_Query.
         * @return array modified arguments.
         */
        public function get_terms_args($args, $taxonomies)
        {
        }
    }
    /**
     * @package Polylang-WC
     */
    /**
     * A class to translate the endpoints in the WooCommerce Endpoints nav menu metabox.
     *
     * @since 0.1
     */
    class PLLWC_Admin_Menus
    {
        /**
         * Constructor.
         *
         * @since 0.1
         */
        public function __construct()
        {
        }
        /**
         * Replaces the WooCommerce endpoints metabox by our own.
         * Hooked to the action 'admin_menu'.
         *
         * @since 0.1
         */
        public function init()
        {
        }
        /**
         * Adds our endpoints metabox.
         *
         * @since 0.7.5
         */
        public function add_meta_box()
        {
        }
        /**
         * Displays the WooCommerce endpoints metabox.
         *
         * @since 0.1
         */
        public function nav_menu_metabox()
        {
        }
        /**
         * Displays the endpoints menu items.
         * The titles are translated in the admin interface language.
         * The links are in the language of the admin language filter.
         *
         * @since 0.1
         */
        public function nav_menu_links()
        {
        }
        /**
         * Get endpoints available in the WooCommerce endpoints menu metabox.
         *
         * @since 0.9.3
         */
        protected function get_endpoints()
        {
        }
    }
    /**
     * @package Polylang-WC
     */
    /**
     * Handles the language information displayed for orders.
     *
     * @since 0.1
     */
    class PLLWC_Admin_Orders
    {
        /**
         * Order language data store.
         *
         * @var object
         */
        protected $data_store;
        /**
         * Constructor.
         *
         * @since 0.1
         */
        public function __construct()
        {
        }
        /**
         * Removes the standard Polylang languages columns for the orders list table
         * and replace them with one unique column.
         *
         * @since 0.1
         */
        public function custom_columns()
        {
        }
        /**
         * Adds the language column in the orders list table.
         *
         * @since 0.1
         *
         * @param array $columns List of table columns.
         * @return array modified list of columns.
         */
        public function add_order_column($columns)
        {
        }
        /**
         * Fills the language column of each order.
         *
         * @since 0.1
         *
         * @param string $column  Column name.
         * @param int    $post_id Order ID.
         */
        public function order_column($column, $post_id)
        {
        }
        /**
         * Add the languages metabox for orders.
         * Add filters specific to the orders page.
         *
         * @since 0.1
         *
         * @param string $post_type Post type name.
         */
        public function add_meta_boxes($post_type)
        {
        }
        /**
         * Displays the Languages metabox.
         *
         * @since 0.1
         */
        public function order_language()
        {
        }
        /**
         * Add our pll_ajax_backend parameter to the WooCommerce admin order actions urls.
         *
         * @since 1.0.4
         *
         * @param array $actions Admin order actions.
         * @return array
         */
        public function admin_order_actions($actions)
        {
        }
    }
    /**
     * @package Polylang-WC
     */
    /**
     * Duplicates the product translations when duplicating a product.
     *
     * @since 1.0
     */
    class PLLWC_Admin_Product_Duplicate
    {
        /**
         * Product language data store.
         *
         * @var object
         */
        protected $data_store;
        /**
         * Constructor.
         *
         * @since 1.0
         */
        public function __construct()
        {
        }
        /**
         * Removes the taxonomy terms language check when duplicating products.
         * This is necessary because duplicate products are assigned the default language at creation.
         * Hooked to the acton 'admin_action_duplicate_product'.
         *
         * @since 0.9.3
         */
        public function duplicate_product_action()
        {
        }
        /**
         * Fires the duplication of duplicated product translations.
         *
         * We are obliged to copy the whole logic of WC_Admin_Duplicate_Product::product_duplicate()
         * otherwise we can't avoid that WC creates a new sku before the language is assigned.
         * Code last checked: WC 4.0
         *
         * @see https://github.com/woocommerce/woocommerce/issues/13262
         * @since 0.7
         *
         * @param object $duplicate Duplicated product.
         * @param object $product   Original product.
         */
        public function product_duplicate($duplicate, $product)
        {
        }
        /**
         * Generates a unique slug for a given product. We do this so that we can override the
         * behavior of wp_unique_post_slug(). The normal slug generation will run single
         * select queries on every non-unique slug, resulting in very bad performance.
         * This is an exact copy of WC_Admin_Duplicate_Product::generate_unique_slug()
         * Code last checked: WC 4.0
         *
         * @since 1.5
         *
         * @param WC_Product $product The product to generate a slug for.
         */
        private function generate_unique_slug($product)
        {
        }
    }
    /**
     * @package Polylang-WC
     */
    /**
     * Manages the products on admin side.
     *
     * @since 0.1
     */
    class PLLWC_Admin_Products
    {
        /**
         * Product language data store.
         *
         * @var object
         */
        protected $data_store;
        /**
         * Constructor.
         * Setups actions and filters.
         *
         * @since 0.1
         */
        public function __construct()
        {
        }
        /**
         * Setups the our js script (only on the products page).
         *
         * @since 0.1
         */
        public function admin_enqueue_scripts()
        {
        }
        /**
         * Ajax response for changing the language in the product language metabox.
         *
         * @since 0.1
         */
        public function product_lang_choice()
        {
        }
        /**
         * Synchronizes the product ordering.
         * Hooked to the action 'woocommerce_after_product_ordering'.
         *
         * @since 1.0
         *
         * @param int   $id          Product id.
         * @param array $menu_orders An array with product ids as key and menu_order as value.
         */
        public function product_ordering($id, $menu_orders)
        {
        }
        /**
         * Filters the products per language in autocomplete ajax searches.
         * Hooked to the filters 'woocommerce_json_search_found_products'
         * and 'woocommerce_json_search_found_grouped_products'.
         *
         * @since 0.1
         *
         * @param array $products array with product ids as keys and names as values.
         * @return array
         */
        public function search_found_products($products)
        {
        }
        /**
         * Fixes the search in the Products list table.
         * It is necessary since WC 3.3.1 as the query uses 'post__in'
         * which is usually excluded from the language filter.
         * Hooked to the filter 'pll_filter_query_excluded_query_vars'.
         *
         * @since 1.0
         *
         * @param array  $excludes Query vars excluded from the language filter.
         * @param object $query    WP Query object.
         * @return array
         */
        public function fix_products_search($excludes, $query)
        {
        }
        /**
         * Removes the German and Danish specific sanitization for titles.
         *
         * @since 0.7.1
         */
        public function remove_sanitize_title()
        {
        }
        /**
         * Restores the German and Danish specific sanitization for titles.
         *
         * @since 0.7.1
         */
        public function add_sanitize_title()
        {
        }
    }
    /**
     * @package Polylang-WC
     */
    /**
     * Filters the reports as some need to combine all languages
     * and other need to be filtered per language.
     *
     * @since 0.1
     */
    class PLLWC_Admin_Reports
    {
        /**
         * Product language data store.
         *
         * @var object
         */
        protected $data_store;
        /**
         * Constructor.
         * Setup filters.
         *
         * @since 0.1
         */
        public function __construct()
        {
        }
        /**
         * Filters report queries to combine all languages.
         * Hooked to the filter 'woocommerce_reports_get_order_report_query'.
         *
         * @since 0.1
         *
         * @param array $query Array of SQL clauses.
         * @return array
         */
        public function report_query($query)
        {
        }
        /**
         * Makes sure that the products returned by WC_Admin_Report::get_order_report_data() are in the expected language.
         * It's necessary as the filtered report_query() does not give any warranty on the product language.
         *
         * @since 0.1
         *
         * @param array $results Array of products returned by WC_Admin_Report::get_order_report_data().
         * @return array
         */
        public function report_data($results)
        {
        }
        /**
         * Combines all translations of a product for a given category.
         * Hooked to the filter 'woocommerce_report_sales_by_category_get_products_in_category'.
         *
         * @since 0.1
         *
         * @param array $product_ids Not used.
         * @param int   $category_id Product category id.
         * @retunr array
         */
        public function get_products_in_category($product_ids, $category_id)
        {
        }
        /**
         * Filters the list of categories per language in Sales by category.
         * Hooked to the filter 'terms_clauses'.
         *
         * @since 0.1
         *
         * @param array $clauses    SQL clauses.
         * @param array $taxonomies Not used.
         * @param array $args       WP_Term_Query arguments.
         * @return array Modified SQL clauses
         */
        public function terms_clauses($clauses, $taxonomies, $args)
        {
        }
        /**
         * Filters the stock queries per language.
         *
         * @since 0.1
         *
         * @param string $query_from Part of the SQL query (FROM, JOIN, WHERE clauses).
         * @return string
         */
        public function stock_query($query_from)
        {
        }
    }
    /**
     * @package Polylang-WC
     */
    /**
     * Class PLLWC_Admin_Site_Health
     *
     * @since 1.5
     */
    class PLLWC_Admin_Site_Health
    {
        /**
         * PLLWC_Admin_Site_Health constructor.
         *
         * @since 1.5
         */
        public function __construct()
        {
        }
        /**
         * Add Polylang for WooCommerce informations to the Site Health Informations tab.
         *
         * @since 1.5
         *
         * @param array $debug_info The debug information to be added to the core information page.
         * @return array
         */
        public function info($debug_info)
        {
        }
    }
    /**
     * @package Polylang-WC
     */
    /**
     * Manages the status reports for the WooCommerce pages
     * to verify if they exist for alls languages.
     *
     * @since 1.3
     */
    class PLLWC_Admin_Status_Reports
    {
        /**
         * Reference to PLL_Model object.
         *
         * @var PLL_Model $model
         */
        protected $model;
        /**
         * List of controls on default WooCommerce pages.
         *
         * @var stdClass $woocommerce_pages_status
         */
        protected $woocommerce_pages_status = \null;
        /**
         * List of translation packages to download.
         *
         * @var array $translation_updates
         */
        protected $translation_updates;
        /**
         * Checks the WooCommerce pages status.
         * The result is stored in the property $woocommerce_pages_status.
         *
         * @since 1.3
         */
        protected function check_woocommerce_pages_status()
        {
        }
        /**
         * Retrieves the status of the WooCommerce pages.
         *
         * @since 1.3
         */
        public function get_woocommerce_pages_status()
        {
        }
        /**
         * Loads the status report for the translations of the default pages in the WooCommerce status page.
         *
         * @since 1.3
         */
        public function status_report()
        {
        }
        /**
         * Loads the status report for the translations of the default pages in our wizard.
         *
         * @since 1.3
         */
        public function wizard_status_report()
        {
        }
    }
    /**
     * @package Polylang-WC
     */
    /**
     * Handles the Woocommerce taxonomies on admin side.
     *
     * @since 0.1
     */
    class PLLWC_Admin_Taxonomies
    {
        /**
         * Constructor.
         *
         * @since 0.1
         */
        public function __construct()
        {
        }
        /**
         * Setups actions and filters.
         *
         * @since 0.1
         */
        public function init()
        {
        }
        /**
         * Adds term metas to copy or synchronize.
         *
         * @since 1.0
         *
         * @param array  $to_copy List of term metas names.
         * @param bool   $sync    True if it is synchronization, false if it is a copy.
         * @param int    $from    Id of the term from which we copy informations.
         * @param int    $to      Id of the term to which we paste informations.
         * @param string $lang    Language slug.
         */
        public function get_metas_to_copy($to_copy, $sync, $from, $to, $lang)
        {
        }
        /**
         * Suppresses the language filter in _get_term_hierarchy() specifically for product_cat
         * because WC modifies the orderby arg to meta_value_num in wc_change_pre_get_terms().
         *
         * @see PLL_CRUD_Terms::get_terms_args()
         *
         * @since 1.2.1
         *
         * @param array $args       WP_Term_Query arguments.
         * @param array $taxonomies The list of queried taxonomies.
         * @return array Modified arguments
         */
        public function get_terms_args($args, $taxonomies)
        {
        }
        /**
         * Translates the thumbnail id.
         *
         * @since 1.0
         *
         * @param mixed  $value Meta value.
         * @param string $key   Meta key.
         * @param string $lang  Language of target.
         */
        public function translate_meta($value, $key, $lang)
        {
        }
        /**
         * Maybe fix the language of the product cat image.
         * It is required because if the image was just uploaded,
         * it is assigned the preferred language instead of the current language.
         *
         * @since 0.1
         *
         * @param int $term_id Term id.
         */
        public function saved_product_cat($term_id)
        {
        }
        /**
         * Saves the language of an attribute term when created from the product metabox.
         *
         * @since 1.0
         *
         * @param int    $term_id  Term id.
         * @param int    $tt_id    Term taxonomy id.
         * @param string $taxonomy Taxonomy name.
         */
        public function create_attribute_term($term_id, $tt_id, $taxonomy)
        {
        }
        /**
         * Rewrites WC_Admin_Taxonomies::add_category_fields to populate the metas when creating a new translation.
         *
         * @since 0.1
         */
        public function add_category_fields()
        {
        }
        /**
         * Filters the media list when adding an image to a product category.
         *
         * @since 0.2
         */
        public function admin_print_footer_scripts()
        {
        }
    }
    /**
     * @package Polylang-WC
     */
    /**
     * Allows to automatically install the translations of the WooCommerce default pages.
     * Manages the installation of the default product category.
     *
     * @since 0.1
     */
    class PLLWC_Admin_WC_Install
    {
        /**
         * Constructor.
         *
         * @since 0.1
         */
        public function __construct()
        {
        }
        /**
         * Add post states for the translations of the shop, cart, checkout, account and terms pages.
         *
         * @since 0.9
         *
         * @param array  $post_states List of post states.
         * @param object $post        Instance of WP_Post.
         * @return array
         */
        public function display_post_states($post_states, $post)
        {
        }
        /**
         * Replaces the Install WooCommerce Pages tool by our own to be able to create translations.
         *
         * @since 0.1
         *
         * @param array $tools List of available tools.
         * @return array
         */
        public function debug_tools($tools)
        {
        }
        /**
         * Filters the locale when creating WooCommerce translated pages.
         *
         * @since 0.1
         *
         * @param string $locale The plugin's current locale.
         * @param string $domain Text domain.
         */
        public function plugin_locale($locale, $domain)
        {
        }
        /**
         * Initializes the page names and content in all available languages.
         * The method does not actually create the pages.
         *
         * It implements its own locale switch rather than using switch_to_locale()
         * for performance reasons as we only need our own translations.
         *
         * @since 0.1
         */
        public function init_translated_pages()
        {
        }
        /**
         * Translates WooCommerce default pages when they are created by WooCommerce,
         * generally in the WooCommerce setup wizard.
         *
         * @since 0.1
         */
        public function create_page()
        {
        }
        /**
         * Install pages from the WooCommerce status tools when using the "Install pages" button.
         *
         * @since 0.1
         */
        public function install_pages()
        {
        }
        /**
         * Create a page translation.
         *
         * @since 0.1
         *
         * @param string $id   WooCommerce page id.
         * @param string $lang Language slug.
         */
        public function translate_page($id, $lang)
        {
        }
        /**
         * Creates a default product category for a language.
         *
         * @since 0.9.3
         *
         * @param string $lang Language code.
         */
        protected static function create_default_product_cat($lang)
        {
        }
        /**
         * Creates a default product category when adding a language.
         *
         * @since 0.9.3
         *
         * @param array $args New language arguments.
         */
        public function add_language($args)
        {
        }
        /**
         * Assigns the default language to the default product category
         * and creates translated default categories.
         *
         * @since 0.9.3
         */
        public static function create_default_product_cats()
        {
        }
        /**
         * Replaces the Uncategorized product cat in default language by the correct translation.
         *
         * @since 0.9.3
         */
        public static function replace_default_product_cats()
        {
        }
        /**
         * Updates the default product categories after update to WooCommerce 3.3.
         *
         * @since 0.9.3
         *
         * @param string $option Option name.
         * @param string $value  WooCommerce DB version.
         */
        public static function update_330_wc_db_version($option, $value)
        {
        }
    }
    /**
     * @package Polylang-WC
     */
    /**
     * Helper methods used on admin.
     *
     * @since 0.6
     */
    class PLLWC_Admin
    {
        /**
         * Get the preferred language for filters.
         *
         * @since 0.1
         *
         * @return string Language slug.
         */
        public static function get_preferred_language()
        {
        }
    }
    /**
     * @package Polylang-WC
     */
    /**
     * Main class for managing Polylang for WooCommerce step in the Polylang Wizard.
     *
     * @since 1.4
     */
    class PLLWC_Wizard
    {
        const PLUGIN_FILTER = array('woocommerce', 'polylang', 'polylang-pro', 'polylang-wc');
        /**
         * Reference to PLL_Model object.
         *
         * @var object $model
         */
        protected $model;
        /**
         * Reference to PLL_Wizard object.
         *
         * @var object $wizard
         */
        protected $wizard;
        /**
         * Constructor.
         *
         * @since 1.4
         *
         * @param object $model   Reference to PLL_Model object.
         * @param object $wizard  Reference to PLL_Wizard object.
         */
        public function __construct($model, $wizard)
        {
        }
        /**
         * Add the WooCommerce pages step in the wizard.
         *
         * @since 1.4
         *
         * @param array $steps List of steps.
         * @return array List of steps updated.
         */
        public function add_step_wc_pages($steps)
        {
        }
        /**
         * Displays the WooCommerce pages step form.
         *
         * @since 1.4
         */
        public function display_step_wc_pages()
        {
        }
        /**
         * Executes the WooCommerce pages step.
         *
         * @since 1.4
         */
        public function save_step_wc_pages()
        {
        }
        /**
         * Filters the update_plugins transient last ckecked date.
         *
         * @since 1.4
         *
         * @param object $updates   Transient value of plugins which need to be updated.
         * @param string $transient Name of the transient.
         * @return object Filtered value of the transient.
         */
        public function update_last_checked($updates, $transient)
        {
        }
        /**
         * Filter the update_plugins transient by only returning translation updates.
         *
         * @since 1.4
         *
         * @param object $updates   Transient value of plugins which need to be updated.
         * @param string $transient Name of the transient.
         * @return object Filtered value of the transient.
         */
        public function update_plugins($updates, $transient)
        {
        }
        /**
         * Retrieve translation updates
         *
         * @since 1.4
         *
         * @return array List of translation packages to download.
         */
        public function get_translation_updates()
        {
        }
    }
    /**
     * @package Polylang-WC
     */
    /**
     * Manages the translation of the customer account.
     *
     * @since 1.0
     */
    class PLLWC_Frontend_Account
    {
        /**
         * Constructor.
         * Setups actions and filters.
         *
         * @since 1.0
         */
        public function __construct()
        {
        }
        /**
         * Disables the languages filter for a customer to see all orders whatever the languages.
         * Hooked to the action 'parse_query'.
         *
         * @since 0.3
         *
         * @param object $query WP_Query object.
         */
        public function parse_query($query)
        {
        }
        /**
         * Translates the product name in the current language.
         * Hooked the filter 'woocommerce_order_item_name'.
         *
         * @since 1.0
         *
         * @param string $item_name  Product name.
         * @param object $item       Order item.
         * @param bool   $is_visible Whether the product is visible.
         * @return string Translated product name.
         */
        public function order_item_name($item_name, $item, $is_visible)
        {
        }
        /**
         * Translates the payment method in the order item totals.
         * Hooked to the filter 'woocommerce_get_order_item_totals'.
         *
         * @since 1.0
         *
         * @param array  $rows  Order item totals.
         * @param object $order Order.
         * @return array
         */
        public function translate_payment_method($rows, $order)
        {
        }
    }
    /**
     * @package Polylang-WC
     */
    /**
     * Manages the translation of the cart.
     *
     * @since 1.0
     */
    class PLLWC_Frontend_Cart
    {
        /**
         * Product language data store.
         *
         * @var object
         */
        protected $data_store;
        /**
         * Constructor.
         * Setups filters and actions.
         *
         * @since 1.0
         */
        public function __construct()
        {
        }
        /**
         * Setups actions and filters once the language is defined.
         *
         * @since 1.0
         */
        public function init()
        {
        }
        /**
         * Reloads the cart when the language is set from the content.
         *
         * @since 0.3.2
         *
         * @param bool|object $lang False or language object.
         * @return bool|object
         */
        public function pll_set_language_from_query($lang)
        {
        }
        /**
         * Resets the cached data when switching the language.
         *
         * @since 0.1
         */
        public function wp_enqueue_scripts()
        {
        }
        /**
         * Translates the product attributes in the cart.
         *
         * @since 1.1
         *
         * @param array  $attributes Selected attributes.
         * @param string $lang       Target language.
         * @param string $orig_lang  Source language.
         * @return array
         */
        public function translate_attributes_in_cart($attributes, $lang, $orig_lang)
        {
        }
        /**
         * Translates the products in the cart.
         *
         * @since 0.3.5
         *
         * @param array  $item Cart item.
         * @param string $lang Language code.
         * @return array
         */
        protected function translate_cart_item($item, $lang)
        {
        }
        /**
         * Translates the cart contents.
         *
         * @since 0.3.5
         *
         * @param array  $contents Cart contents.
         * @param string $lang     Language code.
         * @return array
         */
        protected function translate_cart_contents($contents, $lang = '')
        {
        }
        /**
         * Translates the products and removed products in the cart.
         *
         * @since 0.3.5
         */
        public function woocommerce_cart_loaded_from_session()
        {
        }
        /**
         * Makes the cart hash language independent by relying on products in default language.
         *
         * @since 0.9.4
         *
         * @param string $hash         Cart hash.
         * @param array  $cart_session Cart session.
         * @return string Modified cart hash.
         */
        public function cart_hash($hash, $cart_session)
        {
        }
        /**
         * Makes the cart item hash language independent by relying on attributes in default language
         *
         * @since 1.0
         *
         * @param array  $data    Data to validate in the hash.
         * @param object $product Product in the cart item.
         * @return array
         */
        public function cart_item_data_to_validate($data, $product)
        {
        }
    }
    /**
     * @package Polylang-WC
     */
    /**
     * Manages WC pages when they are used as home page.
     *
     * @since 1.0
     */
    class PLLWC_Frontend_WC_Pages
    {
        /**
         * Constructor.
         *
         * @since 1.0
         */
        public function __construct()
        {
        }
        /**
         * Get the queried page_id ( if it exists ).
         *
         * If permalinks are used, WordPress does set and use $query->queried_object_id and sets $query->query_vars['page_id'] to 0
         * and does set and use $query->query_vars['page_id'] if permalinks are not used :(
         *
         * @since 0.3.2
         *
         * @param object $query Instance of WP_Query.
         * @return int page_id
         */
        protected function get_page_id($query)
        {
        }
        /**
         * Fixes query vars on translated front page when the front page displays the shop, my account or the checkout.
         *
         * @since 0.3.2
         *
         * @param bool|object $lang  False or language object.
         * @param object      $query WP_Query object.
         */
        public function pll_set_language_from_query($lang, $query)
        {
        }
    }
    /**
     * @package Polylang-WC
     */
    /**
     * Manages WooCommerce specific translations on the frontend.
     *
     * @since 0.1
     */
    class PLLWC_Frontend
    {
        /**
         * Constructor.
         *
         * @since 0.1
         */
        public function __construct()
        {
        }
        /**
         * Setups actions filters once the language is defined.
         *
         * @since 0.1
         */
        public function init()
        {
        }
        /**
         * Resets countries, continents and states translations when the language is set from the content.
         *
         * @since 1.2.3
         */
        public function reset_translations()
        {
        }
        /**
         * Fixes the canonical redirection from the shop page to the product archive when using plain permalinks and the language is set from the content
         *
         * @since 0.3.2
         *
         * @param string $redirect_url Redirect url.
         * @return string|false
         */
        public function pll_check_canonical_url($redirect_url)
        {
        }
        /**
         * Fixes the translation url of the shop page (product archive) when using plain permalinks and the language is set from the content.
         *
         * @since 0.3.2
         *
         * @param string $url  Translation url.
         * @param string $lang Language code.
         * @return string
         */
        public function pll_translation_url($url, $lang)
        {
        }
        /**
         * Fixes the shop link when using pretty permalinks and the language is set from the content.
         *
         * This fixes the widget layered nav which calls get_post_type_archive_link( 'product' ).
         *
         * @since 0.4.6
         *
         * @param string $link      Post type archive link.
         * @param string $post_type Post type name.
         * @return string Modified link.
         */
        public function post_type_archive_link($link, $post_type)
        {
        }
        /**
         * Outputs the hidden language input field.
         *
         * @since 0.3.5
         */
        public function language_form_field()
        {
        }
        /**
         * Adds a lang query arg to the url.
         *
         * @since 0.5
         *
         * @param string $url URL to modify.
         * @return string
         */
        public function add_lang_query_arg($url)
        {
        }
        /**
         * Fixes the home url in widgets
         *
         * @since 0.5
         *
         * @param array $arr List of files and functions to whitelist for the home_url filter.
         * @return array
         */
        public function home_url_white_list($arr)
        {
        }
        /**
         * Fixes the layered nav chosen attributes when shared slugs are in the query,
         * otherwise the query would look for products in all attributes in all languages which always returns an empty result.
         *
         * @since 0.5
         *
         * @param array $tax_query Tax query parameter in WP_Query.
         * @return array
         */
        public function product_tax_query($tax_query)
        {
        }
        /**
         * Filters the form action url of the widget price filter for subdomains and multiple domains.
         *
         * @since 0.5
         *
         * @param string $url  Form action url.
         * @param string $path Path.
         * @return string
         */
        public function fix_widget_price_filter($url, $path)
        {
        }
        /**
         * Adds the language to the shortcodes query args to get one cache key per language.
         * Needed for WC 3.0, Requires WC 3.0.2+
         *
         * @since 0.7.4
         *
         * @param array $args WP_Query arguments.
         * @return array
         */
        public function shortcode_products_query($args)
        {
        }
        /**
         * Makes the product subcategories cache key language dependent.
         *
         * @since 1.2.3
         *
         * @param string $cache_key WooCommerce product subcategories cache key.
         * @return string
         */
        public function get_product_subcategories_cache_key($cache_key)
        {
        }
        /**
         * Make sure that the ajax endpoint is in the right language.
         * Required since WC 3.2.
         *
         * @since 0.9.1
         *
         * @param string $url     Ajax endpoint.
         * @param string $request Ajax endpoint request.
         * @return string
         */
        public function ajax_get_endpoint($url, $request)
        {
        }
        /**
         * Adds a script to allow filtering blocks relying on the WC REST API.
         *
         * @since 1.3
         */
        public function filter_dynamic_blocks()
        {
        }
        /**
         * Get a script to allow filtering blocks relying on the WC REST API.
         *
         * @since 1.5.3
         *
         * @param string $path The REST API path to filter.
         * @return string Inline js script to add.
         */
        protected function get_filter_script($path)
        {
        }
    }
    /**
     * @package Polylang-WC
     */
    /**
     * Data store factory.
     *
     * As our language data stores don't implement the WC_Object_Data_Store_Interface
     * interface, it appears risky to use WC_Data_Store directly, so it has been thought
     * to be better to create our own class which can be used in a similar way.
     *
     * @since 1.0
     */
    class PLLWC_Data_Store
    {
        /**
         * Array of data stores.
         *
         * @var array
         */
        private static $stores = array('order_language' => 'PLLWC_Order_Language_CPT', 'product_language' => 'PLLWC_Product_Language_CPT');
        /**
         * Loads a data store.
         *
         * @since 1.0
         *
         * @param string $object_type Identifier for the data store, typically 'order_language' or 'product_language'.
         * @return object
         */
        public static function load($object_type)
        {
        }
    }
    /**
     * @package Polylang-WC
     */
    /**
     * Associates a language to the user and to orders and manages the customer emails languages.
     *
     * @since 0.1
     */
    class PLLWC_Emails
    {
        /**
         * Product language data store.
         *
         * @var object
         */
        protected $data_store;
        /**
         * Previous locale.
         *
         * @var string
         */
        protected $switched_locale;
        /**
         * Previous current language.
         *
         * @var object PLL_Language
         */
        protected $saved_curlang;
        /**
         * Constructor.
         *
         * Setups filters and actions.
         *
         * @since 0.1
         */
        public function __construct()
        {
        }
        /**
         * Set the preferred customer language at customer creation.
         * Hooked to the action 'woocommerce_created_customer'.
         *
         * @since 0.1
         *
         * @param int $user_id User ID.
         */
        public function created_customer($user_id)
        {
        }
        /**
         * Maybe changes the customer language when he places a new order.
         * The chosen language is the currently browsed language.
         * Hooked to the action 'woocommerce_new_order'.
         *
         * @since 1.0
         *
         * @param int $order_id Order ID.
         */
        public function new_order($order_id)
        {
        }
        /**
         * Loads the WooCommerce text domain when the locale is switched.
         * Hooked to the action 'change_locale'.
         *
         * @since 1.0.2
         */
        public function change_locale()
        {
        }
        /**
         * Sets the email language.
         *
         * @since 0.1
         *
         * @param object $language An instance of PLL_Language.
         */
        public function set_email_language($language)
        {
        }
        /**
         * Sets the email language depending on the order language.
         * Hooked to order notifications.
         *
         * @since  0.1
         *
         * @param int|array|object $order Order or order ID.
         */
        public function before_order_email($order)
        {
        }
        /**
         * Sets the email language depending on the user language.
         * Hooked to user notifications.
         *
         * @since 0.1
         *
         * @param int|string $user User ID or user login.
         */
        public function before_user_email($user)
        {
        }
        /**
         * Restores the current language after the email has been sent.
         * Hooked to order and user notifications.
         *
         * @since 0.1
         */
        public function after_email()
        {
        }
        /**
         * Translate the site title which is filled before the email is triggered.
         * Hooked to the filter 'woocommerce_email_format_string_replace'.
         *
         * @since 0.5
         *
         * @param array  $replace Array of strings to replace placeholders in emails.
         * @param object $email   Instance of WC_Email.
         * @return array
         */
        public function format_string_replace($replace, $email)
        {
        }
        /**
         * Filters the user locale. Needed when sending the email from admin.
         *
         * @since 1.0.3
         *
         * @param null|array|string $value    The value get_metadata() should return.
         * @param int               $user_id  User ID.
         * @param string            $meta_key Meta key.
         * @return null|array|string The meta value.
         */
        public function filter_user_locale($value, $user_id, $meta_key)
        {
        }
    }
    /**
     * @package Polylang-WC
     */
    /**
     * A class to export languages and translations of products in CSV files.
     *
     * @since 0.8
     */
    class PLLWC_Export
    {
        /**
         * Constructor.
         * Setups filters.
         *
         * @since 0.8
         */
        public function __construct()
        {
        }
        /**
         * Adds the language and translation group to default columns.
         * Hooked to the filter 'woocommerce_product_export_product_default_columns'.
         *
         * @since 0.8
         *
         * @param array $columns Columns to export.
         * @return array
         */
        public function default_columns($columns)
        {
        }
        /**
         * Exports the product language and translation group.
         * Hooked to the filter 'woocommerce_product_export_row_data'.
         *
         * @since 0.8
         *
         * @param array  $row     Data exported in a CSV row.
         * @param object $product Product.
         * @return array
         */
        public function row_data($row, $product)
        {
        }
    }
    /**
     * @package Polylang-WC
     */
    /**
     * A class to import languages and translations of products from CSV files.
     *
     * @since 0.8
     */
    class PLLWC_Import
    {
        /**
         * Product language data store.
         *
         * @var object
         */
        protected $data_store;
        /**
         * Constructor.
         * Setups filters and actions.
         *
         * @since 0.8
         */
        public function __construct()
        {
        }
        /**
         * Add the language and translation group to the default columns.
         * Hooked to the filter 'woocommerce_csv_product_import_mapping_default_columns'.
         *
         * @since 0.8
         *
         * @param array $mappings Importer columns mappings.
         * @return array
         */
        public function default_columns($mappings)
        {
        }
        /**
         * Adds the language and translation group to the mapping options
         * between "Description" and "Date sale price starts".
         * Hooked to the filter 'woocommerce_csv_product_import_mapping_options'.
         *
         * @since 0.8
         *
         * @param array $options Mapping options.
         * @return array
         */
        public function mapping_options($options)
        {
        }
        /**
         * Imports the language and translation group.
         * Hooked to the action 'woocommerce_product_import_inserted_product_object'.
         *
         * @since 0.8
         *
         * @param object $object Product object.
         * @param array  $data   Data in a row of the CSV file.
         */
        public function inserted_product_object($object, $data)
        {
        }
        /**
         * Assigns the translations group
         *
         * @since 0.8
         *
         * @param int   $id   Product id.
         * @param array $data Data in a row of the CSV file.
         */
        public function set_translation_group($id, $data)
        {
        }
        /**
         * Setups filters for the import.
         * Sets the preferred language when parsing data for terms to be created in the right language.
         * Hooked to the action 'woocommerce_product_importer_before_set_parsed_data' ( first action available during the import ).
         *
         * @since 0.8
         *
         * @param array $row         Row values.
         * @param array $mapped_keys Mapped keys.
         */
        public function before_set_parsed_data($row, $mapped_keys)
        {
        }
        /**
         * Saves the language of the current item being imported for future use.
         *
         * @since 0.8
         *
         * @param array $data Data in a row of the CSV file.
         */
        public function set_language($data)
        {
        }
        /**
         * Filters get_terms according to the language of the current item.
         * This allows get_term_by (slug or name) to return the term in the correct language.
         * Hooked to the filter 'get_terms_args'.
         *
         * @since 0.8
         *
         * @param array $args WP_Term_Query arguments.
         * @return array
         */
        public function get_terms_args($args)
        {
        }
        /**
         * When searching a product id by sku, returns the product id in the current language.
         * Hooked to the filter 'woocommerce_get_product_id_by_sku'.
         *
         * @since 0.9
         *
         * @param int    $product_id Product id found by WooCommerce.
         * @param string $sku        Product SKU.
         * @return int
         */
        public function get_product_id_by_sku($product_id, $sku)
        {
        }
        /**
         * Returns the language to use when searching if a sku is unique.
         * Hooked to the filter 'pllwc_language_for_unique_sku'.
         *
         * @since 0.9
         *
         * @return object PLL_Language object.
         */
        public function language_for_unique_sku()
        {
        }
        /**
         * Replace the categories and tags parsing callback by our own callbacks.
         * Hooked to the filter 'woocommerce_product_importer_formatting_callbacks'.
         *
         * @since 1.0.3
         *
         * @param array  $callbacks Array of parsing callbacks.
         * @param object $importer  WC_Product_CSV_Importer object.
         * @return array
         */
        public function formatting_callbacks($callbacks, $importer)
        {
        }
        /**
         * Parse a category field from a CSV.
         * Categories are separated by commas and subcategories are "parent > subcategory".
         * Mainly a copy of WC_Product_CSV_Importer::parse_categories_field()
         * using our own term_exists method.
         * Code last checked: WC 4.0
         *
         * @since 1.0.3
         *
         * @param string $value Field value.
         * @return array of arrays with "parent" and "name" keys.
         */
        public function parse_categories_field($value)
        {
        }
        /**
         * Parse a tag field from a CSV.
         * Mainly a copy of WC_Product_CSV_Importer::parse_tags_field()
         * using a hack to share the slug.
         * Code last checked: WC 4.0
         *
         * @since 1.0.3
         *
         * @param  string $value Field value.
         * @return array
         */
        public function parse_tags_field($value)
        {
        }
        /**
         * Explode CSV cell values using commas by default, and handling escaped separators.
         * Exact copy of WC_Product_Importer::explode_values.
         * Code last checked: WC 4.0
         *
         * @since  1.0.3
         *
         * @param  string $value Value to explode.
         * @return array
         */
        protected function explode_values($value)
        {
        }
        /**
         * Remove formatting and trim each value.
         * Exact copy of WC_Product_Importer::explode_values_formatter.
         * Code last checked: WC 4.0
         *
         * @since  1.0.3
         *
         * @param  string $value Value to format.
         * @return string
         */
        protected function explode_values_formatter($value)
        {
        }
        /**
         * The exporter prepends a ' to escape fields that start with =, +, - or @.
         * Remove the prepended ' character preceding those characters.
         * Exact copy of WC_Product_Importer::unescape_data
         * Code last checked: WC 4.0
         *
         * @since 1.5
         *
         * @param  string $value A string that may or may not have been escaped with '.
         * @return string
         */
        protected function unescape_data($value)
        {
        }
    }
    /**
     * @package Polylang-WC
     */
    /**
     * Activation / de-activation class compatible with multisite.
     * Based on PLL_Install_Base.
     *
     * @since 0.1
     */
    class PLLWC_Install
    {
        /**
         * Plugin basename
         *
         * @var string
         */
        protected $plugin_basename;
        /**
         * Constructor.
         *
         * @since 0.1
         *
         * @param string $plugin_basename Plugin basename.
         */
        public function __construct($plugin_basename)
        {
        }
        /**
         * Allows to detect the plugin deactivation.
         *
         * @since 0.1
         *
         * @return bool True if the plugin is currently beeing deactivated.
         */
        public function is_deactivation()
        {
        }
        /**
         * Activation or deactivation for all sites.
         *
         * @since 0.1
         *
         * @param string $what        Either 'activate' or 'deactivate'.
         * @param bool   $networkwide True if the plugin is network activated, false otherwise.
         */
        protected function do_for_all_blogs($what, $networkwide)
        {
        }
        /**
         * Plugin activation, multisite compatible.
         *
         * @since 0.1
         *
         * @param bool $networkwide True if the plugin is network activated, false otherwise.
         */
        public function activate($networkwide)
        {
        }
        /**
         * Plugin activation on a single site.
         *
         * @since 0.1
         */
        protected function _activate()
        {
        }
        /**
         * Plugin deactivation, multisite compatible.
         *
         * @since 0.1
         *
         * @param bool $networkwide True if the plugin is network activated, false otherwise.
         */
        public function deactivate($networkwide)
        {
        }
        /**
         * Plugin deactivation on a single site.
         *
         * @since 0.1
         */
        protected function _deactivate()
        {
        }
        /**
         * Site creation on multisite.
         *
         * @since 0.9.4
         *
         * @param int $blog_id Blog ID.
         */
        public function wpmu_new_blog($blog_id)
        {
        }
    }
    /**
     * @package Polylang-WC
     */
    /**
     * Translates links.
     *
     * @since 0.1
     */
    class PLLWC_Links
    {
        /**
         * Constructor.
         *
         * @since 0.1
         */
        public function __construct()
        {
        }
        /**
         * Prepares rewrite rules filters for the shop.
         * Hooked to the filter 'pre_option_rewrite_rules'.
         *
         * @since 0.1
         *
         * @param array $pre Not used.
         * @return array Unmodified $pre
         */
        public function prepare_rewrite_rules($pre)
        {
        }
        /**
         * Get the shop pages slugs in all languages.
         *
         * @since 0.3.6
         *
         * @return array
         */
        protected function get_all_shop_page_slugs()
        {
        }
        /**
         * Modifies the product archive rewrite rules
         * to get the slugs directly from all the shop page translations.
         * It must be done after WooCommerce for the shop rules to stay on top.
         * Hooked to the filter 'rewrite_rules_array'.
         *
         * @since 0.1
         *
         * @param array $rules Rewrite rules.
         * @return array Modified rewrite rules.
         */
        public function rewrite_shop_rules($rules)
        {
        }
        /**
         * Add rewrite rules for the shop subpages.
         * It must be done after WooCommerce to remove the rules created by WooCommerce.
         *
         * @since 0.9.5
         *
         * @param array $rules Rewrite rules.
         * @return array Modified rewrite rules.
         */
        public function rewrite_shop_subpages_rules($rules)
        {
        }
        /**
         * Prevents Polylang from modifying some rewrite rules.
         *
         * @since 0.1
         *
         * @param bool        $modify  Whether to modify or not the rule, defaults to true.
         * @param array       $rule    Original rewrite rule.
         * @param string      $filter  Current set of rules being modified.
         * @param string|bool $archive Custom post post type archive name or false if it is not a cpt archive.
         * @return bool
         */
        public function fix_rewrite_rules($modify, $rule, $filter, $archive)
        {
        }
        /**
         * Returns the translation of the current url.
         * Hooked to the filter 'pll_translation_url'.
         *
         * @since 0.1
         *
         * @param string $url  Translation url.
         * @param string $lang Language slug.
         * @return string
         */
        public function pll_translation_url($url, $lang)
        {
        }
        /**
         * Fixes the "Shop" link in the breadcrumb.
         * Note that WooCommerce uses the presence of the shop page slug in permalink product base to display it.
         * Hooked to the filter 'option_woocommerce_permalinks'.
         *
         * @since 0.3.6
         *
         * @param array $permalinks WooCommerce permalinks options.
         * @return array
         */
        public function option_woocommerce_permalinks($permalinks)
        {
        }
        /**
         * Sets the home urls when using plain permalinks and the shop is on front.
         *
         * @since 0.5
         *
         * @param array $languages Array of PLL_Language objects.
         * @return array
         */
        public static function set_home_urls($languages)
        {
        }
        /**
         * Sets the home urls when not cached and using plain permalinks and the shop is on front.
         *
         * @since 0.5
         *
         * @param array $languages Array of PLL_Language objects.
         * @return array
         */
        public static function pll_after_languages_cache($languages)
        {
        }
        /**
         * Makes sure that the order received url is in the same language as the order.
         * This is especially useful when evaluating the return url for gateways, which
         * evaluate the return url on an api endpoint.
         *
         * @since 1.5.1
         *
         * @param string $url   Order received url.
         * @param object $order WC_Order object.
         * @return string
         */
        public function checkout_order_received_url($url, $order)
        {
        }
    }
    /**
     * @package Polylang-WC
     */
    /**
     * Translates links (including endpoints) when the slugs are translatable.
     *
     * @since 0.1
     */
    class PLLWC_Links_Pro extends \PLLWC_Links
    {
        /**
         * Constructor.
         *
         * @since 0.1
         */
        public function __construct()
        {
        }
        /**
         * Get the list of endpoints query vars.
         *
         * @since 0.4
         *
         * @return array
         */
        protected function get_query_vars()
        {
        }
        /**
         * Removes the shop slug and adds endpoints slugs to the translatable slugs.
         *
         * @since 0.1
         *
         * @param array  $slugs    The list of slugs.
         * @param object $language Instance of PLL_Language.
         * @param object $mo       The translations object, instance of PLL_MO.
         * @return array
         */
        public function pll_translated_slugs($slugs, $language, &$mo)
        {
        }
        /**
         * Prepares the rewrite rules filters to translate endpoints slugs.
         *
         * @since 0.1
         *
         * @param array $pre Not used.
         * @return Unmodified $pre.
         */
        public function prepare_rewrite_rules($pre)
        {
        }
        /**
         * Modifies the rewrite rules to translate endpoints slugs.
         * Hooked to the filter 'page_rewrite_rules'.
         *
         * @since 0.1
         *
         * @param array $rules Rewrite rules.
         * @return array modified rewrite rules.
         */
        public function rewrite_translated_slug($rules)
        {
        }
        /**
         * Translates the endpoint slug in the rewrite rules.
         *
         * @since 0.1
         *
         * @param array  $rules Rewrite rules.
         * @param string $type  Type of slug to translate.
         * @return array Modified rewrite rules.
         */
        public function translate_rule($rules, $type)
        {
        }
        /**
         * Translates the endpoint url.
         *
         * @øince 0.1
         *
         * @param string     $link     Endpoint url.
         * @param string     $endpoint Endpoint name.
         * @param int|string $value    Endpoint value.
         */
        public function get_endpoint_url($link, $endpoint, $value)
        {
        }
        /**
         * Translates the edit-address slug.
         *
         * @øince 0.1
         *
         * @param array $slugs Edit address endpoint slugs, typically 'billing' and 'shipping'.
         * @return array
         */
        public function edit_address_slugs($slugs)
        {
        }
        /**
         * Returns the translation of the current url.
         * Overrides the parent method to translate slugs.
         *
         * @since 0.1
         *
         * @param string $url  Translation url.
         * @param string $lang Language slug.
         * @return string
         */
        public function pll_translation_url($url, $lang)
        {
        }
    }
    /**
     * @package Polylang-WC
     */
    /**
     * Setups an object language model when managed the object is a custom post type.
     *
     * @since 1.0
     */
    abstract class PLLWC_Object_Language_CPT
    {
        /**
         * Get the language taxonomy name.
         *
         * @since 1.0
         *
         * @return string
         */
        public function get_tax_language()
        {
        }
        /**
         * Stores the object language in the database.
         *
         * @since 1.0
         *
         * @param int    $id   Order id.
         * @param string $lang Language code.
         */
        public function set_language($id, $lang)
        {
        }
        /**
         * Returns the language of an object.
         *
         * @since 1.0
         *
         * @param int    $id    Order id.
         * @param string $field Optional, the language field to return ( see PLL_Language ), defaults to 'slug'.
         * @return bool|string Language code, false if no language is associated to this order.
         */
        public function get_language($id, $field = 'slug')
        {
        }
        /**
         * Returns a join clause to add to sql queries when filtering by language is needed directly in query.
         *
         * @since 1.0
         *
         * @param string $alias Alias for $wpdb->posts table.
         * @return string Join clause.
         */
        public function join_clause($alias = '')
        {
        }
        /**
         * Returns a where clause to add to sql queries when filtering by language is needed directly in query.
         *
         * @since 1.0
         *
         * @param object|array|string $lang A PLL_Language object or a comma separated list of language slug or an array of language slugs.
         * @return string Where clause.
         */
        public function where_clause($lang)
        {
        }
    }
    /**
     * @package Polylang-WC
     */
    /**
     * Setups the order language model when orders are managed with a custom post type.
     *
     * @since 1.0
     */
    class PLLWC_Order_Language_CPT extends \PLLWC_Object_Language_CPT
    {
        /**
         * Add filters.
         *
         * @since 1.0
         */
        public function init()
        {
        }
        /**
         * Add orders to teh list of the translated post types.
         *
         * @since 1.0
         *
         * @param array $types List of post type names for which Polylang manages language and translations.
         * @param bool  $hide  True when displaying the list in Polylang settings.
         * @return array List of post type names for which Polylang manages language and translations.
         */
        public function translated_post_types($types, $hide)
        {
        }
        /**
         * Remove the order post type from the bulk translate action.
         *
         * @since 1.0.4
         *
         * @param array $types List of post type names for which Polylang manages the bulk translate.
         * @return array
         */
        public function bulk_translate_post_types($types)
        {
        }
    }
    /**
     * @package Polylang-WC
     */
    /**
     * Fixes how WooCommerce post types and taxonomies are registered.
     * Setups languages and translations data stores.
     *
     * @since 0.1
     */
    class PLLWC_Post_Types
    {
        /**
         * WooCommerce permalinks option.
         *
         * @var array
         */
        protected $permalinks;
        /**
         * Constructor.
         *
         * @since 0.1
         */
        public function __construct()
        {
        }
        /**
         * Disables the translation of the product category slug handled by WooCommerce as it does not play nice in multilingual context.
         *
         * @since 0.1
         *
         * @param array $args Arguments used to register the taxonomy.
         * @return array
         */
        public function woocommerce_taxonomy_args_product_cat($args)
        {
        }
        /**
         * Disables the translation of the product tag slug handled by WooCommerce as it does not play nice in multilingual context.
         *
         * @since 0.1
         *
         * @param array $args Arguments used to register the taxonomy.
         * @return array
         */
        public function woocommerce_taxonomy_args_product_tag($args)
        {
        }
        /**
         * Get taxonomies for which Polylang manages language and translations.
         *
         * @since 0.1
         *
         * @return array List of taxonomy names.
         */
        protected static function get_translated_taxonomies()
        {
        }
        /**
         * Language and translation management for custom taxonomies.
         * All are hidden from Polylang settings.
         *
         * @since 0.1
         *
         * @param array $taxonomies List of taxonomy names for which Polylang manages language and translations.
         * @param bool  $hide       True when displaying the list in Polylang settings.
         * @return array List of taxonomy names for which Polylang manages language and translations.
         */
        public function translate_taxonomies($taxonomies, $hide)
        {
        }
        /**
         * Adds taxonomies to the list of taxonomies to copy when creating a new translation.
         *
         * @since 0.1
         *
         * @param array $taxonomies The list of taxonomies to copy or synchronize.
         * @param bool  $sync       True for sync, false for copy.
         * @return array The list of taxonomies to copy or synchronize.
         */
        public function copy_taxonomies($taxonomies, $sync)
        {
        }
    }
    /**
     * @package Polylang-WC
     */
    /**
     * Child class of WC_Product_Data_Store_CPT allowing us to access protected methods or properties.
     *
     * @since 1.5
     */
    class PLLWC_Product_Data_Store_CPT extends \WC_Product_Data_Store_CPT
    {
        /**
         * Public version of WC_Product_Data_Store_CPT::update_lookup_table().
         *
         * @since 1.5
         *
         * @param int    $id    ID of object to update.
         * @param string $table Lookup table name.
         */
        public function wc_update_lookup_table($id, $table)
        {
        }
    }
    /**
     * @package Polylang-WC
     */
    /**
     * Setups a translatable object language model when the object is a custom post type.
     *
     * @since 1.0
     */
    abstract class PLLWC_Translated_Object_Language_CPT extends \PLLWC_Object_Language_CPT
    {
        /**
         * Get the translations group taxonomy name.
         *
         * @since 1.0
         *
         * @return string
         */
        public function get_tax_translations()
        {
        }
        /**
         * Save the object translations.
         *
         * @since 1.0
         *
         * @param array $arr An associative array of translations with language code as key and product id as value.
         */
        public function save_translations($arr)
        {
        }
        /**
         * Returns an array of translations of an object.
         *
         * @since 1.0
         *
         * @param int $id Object id.
         * @return array An associative array of translations with language code as key and translation product id as value.
         */
        public function get_translations($id)
        {
        }
        /**
         * Among the object and its translations, returns the id of the object in the requested language.
         *
         * @since 1.0
         *
         * @param int    $id   Object id.
         * @param string $lang Optional language code, defaults to the current language.
         * @return int|false|null Object id of the translation if exists, false otherwise, null if the current language is not defined yet.
         */
        public function get($id, $lang = '')
        {
        }
    }
    /**
     * @package Polylang-WC
     */
    /**
     * Setups the product languages and translations model when products are managed with a custom post type.
     *
     * @since 1.0
     */
    class PLLWC_Product_Language_CPT extends \PLLWC_Translated_Object_Language_CPT
    {
        /**
         * WooCommerce permalinks option.
         *
         * @var array
         */
        protected $permalinks;
        /**
         * Current attribute term being edited.
         *
         * @var object WP_Term
         */
        protected static $editing_term;
        /**
         * Product data store.
         *
         * @var object PLLWC_Product_Data_Store_CPT
         */
        protected $data_store;
        /**
         * Constructor.
         *
         * @since 1.5
         */
        public function __construct()
        {
        }
        /**
         * Add filters, should be called only once.
         *
         * @since 1.0
         */
        public function init()
        {
        }
        /**
         * Add products and variations to translated post types.
         *
         * @since 1.0
         *
         * @param array $types List of post type names for which Polylang manages language and translations.
         * @param bool  $hide  True when displaying the list in Polylang settings.
         * @return array List of post type names for which Polylang manages language and translations.
         */
        public function translated_post_types($types, $hide)
        {
        }
        /**
         * Disables the translation of the product slug handled by WooCommerce as it does not play nice in multilingual context.
         *
         * @since 0.1
         *
         * @param array $args arguments used to register the post type.
         * @return array
         */
        public function woocommerce_register_post_type_product($args)
        {
        }
        /**
         * Filters args used to get variable products children, to make sure that they are not filtered by the current language.
         *
         * @since 0.7.3
         *
         * @param array $args Query arguments.
         * @return array
         */
        public function variable_children_args($args)
        {
        }
        /**
         * When assigning a product type, clear the cached value.
         *
         * @since 1.3.3
         *
         * @param int    $object_id Object ID.
         * @param array  $terms     An array of object terms.
         * @param array  $tt_ids    An array of term taxonomy IDs.
         * @param string $taxonomy  Taxonomy slug.
         */
        public function set_object_terms($object_id, $terms, $tt_ids, $taxonomy)
        {
        }
        /**
         * Returns legacy product metas mapped to product properties.
         *
         * @since 1.0
         *
         * @return array
         */
        protected function get_legacy_metas()
        {
        }
        /**
         * Get the custom fields to copy or synchronize.
         *
         * @since 1.0
         *
         * @param array  $metas List of custom fields names.
         * @param bool   $sync  True if it is synchronization, false if it is a copy.
         * @param int    $from  Id of the product from which we copy informations.
         * @param int    $to    Id of the product to which we copy informations.
         * @param string $lang  Language code.
         * @return array
         */
        public function copy_post_metas($metas, $sync, $from, $to, $lang)
        {
        }
        /**
         * Update a lookup table for an object.
         *
         * @since 1.2
         *
         * @param int    $id    ID of object to update.
         * @param string $table Lookup table name.
         */
        public function update_lookup_table($id, $table)
        {
        }
        /**
         * Fires actions and update look tables of translated products after properties have been synchronized.
         *
         * @since 1.2
         *
         * @param object $product       Product.
         * @param array  $updated_props Product properties being updated.
         */
        public function updated_props($product, $updated_props)
        {
        }
        /**
         * Updates the lookup table after product is duplicated or synchronized.
         *
         * @since 1.5.5
         *
         * @param int $from Id of the product from which we copy informations.
         * @param int $to   Id of the target.
         * @return void
         */
        public function post_synchronized($from, $to)
        {
        }
        /**
         * Translates a custom field before it is copied or synchronized.
         *
         * @since 1.0
         *
         * @param mixed  $value Meta value.
         * @param string $key   Meta key.
         * @param string $lang  Language of target.
         * @param int    $from  Id of the object from which we copy informations.
         * @param int    $to    Id of the target.
         * @return mixed
         */
        public function translate_post_meta($value, $key, $lang, $from, $to)
        {
        }
        /**
         * Copies properties (taxonomies and metas) from one product to another product.
         *
         * @since 1.0
         *
         * @param int    $from  Id of the product from which we copy informations.
         * @param int    $to    Id of the product to which we copy informations.
         * @param string $lang  Language code.
         * @param bool   $sync  Optional, defaults to false. True if it is synchronization, false if it is a copy.
         */
        public function copy($from, $to, $lang, $sync = \false)
        {
        }
        /**
         * Synchronizes product ordering.
         *
         * @since 1.0
         *
         * @param int   $id    Product id.
         * @param array $order Product order.
         */
        public function save_product_ordering($id, $order)
        {
        }
        /**
         * Returns the translation group name of a product (if it exists).
         * This is the name of the associated taxonomy term.
         *
         * @since 1.0
         *
         * @param int $id Product id.
         * @return string
         */
        public function get_translation_group_name($id)
        {
        }
        /**
         * Checks if a product sku is found for any other product id in a language.
         * Modified version WC_Product_Data_Store_CPT::is_existing_sku().
         * Code last checked: WC 4.0
         *
         * @since 1.0
         *
         * @param int    $product_id Product ID.
         * @param string $sku        SKU Will be slashed to work around https://core.trac.wordpress.org/ticket/27421.
         * @param string $lang       Language code.
         * @return bool
         */
        public function is_existing_sku($product_id, $sku, $lang)
        {
        }
        /**
         * Returns a product id based on the sku and the language.
         * Modified version WC_Product_Data_Store_CPT::get_product_id_by_sku().
         * Code last checked: WC 4.0
         *
         * @since 1.0
         *
         * @param string $sku  SKU.
         * @param string $lang Language code.
         * @return int Product id.
         */
        public function get_product_id_by_sku($sku, $lang)
        {
        }
        /**
         * When editing a term, check for product attributes.
         * This is a exact copy of WC_Post_Data::edit_term().
         * A copy is needed because of the private property $editing_term.
         * Code last checked: WC 4.0
         *
         * @since 1.2
         *
         * @param  int    $term_id  Term ID.
         * @param  int    $tt_id    Term taxonomy ID.
         * @param  string $taxonomy Taxonomy slug.
         */
        public static function edit_term($term_id, $tt_id, $taxonomy)
        {
        }
        /**
         * When a term is edited, check for product attributes and update variations.
         * This is a modified version of WC_Post_Data::edited_term().
         * The language is added to the query to take into account updates of attributes sharing the same slug.
         * Code last checked: WC 4.0
         *
         * @since 1.2
         *
         * @param  int    $term_id  Term ID.
         * @param  int    $tt_id    Term taxonomy ID.
         * @param  string $taxonomy Taxonomy slug.
         */
        public function edited_term($term_id, $tt_id, $taxonomy)
        {
        }
    }
    /**
     * @package Polylang-WC
     */
    /**
     * Manages the products (mainly the synchronization of data).
     *
     * @since 1.3
     */
    class PLLWC_Products
    {
        /**
         * Product language data store.
         *
         * @var object
         */
        protected $data_store;
        /**
         * Constructor.
         *
         * @since 0.1
         */
        public function __construct()
        {
        }
        /**
         * Copy (create) or synchronize a variation.
         *
         * @since 1.0
         *
         * @param int    $id        Source variation product id.
         * @param int    $tr_parent Target variable product id.
         * @param string $lang      Target language.
         */
        protected function copy_variation($id, $tr_parent, $lang)
        {
        }
        /**
         * Copy or synchronize variations.
         *
         * @since 0.1
         *
         * @param int    $from Product id from which we copy informations.
         * @param int    $to   Product id to which we paste informations.
         * @param string $lang Language code.
         * @param bool   $sync True if it is synchronization, false if it is a copy, defaults to false.
         */
        public function copy_variations($from, $to, $lang, $sync = \false)
        {
        }
        /**
         * Copy variations and metas when using "Add new" ( translation )
         * Hooked to the action 'add_meta_boxes'.
         *
         * @since 0.1
         *
         * @param string $post_type Post type.
         * @param object $post      Current post object.
         */
        public function add_meta_boxes($post_type, $post)
        {
        }
        /**
         * Fires an action that can be used to synchronize data when a product is saved.
         * Hooked to the action 'woocommerce_update_product'.
         *
         * @since 1.0
         *
         * @param int $id Product ID.
         */
        public function save_product($id)
        {
        }
        /**
         * Sets the variation language and synchronizes it with its translations.
         * Hooked to the action 'woocommerce_new_product_variation' and 'woocommerce_update_product_variation'.
         *
         * @since 1.0
         *
         * @param int $id Variation product id.
         */
        public function save_variation($id)
        {
        }
        /**
         * Synchronizes variations deletion.
         * Backward compatibility with WC < 3.4.
         *
         * @since 0.1
         *
         * @param int $post_id Product ID.
         */
        public function delete_post($post_id)
        {
        }
        /**
         * Synchronizes variations deletion.
         * Hooked to the action 'woocommerce_before_delete_product_variation'.
         *
         * @since 1.0
         *
         * @param int $id Variation product id.
         */
        public function delete_variation($id)
        {
        }
        /**
         * Checks whether two products are synchronized.
         * Includes a backward compatibility with Polylang < 2.6.
         *
         * @since 1.2
         *
         * @param int $id       ID of the first product to compare.
         * @param int $other_id ID of the second product to compare.
         * @return bool
         */
        protected static function are_synchronized($id, $other_id)
        {
        }
        /**
         * Determines whether texts should be copied depending on duplicate and synchronization options.
         *
         * @since 1.0
         *
         * @param int  $from Product id from which we copy informations.
         * @param int  $to   Product id which we paste informations.
         * @param bool $sync True if it is synchronization, false if it is a copy.
         */
        public static function should_copy_texts($from, $to, $sync)
        {
        }
        /**
         * Maybe translates a product property.
         *
         * @since 1.0
         *
         * @param mixed  $value Property value.
         * @param string $prop  Property name.
         * @param string $lang  Language code.
         * @return mixed Property value, possibly translated.
         */
        public static function maybe_translate_property($value, $prop, $lang)
        {
        }
        /**
         * Translates taxonomy attributes.
         *
         * @since 1.0
         *
         * @param array  $attributes Product attributes.
         * @param string $lang       Language code.
         * @return array
         */
        protected function maybe_translate_attributes($attributes, $lang)
        {
        }
        /**
         * Filters wc_product_has_unique_sku.
         *
         * @since 0.7
         *
         * @param bool   $sku_found  True if the SKU is already associated to an existing product, false otherwise.
         * @param int    $product_id Product ID.
         * @param string $sku        Product SKU.
         * @return bool
         */
        public function unique_sku($sku_found, $product_id, $sku)
        {
        }
        /**
         * Make sure that the on sale products block is filtered by the current language.
         *
         * @since 1.3
         *
         * @param array  $excludes Query vars excluded from the language filter.
         * @param object $query    WP Query object.
         * @return array
         */
        public function fix_on_sale_products_block_query($excludes, $query)
        {
        }
    }
    /**
     * @package Polylang-WC
     */
    /**
     * A class to filter the REST API.
     * Needs Polylang Pro 2.2.1 or later.
     * Tested with the WC API v2 or later ( WC 3.0 or later ).
     *
     * @since 0.9
     */
    class PLLWC_REST_API
    {
        /**
         * Constructor.
         * Setups actions and filters.
         *
         * @since 0.9
         */
        public function __construct()
        {
        }
        /**
         * Initializes filters after the Polylang REST API has been initialized.
         *
         * @since 0.9
         */
        public function init()
        {
        }
        /**
         * Removes the translations from the response when querying orders.
         *
         * @since 0.9
         *
         * @param array $args Options passed to PLL_REST_Post.
         * @return array
         */
        public function post_types($args)
        {
        }
        /**
         * Adds the language and translations in the response when querying product attributes terms.
         *
         * @since 0.9
         *
         * @param array $args Options passed to PLL_REST_Term.
         * @return array
         */
        public function taxonomies($args)
        {
        }
    }
    /**
     * @package Polylang-WC
     */
    /**
     * Exposes the order language in the REST API.
     *
     * @since 1.1
     */
    class PLLWC_REST_Order extends \PLL_REST_Translated_Object
    {
        /**
         * Constructor.
         *
         * @since 1.1
         */
        public function __construct()
        {
        }
        /**
         * Returns the object language.
         *
         * @since 1.1
         *
         * @param array $object Order array.
         * @return string
         */
        public function get_language($object)
        {
        }
        /**
         * Sets the object language.
         *
         * @since 1.1
         *
         * @param string $lang   Language code.
         * @param object $object Instance of WC_Order.
         * @return bool
         */
        public function set_language($lang, $object)
        {
        }
    }
    /**
     * @package Polylang-WC
     */
    /**
     * Expose the product language and translations in the REST API.
     *
     * @since 1.1
     */
    class PLLWC_REST_Product extends \PLL_REST_Translated_Object
    {
        /**
         * Constructor.
         *
         * @since 1.1
         */
        public function __construct()
        {
        }
        /**
         * Returns the object language.
         *
         * @since 1.1
         *
         * @param array $object Product array.
         * @return string
         */
        public function get_language($object)
        {
        }
        /**
         * Sets the object language.
         *
         * @since 1.1
         *
         * @param string $lang   Language code.
         * @param object $object Instance of WC_Product.
         * @return bool
         */
        public function set_language($lang, $object)
        {
        }
        /**
         * Returns the object translations.
         *
         * @since 1.1
         *
         * @param array $object Product array.
         * @return array
         */
        public function get_translations($object)
        {
        }
        /**
         * Save the translations.
         *
         * @since 1.1
         *
         * @param array  $translations Array of translations with language codes as keys and object ids as values.
         * @param object $object       Instance of WC_Product.
         * @return bool
         */
        public function save_translations($translations, $object)
        {
        }
        /**
         * Deactivate Auto translate to allow queries of attribute terms in the right language.
         *
         * @since 1.1
         *
         * @param array $args WP_Term_Query arguments.
         * @return array
         */
        public function get_terms_args($args)
        {
        }
        /**
         * Returns the language to use when searching if a sku is unique.
         * Requires Polylang Pro 2.7+
         *
         * @since 1.3
         *
         * @param PLL_Language $language Language for unique sku.
         * @return PLL_Language
         */
        public function language_for_unique_sku($language)
        {
        }
    }
    /**
     * @package Polylang-WC
     */
    /**
     * Manages the synchronization of the stock between translations of the same product.
     *
     * @since 0.1
     */
    class PLLWC_Stock
    {
        /**
         * Product language data store.
         *
         * @var object
         */
        protected $data_store;
        /**
         * Constructor.
         *
         * @since 0.1
         */
        public function __construct()
        {
        }
        /**
         * Synchronizes the stock across the product translations.
         *
         * @since 0.9
         *
         * @param object $product An instance of WC_Product.
         */
        public function set_stock($product)
        {
        }
        /**
         * Synchronize the stock across the product translations.
         *
         * @since 1.2
         *
         * @param string $sql        SQL query used to update the product stock.
         * @param int    $product_id Product id.
         * @return Modified SQL query
         */
        public function update_product_stock_query($sql, $product_id)
        {
        }
        /**
         * Deletes the cache and updates the stock status for all the translations.
         *
         * @since 1.2
         *
         * @param int $id Product id.
         */
        public function updated_product_stock($id)
        {
        }
        /**
         * Synchronizes the stock status across the product translations.
         *
         * @since 1.1
         *
         * @param int    $id     Product id.
         * @param string $status Stock status.
         */
        public function set_stock_status($id, $status)
        {
        }
        /**
         * Synchronizes reserve_stock_for_product accross translations
         *
         * @since 1.5
         *
         * @param string $query            The query for getting reserved stock of a product.
         * @param int    $product_id       Product ID.
         * @param int    $exclude_order_id Order to exclude from the results.
         */
        public function query_for_reserved_stock($query, $product_id, $exclude_order_id)
        {
        }
    }
    /**
     * @package Polylang-WC
     */
    /**
     * Manage the strings translations.
     *
     * @since 0.1
     */
    class PLLWC_Strings
    {
        /**
         * Constructor.
         *
         * @since 0.1
         */
        public function __construct()
        {
        }
        /**
         * Returns the options to translate.
         * Not called before the action 'init' to avoid loading WooCommerce translations sooner than WooCommerce.
         *
         * @since 1.0
         *
         * @return array
         */
        protected static function get_options()
        {
        }
        /**
         * Tests whether an email property should be translated.
         *
         * @since 0.1
         *
         * @param string $prop Property name.
         * @return bool
         */
        protected function is_translated_email_property($prop)
        {
        }
        /**
         * Tests whether a gateway property should be translated.
         * Verifies that the property has been saved in database.
         *
         * @since 0.1
         * @since 0.9 Add $gateway parameter
         *
         * @param string $prop    Property name.
         * @param object $gateway WC_Payment_Gateway object.
         * @return bool
         */
        protected function is_translated_gateway_property($prop, $gateway = \null)
        {
        }
        /**
         * Tests whether a shipping property should be translated.
         *
         * @since 0.1
         *
         * @param string $prop Property name.
         * @return bool
         */
        protected function is_translated_shipping_property($prop)
        {
        }
        /**
         * Tests whether an email property input field should be multiline.
         *
         * @since 1.5.5
         *
         * @param string $prop Property name.
         * @return bool
         */
        protected function is_email_property_multiline($prop)
        {
        }
        /**
         * Tests whether a gateway property input field should be multiline.
         *
         * @since 0.1
         *
         * @param string $prop Property name.
         * @return bool
         */
        protected function is_gateway_property_multiline($prop)
        {
        }
        /**
         * Register sub strings.
         *
         * @since 0.1
         *
         * @param array    $objects          Array of objects having properties to translate.
         * @param callback $is_translated_cb Function testing if a property should be translated.
         * @param callback $is_multiline_cb  Function testing if the input field should be multiline (default to false).
         */
        protected function register_sub_options($objects, $is_translated_cb, $is_multiline_cb = '__return_false')
        {
        }
        /**
         * Registers strings
         *
         * @since 0.1
         */
        public function register_strings()
        {
        }
        /**
         * Sanitizes translated strings.
         * This is done the same way WooCommerce does before they are saved.
         *
         * @since 0.1
         *
         * @param string $translation The string translation.
         * @param string $name        The name as defined in pll_register_string.
         * @param string $context     The context as defined in pll_register_string.
         * @return string sanitized translation
         */
        public function sanitize_strings($translation, $name, $context)
        {
        }
        /**
         * Setups actions and filters to translate strings.
         *
         * @since 0.1
         */
        public function translate_strings()
        {
        }
        /**
         * Translates emails subject, heading and footer.
         *
         * @since 0.1
         */
        public function translate_emails()
        {
        }
        /**
         * Translates emails options such as the subject and heading.
         * Hooked to the filter 'woocommerce_email_get_option'.
         *
         * @since 0.8
         *
         * @param string $value  String to translate.
         * @param object $email  Instance of WC_Email, not used.
         * @param string $_value Same as $value, not used.
         * @param string $key    Option name.
         */
        public function translate_email_option($value, $email, $_value, $key)
        {
        }
        /**
         * Translates the gateway instructions in thankyou page or email.
         *
         * @since 0.1
         */
        public function translate_instructions()
        {
        }
        /**
         * Translate the account names and bank names for the BACS gateway.
         *
         * @since 1.2
         *
         * @param array $accounts Array of account details.
         * @return array
         */
        public function translate_bacs_accounts($accounts)
        {
        }
        /**
         * Translate the shipping methods titles.
         *
         * @since 0.1
         *
         * @param array $rates Array of WC_Shipping_Rate objects.
         * @return array
         */
        public function translate_shipping($rates)
        {
        }
        /**
         * Reset the shipping in session in case a user switches the language.
         *
         * @since 0.1
         *
         * @param object $cart WC_Cart object.
         */
        public function reset_shipping_language($cart)
        {
        }
        /**
         * Translates the attributes labels.
         *
         * @since 0.1
         *
         * @param array $attribute_taxonomies Attribute taxonomies.
         * @return array
         */
        public function attribute_taxonomies($attribute_taxonomies)
        {
        }
        /**
         * Translates the tax rates labels.
         *
         * @since 1.2
         *
         * @param array $rates An array of tax rates.
         * @return array
         */
        public function find_rates($rates)
        {
        }
        /**
         * Translates an attribute label on admin.
         * Needed for variations titles since WC 3.0.
         *
         * @since 0.7
         *
         * @param string $label   Attribute label.
         * @param string $name    Taxonomy name, not used.
         * @param object $product Product data.
         * @return string
         */
        public function attribute_label($label, $name, $product)
        {
        }
    }
    /**
     * @package Polylang-WC
     */
    /**
     * Smart copies WooCommerce blocks.
     *
     * @since 1.2
     */
    class PLLWC_Sync_Content
    {
        /**
         * Constructor.
         * Setup filters.
         *
         * @since 1.2
         */
        public function __construct()
        {
        }
        /**
         * Translate blocks.
         * Hooked to the filter 'pll_translate_blocks'.
         *
         * @since 1.2
         *
         * @param array  $blocks An array of blocks arrays.
         * @param string $lang   Target language.
         * @return array
         */
        public function translate_blocks($blocks, $lang)
        {
        }
    }
    /**
     * @package Polylang-WC
     */
    /**
     * A class to store cross domain data in the WC session table.
     *
     * @since 0.3
     */
    class PLLWC_Xdata_Session_Manager
    {
        /**
         * Writes cross domain data to the session.
         *
         * @since 0.3
         *
         * @param string $key     A unique hash key.
         * @param array  $data    Data to store in the session.
         * @param int    $user_id Optional, user id.
         */
        public function set($key, $data, $user_id = 0)
        {
        }
        /**
         * Reads cross domain data in the session
         * and deletes the session to avoid a replay.
         *
         * @since 0.3
         *
         * @param string $key Session key.
         * @return array $data
         */
        public function get($key)
        {
        }
    }
    /**
     * @package Polylang-WC
     */
    /**
     * Manages cookies transfer when switching from one domain (or subdomain) to another one.
     *
     * @since 0.2
     */
    class PLLWC_Xdata
    {
        /**
         * Constructor.
         *
         * @since 0.2
         */
        public function __construct()
        {
        }
        /**
         * Get the cookies to transfer.
         *
         * @since 0.3
         *
         * @param array $data Data to transfer from one domain to the other.
         * @return array
         */
        public function get_xdata($data)
        {
        }
        /**
         * Set the transferred cookies.
         *
         * @since 0.3
         *
         * @param array $data Transferred data.
         */
        public function set_xdata($data)
        {
        }
        /**
         * Get the session manager class.
         *
         * @since 0.3
         *
         * @return string Class name.
         */
        public function get_session_manager()
        {
        }
    }
    /**
     * @package Polylang-WC
     */
    /**
     * Manages the compatibility with WooCommerce Bookings.
     * Version tested: 1.10.11.
     *
     * @since 0.6
     */
    class PLLWC_Bookings
    {
        /**
         * Previous locale after a locale switch.
         *
         * @var string
         */
        private $switched_locale;
        /**
         * Constructor.
         * Setups actions and filters.
         *
         * @since 0.6
         */
        public function __construct()
        {
        }
        /**
         * Language and translation management for custom post types.
         * Hooked to the filter 'pll_get_post_types'.
         *
         * @since 0.6
         *
         * @param array $types List of post type names for which Polylang manages language and translations.
         * @param bool  $hide  True when displaying the list in Polylang settings.
         * @return array List of post type names for which Polylang manages language and translations.
         */
        public function translate_types($types, $hide)
        {
        }
        /**
         * Removes the standard languages columns for bookings
         * and replaces them with one unique column as for orders.
         * Hooked to the action 'wp_loaded'.
         *
         * @since 0.6
         */
        public function custom_columns()
        {
        }
        /**
         * Removes the language metabox for bookings.
         * Hooked to the action 'add_meta_boxes'.
         *
         * @since 0.6
         *
         * @param string $post_type Post type.
         */
        public function add_meta_boxes($post_type)
        {
        }
        /**
         * Reloads Bookings translations.
         * Used for emails and the workaround for localized bookings meta keys.
         * Hooked to the action 'change_locale'.
         *
         * @since 1.0
         */
        public function change_locale()
        {
        }
        /**
         * Reloads the WooCommerce Bookings and WP text domains to work around localized bookings meta.
         * Hooked to the actions 'woocommerce_booking_{$status}'.
         *
         * @since 0.6
         *
         * @param int $post_id Booking ID.
         */
        public function before_booking_metabox_save($post_id)
        {
        }
        /**
         * Reloads the WooCommerce Bookings and WP text domains to work around localized bookings meta.
         * Part of the workaround for localized bookings meta keys.
         * Hooked to the action 'woocommerce_booking_process_meta'.
         *
         * @since 0.6
         */
        public function after_booking_metabox_save()
        {
        }
        /**
         * Assigns the booking and order languages when creating a new booking from the backend.
         * Hooked to the action 'woocommerce_new_booking'.
         *
         * @since 0.6
         *
         * @param int $booking_id Booking ID.
         */
        public function new_booking($booking_id)
        {
        }
        /**
         * Assigns the booking language in case a visitor adds the product to cart in a language
         * and then switches the language before he completes the checkout.
         * Hooked to the action 'woocommerce_booking_in-cart_to_unpaid'.
         *
         * @since 0.7.3
         *
         * @param int $booking_id Booking ID.
         */
        public function set_booking_language_at_checkout($booking_id)
        {
        }
        /**
         * Copies or synchronizes bookable posts (resource, person).
         *
         * @since 0.6
         *
         * @param array  $post Bookable post to copy (person or resource).
         * @param int    $to   id of the product to which we paste informations.
         * @param string $lang Language slug.
         * @param bool   $sync True if it is synchronization, false if it is a copy, defaults to false.
         * @return int Translated bookable post.
         */
        protected function copy_bookable_post($post, $to, $lang, $sync)
        {
        }
        /**
         * Copies or synchronizes resources.
         * Hooked to the action 'pllwc_copy_product'.
         *
         * @since 0.6
         *
         * @param int    $from ID of the product from which we copy informations.
         * @param int    $to   ID of the product to which we paste informations.
         * @param string $lang Language slug.
         * @param bool   $sync True if it is synchronization, false if it is a copy, defaults to false.
         */
        public function copy_resources($from, $to, $lang, $sync = \false)
        {
        }
        /**
         * Copies or synchronizes persons types.
         * Hooked to the action 'pllwc_copy_product'.
         *
         * @since 0.6
         *
         * @param int    $from ID of the product from which we copy informations.
         * @param int    $to   ID of the product to which we paste informations.
         * @param string $lang Language slug.
         * @param bool   $sync True if it is synchronization, false if it is a copy, defaults to false.
         */
        public function copy_persons($from, $to, $lang, $sync = \false)
        {
        }
        /**
         * Removes resources in translated products when a resource is removed in Ajax.
         * Hooked to the action 'wp_ajax_woocommerce_remove_bookable_resource'.
         *
         * @since 0.6
         */
        public function remove_bookable_resource()
        {
        }
        /**
         * Removes the person type in translated products when a person type is removed in Ajax.
         * Hooked to the action 'wp_ajax_woocommerce_remove_bookable_person'.
         *
         * @since 0.6
         */
        public function remove_bookable_person()
        {
        }
        /**
         * Add bookings metas when creating a new product or resource.
         *
         * @since 0.9.3
         *
         * @param int    $post_id      New product or resource.
         * @param array  $translations Existing product or resource translations.
         * @param string $meta_key     Meta to add to the booking.
         */
        protected function add_metas_to_booking($post_id, $translations, $meta_key)
        {
        }
        /**
         * Updates the bookings associated to the translated products (or resource)
         * when creating a new product (or resource translation).
         * Hooked to the action 'pll_save_post'.
         *
         * @since 0.9.3
         *
         * @param int    $post_id      Post id.
         * @param object $post         Post object.
         * @param array  $translations Post translations.
         */
        public function save_post($post_id, $post, $translations)
        {
        }
        /**
         * Allows to associate several products or resources to a booking.
         * Hooked to the filter 'update_post_metadata'.
         *
         * @since 0.6
         *
         * @param null|bool  $r          Returned value (null by default).
         * @param int        $post_id    Booking id.
         * @param string     $meta_key   Meta key.
         * @param int|string $meta_value Meta value.
         * @return null|bool
         */
        public function update_post_metadata($r, $post_id, $meta_key, $meta_value)
        {
        }
        /**
         * Associates all products in a translation group to a booking.
         *
         * @since 0.6
         *
         * @param int    $post_id    Booking id.
         * @param string $meta_key   Meta key.
         * @param int    $meta_value Product id.
         * @return bool
         */
        protected function update_post_meta($post_id, $meta_key, $meta_value)
        {
        }
        /**
         * Translates persons ids in _booking_persons meta.
         *
         * @since 0.6
         *
         * @param array  $persons  An array of persons.
         * @param string $language Language slug.
         * @return array
         */
        protected function translate_booking_persons_meta($persons, $language)
        {
        }
        /**
         * Allows to get the booking's associated product and resource in the current language.
         * Hooked to the filter 'get_post_metadata'.
         *
         * @since 0.6
         *
         * @param null|bool $r        Returned value (null by default).
         * @param int       $post_id  Booking id.
         * @param string    $meta_key Meta key.
         * @param bool      $single   Whether a single meta value has been requested.
         * @return null|bool
         */
        public function get_post_metadata($r, $post_id, $meta_key, $single)
        {
        }
        /**
         * Adds metas to synchronize when saving a product or resource.
         * Hooked to the filter 'pll_copy_post_metas'.
         *
         * @since 0.6
         *
         * @param array  $metas List of custom fields names.
         * @param bool   $sync  True if it is synchronization, false if it is a copy.
         * @param int    $from  Id of the post from which we copy informations, optional, defaults to null.
         * @param int    $to    Id of the post to which we paste informations, optional, defaults to null.
         * @param string $lang  Language slug, optional, defaults to null.
         * @return array
         */
        public function copy_post_metas($metas, $sync, $from, $to, $lang)
        {
        }
        /**
         * Translates a product meta before it is copied or synchronized.
         * Hooked to the filter 'pll_translate_post_meta'.
         *
         * @since 1.0
         *
         * @param mixed  $value Meta value.
         * @param string $key   Meta key.
         * @param string $lang  Language of target.
         * @return mixed
         */
        public function translate_post_meta($value, $key, $lang)
        {
        }
        /**
         * Translates bookings items in cart.
         * See WC_Booking_Form::get_posted_data().
         * Hooked to the filter 'pllwc_translate_cart_item'.
         *
         * @since 0.6
         *
         * @param array  $item Cart item.
         * @param string $lang Language code.
         * @return array
         */
        public function translate_cart_item($item, $lang)
        {
        }
        /**
         * Adds the booking to the cart item data when translating the cart.
         * Hooked to the filter 'pllwc_add_cart_item_data'.
         *
         * @since 0.7.4
         *
         * @param array $cart_item_data Cart item data.
         * @param array $item           Cart item.
         * @return array
         */
        public function add_cart_item_data($cart_item_data, $item)
        {
        }
        /**
         * Filters bookings when sending notifications to get only bookings in the same language as the chosen product.
         * Hooked to the action 'parse_query'.
         *
         * @since 0.6
         *
         * @param object $query WP_Query object.
         */
        public function filter_bookings_notifications($query)
        {
        }
        /**
         * Returns the translation of the bookings endpoint url.
         * Hooked to the filter 'pll_translation_url'.
         *
         * @since 0.6
         *
         * @param string $url  URL of the translation, to modify.
         * @param string $lang Language slug.
         * @return string
         */
        public function pll_translation_url($url, $lang)
        {
        }
        /**
         * Adds the bookings endpoint to the list of endpoints to translate.
         * Hooked to the filter 'pllwc_endpoints_query_vars'.
         *
         * @since 0.6
         *
         * @param array $slugs Endpoints slugs.
         * @return array
         */
        public function pllwc_endpoints_query_vars($slugs)
        {
        }
        /**
         * Disables the languages filter for a customer to see all bookings whatever the languages.
         * Hooked to the action 'parse_query'.
         *
         * @since 0.6
         *
         * @param object $query WP_Query object.
         */
        public function parse_query($query)
        {
        }
    }
    /**
     * @package Polylang-WC
     */
    /**
     * Manages the compatibility with WooCommerce Composite Products.
     * Version tested: 3.13.11.
     *
     * It handles the synchronization of products metas
     * and the translation of the cart when the language is switched.
     *
     * @since 1.3
     */
    class PLLWC_Composite_Products
    {
        /**
         * Array of cart keys with original as key and translation as value.
         *
         * @var array
         */
        protected $translated_cart_keys;
        /**
         * Constructor.
         * Setups actions and filters.
         *
         * @since 1.3
         */
        public function __construct()
        {
        }
        /**
         * Adds the metas to synchronize when saving a composite product.
         * Hooked to the filter 'pllwc_copy_post_metas'.
         *
         * @since 1.3
         *
         * @param array $metas List of custom fields names.
         * @return array
         */
        public function copy_product_metas($metas)
        {
        }
        /**
         * Keeps the text untouched in synchronized complex metas.
         *
         * @since 1.3
         *
         * @param array  $value      Meta value.
         * @param string $key        Meta key.
         * @param int    $product_id Target product id.
         * @return array
         */
        private function maybe_keep_text_in_meta($value, $key, $product_id)
        {
        }
        /**
         * Adjust values before synchronizing metas.
         * Hooked to the filter 'pllwc_translate_product_meta'.
         *
         * @since 1.3
         *
         * @param array  $value Meta value.
         * @param string $key   Meta key.
         * @param string $lang  Target language.
         * @param string $from  Source product id.
         * @param string $to    Target product id.
         * @return array
         */
        public function translate_product_meta($value, $key, $lang, $from, $to)
        {
        }
        /**
         * Translates items in the cart.
         * Hooked to the filter 'pllwc_translate_cart_item'.
         *
         * @since 1.3
         *
         * @param array $item Cart item.
         * @return array
         */
        public function translate_cart_item($item)
        {
        }
        /**
         * Adds Composite products informations to the cart item data when translated.
         * Hooked to the filter 'pllwc_add_cart_item_data'.
         *
         * @since 1.3
         *
         * @param array $cart_item_data Cart item data.
         * @param array $item           Cart item.
         * @return array
         */
        public function add_cart_item_data($cart_item_data, $item)
        {
        }
        /**
         * Stores new cart keys as a function of previous values.
         * Later needed to restore the relationship with the composite parent.
         * Hooked to the action 'pllwc_translated_cart_item'.
         *
         * @since 1.3
         *
         * @param array  $item Cart item.
         * @param string $key  Previous cart item key. The new key can be found in $item['key'].
         */
        public function translated_cart_item($item, $key)
        {
        }
        /**
         * Assigns the correct composite_children values to the composite parent
         * once the composite children cart items have been translated.
         * Hooked to the filter 'pllwc_translate_cart_contents'.
         *
         * @since 1.3
         *
         * @param array  $contents Cart contents.
         * @param string $lang     Language code.
         * @return array
         */
        public function translate_cart_contents($contents, $lang)
        {
        }
        /**
         * Allows Composite Products to filter the cart prices after the cart has been translated.
         * Hooked to the action 'woocommerce_cart_loaded_from_session'.
         *
         * @since 1.3
         */
        public function cart_loaded_from_session()
        {
        }
    }
    /**
     * @package Polylang-WC
     */
    /**
     * Manages compatibility with WooCommerce Dynamic Pricing.
     * Version tested: 3.1.6.
     *
     * @since 0.5
     */
    class PLLWC_Dynamic_Pricing
    {
        /**
         * Constructor.
         * Setups actions and filters.
         *
         * @since 0.5
         */
        public function __construct()
        {
        }
        /**
         * Add Pricing rules to metas to copy or synchronize.
         * Hooked to the filter 'pllwc_copy_post_metas'.
         *
         * @since 1.0
         *
         * @param array $metas Meta keys to copy or synchronize.
         * @return array
         */
        public function copy_metas($metas)
        {
        }
        /**
         * Translates the pricing rules.
         * Hooked to the filter 'pllwc_translate_product_meta'.
         *
         * @since 1.0
         *
         * @param array  $pricing_rules Meta value.
         * @param string $key           Meta key.
         * @param string $lang          Language of target.
         * @return array
         */
        public function translate_meta($pricing_rules, $key, $lang)
        {
        }
        /**
         * Makes sure that the product categories are displayed in only one language
         * on the Dynamic Pricing > category page (even when the admin languages filter requests all languages)
         * to avoid conflicts if inconsistent information would be given for products translations.
         *
         * @since 0.5
         *
         * @param array $args       WP_Term_Query arguments.
         * @param array $taxonomies Taxonomies used for the terms query.
         * @return array modified arguments
         */
        public function get_terms_args($args, $taxonomies)
        {
        }
        /**
         * Adds the translated categories to the pricing rules sets (Category pricing tab).
         * Hooked to the filter 'sanitize_option__s_category_pricing_rules'.
         *
         * @since 0.5
         *
         * @param array $rules Pricing rules set.
         * @return array
         */
        public function category_pricing_rules($rules)
        {
        }
        /**
         * Adds the translated categories to the pricing rules sets (Advanced Category pricing tab).
         * Hooked to the filter 'sanitize_option__a_category_pricing_rules'.
         *
         * @since 0.5
         *
         * @param array $rules Pricing rules set.
         * @return array
         */
        public function advanced_category_pricing_rules($rules)
        {
        }
    }
    /**
     * @package Polylang-WC
     */
    /**
     * Manages the compatibility with Follow-Up Emails.
     * Version tested: 4.7.1.
     *
     * @since 0.9
     */
    class PLLWC_Follow_Up_Emails
    {
        /**
         * Constructor.
         * Setups actions and filters.
         *
         * @since 0.9
         */
        public function __construct()
        {
        }
        /**
         * Adds the language and translation management for the 'follow_up_email' custom post type.
         * Hooked to the filter 'pll_get_post_types'.
         *
         * @since 0.9
         *
         * @param array $types List of post type names for which Polylang manages language and translations.
         * @param bool  $hide  True when displaying the list in Polylang settings.
         * @return array List of post type names for which Polylang manages language and translations.
         */
        public function translate_types($types, $hide)
        {
        }
        /**
         * Synchronizes the Follow-Up emails taxonomies.
         * Hooked to the filter 'pll_copy_taxonomies'.
         *
         * @since 0.9
         *
         * @param array $taxonomies List of taxonomies to Synchronize.
         * @return array Modified list of taxonomies.
         */
        public function copy_taxonomies($taxonomies)
        {
        }
        /**
         * Synchronizes the custom fields.
         * Hooked to the filter 'pll_copy_post_metas'.
         *
         * @since 0.9
         *
         * @param array $keys List of custom fields names.
         * @param bool  $sync True if it is synchronization, false if it is a copy.
         * @param int   $from Id of the post from which we copy informations.
         * @return array
         */
        public function copy_post_metas($keys, $sync, $from)
        {
        }
        /**
         * Translates some custom fields when synchronizing follow-up emails.
         * Hooked to the filter 'pll_translate_post_meta'.
         *
         * @since 1.0
         * @param mixed  $value Meta value.
         * @param string $key   Meta key.
         * @param string $lang  Language of target.
         * @param int    $from  Id of the follow-up email from which we copy informations.
         * @return mixed
         */
        public function translate_post_meta($value, $key, $lang, $from)
        {
        }
        /**
         * Removes the language filter for Follow-Up Emails
         * as the language may not be the desired one on admin.
         * Hooked to the action 'parse_query'.
         *
         * @since 0.9
         *
         * @param object $query WP_Query object.
         */
        public function parse_query($query)
        {
        }
        /**
         * Get the email language from the email order data.
         *
         * @since 0.9
         *
         * @param array $data Email order data.
         * @return string|bool
         */
        protected function get_email_order_language($data)
        {
        }
        /**
         * Make sure that the emails are sent in the correct language.
         * Hooked to the filter 'fue_insert_email_order'.
         *
         * @since 0.9
         *
         * @param array $data Email order data.
         * @return $data
         */
        public function insert_email_order($data)
        {
        }
        /**
         * Adds the language information in the preview url.
         * Hooked to the filter 'fue_email_preview_url'.
         *
         * @since 0.9
         *
         * @param string $url Preview url.
         * @return string Modified url.
         */
        public function preview_url($url)
        {
        }
        /**
         * Sets the email language.
         * Hooked to the action 'fue_before_email_send'.
         *
         * @since 0.9
         *
         * @param string $subject    Email subject.
         * @param string $message    Email message.
         * @param string $headers    Email headers.
         * @param object $queue_item Email queue item.
         */
        public function before_email_send($subject, $message, $headers, $queue_item)
        {
        }
    }
    /**
     * @package Polylang-WC
     */
    /**
     * Manages the compatibility with WooCommerce Free Gift Coupons.
     * Version tested: 2.4.3.
     *
     * Translates the cart when the language is switched.
     *
     * @since 1.4
     */
    class PLLWC_Free_Gift_Coupons
    {
        /**
         * Constructor.
         * Setups filters.
         *
         * @since 1.4
         */
        public function __construct()
        {
        }
        /**
         * Adds Free Gift Coupons informations to the cart item data when translated.
         * Hooked to the filter 'pllwc_add_cart_item_data'.
         *
         * @since 1.4
         *
         * @param array $cart_item_data Cart item data.
         * @param array $item           Cart item.
         * @return array
         */
        public function add_cart_item_data($cart_item_data, $item)
        {
        }
        /**
         * Changes the price on the gift item to be zero.
         * Hooked to the filter 'pllwc_translate_cart_item'.
         *
         * @since 1.4
         *
         * @param array $item Cart item.
         * @return array
         */
        public function translate_cart_item($item)
        {
        }
    }
    /**
     * @package Polylang-WC
     */
    /**
     * Manages the compatibility with WooCommerce Min/Max Quantities.
     * Version tested: 2.4.3.
     *
     * Synchronizes the product metas and term metas.
     *
     * @since 1.1
     */
    class PLLWC_Min_Max_Quantities
    {
        /**
         * Constructor.
         * Setups filters.
         *
         * @since 1.1
         */
        public function __construct()
        {
        }
        /**
         * Synchronizes the product metas.
         * Hooked to the filter 'pllwc_copy_post_metas'.
         *
         * @since 1.1
         *
         * @param array $metas List of custom fields names.
         * @return array
         */
        public function copy_product_metas($metas)
        {
        }
        /**
         * Synchronizes the term metas.
         * Hooked to the filter 'pll_copy_term_metas'.
         *
         * @since 1.1
         *
         * @param array $metas List of term metas names.
         * @return array
         */
        public function copy_term_metas($metas)
        {
        }
    }
    /**
     * @package Polylang-WC
     */
    /**
     * Manages the compatibility with Mix and Match Products.
     * Version tested: 1.2.6.
     *
     * It handles the synchronization of products metas
     * and the translation of the cart when the language is switched.
     *
     * @since 1.1
     */
    class PLLWC_Mix_Match
    {
        /**
         * Constructor.
         * Setup filters.
         *
         * @since 1.1
         */
        public function __construct()
        {
        }
        /**
         * Adds metas to synchronize when saving a product.
         * Hooked to the filter 'pllwc_copy_post_metas'.
         *
         * @since 1.1
         *
         * @param array $metas List of custom fields names.
         * @return array
         */
        public function copy_product_metas($metas)
        {
        }
        /**
         * Translates the Mix and Match contents.
         * Hooked to the filter 'pllwc_translate_product_meta'.
         *
         * @since 1.1
         *
         * @param mixed  $value Meta value.
         * @param string $key   Meta key.
         * @param string $lang  Language of target.
         * @return mixed
         */
        public function translate_product_meta($value, $key, $lang)
        {
        }
        /**
         * Translates items in the cart.
         * Hooked to the filter 'pllwc_translate_cart_item'.
         *
         * @since 1.1
         *
         * @param array  $item Cart item.
         * @param string $lang Language code.
         * @return array
         */
        public function translate_cart_item($item, $lang = '')
        {
        }
        /**
         * Adds Mix and Match Product informations to the cart item data when translated.
         * Hooked to the filter 'pllwc_add_cart_item_data'.
         *
         * @since 1.1
         *
         * @param array $cart_item_data Cart item data.
         * @param array $item           Cart item.
         * @return array
         */
        public function add_cart_item_data($cart_item_data, $item)
        {
        }
        /**
         * Stores new cart keys as function of previous values.
         * Later needed to restore the relationship between the Mix and Match product and contained products.
         * Hooked to the action 'pllwc_translated_cart_item'.
         *
         * @since 1.1
         *
         * @param array  $item Cart item.
         * @param string $key  Previous cart item key. The new key can be found in $item['key'].
         */
        public function translated_cart_item($item, $key)
        {
        }
        /**
         * Assigns correct mnm_contents values to the Mix and Match product
         * once the contained cart items have been translated.
         * Hooked to the filter pllwc_translate_cart_contents.
         *
         * @since 1.1
         *
         * @param array  $contents Cart contents.
         * @param string $lang     Language code.
         * @return array
         */
        public function translate_cart_contents($contents, $lang)
        {
        }
        /**
         * Allows WooCommerce Mix and Match to filter the cart prices after the cart has been translated.
         * We need to do it here as WooCommerce Mix and Match directly access to WC()->cart->cart_contents.
         * Hooked to the action 'woocommerce_cart_loaded_from_session'.
         *
         * @since 1.1
         */
        public function cart_loaded_from_session()
        {
        }
    }
    /**
     * @package Polylang-WC
     */
    /**
     * Manages the compatibility with 3rd party plugins ( and themes ).
     * This class is available as soon as the plugin is loaded.
     *
     * @since 0.3.2
     */
    class PLLWC_Plugins_Compat
    {
        /**
         * Singleton.
         *
         * @var object PLLWC_Plugins_Compat instance.
         */
        protected static $instance;
        /**
         * Constructor.
         *
         * @since 0.3.2
         */
        protected function __construct()
        {
        }
        /**
         * Init fired only when Polylang for WooCommerce object is initialized.
         *
         * @since 0.3.2
         */
        public function init()
        {
        }
        /**
         * Initializes the compatibility with the plugin Checkout Field Editor for WooCommerce.
         * The first constant was used for versions < 1.3.6.
         *
         * @since 1.3
         */
        public function maybe_init_wcfd()
        {
        }
        /**
         * Initializes the compatibility with the plugin WooCommerce Free Gift Coupons.
         *
         * @since 1.4
         */
        public function maybe_init_fgc()
        {
        }
        /**
         * Accesses to the single instance of the class.
         *
         * @since 0.3.2
         *
         * @return object
         */
        public static function instance()
        {
        }
    }
    /**
     * @package Polylang-WC
     */
    /**
     * Manages the compatibility with WooCommerce Product Bundles.
     * Version tested: 5.8.1.
     *
     * It handles the copy or synchronization of products metas
     * and the translation of the cart when the language is switched.
     *
     * @since 1.1
     */
    class PLLWC_Product_Bundles
    {
        /**
         * Array of cart keys with original as key and translation as value.
         *
         * @var array
         */
        protected $translated_cart_keys;
        /**
         * Constructor.
         * Setups actions and filters.
         *
         * @since 1.1
         */
        public function __construct()
        {
        }
        /**
         * Copies or synchronizes the bundled items.
         * Hooked to the action 'pllwc_copy_product'.
         *
         * @since 1.1
         *
         * @param int    $from id of the post from which we copy informations.
         * @param int    $to   id of the post to which we paste informations.
         * @param string $lang language slug.
         * @param bool   $sync true if it is synchronization, false if it is a copy, defaults to false.
         */
        public function copy_product($from, $to, $lang, $sync = \false)
        {
        }
        /**
         * Adds metas to synchronize when saving a bundled product.
         * Hooked to the filter 'pllwc_copy_post_metas'.
         *
         * @since 1.1
         *
         * @param array $metas List of custom fields names.
         * @return array
         */
        public function copy_product_metas($metas)
        {
        }
        /**
         * Translates the stamp in the cart item.
         *
         * @since 1.1
         *
         * @param array  $item Cart item.
         * @param string $lang Language code.
         * @return array
         */
        protected function translate_stamp($item, $lang)
        {
        }
        /**
         * Translates the items the in cart.
         * Hooked to the filter 'pllwc_translate_cart_item'.
         *
         * @since 1.1
         *
         * @param array  $item Cart item.
         * @param string $lang Language code.
         * @return array
         */
        public function translate_cart_item($item, $lang)
        {
        }
        /**
         * Adds the Product bundles informations to the cart item data when translated.
         * Hooked to the filter 'pllwc_add_cart_item_data'.
         *
         * @since 1.1
         *
         * @param array $cart_item_data Cart item data.
         * @param array $item           Cart item.
         * @return array
         */
        public function add_cart_item_data($cart_item_data, $item)
        {
        }
        /**
         * Stores the new cart keys as function of the previous values.
         * Later needed to restore the relationship between the bundle and bundled products.
         * Hooked to the action 'pllwc_translated_cart_item'.
         *
         * @since 1.1
         *
         * @param array  $item Cart item.
         * @param string $key  Previous cart item key. The new key can be found in $item['key'].
         */
        public function translated_cart_item($item, $key)
        {
        }
        /**
         * Assigns the correct bundled_items values to the bundle
         * once the bundled cart items have been translated.
         * Hooked to the filter 'pllwc_translate_cart_contents'.
         *
         * @since 1.1
         *
         * @param array  $contents Cart contents.
         * @param string $lang     Language code.
         * @return array
         */
        public function translate_cart_contents($contents, $lang)
        {
        }
        /**
         * Allows Product Bundles to filter the cart prices after the cart has been translated.
         * Needed for example when the bundled products are not individually priced.
         * We need to do it here as Product Bundles directly accesses to WC()->cart->cart_contents
         * in a function used by WC_PB_Cart::add_cart_item_filter().
         * Hooked to the action 'woocommerce_cart_loaded_from_session'.
         *
         * @since 1.1
         */
        public function cart_loaded_from_session()
        {
        }
    }
    /**
     * @package Polylang-WC
     */
    /**
     * Manages the compatibility with WooCommerce Shipment Tracking.
     * Version tested: 1.6.10.
     *
     * @since 0.6
     */
    class PLLWC_Shipment_Tracking
    {
        /**
         * Constructor.
         *
         * @since 0.6
         */
        public function __construct()
        {
        }
        /**
         * Reloads the Shipment Tracking translations in emails.
         * Hooked to the action 'change_locale'.
         *
         * @since 1.0
         */
        public function change_locale()
        {
        }
    }
    /**
     * @package Polylang-WC
     */
    /**
     * Manages the compatibility with:
     * WooCommerce Stock Manager, version tested: 1.2.6.
     * WooCommerce Bulk Stock Management, version tested: 2.2.9.
     *
     * @since 0.5
     */
    class PLLWC_Stock_Manager
    {
        /**
         * Constructor.
         *
         * @since 0.5
         */
        public function __construct()
        {
        }
        /**
         * Returns true if the query is filtered by a language
         * or includes a translated taxonomy.
         *
         * @since 0.9
         *
         * @param object $qvars Query vars.
         * @return bool
         */
        public function is_language_in_query($qvars)
        {
        }
        /**
         * Returns true if the query includes the product post type.
         *
         * @since 0.9
         *
         * @param object $qvars Query vars.
         * @return bool
         */
        public function is_product_in_query($qvars)
        {
        }
        /**
         * Make sure that the products are displayed in only one language (even when the admin languages filter requests all languages)
         * to avoid conflicts if inconsistent information would be provided for the products translations.
         *
         * @since 0.3.2
         *
         * @param object $query WP_Query object.
         */
        public function parse_query($query)
        {
        }
    }
    /**
     * @package Polylang-WC
     */
    /**
     * Manages the compatibility with WooCommerce Stripe Gateway
     * Version tested: 4.1.1.
     *
     * @since 0.7.2.
     */
    class PLLWC_Stripe
    {
        /**
         * Constructor
         *
         * @since 0.7.2
         */
        public function __construct()
        {
        }
        /**
         * Sets the language for the Apple Pay button.
         * Not tested as we don't have an Apple device ;-)
         *
         * @since 0.7.2
         *
         * @param array $options WooCommerce Stripe Settings.
         * @return array
         */
        public function set_apple_pay_lang($options)
        {
        }
        /**
         * Works around the bypassed 'woocommerce_gateway_description' filter.
         *
         * @since 0.9.3
         *
         * @param string $description Stripe gateway description.
         * @return string
         */
        public function get_description($description)
        {
        }
    }
    /**
     * @package Polylang-WC
     */
    /**
     * Manages the compatibility with WooCommerce subscriptions.
     * Version tested: 2.2.19.
     *
     * @since 0.4
     */
    class PLLWC_Subscriptions
    {
        /**
         * Constructor.
         * Setups actions and filters.
         *
         * @since 0.4
         */
        public function __construct()
        {
        }
        /**
         * Copies or synchronizes metas.
         * Hooked to the filter 'pllwc_copy_post_metas'.
         *
         * @since 0.4
         *
         * @param array $keys List of custom fields names.
         * @return array
         */
        public function copy_post_metas($keys)
        {
        }
        /**
         * Language and translation management for the subscriptions post type.
         * Hooked to the filter 'pll_get_post_types'.
         *
         * @since 0.4
         *
         * @param array $types List of post type names for which Polylang manages language and translations.
         * @param bool  $hide  True when displaying the list in Polylang settings.
         * @return array List of post type names for which Polylang manages language and translations.
         */
        public function translate_types($types, $hide)
        {
        }
        /**
         * Removes the subscriptions post type from bulk translate.
         * Hooked to the filter 'pll_bulk_translate_post_types'.
         *
         * @since 1.2
         *
         * @param array $types List of post type names for which Polylang manages the bulk translation.
         * @return array
         */
        public function bulk_translate_post_types($types)
        {
        }
        /**
         * Assigns the order language when it is created from a subscription.
         * Hooked to the filter 'wcs_new_order_created'.
         *
         * @since 0.4.4
         *
         * @param object $new_order    New order.
         * @param object $subscription Parent subscription.
         * @return object Unmodified order
         */
        public function new_order_created($new_order, $subscription)
        {
        }
        /**
         * Removes the standard languages columns for subscriptions
         * and replace them with one unique column as done for the orders.
         * Hooked to the action 'wp_loaded'.
         *
         * @since 0.4
         */
        public function custom_columns()
        {
        }
        /**
         * Removes the language metabox for the subscriptions
         * and replaces it by the metabox used for the orders.
         * Hooked to the action 'add_meta_boxes'.
         *
         * @since 0.4
         *
         * @param string $post_type Post type.
         */
        public function add_meta_boxes($post_type)
        {
        }
        /**
         * Reloads Subscription translations in emails.
         * Hooked to the action 'change_locale'.
         *
         * @since 1.0
         */
        public function change_locale()
        {
        }
        /**
         * Translated strings must be sanitized the same way WooCommerce Subscriptions does before they are saved.
         * Hooked to the filter 'pll_sanitize_string_translation'.
         *
         * @since 0.4
         *
         * @param string $translation A string translation.
         * @param string $name        The string name.
         * @param string $context     The group the string belongs to.
         * @return string Sanitized translation
         */
        public function sanitize_strings($translation, $name, $context)
        {
        }
        /**
         * Disables the language filter for a customer to see all his/her subscriptions whatever the languages.
         * Hooked to the action 'parse_query'.
         *
         * @since 0.4
         *
         * @param object $query WP_Query object.
         */
        public function parse_query($query)
        {
        }
        /**
         * Returns the translation of the current url.
         * Handles the translations of the Subscriptions endpoints slugs.
         * Hooked to the filter 'pll_translation_url'.
         *
         * @since 0.4
         *
         * @param string $url  URL of the translation, to modify.
         * @param string $lang Language slug.
         * @return string
         */
        public function pll_translation_url($url, $lang)
        {
        }
        /**
         * Adds the Subscriptions endpoints to the list of endpoints to translate.
         * Hooked to the filter 'pllwc_endpoints_query_vars'.
         *
         * @since 0.4
         *
         * @param array $slugs Endpoints slugs.
         * @return array
         */
        public function pllwc_endpoints_query_vars($slugs)
        {
        }
        /**
         * Checks if a user has a subscription to a translated product.
         * Hooked to the filter 'wcs_user_has_subscription'.
         *
         * @since 0.9.2
         *
         * @param bool  $has_subscription Whether WooCommerce Subscriptions found a subscription.
         * @param int   $user_id          The ID of a user in the store.
         * @param int   $product_id       The ID of a product in the store.
         * @param mixed $status           Subscription status.
         * @return bool
         */
        public function user_has_subscription($has_subscription, $user_id, $product_id, $status)
        {
        }
        /**
         * When querying subscriptions and no subscriptions have been found for the current product,
         * checks if there are subscriptions for the translated products.
         * Hooked to the filter 'woocommerce_get_subscriptions_query_args'.
         *
         * @since 1.2
         *
         * @param array $query_args WP_Query() arguments.
         * @param array $args       Arguments of wcs_get_subscriptions().
         * @return array
         */
        public function get_subscriptions_query_args($query_args, $args)
        {
        }
        /**
         * Synchronizes the subscription variations deletion.
         * The case is handled specifically in WC Subscriptions because
         * subscription variations are trashed and not deleted permanently.
         * Hooked to the actions 'wp_trash_post' and 'before_delete_post'.
         *
         * @since 1.3.3
         *
         * @param int $variation_id Subscription variation id.
         */
        public function delete_variation($variation_id)
        {
        }
    }
    /**
     * @package Polylang-WC
     */
    /**
     * Manages the compatibility with WooCommerce Variation Swatches and Photos.
     * Version tested: 3.0.9
     *
     * @since 1.1
     */
    class PLLWC_Swatches
    {
        /**
         * Constructor.
         * Setups filters.
         *
         * @since 1.1
         */
        public function __construct()
        {
        }
        /**
         * Synchronizes the attribute term metas.
         * Hooked to the filter 'pll_copy_term_metas'.
         *
         * @since 1.1
         *
         * @param array $metas List of custom fields names.
         * @param bool  $sync  True if it is synchronization, false if it is a copy.
         * @param int   $from  Id of the product from which we copy informations.
         * @return array
         */
        public function copy_term_metas($metas, $sync, $from)
        {
        }
        /**
         * Translates the Swatches photo id.
         * Required only if media are translated.
         * Hooked to the filter 'pll_translate_term_meta'.
         *
         * @since 1.1
         *
         * @param int    $value Photo id.
         * @param string $key   Meta key.
         * @param string $lang  Language code.
         * @return int
         */
        public function translate_swatches_photo($value, $key, $lang)
        {
        }
        /**
         * Adds metas to synchronize when saving a product.
         * Hooked to the filter 'pllwc_copy_post_metas'.
         *
         * @since 1.1
         *
         * @param array $metas List of custom fields names.
         * @return array
         */
        public function copy_product_metas($metas)
        {
        }
        /**
         * Translates options in product metas.
         * Hooked to the filter 'pllwc_translate_product_meta'.
         *
         * @since 1.1
         *
         * @param mixed  $value Meta value.
         * @param string $key   Meta key.
         * @param string $lang  Language of target.
         * @param int    $from  Id of the source.
         * @return mixed
         */
        public function translate_product_meta($value, $key, $lang, $from)
        {
        }
    }
    /**
     * @package Polylang-WC
     */
    /**
     * Manages the compatibility with WooCommerce Table Rate Shipping.
     * Version tested: 3.0.2.
     *
     * @since 0.5
     */
    class PLLWC_Table_Rate_Shipping
    {
        /**
         * Constructor.
         * Setups filters.
         *
         * @since 0.5
         */
        public function __construct()
        {
        }
        /**
         * Registers all the labels in the strings translations.
         *
         * @since 0.5
         */
        public function register_strings()
        {
        }
        /**
         * Translated strings must be sanitized the same way WooCommerce Table Rate Shipping does before they are saved.
         * Hooked to the filter 'pll_sanitize_string_translation'.
         *
         * @since 0.5
         *
         * @param string $translation A string translation.
         * @param string $name        The string name.
         * @param string $context     The group the string belongs to.
         * @return string Sanitized translation
         */
        public function sanitize_strings($translation, $name, $context)
        {
        }
        /**
         * Translates the labels on the frontend.
         * Hooked to the filter 'woocommerce_table_rate_query_rates'.
         *
         * @since 0.5
         *
         * @param object $rates Table rate shipping method.
         * @return object
         */
        public function table_rate_query_rates($rates)
        {
        }
    }
    /**
     * @package Polylang-WC
     */
    /**
     * Manages the compatibility with Checkout Field Editor for WooCommerce.
     * Version tested: 1.4.2.
     *
     * @since 1.3
     */
    class PLLWC_WCFD
    {
        /**
         * Checkout Field Editor option names.
         *
         * @var array
         */
        protected static $options = array('wc_fields_additional', 'wc_fields_billing', 'wc_fields_shipping');
        /**
         * Constructor.
         * Setups filters.
         *
         * @since 1.3
         */
        public function __construct()
        {
        }
        /**
         * Translates the fields label and placeholder.
         *
         * @since 1.3
         *
         * @param array $fields List of fields.
         * @return array
         */
        public function translate_fields($fields)
        {
        }
        /**
         * Registers the strings.
         *
         * @since 1.3
         */
        protected function register_strings()
        {
        }
        /**
         * Translated strings must be sanitized the same way Checkout Field Editor for WooCommerce does before they are saved
         *
         * @since 1.3
         *
         * @param string $translation The string translation.
         * @param string $name        The name as defined in pll_register_string.
         * @param string $context     The context as defined in pll_register_string.
         * @return string Sanitized translation.
         */
        public function sanitize_strings($translation, $name, $context)
        {
        }
    }
    /**
     * @package Polylang-WC
     */
    /**
     * Manages the compatibility with Yith WooCommerce Ajax Search.
     * Version tested: 1.5.3.
     *
     * @since 0.9
     */
    class PLLWC_Yith_WCAS
    {
        /**
         * Constructor.
         *
         * @since 0.9
         */
        public function __construct()
        {
        }
        /**
         * Filters the home url in the search form outputed by the shortcode.
         *
         * @since 0.9
         *
         * @param string $output Shortcode output.
         * @param string $tag    Shortcode tag.
         * @return string Modified output.
         */
        public function filter_shortcode($output, $tag)
        {
        }
    }
    /**
     * Plugin controller.
     *
     * @since 0.1
     */
    class Polylang_Woocommerce
    {
        /**
         * Instance of PLLWC_Post_Types.
         *
         * @var object
         */
        public $post_types;
        /**
         * Instance of PLLWC_Links.
         *
         * @var object
         */
        public $links;
        /**
         * Instance of PLLWC_Stock.
         *
         * @var object
         */
        public $stock;
        /**
         * Instance of PLLWC_Emails.
         *
         * @var object
         */
        public $emails;
        /**
         * Instance of PLLWC_Strings.
         *
         * @var object
         */
        public $strings;
        /**
         * Instance of PLLWC_Xdata.
         *
         * @var object
         */
        public $data;
        /**
         * Instance of PLLWC_Export.
         *
         * @var object
         */
        public $export;
        /**
         * Instance of PLLWC_Import.
         *
         * @var object
         */
        public $import;
        /**
         * Instance of PLLWC_REST_API.
         *
         * @var object
         */
        public $rest_api;
        /**
         * Instance of PLLWC_Sync_Content.
         *
         * @var object
         */
        public $sync_content;
        /**
         * Instance of PLLWC_Frontend.
         *
         * @var object
         */
        public $frontend;
        /**
         * Instance of PLLWC_Frontend_Cart.
         *
         * @var object
         */
        public $cart;
        /**
         * Instance of PLLWC_Frontend_Account.
         *
         * @var object
         */
        public $my_account;
        /**
         * Instance of PLLWC_Coupons.
         *
         * @var object
         */
        public $coupons;
        /**
         * Instance of PLLWC_Frontend_WC_Pages.
         *
         * @var object
         */
        public $wc_pages;
        /**
         * Instance of PLLWC_Admin_WC_Install.
         *
         * @var object
         */
        public $admin_wc_install;
        /**
         * Instance of PLLWC_Admin_Taxonomies.
         *
         * @var object
         */
        public $admin_taxonomies;
        /**
         * Instance of PLLWC_Admin_Products.
         *
         * @var object
         */
        public $admin_products;
        /**
         * Instance of PLLWC_Admin_Product_Duplicate.
         *
         * @var object
         */
        public $admin_product_duplicate;
        /**
         * Instance of PLLWC_Admin_Orders.
         *
         * @var object
         */
        public $admin_orders;
        /**
         * Instance of PLLWC_Admin_Reports.
         *
         * @var object
         */
        public $admin_reports;
        /**
         * Instance of PLLWC_Admin_Status_Reports.
         *
         * @var object
         */
        public $admin_status_reports;
        /**
         * Instance of PLLWC_Admin_Menus.
         *
         * @var object
         */
        public $admin_menus;
        /**
         * Instance of PLL_Wizard.
         *
         * @var object
         */
        public $wizard;
        /**
         * Instance of PLLWC_Admin_Product_Duplicate.
         *
         * @var object
         */
        public $site_health;
        /**
         * Singleton.
         *
         * @var object Instance of Polylang_Woocommerce.
         */
        protected static $instance;
        /**
         * Constructor.
         *
         * @since 0.1
         */
        public function __construct()
        {
        }
        /**
         * Get the Polylang for WooCommerce instance.
         *
         * @since 0.1
         *
         * @return object
         */
        public static function instance()
        {
        }
        /**
         * Tells Polylang that the product import ajax request is made from the backend.
         *
         * @since 1.5.3
         *
         * @param bool $is_ajax_on_front Whether the current request is an ajax request on front.
         * @return bool
         */
        public function fix_ajax_product_import($is_ajax_on_front)
        {
        }
        /**
         * Initializes the plugin.
         *
         * @since 0.1
         */
        public function init()
        {
        }
        /**
         * Displays an admin notice if Polylang is not at the right version.
         *
         * @since 0.1
         */
        public function admin_notices()
        {
        }
        /**
         * Manages updates of the plugin.
         *
         * @since 0.9.3
         */
        public function maybe_upgrade()
        {
        }
        /**
         * Clear all transients cache for translations when WC clears a product transient.
         *
         * @since 0.4.5
         *
         * @param int $product_id Product ID.
         */
        public function delete_product_transients($product_id)
        {
        }
        /**
         * Enqueues the stylesheet.
         *
         * @since 0.1
         */
        public function admin_enqueue_scripts()
        {
        }
        /**
         * Saves a transient when Polylang For WooCommerce is activating to redirect to the Polylang wizard.
         *
         * @since 1.4
         *
         * @param string $plugin_name  Plugin basename.
         * @param bool   $network_wide If activated for all sites in the network.
         */
        public static function activated_plugin($plugin_name, $network_wide)
        {
        }
    }
    /**
     * Manages Polylang for WooCommerce uninstallation.
     *
     * @since 0.4
     */
    class PLLWC_Uninstall
    {
        /**
         * Constructor: manages uninstall for multisite.
         *
         * @since 0.4
         */
        public function __construct()
        {
        }
        /**
         * Removes ALL plugin data.
         *
         * @since 0.4
         */
        public function uninstall()
        {
        }
    }
    // autoload_real.php @generated by Composer
    class ComposerAutoloaderInitbd9de904cd97441ff75a4da1fed17b4a
    {
        private static $loader;
        public static function loadClassLoader($class)
        {
        }
        /**
         * @return \Composer\Autoload\ClassLoader
         */
        public static function getLoader()
        {
        }
    }
}
namespace Composer\Autoload {
    class ComposerStaticInitbd9de904cd97441ff75a4da1fed17b4a
    {
        public static $classMap = array('PLLWC_Admin' => __DIR__ . '/../..' . '/admin/admin.php', 'PLLWC_Admin_Coupons' => __DIR__ . '/../..' . '/admin/admin-coupons.php', 'PLLWC_Admin_Menus' => __DIR__ . '/../..' . '/admin/admin-menus.php', 'PLLWC_Admin_Orders' => __DIR__ . '/../..' . '/admin/admin-orders.php', 'PLLWC_Admin_Product_Duplicate' => __DIR__ . '/../..' . '/admin/admin-product-duplicate.php', 'PLLWC_Admin_Products' => __DIR__ . '/../..' . '/admin/admin-products.php', 'PLLWC_Admin_Reports' => __DIR__ . '/../..' . '/admin/admin-reports.php', 'PLLWC_Admin_Site_Health' => __DIR__ . '/../..' . '/admin/admin-site-health.php', 'PLLWC_Admin_Status_Reports' => __DIR__ . '/../..' . '/admin/admin-status-reports.php', 'PLLWC_Admin_Taxonomies' => __DIR__ . '/../..' . '/admin/admin-taxonomies.php', 'PLLWC_Admin_WC_Install' => __DIR__ . '/../..' . '/admin/admin-wc-install.php', 'PLLWC_Bookings' => __DIR__ . '/../..' . '/plugins/bookings.php', 'PLLWC_Composite_Products' => __DIR__ . '/../..' . '/plugins/composite-products.php', 'PLLWC_Coupons' => __DIR__ . '/../..' . '/include/coupons.php', 'PLLWC_Data_Store' => __DIR__ . '/../..' . '/include/data-store.php', 'PLLWC_Dynamic_Pricing' => __DIR__ . '/../..' . '/plugins/dynamic-pricing.php', 'PLLWC_Emails' => __DIR__ . '/../..' . '/include/emails.php', 'PLLWC_Export' => __DIR__ . '/../..' . '/include/export.php', 'PLLWC_Follow_Up_Emails' => __DIR__ . '/../..' . '/plugins/follow-up-emails.php', 'PLLWC_Free_Gift_Coupons' => __DIR__ . '/../..' . '/plugins/free-gift-coupons.php', 'PLLWC_Frontend' => __DIR__ . '/../..' . '/frontend/frontend.php', 'PLLWC_Frontend_Account' => __DIR__ . '/../..' . '/frontend/frontend-account.php', 'PLLWC_Frontend_Cart' => __DIR__ . '/../..' . '/frontend/frontend-cart.php', 'PLLWC_Frontend_WC_Pages' => __DIR__ . '/../..' . '/frontend/frontend-wc-pages.php', 'PLLWC_Import' => __DIR__ . '/../..' . '/include/import.php', 'PLLWC_Install' => __DIR__ . '/../..' . '/include/install.php', 'PLLWC_Links' => __DIR__ . '/../..' . '/include/links.php', 'PLLWC_Links_Pro' => __DIR__ . '/../..' . '/include/links-pro.php', 'PLLWC_Min_Max_Quantities' => __DIR__ . '/../..' . '/plugins/min-max-quantities.php', 'PLLWC_Mix_Match' => __DIR__ . '/../..' . '/plugins/mix-match.php', 'PLLWC_Object_Language_CPT' => __DIR__ . '/../..' . '/include/object-language-cpt.php', 'PLLWC_Order_Language_CPT' => __DIR__ . '/../..' . '/include/order-language-cpt.php', 'PLLWC_Plugins_Compat' => __DIR__ . '/../..' . '/plugins/plugins-compat.php', 'PLLWC_Post_Types' => __DIR__ . '/../..' . '/include/post-types.php', 'PLLWC_Product_Bundles' => __DIR__ . '/../..' . '/plugins/product-bundles.php', 'PLLWC_Product_Data_Store_CPT' => __DIR__ . '/../..' . '/include/product-data-store-cpt.php', 'PLLWC_Product_Language_CPT' => __DIR__ . '/../..' . '/include/product-language-cpt.php', 'PLLWC_Products' => __DIR__ . '/../..' . '/include/products.php', 'PLLWC_REST_API' => __DIR__ . '/../..' . '/include/rest-api.php', 'PLLWC_REST_Order' => __DIR__ . '/../..' . '/include/rest-order.php', 'PLLWC_REST_Product' => __DIR__ . '/../..' . '/include/rest-product.php', 'PLLWC_Shipment_Tracking' => __DIR__ . '/../..' . '/plugins/shipment-tracking.php', 'PLLWC_Stock' => __DIR__ . '/../..' . '/include/stock.php', 'PLLWC_Stock_Manager' => __DIR__ . '/../..' . '/plugins/stock-manager.php', 'PLLWC_Strings' => __DIR__ . '/../..' . '/include/strings.php', 'PLLWC_Stripe' => __DIR__ . '/../..' . '/plugins/stripe.php', 'PLLWC_Subscriptions' => __DIR__ . '/../..' . '/plugins/subscriptions.php', 'PLLWC_Swatches' => __DIR__ . '/../..' . '/plugins/swatches.php', 'PLLWC_Sync_Content' => __DIR__ . '/../..' . '/include/sync-content.php', 'PLLWC_Table_Rate_Shipping' => __DIR__ . '/../..' . '/plugins/table-rate-shipping.php', 'PLLWC_Translated_Object_Language_CPT' => __DIR__ . '/../..' . '/include/translated-object-language-cpt.php', 'PLLWC_WCFD' => __DIR__ . '/../..' . '/plugins/wcfd.php', 'PLLWC_Wizard' => __DIR__ . '/../..' . '/admin/wizard.php', 'PLLWC_Xdata' => __DIR__ . '/../..' . '/include/xdata.php', 'PLLWC_Xdata_Session_Manager' => __DIR__ . '/../..' . '/include/xdata-session-manager.php', 'PLLWC_Yith_WCAS' => __DIR__ . '/../..' . '/plugins/yith-wcas.php');
        public static function getInitializer(\Composer\Autoload\ClassLoader $loader)
        {
        }
    }
}
namespace {
    /**
     * Remove an anonymous object filter.
     * Thanks to toscho.
     *
     * @see http://wordpress.stackexchange.com/questions/57079/how-to-remove-a-filter-that-is-an-anonymous-object/57088#57088
     *
     * @since 0.1
     *
     * @param string $tag           Hook name.
     * @param array  $method        [0] => class name, [1] => method name.
     * @param int    $priority      Hook priority, defaults to 10.
     * @param int    $accepted_args Not used.
     */
    function pll_remove_anonymous_object_filter($tag, $method, $priority = 10, $accepted_args = 1)
    {
    }
    /**
     * Get an anonymous object from one of its known filter.
     *
     * @see pll_remove_anonymous_object_filter()
     *
     * @since 0.1
     *
     * @param string $tag           Hook name.
     * @param array  $method        [0] => class name, [1] => method name.
     * @param int    $priority      Hook priority, defaults to 10.
     * @param int    $accepted_args Not used.
     */
    function pll_get_anonymous_object_from_filter($tag, $method, $priority = 10, $accepted_args = 1)
    {
    }
    /**
     * Returns the Polylang for WooCommerce instance.
     *
     * @since 0.1
     */
    function PLLWC()
    {
    }
}