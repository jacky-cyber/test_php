<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title> <?php echo C('site_title');?> <?php echo C('site_name');?></title>
<meta name="keywords" content="<?php echo C('keyword');?>" />
<meta name="description" content="<?php echo C('content');?>" />
<meta http-equiv="MSThemeCompatible" content="Yes" />
<script>var SITEURL='';</script>
<link rel="stylesheet" type="text/css" href="<?php echo RES;?>/css/style_2_common.css?BPm" />
<link href="<?php echo RES;?>/css/stylet.css" rel="stylesheet" type="text/css" />
<script src="<?php echo RES;?>/js/common.js" type="text/javascript"></script>
<script type="text/javascript">
function ying(){
	 document.getElementById('tiduser').style.display="none";
	 document.getElementById('quit').style.display="block";
}
function xian(){
	 document.getElementById('tiduser').style.display="block";
	 document.getElementById('quit').style.display="none";
}
setTimeout(xian,5000);
</script>
</head>
<body id="nv_member" class="pg_CURMODULE">
<div id="herder" >
	<div id="top">
		<img src="<?php echo RES;?>/images/logo.png" />
		<a href="/" class="">首页</a> 
        <a href="<?php echo U('Home/Index/guide');?>" class="" >产品介绍</a> 
        <a href="<?php echo U('Home/Index/price');?>" class="" >资费说明</a> 
        <a href="<?php echo U('Home/Index/hezuo');?>" class="" >渠道合作</a> 
	    <a href="<?php echo U('Home/Index/common');?>" class="" >成功案例</a>  
        <a href="<?php echo U('User/Index/index');?>" class="" >管理中心</a> 
        <a href="<?php echo U('Home/Index/help');?>" class="" >帮助中心</a>
		<a class="line" ></a>
        <a href="#" class="a" id="tiduser" onmouseover="ying();" ><span><?php echo (session('uname')); ?></span></a>
		<a href="#" class="a1" id="quit" onclick="Javascript:window.open('<?php echo U('System/Admin/logout');?>')" onLoad=setTimeout("abc.style.display='none'",5000) >安全退出</a>
	</div>
</div>
<div id="aaa"></div>

<div id="wp" class="wp"><link href="<?php echo RES;?>/css/style.css?id=100" rel="stylesheet" type="text/css" />
  <!--中间内容-->
  <script src="<?php echo STATICS;?>/jquery-1.4.2.min.js" type="text/javascript"></script>
  
  <div class="contentmanage">
    <div class="developer">
       <div class="appTitle normalTitle2">
        <div class="vipuser">


<div class="logo">
<img src="<?php echo ($wecha["headerpic"]); ?>" width="100" height="100">
</div>

<div id="nickname">
<strong><?php echo ($wecha["wxname"]); ?></strong><a href="#" target="_blank" class="vipimg vip-icon<?php echo $userinfo['id']-1; ?>" title=""></a></div>
<div id="weixinid">微信号:<?php echo ($wecha["weixin"]); ?></div>
</div>

        <div class="accountInfo">
<table class="vipInfo" width="100%" border="0" cellpadding="0" cellspacing="0">
<tr>
<td><strong>VIP有效期：</strong><?php if($_SESSION['viptime'] != 0): echo (date("Y-m-d",$thisUser["viptime"])); else: ?>vip0不限时间<?php endif; ?></td>
<td><strong>图文自定义：</strong><?php echo ($thisUser["diynum"]); ?>/<?php echo ($userinfo["diynum"]); ?></td>
<td><strong>活动创建数：</strong><?php echo ($thisUser["activitynum"]); ?>/<?php echo ($userinfo["activitynum"]); ?></td>
<td><strong>请求数：</strong><?php echo ($thisUser["connectnum"]); ?>/<?php echo ($userinfo["connectnum"]); ?></td>
</tr>
<tr>
<td><strong>请求数剩余：</strong><?php echo ($userinfo['connectnum']-$_SESSION['connectnum']); ?></td>
<td><strong>已使用：</strong><?php echo $_SESSION['diynum']; ?></td>
<td><strong>当月赠送请求数：</strong><?php echo ($userinfo["connectnum"]); ?></td>
<td><strong>当月剩余请求数：</strong><?php echo $userinfo['connectnum']-$_SESSION['connectnum']; ?></td>
</tr>

