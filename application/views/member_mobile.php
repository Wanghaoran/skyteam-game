<!doctype html>
<html>
<head>
    <title>个人中心－起飞吧，朋友-接力拼里程，共赢12万旅行天团红包</title>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="Cache-Control" content="max-age=3600">
    <meta name="MobileOptimized" content="240">
    <meta name="apple-touch-fullscreen" content="YES">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="viewport" content="width=device-width, initial-scale=1.0,  minimum-scale=1.0, maximum-scale=1.0">
    <meta name="keywords" content="">
    <meta name="description" content="">
    <link type="text/css" rel="stylesheet" href="<?=$this->config->base_url()?>static/mobile/css/com.css"/>
    <script type="text/javascript" src="<?=$this->config->base_url()?>static/pc/js/jquery.js"></script>


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

    <script>


        var shareWeibo = function(tid){

            var pic = '';
            //获取PIC
            $.ajax({
                type : 'POST',
                url : '<?=$this -> config -> base_url()?>welcome/getteampic',
                data : '&tid=' + tid,
                async : false,
                dataType : 'json',
                success : function(ress){
                    pic = ress.pic;
                }
            });

            var text = encodeURIComponent('约吗？我已经组团参加了@Skyscanner天巡 #起飞吧朋友# 抢12万元旅行红包活动！是朋友就快来加入贡献里程给我！去度假、去逛吃、去扫货，一起赢！整！团！机！票！臭宝贝们证明友情的时候到了！跟别的团死磕去→猛戳参与活动http://skyteam.tianxun.cn/game_other?tid=' + tid + ' 得分第一名就一起飞！')
            url = "http://v.t.sina.com.cn/share/share.php?url=&title=" + text + "&content=utf-8&source=&sourceUrl=&pic=" + pic;
            window.open (url, '分享到新浪微博', 'height=200, width=400, top=0, left=0, toolbar=no, menubar=no, scrollbars=yes, resizable=no,location=n o, status=no');
        }
    </script>

    <script>

        var deleteteam = function(){
            if(confirm('确定要删除该团吗？操作不可恢复，请谨慎操作！')){
                location.href="<?=$this->config->base_url()?>welcome/deleteteam";
            }else{
                return;
            }
        }


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
        <div class="ny_logo"><a href="http://www.tianxun.cn">&nbsp;</a></div>
        <img src="<?=$this->config->base_url()?>static/mobile/images/grzx.jpg"/>
        <div class="btn_grzx">
            <?php if($user_result['uweiboid'] == $user_result['tweiboid']):?>
                <a href="javascript:deleteteam();" class="scbt"><img src="<?=$this->config->base_url()?>static/mobile/images/shanchu.png"/></a>
            <?php endif; ?>
            <a href="#" class="tcbt"><img src="<?=$this->config->base_url()?>static/mobile/images/tcbt.png"/></a>
        </div>
    </div>
    <div class="grzx">
        <div class="grzx_admin">
            <img src="<?=$user_result['avatar_large']?>"/>
            <h2><?=$user_result['uname']?></h2>
        </div>
        <div class="grzx_info">
            <img src="<?=$this->config->base_url()?>static/mobile/images/grzx_info.jpg"/>
            <ul class="ulinfo">
                <li><?=$user_result['tname']?></li>
                <li>
                    <?php if($user_result['utype'] == 1):?>
                        团长
                    <?php else:?>
                        团员
                    <?php endif; ?>
                </li>
                <li><?=$user_result['unum']?> 里程</li>
                <li>
                    已积攒 <?=$user_result['tnum']?> 里程
                    <?php if($cha_km == 0):?>
                        您已经是<?php if($user_result['ttype'] == 1):?>美食<?php elseif($user_result['ttype'] == 2):?>购物<?php elseif($user_result['ttype'] == 3):?>休闲<?php endif; ?>团的第一名啦！
                    <?php else:?>
                        距离<?php if($user_result['ttype'] == 1):?>美食<?php elseif($user_result['ttype'] == 2):?>购物<?php elseif($user_result['ttype'] == 3):?>休闲<?php endif; ?>团排名第一还差 <?=$cha_km?> 里程
                    <?php endif;?>
                </li>
            </ul>
        </div>

        <div class="grzx_btn">
            <div class="div_go"><a href="<?=$this->config->base_url()?>welcome/game_goon"><img src="<?=$this->config->base_url()?>static/mobile/images/btn_go.png"/></a></div>
            <div class="py">
                <img src="<?=$this->config->base_url()?>static/mobile/images/btn_comeon.png"/>
                <a href="javascript:shareWeibo(<?=$user_result['tid']?>);" class="weibo"></a>
                <a class="weixin" id="weixin"></a>
            </div>
        </div>

        <div class="grzx_title"><img src="<?=$this->config->base_url()?>static/mobile/images/title_qt.jpg"/></div>

        <div class="grzx_qt">
            <ul>
                <?php foreach($friend_results as $key => $value):?>
                    <li>
                        <a href="http://weibo.com/<?=$value['profile_url']?>" target="_blank">
                            <img src="<?=$value['avatar_large']?>"/>
                            <div><?=$value['name']?></div>
                        </a>
                    </li>
                <?php endforeach;?>

                <div class="clear"></div>
            </ul>
        </div>
    </div>
    <div class="ny_foot">
        <img src="<?=$this->config->base_url()?>static/mobile/images/ny_foot4.jpg"/>
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
