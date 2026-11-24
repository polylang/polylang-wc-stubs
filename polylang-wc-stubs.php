<?php

namespace WP_Syntex\Polylang_WC\Updater {
    /**
     * Allows plugins to use their own update API.
     *
     * @author Easy Digital Downloads
     * @version 1.9.4
     */
    class EDD_SL_Plugin_Updater
    {
        /**
         * Class constructor.
         *
         * @uses plugin_basename()
         * @uses hook()
         *
         * @param string  $_api_url     The URL pointing to the custom API endpoint.
         * @param string  $_plugin_file Path to the plugin file.
         * @param array   $_api_data    Optional data to send with API calls.
         */
        public function __construct($_api_url, $_plugin_file, $_api_data = null)
        {
        }
        /**
         * Set up WordPress filters to hook into WP's update process.
         *
         * @uses add_filter()
         *
         * @return void
         */
        public function init()
        {
        }
        /**
         * Check for Updates at the defined API endpoint and modify the update array.
         *
         * This function dives into the update API just when WordPress creates its update array,
         * then adds a custom API call and injects the custom plugin data retrieved from the API.
         * It is reassembled from parts of the native WordPress plugin update code.
         * See wp-includes/update.php line 121 for the original wp_update_plugins() function.
         *
         * @uses api_request()
         *
         * @param array   $_transient_data Update array build by WordPress.
         * @return array Modified update array with custom plugin data.
         */
        public function check_update($_transient_data)
        {
        }
        /**
         * Get repo API data from store.
         * Save to cache.
         *
         * @return \stdClass
         */
        public function get_repo_api_data()
        {
        }
        /**
         * Show the update notification on multisite subsites.
         *
         * @param string  $file
         * @param array   $plugin
         */
        public function show_update_notification($file, $plugin)
        {
        }
        /**
         * Updates information on the "View version x.x details" page with custom data.
         *
         * @uses api_request()
         *
         * @param mixed   $_data
         * @param string  $_action
         * @param object  $_args
         * @return object $_data
         */
        public function plugins_api_filter($_data, $_action = '', $_args = null)
        {
        }
        /**
         * Disable SSL verification in order to prevent download update failures
         *
         * @param array   $args
         * @param string  $url
         * @return object $array
         */
        public function http_request_args($args, $url)
        {
        }
        /**
         * If available, show the changelog for sites in a multisite install.
         */
        public function show_changelog()
        {
        }
        /**
         * Get the version info from the cache, if it exists.
         *
         * @param string $cache_key
         * @return object
         */
        public function get_cached_version_info($cache_key = '')
        {
        }
        /**
         * Adds the plugin version information to the database.
         *
         * @param string $value
         * @param string $cache_key
         */
        public function set_version_info_cache($value = '', $cache_key = '')
        {
        }
    }
    /**
     * A class to easily manage licenses for Polylang Pro and addons.
     *
     * @since 1.0
     */
    class License
    {
        /**
         * URL to Polylang's account page.
         *
         * @var string
         */
        public const ACCOUNT_URL = 'https://polylang.pro/my-account/';
        /**
         * Sanitized plugin name.
         *
         * @var string
         */
        public $id;
        /**
         * Plugin name.
         *
         * @var string
         */
        public $name;
        /**
         * License key.
         *
         * @var string
         */
        public $license_key;
        /**
         * License data, obtained from the API request.
         *
         * @var \stdClass|null
         */
        public $license_data;
        /**
         * Constructor.
         *
         * @since 1.0
         *
         * @param string $file      The plugin file.
         * @param string $item_name The plugin name.
         * @param string $version   The plugin version.
         */
        public function __construct(string $file, string $item_name, string $version)
        {
        }
        /**
         * Creates a new instance of the auto-updater.
         *
         * @since 1.0
         *
         * @return void
         */
        public function auto_updater(): void
        {
        }
        /**
         * Registers the licence in the Settings.
         * Hooked to `pll_settings_licenses`.
         *
         * @since 1.0
         *
         * @param License[] $items Array of objects allowing to manage a license.
         * @return License[]
         */
        public function settings($items)
        {
        }
        /**
         * Activates the license key.
         *
         * @since 1.0
         *
         * @param string $license_key Activation key.
         * @return self Updated License object.
         */
        public function activate_license(
            #[\SensitiveParameter]
            string $license_key
        ): self
        {
        }
        /**
         * Tries to activate a new key for this product without changing its local license state.
         *
         * A valid key is really activated on the store and linked to the site. The caller decides what to keep locally and
         * when to persist it.
         *
         * @since 2.0
         *
         * @param string $license_key Activation key.
         * @return \stdClass|null The API response, or null if the request failed.
         */
        public function request_activation(
            #[\SensitiveParameter]
            string $license_key
        ): ?\stdClass
        {
        }
        /**
         * Deactivates the license key, keeping it stored for a later activation.
         *
         * @since 1.0
         *
         * @return self Updated License object.
         */
        public function deactivate_license(): self
        {
        }
        /**
         * Deactivates the license key without changing its local license state.
         *
         * A key is linked to the site and not to a product, so the caller decides which local states to clear and when to
         * persist them.
         *
         * @since 2.0
         *
         * @return \stdClass|null The API response, or null if the request failed.
         */
        public function request_deactivation(): ?\stdClass
        {
        }
        /**
         * Checks if the license key is valid.
         * Hooked to `polylang_check_licenses`.
         *
         * The check applies to this product only, so only its own state is persisted.
         *
         * @since 1.0
         *
         * @return void
         */
        public function check_license(): void
        {
        }
        /**
         * Checks a license key for a product without changing its local license state.
         *
         * @since 2.0
         *
         * @param string $license_key License key to check.
         * @param string $item_name   Plugin name.
         * @return \stdClass|null The API response, or null if no request could be made.
         */
        public static function check_license_for_product(
            #[\SensitiveParameter]
            string $license_key,
            string $item_name
        ): ?\stdClass
        {
        }
        /**
         * Tells whether a license data object represents a valid, active status.
         *
         * @since 2.0
         *
         * @param \stdClass|null $license_data The license data to check.
         * @return bool
         */
        public static function is_data_valid(?\stdClass $license_data): bool
        {
        }
        /**
         * Returns the default label for the single license field.
         *
         * @since 2.0
         *
         * @return string
         */
        public static function get_default_label(): string
        {
        }
        /**
         * Returns the default attributes for a license row.
         *
         * @since 2.0
         *
         * @return array<string, mixed>
         */
        public static function get_default_row_atts(): array
        {
        }
        /**
         * Derives a row's display state from a license's stored data: CSS class, active flag and message.
         *
         * Static so the single field and `Licenses` can reuse it.
         *
         * @since 2.0
         *
         * @param \stdClass $license_data The license data returned by the store.
         * @return array{row_class: string, is_active: bool, message: string} Row attributes reflecting the status.
         */
        public static function build_status_atts(\stdClass $license_data): array
        {
        }
    }
    /**
     * Trait that handles the licenses UI shared by `Settings` and `Wizard_Licenses_Step`.
     *
     * @since 1.0
     */
    trait License_UI_Trait
    {
        /**
         * Stores an array of objects allowing to manage a license.
         * In case of one plugin is using this new system, and another is using the old one, we must allow both classes.
         *
         * @var (License|\PLL_License)[]|null
         */
        private $items;
        /**
         * Returns a list of license objects.
         *
         * @since 1.0
         *
         * @return (License|\PLL_License)[] Array of instances of `WP_Syntex\Polylang_WC\Updater\License` or `PLL_License`,
         *                                 keyed by string IDs.
         */
        private function get_licenses(): array
        {
        }
        /**
         * Launches hooks.
         *
         * @since 1.0
         * @since 2.0 Added the activate ajax handler.
         *
         * @return void
         */
        private function hooks(): void
        {
        }
        /**
         * Enqueues styles and scripts.
         *
         * @since 1.0
         *
         * @return void
         */
        public function enqueue_scripts(): void
        {
        }
        /**
         * Ajax method to activate one or several licenses.
         * Hooked to `wp_ajax_pllu_activate_license`.
         *
         * @since 2.0
         *
         * @return void
         *
         * @phpstan-return never
         */
        public function ajax_activate(): void
        {
        }
        /**
         * Ajax method to deactivate a license.
         * Hooked to `wp_ajax_pllu_deactivate_license`.
         *
         * @since 1.0
         * @since 2.0 Handles the single license field.
         *
         * @return void
         *
         * @phpstan-return never
         */
        public function ajax_deactivate(): void
        {
        }
        /**
         * Returns the rows to display according to the single/split mode.
         *
         * Single mode returns one field for all products; split mode returns one field per product. Used to rebuild the
         * current state after AJAX actions in both the settings page and the wizard.
         *
         * @since 2.0
         *
         * @return string[] A single field, or one field per product.
         */
        protected function get_rows(): array
        {
        }
        /**
         * Renders a license field as an HTML table row.
         *
         * Product fields are built from the license object so new and legacy licenses share the same markup. Passing null
         * renders the single field, which has no product ID.
         *
         * @since 2.0
         *
         * @param License|\PLL_License|null $license   Product license, or null for the single field.
         * @param array<string, mixed>     $overrides Attributes overriding the generated field state.
         * @return string
         */
        protected function render_license_field($license = null, array $overrides = array()): string
        {
        }
    }
    /**
     * Manages the registered licenses as a collection.
     *
     * It handles activation across several products and decides how the licenses form is displayed: a single field, or one field per product.
     *
     * @since 2.0
     */
    class Licenses
    {
        /**
         * Constructor.
         *
         * @since 2.0
         *
         * @param (License|\PLL_License)[] $licenses The registered licenses, keyed by product id.
         */
        public function __construct(array $licenses)
        {
        }
        /**
         * Activates a key entered in the single field, on the products it covers.
         *
         * Two products covered by the same key identify a business pack. One product covered and one not identify a
         * standalone key. Once a product accepts the key, one more answer at most is needed to identify it.
         *
         * @since 2.0
         *
         * @param string $key The key to activate.
         * @return bool Whether the key is valid for at least one product.
         */
        public function activate(string $key): bool
        {
        }
        /**
         * Activates a key entered in a product field and detects whether it also covers the other products.
         *
         * @since 2.0
         *
         * @param string $id  Product ID.
         * @param string $key The key to activate.
         * @return bool Whether the product accepted the key.
         */
        public function activate_for_product(string $id, string $key): bool
        {
        }
        /**
         * Deactivates a license, and every product sharing its key.
         *
         * @since 2.0
         *
         * @param string $id Product ID of a registered license, empty for the single field.
         * @return void
         */
        public function deactivate(string $id): void
        {
        }
        /**
         * Tells whether all registered licenses can be represented by a single field.
         *
         * Separate fields are required when only one product is registered, products use different keys, or when one key
         * is valid for only some registered products. Empty, all-valid and all-invalid states can stay in one field, and so
         * does a key valid for two products: it is a business pack, so it also covers the products that were never checked.
         *
         * @since 2.0
         *
         * @return bool
         */
        public function uses_single_field(): bool
        {
        }
        /**
         * Returns the label for the single field, based on how many products the current key covers:
         * - none (or an invalid key): the default "Enter your license key";
         * - one product: that product's name;
         * - several products: a business pack.
         *
         * Only per-product activation data is available here, so a key valid for two or more registered products is
         * displayed as a business pack.
         *
         * @since 2.0
         *
         * @return string
         */
        public function get_single_label(): string
        {
        }
        /**
         * Retrieves the attributes for the single field (the key and its status).
         *
         * Because the key can belong to any product (the first registered one might be empty), this method scans the
         * registered licenses and extracts the data from the first key it finds that was checked against the store.
         *
         * @since 2.0
         *
         * @return array<string, mixed> Field attributes. Empty when no key is stored anywhere.
         */
        public function get_single_atts(): array
        {
        }
    }
    /**
     * Settings class for licenses.
     *
     * @since 1.0
     */
    class Settings extends \PLL_Settings_Module
    {
        use \WP_Syntex\Polylang_WC\Updater\License_UI_Trait;
        /**
         * Name of the ajax action to get the licenses data.
         *
         * @since 1.0
         *
         * @var string
         */
        const GET_LICENSES_DATA_ACTION = 'pllu_get_licenses_data';
        /**
         * Name of the nonce action shared by the licenses ajax requests.
         *
         * @since 2.0
         *
         * @var string
         */
        const NONCE_ACTION = 'pllu_license';
        /**
         * Stores the display order priority.
         *
         * @var int
         */
        public $priority = 100;
        /**
         * Constructor.
         *
         * @since 1.0
         * @since 2.0 Removed the "Save Changes" button and the legacy save handler.
         *
         * @param \PLL_Settings $polylang Polylang object.
         */
        public function __construct(\PLL_Settings &$polylang)
        {
        }
        /**
         * Tells if the module is active.
         *
         * @since 1.0
         *
         * @return bool
         */
        public function is_active(): bool
        {
        }
        /**
         * Displays the settings form.
         *
         * @since 1.0
         */
        protected function form(): void
        {
        }
        /**
         * Ajax method to display licenses with their data (deactivation, expiration date).
         * Hooked to `wp_ajax_pllu_get_licenses_data`.
         *
         * @since 1.0
         * @since 2.0 Built the rows through the single/split mode.
         *
         * @return void
         *
         * @phpstan-return never
         */
        public function display_licenses(): void
        {
        }
    }
    /**
     * Allows to download translations from TranslationsPress.
     * This is a modified version of the library available at https://github.com/WP-Translations/t15s-registry.
     * This version supports only WP Syntex's plugins.
     *
     * @since 1.0
     */
    class Translations
    {
        /**
         * Transient key.
         *
         * @var string
         */
        public const TRANSIENT_KEY = 't15s-polylang';
        /**
         * Adds a new project to load translations for.
         *
         * @since 1.0
         *
         * @param string $slug Project directory slug.
         */
        public function __construct(string $slug)
        {
        }
        /**
         * Short-circuits translations API requests for private projects.
         * Hooked to `translations_api`.
         *
         * @since 1.0
         *
         * @param bool|array $result         The result object. Default false.
         * @param string     $requested_type The type of translations being requested.
         * @param object     $args           Translation API arguments.
         * @return bool|array
         */
        public function translations_api($result, $requested_type, $args)
        {
        }
        /**
         * Filters the translations transients to include the private plugin.
         * Hooked to `site_transient_update_plugins`.
         *
         * @see wp_get_translation_updates().
         *
         * @since 1.0
         *
         * @param \stdClass|false $value The transient value.
         * @return \stdClass|false
         */
        public function site_transient_update_plugins($value)
        {
        }
        /**
         * Registers actions for clearing translation caches.
         * Hooked to `init`.
         *
         * @since 1.0
         *
         * @return void
         */
        public static function register_clean_translations_cache(): void
        {
        }
        /**
         * Clears existing translation cache.
         *
         * @since 1.0
         *
         * @return void
         */
        public static function clean_translations_cache(): void
        {
        }
    }
    /**
     * Updater's main object for the given project.
     *
     * @since 1.0
     */
    class Updater implements \PLL_Updater_Interface
    {
        /**
         * @var License
         */
        public $license;
        /**
         * @var Translations
         */
        public $translations;
        /**
         * @var Wizard_Licenses_Step|null
         */
        public $wizard_licenses_step;
        /**
         * Constructor.
         *
         * Must be instantiated before `pll_init`.
         * Should be instantiated in admin context (`\PLL_Admin_Base`).
         *
         * @since 1.0
         *
         * @param string $file        The plugin file.
         * @param string $name        The plugin name.
         * @param string $version     The plugin version.
         * @param string $text_domain Text domain for translations.
         */
        public function __construct(string $file, string $name, string $version, string $text_domain)
        {
        }
        /**
         * Sets up what must not be duplicated. Called once, on the elected updater.
         *
         * @since 2.0
         *
         * @param \PLL_Base $polylang Polylang object.
         * @return void
         */
        public function init(\PLL_Base $polylang): void
        {
        }
        /**
         * Registers the shared licenses tab. Hooked to `pll_settings_modules` by the leader only.
         *
         * @since 1.0
         * @since 2.0 moved from License::settings_module() to Updater::register_settings_module().)
         *
         * @param string[] $modules The list of module classes.
         * @return string[]
         */
        public function register_settings_module($modules)
        {
        }
        /**
         * Returns the updater version.
         *
         * @since 1.0
         *
         * @return string
         */
        public static function get_version(): string
        {
        }
    }
    /**
     * A class to handle the wizard license step.
     * Must be instantiated on `pll_init` or later (after `PLL_Wizard` is instantiated).
     *
     * @since 1.0
     *
     * @phpstan-type Steps array<
     *     string,
     *     array{
     *         name: string,
     *         view: callable,
     *         handler: callable,
     *         scripts: non-falsy-string[],
     *         styles: non-falsy-string[]
     *     }
     * >
     */
    class Wizard_Licenses_Step
    {
        use \WP_Syntex\Polylang_WC\Updater\License_UI_Trait;
        /**
         * Constructor.
         *
         * @since 1.0
         *
         * @param \PLL_Wizard $wizard Instance of the wizard.
         */
        public function __construct(\PLL_Wizard $wizard)
        {
        }
        /**
         * Adds licenses step to the wizard.
         *
         * @since 1.0
         *
         * @param array $steps List of steps.
         * @return array List of steps updated.
         *
         * @phpstan-param Steps $steps
         * @phpstan-return Steps
         */
        public function add($steps)
        {
        }
        /**
         * Displays the licenses step form.
         *
         * @since 1.0
         * @since 2.0 Uses the same single/split licenses table as the settings page.
         *
         * @return void
         */
        public function display(): void
        {
        }
        /**
         * Executes the licenses step.
         *
         * Licenses are activated through their AJAX buttons, so continuing only moves to the next step.
         *
         * @since 1.0
         * @since 2.0 License activation is handled through AJAX.
         *
         * @return void
         *
         * @phpstan-return never
         */
        public function save(): void
        {
        }
    }
}
namespace {
    /**
     * Plugin controller.
     *
     * @since 0.1
     */
    class Polylang_Woocommerce
    {
        /**
         * @var \WP_Syntex\Polylang_WC\Updater\Updater|null
         */
        public $updater;
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
         * @var \WP_Syntex\Polylang_WC\REST\Module
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
         * @var PLLWC_Store_Blocks
         */
        public $blocks;
        /**
         * @var PLLWC_Shopper_List|null
         * @since 2.3
         */
        public ?\PLLWC_Shopper_List $wishlist;
        /**
         * @var PLLWC_Shopper_List|null
         * @since 2.3
         */
        public ?\PLLWC_Shopper_List $saved_for_later;
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
         * @since 2.2
         *
         * @param PLL_Base $polylang Polylang object.
         * @return void
         */
        public function pre_init($polylang): void
        {
        }
        /**
         * Initializes the plugin.
         *
         * @since 0.1
         * @since 2.2 Pass Polylang's instance as 1st parameter.
         *
         * @param PLL_Base $polylang Polylang object.
         * @return void
         */
        public function init($polylang): void
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
         * Initializes shopper lists ("Wishlist" and "Save for later").
         *
         * Hooked to `before_woocommerce_init` so WooCommerce feature definitions
         * (and their translations) are not loaded on `plugins_loaded`.
         *
         * @since 2.3
         *
         * @return void
         */
        public function init_shopper_lists(): void
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
}
namespace WP_Syntex\Polylang_WC\Cart {
    /**
     * A class to manage the cart item.
     *
     * @since 2.2
     *
     * @phpstan-type CartItem array{
     *   product_id: int,
     *   variation_id: int,
     *   variation: array<non-falsy-string, non-empty-string>,
     *   data?: \WC_Product,
     *   quantity: int,
     *   key: string
     * }
     */
    class Item
    {
        /**
         * Constructor.
         *
         * @since 2.2
         *
         * @param array $item The cart item array.
         * @phpstan-param CartItem $item
         */
        public function __construct(array $item)
        {
        }
        /**
         * Translates the cart item to the specified language.
         *
         * @since 2.2
         *
         * @param \PLL_Language $lang The target language.
         * @return array<string, mixed> The translated cart item array.
         *
         * @phpstan-return CartItem
         */
        public function translate(\PLL_Language $lang): array
        {
        }
        /**
         * Translates product variation attributes to the specified language.
         *
         * @since 2.2
         *
         * @param array<string, string> $attributes The variation attributes array.
         * @param \PLL_Language          $lang       The target language.
         * @param \PLL_Language          $orig_lang   The original language.
         * @return array<string, string> The translated attributes array.
         *
         * @phpstan-param array<non-falsy-string, non-empty-string> $attributes
         * @phpstan-return array<non-falsy-string, non-empty-string>
         */
        public function translate_attributes(array $attributes, \PLL_Language $lang, \PLL_Language $orig_lang): array
        {
        }
    }
}
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
        abstract public function custom_columns();
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
         * Replace the downloads metabox.
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
         * Updates the download links with the order language.
         *
         * @since 2.2
         *
         * @param object $order_object Order object.
         * @return void
         */
        public function update_order_download_links($order_object)
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
        abstract public function order_language($order);
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
         * Code last checked: WC 11.1
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
         * Hooked to the actions 'woocommerce_product_ordering_process_moved_products'
         * and 'woocommerce_product_ordering_process_reindexed_products'.
         * Backward compatibility with WooCommerce < 11.2: hooked to 'woocommerce_after_product_ordering' on older versions.
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
         * Add Polylang for WooCommerce information to the Site Health Information tab.
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
    // Don't access directly.
    /**
     * Manages the status reports for the WooCommerce pages
     * to verify if they exist for all languages.
     *
     * @since 1.3
     *
     * @phpstan-import-type WooPageParams from PLLWC_Page_Status
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
         * Status of the WooCommerce pages, keyed by the name of the option storing the page ID.
         *
         * @var PLLWC_Page_Status[]|null
         *
         * @phpstan-var array<string, PLLWC_Page_Status>|null
         */
        protected $woocommerce_pages_status = \null;
        /**
         * Retrieves the status of the WooCommerce pages.
         * Partially copied from {@see WC_REST_System_Status_V2_Controller::get_pages()}.
         *
         * @since 1.3
         * @since 2.3 Returns `PLLWC_Page_Status` objects keyed by option name.
         *
         * @return PLLWC_Page_Status[]
         *
         * @phpstan-return array<string, PLLWC_Page_Status>
         */
        public function get_woocommerce_pages_status()
        {
        }
        /**
         * Tells whether at least one WooCommerce page has an error.
         *
         * @since 2.3
         *
         * @return bool
         */
        public function has_woocommerce_pages_errors(): bool
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
         * @param int      $from    Id of the term from which we copy information.
         * @param int      $to      Id of the term to which we paste information.
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
         * Translates the thumbnail id, and the swatch image id of the visual attributes.
         *
         * @since 1.0
         * @since 2.3 Added the `$from` parameter and the swatch image support.
         *
         * @param mixed  $value Meta value.
         * @param string $key   Meta key.
         * @param string $lang  Language of target.
         * @param int    $from  Id of the term from which we copy information.
         * @return mixed
         */
        public function translate_meta($value, $key, $lang, $from = 0)
        {
        }
        /**
         * Tells whether a taxonomy holds color swatches.
         *
         * @since 2.3
         *
         * @param string $taxonomy Taxonomy name.
         * @return bool
         */
        protected function is_visual_attribute_taxonomy(string $taxonomy): bool
        {
        }
        /**
         * Maybe fix the language of a term image.
         * It is required because if the image was just uploaded,
         * it is assigned the preferred language instead of the current language.
         *
         * @since 0.1
         * @since 2.3 Added the `$meta_key` parameter.
         *
         * @param int    $term_id  Term id.
         * @param string $meta_key Meta key holding the image id.
         * @return void
         */
        public function fix_term_thumbnail($term_id, $meta_key = 'thumbnail_id')
        {
        }
        /**
         * Maybe fix the language of the swatch image.
         *
         * @since 2.3
         *
         * @param int    $term_id  Term id.
         * @param int    $tt_id    Term taxonomy id.
         * @param string $taxonomy Taxonomy name.
         * @return void
         */
        public function fix_visual_attribute_image($term_id, $tt_id, $taxonomy): void
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
         * Filters the media list when adding an image to a product category, a product brand or a visual attribute.
         *
         * @since 1.6
         * @since 2.3 Handles product brand and visual attribute term screens.
         *
         * @return void
         */
        public function admin_enqueue_scripts()
        {
        }
        /**
         * Adds hooks to pre-fill WooCommerce term fields when creating a translation.
         *
         * Workaround WooCommerce not providing a way to pre-populate them.
         * Its edit renderers read the term but can't be reused in the add form, so we buffer
         * the add fields and inject the source term values instead.
         *
         * @since 2.3
         *
         * @return void
         */
        public function add_hooks_to_prefill_fields(): void
        {
        }
        /**
         * Starts buffering the WooCommerce term fields.
         *
         * @since 2.3
         *
         * @return void
         */
        public function start_buffer(): void
        {
        }
        /**
         * Prints the WooCommerce term fields, filled with the values of the source term.
         * Fields that can't be found are printed untouched, so that a change in WooCommerce can't remove them.
         *
         * @since 2.3
         *
         * @param string $taxonomy Taxonomy name.
         * @return void
         */
        public function prefill_term_fields($taxonomy): void
        {
        }
        /**
         * Pre-fills the product category and product brand fields.
         *
         * @since 2.3
         *
         * @param string  $fields HTML of the fields.
         * @param WP_Term $term   Source term.
         * @return string
         */
        protected function prefill_category_fields(string $fields, \WP_Term $term): string
        {
        }
        /**
         * Pre-fills the visual attribute fields.
         *
         * @since 2.3
         *
         * @param string  $fields HTML of the fields.
         * @param WP_Term $term   Source term.
         * @return string
         */
        protected function prefill_visual_attribute_fields(string $fields, \WP_Term $term): string
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
        protected function translate_page($page, $lang)
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
    // Don't access directly.
    /**
     * Status of a WooCommerce page: whether it is set, translated in all languages,
     * and whether its translations have the required shortcode or block.
     *
     * @since 2.3
     *
     * @phpstan-type WooPageParams array{
     *     name: string,
     *     help: string,
     *     shortcode: string,
     *     block: string
     * }
     */
    class PLLWC_Page_Status
    {
        /**
         * Type of the error when the page is not set.
         *
         * @var string
         */
        public const MISSING_PAGE = 'pllwc_missing_page';
        /**
         * Type of the errors for the missing translations, one per language.
         *
         * @var string
         */
        public const MISSING_TRANSLATION = 'pllwc_missing_translation';
        /**
         * Type of the errors for the translations without the required shortcode or block, one per language.
         *
         * @var string
         */
        public const MISSING_CONTENT = 'pllwc_missing_content';
        /**
         * ID of the WooCommerce page, 0 if not set.
         *
         * @var int
         */
        protected $page_id;
        /**
         * Parameters of the page.
         *
         * @var array
         *
         * @phpstan-var WooPageParams
         */
        protected $params;
        /**
         * Error of the page, empty if the page is correctly set.
         * The missing translations and missing content have one error per language.
         *
         * @var WP_Error
         */
        protected $error;
        /**
         * Constructor. Checks the page.
         *
         * @since 2.3
         *
         * @param string $option Name of the option storing the page ID.
         * @param array  $params Parameters of the page.
         *
         * @phpstan-param WooPageParams $params
         */
        public function __construct(string $option, array $params)
        {
        }
        /**
         * Returns the ID of the page, 0 if not set.
         *
         * @since 2.3
         *
         * @return int
         */
        public function get_page_id(): int
        {
        }
        /**
         * Returns the name of the page.
         *
         * @since 2.3
         *
         * @return string
         */
        public function get_page_name(): string
        {
        }
        /**
         * Returns the help text displayed in the status report.
         *
         * @since 2.3
         *
         * @return string
         */
        public function get_help(): string
        {
        }
        /**
         * Returns the link to edit the page, only for the pages requiring a shortcode or a block, when they are translated.
         *
         * @since 2.3
         *
         * @return string An empty string if there is no link.
         */
        public function get_edit_link(): string
        {
        }
        /**
         * Tells whether the page has an error.
         *
         * @since 2.3
         *
         * @return bool
         */
        public function has_errors(): bool
        {
        }
        /**
         * Returns the error message, an empty string if the page is correctly set.
         *
         * @since 2.3
         *
         * @return string
         */
        public function get_error_message(): string
        {
        }
        /**
         * Removes an error.
         * Allows for example to support pages whose content is provided by a page builder.
         * Note that the next checks are skipped when an error is found,
         * so removing all the errors of a type doesn't tell that the page is correct.
         *
         * @since 2.3
         *
         * @param string $type Type of the error, one of the `PLLWC_Page_Status` constants.
         * @param string $lang Optional. Language slug of the translation, empty for `PLLWC_Page_Status::MISSING_PAGE`.
         * @return void
         */
        public function remove_error(string $type, string $lang = ''): void
        {
        }
        /**
         * Checks the page. Only one type of error is reported, by order of priority.
         *
         * @since 2.3
         *
         * @return WP_Error
         */
        protected function get_status(): \WP_Error
        {
        }
        /**
         * Checks whether the page is set.
         *
         * @since 2.3
         *
         * @return WP_Error
         */
        protected function check_missing_page(): \WP_Error
        {
        }
        /**
         * Checks whether the page is translated in all languages.
         *
         * @since 2.3
         *
         * @param int[] $translations Translations of the page, as language slug => post ID.
         * @return WP_Error One error per missing translation.
         *
         * @phpstan-param array<string, int> $translations
         */
        protected function check_missing_translations(array $translations): \WP_Error
        {
        }
        /**
         * Checks whether the translations of the page have the required shortcode or block.
         *
         * @since 2.3
         *
         * @param int[] $translations Translations of the page, as language slug => post ID.
         * @return WP_Error One error per translation without the required content.
         *
         * @phpstan-param array<string, int> $translations
         */
        protected function check_missing_content(array $translations): \WP_Error
        {
        }
        /**
         * Tells whether the page requires a shortcode or a block.
         *
         * @since 2.3
         *
         * @return bool
         */
        protected function requires_content(): bool
        {
        }
        /**
         * Tells whether a post content has the required shortcode or block.
         *
         * @since 2.3
         *
         * @param string $post_content The post content.
         * @return bool
         */
        protected function has_required_content(string $post_content): bool
        {
        }
        /**
         * Returns the type of the error, i.e. its code without the language.
         *
         * @since 2.3
         *
         * @return string An empty string if the page is correctly set.
         */
        protected function get_error_type(): string
        {
        }
        /**
         * Returns the code of an error, including the language if any.
         *
         * @since 2.3
         *
         * @param string $type Type of the error.
         * @param string $lang Optional. Language slug.
         * @return string
         */
        protected function get_error_code(string $type, string $lang = ''): string
        {
        }
        /**
         * Returns the name of a language from its slug.
         *
         * @since 2.3
         *
         * @param string $slug Language slug.
         * @return string
         */
        protected function get_language_name(string $slug): string
        {
        }
    }
    // Don't access directly.
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
         * Retrieves translation updates.
         *
         * @since 1.4
         *
         * @return stdClass[] List of translation packages to download.
         */
        public function get_translation_updates()
        {
        }
        /**
         * Filters the `update_plugins` transient last checked date.
         *
         * @since 1.4
         *
         * @param StdClass $updates Transient value of plugins which need to be updated.
         * @return StdClass Filtered value of the transient.
         */
        public function update_last_checked($updates)
        {
        }
    }
    /**
     * @package Polylang-WC
     */
    /**
     * Class managing countries, behaves like the WooCommerce one.
     * Backward compatibility with WooCommerce < 11.2 only. Since 11.2, WooCommerce caches geographical data by request locale.
     *
     * @since 1.9.2
     */
    class PLLWC_Countries extends \WC_Countries
    {
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
         * Loads a data store.
         *
         * @since 1.0
         *
         * @throws Exception If the data store doesn't exist.
         *
         * @param 'order_language'|'product_language' $object_type Identifier for the data store.
         * @return PLLWC_Order_Language_CPT|PLLWC_Product_Language_CPT
         *         PLLWC_Order_Language_CPT if $object_type is 'order_language',
         *         PLLWC_Product_Language_CPT if $object_type is 'product_language'.
         * @phpstan-return ($object_type is 'order_language' ? PLLWC_Order_Language_CPT : PLLWC_Product_Language_CPT)
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
         * Sets the email language for previewed emails.
         * The goal is to translate the previewed email strings when rendering and sending the previewed email.
         *
         * @since 2.2
         *
         * @param WC_Email $email The email object. Unused.
         * @return WC_Email
         */
        public function set_previewed_email_language($email)
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
     * Manages the translation of the cart.
     *
     * @since 1.0
     *
     * @phpstan-import-type CartItem from \WP_Syntex\Polylang_WC\Cart\Item
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
         * Translates the cart contents.
         *
         * @since 0.3.5
         *
         * @param array             $contents Cart contents.
         * @param PLL_Language|null $lang     Language.
         * @return array
         * @phpstan-param array<string, CartItem> $contents
         */
        protected function translate_cart_contents($contents, ?\PLL_Language $lang = \null)
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
         * Translates the product ID when it is added to the cart, according to the current language.
         * This allows to use a cart URL in EN with a product ID in FR for example:
         * `example.com/{EN cart slug}/?add-to-cart={FR product ID}`.
         *
         * @since 2.2
         * @see https://github.com/polylang/polylang-wc/issues/843
         *
         * @param int $product_id A product ID.
         * @return int A product ID.
         */
        public function translate_product_id_added_to_cart($product_id)
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
         * Backward compatibility with WooCommerce < 11.2.
         * Not needed since WooCommerce 11.2, which caches geographical data by request locale.
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
         * Tells that we're on a store page if it's a product or taxonomy page.
         *
         * @since 2.1
         *
         * @param bool $is_store_page Whether or not we're on a store page.
         * @return bool
         */
        public function is_store_page($is_store_page)
        {
        }
    }
    /**
     * Manages the translation of the shopper lists ("Wishlist" and "Save for later").
     *
     * @since 2.3
     *
     * @phpstan-type ShopperItem array{
     *   key: string,
     *   product_id: int,
     *   variation_id: int,
     *   variation: array<non-falsy-string, non-empty-string>,
     *   quantity: int,
     *   date_added_gmt: non-falsy-string,
     *   product_title_at_save: string
     * }
     */
    class PLLWC_Shopper_List
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
         * @since 2.3
         *
         * @param string $type The type of shopper list.
         *                     See array keys in `\Automattic\WooCommerce\Internal\ShopperLists\ShopperListsController::SUPPORTED_LIST`.
         */
        public function __construct(string $type)
        {
        }
        /**
         * Setups actions and filters.
         *
         * @since 2.3
         *
         * @return static
         */
        public function init(): self
        {
        }
        /**
         * Defines the current language in the REST requests.
         * This allows to translate product attributes when clicking the "Add to wishlist" button (the "Save for later"
         * button doesn't need it, the language is already sent). Otherwise the button doesn't switch to "Saved to wishlist".
         * Hooked to `rest_pre_dispatch`.
         *
         * @since 2.3
         *
         * @param mixed           $result  Response to replace the requested version with.
         * @param WP_REST_Server  $server  Server instance.
         * @param WP_REST_Request $request Request used to generate the response.
         * @return mixed Unchanged result.
         *
         * @phpstan-param WP_REST_Request<array> $request
         */
        public function ensure_rest_language($result, $server, $request)
        {
        }
        /**
         * Adds the hook that will filter the user metas.
         * Hooked to `rest_pre_dispatch`.
         *
         * @since 2.3
         *
         * @param mixed           $result  Response to replace the requested version with.
         * @param WP_REST_Server  $server  Server instance.
         * @param WP_REST_Request $request Request used to generate the response.
         * @return mixed Unchanged result.
         *
         * @phpstan-param WP_REST_Request<array> $request
         */
        public function add_hooks($result, $server, $request)
        {
        }
        /**
         * Removes the hook filtering the user metas.
         * Hooked to `rest_request_after_callbacks`.
         *
         * @since 2.3
         *
         * @param WP_REST_Response|WP_HTTP_Response|WP_Error|mixed $response Result to send to the client.
         *                                                                   Usually a WP_REST_Response or WP_Error.
         * @return WP_REST_Response|WP_HTTP_Response|WP_Error|mixed Unchanged response.
         */
        public function remove_hooks($response)
        {
        }
        /**
         * Filters the value of the list's user metas.
         * This allows to translate products when displaying the shopper list.
         * Should be hooked to `get_user_metadata`.
         *
         * @since 2.3
         *
         * @param mixed  $value     The value to return, either a single metadata value or an array
         *                          of values depending on the value of `$single`. Default `null`.
         * @param int    $object_id ID of the object metadata is for. Here, a user ID.
         * @param string $meta_key  Metadata key.
         * @return mixed
         */
        public function filter_metas($value, $object_id, $meta_key)
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
         * @return bool True if the plugin is currently being deactivated.
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
         * @since 2.2 Removed param and return value, the method being hooked to an action instead of a filter.
         *
         * @return void
         */
        public function prepare_rewrite_rules()
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
         * Tells whether the product permalink base uses the shop page path.
         * Inspired by WooCommerce wc_fix_rewrite_rules().
         * Code last checked: WC 11.2
         *
         * @since 2.3
         *
         * @return bool
         */
        protected function uses_shop_as_base()
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
        /**
         * Filters downloads URL to switch them to the current language.
         *
         * @since 2.2
         *
         * @param array $downloads List of downloads.
         * @return array List of downloads updated with their URL corresponding to the current language.
         */
        public function filter_download_urls($downloads)
        {
        }
        /**
         * Filters one download URL to switch it to the current language.
         * This prevents to trigger a "File not found" error when trying to download a file.
         *
         * @since 2.2
         *
         * @see WC_Download_Handler::download_product()
         *
         * @param string $download_url File download URL.
         * @return string
         */
        public function filter_download_url($download_url)
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
         * @since 2.2 Removed param and return value, the method being hooked to an action instead of a filter.
         *
         * @return void
         */
        public function prepare_rewrite_rules()
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
}
namespace WP_Syntex\Polylang_WC\REST\Filtered {
    /**
     * Filters orders by language in the REST API.
     *
     * @since 2.2
     */
    class Order extends \WP_Syntex\Polylang_Pro\REST\Filtered\Post
    {
        /**
         * Constructor.
         *
         * @since 2.2
         *
         * @param \PLL_REST_API $rest_api Instance of `PLL_REST_API`.
         */
        public function __construct(\PLL_REST_API $rest_api)
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
         * @param array            $args    Key value array of query var to query value.
         * @param \WP_REST_Request $request The request used.
         * @return array
         *
         * @phpstan-param \WP_REST_Request<array{lang?: string}> $request
         */
        public function add_language_query_arg_in_rest($args, $request)
        {
        }
    }
    /**
     * Filters products by language in the REST API.
     *
     * @since 2.2
     */
    class Product extends \WP_Syntex\Polylang_Pro\REST\Filtered\Post
    {
        /**
         * Constructor.
         *
         * @since 2.2
         *
         * @param \PLL_REST_API $rest_api Instance of `PLL_REST_API`.
         */
        public function __construct(\PLL_REST_API $rest_api)
        {
        }
        /**
         * Deactivate Auto translate to allow queries of attribute terms in the right language.
         *
         * @since 1.1
         *
         * @param array $args `WP_Term_Query` arguments.
         * @return array Modified `WP_Term_Query` arguments.
         */
        public function get_terms_args($args)
        {
        }
    }
    /**
     * Filters terms by language in the REST API.
     *
     * @since 2.2.2
     */
    class Term extends \WP_Syntex\Polylang_Pro\REST\Filtered\Term
    {
        /**
         * Constructor.
         *
         * @since 2.2.2
         *
         * @param \PLL_REST_API $rest_api Instance of `PLL_REST_API`.
         * @param string       $taxonomy The taxonomy name.
         */
        public function __construct(\PLL_REST_API $rest_api, string $taxonomy)
        {
        }
    }
}
namespace WP_Syntex\Polylang_WC\REST {
    /**
     * A class to manage the REST API integration.
     * Requires Polylang Pro 3.8 or later.
     *
     * @since 2.2
     */
    class Module
    {
        /**
         * @var Translated\Product|null
         */
        public $product;
        /**
         * @var Translatable\Order|null
         */
        public $order;
        /**
         * @var Translated\Term|null
         */
        public $product_category;
        /**
         * @var Translated\Term|null
         */
        public $product_tag;
        /**
         * @var Translated\Term|null
         */
        public $product_brand;
        /**
         * @var Translated\Attribute|null
         */
        public $attribute_term;
        /**
         * @var Filtered\Product|null
         */
        public $filtered_product;
        /**
         * @var Filtered\Order|null
         */
        public $filtered_order;
        /**
         * @var Filtered\Term|null
         */
        public $filtered_attribute_term;
        /**
         * @var Filtered\Term|null
         */
        public $filtered_category;
        /**
         * @var Filtered\Term|null
         */
        public $filtered_product_tag;
        /**
         * @var Filtered\Term|null
         */
        public $filtered_brand;
        /**
         * Constructor.
         *
         * @since 2.2
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
         * Removes the order and product related post types from the Polylang Pro REST integration.
         * Polylang WC holds both WP and WC REST API integrations.
         * `register_rest_field()` registers the callbacks for all controllers extending `WP_REST_Controller`,
         * so the integration is centralized in this module.
         *
         * @since 2.2
         *
         * @param array $args Options passed to Translated\Post.
         * @return array
         */
        public function post_types($args)
        {
        }
        /**
         * Removes the product attribute term taxonomy, categories, tags and brand from the Polylang Pro REST integration
         * since they're handled by Translated\Term class.
         *
         * @since 2.2
         *
         * @param array $args Options passed to Translated\Term.
         * @return array
         */
        public function taxonomies($args)
        {
        }
    }
}
namespace WP_Syntex\Polylang_WC\REST\Translatable {
    /**
     * Exposes the product language and translations in the REST API.
     *
     * @since 2.2
     */
    class Order extends \WP_Syntex\Polylang_Pro\REST\Translatable\Abstract_Object
    {
        /**
         * Constructor.
         *
         * @since 2.2
         *
         * @param \PLL_REST_API $rest_api  Instance of `PLL_REST_API`.
         */
        public function __construct(\PLL_REST_API $rest_api)
        {
        }
        /**
         * Returns the object language.
         *
         * @since 2.2
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
         * @since 2.2
         *
         * @param string   $lang   Language code.
         * @param \WC_Order $object Instance of WC_Order.
         * @return bool|\WP_Error True when successfully assigned. False or WP_Error otherwise.
         */
        public function set_language($lang, $object)
        {
        }
        /**
         * Returns the current object type, e.g. 'post' or 'term'.
         * The methods will never be called for this object type since `self::set_language()` and `self::get_language()` are overridden.
         *
         * @since 2.2
         *
         * @return string
         */
        protected function get_type(): string
        {
        }
        /**
         * Returns the REST identifier for the item.
         *
         * @since 3.8
         *
         * @param array|object $item Item array or object, usually a post or term.
         * @return int The REST identifier, 0 if not found.
         */
        protected function get_db_id($item): int
        {
        }
    }
}
namespace WP_Syntex\Polylang_WC\REST\Translated {
    /**
     * Trait for handling batch request language context.
     *
     * Provides shared functionality to maintain language context during WooCommerce batch requests, where the request language detection doesn't work.
     *
     * This trait currently handles only 'create' operations. Update and delete operations don't require the language queue:
     * Create: Product/term doesn't exist yet, no language, queue needed.
     * Update: Product/term exists, language already assigned, queue not needed.
     * Delete: No language validation required, queue not needed.
     *
     * @since 2.2
     */
    trait Batch
    {
        /**
         * Queue of languages for batch items being processed.
         *
         * @var string[]
         */
        private $batch_lang_queue = array();
        /**
         * Initializes the language queue from a batch request.
         * Extracts language codes from 'create' operations and stores them in a FIFO queue.
         *
         * @since 2.2
         *
         * @param mixed           $result  Response to replace the requested version with.
         * @param \WP_REST_Server  $server  Server instance.
         * @param \WP_REST_Request $request Request used to generate the response.
         * @return mixed Unchanged result.
         *
         * @phpstan-param \WP_REST_Request<array> $request
         */
        public function init_batch_lang_queue($result, $server, $request)
        {
        }
        /**
         * Moves to the next batch item.
         *
         * @since 2.2
         *
         * @return void
         */
        public function next_batch_item(): void
        {
        }
        /**
         * Returns the language to use when searching if a SKU is unique.
         *
         * @since 1.3
         * @since 2.2 Moved from REST\Translated\Product and added support for batch requests.
         *
         * @param \PLL_Language|false $language Found language object, `false` if none.
         * @return \PLL_Language|false The requested language object, `false` if none.
         */
        public function filter_language_with_request($language)
        {
        }
        /**
         * Gets the current batch language.
         *
         * @since 2.2
         *
         * @return \PLL_Language|null The language object for the current batch item, or null if not in a batch.
         */
        protected function get_batch_language(): ?\PLL_Language
        {
        }
        /**
         * Checks if the user has permission to set the language of an object.
         *
         * @since 2.2.2
         *
         * @param \WP_Syntex\Polylang\REST\Request $request Request object.
         * @return bool True if the user has permission, false otherwise.
         */
        protected function check_batch_languages_permissions(\WP_Syntex\Polylang\REST\Request $request)
        {
        }
    }
    /**
     * Base class for exposing term language and translations in the REST API for WooCommerce taxonomies.
     *
     * @since 2.2
     */
    abstract class Abstract_Term extends \WP_Syntex\Polylang_Pro\REST\Translated\Term
    {
        use \WP_Syntex\Polylang_WC\REST\Translated\Batch;
        /**
         * Constructor.
         *
         * @since 2.2
         *
         * @param \PLL_REST_API $rest_api Instance of `PLL_REST_API`.
         * @param string       $taxonomy Taxonomy name.
         */
        public function __construct(\PLL_REST_API $rest_api, string $taxonomy)
        {
        }
        /**
         * Checks if the user has permission to set the language of an object.
         *
         * @since 2.2
         *
         * @param bool   $permission  True if the user has permission, false otherwise.
         * @param string $context     The context of the request.
         * @param int    $object_id   The ID of the object.
         * @param string $object_type The type of the object.
         * @return bool|\WP_Error Original permission or `WP_Error` if the user cannot set the language.
         */
        public function check_permissions($permission, $context, $object_id, $object_type)
        {
        }
        /**
         * Returns the taxonomy name for the current request.
         *
         * @since 2.2
         *
         * @param string $taxonomy The taxonomy name.
         * @return bool True if the taxonomy is supported, false otherwise.
         */
        abstract protected function is_supported_taxonomy(string $taxonomy): bool;
        /**
         * Checks if this handler should process the given batch route.
         *
         * @since 2.2
         *
         * @param string $route The REST route being requested.
         * @return bool True if this is a batch request for WooCommerce taxonomies.
         */
        abstract protected function is_batch_route(string $route): bool;
    }
    /**
     * Exposes the term language in the REST API for the product attributes.
     *
     * Supports all product attribute terms (pa_*).
     *
     * @since 2.2
     */
    class Attribute extends \WP_Syntex\Polylang_WC\REST\Translated\Abstract_Term
    {
        /**
         * Constructor.
         *
         * @since 2.2
         *
         * @param \PLL_REST_API $rest_api Instance of `PLL_REST_API`.
         */
        public function __construct(\PLL_REST_API $rest_api)
        {
        }
        /**
         * Returns the REST field type for a content type.
         *
         * @since 2.2
         *
         * @param string $type Taxonomy name.
         * @return string REST API field type.
         */
        protected function get_rest_field_type($type)
        {
        }
        /**
         * Checks if this handler should process the given batch route.
         *
         * Handles WooCommerce product attribute batch requests:
         * - /wc/v2/products/attributes/{id}/terms/batch
         * - /wc/v3/products/attributes/{id}/terms/batch
         *
         * @since 2.2
         *
         * @param string $route The REST route being requested.
         * @return bool True if this is a batch request for product attributes.
         */
        protected function is_batch_route(string $route): bool
        {
        }
        /**
         * Checks if the taxonomy is supported by this handler.
         *
         * @since 2.2.2
         *
         * @param string $taxonomy The taxonomy name.
         * @return bool True if the taxonomy is supported, false otherwise.
         */
        protected function is_supported_taxonomy(string $taxonomy): bool
        {
        }
    }
    /**
     * Exposes the product language and translations in the REST API.
     *
     * @since 2.2
     */
    class Product extends \WP_Syntex\Polylang_Pro\REST\Translated\Post
    {
        use \WP_Syntex\Polylang_WC\REST\Translated\Batch;
        /**
         * Constructor.
         *
         * @since 2.2
         *
         * @param \PLL_REST_API $rest_api Instance of `PLL_REST_API`.
         */
        public function __construct(\PLL_REST_API $rest_api)
        {
        }
        /**
         * Checks if this handler should process the given batch route.
         *
         * @since 2.2
         *
         * @param string $route The REST route being requested.
         * @return bool True if this is a products' batch request.
         */
        protected function is_batch_route(string $route): bool
        {
        }
        /**
         * Returns the object language.
         *
         * @since 2.2
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
         * @since 2.2
         *
         * @throws \WC_REST_Exception If the language is not valid or the user does not have permission to set the language.
         *
         * @param string     $lang   Language code.
         * @param \WC_Product $object Instance of `WC_Product`.
         * @return bool|\WP_Error True when successfully assigned. False or WP_Error otherwise
         *                        (or if the given language is already assigned to the object).
         */
        public function set_language($lang, $object)
        {
        }
        /**
         * Returns the object translations.
         *
         * @since 2.2
         *
         * @param array $object Product array.
         * @return object An object with language codes as properties and translation IDs as values.
         */
        public function get_translations($object)
        {
        }
        /**
         * Save the translations.
         *
         * @since 2.2
         *
         * @param int[]      $translations Array of translations with language codes as keys and object ids as values.
         * @param \WC_Product $object       Instance of `WC_Product`.
         * @return bool True when successfully saved. False otherwise.
         */
        public function save_translations($translations, $object)
        {
        }
        /**
         * Returns the database identifier for the item.
         *
         * @since 3.8
         *
         * @param array|object $item Item array or object, usually a post or term.
         * @return int The database identifier, 0 if not found.
         */
        protected function get_db_id($item): int
        {
        }
        /**
         * Allows sharing the product slug across languages.
         * Modifies the REST response accordingly.
         *
         * @since 2.2
         *
         * @param \WP_REST_Response       $response The response object.
         * @param \WC_Product             $product  Product object.
         * @param \WP_REST_Request<array> $request  Request object.
         * @return \WP_REST_Response The response object.
         */
        public function prepare_response($response, $product, $request)
        {
        }
        /**
         * Checks if the user has permission to set the language of an object for batch requests.
         *
         * @since 2.2.2
         *
         * @param bool   $permission  True if the user has permission, false otherwise.
         * @param string $context     The context of the request.
         * @param int    $object_id   The ID of the object.
         * @param string $object_type The type of the object.
         * @return bool True if the user has permission, false otherwise.
         */
        public function check_batch_permissions($permission, $context, $object_id, $object_type)
        {
        }
    }
    /**
     * Exposes the term language and translations in the REST API for WooCommerce taxonomies.
     *
     * @since 2.2.2
     */
    class Term extends \WP_Syntex\Polylang_WC\REST\Translated\Abstract_Term
    {
        /**
         * Constructor.
         *
         * @since 2.2.2
         *
         * @param \PLL_REST_API $rest_api           Instance of `PLL_REST_API`.
         * @param string       $taxonomy_name      The taxonomy name.
         * @param string       $taxonomy_rest_slug The taxonomy REST slug used in endpoints.
         */
        public function __construct(\PLL_REST_API $rest_api, string $taxonomy_name, string $taxonomy_rest_slug)
        {
        }
        /**
         * Checks if this handler should process the given batch route.
         *
         * Handles product taxonomies (e.g. categories, tags, brands) batch requests:
         * - /wc/v2/products/{taxonomy}/batch
         * - /wc/v3/products/{taxonomy}/batch
         *
         * @since 2.2.2
         *
         * @param string $route The REST route being requested.
         * @return bool True if this is a batch request for product brands.
         */
        protected function is_batch_route(string $route): bool
        {
        }
        /**
         * Checks if the taxonomy is supported by this handler.
         *
         * @since 2.2.2
         *
         * @param string $taxonomy The taxonomy name.
         * @return bool True if the taxonomy is supported, false otherwise.
         */
        protected function is_supported_taxonomy(string $taxonomy): bool
        {
        }
    }
}
namespace {
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
         * Adds product variations IDs to posts IDs attached to an exported variable product.
         *
         * @since 1.8
         *
         * @param int[]   $linked_ids Post IDs attached to an exported product.
         * @param WP_Post $post       WP_Post associated to the exported product to get variations from, if applicable.
         * @return int[]
         */
        public function collect_variations($linked_ids, $post)
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
         * Constructor.
         *
         * @since 2.2
         *
         * @param PLLWC_Products $products Object to manage products.
         */
        public function __construct(\PLLWC_Products $products)
        {
        }
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
         * Copies variations if not already done yet.
         *
         * @since 2.2
         *
         * @param WP_Post      $source_post     The source post.
         * @param WP_Post      $tr_post         The target post.
         * @param PLL_Language $target_language The language to translate into.
         * @return void
         */
        public function translate_variations($source_post, $tr_post, $target_language): void
        {
        }
        /**
         * Preserves product variation status during translation.
         * Product variations use post status to indicate whether they are enabled or disabled.
         *
         * @since 2.2.2
         *
         * @param WP_Post $tr_post     The translated post object.
         * @param WP_Post $source_post The source post object.
         * @return WP_Post Modified translated post object.
         */
        public function preserve_variation_status($tr_post, $source_post)
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
        public function get_tax_language(): string
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
        public function set_language($id, $lang): bool
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
         *                      Pass `\OBJECT` constant to get the language object.
         * @return PLL_Language|string|int|bool|string[] The requested field value of the object language, `false` if no language is
         *                                  associated to that object.
         *
         * @phpstan-param non-falsy-string $field
         * @phpstan-return (
         *     $field is \OBJECT ? PLL_Language : (
         *         $field is 'slug' ? non-empty-string : string|int|bool|list<non-empty-string>
         *     )
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
        public function join_clause($alias = ''): string
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
        public function where_clause($lang): string
        {
        }
        /**
         * Restores the 'lang' parameter when explicitly set in WooCommerce original query.
         *
         * WooCommerce removes empty values from query arguments in `WC_Data_Store_WP::get_wp_query_args()`.
         * This prevents using `'lang' => ''` to explicitly query all languages.
         *
         * @since 2.2
         *
         * @param array $wp_query_args Query arguments after WooCommerce processing.
         * @param array $query_vars    Original query arguments before WooCommerce processing.
         * @return array Modified query arguments with 'lang' restored if needed.
         */
        public function restore_lang_query_arg($wp_query_args, $query_vars)
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
     * Manages the compatibility with WooCommerce Bookings.
     * Version tested: 1.10.11.
     *
     * @since 0.6
     */
    class PLLWC_Bookings
    {
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
         * @param int    $to   ID of the product to which we paste information.
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
         * @param int    $from ID of the product from which we copy information.
         * @param int    $to   ID of the product to which we paste information.
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
         * Hooked to the filter 'woocommerce_get_query_vars'.
         * Copies `WC_Booking_Order_Manager::get_endpoint()` as the class is instantiated anonymously.
         *
         * @since 0.6
         *
         * @param array $slugs Endpoints slugs.
         * @return array
         */
        public function get_endpoints_query_vars($slugs)
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
         * Adds composite product text to the list of metas to export.
         *
         * @since 2.2
         *
         * @param array $metas A recursive array containing nested meta sub keys to translate.
         * @return array Metas to export.
         */
        public function export_composite_text($metas)
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
         * Adds Composite products information to the cart item data when translated.
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
         * @param int      $from Id of the post from which we copy information.
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
         * @param int    $from  Id of the follow-up email from which we copy information.
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
         * Adds Free Gift Coupons information to the cart item data when translated.
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
     * Manages the compatibility with Mix and Match Products.
     * Version tested: 2.0.0.
     *
     * It handles the synchronization of products metas
     * and the translation of the cart when the language is switched.
     *
     * @since 1.1
     * @since 1.7 Added support for version 2.0+. Thanks @helgatheviking for bringing it.
     *
     * @phpstan-import-type CartItem from \WP_Syntex\Polylang_WC\Cart\Item
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
         * @param int    $from Id of the post from which we copy information.
         * @param int    $to   Id of the post to which we paste information.
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
         * @phpstan-param CartItem $item
         * @phpstan-param string $lang
         */
        public function translate_cart_item($item, $lang = '')
        {
        }
        /**
         * Translates the config in the cart item.
         *
         * @since 1.7
         *
         * @param  array        $config Config.
         * @param  PLL_Language $lang   Language.
         * @return array<int<0,max>,array{
         *     product_id: int<0,max>,
         *     variation_id: int<0,max>,
         *     variation: array<string,string>
         * }>
         */
        protected function translate_config($config, \PLL_Language $lang)
        {
        }
        /**
         * Adds Mix and Match Product information to the cart item data when translated.
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
         * @param int    $from ID of the post from which we copy information.
         * @param int    $to   ID of the post to which we paste information.
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
         * Adds the product metas to translate.
         *
         * @since 2.2
         *
         * @param array $metas An array of product metas to translate.
         * @return array
         */
        public function get_metas_to_translate($metas)
        {
        }
        /**
         * Translates the Bundle-sells IDs of a product.
         * Hooked to the filter 'pll_translate_post_meta'.
         *
         * @since 2.2
         *
         * @param mixed  $value Meta value.
         * @param string $key   Meta key.
         * @param string $lang  Target language.
         * @return mixed
         */
        public function translate_post_meta($value, $key, $lang)
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
         * Adds the Product bundles information to the cart item data when translated.
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
         * Registers string translations.
         *
         * @since 2.1.4
         *
         * @return void
         */
        public function register_strings(): void
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
        /**
         * Adds Subscriptions endpoints query vars if not already done by the plugin.
         *
         * @since 2.1.5
         *
         * @return void
         */
        public function add_query_vars(): void
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
         * @param int   $from  Id of the product from which we copy information.
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
     * Version tested: 2.8.1.
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
         * Filters the site URL in the current language in localization information.
         *
         * @since 1.9.5
         *
         * @param array $script_localize An array of information about localization.
         * @return array
         */
        public function filter_block_localize($script_localize)
        {
        }
        /**
         * Fixes the query var `lang` that has been replaced by Yith.
         * Ex: `example.com/fr/?ywcas=1&post_type=product&lang=fr_FR&s=xxx`.
         *
         * @since 2.1.2
         *
         * @param WP $wp Current WordPress environment instance (passed by reference).
         * @return void
         */
        public function fix_lang_query_var(\WP $wp): void
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
         * Cleans Polylang's translated taxonomies cache when a WooCommerce attribute is added.
         *
         * Polylang caches the list of translated taxonomies, to which we add the attribute taxonomies from `wc_get_attribute_taxonomies()`.
         * An attribute added during the request is therefore missing from the cached list, and the terms created for it afterwards get no language.
         * This is what happens when WooCommerce creates the default terms of a new visual attribute.
         *
         * The cache is only emptied here. Polylang rebuilds it on the next read, after `wc_create_attribute()` has invalidated the WooCommerce attributes cache.
         *
         * @since 2.3
         *
         * @return void
         */
        public function clean_taxonomies_cache()
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
        public function get_tax_translations(): string
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
         * @phpstan-return array<non-empty-string, positive-int>
         */
        public function save_translations($translations): array
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
        public function get_translations($id): array
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
        protected function get_legacy_metas($sync): array
        {
        }
        /**
         * Get the custom fields to copy or synchronize.
         *
         * @since 1.0
         *
         * @param string[] $metas List of custom fields names.
         * @param bool     $sync  True if it is synchronization, false if it is a copy.
         * @param int      $from  Id of the product from which we copy information.
         * @param int      $to    Id of the product to which we copy information.
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
         * @param int $from Id of the product from which we copy information.
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
         * @param int    $from  Id of the object from which we copy information.
         * @param int    $to    Id of the target.
         * @return mixed
         */
        public function translate_post_meta($value, $key, $lang, $from, $to)
        {
        }
        /**
         * Copies the product video gallery to a product translation.
         *
         * Product gallery videos are not exposed as a WC_Product property while the feature is beta, so they cannot use PLLWC's
         * standard product property synchronization path.
         *
         * During a classic product save, WooCommerce stores the video gallery after WC_Product::save(). In that context,
         * the copy is deferred to sync_product_video_gallery().
         *
         * Hooked to the action 'pllwc_copy_product'.
         *
         * @since 2.2.4
         *
         * @param int    $from Source product ID.
         * @param int    $to   Target product ID.
         * @param string $lang Target language code.
         * @return void
         */
        public function copy_product_video_gallery($from, $to, $lang)
        {
        }
        /**
         * Synchronizes the product video gallery after it is saved by the classic product editor.
         *
         * WC_Meta_Box_Product_Images stores gallery videos after WC_Product::save(), when the regular PLLWC synchronization has
         * already run. This callback runs after WooCommerce's product gallery callback to synchronize the final stored gallery.
         *
         * Hooked to the action 'woocommerce_process_product_meta'.
         *
         * @since 2.2.4
         *
         * @param int $id Product ID.
         * @return void
         */
        public function sync_product_video_gallery($id)
        {
        }
        /**
         * Copies properties (taxonomies and metas) from one product to another product.
         *
         * @since 1.0
         *
         * @param int    $from  Id of the product from which we copy information.
         * @param int    $to    Id of the product to which we copy information.
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
         * Checks if a field (product unique ID or SKU) is found in the database for any other product ID in a language.
         * Modified version of `WC_Product_Data_Store_CPT::is_existing_sku()` and `WC_Product_Data_Store_CPT::is_existing_global_unique_id()`.
         *
         * @since 2.1
         *
         * @param string       $column     The field to search.
         * @param string       $value      The field value to search (slashed to work around https://core.trac.wordpress.org/ticket/27421).
         * @param int          $product_id Product ID.
         * @param PLL_Language $language   The product language.
         * @return bool
         */
        public function lookup_table_has(string $column, string $value, int $product_id, \PLL_Language $language): bool
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
         * The language is added to the queries to take into account updates of attributes sharing the same slug.
         * Code last checked: WC 11.2.2
         *
         * @since 1.2
         * @since 2.3 Preserves the other default attributes and clears their cache, like WC 11.2.2.
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
         * @param int    $from Product id from which we copy information.
         * @param int    $to   Product id to which we paste information.
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
         * @param int  $from Product id from which we copy information.
         * @param int  $to   Product id which we paste information.
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
         * Checks if a product SKU or global unique ID is unique for its language.
         *
         * Hooked to `wc_product_has_unique_sku` and `wc_product_has_global_unique_id`.
         * Indirectly hooked to `wc_product_pre_lock_on_sku`.
         *
         * @since 2.1
         *
         * @param bool   $id_found   True if the ID is already associated to an existing product, false otherwise.
         * @param int    $product_id Product ID.
         * @param string $id_value   Product SKU or global unique ID.
         * @return bool
         */
        public function unique_id($id_found, $product_id, $id_value)
        {
        }
        /**
         * Locks a SKU according to product languages.
         *
         * @since 2.1
         *
         * @param bool|null  $locked  Whether the SKU is locked or not, `null` if not processed at all.
         * @param WC_Product $product Product of the SKU to lock.
         * @return bool|null Whether the SKU is locked or not, `null` if not bypassed.
         */
        public function filter_lock_on_sku($locked, $product)
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
         * @param int    $from     ID of the product from which we copy information.
         * @param int    $to       ID of the target.
         * @param string $lang     Language slug of the target post.
         * @param string $strategy `sync` if doing synchro, `copy` otherwise.
         * @return void
         */
        public function synchronize_product($from, $to, $lang, $strategy)
        {
        }
        /**
         * Assigns the language of the variable product to its variations if they don't have one.
         *
         * @since 2.2
         *
         * @param WC_Product_Variable $product The variable product.
         * @return void
         */
        protected function maybe_set_variations_language(\WC_Product_Variable $product): void
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
         * Synchronizes reserve_stock_for_product across translations
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
     * A class to handle blocks.
     *
     * @since 1.9.5
     */
    class PLLWC_Store_Blocks
    {
        /**
         * Setups actions filters.
         *
         * @since 1.9.5
         *
         * @return void
         */
        public function init()
        {
        }
        /**
         * Adds the WooCommerce Store API routes used by the blocks to the routes filtered by language in the editors.
         *
         * The WooCommerce blocks (e.g. Products by Category, Hand-Picked Products, product filters) don't use the `wp/v2` routes,
         * which PLL filters automatically, but the Store API ones.
         * Declaring them filters these blocks by the language of the edited content.
         *
         * @since 2.3
         *
         * @param string[] $routes Filterable REST routes, with types as key.
         * @return string[] Filterable REST routes.
         */
        public function filter_rest_routes($routes)
        {
        }
        /**
         * Setups actions filters once the language is defined.
         *
         * @since 1.9.5
         *
         * @return void
         */
        public function add_filters()
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
         * Adds the current language to the paths being prefetched.
         *
         * This prevents doing 1 request to the URL modified by `get_filter_script()`, and another to the original one.
         * Thanks to Tofandel for finding the source of the issue and providing a fix.
         *
         * @since 2.1.5
         *
         * @return void
         */
        public function hydrate_store_routes(): void
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
        /**
         * Filters the locale when an account is created during checkout (REST request).
         *
         * @since 1.9.5
         *
         * @param  string $locale The locale ID.
         * @return string
         */
        public function get_locale($locale)
        {
        }
        /**
         * Replaces blocks assets URLs in WooCommerce transient depending on the current language
         * when using one domain per language.
         *
         * @since 2.1
         *
         * @param string|false $value Current value of the WooCommerce transient (JSON encoded).
         * @return string|false WooCommerce transient with blocks assets URLs modified with the current language.
         */
        public function blocks_assets_links($value)
        {
        }
        /**
         * Makes the taxonomy hierarchy maps of the WooCommerce Product Filters block language dependent.
         *
         * WooCommerce builds these maps with `get_terms()`, filtered by the current language, but caches them in one option per taxonomy.
         * We store one map per language in this same option, so that WooCommerce still clears all of them when a term changes.
         * This relies on the internal format of `Automattic\WooCommerce\Internal\ProductFilters\TaxonomyHierarchyData`.
         *
         * The block accepts any product taxonomy, but only the hierarchical ones are cached, and only the translated ones depend on the language.
         *
         * @since 2.3
         *
         * @return void
         */
        public function add_taxonomy_hierarchy_filters(): void
        {
        }
        /**
         * Returns the taxonomy hierarchy map of the current language.
         *
         * @since 2.3
         *
         * @param mixed $value Value of the `wc_taxonomy_hierarchy_{$taxonomy}` option.
         * @return mixed
         */
        public function get_taxonomy_hierarchy_map($value)
        {
        }
        /**
         * Stores the taxonomy hierarchy map built by WooCommerce under the current language.
         *
         * @since 2.3
         *
         * @param mixed  $value     Taxonomy hierarchy map built by WooCommerce.
         * @param mixed  $old_value Map of the current language, as returned by `get_taxonomy_hierarchy_map()`.
         * @param string $option    Option name.
         * @return mixed
         */
        public function set_taxonomy_hierarchy_map($value, $old_value, $option)
        {
        }
        /**
         * Clears the taxonomy hierarchy map when a language is assigned to a term, with `PLL_Translated_Term::set_language()`.
         *
         * @since 2.3
         *
         * @param int    $object_id Object ID, here a term ID.
         * @param array  $terms     Terms assigned to the object.
         * @param array  $tt_ids    Term taxonomy IDs.
         * @param string $taxonomy  Taxonomy name.
         * @return void
         */
        public function clear_taxonomy_hierarchy_map_on_set_language($object_id, $terms, $tt_ids, $taxonomy): void
        {
        }
        /**
         * Clears all translated product taxonomy hierarchy maps when languages are assigned in mass, with `PLL_Translated_Term::set_language_in_mass()`.
         *
         * @since 2.3
         *
         * @param int[]|int $ids      Term IDs.
         * @param string    $taxonomy Taxonomy name.
         * @return void
         */
        public function clear_taxonomy_hierarchy_maps($ids, $taxonomy): void
        {
        }
        /**
         * Ensures the order language is set correctly.
         *
         * @since 2.2
         *
         * @param WC_Order $order Order being processed.
         * @return void
         */
        public function ensure_order_language($order)
        {
        }
    }
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
         * Translates options with `PLL_Translate_Option`.
         *
         * @since 1.9.5
         *
         * @return void
         */
        public function translate_options()
        {
        }
        /**
         * Translates shipping methods for a specific zone.
         *
         * @since 2.2
         *
         * @param WC_Shipping_Method[]|stdClass[] $methods Array of shipping method instances.
         * @return WC_Shipping_Method[]|stdClass[]
         */
        public function translate_shipping_methods($methods)
        {
        }
        /**
         * Translates gateways integrated with the WooCommerce block integration API.
         *
         * @since 2.0
         *
         * @param Automattic\WooCommerce\Blocks\Integrations\IntegrationRegistry $integration_registry Woo integration registry.
         * @return void
         */
        public function translate_payment_method_blocks($integration_registry): void
        {
        }
        /**
         * Translates gateways *not* integrated with the WooCommerce block integration API.
         * Done later than the blocks for backward compatibility.
         *
         * @since 2.0
         *
         * @param WC_Payment_Gateways $gateways Woo gateways registry.
         * @return void
         */
        public function translate_payment_gateways($gateways)
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
         * Refreshes the rate labels on orders. Required to display the labels in the right language when sending emails.
         *
         * @since 2.1.4
         * @see WC_Abstract_Order::get_tax_totals()
         *
         * @param array $tax_totals Array of tax-data.
         * @return array
         *
         * @phpstan-param array<
         *     string,
         *     object{
         *         id: int,
         *         rate_id: int,
         *         is_compound: bool,
         *         label: string,
         *         amount: float,
         *         formatted_amount: string
         *     }&\stdClass
         * > $tax_totals
         */
        public function set_tax_label($tax_totals)
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
         * Returns the attribute summary for a product by taking care of the language filter.
         *
         * @since 2.1.5
         *
         * @param WC_Product $product Product object.
         * @return string The generated attribute summary.
         */
        public function get_attribute_summary($product)
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
         * @return void
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