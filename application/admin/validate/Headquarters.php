<?php
namespace app\admin\validate;
use think\Validate;
class Headquarters extends Validate
{
    protected $rule = [
        'desc'  =>  'require',
    ];

    protected $message  =   [
        'desc.require'  => '搞茶内容必须填写',
    ];

    protected $scene = [
        'edit'  =>  ['desc'],
    ];

}
