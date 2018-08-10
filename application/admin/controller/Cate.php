<?php
namespace app\admin\controller;
use app\admin\model\Cate as CateModel;
use app\admin\controller\Base;
class Cate extends Base
{
    public function lst()
    {
    	$cate_select = \think\Db::name('cate')->select();
        $cate_total = count($cate_select);
        $cate_list = new \app\admin\controller\Page($cate_total,3);
        $show = $cate_list->fpage(); // 显示在模板上
        $limit = $cate_list->setlimit(); // 获取limit信息
        //dump($limit);
        $limit = explode(',', $limit); // explode将字符串打散为数组
        //halt($limit);
        $list = array_slice($cate_select,$limit[0],$limit[1]); // array_slice在数组中根据条件取出一段值,0,1数组中
        $this->assign('show',$show);
    	$this->assign('list',$list);
        return $this->fetch();
    }

    public function add()
    {	
    	if(request()->isPost()){
			$data=[
    			'catename'=>input('catename'),
    		];
    		$validate = \think\Loader::validate('Cate');
    		if(!$validate->scene('add')->check($data)){
			   $this->error($validate->getError()); die;
			}
    		if(db('cate')->insert($data)){
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
    	$cates=db('cate')->find($id);
    	if(request()->isPost()){
    		$data=[
    			'id'=>input('id'),
    			'catename'=>input('catename'),
    		];
			$validate = \think\Loader::validate('cate');
    		if(!$validate->scene('edit')->check($data)){
			   $this->error($validate->getError()); die;
			}
            $save=db('cate')->update($data);
    		if($save !== false){
    			 return $this->redirect('lst');
    		}else{
    			 return $this->redirect('lst');
    		}
    		return;
    	}
    	$this->assign('cates',$cates);
    	return $this->fetch();
    }

    public function del(){
    	$id=input('id');
    	if($id != 2){
    		if(db('cate')->delete(input('id'))){
    			 return $this->redirect('lst');
    		}else{
    			 return $this->redirect('lst');
    		}
    	}else{
    		 return $this->redirect('lst');
    	}
    	
    }



}
