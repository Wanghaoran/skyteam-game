<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<html xmlns:wb="http://open.weibo.com/wb">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>创建天团－起飞吧，朋友-接力拼里程，共赢12万旅行天团红包</title>
    <link href="<?=$this->config->base_url()?>static/pc/css/style.css" rel="stylesheet" type="text/css" />

    <!-- weibo followbutton -->
    <script src="http://tjs.sjs.sinajs.cn/open/api/js/wb.js" type="text/javascript" charset="utf-8"></script>

    <script type="text/javascript" src="<?=$this->config->base_url()?>static/pc/js/jquery.js"></script>

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

    <style>
        .radioimg .hRadio_Checked {opacity:1;filter:alpha(opacity=100);}
        .radioimg .hRadio div.l1{ background:url(<?=$this->config->base_url()?>static/pc/img/img_gw1.png) center no-repeat;}
        .radioimg .hRadio div.l2{ background:url(<?=$this->config->base_url()?>static/pc/img/img_gw2.png) center no-repeat;}
        .radioimg .hRadio div.l3{ background:url(<?=$this->config->base_url()?>static/pc/img/img_gw3.png) center no-repeat;}
        .radioimg .hRadio div.l4{ background:url(<?=$this->config->base_url()?>static/pc/img/img_gw4.png) center no-repeat;}
        .radioimg .hRadio div.l5{ background:url(<?=$this->config->base_url()?>static/pc/img/img_gw5.png) center no-repeat;}
        .radioimg .hRadio div.l6{ background:url(<?=$this->config->base_url()?>static/pc/img/img_gw6.png) center no-repeat;}
        .radioimg .hRadio div.l7{ background:url(<?=$this->config->base_url()?>static/pc/img/img_gw7.png) center no-repeat;}
        .radioimg .hRadio div.l8{ background:url(<?=$this->config->base_url()?>static/pc/img/img_gw8.png) center no-repeat;}
        .radioimg .hRadio div.l9{ background:url(<?=$this->config->base_url()?>static/pc/img/img_gw9.png) center no-repeat;}
        .radioimg .hRadio div.l10{ background:url(<?=$this->config->base_url()?>static/pc/img/img_gw10.png) center no-repeat;}

        .radioimg .hRadio_Checked div.l1{ background:url(<?=$this->config->base_url()?>static/pc/img/img_gw11.png) center no-repeat;}
        .radioimg .hRadio_Checked div.l2{ background:url(<?=$this->config->base_url()?>static/pc/img/img_gw12.png) center no-repeat;}
        .radioimg .hRadio_Checked div.l3{ background:url(<?=$this->config->base_url()?>static/pc/img/img_gw13.png) center no-repeat;}
        .radioimg .hRadio_Checked div.l4{ background:url(<?=$this->config->base_url()?>static/pc/img/img_gw14.png) center no-repeat;}
        .radioimg .hRadio_Checked div.l5{ background:url(<?=$this->config->base_url()?>static/pc/img/img_gw15.png) center no-repeat;}
        .radioimg .hRadio_Checked div.l6{ background:url(<?=$this->config->base_url()?>static/pc/img/img_gw16.png) center no-repeat;}
        .radioimg .hRadio_Checked div.l7{ background:url(<?=$this->config->base_url()?>static/pc/img/img_gw17.png) center no-repeat;}
        .radioimg .hRadio_Checked div.l8{ background:url(<?=$this->config->base_url()?>static/pc/img/img_gw18.png) center no-repeat;}
        .radioimg .hRadio_Checked div.l9{ background:url(<?=$this->config->base_url()?>static/pc/img/img_gw19.png) center no-repeat;}
        .radioimg .hRadio_Checked div.l10{ background:url(<?=$this->config->base_url()?>static/pc/img/img_gw20.png) center no-repeat;}

        .radioimg .hRadio div.m1{ background:url(<?=$this->config->base_url()?>static/pc/img/img_ms1.png) center no-repeat;}
        .radioimg .hRadio div.m2{ background:url(<?=$this->config->base_url()?>static/pc/img/img_ms2.png) center no-repeat;}
        .radioimg .hRadio div.m3{ background:url(<?=$this->config->base_url()?>static/pc/img/img_ms3.png) center no-repeat;}
        .radioimg .hRadio div.m4{ background:url(<?=$this->config->base_url()?>static/pc/img/img_ms4.png) center no-repeat;}
        .radioimg .hRadio div.m5{ background:url(<?=$this->config->base_url()?>static/pc/img/img_ms5.png) center no-repeat;}
        .radioimg .hRadio div.m6{ background:url(<?=$this->config->base_url()?>static/pc/img/img_ms6.png) center no-repeat;}
        .radioimg .hRadio div.m7{ background:url(<?=$this->config->base_url()?>static/pc/img/img_ms7.png) center no-repeat;}
        .radioimg .hRadio div.m8{ background:url(<?=$this->config->base_url()?>static/pc/img/img_ms8.png) center no-repeat;}
        .radioimg .hRadio div.m9{ background:url(<?=$this->config->base_url()?>static/pc/img/img_ms9.png) center no-repeat;}
        .radioimg .hRadio div.m10{ background:url(<?=$this->config->base_url()?>static/pc/img/img_ms10.png) center no-repeat;}

        .radioimg .hRadio_Checked div.m1{ background:url(<?=$this->config->base_url()?>static/pc/img/img_ms11.png) center no-repeat;}
        .radioimg .hRadio_Checked div.m2{ background:url(<?=$this->config->base_url()?>static/pc/img/img_ms12.png) center no-repeat;}
        .radioimg .hRadio_Checked div.m3{ background:url(<?=$this->config->base_url()?>static/pc/img/img_ms13.png) center no-repeat;}
        .radioimg .hRadio_Checked div.m4{ background:url(<?=$this->config->base_url()?>static/pc/img/img_ms14.png) center no-repeat;}
        .radioimg .hRadio_Checked div.m5{ background:url(<?=$this->config->base_url()?>static/pc/img/img_ms15.png) center no-repeat;}
        .radioimg .hRadio_Checked div.m6{ background:url(<?=$this->config->base_url()?>static/pc/img/img_ms16.png) center no-repeat;}
        .radioimg .hRadio_Checked div.m7{ background:url(<?=$this->config->base_url()?>static/pc/img/img_ms17.png) center no-repeat;}
        .radioimg .hRadio_Checked div.m8{ background:url(<?=$this->config->base_url()?>static/pc/img/img_ms18.png) center no-repeat;}
        .radioimg .hRadio_Checked div.m9{ background:url(<?=$this->config->base_url()?>static/pc/img/img_ms19.png) center no-repeat;}
        .radioimg .hRadio_Checked div.m10{ background:url(<?=$this->config->base_url()?>static/pc/img/img_ms20.png) center no-repeat;}

        .radioimg .hRadio div.x1{ background:url(<?=$this->config->base_url()?>static/pc/img/img_xx1.png) center no-repeat;}
        .radioimg .hRadio div.x2{ background:url(<?=$this->config->base_url()?>static/pc/img/img_xx2.png) center no-repeat;}
        .radioimg .hRadio div.x3{ background:url(<?=$this->config->base_url()?>static/pc/img/img_xx3.png) center no-repeat;}
        .radioimg .hRadio div.x4{ background:url(<?=$this->config->base_url()?>static/pc/img/img_xx4.png) center no-repeat;}
        .radioimg .hRadio div.x5{ background:url(<?=$this->config->base_url()?>static/pc/img/img_xx5.png) center no-repeat;}
        .radioimg .hRadio div.x6{ background:url(<?=$this->config->base_url()?>static/pc/img/img_xx6.png) center no-repeat;}
        .radioimg .hRadio div.x7{ background:url(<?=$this->config->base_url()?>static/pc/img/img_xx7.png) center no-repeat;}
        .radioimg .hRadio div.x8{ background:url(<?=$this->config->base_url()?>static/pc/img/img_xx8.png) center no-repeat;}
        .radioimg .hRadio div.x9{ background:url(<?=$this->config->base_url()?>static/pc/img/img_xx9.png) center no-repeat;}
        .radioimg .hRadio div.x10{ background:url(<?=$this->config->base_url()?>static/pc/img/img_xx10.png) center no-repeat;}

        .radioimg .hRadio_Checked div.x1{ background:url(<?=$this->config->base_url()?>static/pc/img/img_xx11.png) center no-repeat;}
        .radioimg .hRadio_Checked div.x2{ background:url(<?=$this->config->base_url()?>static/pc/img/img_xx12.png) center no-repeat;}
        .radioimg .hRadio_Checked div.x3{ background:url(<?=$this->config->base_url()?>static/pc/img/img_xx13.png) center no-repeat;}
        .radioimg .hRadio_Checked div.x4{ background:url(<?=$this->config->base_url()?>static/pc/img/img_xx14.png) center no-repeat;}
        .radioimg .hRadio_Checked div.x5{ background:url(<?=$this->config->base_url()?>static/pc/img/img_xx15.png) center no-repeat;}
        .radioimg .hRadio_Checked div.x6{ background:url(<?=$this->config->base_url()?>static/pc/img/img_xx16.png) center no-repeat;}
        .radioimg .hRadio_Checked div.x7{ background:url(<?=$this->config->base_url()?>static/pc/img/img_xx17.png) center no-repeat;}
        .radioimg .hRadio_Checked div.x8{ background:url(<?=$this->config->base_url()?>static/pc/img/img_xx18.png) center no-repeat;}
        .radioimg .hRadio_Checked div.x9{ background:url(<?=$this->config->base_url()?>static/pc/img/img_xx19.png) center no-repeat;}
        .radioimg .hRadio_Checked div.x10{ background:url(<?=$this->config->base_url()?>static/pc/img/img_xx20.png) center no-repeat;}
    </style>
    <script type="text/javascript">


        var result = [];
        result['friend'] = [];



        //下一步
        function showNext(){

            if(!$('#team_name').val()){
                alert('团名不能为空！');
                $('#team_name').focus();
                return;
            }

            result['name'] = $('#team_name').val();

            if(!$('input[name="team_type"]:checked').val()){
                alert('天团类型不能为空！');
                $('#team_name').focus();
                return;
            }

            result['type'] = $('input[name="team_type"]:checked').val();


            $("#popDiv1").hide();
            $("#popDiv2").show();
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

                        //选择
                        if(!$(this).prev().is(':checked')){

                            if(result['friend'].length >= 3){
                                alert('最多邀请3位好友！');
                                return;
                            }else{
                                result['friend'].push($(this).children('.divtext').html());
                            }

                            $(this).addClass("checked");
                            $(this).prev()[0].checked = true;

                        }
                        else{

                            var friend_name = $(this).children('.divtext').html();
                            //取消选择
                            $.each(result['friend'], function (k, v) {

                                if(v == friend_name){
                                    result['friend'].splice(k, 1);
                                }

                            });


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


            $(".xinlang").click(function() {

                var w = window.open('', '分享到新浪微博', 'height=200, width=400, top=0, left=0, toolbar=no, menubar=no, scrollbars=yes, resizable=no,location=n o, status=no');

                $("#popDiv2").hide();
                $("#popDiv3").show();

                setTimeout(function(){

                    w.location = "http://v.t.sina.com.cn/share/share.php?url=http%3A%2F%2F182.92.64.207%2Fskyteam-game&title=起飞吧朋友－天巡接力拼里程&content=utf-8&source=&sourceUrl=&pic=";
                },2000);//1000是1秒

                setTimeout(function(){
                    location.href="<?=$this->config->base_url()?>rank";
                    $("#popDiv3").hide();
                    // $("#popDiv4").show(); share.sinaweibo();
                },3000);//1000是1秒


            });
        });


    </script>
