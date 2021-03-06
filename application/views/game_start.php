<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>起飞吧朋友</title>
    <base href="<?=$this->config->base_url()?>games" />
    <link rel="icon" type="image/GIF" href="<?=$this->config->base_url()?>res/favicon.ico"/>
    <meta name="apple-mobile-web-app-capable" content="yes"/>
    <meta name="full-screen" content="yes"/>
    <meta name="screen-orientation" content="landscape"/>
    <meta name="x5-fullscreen" content="true"/>
    <meta name="360-fullscreen" content="true"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">

    <script>

        <?php if($state == 'start'):?>
            var state = 'start';
        <?php else:?>
            var state = 'from';
        <?php endif; ?>

    </script>

    <script type="text/javascript">
        var shareData = {
            "img_url": "http://skyteam.tianxun.cn/static/share_icon.png",
            "img_width": "200",
            "img_height": "200",
            "link": "http://skyteam.tianxun.cn/?associateid=SOC_WCH_00349_00001&utm_source=wechat&utm_medium=social&utm_campaign=cn-flights-skyteam&utm_content=share",
            "desc":  "起飞吧朋友，接力拼里程，共赢12万旅行红包",
            "title": "起飞吧朋友，接力拼里程，共赢12万旅行红包"
        };
        document.addEventListener('WeixinJSBridgeReady', function onBridgeReady() {
            WeixinJSBridge.call('hideToolbar');

            WeixinJSBridge.on('menu:share:timeline', function () {
                shareData.title = "起飞吧朋友，接力拼里程，共赢12万旅行红包";
                WeixinJSBridge.invoke('shareTimeline',shareData, function (res) {
                    _report('send_msg', res.err_msg);
                });
            });

            //发送给好友
            WeixinJSBridge.on('menu:share:appmessage', function () {
                shareData.title = "起飞吧朋友，接力拼里程，共赢12万旅行红包";
                WeixinJSBridge.invoke('sendAppMessage', shareData, function (res) {
                    _report('send_msg', res.err_msg);
                })
            });
        }, false);
    </script>

    <script type="text/javascript">
        var _smq = _smq || [];
        _smq.push(['_setAccount', '13b9a96', new Date()]);
        _smq.push(['pageview']);

        (function() {
            var sm = document.createElement('script'); sm.type = 'text/javascript'; sm.async = true;
            sm.src = ('https:' == document.location.protocol ? 'https://' : 'http://') + 'cdnmaster.com/sitemaster/collect.js';
            var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(sm, s);
        })();
    </script>


    <script>

        var shareWeibo = function(){
            var text = encodeURIComponent('＃起飞吧朋友＃天巡免费机票来了！11月19-30日期间，@Skyscanner天巡 放出12万元旅行红包，赶快拉上闺蜜好友来“组团”接力拼里程，小伙伴一起赢！整！团！机！票！猛戳参与→http://t.cn/R7euH2D 去度假、去逛吃、去扫货，机会平等，努力必有收获，证明友情的时候到了！');
            var pic = encodeURIComponent('http://cnhtk.qiniudn.com/base_posters.jpg');
            var url = "http://v.t.sina.com.cn/share/share.php?url=&title=" + text + "&content=utf-8&appkey=198618609&source=&sourceUrl=&pic=" + pic;
            window.open (url, '分享到新浪微博', 'height=200, width=400, top=0, left=0, toolbar=no, menubar=no, scrollbars=yes, resizable=no,location=n o, status=no');
        }

        var shareQQ = function(){
            var text = encodeURIComponent('＃起飞吧朋友＃天巡免费机票来了！11月19-30日期间，@Skyscanner天巡 放出12万元旅行红包，赶快拉上闺蜜好友来“组团”接力拼里程，小伙伴一起赢！整！团！机！票！猛戳参与→http://t.cn/RzzMpVT 去度假、去逛吃、去扫货，机会平等，努力必有收获，证明友情的时候到了！');

            var urls = encodeURIComponent('http://t.cn/RzzMpVT');

            var url = 'http://sns.qzone.qq.com/cgi-bin/qzshare/cgi_qzshare_onekey?url=' + urls + '&title=' + text + '&pics=&summary=';
            window.open (url, '分享到QQ空间', 'height=200, width=400, top=0, left=0, toolbar=no, menubar=no, scrollbars=yes, resizable=no,location=n o, status=no');
        }

        var shareRenren = function(){
            var text = encodeURIComponent('＃起飞吧朋友＃天巡免费机票来了！11月19-30日期间，@Skyscanner天巡 放出12万元旅行红包，赶快拉上闺蜜好友来“组团”接力拼里程，小伙伴一起赢！整！团！机！票！猛戳参与→http://t.cn/RzzMpVT 去度假、去逛吃、去扫货，机会平等，努力必有收获，证明友情的时候到了！');

            var urls = encodeURIComponent('http://t.cn/RzzMpVT');

            var url = "http://share.renren.com/share/buttonshare.do?link=" + urls + "&title=" + text + "";
            window.open (url, '分享到人人网', 'height=500, width=550, top=0, left=0, toolbar=no, menubar=no, scrollbars=yes, resizable=no,location=n o, status=no');
        }

        var shareDouban = function(){
            var text = encodeURIComponent('＃起飞吧朋友＃天巡免费机票来了！11月19-30日期间，@Skyscanner天巡 放出12万元旅行红包，赶快拉上闺蜜好友来“组团”接力拼里程，小伙伴一起赢！整！团！机！票！猛戳参与→http://t.cn/RzzMpVT 去度假、去逛吃、去扫货，机会平等，努力必有收获，证明友情的时候到了！');

            var urls = encodeURIComponent('http://t.cn/RzzMpVT');
            var url = "http://www.douban.com/recommend/?url=" + urls + "&title=" + text + "";
            window.open (url, '分享到豆瓣', 'height=500, width=550, top=0, left=0, toolbar=no, menubar=no, scrollbars=yes, resizable=no,location=n o, status=no');
        }

    </script>

    <script type="text/javascript">

        var _gaq = _gaq || [];
        _gaq.push(['_setAccount', 'UA-246109-1']);
        _gaq.push(['_trackPageview']);

        (function() {
            var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
            ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
            var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
        })();

    </script>

    <script type="text/javascript">

        (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
            (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
            m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
        })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

        ga('create', 'UA-246109-81', 'auto', {'allowLinker': true});

        // load the cross-domain linker plugin
        ga('require', 'linker');

        // define Skyscanner domains
        var ga_skyscannerDomains = ["skyscanner.net","skyscanneraffiliate.net","hotels.skyscanner.com","redirect.datahc.com","www.goeverywhere.sg","bus.skyscanner.co.in","tianxun.hotelscombined.cn","hotels.skyscanner.co.kr","gr.skyscanner.com","www.skyscanner.at","www.skyscanner.ca","www.skyscanner.ch","www.skyscanner.co.id","www.skyscanner.co.in","www.skyscanner.co.kr","www.skyscanner.co.nz","www.skyscanner.co.th","www.skyscanner.com","www.skyscanner.com.au","www.skyscanner.com.br","www.skyscanner.com.hk","www.skyscanner.com.my","www.skyscanner.com.ph","www.skyscanner.com.sg","www.skyscanner.com.tr","www.skyscanner.com.tw","www.skyscanner.com.ua","www.skyscanner.com.vn","www.skyscanner.cz","www.skyscanner.de","www.skyscanner.dk","www.skyscanner.es","www.skyscanner.fi","www.skyscanner.fr","www.skyscanner.gg","www.skyscanner.hu","www.skyscanner.ie","www.skyscanner.it","www.skyscanner.jp","www.skyscanner.net","www.skyscanner.nl","www.skyscanner.no","www.skyscanner.pl","www.skyscanner.pt","www.skyscanner.ro","www.skyscanner.ru","www.skyscanner.se","www.tianxun.cn","skyteam.tianxun.cn"];

        // set the domains to autoLink
        ga('linker:autoLink', ga_skyscannerDomains);
        ga('send', 'pageview');

    </script>



    <script src="http://cnhtk.qiniudn.com/cocos2d-js-v3.1-min.js"></script>
    <style>
        body, canvas, div {
            -moz-user-select: none;
            -webkit-user-select: none;
            -ms-user-select: none;
            -khtml-user-select: none;
            -webkit-tap-highlight-color: rgba(0, 0, 0, 0);
            overflow: hidden;
        }
        #shuShow {
            width:100%;
            height:100%;
            position: absolute;
            display: none;
            left:0px;
            top:0px;
            background: url(<?=$this->config->base_url()?>res/shuShow.jpg) no-repeat center center;
            background-size: 100% 100%;
        }

        #bodyBgd {
            width:100%;
            height:100%;
            position: absolute;
            display: none;
            left:0px;
            top:0px;
            background: url(<?=$this->config->base_url()?>res/bodyBgd.jpg) no-repeat center center;
            background-size: 100% 100%;
        }
    </style>
</head>
<body style="padding:0; margin: 0; background: rgb(190,230,79);">
<canvas id="gameCanvas" width="1136" height="537"></canvas>
<div id="bodyBgd" ontouchmove= "event.preventDefault()" style="display:none;"></div>
<div id="shuShow" ontouchmove= "event.preventDefault()"></div>
<script src="<?=$this->config->base_url()?>js/resource.js"></script>
<script src="<?=$this->config->base_url()?>js/StartGame.js"></script>
<script src="<?=$this->config->base_url()?>js/main.js"></script>
</body>
</html>