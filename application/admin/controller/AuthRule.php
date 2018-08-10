<?php
namespace app\admin\controller;
use app\admin\model\AuthRule as AuthRuleModel;
use app\admin\controller\Base;
class AuthRule extends Base
{
    public function lst(){
        $authRule=new AuthRuleModel();
        if(request()->isPost()){
            $sorts=input('post.');
            foreach ($sorts as $k => $v) {
                $authRule->update(['id'=>$k,'sort'=>$v]);
            }
            $this->success('更新排序成功！',url('lst'));
            return;
        }
        $authRuleRes=$authRule->authRuleTree();
        $this->assign('authRuleRes',$authRuleRes);
        return view();
    }

    public function add(){
        if(request()->isPost()){
            $data=input('post.');
            $plevel=db('auth_rule')->where('id',$data['pid'])->field('level')->find();
            if($plevel){
                $data['level']=$plevel['level']+1;
            }else{
               $data['level']=0; 
            }
            $add=db('auth_rule')->insert($data);
            if($add){
                 return $this->redirect('lst');
            }else{
                return $this->redirect('lst');
            }
            return;
        }
        $authRule=new AuthRuleModel();
        $authRuleRes=$authRule->authRuleTree();
        $this->assign('authRuleRes',$authRuleRes);
        return view();
    }

    public function edit(){
        if(request()->isPost()){
            $data=input('post.');
            $plevel=db('auth_rule')->where('id',$data['pid'])->field('level')->find();
            if($plevel){
                $data['level']=$plevel['level']+1;
            }else{
               $data['level']=0; 
            }
            $save=db('auth_rule')->update($data);
            if($save!==false){
                 return $this->redirect('lst');
            }else{
                 return $this->redirect('lst');
            }
            return;
        }
        $authRule=new AuthRuleModel();
        $authRuleRes=$authRule->authRuleTree();
        $authRules=$authRule->find(input('id'));
        $this->assign(array(
            'authRuleRes'=>$authRuleRes,
            'authRules'=>$authRules,
            ));
        return view();
    }

    public function del(){
        $authRule=new AuthRuleModel();
        $authRule->getparentid(input('id'));
        $authRuleIds=$authRule->getchilrenid(input('id'));
        $authRuleIds[]=input('id');
        $del= AuthRuleModel::destroy($authRuleIds);
        if($del){
            return $this->redirect('lst');
        }else{
            return $this->redirect('lst');
        }
    }
}
