<?php
namespace app\Admin\controller;
use app\Admin\model\Headquarters as HeadquartersModel;
use app\admin\controller\Base;
class Headquarters extends Base
{
    public function lst()
    {
        $headquarters_select = \think\Db::name('headquarters')->select();
        $headquarters_total = count($headquarters_select);
        $headquarters_list = new \app\admin\controller\Page($headquarters_total,3);
        $show = $headquarters_list->fpage();
        $limit = $headquarters_list->setlimit();
        $limit = explode(',',$limit);
        $list = array_slice($headquarters_select,$limit[0],$limit[1]);
        //halt($list);
    	$this->assign('list',$list);
        $this->assign('show',$show);
        return $this->fetch();
    }

    public function add()
    {	
    	if(request()->isPost()){
			$data=[
    	        'id'    => input('id'),
                'desc'  => input('desc'),
            ];

    		$validate = \think\Loader::validate('headquarters');
    		if(!$validate->scene('add')->check($data)){
			   $this->error($validate->getError()); die;
			}
    		if(db('headquarters')->insert($data)){
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
    	$headquarters=db('headquarters')->find($id);
    	if(request()->isPost()){
    		$data=[
    			'id'=>input('id'),
                'desc'=>input('desc'),
    		];
			$validate = \think\Loader::validate('headquarters');
    		if(!$validate->scene('edit')->check($data)){
			   $this->error($validate->getError()); die;
			}
    		if(db('headquarters')->update($data)){
    			 return $this->redirect('lst');
    		}else{
    			 return $this->redirect('lst');
    		}
    		return;
    	}
    	$this->assign('headquarters',$headquarters);
    	return $this->fetch();
    }

    public function del(){
    	$id=input('id');
		if(db('headquarters')->delete($id)){
			 return $this->redirect('lst');
		}else{
			 return $this->redirect('lst');
		}
    	
    }



}
