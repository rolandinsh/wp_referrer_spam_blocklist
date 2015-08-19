# WordPress referrer spam blacklist plugin

WordPress plugin to fight with more than 270 referrer spammers (like semalt, buttons-for-website and many more).

Via [my LinkedIN post](https://www.linkedin.com/pulse/fighting-referral-spam-wordpress-way-rolands-umbrovskis-): Few months ago I started to collect referral spam pages in private file un bitbucket.org. Problem was that I did not know all spammers. Then, few weeks ago, I found that Piwik (Open source analytics) started their own "project", and they did the same thing I did - collected referral spam sites to block them from Your website.

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

0n-line.tv, 100dollars-seo.com, 12masterov.com, 1pamm.ru, 4webmasters.org, 5forex.ru, 7makemoneyonline.com, acads.net, adcash.com, adspart.com, adventureparkcostarica.com, adviceforum.info, affordablewebsitesandmobileapps.com, afora.ru, akuhni.by, allknow.info, allnews.md, allwomen.info, alpharma.net, altermix.ua, amt-k.ru, anal-acrobats.hol.es, anapa-inns.ru, android-style.com, anticrawler.org, arendakvartir.kz, arkkivoltti.net, artparquet.ru, aruplighting.com, autovideobroadcast.com, aviva-limoux.com, azartclub.org, baixar-musicas-gratis.com, baladur.ru, balitouroffice.com, bard-real.com.ua, bestmobilityscooterstoday.com, best-seo-offer.com, best-seo-solution.com, bestwebsitesawards.com, bif-ru.info, biglistofwebsites.com, billiard-classic.com.ua, bizru.info, blackhatworth.com, bluerobot.info, blue-square.biz, bmw.afora.ru, brakehawk.com, break-the-chains.com, brk-rti.ru, brothers-smaller.ru, budmavtomatika.com.ua, buttons-for-website.com, buttons-for-your-website.com, buy-cheap-online.info, buy-forum.ru, cardiosport.com.ua, cartechnic.ru, cenokos.ru, cenoval.ru, cezartabac.ro, chinese-amezon.com, cityadspix.com, ci.ua, civilwartheater.com, coderstate.com, codysbbq.com, conciergegroup.org, connectikastudio.com, cubook.supernew.org, customsua.com.ua, dailyrank.net, darodar.com, delfin-aqua.com.ua, demenageur.com, descargar-musica-gratis.net, detskie-konstruktory.ru, dipstar.org, djekxa.ru, dojki-hd.com, domination.ml, doska-vsem.ru, dostavka-v-krym.com, drupa.com, dvr.biz.ua, e-buyeasy.com, ecomp3.ru, econom.co, edakgfvwql.ru, egovaleo.it, ekto.ee, e-kwiaciarz.pl, elmifarhangi.com, erot.co, escort-russian.com, este-line.com.ua, euromasterclass.ru, europages.com.ru, eurosamodelki.ru, event-tracking.com, fbdownloader.com, floating-share-buttons.com, forex-procto.ru, forsex.info, forum20.smailik.org, forum69.info, free-share-buttons.com, free-social-buttons.com, freewhatsappload.com, fsalas.com, generalporn.org, germes-trans.com, get-free-traffic-now.com, ghazel.ru, girlporn.ru, gkvector.ru, glavprofit.ru, gobongo.info, goodprotein.ru, googlsucks.com, guardlink.org, handicapvantoday.com, howopen.ru, howtostopreferralspam.eu, hulfingtonpost.com, humanorightswatch.org, hundejo.com, hvd-store.com, ico.re, igru-xbox.net, iloveitaly.ro, iloveitaly.ru, ilovevitaly.co, ilovevitaly.com, ilovevitaly.info, ilovevitaly.org, ilovevitaly.ru, iminent.com, imperiafilm.ru, investpamm.ru, iskalko.ru, ispaniya-costa-blanca.ru, it-max.com.ua, jjbabskoe.ru, kabbalah-red-bracelets.com, kambasoft.com, kazrent.com, kino-fun.ru, kino-key.info, kinopolet.net, knigonosha.net, konkursov.net, laxdrills.com, littleberry.ru, livefixer.com, luxup.ru, makemoneyonline.com, manualterap.roleforum.ru, maridan.com.ua, masterseek.com, mebelcomplekt.ru, mebeldekor.com.ua, med-zdorovie.com.ua, minegam.com, mini.7zap.com, mirobuvi.com.ua, mirtorrent.net, mobilemedia.md, moyakuhnia.ru, msk.afora.ru, muscle-factory.com.ua, myftpupload.com, niki-mlt.ru, novosti-hi-tech.ru, online-hit.info, onlywoman.org, o-o-6-o-o.com, o-o-6-o-o.ru, o-o-8-o-o.ru, ooo-olni.ru, ozas.net, palvira.com.ua, petrovka-online.com, photokitchendesign.com, pornhub-forum.ga, pornhub-forum.uni.me, pornhub-ru.com, pornoforadult.com, portnoff.od.ua, pozdravleniya-c.ru, priceg.com, pricheski-video.com, producm.ru, prodvigator.ua, prointer.net.ua, promoforum.ru, psa48.ru, qwesa.ru, ranksonic.info, ranksonic.org, rapidgator-porn.ga, rcb101.ru, research.ifmo.ru, resellerclub.com, reversing.cc, rightenergysolutions.com.au, rospromtest.ru, sady-urala.ru, sanjosestartups.com, savetubevideo.com, screentoolkit.com, search-error.com, semalt.com, semaltmedia.com, seoexperimenty.ru, seopub.net, seo-smm.kz, sexyteens.hol.es, sharebutton.net, sharebutton.to, shop.xz618.com, sibecoprom.ru, simple-share-buttons.com, siteripz.net, sledstvie-veli.net, slftsdybbg.ru, slkrm.ru, soaksoak.ru, social-buttons.com, socialseet.ru, sohoindia.net, solnplast.ru, sosdepotdebilan.com, spb.afora.ru, spravka130.ru, steame.ru, success-seo.com, superiends.org, taihouse.ru, tattooha.com, tedxrj.com, theguardlan.com, tomck.com, toyota.7zap.com, traffic2money.com, trafficmonetize.org, trafficmonetizer.org, trion.od.ua, uasb.ru, uzungil.com, videos-for-your-business.com, video-woman.com, viel.su, viktoria-center.ru, vodaodessa.com, vodkoved.ru, webmaster-traffic.com, webmonetizer.net, websites-reviews.com, websocial.me, wmasterlead.com, ykecwqlixx.ru, youporn-forum.ga, youporn-forum.uni.me, youporn-ru.com, zastroyka.org, грузоподъемные-машины.рф, наркомания.лечениенаркомании.com, непереводимая.рф, профмонтаж-врн.рф, снятьдомвсевастополе.рф, холодныйобзвон.рф

+ extra:

contextualyield.com, clicksor.com