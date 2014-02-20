<?php
class XitieAction extends UserAction{
	//喜帖配置
	public function index(){


     $this->display();
	}
	public function add(){

		/*$xitie=M('Xitie')->where(array('token'=>session('token')))->find();
		if(IS_POST){
			if($xitie==false){				
				$this->all_insert('Xitie','/set');
			}else{
				$_POST['id']=$xitie['id'];
				$this->all_save('Xitie','/set');				
			}
		}else{
			$this->assign('xitie',$xitie);
			
		}*/
		$this->display();
	}


	public function zhufu(){
		$db=D('Xitiebbs');
		//$where['uid']=session('uid');
		$where['token']=session('token');
		$where['type']='2';
		$count=$db->where($where)->count();
		$page=new Page($count,25);
		$info=$db->where($where)->limit($page->firstRow.','.$page->listRows)->select();
		//var_dump($info);
		$this->assign('page',$page->show());
		$this->assign('info',$info);
		$this->display();

	}


	public function del(){
		$where['id']=$this->_get('id','intval');
		//$where['uid']=session('uid');
		if(D('Xitiebbs')->where($where)->delete()){
			$this->success('操作成功',U(MODULE_NAME.'/index'));
		}else{
			$this->error('操作失败',U(MODULE_NAME.'/index'));
		}
	}
	public function insert(){
		$this->all_insert();
	}
	public function save(){
		$this->all_save();
	}
	
}



?>