/**
 * Created by Don on 14-10-23.
 */
var canvasDiv = document.getElementById("Cocos2dGameContainer");
var shuDiv = document.getElementById("shuShow");

var GameBgdLayer = cc.Layer.extend({
    ctor:function(){
        this._super();
        var colorlayer = cc.LayerColor.create(cc.color(190,230,79,255));
        colorlayer.setPosition(0,0);
        this.addChild(colorlayer);

        this.nowBgdId = 2;//当前显示背景id

        this.cloud1 = cc.Sprite.create(res.cloud);
        this.cloud2 = cc.Sprite.create(res.cloud);
        this.cloud1.setAnchorPoint(0,0);
        this.cloud2.setAnchorPoint(0,0);
        this.cloud1.setPosition(0,0);
        this.cloud2.setPosition(3005,0);
        this.addChild(this.cloud1);
        this.addChild(this.cloud2);

        this.bgdImg1 = cc.Sprite.create(res.bgd1);
        this.bgdImg2 = cc.Sprite.create(res.bgd2);
        this.bgdImg1.setAnchorPoint(0,0);
        this.bgdImg2.setAnchorPoint(0,0);
        this.bgdImg1.setPosition(0,0);
        this.bgdImg2.setPosition(5000,0);
        this.addChild(this.bgdImg1);
        this.addChild(this.bgdImg2);
    },
    update:function(disX){
        var cloudx1 = this.cloud1.getPositionX();
        var cloudx2 = this.cloud2.getPositionX();
        if(cloudx1 <= -3005) {
            cloudx1 = cloudx2+3005;
            this.cloud1.setPositionX(cloudx1);
        }
        if(cloudx2 <= -3005) {
            cloudx2 = cloudx1+3005;
            this.cloud2.setPositionX(cloudx2);
        }
        this.cloud1.setPositionX(cloudx1-disX);
        this.cloud2.setPositionX(cloudx2-disX);

        var px1 = this.bgdImg1.getPositionX();
        var px2 = this.bgdImg2.getPositionX();
        if(px1 <= -5000) {
            this.nowBgdId++;
            if(this.nowBgdId == 11) this.nowBgdId = 1;
            px1 = px2+5000;
            this.bgdImg1.removeFromParent(true);
            this.bgdImg1 = cc.Sprite.create(res["bgd"+this.nowBgdId]);
            this.bgdImg1.setAnchorPoint(0,0);
            this.bgdImg1.setPosition(px1,0);
            this.addChild(this.bgdImg1);
        }
        if(px2 <= -5000) {
            this.nowBgdId++;
            if(this.nowBgdId == 12) this.nowBgdId = 2;
            px2 = px1+5000;
            this.bgdImg2.removeFromParent(true);
            this.bgdImg2 = cc.Sprite.create(res["bgd"+this.nowBgdId]);
            this.bgdImg2.setAnchorPoint(0,0);
            this.bgdImg2.setPosition(px2,0);
            this.addChild(this.bgdImg2);
        }
        this.bgdImg1.setPositionX(px1-disX);
        this.bgdImg2.setPositionX(px2-disX);
    }
});
var StartLayer = cc.Layer.extend({
    ctor:function(scene){
        this._super();
        this.scene = scene;
        var winSize = cc.director.getWinSize();
        this.startTitle = cc.Sprite.create(res.startTitle);
        this.startTitle.setPosition(winSize.width/2, winSize.height/2);
        this.addChild(this.startTitle);

        var startGameBtn = cc.MenuItemImage.create(res.startBtn,res.startBtn,null,this.scene.startGame,this.scene);
        var startTeamBtn = cc.MenuItemImage.create(res.startTeam,res.startTeam,function(){
            _smq.push(['custom','CreateTeam','ButtonClick']);
            _gaq.push(['_trackEvent', 'GameStart', 'ButtonClick', 'CreateTeam']);
            window.location.href = "http://skyteam.tianxun.cn/rank";

        });
        startGameBtn.setPosition(winSize.width/2-130,150);
        startTeamBtn.setPosition(winSize.width/2+130,150);
        var menu = cc.Menu.create([startGameBtn,startTeamBtn]);
        menu.setAnchorPoint(0,0);
        menu.setPosition(0,0);
        this.addChild(menu);

        cc.eventManager.addListener({
            event:cc.EventListener.TOUCH_ONE_BY_ONE,
            swallowTouches:true,
            onTouchBegan:  function(touch, event) {
                return true;
            }
        }, this);
    }
});
var GameLayer = cc.Layer.extend({
    KACCELERATION:1500,         //重力加速度
    CLICKSPEEDY: -500,          //点击初始速度
    SHOWPIPEDIS:300,            //出现柱子的距离
    PIPEGAP:250,                //1对柱子间的距离

    lastPipeX:931,                //最后一根柱子的位置
    ctor:function(scene){
        this._super();
        this.scene = scene;
        var winSize = cc.director.getWinSize();

        this.movedxS = 0;//是否需要添加柱子
        this.showPipes = [];//柱子队列
        this.cions = [];//道具队列
        this.tips = [];//吃金币，分数提示
        this.nowSpeedY = 0;
        this.firstAdd = true;
        this.isMovePlane = false;

        this.spaceIsDown = false;

        this.isHit = false;//记录飞机是否撞毁

        this.plane = cc.Sprite.create(res.plane);
        this.plane.setAnchorPoint(0,0);
        this.plane.setPosition(100,370);
        this.addChild(this.plane,3);

        for(var i=0; i<5;i++){
            this.addPipe1();
        }
        //主界面分数和地名
        var scoreBgd = cc.Sprite.create(res.scoreBgd);
        scoreBgd.setAnchorPoint(0,0);
        scoreBgd.setPosition(35,483);
        this.scoreNum = cc.LabelTTF.create("0km", 'Times New Roman', 30, cc.size(159, 32), cc.TEXT_ALIGNMENT_CENTER,cc.VERTICAL_TEXT_ALIGNMENT_CENTER);
        this.countryNamecn = cc.LabelTTF.create("中国", 'Times New Roman', 30, cc.size(100, 32), cc.TEXT_ALIGNMENT_CENTER,cc.VERTICAL_TEXT_ALIGNMENT_CENTER);
        this.scoreNum.setColor(cc.color(0,0,0));
        this.countryNamecn.setColor(cc.color(0,0,0));
        this.scoreNum.setAnchorPoint(0,0);
        this.scoreNum.setPosition(35,483);
        this.countryNamecn.setAnchorPoint(0,0);
        this.countryNamecn.setPosition(200,483);
        this.addChild(scoreBgd,4);
        this.addChild(this.scoreNum,5);
        this.addChild(this.countryNamecn,5);


        cc.eventManager.addListener({
            event:cc.EventListener.TOUCH_ONE_BY_ONE,
            swallowTouches:true,
            onTouchBegan:  function(touch, event) {
                var target = event.getCurrentTarget();
                target.nowSpeedY = target.CLICKSPEEDY;
                return true;
            }
        }, this);
        cc.eventManager.addListener({
            event: cc.EventListener.KEYBOARD,
            onKeyPressed: function(keyCode, event){
                if(keyCode == cc.KEY.space) {
                    var target = event.getCurrentTarget();
                    if(target.spaceIsDown) return;
                    target.spaceIsDown = true;
                    target.nowSpeedY = target.CLICKSPEEDY;
                }
            },
            onKeyReleased: function(keyCode, event){
                if(keyCode == cc.KEY.space) {
                    var target = event.getCurrentTarget();
                    target.spaceIsDown = false;
                }
            }
        }, this);
    },
    addPipe1:function(isRandomCion){
        var height1 = 100+Math.floor( Math.random()*(cc.director.getWinSize().height-200-this.PIPEGAP));
        var height2 = cc.director.getWinSize().height-height1-this.PIPEGAP;

        var left =	this.showPipes.length?this.showPipes[this.showPipes.length-1][0].getPositionX()+this.SHOWPIPEDIS : this.lastPipeX;
        var pipe1 = cc.Sprite.create(res.pipe,cc.rect(0,0,35,height1));
        var pipe2 = cc.Sprite.create(res.pipe,cc.rect(0,0,35,height2));
        pipe1.setAnchorPoint(0,0);
        pipe2.setAnchorPoint(0,0);
        pipe1.setPosition(left,0);
        pipe2.setPosition(left,height1+this.PIPEGAP);

        this.addChild(pipe1);
        this.addChild(pipe2);

        this.showPipes.push([pipe1,pipe2]);

        if(isRandomCion && Math.random()*100 < 60) {
            var cion = cc.Sprite.create(res.cion);
            var action = cc.RepeatForever.create(cc.Sequence.create(
                cc.ScaleTo.create(1,-1,1),
                cc.ScaleTo.create(1,1,1)
            ));
            cion.runAction(action);
            var _left = left + 35 + Math.floor(Math.random()*this.PIPEGAP);
            var _top = 130 + Math.floor(Math.random()*230);
            //cion.setAnchorPoint(0,0);
            cion.setPosition(_left+35,_top+35);
            this.addChild(cion);
            this.cions.push(cion);
        }
    },
    addPipe2: function(){
        var left = this.showPipes.length?this.showPipes[this.showPipes.length-1][0].getPositionX()+this.SHOWPIPEDIS : this.lastPipeX;
        var height = 0;
        var isShowCoin = false;
        var nums = Math.floor(Math.random()*4)+3;
        for(var i=0; i<nums; i++) {
            height = 100+Math.floor(45 * Math.random() * 5);
            var pipe = cc.Sprite.create(res.pipe,cc.rect(0,0,35,height));
            pipe.setAnchorPoint(0,0);
            pipe.setPosition(left+60*i,0);
            this.addChild(pipe);

            this.showPipes.push([pipe,0]);

            if(!isShowCoin && Math.random()*100 < 60) {
                isShowCoin = true;
                var cion = cc.Sprite.create(res.cion);
                var action = cc.RepeatForever.create(cc.Sequence.create(
                    cc.ScaleTo.create(1,-1,1),
                    cc.ScaleTo.create(1,1,1)
                ));
                cion.runAction(action);
                var _left = left + 35 + 55*nums;
                var _top = height + Math.floor(Math.random()*150);
                //cion.setAnchorPoint(0,0);
                cion.setPosition(_left+35,_top+35);
                this.addChild(cion);
                this.cions.push(cion);
            }
        }

    },
    deadAction: function(dt){
        var planeY = this.plane.getPositionY();
        this.nowSpeedY += this.KACCELERATION*dt;
        this.plane.setPositionY(planeY-this.nowSpeedY*dt);
        if(this.nowSpeedY > 0) {
            this.plane.setRotation(75);
        }
        if(planeY< -60){
            this.scene.unscheduleUpdate();
        }
    },
    getCion: function(){
        this.scene.cionX += 100;
    },
    movePlane: function(){
        this.isMovePlane = true;
    },
    update :function(disX,dt){
        if(!this.isMovePlane){
            this.movedxS += disX;
            //添加柱子
            if(this.firstAdd) {
                if(this.movedxS>=this.SHOWPIPEDIS+this.lastPipeX) {
                    this.movedxS -= this.SHOWPIPEDIS+this.lastPipeX;
                    this.addPipe1(true);
                    this.firstAdd = false;
                }
            } else {
                if(this.movedxS>=this.SHOWPIPEDIS) {
                    this.movedxS -= this.SHOWPIPEDIS;
                    if(Math.random()*100 < 20) {
                       this.addPipe1(true);
                    } else {
                       this.addPipe2(true);
                    }
                }
            }
        } else {
            var planeX = this.plane.getPositionX();
            if(planeX >= cc.director.getWinSize().width-100 && !this.isHit) {
                this.isHit = true;
                //this.nowSpeedY = this.CLICKSPEEDY;
                //this.scene.planeDead();
                this.scene.gameOver();
            }
            this.plane.setPositionX(planeX+disX);
        }

        //飞机运动
        var planeY = this.plane.getPositionY();
        if((planeY < -60 || planeY>cc.director.getWinSize().height) && !this.isHit) {
            this.isHit = true;
            //this.nowSpeedY = this.CLICKSPEEDY;
            //this.scene.planeDead();
            this.scene.gameOver();
        }
        this.nowSpeedY += this.KACCELERATION*dt;

        this.plane.setPositionY(planeY-this.nowSpeedY*dt);
        //移动柱子
        for(var i=0;i<this.showPipes.length;i++){
            var pipes = this.showPipes[i];
            var px = pipes[0].getPositionX();
            if(px < -35) {
                pipes[0].removeFromParent(true);
                if(pipes[1]) pipes[1].removeFromParent(true);
                this.showPipes.splice(i,1);
                i--;
            }
            pipes[0].setPositionX(px-disX);
            if(pipes[1]) pipes[1].setPositionX(px-disX);
        }
        //移动硬币
        if(this.cions.length){
            for(var i=0; i<this.cions.length;i++){
                var cion = this.cions[i];
                var px =cion.getPositionX();
                if(px <-60) {
                    cion.removeFromParent(true);
                    this.cions.splice(i,1);
                    i--;
                }
                cion.setPositionX(px-disX);
            }
        }
        //检测飞机与柱子的碰撞
        var planeX1 = this.plane.getPositionX(), planeY1 = this.plane.getPositionY();
        var planeX2 = planeX1+this.plane.getContentSize().width, planeY2 = planeY1+this.plane.getContentSize().height;

        for(var i=0; i<this.showPipes.length; i++){
            var _pipes = this.showPipes[i];
            var _pipeX1 = _pipes[0].getPositionX(), _pipeY1 = _pipes[0].getContentSize().height;
            var _pipeX2 = _pipeX1+35, _pipeY2 = _pipeY1+this.PIPEGAP;
            if(!_pipes[1]) {
                _pipeY2 = cc.director.getWinSize().height+this.plane.getContentSize().height;
            }
            //x轴有相交
            if((_pipeX1 <= planeX2 && planeX1 <= _pipeX2) && !this.isHit ) {
                //y轴有相交
                if(planeY1 <= _pipeY1 || _pipeY2 <= planeY2){
                    this.isHit = true;
                    //this.nowSpeedY = this.CLICKSPEEDY;
                    //this.scene.planeDead();
                    this.scene.gameOver();
                }
            }
        }
        for(var i=0; i<this.cions.length; i++){
            var cion = this.cions[i];
            var cionX1 = cion.getPositionX(), cionY1 = cion.getPositionY();
            var cionX2 = cionX1+cion.getContentSize().width, cionY2 = cionY1+cion.getContentSize().height;
            if(cion.isHit) continue;
            //x轴有相交
            if(planeX2 >= cionX1 && cionX2 >= planeX1) {
                //y轴有相交
                if(cionY1 <= planeY2 && planeY1 <= cionY2){
                    cion.isHit = true;
                    var tip = cc.LabelTTF.create("+10 公里", 'Times New Roman', 30, cc.size(159, 32), cc.TEXT_ALIGNMENT_CENTER,cc.VERTICAL_TEXT_ALIGNMENT_CENTER);
                    tip.setColor("#000");
                    tip.setPosition(cionX1,cionY2);
                    this.addChild(tip,20);
                    var action = cc.Sequence.create(
                        cc.MoveBy.create(3,cc.p(0,150)),
                        cc.CallFunc.create(function(){
                            this.removeFromParent(true);
                        },tip)
                    );
                    tip.runAction(action);
                    this.tips.push(tip);

                    this.getCion();
                    this.cions.splice(i,1);
                    i--;
                    cion.removeFromParent(true);
                }
            }
        }
        for(var i=0; i<this.tips.length;i++){
            var tip = this.tips[i];
            var tx = tip.getPositionX();
            if(!tip) {
                this.tips.splice(i,1);
                i--;
            }
            tip.setPositionX(tx-disX);
        }
    }
});
//Friend
var GameOver1Layer  = cc.Layer.extend({
    ctor:function(scene){
        this._super();
        this.scene = scene;
        var winSize = cc.director.getWinSize();

        var bgdImg = cc.Sprite.create(res.gameoverBgd);
        bgdImg.setPosition(winSize.width/2, winSize.height/2);
        this.addChild(bgdImg);

        this.desc1 = cc.LabelTTF.create("已成功帮朋友累积", 'Times New Roman', 34, cc.size(280, 40), cc.TEXT_ALIGNMENT_LEFT,cc.VERTICAL_TEXT_ALIGNMENT_CENTER);
        this.scoreNum = cc.LabelTTF.create("0   公里", 'Times New Roman', 60, cc.size(540, 64), cc.TEXT_ALIGNMENT_RIGHT,cc.VERTICAL_TEXT_ALIGNMENT_CENTER);
        this.scoreNum.setColor(cc.color(240,217,28));
        //this.desc1.setAnchorPoint(0,0);
        this.desc1.setPosition(winSize.width/2-180, winSize.height/2+35);
        //this.scoreNum.setAnchorPoint(0,0);
        this.scoreNum.setPosition(winSize.width/2-100, winSize.height/2-35);
        this.addChild(this.desc1,2);
        this.addChild(this.scoreNum,2);

        var shareBtn = cc.MenuItemImage.create(res.shareBtn,res.shareBtn,null,function(){
            this.scene.gameoverlayer.setVisible(false);
            this.scene.addChild(new ShareLayer(this.scene),10);
        }, this);
        var againBtn = cc.MenuItemImage.create(res.againBtn,res.againBtn,null,this.scene.againGame, this.scene);
        var createBtn = cc.MenuItemImage.create(res.createBtn,res.createBtn,function(){
            _gaq.push(['_trackEvent', 'GameEndInvitedUser', 'ButtonClick', 'CreateTeam']);
            location.href='http://skyteam.tianxun.cn/rank';
        });
        var joinBtn = cc.MenuItemImage.create(res.joinBtn,res.joinBtn,function(){ window.location.href = "http://www.baidu.com";});
        shareBtn.setPosition(winSize.width/2+250, winSize.height/2-40);
        againBtn.setPosition(winSize.width/2-220,143);
        createBtn.setPosition(winSize.width/2,143);
        joinBtn.setPosition(winSize.width/2+220,143);
        var menu = cc.Menu.create([shareBtn,againBtn,createBtn,joinBtn]);
        menu.setPosition(0,0);
        this.addChild(menu);

        cc.eventManager.addListener({
            event:cc.EventListener.TOUCH_ONE_BY_ONE,
            swallowTouches:true,
            onTouchBegan:  function(touch, event) {
                var target = event.getCurrentTarget();
                return target.isVisible();
            }
        }, this);
    }
});
//myself
var GameOver2Layer  = cc.Layer.extend({
    ctor:function(scene){
        this._super();
        this.scene = scene;
        var winSize = cc.director.getWinSize();
        var bgdImg = cc.Sprite.create(res.gameoverBgd);
        bgdImg.setPosition(winSize.width/2, winSize.height/2);
        this.addChild(bgdImg);
        this.desc1 = cc.LabelTTF.create("已成功累积", 'Times New Roman', 34, cc.size(280, 40), cc.TEXT_ALIGNMENT_LEFT,cc.VERTICAL_TEXT_ALIGNMENT_CENTER);
        this.scoreNum = cc.LabelTTF.create("0   公里", 'Times New Roman', 60, cc.size(540, 64), cc.TEXT_ALIGNMENT_RIGHT,cc.VERTICAL_TEXT_ALIGNMENT_CENTER);
        this.scoreNum.setColor(cc.color(240,217,28));
        //this.desc1.setAnchorPoint(0,0);
        this.desc1.setPosition(winSize.width/2-160, winSize.height/2+35);
        //this.scoreNum.setAnchorPoint(0,0);
        this.scoreNum.setPosition(winSize.width/2-100, winSize.height/2-35);
        this.addChild(this.desc1,2);
        this.addChild(this.scoreNum,2);

        var shareBtn = cc.MenuItemImage.create(res.shareBtn,res.shareBtn,null,function(){
            this.scene.gameoverlayer.setVisible(false);
            this.scene.addChild(new ShareLayer(this.scene),10);
        }, this);
        var selfOverBtn = cc.MenuItemImage.create(res.selfOverBtn2,res.selfOverBtn2,function(){
            _gaq.push(['_trackEvent', 'GameEndInvitedUser', 'ButtonClick', 'CreateTeam']);
            _smq.push(['custom','CreateTeam','ButtonClick']);

            window.location.href = "rank";
        });
        var againBtn = cc.MenuItemImage.create(res.againBtn,res.againBtn,null,this.scene.againGame, this.scene);
        shareBtn.setPosition(winSize.width/2+250, winSize.height/2-40);
        selfOverBtn.setPosition(winSize.width/2-120, winSize.height/2-125);
        againBtn.setPosition(winSize.width/2+250, winSize.height/2-125);
        var menu = cc.Menu.create([shareBtn,selfOverBtn,againBtn]);
        menu.setPosition(0,0);
        this.addChild(menu);

        cc.eventManager.addListener({
            event:cc.EventListener.TOUCH_ONE_BY_ONE,
            swallowTouches:true,
            onTouchBegan:  function(touch, event) {
                var target = event.getCurrentTarget();
                return target.isVisible();
            }
        }, this);
    }
});

