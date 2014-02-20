<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
        <title><?php echo ($tpl["wxname"]); ?></title>
        <base href="." />
        <meta name="viewport" content="width=device-width,height=device-height,inital-scale=1.0,maximum-scale=1.0,user-scalable=no;" />
        <meta name="apple-mobile-web-app-capable" content="yes" />
        <meta name="apple-mobile-web-app-status-bar-style" content="black" />
        <meta name="format-detection" content="telephone=no" />
		<link href="<?php echo RES;?>/css/202/cate<?php echo ($tpl["tpltypeid"]); ?>_<?php echo ($tpl["color_id"]); ?>.css" rel="stylesheet" type="text/css" />
		<link href="<?php echo RES;?>/css/202/plugmenu.css" rel="stylesheet" type="text/css" />
    </head>

<body>
<div class="wrap">
	<div class="show"><div><img src="<?php echo RES;?>/css/202/head.png" width="304" height="190"></div></div>
    <div class="main">
      	<ul>
		<?php $ii=0; ?>
		<?php if(is_array($info)): $i = 0; $__LIST__ = $info;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i; $ii++; ?>
    		        	<li id="m<?php echo $ii; ?>">
                        <a href="<?php if($vo['url'] == ''): echo U('Wap/Index/lists',array('classid'=>$vo['id'],'token'=>$vo['token'])); else: echo ($vo["url"]); endif; ?>">
						<div>
                       <span  class="icon" style="background:url(<?php echo ($vo["img"]); ?>) 0 center no-repeat;background-size:50px 34px;"><em></em></span>
                    <span class="title"> <?php echo ($vo["name"]); ?></span> 
                                   </div></a>
            </li><?php endforeach; endif; else: echo "" ;endif; ?>                
                    </ul>
  </div>
</div>
        <div id="insert2"></div>
        <div style="display:none"> </div>

<div class="plug-div">
        <div class="plug-phone">
            <div class="plug-menu themeStyle" style="background:<?php echo ($homeInfo["plugmenucolor"]); ?>"><span class="close"></span></div> 
               <?php if(is_array($plugmenus)): $i = 0; $__LIST__ = $plugmenus;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><div class="themeStyle plug-btn plug-btn<?php echo ($i); ?> close" style="background:<?php echo ($homeInfo["plugmenucolor"]); ?>">
							<a  href="<?php echo ($vo["url"]); ?>">
								<span style="background-image: url(<?php echo RES;?>/css/flash/images/img/<?php echo ($vo["name"]); ?>.png);" ></span>
							</a>
						</div><?php endforeach; endif; else: echo "" ;endif; ?>   
<div class="plug-btn plug-btn5 close"></div>
                    </div>
</div>

<script src="<?php echo RES;?>/css/202/zepto.min.js" type="text/javascript"></script>
<script src="<?php echo RES;?>/css/202/plugmenu.js" type="text/javascript"></script>
<div class="copyright">
<?php if($iscopyright == 0): echo ($homeInfo["copyright"]); ?>
<?php else: ?>
<?php echo ($siteCopyright); endif; ?>
</div> 
<div style="display:none"> <?php echo (htmlspecialchars_decode($tpl["tongji"])); ?></div>
    </body></html>