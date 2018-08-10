<?php
namespace app\Admin\controller;
use app\Admin\model\Successful as SuccessfulModel;
use app\admin\controller\Base;
class Successful extends Base
{
    // 成功案例列表显示
    public function lst()
    {
    	$Successful_select = \think\Db::name('Successful')->select();
        $Successful_total = count($Successful_select);
        $Successful_list = new \app\admin\controller\Page($Successful_total,3);
        $show = $Successful_list->fpage();
        $limit = $Successful_list->setlimit();
        $limit = explode(',', $limit);
        $list = array_slice($Successful_select,$limit[0],$limit[1]);
        $this->assign(array(
            'list'=>$list,
            'show'=>$show,
        ));
        return $this->fetch();
    }
   
      // 成功案例列表添加
    public function add()
    {	
    	if(request()->isPost()){

			$data=[
    			'title'=>input('title'),
                'desc'=>input('desc'),
                'keywords' => input('keywords'),
    			'content'=>input('content'),
                'time'   => time(),
    		];
    		$validate = \think\Loader::validate('Successful');
    		if(!$validate->scene('add')->check($data)){
			   $this->error($validate->getError()); die;
			}
    		if(db('Successful')->insert($data)){
    			 return $this->redirect('lst');
    		}else{
    			 return $this->redirect('lst');
    		}
    		return;
    	}
        return $this->fetch();
    }
    // 成功案例列表编辑
    public function edit(){
    	$id=input('id');
    	$successful=db('Successful')->find($id);
    	if(request()->isPost()){
    		$data=[
    			'id'=>input('id'),
                'title'=>input('title'),
                'keywords'=>input('keywords'),
                'desc'=>input('desc'),
    			'content'=>input('content'),
    		];
			$validate = \think\Loader::validate('Successful');
    		if(!$validate->scene('edit')->check($data)){
			   $this->error($validate->getError()); die;
			}
    		if(db('Successful')->update($data)){
    			 return $this->redirect('lst');
    		}else{
    			 return $this->redirect('lst');
    		}
    		return;
    	}
    	$this->assign('successful',$successful);
    	return $this->fetch();
    }
    // 成功案例列表删除
    public function del(){
    	$id=input('id');
		if(db('Successful')->delete(input('id'))){
			 return $this->redirect('lst');
		}else{
			 return $this->redirect('lst');
		}
    	
    }



}
