=== WP referrer spam blacklist (fight 521+ Referrer Spammers in (Google/Piwik) Analytics) ===
Contributors: rolandinsh
Donate link: https://www.paypal.com/cgi-bin/webscr?cmd=_donations&business=Z4ALL9WUMY3CL&lc=LV&item_name=Umbrovskis.%20WordPress%20plugins&item_number=004&currency_code=EUR&bn=PP-DonationsBF:btn_donate_SM.gif:NonHosted
License: GPL
License URI: http://simplemediacode.com/license/gpl/
Tags: referral spam, anti-spam, antispam, comment moderation, comment spam, comments, contact form spam, spam, protection, block spam, spam blocker, spam filter, spambot, bp, buddypress, bbpress, redirect, semalt, seo, analytics, analytics block, analytics spam, block google spam, google spam, semalt.com, spam attack, ghost referrers, google analytics, google analytics referral spam, google referral spam, piwik,
Requires at least: 4.0
Tested up to: 4.8
Stable tag: 1.2.201707101

WordPress plugin to fight with 500+ referrer spammers (like semalt, buttons-for-website and many more).

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

0n-line.tv, 1-99seo.com, 1-free-share-buttons.com, 100dollars-seo.com, 100searchengines.com, 12masterov.com, 1pamm.ru, 1webmaster.ml, 24x7-server-support.site, 2your.site, 3-letter-domains.net, 4istoshop.com, 4webmasters.org, 5forex.ru, 6hopping.com, 7makemoneyonline.com, 7zap.com, abc.xyz, abcdefh.xyz, abcdeg.xyz, abclauncher.com, acads.net, acunetix-referrer.com, adcash.com, adf.ly, adspart.com, adtiger.tk, adventureparkcostarica.com, adviceforum.info, advokateg.xyz, affordablewebsitesandmobileapps.com, afora.ru, akuhni.by, alfabot.xyz, alibestsale.com, allknow.info, allnews24.in, allnews.md, allwomen.info, alpharma.net, altermix.ua, amazon-seo-service.com, amt-k.ru, anal-acrobats.hol.es, analytics-ads.xyz, anapa-inns.ru, android-style.com, anticrawler.org, arendakvartir.kz, arendovalka.xyz, arkkivoltti.net, artparquet.ru, aruplighting.com, autovideobroadcast.com, aviva-limoux.com, azartclub.org, azbukafree.com, azlex.uz, baixar-musicas-gratis.com, baladur.ru, balitouroffice.com, bard-real.com.ua, best-seo-offer.com, best-seo-software.xyz, best-seo-solution.com, bestmobilityscooterstoday.com, bestwebsitesawards.com, bif-ru.info, biglistofwebsites.com, billiard-classic.com.ua, bio-market.kz, biteg.xyz, bizru.info, black-friday.ga, blackhatworth.com, blogtotal.de, blue-square.biz, bluerobot.info, boltalko.xyz, boostmyppc.com, brakehawk.com, brateg.xyz, break-the-chains.com, brk-rti.ru, brothers-smaller.ru, budilneg.xyz, budmavtomatika.com.ua, buketeg.xyz, bukleteg.xyz, burger-imperia.com, burn-fat.ga, buttons-for-website.com, buttons-for-your-website.com, buy-cheap-online.info, buy-cheap-pills-order-online.com, buy-forum.ru, call-of-duty.info, cardiosport.com.ua, cartechnic.ru, cenokos.ru, cenoval.ru, cezartabac.ro, chcu.net, chinese-amezon.com, ci.ua, cityadspix.com, civilwartheater.com, clicksor.com, coderstate.com, codysbbq.com, compliance-alex.xyz, compliance-alexa.xyz, compliance-andrew.xyz, compliance-barak.xyz, compliance-brian.xyz, compliance-don.xyz, compliance-donald.xyz, compliance-elena.xyz, compliance-fred.xyz, compliance-george.xyz, compliance-irvin.xyz, compliance-ivan.xyz, compliance-john.top, compliance-julianna.top, conciergegroup.org, connectikastudio.com, cookie-law-enforcement-aa.xyz, cookie-law-enforcement-bb.xyz, cookie-law-enforcement-cc.xyz, cookie-law-enforcement-dd.xyz, cookie-law-enforcement-ee.xyz, cookie-law-enforcement-ff.xyz, cookie-law-enforcement-gg.xyz, cookie-law-enforcement-hh.xyz, cookie-law-enforcement-ii.xyz, cookie-law-enforcement-jj.xyz, cookie-law-enforcement-kk.xyz, cookie-law-enforcement-ll.xyz, cookie-law-enforcement-mm.xyz, cookie-law-enforcement-nn.xyz, cookie-law-enforcement-oo.xyz, cookie-law-enforcement-pp.xyz, cookie-law-enforcement-qq.xyz, cookie-law-enforcement-rr.xyz, cookie-law-enforcement-ss.xyz, cookie-law-enforcement-tt.xyz, cookie-law-enforcement-uu.xyz, cookie-law-enforcement-vv.xyz, cookie-law-enforcement-ww.xyz, cookie-law-enforcement-xx.xyz, cookie-law-enforcement-yy.xyz, cookie-law-enforcement-zz.xyz, copyrightclaims.org, covadhosting.biz, cubook.supernew.org, customsua.com.ua, cyber-monday.ga, dailyrank.net, darodar.com, dbutton.net, delfin-aqua.com.ua, demenageur.com, descargar-musica-gratis.net, detskie-konstruktory.ru, dipstar.org, dividendo.ru, djekxa.ru, djonwatch.ru, dktr.ru, dogsrun.net, dojki-hd.com, domain-tracker.com, dominateforex.ml, domination.ml, doska-vsem.ru, dostavka-v-krym.com, drupa.com, dvr.biz.ua, e-buyeasy.com, e-commerce-seo.com, e-commerce-seo1.com, e-kwiaciarz.pl, easycommerce.cf, ecommerce-seo.org, ecomp3.ru, econom.co, edakgfvwql.ru, egovaleo.it, ekatalog.xyz, ekto.ee, elmifarhangi.com, erot.co, escort-russian.com, este-line.com.ua, eu-cookie-law-enforcement2.xyz, euromasterclass.ru, europages.com.ru, eurosamodelki.ru, event-tracking.com, eyes-on-you.ga, fast-wordpress-start.com, fbdownloader.com, fix-website-errors.com, floating-share-buttons.com, for-your.website, forex-procto.ru, forsex.info, forum69.info, free-fb-traffic.com, free-floating-buttons.com, free-share-buttons.com, free-social-buttons.com, free-social-buttons.xyz, free-social-buttons7.xyz, free-traffic.xyz, free-video-tool.com, freenode.info, freewhatsappload.com, fsalas.com, gearcraft.us, generalporn.org, germes-trans.com, get-free-social-traffic.com, get-free-traffic-now.com, get-your-social-buttons.info, getlamborghini.ga, getrichquick.ml, getrichquickly.info, ghazel.ru, ghostvisitor.com, girlporn.ru, gkvector.ru, glavprofit.ru, gobongo.info, goodprotein.ru, google-liar.ru, googlemare.com, googlsucks.com, guardlink.org, handicapvantoday.com, havepussy.com, hdmoviecamera.net, hdmoviecams.com, hongfanji.com, hosting-tracker.com, housediz.com, howopen.ru, howtostopreferralspam.eu, hulfingtonpost.com, humanorightswatch.org, hundejo.com, hvd-store.com, ico.re, igadgetsworld.com, igru-xbox.net, ilikevitaly.com, iloveitaly.ro, iloveitaly.ru, ilovevitaly.co, ilovevitaly.com, ilovevitaly.info, ilovevitaly.org, ilovevitaly.ru, ilovevitaly.xyz, iminent.com, imperiafilm.ru, increasewwwtraffic.info, insider.pro, interferencer.ru, investpamm.ru, iskalko.ru, ispaniya-costa-blanca.ru, it-max.com.ua, jjbabskoe.ru, justprofit.xyz, kabbalah-red-bracelets.com, kambasoft.com, kazrent.com, keywords-monitoring-success.com, keywords-monitoring-your-success.com, kino-fun.ru, kino-key.info, kinopolet.net, knigonosha.net, konkursov.net, landoftracking.com, laptop-4-less.com, law-check-two.xyz, law-enforcement-ee.xyz, law-enforcement-bot-ff.xyz, law-enforcement-check-three.xyz, law-six.xyz, laxdrills.com, legalrc.biz, littleberry.ru, livefixer.com, lsex.xyz, lumb.co, luxup.ru, magicdiet.gq, makemoneyonline.com, makeprogress.ga, manualterap.roleforum.ru, marblestyle.ru, maridan.com.ua, marketland.ml, masterseek.com, mebelcomplekt.ru, mebeldekor.com.ua, meduza-consult.ru, med-zdorovie.com.ua, meds-online24.com, minegam.com, mirobuvi.com.ua, mirtorrent.net, mobilemedia.md, mockupui.com, monetizationking.net, moneytop.ru, mosrif.ru, moyakuhnia.ru, muscle-factory.com.ua, myftpupload.com, myplaycity.com, net-profits.xyz, niki-mlt.ru, novosti-hi-tech.ru, nufaq.com, o-o-11-o-o.com, o-o-6-o-o.com, o-o-6-o-o.ru, o-o-8-o-o.com, o-o-8-o-o.ru, online-hit.info, online-templatestore.com, onlinetvseries.me, onlywoman.org, ooo-olni.ru, ownshop.cf, ozas.net, paidonlinesites.com, palvira.com.ua, petrovka-online.com, photokitchendesign.com, piulatte.cz, pizza-imperia.com, pizza-tycoon.com, popads.net, pops.foundation, pornhub-forum.ga, pornhub-forum.uni.me, pornhub-ru.com, pornoforadult.com, pornogig.com, pornoklad.ru, portnoff.od.ua, pozdravleniya-c.ru, priceg.com, pricheski-video.com, prlog.ru, producm.ru, prodvigator.ua, prointer.net.ua, promoforum.ru, pron.pro, psa48.ru, qualitymarketzone.com, quit-smoking.ga, qwesa.ru, rank-checker.online, rankings-analytics.com, ranksonic.info, ranksonic.net, ranksonic.org, rapidgator-porn.ga, rcb101.ru, rednise.com, replica-watch.ru, research.ifmo.ru, resellerclub.com, responsive-test.net, reversing.cc, rightenergysolutions.com.au, rospromtest.ru, rumamba.com, rusexy.xyz, sad-torg.com.ua, sady-urala.ru, sanjosestartups.com, santasgift.ml, savetubevideo.com, savetubevideo.info, screentoolkit.com, scripted.com, search-error.com, semalt.com, semaltmedia.com, seo-2-0.com, seo-platform.com, seo-smm.kz, seoanalyses.com, seoexperimenty.ru, seopub.net, sexsaoy.com, sexyali.com, sexyteens.hol.es, share-buttons-for-free.com, share-buttons.xyz, sharebutton.io, sharebutton.net, sharebutton.to, shop.xz618.com, sibecoprom.ru, simple-share-buttons.com, site-auditor.online, site5.com, siteripz.net, sitevaluation.org, sledstvie-veli.net, slftsdybbg.ru, slkrm.ru, slow-website.xyz, smailik.org, smartphonediscount.info, snip.to, snip.tw, soaksoak.ru, social-button.xyz, social-buttons-ii.xyz, social-buttons.com, social-traffic-1.xyz, social-traffic-2.xyz, social-traffic-3.xyz, social-traffic-4.xyz, social-traffic-5.xyz, social-traffic-7.xyz, social-widget.xyz, socialbuttons.xyz, socialseet.ru, socialtrade.biz, sohoindia.net, solitaire-game.ru, solnplast.ru, sosdepotdebilan.com, speedup-my.site, spin2016.cf, spravka130.ru, steame.ru, success-seo.com, superiends.org, supervesti.ru, taihouse.ru, tattooha.com, tedxrj.com, theguardlan.com, thesmartsearch.net, tomck.com, top1-seo-service.com, top10-way.com, topquality.cf, topseoservices.co, track-rankings.online, traffic-cash.xyz, traffic2cash.org, traffic2cash.xyz, traffic2money.com, trafficgenius.xyz, trafficmonetize.org, trafficmonetizer.org, trion.od.ua, uasb.ru, unpredictable.ga, uptime.com, uptimechecker.com, uzungil.com, varikozdok.ru, vc.ru, vesnatehno.com, video--production.com, video-woman.com, videos-for-your-business.com, viel.su, viktoria-center.ru, vodaodessa.com, vodkoved.ru, w3javascript.com, wallpaperdesk.info, web-revenue.xyz, webmaster-traffic.com, webmonetizer.net, website-analytics.online, website-analyzer.info, website-speed-check.site, website-speed-checker.site, websites-reviews.com, websocial.me, weburlopener.com, wmasterlead.com, woman-orgasm.ru, wordpress-crew.net, wordpresscore.com, works.if.ua, ykecwqlixx.ru, youporn-forum.ga, youporn-forum.uni.me, youporn-ru.com, yourserverisdown.com, zastroyka.org, zoominfo.com, zvetki.ru, годом.рф, грузоподъемные-машины.рф, лечениенаркомании.com, непереводимая.рф, профмонтаж-врн.рф, снятьдомвсевастополе.рф, холодныйобзвон.рф

