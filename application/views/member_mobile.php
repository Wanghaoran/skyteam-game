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
</head>
<body>
<div class="contain">
    <div class="ny_top">
        <img src="<?=$this->config->base_url()?>static/mobile/images/ny_top.jpg"/>
        <div class="ny_logo"><a href="#">&nbsp;</a></div>
        <img src="<?=$this->config->base_url()?>static/mobile/images/grzx.jpg"/>
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
            <img src="<?=$this->config->base_url()?>static/mobile/images/grzx_btn.jpg"/>
            <a href="#" class="go"><img src="<?=$this->config->base_url()?>static/mobile/images/btn_go.png"/></a><a href="#" class="comeon"><img src="<?=$this->config->base_url()?>static/mobile/images/btn_comeon.png"/></a>
        </div>
        <div class="grzx_qt">
            <ul>
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
                <li>
                    <a href="#">
                        <img src="<?=$this->config->base_url()?>static/mobile/images/img_qt4.png"/>
                        <div>爱闲逛</div>
                    </a>
                </li>
                <div class="clear"></div>
            </ul>
        </div>
    </div>
    <div class="ny_foot">
        <img src="<?=$this->config->base_url()?>static/mobile/images/ny_foot4.jpg"/>
        <div class="bot_nav">
            <ul>
                <li class="short"><a href="<?=$this->config->base_url()?>" title="返回首页"></a></li>
                <li><a href="#" title="天团排行榜"></a></li>
                <li><a href="<?=$this->config->base_url()?>wizard_food" title="天巡星导游"></a></li>
                <li class="short"><a href="<?=$this->config->base_url()?>rules" title="活动规则"></a></li>
                <li class="short"><a href="<?=$this->config->base_url()?>member_mobile" title="个人中心"></a></li>
            </ul>
        </div>
    </div>
</div>

</body>
</html>
