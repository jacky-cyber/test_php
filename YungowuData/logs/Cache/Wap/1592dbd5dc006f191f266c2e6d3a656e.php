<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<!-- saved from url=(0065)http://www.apiwx.com/wxapi.php?ac=cate17&tid=27194&c=fromUsername -->
<html xmlns="http://www.w3.org/1999/xhtml"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

<title><?php echo ($tpl['wxname']); ?></title>
<!--<base href="http://www.apiwx.com/">--><base href=".">
<meta name="viewport" content="width=device-width,height=device-height,inital-scale=1.0,maximum-scale=1.0,user-scalable=no;">
<meta name="apple-mobile-web-app-capable" content="yes">
<meta name="apple-mobile-web-app-status-bar-style" content="black">
<meta name="format-detection" content="telephone=no">
<meta charset="utf-8">

<link rel="stylesheet" href="<?php echo RES;?>/css/139/idangerous.swiper.css">
<link href="<?php echo RES;?>/css/139/iscroll.css" rel="stylesheet" type="text/css">

<link href="<?php echo RES;?>/css/139/cate17_.css" rel="stylesheet" type="text/css">
<style>
  
</style>

<script src="<?php echo RES;?>/css/139/iscroll.js" type="text/javascript"></script>
<script type="text/javascript">
var myScroll;

function loaded() {
myScroll = new iScroll('wrapper', {
snap: true,
momentum: false,
hScrollbar: false,
onScrollEnd: function () {
document.querySelector('#indicator > li.active').className = '';
document.querySelector('#indicator > li:nth-child(' + (this.currPageX+1) + ')').className = 'active';
}
 });
 
 
}

document.addEventListener('DOMContentLoaded', loaded, false);
</script>
 
</head><?php echo ($bjdh); ?>
<?php echo ($bjdh); ?>
<body id="cate17" style="">
<div id="insert1" style="z-index:10000; position:fixed; top:20px;"></div>
 

<style>
.btn_music {
display: inline-block;
width: 35px;
height: 35px;
background: url('<?php echo RES;?>/css/139/play.png') no-repeat center center;
background-size: 100% auto;
position: absolute;
z-index: 100;
left: 15px;
top: 20px;
}
.btn_music.on {
    background-image: url("<?php echo RES;?>/css/139/stop.png");
}

</style>
<script src="<?php echo RES;?>/css/139/audio.js" type="text/javascript"></script>
 <script>
window.addEventListener("DOMContentLoaded", function(){
playbox.init("playbox");
}, false);
</script>
        
<span id="playbox" class="btn_music" onclick="playbox.init(this).play();"><audio src="<?php echo ($bjmp3); ?>" loop="" id="audio"></audio></span>
<div class="mainbg"><img src="<?php if($homeInfo["homeurl"] != false): echo ($homeInfo["homeurl"]); else: echo RES;?>/css/139/NjIIyljf3Q.jpg<?php endif; ?> "></div>
 

<div class="device">
    <a class="arrow-left" href="#"></a> 
    <a class="arrow-right" href="#"></a>
    <div class="swiper-container">
      <div class="swiper-wrapper" >
