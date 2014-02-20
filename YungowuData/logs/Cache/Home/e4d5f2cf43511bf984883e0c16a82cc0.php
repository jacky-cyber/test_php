<?php if (!defined('THINK_PATH')) exit();?>﻿<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html;charset=utf-8"/>
<title>功能介绍-<?php echo C('site_title');?></title>
<meta name="keywords" content="<?php echo C('keyword');?>" />
<meta name="description"  content="<?php echo C('content');?>" />
<link rel="stylesheet" type="text/css" href="<?php echo RES;?>/css/index.css" media="all" />
<script src="<?php echo RES;?>/js/html5.js"></script>
<script type="text/javascript" src="<?php echo RES;?>/js/jQuery.js"></script>
<script type="text/javascript" src="<?php echo RES;?>/js/weimob-index.js"></script>
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
<div class="Public-content clearfix">
	   <div class="Public">
		<h1 class="Public-h1">功能介绍</h1>
		<div class="Public-box clearfix">
			<ul id="nav_lis" class="case-nav left">
				<li data-index="0"  data-hash="#site">微官网</li>
				<li data-index="1" data-hash="#member">微会员</li>
				<li data-index="2" data-hash="#activities">微活动</li>
				<li data-index="3" data-hash="#push">微推送</li>
				<li data-index="4" data-hash="#services">微服务</li>
				<li data-index="5" data-hash="#message">微留言</li>
				<li data-index="6" data-hash="#photo">微相册</li>
				<li data-index="7" data-hash="#menu">自定义菜单</li>
				<li data-index="9" data-hash="#addup">微统计</li>
				<li data-index="10" data-hash="#estate">微房产</li>
				<li data-index="11" data-hash="#car">微汽车</li>
				<li data-index="12" data-hash="#wedd">微喜帖</li>
				<li data-index="13" data-hash="#medical">微医疗</li>
				<li data-index="14" data-hash="#hotels">微酒店</li>
				<li data-index="15" data-hash="#lbs">LBS图文回复</li>
                <li data-index="16" data-hash="#cate">微餐饮</li>
				<li data-index="17" data-hash="#vshop">微商城</li>
                <li data-index="18" data-hash="#reser">微预约</li>
			</ul>
			<div id="nav_uls">
				<div data-index="0" data-on class="weimob_guide right">
					<div class="wm_case_list">
						<h2 class="guideh2">微官网:快速帮用户打造超炫微信移动网站</h2>
						<p class="guideimg"><img src="<?php echo RES;?>/images/weimob1.jpg" /></p>
						<p class="guidep">云微全国首创微信3G网站，用户只要通过简单的设置，就能快速生成属于您自己的微信3G网站，并且有各种精美模板，可供选择，还有自定义模版，可以设计出自己的风格，让您的粉丝有种惊艳的感觉。在云微官方微信号输入"首页"体验微信3G网站。</p>
					</div>
				</div>
				<div data-index="1" class="weimob_guide right">
					<div class="wm_case_list">
						<h2 class="guideh2">微信会员卡:微时代会员卡，方便携带，永不挂失</h2>
						<p class="guideimg"><img src="<?php echo RES;?>/images/weimob2.jpg" /></p>
						<p class="guidep">微信会员卡通过在微信内植入会员卡，基于全国4亿微信用户，帮助企业建立集品牌推广、会员管理、营销活动、统计报表于一体的微信会员管理平台。清晰记录企业用户的消费行为并进行数据分析；还可根据用户特征进行精细分类，从而实现各种模式的精准营销。</p>
					</div>
				</div>
				<div data-index="2" class="weimob_guide right">
					<div class="wm_case_list">
						<h2 class="guideh2">微活动——优惠券+刮刮卡+大转盘+微投票+一战到底的会员再营销</h2>
						<p  class="guideimg"><img src="<?php echo RES;?>/images/weimob3.jpg" /></p>
						<p  class="guidep">我们将利用微信的强交互性，让您通过对互动流程、环节和方式的设计，运用各种设计活动从而实现与用户的互动交流,，微整合系统互动符合微信娱乐性强的产品本质，云微内置了专为商家定制的“商家营销服务模块”，包括优惠券推广模块、幸运大转盘推广模块、刮刮卡抽奖模块、微投票、一战到底等功能模块，商家通过发起营销活动，对已有客户进行再营销，通过不断更新补充主题，用户可以反复参与，并可带动周边朋友一起分享，从而形成极强的口碑营销效果。</p>
					</div>
				</div>
				<div data-index="3" class="weimob_guide right">
					<div class="wm_case_list">
						<h2 class="guideh2">微推送（LSP）：微信附近的人——精准营销</h2>
						<p  class="guideimg"><img src="<?php echo RES;?>/images/weimob4.jpg" /></p>
						<p  class="guidep">Location Surround Push(基于附近的人的消息推送)微信中基于LBS(基于位置的服务)的功能插件“查看附近的人”便可以使更多陌生人看到这种强制性广告。 用户点击“查看附近的人”后，可以根据自己的地理位置查找到周围的微信用户。在这些附近的微信用户中，除了显示用户姓名等基本信息外，还会显示用户签名档的内容。所以用户可以利用这个免费的广告位为自己的产品打广告。
							营销人员在人流最旺盛的地方后台24小时运行微信，如果“查看附近的人”使用者足够多，这个广告效果也会不断随着微信用户数量的上升，可能这个简单的签名栏也会变成会移动的“黄金广告位”。</p>
					</div>
				</div>
				<div data-index="4" class="weimob_guide right">
					<div class="wm_case_list">
						<h2 class="guideh2">微服务——微信企业应用与电子商务</h2>
						<p class="guideimg"><img src="<?php echo RES;?>/images/weimob5.jpg" /></p>
						<p class="guidep">有小黄鸡陪聊加强版510万数据，过滤了广告和一些敏感词汇。 还有天气查询 ，手机查询，邮编查询，快递查询（支持160家快递公司），身份证查询，人品计算，翻译，字典，百科（全网数据），音乐80.1万 ，笑话5万条，小黄鸡陪聊510万条，诗词23万首，诗句 225万，成语5万，谜语5万，解梦3万，糗事55万，公交线路4万，火车线路4500，机器人学习功能等等......</p>
					</div>
				</div>
				<div data-index="5" class="weimob_guide right">
					<div class="wm_case_list">
						<h2 class="guideh2">微留言:用户的互动交流利器</h2>
						<p class="guideimg"><img src="<?php echo RES;?>/images/weimob6.jpg" /></p>
						<p class="guidep">“微留言”是一种能为商家带来巨大的社会化流量的功能，允许留言可以被分享于留言者的朋友圈、腾讯微博和发送给好友，这意味着留言可以被无数的粉丝分享，用户对商家进行实时且客观的评价，真实的社交环境保证了留言的客观性和有效性。“微留言”的使用商家只需做好产品和用户服务即可，随着口碑的传播，消费者将源源不断。</p>
					</div>
				</div>
				<div data-index="6" class="weimob_guide right">
					<div class="wm_case_list">
						<h2 class="guideh2">微相册:照片展现，让商品一览无余</h2>
						<p class="guideimg"><img src="<?php echo RES;?>/images/weimob7.jpg" /></p>
						<p class="guidep">微相册作为云微平台的一项主打基本功能，为云微用户提供图片的存储和展示服务，是基于图片兴趣分享的社区型产品。在微相册里，您可以方便的创建相册，轻松地发布您需要展示的照片，还可以拓展为商家开展活动的一种展现方式。</p>
					</div>
				</div>
				<div data-index="7" class="weimob_guide right">
					<div class="wm_case_list">
						<h2 class="guideh2">自定义菜单：各模块均可直接展现使用，随需求而定，随需要而链</h2>
						<p class="guideimg"><img src="<?php echo RES;?>/images/weimob8.jpg" /></p>
						<p class="guidep">云微提供微信公众号自定义菜单管理功能，用户无需再通过输入关键词触发回复，直接点击菜单就可以看相关的内容，云微可与企业原有Wap进行打通，复用企业APP原有功能，同时可定制个性化功能、使用HTML5新技术进行无限拓展，帮助企业打造最便捷、易推广的微信内置APP，此功能如果结合微信3G网站可以使您的公众号用户体验更好，带给粉丝不一样的感受。</p>
					</div>
				</div>
				<div data-index="9" class="weimob_guide right">
					<div class="wm_case_list">
						<h2 class="guideh2">微统计——实时数据统计，监控运营效果</h2>
						<p class="guideimg"><img src="<?php echo RES;?>/images/weimob10.jpg" /></p>
						<p class="guidep">云微后台可以实时统计微信公众号的粉丝关注情况和用户语音请求数，根据统计对相关推广营销活动效果及某些敏感因素对您的影响作出判断，并对相关市场行为作出相应调整，从一定程度上实现了对市场的监控与及时应对。</p>
					</div>
				</div>
				<div data-index="10" class="weimob_guide right">
					<div class="wm_case_list">
						<h2 class="guideh2">微房产:360度全景看房</h2>
						<p class="guideimg"><img src="<?php echo RES;?>/images/weimob11.jpg" /></p>
						<p class="guidep">微房产是利用云微平台打造的一款全新超炫酷的房产官方网站，其功能非常强大，包含了楼盘介绍、子楼盘管理、户型介绍及户型图、楼盘相册、房友印象以及专家点评等功能，更有360度全景看房超强大功能震撼登场！花几分钟时间即可打造微房产官网。</p>
					</div>
				</div>
				<div data-index="11" class="weimob_guide right">
					<div class="wm_case_list">
						<h2 class="guideh2">微汽车：预约试驾、预约保养、360度看车、车主关怀应有尽有！</h2>
						<p class="guideimg"><img src="<?php echo RES;?>/images/weimob12.jpg" /></p>
						<p class="guidep">微汽车采用云微平台进行汽车的销售管理、预约保养、预约试驾、保险计算、车贷计算、车型比较、违章查询、360度全景看车、车主关怀等功能，整个过程非常便捷，省时省力省心，并通过与云微平台有交互能力的手机客户端，快速便捷的实现了商家的销售管理与预约过程，同时也实现了客户无需进入4s店就能进行预约保养和试驾的功能。</p>
					</div>
				</div>
				<div data-index="12" class="weimob_guide right">
					<div class="wm_case_list">
						<h2 class="guideh2">微喜帖：颠覆传统方式，让庆典更时尚环保</h2>
						<p class="guideimg"><img src="<?php echo RES;?>/images/weimob13.jpg" /></p>
						<p class="guidep">微喜帖是针对结婚庆典而推出的一款行业产品，主要是为计划结婚的用户们，通过使用微喜帖应用来向亲朋好友传播自己即将结婚的动态，可以展现用户想要表达的话、结婚日期、地址、导航、接待电话，同时亲朋好友可以在微喜帖平台上提交赴宴通知、送上祝福，并且转发喜帖。</p>
					</div>
				</div>
				<div data-index="13" class="weimob_guide right">
					<div class="wm_case_list">
						<h2 class="guideh2">微医疗：互联网时代的医疗小助手</h2>
						<p class="guideimg"><img src="<?php echo RES;?>/images/weimob14.jpg" /></p>
						<p class="guidep">用户可通过云微平台实现在线挂号、内容设置、预约查询、预约统计的一整套服务体系，能够有效解决患者挂号难、排队累、就医不方便等一系列难题</p>
					</div>
				</div>
				<div data-index="14" class="weimob_guide right">
					<div class="wm_case_list">
						<h2  class="guideh2">微酒店：一键点击，轻松订房</h2>
						<p class="guideimg"><img src="<?php echo RES;?>/images/weimob15.jpg" /></p>
						<p class="guidep">1、消息管理：包含自动消息回复和功能性消息编辑功能，优化对用户的消息服务，提升用户体验。</p>
						<p class="guidep">2、门店管理：即对门店详情页面显示内容进行管理，且用户可直接一键导航或一键拨号。</p>
						<p class="guidep">3、用户管理：用户信息管理模块，给每个用户打上各种标签，为精准营销提供服务。</p>
						<p class="guidep">4、数据统计：各式各样的数据为后期运营提供重要帮助。</p>
						<p class="guidep">5、提供服务：用户直接可在公众账号进行预约房间、预约餐厅等操作。</p>
					</div>
				</div>
                <div data-index="15" class="weimob_guide right">
					<div class="wm_case_list">
						<h2 class="guideh2">LBS回复:LBS范围内精准的商家地理位置回复</h2>
							<p class="guideimg"><img src="<?php echo RES;?>/images/weimob16.jpg" /></p>
						<p class="guidep">LBS图文回复是由商家设置店铺位置，用户提交当前所在位置后，可以找到最近的商家店铺，并进行一键导航、一键拨号，如果店铺当前有进行的活动（如：优惠券、刮刮卡），也可把活动显示出来。</p>
					</div>
				</div>
				<div data-index="16" class="weimob_guide right">
					<div class="wm_case_list">
						<h2 class="guideh2">微餐饮——实时数据统计，监控运营效果</h2>
					
                        <p class="guideimg"><img src="<?php echo RES;?>/images/weimob17.jpg" /></p>
						<p class="guidep">云微后台可以实时统计微信公众号的粉丝关注情况和用户语音请求数，根据统计对相关推广营销活动效果及某些敏感因素对您的影响作出判断，并对相关市场行为作出相应调整，从一定程度上实现了对市场的监控与及时应对。</p>
					</div>
				</div>
				<div data-index="17" class="weimob_guide right">
					<div class="wm_case_list">
						<h2 class="guideh2">微商城：打造微信移动电商</h2>
						
                        <p class="guideimg"><img src="<?php echo RES;?>/images/weimob18.jpg" /></p>
						<p class="guidep">“微商城”（又名Vshop）是由上海晖硕信息科技有限公司推出的，一款基于移动互联网的商城应用服务产品，以时下最热门的互动应用微信为媒介，配合微信5.0微信支付功能，实现商家与客户的在线互动，即时推送最新商品信息给微信用户，实现微信在线的购物功能。
							其主要功能包括：支持商品管理、支持会员管理、支持购物车、支持商品分类管理、支持订单管理、支持店铺设置、支持支付方式管理、支持配送方式管理。</p>
					</div>
				</div>
				
                <div data-index="18" class="weimob_guide right">
					<div class="wm_case_list">
						<h2 class="guideh2">微预约：在线预约，云微帮您一键搞定</h2>
						<p class="guideimg"><img src="<?php echo RES;?>/images/weimob19.jpg" /></p>
						<p class="guidep">微预约是商家利用云微平台实现在线预约的一种服务，可以运用于汽车、房产、酒店、医疗、餐饮等一系列行业，给用户的出行办事、购物、消费带来了极大的便利！且操作简单，响应速度非常快，受到业界的一致好评！</p>
					</div>
				</div>
                
			</div>
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

