<?php
class VoteAction extends UserAction{

	public function index(){
		$this->display();
	}

	public function add(){
		
		if(IS_POST){

			//$item=array($_POST['cname1'],$_POST['cname2'],$_POST['cname3']);
			//var_dump($item);
		}else{
			
		}
		$this->display();
	}
	public function insert(){

        var_dump($_POST['cname[1]']);
		//$this->all_insert();
	}


}



?>