<?php
class MarrycardAction extends BaseAction{
	public function index(){
		$agent = $_SERVER['HTTP_USER_AGENT']; 
		if(!strpos($agent,"MicroMessenger")) {
			echo '此功能只能在微信浏览器中使用';
			//exit;
		}
		$token	  =  $this->_get('token');
		$wecha_id = $this->_get('wecha_id');
		$id 	  = $this->_get('id');
		$wxuser = M('Wxuser')->where(array('token'=>$token))->find();
		M('Marrycard')->where(array('id'=>$id))->setInc('click');
		$marrycard = M('Marrycard')->where(array('id'=>$id,'token'=>$token,'status'=>1))->find();
		$husband = ($marrycard['husband'] != "") ? $marrycard['husband'] : "小艾";
		$wife = ($marrycard['wife'] != "") ? $marrycard['wife'] : "小薇";
		$pagetitle = $husband."和".$wife."的喜帖";
		$photo = array();
		$photo[0]['img'] = $marrycard['photo_1'];
		$photo[1]['img'] = $marrycard['photo_2'];
		$photo[2]['img'] = $marrycard['photo_3'];
		$photo[3]['img'] = $marrycard['photo_4'];
		$photo[4]['img'] = $marrycard['photo_5'];
		$marrycard['video'] = str_replace("<x>", "", $marrycard['video']);
		$this->assign('staticFilePath',C('site_url').str_replace('./','/',THEME_PATH.'common/css/marrycard'));
		$this->assign('wxuser',$wxuser);
		$this->assign('xitie',$marrycard);
		$this->assign('photo',$photo);
		$this->assign('Token',$token);
		$this->assign('pagetitle',$pagetitle);
		$this->display();
		
	}

	public function sendwish(){
		$data=array();
		$data['imcid'] 		= $this->_get('id');
		$data['token'] 		= $this->_get('token');
		$data['wecha_id'] = $this->_get('wecha_id');
		$data['guestname'] = $this->_get('name');
		$data['mobilephone'] = $this->_get('tel');
		$data['wishcontent'] = $this->_get('bless');
		$data['type']  = $this->_get('type');
		$data['creattime']  = time();
		$check = M('Marrycard_wish')->where(array('token'=>$data['token'],'imcid'=>$data['imcid'],'wecha_id'=>$data['wecha_id'],'type'=>"wish"))->find();
		$info = array();
		if ( is_array($check) ) {
			$info['msg'] = "请勿重复提交";
			$info['ret'] = 2;
		} else {
			$result = M('Marrycard_wish')->add($data);
			if ($result === false) {
				$info['msg'] = "提交失败";
				$info['ret'] = 1;
			} else {
				$info['msg'] = "提交成功";
				$info['ret'] = 0;
			}
		}
		echo json_encode($info);
	}

	public function joinbless(){
		$data=array();
		$data['imcid'] 		= $this->_get('id');
		$data['token'] 		= $this->_get('token');
		$data['wecha_id'] = $this->_get('wecha_id');
		$data['guestname'] = $this->_get('name');
		$data['mobilephone'] = $this->_get('tel');
		$data['num'] = $this->_get('num');
		$data['type']  = $this->_get('type');
		$data['creattime']  = time();
		$check = M('Marrycard_wish')->where(array('token'=>$data['token'],'imcid'=>$data['imcid'],'wecha_id'=>$data['wecha_id'],'type'=>"join"))->find();
		$info = array();
		if ( is_array($check) ) {
			$info['msg'] = "请勿重复提交";
			$info['ret'] = 2;
		} else {
			$result = M('Marrycard_wish')->add($data);
			if ($result === false) {
				$info['msg'] = "提交失败";
				$info['ret'] = 1;
			} else {
				$info['msg'] = "提交成功";
				$info['ret'] = 0;
			}
		}
		echo json_encode($info);
	}


	public function add(){
		if($_POST['action'] =='add'){
			$data=array();
			$data['wxid'] = $this->_post('wxid');
			$data['wxname'] 		= $this->_post('wxname');
			$data['uid'] = $this->_post('uid');
			$data['token'] 		= $this->_post('token');
			$data['username'] = $this->_post('username');
			$data['telephone'] = $this->_post('telephone');
			$data['count'] = $this->_post('count');
			$data['content'] = "";
			$data['type']="1";
			$result=M('marrycardbbs')->add($data);
			echo'提交成功';
			exit;
		}else{

			echo'提交失败';
		}

	}


	public function add2(){
		if($_POST['action'] =='add2'){
			$data=array();
			$data['wxid'] = $this->_post('wxid');
			$data['wxname'] 		= $this->_post('wxname');
			$data['uid'] = $this->_post('uid');
			$data['token'] 		= $this->_post('token');
			$data['username'] = $this->_post('username');
			$data['telephone'] = $this->_post('telephone');
			$data['content'] = $this->_post('content');
			$data['type']="2";
			$result=M('marrycardbbs')->add($data);
			echo'提交成功';
			exit;
		}else{

			echo'提交失败';
		}

	}
	public function fuyan(){
				$token	  =  $this->_get('token');
		$wecha_id = $this->_get('wecha_id');
				$id 	  = $this->_get('id');
	$info = M('marrycardbbs')->where(array('token'=>$token,'type'=>1,'uid'=>$id))->select();
	$count = M('marrycardbbs')->where(array('token'=>$token,'type'=>1,'uid'=>$id))->sum("count");
	$xitie = M('marrycard')->where(array('id'=>$id,'token'=>$token))->find(); 
    $this->assign("xitie",$xitie);
    $this->assign("info",$info);
    $this->assign("count",$count);
	$this->assign('staticFilePath',C('site_url').str_replace('./','/',THEME_PATH.'common/css/marrycard'));
    $this->display(); 
	}


		public function zhufu(){
				$token	  =  $this->_get('token');
		$wecha_id = $this->_get('wecha_id');
				$id 	  = $this->_get('id');

	$info = M('marrycardbbs')->where(array('token'=>$token,'type'=>2,'uid'=>$id))->select();
	$xitie = M('marrycard')->where(array('id'=>$id,'token'=>$token))->find(); 
    $this->assign("xitie",$xitie);
    $this->assign("info",$info);
	$this->assign('staticFilePath',C('site_url').str_replace('./','/',THEME_PATH.'common/css/marrycard'));
    $this->display(); 
	}
	
}
?>