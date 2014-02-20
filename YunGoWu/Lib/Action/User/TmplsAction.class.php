<?php

/**
 * 通用模板管理
 * */
class TmplsAction extends UserAction {

    public function index() {
        $db = D('Wxuser');
        $where['token'] = session('token');
        $where['uid'] = session('uid');
        $info = $db->where($where)->find();
        $this->assign('info', $info);
        $this->display();
    }

    public function add() {
        $gets = $this->_get('style');
        $db = M('Wxuser');
        switch ($gets) {

			 case 1:
                $data['tpltypeid'] = 1;
                $data['tpltypename'] = 'tpl_101_index';
                break;
            case 2:
                $data['tpltypeid'] = 2;
                $data['tpltypename'] = 'tpl_102_index';
                break;
            case 3:
                $data['tpltypeid'] = 3;
                $data['tpltypename'] = 'tpl_103_index';
                break;
            case 4:
                $data['tpltypeid'] = 4;
                $data['tpltypename'] = 'tpl_104_index';
                break;
            case 5:
                $data['tpltypeid'] = 5;
                $data['tpltypename'] = 'tpl_105_index';
                break;
            case 6:
                $data['tpltypeid'] = 6;
                $data['tpltypename'] = 'tpl_106_index';
                break;
            case 7:
                $data['tpltypeid'] = 7;
                $data['tpltypename'] = 'tpl_107_index';
                break;
            case 8:
                $data['tpltypeid'] = 8;
                $data['tpltypename'] = 'tpl_108_index';
                break;
            case 9:
                $data['tpltypeid'] = 9;
                $data['tpltypename'] = 'tpl_109_index';
                break;
            case 10:
                $data['tpltypeid'] = 10;
                $data['tpltypename'] = 'tpl_110_index';
                break;
            case 11:
                $data['tpltypeid'] = 11;
                $data['tpltypename'] = 'tpl_111_index';
                break;
            case 12:
                $data['tpltypeid'] = 12;
                $data['tpltypename'] = 'tpl_112_index';
                break;
            case 13:
                $data['tpltypeid'] = 13;
                $data['tpltypename'] = 'tpl_113_index';
                break;
            case 14:
                $data['tpltypeid'] = 14;
                $data['tpltypename'] = 'tpl_114_index';
                break;
			case 15:
                $data['tpltypeid'] = 15;
                $data['tpltypename'] = 'tpl_115_index';
                break;
			case 16:
                $data['tpltypeid'] = 16;
                $data['tpltypename'] = 'tpl_116_index';
                break;
			case 17:
                $data['tpltypeid'] = 17;
                $data['tpltypename'] = 'tpl_117_index';
                break;
			case 18:
                $data['tpltypeid'] = 18;
                $data['tpltypename'] = 'tpl_118_index';
                break;
			case 19:
                $data['tpltypeid'] = 19;
                $data['tpltypename'] = 'tpl_119_index';
                break;
			case 20:
                $data['tpltypeid'] = 20;
                $data['tpltypename'] = 'tpl_120_index';
                break;
			case 21:
                $data['tpltypeid'] = 21;
                $data['tpltypename'] = 'tpl_121_index';
                break;
			case 22:
                $data['tpltypeid'] = 22;
                $data['tpltypename'] = 'tpl_122_index';
                break;
			case 23:
                $data['tpltypeid'] = 23;
                $data['tpltypename'] = 'tpl_123_index';
                break;
			case 24:
                $data['tpltypeid'] = 24;
                $data['tpltypename'] = 'tpl_124_index';
                break;
			case 25:
                $data['tpltypeid'] = 25;
                $data['tpltypename'] = 'tpl_125_index';
                break;
			case 26:
                $data['tpltypeid'] = 26;
                $data['tpltypename'] = 'tpl_126_index';
                break;
            case 27:
                $data['tpltypeid']=27;
                $data['tpltypename']='tpl_127_index';
                break;
            case 28:
                $data['tpltypeid']=28;
                $data['tpltypename']='tpl_128_index';
                break;
            case 29:
                $data['tpltypeid']=29;
                $data['tpltypename']='tpl_129_index';
                break;
            case 30:
                $data['tpltypeid']=30;
                $data['tpltypename']='tpl_130_index';
                break;
            case 31:
                $data['tpltypeid']=31;
                $data['tpltypename']='tpl_131_index';
                break;
            case 32:
                $data['tpltypeid']=32;
                $data['tpltypename']='tpl_132_index';
                break;
            case 33:
                $data['tpltypeid']=33;
                $data['tpltypename']='tpl_133_index';
                break;
            case 34:
                $data['tpltypeid']=34;
                $data['tpltypename']='tpl_134_index';
                break;
            case 35:
                $data['tpltypeid']=35;
                $data['tpltypename']='tpl_135_index';
                break;
            case 36:
                $data['tpltypeid']=36;
                $data['tpltypename']='tpl_136_index';
                break;
            case 37:
                $data['tpltypeid']=37;
                $data['tpltypename']='tpl_137_index';
                break;
            case 38:
                $data['tpltypeid']=38;
                $data['tpltypename']='tpl_138_index';
                break;
            case 39:
                $data['tpltypeid']=39;
                $data['tpltypename']='tpl_139_index';
                break;
            case 40:
                $data['tpltypeid']=40;
                $data['tpltypename']='tpl_140_index';
                break;				
            case 41:
                $data['tpltypeid']=41;
                $data['tpltypename']='tpl_141_index';
                break;	
            case 42:
                $data['tpltypeid']=42;
                $data['tpltypename']='tpl_142_index';
                break;	
            case 43:
                $data['tpltypeid']=43;
                $data['tpltypename']='tpl_143_index';
                break;	
            case 44:
                $data['tpltypeid']=44;
                $data['tpltypename']='tpl_144_index';
                break;	
            case 45:
                $data['tpltypeid']=45;
                $data['tpltypename']='tpl_145_index';
                break;	
            case 46:
                $data['tpltypeid']=46;
                $data['tpltypename']='tpl_146_index';
                break;	
            case 47:
                $data['tpltypeid']=47;
                $data['tpltypename']='tpl_147_index';
                break;	
            case 48:
                $data['tpltypeid']=48;
                $data['tpltypename']='tpl_148_index';
                break;	
            case 49:
                $data['tpltypeid']=49;
                $data['tpltypename']='tpl_149_index';
                break;	
            case 50:
                $data['tpltypeid']=50;
                $data['tpltypename']='tpl_150_index';
                break;	

        }
        $where['token'] = session('token');
        $db->where($where)->save($data);
        //
        M('Home')->where(array('token'=>session('token')))->save(array('advancetpl'=>0));
    }

