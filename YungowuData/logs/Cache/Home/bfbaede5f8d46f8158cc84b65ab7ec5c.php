<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html;charset=utf-8"/>
<title>帮助中心－如何为微信公众号配置接口？ 微信帮手 微信公众账号-<?php echo C('site_name');?></title>
<meta name="keywords" content="<?php echo C('site_name');?>,微信帮手,微信公众账号,微信公众平台,微信公众账号开发,微信二次开发,微信接口开发,微信托管服务,微信营销,微信公众平台接口开发"/>
<meta name="description" content="<?php echo C('content');?>"/>
<link rel="stylesheet" type="text/css" href="<?php echo RES;?>/css/help.css"/>
<link rel="stylesheet" type="text/css" href="<?php echo RES;?>/css/index.css" media="all" />
<script type="text/javascript" src="<?php echo RES;?>/js/jquery.js"></script>
    <link rel="stylesheet" type="text/css" href="<?php echo RES;?>/css/mk_z.css" /> 
	<link rel="stylesheet" type="text/css" href="<?php echo RES;?>/css/public.css" /> 
    <link rel="shortcut icon" href="<?php echo RES;?>/css/img/favicon.ico" />
</head>

<body>
    
    <!--头部-->
    <div class="mk_z_header">
        <div class="mk_z_header_con fix">
            <h1 class="f_l">
                <a href="/" class="f_l" style="font-size: 50px;"><img src="<?php echo RES;?>/images/logo.jpg" /></a>
            </h1>
			<div class="mk_z_header_right">
                <div class="mk_z_header_phone"><h2><?php echo C('site_hm');?></h2></div>
            <div style=" float:left; margin-top:17px;margin-right:100px;">
            <a target="_blank" href="http://sighttp.qq.com/authd?IDKEY=6c1d4ae7a16a42ff4f6b440ece113f84e439663f8d49a85c"><img border="0"  src="http://wpa.qq.com/imgd?IDKEY=6c1d4ae7a16a42ff4f6b440ece113f84e439663f8d49a85c&pic=41" alt="点击这里给我发消息" title="点击这里给我发消息"/></a>
            </div>
			<div style=" float:left; margin-top:20px;margin-right:100px;">
               <?php if($_SESSION[uid]==false): ?><a href="<?php echo U('Index/login');?>">登录</a>&nbsp;&nbsp;|&nbsp;&nbsp;
			<a href="<?php echo U('Index/reg');?>">注册</a>
			<?php else: ?>
			您好,<a href="/#" hidefocus="true"  ><span style="color:red"><?php echo (session('uname')); ?></span></a>（uid:<?php echo (session('uid')); ?>）
			| <a href="/#" onClick="Javascript:window.open('<?php echo U('System/Admin/logout');?>','_blank')" >退出</a><?php endif; ?>
                </div>
            </div>
        </div>
    </div>
    <div class="mk_z_banner_rel">
        <div class="mk_z_banner_abs">
            <a href="/" class="">首页</a> 
            <a href="<?php echo U('Home/Index/guide');?>" class="" >产品介绍</a> 
            <a href="<?php echo U('Home/Index/price');?>" class="" >资费说明</a> 
            <a href="<?php echo U('Home/Index/hezuo');?>" class="" >渠道合作</a> 
			<a href="<?php echo U('Home/Index/common');?>" class="" >成功案例</a> 
            <a href="<?php echo U('Home/Index/about');?>" class="" >关于我们</a> 
            <a href="<?php echo U('User/Index/index');?>" class="" >管理中心</a> 
            <a href="<?php echo U('Home/Index/help');?>" class="" >帮助中心</a>  
        </div>
    </div>

    <!--头部-->
		<div id="header">
        </div>
        <div class="banner nbanner"></div>
<div class="main">
   <div class="pos"> 当前位置&raquo;<a href="<?php echo C('site_url');?> "><?php echo C('site_name');?></a> &raquo; <a href="">帮助中心</a></div>
