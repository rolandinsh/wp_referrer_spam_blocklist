# WordPress referrer spam blacklist plugin

WordPress plugin to fight with referrer spammers (like semalt, buttons-for-website and many more) and do not mess Google Analytics.

Via [my LinkedIN post](https://www.linkedin.com/pulse/fighting-referral-spam-wordpress-way-rolands-umbrovskis-): Few months ago I started to collect referral spam pages in private file un bitbucket.org. Problem was that I did not know all spammers. Then, few weeks ago, I found that Piwik (Open source analytics) started their own "project", and they did the same thin I did - collected referral spam sites to block them from Your website.

On my own server I do that at server level, but some of my clients have hosting, where You can not edit server settings. This week I came up with another solution - Wordpress plugin "WP referrer spam blacklist". I will update list every week from [Piwik's community-contributed list of spammers](https://github.com/piwik/referrer-spam-blacklist).

If You have WordPress site and no knowledge about or access to server settings, I made that for You!

No need for configuration!  

Plugin in background redirects referral spammer to blank page ( `about:blank` ). Redirect link can be altered via filter `wp_referralblock_redirect_uri`. 

Plugin is for sites that can't edit their `.htaccess` or configure NGINX or Apache servers.

### Referrer spam

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

## Download

* from WordPress.org: https://wordpress.org/plugins/wp-referrer-spam-blacklist/ 
* WP-CLI ```wp plugin install wp-referrer-spam-blacklist --activate``` 

## How to add new spammer?

Do it on Piwik's project: https://github.com/piwik/referrer-spam-blacklist 

## Versions
 
* [1.1.x](https://github.com/rolandinsh/wp_referrer_spam_blacklist/milestones/1.1) improvements
* [1.0.x](https://github.com/rolandinsh/wp_referrer_spam_blacklist/milestones/1.0) proof of concept

## Was usefull?

* My Amazon wishlist: http://www.amazon.de/registry/wishlist/3ARHPQ1SLAMPV
* Donate: https://www.paypal.com/cgi-bin/webscr?cmd=_donations&business=Z4ALL9WUMY3CL&lc=LV&item_name=Umbrovskis.%20WordPress%20plugins&item_number=004&currency_code=EUR&bn=PP-DonationsBF:btn_donate_SM.gif:NonHosted 
