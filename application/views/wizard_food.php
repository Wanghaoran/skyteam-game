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
                <li class="on"><a href="<?=$this->config->base_url()?>welcome/wizard_food"><img src="<?=$this->config->base_url()?>static/pc/images/tab_text1.png"/></a></li>
                <li><a href="<?=$this->config->base_url()?>welcome/wizard_buy"><img src="<?=$this->config->base_url()?>static/pc/images/tab_text2.png"/></a></li>
                <li><a href="<?=$this->config->base_url()?>welcome/wizard_show"><img src="<?=$this->config->base_url()?>static/pc/images/tab_text3.png"/></a></li>
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
                            <a href="#"><img src="<?=$this->config->base_url()?>static/pc/place/1.jpg" /></a>
                        <div class="left_title">越南 胡志明市</div>
                        </dt>
                        <dd>
                            <h2>胡志明市：越南越美味</h2>
                            <P>在这个号称东方小巴黎的地方，既有正宗的南洋口味，又有法式大餐的遗风，香甜四溢的椰子烤虾配一杯越南咖啡，享受你的热带生活吧，关键是在这里随便吃一顿就是几十万，感觉真的好阔气！</P>
                        </dd>
                    </dl>
                    <dl class="dl_margin">
                        <dt>
                            <a href="#"><img src="<?=$this->config->base_url()?>static/pc/place/2.jpg" /></a>
                        <div class="left_title">新加坡</div>
                        </dt>
                        <dd>
                            <h2>新加坡</h2>
                            <P>在这个多种族的地方，吃的喝的都得是包罗万象才成，是名副其实的美食乐园，除了土生土长的“娘惹”，还可以尝遍亚洲美食，胡椒蟹必须吃吧？海南鸡饭必须吃吧？咖喱鱼头要吃吧？肉骨茶要喝吧？等不及了，这就出发！</P>
                        </dd>
                    </dl>
                    <div class="clear"></div>
                </div>
                <div class="photo_lcon">
                    <dl>
                        <dt>
                            <a href="#"><img src="<?=$this->config->base_url()?>static/pc/place/3.jpg" /></a>
                        <div class="left_title">泰国 曼谷</div>
                        </dt>
                        <dd>
                            <h2>曼谷：走一路吃一路</h2>
                            <P>这座城市让你感觉宜居，不只因为舒服的天气和四通八达的BTS，还有就是不论几点下班，都能在路边解决吃饭问题，也许路边随便一份猪脚饭就能让你旋转跳跃～曼谷完全可以满足你的口腹之欲，而且丰俭由人，贵有贵的去处，便宜有便宜的吃法，总之，唐人街、大商场、夜市、路边摊处处有美食</P>
                        </dd>
                    </dl>
                    <dl class="dl_margin">
                        <dt>
                            <a href="#"><img src="<?=$this->config->base_url()?>static/pc/place/4.jpg" /></a>
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
                            <a href="#"><img src="<?=$this->config->base_url()?>static/pc/place/5.jpg" /></a>
                        <div class="left_title">台湾 台北</div>
                        </dt>
                        <dd>
                            <h2>台北：中华味道</h2>
                            <P>吃货必去的台北，从牛肉面到各大夜市，甚至高铁便当，都不能放过，如果来台北你还是一日三餐那真的白来了，改成6顿吧，这是必须的！</P>
                        </dd>
                    </dl>
                    <dl class="dl_margin">
                        <dt>
                            <a href="#"><img src="<?=$this->config->base_url()?>static/pc/place/6.jpg" /></a>
                        <div class="left_title">意大利 佛罗伦萨</div>
                        </dt>
                        <dd>
                            <h2>意大利 佛罗伦萨</h2>
                            <P>血淋淋的T骨牛排，1公斤起买，不吃撑着了就对不起自己，冲着这一块牛排来佛罗伦萨的大有人在，当然还得再来点儿方菌菇意面，或者番茄海鲜鱼汤，想吃得特别“意大利”别忘了佐以红酒~</P>
                        </dd>
                    </dl>
                    <div class="clear"></div>
                </div>
                <div class="photo_lcon">
                    <dl>
                        <dt>
                            <a href="#"><img src="<?=$this->config->base_url()?>static/pc/place/7.jpg" /></a>
                        <div class="left_title">比利时 布鲁塞尔</div>
                        </dt>
                        <dd>
                            <h2>比利时 布鲁塞尔</h2>
                            <P>辣椒味的巧克力、房子一样大的巧克力、巧克力壁画、巧克力火锅，在他们面前，朴素的德芙好时麦丽素应该无处遁形了吧，比利时人把每块巧克力都当做艺术品，来布鲁塞尔亲手制作一块属于你自己的巧克力吧</P>
                        </dd>
                    </dl>
                    <dl class="dl_margin">
                        <dt>
                            <a href="#"><img src="<?=$this->config->base_url()?>static/pc/place/8.jpg" /></a>
                        <div class="left_title">德国 慕尼黑</div>
                        </dt>
                        <dd>
                            <h2>慕尼黑：和全世界干杯</h2>
                            <P>如果你滴酒不沾，那就别来了，好不容易有个跟全世界一醉方休的机会绝不能浪费，要喝就去啤酒大棚里喝，看着身着巴伐利亚民族服饰的姑娘穿梭在人群中，不知怎么突然就有了想把自己灌晕的想法。。。</P>
                        </dd>
                    </dl>
                    <div class="clear"></div>
                </div>
                <div class="photo_lcon">
                    <dl>
                        <dt>
                            <a href="#"><img src="<?=$this->config->base_url()?>static/pc/place/9.jpg" /></a>
                        <div class="left_title">西班牙 巴塞罗那</div>
                        </dt>
                        <dd>
                            <h2>巴塞罗那：让胃做主</h2>
                            <P>除了闻名遐迩的西班牙海鲜饭，还必须尝尝香肠煮豆子、脆脆的炒咸猪耳、奇妙组合的巧克力和油条，就算吃一片薄如蝉翼的火腿片的满足感都能令人手舞足蹈幸福得转起圈儿来！</P>
                        </dd>
                    </dl>
                    <dl class="dl_margin">
                        <dt>
                            <a href="#"><img src="<?=$this->config->base_url()?>static/pc/place/10.jpg" /></a>
                        <div class="left_title">澳大利亚 悉尼</div>
                        </dt>
                        <dd>
                            <h2>悉尼：海鲜诱惑</h2>
                            <P>这里有南半球最大的海鲜市场fish market，龙虾都堆成了小山，新鲜的鲑鱼当时就可以加工，热闹的市场氛围让你情不自禁地想加入进来，种类繁多价格公道的海鲜让你买个够吃个够！</P>
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
