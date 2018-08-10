<?php
namespace app\admin\validate;
use think\Validate;
class Process extends Validate
{
    protected $rule = [
        'process'   =>  'require|unique:process',
    ];

    protected $message  =   [
        'process.require' => '加盟流程名称必须填写',
        'process.unique'  => '加盟流程名称不能重复',

    ];

    protected $scene = [
        'add'   =>  ['process'],
        'edit'  =>  ['process'],
    ];




}
