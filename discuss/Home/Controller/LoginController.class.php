<?php
	namespace Home\Controller;
	use Think\Controller;
	class LoginController extends Controller{
		function index(){
		$user= new \Model\UserModel();
		if(!empty($_POST))
		{
			
			$name=$_POST['username'];
			$password=md5($_POST['password']);
			// var_dump($password);
			$pas=$user->where(array('username'=>$name))->find();
			 // var_dump($pas);
			if((!$pas)||$pas['password']!==$password)
			{
				$this->redirect('Home/Login/index','',2,'密码或用户名输入错误');
			}
			else
			{
				session('[start]');
				session('username',$name);
				session('nickname',$pas['nickname']);
				session('role',$pas['role']);
				session('id',$pas['id']);
				// var_dump($pas);
				$this->redirect('Home/Article/index?tag=1','',0,'');
				if($pas['role']==1)
					$this->redirect('Admin/index','',0,'');
				
			}
		}
		else
			$this->display();
	}

	}


?>