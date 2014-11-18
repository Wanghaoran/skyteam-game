<!doctype html>
<html>
<head>
    <title>天团排行榜－起飞吧朋友-接力拼里程，共赢12万旅行天团红包</title>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="Cache-Control" content="max-age=3600">
    <meta name="MobileOptimized" content="240">
    <meta name="apple-touch-fullscreen" content="YES">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="viewport" content="width=device-width, initial-scale=1.0,  minimum-scale=1.0, maximum-scale=1.0">
    <meta name="keywords" content="">
    <meta name="description" content="">
    <link type="text/css" rel="stylesheet" href="<?=$this->config->base_url()?>static/mobile/css/com.css"/>
    <script type="text/javascript" src="<?=$this->config->base_url()?>static/mobile/js/jquery.min.js"></script>

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
        $(function () {
            $('.weixin').click(function (event) {

                _gaq.push(['_trackEvent', 'TeamRank', 'ButtonClick', 'ShareWeixinTeamA']);


                //取消事件冒泡  
                event.stopPropagation();
                $("#hidebg").css({
                    display: "block"
                });

                shareData.link = 'http://skyteam.tianxun.cn/game_other?tid=' + $(this).attr('tid') + '&associateid=SOC_WCH_00349_00001&utm_source=wechat&utm_medium=social&utm_campaign=cn-flights-skyteam&utm_content=share+game';
                $("#popDiv").show();
            });
            //点击空白处或者自身隐藏弹出层，下面分别为滑动和淡出效果。
            $(document).click(function (event) {
                $("#hidebg").css({
                    display: "none"
                });
                $("#popDiv").hide();
            });

            $("#popDiv").bind('mouseover', function(){
                //alert("鼠标移上");
                $(document).unbind("click");
            });
            $("#popDiv").bind('mouseout', function(event){
                // alert("鼠标移除");
                $(document).bind("click", function(event){
                    $("#hidebg").css({
                        display: "none"
                    });
                    $("#popDiv").hide();
                });
            });

        })
    </script>

    <script>


        var shareWeibo = function(tid){

            _gaq.push(['_trackEvent', 'TeamRank', 'ButtonClick', 'ShareWeiboTeamA']);


            var pic = encodeURIComponent('http://cnhtk.qiniudn.com/base_posters.jpg');

            var text = encodeURIComponent('是朋友就快来加入贡献里程给我！去度假、去逛吃、去扫货，一起赢！整！团！机！票！臭宝贝们证明友情的时候到了！跟别的团死磕去→猛戳参与活动http://skyteam.tianxun.cn/game_other?tid=' + tid + '&associateid=SOC_WBO_00349_00001&utm_source=weibo&utm_medium=social&utm_campaign=cn-flights-skyteam&utm_content=share+game 得分第一名就一起飞！')
            url = "http://v.t.sina.com.cn/share/share.php?url=&title=" + text + "&content=utf-8&appkey=198618609&source=&sourceUrl=&pic=" + pic;
            window.open (url, '分享到新浪微博', 'height=200, width=400, top=0, left=0, toolbar=no, menubar=no, scrollbars=yes, resizable=no,location=n o, status=no');
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

</head>
<body>
<!--遮罩层  start-->
<div id="popDiv" class="mydiv10" style="display:none;">
    <div class="divimg10"><img src="<?=$this->config->base_url()?>static/mobile/images/sharebg.png"/> </div>
</div>
<div id="hidebg" class="hidebg10" style="display:none"></div>
<!--遮罩层  end-->
<div class="contain">
    <div class="ny_top">
        <img src="<?=$this->config->base_url()?>static/mobile/images/ny_top.jpg"/>
        <div class="ny_logo"><a onclick="_gaq.push(['_trackEvent', 'Header', 'LinkClick', 'GoToCampaignHomepage']);" href="http://www.tianxun.cn">&nbsp;</a></div>
        <img src="<?=$this->config->base_url()?>static/mobile/images/ttphb.jpg"/>
        <div class="nav_phb">
            <ul>
                <?php if($type == 1):?>
                    <li><a href="<?=$this->config->base_url()?>rank_mobile?type=1"><img src="<?=$this->config->base_url()?>static/mobile/images/nav_mston.png"/></a></li>
                    <li><a href="<?=$this->config->base_url()?>rank_mobile?type=2"><img src="<?=$this->config->base_url()?>static/mobile/images/nav_gwt.png"/></a></li>
                    <li><a href="<?=$this->config->base_url()?>rank_mobile?type=3"><img src="<?=$this->config->base_url()?>static/mobile/images/nav_xxt.png"/></a></li>
                <?php elseif($type == 2):?>

                    <li><a href="<?=$this->config->base_url()?>rank_mobile?type=1"><img src="<?=$this->config->base_url()?>static/mobile/images/nav_mst.png"/></a></li>
                    <li><a href="<?=$this->config->base_url()?>rank_mobile?type=2"><img src="<?=$this->config->base_url()?>static/mobile/images/nav_gwton.png"/></a></li>
                    <li><a href="<?=$this->config->base_url()?>rank_mobile?type=3"><img src="<?=$this->config->base_url()?>static/mobile/images/nav_xxt.png"/></a></li>

                <?php elseif($type == 3):?>

                    <li><a href="<?=$this->config->base_url()?>rank_mobile?type=1"><img src="<?=$this->config->base_url()?>static/mobile/images/nav_mst.png"/></a></li>
                    <li><a href="<?=$this->config->base_url()?>rank_mobile?type=2"><img src="<?=$this->config->base_url()?>static/mobile/images/nav_gwt.png"/></a></li>
                    <li><a href="<?=$this->config->base_url()?>rank_mobile?type=3"><img src="<?=$this->config->base_url()?>static/mobile/images/nav_xxton.png"/></a></li>
                <?php endif; ?>

            </ul>
        </div>
    </div>

    <div class="phb">

        <?php foreach($rank as $key => $value):?>


        <div class="phbtitle">
            <img src="<?=$this->config->base_url()?>static/mobile/images/titlebg.jpg"/>
            <h2><?=($key+1)?></h2>
        </div>
        <div class="phbcon">
            <img src="<?=$this->config->base_url()?>static/mobile/images/phbli.jpg"/>
            <div class="phbcon_left">
                <div class="phbleft">
                    <h2><?=$value['name']?></h2>
                    <img src="<?=$value['leader'][0]['avatar_large']?>"/>
                </div>
                <div class="phbright">
                    <p>目的地：
                        <?=$value['place']?></P>
                    <p>类别：
                        <?php if($value['type'] == 1):?>
                    <td width="130">美食</td></td>
                    <?php elseif($value['type'] == 2):?>
                        <td width="130">购物</td></td>
                    <?php elseif($value['type'] == 3):?>
                        <td width="130">休闲</td></td>
                    <?php endif; ?>
                    </P>
                    <p>里程数：<?=$value['num']?> </P>
                    <p>天团成员：</P>
                    <ul class="sxt">

                        <?php foreach($value['number'] as $key2 => $value2):?>
                            <li>
                                <a href="http://weibo.com/<?=$value2['profile_url']?>" target="_blank">
                                    <img src="<?=$value2['avatar_large']?>"/>
                                    <div><?=$value2['name']?></div>
                                </a>
                            </li>
                        <?php endforeach;?>

                        <div class="clear"></div>
                    </ul>
                </div>
            </div>
            <div class="phbcon_right">
                <div><a onclick="_gaq.push(['_trackEvent', 'TeamRank', 'ButtonClick', 'LikeTeamA']);" href="<?=$this->config->base_url()?>game_other?tid=<?=$value['id']?>" target="_blank"><img src="<?=$this->config->base_url()?>static/mobile/images/btn_jiayou.png"/></a></div>

                <div class="fx">
                    <img src="<?=$this->config->base_url()?>static/mobile/images/btn_fenxiang.png"/>
                    <a href="javascript:shareWeibo(<?=$value['id']?>);" class="weibo"></a>
                    <a class="weixin" tid="<?=$value['id']?>"></a>
                </div>
            </div>
            <div class="clear"></div>
        </div>
        <!--一行结束-->

        <?php endforeach;?>

    </div>
    <!--分页  start-->
    <div class="page" style="font-size: 15px;">
        <?=$page?>
    </div>
    <!--分页  end-->
    <div class="ny_foot"><img src="<?=$this->config->base_url()?>static/mobile/images/phbbg.jpg"/></div>
    <div class="ny_foot">
        <img src="<?=$this->config->base_url()?>static/mobile/images/ny_foot2.jpg"/>
        <div class="bot_nav">
            <ul>
                <li class="short"><a href="<?=$this->config->base_url()?>" title="返回首页"></a></li>
                <li><a onclick="_gaq.push(['_trackEvent', 'Header', 'LinkClick', 'GoToTeamRank']);" href="<?=$this->config->base_url()?>rank_mobile" title="天团排行榜"></a></li>
                <li><a href="<?=$this->config->base_url()?>wizard_food" title="天巡星导游"></a></li>
                <li class="short"><a href="<?=$this->config->base_url()?>rules" title="活动规则"></a></li>
                <li class="short"><a href="<?=$this->config->base_url()?>member_mobile" title="个人中心"></a></li>
            </ul>
        </div>
    </div>
</div>




</body>
</html>
