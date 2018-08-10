<?php
namespace app\Admin\controller;
use app\Admin\model\Support as SupportModel;
use app\admin\controller\Base;
class Support extends Base
{
    public function lst()
    {
        $Support_select = \think\Db::name('support')->select();
        $Support_total = count($Support_select);
        $Support_list = new \app\admin\controller\Page($Support_total,3);
        $show = $Support_list->fpage();
        $limit = $Support_list->setlimit();
        $limit = explode(',',$limit);
        $list = array_slice($Support_select,$limit[0],$limit[1]);
    	$this->assign('list',$list);
        $this->assign('show',$show);
        return $this->fetch();
    }

    public function add()
    {	
    	if(request()->isPost()){
			$data=[
    	        'id'    => input('id'),
                'desc1'  => input('desc1'),
                'desc2'  => input('desc2'),
                'desc3'  => input('desc3'),
            ];

    		$validate = \think\Loader::validate('Support');
    		if(!$validate->scene('add')->check($data)){
			   $this->error($validate->getError()); die;
			}
    		if(db('Support')->insert($data)){
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
    	$support=db('support')->find($id);
    	if(request()->isPost()){
    		$data=[
    			'id'=>input('id'),
                'desc1'=>input('desc1'),
                'desc2'  => input('desc2'),
                'desc3'  => input('desc3'),
    		];

			$validate = \think\Loader::validate('Support');
    		if(!$validate->scene('edit')->check($data)){
			   $this->error($validate->getError()); die;
			}
    		if(db('support')->update($data)){
    		     return $this->redirect('lst');
    		}else{
    			 return $this->redirect('lst');
    		}
    		return;
    	}
    	$this->assign('support',$support);
    	return $this->fetch();
    }

    public function del(){
    	$id=input('id');
		if(db('support')->delete($id)){
			 return $this->redirect('lst');
		}else{
			 return $this->redirect('lst');
		}
    	
    }



}
