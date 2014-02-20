<?php
class XitieAction extends BaseAction{


	public function index(){
		$agent = $_SERVER['HTTP_USER_AGENT']; 
		if(!strpos($agent,"MicroMessenger")) {
			echo '此功能只能在微信浏览器中使用';
			exit;
		}
	 
		$token	  =  $this->_get('token');
		$wecha_id = $this->_get('wecha_id');
		$id 	  = $this->_get('id');

		
		$xitie = M('xitie')->where(array('id'=>$id,'token'=>$token))->find(); 
		$this->assign('staticFilePath',C('site_url').str_replace('./','/',THEME_PATH.'common/css/xitie'));
		$this->assign('xitie',$xitie);
		$this->assign('Token',$token);
		$this->display();
		
	}

	public function add(){
		if($_POST['action'] =='add'){
			$data=array();
			$data['token'] 		= $this->_post('token');
			$data['username'] = $this->_post('username');
			$data['telephone'] = $this->_post('telephone');
			$data['count'] = $this->_post('count');
			$data['content'] = "";
			$data['type']="1";
			$result=M('xitiebbs')->add($data);
			echo'提交成功';
			exit;
		}else{

			echo'提交失败';
		}

	}


	public function add2(){
		if($_POST['action'] =='add2'){
			$data=array();
			$data['token'] 		= $this->_post('token');
			$data['username'] = $this->_post('username');
			$data['telephone'] = $this->_post('telephone');
			$data['content'] = $this->_post('content');
			$data['type']="2";
			$result=M('xitiebbs')->add($data);
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
	$info = M('xitiebbs')->where(array('token'=>$token,'type'=>1))->select();
	$count = M('xitiebbs')->where(array('token'=>$token,'type'=>1))->sum("count");
	$xitie = M('xitie')->where(array('id'=>$id,'token'=>$token))->find(); 
    $this->assign("xitie",$xitie);
    $this->assign("info",$info);
    $this->assign("count",$count);
	$this->assign('staticFilePath',C('site_url').str_replace('./','/',THEME_PATH.'common/css/xitie'));
    $this->display(); 
	}



	public function zhufu(){
				$token	  =  $this->_get('token');
		$wecha_id = $this->_get('wecha_id');
				$id 	  = $this->_get('id');

	$info = M('xitiebbs')->where(array('token'=>$token,'type'=>2))->select();
	$xitie = M('xitie')->where(array('id'=>$id,'token'=>$token))->find(); 
    $this->assign("xitie",$xitie);
    $this->assign("info",$info);
	$this->assign('staticFilePath',C('site_url').str_replace('./','/',THEME_PATH.'common/css/xitie'));
    $this->display(); 
	}
	
	

	
}
?>