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
                <li class="on"><a href="#"><img src="<?=$this->config->base_url()?>static/pc/images/tab_text1.png"/></a></li>
                <li><a href="#"><img src="<?=$this->config->base_url()?>static/pc/images/tab_text2.png"/></a></li>
                <li><a href="#"><img src="<?=$this->config->base_url()?>static/pc/images/tab_text3.png"/></a></li>
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
                            <a href="#"><img src="<?=$this->config->base_url()?>static/pc/images/img_mst1.jpg" /></a>
                        <div class="left_title">意大利 米兰</div>
                        </dt>
                        <dd>
                            <h2>米兰：时尚就是这样</h2>
                            <P>这是全球最时尚的地方，国际大牌可都在这里发源的，所以只要在时尚四边形区转转，哪怕只看看橱窗，与打扮入时的米兰人擦肩而过，你的时尚级别就已经升了好几个level,怎么样？来米兰升级吧！</P>
                        </dd>
                    </dl>
                    <dl class="dl_margin">
                        <dt>
                            <a href="#"><img src="<?=$this->config->base_url()?>static/pc/images/img_mst2.jpg" /></a>
                        <div class="left_title">荷兰 阿姆斯特丹</div>
                        </dt>
                        <dd>
                            <h2>阿姆斯特丹：钻石任你选</h2>
                            <P>拥有一颗璀璨的钻石，是购物的终极梦想，那么来阿姆斯特丹就对了！这里有闻名世界的钻石切割工艺，迦山Gassan钻石工厂更是一座钻石圣殿，尽管选你喜欢的吧，别忘了还能退税呢</P>
                        </dd>
                    </dl>
                    <div class="clear"></div>
                </div>
                <div class="photo_lcon">
                    <dl>
                        <dt>
                            <a href="#"><img src="<?=$this->config->base_url()?>static/pc/images/img_mst3.jpg" /></a>
                        <div class="left_title">德国 法兰克福 </div>
                        </dt>
                        <dd>
                            <h2>法兰克福：不想买名牌都难</h2>
                            <P>德国品质尽可放心，在法兰克福可以一站购齐，只要在蔡尔街和歌德街逛上一天，你要考虑的问题就只剩下行李会不会超重了，毕竟背个铁锅回国也是蛮常见的事儿</P>
                        </dd>
                    </dl>
                    <dl class="dl_margin">
                        <dt>
                            <a href="#"><img src="<?=$this->config->base_url()?>static/pc/images/img_mst4.jpg" /></a>
                        <div class="left_title">法国 巴黎</div>
                        </dt>
                        <dd>
                            <h2>巴黎：我们卖的是生活方式</h2>
                            <P>既然来到了巴黎，就像巴黎人一样地过日子吧，喝一杯咖啡，不慌不忙地逛逛，体验舒适的服务，享受难得的阳光，随意走进一间很有感觉的二手店，不用买什么，你只需要享受整个过程</P>
                        </dd>
                    </dl>
                    <div class="clear"></div>
                </div>
                <div class="photo_lcon">
                    <dl>
                        <dt>
                            <a href="#"><img src="<?=$this->config->base_url()?>static/pc/images/img_mst5.jpg" /></a>
                        <div class="left_title">美国 纽约</div>
                        </dt>
                        <dd>
                            <h2>纽约：喜欢才买</h2>
                            <P>这是全球最时尚的地方，国际大牌可都在这里发源的，所以只要在时尚四边形区转转，哪怕只看看橱窗，与打扮入时的米兰人擦肩而过，你的时尚级别就已经升了好几个level,怎么样？来米兰升级吧！</P>
                        </dd>
                    </dl>
                    <dl class="dl_margin">
                        <dt>
                            <a href="#"><img src="<?=$this->config->base_url()?>static/pc/images/img_mst6.jpg" /></a>
                        <div class="left_title">越南 胡志明市</div>
                        </dt>
                        <dd>
                            <h2>胡志明市：越南越美味</h2>
                            <P>我们买的任何一件东西都应该让自己变得有趣，不管是你满脸褶子的老太太还是蹒跚学步的孩童，连罪犯也得是有意思的，这就是纽约的气质，纽约的市集可以帮你拾起早已不在的那些小爱好</P>
                        </dd>
                    </dl>
                    <div class="clear"></div>
                </div>
                <div class="photo_lcon">
                    <dl>
                        <dt>
                            <a href="#"><img src="<?=$this->config->base_url()?>static/pc/images/img_mst7.jpg" /></a>
                        <div class="left_title">韩国 首尔 </div>
                        </dt>
                        <dd>
                            <h2>首尔：跟着韩剧吃起来</h2>
                            <P>在啤酒配炸鸡的地盘儿上，是不是吃什么都能让你想起一位花样欧巴吧，烤肉拌饭大酱汤，泡菜烧酒炒年糕，米肠猪皮炸酱面，欧巴，卡吉马~~</P>
                        </dd>
                    </dl>
                    <dl class="dl_margin">
                        <dt>
                            <a href="#"><img src="<?=$this->config->base_url()?>static/pc/images/img_mst8.jpg" /></a>
                        <div class="left_title">日本 东京</div>
                        </dt>
                        <dd>
                            <h2>东京：有情感的食物</h2>
                            <P>寿司之神说，每一种食材都是有生命有温度的，只有这么感人的态度才能做出让人感动到哭的食物吧，也正因为如此，日本美食几乎都是精工细作的工艺品，在别的地方你可以马上开动，在这里，你得——先拍照！</P>
                        </dd>
                    </dl>
                    <div class="clear"></div>
                </div>
                <div class="photo_lcon">
                    <dl>
                        <dt>
                            <a href="#"><img src="<?=$this->config->base_url()?>static/pc/images/img_mst9.jpg" /></a>
                        <div class="left_title">泰国 曼谷 </div>
                        </dt>
                        <dd>
                            <h2>曼谷：走一路吃一路</h2>
                            <P>这座城市让你感觉宜居，不只因为舒服的天气和四通八达的BTS，还有就是不论几点下班，都能在路边解决吃饭问题，也许路边随便一份猪脚饭就能让你旋转跳跃～曼谷完全可以满足你的口腹之欲，而且丰俭由人，贵有贵的去处，便宜有便宜的吃法，总之，唐人街、大商场、夜市、路边摊处处有美食</P>
                        </dd>
                    </dl>
                    <dl class="dl_margin">
                        <dt>
                            <a href="#"><img src="<?=$this->config->base_url()?>static/pc/images/img_mst10.jpg" /></a>
                        <div class="left_title">意大利 佛罗伦萨</div>
                        </dt>
                        <dd>
                            <h2>佛罗伦萨：那一块牛排的事</h2>
                            <P>血淋淋的T骨牛排，1公斤起买，不吃撑着了就对不起自己，冲着这一块牛排来佛罗伦萨的大有人在，当然还得再来点儿方菌菇意面，或者番茄海鲜鱼汤，想吃得特别“意大利”别忘了佐以红酒~</P>
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
