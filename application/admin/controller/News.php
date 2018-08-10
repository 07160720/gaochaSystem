<?php
namespace app\Admin\controller;
use app\Admin\model\News as NewsModel;
use app\admin\controller\Base;
class News extends Base
{
    // 新闻动态列表显示
    public function lst()
    {
    	$news_select = \think\Db::name('news')->select();
        $news_total = count($news_select);
        $news_list = new \app\admin\controller\Page($news_total,3);
        $show = $news_list->fpage();
        $limit = $news_list->setlimit();
        $limit = explode(',', $limit);
        $list = array_slice($news_select,$limit[0],$limit[1]);
        $this->assign(array(
            'list'=>$list,
            'show'=>$show,
        ));
        return $this->fetch();
    }
   
      // 新闻动态列表添加
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
    		$validate = \think\Loader::validate('News');
    		if(!$validate->scene('add')->check($data)){
			   $this->error($validate->getError()); die;
			}
    		if(db('News')->insert($data)){
    			return $this->redirect('lst');
    		}else{
    			return $this->redirect('lst');
    		}
    		return;
    	}
        return $this->fetch();
    }
    // 新闻动态列表编辑
    public function edit(){
    	$id=input('id');
    	$News=db('News')->find($id);
    	if(request()->isPost()){
    		$data=[
    			'id'=>input('id'),
                'title'=>input('title'),
                'keywords'=>input('keywords'),
                'desc'=>input('desc'),
    			'content'=>input('content'),
                'time'   =>  time(),
    		];

			$validate = \think\Loader::validate('News');
    		if(!$validate->scene('edit')->check($data)){
			   $this->error($validate->getError()); die;
			}
    		if(db('News')->update($data)){
    	       return $this->redirect('lst');
    		}else{
    		   return $this->redirect('lst');
    		}
    		return;
    	}
        
    	$this->assign('News',$News);
    	return $this->fetch();
    }
    // 新闻动态列表删除
    public function del(){
    	$id=input('id');
		if(db('News')->delete(input('id'))){
		    return $this->redirect('lst');
		}else{
		    return $this->redirect('lst');
		}
    	
    }



}
