<?php if (!defined('THINK_PATH')) exit();?>﻿<!DOCTYPE html>
<html>
    <head>
        <title>登陆 - <?php echo C('site_title');?></title>
		<meta name="keywords" content="<?php echo C('keyword');?>" />
        <meta name="description" content="<?php echo C('content');?>" />
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
        <link href="<?php echo RES;?>/css/login.css" rel="stylesheet" media="screen" type="text/css" />
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
    </head>
    <body style="background: #fff;">
        <div id="banner">
            <div class="main">
				<form action="<?php echo U('Users/checklogin');?>" method="post" class="login">
                    <div id="loginbox">
                        <input type="hidden" name="dopost" value="login" />
                        <input type="hidden" name="from" value="index" />
                        <div id="logintitle">登录</div>
                        <div id="loginname"><span class="icon"><i class="login1"></i></span><input class="iconinput inputbox1" name="username" type="text" value="" placeholder="云微账号" /></div>
                        <div id="loginpassword"><span class="icon"><i class="login2"></i></span><input class="iconinput inputbox2" name="password" type="password" value="" placeholder="云微密码" /></div>
                        <div id="loginbtn"><input type="submit" value="登录" /></div>
                        <a href="<?php echo U('Index/reg');?>" id="regbtn">注册</a>
                    </div>
                </form>
            </div>            
        </div>
        <div class="linebox">
            <div class="linemain">
                <div id="arc1">
                    <div class="arc_title">自定义菜单--打造最便捷的微信内置APP</div>
                    <div class="arc_info">云微提供微信公众号自定义菜单管理功能，用户无需再通过输入关键词触发回复，直接点击菜单就可以看相关的内容，云微可与企业原有Wap进行打通，复用企业APP原有功能，同时可定制个性化功能、使用HTML5新技术进行无限拓展，帮助企业打造最便捷、易推广的微信内置APP，此功能如果结合微信3G网站可以使您的公众号用户体验更好，带给粉丝不一样的感受。</div>
                    
                </div>
                <div id="img1"></div>
            </div>
        </div>
        <div class="linebox" style="background: #f3f3f3;">
            <div class="linemain">
                <div id="img2"></div>
                <div id="arc2">
                    <div class="arc_title">微官网--快速帮用户打造超炫微信移动网站</div>
                    <div class="arc_info">微官网是指将企业信息、服务、活动等内容通过微信网页的方式进行表现，用户只要通过简单的设置，就能快速生成属于您自己的微信3G网站，并且有各种精美模板，供您选择，还有自定义模版，可以设计出自己的风格，不但提高了信息量，也使信息的展现更加赏心悦目，进一步提高用户体验。</div>
                    
                </div>                
            </div>
        </div>
        <div class="linebox">
            <div class="linemain">
                <div id="arc3">
                    <div class="arc_title">会员卡--移动时代的社会化会员管理平台</div>
                    <div class="arc_info">微信会员卡通过在微信内植入会员卡，基于全球6亿微信用户，帮助企业建立集品牌推广、会员管理、营销活动、统计报表于一体的微信会员管理平台。清晰记录企业用户的消费行为并进行数据分析；还可根据用户特征进行精细分类，从而实现各种模式的精准营销。</div>
                    
                </div>
                <div id="img3"></div>
            </div>
        </div>
        <div class="linebox" style="background: #f3f3f3;">
            <div class="linemain">
                <div id="img4"></div>
                <div id="arc4">
                    <div class="arc_title">刮刮乐--帮助商家发行自己品牌的福利彩票</div>
                    <div class="arc_info">云微率先将传统的福利彩票刮刮乐搬到网上，通过刮刮卡的形式与微信系统有机结合，极大地提高了商家的微信营销效果。用户只需“刮”掉手机屏幕上的虚拟奖区覆膜，即可看到是否中奖，同时商家可以在云微后台自主设置中奖概率和对应奖品。</div>
                    
                </div>                
            </div>
        </div>
        <div class="linebox">
            <div class="linemain">
                <div id="arc5">
                    <div class="arc_title">大转盘--帮助商家发布自己品牌的营销游戏</div>
                    <div class="arc_info">云微率先将传统游戏中得大转盘嵌入到微信系统中，功能与刮刮乐类似，商家可以在云微后台自主设置中奖概率及对应奖品。大转盘的好处在于极具互动趣味性，奖品可以设置成跟商家品牌相关的小礼品，提升品牌形象。每日都有抽奖机会，增强客户粘性，提高营销效果。</div>
                    
                </div>
                <div id="img5"></div>
            </div>
        </div>
        <div class="linebox" style="background: #f3f3f3;">
            <div class="linemain">
                <div id="img6"></div>
                <div id="arc6">
                    <div class="arc_title">优惠券--以最低的成本吸引潜在客户到店消费</div>
                    <div class="arc_info">优惠券是传统企业用到最多的一种营销方式，通过发放优惠券的方式吸引潜在客户到店消费。云微优惠券完全模拟传统优惠券的功能，商家可以轻松定制自己品牌的点子优惠券，通过拥有6亿用户的微信平台海量发放优惠券，不但不易遗失，而且极大地节省了优惠券的发放成本。</div>
                    
                </div>                
            </div>
        </div>
        <div class="linebox">
            <div class="linemain">
                <div id="arc7">
                    <div class="arc_title">360°全景--房产旅游微信营销方案“互动漫游，身临其境”</div>
                    <div class="arc_info">360全景是云微新开发的一种增值服务，该功能一经上市便受到商家热捧。全景的主要特点是“互动漫游，身临其境”。商家可以通过全景功能制作店铺的三维实景漫游，不同于传统的照片和视频，全景不但可以对店铺实现360°效果展示，还可以嵌入各种多媒体，多用于旅游，房产，汽车等行业。</div>
                    
                </div>
                <div id="img7"></div>
            </div>
        </div>
        <div class="linebox" style="background: #f3f3f3;">
            <div class="linemain">
                <div id="img8"></div>
                <div id="arc8">
                    <div class="arc_title">微服务——超强扩展功能全方位营销解决方案</div>
                    <div class="arc_info">有小黄鸡陪聊加强版510万数据，过滤了广告和一些敏感词汇。 还有天气查询 ，手机查询，邮编查询，快递查询（支持160家快递公司），身份证查询，人品计算，翻译，字典，百科（全网数据），音乐80.1万 ，笑话5万条，小黄鸡陪聊510万条，诗词23万首，诗句 225万，成语5万，谜语5万，解梦3万，糗事55万，公交线路4万，火车线路4500，机器人学习功能等等.....</div>
                    
                </div>                
            </div>
        </div>
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