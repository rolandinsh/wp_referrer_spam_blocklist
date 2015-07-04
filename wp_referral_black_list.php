<?php
/**
 * Plugin Name: WP referrer spam blacklist
 * Plugin URI: http://http://simplemediacode.com/?utm_source=WPplugin%3Awp-referrer-spam-blacklist&utm_medium=wordpressplugin&utm_campaign=FreeWordPressPlugins&utm_content=v-1-0-0
 * Description: WordPress plugin to fight with referrer spam. List based on https://github.com/piwik/referrer-spam-blacklist (Community-contributed list of referrer spammers)
 * Version: 1.0.0
 * Stable tag: 1.0.0
 * Requires at least: 4.0
 * Tested up to: 4.2.2
 * Author: Rolands Umbrovskis
 * Author URI: http://umbrovskis.com
 * License: SimpleMediaCode
 * License URI: http://simplemediacode.com/license/gpl/
 */
/*
  Copyright 2015  Rolands Umbrovskis (info at mediabox dot lv)

  This program is free software; you can redistribute it and/or modify
  it under the terms of the GNU General Public License as published by
  the Free Software Foundation; either version 2 of the License, or
  (at your option) any later version.

  This program is distributed in the hope that it will be useful,
  but WITHOUT ANY WARRANTY; without even the implied warranty of
  MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
  GNU General Public License for more details.

  You should have received a copy of the GNU General Public License
  along with this program; if not, write to the Free Software
  Foundation, Inc., 51 Franklin St, Fifth Floor, Boston, MA  02110-1301  USA
 */

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
include_once dirname(__FILE__) . '/blockList.php'; // in case someone need it somewhere else in WordPress site or PHP project
include_once dirname(__FILE__) . '/wpReferralBlackList.php';

new wpReferralBlacklist();
