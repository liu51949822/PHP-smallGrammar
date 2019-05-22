<?php


namespace app\api\validate;
use think\Validate;

class IDMustBePostiveInt extends Validate {
    protected  $rule = [
        'id' => 'require|'
    ];
    protected  function  isPossitiveIntger($value,$rule='',$date='',$field=''){
        if (is_numeric($value)&&is_int($value+0)&&($value+0)>0){
            return true;
        }else{
            return  $field."必须是整数" ;       }
    }
}