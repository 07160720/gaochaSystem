<?php
namespace app\admin\model;
use think\Model;
use think\Db;
class Admin extends Model
{
	public function addadmin($data){
		if(empty($data) || !is_array($data)){
			return false;
		}
		if($data['password']){
			$data['password']=md5($data['password']);
		}
		$adminData=array();
		$adminData['username']=$data['username'];
		$adminData['password']=$data['password'];
		if($this->save($adminData)){
			$groupAccess['uid']=$this->id;
			$groupAccess['group_id']=$data['group_id'];
			db('auth_group_access')->insert($groupAccess);
			return true;
		}else{
			return false;
		}

	}

	public function getadmin(){
		return $this::paginate(5,false,[
			'type'=>'boot',
			'var_page' => 'page',
		]);
	}

	public function saveadmin($data,$admins){
		if(!$data['username']){
            return 2;//管理员用户名为空
        }
        if(!$data['password']){
        	$data['password']=$admins['password'];
        }else{
        	$data['password']=md5($data['password']);
        }
        db('auth_group_access')->where(array('uid'=>$data['id']))->update(['group_id'=>$data['group_id']]);
        return $this::update(['username'=>$data['username'],'password'=>$data['password']],['id'=>$data['id']]);

    }

    public function deladmin($id){
    	if($this::destroy($id)){
    		return 1;
    	}else{
    		return 2;
    	}
    }

	public function login($data){
		$captcha = new \think\captcha\Captcha();
		if (!$captcha->check($data['code'])) {
			 return 4;// 验证码错误
		}
		$user=Db::name('admin')->where('username','=',$data['username'])->find();
		if($user){
			if($user['password'] == md5($data['password'])){
				session('username',$user['username']);
				session('id',$user['id']);
				return 3; //信息正确
			}else{
				return 2; //密码错误
			}
		}else{
			return 1; //用户不存在
		}
	}

	

}
