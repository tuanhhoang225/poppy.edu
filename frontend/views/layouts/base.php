<?php

/* @var $this \yii\web\View */

/* @var $content string */

use yii\helpers\Html;
use common\helpers\FunctionHelper;
use frontend\assets\ThemeAsset;

ThemeAsset::register($this);

?>


<?php $this->beginPage() ?>

<!DOCTYPE html>
<html lang="vi"
      class=" html_stretched responsive av-preloader-disabled av-default-lightbox  html_header_top html_logo_center html_bottom_nav_header html_menu_right html_slim html_header_sticky html_header_shrinking html_header_transparency html_mobile_menu_phone html_disabled html_header_searchicon_disabled html_content_align_center html_header_unstick_top html_header_stretch html_entry_id_10 ">

<!-- Mirrored from romanplaza.vn/ by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 06 Apr 2018 06:14:10 GMT -->
<!-- Added by HTTrack -->
<meta http-equiv="content-type" content="text/html;charset=UTF-8"/><!-- /Added by HTTrack -->
<head>

    <link rel="icon" href="<?= FunctionHelper::get_images_by_photo_location_key('favicon', 1)['avatar'] ?>" type="image/png">
    <meta charset="<?= Yii::$app->charset ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1,maximum-scale=1, user-scalable=0"/>
    <meta name="description" content="">
    <meta name="keywords" content="">
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
    <!-- mobile setting -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">


    <script type="text/javascript">
        window._wpemojiSettings = {
            "baseUrl": "https:\/\/s.w.org\/images\/core\/emoji\/2.4\/72x72\/",
            "ext": ".png",
            "svgUrl": "https:\/\/s.w.org\/images\/core\/emoji\/2.4\/svg\/",
            "svgExt": ".svg",
            "source": {"concatemoji": "http:\/\/romanplaza.vn\/wp-includes\/js\/wp-emoji-release.min.js?ver=4.9.3"}
        };
        !function (a, b, c) {
            function d(a, b) {
                var c = String.fromCharCode;
                l.clearRect(0, 0, k.width, k.height), l.fillText(c.apply(this, a), 0, 0);
                var d = k.toDataURL();
                l.clearRect(0, 0, k.width, k.height), l.fillText(c.apply(this, b), 0, 0);
                var e = k.toDataURL();
                return d === e
            }

            function e(a) {
                var b;
                if (!l || !l.fillText) return !1;
                switch (l.textBaseline = "top", l.font = "600 32px Arial", a) {
                    case"flag":
                        return !(b = d([55356, 56826, 55356, 56819], [55356, 56826, 8203, 55356, 56819])) && (b = d([55356, 57332, 56128, 56423, 56128, 56418, 56128, 56421, 56128, 56430, 56128, 56423, 56128, 56447], [55356, 57332, 8203, 56128, 56423, 8203, 56128, 56418, 8203, 56128, 56421, 8203, 56128, 56430, 8203, 56128, 56423, 8203, 56128, 56447]), !b);
                    case"emoji":
                        return b = d([55357, 56692, 8205, 9792, 65039], [55357, 56692, 8203, 9792, 65039]), !b
                }
                return !1
            }

            function f(a) {
                var c = b.createElement("script");
                c.src = a, c.defer = c.type = "text/javascript", b.getElementsByTagName("head")[0].appendChild(c)
            }

            var g, h, i, j, k = b.createElement("canvas"), l = k.getContext && k.getContext("2d");
            for (j = Array("flag", "emoji"), c.supports = {
                everything: !0,
                everythingExceptFlag: !0
            }, i = 0; i < j.length; i++) c.supports[j[i]] = e(j[i]), c.supports.everything = c.supports.everything && c.supports[j[i]], "flag" !== j[i] && (c.supports.everythingExceptFlag = c.supports.everythingExceptFlag && c.supports[j[i]]);
            c.supports.everythingExceptFlag = c.supports.everythingExceptFlag && !c.supports.flag, c.DOMReady = !1, c.readyCallback = function () {
                c.DOMReady = !0
            }, c.supports.everything || (h = function () {
                c.readyCallback()
            }, b.addEventListener ? (b.addEventListener("DOMContentLoaded", h, !1), a.addEventListener("load", h, !1)) : (a.attachEvent("onload", h), b.attachEvent("onreadystatechange", function () {
                "complete" === b.readyState && c.readyCallback()
            })), g = c.source || {}, g.concatemoji ? f(g.concatemoji) : g.wpemoji && g.twemoji && (f(g.twemoji), f(g.wpemoji)))
        }(window, document, window._wpemojiSettings);
    </script>
    <style type="text/css">
        img.wp-smiley,
        img.emoji {
            display: inline !important;
            border: none !important;
            box-shadow: none !important;
            height: 1em !important;
            width: 1em !important;
            margin: 0 .07em !important;
            vertical-align: -0.1em !important;
            background: none !important;
            padding: 0 !important;
        }
    </style>
    <link rel='stylesheet' id='contact-form-7-css'
          href='/wp-content/plugins/contact-form-7/includes/css/styles20fd.css?ver=4.9.2' type='text/css' media='all'/>
    <link rel='stylesheet' id='tr-easy-tabs-pro-main-css-css'
          href='/wp-content/plugins/wp-expand-tabs-free/css/jquery.pwstabs6959.css?ver=4.9.3' type='text/css'
          media='all'/>
    <link rel='stylesheet' id='avia-grid-css' href='/wp-content/themes/landmark/css/grid77ae.css?ver=2' type='text/css'
          media='all'/>
    <link rel='stylesheet' id='avia-base-css' href='/wp-content/themes/landmark/css/base77ae.css?ver=2' type='text/css'
          media='all'/>
    <link rel='stylesheet' id='avia-layout-css' href='/wp-content/themes/landmark/css/layout77ae.css?ver=2'
          type='text/css' media='all'/>
    <link rel='stylesheet' id='avia-scs-css' href='/wp-content/themes/landmark/css/shortcodes77ae.css?ver=2'
          type='text/css' media='all'/>
    <link rel='stylesheet' id='avia-popup-css-css'
          href='/wp-content/themes/landmark/js/aviapopup/magnific-popup68b3.css?ver=1' type='text/css' media='screen'/>
    <link rel='stylesheet' id='avia-media-css'
          href='/wp-content/themes/landmark/js/mediaelement/skin-1/mediaelementplayer68b3.css?ver=1' type='text/css'
          media='screen'/>
    <link rel='stylesheet' id='avia-print-css' href='/wp-content/themes/landmark/css/print68b3.css?ver=1' type='text/css'
          media='print'/>
    <link rel='stylesheet' id='avia-dynamic-css'
          href='/wp-content/uploads/dynamic_avia/enfold_themekiller.com339f.css?ver=5a4d85c8dc716' type='text/css'
          media='all'/>
    <link rel='stylesheet' id='avia-custom-css' href='/wp-content/themes/landmark/css/custom77ae.css?ver=2'
          type='text/css' media='all'/>
    <link rel='stylesheet' id='sticky_popup-style-css'
          href='/wp-content/plugins/sticky-popup/css/sticky-popup62ea.css?ver=1.2' type='text/css' media='all'/>
    <script type='text/javascript' src='/wp-includes/js/jquery/jqueryb8ff.js?ver=1.12.4'></script>
    <script type='text/javascript' src='/wp-includes/js/jquery/jquery-migrate.min330a.js?ver=1.4.1'></script>
    <script type='text/javascript' src='/wp-content/themes/landmark/js/avia-compat77ae.js?ver=2'></script>
    <script type='text/javascript'>
        var mejsL10n = {
            "language": "vi",
            "strings": {
                "mejs.install-flash": "B\u1ea1n \u0111ang s\u1eed d\u1ee5ng tr\u00ecnh duy\u1ec7t kh\u00f4ng h\u1ed7 tr\u1ee3 Flash player. Vui l\u00f2ng b\u1eadt ho\u1eb7c c\u00e0i \u0111\u1eb7t \n phi\u00ean b\u1ea3n m\u1edbi nh\u1ea5t t\u1ea1i https:\/\/get.adobe.com\/flashplayer\/",
                "mejs.fullscreen-off": "T\u1eaft hi\u1ec3n th\u1ecb to\u00e0n m\u00e0n h\u00ecnh",
                "mejs.fullscreen-on": "Hi\u1ec3n th\u1ecb to\u00e0n m\u00e0n h\u00ecnh ",
                "mejs.download-video": "T\u1ea3i video v\u1ec1",
                "mejs.fullscreen": "To\u00e0n m\u00e0n h\u00ecnh",
                "mejs.time-jump-forward": ["Tua nhanh 1 gi\u00e2y", "Chuy\u1ec3n v\u1ec1 ph\u00eda tr\u01b0\u1edbc %1 gi\u00e2y"],
                "mejs.loop": "Chuy\u1ec3n \u0111\u1ed5i v\u00f2ng l\u1eb7p",
                "mejs.play": "Ch\u1ea1y",
                "mejs.pause": "T\u1ea1m d\u1eebng",
                "mejs.close": "\u0110\u00f3ng",
                "mejs.time-slider": "Th\u1eddi gian tr\u00ecnh chi\u1ebfu",
                "mejs.time-help-text": "S\u1eed d\u1ee5ng c\u00e1c ph\u00edm m\u0169i t\u00ean Tr\u00e1i\/Ph\u1ea3i \u0111\u1ec3 ti\u1ebfn m\u1ed9t gi\u00e2y, m\u0169i t\u00ean L\u00ean\/Xu\u1ed1ng \u0111\u1ec3 ti\u1ebfn m\u01b0\u1eddi gi\u00e2y.",
                "mejs.time-skip-back": ["B\u1ecf qua 1 gi\u00e2y", "L\u00f9i l\u1ea1i %1 gi\u00e2y"],
                "mejs.captions-subtitles": "Ph\u1ee5 \u0111\u1ec1",
                "mejs.captions-chapters": "C\u00e1c m\u1ee5c",
                "mejs.none": "Tr\u1ed1ng",
                "mejs.mute-toggle": "B\u1eadt\/t\u1eaft ch\u1ebf \u0111\u1ed9 im l\u1eb7ng",
                "mejs.volume-help-text": "S\u1eed d\u1ee5ng c\u00e1c ph\u00edm m\u0169i t\u00ean L\u00ean\/Xu\u1ed1ng \u0111\u1ec3 t\u0103ng ho\u1eb7c gi\u1ea3m \u00e2m l\u01b0\u1ee3ng.",
                "mejs.unmute": "B\u1eadt ti\u1ebfng",
                "mejs.mute": "T\u1eaft ti\u1ebfng",
                "mejs.volume-slider": "\u00c2m l\u01b0\u1ee3ng Tr\u00ecnh chi\u1ebfu",
                "mejs.video-player": "Tr\u00ecnh ch\u01a1i Video",
                "mejs.audio-player": "Tr\u00ecnh ch\u01a1i Audio",
                "mejs.ad-skip": "B\u1ecf qua qu\u1ea3ng c\u00e1o",
                "mejs.ad-skip-info": ["B\u1ecf qua trong 1 gi\u00e2y", "B\u1ecf qua trong %1 gi\u00e2y"],
                "mejs.source-chooser": "Ch\u1ecdn ngu\u1ed3n",
                "mejs.stop": "D\u1eebng",
                "mejs.speed-rate": "T\u1ed1c \u0111\u1ed9",
                "mejs.live-broadcast": "Tr\u1ef1c ti\u1ebfp",
                "mejs.afrikaans": "Ti\u1ebfng Nam Phi",
                "mejs.albanian": "Ti\u1ebfng Albani",
                "mejs.arabic": "Ti\u1ebfng \u1ea2 R\u1eadp",
                "mejs.belarusian": "Ti\u1ebfng Belarus",
                "mejs.bulgarian": "Ti\u1ebfng Bulgari",
                "mejs.catalan": "Ti\u1ebfng Catalan",
                "mejs.chinese": "Ti\u1ebfng Trung Qu\u1ed1c",
                "mejs.chinese-simplified": "Ti\u1ebfng Trung Qu\u1ed1c (gi\u1ea3n th\u1ec3)",
                "mejs.chinese-traditional": "Ti\u1ebfng trung ( Ph\u1ed3n th\u1ec3 )",
                "mejs.croatian": "Ti\u1ebfng Croatia",
                "mejs.czech": "Ti\u1ebfng S\u00e9c",
                "mejs.danish": "Ti\u1ebfng \u0110an M\u1ea1ch",
                "mejs.dutch": "Ti\u1ebfng H\u00e0 Lan",
                "mejs.english": "Ti\u1ebfng Anh",
                "mejs.estonian": "Ti\u1ebfng Estonia",
                "mejs.filipino": "Ti\u1ebfng Philippin",
                "mejs.finnish": "Ti\u1ebfng Ph\u1ea7n Lan",
                "mejs.french": "Ti\u1ebfng Ph\u00e1p",
                "mejs.galician": "Ti\u1ebfng Galicia",
                "mejs.german": "Ti\u1ebfng \u0110\u1ee9c",
                "mejs.greek": "Ti\u1ebfng Hy L\u1ea1p",
                "mejs.haitian-creole": "Ti\u1ebfng Haiti",
                "mejs.hebrew": "Ti\u1ebfng Do Th\u00e1i",
                "mejs.hindi": "Ti\u1ebfng Hindu",
                "mejs.hungarian": "Ti\u1ebfng Hungary",
                "mejs.icelandic": "Ti\u1ebfng Ailen",
                "mejs.indonesian": "Ti\u1ebfng Indonesia",
                "mejs.irish": "Ti\u1ebfng Ailen",
                "mejs.italian": "Ti\u1ebfng \u00dd",
                "mejs.japanese": "Ti\u1ebfng Nh\u1eadt",
                "mejs.korean": "Ti\u1ebfng H\u00e0n Qu\u1ed1c",
                "mejs.latvian": "Ti\u1ebfng Latvia",
                "mejs.lithuanian": "Ti\u1ebfng Lithuani",
                "mejs.macedonian": "Ti\u1ebfng Macedonia",
                "mejs.malay": "Ti\u1ebfng Malaysia",
                "mejs.maltese": "Ti\u1ebfng Maltese",
                "mejs.norwegian": "Ti\u1ebfng Na Uy",
                "mejs.persian": "Ti\u1ebfng Ba T\u01b0",
                "mejs.polish": "Ti\u1ebfng Ba Lan",
                "mejs.portuguese": "Ti\u1ebfng B\u1ed3 \u0110\u00e0o Nha",
                "mejs.romanian": "Ti\u1ebfng Romani",
                "mejs.russian": "Ti\u1ebfng Nga",
                "mejs.serbian": "Ti\u1ebfng Serbia",
                "mejs.slovak": "Ti\u1ebfng Slovakia",
                "mejs.slovenian": "Ti\u1ebfng Slovenia",
                "mejs.spanish": "Ti\u1ebfng T\u00e2y Ban Nha",
                "mejs.swahili": "Ti\u1ebfng Swahili",
                "mejs.swedish": "Ti\u1ebfng Th\u1ee5y \u0110i\u1ec3n",
                "mejs.tagalog": "Ti\u1ebfng Tagalog",
                "mejs.thai": "Ti\u1ebfng Th\u00e1i",
                "mejs.turkish": "Ti\u1ebfng Th\u1ed5 Nh\u0129 K\u00ec",
                "mejs.ukrainian": "Ti\u1ebfng Ukraina",
                "mejs.vietnamese": "Ti\u1ebfng Vi\u1ec7t",
                "mejs.welsh": "Ti\u1ebfng Welsh",
                "mejs.yiddish": "Ti\u1ebfng Yiddish"
            }
        };
    </script>
    <script type='text/javascript'
            src='/wp-includes/js/mediaelement/mediaelement-and-player.min45a0.js?ver=4.2.6-78496d1'></script>
    <script type='text/javascript' src='/wp-includes/js/mediaelement/mediaelement-migrate.min6959.js?ver=4.9.3'></script>
    <script type='text/javascript'>
        /* <![CDATA[ */
        var _wpmejsSettings = {
            "pluginPath": "\/wp-includes\/js\/mediaelement\/",
            "classPrefix": "mejs-",
            "stretching": "responsive"
        };
        /* ]]> */
    </script>
    <script type='text/javascript' src='/wp-content/plugins/sticky-popup/js/modernizr.custom62ea.js?ver=1.2'></script>
    <link rel='https://api.w.org/' href='/wp-json/index.html'/>
    <link rel="EditURI" type="application/rsd+xml" title="RSD" href="xmlrpc0db0.php?rsd"/>
    <link rel="wlwmanifest" type="application/wlwmanifest+xml" href="/wp-includes/wlwmanifest.xml"/>
    <meta name="generator" content="WordPress 4.9.3"/>
    <link rel="canonical" href="index.html"/>
    <link rel='shortlink' href='index.html'/>
    <link rel="alternate" type="application/json+oembed"
          href="/wp-json/oembed/1.0/embedcb9b.json?url=http%3A%2F%2Fromanplaza.vn%2F"/>
    <link rel="alternate" type="text/xml+oembed"
          href="/wp-json/oembed/1.0/embed8fba?url=http%3A%2F%2Fromanplaza.vn%2F&amp;format=xml"/>
    <script type='text/javascript'>
        SG_POPUPS_QUEUE = [];
        SG_POPUP_DATA = [];
        SG_APP_POPUP_URL = '/wp-content/plugins/popup-builder/index.html';
        SG_POPUP_VERSION = '2.671_1;';

        function sgAddEvent(element, eventName, fn) {
            if (element.addEventListener)
                element.addEventListener(eventName, fn, false);
            else if (element.attachEvent)
                element.attachEvent('on' + eventName, fn);
        }
    </script>
    <link rel="profile" href="http://gmpg.org/xfn/11"/>
    <link rel="alternate" type="application/rss+xml" title="Roman Plaza RSS2 Feed" href="feed/index.html"/>
    <link rel="pingback" href="xmlrpc.php"/>
    <!--[if lt IE 9]>
    <script src="http://romanplaza.vn//wp-content/themes/landmark/js/html5shiv.js"></script><![endif]-->
    <style type="text/css">
        .sticky-popup .popup-header {

            background-color: #dd3333;

            border-color: #dd3333;

        }

        .popup-title {
            color: #ffffff;
        }
    </style>


    <!--
    Debugging Info for Theme support:

    Theme: Enfold Themekiller.com
    Version: 3.4.7
    Installed: landmark
    AviaFramework Version: 2.3
    AviaBuilder Version: 0.8
    ML:128-PU:40-PLA:9
    WP:4.9.3
    Updates: disabled
    -->

    <style type='text/css'>
        @font-face {
            font-family: 'entypo-fontello';
            font-weight: normal;
            font-style: normal;
            src: url('/wp-content/themes/landmark/config-templatebuilder/avia-template-builder/assets/fonts/entypo-fontello30f4.eot?v=3');
            src: url('/wp-content/themes/landmark/config-templatebuilder/avia-template-builder/assets/fonts/entypo-fontello30f4.eot?v=3#iefix') format('embedded-opentype'),
            url('/wp-content/themes/landmark/config-templatebuilder/avia-template-builder/assets/fonts/entypo-fontello30f4.woff?v=3') format('woff'),
            url('/wp-content/themes/landmark/config-templatebuilder/avia-template-builder/assets/fonts/entypo-fontello30f4.ttf?v=3') format('truetype'),
            url('/wp-content/themes/landmark/config-templatebuilder/avia-template-builder/assets/fonts/entypo-fontello30f4.svg?v=3#entypo-fontello') format('svg');
        }

        #top .avia-font-entypo-fontello, body .avia-font-entypo-fontello, html body [data-av_iconfont='entypo-fontello']:before {
            font-family: 'entypo-fontello';
        }
    </style>
    <!-- Google Tag Manager -->
    <script>(function (w, d, s, l, i) {
            w[l] = w[l] || [];
            w[l].push({
                'gtm.start':
                    new Date().getTime(), event: 'gtm.js'
            });
            var f = d.getElementsByTagName(s)[0],
                j = d.createElement(s), dl = l != 'dataLayer' ? '&l=' + l : '';
            j.async = true;
            j.src =
                '../www.googletagmanager.com/gtm5445.html?id=' + i + dl;
            f.parentNode.insertBefore(j, f);
        })(window, document, 'script', 'dataLayer', 'GTM-TF6WKC6');</script>
    <!-- End Google Tag Manager -->