== Screenshots ==

1. none
 
== Changelog ==
= 1.2.201707101 =
* Enhance: spammer list updates (list version 1.3.29)

= 1.2.201705311 =
* Enhance: spammer list updates (list version 1.3.28)

= 1.2.201701181 =
* EXPERIMENTAL: W3 Total cache DONOTCACHE if hit by spammer
* Enhance: spammer list updates (list version 1.3.27)

= 1.2.201612101 =
* FIX: [PHP Notice: Undefined index: HTTP_REFERER; Issue #7](https://github.com/rolandinsh/wp_referrer_spam_blacklist/issues/7)
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
* BUG fix: whitescreen ([issue #5](https://github.com/rolandinsh/wp_referrer_spam_blacklist/issues/5))

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
* Enhance: spammer list updates + extra spammers which are not in PIWIK's list

= 1.0.2 =
* Enhance: minor updates

= 1.0.1 =
* Enhance: Better naming, code comments and my wishlist 
* FIX: E_WARNING Missing argument 1 for wpReferralBlacklist::referral(),

= 1.0.0 =

Proof of concept

== Upgrade Notice ==

= 1.2.201707101 =
* Enhance: spammer list updates (list version 1.3.29)

= 1.2.201705311 =
* Enhance: spammer list updates (list version 1.3.28)

= 1.2.201701181 =

EXPERIMENTAL: W3 Total cache DONOTCACHE if hit by spammer

= 1.2.201612101 =
FIX: [PHP Notice: Undefined index: HTTP_REFERER; Issue #7](https://github.com/rolandinsh/wp_referrer_spam_blacklist/issues/7), Enhance: spammer list updates (list version 1.3.26)

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
* BUG fix: whitescreen ([issue #5](https://github.com/rolandinsh/wp_referrer_spam_blacklist/issues/5))

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
* Enhance: spammer list updates + extra spammers which are not in PIWIK's list

= 1.0.2 =
* Enhance: minor updates

= 1.0.1 =
* FIX: E_WARNING Missing argument 1 for wpReferralBlacklist::referral(),

= 1.0.0 =

* Proof of concept
