<!doctype html>
<html>
<head>
    <title>天巡星导游之购物团－起飞吧朋友-接力拼里程，共赢12万旅行天团红包</title>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="Cache-Control" content="max-age=3600">
    <meta name="MobileOptimized" content="240">
    <meta name="apple-touch-fullscreen" content="YES">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="viewport" content="width=device-width, initial-scale=1.0,  minimum-scale=1.0, maximum-scale=1.0">
    <meta name="keywords" content="">
    <meta name="description" content="">
    <link type="text/css" rel="stylesheet" href="<?=$this->config->base_url()?>static/mobile/css/com.css"/>

    <style type="text/css">

        .ss_searchpanel.ss_skyscraper
        {
            width:100%!important;
            height:auto!important;
        }
        .ss_deals
        {
            display:none!important;
        }
        .ss_tabs
        {
            display:none!important;
        }
        .ss_footer_getwidget .ss_cf
        {
            display:none!important;
        }
        .ss_searchpanel.ss_skyscraper .ss_form
        {
            height:auto!important;
            padding:10px 5px!important;
        }
        .ss_searchpanel .ss_form_wrapper
        {
            background-color:transparent!important;
        }
        .ss_searchpanel .ss_form
        {
            background-color:transparent!important;
        }
        .ss_searchpanel
        {
            background-color:transparent!important;
            -webkit-box-shadow: none!important;
            -moz-box-shadow: none!important;
            box-shadow: none!important;
        }

        .ss_searchpanel.ss_skyscraper .ss_row {
            padding-top: 15px;
            width: 40%;
            float: left;
            margin: 0 5%;
        }

    </style>


    <script type="text/javascript" src="http://api.skyscanner.net/api.ashx?key=7d737666-889f-45ff-abf6-76be8d9547e7"></script>
    <script type="text/javascript">


        skyscanner.load('snippets', '2', { overridecss: "<?=$this->config->base_url()?>static/pc/css/skyscanner-widget.css" });

        function main(){
            var snippet = new skyscanner.snippets.SearchPanelControl();
            snippet.setShape('skyscraper');
            snippet.setCulture('zh-CN');
            snippet.setCurrency("CNY");
            snippet.setMarket("CN");
            snippet.setDepartureEmpty();
            snippet.setDestinationEmpty();
//            snippet.setDayviewModeEnabled(true);

            snippet.draw(document.getElementById("snippet_searchpanel"));
        }
        skyscanner.setOnLoadCallback(main);


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
</head>
<body>
<div class="contain">
    <div class="ny_top">
        <img src="<?=$this->config->base_url()?>static/mobile/images/ny_top.jpg"/>
        <div class="ny_logo"><a href="http://www.tianxun.cn">&nbsp;</a></div>
    </div>
    <div class="kol">
        <div class="tab_kol">
            <div class="tab_koltitle">
                <ul>

                    <li><a onclick="_smq.push(['custom','GoToFoodWizard','TabClick']);" href="<?=$this->config->base_url()?>wizard_food"><img src="<?=$this->config->base_url()?>static/mobile/images/tab_mst.png"/></a></li>
                    <li><a onclick="_smq.push(['custom','GoToBuyWizard','TabClick']);" href="<?=$this->config->base_url()?>wizard_buy"><img src="<?=$this->config->base_url()?>static/mobile/images/tab_gwton.png"/></a></li>
                    <li class="last"><a onclick="_smq.push(['custom','GoToShowWizard','TabClick']);" href="<?=$this->config->base_url()?>wizard_show"><img src="<?=$this->config->base_url()?>static/mobile/images/tab_xxt.png"/></a></li>

                </ul>
                <div class="clear"></div>
            </div>
            <div class="clear20"></div>
            <div class="tab_kolcon">
                <div class="tab_kol_info">
                    <img src="<?=$this->config->base_url()?>static/mobile/images/tab_infobg.png"/>
                    <div class="divleft">
                        <img src="http://tp1.sinaimg.cn/1670879140/180/5700522773/0"/>
                </div>
                    <div class="divright">
                        <h2>手边巴黎urruola</h2>
                        <h3>慢行6大洲、奢享31国的环球旅行家，专栏作家，自由撰稿人。</h3>
                        <p><a href="http://weibo.com/u/1670879140" class="btn_gz"><img src="<?=$this->config->base_url()?>static/mobile/images/btn_gz.png"/></a></p>
                    </div>
                    <div class="clear"></div>
                </div>
                <div class="clear"></div>
                <div class="tab_kol_tip">
                    手边巴黎urruolan携手天巡为您推荐以下10大购物目的地
                </div>
                <div class="imglist">
                    <!--话题列表 开始-->
                    <div class="photo_lcon">

                        <dl>
                            <dt>
                                <a href="http://www.tianxun.cn/flights-to/osaa/cheap-flights-to-osaka.html"><img src="<?=$this->config->base_url()?>static/pc/place/11.jpg" /></a>
                            <div class="left_title">日本 大阪</div>
                            </dt>
                            <dd>
                                <h2>大阪：扫荡最全药妆</h2>
                                <P>在大阪的心斋桥和道顿堀，任何一家药妆店都可以满足你的购物欲望，药妆满坑满谷，满眼打折字样，友好耐心的中国店员，顾客people montain people sea,看到大大的“药”字，你就往前冲吧，快去大阪，燃烧你的购物小宇宙！</P>
                            </dd>
                            <div class="clear10"></div>
                        </dl>
                        <dl>
                            <dt>
                                <a href="http://www.tianxun.cn/flights-to/sela/cheap-flights-to-seoul.html"><img src="<?=$this->config->base_url()?>static/pc/place/12.jpg" /></a>
                            <div class="left_title">韩国 首尔</div>
                            </dt>
                            <dd>
                                <h2>首尔：购物到天亮</h2>
                                <P>东大门是个大魔术箱，你空手进去，必须大包小包出来！不管是大商场还是小市场，24小时都热热闹闹的，这才叫买东西，让谁都得有收获，物美还必须价廉！走，去东大门进货！</P>
                            </dd>
                            <div class="clear10"></div>
                        </dl>
                        <dl>
                            <dt>
                                <a href="http://www.tianxun.cn/flights-to/hkg/cheap-flights-to-hong-kong-international-airport.html"><img src="<?=$this->config->base_url()?>static/pc/place/13.jpg" /></a>
                            <div class="left_title">香港</div>
                            </dt>
                            <dd>
                                <h2>香港：停不下来的节奏</h2>
                                <P>无论你去过多少次香港，都可以以购物为由再去一次，不用事先想好买什么，到了那儿自然就会有好多想法，好多萌物尖儿货上都贴着你的名字呢，它们等你呢，赶紧去认领回家</P>
                            </dd>
                            <div class="clear10"></div>
                        </dl>
                        <dl>
                            <dt>
                                <a href="http://www.tianxun.cn/flights-to/ista/cheap-flights-to-istanbul.html"><img src="<?=$this->config->base_url()?>static/pc/place/14.jpg" /></a>
                            <div class="left_title">土耳其 伊斯坦布尔</div>
                            </dt>
                            <dd>
                                <h2>伊斯坦布尔：最炫民族风</h2>
                                <P>在这个横跨欧亚的城市里，逛最有当地特色的市场才是体验风土人情的购物方式，超过4000家店铺，迷宫一样的大巴扎，要想逛得痛快还真的有点体力才成，民族风买起来奇珍异宝寻起来</P>
                            </dd>
                            <div class="clear10"></div>
                        </dl>
                        <dl>
                            <dt>
                                <a href="http://www.tianxun.cn/flights-to/dxba/cheap-flights-to-dubai.html"><img src="<?=$this->config->base_url()?>static/pc/place/15.jpg" /></a>
                            <div class="left_title">阿联酋 迪拜</div>
                            </dt>
                            <dd>
                                <h2>迪拜：作土豪的feel</h2>
                                <P>那里有全世界最奢华的商场，有全球最大的购物中心，有琳琅满目的大牌，每个商场就是一个小型王国，你就去做国王吧，做公主吧，做土豪吧，做白富美吧，好好享受，毕竟让人奢华的机会不多，好好表现你的演技</P>
                            </dd>
                            <div class="clear10"></div>
                        </dl>
                        <dl>
                            <dt>
                                <a href="http://www.tianxun.cn/flights-to/lond/cheap-flights-to-london.html"><img src="<?=$this->config->base_url()?>static/pc/place/16.jpg" /></a>
                            <div class="left_title">英国 伦敦</div>
                            </dt>
                            <dd>
                                <h2>伦敦：英伦腔调十足</h2>
                                <P>牛津街是全欧洲最繁忙的街道，除了高级的百货公司，还有各种吸引年轻人的随意轻松设计前卫的小商店，拎着购物袋一出门你就走在满是18世纪的英伦风格建筑的街道上了，伦敦就是这么讲究，买东西也得有腔调</P>
                            </dd>
                            <div class="clear10"></div>
                        </dl>
                        <dl>
                            <dt>
                                <a href="http://www.tianxun.cn/flights-to/ams/cheap-flights-to-amsterdam-airport.html"><img src="<?=$this->config->base_url()?>static/pc/place/17.jpg" /></a>
                            <div class="left_title">荷兰 阿姆斯特丹</div>
                            </dt>
                            <dd>
                                <h2>阿姆斯特丹：钻石任你选</h2>
                                <P>拥有一颗璀璨的钻石，是购物的终极梦想，那么来阿姆斯特丹就对了！这里有闻名世界的钻石切割工艺，迦山Gassan钻石工厂更是一座钻石圣殿，尽管选你喜欢的吧，别忘了还能退税呢</P>
                            </dd>
                            <div class="clear10"></div>
                        </dl>
                        <dl>
                            <dt>
                                <a href="http://www.tianxun.cn/flights-to/fran/cheap-flights-to-frankfurt.html"><img src="<?=$this->config->base_url()?>static/pc/place/18.jpg" /></a>
                            <div class="left_title">德国 法兰克福</div>
                            </dt>
                            <dd>
                                <h2>法兰克福：不想买名牌都难</h2>
                                <P>德国品质尽可放心，在法兰克福可以一站购齐，只要在蔡尔街和歌德街逛上一天，你要考虑的问题就只剩下行李会不会超重了，毕竟背个铁锅回国也是蛮常见的事儿</P>
                            </dd>
                            <div class="clear10"></div>
                        </dl>
                        <dl>
                            <dt>
                                <a href="http://www.tianxun.cn/flights-to/pari/cheap-flights-to-paris.html"><img src="<?=$this->config->base_url()?>static/pc/place/19.jpg" /></a>
                            <div class="left_title">法国 巴黎</div>
                            </dt>
                            <dd>
                                <h2>巴黎：我们卖的是生活方式</h2>
                                <P>既然来到了巴黎，就像巴黎人一样地过日子吧，喝一杯咖啡，不慌不忙地逛逛，体验舒适的服务，享受难得的阳光，随意走进一间很有感觉的二手店，不用买什么，你只需要享受整个过程</P>
                            </dd>
                            <div class="clear10"></div>
                        </dl>
                        <dl class="dl_margin">
                            <dt>
                                <a href="http://www.tianxun.cn/flights-to/nyca/cheap-flights-to-new-york.html"><img src="<?=$this->config->base_url()?>static/pc/place/20.jpg" /></a>
                            <div class="left_title">美国 纽约</div>
                            </dt>
                            <dd>
                                <h2>纽约：喜欢才买</h2>
                                <P>我们买的任何一件东西都应该让自己变得有趣，这就是纽约的气质，纽约的市集可以帮你拾起早已不在的那些小爱好，在这里你可以买到各种有趣甚至奇怪的东西，管它是做什么用的呢，喜欢你就买下来</P>
                            </dd>
                            <div class="clear10"></div>
                        </dl>

                        <div class="clear"></div>

                    </div>
                    <!--话题列表 结束-->
                </div>

            </div>
            <div class="clear20"></div>
            <div class="tab_kol_tishi"><img src="<?=$this->config->base_url()?>static/mobile/images/text_info.png"/></div>
            <div class="clear10"></div>
            <div class="tab_kol_time">

                <div id="snippet_searchpanel" style="width: auto; height:auto;"></div>

            </div>
            <div class="clear10"></div>
        </div>
    </div>
    <div class="ny_foot">
        <img src="<?=$this->config->base_url()?>static/mobile/images/ny_foot5.jpg"/>
        <div class="bot_nav">
            <ul>
                <li class="short"><a onclick="_smq.push(['custom','GoToCampaignHomepage','LinkClick']);" href="<?=$this->config->base_url()?>" title="返回首页"></a></li>
                <li><a onclick="_smq.push(['custom','GoToTeamRank','LinkClick']);" href="<?=$this->config->base_url()?>rank_mobile" title="天团排行榜"></a></li>
                <li><a onclick="_smq.push(['custom','GoToKOL','LinkClick']);" href="<?=$this->config->base_url()?>wizard_food" title="天巡星导游"></a></li>
                <li class="short"><a onclick="_smq.push(['custom','GoToCampaignRules','LinkClick']);" href="<?=$this->config->base_url()?>rules" title="活动规则"></a></li>
                <li class="short"><a href="<?=$this->config->base_url()?>member_mobile" title="个人中心"></a></li>
            </ul>
        </div>
    </div>
