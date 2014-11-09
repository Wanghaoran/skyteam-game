<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<html xmlns:wb="http://open.weibo.com/wb">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>起飞吧，朋友-接力拼里程，共赢12万旅行天团红包</title>
    <link href="<?=$this->config->base_url()?>static/pc/css/style.css" rel="stylesheet" type="text/css" />
    <script type="text/javascript" src="<?=$this->config->base_url()?>static/pc/js/jquery.js"></script>



    <!-- weibo followbutton -->
    <script src="http://tjs.sjs.sinajs.cn/open/api/js/wb.js" type="text/javascript" charset="utf-8"></script>

    <script>
        var shareWeibo = function(){
            url = "http://v.t.sina.com.cn/share/share.php?url=http%3A%2F%2F182.92.64.207%2Fskyteam-game&title=起飞吧朋友－天巡接力拼里程&content=utf-8&source=&sourceUrl=&pic=";
            window.open (url, '分享到新浪微博', 'height=200, width=400, top=0, left=0, toolbar=no, menubar=no, scrollbars=yes, resizable=no,location=n o, status=no');
        }

        var shareQQ = function(){
            url = "http://sns.qzone.qq.com/cgi-bin/qzshare/cgi_qzshare_onekey?url=http%3A%2F%2F182.92.64.207%2Fskyteam-game&title=起飞吧朋友－天巡接力拼里程&pics=&summary=";
            window.open (url, '分享到QQ空间', 'height=200, width=400, top=0, left=0, toolbar=no, menubar=no, scrollbars=yes, resizable=no,location=n o, status=no');
        }

        var shareRenren = function(){
            url = "http://share.renren.com/share/buttonshare.do?link=http%3A%2F%2F182.92.64.207%2Fskyteam-game&title=起飞吧朋友－天巡接力拼里程";
            window.open (url, '分享到人人网', 'height=500, width=550, top=0, left=0, toolbar=no, menubar=no, scrollbars=yes, resizable=no,location=n o, status=no');
        }

        var shareDouban = function(){
            url = "http://www.douban.com/recommend/?url=http%3A%2F%2F182.92.64.207%2Fskyteam-game&title=起飞吧朋友－天巡接力拼里程";
            window.open (url, '分享到豆瓣', 'height=500, width=550, top=0, left=0, toolbar=no, menubar=no, scrollbars=yes, resizable=no,location=n o, status=no');

        }

    </script>


</head>
<body>
<div class="contain">
    <div class="home">
        <div class="divbg"><img src="<?=$this->config->base_url()?>static/pc/images/home.jpg"/></div>
        <div class="logo"><a href="http://www.tianxun.cn" target="_blank"><img src="<?=$this->config->base_url()?>static/pc/images/logo.png"/></a></div>
        <div class="clear"></div>
        <div class="right">
            <ul>

                <li>
                    <div class="divliimg"><a href="<?=$this->config->base_url()?>wizard_food"><img src="<?=$this->config->base_url()?>static/pc/images/rightbtn.png"/></a></div>
                    <div class="divinfo">
                        <div class="adminimg"><a href="<?=$this->config->base_url()?>wizard_food"><img src="<?=$this->config->base_url()?>static/pc/images/adminimg3.png"/></a></div>
                        <div class="textimg"><a href="<?=$this->config->base_url()?>wizard_food"><h2>天巡星导游之美食团</h2><h3>王子强WANGZIQIANG</h3><h4>美食旅游家</h4></a></div>
                    </div>
                </li>
                <li>
                    <div class="divliimg"><a href="<?=$this->config->base_url()?>wizard_buy"><img src="<?=$this->config->base_url()?>static/pc/images/rightbtn.png"/></a></div>
                    <div class="divinfo">
                        <div class="adminimg"><a href="<?=$this->config->base_url()?>wizard_buy"><img src="<?=$this->config->base_url()?>static/pc/images/adminimg2.png"/></a></div>
                        <div class="textimg"><a href="<?=$this->config->base_url()?>wizard_buy"><h2>天巡星导游之购物团</h2><h3>手边巴黎urruolan</h3><h4>专栏作家，环球旅行家</h4></a></div>
                    </div>
                </li>
                <li>
                    <div class="divliimg"><a href="<?=$this->config->base_url()?>wizard_show"><img src="<?=$this->config->base_url()?>static/pc/images/rightbtn.png"/></a></div>
                    <div class="divinfo">
                        <div class="adminimg"><a href="<?=$this->config->base_url()?>wizard_show"><img src="<?=$this->config->base_url()?>static/pc/images/adminimg1.png"/></a></div>
                        <div class="textimg"><a href="<?=$this->config->base_url()?>wizard_show"><h2>天巡星导游之休闲团</h2><h3>旅游卫视史林子</h3><h4>旅游卫视当家主持</h4></a></div>
                    </div>
                </li>

            </ul>
            <div class="clear"></div>

        </div>
        <div class="start">
            <a href="<?=$this->config->base_url()?>welcome/weibologin" title="开始"><img src="<?=$this->config->base_url()?>static/pc/images/start.png"/></a>
        </div>
        <div class="bottom">
            <img src="<?=$this->config->base_url()?>static/pc/images/bottom.png"/>
            <div class="bottom_left">
                <div class="app"><a href="#"><img src="<?=$this->config->base_url()?>static/pc/images/app.png"/></a></div>
                <div class="weixin"><a href="#"><img src="<?=$this->config->base_url()?>static/pc/images/weixin.png"/></a></div>
            </div>
            <div class="bottom_right">
                <div class="sina">
                    <wb:follow-button uid="3353187630" type="red_3" >关注按钮</wb:follow-button>
                </div>
                <div class="linktext lt">
                    <a href="<?=$this->config->base_url()?>rank" class="phb" title="天团排行榜"><img src="<?=$this->config->base_url()?>static/pc/images/textphb.png"/></a>
                    <a href="<?=$this->config->base_url()?>wizard_food" class="txxdy" title="天巡星导游"><img src="<?=$this->config->base_url()?>static/pc/images/texttxdy.png"/></a>
                    <a href="<?=$this->config->base_url()?>rules" class="hdgz" title="活动规则"><img src="<?=$this->config->base_url()?>static/pc/images/texthdgz.png"/></a>
                </div>
            </div>
            <div class="iconlink">
                <a href="javascript:shareQQ();" class="tengxun"><img src="<?=$this->config->base_url()?>static/pc/images/icon_tengxun.png"/></a>
                <a class="sinaweibo" href="javascript:shareWeibo();"><img src="<?=$this->config->base_url()?>static/pc/images/icon_xinlang.png"/></a>
                <a class="renren" href="javascript:shareRenren();"><img src="<?=$this->config->base_url()?>static/pc/images/icon_renren.png"/></a>
                <a href="javascript:shareDouban();" class="douban"><img src="<?=$this->config->base_url()?>static/pc/images/icon_douban.png"/></a>
                <div class="text1">
                    <img src="<?=$this->config->base_url()?>static/pc/images/text1.png"/>
                </div>
            </div>
            <div class="clear"></div>
        </div>

    </div>
</div>

</body>
</html>