<?php if (!defined('THINK_PATH')) exit();?><html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>个人资料</title>
<meta name="apple-mobile-web-app-capable" content="yes">
<meta name="apple-mobile-web-app-status-bar-style" content="black">
<meta name="format-detection" content="telephone=no">
<meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=0.5, maximum-scale=2.0, user-scalable=yes" />
<link href="<?php echo RES;?>/css/userinfo/fans.css" rel="stylesheet" type="text/css"> 

<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script> 
<script type="text/javascript">window.jQuery || document.write('<script type="text/javascript" src="<?php echo RES;?>/css/guajiang/js/jquery.js">\x3C/script>')</script>


<style>

.footFix{width:100%;text-align:center;position:fixed;left:0;bottom:0;z-index:99;}
#footReturn a, #footReturn2 a {
display: block;
line-height: 41px;
color: #fff;
text-shadow: 1px 1px #282828;
font-size: 14px;
font-weight: bold;
}
#footReturn, #footReturn2 {
z-index: 89;
display: inline-block;
text-align: center;
text-decoration: none;
vertical-align: middle;
cursor: pointer;
width: 100%;
outline: 0 none;
overflow: visible;
Unknown property name.-moz-box-sizing: border-box;
box-sizing: border-box;
padding: 0;
height: 41px;
opacity: .95;
border-top: 1px solid #181818;
box-shadow: inset 0 1px 2px #b6b6b6;
background-color: #515151;
Invalid property value.background-image: -ms-linear-gradient(top,#838383,#202020);
background-image: -webkit-linear-gradient(top,#838383,#202020);
Invalid property value.background-image: -moz-linear-gradient(top,#838383,#202020);
Invalid property value.background-image: -o-linear-gradient(top,#838383,#202020);
background-image: -webkit-gradient(linear,0% 0,0% 100%,from(#838383),to(#202020));
Invalid property value.filter: progid:DXImageTransform.Microsoft.gradient(GradientType=0,startColorstr='#838383',endColorstr='#202020');
Unknown property name.-ms-filter: progid:DXImageTransform.Microsoft.gradient(GradientType=0,startColorstr='#838383',endColorstr='#202020');
}
</style>
</head>
<body id="fans" >
<div class="qiandaobanner"> <img src="<?php echo ($homepic); ?>" > </div>
<div class="cardexplain">
<li class="nob">
<div class="beizhu"><?php if($info['wechaname'] != false): ?>您可以修改你的会员卡信息。以下信息将作为消费凭证，请认真填写！ <?php else: ?>填写以下信息即可领取vip会员卡,红色字必填<?php endif; ?></div>
</li>
<ul class="round">
<?php if($cardnum != false): ?><li>
	<table width="100%" border="0" cellspacing="0" cellpadding="0" class="kuang">
	<tr>
	<th><font color='red'>会员卡号</font></th>
	<td><input  type="text" class="px" readonly value="<?php echo ($cardnum); ?>"></td>
	</tr>
	</table>
	</li><?php endif; ?>
<li>
<table width="100%" border="0" cellspacing="0" cellpadding="0" class="kuang">
<tr>
<th><font color='red'>微信名称</font></th>
<td><input name="wechaname" onfocus="check2(this)"
onblur="check1(this)"  type="text" class="px" id="wechaname" value="<?php echo ($info["wechaname"]); ?>" placeholder="请输入您的微信名称"></td>
</tr>
</table>
</li>
<li>
<table width="100%" border="0" cellspacing="0" cellpadding="0" class="kuang">
<tr>
<th><font color='red'>手机号码</font></th>
<td><input onfocus="check2(this)"
onblur="check3(this)" name="tel"  class="px" id="tel" value="<?php echo ($info["tel"]); ?>"  type="text" placeholder="请输入您的电话"></td>
</tr>
</table>
</li>
<li>
<table width="100%" border="0" cellspacing="0" cellpadding="0" class="kuang">
<tr>
<th>真实姓名</th>
<td><input name="truename"  type="text" class="px" id="truename" value="<?php echo ($info["truename"]); ?>" placeholder="请输入您的真实姓名"></td>
</tr>
</table>
</li>
<li>
<table width="100%" border="0" cellspacing="0" cellpadding="0" class="kuang">
<tr>
<th>QQ号码</th>
<td><input name="qq"  class="px" id="qq" value="<?php echo ($info["qq"]); ?>"  type="text" placeholder="请输入您的QQ号码"></td>
</tr>
</table>
</li>
</ul>
<ul class="round">
<li>
<table width="100%" border="0" cellspacing="0" cellpadding="0" class="kuang">
<tr>
<th>性别</th>
<td><select name="sex" class="dropdown-select" id="sex">
<option  class="dropdown-option">请选择你的性别</option>
<option  value="1" <?php if($info['sex'] == 1): ?>selected<?php endif; ?>>男</option>
<option  value="2" <?php if($info['sex'] == 2): ?>selected<?php endif; ?>> 女</option>
<option  value="0" <?php if($info['sex'] == 3): ?>selected<?php endif; ?>>其他</option>
</select></td>
</tr>
</table>
</li>
<li>
<table width="100%" border="0" cellspacing="0" cellpadding="0" class="kuang">
<tr>
<th>年龄</th>
<td><input name="age"  type="text" class="px" id="age" value="<?php echo ($info["age"]); ?>" placeholder="请输入您的年龄"></td>
</tr>
</table>
</li>
</ul>

<div class="footReturn">
<a id="showcard"  class="submit" ><?php if($info['wechaname'] != false): ?>保 存<?php else: ?>领取会员卡<?php endif; ?></a>
<div class="window" id="windowcenter" >
<div id="title" class="wtitle"><span class="close" id="alertclose"></span></div>
<div class="content">
<div id="txt"></div>
</div>
</div>
</div>
<div style="height:60px;" id="msg">&nbsp;</div>
<div class="footFix" id="footReturn"><a href="javascript:void(0)" onClick="location.href='<?php echo U('Card/vip',array('token'=>$_GET['token'],'wecha_id'=>$_GET['wecha_id']));?>';"><span>返回会员卡页</span></a></div>
<script type="text/javascript">

$("#showcard").bind("click",
function() {
    var btn = $(this);
    var wechaname = $("#wechaname").val();
	var tel 	  = $("#tel").val();
	var truename  = $("#truename").val();
	var qq 		  = $("#qq").val();
	var sex 	  = $("#sex").val();
	var birthday  = $("#birthday").val();	
	var address   = $("#address").val();
	var info  	  = $("#info").val();
	var age       = $("#age").val();
    if (tel == '') {
        alert("请认真输入手机号");
        return
    }
    
    if (wechaname == '') {
        alert("请认真输入微信号");
        return
    }
   
    var submitData = {
        wechaname : wechaname,
        tel 	  : tel,
        truename  : truename,
        qq        : qq,
        sex 	  : sex,
        birthday  : birthday,
        address   : address,
        info 	  : info,
        age 	  : age,
        action: "index"
    };
    $.post('index.php?g=Wap&m=Userinfo&a=index&token=<?php echo ($_GET['token']); ?>&wecha_id=<?php echo ($_GET['wecha_id']); ?>', submitData,
    function(data) {
        if(data==1){			 
			alert('更新成功');
		}else if(data==2){
			 
			alert('成功领取了会员卡');
			location.href = "<?php echo U('Card/vip',array('token'=>$_GET['token'],'wecha_id'=>$_GET['wecha_id']));?>";
		}else if(data==3){
			 
			alert('该商家会员卡缺货了');
		}else{  
			 
			alert('稍后再试.');
		}
    },
    "json")
});

function check1(obj){	 
	if(obj.value == ''){
		alert("请输入您的微信名称.");
		document.getElementById(obj.id).style.background="red";
		return;
	}
}

function check2(obj){   
  	document.getElementById(obj.id).style.background="white";  
}
function check3(obj){
	if(obj.value == ''){
		alert('手机号码必须填写');
		document.getElementById(obj.id).style.background="red";
		return;
	}
	reg=/^0{0,1}(13[0-9]|145|15[7-9]|153|150|156|18[0-9])[0-9]{8}$/i;
	  if(!reg.test(obj.value)){   
			alert("错误,请输入11位的手机号！");
			document.getElementById(obj.id).style.background="red";
			return;
	 }
}

</script>
</div>

</body>
</html>