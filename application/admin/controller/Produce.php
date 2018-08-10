<?php
namespace app\Admin\controller;
use app\Admin\model\Produce as ProduceModel;
use app\admin\controller\Base;
class Produce extends Base
{
    public function lst()
    {
        $Produce_select = \think\Db::name('Produce')->order('id desc')->select();
        $Produce_total = count($Produce_select);
        $Produce_list = new \app\admin\controller\Page($Produce_total,3);
        $show = $Produce_list->fpage();
        $limit = $Produce_list->setlimit();
        $limit = explode(',',$limit);
        $list = array_slice($Produce_select,$limit[0],$limit[1]);
    	$this->assign('list',$list);
        $this->assign('show',$show);
        return $this->fetch();
    }

    public function add()
    {	
    	if(request()->isPost()){
            if($_FILES['pic']['tmp_name']){
                $file = request()->file('pic');
                $info = $file->move(ROOT_PATH . 'public' . DS . 'static/uploads');
                $data['pic']='/uploads/'.$info->getSaveName();
            }
            
    		if(db('Produce')->insert($data)){
    			 return $this->redirect('lst');
    		}else{
    			 return $this->redirect('lst');
    		}
    		return;
    	}
        return $this->fetch();
    }

    public function edit(){
    	$id=input('id');
    	$produce=db('produce')->find($id);
    	if(request()->isPost()){
            $id = input('id');
    		if($_FILES['pic']['tmp_name']){
                $file = request()->file('pic');
                $info = $file->move(ROOT_PATH . 'public' . DS . 'static/uploads');
                $data['pic']='/uploads/'.$info->getSaveName();
            }
    		if(db('produce')->where('id',$id)->update($data)){
    			 return $this->redirect('lst');
    		}else{
    			 return $this->redirect('lst');
    		}
    		return;
    	}
    	$this->assign('produce',$produce);
    	return $this->fetch();
    }

    public function del(){
    	$id=input('id');
		if(db('Produce')->delete($id)){
			 return $this->redirect('lst');
		}else{
			 return $this->redirect('lst');
        }
    	
    }



}
