<?php
namespace app\admin\validate;
use think\Validate;
class Support extends Validate
{
    protected $rule = [
        'desc1'   =>  'require',
        'desc2'   =>  'require',
        'desc3'   =>  'require',
    ];

    protected $message  =   [
        'desc1.require' => '开业前内容必须填写',
        'desc2.require' => '开业中内容必须填写',
        'desc3.require' => '开业后内容必须填写',

    ];

    protected $scene = [
        'add'   =>  ['desc1','desc2','desc3'],
        'edit'  =>  ['desc1','desc2','desc3'],
    ];




}
