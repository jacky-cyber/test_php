<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html;charset=utf-8"/>
<title>资费说明－<?php echo C('site_title');?></title>
<meta name="keywords" content="YunGoWu 微信帮手 微信公众账号 微信公众平台 微信公众账号开发 微信二次开发 微信接口开发 微信托管服务 微信营销 微信公众平台接口开发"/>
<meta name="description" content="微信公众平台接口开发、托管、营销活动、二次开发"/>
<link rel="stylesheet" type="text/css" href="<?php echo RES;?>/css/price.css"/>
<link rel="stylesheet" type="text/css" href="<?php echo RES;?>/css/index.css" media="all" />
<script src="<?php echo RES;?>/js/jquery.js"></script>
<script src="<?php echo RES;?>/js/price.js"></script>
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
<style type="text/css">
body{
	background-image:url("<?php echo RES;?>/images/img/blue.png")
 }
 
 .over_flort {
	clear: both;
}

.warpper {
	background-color:#FFFFFF;
	padding:0 10px;
}

.warpper p{
	font-family: "微软雅黑";
	margin:0;
}

.warpper .war_top {
	background-color: #67ad03;
	border-top-width: 4px;
	border-top-style: solid;
	border-top-color: #67ad03;
	width: 99.6%;
	height: 46px;
}

.warpper .war_top ul{
	margin:0;
}

.warpper .war_top li {
	font-size: 18px;
	line-height: 46px;
	color: #FFFFFF;
	text-align: center;
	float: left;
	height: 46px;
	width: 25%;
}

.support {
    background-image: url("<?php echo RES;?>/images/img/result_ok.gif");
    background-position: center center;
    background-repeat: no-repeat;
}

.nosuport {
    background-image: url("<?php echo RES;?>/images/img/result_error.gif");
    background-position: center center;
    background-repeat: no-repeat;
}

.warpper .button_button{
    float:left;
    width:24.770%;
	background:#FFFFFF;
	height:101px;
	border:1px solid #f3f3f3;
	border-top-color:#FFFFFF;
}

.warpper #left_green{
    float:left;
    height:65px;
	background-color:#FFFFFF;
	border:1px solid #f3f3f3;
	border-top-color:#ffffff;
	width:24.60%;
}

.warpper #left_green_01{
    float:left;
    height:65px;
	border:1px solid #f3f3f3;
	border-top-color:#ffffff;
	width:24.60%;
	background-color:#ffffff;
}

.warpper #left_green_02{
    float:left;
    height:65px;
	border:1px solid #f3f3f3;
	border-top-color:#ffffff;
	width:24.60%;
}
.warpper .contetn_lb{
    float:left;
    width:24.77%;
	height:65px;
}

.lb_color1{
	background-color: #eff5fd;
}

.lb_color2{
	background-color: #faf3e3;
}

.lb_color3{
	background-color: #feeee6;
	border-right-width: 1px; 
	border-right-color: #feeee6;
}

.warpper .content_lb_nr {
	text-align: center;
	line-height: 65px;
	color: #000000;
}
.warpper .content_lb_zynr {
	line-height: 75px;
	text-align: center;
	float: left;
	height: 65px;
	width: 24.77%;
	color:#5BB75B;
	font-weight:bold;
	
	border:1px solid #f3f3f3;
	border-top-color:#ffffff;
	border-left-color:#ffffff;
}
.warpper .content_lb_zynr img {
	padding-top: 27px;
}

.warpper .content_lb_zynr_02 img {
	padding-top: 27px;
}
.warpper .content_lb_zynr_02 {
	line-height: 65px;
	text-align: center;
	float: left;
	height: 65px;
	width: 24.77%;
	
	border:1px solid #f3f3f3;
	border-top-color:#ffffff;
}

.warpper .bt {
	font-size: 18px;
	line-height: 46px;
	color: #000000;
	text-align: center;
	width: 99.7%;
	border:1px solid #f3f3f3;
}

 
.fix-buy{
	position: fixed;
    z-index: 999;
	top:0;
	margin:0 auto;
}

