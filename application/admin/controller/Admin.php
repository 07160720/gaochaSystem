<?php
namespace app\admin\controller;
use app\admin\model\Admin as AdminModel;
use app\admin\controller\Base;
class Admin extends Base
{

    public function lst()
    {   $auth=new Auth();
        $admin=new AdminModel();
        $adminres=$admin->getadmin();
        foreach ($adminres as $k => $v) {
            $_groupTitle=$auth->getGroups($v['id']);
            $groupTitle=$_groupTitle[0]['title'];
            $v['groupTitle']=$groupTitle;
        }
        $this->assign('adminres',$adminres);
        return view();
    }

    public function add()
    {
        if(request()->isPost()){
            $data=input('post.');
            $validate = \think\Loader::validate('Admin');
            if(!$validate->scene('add')->check($data)){
                $this->error($validate->getError());
            }
            $admin=new AdminModel();
            if($admin->addadmin($data)){
             
                return $this->redirect('lst');
            }else{
                return $this->redirect('lst');
            }
            return;
        }
        $authGroupRes=db('auth_group')->select();
        $this->assign('authGroupRes',$authGroupRes);
        return view();
    }

    public function edit($id)
    {
        $admins=db('admin')->find($id);

        if(request()->isPost()){
            $data=input('post.');
            $validate = \think\Loader::validate('Admin');
            if(!$validate->scene('edit')->check($data)){
                $this->error($validate->getError());
            }
            $admin=new AdminModel();
            $savenum=$admin->saveadmin($data,$admins);
            if($savenum == '2'){
                $this->error('管理员用户名不得为空！',1,1);
            }
            if($savenum !== false){
                 return $this->redirect('lst');
            }else{
                  return $this->redirect('lst');
            }
            return;
        }
        
        if(!$admins){
            $this->error('该管理员不存在',1,1);
        }

        $authGroupAccess=db('auth_group_access')->where(array('uid'=>$id))->find();
        $authGroupRes=db('auth_group')->select();
        $this->assign('authGroupRes',$authGroupRes);
      
        $this->assign('admins',$admins);
        $this->assign('groupId',$authGroupAccess['group_id']);
        return view();
    }
    public function del($id){
        $admin=new AdminModel();
        $delnum=$admin->deladmin($id);
        if($delnum == '1'){
              return $this->redirect('lst');
        }else{
              return $this->redirect('lst');
        }
    }
    public function logout(){
        session(null); 
        $this->success('退出系统成功！',url('login/index'),1,1);
    }

}
