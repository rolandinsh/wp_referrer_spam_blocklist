<?php

class blockList
{
    public $version = '1.3.0';

    function __construct()
    {
        
    }

    public function theList()
    {
        /*
          List of referral spammers
         *
         */
        $theList = array("0n-line.tv", "100dollars-seo.com", "12masterov.com", "1pamm.ru", "4webmasters.org", "5forex.ru", "7makemoneyonline.com", "acads.net", "adcash.com", "adspart.com", "adventureparkcostarica.com", "adviceforum.info", "affordablewebsitesandmobileapps.com", "afora.ru", "akuhni.by", "allknow.info", "allnews.md", "allwomen.info", "alpharma.net", "altermix.ua", "amt-k.ru", "anal-acrobats.hol.es", "anapa-inns.ru", "android-style.com", "anticrawler.org", "arendakvartir.kz", "arkkivoltti.net", "artparquet.ru", "aruplighting.com", "autovideobroadcast.com", "aviva-limoux.com", "azartclub.org", "baixar-musicas-gratis.com", "baladur.ru", "balitouroffice.com", "bard-real.com.ua", "bestmobilityscooterstoday.com", "best-seo-offer.com", "best-seo-solution.com", "bestwebsitesawards.com", "bif-ru.info", "biglistofwebsites.com", "billiard-classic.com.ua", "bizru.info", "blackhatworth.com", "bluerobot.info", "blue-square.biz", "bmw.afora.ru", "brakehawk.com", "break-the-chains.com", "brk-rti.ru", "brothers-smaller.ru", "budmavtomatika.com.ua", "buttons-for-website.com", "buttons-for-your-website.com", "buy-cheap-online.info", "buy-forum.ru", "cardiosport.com.ua", "cartechnic.ru", "cenokos.ru", "cenoval.ru", "cezartabac.ro", "cityadspix.com", "ci.ua", "civilwartheater.com", "coderstate.com", "codysbbq.com", "conciergegroup.org", "connectikastudio.com", "cubook.supernew.org", "customsua.com.ua", "dailyrank.net", "darodar.com", "delfin-aqua.com.ua", "demenageur.com", "descargar-musica-gratis.net", "detskie-konstruktory.ru", "dipstar.org", "djekxa.ru", "dojki-hd.com", "domination.ml", "doska-vsem.ru", "dostavka-v-krym.com", "drupa.com", "dvr.biz.ua", "ecomp3.ru", "econom.co", "edakgfvwql.ru", "egovaleo.it", "ekto.ee", "e-kwiaciarz.pl", "elmifarhangi.com", "erot.co", "escort-russian.com", "este-line.com.ua", "euromasterclass.ru", "europages.com.ru", "eurosamodelki.ru", "event-tracking.com", "fbdownloader.com", "floating-share-buttons.com", "forex-procto.ru", "forsex.info", "forum20.smailik.org", "forum69.info", "free-share-buttons.com", "free-social-buttons.com", "freewhatsappload.com", "fsalas.com", "generalporn.org", "germes-trans.com", "get-free-traffic-now.com", "ghazel.ru", "girlporn.ru", "gkvector.ru", "glavprofit.ru", "gobongo.info", "goodprotein.ru", "googlsucks.com", "guardlink.org", "handicapvantoday.com", "howopen.ru", "howtostopreferralspam.eu", "hulfingtonpost.com", "humanorightswatch.org", "hundejo.com", "hvd-store.com", "ico.re", "igru-xbox.net", "iloveitaly.ro", "iloveitaly.ru", "ilovevitaly.co", "ilovevitaly.com", "ilovevitaly.info", "ilovevitaly.org", "ilovevitaly.ru", "iminent.com", "imperiafilm.ru", "investpamm.ru", "iskalko.ru", "ispaniya-costa-blanca.ru", "it-max.com.ua", "jjbabskoe.ru", "kabbalah-red-bracelets.com", "kambasoft.com", "kazrent.com", "kino-fun.ru", "kino-key.info", "kinopolet.net", "knigonosha.net", "konkursov.net", "laxdrills.com", "littleberry.ru", "livefixer.com", "luxup.ru", "makemoneyonline.com", "manualterap.roleforum.ru", "maridan.com.ua", "masterseek.com", "mebelcomplekt.ru", "mebeldekor.com.ua", "med-zdorovie.com.ua", "minegam.com", "mini.7zap.com", "mirobuvi.com.ua", "mirtorrent.net", "mobilemedia.md", "moyakuhnia.ru", "msk.afora.ru", "muscle-factory.com.ua", "myftpupload.com", "niki-mlt.ru", "novosti-hi-tech.ru", "online-hit.info", "onlywoman.org", "o-o-6-o-o.com", "o-o-6-o-o.ru", "o-o-8-o-o.ru", "ooo-olni.ru", "ozas.net", "palvira.com.ua", "petrovka-online.com", "photokitchendesign.com", "pornhub-forum.ga", "pornhub-forum.uni.me", "pornhub-ru.com", "pornoforadult.com", "portnoff.od.ua", "pozdravleniya-c.ru", "priceg.com", "pricheski-video.com", "producm.ru", "prodvigator.ua", "prointer.net.ua", "promoforum.ru", "psa48.ru", "qitt.ru", "qwesa.ru", "ranksonic.info", "ranksonic.org", "rapidgator-porn.ga", "rcb101.ru", "research.ifmo.ru", "resellerclub.com", "reversing.cc", "rightenergysolutions.com.au", "rospromtest.ru", "sady-urala.ru", "sanjosestartups.com", "savetubevideo.com", "screentoolkit.com", "search-error.com", "semalt.com", "semaltmedia.com", "seoexperimenty.ru", "seopub.net", "seo-smm.kz", "sexyteens.hol.es", "sharebutton.net", "sharebutton.to", "shop.xz618.com", "sibecoprom.ru", "simple-share-buttons.com", "siteripz.net", "sledstvie-veli.net", "slftsdybbg.ru", "slkrm.ru", "soaksoak.ru", "social-buttons.com", "socialseet.ru", "sohoindia.net", "solnplast.ru", "sosdepotdebilan.com", "spb.afora.ru", "spravka130.ru", "steame.ru", "success-seo.com", "superiends.org", "taihouse.ru", "tattooha.com", "tedxrj.com", "theguardlan.com", "tomck.com", "toyota.7zap.com", "trafficmonetize.org", "trion.od.ua", "uasb.ru", "uzungil.com", "videos-for-your-business.com", "video-woman.com", "viel.su", "viktoria-center.ru", "vodaodessa.com", "vodkoved.ru", "webmaster-traffic.com", "webmonetizer.net", "websites-reviews.com", "websocial.me", "wmasterlead.com", "ykecwqlixx.ru", "youporn-forum.ga", "youporn-forum.uni.me", "youporn-ru.com", "zastroyka.org", "грузоподъемные-машины.рф", "наркомания.лечениенаркомании.com", "непереводимая.рф", "профмонтаж-врн.рф", "снятьдомвсевастополе.рф", "холодныйобзвон.рф");
        // spam, virus, spyware, ...
        $extraSites = apply_filters('wp_referralblock_extralist', array(
            "contextualyield.com",
            "clicksor.com"
        ));

        $grandList = array_merge($extraSites, $theList);

        return apply_filters('wp_referralblock_list', $grandList);
    }

}
