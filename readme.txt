=== WP referrer spam blocklist ===
Contributors: rolandinsh
Donate link: https://www.paypal.com/cgi-bin/webscr?cmd=_donations&business=Z4ALL9WUMY3CL&lc=LV&item_name=Umbrovskis.%20WordPress%20plugins&item_number=004&currency_code=EUR&bn=PP-DonationsBF:btn_donate_SM.gif:NonHosted
License: GPL
License URI: https://simplemediacode.com/license/gpl/
Tags: referral spam, anti-spam, antispam, comment moderation, comment spam, comments, contact form spam, spam, protection, block spam, spam blocker, spam filter, spambot, bp, buddypress, bbpress, redirect, semalt, seo, analytics, analytics block, analytics spam, block google spam, google spam, semalt.com, spam attack, ghost referrers, google analytics, google analytics referral spam, google referral spam, piwik, matomo
Requires at least: 4.0
Tested up to: 5.6
Stable tag: 1.3.0

WordPress plugin to fight with 2040+ referrer spammers (like semalt, buttons-for-website and many more).

== Description ==

List of spammers in [FAQ](https://wordpress.org/plugins/wp-referrer-spam-blacklist/faq/).

No need for configuration! Plugin in background redirects referral spammer to blank page ( about:blank ). Redirect link can be altered via filter `wp_referralblock_redirect_uri`. 

NO auto update, as we see that as possible as security hole. We do not wan't Your site to get hacked.

Plugin is for sites that can't edit their `.htaccess` or configure NGINX or Apache servers.

Via [my LinkedIN post](http://go.mediabox.lv/1LbSuKq): Few months ago I started to collect referral spam pages in private file un bitbucket.org. Problem was that I did not know all spammers. Then, few weeks ago, I found that Matomo (Open source analytics) started their own "project", and they did the same thing I did - collected referral spam sites to block them from Your website.

On my own server I do that at server level, but some of my clients have hosting, where You can not edit server settings. This week I came up with another solution - Wordpress plugin "WP referrer spam blocklist". I will update list every week from [Matomo's community-contributed list of spammers](https://github.com/matomo-org/referrer-spam-list).

If You have WordPress site and no knowledge about or access to server settings, I made that for You!

From [Wikipedia](https://en.wikipedia.org/wiki/Referer_spam): 

`Referrer spam (also known as log spam or referrer 
bombing) is a kind of spamdexing (spamming aimed 
at search engines). The technique involves making 
repeated web site requests using a fake referer URL 
to the site the spammer wishes to advertise. Sites that 
publish their access logs, including referer statistics, 
will then inadvertently link back to the spammer's site. 
These links will be indexed by search engines 
as they crawl the access logs. 

This benefits the spammer because the free link improves 
the spammer site's search engine ranking owing 
to link-counting algorithms that search engines use.`

Other plugins by author: [itemprop WP for SERP/SEO Rich snippets](https://wordpress.org/plugins/itempropwp/) - Add schema.org itemprop code to the (custom) post content for search engines and bots for better SERP results 
 
== Installation ==

1. Upload to the `/wp-content/plugins/` directory
2. Activate the WP referrer spam blocklist plugin through the 'Plugins' menu in WordPress
3. Done

WP-CLI

`wp plugin install wp-referrer-spam-blacklist --activate`

== Frequently Asked Questions ==

= What sites included? =

These from [Matomo's referrer-spam-list](https://github.com/rolandinsh/wp_referrer_spam_blocklist/blob/master/spammers.txt): 

== Screenshots ==

1. none
 
== Changelog ==
= 1.3.0 =
* Enhance: read spammer list from file (list version 1.4.0)
 
= 1.2.201801281 =
* Piwik => Matomo
* Enhance: spammer list updates (list version 1.3.30)

= 1.2.201707101 =
* Enhance: spammer list updates (list version 1.3.29)

= 1.2.201705311 =
* Enhance: spammer list updates (list version 1.3.28)

= 1.2.201701181 =
* EXPERIMENTAL: W3 Total cache DONOTCACHE if hit by spammer
* Enhance: spammer list updates (list version 1.3.27)

= 1.2.201612101 =
* FIX: [PHP Notice: Undefined index: HTTP_REFERER; Issue #7](https://github.com/rolandinsh/wp_referrer_spam_blocklist/issues/7)
* Enhance: spammer list updates (list version 1.3.26)

= 1.2.201610241 =
* Enhance: spammer list updates (list version 1.3.25)

= 1.2.201610061 =
* Enhance: better way to get domain name

= 1.2.201610051 =
* Enhance: spammer list updates (list version 1.3.24)

= 1.2.201609061 =
* Enhance: spammer list updates (list version 1.3.23)

= 1.2.201608031 =
* Enhance: spammer list updates (list version 1.3.22)


= 1.2.201607041 =
* BUG fix: whitescreen ([issue #5](https://github.com/rolandinsh/wp_referrer_spam_blocklist/issues/5))

= 1.2.201606241 =
* Enhance: spammer list updates (list version 1.3.21)

= 1.2.201605231 =
* FIXED: PHP 5.5+ Warning: Missing argument 1 for wpReferralBlacklist::wpReferralblockRedirectUri()
* Enhance: spammer list updates (list version 1.3.20)

= 1.2.201605111 =
* FIXED: missed spam domains
* Enhance: spammer list updates (list version 1.3.19)

= 1.2.201604171 =
* Enhance: spammer list updates (list version 1.3.18)

= 1.2.201604111 =
* Enhance: spammer list updates (list version 1.3.17)

= 1.2.201603251 =
* Enhance: spammer list updates (list version 1.3.16)

= 1.2.201602241 =
* Enhance: spammer list updates (list version 1.3.15)

= 1.2.201602141 =
* Enhance: spammer list updates (list version 1.3.14)

= 1.2.201601131 =
* Enhance: spammer list updates (list version 1.3.12)

= 1.2.201512301 =
* Enhance: spammer list updates (list version 1.3.11)
* Enhance: check if PHP class exists
 
= 1.0.13 =
* Enhance: spammer list updates (list version 1.3.10) 

= 1.0.12 =
* Enhance: spammer list updates (list version 1.3.9) 

= 1.0.11 =
* Enhance: spammer list updates (list version 1.3.8) 

= 1.0.10 =
* Enhance: spammer list updates (list version 1.3.7) 

= 1.0.9 =
* Enhance: spammer list updates (list version 1.3.6) 

= 1.0.8 =
* Enhance: spammer list updates (list version 1.3.5) 

= 1.0.7 =
* Enhance: spammer list updates (list version 1.3.4)
* Enhance: compatibility with WordPress 4.3 
* Enhance: information about auto update of list

= 1.0.6 =
* Enhance: spammer list updates (list version 1.3.3)

= 1.0.5 =
* Enhance: spammer list updates (list version 1.3.2)

= 1.0.4 =
* Enhance: spammer list updates 

= 1.0.3 =
* Enhance: spammer list updates + extra spammers which are not in Matomo's list

= 1.0.2 =
* Enhance: minor updates

= 1.0.1 =
* Enhance: Better naming, code comments and my wishlist 
* FIX: E_WARNING Missing argument 1 for wpReferralBlacklist::referral(),

= 1.0.0 =

Proof of concept

== Upgrade Notice ==

= 1.3.0 =
* Read spammer list from file (list version 1.4.0)

= 1.2.201801281 =
* Piwik => Matomo;  Enhance: spammer list updates (list version 1.3.30)

= 1.2.201707101 =
* Enhance: spammer list updates (list version 1.3.29)

= 1.2.201705311 =
* Enhance: spammer list updates (list version 1.3.28)

= 1.2.201701181 =

EXPERIMENTAL: W3 Total cache DONOTCACHE if hit by spammer

= 1.2.201612101 =
FIX: [PHP Notice: Undefined index: HTTP_REFERER; Issue #7](https://github.com/rolandinsh/wp_referrer_spam_blocklist/issues/7), Enhance: spammer list updates (list version 1.3.26)

= 1.2.201610241 =
* Enhance: spammer list updates (list version 1.3.25)

= 1.2.201610061 =
* Enhance: better way to get domain name

= 1.2.201610051 =
* Enhance: spammer list updates (list version 1.3.24)

= 1.2.201609061 =
* Enhance: spammer list updates (list version 1.3.23)

= 1.2.201608031 =
* Enhance: spammer list updates (list version 1.3.22)

= 1.2.201607041 =
* BUG fix: whitescreen ([issue #5](https://github.com/rolandinsh/wp_referrer_spam_blocklist/issues/5))

= 1.2.201606241 =
* Enhance: spammer list updates (list version 1.3.21)

= 1.2.201605231 =
* FIXED: PHP 5.5+ Warning: Missing argument 1 for wpReferralBlacklist::wpReferralblockRedirectUri()

= 1.2.201604171 =
* Enhance: spammer list updates (list version 1.3.18)

= 1.2.201604111 =
* Enhance: spammer list updates (list version 1.3.17)

= 1.2.201603251 =
* Enhance: spammer list updates (list version 1.3.16)

= 1.2.201602241 =
* Enhance: spammer list updates (list version 1.3.15)

= 1.2.201602141 =
* Enhance: spammer list updates (list version 1.3.14)

= 1.2.201601131 =
* Enhance: spammer list updates (list version 1.3.12)

= 1.2.201512301 =
* Enhance: spammer list updates (list version 1.3.11)

= 1.0.13 =
* Enhance: spammer list updates (list version 1.3.10) 

= 1.0.12 =
* Enhance: spammer list updates (list version 1.3.9) 

= 1.0.11 =
* Enhance: spammer list updates (list version 1.3.8) 

= 1.0.10 =
* Enhance: spammer list updates (list version 1.3.7) 

= 1.0.9 =
* Enhance: spammer list updates (list version 1.3.6) 

= 1.0.8 =
* Enhance: spammer list updates (list version 1.3.5) 

= 1.0.7 =
* Enhance: spammer list updates (list version 1.3.4)
* Enhance: compatibility with WordPress 4.3 
* Enhance: information about auto update of list

= 1.0.6 =
* Enhance: spammer list updates (list version 1.3.3)

= 1.0.5 =
* Enhance: spammer list updates (list version 1.3.2)

= 1.0.4 =
* Enhance: spammer list updates 

= 1.0.3 =
* Enhance: spammer list updates + extra spammers which are not in Matomo's list

= 1.0.2 =
* Enhance: minor updates

= 1.0.1 =
* FIX: E_WARNING Missing argument 1 for wpReferralBlacklist::referral(),

= 1.0.0 =

* Proof of concept