var ShareLayer = cc.Layer.extend({
    ctor:function(scene,isPc){

        _smq.push(['custom','ShareGame','ButtonClick']);
        _gaq.push(['_trackEvent', 'GameEndInvitedUser', 'ButtonClick', 'ShareGame']);

        this._super();
        this.scene = scene;
        var winSize = cc.director.getWinSize();
        var bgdImg = cc.Sprite.create(res.shareBgd);
        bgdImg.setPosition(winSize.width/2, winSize.height/2);
        this.addChild(bgdImg);
        this.desc1 = cc.LabelTTF.create("分享至", 'Times New Roman', 34, cc.size(cc.director.getWinSize().width, 40), cc.TEXT_ALIGNMENT_CENTER,cc.VERTICAL_TEXT_ALIGNMENT_CENTER);
        this.desc1.setColor(cc.color(255,255,255));
        this.desc1.setPosition(winSize.width/2, winSize.height/2+35);
        this.addChild(this.desc1,2);

        var sinaBtn = cc.MenuItemImage.create(res.sinaIcon, res.sinaIcon, function(){
            shareWeibo();
        });
        var qzoneBtn = cc.MenuItemImage.create(res.qzoneIcon, res.qzoneIcon, function(){
            shareQQ();
        });
        var renrenBtn = cc.MenuItemImage.create(res.renrenIcon, res.renrenIcon, function(){
            shareRenren();
        });
        var doubanBtn = cc.MenuItemImage.create(res.doubanIcon, res.doubanIcon, function(){
            shareDouban();
        });
        var weixinBtn = cc.MenuItemImage.create(res.weixinIcon, res.weixinIcon, null, function(){
            this.shareImg.setVisible(true);
        },this);
        var closeBtn = cc.MenuItemImage.create(res.closeBtn,res.closeBtn,null,function(){
            this.removeFromParent(true);
            this.scene.gameoverlayer.setVisible(true);
        },this);
        closeBtn.setPosition(winSize.width/2+bgdImg.getContentSize().width/2-10, winSize.height/2+80);

        if(window.isPc) {
            sinaBtn.setPosition(winSize.width/2-200, winSize.height/2-50);
            doubanBtn.setPosition(winSize.width/2-65, winSize.height/2-50);
            qzoneBtn.setPosition(winSize.width/2+65, winSize.height/2-50);
            renrenBtn.setPosition(winSize.width/2+200, winSize.height/2-50);
            var menu = cc.Menu.create([sinaBtn,qzoneBtn,renrenBtn,doubanBtn,closeBtn]);
            menu.setPosition(0,0);
            this.addChild(menu);
        } else {
            sinaBtn.setPosition(winSize.width/2-200, winSize.height/2-50);
            weixinBtn.setPosition(winSize.width/2-100, winSize.height/2-50);
            doubanBtn.setPosition(winSize.width/2, winSize.height/2-50);
            qzoneBtn.setPosition(winSize.width/2+100, winSize.height/2-50);
            renrenBtn.setPosition(winSize.width/2+200, winSize.height/2-50);
            var menu = cc.Menu.create([sinaBtn,qzoneBtn,renrenBtn,doubanBtn,weixinBtn,closeBtn]);
            menu.setPosition(0,0);
            this.addChild(menu);
        }

        this.shareImg = cc.Sprite.create(res.sharebg);
        this.shareImg.setPosition(winSize.width/2, winSize.height/2);
        //this.shareImg.setContentSize(winSize);
        this.shareImg.setVisible(false);
        this.addChild(this.shareImg,10);
        cc.eventManager.addListener({
            event:cc.EventListener.TOUCH_ONE_BY_ONE,
            swallowTouches:true,
            onTouchBegan:  function(touch, event) {
                var target = event.getCurrentTarget();
                if(target.isVisible()){
                    target.setVisible(false);
                    return true;
                }
                return false;
            }
        }, this.shareImg);

        cc.eventManager.addListener({
            event:cc.EventListener.TOUCH_ONE_BY_ONE,
            swallowTouches:true,
            onTouchBegan:  function(touch, event) {
                return true;
            }
        }, this);
    }
});