</head>
<body>

<!--pop start-->
<div id="popDiv1" class="mydiv">
    <div class="popdiv1">
        <input type="text" class="inputclass3" id="team_name"/>
        <div id="radiolist2" class="radioimg2">
            <input name='team_type' type="radio" value='1' /><label><div>&nbsp;</div></label>
            <input name='team_type' type="radio" value='2' /><label><div>&nbsp;</div></label>
            <input name='team_type' type="radio" value='3' /><label><div>&nbsp;</div></label>
        </div>
        <div class="clear"></div>
        <div class="chk">

            <div class="chkbox" id="chklist">
                <ul>
                    <?php foreach($friend_result['users'] as $key => $value):?>
                        <li><input type="checkbox" value='<?=$value['name']?>' /><label><div class="divimg"><span>&nbsp;</span><img width="100" src="<?=$value['avatar_large']?>"/></div><div class="divtext"><?=$value['name']?></div></label></li>
                    <?php endforeach;?>
                </ul>
            </div>
        </div>
        <div class="clear20"></div>
        <div class="btn_next"><a href="javascript:showNext();"></a></div>
    </div>
</div>
<!--pop end-->
<!--pop 下一步 start-->
<div id="popDiv2" class="mydiv" style="display:none;">
    <div class="popdiv9">
        <div id="radiolist" class="radioimg">
            <input name='r' type="radio" value='1' /><label><div class="l1"></div></label>
            <input name='r' type="radio" value='2' /><label><div class="l2"></div></label>
            <input name='r' type="radio" value='3' /><label><div class="l3"></div></label>
            <input name='r' type="radio" value='4' /><label><div class="l4"></div></label>
            <input name='r' type="radio" value='5' /><label><div class="l5"></div></label>
            <input name='r' type="radio" value='6' /><label><div class="l6"></div></label>
            <input name='r' type="radio" value='7' /><label><div class="l7"></div></label>
            <input name='r' type="radio" value='8' /><label><div class="l8"></div></label>
            <input name='r' type="radio" value='9' /><label><div class="l9"></div></label>
            <input name='r' type="radio" value='10' /><label><div class="l10"></div></label>
        </div>
        <div class="clear20"></div>
        <div class="btn_zskt"><a  href="javascript:void(0);" class="xinlang"></a></div>
    </div>
