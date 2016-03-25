=== WP referrer spam blacklist (fight Referrer Spam in (Google/Piwik) Analytics) ===
Contributors: rolandinsh
Donate link: https://www.paypal.com/cgi-bin/webscr?cmd=_donations&business=Z4ALL9WUMY3CL&lc=LV&item_name=Umbrovskis.%20WordPress%20plugins&item_number=004&currency_code=EUR&bn=PP-DonationsBF:btn_donate_SM.gif:NonHosted
License: GPL
License URI: http://simplemediacode.com/license/gpl/
Tags: referral spam, anti-spam, antispam, comment moderation, comment spam, comments, contact form spam, spam, protection, block spam, spam blocker, spam filter, spambot, bp, buddypress, bbpress, redirect, semalt, seo, analytics, analytics block, analytics spam, block google spam, google spam, semalt.com, spam attack, ghost referrers, google analytics, google analytics referral spam, google referral spam, piwik,
Requires at least: 4.0
Tested up to: 4.4.2
Stable tag: 1.2.201603251

WordPress plugin to fight with 300 referrer spammers (like semalt, buttons-for-website and many more).

== Description ==

List of spammers in [FAQ](https://wordpress.org/plugins/wp-referrer-spam-blacklist/faq/).

No need for configuration! Plugin in background redirects referral spammer to blank page ( about:blank ). Redirect link can be altered via filter `wp_referralblock_redirect_uri`. 

NO auto update, as we see that as possible as security hole. We do not wan't Your site to get hacked.

Plugin is for sites that can't edit their `.htaccess` or configure NGINX or Apache servers.

Via [my LinkedIN post](http://go.mediabox.lv/1LbSuKq): Few months ago I started to collect referral spam pages in private file un bitbucket.org. Problem was that I did not know all spammers. Then, few weeks ago, I found that Piwik (Open source analytics) started their own "project", and they did the same thing I did - collected referral spam sites to block them from Your website.

On my own server I do that at server level, but some of my clients have hosting, where You can not edit server settings. This week I came up with another solution - Wordpress plugin "WP referrer spam blacklist". I will update list every week from [Piwik's community-contributed list of spammers](https://github.com/piwik/referrer-spam-blacklist).

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
2. Activate the WP referrer spam blacklist plugin through the 'Plugins' menu in WordPress
3. Done

WP-CLI

`wp plugin install wp-referrer-spam-blacklist --activate`

== Frequently Asked Questions ==

= What sites included? =

These from [Piwik's referrer-spam-blacklist](https://github.com/rolandinsh/wp_referrer_spam_blacklist/blob/master/spammers.txt): 

0n-line.tv, 100dollars-seo.com, 12masterov.com, 1pamm.ru, 1webmaster.ml, 2your.site, 4webmasters.org, 5forex.ru, 7makemoneyonline.com, 7zap.com, acads.net, acunetix-referrer.com, adcash.com, adf.ly, adspart.com, adventureparkcostarica.com, adviceforum.info, affordablewebsitesandmobileapps.com, afora.ru, akuhni.by, alibestsale.com, allknow.info, allnews.md, allwomen.info, alpharma.net, altermix.ua, amt-k.ru, anal-acrobats.hol.es, anapa-inns.ru, android-style.com, anticrawler.org, arendakvartir.kz, arkkivoltti.net, artparquet.ru, aruplighting.com, autovideobroadcast.com, aviva-limoux.com, azartclub.org, baixar-musicas-gratis.com, baladur.ru, balitouroffice.com, bard-real.com.ua, best-seo-offer.com, best-seo-software.xyz, best-seo-solution.com, bestmobilityscooterstoday.com, bestwebsitesawards.com, bif-ru.info, biglistofwebsites.com, billiard-classic.com.ua, bizru.info, black-friday.ga, blackhatworth.com, blogtotal.de, blue-square.biz, bluerobot.info, brakehawk.com, break-the-chains.com, brk-rti.ru, brothers-smaller.ru, budmavtomatika.com.ua, burger-imperia.com, buttons-for-website.com, buttons-for-your-website.com, buy-cheap-online.info, buy-forum.ru, cardiosport.com.ua, cartechnic.ru, cenokos.ru, cenoval.ru, cezartabac.ro, chinese-amezon.com, ci.ua, cityadspix.com, civilwartheater.com, clicksor.com, coderstate.com, codysbbq.com, conciergegroup.org, connectikastudio.com, copyrightclaims.org, covadhosting.biz, cubook.supernew.org, customsua.com.ua, cyber-monday.ga, dailyrank.net, darodar.com, dbutton.net, delfin-aqua.com.ua, demenageur.com, descargar-musica-gratis.net, detskie-konstruktory.ru, dipstar.org, djekxa.ru, dktr.ru, dojki-hd.com, domination.ml, doska-vsem.ru, dostavka-v-krym.com, drupa.com, dvr.biz.ua, e-buyeasy.com, e-kwiaciarz.pl, ecomp3.ru, econom.co, edakgfvwql.ru, egovaleo.it, ekatalog.xyz, ekto.ee, elmifarhangi.com, erot.co, escort-russian.com, este-line.com.ua, euromasterclass.ru, europages.com.ru, eurosamodelki.ru, event-tracking.com, fast-wordpress-start.com, fbdownloader.com, floating-share-buttons.com, for-your.website, forex-procto.ru, forsex.info, forum69.info, free-floating-buttons.com, free-share-buttons.com, free-social-buttons.com, free-social-buttons.xyz, free-traffic.xyz, freewhatsappload.com, fsalas.com, generalporn.org, germes-trans.com, get-free-social-traffic.com, get-free-traffic-now.com, get-your-social-buttons.info, ghazel.ru, girlporn.ru, gkvector.ru, glavprofit.ru, gobongo.info, goodprotein.ru, googlemare.com, googlsucks.com, guardlink.org, handicapvantoday.com, hdmoviecamera.net, hongfanji.com, hosting-tracker.com, howopen.ru, howtostopreferralspam.eu, hulfingtonpost.com, humanorightswatch.org, hundejo.com, hvd-store.com, ico.re, igru-xbox.net, ilikevitaly.com, iloveitaly.ro, iloveitaly.ru, ilovevitaly.co, ilovevitaly.com, ilovevitaly.info, ilovevitaly.org, ilovevitaly.ru, iminent.com, imperiafilm.ru, investpamm.ru, iskalko.ru, ispaniya-costa-blanca.ru, it-max.com.ua, jjbabskoe.ru, justprofit.xyz, kabbalah-red-bracelets.com, kambasoft.com, kazrent.com, kino-fun.ru, kino-key.info, kinopolet.net, knigonosha.net, konkursov.net, laxdrills.com, littleberry.ru, livefixer.com, lsex.xyz, luxup.ru, makemoneyonline.com, manualterap.roleforum.ru, maridan.com.ua, masterseek.com, mebelcomplekt.ru, mebeldekor.com.ua, med-zdorovie.com.ua, minegam.com, mirobuvi.com.ua, mirtorrent.net, mobilemedia.md, moyakuhnia.ru, muscle-factory.com.ua, myftpupload.com, net-profits.xyz, niki-mlt.ru, novosti-hi-tech.ru, nufaq.com, o-o-6-o-o.com, o-o-6-o-o.ru, o-o-8-o-o.com, o-o-8-o-o.ru, online-hit.info, onlinetvseries.me, onlywoman.org, ooo-olni.ru, ozas.net, palvira.com.ua, petrovka-online.com, photokitchendesign.com, pizza-imperia.com, pizza-tycoon.com, pops.foundation, pornhub-forum.ga, pornhub-forum.uni.me, pornhub-ru.com, pornoforadult.com, portnoff.od.ua, pozdravleniya-c.ru, priceg.com, pricheski-video.com, prlog.ru, producm.ru, prodvigator.ua, prointer.net.ua, promoforum.ru, psa48.ru, qualitymarketzone.com, quit-smoking.ga, qwesa.ru, rank-checker.online, rankings-analytics.com, ranksonic.info, ranksonic.net, ranksonic.org, rapidgator-porn.ga, rcb101.ru, rednise.com, research.ifmo.ru, resellerclub.com, responsive-test.net, reversing.cc, rightenergysolutions.com.au, rospromtest.ru, rusexy.xyz, sady-urala.ru, sanjosestartups.com, santasgift.ml, savetubevideo.com, screentoolkit.com, scripted.com, search-error.com, semalt.com, semaltmedia.com, seo-platform.com, seo-smm.kz, seoanalyses.com, seoexperimenty.ru, seopub.net, sexyali.com, sexyteens.hol.es, share-buttons.xyz, sharebutton.net, sharebutton.to, shop.xz618.com, sibecoprom.ru, simple-share-buttons.com, siteripz.net, sitevaluation.org, sledstvie-veli.net, slftsdybbg.ru, slkrm.ru, smailik.org, snip.to, snip.tw, soaksoak.ru, social-buttons.com, social-widget.xyz, socialseet.ru, sohoindia.net, solnplast.ru, sosdepotdebilan.com, spravka130.ru, steame.ru, success-seo.com, superiends.org, taihouse.ru, tattooha.com, tedxrj.com, theguardlan.com, tomck.com, top1-seo-service.com, topseoservices.co, traffic-cash.xyz, traffic2cash.org, traffic2cash.xyz, traffic2money.com, trafficgenius.xyz, trafficmonetize.org, trafficmonetizer.org, trion.od.ua, uasb.ru, uptime.com, uptimechecker.com, uzungil.com, video--production.com, video-woman.com, videos-for-your-business.com, viel.su, viktoria-center.ru, vodaodessa.com, vodkoved.ru, w3javascript.com, web-revenue.xyz, webmaster-traffic.com, webmonetizer.net, website-analyzer.info, websites-reviews.com, websocial.me, wmasterlead.com, wordpress-crew.net, wordpresscore.com, ykecwqlixx.ru, youporn-forum.ga, youporn-forum.uni.me, youporn-ru.com, yourserverisdown.com, zastroyka.org, годом.рф, грузоподъемные-машины.рф, лечениенаркомании.com, непереводимая.рф, профмонтаж-врн.рф, снятьдомвсевастополе.рф, холодныйобзвон.рф

== Screenshots ==

1. none
 
== Changelog ==

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
* Enhance: spammer list updates + extra spammers which are not in PIWIK's list

= 1.0.2 =
* Enhance: minor updates

= 1.0.1 =
* Enhance: Better naming, code comments and my wishlist 
* FIX: E_WARNING Missing argument 1 for wpReferralBlacklist::referral(),

= 1.0.0 =

Proof of concept

== Upgrade Notice ==

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
* Enhance: spammer list updates + extra spammers which are not in PIWIK's list

= 1.0.2 =
* Enhance: minor updates

= 1.0.1 =
* FIX: E_WARNING Missing argument 1 for wpReferralBlacklist::referral(),

= 1.0.0 =

* Proof of concept