.fix-top-buy{
	position: fixed;
    z-index: 888;
	top:46px;
	margin:0 auto;
}

</style>

<script type="text/javascript">
$(function(){
	scroll_height = 100;
	isfix = false;
	 $(window).scroll(function () {
		 if($(window).scrollTop() >= scroll_height && !isfix){
			isfix = true;
			war_top_width = $(".war_top").width();
			$(".war_top").addClass("fix-buy");
			$(".war_top").css("width",war_top_width);
			
			top_buy_width = $(".top_buy").width();
			$(".top_buy").addClass("fix-top-buy");
			$(".top_buy").css("width",top_buy_width);
		 }
		 if($(window).scrollTop() < scroll_height && isfix){
				isfix = false;
				$(".war_top").removeClass("fix-buy");
				
				top_buy_width = $(".top_buy").width();
				$(".top_buy").removeClass("fix-top-buy");
			 }
	 });
});

</script>
<!--焦点图-->
<div class="box">
    <div class="container">
        <div class="row-fluid" id="featurebox">
				<div class="warpper">
					<div class="war_top">
						<ul>
							<li>服务</li>
							<li>会员VIP1</li>
							<li>金卡VIP2</li>
							<li>钻石VIP3</li>
						</ul>
					</div>
					<!-- end of top-->
					<div class="content">
						<div class="top_buy">
							<div class="button_button" id="left_green" style="height: 101px;">
								<p style="color: #000000; padding:40px 0;text-align: center;">价格</p>
							</div>
							<div class="button_button" style="background: #eff5fd;">
								<p style="text-align: center; padding-top: 15px;">
									<span>免费</span>
								</p>
								<p style="text-align: center; padding-top: 0px; font-size: 14px; color: #a0a0a0;">免费试用15天</p>
								<p style="text-align: center; padding-top: 5px;">
									<a href="/index.php?g=User&m=Index&a=index" style="width:50%;" class="btn btn-success" target="_blank">立即试用</a>
								</p>
							</div>

							<div class="button_button" style="background: #faf3e3;">
								<p style="text-align: center; padding-top: 15px;">
									<span>￥200/月</span>
								</p>
								<p style="text-align: center; padding-top: 0px; font-size: 14px; color: #a0a0a0;">购买10个月送2个月</p>
								<p style="text-align: center; padding-top: 5px;">
									<a href="/index.php?g=User&m=Alipay&a=index" style="width:50%;" class="btn btn-danger" target="_blank">点击购买</a>
								</p>
							</div>

							<div class="button_button"
								style="background: #feeee6; border-right-width: 1px; border-right-color: #feeee6;">
								<p style="text-align: center; padding-top: 15px;">
									<span>￥300/月</span>
								</p>
								<p style="text-align: center; padding-top: 0px; font-size: 14px; color: #a0a0a0;">购买10个月送2个月</p>
								<p style="text-align: center; padding-top: 5px;">
									<a href="/index.php?g=User&m=Alipay&a=index" style="width:50%;" class="btn btn-danger" target="_blank">点击购买</a>
								</p>
							</div>

						</div>
						<!-- end of button -->
						<div class="over_flort"></div>
						<div>
							<div class="content_lb" id="left_green_01">
								<p class="content_lb_nr">被关注自动回复</p>
							</div>
							<div class="content_lb">
								<p class="content_lb_zynr lb_color1">√</p>
							</div>
							<div class="content_lb">
								<p class="content_lb_zynr lb_color2">√</p>
							</div>
							<div class="content_lb">
								<p class="content_lb_zynr lb_color3">√</p>
							</div>
						</div>
						<div>
							<div class="content_lb" id="left_green_01">
								<p class="content_lb_nr">关键词自动回复</p>
							</div>
							<div class="content_lb">
								<p class="content_lb_zynr lb_color1">√</p>
							</div>
							<div class="content_lb">
								<p class="content_lb_zynr lb_color2">√</p>
							</div>
							<div class="content_lb">
								<p class="content_lb_zynr lb_color3">√</p>
							</div>
						</div>
						<div>
							<div class="content_lb" id="left_green_01">
								<p class="content_lb_nr">图文回复</p>
							</div>
							<div class="content_lb">
								<p class="content_lb_zynr lb_color1">√</p>
							</div>
							<div class="content_lb">
								<p class="content_lb_zynr lb_color2">√</p>
							</div>
							<div class="content_lb">
								<p class="content_lb_zynr  lb_color3">√</p>
							</div>
						</div>
						<div>
							<div class="content_lb" id="left_green_01">
								<p class="content_lb_nr">语音回复</p>
							</div>
							<div class="content_lb">
								<p class="content_lb_zynr lb_color1">√</p>
							</div>
							<div class="content_lb">
								<p class="content_lb_zynr lb_color2">√</p>
							</div>
							<div class="content_lb">
								<p class="content_lb_zynr  lb_color3">√</p>
							</div>
						</div>
						<div>
							<div class="content_lb" id="left_green_01">
								<p class="content_lb_nr">LBS回复</p>
							</div>
							<div class="content_lb">
								<p class="content_lb_zynr lb_color1">√</p>
							</div>
							<div class="content_lb">
								<p class="content_lb_zynr lb_color2">√</p>
							</div>
							<div class="content_lb">
								<p class="content_lb_zynr  lb_color3">√</p>
							</div>
						</div>
						<div>
							<div class="content_lb" id="left_green_01">
								<p class="content_lb_nr">消息回复次数(每月)</p>
							</div>
							<div class="content_lb">
								<p class="content_lb_zynr lb_color1">3000条</p>
							</div>
							<div class="content_lb">
								<p class="content_lb_zynr lb_color2"><strong style="color:red;">30万条</strong></p>
							</div>
							<div class="content_lb">
								<p class="content_lb_zynr  lb_color3"><strong style="color:red;">300万条</strong></p>
							</div>
						</div>
						<!-- end of contetn_lb-->
						<div class="bt">微站</div>
						<div>
							<div class="content_lb" id="left_green_01">
								<p class="content_lb_nr">微站栏目</p>
							</div>
							<div class="content_lb">
								<p class="content_lb_zynr lb_color1">√</p>
							</div>
							<div class="content_lb">
								<p class="content_lb_zynr lb_color2">√</p>
							</div>
							<div class="content_lb">
								<p class="content_lb_zynr  lb_color3">√</p>
							</div>
						</div>
						<div>
							<div class="content_lb" id="left_green_01">
								<p class="content_lb_nr">图文内容</p>
							</div>
							<div class="content_lb">
								<p class="content_lb_zynr lb_color1">√</p>
							</div>
							<div class="content_lb">
								<p class="content_lb_zynr lb_color2">√</p>
							</div>
							<div class="content_lb">
								<p class="content_lb_zynr  lb_color3">√</p>
							</div>
						</div>
						<div>
							<div class="content_lb" id="left_green_01">
								<p class="content_lb_nr">微站模板</p>
							</div>
							<div class="content_lb">
								<p class="content_lb_zynr lb_color1"><span style="color:red;">×</span></p>
							</div>
							<div class="content_lb">
								<p class="content_lb_zynr lb_color2">√</p>
							</div>
							<div class="content_lb">
								<p class="content_lb_zynr  lb_color3">√</p>
							</div>
						</div>
						<div class="bt">微电商</div>
						
						<div>
							<div class="content_lb" id="left_green_01">
								<p class="content_lb_nr">微信订餐</p>
							</div>
							<div class="content_lb">
								<p class="content_lb_zynr lb_color1"><span style="color:red;">×</span></p>
							</div>
							<div class="content_lb">
								<p class="content_lb_zynr lb_color2"><span style="color:red;">×</p>
							</div>
							<div class="content_lb">
								<p class="content_lb_zynr  lb_color3">√</p>
							</div>
						</div>
						<div>
							<div class="content_lb" id="left_green_01">
								<p class="content_lb_nr">微商城</p>
							</div>
							<div class="content_lb">
								<p class="content_lb_zynr lb_color1"><span style="color:red;">×</span></p>
							</div>
							<div class="content_lb">
								<p class="content_lb_zynr lb_color2"><span style="color:red;">×</p>
							</div>
							<div class="content_lb">
								<p class="content_lb_zynr  lb_color3">√</p>
							</div>
						</div>
						<div>
							<div class="content_lb" id="left_green_01">
								<p class="content_lb_nr">微团购</p>
							</div>
							<div class="content_lb">
								<p class="content_lb_zynr lb_color1"><span style="color:red;">×</span></p>
							</div>
							<div class="content_lb">
								<p class="content_lb_zynr lb_color2"><span style="color:red;">×</p>
							</div>
							<div class="content_lb">
								<p class="content_lb_zynr  lb_color3">√</p>
							</div>
						</div>

						<div>
							<div class="content_lb" id="left_green_01">
								<p class="content_lb_nr"><strong style="color:red;">在线支付（支付宝即时到账）</strong></p>
							</div>
							<div class="content_lb">
								<p class="content_lb_zynr lb_color1"><span style="color:red;">×</span></p>
							</div>
							<div class="content_lb">
								<p class="content_lb_zynr lb_color2"><span style="color:red;">×</span></p>
							</div>
							<div class="content_lb">
								<p class="content_lb_zynr  lb_color3">√</p>
							</div>
						</div>
						<div class="bt">会员卡</div>
						<div>
							<div class="content_lb" id="left_green_01">
								<p class="content_lb_nr">会员卡数量</p>
							</div>
							<div class="content_lb">
								<p class="content_lb_zynr lb_color1"><span style="color:red;">×</span></p>
							</div>
							<div class="content_lb">
								<p class="content_lb_zynr lb_color2"><span style="color:red;">×</span></p>
							</div>
							<div class="content_lb">
								<p class="content_lb_zynr  lb_color3"><strong style="color:red;">无限</strong></p>
							</div>
						</div>
						
						<div>
							<div class="content_lb" id="left_green_01">
								<p class="content_lb_nr">会员管理</p>
							</div>
							<div class="content_lb">
								<p class="content_lb_zynr lb_color1"><span style="color:red;">×</span></p>
							</div>
							<div class="content_lb">
								<p class="content_lb_zynr lb_color2"><span style="color:red;">×</p>
							</div>
							<div class="content_lb">
								<p class="content_lb_zynr  lb_color3">√</p>
							</div>
						</div>
						<div>
							<div class="content_lb" id="left_green_01">
								<p class="content_lb_nr">模板设置</p>
							</div>
							<div class="content_lb">
								<p class="content_lb_zynr lb_color1"><span style="color:red;">×</span></p>
							</div>
							<div class="content_lb">
								<p class="content_lb_zynr lb_color2">√</p>
							</div>
							<div class="content_lb">
								<p class="content_lb_zynr  lb_color3">√</p>
							</div>
						</div>
						<div class="bt">营销推广模块</div>
						<div>
							<div class="content_lb" id="left_green_01">
								<p class="content_lb_nr">砸金蛋</p>
							</div>
							<div class="content_lb">
								<p class="content_lb_zynr lb_color1"><span style="color:red;">×</span></p>
							</div>
							<div class="content_lb">
								<p class="content_lb_zynr lb_color2">√</p>
							</div>
							<div class="content_lb">
								<p class="content_lb_zynr  lb_color3">√</p>
							</div>
						</div>
						<div>
							<div class="content_lb" id="left_green_01">
								<p class="content_lb_nr">大转盘</p>
							</div>
							<div class="content_lb">
								<p class="content_lb_zynr lb_color1"><span style="color:red;">×</span></p>
							</div>
							<div class="content_lb">
								<p class="content_lb_zynr lb_color2">√</p>
							</div>
							<div class="content_lb">
								<p class="content_lb_zynr  lb_color3">√</p>
							</div>
						</div>
						<div>
							<div class="content_lb" id="left_green_01">
								<p class="content_lb_nr">刮刮乐</p>
							</div>
							<div class="content_lb">
								<p class="content_lb_zynr lb_color1"><span style="color:red;">×</span></p>
							</div>
							<div class="content_lb">
								<p class="content_lb_zynr lb_color2">√</p>
							</div>
							<div class="content_lb">
								<p class="content_lb_zynr  lb_color3">√</p>
							</div>
						</div>
						<div>
							<div class="content_lb" id="left_green_01">
								<p class="content_lb_nr">优惠券</p>
							</div>
							<div class="content_lb">
								<p class="content_lb_zynr lb_color1"><span style="color:red;">×</span></p>
							</div>
							<div class="content_lb">
								<p class="content_lb_zynr lb_color2">√</p>
							</div>
							<div class="content_lb">
								<p class="content_lb_zynr  lb_color3">√</p>
							</div>
						</div>
						<div class="bt">行业相关</div>
						<div>
							<div class="content_lb" id="left_green_01">
								<p class="content_lb_nr">附近门店（LBS地图导航）</p>
							</div>
							<div class="content_lb">
								<p class="content_lb_zynr lb_color1"><span style="color:red;">×</span></p>
							</div>
							<div class="content_lb">
								<p class="content_lb_zynr lb_color2">1个门店</p>
							</div>
							<div class="content_lb">
								<p class="content_lb_zynr lb_color3">多个门店</p>
							</div>
						</div>
						<div>
							<div class="content_lb" id="left_green_01">
								<p class="content_lb_nr">一键导航（百度地图指引）</p>
							</div>
							<div class="content_lb">
								<p class="content_lb_zynr lb_color1"><span style="color:red;">×</span></p>
							</div>
							<div class="content_lb">
								<p class="content_lb_zynr lb_color2">1个</p>
							</div>
							<div class="content_lb">
								<p class="content_lb_zynr lb_color3">多个</p>
							</div>
						</div>
						<div>
							<div class="content_lb" id="left_green_01">
								<p class="content_lb_nr">360°全景（房地产）</p>
							</div>
							<div class="content_lb">
								<p class="content_lb_zynr lb_color1"><span style="color:red;">×</span></p>
							</div>
							<div class="content_lb">
								<p class="content_lb_zynr lb_color2">1个</p>
							</div>
							<div class="content_lb">
								<p class="content_lb_zynr  lb_color3">多个</p>
							</div>
						</div>
						<div>
							<div class="content_lb" id="left_green_01">
								<p class="content_lb_nr">微酒店（酒店预订）</p>
							</div>
							<div class="content_lb">
								<p class="content_lb_zynr lb_color1"><span style="color:red;">×</span></p>
							</div>
							<div class="content_lb">
								<p class="content_lb_zynr lb_color2">1个</p>
							</div>
							<div class="content_lb">
								<p class="content_lb_zynr  lb_color3">多个</p>
							</div>
						</div>
						<div>
							<div class="content_lb" id="left_green_01">
								<p class="content_lb_nr">婚庆喜帖（婚纱摄影）</p>
							</div>
							<div class="content_lb">
								<p class="content_lb_zynr lb_color1"><span style="color:red;">×</span></p>
							</div>
							<div class="content_lb">
								<p class="content_lb_zynr lb_color2">1个</p>
							</div>
							<div class="content_lb">
								<p class="content_lb_zynr  lb_color3">多个</p>
							</div>
						</div>
						<div>
							<div class="content_lb" id="left_green_01">
								<p class="content_lb_nr">微相册（婚纱摄影）</p>
							</div>
							<div class="content_lb">
								<p class="content_lb_zynr lb_color1"><span style="color:red;">×</span></p>
							</div>
							<div class="content_lb">
								<p class="content_lb_zynr lb_color2">1个</p>
							</div>
							<div class="content_lb">
								<p class="content_lb_zynr  lb_color3">多个</p>
							</div>
						</div>
						
						<div>
							<div class="content_lb" id="left_green_01">
								<p class="content_lb_nr">在线预订（餐桌，汽车，KTV等）</p>
							</div>
							<div class="content_lb">
								<p class="content_lb_zynr lb_color1"><span style="color:red;">×</span></p>
							</div>
							<div class="content_lb">
								<p class="content_lb_zynr lb_color2"><span style="color:red;">×</p>
							</div>
							<div class="content_lb">
								<p class="content_lb_zynr  lb_color3">多个</p>
							</div>
						</div>
						<div class="bt">客户反馈模块</div>
						<div>
							<div class="content_lb" id="left_green_01">
								<p class="content_lb_nr">留言板</p>
							</div>
							<div class="content_lb">
								<p class="content_lb_zynr lb_color1"><span style="color:red;">×</span></p>
							</div>
							<div class="content_lb">
								<p class="content_lb_zynr lb_color2">1个</p>
							</div>
							<div class="content_lb">
								<p class="content_lb_zynr  lb_color3">多个</p>
							</div>
						</div>

						
						<div class="bt">版权声明</div>
						<div>
							<div class="content_lb" id="left_green_01">
								<p class="content_lb_nr">不显示“微商生成”</p>
							</div>
							<div class="content_lb">
								<p class="content_lb_zynr lb_color1"><span style="color:red;">×</span></p>
							</div>
							<div class="content_lb">
								<p class="content_lb_zynr lb_color2"><span style="color:red;">×</p>
							</div>
							<div class="content_lb">
								<p class="content_lb_zynr  lb_color3">√</p>
							</div>
						</div>
						<div class="bt">微信功能扩展</div>
						<div>
							<div class="content_lb" id="left_green_01">
								<p class="content_lb_nr">小黄鸡聊天机器人</p>
							</div>
							<div class="content_lb">
								<p class="content_lb_zynr lb_color1">√</p>
							</div>
							<div class="content_lb">
								<p class="content_lb_zynr lb_color2">√</p>
							</div>
							<div class="content_lb">
								<p class="content_lb_zynr  lb_color3">√</p>
							</div>
						</div>
						<div>
							<div class="content_lb" id="left_green_01">
								<p class="content_lb_nr">天气查询</p>
							</div>
							<div class="content_lb">
								<p class="content_lb_zynr lb_color1">√</p>
							</div>
							<div class="content_lb">
								<p class="content_lb_zynr lb_color2">√</p>
							</div>
							<div class="content_lb">
								<p class="content_lb_zynr lb_color3">√</p>
							</div>
						</div>
						<div>
							<div class="content_lb" id="left_green_01">
								<p class="content_lb_nr">糗事</p>
							</div>
							<div class="content_lb">
								<p class="content_lb_zynr lb_color1">√</p>
							</div>
							<div class="content_lb">
								<p class="content_lb_zynr lb_color2">√</p>
							</div>
							<div class="content_lb">
								<p class="content_lb_zynr lb_color3">√</p>
							</div>
						</div>
						<div>
							<div class="content_lb" id="left_green_01">
								<p class="content_lb_nr">计算器</p>
							</div>
							<div class="content_lb">
								<p class="content_lb_zynr lb_color1">√</p>
							</div>
							<div class="content_lb">
								<p class="content_lb_zynr lb_color2">√</p>
							</div>
							<div class="content_lb">
								<p class="content_lb_zynr lb_color3">√</p>
							</div>
						</div>
						<div>
							<div class="content_lb" id="left_green_01">
								<p class="content_lb_nr">健康指数查询</p>
							</div>
							<div class="content_lb">
								<p class="content_lb_zynr lb_color1">√</p>
							</div>
							<div class="content_lb">
								<p class="content_lb_zynr lb_color2">√</p>
							</div>
							<div class="content_lb">
								<p class="content_lb_zynr lb_color3">√</p>
							</div>
						</div>
						<div>
							<div class="content_lb" id="left_green_01">
								<p class="content_lb_nr">快递查询</p>
							</div>
							<div class="content_lb">
								<p class="content_lb_zynr lb_color1">√</p>
							</div>
							<div class="content_lb">
								<p class="content_lb_zynr lb_color2">√</p>
							</div>
							<div class="content_lb">
								<p class="content_lb_zynr lb_color3">√</p>
							</div>
						</div>
						<div>
							<div class="content_lb" id="left_green_01">
								<p class="content_lb_nr">笑话</p>
							</div>
							<div class="content_lb">
								<p class="content_lb_zynr lb_color1">√</p>
							</div>
							<div class="content_lb">
								<p class="content_lb_zynr lb_color2">√</p>
							</div>
							<div class="content_lb">
								<p class="content_lb_zynr lb_color3">√</p>
							</div>
						</div>
						<div>
							<div class="content_lb" id="left_green_01">
								<p class="content_lb_nr">手机归属地查询</p>
							</div>
							<div class="content_lb">
								<p class="content_lb_zynr lb_color1">√</p>
							</div>
							<div class="content_lb">
								<p class="content_lb_zynr lb_color2">√</p>
							</div>
							<div class="content_lb">
								<p class="content_lb_zynr lb_color3">√</p>
							</div>
						</div>
						<div>
							<div class="content_lb" id="left_green_01">
								<p class="content_lb_nr">附近周边信息查询</p>
							</div>
							<div class="content_lb">
								<p class="content_lb_zynr lb_color1">√</p>
							</div>
							<div class="content_lb">
								<p class="content_lb_zynr lb_color2">√</p>
							</div>
							<div class="content_lb">
								<p class="content_lb_zynr lb_color3">√</p>
							</div>
						</div>
						<div>
							<div class="content_lb" id="left_green_01">
								<p class="content_lb_nr">翻译</p>
							</div>
							<div class="content_lb">
								<p class="content_lb_zynr lb_color1">√</p>
							</div>
							<div class="content_lb">
								<p class="content_lb_zynr lb_color2">√</p>
							</div>
							<div class="content_lb">
								<p class="content_lb_zynr lb_color3">√</p>
							</div>
						</div>
						<div>
							<div class="content_lb" id="left_green_01">
								<p class="content_lb_nr">姓名算命</p>
							</div>
							<div class="content_lb">
								<p class="content_lb_zynr lb_color1">√</p>
							</div>
							<div class="content_lb">
								<p class="content_lb_zynr lb_color2">√</p>
							</div>
							<div class="content_lb">
								<p class="content_lb_zynr lb_color3">√</p>
							</div>
						</div>
						<div>
							<div class="content_lb" id="left_green_01">
								<p class="content_lb_nr">DIY宣传页</p>
							</div>
							<div class="content_lb">
								<p class="content_lb_zynr lb_color1">√</p>
							</div>
							<div class="content_lb">
								<p class="content_lb_zynr lb_color2">√</p>
							</div>
							<div class="content_lb">
								<p class="content_lb_zynr lb_color3">√</p>
							</div>
						</div>
						<div>
							<div class="content_lb" id="left_green_01">
								<p class="content_lb_nr">歌词查询</p>
							</div>
							<div class="content_lb">
								<p class="content_lb_zynr lb_color1">√</p>
							</div>
							<div class="content_lb">
								<p class="content_lb_zynr lb_color2">√</p>
							</div>
							<div class="content_lb">
								<p class="content_lb_zynr lb_color3">√</p>
							</div>
						</div>
						<div>
							<div class="content_lb" id="left_green_01">
								<p class="content_lb_nr">藏头诗</p>
							</div>
							<div class="content_lb">
								<p class="content_lb_zynr lb_color1">√</p>
							</div>
							<div class="content_lb">
								<p class="content_lb_zynr lb_color2">√</p>
							</div>
							<div class="content_lb">
								<p class="content_lb_zynr lb_color3">√</p>
							</div>
						</div>
						<div>
							<div class="content_lb" id="left_green_01">
								<p class="content_lb_nr">语音翻译</p>
							</div>
							<div class="content_lb">
								<p class="content_lb_zynr lb_color1">√</p>
							</div>
							<div class="content_lb">
								<p class="content_lb_zynr lb_color2">√</p>
							</div>
							<div class="content_lb">
								<p class="content_lb_zynr lb_color3">√</p>
							</div>
						</div>
						<div>
							<div class="content_lb" id="left_green_01">
								<p class="content_lb_nr">火车查询</p>
							</div>
							<div class="content_lb">
								<p class="content_lb_zynr lb_color1">√</p>
							</div>
							<div class="content_lb">
								<p class="content_lb_zynr lb_color2">√</p>
							</div>
							<div class="content_lb">
								<p class="content_lb_zynr lb_color3">√</p>
							</div>
						</div>
						<div>
							<div class="content_lb" id="left_green_01">
								<p class="content_lb_nr">公交查询</p>
							</div>
							<div class="content_lb">
								<p class="content_lb_zynr lb_color1">√</p>
							</div>
							<div class="content_lb">
								<p class="content_lb_zynr lb_color2">√</p>
							</div>
							<div class="content_lb">
								<p class="content_lb_zynr lb_color3">√</p>
							</div>
						</div>
						<div>
							<div class="content_lb" id="left_green_01">
								<p class="content_lb_nr">身份证查询</p>
							</div>
							<div class="content_lb">
								<p class="content_lb_zynr lb_color1">√</p>
							</div>
							<div class="content_lb">
								<p class="content_lb_zynr lb_color2">√</p>
							</div>
							<div class="content_lb">
								<p class="content_lb_zynr lb_color3">√</p>
							</div>
						</div>
						<div>
							<div class="content_lb" id="left_green_01">
								<p class="content_lb_nr">彩票查询</p>
							</div>
							<div class="content_lb">
								<p class="content_lb_zynr lb_color1">√</p>
							</div>
							<div class="content_lb">
								<p class="content_lb_zynr lb_color2">√</p>
							</div>
							<div class="content_lb">
								<p class="content_lb_zynr lb_color3">√</p>
							</div>
						</div>
						<div>
							<div class="content_lb" id="left_green_01">
								<p class="content_lb_nr">域名whois查询</p>
							</div>
							<div class="content_lb">
								<p class="content_lb_zynr lb_color1">√</p>
							</div>
							<div class="content_lb">
								<p class="content_lb_zynr lb_color2">√</p>
							</div>
							<div class="content_lb">
								<p class="content_lb_zynr lb_color3">√</p>
							</div>
						</div>
						<div>
							<div class="content_lb" id="left_green_01">
								<p class="content_lb_nr">周公解梦</p>
							</div>
							<div class="content_lb">
								<p class="content_lb_zynr lb_color1">√</p>
							</div>
							<div class="content_lb">
								<p class="content_lb_zynr lb_color2">√</p>
							</div>
							<div class="content_lb">
								<p class="content_lb_zynr lb_color3">√</p>
							</div>
						</div>
						<div>
							<div class="content_lb" id="left_green_01">
								<p class="content_lb_nr">音乐查询</p>
							</div>
							<div class="content_lb">
								<p class="content_lb_zynr lb_color1">√</p>
							</div>
							<div class="content_lb">
								<p class="content_lb_zynr lb_color2">√</p>
							</div>
							<div class="content_lb">
								<p class="content_lb_zynr lb_color3">√</p>
							</div>
						</div>
						<div>
							<div class="content_lb" id="left_green_01">
								<p class="content_lb_nr">百度百科</p>
							</div>
							<div class="content_lb">
								<p class="content_lb_zynr lb_color1">√</p>
							</div>
							<div class="content_lb">
								<p class="content_lb_zynr lb_color2">√</p>
							</div>
							<div class="content_lb">
								<p class="content_lb_zynr lb_color3">√</p>
							</div>
						</div>
						<div>
							<div class="content_lb" id="left_green_01">
								<p class="content_lb_nr">朗读</p>
							</div>
							<div class="content_lb">
								<p class="content_lb_zynr lb_color1">√</p>
							</div>
							<div class="content_lb">
								<p class="content_lb_zynr lb_color2">√</p>
							</div>
							<div class="content_lb">
								<p class="content_lb_zynr lb_color3">√</p>
							</div>
						</div>
						
					</div>
					<!-- end of content -->
				</div>
			</div>	
    </div>
</div>
<div style=" clear:both"></div>
  <script type="text/javascript">try{Dd('webpage_6').className='left_menu_on';}catch(e){}</script>
</p>
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