</div>
<script type="text/javascript" src="<?=$this->config->base_url()?>static/mobile/js/jquery.min.js"></script>
<script type="text/javascript" src="j<?=$this->config->base_url()?>static/mobile/s/jQuery-jcDate.js"></script>
<script type="text/javascript">
    $(function (){
        $("input.jcDate").jcDate({
            IcoClass : "jcDateIco",
            Event : "click",
            Speed : 100,
            Left : 0,
            Top : 28,
            format : "-",
            Timeout : 100
        });
    });
</script>
<script type="text/javascript">
    $(function(){
        //keywords text
        var keyword1 = "中国(CN)";
        var keyword2 = "输入国家/地区、城市或机场";
        $(".inputclass1").val(keyword1).bind("focus",function(){
            if(this.value == keyword1){
                this.value = "";
                this.className = "focus_text"
            }
        }).bind("blur",function(){
            if(this.value == ""){
                this.value = keyword1;
                this.className = "blur_text"
            }
        });
        $(".inputclass2").val(keyword2).bind("focus",function(){
            if(this.value == keyword2){
                this.value = "";
                this.className = "focus_text"
            }
        }).bind("blur",function(){
            if(this.value == ""){
                this.value = keyword2;
                this.className = "blur_text"
            }
        });

    });

</script>
</body>
</html>
