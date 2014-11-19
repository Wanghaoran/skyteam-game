<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>天团排行榜－起飞吧朋友-接力拼里程，共赢12万旅行天团红包</title>
    <link href="<?=$this->config->base_url()?>static/pc/css/style.css" rel="stylesheet" type="text/css" />
    <script type="text/javascript" src="<?=$this->config->base_url()?>static/pc/js/jquery.js"></script>




    <script>
        var shareWeibo = function(tid){

            _gaq.push(['_trackEvent', 'TeamRank', 'ButtonClick', 'ShareWeiboTeamA']);
            _smq.push(['custom','Share','ButtonClick']);
            _smq.push(['custom','Invite','ButtonClick']);

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

            var url2 = '';
            var b_url = encodeURIComponent('http://skyteam.tianxun.cn/game_other?tid=' + tid + '&associateid=SOC_WBO_00349_00001&utm_source=weibo&utm_medium=social&utm_campaign=cn-flights-skyteam&utm_content=share+game');

            //获取url
            $.ajax({
                type : 'POST',
                url : '<?=$this -> config -> base_url()?>welcome/shorten',
                data : '&url=' + b_url,
                async : false,
                success : function(ress){
                    url2 = ress;
                }
            });

            var text = encodeURIComponent('约吗？我组团参加了@Skyscanner天巡＃起飞吧朋友＃抢12万元旅行红包活动！是朋友就快来加入贡献里程给我！去度假、去逛吃、去扫货，一起赢！整！团！机！票！臭宝贝们证明友情的时候到了！跟别的团死磕去→猛戳参与活动' + url2 + '中了就一起飞！')
            var url = "http://v.t.sina.com.cn/share/share.php?url=&title=" + text + "&content=utf-8&appkey=198618609&source=&sourceUrl=&pic=" + pic;
            window.open (url, '分享到新浪微博', 'height=200, width=400, top=0, left=0, toolbar=no, menubar=no, scrollbars=yes, resizable=no,location=n o, status=no');
        }

        var shareQQ = function(tid){

            _gaq.push(['_trackEvent', 'TeamRank', 'ButtonClick', 'ShareQQTeamA']);
            _smq.push(['custom','Share','ButtonClick']);
            _smq.push(['custom','Invite','ButtonClick']);

            var urls = encodeURIComponent('http://skyteam.tianxun.cn/game_other?tid=' + tid + '&associateid=&utm_source=other&utm_medium=social&utm_campaign=cn-flights-skyteam&utm_content=share+game');
            var url2 = '';
            //获取url
            $.ajax({
                type : 'POST',
                url : '<?=$this -> config -> base_url()?>welcome/shorten',
                data : '&url=' + urls,
                async : false,
                success : function(ress){
                    url2 = ress;
                }
            });

            var text = encodeURIComponent('约吗？我组团参加了@Skyscanner天巡＃起飞吧朋友＃抢12万元旅行红包活动！是朋友就快来加入贡献里程给我！去度假、去逛吃、去扫货，一起赢！整！团！机！票！臭宝贝们证明友情的时候到了！跟别的团死磕去→猛戳参与活动' + url2 + '中了就一起飞！')

            var pic = encodeURIComponent('http://cnhtk.qiniudn.com/base_posters.jpg');


            var url = 'http://sns.qzone.qq.com/cgi-bin/qzshare/cgi_qzshare_onekey?url=' + url2 + '&title=' + text + '&pics=' + pic + '&summary=';
            window.open (url, '分享到QQ空间', 'height=200, width=400, top=0, left=0, toolbar=no, menubar=no, scrollbars=yes, resizable=no,location=n o, status=no');
        }

        var shareRenren = function(tid){

            _gaq.push(['_trackEvent', 'TeamRank', 'ButtonClick', 'ShareRenrenTeamA']);
            _smq.push(['custom','Share','ButtonClick']);
            _smq.push(['custom','Invite','ButtonClick']);

            var urls = encodeURIComponent('http://skyteam.tianxun.cn/game_other?tid=' + tid + '&associateid=&utm_source=other&utm_medium=social&utm_campaign=cn-flights-skyteam&utm_content=share+game');
            var urls = encodeURIComponent('http://skyteam.tianxun.cn/game_other?tid=' + tid + '&associateid=&utm_source=other&utm_medium=social&utm_campaign=cn-flights-skyteam&utm_content=share+game');
            var url2 = '';
            //获取url
            $.ajax({
                type : 'POST',
                url : '<?=$this -> config -> base_url()?>welcome/shorten',
                data : '&url=' + urls,
                async : false,
                success : function(ress){
                    url2 = ress;
                }
            });

            var text = encodeURIComponent('约吗？我组团参加了@Skyscanner天巡＃起飞吧朋友＃抢12万元旅行红包活动！是朋友就快来加入贡献里程给我！去度假、去逛吃、去扫货，一起赢！整！团！机！票！臭宝贝们证明友情的时候到了！跟别的团死磕去→猛戳参与活动' + url2 + '中了就一起飞！')


            var pic = encodeURIComponent('http://cnhtk.qiniudn.com/base_posters.jpg');

            var url = "http://share.renren.com/share/buttonshare.do?link=" + url2 + "&title=" + text + "&pic=" + pic;
            window.open (url, '分享到人人网', 'height=500, width=550, top=0, left=0, toolbar=no, menubar=no, scrollbars=yes, resizable=no,location=n o, status=no');

        }

        var shareDouban = function(tid){

            _gaq.push(['_trackEvent', 'TeamRank', 'ButtonClick', 'ShareDoubanTeamA']);
            _smq.push(['custom','Share','ButtonClick']);
            _smq.push(['custom','Invite','ButtonClick']);

            var urls = encodeURIComponent('http://skyteam.tianxun.cn/game_other?tid=' + tid + '&associateid=&utm_source=other&utm_medium=social&utm_campaign=cn-flights-skyteam&utm_content=share+game');
            var url2 = '';
            //获取url
            $.ajax({
                type : 'POST',
                url : '<?=$this -> config -> base_url()?>welcome/shorten',
                data : '&url=' + urls,
                async : false,
                success : function(ress){
                    url2 = ress;
                }
            });

            var text = encodeURIComponent('约吗？我组团参加了@Skyscanner天巡＃起飞吧朋友＃抢12万元旅行红包活动！是朋友就快来加入贡献里程给我！去度假、去逛吃、去扫货，一起赢！整！团！机！票！臭宝贝们证明友情的时候到了！跟别的团死磕去→猛戳参与活动' + url2 + '中了就一起飞！')

            var url = "http://www.douban.com/recommend/?url=" + url2 + "&title=" + text + "";
            window.open (url, '分享到豆瓣', 'height=500, width=550, top=0, left=0, toolbar=no, menubar=no, scrollbars=yes, resizable=no,location=n o, status=no');

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
<div class="ny_head">
    <div class="ny_nav">
        <ul>
            <li class="li1"><a onclick="_gaq.push(['_trackEvent', 'Header', 'LinkClick', 'GoToCampaignHomepage']);_smq.push(['custom','GoToCampaignHomepage','LinkClick']);" href="<?=$this->config->base_url()?>"></a></li>
            <li class="li2"><a onclick="_gaq.push(['_trackEvent', 'Header', 'LinkClick', 'GoToCampaignRules']);_smq.push(['custom','GoToCampaignRules','LinkClick']);" href="<?=$this->config->base_url()?>rules"></a></li>
            <li class="li3"><a onclick="_gaq.push(['_trackEvent', 'Header', 'LinkClick', 'GoToTeamRank']);_smq.push(['custom','GoToTeamRank','LinkClick']);" class="cur" href="#"></a></li>
            <li class="li4"><a onclick="_gaq.push(['_trackEvent', 'Header', 'LinkClick', 'GoToKOL']);_smq.push(['custom','GoToKOL','LinkClick']);" href="<?=$this->config->base_url()?>wizard_food"></a></li>
        </ul>
    </div>
    <a onclick="_gaq.push(['_trackEvent', 'Header', 'LinkClick', 'GoToCampaignHomepage']);_smq.push(['custom','GoToCampaignHomepage','LinkClick']);" href="http://www.tianxun.cn" target="_blank"><div class="ny_logo"></div></a>
</div>
<div class="clear"></div>
<div class="ny_content">
        <div class="ny_conleft">

    <?php if($user_result['uweiboid'] == $user_result['tweiboid']):?>

        <div class="ny_leftinfo">
    <?php else:?>
        <div class="ny_leftinfo" style='background:url("<?=$this->config->base_url()?>static/pc/images/ny_leftinfo2.png") no-repeat scroll center top rgba(0, 0, 0, 0);'>
    <?php endif; ?>


            <div class="ny_admintitle">

        <?php if($user_result['uweiboid'] == $user_result['tweiboid']):?>
                <a onclick="_gaq.push(['_trackEvent', 'TeamRank', 'ButtonClick', 'DeleteTeam']);_smq.push(['custom','DeleteTeam','ButtonClick']);" href="javascript:deleteteam();" title="删除本团"></a>
        <?php endif; ?>
            <a onclick="_gaq.push(['_trackEvent', 'TeamRank', 'ButtonClick', 'LogOut']);_smq.push(['custom','LogOut','ButtonClick']);" href="<?=$this->config->base_url()?>welcome/logout" style="margin-right: 7px;" title="退出登录"></a>
        </div>


        <div class="ny_admininfo">
            <a href="#"><img src="<?=$user_result['avatar_large']?>"/></a>
            <h2><?=$user_result['uname']?></h2>
        </div>
        <div class="clear"></div>
        <ul class="ulinfo">
            <li><?=$user_result['tname']?></li>
            <li><?php if($user_result['ttype'] == 1):?>美食<?php elseif($user_result['ttype'] == 2):?>购物<?php elseif($user_result['ttype'] == 3):?>休闲<?php endif; ?>团</li>
            <li>
                <?php if($user_result['utype'] == 1):?>
                    团长
                <?php else:?>
                    团员
                <?php endif; ?>

            </li>
            <li><?=$user_result['unum']?> 里程</li>
            <li>已积攒 <?=$user_result['tnum']?> 里程
                <?php if($cha_km == 0):?>
                    您已经是<?php if($user_result['ttype'] == 1):?>美食<?php elseif($user_result['ttype'] == 2):?>购物<?php elseif($user_result['ttype'] == 3):?>休闲<?php endif; ?>团的第一名啦！
                <?php else:?>
                    距离<?php if($user_result['ttype'] == 1):?>美食<?php elseif($user_result['ttype'] == 2):?>购物<?php elseif($user_result['ttype'] == 3):?>休闲<?php endif; ?>团排名第一还差 <?=$cha_km?> 里程
                <?php endif;?>
            </li>
        </ul>
    </div>
    <div class="clear"></div>
    <div class="ny_leftbtn">
        <a onclick="_gaq.push(['_trackEvent', 'TeamRank', 'ButtonClick', 'GoToGameGoOn']);_smq.push(['custom','GoTo','ButtonClick']);" href="<?=$this->config->base_url()?>welcome/game_goon" target="_blank" class="btn_go"></a>
        <a href="javascript:shareWeibo(<?=$user_result['tid']?>);" class="btn_comeon"></a>
        <div class="clear"></div>
        <div class="ny_lefticon">
            <a href="javascript:shareQQ(<?=$user_result['tid']?>);" class="icon_qq"></a>
            <a href="javascript:shareRenren(<?=$user_result['tid']?>);" class="icon_rr"></a>
            <a href="javascript:shareDouban(<?=$user_result['tid']?>);" class="icon_dd"></a>
        </div>
        <div class="clear20"></div>
    </div>
    <div class="clear"></div>
    <div class="ny_leftqt">

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
    <div class="clear20"></div>
</div>
<div class="ny_conright">
    <div class="tab_phb">
        <div class="tab_phbtitle">
            <ul>
                <li class="li1"></li>

                <?php if($type == 1):?>
                    <!-- 美食团 -->
                    <li class="li2"><a href="<?=$this->config->base_url()?>rank?type=1" class="now"></a></li>
                    <!-- 购物团 -->
                    <li class="li3"><a href="<?=$this->config->base_url()?>rank?type=2"></a></li>
                    <!-- 休闲团 -->
                    <li class="li4"><a href="<?=$this->config->base_url()?>rank?type=3"></a></li>
                <?php elseif($type == 2):?>
                    <!-- 美食团 -->
                    <li class="li2"><a href="<?=$this->config->base_url()?>rank?type=1"></a></li>
                    <!-- 购物团 -->
                    <li class="li3"><a href="<?=$this->config->base_url()?>rank?type=2" class="now"></a></li>
                    <!-- 休闲团 -->
                    <li class="li4"><a href="<?=$this->config->base_url()?>rank?type=3"></a></li>

                <?php elseif($type == 3):?>

                    <!-- 美食团 -->
                    <li class="li2"><a href="<?=$this->config->base_url()?>rank?type=1"></a></li>
                    <!-- 购物团 -->
                    <li class="li3"><a href="<?=$this->config->base_url()?>rank?type=2"></a></li>
                    <!-- 休闲团 -->
                    <li class="li4"><a href="<?=$this->config->base_url()?>rank?type=3" class="now"></a></li>
                <?php endif; ?>

            </ul>
            <div style="color:red;float:right;font-size:20px;margin-top:25px;margin-right:10px;">目前已有 <?=$total_user?> 人参与本活动</div>
        </div>
        <div class="clear20"></div>
        <div class="tab_phbcon">
            <?php foreach($rank as $key => $value):?>
                <!--start-->
                <div class="tab_phblist">
                    <div class="tab_phblist_title"><span><?=($key+1+$per_page)?></span><?=$value['name']?></div>
                    <div class="tab_phblist_con">
                        <div class="tab_phblist_left">
                            <div class="tab_phbadmin">
                                <a href="http://weibo.com/<?=$value['leader'][0]['profile_url']?>">
                                    <img src="<?=$value['leader'][0]['avatar_large']?>"/>
                                    <div><?=$value['leader'][0]['name']?></div>
                                </a>
                                <a onClick="_gaq.push(['_trackEvent', 'TeamRank', 'ButtonClick', 'FollowTeamA']);_smq.push(['custom','Follow','ButtonClick']);" href="http://weibo.com/<?=$value['leader'][0]['profile_url']?>" target="_blank" class="guanzhu"></a>
                            </div>
                            <div class="tab_phbinfo">
                                <table>
                                    <tr>
                                        <td width="100">目的地</td>
                                        <td width="130">类别</td></td>
                                        <td width="130">里程数</td>
                                        <td width="150">天团成员</td>
                                    </tr>
                                    <tr>
                                        <td width="100"><?=$value['place']?></td>
                                        <?php if($value['type'] == 1):?>
                                        <td width="130">美食</td></td>
                                        <?php elseif($value['type'] == 2):?>
                                        <td width="130">购物</td></td>
                                        <?php elseif($value['type'] == 3):?>
                                        <td width="130">休闲</td></td>
                                        <?php endif; ?>
                                        <td width="130"><?=$value['num']?> 里程
                                        </td>
                                        <td width="150"><?=$value['nums']?> 人</td>
                                    </tr>
                                </table>
                                <div class="cy">
                                    <ul>

                                    <?php foreach($value['number'] as $key2 => $value2):?>
                                        <li><a href="http://weibo.com/<?=$value2['profile_url']?>" target="_blank"><img src="<?=$value2['avatar_large']?>"/><div><?=$value2['name']?></div></a></li>
                                    <?php endforeach;?>
                                    </ul>

                                    <div class="clear20"></div>
                                </div>
                            </div>
                        </div>
                        <div class="tab_phblist_right">
                            <?php if($value['id'] == $user_result['tid']):?>
                                <a onclick="_gaq.push(['_trackEvent', 'TeamRank', 'ButtonClick', 'GoToGameGoOn']);_smq.push(['custom','GoTo','ButtonClick']);" href="<?=$this->config->base_url()?>welcome/game_goon" target="_blank" class="btn_jiayou2"></a>
                            <?php else: ?>
                                <a onclick="_gaq.push(['_trackEvent', 'TeamRank', 'ButtonClick', 'LikeTeamA']);_smq.push(['custom','Like','ButtonClick']);" href="<?=$this->config->base_url()?>game_other?tid=<?=$value['id']?>" target="_blank" class="btn_jiayou"></a>
                            <?php endif; ?>
                            <a href="javascript:shareWeibo(<?=$value['id']?>);" class="btn_fenxiang"></a>
                            <a href="javascript:shareQQ(<?=$value['id']?>);" class="icon_qq"></a>
                            <a href="javascript:shareRenren(<?=$value['id']?>);" class="icon_rr"></a>
                            <a href="javascript:shareDouban(<?=$value['id']?>);" class="icon_dd"></a>
                        </div>
                    </div>
                </div>
                <div class="clear20"></div>
                <!--end-->

            <?php endforeach;?>

        </div>

        <!--分页  start-->
        <div class="page" style="width: 300px;">
            <?=$page;?>
        </div>
        <!--分页  end-->
        <div class="clear"></div>

    </div>

</div>

</div>
<div class="clear"></div>
<div class="ny_footer">
    <div class="icon_logo"><a href="#" title="logo"></a></div>
    <div class="text_corpright"></div>
</div>
</body>
</html>
