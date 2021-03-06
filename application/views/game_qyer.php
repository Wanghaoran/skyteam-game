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

    <script>

        var shareWeibo = function(){
            var text = encodeURIComponent('我太幸运了，提前参加了@Skyscanner天巡＃起飞吧朋友＃抢12万元旅行红包活动的预热游戏！是朋友的都一块玩起来→  http://t.cn/R7kY2cj接力拼里程！赢整团机票！一起中奖一起飞！19日正式上线，记得来玩儿！');
            var pic = encodeURIComponent('http://cnhtk.qiniudn.com/base_posters.jpg');
            var url = "http://v.t.sina.com.cn/share/share.php?url=&title=" + text + "&content=utf-8&appkey=198618609&source=&sourceUrl=&pic=" + pic;
            window.open (url, '分享到新浪微博', 'height=200, width=400, top=0, left=0, toolbar=no, menubar=no, scrollbars=yes, resizable=no,location=n o, status=no');
        }

        var shareQQ = function(){
            var text = encodeURIComponent('我太幸运了，提前参加了@Skyscanner天巡＃起飞吧朋友＃抢12万元旅行红包活动的预热游戏！是朋友的都一块玩起来→  http://t.cn/R7kY2cj接力拼里程！赢整团机票！一起中奖一起飞！19日正式上线，记得来玩儿！');

            var urls = encodeURIComponent('http://t.cn/R7kY2cj');

            var url = 'http://sns.qzone.qq.com/cgi-bin/qzshare/cgi_qzshare_onekey?url=' + urls + '&title=' + text + '&pics=&summary=';
            window.open (url, '分享到QQ空间', 'height=200, width=400, top=0, left=0, toolbar=no, menubar=no, scrollbars=yes, resizable=no,location=n o, status=no');
        }

        var shareRenren = function(){
            var text = encodeURIComponent('我太幸运了，提前参加了@Skyscanner天巡＃起飞吧朋友＃抢12万元旅行红包活动的预热游戏！是朋友的都一块玩起来→  http://t.cn/R7kY2cj接力拼里程！赢整团机票！一起中奖一起飞！19日正式上线，记得来玩儿！');

            var url = "http://share.renren.com/share/buttonshare.do?link=&title=" + text + "";
            window.open (url, '分享到人人网', 'height=500, width=550, top=0, left=0, toolbar=no, menubar=no, scrollbars=yes, resizable=no,location=n o, status=no');
        }

        var shareDouban = function(){
            var text = encodeURIComponent('我太幸运了，提前参加了@Skyscanner天巡＃起飞吧朋友＃抢12万元旅行红包活动的预热游戏！是朋友的都一块玩起来→  http://t.cn/R7kY2cj接力拼里程！赢整团机票！一起中奖一起飞！19日正式上线，记得来玩儿！');
            var urls = encodeURIComponent('http://t.cn/R7kY2cj');
            var url = "http://www.douban.com/recommend/?url=" + urls + "&title=" + text + "";
            window.open (url, '分享到豆瓣', 'height=500, width=550, top=0, left=0, toolbar=no, menubar=no, scrollbars=yes, resizable=no,location=n o, status=no');
        }

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
<script src="<?=$this->config->base_url()?>js/StartGame_qyer.js"></script>
<script src="<?=$this->config->base_url()?>js/main.js"></script>

<script type="text/javascript">
    var shareData = {
        "img_url": "http://skyteam.tianxun.cn/static/share_icon.png",
        "img_width": "200",
        "img_height": "200",
        "link": "http://skyteam.tianxun.cn/game/qyer?associateid=SOC_WBO_00349_00001&utm_source=weibo&utm_medium=social&utm_campaign=cn-flights-skyteam&utm_content=share+qyer",
        "desc":  "我太幸运了，提前参加了@Skyscanner天巡 #起飞吧 朋友# 抢12万元旅行红包活动的预热游戏！",
        "title": "起飞吧朋友！接力拼里程，赢整团机票！19日正式上线，记得来玩儿！"
    };
    document.addEventListener('WeixinJSBridgeReady', function onBridgeReady() {
        WeixinJSBridge.call('hideToolbar');

        WeixinJSBridge.on('menu:share:timeline', function () {
            shareData.title = "我太幸运了，提前参加了@Skyscanner天巡 #起飞吧 朋友# 抢12万元旅行红包活动的预热游戏！";
            WeixinJSBridge.invoke('shareTimeline',shareData, function (res) {
                _report('send_msg', res.err_msg);
            });
        });

        //发送给好友
        WeixinJSBridge.on('menu:share:appmessage', function () {
            shareData.title = "我太幸运了，提前参加了@Skyscanner天巡 #起飞吧 朋友# 抢12万元旅行红包活动的预热游戏！";
            WeixinJSBridge.invoke('sendAppMessage', shareData, function (res) {
                _report('send_msg', res.err_msg);
            })
        });
    }, false);
</script>

</body>
</html>