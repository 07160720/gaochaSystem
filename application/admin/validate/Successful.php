<?php
namespace app\admin\validate;
use think\Validate;
class Successful extends Validate
{
    protected $rule = [
        'title'  =>  'require',
        'desc'   =>  'require',
        'content'  => 'require',

    ];

    protected $message  =   [
        'title.require' => '案例标题必须填写',
        'desc.require' => '案例描述必须填写',
        'content.require' => '案例内容必须填写',

    ];

    protected $scene = [
        'add'   =>  ['title','content','desc'],
        'edit'  =>  ['title','content','desc'],
    ];




}
