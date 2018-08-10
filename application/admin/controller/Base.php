<?php
namespace app\admin\controller;
use think\Controller;
use think\Request;
class Base extends Controller
{
    public function _initialize(){
        if(!session('username')){
            $this->error('请先登录系统！','Login/index');
        }
        $auth=new Auth();
        $request=Request::instance();
        $con=$request->controller();
        $action=$request->action();
        $name=$con.'/'.$action;
        $notCheck=array('Index/index','Admin/lst','Admin/logout'); // 不进行判断 'Index/index','Admin/lst','Admin/logout'
        if(session('id')!=1){  // id为1，超级管理员，不进行权限限制
        	if(!in_array($name, $notCheck)){
        		if(!$auth->check($name,session('id'))){
		    	$this->error('没有权限',url('index/index'),1,1); 
		    	}
        	}
         }
    }
}