<?php $ii=1; ?>
          <?php if(is_array($info)): $i = 0; $__LIST__ = $info;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i; if($ii==1){echo '<div class="swiper-slide">
            <div class="content-slide">';} ?>

	  

          <a href="<?php if($vo['url'] == ''): echo U('Wap/Index/lists',array('classid'=>$vo['id'],'token'=>$vo['token'])); else: echo ($vo["url"]); endif; ?>">
                    <p class="ico"><img src="<?php echo ($vo["img"]); ?>"></p>
                    <p class="title"><?php echo ($vo["name"]); ?></p>
                </a>
                 
				

	            
<?php if($ii==4){echo '</div>
      </div>	
	  ';} $ii=$ii+1; if($ii>4){$ii=1;} endforeach; endif; else: echo "" ;endif; ?>                   
<?php if($ii!=1){echo '</div>
      </div>	';} ?>
         
                            
                       
			
			</div>
    </div>
  </div>
  <div class="pagination"><span class="swiper-pagination-switch swiper-visible-switch swiper-active-switch"></span></div>





<script type="text/javascript">
 	        document.addEventListener('WeixinJSBridgeReady', function onBridgeReady() {
        window.shareData = {  
            "imgUrl": "<?php echo ($homeInfo["picurl"]); ?>", 
            "timeLineLink": window.location.href,
            "sendFriendLink": window.location.href,
            "weiboLink":window.location.href,
            "tTitle": "点击查看3G首页!",
            "tContent": "<?php echo ($homeInfo["info"]); ?>",
            "fTitle": "点击查看3G首页!",
            "fContent":"<?php echo ($homeInfo["info"]); ?>",
            "wContent": "<?php echo ($homeInfo["info"]); ?>" 
        };
        // 发送给好友
        WeixinJSBridge.on('menu:share:appmessage', function (argv) {
            WeixinJSBridge.invoke('sendAppMessage', { 
                "img_url": window.shareData.imgUrl,
                "img_width": "640",
                "img_height": "640",
                "link": window.shareData.sendFriendLink,
                "desc": window.shareData.fContent,
                "title": window.shareData.fTitle
            }, function (res) {
                _report('send_msg', res.err_msg);
            })
        });

        // 分享到朋友圈
        WeixinJSBridge.on('menu:share:timeline', function (argv) {
            WeixinJSBridge.invoke('shareTimeline', {
                "img_url": window.shareData.imgUrl,
                "img_width": "640",
                "img_height": "640",
                "link": window.shareData.timeLineLink,
                "desc": window.shareData.tContent,
                "title": window.shareData.tTitle
            }, function (res) {
                _report('timeline', res.err_msg);
            });
        });

        // 分享到微博
        WeixinJSBridge.on('menu:share:weibo', function (argv) {
            WeixinJSBridge.invoke('shareWeibo', {
                "content": window.shareData.wContent,
                "url": window.shareData.weiboLink,
            }, function (res) {
                _report('weibo', res.err_msg);
            });
        });
        }, false)
 
document.addEventListener('WeixinJSBridgeReady', function onBridgeReady() {
WeixinJSBridge.call('hideToolbar');
});
</script>


<script src="<?php echo RES;?>/css/139/jquery-1.10.1.min.js" type="text/javascript"></script>
  <script src="<?php echo RES;?>/css/139/idangerous.swiper-2.1.min.js" type="text/javascript"></script>
  <script>
  var mySwiper = new Swiper('.swiper-container',{
    pagination: '.pagination',
    loop:true,
    grabCursor: true,
    paginationClickable: true
  })
  $('.arrow-left').on('click', function(e){
    e.preventDefault()
    mySwiper.swipePrev()
  })
  $('.arrow-right').on('click', function(e){
    e.preventDefault()
    mySwiper.swipeNext()
  })
  </script>


<script>
var count = document.getElementById("thelist").getElementsByTagName("img").length;	

var count2 = document.getElementsByClassName("menuimg").length;
for(i=0;i<count;i++){
 document.getElementById("thelist").getElementsByTagName("img").item(i).style.cssText = " width:"+document.body.clientWidth+"px";

}
document.getElementById("scroller").style.cssText = " width:"+document.body.clientWidth*count+"px";

 setInterval(function(){
myScroll.scrollToPage('next', 0,400,count);
},3500 );
window.onresize = function(){ 
for(i=0;i<count;i++){
document.getElementById("thelist").getElementsByTagName("img").item(i).style.cssText = " width:"+document.body.clientWidth+"px";

}
 document.getElementById("scroller").style.cssText = " width:"+document.body.clientWidth*count+"px";
} 


</script>
 
 
 
<div style="display:none"><?php echo ($tongji); ?></div>

<div class="copyright"> 
<?php if($iscopyright == 1): echo ($homeInfo["copyright"]); ?>
<?php else: ?>
<?php echo ($siteCopyright); endif; ?>
</div>
</body></html>