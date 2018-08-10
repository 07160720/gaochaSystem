<?php
namespace app\admin\controller;
use app\admin\model\AuthGroup as AuthGroupModel;
use app\admin\controller\Base;
class AuthGroup extends Base
{
    public function lst(){
        $authGroupRes=AuthGroupModel::paginate(6);
        $this->assign('authGroupRes',$authGroupRes);
        return view();
    }

    public function add(){
        if(request()->isPost()){
            $data=input('post.');
            if($data['rules']){
                $data['rules']=implode(',', $data['rules']);
            }
            $add=db('auth_group')->insert($data);
            if($add){
                return $this->redirect('lst');
            }else{
                $this->error('添加用户组失败！',1,1);
            }
            return;
        }
        $authRule=new \app\admin\model\AuthRule();
        $authRuleRes=$authRule->authRuleTree();
        $this->assign('authRuleRes',$authRuleRes);
        return view();
    }

    public function edit(){
        if(request()->isPost()){
            $data=input('post.');
            if($data['rules']){
                $data['rules']=implode(',', $data['rules']); // 每一个数据用逗号隔开
            }
            $_data=array(); // 定义一个数组
            // halt($data);
            foreach ($data as $k => $v) {
                $_data[]=$k;  // 数组进行遍历
            }
            if(!in_array('status', $_data)){
                $data['status']=0;
            }
            $save=db('auth_group')->update($data);
            if($save!==false){
                 return $this->redirect('lst');
            }else{
                $this->error('修改用户组失败！',1,1);
            }
            return;
        }
        $authgroups=db('auth_group')->find(input('id'));
        $this->assign('authgroups',$authgroups);
        $authRule=new \app\admin\model\AuthRule();
        $authRuleRes=$authRule->authRuleTree();
        $this->assign('authRuleRes',$authRuleRes);
        return view();
    }

    public function del(){
        $del=db('auth_group')->delete(input('id'));
        if($del){
            return $this->redirect('lst');
        }else{
            $this->error('删除用户组失败！',1,1);
        }
    }

}
