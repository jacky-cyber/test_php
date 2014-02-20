<?php
class UpdateAction extends BaseAction{
	public function index(){

		$sql="
		ALTER  IGNORE TABLE  `tp_home` ADD  `bjdh` int( 11 ) NOT NULL,
         ADD  `bjmp3` varchar( 200 ) NOT NULL,
         ADD  `tongji` varchar( 200 ) NOT NULL
		";
		$result=M('home')->execute($sql);
		if($result==0)
		{
      $this->success('更新成功',U('Index/index'));
	//  $this->redirect('Index/index');
		}
		else{
	  $this->error('更新失败');	
		}
	}
}