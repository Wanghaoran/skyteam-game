<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>起飞吧，朋友</title>
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
            var text = encodeURIComponent('约吗？我已经组团参加了@Skyscanner天巡 #起飞吧朋友# 抢12万元旅行红包活动！是朋友就快来加入贡献里程给我！去度假、去逛吃、去扫货，一起赢！整！团！机！票！臭宝贝们证明友情的时候到了！跟别的团死磕去→猛戳参与活动http://t.cn/R7euH2D 得分第一名就一起飞！')

            url = "http://v.t.sina.com.cn/share/share.php?url=http%3A%2F%2F182.92.64.207%2Fskyteam-game&title=" + text + "&content=utf-8&source=&sourceUrl=&pic=";
            window.open (url, '分享到新浪微博', 'height=200, width=400, top=0, left=0, toolbar=no, menubar=no, scrollbars=yes, resizable=no,location=n o, status=no');
        }

        var shareQQ = function(){
            var text = encodeURIComponent('约吗？我已经组团参加了@Skyscanner天巡 #起飞吧朋友# 抢12万元旅行红包活动！是朋友就快来加入贡献里程给我！去度假、去逛吃、去扫货，一起赢！整！团！机！票！臭宝贝们证明友情的时候到了！跟别的团死磕去→猛戳参与活动http://t.cn/R7euH2D 得分第一名就一起飞！')

            url = "http://sns.qzone.qq.com/cgi-bin/qzshare/cgi_qzshare_onekey?url=http%3A%2F%2F182.92.64.207%2Fskyteam-game&title=" + text + "&pics=&summary=";
            window.open (url, '分享到QQ空间', 'height=200, width=400, top=0, left=0, toolbar=no, menubar=no, scrollbars=yes, resizable=no,location=n o, status=no');
        }

        var shareRenren = function(){
            var text = encodeURIComponent('约吗？我已经组团参加了@Skyscanner天巡 #起飞吧朋友# 抢12万元旅行红包活动！是朋友就快来加入贡献里程给我！去度假、去逛吃、去扫货，一起赢！整！团！机！票！臭宝贝们证明友情的时候到了！跟别的团死磕去→猛戳参与活动http://t.cn/R7euH2D 得分第一名就一起飞！')

            url = "http://share.renren.com/share/buttonshare.do?link=http%3A%2F%2F182.92.64.207%2Fskyteam-game&title=" + text + "";
            window.open (url, '分享到人人网', 'height=500, width=550, top=0, left=0, toolbar=no, menubar=no, scrollbars=yes, resizable=no,location=n o, status=no');
        }

        var shareDouban = function(){
            var text = encodeURIComponent('约吗？我已经组团参加了@Skyscanner天巡 #起飞吧朋友# 抢12万元旅行红包活动！是朋友就快来加入贡献里程给我！去度假、去逛吃、去扫货，一起赢！整！团！机！票！臭宝贝们证明友情的时候到了！跟别的团死磕去→猛戳参与活动http://t.cn/R7euH2D 得分第一名就一起飞！')

            url = "http://www.douban.com/recommend/?url=http%3A%2F%2F182.92.64.207%2Fskyteam-game&title=" + text + "";
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
<script src="<?=$this->config->base_url()?>js/StartGame.js"></script>
<script src="<?=$this->config->base_url()?>js/main.js"></script>
</body>
</html>