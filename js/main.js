/**
 * Created by Don on 14-10-23.
 */

    //zhongguo riben taiguo xinxilan
function browserRedirect() {
    var sUserAgent = navigator.userAgent.toLowerCase();
    var bIsIpad = sUserAgent.match(/ipad/i) == "ipad";
    var bIsIphoneOs = sUserAgent.match(/iphone os/i) == "iphone os";
    var bIsMidp = sUserAgent.match(/midp/i) == "midp";
    var bIsUc7 = sUserAgent.match(/rv:1.2.3.4/i) == "rv:1.2.3.4";
    var bIsUc = sUserAgent.match(/ucweb/i) == "ucweb";
    var bIsAndroid = sUserAgent.match(/android/i) == "android";
    var bIsCE = sUserAgent.match(/windows ce/i) == "windows ce";
    var bIsWM = sUserAgent.match(/windows mobile/i) == "windows mobile";
    if (bIsIpad || bIsIphoneOs || bIsMidp || bIsUc7 || bIsUc || bIsAndroid || bIsCE || bIsWM) {
        return false; //移动设备
    } else {
        return true; //pc
    }
}
window.onload = function(){
    //如果是点击好友链接进来，则把好友id记录在FRIENDID
    //自己的id则保存在USERID
    //用FRIENDID区分结束界面样子
    window.FRIENDID = "";
    window.USERID = "";
    window.isPc = browserRedirect();
    if(!window.isPc){
        window.FRIENDID = "testPc";
        var canvasDiv = document.getElementById("Cocos2dGameContainer");
        var shuDiv = document.getElementById("shuShow");
        var checkFirstLogin = setInterval(function(){
            var bodyW = window.innerWidth, bodyH = window.innerHeight;
            //alert(bodyW+"==="+bodyH);
            if(bodyH > bodyW) {
                shuDiv.style.display = "block";
            } else {
                shuDiv.style.display = "none";
                cc.game.onStart = function(){
                    //移动设备逻辑
                    cc.view.adjustViewPort(true);
                    cc.view.setDesignResolutionSize(1136, 537, cc.ResolutionPolicy.FIXED_HEIGHT);
                    cc.view.resizeWithBrowserSize(true);

                    cc.LoaderScene.preload(g_resources,function(){
                        cc.director.runScene(new StartGame());
                    });
                };
                cc.game.run("gameCanvas");
                clearInterval(checkFirstLogin);
            }
        },100);
    } else {
        cc.game.onStart = function(){
            document.getElementById("bodyBgd").style.display = "block";
            var canvasDiv = document.getElementById("Cocos2dGameContainer");
            canvasDiv.style.top = (window.innerHeight-537)/2+"px";
            canvasDiv.style.zIndex="10";
            cc.LoaderScene.preload(g_resources,function(){
                cc.director.runScene(new StartGame());
            });
        };
        cc.game.run("gameCanvas");
    }
};