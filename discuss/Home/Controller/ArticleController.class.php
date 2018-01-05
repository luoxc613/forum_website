// 因为这段能够表现我熟悉掌握了thinkphp框架和smarty框架，且灵活运用了MVC模式，在逻辑处理上，对数据库的操作上，也能有所体现

<?php
	namespace Home\Controller;
	use Think\Controller;
	class ArticleController extends Controller{
		function index(){
			$news=new \Model\ArticleModel();
			$reply=new \Model\ReplyModel();
			$user=new \Model\UserModel();
			$tag=$_GET['tag'];
			// echo $tag;
	
				// $a=$news->where('states=1 and tag=\'%s\'',$tag)->select();
			$total=$news->where('states=1 and tag=\'%s\'',$tag)->count();
			$per=8;
			$page=new \Component\Page($total,$per);
			$sql="select * from article where ( states=1 and tag='".$tag."') order by time desc ".$page->limit;
			// echo $sql;
			$a=$news->query($sql);
			$n=0;
			$i= count($a);
			for(;$n<$i;$n++)
				$a[$n]['time']=date('Y-n-j',strtotime($a[$n]['time']))	;
			$pagelist=$page->fpage();
			for($n=0;$n<$i;$n++)
			{
				$a_id=$a[$n]['id'];
				$a[$n]['reply']=$reply->where('a_id=%d and r_id=0',$a_id)->count();
			}	
			
			for($n=0;$n<$i;$n++)
			{
				$u_id=$a[$n]['u_id'];
				// echo $u_id;
				$nick=$user->where('id=%d',$u_id)->select();
				$a[$n]['nickname']=$nick[0]['nickname'];
				
			}
		// var_dump($a);//文章相关信息
		// var_dump($b);//评论数
		if(!(session('?role')))
			$c['session']="";
		else
			$c['session']=session('role');//用户的昵称
			
		// var_dump($d);
		
		$e[0]['tag']=$_GET['tag'];
		$this->assign("a",$a);
		$this->assign("c",$c);
		$this->assign("e",$e);
		// var_dump($c);
		$this->assign("pagelist",$pagelist);
		$this->display();
	}
	
	function detail(){
			$news=new \Model\ArticleModel();
			$reply=new \Model\ReplyModel();
			$user=new \Model\UserModel();
			$picture=new \Model\PictureModel();
			$id=$_GET['id'];
			// echo $tag;
	
				// $a=$news->where('states=1 and tag=\'%s\'',$tag)->select();

			if(!empty($_POST))
			{
				$data['a_id']=$_POST['a_id'];
				if(!(session('?id')))
					$data['u_id']=0;
				else
					$data['u_id']=session('id');
				$data['content']=$_POST['content'];
				$data['time']=Date("Y-n-j H:i:s");
				$data['r_id']=$_POST['r_id'];
				var_dump($data);
				$a=$reply->add($data);
				if($a)
					$this->redirect('Article/detail?id='.$data['a_id'],'',0,'');
				else
					$this->redirect('Article/detail?id='.$data['a_id'],'',3,'注册失败，请重新注册');
			}
			else{

			$a=$news->where('id=%d',$id)->select();
							
			$a[0]['reply']=$reply->where('a_id=%d and r_id =0',$id)->count();
			$b=$reply->where('a_id=%d and r_id =0',$id)->order("time desc")->select();
			$u_id=$a[0]['u_id'];
			$nick=$user->where('id=%d',$u_id)->select();
			$a[0]['nickname']=$nick[0]['nickname'];
			$c=$reply->where('a_id=%d and r_id!=0',$id)->order("time desc")->select();
			$i=$a[0]['reply'];
			$c_num=$reply->where('a_id=%d and r_id!=0',$id)->count();
			for($n=0;$n<$i;$n++)
			{

				$u_id=$b[$n]['u_id'];
				
				// echo $u_id;
				if($u_id==0)
					$b[$n]['nickname']="游客";
				else{
				$nick=$user->where('id=%d',$u_id)->select();
				$b[$n]['nickname']=$nick[0]['nickname'];
				}
				if(!session('?id'))
				{	
					$b[$n]['user_id']=0;
					
				}
			else
				{
					$b[$n]['user_id']=session('id');
					 
				}
				
			}
			for($n=0;$n<$c_num;$n++)
			{
				$u_id=$c[$n]['u_id'];
				if($u_id==0)
					$c[$n]['nickname']="游客";
				else{
				$nick=$user->where('id=%d',$u_id)->select();
				$c[$n]['nickname']=$nick[0]['nickname'];
				}
				if(!session('?id'))
				{	
					$b[$n]['user_id']=0;
					
				}
			else
				{
					$b[$n]['user_id']=session('id');
					 
				}
				

			}
		// var_dump($a);//文章相关信息
		// // var_dump($b);//评论数
		if(!(session('?role')))
			$f[0]['session']="";
		else
			$f[0]['session']=session('role');//用户的昵称
			
		// var_dump($d);
		// var_dump($a);
		// var_dump($b);	
		if(!session('?id'))
		{	
			$d[0]['u_id']=0;
			$d[0]['a_id']=$id;
		}
		else
			{
				$d[0]['u_id']=session('id');
				$d[0]['a_id']=$id;
			}
			// $tag=$news->where('id=%',$id)->select();
			// var_dump($a);
$e[0]['tag']=$a[0]['tag'];
		$this->assign("a",$a);
		$this->assign("b",$b);
		$this->assign("c",$c);
		$this->assign("d",$d);
		$this->assign("e",$e);
		$this->assign("f",$f);
		// var_dump($c);
		// var_dump($d);
		$this->display();
		}
	}	

	function tuichu(){
		session(null);
		$this->redirect("Home/Login/index",'',0,'');
	}	

	function publish()
	{
		if(!empty($_POST))
		{
			// $_FILES['picture']=$_POST['picture'];
			// if($_FILES['file']['error']){echo "aa";}
		var_dump($_POST);
		$time=date("Y-m-d H:i:s",time());
		echo strtotime($time);
	 
			$article=new \Model\ArticleModel();
			if(!empty($_FILES))
					{
						$config=array(
							'rootPath' =>'./public/',
							'savePath' =>'upload/',
							'exts'   =>	 array('jpg', 'gif', 'png', 'jpeg','bmp'),
					);
					$upload= new \Think\Upload($config);
					var_dump($upload);
					$z=$upload->uploadOne($_FILES['picture']);
					var_dump($z);
					if(!$z)	
					{
						$_POST['picture']="null";
					}
					else
					{
						$img=$z['savepath'].$z['savename'];
						$_POST['picture']=$img;
				 
					}}
			$data['content']=$_POST['content'];
			$data['u_id']=session('id');
			$data['time']=Date("Y-n-j H:i:s");
			$data['picture']=$_POST['picture'];
			$data['introduction']=$_POST['introduction'];
			$data['tag']=$_POST['class'];
			$data['states']=1;
			$data['title']=$_POST['title'];
			var_dump($data);	
			$res=$article->add($data);			
			if($res)
				$this->redirect("Article/index?tag=".$data['tag'],'',0,'');
			else
				$this->redirect("Article/publish",'',3,'添加错误，请重新填写');
		 		
		}else{
			if(!(session('?nickname')))
				$d[0]['session']="";
			else
				$d[0]['session']=session('nickname');//用户的昵称
			
		// var_dump($d);
		// var_dump($a);
		// var_dump($b);
			if(!session('?id'))
			{	
				$d[0]['u_id']=0;
				$d[0]['a_id']=$id;
			}
			else
			{
				$d[0]['u_id']=session('id');
				$d[0]['a_id']=$id;
			}
			$this->assign("d",$d);
			$this->display();
		}
}


	function text(){
		if(!empty($_POST))
			var_dump($_FILES);
		else
			$this->display();
	}
}

?>
