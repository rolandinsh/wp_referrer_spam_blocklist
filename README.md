# WordPress referrer spam blacklist plugin

[WordPress plugin to fight with referrer spam](https://github.com/rolandinsh/wp_referrer_spam_blacklist). List based on https://github.com/piwik/referrer-spam-blacklist (Community-contributed list of referrer spammers).

No configuration! (yet!) 
Plugin in background redirects referral spammer to blank page ( about:blank ). Redirect link can be altered via filter `wp_referralblock_redirect_uri`. 

Plugin is for sites that can't edit their `.htaccess` or configure NGINX or Apache servers.

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

Download from WordPress.org: https://wordpress.org/plugins/wp-referrer-spam-blacklist/ 

Was usefull?

My Amazon wishlist: http://www.amazon.de/registry/wishlist/3ARHPQ1SLAMPV

Donate: https://www.paypal.com/cgi-bin/webscr?cmd=_donations&business=Z4ALL9WUMY3CL&lc=LV&item_name=Umbrovskis.%20WordPress%20plugins&item_number=004&currency_code=EUR&bn=PP-DonationsBF:btn_donate_SM.gif:NonHosted 
