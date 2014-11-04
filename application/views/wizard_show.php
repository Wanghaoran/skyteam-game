<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>天巡</title>
    <link href="<?=$this->config->base_url()?>static/pc/css/style.css" rel="stylesheet" type="text/css" />
</head>
<body>
<div class="ny_head">
    <div class="ny_nav">
        <ul>
            <li class="li1"><a href="<?=$this->config->base_url()?>"></a></li>
            <li class="li2"><a href="#"></a></li>
            <li class="li3"><a href="<?=$this->config->base_url()?>welcome/rank"></a></li>
            <li class="li4"><a class="cur" href="#"></a></li>
        </ul>
    </div>
    <div class="ny_logo"></div>
</div>
<div class="clear"></div>
<div class="ny_content2">
    <div class="tab_kol">
        <div class="tab_koltitle">
            <ul>
                <li><a href="<?=$this->config->base_url()?>welcome/wizard_food"><img src="<?=$this->config->base_url()?>static/pc/images/tab_text1.png"/></a></li>
                <li><a href="<?=$this->config->base_url()?>welcome/wizard_buy"><img src="<?=$this->config->base_url()?>static/pc/images/tab_text2.png"/></a></li>
                <li class="on"><a href="<?=$this->config->base_url()?>welcome/wizard_show"><img src="<?=$this->config->base_url()?>static/pc/images/tab_text3.png"/></a></li>
            </ul>
            <div class="clear"></div>
        </div>
        <div class="clear20"></div>
        <div class="tab_kolcon">
            <div class="tab_kol_left">
                <div>
                    <img src="<?=$this->config->base_url()?>static/pc/images/img_kol1.jpg"/>
                    <p><a href="#" class="btn_gz"></a></p>
                </div>
                <div>
                    <h2>顾爷</h2>
                    <h3>平面设计师，漫画家顾孟劼	</h3>
                </div>
            </div>
            <div class="tab_kol_right">
                <h2>自己选择城市，看看什么时间的机票适合你,天巡为您呈现整月含税价格走势，寻找最划算机票，一目了然。</h2>
                <div class="tab_kol_time">
                    <div class="time_left">
                        <h3>从</h3>
                        <div><input type="text" class="inputclass1" /></div>
                        <h4><div><input type="radio" name="qc" checked="checked" />往返<input type="radio" name="qc"/>单程</div>起程</h4>
                        <div>
                            <input class="jcDate" style="margin:0 15px 0 0"/><input class="jcDate"/>
                        </div>

                    </div>
                    <div class="time_mid"></div>
                    <div class="time_right">
                        <h3>到</h3>
                        <div><input type="text" class="inputclass2" /></div>
                        <div class="divcheck"><input type="checkbox" />首选直达</div>
                        <a href="#" class="btn_search"></a>
                    </div>
                    <div class="clear10"></div>
                </div>
            </div>
            <div class="clear20"></div>
            <div class="jianjie">
                美食类星导游简介，比如xxx尝遍世界美食，跟随ta的分享，进入一次美味绝伦的品味之旅。
            </div>
            <div class="clear20"></div>
            <div class="imglist">
                <!--话题列表 开始-->
                <div class="photo_lcon">
                    <dl>
                        <dt>
                            <a href="#"><img src="<?=$this->config->base_url()?>static/pc/place/21.jpg" /></a>
                        <div class="left_title">意大利 威尼斯</div>
                        </dt>
                        <dd>
                            <h2>意大利 威尼斯</h2>
                            <P>乘坐美丽的贡多拉，穿行在大运河，岸上的建筑慢悠悠向身后退去，一切都仿佛只有在梦里才能实现，也可以无所事事地在大桥小桥之间穿梭、游走，听听教堂的钟声，喂喂广场的鸽子，每一分钟就多一分不舍</P>
                        </dd>
                    </dl>
                    <dl class="dl_margin">
                        <dt>
                            <a href="#"><img src="<?=$this->config->base_url()?>static/pc/place/22.jpg" /></a>
                        <div class="left_title">马尔代夫</div>
                        </dt>
                        <dd>
                            <h2>马尔代夫：在这里忘记时间</h2>
                            <P>毋庸置疑，Maldives－海岛度假首选。不管那个“总有一天会消失”的说法是真是假，都绝对值得去一次！在这里，阳光沙滩是标配，浮潜下去珊瑚成群海底世界让你不舍得上岸，在这里，你不需要知道时间，凡间的纷扰都与你无关，你只需要做的就是：享受</P>
                        </dd>
                    </dl>
                    <div class="clear"></div>
                </div>
                <div class="photo_lcon">
                    <dl>
                        <dt>
                            <a href="#"><img src="<?=$this->config->base_url()?>static/pc/place/23.jpg" /></a>
                        <div class="left_title">斯里兰卡 科伦坡</div>
                        </dt>
                        <dd>
                            <h2>科伦坡：千与千寻的梦境</h2>
                            <P>行驶在茫茫大海上的火车，和无脸人安静地坐在车厢内，这样的场景出现在宫崎骏的动画里，也出现在科伦坡，体验从古城到这里的海上火车吧，让你的斯里兰卡回忆都如同梦境，这里仿佛水天一色的异世界</P>
                        </dd>
                    </dl>
                    <dl class="dl_margin">
                        <dt>
                            <a href="#"><img src="<?=$this->config->base_url()?>static/pc/place/24.jpg" /></a>
                        <div class="left_title">捷克 布拉格</div>
                        </dt>
                        <dd>
                            <h2>布拉格：神秘而绝美</h2>
                            <P>如果你是个好「色」之徒，来布拉格准没错儿。美轮美奂、多彩如画的建筑遍布全城，从圣维特教堂到老城广场，这个欧洲最美的城市一定会让你不自觉唱出那句“那画面太美我不敢看”~</P>
                        </dd>
                    </dl>
                    <div class="clear"></div>
                </div>
                <div class="photo_lcon">
                    <dl>
                        <dt>
                            <a href="#"><img src="<?=$this->config->base_url()?>static/pc/place/25.jpg" /></a>
                        <div class="left_title">埃及 开罗</div>
                        </dt>
                        <dd>
                            <h2>开罗：沙漠奇迹</h2>
                            <P>虽然从小到大金字塔的大名听说了无数次，当你真的来到它的面前时，还是不可避免地被震撼到，这个世界上有太多东西我们只闻其声，我们长途跋涉，只为撩拨它神秘的面纱</P>
                        </dd>
                    </dl>
                    <dl class="dl_margin">
                        <dt>
                            <a href="#"><img src="<?=$this->config->base_url()?>static/pc/place/26.jpg" /></a>
                        <div class="left_title">瑞士 日内瓦</div>
                        </dt>
                        <dd>
                            <h2>日内瓦：美景上瘾</h2>
                            <P>人美穿什么都好看，景美怎么拍都是佳作，风光无限的日内瓦，湛蓝的湖水，白雪皑皑的山峰，一眼望不到边的绿色，天鹅、海鸥、野鸭，不用担心你的摄影技术，随便拍就好了，张张都是明信片</P>
                        </dd>
                    </dl>
                    <div class="clear"></div>
                </div>
                <div class="photo_lcon">
                    <dl>
                        <dt>
                            <a href="#"><img src="<?=$this->config->base_url()?>static/pc/place/27.jpg" /></a>
                        <div class="left_title">新西兰 皇后镇</div>
                        </dt>
                        <dd>
                            <h2>皇后镇：宁静也疯狂</h2>
                            <P>这里只有蓝色和绿色，纯粹到想哭，目光所及之处都是明信片级别风景，你可以在这里看星星看月亮和小伙伴从诗词歌赋聊到人生理想，也可以摇身一变体验全世界最刺激的高空蹦极，都看你的了！</P>
                        </dd>
                    </dl>
                    <dl class="dl_margin">
                        <dt>
                            <a href="#"><img src="<?=$this->config->base_url()?>static/pc/place/28.jpg" /></a>
                        <div class="left_title">俄罗斯 莫斯科</div>
                        </dt>
                        <dd>
                            <h2>莫斯科：历史的影子</h2>
                            <P>穿梭在充满年代感的沧桑建筑中，勾起无限回忆。古老的红场，壮观的克里姆林宫，柴可夫斯基，是多年前多少人向往的通往世界的窗口，无论岁月如何变迁，在这里你依然是此间少年</P>
                        </dd>
                    </dl>
                    <div class="clear"></div>
                </div>
                <div class="photo_lcon">
                    <dl>
                        <dt>
                            <a href="#"><img src="<?=$this->config->base_url()?>static/pc/place/29.jpg" /></a>
                        <div class="left_title">英国 爱丁堡</div>
                        </dt>
                        <dd>
                            <h2>爱丁堡：美到心碎</h2>
                            <P>据说来过爱丁堡的人，都无法再爱上别的城市了，古老的城堡，古老的街道，穿苏格兰裙的帅老头，这里不仅是哈利波特的老家，也是天巡的老家。所以，问题来了，挖掘机票技术哪家最强？</P>
                        </dd>
                    </dl>
                    <dl class="dl_margin">
                        <dt>
                            <a href="#"><img src="<?=$this->config->base_url()?>static/pc/place/30.jpg" /></a>
                        <div class="left_title">墨西哥 坎昆</div>
                        </dt>
                        <dd>
                            <h2>墨西哥：和阳光玩游戏</h2>
                            <P>加勒比的阳光火辣辣的，沙滩面粉似的，海洋好像要燃烧，这里还有闻名世界的海底博物馆，潜到水下去来个奇妙的博物馆之旅吧，或者就静静躺在坎昆的沙滩上来个日光浴，恍惚间觉得自己是来度假的好莱坞大明星了</P>
                        </dd>
                    </dl>
                    <div class="clear"></div>
                </div>
                <!--话题列表 结束-->
            </div>

        </div>
        <div class="clear20"></div>
    </div>
</div>
<div class="clear"></div>
<div class="ny_footer"></div>
<script type="text/javascript" src="<?=$this->config->base_url()?>static/pc/js/jquery.js"></script>
<script type="text/javascript" src="<?=$this->config->base_url()?>static/pc/js/jQuery-jcDate.js"></script>
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
