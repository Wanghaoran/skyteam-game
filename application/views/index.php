<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<html xmlns:wb="http://open.weibo.com/wb">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>起飞吧，朋友-接力拼里程，共赢12万旅行天团红包</title>
    <link href="<?=$this->config->base_url()?>static/pc/css/style.css" rel="stylesheet" type="text/css" />
    <script type="text/javascript" src="<?=$this->config->base_url()?>static/pc/js/jquery.js"></script>


    <meta property="wb:webmaster" content="9a7f3a72c7123521" />

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

    <script type="text/javascript">
        //显示灰色 jQuery 遮罩层
        function showBg() {

            $(".ny_top").css({
                display: "block"
            });
            $(".logo").css({
                display: "none"
            });

            $("#hidebg").css({
                display: "block"
            });
            $("#popDiv1").show();
        }
        //关闭灰色 jQuery 遮罩
        function closeBg() {
            $("#hidebg,#popDiv1").hide();
        }

        //下一步
        function showNext(){
            $("#popDiv1").hide();
            $("#popDiv2").show();
        }

        // 分享代码
        var shareid = "fenxiang";

        (function() {
            var a = {
                url:function() {
                    return encodeURIComponent(window.location.href)
                },title:function() {
                    return encodeURIComponent(window.document.title)
                },content:function(b) {
                    if (b) {
                        return encodeURIComponent($("#" + b).html())
                    } else {
                        return""
                    }
                },setid:function() {
                    if (typeof(shareid) == "undefined") {
                        return null
                    } else {
                        return shareid
                    }
                },sinaminiblog:function() {
                    window.open("http://v.t.sina.com.cn/share/share.php?url=" + this.url() + "&title=" + this.title() + "&content=utf-8&source=&sourceUrl=&pic=")
                },qqzone:function() {
                    window.open('http://sns.qzone.qq.com/cgi-bin/qzshare/cgi_qzshare_onekey?url=' + encodeURIComponent(location.href) + '&title=' + encodeURIComponent(document.title))}};
            window.share = a
        })();

        $(function() {
            $(".renren").click(function() {
                share.renren();
            });
            $(".xinlang").click(function() {
                $("#popDiv2").hide();
                $("#popDiv3").show();
                setTimeout(function(){$("#popDiv3").hide();$("#popDiv4").show(); share.sinaweibo();},3000);//1000是1秒


            });
            $(".sinaweibo").click(function() {
                share.sinaweibo();
            });
            $(".qqzone").click(function() {
                share.qqzone();
            });

            $(".tengxun").click(function() {
                share.qqweibo();
            });

        });
        function postToWb() {
            var _t = encodeURI(document.title);
            var _url = encodeURI(document.location);
            var _appkey = encodeURI("appkey");
            var _u = 'http://v.t.qq.com/share/share.php?title=' + _t + '&url=' + _url + '&appkey=' + _appkey;
            window.open(_u);
        }

        ;(function($){
            $.fn.hcheckbox=function(options){
                $(':checkbox+label',this).each(function(){
                    $(this).addClass('checkbox');
                    if($(this).prev().is(':disabled')==false){
                        if($(this).prev().is(':checked'))
                            $(this).addClass("checked");
                    }else{
                        $(this).addClass('disabled');
                    }
                }).click(function(event){
                        if(!$(this).prev().is(':checked')){
                            $(this).addClass("checked");
                            $(this).prev()[0].checked = true;
                        }
                        else{
                            $(this).removeClass('checked');
                            $(this).prev()[0].checked = false;
                        }
                        event.stopPropagation();
                    }
                ).prev().hide();
            }

            $.fn.hradio = function(options){
                var self = this;
                return $(':radio+label',this).each(function(){
                    $(this).addClass('hRadio');
                    if($(this).prev().is("checked"))
                        $(this).addClass('hRadio_Checked');
                }).click(function(event){
                    $(this).siblings().removeClass("hRadio_Checked");
                    if(!$(this).prev().is(':checked')){
                        $(this).addClass("hRadio_Checked");
                        $(this).prev()[0].checked = true;
                    }

                    event.stopPropagation();
                })
                    .prev().hide();
            }

        })(jQuery)

        $(function(){
            $('#chklist').hcheckbox();
            $('#radiolist').hradio();
            $('#radiolist2').hradio();
        });
    </script>
</head>
<body>

