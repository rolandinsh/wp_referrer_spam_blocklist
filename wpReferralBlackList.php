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

/**
 * Main class wpReferralBlacklist
 * @since 1.0.0
 */
if (!class_exists('wpReferralBlacklist')) {

    class wpReferralBlacklist
    {

        public $version = '1.2.201610241';
        public $internalversion = '1.0.20161006';
        public $wprsbfolder = 'wp_referrer_spam_blacklist';
        public $wprsbline = 'wp-referrer-spam-blacklist';

        const OPTINLVURI = ''; // reserved
        const OPTINENURI = ''; // reserved

        function __construct()
        {
            add_action('init', array($this, 'inits'), 1);
            add_action('wp_head', array($this, 'headGen'));
            add_action('plugin_row_meta', array($this, 'setPluginMeta'), 10, 2);
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
          get host Symfony way
         * 
         * @since 1.2.201610061
         * */
        function getHost()
        {
            $possibleHostSources = array('HTTP_X_FORWARDED_HOST', 'HTTP_HOST', 'SERVER_NAME', 'SERVER_ADDR');
            $sourceTransformations = array(
                "HTTP_X_FORWARDED_HOST" => function($value) {
                    $elements = explode(',', $value);
                    return trim(end($elements));
                }
            );
            $host = '';
            foreach ($possibleHostSources as $source) {
                if (!empty($host))
                    break;
                if (empty($_SERVER[$source]))
                    continue;
                $host = $_SERVER[$source];
                if (array_key_exists($source, $sourceTransformations)) {
                    $host = $sourceTransformations[$source]($host);
                }
            }

            // Remove port number from host
            $host = preg_replace('/:\d+$/', '', $host);

            return trim(esc_url_raw($host));
        }

        /**
          get referrer
         * @param string $uri
         * */
        public function referral($uri)
        {
            $refurl = $uri ? $uri : isset($_SERVER['HTTP_REFERER']) ? $_SERVER['HTTP_REFERER'] : false;
            return strtolower($refurl);
        }

        /**
          where to redirect if blocked
         * @param string $uri
         * */
        public function wpReferralblockRedirectUri($uri = false)
        {
            // Sing with me :)
            // https://youtu.be/yFE6qQ3ySXE?t=40s
            return apply_filters('wp_referralblock_redirect_uri', ($uri ? $uri : wp_die('Stop spamming!', 'BANNED!', array('response' => 403))));
        }

        /**
          blocker
         * */
        public function blocker()
        {
            include_once dirname(__FILE__) . '/blockList.php';
            $theBlocklist = new blockList();
            $getBlocklist = $theBlocklist->theList();
            $getReferer = isset($_SERVER['HTTP_REFERER']) ? $_SERVER['HTTP_REFERER'] : $this->getHost();
            $refUri = $this->referral($getReferer);
            if ((isset($refUri) && $refUri !== false) && ( isset($getReferer) && $getReferer !== false)) {
                foreach ($getBlocklist as $block) {
                    if (strpos($refUri, $block) !== false) {
                        // hooray, we found spammer!
                        wp_redirect(apply_filters('wp_referralblock_blocker_uri', $this->wpReferralblockRedirectUri()), 301);
                        exit;
                    }
                }
            }
        }

        /**
         * meta genarator
         *
         * @since 1.0.0
         */
        public function headGen()
        {
            echo "\n" . '<!-- Referral spam blacklist ' . $this->version . ' by Rolands Umbrovskis (rolandinsh) https://umbrovskis.com/ -->';
            echo "\n" . '<meta name="generator" content="https://simplemediacode.com/?utm_source=' . $this->wprsbline . '-' . $this->version . '" />' . "\n";
        }

        /**
         * Set plugin meta information.
         *
         * @since 1.0.0
         */
        public function setPluginMeta($links = array(), $file = false)
        {
            if ($file == WPRSBFILE) {
                $links = array_merge($links, array(
                    '<a href="http://www.amazon.de/registry/wishlist/3ARHPQ1SLAMPV?tag=rolandinshde-21">' . __("My Amazon.DE wishlist", "wprsb") . '</a>',
                    '<a href="https://www.paypal.com/cgi-bin/webscr?cmd=_donations&business=Z4ALL9WUMY3CL&lc=LV&item_name=Umbrovskis.%20WordPress%20plugins&item_number=004&currency_code=EUR&bn=PP-DonationsBF:btn_donate_SM.gif:NonHosted">' . __('Donate via PayPal', 'wprsb') . '</a>'
                ));
            }
            return $links;
        }

    }

}