<style type="text/css">
.normalTitle {
    border-bottom: 1px solid #D7DDE6;
    border-radius: 10px 10px 0 0;
    padding: 20px;
    text-shadow: 0 1px 1px #FFFFFF;
}
.normalTitle h2, .panelTitle h2, .processTitle h2 {
    font-size: 20px;
    font-weight: bold;
}
.content {
 margin: 0 auto;
    text-align: left;
    width: 707px;
}
.article, .intro, .download, .document, .developer {
margin:40px 0px;

background:#f5f6f7;
box-shadow:0px 1px 3px #ccc;
}
.section {
padding:0 0 20px 0;
margin:0 0 20px 0;
border-bottom:1px solid #eee;
overflow: hidden;
}
.lastSection {
border:none;
margin-bottom:0px;
}
.normalTitle {
border-bottom:1px solid #d7dde6;
border-radius:10px 10px 0 0;
padding:20px 40px;
text-shadow:0 1px 1px #fff;
}
.normalContent {
background:#fff;/*border-radius:0 0 10px 10px;*/
padding:40px;
}
.normalTitle h2, .panelTitle h2, .processTitle h2 {
font-size:20px;
font-weight:bold;
}
.green{ color:#090}
.red{ color: #F00}
.collapsible {
    background: none repeat scroll 0 0 #FFFFFF;
    padding: 20px;
}
.CollapsiblePanel {
    margin-bottom: 10px;
    width: 870px;
}
.CollapsiblePanelTab {
    background: url(style/images/img/arrow_unclick.png) no-repeat scroll 820px 20px #FFFFFF;
    border: 1px solid #DEDEDE;
    border-radius: 3px 3px 3px 3px;
    color: #626B8A;
    cursor: pointer;
    font-size: 18px;
    padding: 20px 40px 20px 20px;
    text-shadow: 0 1px 0 white;
}
.CollapsiblePanelTab.hover {
    background: url(style/images/img/arrow_unclick.png) no-repeat scroll 820px 20px #D7DDE6;
border: 1px solid #C1C9D4;
}
.CollapsiblePanelTab.clicked {
    background: url(style/images/img/arrow_click.png) no-repeat scroll 820px 20px #D7DDE6;
border: 1px solid #C1C9D4;
}
.CollapsiblePanelContent {
    display: none;
    overflow: hidden;
}
.CollapsiblePanelContent .normalContent {
    padding: 20px 20px 0;
}
</style>
<div class="content" style="width:985px;">
<div class="document" style="margin-top:0px;">
            <div class="normalTitle"><h2>如何为微信公众号配置接口？</h2></div>
                <div class="collapsible">
<div class="section lastSection">
<p>请务必认真阅读以下2步内容，才能更有效的完成配置工作，有疑问的请联系QQ：<?php echo C('site_qq');?>提问。<br/><?php if($_GET['token'] != ''): ?>你的接口URL是：<font color="red"><?php echo C('site_url');?>/index.php/api/<?php echo $_GET['token']; ?></font><br>若失败请用如下URL：<font color="red"><?php echo C('site_url');?>/index.php?g=Home&m=Weixin&a=index&token=<?php echo $_GET['token']; ?></font><br>您的token是：<font color="red"><?php echo $_GET['token']; ?></font><?php endif; ?></p>
</div>
                <div id="CollapsiblePanel2" class="CollapsiblePanel">
                    <div class="CollapsiblePanelTab clicked">第一步、在<?php echo C('site_name');?>绑定你的微信公众号。<span></span></div>
                    <div style="" class="">
                        <div class="articleContent catalogHome normalContent">
                            <div class="section lastSection">
                                <p>1、注册并登录<a href="<?php echo U('Index/login');?>"><?php echo C('site_name');?>接口平台</a></p>
                                <p>2、添加公众号 → 功能管理 → 勾选要开启的功能</p>									
								<p><img src="<?php echo STATICS;?>/help/help01.jpg" width="790px"></p>
								<p><img src="<?php echo STATICS;?>/help/help0.jpg" width="790px"></p>
                            </div>
                        </div>
                    </div>                        
                </div>
<div id="CollapsiblePanel3" class="CollapsiblePanel">
                        <div class="CollapsiblePanelTab clicked">第二步、到微信公众平台设置接口。<span></span></div>
                        <div style="" class="">
                            <div class="articleContent catalogHome normalContent">
                                <div class="section lastSection">
                                   <div class="section lastSection">
                                    <p>1、登录 <a href="http://mp.weixin.qq.com/">微信公众平台</a>（<a href="http://mp.weixin.qq.com/">http://mp.weixin.qq.com/</a>），进行身份认证，填写信息，提交身份证。</p>
                                    <p>认证后，点击高级功能 → 进入开发模式</p><br>
                                    <p><img src="<?php echo STATICS;?>/help/help002.jpg" width="790px"></p><br>
									<p>2、点击"成为开发者"按钮</p>
									<p><img src="<?php echo STATICS;?>/help/help003.jpg" width="790px"></p><br>
									<p>3、填写接口配置信息</p>
									<?php if($_GET['token'] == ''): ?><p>比如你<?php echo C('site_name');?>平台上的地址是<?php echo C('site_url');?>/index.php/api/demo</p>
									<p>那么URL就是<?php echo C('site_url');?>/INDEX.PHP/api/demo</p>
									<?php else: ?>
									<p>你的URL是 <font color="red"><?php echo C('site_url');?>/index.php/api/<?php echo $_GET['token']; ?></font></p><?php endif; ?>
									<p>Token填写 <font color="red"><?php echo $_GET['token']; ?></font></p>
									<p><img src="<?php echo STATICS;?>/help/help004.jpg" width="790px"></p><br>
									<p>4、确认开启</p>
									<p>5、在手机上用微信给你的公众号输入"帮助"，测试你的接口是否配置正常！</p><br>									
                                </div>
                              
                            </div>
                        </div>
                        
                    </div>
                </div>
            </div>
    </div>
    </div>
<!--结束-->
</div>
<script type="text/javascript">try{Dd('webpage_7').className='left_menu_on';}catch(e){}</script>
 <!--底部 -->
    
<div class="mk_z_footer">
        <div class="mk_z_footer_link">
            <a href="<?php echo U('Home/Index/about');?>" target="_blank">关于我们</a> &nbsp;|&nbsp;
			<a href="<?php echo U('Index/reg');?>" target="_blank">申请入驻</a>&nbsp;|&nbsp;
            <a href="<?php echo U('Home/Index/guide');?>" target="_blank">产品介绍</a> &nbsp;|&nbsp;
            <a href="http://wpa.qq.com/msgrd?v=3&uin=507642401&site=qq&menu=yes" target="_blank">购买源码</a>&nbsp;|&nbsp;
           
            <a href="<?php echo U('Index/login');?>"  target="_blank" >企业登录</a>
        </div>
        <div class="">&nbsp;联系电话：<?php echo C('site_hm');?>&nbsp;&nbsp;&nbsp;邮箱：<?php echo C('site_email');?> </div>
        <div class=""> Copyright<span class="font_arial"> © </span> 2013 <?php echo C('site_name');?> <?php echo C('site_url');?>. All Rights Reserved.<?php echo C('ipc');?>&nbsp; <script src="http://s17.cnzz.com/stat.php?id=5761792&web_id=5761792" language="JavaScript"></script>

  </div>

</div>
<div class="erwei" title="微信扫一扫">
	<span class="hudongzhushou">官方微信</span>
	<div class="erwei_big" style="display: none;">
		<p>扫一扫，关注云微官方微信，体验智能服务</p>
	</div>
</div>
<script type="text/javascript">
    $("#wxbqusetion").click(function () {
        $("#Suggestion").modal("show");
        $("#Suggestion").attr("sta", "show");
    });
    $("#wxbqusetion").mouseenter(function () {
        document.getElementById("img").src = "images/feedbackhover.png";
 //       $("#img").css('src', 'images/feedbackhover.png');
    });
    $("#wxbqusetion").mouseleave(function () {
        document.getElementById("img").src = "<?php echo RES;?>/images/feedback.png";
       // $("#img").css("src", "<?php echo RES;?>/images/feedback.png");
    });
    $(document).ready(function () {
        var erwei_time = null;
        $(".erwei").hover(function () {
            $(".erwei_big").show();
        }).mouseleave(function () {
            erwei_time = setTimeout(function () {
                $(".erwei_big").hide();
            }, 1000);
        });
        $(".erwei_big").mouseenter(function () {
            if (erwei_time) {
                clearTimeout(erwei_time);
            }
        }).mouseleave(function () {
            erwei_time = setTimeout(function () {
                $(".erwei_big").hide();
            }, 1000);
        });
    });
</script>
<!--公告信息-->
	<div id="notice_mask"></div>
	<div id="notice_message" style="position: absolute; left: 373.5px; top: 20%;">
		<div class="title">公 告<a onClick="javascript:jQuery('#notice_mask').hide(),jQuery('#notice_message').hide();">×</a></div>
		<div class="content">
			<pre style="white-space:pre-wrap;"><strong>尊敬的云微用户：</strong><br />
&nbsp; &nbsp; &nbsp; 2013的最后一天，这样的年终惊喜是不是让您们都手舞足蹈了？不要太兴奋哦！云微得知后面还有更精彩的，准备好迎接2014年更多更牛的惊喜吧！在此云微及全体员工祝贺大家马年“马上有一切”！
<p>
	<img src="<?php echo RES;?>/images/20131231152720_66877.jpg" alt="" /> 
</p>
<div style="text-align:right;">
	<span style="line-height:1.5;">云微</span> 
</div>
<div style="text-align:right;">
	<span style="line-height:1.5;">2013-12-31</span> 
</div>
<div>
	<br />
</div></pre>
		</div>
	</div>

<script type="text/javascript">
	$(document).ready(function(){
		$('#notice_mask').click(function(){
			$('#notice_mask').hide();
			$('#notice_qrcode').hide();
			$('#notice_message').hide();
		});

		$(window).resize(function(){
			$('#notice_qrcode').css({
				position:'absolute',
				left: ($(window).width() - $('#notice_qrcode').outerWidth())/2,
				top: ($(window).height() - $('#notice_qrcode').outerHeight())/2
			});

			$('#notice_message').css({
				position:'absolute',
				left: ($(window).width() - $('#notice_message').outerWidth())/2,
				top: ($(window).height() - $('#notice_message').outerHeight())/2
			});
		});
	});
</script>
    <!--底部 -->
</body>
</html>