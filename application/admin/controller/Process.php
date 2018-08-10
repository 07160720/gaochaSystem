<?php
namespace app\Admin\controller;
use app\Admin\model\Process as ProcessModel;
use app\admin\controller\Base;
class Process extends Base
{
    public function lst()
    {
        $Process_select = \think\Db::name('process')->order('id asc')->select();
        $Process_total = count($Process_select);
        $Process_list = new \app\admin\controller\Page($Process_total,3);
        $show = $Process_list->fpage();
        $limit = $Process_list->setlimit();
        $limit = explode(',',$limit);
        $list = array_slice($Process_select,$limit[0],$limit[1]);
    	$this->assign('list',$list);
        $this->assign('show',$show);
        return $this->fetch();
    }

    public function add()
    {	
    	if(request()->isPost()){
			$data=[
    	        'id'    => input('id'),
                'process'  => input('process'),
            ];

    		$validate = \think\Loader::validate('Process');
    		if(!$validate->scene('add')->check($data)){
			   $this->error($validate->getError()); die;
			}
    		if(db('process')->insert($data)){
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
    	$process=db('process')->find($id);
    	if(request()->isPost()){
    		$data=[
    			'id'=>input('id'),
                'process'=>input('process'),
    		];
			$validate = \think\Loader::validate('Process');
    		if(!$validate->scene('edit')->check($data)){
			   $this->error($validate->getError()); die;
			}
    		if(db('process')->update($data)){
    			 return $this->redirect('lst');
    		}else{
    			 return $this->redirect('lst');
    		}
    		return;
    	}
    	$this->assign('process',$process);
    	return $this->fetch();
    }

    public function del(){
    	$id=input('id');
		if(db('process')->delete($id)){
			 return $this->redirect('lst');
		}else{
			 return $this->redirect('lst');
		}
    	
    }



}