<script>
	function feedbackSubmit(){
		var $data = {
			feedback: $('#feedback-text').val(),
			email: $('#feedback-input').val(),
			url: self.location.href
		};
		$.post('/site/feedback', $data, function(rs){
			alert(rs.error);
			if (200 == rs.code)
			{
				$('#feedback, #feedback_cover').toggleClass('on');
			}
		}, 'json');
	}
</script>
<script type="text/javascript">
		$(document).ready(function(){
		var hash=window.location.hash || "#site";
		if(hash){
			var lis=$("#nav_lis>li"),
				divs=$("#nav_uls>div");
			lis.each(function(index, v) {
				if(hash == v.getAttribute("data-hash")){
					v.className="hover";
					//.var divs = $("#nav_uls>div");
					for(var i=0,ci; ci = divs[i]; i++){
						if(index == ci.getAttribute("data-index")){
							$(ci).addClass("show");
						}else{
							$(ci).removeClass("show");
						}
					}
			
				}
			});
		}


	$("#nav_lis").on("mouseover", function(e){
			$(this).find("li").removeClass("hover");
			e.target.className = "hover";
			var index = e.target.getAttribute("data-index");
			//
			var divs = $("#nav_uls>div");
			for(var i=0,ci; ci = divs[i]; i++){
				if(index == ci.getAttribute("data-index")){
					$(ci).addClass("show");
				}else{
					$(ci).removeClass("show");
				}
			}

		});


	});
</script>
</body>
</html>