</table>
    </div>
        <div class="clr"></div>
      </div>
      <!--左侧功能菜单-->

 
<style type="text/css">
#sideBar{
border-right: 0px solid #D3D3D3 !important;
float: left;
padding: 0 0 10px 0;
width: 170px;
}
.tableContent {
background: none repeat scroll 0 0 #f5f6f7;
padding: 0;
}
.tableContent .content {
border-left: 1px solid #D7DDE6 !important;
}
ul#menu, ul#menu ul {
  list-style-type:none;
  margin: 0;
  padding: 0;
}

ul#menu a {
  display: block;
  text-decoration: none;	
}

ul#menu li {
  margin: 1px;
}
ul#menu li ul li{
  margin: 1px 0;
}
ul#menu li a {
  background: #EBEEF1;
  color: #464D6A;	
  padding: 0.5em;
}
ul#menu li .nav-header{
font-size:14px;
border-bottom: 1px solid #D7DDE6;
}
ul#menu li .nav-header:hover {
  background: #DDE4EB;
}

ul#menu li ul li a {
  background: #FCFCFC;
  color: #8288A4;
  padding-left: 20px;
}
ul#menu li ul li:last-child {
    border-bottom: 1px solid #D7DDE6;
}
ul#menu li ul li a:hover {
  background: #fff;
  border-left: 5px #4A98E0 solid;
 
}
ul#menu li.selected a{
  background: #fff;
  border-left: 5px #4A98E0 solid;
  padding-left: 15px;
  color: #4A98E0;
}
.code { border: 1px solid #ccc; list-style-type: decimal-leading-zero; padding: 5px; margin: 0; }
.code code { display: block; padding: 3px; margin-bottom: 0; }
.code li { background: #ddd; border: 1px solid #ccc; margin: 0 0 2px 2.2em; }
.indent1 { padding-left: 1em; }
.indent2 { padding-left: 2em; }
.tableContent .content{min-height: 1328px;}
</style>
    
      <div class="tableContent">
        
        <!--左侧功能菜单-->
 <div  class="sideBar" id="sideBar">
<div class="catalogList">
<ul id="menu">
<a class="nav-header">基础设置</a>
<ul class="ckit">
<li <?php if(MODULE_NAME == 'Function'): ?>class="selected" <?php else: ?> class="subCatalogList"<?php endif; ?>> <a href="<?php echo U('Function/index',array('token'=>$token,'id'=>session('wxid')));?>">功能管理</a>
</li>
<li <?php if(MODULE_NAME == 'Areply'): ?>class="selected" <?php else: ?>class="subCatalogList"<?php endif; ?>> <a href="<?php echo U('Areply/index',array('token'=>$token));?>">关注时回复与帮助</a>
</li>
<li <?php if(MODULE_NAME == 'Text'): ?>class="selected" <?php else: ?>class="subCatalogList"<?php endif; ?>> <a href="<?php echo U('Text/index',array('token'=>$token));?>">微信－文本回复</a>
</li>
<li <?php if(MODULE_NAME == 'Img'): ?>class="selected" <?php else: ?> class="subCatalogList"<?php endif; ?>> <a href="<?php echo U('Img/index',array('token'=>$token));?>">微信－图文回复</a>
</li>
<li   <?php if(MODULE_NAME == 'Voiceresponse'): ?>class="selected" <?php else: ?>class="subCatalogList"<?php endif; ?>> <a href="<?php echo U('Voiceresponse/index',array('token'=>$token));?>">微信－语音回复</a>
</li>
<li   <?php if(MODULE_NAME == 'Company'): ?>class="selected" <?php else: ?>class="subCatalogList"<?php endif; ?>> <a href="<?php echo U('Company/index',array('token'=>$token));?>">自定义LBS回复</a><span class="new"></span>
</li>
<li <?php if(MODULE_NAME == 'Other'): ?>class="selected" <?php else: ?>class="subCatalogList"<?php endif; ?>> <a href="<?php echo U('Other/index',array('token'=>$token));?>">回答不上来的配置</a><span class="new"></span>
</li>
<li <?php if(MODULE_NAME == 'Sms'): ?>class="selected" <?php else: ?>class="subCatalogList"<?php endif; ?>><a href="<?php echo U('Index/editsms',array('id'=>session('wxid'),'token'=>$token));?>">短信平台配置</a><span class="new"></span>
</li>
<li <?php if(MODULE_NAME == 'Email'): ?>class="selected" <?php else: ?>class="subCatalogList"<?php endif; ?>><a href="<?php echo U('Index/editemail',array('id'=>session('wxid'),'token'=>$token));?>">邮件平台配置</a><span class="new"></span>
</li>
<li <?php if(MODULE_NAME == 'Xitie'): ?>class="selected" <?php else: ?>class="subCatalogList"<?php endif; ?>><a href="<?php echo U('Marrycard/index',array('id'=>session('wxid'),'token'=>$token));?>">微喜帖</a><span class="new"></span>
</li>
<li <?php if(MODULE_NAME == 'Liuyan'): ?>class="selected" <?php else: ?>class="subCatalogList"<?php endif; ?>><a href="<?php echo U('Liuyan/index',array('id'=>session('wxid'),'token'=>$token));?>">留言板</a><span class="new"></span>
</li>
<!--
<li <?php if(MODULE_NAME == 'Vote'): ?>class="selected" <?php else: ?>class="subCatalogList"<?php endif; ?>><a href="<?php echo U('Vote/index',array('id'=>session('wxid'),'token'=>$token));?>">微投票</a><span class="new"></span>
</li>
-->
<!--li   <?php if(MODULE_NAME == 'lbslist'): ?>class="selected" <?php else: ?>class="subCatalogList"<?php endif; ?>> <a href="javascript:alert('已经实现智能地理位置回复，无需人工设置')">LBS回复</a><span class="new"></span>
</li-->
</ul>


<a class="nav-header">3G网站设置</a>
<ul class="ckit">
		<li <?php if(ACTION_NAME == 'set'): ?>class="selected" <?php else: ?>class="subCatalogList"<?php endif; ?>> 
			<a href="<?php echo U('Home/set',array('token'=>$token));?>">首页回复配置</a>
		</li>
		<li <?php if(MODULE_NAME == 'Classify'): ?>class="selected" <?php else: ?>class="subCatalogList"<?php endif; ?>> <a href="<?php echo U('Classify/index',array('token'=>$token));?>">分类管理</a>
		</li>
		<li <?php if(ACTION_NAME == 'plugmenu'): ?>class="selected" <?php else: ?>class="subCatalogList"<?php endif; ?>> 
			<a href="<?php echo U('Home/plugmenu',array('token'=>$token));?>">一键拨号与版权</a><span class="new"></span>
		</li>
		
		<li   <?php if(MODULE_NAME == 'Tmpls'): ?>class="selected" <?php else: ?>class="subCatalogList"<?php endif; ?>> <a href="<?php echo U('Tmpls/index',array('token'=>$token));?>">模板管理</a><span class="new"></span>
		</li>
		<?php
 if (is_dir($_SERVER['DOCUMENT_ROOT'].'/cms')&&!strpos($_SERVER['HTTP_HOST'],'pigcms')){ echo '<li class="subCatalogList"> <a href="cms/manage/index.php">高级模板</a><span class="new"></span></li>'; } ?>
		<li   <?php if(MODULE_NAME == 'Flash'): ?>class="selected" <?php else: ?>class="subCatalogList"<?php endif; ?>> <a href="<?php echo U('Flash/index',array('token'=>$token));?>">首页幻灯片<span class="new"></span></a>
		</li>
		<li   <?php if(MODULE_NAME == 'Diymen'): ?>class="selected" <?php else: ?>class="subCatalogList"<?php endif; ?>> <a href="<?php echo U('Diymen/index',array('token'=>$token));?>">自定义菜单<span class="new"></span></a>
		</li>
		<li   <?php if(MODULE_NAME == 'Panorama'): ?>class="selected" <?php else: ?>class="subCatalogList"<?php endif; ?>> <a href="<?php echo U('Panorama/index',array('token'=>$token));?>">360°全景<span class="new"></span></a>
		</li>
</ul>

<a class="nav-header">电商系统</a>
<ul class="ckit">
<li   <?php if(MODULE_NAME == 'Alipay_config'): ?>class="selected" <?php else: ?>class="subCatalogList"<?php endif; ?>> <a href="<?php echo U('Alipay_config/index',array('token'=>$token));?>">支付宝设置</a></li>
	<li   <?php if(MODULE_NAME == 'Taobao'): ?>class="selected" <?php else: ?>class="subCatalogList"<?php endif; ?>> <a href="<?php echo U('Taobao/index',array('token'=>$token));?>">淘宝天猫店铺配置</a></li>
	<li   <?php if(MODULE_NAME == 'apilist'): ?>class="selected"<?php else: ?>class="subCatalogList"<?php endif; ?> > <a href="<?php echo U('Api/index',array('token'=>$token));?>">融合第三方</a><span class="new"></span></li>
	<li   <?php if(MODULE_NAME == 'Adma'): ?>class="selected"<?php else: ?>class="subCatalogList"<?php endif; ?> > <a href="<?php echo U('Adma/index',array('token'=>$token));?>">DIY宣传页</a></li>
	<li   <?php if(MODULE_NAME == 'Photo'): ?>class="selected"<?php else: ?>class="subCatalogList"<?php endif; ?> > <a href="<?php echo U('Photo/index',array('token'=>$token));?>">3G图集(相册)</a><span class="new"></span></li>
	<li   <?php if(MODULE_NAME == 'Selfform'): ?>class="selected"<?php else: ?>class="subCatalogList"<?php endif; ?> > <a href="<?php echo U('Selfform/index',array('token'=>$token));?>">万能表单,报名,留言,预约</a></li>
	 <li   <?php if(MODULE_NAME == 'Host'): ?>class="selected"<?php else: ?>class="subCatalogList"<?php endif; ?> > <a href="<?php echo U('Host/index',array('token'=>$token));?>">通用订单(酒店,KTV)</a><span class="new"></span></li> 
	 <li   <?php if((MODULE_NAME == 'Groupon') and (ACTION_NAME == 'index')): ?>class="selected"<?php else: ?>class="subCatalogList"<?php endif; ?> > <a href="<?php echo U('Groupon/index',array('token'=>$token));?>">微信团购系统</a><span class="new"></span></li>
	 <li   <?php if((MODULE_NAME == 'Product') and (ACTION_NAME == 'index')): ?>class="selected"<?php else: ?>class="subCatalogList"<?php endif; ?> > <a href="<?php echo U('Product/index',array('token'=>$token));?>">微信商城系统</a><span class="new"></span></li> 
	 <li   <?php if(ACTION_NAME == 'orders'): ?>class="selected"<?php else: ?>class="subCatalogList"<?php endif; ?> > <a href="<?php echo U('Product/orders',array('token'=>$token,'dining'=>1));?>">无线订餐（网络打印）</a><span class="new"></span></li>
	 
</ul>
<!--
<a class="nav-header">微用户管理开发中</a>
<ul class="ckit">
	<li   <?php if(MODULE_NAME == 'wechat_grout'): ?>class="selected" <?php else: ?>class="subCatalogList"<?php endif; ?> > <a href="javascript:alert('开发中，感谢关注')">分组管理－新增</a><span class="new"></span></li>
	<li   <?php if(MODULE_NAME == 'wechat_grout'): ?>class="selected" <?php else: ?>class="subCatalogList"<?php endif; ?> > <a href="javascript:alert('开发中，感谢关注')">微信群发－新增</a><span class="new"></span></li>
	<li   <?php if(MODULE_NAME == 'wechat_grout'): ?>class="selected" <?php else: ?>class="subCatalogList"<?php endif; ?> > <a href="javascript:alert('开发中，感谢关注')">人工客服－新增</a><span class="new"></span></li>

</ul>
-->
<a class="nav-header">推广活动</a>
<ul class="ckit">
	<li   <?php if(MODULE_NAME == 'Lottery'): ?>class="selected" <?php else: ?>class="subCatalogList"<?php endif; ?> > <a href="<?php echo U('Lottery/index',array('token'=>$token));?>">幸运大转盘</a><span class="new"></span></li>
	<li   <?php if(MODULE_NAME == 'Coupon'): ?>class="selected" <?php else: ?>class="subCatalogList"<?php endif; ?> > <a href="<?php echo U('Coupon/index',array('token'=>$token));?>">优惠券</a></li>
	<li   <?php if(MODULE_NAME == 'Guajiang'): ?>class="selected" <?php else: ?>class="subCatalogList"<?php endif; ?> > <a href="<?php echo U('Guajiang/index',array('token'=>$token));?>">刮刮卡</a></li>
	<li   <?php if(MODULE_NAME == 'Zadan'): ?>class="selected" <?php else: ?>class="subCatalogList"<?php endif; ?> > <a href="<?php echo U('Zadan/index',array('token'=>$token));?>">砸金蛋</a></li>
</ul>
<a class="nav-header">会员卡</a>
<ul class="ckit">
	<li <?php if(ACTION_NAME == ''): ?>class="selected" <?php else: ?>class="subCatalogList"<?php endif; ?>> <a href="<?php echo U('Member_card/index',array('token'=>$token));?>">会员卡设计</a></li>
	<li  style="display:none"> <a href="<?php echo U('Member_card/privilege',array('token'=>$token));?>">最新通知</a></li>
	<li <?php if(ACTION_NAME == 'privilege'): ?>class="selected" <?php else: ?>class="subCatalogList"<?php endif; ?>> <a href="<?php echo U('Member_card/privilege',array('token'=>$token));?>">会员特权</a></li>
	<li <?php if(ACTION_NAME == 'info'): ?>class="selected" <?php else: ?>class="subCatalogList"<?php endif; ?>> <a href="<?php echo U('Member_card/info',array('token'=>$token));?>">会员卡详情</a></li>
	<li <?php if(ACTION_NAME == 'create'): ?>class="selected" <?php else: ?>class="subCatalogList"<?php endif; ?>> <a href="<?php echo U('Member_card/create',array('token'=>$token));?>">在线开卡(自定义卡号)</a></li>
	<li  <?php if(ACTION_NAME == 'exchange'): ?>class="selected" <?php else: ?>class="subCatalogList"<?php endif; ?>> <a href="<?php echo U('Member_card/exchange',array('token'=>$token));?>">积分设置</a></li>
		<li   <?php if(MODULE_NAME == 'Member'): ?>class="selected" <?php else: ?>class="subCatalogList"<?php endif; ?>> <a href="<?php echo U('Member/index',array('token'=>$token));?>">会员资料管理</a><span class="new"></span></li>
</ul>

<a class="nav-header">统计分析</a>
<ul class="ckit">
<li   <?php if(MODULE_NAME == 'index'): ?>class="selected" <?php else: ?>class="subCatalogList"<?php endif; ?> > <a href="<?php echo U('Requerydata/index',array('token'=>$token));?>">请求数详情</a>
</li>
</ul>
</ul>
</div>
</div>
<style>
a.nav-header{background:url(tpl/static/images/arrow_click.png) center right no-repeat;cursor:pointer}
a.nav-header-current{background:url(tpl/static/images/arrow_unclick.png) center right no-repeat;}
</style>
<script type="text/javascript">

$(document).ready(function(){
	$(".nav-header").mouseover(function(){
		$(this).css('background-color','#126CA9');
	}).mouseout(function(){
		$(this).css('background-color','#2f8bc9');
	}).click(function(){
		$(this).toggleClass('nav-header-current');
		$(this).next('.ckit').slideToggle();
	})
});
</script>
<div class="content">
          <div class="cLineB"><h4>邮件平台</h4></div>
          <form method="post" action="<?php echo U('User/Index/upsave');?>" enctype="multipart/form-data">
          <input type="hidden" name="id" value="<?php echo ($info["id"]); ?>">
          <div class="msgWrap">
            <table class="userinfoArea" border="0" cellspacing="0" cellpadding="0" width="100%">
              <thead>
			    <tr>
                  <th><span class="red">*</span>邮件地址：</th>
                  <td><input type="text" required="" class="px" name="email" value="<?php echo ($info["email"]); ?>" tabindex="1" size="25">
                  <span class="red">商家邮箱用于接收邮件</span>
                  </td>
                </tr>
                <tr>
                  <th><span class="red">*</span>SMTP账号：</th>
                  <td><input type="text" required="" class="px" name="emailuser" value="<?php echo ($info["emailuser"]); ?>" tabindex="1" size="25">
                  <span class="red">输入QQ帐号</span>
                  </td>
                </tr>
				<tr>
                  <th><span class="red">*</span>SMTP密码：</th>
                  <td><input type="text" required="" class="px" name="emailpassword" value="<?php echo ($info["emailpassword"]); ?>" tabindex="1" size="25">
                  <span class="red">输入QQ密码</span>
                  </td>
                </tr>
				<tr>
                  <th><span class="red">*</span>邮件平台状态：</th>
                  <td><input type="radio" value="1" checked="checked" name="emailstatus"/>开启 <input type="radio" value="0" name="emailstatus"/>关闭
                  </td>
                </tr>
				<div>
				<input type="hidden" required="" class="px" name="wxname" value="<?php echo ($info["wxname"]); ?>" tabindex="1" size="25">
				<input type="hidden" required=""  name="wxid" value="<?php echo ($info["wxid"]); ?>" class="px" tabindex="1" size="25" >
				<input type="hidden" required="" name="weixin" value="<?php echo ($info["weixin"]); ?>" class="px" tabindex="1" size="25">
				<input type="hidden" class="px" name="headerpic" value="<?php echo ($info["headerpic"]); ?>" size="60">
				<input type="hidden" name="token" value="<?php echo ($info["token"]); ?>" class="px" tabindex="1" size="40">
				<input type="hidden" class="px" id="province" value="<?php echo ($info["province"]); ?>" name="province" tabindex="1" size="20">
				<input id="city" value="<?php echo ($info["city"]); ?>" type="hidden" name="city" class="px" tabindex="1" size="20">
				<input type="hidden" required="" class="px" tabindex="1" value="<?php echo ($info["qq"]); ?>" name="qq" size="25">
				<input type="hidden" required="" name="wxfans" value="<?php echo ($info["wxfans"]); ?>" class="px" tabindex="1" size="25">
				<input type="hidden" required="" name="type" value="<?php echo ($info["typeid"]); ?>" class="px" tabindex="1" size="25">
				</div>
              </thead>
              
                <tr>
                  <td><button type="submit" class="btnGreen" id="saveSetting">保存</button></td>
                </tr>
            </table>
            
          </div>
          </form>
        </div>
        
        <div class="clr"></div>
      </div>
    </div>
  </div>
  <!--底部-->
  	</div>

	<div style="clear:both;"></div>
</div>



</body>
</html>