# WordPress referrer spam blacklist plugin

WordPress plugin to fight with 300 referrer spammers (like semalt, buttons-for-website and many more).

Via [my LinkedIN post](http://go.mediabox.lv/1LbSuKq): Few months ago I started to collect referral spam pages in private file un bitbucket.org. Problem was that I did not know all spammers. Then, few weeks ago, I found that Piwik (Open source analytics) started their own "project", and they did the same thing I did - collected referral spam sites to block them from Your website.

On my own server I do that at server level, but some of my clients have hosting, where You can not edit server settings. This week I came up with another solution - Wordpress plugin "WP referrer spam blacklist". I will update list every week from [Piwik's community-contributed list of spammers](https://github.com/piwik/referrer-spam-blacklist).

If You have WordPress site and no knowledge about or access to server settings, I made that for You!

No need for configuration! 

NO auto update, as we see that as possible as security hole.

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

## Included sites

List version: 1.3.19

0n-line.tv, 100dollars-seo.com, 12masterov.com, 1pamm.ru, 1webmaster.ml, 2your.site, 4webmasters.org, 5forex.ru, 6hopping.com, 7makemoneyonline.com, 7zap.com, acads.net, acunetix-referrer.com, adcash.com, adf.ly, adspart.com, adtiger.tk, adventureparkcostarica.com, adviceforum.info, affordablewebsitesandmobileapps.com, afora.ru, akuhni.by, alibestsale.com, allknow.info, allnews.md, allwomen.info, alpharma.net, altermix.ua, amt-k.ru, anal-acrobats.hol.es, anapa-inns.ru, android-style.com, anticrawler.org, arendakvartir.kz, arkkivoltti.net, artparquet.ru, aruplighting.com, autovideobroadcast.com, aviva-limoux.com, azartclub.org, baixar-musicas-gratis.com, baladur.ru, balitouroffice.com, bard-real.com.ua, best-seo-offer.com, best-seo-software.xyz, best-seo-solution.com, bestmobilityscooterstoday.com, bestwebsitesawards.com, bif-ru.info, biglistofwebsites.com, billiard-classic.com.ua, bizru.info, black-friday.ga, blackhatworth.com, blogtotal.de, blue-square.biz, bluerobot.info, brakehawk.com, break-the-chains.com, brk-rti.ru, brothers-smaller.ru, budmavtomatika.com.ua, burger-imperia.com, buttons-for-website.com, buttons-for-your-website.com, buy-cheap-online.info, buy-forum.ru, cardiosport.com.ua, cartechnic.ru, cenokos.ru, cenoval.ru, cezartabac.ro, chinese-amezon.com, ci.ua, cityadspix.com, civilwartheater.com, clicksor.com, coderstate.com, codysbbq.com, conciergegroup.org, connectikastudio.com, copyrightclaims.org, covadhosting.biz, cubook.supernew.org, customsua.com.ua, cyber-monday.ga, dailyrank.net, darodar.com, dbutton.net, delfin-aqua.com.ua, demenageur.com, descargar-musica-gratis.net, detskie-konstruktory.ru, dipstar.org, djekxa.ru, dktr.ru, dojki-hd.com, domain-tracker.com, domination.ml, doska-vsem.ru, dostavka-v-krym.com, drupa.com, dvr.biz.ua, e-buyeasy.com, e-kwiaciarz.pl, ecomp3.ru, econom.co, edakgfvwql.ru, egovaleo.it, ekatalog.xyz, ekto.ee, elmifarhangi.com, erot.co, escort-russian.com, este-line.com.ua, euromasterclass.ru, europages.com.ru, eurosamodelki.ru, event-tracking.com, fast-wordpress-start.com, fbdownloader.com, floating-share-buttons.com, for-your.website, forex-procto.ru, forsex.info, forum69.info, free-floating-buttons.com, free-share-buttons.com, free-social-buttons.com, free-social-buttons.xyz, free-traffic.xyz, free-video-tool.com, freewhatsappload.com, fsalas.com, generalporn.org, germes-trans.com, get-free-social-traffic.com, get-free-traffic-now.com, get-your-social-buttons.info, getrichquick.ml, getrichquickly.info, ghazel.ru, girlporn.ru, gkvector.ru, glavprofit.ru, gobongo.info, goodprotein.ru, googlemare.com, googlsucks.com, guardlink.org, handicapvantoday.com, hdmoviecamera.net, hongfanji.com, hosting-tracker.com, howopen.ru, howtostopreferralspam.eu, hulfingtonpost.com, humanorightswatch.org, hundejo.com, hvd-store.com, ico.re, igru-xbox.net, ilikevitaly.com, iloveitaly.ro, iloveitaly.ru, ilovevitaly.co, ilovevitaly.com, ilovevitaly.info, ilovevitaly.org, ilovevitaly.ru, iminent.com, imperiafilm.ru, investpamm.ru, iskalko.ru, ispaniya-costa-blanca.ru, it-max.com.ua, jjbabskoe.ru, justprofit.xyz, kabbalah-red-bracelets.com, kambasoft.com, kazrent.com, keywords-monitoring-your-success.com, kino-fun.ru, kino-key.info, kinopolet.net, knigonosha.net, konkursov.net, laxdrills.com, littleberry.ru, livefixer.com, lsex.xyz, luxup.ru, makemoneyonline.com, makeprogress.ga, manualterap.roleforum.ru, maridan.com.ua, marketland.ml, masterseek.com, mebelcomplekt.ru, mebeldekor.com.ua, med-zdorovie.com.ua, minegam.com, mirobuvi.com.ua, mirtorrent.net, mobilemedia.md, moyakuhnia.ru, muscle-factory.com.ua, myftpupload.com, myplaycity.com, net-profits.xyz, niki-mlt.ru, novosti-hi-tech.ru, nufaq.com, o-o-11-o-o.com, o-o-6-o-o.com, o-o-6-o-o.ru, o-o-8-o-o.com, o-o-8-o-o.ru, online-hit.info, onlinetvseries.me, onlywoman.org, ooo-olni.ru, ozas.net, palvira.com.ua, petrovka-online.com, photokitchendesign.com, pizza-imperia.com, pizza-tycoon.com, pops.foundation, pornhub-forum.ga, pornhub-forum.uni.me, pornhub-ru.com, pornoforadult.com, portnoff.od.ua, pozdravleniya-c.ru, priceg.com, pricheski-video.com, prlog.ru, producm.ru, prodvigator.ua, prointer.net.ua, promoforum.ru, psa48.ru, qualitymarketzone.com, quit-smoking.ga, qwesa.ru, rank-checker.online, rankings-analytics.com, ranksonic.info, ranksonic.net, ranksonic.org, rapidgator-porn.ga, rcb101.ru, rednise.com, research.ifmo.ru, resellerclub.com, responsive-test.net, reversing.cc, rightenergysolutions.com.au, rospromtest.ru, rusexy.xyz, sady-urala.ru, sanjosestartups.com, santasgift.ml, savetubevideo.com, screentoolkit.com, scripted.com, search-error.com, semalt.com, semaltmedia.com, seo-platform.com, seo-smm.kz, seoanalyses.com, seoexperimenty.ru, seopub.net, sexyali.com, sexyteens.hol.es, share-buttons.xyz, sharebutton.net, sharebutton.to, shop.xz618.com, sibecoprom.ru, simple-share-buttons.com, site5.com, siteripz.net, sitevaluation.org, sledstvie-veli.net, slftsdybbg.ru, slkrm.ru, smailik.org, smartphonediscount.info, snip.to, snip.tw, soaksoak.ru, social-button.xyz, social-buttons.com, social-traffic-1.xyz, social-widget.xyz, social-traffic-7.xyz, socialbuttons.xyz, socialseet.ru, sohoindia.net, solnplast.ru, sosdepotdebilan.com, spravka130.ru, steame.ru, success-seo.com, superiends.org, taihouse.ru, tattooha.com, tedxrj.com, theguardlan.com, tomck.com, top1-seo-service.com, topseoservices.co, traffic-cash.xyz, traffic2cash.org, traffic2cash.xyz, traffic2money.com, trafficgenius.xyz, trafficmonetize.org, trafficmonetizer.org, trion.od.ua, uasb.ru, uptime.com, uptimechecker.com, uzungil.com, video--production.com, video-woman.com, videos-for-your-business.com, viel.su, viktoria-center.ru, vodaodessa.com, vodkoved.ru, w3javascript.com, web-revenue.xyz, webmaster-traffic.com, webmonetizer.net, website-analyzer.info, websites-reviews.com, websocial.me, wmasterlead.com, wordpress-crew.net, wordpresscore.com, ykecwqlixx.ru, youporn-forum.ga, youporn-forum.uni.me, youporn-ru.com, yourserverisdown.com, zastroyka.org, годом.рф, грузоподъемные-машины.рф, лечениенаркомании.com, непереводимая.рф, профмонтаж-врн.рф, снятьдомвсевастополе.рф, холодныйобзвон.рф


+ extra:

contextualyield.com 