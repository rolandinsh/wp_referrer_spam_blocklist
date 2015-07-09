<?php

/**
 * Exit if accessed directly (security)
 * @since 1.0.0
 */
if (!defined('ABSPATH'))
    exit;

/**
 * Double check. 
 * Are we in WordPress enabled site?
 * @since 1.0.0
 * @release 1.0.0
 */
if (!function_exists('add_action')) {
    echo "Hi! I'm nice WordPress plugin from Umbrovskis.com, but I am more useful if You are using WordPress. So, don't me call directly!.";
    exit;
}
/* hardcoded, no overwrite */
define('WPREFBLACKLISTV', '1.0.0');

class wpReferralBlacklist
{

    public $version = '1.0.0';
    public $wprsbfolder = 'wp_referrer_spam_blacklist';
    public $wprsbline = 'wp-referrer-spam-blacklist';

    const OPTINLVURI = '';
    const OPTINENURI = '';

    function __construct()
    {
        add_action('init', array($this, 'inits'), 1);
        add_action('wp_head', array($this, 'headGen'));
        add_action('plugin_row_meta', array($this, 'setPluginMeta'), 10, 2);
        // Load a text domain
        //load_plugin_textdomain('wprsb', false, dirname(plugin_basename(__FILE__)) . '/lang/');
    }

    public function inits()
    {
        return $this->blocker();
    }

    public static function log($wp_referralblock_debug)
    {
        if (apply_filters('wp_referralblock_debug_log', defined('WP_DEBUG_LOG') && WP_DEBUG_LOG)) {
            error_log(print_r(compact('wp_referralblock_debug'), true));
        }
    }

    /**
      get referrer
     * @param string $uri
     * */
    public function referral($uri)
    {
        return $uri ? $uri : wp_get_referer();
    }

    /**
      where to redirect if blocked
     * @param string $uri
     * */
    public function wpReferralblockRedirectUri($uri)
    {
        return apply_filters('wp_referralblock_redirect_uri', ($uri ? $uri : 'about:blank')); // https://youtu.be/yFE6qQ3ySXE?t=40s
    }

    /**
      blocker
     * @param string $uri
     * */
    public function blocker()
    {
        include_once dirname(__FILE__) . '/blockList.php';
        $theBlocklist = new blockList();
        $getBlocklist = $theBlocklist->theList();
        $isOnBlocklist = in_array(parse_url($this->referral(), PHP_URL_HOST), $getBlocklist) ? in_array(parse_url($this->referral(), PHP_URL_HOST), $getBlocklist) : false;
        if ($isOnBlocklist) {
            wp_redirect($this->wpReferralblockRedirectUri(), 301);
            exit;
        }
    }

    /**
     * meta genarator
     *
     * @since 1.0.0
     */
    public function headGen()
    {
        echo "\n" . '<meta name="generator" content="http://simplemediacode.com/?utm_source=' . $this->wprsbline . '-' . $this->version . '" />' . "\n";
    }

    /**
     * Set plugin meta information.
     *
     * @since 1.0.0
     */
    function setPluginMeta($links, $file)
    { 
        //$plugin = plugin_basename(__FILE__);
 
        if ($file == WPRSBFILE) {
            return array_merge($links, array(
                '<a href="http://www.amazon.de/registry/wishlist/3ARHPQ1SLAMPV">' . __("My Amazon wishlist", "wprsb") . '</a>',
                '<a href="https://www.paypal.com/cgi-bin/webscr?cmd=_donations&business=Z4ALL9WUMY3CL&lc=LV&item_name=Umbrovskis.%20WordPress%20plugins&item_number=004&currency_code=EUR&bn=PP-DonationsBF:btn_donate_SM.gif:NonHosted">' . __('Donate via PayPal', 'wprsb') . '</a>'
            ));
        }
        return $links;
    }

}
