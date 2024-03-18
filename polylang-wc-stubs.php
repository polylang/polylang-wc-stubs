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
         * @var PLLWC_Product_Language_CPT
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
         * @param WC_Coupon $data Coupon properties.
         * @return void
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
         * @param array    $args       Arguments passed to WP_Term_Query.
         * @param string[] $taxonomies Taxonomies passed to WP_Term_Query.
         * @return array Modified arguments.
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
         *
         * @return void
         */
        public function init()
        {
        }
        /**
         * Adds our endpoints metabox.
         *
         * @since 0.7.5
         *
         * @return void
         */
        public function add_meta_box()
        {
        }
        /**
         * Displays the WooCommerce endpoints metabox.
         *
         * @since 0.1
         *
         * @return void
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
         *
         * @return void
         */
        public function nav_menu_links()
        {
        }
        /**
         * Get endpoints available in the WooCommerce endpoints menu metabox.
         *
         * @since 0.9.3
         *
         * @return string[]
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
     * @since 1.9 Changed the class to abstract.
     */
    abstract class PLLWC_Admin_Orders
    {
        /**
         * Order language data store.
         *
         * @var PLLWC_Order_Language_CPT
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
         * Adds the language columns to the orders list table.
         *
         * @since 0.1
         *
         * @return void
         */
        public abstract function custom_columns();
        /**
         * Adds the language column in the orders list table.
         *
         * @since 0.1
         *
         * @param string[] $columns List of table columns.
         * @return string[] modified list of columns.
         */
        public function add_order_column($columns)
        {
        }
        /**
         * Fills the language column of each order.
         *
         * @since 0.1
         * @since 1.9 The second param has been renamed to `$order` and accepts `WC_Order` and `int`.
         *
         * @param string       $column Column name.
         * @param WC_Order|int $order  Order object when using HPOS, or order ID otherwise.
         * @return void
         */
        public function order_column($column, $order)
        {
        }
        /**
         * Add the languages metabox for orders.
         * Add filters specific to the orders page.
         *
         * @since 0.1
         *
         * @param string $screen_id Screen id of the order edit page.
         * @return void
         */
        public function add_meta_boxes($screen_id)
        {
        }
        /**
         * Displays the Languages metabox.
         *
         * @since 0.1
         *
         * @param object $order Order object.
         * @return void
         */
        public abstract function order_language($order);
        /**
         * Displays the Languages metabox.
         *
         * @since 1.9
         *
         * @param int $order_id Order id.
         * @return void
         */
        protected function display_language_metabox($order_id)
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
        /**
         * Checks if the current screen is allowed.
         *
         * @since 1.9
         *
         * @param string $screen_id Optional screen id, defaults to the current screen.
         * @return bool
         */
        protected function is_allowed_screen($screen_id = '')
        {
        }
        /**
         * Returns a list of allowed screens.
         *
         * @since 1.9
         *
         * @return string[]
         */
        protected function get_allowed_screens()
        {
        }
    }
    /**
     * @package Polylang-WC
     */
    /**
     * Handles the language information displayed for orders when using HPOS.
     *
     * @since 1.9
     */
    class PLLWC_Admin_Orders_HPOS extends \PLLWC_Admin_Orders
    {
        /**
         * Constructor.
         *
         * @since 1.9
         */
        public function __construct()
        {
        }
        /**
         * Adds the language columns to the orders list table.
         *
         * @since 1.9
         *
         * @return void
         */
        public function custom_columns()
        {
        }
        /**
         * Displays the Languages metabox in HPOS context.
         *
         * @since 1.9
         *
         * @param WC_Order $order Order object.
         * @return void
         */
        public function order_language($order)
        {
        }
        /**
         * Returns a list of allowed screens.
         *
         * @since 1.9
         *
         * @return string[]
         */
        protected function get_allowed_screens()
        {
        }
        /**
         * Add pll_order_id parameter in the list of parameters of the admin ajax request.
         *
         * @since 1.9
         *
         * @param array $params List of parameters to add to the admin ajax request.
         * @return array Modified list of parameters to add to the admin ajax request.
         */
        public function set_pll_order_id($params)
        {
        }
        /**
         * Sets the current language in order screen when using HPOS.
         *
         * @since 1.9
         *
         * @param PLL_Language|bool $current_language The current language already set.
         * @return PLL_Language|bool
         */
        public function set_current_language($current_language)
        {
        }
        /**
         * Saves order language from admin when HPOS is enabled and order custom tables authoritative.
         *
         * @since 1.9
         *
         * @param WC_Order $order Order object being saved.
         * @return void
         */
        public function save_order_language($order)
        {
        }
        /**
         * Enqueues order edit page script.
         *
         * @since 1.9
         *
         * @return void
         */
        public function enqueue_order_script()
        {
        }
    }
    /**
     * @package Polylang-WC
     */
    /**
     * Handles the language information displayed for orders hen using legacy orders
     *
     * @since 1.9
     */
    class PLLWC_Admin_Orders_Legacy extends \PLLWC_Admin_Orders
    {
        /**
         * Removes the standard Polylang languages columns for the orders list table
         * and replace them with one unique column.
         *
         * @since 0.1
         *
         * @return void
         */
        public function custom_columns()
        {
        }
        /**
         * Displays the Languages metabox.
         *
         * @since 0.1
         *
         * @param WP_Post $order Order object.
         * @return void
         */
        public function order_language($order)
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
         * @var PLLWC_Product_Language_CPT
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
         *
         * @return void
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
         * @param WC_Product $duplicate Duplicated product.
         * @param WC_Product $product   Original product.
         * @return void
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
         * @return void
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
         * @var PLLWC_Product_Language_CPT
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
         *
         * @return void
         */
        public function admin_enqueue_scripts()
        {
        }
        /**
         * Ajax response for changing the language in the product language metabox.
         *
         * @since 0.1
         *
         * @return void
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
         * @param int[] $menu_orders An array with product ids as key and menu_order as value.
         * @return void
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
         * @param string[] $products array with product ids as keys and names as values.
         * @return string[]
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
         * @param string[] $excludes Query vars excluded from the language filter.
         * @param WP_Query $query    WP Query object.
         * @return string[]
         */
        public function fix_products_search($excludes, $query)
        {
        }
        /**
         * Removes the German and Danish specific sanitization for titles.
         *
         * @since 0.7.1
         *
         * @return void
         */
        public function remove_sanitize_title()
        {
        }
        /**
         * Restores the German and Danish specific sanitization for titles.
         *
         * @since 0.7.1
         *
         * @return void
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
         * @var PLLWC_Product_Language_CPT
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
         * @param string[] $query Array of SQL clauses.
         * @return string[]
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
         * @param int[] $product_ids Not used.
         * @param int   $category_id Product category id.
         * @return int[]
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
         * @param string[] $clauses    SQL clauses.
         * @param string[] $taxonomies Not used.
         * @param array    $args       WP_Term_Query arguments.
         * @return string[] Modified SQL clauses
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
         * @var PLL_Model
         */
        protected $model;
        /**
         * List of controls on default WooCommerce pages.
         *
         * @var stdClass|null
         */
        protected $woocommerce_pages_status = \null;
        /**
         * Retrieves the status of the WooCommerce pages.
         * Partially copied from {@see WC_REST_System_Status_V2_Controller::get_pages()}.
         *
         * @since 1.3
         *
         * @return stdClass
         */
        public function get_woocommerce_pages_status()
        {
        }
        /**
         * Loads the status report for the translations of the default pages in the WooCommerce status page.
         *
         * @since 1.3
         *
         * @return void
         */
        public function status_report()
        {
        }
        /**
         * Loads the status report for the translations of the default pages in our wizard.
         *
         * @since 1.3
         *
         * @return void
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
         *
         * @return void
         */
        public function init()
        {
        }
        /**
         * Adds term metas to copy or synchronize.
         *
         * @since 1.0
         *
         * @param string[] $to_copy List of term metas names.
         * @param bool     $sync    True if it is synchronization, false if it is a copy.
         * @param int      $from    Id of the term from which we copy informations.
         * @param int      $to      Id of the term to which we paste informations.
         * @param string   $lang    Language slug.
         * @return string[]
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
         * @param array $args WP_Term_Query arguments.
         * @return array Modified arguments
         */
        public function get_terms_args($args)
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
         * @return mixed
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
         * @return void
         */
        public function fix_term_thumbnail($term_id)
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
         * @return void
         */
        public function create_attribute_term($term_id, $tt_id, $taxonomy)
        {
        }
        /**
         * Rewrites WC_Admin_Taxonomies::add_category_fields to populate the metas when creating a new translation.
         *
         * @since 0.1
         *
         * @return void
         */
        public function add_category_fields()
        {
        }
        /**
         * Filters the media list when adding an image to a product category.
         *
         * @since 1.6
         *
         * @return void
         */
        public function admin_enqueue_scripts()
        {
        }
        /**
         * Enqueues filter script.
         *
         * @since 1.7.2
         *
         * @return void
         */
        public function load_scripts()
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
         * List of WooCommerce pages in all languages.
         *
         * @var array<string, array<string, array<string, string>>>
         */
        private $pages = array();
        /**
         * Locale used to translate WooCommerce pages title.
         *
         * @var string
         */
        private $locale;
        /**
         * Constructor.
         *
         * @since 0.1
         */
        public function __construct()
        {
        }
        /**
         * Translates the default WooCommerce pages in all existing languages.
         *
         * @since 1.7
         *
         * @return void
         */
        public function translate_default_wc_pages()
        {
        }
        /**
         * Add post states for the translations of the shop, cart, checkout, account and terms pages.
         *
         * @since 0.9
         *
         * @param string[] $post_states List of post display states.
         * @param WP_Post  $post        The post object.
         * @return string[]
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
         * @return string
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
         *
         * @return void
         */
        public function init_translated_pages()
        {
        }
        /**
         * Install pages from the WooCommerce status tools when using the "Install pages" button.
         *
         * @since 0.1
         *
         * @return string
         */
        public function install_pages()
        {
        }
        /**
         * Creates a page translation.
         *
         * @since 0.1
         *
         * @param string $page WooCommerce Page slug.
         * @param string $lang Language slug.
         * @return void
         */
        public function translate_page($page, $lang)
        {
        }
        /**
         * Creates a default product category for a language.
         *
         * @since 0.9.3
         *
         * @param string $lang Language code.
         * @return void
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
         * @return void
         */
        public function add_language($args)
        {
        }
        /**
         * Assigns the default language to the default product category
         * and creates translated default categories.
         *
         * @since 0.9.3
         *
         * @return void
         */
        public static function create_default_product_cats()
        {
        }
        /**
         * Replaces the Uncategorized product cat in default language by the correct translation.
         *
         * @since 0.9.3
         *
         * @return void
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
         * @return void
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
         * @return string|false Language slug.
         *
         * @phpstan-return non-empty-string|false
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
         * @var PLL_Model
         */
        protected $model;
        /**
         * @var PLL_Wizard
         */
        protected $wizard;
        /**
         * List of translation packages to download.
         *
         * @var stdClass[]
         */
        protected $translation_updates;
        /**
         * Constructor.
         *
         * @since 1.4
         *
         * @param PLL_Model  $model  Reference to PLL_Model object.
         * @param PLL_Wizard $wizard Reference to PLL_Wizard object.
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
         *
         * @return void
         */
        public function display_step_wc_pages()
        {
        }
        /**
         * Executes the WooCommerce pages step.
         *
         * @since 1.4
         *
         * @return void
         */
        public function save_step_wc_pages()
        {
        }
        /**
         * Filters the update_plugins transient last ckecked date.
         *
         * @since 1.4
         *
         * @param StdClass $updates Transient value of plugins which need to be updated.
         * @return StdClass Filtered value of the transient.
         */
        public function update_last_checked($updates)
        {
        }
        /**
         * Filter the update_plugins transient by only returning translation updates.
         *
         * @since 1.4
         *
         * @param StdClass $updates Transient value of plugins which need to be updated.
         * @return StdClass Filtered value of the transient.
         */
        public function update_plugins($updates)
        {
        }
        /**
         * Retrieves translation updates.
         *
         * @since 1.4
         *
         * @return stdClass[] List of translation packages to download.
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
         * In frontend, forces the queries in the "My account => Orders" tab to fetch orders in all languages by adding
         * a filter (refunds, etc). This is used when HPOS is enabled because `WP_Query` is not used in this context (so
         * {@see PLLWC_Frontend_Account::parse_query()} has no effects).
         * Hooked to `woocommerce_account_content` at very low priority.
         *
         * @since 1.9
         *
         * @return void
         */
        public function add_language_filter_before_account_orders()
        {
        }
        /**
         * Removes the filter added by {@see PLLWC_Frontend_Account::add_language_filter_before_account_orders()}.
         * Hooked to woocommerce_account_content` at very high priority.
         *
         * @since 1.9
         *
         * @return void
         */
        public function remove_language_filter_after_account_orders()
        {
        }
        /**
         * In frontend, forces the "My account => Orders" tab to display orders in all languages.
         * Hooked to `woocommerce_order_query_args` in {@see PLLWC_Frontend_Account::add_language_filter_before_account_orders()}.
         *
         * @since 1.9
         *
         * @param array $query The query array.
         * @return array
         */
        public function add_language_query_arg_in_account_orders($query)
        {
        }
        /**
         * Disables the languages filter for a customer to see all orders whatever the languages.
         * Hooked to the action 'parse_query'.
         *
         * @since 0.3
         *
         * @param WP_Query $query WP_Query object.
         * @return void
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
         * @param string                $item_name  Product name.
         * @param WC_Order_Item_Product $item       Order item.
         * @param bool                  $is_visible Whether the product is visible.
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
         * @param string[][] $rows  Order item totals.
         * @param WC_Order   $order Order.
         * @return string[][]
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
         * Controls if the cart translation if enabled.
         *
         * @var bool
         */
        protected $enable_cart_translation;
        /**
         * Product language data store.
         *
         * @var PLLWC_Product_Language_CPT
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
         *
         * @return void
         */
        public function init()
        {
        }
        /**
         * Reloads the cart when the language is set from the content.
         *
         * @since 0.3.2
         *
         * @param PLL_Language|false $lang False or language object.
         * @return PLL_Language|false
         */
        public function pll_set_language_from_query($lang)
        {
        }
        /**
         * Resets the cached data when switching the language.
         *
         * @since 0.1
         *
         * @return void
         */
        public function wp_enqueue_scripts()
        {
        }
        /**
         * Translates the product attributes in the cart.
         *
         * @since 1.1
         *
         * @param string[] $attributes Selected attributes.
         * @param string   $lang       Target language.
         * @param string   $orig_lang  Source language.
         * @return string[]
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
         *
         * @return void
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
         * @param array      $data    Data to validate in the hash.
         * @param WC_Product $product Product in the cart item.
         * @return array
         */
        public function cart_item_data_to_validate($data, $product)
        {
        }
        /**
         * Translates the cart page id in the Add to cart action.
         *
         * @since 1.6
         *
         * @param int $page_id Cart page id.
         * @return int
         */
        public function translate_add_to_cart_page_id($page_id)
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
         * @param WP_Query $query Instance of WP_Query.
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
         * @param PLL_Language|false $lang  False or language object.
         * @param WP_Query           $query WP_Query object.
         * @return PLL_Language|false
         */
        public function pll_set_language_from_query($lang, $query)
        {
        }
        /**
         * Tells if the given query corresponds to the front page.
         * This method inspects `WP_Query::$query` and uses a list of query vars that can be set without changing the type
         * of the page displayed. For example, the front page with `?rating_filter=5` is still the front page
         * (`rating_filter` comes from WC's widget "Products by Rating list").
         *
         * @see WC_Widget_Layered_Nav_Filters
         *
         * @since 1.8.1
         *
         * @param WP_Query $query An instance of the main query.
         * @return bool
         */
        private function is_front_page(\WP_Query $query)
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
         *
         * @return void
         */
        public function init()
        {
        }
        /**
         * Replaces WooCommerce countries class by our own when language is set from the content.
         *
         * @since 1.9.2
         *
         * @return void
         */
        public function override_countries()
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
         *
         * @return void
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
         * @param string[][] $arr List of files and functions to whitelist for the home_url filter.
         * @return string[][]
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
         *
         * @return void
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
        /**
         * Translates the product ID for the widget block reviews by product.
         *
         * @since 1.9
         *
         * @param array $parsed_block The block being rendered.
         * @return array
         */
        public function filter_reviews_by_product_block_id($parsed_block)
        {
        }
    }
    /**
     * @package Polylang-WC
     */
    /**
     * Class managing countries, behaves like the WooCommerce one.
     *
     * @since 1.9.2
     */
    class PLLWC_Countries extends \WC_Countries
    {
        /**
         * Cache of countries.
         *
         * @since 1.9.2
         *
         * @var array
         */
        private $countries_cache;
        /**
         * Gets all countries.
         * Overrides parent method to disable cached country names
         * so they can be translated correctly when language is set from the content.
         * Partially copied from `WC_Countries::get_countries()`.
         *
         * @since 1.9.2
         *
         * @return array
         */
        public function get_countries()
        {
        }
        /**
         * Returns the WooCommerce countries list.
         *
         * @since 1.9.2
         *
         * @return array
         */
        private function read_countries()
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
     *
     * @template TKey
     * @template TValue
     */
    class PLLWC_Data_Store
    {
        /**
         * Array of data stores.
         *
         * @var array<TKey, class-string<TValue>>
         */
        private static $stores = array('order_language' => 'PLLWC_Order_Language_CPT', 'product_language' => 'PLLWC_Product_Language_CPT');
        /**
         * Loads a data store.
         *
         * @since 1.0
         *
         * @throws Exception If the data store doesn't exist.
         *
         * @param TKey $object_type Identifier for the data store, typically 'order_language' or 'product_language'.
         * @return TValue
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
         * @var PLLWC_Order_Language_CPT
         */
        protected $data_store;
        /**
         * Stores previous language information each time it may be switched.
         *
         * @var array[] {
         *   @type bool              $switched Has the WordPress locale been switched?
         *   @type PLL_Language|null $language Previous current language.
         * }
         *
         * @phpstan-var array<array{switched:bool, language:PLL_Language|null}>
         */
        private $previous_languages = array();
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
         * Setups actions related to automatically sent emails.
         *
         * This is delayed after the first call to WC()->mailer() to avoid setting up
         * emails sooner than expected.
         *
         * @since 1.6.3
         *
         * @param WC_Emails $mailer The WooCommerce emails controller.
         * @return void
         */
        public function mailer_init($mailer)
        {
        }
        /**
         * Setups actions related to emails sent to a user.
         *
         * @since 1.7
         *
         * @return void
         */
        protected function user_emails_init()
        {
        }
        /**
         * Setups actions related to emails sent to a customer.
         *
         * @since 1.7
         *
         * @return void
         */
        protected function customer_emails_init()
        {
        }
        /**
         * Setups actions related to emails sent to shop managers.
         *
         * @since 1.7
         *
         * @param WC_Emails $mailer The WooCommerce emails controller.
         * @return void
         */
        protected function shop_manager_emails_init($mailer)
        {
        }
        /**
         * Set the preferred customer language at customer creation.
         * Hooked to the action 'woocommerce_created_customer'.
         *
         * @since 0.1
         *
         * @param int $user_id User ID.
         * @return void
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
         * @return void
         */
        public function new_order($order_id)
        {
        }
        /**
         * Loads the WooCommerce text domain when the locale is switched.
         * Hooked to the action 'change_locale'.
         *
         * @since 1.0.2
         *
         * @return void
         */
        public function change_locale()
        {
        }
        /**
         * Sets the email language.
         *
         * @since 0.1
         *
         * @param PLL_Language $language An instance of PLL_Language.
         * @return void
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
         * @param int|array|WC_Order $order Order or order ID.
         * @return void
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
         * @return void
         */
        public function before_user_email($user)
        {
        }
        /**
         * Restores the current language after the email has been sent.
         * Hooked to order and user notifications.
         *
         * @since 0.1
         *
         * @return void
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
         * @param string[] $replace Array of strings to replace placeholders in emails.
         * @param WC_Email $email   Instance of WC_Email.
         * @return string[]
         */
        public function format_string_replace($replace, $email)
        {
        }
        /**
         * Filters the user locale. Needed when sending the email from admin.
         *
         * @since 1.0.3
         *
         * @param mixed  $value    The value get_metadata() should return.
         * @param int    $user_id  User ID.
         * @param string $meta_key Meta key.
         * @return mixed The meta value.
         */
        public function filter_user_locale($value, $user_id, $meta_key)
        {
        }
        /**
         * Get the user language by email.
         *
         * @nince 1.6
         *
         * @param string $email Email.
         * @return PLL_Language The language of the user having this email, the default language if not found.
         */
        protected function get_language_by_email($email)
        {
        }
        /**
         * Sends order email in the user's language.
         *
         * @since 1.6
         *
         * @param WC_Email $email    WooCommerce Email Class.
         * @param int      $order_id Order id.
         * @return void
         */
        protected function send_order_email($email, $order_id)
        {
        }
        /**
         * Sends cancelled order email in the user's language.
         *
         * @since 1.6
         *
         * @param int $order_id Order id.
         * @return void
         */
        public function send_cancelled_order_email($order_id)
        {
        }
        /**
         * Sends failed order email in the user's language.
         *
         * @since 1.6
         *
         * @param int $order_id Order id.
         * @return void
         */
        public function send_failed_order_email($order_id)
        {
        }
        /**
         * Sends new order email in the user's language.
         *
         * @since 1.6
         *
         * @param int $order_id Order id.
         * @return void
         */
        public function send_new_order_email($order_id)
        {
        }
        /**
         * Handles emails sent from the order actions metabox.
         *
         * @since 1.6
         *
         * @param WC_Order $order  Order.
         * @param string   $action Order action.
         * @return void
         */
        public function resend_order_email($order, $action)
        {
        }
        /**
         * Returns an array of recipients for the given email type.
         *
         * @since 1.8
         *
         * @param WC_Email $email Email object.
         * @return string[] Array of recipients for the email.
         */
        protected function get_recipients($email)
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
    class PLLWC_Product_Export
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
         * @param string[] $columns Columns to export.
         * @return string[]
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
         * @param array      $row     Data exported in a CSV row.
         * @param WC_Product $product Product.
         * @return array
         */
        public function row_data($row, $product)
        {
        }
    }
    /**
     * Class to declare compatibility with a WooCommerce feature.
     * @since 1.9
     * @since 1.9.1 Renamed from `PLLWC_HPOS_Feature` to `PLLWC_Feature`.
     */
    class PLLWC_Feature
    {
        /**
         * Cache.
         *
         * @var bool[]
         *
         * @phpstan-var array<non-falsy-string, bool>
         */
        private $cache = array();
        /**
         * Unique feature id.
         *
         * @var string
         *
         * @phpstan-var non-empty-string
         */
        private $feature_id;
        /**
         * Condition to meet for the compatibility to be enabled along the feature.
         *
         * @var callable
         */
        private $condition_to_meet;
        /**
         * Constructor.
         *
         * @since 1.9.1
         *
         * @param string   $feature_id        Unique feature id.
         * @param callable $condition_to_meet Condition to meet for our compatibility to be enabled along the feature.
         *
         * @phpstan-param non-empty-string $feature_id
         */
        public function __construct(string $feature_id, callable $condition_to_meet)
        {
        }
        /**
         * Tells if PLLWC can use the WC's feature.
         *
         * @since 1.9
         *
         * @return bool
         */
        public function exists() : bool
        {
        }
        /**
         * Tells if the feature is enabled.
         * Must not be used before {@see self::exists()}.
         *
         * @since 1.9
         *
         * @return bool
         */
        public function is_enabled() : bool
        {
        }
        /**
         * Calls the method that declares this plugin compatible with WC's feature.
         *
         * @since 1.9
         *
         * @return void
         */
        public function declare_compatibility()
        {
        }
        /**
         * Declares this plugin compatible with WC's feature.
         *
         * @since 1.9
         *
         * @return void
         */
        public function declare_compatibility_callback()
        {
        }
    }
    /**
     * @package Polylang-WC
     */
    /**
     * Translates WooCommerce page IDs.
     *
     * @since 0.1
     */
    class PLLWC_Filter_WC_Pages
    {
        /**
         * Page slugs to translate.
         *
         * @var string[]
         * @phpstan-var non-empty-string[]
         */
        const TRANSLATED_PAGES = array('myaccount', 'shop', 'cart', 'checkout', 'terms');
        /**
         * Adds hooks to translate WC page IDs.
         *
         * @since 1.8
         *
         * @return void
         */
        public static function init()
        {
        }
    }
    /**
     * @package Polylang-WC
     */
    /**
     * Filter order queries by language when HPOS is enabled.
     *
     * @since 1.9
     *
     * @phpstan-type QueryClauses array{
     *     fields: non-falsy-string,
     *     join: string,
     *     where: non-falsy-string,
     *     groupby: string,
     *     orderby: non-falsy-string,
     *     limits: non-falsy-string
     * }
     */
    class PLLWC_HPOS_Orders_Query
    {
        /**
         * Launch hooks.
         *
         * @since 1.9
         *
         * @return self
         */
        public function init()
        {
        }
        /**
         * Maybe filters the query clauses by language by adding JOIN and WHERE clauses.
         * Requires WC 7.9.0.
         *
         * @since 1.9
         *
         * @param string[] $clauses {
         *     Associative array of the clauses for the query.
         *
         *     @type string $fields  The SELECT clause of the query.
         *     @type string $join    The JOIN clause of the query.
         *     @type string $where   The WHERE clause of the query.
         *     @type string $groupby The GROUP BY clause of the query.
         *     @type string $orderby The ORDER BY clause of the query.
         *     @type string $limits  The LIMIT clause of the query.
         * }
         * @param object   $query   A `Automattic\WooCommerce\Internal\DataStores\Orders\OrdersTableQuery` instance.
         * @return string[]
         *
         * @phpstan-param QueryClauses $clauses
         * @phpstan-return QueryClauses
         */
        public function maybe_filter_query_clauses_by_lang($clauses, $query)
        {
        }
        /**
         * Returns the list of languages passed to the given query.
         * Falls back to an array containing the current language if no languages are found in the query.
         *
         * @since 1.9
         *
         * @param string[]|string|null $languages An array of language codes, a comma-separated list of language codes, or `null`.
         * @return PLL_Language[] A list of `PLL_Language` objects.
         */
        private function get_languages($languages) : array
        {
        }
        /**
         * Tells if the order types from the given query are all translated by PLLWC.
         *
         * @since 1.9
         *
         * @param string[]                 $types Order types.
         * @param PLLWC_Order_Language_CPT $store The order language store.
         * @return bool
         */
        private function are_translated_types(array $types, \PLLWC_Order_Language_CPT $store)
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
    class PLLWC_Product_Import
    {
        /**
         * Product language data store.
         *
         * @var PLLWC_Product_Language_CPT
         */
        protected $data_store;
        /**
         * @var WC_Product_CSV_Importer
         */
        protected $importer;
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
         * @param string[] $mappings Importer columns mappings.
         * @return string[]
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
         * @param string[] $options Mapping options.
         * @return string[]
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
         * @param WC_Product $object Product object.
         * @param array      $data   Data in a row of the CSV file.
         * @return void
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
         * @return void
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
         * @param array    $row         Row values.
         * @param string[] $mapped_keys Mapped keys.
         * @return void
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
         * @return void
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
         * @return PLL_Language|null
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
         * @param callable[]              $callbacks Array of parsing callbacks.
         * @param WC_Product_CSV_Importer $importer  WC_Product_CSV_Importer object.
         * @return callable[]
         */
        public function formatting_callbacks($callbacks, $importer)
        {
        }
        /**
         * Parse a category field from a CSV.
         * Categories are separated by commas and subcategories are "parent > subcategory".
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
         *
         * @since 1.0.3
         *
         * @param string $value Field value.
         * @return array
         */
        public function parse_tags_field($value)
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
         * @return void
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
         * @return void
         */
        public function activate($networkwide)
        {
        }
        /**
         * Plugin activation on a single site.
         *
         * @since 0.1
         *
         * @return void
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
         * @return void
         */
        public function deactivate($networkwide)
        {
        }
        /**
         * Plugin deactivation on a single site.
         *
         * @since 0.1
         *
         * @return void
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
         * @return void
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
         *
         * @since 0.1
         * @since 1.9 Hooked to `pll_prepare_rewrite_rules` and set default value to `$pre` parameter.
         *
         * @param string[] $pre Not used.
         * @return string[] Unmodified $pre.
         */
        public function prepare_rewrite_rules($pre = array())
        {
        }
        /**
         * Get the shop pages slugs in all languages.
         *
         * @since 0.3.6
         *
         * @return string[]
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
         * @param string[] $rules Rewrite rules.
         * @return string[] Modified rewrite rules.
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
         * @param string[] $rules Rewrite rules.
         * @return string[] Modified rewrite rules.
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
         * @param string[]    $rule    Original rewrite rule.
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
         * @param string[] $permalinks WooCommerce permalinks options.
         * @return string[]
         */
        public function option_woocommerce_permalinks($permalinks)
        {
        }
        /**
         * Sets `home_url` property when using plain permalinks and the shop is on front.
         *
         * @since 1.8
         *
         * @param array $additional_data    Array of editable language properties.
         * @param array $data Language data Array of `PLL_Language` object properties currently created.
         * @return array Editable properties with `home_url` set.
         *
         * @phpstan-param array<non-empty-string, mixed> $additional_data
         * @phpstan-param non-empty-array<non-empty-string, mixed> $data
         */
        public static function set_home_url($additional_data, $data)
        {
        }
        /**
         * Makes sure that the order received url is in the same language as the order.
         * This is especially useful when evaluating the return url for gateways, which
         * evaluate the return url on an api endpoint.
         *
         * @since 1.5.1
         *
         * @param string   $url   Order received url.
         * @param WC_Order $order WC_Order object.
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
         * @var PLL_Translate_Slugs_Model
         */
        protected $slugs_model;
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
         * @return string[]
         *
         * @phpstan-return array<non-falsy-string>
         */
        protected function get_query_vars()
        {
        }
        /**
         * Removes the shop slug and adds endpoints slugs to the translatable slugs.
         *
         * @since 0.1
         *
         * @param array        $slugs    The list of slugs.
         * @param PLL_Language $language Instance of PLL_Language.
         * @param PLL_MO       $mo       The translations object, instance of PLL_MO.
         * @return array
         */
        public function pll_translated_slugs($slugs, $language, &$mo)
        {
        }
        /**
         * Prepares the rewrite rules filters to translate endpoints slugs.
         *
         * @since 0.1
         * @since 1.9 Hooked to `pll_prepare_rewrite_rules` and set default value to `$pre` parameter.
         *
         * @param string[] $pre Not used.
         * @return string[] Unmodified $pre.
         */
        public function prepare_rewrite_rules($pre = array())
        {
        }
        /**
         * Modifies the rewrite rules to translate endpoints slugs.
         * Hooked to the filter 'page_rewrite_rules'.
         *
         * @since 0.1
         *
         * @param string[] $rules Rewrite rules.
         * @return string[] modified rewrite rules.
         */
        public function rewrite_translated_slug($rules)
        {
        }
        /**
         * Translates the endpoint slug in the rewrite rules.
         *
         * @since 0.1
         *
         * @param string[] $rules Rewrite rules.
         * @param string   $type  Type of slug to translate.
         * @return string[] Modified rewrite rules.
         */
        public function translate_rule($rules, $type)
        {
        }
        /**
         * Translates the endpoint url.
         *
         * @øince 0.1
         *
         * @param string $link     Endpoint url.
         * @param string $endpoint Endpoint name.
         * @return string
         */
        public function get_endpoint_url($link, $endpoint)
        {
        }
        /**
         * Translates the edit-address slug.
         *
         * @øince 0.1
         *
         * @param string[] $slugs Edit address endpoint slugs, typically 'billing' and 'shipping'.
         * @return string[]
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
     * Abstract class to use for object types that support at least one language.
     *
     * @since 1.9
     */
    abstract class PLLWC_Object_Language
    {
        /**
         * Instance of `PLL_Translatable_Object`.
         *
         * @var PLL_Translatable_Object
         */
        protected $object;
        /**
         * Adds hooks.
         *
         * @since 1.9
         *
         * @return self
         */
        public function init()
        {
        }
        /**
         * Returns the language taxonomy name.
         *
         * @since 1.0
         * @since 1.9 Type-hinted.
         *
         * @return string
         *
         * @phpstan-return non-empty-string
         */
        public function get_tax_language() : string
        {
        }
        /**
         * Stores the object's language in the database.
         *
         * @since 1.0
         * @since 1.9 Type-hinted.
         *
         * @param int                     $id   Object ID.
         * @param PLL_Language|string|int $lang Language (object, slug, or term ID).
         * @return bool True when successfully assigned. False otherwise (or if the given language is already assigned to
         *              the object).
         */
        public function set_language($id, $lang) : bool
        {
        }
        /**
         * Returns the language of an object.
         *
         * @since 1.0
         *
         * @param int    $id    Object ID.
         * @param string $field Optional, the language field to return (@see PLL_Language), defaults to `'slug'`.
         *                      A composite value can be used for language term property values, in the form of
         *                      `{language_taxonomy_name}:{property_name}` (see {@see PLL_Language::get_tax_prop()} for
         *                      the possible values). Ex: `term_language:term_taxonomy_id`.
         * @return string|int|bool|string[] The requested field value of the object language, `false` if no language is
         *                                  associated to that object.
         *
         * @phpstan-param non-falsy-string $field
         * @phpstan-return (
         *     $field is 'slug' ? non-empty-string : string|int|bool|list<non-empty-string>
         * )|false
         */
        public function get_language($id, $field = 'slug')
        {
        }
        /**
         * A JOIN clause to add to sql queries when filtering by language is needed directly in query.
         *
         * @since 1.0
         * @since 1.9 Type-hinted.
         *
         * @param string $alias Optional alias for object table.
         * @return string The JOIN clause.
         *
         * @phpstan-return non-empty-string
         */
        public function join_clause($alias = '') : string
        {
        }
        /**
         * A WHERE clause to add to sql queries when filtering by language is needed directly in query.
         *
         * @since 1.0
         * @since 1.9 Type-hinted.
         *
         * @param PLL_Language|PLL_Language[]|string|string[] $lang A `PLL_Language` object, or a comma separated list of
         *                                                          language slugs, or an array of language slugs or objects.
         * @return string The WHERE clause.
         *
         * @phpstan-param PLL_Language|PLL_Language[]|non-empty-string|non-empty-string[] $lang
         */
        public function where_clause($lang) : string
        {
        }
    }
    /**
     * Setups the order language model when orders are managed with a custom post type.
     *
     * @since 1.0
     */
    class PLLWC_Order_Language_CPT extends \PLLWC_Object_Language
    {
        /**
         * Constructor.
         *
         * @since 1.9
         */
        public function __construct()
        {
        }
        /**
         * Add hooks.
         *
         * @since 1.0
         * @since 1.9 Returns an instance of this object.
         *
         * @return self
         */
        public function init()
        {
        }
        /**
         * Adds orders to the list of the translated post types.
         *
         * @since 1.0
         *
         * @param string[] $types List of post type names for which Polylang manages language and translations.
         * @param bool     $hide  True when displaying the list in Polylang settings.
         * @return string[] List of post type names for which Polylang manages language and translations.
         *
         * @phpstan-param array<non-falsy-string> $types
         * @phpstan-return array<non-falsy-string>
         */
        public function translated_post_types($types, $hide)
        {
        }
        /**
         * Removes the order post type from the bulk translate action.
         *
         * @since 1.0.4
         *
         * @param string[] $types List of post type names for which Polylang manages the bulk translate.
         * @return string[]
         *
         * @phpstan-param array<non-falsy-string> $types
         * @phpstan-return array<non-falsy-string>
         */
        public function bulk_translate_post_types($types)
        {
        }
        /**
         * Gets the list of post types available for translation.
         *
         * @since 1.9
         *
         * @param string $context Either 'default' or 'display', defaults to 'default'.
         *
         * @return string[] List of post type names.
         *
         * @phpstan-return array<non-falsy-string>
         */
        public function get_post_types($context = 'default')
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
         * @var string[]
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
         * @return string[] List of taxonomy names.
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
         * @param string[] $taxonomies List of taxonomy names for which Polylang manages language and translations.
         * @param bool     $hide       True when displaying the list in Polylang settings.
         * @return string[] List of taxonomy names for which Polylang manages language and translations.
         */
        public function translate_taxonomies($taxonomies, $hide)
        {
        }
        /**
         * Adds taxonomies to the list of taxonomies to copy when creating a new translation.
         *
         * @since 0.1
         *
         * @param string[] $taxonomies The list of taxonomies to copy or synchronize.
         * @return string[] The list of taxonomies to copy or synchronize.
         */
        public function copy_taxonomies($taxonomies)
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
         * @return void
         */
        public function wc_update_lookup_table($id, $table)
        {
        }
    }
    /**
     * Abstract class to use for object types that support languages and translations.
     *
     * @since 1.0
     * @since 1.9 Renamed from `PLLWC_Translated_Object_Language_CPT` to `PLLWC_Translated_Object_Language`.
     */
    abstract class PLLWC_Translated_Object_Language extends \PLLWC_Object_Language
    {
        /**
         * Instance of `PLL_Translated_Object`.
         *
         * @var PLL_Translated_Object
         */
        protected $object;
        /**
         * Returns the translations group taxonomy name.
         *
         * @since 1.0
         * @since 1.9 Type-hinted.
         *
         * @return string
         *
         * @phpstan-return non-empty-string
         */
        public function get_tax_translations() : string
        {
        }
        /**
         * Saves the object's translations.
         *
         * @since 1.0
         * @since 1.9 Returns the translations.
         * @since 1.9 Type-hinted.
         *
         * @param int[] $translations An associative array of translations with language code as key and translation ID as value.
         * @return int[] An associative array with language codes as key and object IDs as values.
         *
         * @phpstan-param non-empty-array<non-empty-string, positive-int> $translations
         * @phpstan-return array<non-empty-string, positive-int>
         */
        public function save_translations($translations) : array
        {
        }
        /**
         * Returns an array of translations of an object.
         *
         * @since 1.0
         * @since 1.9 Type-hinted.
         *
         * @param int $id Object ID.
         * @return int[] An associative array of translations with language code as key and translation ID as value.
         *
         * @phpstan-return array<non-empty-string, positive-int>
         */
        public function get_translations($id) : array
        {
        }
        /**
         * Among the object and its translations, returns the ID of the object which is in `$lang`.
         *
         * @since 1.0
         *
         * @param int                      $id   Object ID.
         * @param PLL_Language|string|null $lang Optional language (object or slug), defaults to the current language.
         * @return int|null The translation object ID if exists, `0` otherwise. `null` if the language is not defined yet.
         *
         * @phpstan-return int<0, max>|null
         */
        public function get($id, $lang = \null)
        {
        }
    }
    /**
     * Setups the product languages and translations model when products are managed with a custom post type.
     *
     * @since 1.0
     */
    class PLLWC_Product_Language_CPT extends \PLLWC_Translated_Object_Language
    {
        /**
         * WooCommerce permalinks option.
         *
         * @var string[]
         */
        protected $permalinks;
        /**
         * Current attribute term being edited.
         *
         * @var WP_Term|null
         */
        protected static $editing_term;
        /**
         * Product data store.
         *
         * @var PLLWC_Product_Data_Store_CPT
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
         * Adds hooks.
         *
         * @since 1.0
         * @since 1.9 Returns an instance of this object.
         *
         * @return self
         */
        public function init()
        {
        }
        /**
         * Add products and variations to translated post types.
         *
         * @since 1.0
         *
         * @param string[] $types List of post type names for which Polylang manages language and translations.
         * @param bool     $hide  True when displaying the list in Polylang settings.
         * @return string[] List of post type names for which Polylang manages language and translations.
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
         * @param int       $object_id Object ID.
         * @param WP_Term[] $terms     An array of object terms.
         * @param int[]     $tt_ids    An array of term taxonomy IDs.
         * @param string    $taxonomy  Taxonomy slug.
         * @return void
         */
        public function set_object_terms($object_id, $terms, $tt_ids, $taxonomy)
        {
        }
        /**
         * Returns legacy product metas mapped to product properties.
         *
         * @since 1.0
         * @since 1.9 Type-hinted.
         *
         * @param bool $sync True if it is synchronization, false if it is a copy.
         * @return string[]
         */
        protected function get_legacy_metas($sync) : array
        {
        }
        /**
         * Get the custom fields to copy or synchronize.
         *
         * @since 1.0
         *
         * @param string[] $metas List of custom fields names.
         * @param bool     $sync  True if it is synchronization, false if it is a copy.
         * @param int      $from  Id of the product from which we copy informations.
         * @param int      $to    Id of the product to which we copy informations.
         * @param string   $lang  Language code.
         * @return string[]
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
         * @return void
         */
        public function update_lookup_table($id, $table)
        {
        }
        /**
         * Fires actions and update look tables of translated products after properties have been synchronized.
         *
         * @since 1.2
         *
         * @param WC_Product|false $product       Product.
         * @param array            $updated_props Product properties being updated.
         * @return void
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
         * @return void
         */
        public function copy($from, $to, $lang, $sync = \false)
        {
        }
        /**
         * Synchronizes product ordering.
         *
         * @since 1.0
         *
         * @param int $id    Product id.
         * @param int $order Product order.
         * @return void
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
         *
         * The method replaces WC_Post_Data::edit_term().
         * A copy is needed because of the private property $editing_term.
         * Code last checked: WC 4.0
         *
         * @since 1.2
         *
         * @param  int    $term_id  Term ID.
         * @param  int    $tt_id    Term taxonomy ID.
         * @param  string $taxonomy Taxonomy slug.
         * @return void
         */
        public static function edit_term($term_id, $tt_id, $taxonomy)
        {
        }
        /**
         * When a term is edited, check for product attributes and update variations.
         *
         * This is a modified version of WC_Post_Data::edited_term().
         * The language is added to the query to take into account updates of attributes sharing the same slug.
         * Code last checked: WC 4.0
         *
         * @since 1.2
         *
         * @param  int    $term_id  Term ID.
         * @param  int    $tt_id    Term taxonomy ID.
         * @param  string $taxonomy Taxonomy slug.
         * @return void
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
         * @var PLLWC_Product_Language_CPT
         */
        protected $data_store;
        /**
         * Temporarily stores data related to a product currently being edited.
         *
         * @see PLLWC_Products::store_product_data()
         * @see PLLWC_Products::get_terms_args()
         *
         * @var array {
         *     @type string|false $lang       The product's language.
         *     @type string[]     $taxonomies Attribute taxonomies.
         * }
         */
        private $product_data = array('lang' => \false, 'taxonomies' => array());
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
         * @return void
         *
         * @phpstan-param non-empty-string $lang
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
         * @return void
         *
         * @phpstan-param non-empty-string $lang
         */
        public function copy_variations($from, $to, $lang)
        {
        }
        /**
         * Copy variations and metas when using "Add new" ( translation )
         * Hooked to the action 'add_meta_boxes'.
         *
         * @since 0.1
         *
         * @param string  $post_type Post type.
         * @param WP_Post $post      Current post object.
         * @return void
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
         * @return void
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
         * @return void
         */
        public function save_variation($id)
        {
        }
        /**
         * Synchronizes variations deletion.
         * Hooked to the action 'woocommerce_before_delete_product_variation'.
         *
         * @since 1.0
         *
         * @param int $id Variation product id.
         * @return void
         */
        public function delete_variation($id)
        {
        }
        /**
         * Checks whether two products are synchronized.
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
         * @return bool
         */
        public static function should_copy_texts($from, $to, $sync)
        {
        }
        /**
         * Maybe translates a product property.
         *
         * @since 1.0
         * @since 1.8 Type-hinted parameters `$prop` and `$lang`.
         *
         * @param mixed  $value Property value.
         * @param string $prop  Property name.
         * @param string $lang  Language code.
         * @return mixed Property value, possibly translated.
         */
        public static function maybe_translate_property($value, string $prop, string $lang)
        {
        }
        /**
         * Translates taxonomy attributes.
         *
         * @since 1.0
         * @since 1.8 Now public and static.
         * @since 1.8 Accepts both an array of attributes terms slugs and `WC_Product_Attribute` objects.
         *
         * @param array  $attributes Product attributes. Could be pairs of attribute taxonomies and term slugs (from `WC_Product_Variation`)
         *                           or a list of `WC_Product_Attribute` objects (from other kind of `WC_Product`).
         * @param string $lang       Language code.
         * @return array Array of translated attributes with preserved keys.
         *
         * @phpstan-param array<string|WC_Product_Attribute> $attributes
         * @phpstan-return array<string|WC_Product_Attribute>
         */
        public static function maybe_translate_attributes($attributes, $lang)
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
         * @param string[] $excludes Query vars excluded from the language filter.
         * @param WP_Query $query    WP Query object.
         * @return string[]
         */
        public function fix_on_sale_products_block_query($excludes, $query)
        {
        }
        /**
         * Temporarily stores data related to a product currently being saved.
         * The aim is to use this data to identify the corresponding arguments of the `get_terms()` used in
         * `\Automattic\WooCommerce\Internal\ProductAttributesLookup\LookupDataStore::get_term_ids_by_slug_cache()`, and add
         * the product's language to it.
         * Hooked to `woocommerce_before_product_object_save`.
         *
         * @since 1.8
         * @see PLLWC_Products::get_terms_args()
         *
         * @param WC_Product|int $product A product being saved.
         * @return void
         */
        public function store_product_data($product)
        {
        }
        /**
         * Filters the product attributes per language.
         * The target is the `get_terms()` used in `LookupDataStore::get_term_ids_by_slug_cache()`.
         * Hooked to `get_terms_args`.
         *
         * @since 1.8
         * @see \Automattic\WooCommerce\Internal\ProductAttributesLookup\LookupDataStore::get_term_ids_by_slug_cache()
         *
         * @param array $args Arguments passed to WP_Term_Query.
         * @return array Modified arguments.
         */
        public function get_terms_args($args)
        {
        }
        /**
         * Resets the data related to a product after it has been saved.
         * Hooked to `woocommerce_after_product_object_save`.
         *
         * @since 1.8
         * @see PLLWC_Products::store_product_data()
         *
         * @return void
         */
        public function reset_product_data()
        {
        }
        /**
         * Synchronizes product properties through all its translations.
         * The goal is also to trigger the product attributes lookup table update.
         * See https://github.com/woocommerce/woocommerce/blob/7.4.1/plugins/woocommerce/includes/abstracts/abstract-wc-product.php#L1428-L1431
         *
         * @since 1.8
         *
         * @param WC_Product $product The product that has been just saved.
         * @return void
         */
        public function copy_product($product)
        {
        }
        /**
         * Copies product properties in its translation after it is duplicated or synchronized and save changes.
         *
         * @since 1.8
         *
         * @param WC_Product $from The product we copy information from.
         * @param WC_Product $to   The target product.
         * @param string     $lang Language of the target product.
         * @return int The id of the target product.
         */
        public function copy_product_props($from, $to, $lang)
        {
        }
        /**
         * Synchronizes product properties in its translation after it is duplicated or synchronized.
         *
         * @since 1.8
         *
         * @param int    $from Id of the product from which we copy informations.
         * @param int    $to   Id of the target.
         * @param string $lang Language of the target post.
         * @return void
         */
        public function synchronize_product($from, $to, $lang)
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
         * @var PLLWC_REST_Product
         */
        public $product;
        /**
         * @var PLLWC_REST_Order
         */
        public $order;
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
         *
         * @return void
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
         * Order language data store.
         *
         * @var PLLWC_Order_Language_CPT
         */
        protected $data_store;
        /**
         * Constructor.
         *
         * @since 1.1
         */
        public function __construct()
        {
        }
        /**
         * Adds a `lang` entry to the given array, depending on the language requested in the REST API.
         * This is used to filter the orders by language in WC's REST route V3 (`/wc/v3/orders`).
         * Hooked to `woocommerce_rest_{$post_type}_object_query`.
         *
         * @see WC_REST_CRUD_Controller::prepare_objects_query()
         *
         * @since 1.9
         *
         * @param array           $args    Key value array of query var to query value.
         * @param WP_REST_Request $request The request used.
         * @return array
         *
         * @phpstan-param WP_REST_Request<array{lang?: string}> $request
         */
        public function add_language_query_arg_in_rest($args, $request)
        {
        }
        /**
         * Returns the object language.
         *
         * @since 1.1
         *
         * @param array $object Order array.
         * @return string|false
         */
        public function get_language($object)
        {
        }
        /**
         * Sets the object language.
         *
         * @since 1.1
         *
         * @param string   $lang   Language code.
         * @param WC_Order $object Instance of WC_Order.
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
         * Product language data store.
         *
         * @var PLLWC_Product_Language_CPT
         */
        protected $data_store;
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
         * @return string|false
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
         * @param int[]  $translations Array of translations with language codes as keys and object ids as values.
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
         * @var PLLWC_Product_Language_CPT
         */
        protected $data_store;
        /**
         * Constructor.
         *
         * @since 0.1
         *
         * @return void
         */
        public function __construct()
        {
        }
        /**
         * Synchronize the stock across the product translations.
         *
         * @since 1.2
         *
         * @param string $sql        SQL query used to update the product stock.
         * @param int    $product_id Product id.
         * @return string Modified SQL query.
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
         * @return void
         */
        public function updated_product_stock($id)
        {
        }
        /**
         * Synchronizes reserve_stock_for_product accross translations
         *
         * @since 1.5
         * @since 1.8 Removed the 3rd parameter.
         *
         * @param string $query      The query to get the reserved stock of a product.
         * @param int    $product_id Product ID.
         * @return string
         */
        public function query_for_reserved_stock($query, $product_id)
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
         * @param string             $prop    Property name.
         * @param WC_Payment_Gateway $gateway WC_Payment_Gateway object.
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
         * @param WC_Settings_API[] $objects          Array of objects having properties to translate.
         * @param callable          $is_translated_cb Function testing if a property should be translated.
         * @param callable          $is_multiline_cb  Function testing if the input field should be multiline (default to false).
         * @return void
         */
        protected function register_sub_options($objects, $is_translated_cb, $is_multiline_cb = '__return_false')
        {
        }
        /**
         * Registers strings
         *
         * @since 0.1
         *
         * @return void
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
         *
         * @return void
         */
        public function translate_strings()
        {
        }
        /**
         * Translates emails subject, heading and footer.
         *
         * @since 0.1
         *
         * @return void
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
         * @param string   $value  String to translate.
         * @param WC_Email $email  Instance of WC_Email, not used.
         * @param string   $_value Same as $value, not used.
         * @param string   $key    Option name.
         * @return string
         */
        public function translate_email_option($value, $email, $_value, $key)
        {
        }
        /**
         * Translates the gateway instructions in thankyou page or email.
         *
         * @since 0.1
         *
         * @return void
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
         * @param WC_Shipping_Rate[] $rates Array of WC_Shipping_Rate objects.
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
         * @return void
         */
        public function reset_shipping_language()
        {
        }
        /**
         * Translates the attributes labels.
         *
         * @since 0.1
         *
         * @param stdClass[] $attribute_taxonomies Attribute taxonomies.
         * @return stdClass[]
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
         * @param string            $label   Attribute label.
         * @param string            $name    Taxonomy name, not used.
         * @param WC_Product|string $product Product data or empty string.
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
        /**
         * Translates the HTML link code inside the block depending on the block version.
         *
         * @since 1.9.4
         *
         * @param array  $innerblock The block to search into and to modify.
         * @param string $link       The translated link for replacing.
         * @return void
         */
        private function translate_button_link(array &$innerblock, string $link)
        {
        }
        /**
         * Translates one version of the HTML link code inside the block.
         *
         * @since 1.9.4
         *
         * @param array  $innerblock The block to search into and to modify.
         * @param string $link       The translated link for replacing.
         * @return void
         */
        private function translate_link(array &$innerblock, string $link)
        {
        }
    }
    /**
     * @package Polylang-WC
     */
    /**
     * Decorates the Product variation data store.
     *
     * @since 1.6
     */
    class PLLWC_Variation_Data_Store_CPT implements \WC_Object_Data_Store_Interface
    {
        /**
         * The decorated product variation data store.
         *
         * @var WC_Object_Data_Store_Interface
         */
        protected $variation_data_store;
        /**
         * Product language data store.
         *
         * @var PLLWC_Product_Language_CPT
         */
        protected $language_data_store;
        /**
         * Language used to filter attributes when reading a product variation.
         *
         * @var string|false
         */
        private $attribute_filter_lang = \false;
        /**
         * Replaces the product variation data store used by WooCommerce by our own.
         *
         * @since 1.6
         *
         * @return void
         */
        public static function init()
        {
        }
        /**
         * Decorates the Product variation data store.
         *
         * @since 1.6
         *
         * @param string|WC_Object_Data_Store_Interface $store A data store object or class name.
         * @return PLLWC_Variation_Data_Store_CPT
         */
        public static function filter_data_store($store)
        {
        }
        /**
         * Constructor.
         *
         * @since 1.6
         *
         * @param WC_Object_Data_Store_Interface $store A data store object to decorate.
         */
        public function __construct($store)
        {
        }
        /**
         * Reads a product from the database and sets its data.
         *
         * @since 1.6
         *
         * @param WC_Product_Variation $product Product object.
         * @return void
         */
        public function read(&$product)
        {
        }
        /**
         * Method to create a new product in the database.
         *
         * @since 1.6
         *
         * @param WC_Product $product Product object.
         * @return void
         */
        public function create(&$product)
        {
        }
        /**
         * Method to update a product in the database.
         *
         * @since 1.6
         *
         * @param WC_Product $product Product object.
         * @return void
         */
        public function update(&$product)
        {
        }
        /**
         * Method to delete a product from the database.
         *
         * @since 1.6
         *
         * @param WC_Product $product Product object.
         * @param array      $args    Array of args to pass to the delete method.
         * @return void
         */
        public function delete(&$product, $args = array())
        {
        }
        /**
         * Returns an array of meta for an object.
         *
         * @since 1.6
         *
         * @param WC_Data $object WC_Data object.
         * @return array
         */
        public function read_meta(&$object)
        {
        }
        /**
         * Deletes meta based on meta ID.
         *
         * @since 1.6
         * @param WC_Data  $object WC_Data object.
         * @param stdClass $meta  (containing at least ->id).
         */
        public function delete_meta(&$object, $meta)
        {
        }
        /**
         * Add new piece of meta.
         *
         * @since 1.6
         *
         * @param WC_Data  $object WC_Data object.
         * @param stdClass $meta (containing ->key and ->value).
         * @return int meta ID
         */
        public function add_meta(&$object, $meta)
        {
        }
        /**
         * Update meta.
         *
         * @since 1.6
         *
         * @param WC_Data  $object WC_Data object.
         * @param stdClass $meta (containing ->id, ->key and ->value).
         * @return void
         */
        public function update_meta(&$object, $meta)
        {
        }
        /**
         * Helper method to filter internal meta keys from all meta data rows for the object.
         *
         * @since 1.6.1
         *
         * @param WC_Data $object        WC_Data object.
         * @param array   $raw_meta_data Array of std object of meta data to be filtered.
         * @return mixed|void
         */
        public function filter_raw_meta_data(&$object, $raw_meta_data)
        {
        }
        /**
         * Delegates the method calls to the decorated object.
         *
         * @since 1.6
         *
         * @param string $method Method name.
         * @param array  $args   Method arguments.
         * @return mixed
         */
        public function __call($method, $args)
        {
        }
        /**
         * Ensure that the attribute term retrieved with `get_term_by()` slug is in
         * the product language when generating the product variation title and summary.
         *
         * @since 1.6
         *
         * @param array $args The terms query arguments.
         * @return array
         */
        public function get_terms_args($args)
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
         * @return void
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
         * @return void
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
        /**
         * Allows crossdomain cookies.
         *
         * Requires WC 6.7+, PHP 7.3+ and SSL as the cookie must be secure.
         *
         * @since 1.7
         *
         * @param array  $options Cookie options.
         * @param string $name    Cookie name.
         * @return array
         */
        public function set_cookie_options($options, $name)
        {
        }
    }
    /**
     * Class to manage WooCommerce product export with Polylang Pro XLIFF Exporter.
     *
     * @since 1.8
     */
    class PLLWC_Translation_Export
    {
        /**
         * Adds hooks.
         *
         * @since 1.8
         *
         * @return self
         */
        public function init()
        {
        }
        /**
         * Adds product variations to the exported posts.
         *
         * @since 1.8
         *
         * @param int[] $linked_ids Post ids attached to a post.
         * @param int   $post_id    The post id the post we get other post from.
         * @return int[]
         */
        public function collect_variations($linked_ids, $post_id)
        {
        }
        /**
         * Exports translatable product metas.
         *
         * @since 1.8
         *
         * @param array $keys A recursive array containing nested meta sub keys to translate.
         * @param int   $from ID of the source object.
         * @return array Metas to export.
         */
        public function export_product_metas($keys, $from)
        {
        }
        /**
         * Remove variation title and excerpt from post fields to export.
         *
         * @since 1.9
         *
         * @param string[] $allowed_fields List of post fields we want to export.
         * @param WP_Post  $post           Post object.
         * @return string[] List of post fields we want to export.
         */
        public function remove_fields_for_variations($allowed_fields, $post)
        {
        }
    }
    /**
     * Class to manage WooCommerce product import with Polylang Pro XLIFF Importer.
     *
     * @since 1.8
     */
    class PLLWC_Translation_Import
    {
        /**
         * Adds hooks.
         *
         * @since 1.8
         *
         * @return self
         */
        public function init()
        {
        }
        /**
         * Processes imported posts to translate parent ID for variation products.
         * Not done by Polylang Pro because `WC_Product_Variation` and `WC_Product_Variable` don't share the same post type.
         *
         * @since 1.8
         *
         * @param PLL_Language $target_language      The targeted language for import.
         * @param array        $imported_objects_ids The imported object ids of the import.
         * @return void
         */
        public function process_variations($target_language, $imported_objects_ids)
        {
        }
        /**
         * Sets the `post_status` to `publish` for product variations, otherwise
         * the variation is not accessible in backoffice, even if the parent is a draft.
         *
         * @since 1.8
         *
         * @param array $data An array of slashed, sanitized, and processed post data.
         * @return array Filtered post data.
         */
        public function set_variations_post_status($data)
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
         * Stores if the locale has been switched.
         *
         * @var bool
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
         * Add Bookings e-mails in the translation mechanism.
         *
         * @since 1.6
         *
         * @param string[] $actions Array of actions used to send emails.
         * @return string[]
         */
        public function filter_order_email_actions($actions)
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
         *
         * @return void
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
         * @return void
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
         *
         * @return void
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
         * @return void
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
         *
         * @return void
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
         * @return void
         */
        public function new_booking($booking_id)
        {
        }
        /**
         * Assigns the right booking language.
         * In case a visitor adds the product to cart in a language
         * and then switches the language before he completes the checkout.
         * Hooked to the action 'woocommerce_new_order_item'.
         *
         * @since 1.9
         *
         * @param int                 $item_id     An order item ID.
         * @param WC_Order_Item|false $order_item  Order item object.
         * @return int
         */
        public function set_booking_language_at_checkout($item_id, $order_item)
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
         * @return int Translated bookable post.
         */
        protected function copy_bookable_post($post, $to, $lang)
        {
        }
        /**
         * Copies or synchronizes resources.
         * Hooked to the action 'pllwc_copy_product'.
         *
         * @since 0.6
         *
         * @param int    $from ID of the product from which we copy information.
         * @param int    $to   ID of the product to which we paste information.
         * @param string $lang Language slug.
         * @return void
         */
        public function copy_resources($from, $to, $lang)
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
         * @return void
         */
        public function copy_persons($from, $to, $lang)
        {
        }
        /**
         * Removes resources in translated products when a resource is removed in Ajax.
         * Hooked to the action 'wp_ajax_woocommerce_remove_bookable_resource'.
         *
         * @since 0.6
         *
         * @return void
         */
        public function remove_bookable_resource()
        {
        }
        /**
         * Unlinks the person type in translated products when a person type is unlink in Ajax.
         * Hooked to the action 'wp_ajax_woocommerce_unlink_bookable_person'.
         *
         * @since 0.6
         *
         * @return void
         */
        public function unlink_bookable_person()
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
         * @return void
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
         * @param int     $post_id      Post id.
         * @param WP_Post $post         Post object.
         * @param array   $translations Post translations.
         * @return void
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
         * @return mixed
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
         * @param string[] $metas List of custom fields names.
         * @return string[]
         */
        public function copy_post_metas($metas)
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
         * Adds the bookings metas to export.
         *
         * @since 1.8
         *
         * @param array $metas An array of post metas to export.
         * @return array
         */
        public function get_metas_to_translate($metas)
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
         * @param WP_Query $query WP_Query object.
         * @return void
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
         * @param WP_Query $query WP_Query object.
         * @return void
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
         * @param string[] $metas List of custom fields names.
         * @return string[]
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
         * @param int    $from  Source product id.
         * @param int    $to    Target product id.
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
         * @return void
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
         * @param array $contents Cart contents.
         * @return array
         */
        public function translate_cart_contents($contents)
        {
        }
        /**
         * Allows Composite Products to filter the cart prices after the cart has been translated.
         * Hooked to the action 'woocommerce_cart_loaded_from_session'.
         *
         * @since 1.3
         *
         * @return void
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
         * @param string[] $types List of post type names for which Polylang manages language and translations.
         * @param bool     $hide  True when displaying the list in Polylang settings.
         * @return string[] List of post type names for which Polylang manages language and translations.
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
         * @param string[] $taxonomies List of taxonomies to Synchronize.
         * @return string[] Modified list of taxonomies.
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
         * @param string[] $keys List of custom fields names.
         * @param bool     $sync True if it is synchronization, false if it is a copy.
         * @param int      $from Id of the post from which we copy informations.
         * @return string[]
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
         * @param WP_Query $query WP_Query object.
         * @return void
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
         * @return array
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
         * @return void
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
     * Manages the compatibility with:
     *
     * @see https://wordpress.org/plugins/woocommerce-germanized/ WooCommerce Germanized, version tested: 3.10.2.
     *
     * This plugin already includes a compatibility with Polylang, not specifically PLLWC.
     * This class adds a quick fix for emails.
     *
     * @since 1.6.3
     */
    class PLLWC_Germanized
    {
        /**
         * Constructor.
         *
         * @since 1.6.3
         */
        public function __construct()
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
        /**
         * Sets global `$post_id` to avoid fatal error with Min/Max Quantities.
         * Even if this global is not the official `$post_ID`.
         *
         * @see https://github.com/polylang/polylang-wc/issues/627.
         *
         * @since 1.8
         *
         * @param string  $post_type Post type.
         * @param WP_Post $post      Current post object.
         * @return void
         */
        public function set_global_post_id($post_type, $post)
        {
        }
    }
    /**
     * @package Polylang-WC
     */
    /**
     * Manages the compatibility with Mix and Match Products.
     * Version tested: 2.0.0.
     *
     * It handles the synchronization of products metas
     * and the translation of the cart when the language is switched.
     *
     * @since 1.1
     * @since 1.7 Added support for version 2.0+. Thanks @helgatheviking for bringing it.
     */
    class PLLWC_Mix_Match
    {
        /**
         * Using 2.0-style MNM tables.
         *
         * @var bool
         */
        private $has_custom_db;
        /**
         * An array of translated cart keys.
         *
         * @var array
         */
        private $translated_cart_keys = array();
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
         * @param string[] $metas List of custom fields names.
         * @return string[]
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
         * @param  mixed  $value Meta value.
         * @param  string $key   Meta key.
         * @param  string $lang  Language of target.
         * @return mixed
         */
        public function translate_product_meta($value, $key, $lang)
        {
        }
        /**
         * Copies or synchronizes the bundled items.
         * Hooked to the action 'pllwc_copy_product'.
         *
         * @since 1.7
         *
         * @param int    $from Id of the post from which we copy informations.
         * @param int    $to   Id of the post to which we paste informations.
         * @param string $lang language slug.
         * @return void
         */
        public function copy_product($from, $to, $lang)
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
         * Translates the config in the cart item.
         *
         * @since 1.7
         *
         * @param  array  $config Config.
         * @param  string $lang   Language code.
         * @return array<int<1,max>,array{
         *     product_id: int<1,max>,
         *     variation_id?: int<1,max>,
         *     variation?: array<string,string>
         * }>
         */
        protected function translate_config($config, $lang)
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
         * @return void
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
         * @param array $contents Cart contents.
         * @return array
         */
        public function translate_cart_contents($contents)
        {
        }
        /**
         * Allows WooCommerce Mix and Match to filter the cart prices after the cart has been translated.
         * We need to do it here as WooCommerce Mix and Match directly access to WC()->cart->cart_contents.
         * Hooked to the action 'woocommerce_cart_loaded_from_session'.
         *
         * @since 1.1
         *
         * @return void
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
         * @var PLLWC_Bookings
         */
        public $bookings;
        /**
         * @var PLLWC_Product_Bundles
         */
        public $bundles;
        /**
         * @var PLLWC_Composite_Products
         */
        public $composite;
        /**
         * @var PLLWC_Dynamic_Pricing
         */
        public $dynamic_pricing;
        /**
         * @var PLLWC_Free_Gift_Coupons
         */
        public $fgc;
        /**
         * @var PLLWC_Follow_Up_Emails
         */
        public $fue;
        /**
         * @var PLLWC_Min_Max_Quantities
         */
        public $min_max;
        /**
         * @var PLLWC_Mix_Match
         */
        public $mix_match;
        /**
         * @var PLLWC_Shipment_Tracking
         */
        public $shipment_tracking;
        /**
         * @var PLLWC_Stock_Manager
         */
        public $stock_manager;
        /**
         * @var PLLWC_Stripe
         */
        public $stripe;
        /**
         * @var PLLWC_Subscriptions
         */
        public $subscriptions;
        /**
         * @var PLLWC_Swatches
         */
        public $swatches;
        /**
         * @var PLLWC_Table_Rate_Shipping
         */
        public $table_rate_shipping;
        /**
         * @var PLLWC_WCFD
         */
        public $wcfd;
        /**
         * @var PLLWC_Yith_WCAS
         */
        public $yith_wcas;
        /**
         * @var PLLWC_Brands
         */
        public $brands;
        /**
         * @var PLLWC_Germanized
         */
        public $germanized;
        /**
         * Singleton.
         *
         * @var PLLWC_Plugins_Compat
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
         *
         * @return void
         */
        public function init()
        {
        }
        /**
         * Initializes the compatibility with the plugin WooCommerce Brands.
         *
         * @since 1.6
         *
         * @return void
         */
        public function init_wc_brand()
        {
        }
        /**
         * Initializes the compatibility with the plugin Checkout Field Editor for WooCommerce.
         * The first constant was used for versions < 1.3.6.
         *
         * @since 1.3
         *
         * @return void
         */
        public function maybe_init_wcfd()
        {
        }
        /**
         * Initializes the compatibility with the plugin WooCommerce Free Gift Coupons.
         *
         * @since 1.4
         *
         * @return void
         */
        public function maybe_init_fgc()
        {
        }
        /**
         * Initializes the compatibility with the plugin WooCommerce Mix and Match Products.
         *
         * @since 1.7
         */
        public function maybe_init_mnm()
        {
        }
        /**
         * Accesses to the single instance of the class.
         *
         * @since 0.3.2
         *
         * @return PLLWC_Plugins_Compat
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
         * An array of cart item stamp.
         *
         * @var array
         */
        private $stamps;
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
         * @return void
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
         * @param string[] $metas List of custom fields names.
         * @return string[]
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
         * @return void
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
         * @param array $contents Cart contents.
         * @return array
         */
        public function translate_cart_contents($contents)
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
         *
         * @return void
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
         *
         * @return void
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
     *
     * @see https://wordpress.org/plugins/woocommerce-stock-manager/ WooCommerce Stock Manager, version tested: 1.2.6.
     * 
     * @see https://woocommerce.com/products/bulk-stock-management/ WooCommerce Bulk Stock Management, version tested: 2.2.9.
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
         * @param array $qvars Query vars.
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
         * @param array $qvars Query vars.
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
         * @param WP_Query $query WP_Query object.
         * @return void
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
         * Add Subscription e-mails in the translation mechanism.
         *
         * @since 1.6
         *
         * @param string[] $actions Array of actions used to send emails.
         * @return string[]
         */
        public function filter_order_email_actions($actions)
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
         * Hooked to the filter 'pllwc_get_order_types'.
         *
         * @since 0.4
         *
         * @param array $types List of post type names for which Polylang manages language and translations.
         * @return array List of post type names for which Polylang manages language and translations.
         */
        public function translate_types($types)
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
         * Reloads Subscription translations in emails.
         * Hooked to the action 'change_locale'.
         *
         * @since 1.0
         *
         * @return void
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
         * @param WP_Query $query WP_Query object.
         * @return void
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
         * @return void
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
         *
         * @return void
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
     * Manages the compatibility with WooCommerce Brands.
     * Version tested: 1.6.41
     *
     * @since  1.6
     *
     * @link https://woocommerce.com/fr-fr/products/brands/
     */
    class PLLWC_Brands
    {
        /**
         * PLLWC_Brands constructor.
         *
         * @since 1.6
         */
        public function __construct()
        {
        }
        /**
         * Synchronizes the thumbnail term meta.
         * Hooked to the filter 'pll_copy_term_metas'.
         *
         * @since 1.6
         *
         * @param array $metas List of custom fields names.
         * @param bool  $sync  True if it is synchronization, false if it is a copy.
         * @param int   $from  ID of the product from which we copy informations.
         * @return array
         */
        public function copy_term_metas($metas, $sync, $from)
        {
        }
        /**
         * Add Product Brand taxonomy to list of translated taxonomies.
         *
         * @since 1.6
         *
         * @param string[] $taxonomies List of taxonomy names.
         * @param bool     $is_settings True when displaying the list of custom taxonomies in Polylang settings.
         * @return string[] List of taxonomy names.
         */
        public function add_taxonomy($taxonomies, $is_settings)
        {
        }
        /**
         * Replaces the thumbnail field in the new term form, prefilled for new translations.
         *
         * @since 1.6
         *
         * @return void
         */
        public function add_product_brand_fields()
        {
        }
        /**
         * Filters the media list when adding an image to a product brand.
         *
         * @since 1.7.2
         *
         * @return void
         */
        public function admin_enqueue_scripts()
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
         *
         * @return void
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
         * @var PLLWC_Admin_Menus
         */
        public $admin_menus;
        /**
         * @var PLLWC_Admin_Products
         */
        public $admin_products;
        /**
         * @var PLLWC_Admin_Product_Duplicate
         */
        public $admin_product_duplicate;
        /**
         * @var PLLWC_Admin_Orders
         */
        public $admin_orders;
        /**
         * @var PLLWC_Admin_Reports
         */
        public $admin_reports;
        /**
         * @var PLLWC_Admin_Status_Reports
         */
        public $admin_status_reports;
        /**
         * @var PLLWC_Admin_Taxonomies
         */
        public $admin_taxonomies;
        /**
         * @var PLLWC_Admin_WC_Install
         */
        public $admin_wc_install;
        /**
         * @var PLLWC_Frontend_Cart
         */
        public $cart;
        /**
         * @var PLLWC_Coupons
         */
        public $coupons;
        /**
         * @var PLLWC_Xdata
         */
        public $data;
        /**
         * @var PLLWC_Emails
         */
        public $emails;
        /**
         * @var PLLWC_Product_Export
         */
        public $product_export;
        /**
         * @var PLLWC_Frontend
         */
        public $frontend;
        /**
         * @var PLLWC_Product_Import
         */
        public $product_import;
        /**
         * @var PLLWC_Links
         */
        public $links;
        /**
         * @var PLLWC_Frontend_Account
         */
        public $my_account;
        /**
         * @var PLLWC_Post_Types
         */
        public $post_types;
        /**
         * @var PLLWC_Products
         */
        public $products;
        /**
         * @var PLLWC_REST_API
         */
        public $rest_api;
        /**
         * @var PLLWC_Admin_Site_Health
         */
        public $site_health;
        /**
         * @var PLLWC_Stock
         */
        public $stock;
        /**
         * @var PLLWC_Strings
         */
        public $strings;
        /**
         * @var PLLWC_Sync_Content
         */
        public $sync_content;
        /**
         * @var PLLWC_Frontend_WC_Pages
         */
        public $wc_pages;
        /**
         * @var PLLWC_Wizard
         */
        public $wizard;
        /**
         * @var PLLWC_Translation_Export|null
         */
        public $translation_export;
        /**
         * @var PLLWC_Translation_Import|null
         */
        public $translation_import;
        /**
         * @var PLLWC_HPOS_Orders_Query|null
         */
        public $hpos_orders_query;
        /**
         * @var PLLWC_Feature|null
         */
        public $hpos_feature;
        /**
         * Singleton.
         *
         * @var Polylang_Woocommerce
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
         * @return Polylang_Woocommerce
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
         *
         * @return void
         */
        public function init()
        {
        }
        /**
         * Displays an admin notice if Polylang is not at the right version.
         *
         * @since 0.1
         *
         * @return void
         */
        public function admin_notices()
        {
        }
        /**
         * Manages updates of the plugin.
         *
         * @since 0.9.3
         *
         * @return void
         */
        public function maybe_upgrade()
        {
        }
        /**
         * Manage plugin set up.
         *
         * @since 1.5.7
         *
         * @return void
         */
        public function maybe_install()
        {
        }
        /**
         * Clear all transients cache for translations when WC clears a product transient.
         *
         * @since 0.4.5
         *
         * @param int $product_id Product ID.
         * @return void
         */
        public function delete_product_transients($product_id)
        {
        }
        /**
         * Enqueues the stylesheet.
         *
         * @since 0.1
         *
         * @return void
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
         * @return void
         */
        public static function activated_plugin($plugin_name, $network_wide)
        {
        }
        /**
         * Declares Polylang For WooCommerce compatibility with WooCommerce features.
         *
         * @since 1.9.3
         *
         * @return void
         */
        public function declare_features_compatibility()
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
    class ComposerAutoloaderInitec585ce15135e1d365a7efee4ca37621
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
    class ComposerStaticInitec585ce15135e1d365a7efee4ca37621
    {
        public static $classMap = array('Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php', 'PLLWC_Admin' => __DIR__ . '/../..' . '/admin/admin.php', 'PLLWC_Admin_Coupons' => __DIR__ . '/../..' . '/admin/admin-coupons.php', 'PLLWC_Admin_Menus' => __DIR__ . '/../..' . '/admin/admin-menus.php', 'PLLWC_Admin_Orders' => __DIR__ . '/../..' . '/admin/admin-orders.php', 'PLLWC_Admin_Orders_HPOS' => __DIR__ . '/../..' . '/admin/admin-orders-hpos.php', 'PLLWC_Admin_Orders_Legacy' => __DIR__ . '/../..' . '/admin/admin-orders-legacy.php', 'PLLWC_Admin_Product_Duplicate' => __DIR__ . '/../..' . '/admin/admin-product-duplicate.php', 'PLLWC_Admin_Products' => __DIR__ . '/../..' . '/admin/admin-products.php', 'PLLWC_Admin_Reports' => __DIR__ . '/../..' . '/admin/admin-reports.php', 'PLLWC_Admin_Site_Health' => __DIR__ . '/../..' . '/admin/admin-site-health.php', 'PLLWC_Admin_Status_Reports' => __DIR__ . '/../..' . '/admin/admin-status-reports.php', 'PLLWC_Admin_Taxonomies' => __DIR__ . '/../..' . '/admin/admin-taxonomies.php', 'PLLWC_Admin_WC_Install' => __DIR__ . '/../..' . '/admin/admin-wc-install.php', 'PLLWC_Bookings' => __DIR__ . '/../..' . '/plugins/bookings.php', 'PLLWC_Brands' => __DIR__ . '/../..' . '/plugins/wc-brands.php', 'PLLWC_Composite_Products' => __DIR__ . '/../..' . '/plugins/composite-products.php', 'PLLWC_Countries' => __DIR__ . '/../..' . '/include/countries.php', 'PLLWC_Coupons' => __DIR__ . '/../..' . '/include/coupons.php', 'PLLWC_Data_Store' => __DIR__ . '/../..' . '/include/data-store.php', 'PLLWC_Dynamic_Pricing' => __DIR__ . '/../..' . '/plugins/dynamic-pricing.php', 'PLLWC_Emails' => __DIR__ . '/../..' . '/include/emails.php', 'PLLWC_Feature' => __DIR__ . '/../..' . '/include/feature.php', 'PLLWC_Filter_WC_Pages' => __DIR__ . '/../..' . '/include/filter-wc-pages.php', 'PLLWC_Follow_Up_Emails' => __DIR__ . '/../..' . '/plugins/follow-up-emails.php', 'PLLWC_Free_Gift_Coupons' => __DIR__ . '/../..' . '/plugins/free-gift-coupons.php', 'PLLWC_Frontend' => __DIR__ . '/../..' . '/frontend/frontend.php', 'PLLWC_Frontend_Account' => __DIR__ . '/../..' . '/frontend/frontend-account.php', 'PLLWC_Frontend_Cart' => __DIR__ . '/../..' . '/frontend/frontend-cart.php', 'PLLWC_Frontend_WC_Pages' => __DIR__ . '/../..' . '/frontend/frontend-wc-pages.php', 'PLLWC_Germanized' => __DIR__ . '/../..' . '/plugins/germanized.php', 'PLLWC_HPOS_Orders_Query' => __DIR__ . '/../..' . '/include/hpos-orders-query.php', 'PLLWC_Install' => __DIR__ . '/../..' . '/include/install.php', 'PLLWC_Links' => __DIR__ . '/../..' . '/include/links.php', 'PLLWC_Links_Pro' => __DIR__ . '/../..' . '/include/links-pro.php', 'PLLWC_Min_Max_Quantities' => __DIR__ . '/../..' . '/plugins/min-max-quantities.php', 'PLLWC_Mix_Match' => __DIR__ . '/../..' . '/plugins/mix-match.php', 'PLLWC_Object_Language' => __DIR__ . '/../..' . '/include/object-language.php', 'PLLWC_Order_Language_CPT' => __DIR__ . '/../..' . '/include/order-language-cpt.php', 'PLLWC_Plugins_Compat' => __DIR__ . '/../..' . '/plugins/plugins-compat.php', 'PLLWC_Post_Types' => __DIR__ . '/../..' . '/include/post-types.php', 'PLLWC_Product_Bundles' => __DIR__ . '/../..' . '/plugins/product-bundles.php', 'PLLWC_Product_Data_Store_CPT' => __DIR__ . '/../..' . '/include/product-data-store-cpt.php', 'PLLWC_Product_Export' => __DIR__ . '/../..' . '/include/export.php', 'PLLWC_Product_Import' => __DIR__ . '/../..' . '/include/import.php', 'PLLWC_Product_Language_CPT' => __DIR__ . '/../..' . '/include/product-language-cpt.php', 'PLLWC_Products' => __DIR__ . '/../..' . '/include/products.php', 'PLLWC_REST_API' => __DIR__ . '/../..' . '/include/rest-api.php', 'PLLWC_REST_Order' => __DIR__ . '/../..' . '/include/rest-order.php', 'PLLWC_REST_Product' => __DIR__ . '/../..' . '/include/rest-product.php', 'PLLWC_Shipment_Tracking' => __DIR__ . '/../..' . '/plugins/shipment-tracking.php', 'PLLWC_Stock' => __DIR__ . '/../..' . '/include/stock.php', 'PLLWC_Stock_Manager' => __DIR__ . '/../..' . '/plugins/stock-manager.php', 'PLLWC_Strings' => __DIR__ . '/../..' . '/include/strings.php', 'PLLWC_Stripe' => __DIR__ . '/../..' . '/plugins/stripe.php', 'PLLWC_Subscriptions' => __DIR__ . '/../..' . '/plugins/subscriptions.php', 'PLLWC_Swatches' => __DIR__ . '/../..' . '/plugins/swatches.php', 'PLLWC_Sync_Content' => __DIR__ . '/../..' . '/include/sync-content.php', 'PLLWC_Table_Rate_Shipping' => __DIR__ . '/../..' . '/plugins/table-rate-shipping.php', 'PLLWC_Translated_Object_Language' => __DIR__ . '/../..' . '/include/translated-object-language.php', 'PLLWC_Translation_Export' => __DIR__ . '/../..' . '/modules/translation-import-export/export.php', 'PLLWC_Translation_Import' => __DIR__ . '/../..' . '/modules/translation-import-export/import.php', 'PLLWC_Variation_Data_Store_CPT' => __DIR__ . '/../..' . '/include/variation-data-store-cpt.php', 'PLLWC_WCFD' => __DIR__ . '/../..' . '/plugins/wcfd.php', 'PLLWC_Wizard' => __DIR__ . '/../..' . '/admin/wizard.php', 'PLLWC_Xdata' => __DIR__ . '/../..' . '/include/xdata.php', 'PLLWC_Xdata_Session_Manager' => __DIR__ . '/../..' . '/include/xdata-session-manager.php', 'PLLWC_Yith_WCAS' => __DIR__ . '/../..' . '/plugins/yith-wcas.php');
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
     * @param string $tag      Hook name.
     * @param array  $method   [0] => class name, [1] => method name.
     * @param int    $priority Hook priority, defaults to 10.
     * @return void
     */
    function pll_remove_anonymous_object_filter($tag, $method, $priority = 10)
    {
    }
    /**
     * Get an anonymous object from one of its known filter.
     *
     * @see pll_remove_anonymous_object_filter()
     *
     * @since 0.1
     *
     * @param string $tag      Hook name.
     * @param array  $method   [0] => class name, [1] => method name.
     * @param int    $priority Hook priority, defaults to 10.
     * @return object|null
     */
    function pll_get_anonymous_object_from_filter($tag, $method, $priority = 10)
    {
    }
    /**
     * Returns the Polylang for WooCommerce instance.
     *
     * @since 0.1
     *
     * @return Polylang_Woocommerce
     */
    function PLLWC()
    {
    }
}