</div>
<!--pop 下一步 end-->
<!--pop flash start-->
<div id="popDiv3" class="mydiv3" style="display:none;">
    <div class="popdiv3">
        <div class="div_iframe2">
            <object classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" codebase="http://download.macromedia.com/pub/shockwave/cabs/flash/
            swflash.cab#version=9,0,28,0" width="100%" height="100%">
                <param name="movie" value="plane.swf" />
                <param name="quality" value="high" />
                <param name="wmode" value="transparent" />
                <embed src="<?=$this->config->base_url()?>static/pc/plane.swf" quality="high" pluginspage="http://www.adobe.com/shockwave/download/download.cgi?P1_Prod_Version=ShockwaveFlash" type="application/x-shockwave-flash" width="100%" height="100%" wmode="Transparent"></embed>
            </object>
        </div>
    </div>
</div>
<!--pop flash end-->
<!--pop 分享 start-->
<div id="popDiv4" class="mydiv2" style="display:none;">
    <div class="popdiv2">
        <div class="div_iframe"><iframe width="100%" height="100%" class="share_self"  frameborder="0" scrolling="no" id="sinaweibo"></iframe></div>
        <!--<div class="fx_foot">
        	<a href="#" class="icon_dd"></a><a href="#" class="icon_rr"></a><a href="#" class="icon_qq"></a>
        </div>-->
    </div>
</div>
<!--pop 分享 end-->
<div class="contain">
    <div class="home">
        <div class="divbg"><img src="<?=$this->config->base_url()?>static/pc/images/nybox.jpg"/></div>
        <div class="ny_top"><img src="<?=$this->config->base_url()?>static/pc/images/ny_top.png"/><div class="right_logo"><a href="http://www.tianxun.cn" target="_blank"></a></div></div>
        <!--<div class="logo"><a href="#"><img src="images/logo.png"/></a></div>-->
        <div class="clear"></div>
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
                <div class="linktext">
                    <a href="<?=$this->config->base_url()?>" class="fanhui" title="返回首页"><img src="<?=$this->config->base_url()?>static/pc/images/fanhui.png"/></a>
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
                <div class="text1"><img src="<?=$this->config->base_url()?>static/pc/images/text1.png"/></div>
            </div>
            <div class="clear"></div>
        </div>

    </div>
</div>



</body>
</html>
