<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<!-- saved from url=(0079)http://www.apiwx.com/wxapi.php?ac=cate18&tid=650&c=o7MB9jtoUbIfrW2CrrmyPhRO9v7s -->
<html xmlns="http://www.w3.org/1999/xhtml"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

<title><?php echo ($tpl['wxname']); ?></title>
<!--<base href="http://www.quweixin.cn/">--><base href=".">
<meta name="viewport" content="width=device-width,height=device-height,inital-scale=1.0,maximum-scale=1.0,user-scalable=no;">
<meta name="apple-mobile-web-app-capable" content="yes">
<meta name="apple-mobile-web-app-status-bar-style" content="black">
<meta name="format-detection" content="telephone=no">
<meta charset="utf-8">

<link rel="stylesheet" href="<?php echo RES;?>/css/117/idangerous.swiper.css">
<link href="<?php echo RES;?>/css/117/iscroll.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" href="<?php echo RES;?>/css/117/plugmenu.css">
<link href="<?php echo RES;?>/css/117/cate18_.css" rel="stylesheet" type="text/css">
<style>
body
{
background:url(<?php if($homeInfo["homeurl"] != false): echo ($homeInfo["homeurl"]); endif; ?>) no-repeat;
}
 #cate15 .mainmenu li:nth-child(10n+1) a{
        background-color:rgba(255, 152, 0, 0.46);
}
#cate15 .mainmenu li:nth-child(10n+2) a{
        background-color:rgba(255, 51, 0, 0.46);
}
#cate15 .mainmenu li:nth-child(10n+3) a{
        background-color:rgba(255, 254, 0, 0.46);
}
#cate15 .mainmenu li:nth-child(10n+4) a{
        background-color:rgba(121, 255, 0, 0.46);/*rgb颜色及透明度0.46，可以自行调整*/
}
#cate15 .mainmenu li:nth-child(10n+5) a{
        background-color: rgba(0, 192, 255, 0.46);
}
#cate15 .mainmenu li:nth-child(10n+6) a{
        background-color: rgba(206, 0, 255, 0.46);
}
#cate15 .mainmenu li:nth-child(10n+7) a{
        background-color: rgba(113, 0, 255, 0.46);
}
#cate15 .mainmenu li:nth-child(10n+8) a{
        background-color: rgba(255, 0, 211, 0.46);
}
#cate15 .mainmenu li:nth-child(10n+9) a{
        background-color: rgba(255, 101, 0, 0.46);
}
#cate15 .mainmenu li:nth-child(10n+10) a{
        background-color: rgba(255, 152, 0, 0.46);
} 
#cate15 .mainmenu {
    bottom: 60px;  /*60px表示距离底部60个像素，可以自行调整*/
} .themeStyle{background:#E00B19 !important; background-color:#E00B19 !important; }  
</style>

<script src="<?php echo RES;?>/css/117/iscroll.js" type="text/javascript"></script>
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
 
</head>
<?php echo ($bjdh); ?>
<body id="cate18" style="">
<div id="insert1" style="z-index:10000; position:fixed; top:20px;"></div>

<style>
.btn_music {
display: inline-block;
width: 35px;
height: 35px;
background: url('<?php echo RES;?>/css/117/play.png') no-repeat center center;
background-size: 100% auto;
position: absolute;
z-index: 100;
left: 15px;
top: 20px;
}
.btn_music.on {
    background-image: url("<?php echo RES;?>/css/117/stop.png");
}

</style>
<script src="<?php echo RES;?>/css/117/audio.js" type="text/javascript"></script>
 <script>
window.addEventListener("DOMContentLoaded", function(){
playbox.init("playbox");
}, false);
</script>
        
<span id="playbox" class="btn_music" onclick="playbox.init(this).play();"><audio src="<?php echo ($bjmp3); ?>" loop="" id="audio"></audio></span>
<div class="banner">
<div id="wrapper" style="overflow: hidden; ">
<div id="scroller" style="width: 3360px; -webkit-transition: -webkit-transform 0ms; -webkit-transform-origin: 0px 0px; -webkit-transform: translate3d(-1680px, 0px, 0px) scale(1); ">
<ul id="thelist">
               
<li><p>1</p>				<?php if(is_array($flash)): $i = 0; $__LIST__ = $flash;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$so): $mod = ($i % 2 );++$i;?><li><p><?php echo ($so["info"]); ?></p><a href="<?php echo ($so["url"]); ?>"><img src="<?php echo ($so["img"]); ?>" /></a></li><?php endforeach; endif; else: echo "" ;endif; ?></li>
 

</ul>
</div>
</div>
    <div id="nav">
<div id="prev" onclick="myScroll.scrollToPage(&#39;prev&#39;, 0,400,2);return false">← prev</div>
<ul id="indicator">
            
			<?php if(is_array($flash)): $i = 0; $__LIST__ = $flash;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$so): $mod = ($i % 2 );++$i;?><li   <?php if($i == 1): ?>class="active"<?php endif; ?>  ><?php echo ($i); ?></li><?php endforeach; endif; else: echo "" ;endif; ?>
 
</ul>
<div id="next" onclick="myScroll.scrollToPage(&#39;next&#39;, 0,400,2);return false">next →</div>
</div>
    <div class="clr"></div>
</div>
 

<div class="device">
    <a class="arrow-left" href="http://www.apiwx.com/#"></a> 
    <a class="arrow-right" href="http://www.apiwx.com/#"></a>
    <div class="swiper-container" style="cursor: -webkit-grab; ">
      <div class="swiper-wrapper" style="width: 6720px; height: 185px; -webkit-transform: translate3d(-1680px, 0px, 0px); -webkit-transition: 0s; "><div class="swiper-slide" style="width: 1680px; height: 185px; ">
            <div class="content-slide">
			<?php if(is_array($info)): $i = 0; $__LIST__ = $info;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><a href="<?php if($vo['url'] == ''): echo U('Wap/Index/lists',array('classid'=>$vo['id'],'token'=>$vo['token'])); else: echo ($vo["url"]); endif; ?>">
                    <p class="ico"><img src="<?php echo ($vo["img"]); ?>" /></p>
                    <p class="title"><?php echo ($vo["name"]); ?></p>
                </a><?php endforeach; endif; else: echo "" ;endif; ?>
      
                     </div>
    		</div></div>
  <div class="pagination"><span class="swiper-pagination-switch swiper-visible-switch swiper-active-switch"></span><span class="swiper-pagination-switch"></span></div>

</div>

<script src="<?php echo RES;?>/css/117/jquery-1.10.1.min.js" type="text/javascript"></script>
  <script src="<?php echo RES;?>/css/117/idangerous.swiper-2.1.min.js" type="text/javascript"></script>
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
 
 </div>
 
<div style="display:none"><?php echo ($homeInfo["tongji"]); ?> </div>
  
 
<?php if($iscopyright == 1): echo ($homeInfo["copyright"]); ?>
<?php else: ?>
<?php echo ($siteCopyright); endif; ?>

</body></html>