    public function lists() {
        $gets = $this->_get('style');
        $db = M('Wxuser');
        switch ($gets) {
            case 4:
                $data['tpllistid'] = 4;
                $data['tpllistname'] = 'ktv_list';
                break;
            case 1:
                $data['tpllistid'] = 1;
                $data['tpllistname'] = 'yl_list';
                break;
        }
        $where['token'] = session('token');
        $db->where($where)->save($data);
    }

    public function content() {
        $gets = $this->_get('style');
        $db = M('Wxuser');
        switch ($gets) {
            case 1:
                $data['tplcontentid'] = 1;
                $data['tplcontentname'] = 'yl_content';
                break;
            case 3:
                $data['tplcontentid'] = 3;
                $data['tplcontentname'] = 'ktv_content';
                break;
        }
        $where['token'] = session('token');
        $db->where($where)->save($data);
    }
    public function plugmenu() {
        $gets = $this->_get('style');
        $db = M('Wxuser');
        switch ($gets) {
            case 1:
                $data['tplcontentid'] = 1;
                $data['tplcontentname'] = 'yl_content';
                break;
            case 3:
                $data['tplcontentid'] = 3;
                $data['tplcontentname'] = 'ktv_content';
                break;
        }
        $where['token'] = session('token');
        $db->where($where)->save($data);
    }
	


    public function background() {
        $data['color_id'] = $this->_get('style');
        $db = M('Wxuser');
        $where['token'] = session('token');
        $db->where($where)->save($data);
    }

    public function insert() {
        
    }

    public function upsave() {
	
    }

}

?>