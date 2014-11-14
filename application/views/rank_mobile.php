<!doctype html>
<html>
<head>
    <title>天团排行榜－起飞吧，朋友-接力拼里程，共赢12万旅行天团红包</title>
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
        $(function () {
            $('.weixin').click(function (event) {
                //取消事件冒泡  
                event.stopPropagation();
                $("#hidebg").css({
                    display: "block"
                });
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
        <div class="ny_logo"><a href="#">&nbsp;</a></div>
        <img src="<?=$this->config->base_url()?>static/mobile/images/ttphb.jpg"/>
        <div class="nav_phb">
            <ul>
                <li><a href="#"><img src="<?=$this->config->base_url()?>static/mobile/images/nav_mston.png"/></a></li>
                <li><a href="#"><img src="<?=$this->config->base_url()?>static/mobile/images/nav_gwt.png"/></a></li>
                <li><a href="#"><img src="<?=$this->config->base_url()?>static/mobile/images/nav_xxt.png"/></a></li>
            </ul>
        </div>
    </div>
    <div class="phb">
        <div class="phbtitle">
            <img src="<?=$this->config->base_url()?>static/mobile/images/titlebg.jpg"/>
            <h2>1</h2>
        </div>
        <div class="phbcon">
            <img src="<?=$this->config->base_url()?>static/mobile/images/phbli.jpg"/>
            <div class="phbcon_left">
                <div class="phbleft">
                    <h2>美丽随行团</h2>
                    <img src="<?=$this->config->base_url()?>static/mobile/images/img_admin1.jpg"/>
                </div>
                <div class="phbright">
                    <p>目的地：</P>
                    <p>类别：</P>
                    <p>里程数：</P>
                    <p>天团成员：</P>
                    <ul class="sxt">
                        <li>
                            <a href="#">
                                <img src="<?=$this->config->base_url()?>static/mobile/images/img_qt1.png"/>
                                <div>耗这口</div>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <img src="<?=$this->config->base_url()?>static/mobile/images/img_qt2.png"/>
                                <div>护城河的水流</div>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <img src="<?=$this->config->base_url()?>static/mobile/images/img_qt3.png"/>
                                <div>一只蘑菇</div>
                            </a>
                        </li>

                        <div class="clear"></div>
                    </ul>
                </div>
            </div>
            <div class="phbcon_right">
                <div><a href="#"><img src="<?=$this->config->base_url()?>static/mobile/images/btn_jiayou.png"/></a></div>
                <div class="fx"><img src="<?=$this->config->base_url()?>static/mobile/images/btn_fenxiang.png"/><a href="#" class="weibo"></a><a class="weixin"></a></div>
            </div>
            <div class="clear"></div>
        </div>
        <!--一行结束-->
        <div class="phbtitle">
            <img src="<?=$this->config->base_url()?>static/mobile/images/titlebg.jpg"/>
            <h2>1</h2>
        </div>
        <div class="phbcon">
            <img src="<?=$this->config->base_url()?>static/mobile/images/phbli.jpg"/>
            <div class="phbcon_left">
                <div class="phbleft">
                    <h2>美丽随行团</h2>
                    <img src="<?=$this->config->base_url()?>static/mobile/images/img_admin1.jpg"/>
                </div>
                <div class="phbright">
                    <p>目的地：</P>
                    <p>类别：</P>
                    <p>里程数：</P>
                    <p>天团成员：</P>
                    <ul class="sxt">
                        <li>
                            <a href="#">
                                <img src="<?=$this->config->base_url()?>static/mobile/images/img_qt1.png"/>
                                <div>耗这口</div>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <img src="<?=$this->config->base_url()?>static/mobile/images/img_qt2.png"/>
                                <div>护城河的水流</div>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <img src="<?=$this->config->base_url()?>static/mobile/images/img_qt3.png"/>
                                <div>一只蘑菇</div>
                            </a>
                        </li>

                        <div class="clear"></div>
                    </ul>
                </div>
            </div>
            <div class="phbcon_right">
                <div><a href="#"><img src="<?=$this->config->base_url()?>static/mobile/images/btn_jiayou.png"/></a></div>
                <div class="fx"><img src="<?=$this->config->base_url()?>static/mobile/images/btn_fenxiang.png"/><a href="#" class="weibo"></a><a class="weixin"></a></div>
            </div>
            <div class="clear"></div>
        </div>
        <!--一行结束-->
        <div class="phbtitle">
            <img src="<?=$this->config->base_url()?>static/mobile/images/titlebg.jpg"/>
            <h2>1</h2>
        </div>
        <div class="phbcon">
            <img src="<?=$this->config->base_url()?>static/mobile/images/phbli.jpg"/>
            <div class="phbcon_left">
                <div class="phbleft">
                    <h2>美丽随行团</h2>
                    <img src="<?=$this->config->base_url()?>static/mobile/images/img_admin1.jpg"/>
                </div>
                <div class="phbright">
                    <p>目的地：</P>
                    <p>类别：</P>
                    <p>里程数：</P>
                    <p>天团成员：</P>
                    <ul class="sxt">
                        <li>
                            <a href="#">
                                <img src="<?=$this->config->base_url()?>static/mobile/images/img_qt1.png"/>
                                <div>耗这口</div>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <img src="<?=$this->config->base_url()?>static/mobile/images/img_qt2.png"/>
                                <div>护城河的水流</div>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <img src="<?=$this->config->base_url()?>static/mobile/images/img_qt3.png"/>
                                <div>一只蘑菇</div>
                            </a>
                        </li>

                        <div class="clear"></div>
                    </ul>
                </div>
            </div>
            <div class="phbcon_right">
                <div><a href="#"><img src="<?=$this->config->base_url()?>static/mobile/images/btn_jiayou.png"/></a></div>
                <div class="fx"><img src="<?=$this->config->base_url()?>static/mobile/images/btn_fenxiang.png"/><a href="#" class="weibo"></a><a class="weixin"></a></div>
            </div>
            <div class="clear"></div>
        </div>
        <!--一行结束-->
    </div>
    <!--分页  start-->
    <div class="page">
        <a href="" title="上一页" class="icon_pre"></a><a href="">1</a><b>2</b><a href="">3</a><span>...</span><a href="">15</a><a href="" title="下一页" class="icon_next"></a>
    </div>
    <!--分页  end-->
    <div class="ny_foot"><img src="<?=$this->config->base_url()?>static/mobile/images/phbbg.jpg"/></div>
    <div class="ny_foot">
        <img src="<?=$this->config->base_url()?>static/mobile/images/ny_foot2.jpg"/>
        <div class="bot_nav">
            <ul>
                <li class="short"><a href="<?=$this->config->base_url()?>" title="返回首页"></a></li>
                <li><a href="<?=$this->config->base_url()?>rank_mobile" title="天团排行榜"></a></li>
                <li><a href="<?=$this->config->base_url()?>wizard_food" title="天巡星导游"></a></li>
                <li class="short"><a href="<?=$this->config->base_url()?>rules" title="活动规则"></a></li>
                <li class="short"><a href="<?=$this->config->base_url()?>member_mobile" title="个人中心"></a></li>
            </ul>
        </div>
    </div>
</div>

</body>
</html>
