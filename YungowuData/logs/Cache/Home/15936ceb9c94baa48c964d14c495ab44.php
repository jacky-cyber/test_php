<?php if (!defined('THINK_PATH')) exit();?> <!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html;charset=utf-8"/>
<title>渠道合作－<?php echo C('site_title');?></title>
<meta name="keywords" content="<?php echo C('keyword');?>,微信平台代理渠道合作"/>
<meta name="description" content="<?php echo C('content');?>"/>
<link href="<?php echo RES;?>/css/css.css" rel="stylesheet" media="screen" type="text/css" />
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
<div class="Public-content clearfix">
	<div class="Public">
		<h2 class="Public-h2">代理合作</h2>
		<div class="Public-box">
			<div class="Proxy">
				<h3>尊敬的各位合作伙伴：</h3>
				<p>　　首先非常感谢您对云微平台的认可和支持，信任是合作的基础，这是我们一直强调的核心价值观。</p>
				<p>　　云微平台在大家的共同努力下，目前已经成长为在微信第三方平台中拥有较高知名度和用户数量的第三方平台。为了能使更多的用户享受云微提供的高品质的微信营销产品和服务，目前我们正在全国范围内大力发展代理伙伴。我们的目标是：通过发展一批有实力的区域和行业代理商作为稳定的合作伙伴来承担销售业务，建立云微的营销战略合作伙伴体系，共同投身于微信营销的事业。</p>
				<p>　　云微平台通过市场与技术支持、各种媒体宣传、促销活动及完善的售后服务，为云微的代理商提供及时的、量身定做的高效特色服务及全面支持。</p>
				<p>　　无论您在何方，不管您有多远，无论是个人还是团体，我们都欢迎您成为我们的一员，云微平台希望每个人都能通过云微实现价值，正像微信公众平台提出的一样：“再小的个体，也有自己的品牌。”我们将与您始终保持零距离的接触，提供零距离的服务。欢迎全国各地、各广告商、渠道代理商踊跃加盟，云微对有意成为合作伙伴的朋友致以诚挚的谢意，感谢您对云微平台的支持和信任。</p>
				<p>合作及代理联系方式：QQ：<span><?php echo C('site_qq');?></span></p>
			</div>
		</div>
        
        	<h2 class="Public-h2">总部提供支持</h2>
		<div class="Public-box">
			<div class="Proxy">
				<p>1、总部提供专业的研发团队，优先处理和研发代理商反馈的需求，定制模块开发支持；</p>
				<p>2、总部对独家代理商所在地区不参与直销，全权交给代理商，充分保护代理商的利益；</p>
				<p>3、总部通过网络推广得到的资源将全部转交给当地代理商，代理商无需承担推广费用；</p>
				<p>4、平台提供7×12小时的技术支持，随时提供响应；</p>
				<p>5、提供平台的产品介绍、活动策划、营销推广、代运营建议；</p>
				<p>6、免费提供总部微营销课程及代理商大礼包资料；</p>
				<p>7、总部会定期在代理商所在城市与代理商一起协作举办微营销会议，从而扩大代理商在当地的影响力和云微的品牌知名度</p>
				<p>8、每个代理商确定正式合作关系后，将免费为代理商开通一个年费的全功能演示账号，供演示使用；</p>
				<p>9、总部为全国代理商提供统一的行业解决方案PPT；</p>
				<p>10、渠道经理后期会定期亲临代理商公司给予产品培训，销售技巧培训等，并协助代理商销售客户。</p>
			</div>
		</div>
        
		<h2 class="Public-h2">联系渠道经理</h2>
		<div class="Public-box">
			<div class="Proxy">
				<p><strong>陈经理：</strong><span>QQ:<?php echo C('site_qq');?></span><br>负责地区：广东省、广西省、福建省、湖南省。<br</p>
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