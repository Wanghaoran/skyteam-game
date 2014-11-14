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
            var text = encodeURIComponent('起飞吧朋友－天巡接力拼里程')
            url = "http://v.t.sina.com.cn/share/share.php?url=http%3A%2F%2F182.92.64.207%2Fskyteam-game&title=" + text + "&content=utf-8&source=&sourceUrl=&pic=";
            window.open (url, '分享到新浪微博', 'height=200, width=400, top=0, left=0, toolbar=no, menubar=no, scrollbars=yes, resizable=no,location=n o, status=no');
        }

        var shareQQ = function(){
            var text = encodeURIComponent('起飞吧朋友－天巡接力拼里程')
            url = "http://sns.qzone.qq.com/cgi-bin/qzshare/cgi_qzshare_onekey?url=http%3A%2F%2F182.92.64.207%2Fskyteam-game&title=" + text + "&pics=&summary=";
            window.open (url, '分享到QQ空间', 'height=200, width=400, top=0, left=0, toolbar=no, menubar=no, scrollbars=yes, resizable=no,location=n o, status=no');
        }

        var shareRenren = function(){
            var text = encodeURIComponent('起飞吧朋友－天巡接力拼里程')
            url = "http://share.renren.com/share/buttonshare.do?link=http%3A%2F%2F182.92.64.207%2Fskyteam-game&title=" + text + "";
            window.open (url, '分享到人人网', 'height=500, width=550, top=0, left=0, toolbar=no, menubar=no, scrollbars=yes, resizable=no,location=n o, status=no');
        }

        var shareDouban = function(){
            var text = encodeURIComponent('起飞吧朋友－天巡接力拼里程')
            url = "http://www.douban.com/recommend/?url=http%3A%2F%2F182.92.64.207%2Fskyteam-game&title=" + text + "";
            window.open (url, '分享到豆瓣', 'height=500, width=550, top=0, left=0, toolbar=no, menubar=no, scrollbars=yes, resizable=no,location=n o, status=no');

        }




    </script>

    <style>
        .radioimg .hRadio_Checked {opacity:1;filter:alpha(opacity=100);}
        .radioimg .hRadio div.l1{ background:url(<?=$this->config->base_url()?>static/place/1/1.png) center no-repeat;}
        .radioimg .hRadio div.l2{ background:url(<?=$this->config->base_url()?>static/place/1/2.png) center no-repeat;}
        .radioimg .hRadio div.l3{ background:url(<?=$this->config->base_url()?>static/place/1/3.png) center no-repeat;}
        .radioimg .hRadio div.l4{ background:url(<?=$this->config->base_url()?>static/place/1/4.png) center no-repeat;}
        .radioimg .hRadio div.l5{ background:url(<?=$this->config->base_url()?>static/place/1/5.png) center no-repeat;}
        .radioimg .hRadio div.l6{ background:url(<?=$this->config->base_url()?>static/place/1/6.png) center no-repeat;}
        .radioimg .hRadio div.l7{ background:url(<?=$this->config->base_url()?>static/place/1/7.png) center no-repeat;}
        .radioimg .hRadio div.l8{ background:url(<?=$this->config->base_url()?>static/place/1/8.png) center no-repeat;}
        .radioimg .hRadio div.l9{ background:url(<?=$this->config->base_url()?>static/place/1/9.png) center no-repeat;}
        .radioimg .hRadio div.l10{ background:url(<?=$this->config->base_url()?>static/place/1/10.png) center no-repeat;}

        .radioimg .hRadio_Checked div.l1{ background:url(<?=$this->config->base_url()?>static/place/1/1-1.png) center no-repeat;}
        .radioimg .hRadio_Checked div.l2{ background:url(<?=$this->config->base_url()?>static/place/1/2-1.png) center no-repeat;}
        .radioimg .hRadio_Checked div.l3{ background:url(<?=$this->config->base_url()?>static/place/1/3-1.png) center no-repeat;}
        .radioimg .hRadio_Checked div.l4{ background:url(<?=$this->config->base_url()?>static/place/1/4-1.png) center no-repeat;}
        .radioimg .hRadio_Checked div.l5{ background:url(<?=$this->config->base_url()?>static/place/1/5-1.png) center no-repeat;}
        .radioimg .hRadio_Checked div.l6{ background:url(<?=$this->config->base_url()?>static/place/1/6-1.png) center no-repeat;}
        .radioimg .hRadio_Checked div.l7{ background:url(<?=$this->config->base_url()?>static/place/1/7-1.png) center no-repeat;}
        .radioimg .hRadio_Checked div.l8{ background:url(<?=$this->config->base_url()?>static/place/1/8-1.png) center no-repeat;}
        .radioimg .hRadio_Checked div.l9{ background:url(<?=$this->config->base_url()?>static/place/1/9-1.png) center no-repeat;}
        .radioimg .hRadio_Checked div.l10{ background:url(<?=$this->config->base_url()?>static/place/1/10-1.png) center no-repeat;}

        .radioimg .hRadio div.m1{ background:url(<?=$this->config->base_url()?>static/place/2/1.png) center no-repeat;}
        .radioimg .hRadio div.m2{ background:url(<?=$this->config->base_url()?>static/place/2/2.png) center no-repeat;}
        .radioimg .hRadio div.m3{ background:url(<?=$this->config->base_url()?>static/place/2/3.png) center no-repeat;}
        .radioimg .hRadio div.m4{ background:url(<?=$this->config->base_url()?>static/place/2/4.png) center no-repeat;}
        .radioimg .hRadio div.m5{ background:url(<?=$this->config->base_url()?>static/place/2/5.png) center no-repeat;}
        .radioimg .hRadio div.m6{ background:url(<?=$this->config->base_url()?>static/place/2/6.png) center no-repeat;}
        .radioimg .hRadio div.m7{ background:url(<?=$this->config->base_url()?>static/place/2/7.png) center no-repeat;}
        .radioimg .hRadio div.m8{ background:url(<?=$this->config->base_url()?>static/place/2/8.png) center no-repeat;}
        .radioimg .hRadio div.m9{ background:url(<?=$this->config->base_url()?>static/place/2/9.png) center no-repeat;}
        .radioimg .hRadio div.m10{ background:url(<?=$this->config->base_url()?>static/place/2/10.png) center no-repeat;}

        .radioimg .hRadio_Checked div.m1{ background:url(<?=$this->config->base_url()?>static/place/2/1-1.png) center no-repeat;}
        .radioimg .hRadio_Checked div.m2{ background:url(<?=$this->config->base_url()?>static/place/2/2-1.png) center no-repeat;}
        .radioimg .hRadio_Checked div.m3{ background:url(<?=$this->config->base_url()?>static/place/2/3-1.png) center no-repeat;}
        .radioimg .hRadio_Checked div.m4{ background:url(<?=$this->config->base_url()?>static/place/2/4-1.png) center no-repeat;}
        .radioimg .hRadio_Checked div.m5{ background:url(<?=$this->config->base_url()?>static/place/2/5-1.png) center no-repeat;}
        .radioimg .hRadio_Checked div.m6{ background:url(<?=$this->config->base_url()?>static/place/2/6-1.png) center no-repeat;}
        .radioimg .hRadio_Checked div.m7{ background:url(<?=$this->config->base_url()?>static/place/2/7-1.png) center no-repeat;}
        .radioimg .hRadio_Checked div.m8{ background:url(<?=$this->config->base_url()?>static/place/2/8-1.png) center no-repeat;}
        .radioimg .hRadio_Checked div.m9{ background:url(<?=$this->config->base_url()?>static/place/2/9-1.png) center no-repeat;}
        .radioimg .hRadio_Checked div.m10{ background:url(<?=$this->config->base_url()?>static/place/2/10-1.png) center no-repeat;}

        .radioimg .hRadio div.x1{ background:url(<?=$this->config->base_url()?>static/place/3/1.png) center no-repeat;}
        .radioimg .hRadio div.x2{ background:url(<?=$this->config->base_url()?>static/place/3/2.png) center no-repeat;}
        .radioimg .hRadio div.x3{ background:url(<?=$this->config->base_url()?>static/place/3/3.png) center no-repeat;}
        .radioimg .hRadio div.x4{ background:url(<?=$this->config->base_url()?>static/place/3/4.png) center no-repeat;}
        .radioimg .hRadio div.x5{ background:url(<?=$this->config->base_url()?>static/place/3/5.png) center no-repeat;}
        .radioimg .hRadio div.x6{ background:url(<?=$this->config->base_url()?>static/place/3/6.png) center no-repeat;}
        .radioimg .hRadio div.x7{ background:url(<?=$this->config->base_url()?>static/place/3/7.png) center no-repeat;}
        .radioimg .hRadio div.x8{ background:url(<?=$this->config->base_url()?>static/place/3/8.png) center no-repeat;}
        .radioimg .hRadio div.x9{ background:url(<?=$this->config->base_url()?>static/place/3/9.png) center no-repeat;}
        .radioimg .hRadio div.x10{ background:url(<?=$this->config->base_url()?>static/place/3/10.png) center no-repeat;}

        .radioimg .hRadio_Checked div.x1{ background:url(<?=$this->config->base_url()?>static/place/3/1-1.png) center no-repeat;}
        .radioimg .hRadio_Checked div.x2{ background:url(<?=$this->config->base_url()?>static/place/3/2-1.png) center no-repeat;}
        .radioimg .hRadio_Checked div.x3{ background:url(<?=$this->config->base_url()?>static/place/3/3-1.png) center no-repeat;}
        .radioimg .hRadio_Checked div.x4{ background:url(<?=$this->config->base_url()?>static/place/3/4-1.png) center no-repeat;}
        .radioimg .hRadio_Checked div.x5{ background:url(<?=$this->config->base_url()?>static/place/3/5-1.png) center no-repeat;}
        .radioimg .hRadio_Checked div.x6{ background:url(<?=$this->config->base_url()?>static/place/3/6-1.png) center no-repeat;}
        .radioimg .hRadio_Checked div.x7{ background:url(<?=$this->config->base_url()?>static/place/3/7-1.png) center no-repeat;}
        .radioimg .hRadio_Checked div.x8{ background:url(<?=$this->config->base_url()?>static/place/3/8-1.png) center no-repeat;}
        .radioimg .hRadio_Checked div.x9{ background:url(<?=$this->config->base_url()?>static/place/3/9-1.png) center no-repeat;}
        .radioimg .hRadio_Checked div.x10{ background:url(<?=$this->config->base_url()?>static/place/3/10-1.png) center no-repeat;}

    </style>
    <script type="text/javascript">


        var result = [];
        result['friend'] = [];



        //下一步
        function showNext(){

            var detection = false;

            if(!$('#team_name').val()){
                alert('团名不能为空！');
                $('#team_name').focus();
                return;
            }

            if($('#team_name').val().match(/[^\a-\z\A-\Z0-9\u4E00-\u9FA5]/g)){
                alert('团名仅限中文、英文及数字！');
                $('#team_name').focus();
                return;
            }

            if($('#team_name').val().length > 10){
                alert('团名字数不能超过10！');
                $('#team_name').focus();
                return;
            }

            //验证重复性
            $.ajax({
                type : 'POST',
                url : '<?=$this -> config -> base_url()?>welcome/teamnamedetection',
                data : '&name=' + $('#team_name').val(),
                async : false,
                dataType : 'json',
                success : function(ress){
                    if(ress.result == 'have'){
                        alert('这个团名已经存在啦，试着换一个吧！');
                        $('#team_name').focus();
                        detection = true;
                        return;
                    }

                }
            });

            if(detection){
                return;
            }




            result['name'] = $('#team_name').val();

            if(!$('input[name="team_type"]:checked').val()){
                alert('喜好不能为空！');
                $('#team_name').focus();
                return;
            }

            result['type'] = $('input[name="team_type"]:checked').val();


            //下一步
            //根据不同团的类型，加载不同地点
            if(result['type'] == 1){
                $.each($('#radiolist').children('label'), function(x,y){
                    $(y).children().removeClass().addClass('l' + (x+1));
                });
            }

            if(result['type'] == 2){
                $.each($('#radiolist').children('label'), function(x,y){
                    $(y).children().removeClass().addClass('m' + (x+1));
                });
            }

            if(result['type'] == 3){
                $.each($('#radiolist').children('label'), function(x,y){
                    $(y).children().removeClass().addClass('x' + (x+1));
                });
            }

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

                    result['place_id'] = $(this).attr('place_id');

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



                if(!result['place_id']){
                    alert('请您先选择目的地！');
                    return;
                }

                var w = window.open('', '分享到新浪微博', 'height=200, width=400, top=0, left=0, toolbar=no, menubar=no, scrollbars=yes, resizable=no,location=n o, status=no');

                //创建团
                $.ajax({
                    type : 'POST',
                    url : '<?=$this -> config -> base_url()?>welcome/bindteam',
                    data : '&name=' + result['name'] + '&place_id=' + result['place_id'] + '&type=' + result['type'],
                    async : false,
                    dataType : 'json',
                    success : function(ress){
                        if(ress['state'] != 'success'){
                            alert(ress.info);
                            return;
                        }else{

                            var tid = ress.tid;
                        }


                        $("#popDiv2").hide();
                        $("#popDiv3").show();


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



                            var text_weibo = '约吗？我已经组团参加了@Skyscanner天巡 #起飞吧朋友# 抢12万元旅行红包活动！是朋友就快来加入贡献里程给我！去度假、去逛吃、去扫货，一起赢！整！团！机！票！臭宝贝们证明友情的时候到了！跟别的团死磕去→猛戳参与活动http://skyteam.tianxun.cn/game_other?tid=' + tid + '得分第一名就一起飞！';
                            $.each(result['friend'], function(x,y){
                                text_weibo += '@' + y;
                            });

                            w.location = "http://v.t.sina.com.cn/share/share.php?url=http%3A%2F%2skyteam.tianxun.cn&title=" + text_weibo + "&content=utf-8&source=&sourceUrl=&pic=" + pic;


                        setTimeout(function(){
                            location.href="<?=$this->config->base_url()?>rank";
                            $("#popDiv3").hide();
                        },3000);


                    }
                });



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
                        <li><input type="checkbox" value='<?=$value['name']?>' /><label><div class="divimg"><span>&nbsp;</span><img width="63" src="<?=$value['avatar_large']?>"/></div><div class="divtext"><?=$value['name']?></div></label></li>
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
            <input name='r' type="radio" value='1' /><label place_id="1"><div class="l1"></div></label>
            <input name='r' type="radio" value='2' /><label place_id="2"><div class="l2"></div></label>
            <input name='r' type="radio" value='3' /><label place_id="3"><div class="l3"></div></label>
            <input name='r' type="radio" value='4' /><label place_id="4"><div class="l4"></div></label>
            <input name='r' type="radio" value='5' /><label place_id="5"><div class="l5"></div></label>
            <input name='r' type="radio" value='6' /><label place_id="6"><div class="l6"></div></label>
            <input name='r' type="radio" value='7' /><label place_id="7"><div class="l7"></div></label>
            <input name='r' type="radio" value='8' /><label place_id="8"><div class="l8"></div></label>
            <input name='r' type="radio" value='9' /><label place_id="9"><div class="l9"></div></label>
            <input name='r' type="radio" value='10' /><label place_id="10"><div class="l10"></div></label>
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