<div class="contain">
    <div class="home">
        <div class="divbg"><img src="<?=$this->config->base_url()?>static/pc/images/home.jpg"/></div>
        <div class="ny_top"><img src="<?=$this->config->base_url()?>static/pc/images/ny_top.png"/></div>
        <div class="logo"><a href="http://www.tianxun.cn" target="_blank"><img src="<?=$this->config->base_url()?>static/pc/images/logo.png"/></a></div>
        <div class="clear"></div>
        <div class="bottom">
            <div class="right">
                <ul>
                    <li>
                        <div class="divliimg"><a href="<?=$this->config->base_url()?>wizard_show"><img src="<?=$this->config->base_url()?>static/pc/images/rightbtn.png"/></a></div>
                        <div class="divinfo">
                            <div class="adminimg"><a href="<?=$this->config->base_url()?>wizard_show"><img src="<?=$this->config->base_url()?>static/pc/images/adminimg1.png"/></a></div>
                            <div class="textimg"><a href="<?=$this->config->base_url()?>wizard_show"><h2>天巡星导游之休闲团</h2><h3>旅游卫视史林子</h3><h4>旅游卫视当家主持</h4></a></div>
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
                        <div class="divliimg"><a href="<?=$this->config->base_url()?>wizard_food"><img src="<?=$this->config->base_url()?>static/pc/images/rightbtn.png"/></a></div>
                        <div class="divinfo">
                            <div class="adminimg"><a href="<?=$this->config->base_url()?>wizard_food"><img src="<?=$this->config->base_url()?>static/pc/images/adminimg3.png"/></a></div>
                            <div class="textimg"><a href="<?=$this->config->base_url()?>wizard_food"><h2>天巡星导游之美食团</h2><h3>王子强WANGZIQIANG</h3><h4>美食旅游家</h4></a></div>
                        </div>
                    </li>
                </ul>
                <div class="clear"></div>
                <div class="iconlink">
                    <img src="<?=$this->config->base_url()?>static/pc/images/bottom_right.png"/>
                    <a href="javascript:shareQQ();" class="tengxun">
                        <img src="<?=$this->config->base_url()?>static/pc/images/icon_tengxun.png"/>
                    </a>
                    <a class="sinaweibo" href="javascript:shareWeibo();">
                        <img src="<?=$this->config->base_url()?>static/pc/images/icon_xinlang.png"/>
                    </a>
                    <a class="renren" href="javascript:shareRenren();">
                        <img src="<?=$this->config->base_url()?>static/pc/images/icon_renren.png"/>
                    </a>
                    <a href="javascript:shareDouban();" class="douban">
                        <img src="<?=$this->config->base_url()?>static/pc/images/icon_douban.png"/>
                    </a>
                    <div class="text1">
                        <img src="<?=$this->config->base_url()?>static/pc/images/text1.png"/>
                    </div>
                </div>
            </div>
            <div class="bottom_left">
                <img src="<?=$this->config->base_url()?>static/pc/images/bottom_left.png"/>
                <div class="app"><img src="<?=$this->config->base_url()?>static/pc/images/app.png"/></div>
                <div class="weixin"><img src="<?=$this->config->base_url()?>static/pc/images/weixin.png"/></div>
            </div>
            <div class="bottom_right">
                <div class="start">
                    <a href="<?=$this->config->base_url()?>welcome/weibologin" title="开始"><img src="<?=$this->config->base_url()?>static/pc/images/start.png"/></a>
                </div>
                <div class="bottom_bot">
                    <img src="<?=$this->config->base_url()?>static/pc/images/bottom_mid.png"/>
                    <div class="sina">

                        <wb:follow-button uid="3353187630" type="red_3" >关注按钮</wb:follow-button>

                    </div>
                    <div class="linktext">
                        <a href="<?=$this->config->base_url()?>rank" class="phb" title="天团排行榜"><img src="<?=$this->config->base_url()?>static/pc/images/textphb.png"/></a><a href="<?=$this->config->base_url()?>wizard_food" class="txxdy" title="天巡星导游"><img src="<?=$this->config->base_url()?>static/pc/images/texttxdy.png"/></a><a href="#" class="hdgz" title="活动规则"><img src="<?=$this->config->base_url()?>static/pc/images/texthdgz.png"/></a>
                    </div>

                </div>
            </div>

            <div class="clear"></div>
        </div>

    </div>
</div>

</body>
</html>
