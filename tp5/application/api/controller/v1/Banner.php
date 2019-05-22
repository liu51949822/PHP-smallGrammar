<?php
//Banner
namespace app\api\controller\v1;
use app\api\validate\IDMustBePostiveInt;
class Banner{
    //获取id   指定banner id 的信息
    //get方法
    public  function  getBanner($id){
//        echo  $id;
//        $date = [
//            'name'=>'vend',
//            'email'=>'vendor.com'
//        ];
//        $validate = new  Validate([
//            'name' => 'require|max:10',
//            'email' => 'email'
//        ]);
//        $result = $validate->check($date);
//        dump($result);
//        echo $validate->getError();
//        var_dump();
//        id需要正整数;
//        $validate = new  Validate([
//            'id'=>'',
//        ]);
//

        $date =[
            'id'=>$id
        ];
        $validate = new  IDMustBePostiveInt();
        $result = $validate->batch()->check($date);
        echo 'dddd';
        dump($result);

    }
}