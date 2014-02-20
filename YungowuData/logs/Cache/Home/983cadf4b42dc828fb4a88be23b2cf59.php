<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html;charset=utf-8"/>
<title>案例展示_微信公众号导航_<?php echo C('site_title');?></title>
<meta name="keywords" content="案例展示,微信公众号导航,<?php echo C('keyword');?>"/>
<meta name="description" content="<?php echo C('content');?>"/>
<link rel="stylesheet" type="text/css" href="<?php echo RES;?>/css/common.css"/>
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
<style type="text/css">
.wxgzlist ul li img{
width:208px;
height:208px;
}
</style>
<div class="banner dbanner"></div>
<div class="main">
    <div class="pos">当前位置: <a href="/">首页</a> &raquo; <a href="">微信公众号</a>&raquo; </div>
    
    <div class="wxgzbox">
        <div class="wxgzbox-top"><h3>全部案例</h3></div>
        <div class="wxgzlist">
        <ul>
	<?php if(is_array($case)): $i = 0; $__LIST__ = $case;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><li><div style="width:208px;height:208px;"><div><img src="<?php echo ($vo["img"]); ?>"  /></div><div style="text-align:center;"><?php echo ($vo["name"]); ?></div></div></li><?php endforeach; endif; else: echo "" ;endif; ?>
                        </ul>
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