</head>


<body id="top"
      class="home page-template-default page page-id-10 page-parent stretched helvetica-neue-websave _helvetica_neue "
      itemscope="itemscope" itemtype="https://schema.org/WebPage">



<div id='wrap_all'>


    <?= $this->render('header-base')?>

    <?= $content ?>


    <?= $this->render('footer')?>





<script type='text/javascript' src='/wp-content/plugins/contact-form-7/includes/js/scripts20fd.js?ver=4.9.2'></script>
<script type='text/javascript'
        src='/wp-content/plugins/wp-expand-tabs-free/js/jquery.pwstabs-1.1.3.min68b3.js?ver=1'></script>
<script type='text/javascript' src='/wp-content/themes/landmark/js/avia592e.js?ver=3'></script>
<script type='text/javascript' src='/wp-content/themes/landmark/js/shortcodes592e.js?ver=3'></script>
<script type='text/javascript'
        src='/wp-content/themes/landmark/js/aviapopup/jquery.magnific-popup.min77ae.js?ver=2'></script>
<script type='text/javascript' src='/wp-includes/js/mediaelement/wp-mediaelement.min6959.js?ver=4.9.3'></script>
<script type='text/javascript' src='/wp-includes/js/comment-reply.min6959.js?ver=4.9.3'></script>
<script type='text/javascript' src='/wp-includes/js/wp-embed.min6959.js?ver=4.9.3'></script>
<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-109863655-4"></script>
<script>
    window.dataLayer = window.dataLayer || [];

    function gtag() {
        dataLayer.push(arguments);
    }

    gtag('js', new Date());

    gtag('config', 'UA-109863655-4');
</script>
<a href='#top' title='Scroll to top' id='scroll-top-link' aria-hidden='true' data-av_icon=''
   data-av_iconfont='entypo-fontello'><span class="avia_hidden_link_text">Scroll to top</span></a>

<div id="fb-root"></div>




</body>

<!-- Mirrored from romanplaza.vn/ by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 06 Apr 2018 06:21:45 GMT -->
</html>


<?php $this->endPage() ?>
