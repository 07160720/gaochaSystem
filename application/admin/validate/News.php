<?php
namespace app\admin\validate;
use think\Validate;
class News extends Validate
{
    protected $rule = [
        'title'  =>  'require',
        'desc' =>  'require',
        'content' => 'require',
    ];

    protected $message  =   [
        'title.require' => '新闻标题必须填写',
        'desc.require' => '新闻描述必须',
        'content.require' => 'content必须填写',

    ];

    protected $scene = [
        'add'  =>  ['title','desc','content'],
        'edit'  =>  ['title','desc','content'],
    ];




}