var StartGame = cc.Scene.extend({
    READY : 1,
    START : 2,
    DEAD : 3,
    OVER : 4,
    PAUSE : 5,
    gameState:1,
    SPEEDX : 200,                 //水平速度

    ctor:function(){
        this._super();

        this.lastPipeX = 531;
        this.gameState = this.READY;
        this.movedxS = 0;//是否需要添加柱子
        this.totalMovedX = 0;//水平移动的距离
        this.cionX = 0;
        this.showPipes = [];
        this.useTime = 0;
        this.nowSpeedY = 0;

    },
    onEnter:function(){
        this._super();

        this.gamebgdlayer = new GameBgdLayer(this);
        this.gamelayer = new GameLayer(this);
        this.startlayer = new StartLayer(this);

        this.gamebgdlayer.setPosition(0,0);
        this.gamelayer.setPosition(0,0);
        this.startlayer.setPosition(0,0);

        this.addChild(this.gamebgdlayer);
        this.addChild(this.gamelayer);
        this.addChild(this.startlayer);
    },
    startGame:function(){

        _smq.push(['custom','StartGame','ButtonClick']);
        _gaq.push(['_trackEvent', 'GameStart', 'ButtonClick', 'StartGame']);

        this.startlayer.removeFromParent(true);
        this.startlayer = null;
        this.gameState = this.START;
        this.scheduleUpdate();
    },
    /*planeDead: function(){
        this.gameState = this.DEAD;
        this.gameOver();
    },*/
    gameOver:function(){
        this.gameState = this.DEAD;
        this.gamelayer.plane.setVisible(false);
        this.gameoverlayer = new GameOver2Layer(this);
        var start_num = this.gamelayer.scoreNum.getString().replace(/Km/i,"");
        $.ajax({
            type : 'POST',
            url : 'http://skyteam.tianxun.cn/welcome/game_goon_myself',
            data : '&num=' + start_num + '&token=' + token,
            async : false,
            dataType : 'json',
            success : function(ress){

            }
        });



        var str = this.gamelayer.scoreNum.getString().replace(/Km/i,"   公里");



        this.gameoverlayer.scoreNum.setString(str);
        this.gamebgdlayer.setPosition(0,0);
        this.addChild(this.gameoverlayer,20,20);
    },
    againGame:function(){

        $.ajax({
            type : 'POST',
            url : 'http://skyteam.tianxun.cn/welcome/getToken',
            data : '',
            success : function(ress){
                token = ress;
            }
        });

        _smq.push(['custom','CreateTeam','ButtonClick']);
        _gaq.push(['_trackEvent', 'GameEndInvitedUser', 'ButtonClick', 'StartGame']);



        this.initStart();
        if(this.gameoverlayer) {
            this.gameoverlayer.removeFromParent(true);
            this.gameoverlayer = null;
        }
        if(this.gamebgdlayer) {
            this.gamebgdlayer.removeFromParent(true);
            this.gamebgdlayer = new GameBgdLayer(this);
            this.gamebgdlayer.setPosition(0,0);
            this.addChild(this.gamebgdlayer);
        }
        if(this.startlayer) {
            this.startlayer.removeFromParent(true);
            this.startlayer = null;
        }
        if(this.gamelayer) {
            this.gamelayer.removeFromParent(true);
            this.gamelayer = new GameLayer(this);
            this.gamelayer.setPosition(0,0);
            this.addChild(this.gamelayer);
        }
        this.scheduleUpdate();
    },
    update:function(dt){
        if(this.gameState == this.DEAD){
        //    this.gamelayer.deadAction(dt);
        } else if(this.gameState == this.START){
            var disx = dt*this.SPEEDX;
            this.totalMovedX += disx;
            this.gamelayer.scoreNum.setString(Math.floor((this.totalMovedX+this.cionX)/10)+"km");
            this.gamelayer.countryNamecn.setString(["中国","日本","泰国","埃及","法国","荷兰","英国","墨西哥","美国","新西兰"][Math.floor(this.totalMovedX/5000)%10]);
           // if(this.totalMovedX <= cc.director.getWinSize().width-55000) {
           //     this.gamelayer.movePlane();
           // } else {
                this.gamebgdlayer.update(disx);
                this.gamelayer.update(disx,dt);
          //  }
        }
    },
    initStart:function(){
        this.gameState = this.START;
        this.totalMovedX = 0;//水平移动的距离
    }
});
//横竖屏监听
function _resize(){
    if(window.orientation==90||window.orientation==-90){
        if(canvasDiv) {
            canvasDiv.style.display = "block";
        }
        shuDiv.style.display = "none";
    }
    if(window.orientation==180||window.orientation==0) {
        if(canvasDiv) {
            canvasDiv.style.display = "none";
        }
        shuDiv.style.display = "block";
    }
}

setTimeout(_resize,1000);

if("onorientationchange" in window) {
    window.addEventListener("orientationchange", _resize, false);
}