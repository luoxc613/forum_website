<?php
// 本类由系统自动生成，仅供测试用途
namespace Home\Controller;
use Think\Controller;
class IndexController extends Controller {
    public function index(){
	 $this->display();;
    }

    public function about(){
    	if(!(session('?nickname')))
			$d['session']="adfadsfas";
		else
			$d['session']=session('nickname');//用户的昵称\
		// var_dump($d);
    	$this->display();
    }
}