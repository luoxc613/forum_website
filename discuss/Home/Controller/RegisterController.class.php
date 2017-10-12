<?php
	namespace Home\Controller;
	use Think\Controller;
	class RegisterController extends Controller{
		function index(){
		$user= new \Model\UserModel();
		if(!empty($_POST))
		{
			if($_POST['password']!=$_POST['r_password'])
			$this->redirect("Home/Register",'',3,'两次密码输入不一样，请重新操作');
			$name=$user->select();
			foreach ($name as $k => $v) {
				if($_POST['username']==$v['username'])
					$this->redirect("Register/index",'',3,'账号已存在，请更换一个');	
				}
			$user->create();
			$data1['password']=md5($_POST['password']);
			$data1['username']=$_POST['username'];
			$data1['role']=1;
			$data1['nickname']=$_POST['nickname'];
			$a=$user->add($data1);
			if($a)
				$this->redirect('Login/index','',0,'');
			else
				$this->redirect('Register/index','',3,'注册失败，请重新注册');
		}
		else
			$this->display();
	}

	}


?>