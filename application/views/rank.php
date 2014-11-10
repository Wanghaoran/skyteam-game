<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>天团排行榜－起飞吧，朋友-接力拼里程，共赢12万旅行天团红包</title>
    <link href="<?=$this->config->base_url()?>static/pc/css/style.css" rel="stylesheet" type="text/css" />

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
<div class="ny_head">
    <div class="ny_nav">
        <ul>
            <li class="li1"><a href="<?=$this->config->base_url()?>"></a></li>
            <li class="li2"><a href="#"></a></li>
            <li class="li3"><a class="cur" href="#"></a></li>
            <li class="li4"><a href="<?=$this->config->base_url()?>wizard_food"></a></li>
        </ul>
    </div>
    <a href="http://www.tianxun.cn" target="_blank"><div class="ny_logo"></div></a>
</div>
<div class="clear"></div>
<div class="ny_content">
<div class="ny_conleft">
    <div class="ny_leftinfo">
        <div class="ny_admininfo">
            <a href="#"><img src="<?=$user_result['avatar_large']?>"/></a>
            <h2><?=$user_result['uname']?></h2>
        </div>
        <div class="clear"></div>
        <ul class="ulinfo">
            <li><?=$user_result['tname']?></li>
            <li>团长</li>
            <li><?=$user_result['unum']?> 里程</li>
            <li>已积攒 <?=$user_result['tnum']?> 里程</li>
        </ul>
    </div>
    <div class="clear"></div>
    <div class="ny_leftbtn">
        <a href="#" class="btn_go"></a>
        <a href="#" class="btn_comeon"></a>
        <div class="clear"></div>
        <div class="ny_lefticon">
            <a href="#" class="icon_qq"></a>
            <a href="#" class="icon_rr"></a>
            <a href="#" class="icon_dd"></a>
        </div>
        <div class="clear20"></div>
    </div>
    <div class="clear"></div>
    <div class="ny_leftqt">
        <ul>
            <li>
                <a href="#">
                    <img src="<?=$this->config->base_url()?>static/pc/images/img_qt1.png"/>
                    <div>耗这口</div>
                </a>
            </li>
            <li>
                <a href="#">
                    <img src="<?=$this->config->base_url()?>static/pc/images/img_qt2.png"/>
                    <div>护城河的水流</div>
                </a>
            </li>
            <li>
                <a href="#">
                    <img src="<?=$this->config->base_url()?>static/pc/images/img_qt3.png"/>
                    <div>一只蘑菇</div>
                </a>
            </li>
            <li>
                <a href="#">
                    <img src="<?=$this->config->base_url()?>static/pc/images/img_qt4.png"/>
                    <div>爱闲逛</div>
                </a>
            </li>
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
                <li class="li2"><a href="#"></a></li>
                <li class="li3"><a href="#" class="now"></a></li>
                <li class="li4"><a href="#"></a></li>
            </ul>
        </div>
        <div class="clear20"></div>
        <div class="tab_phbcon">
            <!--start-->
            <div class="tab_phblist">
                <div class="tab_phblist_title"><span>1</span>美丽随行团</div>
                <div class="tab_phblist_con">
                    <div class="tab_phblist_left">
                        <div class="tab_phbadmin">
                            <a href="#">
                                <img src="<?=$this->config->base_url()?>static/pc/images/img_info1.jpg"/>
                                <div>爱旅游</div>
                            </a>
                            <a href="#" class="guanzhu"></a>
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
                                    <td width="100">巴黎</td>
                                    <td width="130">购物</td></td>
                                    <td width="130">9000里程</td>
                                    <td width="150">4人</td>
                                </tr>
                            </table>
                            <div class="cy">
                                <ul>
                                    <li><a href="#"><img src="<?=$this->config->base_url()?>static/pc/images/img_cy1.png"/><div>痞人日记</div></a></li>
                                    <li><a href="#"><img src="<?=$this->config->base_url()?>static/pc/images/img_cy2.png"/><div>AYU</div></a></li>
                                    <li><a href="#"><img src="<?=$this->config->base_url()?>static/pc/images/img_cy3.png"/><div>芬芳小猪</div></a></li>
                                </ul>
                                <div class="clear20"></div>
                            </div>
                        </div>
                    </div>
                    <div class="tab_phblist_right">
                        <a href="#" class="btn_jiayou"></a>
                        <a href="#" class="btn_fenxiang"></a>
                        <a href="javascript:shareQQ();" class="icon_qq"></a>
                        <a href="javascript:shareRenren();" class="icon_rr"></a>
                        <a href="javascript:shareDouban();" class="icon_dd"></a>
                    </div>
                </div>
            </div>
            <div class="clear20"></div>
            <!--end-->
            <!--start-->
            <div class="tab_phblist">
                <div class="tab_phblist_title"><span>2</span>美丽随行团</div>
                <div class="tab_phblist_con">
                    <div class="tab_phblist_left">
                        <div class="tab_phbadmin">
                            <a href="#">
                                <img src="<?=$this->config->base_url()?>static/pc/images/img_info1.jpg"/>
                                <div>爱旅游</div>
                            </a>
                            <a href="#" class="guanzhu"></a>
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
                                    <td width="100">巴黎</td>
                                    <td width="130">购物</td></td>
                                    <td width="130">9000里程</td>
                                    <td width="150">4人</td>
                                </tr>
                            </table>
                            <div class="cy">
                                <ul>
                                    <li><a href="#"><img src="<?=$this->config->base_url()?>static/pc/images/img_cy1.png"/><div>痞人日记</div></a></li>
                                    <li><a href="#"><img src="<?=$this->config->base_url()?>static/pc/images/img_cy2.png"/><div>AYU</div></a></li>
                                    <li><a href="#"><img src="<?=$this->config->base_url()?>static/pc/images/img_cy3.png"/><div>芬芳小猪</div></a></li>
                                </ul>
                                <div class="clear20"></div>
                            </div>
                        </div>
                    </div>
                    <div class="tab_phblist_right">
                        <a href="#" class="btn_jiayou"></a>
                        <a href="#" class="btn_fenxiang"></a>
                        <a href="javascript:shareQQ();" class="icon_qq"></a>
                        <a href="javascript:shareRenren();" class="icon_rr"></a>
                        <a href="javascript:shareDouban();" class="icon_dd"></a>
                    </div>
                </div>
            </div>
            <div class="clear20"></div>
            <!--end-->
            <!--start-->
            <div class="tab_phblist">
                <div class="tab_phblist_title"><span>3</span>美丽随行团</div>
                <div class="tab_phblist_con">
                    <div class="tab_phblist_left">
                        <div class="tab_phbadmin">
                            <a href="#">
                                <img src="<?=$this->config->base_url()?>static/pc/images/img_info1.jpg"/>
                                <div>爱旅游</div>
                            </a>
                            <a href="#" class="guanzhu"></a>
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
                                    <td width="100">巴黎</td>
                                    <td width="130">购物</td></td>
                                    <td width="130">9000里程</td>
                                    <td width="150">4人</td>
                                </tr>
                            </table>
                            <div class="cy">
                                <ul>
                                    <li><a href="#"><img src="<?=$this->config->base_url()?>static/pc/images/img_cy1.png"/><div>痞人日记</div></a></li>
                                    <li><a href="#"><img src="<?=$this->config->base_url()?>static/pc/images/img_cy2.png"/><div>AYU</div></a></li>
                                    <li><a href="#"><img src="<?=$this->config->base_url()?>static/pc/images/img_cy3.png"/><div>芬芳小猪</div></a></li>
                                </ul>
                                <div class="clear20"></div>
                            </div>
                        </div>
                    </div>
                    <div class="tab_phblist_right">
                        <a href="#" class="btn_jiayou"></a>
                        <a href="#" class="btn_fenxiang"></a>
                        <a href="javascript:shareQQ();" class="icon_qq"></a>
                        <a href="javascript:shareRenren();" class="icon_rr"></a>
                        <a href="javascript:shareDouban();" class="icon_dd"></a>
                    </div>
                </div>
            </div>
            <div class="clear20"></div>
            <!--end-->
        </div>
    </div>
</div>
</div>
<div class="clear"></div>
<div class="ny_footer"></div>
</body>
</html>
