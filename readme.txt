=== WP referrer spam blacklist ===
Contributors: rolandinsh
Donate link: https://www.paypal.com/cgi-bin/webscr?cmd=_donations&business=Z4ALL9WUMY3CL&lc=LV&item_name=Umbrovskis.%20WordPress%20plugins&item_number=004&currency_code=EUR&bn=PP-DonationsBF:btn_donate_SM.gif:NonHosted
License: GPL
License URI: http://simplemediacode.com/license/gpl/
Tags: referral spam, anti-spam, antispam, comment moderation, comment spam, comments, contact form spam, spam, protection, block spam, spam blocker, spam filter, spambot, 
Requires at least: 4.0
Tested up to: 4.2.2
Stable tag: 1.0.0

WordPress plugin to fight with community-contributed list of referrer spammers

== Description ==

[WordPress plugin to fight with referrer spam](https://github.com/rolandinsh/wp_referrer_spam_blacklist). List based on https://github.com/piwik/referrer-spam-blacklist (Community-contributed list of referrer spammers).

No configuration! (yet!) 
Plugin in background redirects referral spammer to blank page ( about:blank ). Redirect link can be altered via filter `wp_referralblock_redirect_uri`. 

Plugin is for sites that can't edit their `.htaccess` or configure NGINX or Apache servers.

From [Wikipedia](https://en.wikipedia.org/wiki/Referer_spam): 

`Referrer spam (also known as log spam or referrer bombing) is a kind of spamdexing (spamming aimed 
at search engines). The technique involves making repeated web site requests using a fake referer URL 
to the site the spammer wishes to advertise. Sites that publish their access logs, including referer statistics, 
will then inadvertently link back to the spammer's site. These links will be indexed by search engines 
as they crawl the access logs. 

This benefits the spammer because the free link improves the spammer site's search engine ranking 
owing to link-counting algorithms that search engines use.`
 
== Installation ==

1. Upload to the `/wp-content/plugins/` directory
2. Activate the WP referrer spam blacklist plugin through the 'Plugins' menu in WordPress
3. Done

== Frequently Asked Questions ==

None

== Screenshots ==

1. none
 
== Changelog ==

= 1.0.0 =

First init

== Upgrade Notice ==

= 1.0.0 =
* First init
