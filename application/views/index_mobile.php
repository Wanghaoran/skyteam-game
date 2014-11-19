<!doctype html>
<html>
<head>
    <title>起飞吧朋友-接力拼里程，共赢12万旅行天团红包</title>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="Cache-Control" content="max-age=3600">
    <meta name="MobileOptimized" content="240">
    <meta name="apple-touch-fullscreen" content="YES">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="viewport" content="width=device-width, initial-scale=1.0,  minimum-scale=1.0, maximum-scale=1.0">
    <meta name="keywords" content="">
    <meta name="description" content="">
    <link type="text/css" rel="stylesheet" href="<?=$this->config->base_url()?>static/mobile/css/com.css"/>

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

    <script>


        var shareWeibo = function(){

            _gaq.push(['_trackEvent', 'CampaignHomepage', 'LogoClick', 'ShareWeibo']);
            _smq.push(['custom','Share','LogoClick']);
            var text = encodeURIComponent('＃起飞吧朋友＃天巡免费机票来了！11月19-30日期间，@Skyscanner天巡 放出12万元旅行红包，赶快拉上闺蜜好友来“组团”接力拼里程，一起赢！整！团！机！票！猛戳参与→http://t.cn/R7euH2D 去度假、去逛吃、去扫货！');
            var pic = encodeURIComponent('http://cnhtk.qiniudn.com/base_posters.jpg');
            var url = "http://v.t.sina.com.cn/share/share.php?url=&title=" + text + "&content=utf-8&appkey=198618609&source=&sourceUrl=&pic=" + pic;
            window.open (url, '分享到新浪微博', 'height=200, width=400, top=0, left=0, toolbar=no, menubar=no, scrollbars=yes, resizable=no,location=n o, status=no');
        }
    </script>

</head>
<body>
<!--pop start-->
<div id="hidebg" class="hidebg" style="display:none"></div>
<!--pop end-->
<div class="contain">
    <div class="home">
        <div class="divbg"><img src="<?=$this->config->base_url()?>static/mobile/images/home.jpg"/></div>
        <div class="logo"><a href="http://www.tianxun.cn"><img src="<?=$this->config->base_url()?>static/mobile/images/logo.png"/></a></div>
        <div class="btn_start"><a href="<?=$this->config->base_url()?>welcome/weibologin" title="微博登录，拼游戏，赢大奖"><img src="<?=$this->config->base_url()?>static/mobile/images/btn_start.png"/></a></div>
        <div class="rightnav">

            <ul>
                <li class="li1">
                    <div class="divliimg"><a href="<?=$this->config->base_url()?>wizard_food"><img src="<?=$this->config->base_url()?>static/mobile/images/bg_nav1.png"/></a></div>
                    <div class="divinfo">
                        <div class="adminimg"><a href="<?=$this->config->base_url()?>wizard_food"><img src="<?=$this->config->base_url()?>static/mobile/images/img_nav3.png"/></a></div>
                        <div class="textimg"><a href="<?=$this->config->base_url()?>wizard_food">王子强WANGZIQIANG<div>美食旅游家</div></a></div>
                    </div>
                </li>
                <div class="clear"></div>
                <li class="li2">
                    <div class="divliimg"><a href="<?=$this->config->base_url()?>wizard_buy"><img src="<?=$this->config->base_url()?>static/mobile/images/bg_nav2.png"/></a></div>
                    <div class="divinfo">
                        <div class="adminimg"><a href="<?=$this->config->base_url()?>wizard_buy"><img src="<?=$this->config->base_url()?>static/mobile/images/img_nav2.png"/></a></div>
                        <div class="textimg"><a href="<?=$this->config->base_url()?>wizard_buy">手边巴黎urruolan<div>专栏作家，环球旅行家</div></a></div>
                    </div>
                </li>
                <div class="clear"></div>

                <li class="li3">
                    <div class="divliimg"><a href="<?=$this->config->base_url()?>wizard_show"><img src="<?=$this->config->base_url()?>static/mobile/images/bg_nav3.png"/></a></div>
                    <div class="divinfo">
                        <div class="adminimg"><a href="<?=$this->config->base_url()?>wizard_show"><img src="<?=$this->config->base_url()?>static/mobile/images/img_nav1.png"/></a></div>
                        <div class="textimg"><a href="<?=$this->config->base_url()?>wizard_show">旅游卫视史林子<div>旅游卫视当家主持</div></a></div>
                    </div>
                </li>
                <div class="clear"></div>
            </ul>
        </div>
        <div class="sinashare"><a href="javascript:shareWeibo();" title="分享至微博"><img src="<?=$this->config->base_url()?>static/mobile/images/sinashare.png"/></a></div>
        <?php if($this->session->userdata('token')['uid']):?>
            <div class="tuichu"><a href="<?=$this->config->base_url()?>welcome/logout"><img src="<?=$this->config->base_url()?>static/mobile/images/tuichu.png"/></a></div>
        <?php endif; ?>
        <div class="home_foot">
            <div class="foot_img"><img src="<?=$this->config->base_url()?>static/mobile/images/home_foot.jpg"/></div>
            <div class="foot_nav">
                <ul>
                    <li><a onclick="_gaq.push(['_trackEvent', 'Header', 'LinkClick', 'GoToTeamRank']);_smq.push(['custom','GoToTeamRank','LinkClick']);" href="<?=$this->config->base_url()?>rank_mobile"></a></li>
                    <li><a onclick="_smq.push(['custom','GoToKOL','LinkClick']);" href="<?=$this->config->base_url()?>wizard_food"></a></li>
                    <li class="short"><a onclick="" href="<?=$this->config->base_url()?>rules"></a></li>
                    <li class="short"><a href="<?=$this->config->base_url()?>member_mobile"></a></li>
                </ul>
            </div>
        </div>

    </div>
</div>
</body>
</html>
