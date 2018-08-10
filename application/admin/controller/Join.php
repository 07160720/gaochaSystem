<?php
namespace app\Admin\controller;
use app\Admin\model\Join as JoinModel;
use app\admin\controller\Base;
class Join extends Base
{
    // 加盟动态列表显示
    public function lst()
    {
    	$Join_select = \think\Db::name('join_in')->select();
        $Join_total = count($Join_select);
        $Join_list = new \app\admin\controller\Page($Join_total,3);
        $show = $Join_list->fpage();
        $limit = $Join_list->setlimit();
        $limit = explode(',', $limit);
        $list = array_slice($Join_select,$limit[0],$limit[1]);
        $this->assign(array(
            'list'=>$list,
            'show'=>$show,
        ));
        return $this->fetch();
    }
    // 加盟动态列表删除
    public function del(){
    	$id=input('id');
		if(db('join_in')->delete(input('id'))){
            return $this->redirect('lst');
		}else{
			return $this->redirect('lst');
		}
    	
    }



}
