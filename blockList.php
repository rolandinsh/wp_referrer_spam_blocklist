<?php

if (!class_exists('blockList')) {

    class blockList
    {

        public $version = '1.4.0';
        var $thisdir;

        function __construct()
        {
            $this->thisdir = $this->pluginDirPath();
 
        }

        public function pluginDirPath(){
            return apply_filters('wp_referralblock_plugindirpath', __DIR__);
        }

        public function theList()
        {
            /*
              List of referral spammers
             *
             */
            $spammersfile = $this->thisdir.'/spammers.txt';
            $theList = file($spammersfile, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
            // spam, virus, spyware, ...
            $extraSites = apply_filters('wp_referralblock_extralist', ["contextualyield.com"]);

            $grandList = array_merge($extraSites, $theList);

            return apply_filters('wp_referralblock_list', $grandList);
        }

// not yet in active use. Testing compatibility.
        public function getRemotelist()
        {

            // Check for transient, if none, grab remote TXT file
            if (false === ( $remotespammerlist = get_transient('wp_referralblock_remotelist') )) {

                // Get remote list
                $spammerslistresponse = wp_remote_get('https://raw.githubusercontent.com/matomo-org/referrer-spam-list/master/spammers.txt');

                // Check for error
                if (is_wp_error($spammerslistresponse)) {
//                $error_string = $spammerslistresponse->get_error_message();
//                $reportError = array('spammerslistresponse' => $error_string );
//                $this->remoteLog($reportError);
                    return;
                }

                // Parse remote spammer list
                $data = wp_remote_retrieve_body($spammerslistresponse);

                // Check for error
                if (is_wp_error($data)) {
//                $dataerror_string = $data->get_error_message();
//                $dataerror_reportError = array('dataerror' => $dataerror_string );
//                $this->remoteLog($dataerror_reportError);
                    return;
                }
                $spammerData = explode("\n", $data);

                // Store remote spammer list in transient, expire after 12 hours
                set_transient('wp_referralblock_remotelist', $data, 12 * HOUR_IN_SECONDS);
            }

            return $remotespammerlist;
        }

        public function remoteLog($error)
        {
            /**
             * @todo Options for remote log to spot issues. OPTIONAL. 
             *
             */
            return;
        }

        public function readList()
        {
            return get_transient('wp_referralblock_remotelist');
        }

    }

}