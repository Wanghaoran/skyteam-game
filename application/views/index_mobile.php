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
            "link": "http://skyteam.tianxun.cn/?associateid=SOC_WBO_00349_00001&utm_source=weibo&utm_medium=social&utm_campaign=cn-flights-skyteam&utm_content=share",
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
        <?php if($this->session->userdata('token')['uid']):?>
            <div class="tuichu"><a href="<?=$this->config->base_url()?>welcome/logout"><img src="<?=$this->config->base_url()?>static/mobile/images/tuichu.png"/></a></div>
        <?php endif; ?>
        <div class="home_foot">
            <div class="foot_img"><img src="<?=$this->config->base_url()?>static/mobile/images/home_foot.jpg"/></div>
            <div class="foot_nav">
                <ul>
                    <li><a href="<?=$this->config->base_url()?>rank_mobile"></a></li>
                    <li><a href="<?=$this->config->base_url()?>wizard_food"></a></li>
                    <li class="short"><a href="<?=$this->config->base_url()?>rules"></a></li>
                    <li class="short"><a href="<?=$this->config->base_url()?>member_mobile"></a></li>
                </ul>
            </div>
        </div>

    </div>
</div>
</body>
</html>
