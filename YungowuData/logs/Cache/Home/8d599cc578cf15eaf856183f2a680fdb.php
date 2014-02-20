<?php if (!defined('THINK_PATH')) exit();?>﻿<!DOCTYPE html>
<html>
    <head>
        <title>注册账号-<?php echo C('site_title');?></title>
		<meta name="keywords" content="<?php echo C('keyword');?>" />
        <meta name="description" content="<?php echo C('content');?>" />
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
        <link href="<?php echo RES;?>/css/reg.css" rel="stylesheet" media="screen" type="text/css" />
        <script type="text/javascript" src="<?php echo RES;?>/js/jquery.js"></script>
        <script type="text/javascript">
            var passwordok = false;
            var emailok = false;
            function checkSubmit(){
                if(emailok == false){
                    alert("邮箱格式不正确！");
                    return false;
                }else if(passwordok == false){
                    alert("密码错误！");
                    return false;
                }else{
                    return true;
                }                
            }
            
            $(document).ready(function(){
                $("#password").keyup(function(){
                    $("#password2").val("");
                });
                $("#password2").blur(function(){
                    var data2 = $("#password2").val();
                    var data1 = $("#password").val();
                    if(data1 != data2){
                        $("#passwordshow").html('<span class="red">两次密码不相同！</span>');
                    }else{
                        $("#passwordshow").html('<font color="#008800">√</font>');
                        passwordok = true;
                    }
                });
                $("#userid").blur(function(){
                    var data = $("#userid").val();
                    var myreg = /^([a-zA-Z0-9]+[_|\_|\.]?)*[a-zA-Z0-9]+@([a-zA-Z0-9]+[_|\_|\.]?)*[a-zA-Z0-9]+\.[a-zA-Z]{2,3}$/;
                    if(!myreg.test(data)){
                        $("#emailshow").html('<span class="red">邮箱格式不正确！</span>');
                    }else{
                        $.ajax({
                            url: "login.php",
                            type: "POST",
                            dataType: "script",
                            data: {
                                dopost:"test",
                                userid:data
                            },success: function(data){                                
                                if(back == 0){
                                    $("#emailshow").html('<font color="#008800">√</font>');
                                    emailok = true;
                                }else{
                                    $("#emailshow").html('<span class="red">邮箱已经被注册，请更换其它邮箱！</span>');
                                }
                            }
                        });
                    }
                });
            });
            
        </script>
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
    </head>
    <body>
	<div id="header">
        </div>
        <div id="regmain" style="margin-bottom: 20px;">
            <div class="regtitle">
                <div class="nei">
                    <div class="title">立即注册</div>
                    <div class="bak"><a href="<?php echo U('Index/login');?>">已有账号，这里登陆</a></div>
                </div>
            </div>
            <form action="<?php echo U('Users/checkreg');?>" method="post" class="login">
                <input type="hidden" name="dopost" value="save" />
                <div class="regtext">
                    <table width="100%">  
                        <tr>
                            <td width="20%" align="right"><b>邮箱：</b></td>
                            <td width="35%"><div class="inputbox"><input class="text" type="text" name="email" value="请输入电子邮箱" onClick="if(this.value=='请输入电子邮箱'){this.value=''}" onBlur="if(this.value==''){this.value='请输入电子邮箱'}"></div></td>
                            <td width="45%" align="left" id="emailshow"></td>
                        </tr>
                        <tr>
                            <td align="right"><b>昵称：</b></td>
                            <td><div class="inputbox"><input class="text" required="" value="请输入用户名" onClick="if(this.value=='请输入用户名'){this.value=''}" onBlur="if(this.value==''){this.value='请输入用户名'}" type="text" name="username"></div></td>
                            <td></td>
                        </tr>
                        <tr>
                            <td align="right"><b>密码：</b></td>
                            <td><div class="inputbox">
                              <input class="text" type="password" name="password">
                            </div></td>
                            <td></td>
                        </tr>
                        <tr>
                            <td align="right"><b>确认密码：</b></td>
                            <td><div class="inputbox">
                              <input class="text" type="password" name="repassword">
                            </div></td>
                            <td id="passwordshow"></td>
                        </tr>
                        <tr>
                            <td align="right"><b>联系电话：</b></td>
                            <td><div class="inputbox"><input type="text" name="phone"  /></div></td>
                            <td><span class="info">（选填）</span></td>
                        </tr>
                    </table>
                </div>
                <div class="regend">
                    <div class="nei">
                        <input type="submit" class="backbutton" value="立即注册" />
                    </div>
                </div>
            </form>
        </div>
    </body>
</html>