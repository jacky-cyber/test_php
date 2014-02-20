<?php
class XitieModel extends Model{
	protected $_validate = array(
			array('title','require','回复标题不能为空',1),
			array('info','require','回复详细内容必须填写',1),
			array('picurl','require','回复封面图片必须填写',1),
			array('time','require','宴会时间必须填写',1),
			array('address','require','宴会地点必须填写',1),
			array('tel','require','接待电话必须填写',1),
			array('hua','require','请填写想说的话',1),
			array('id','checkid','非法操作',2,'callback',2),

	 );
	protected $_auto = array (		
		array('token','getToken',Model:: MODEL_BOTH,'callback'),
	);
	function checkid(){
		$dataid=$this->field('id')->where(array('id'=>$_POST['id'],'token'=>session('token')))->find();
		if($dataid==false){
			return false;
		}else{
			return true;
		}
	}
	function getToken(){	
		return $_SESSION['token'];
	}
}

?>
