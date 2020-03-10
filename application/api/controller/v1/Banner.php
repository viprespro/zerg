<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2019/3/30
 * Time: 10:39
 */

namespace app\api\controller\v1;

use app\api\model\Banner as BannerModel;
use app\api\validate\IDMustBePositiveInt;
use app\lib\exception\MissException;
use think\Validate;

class Banner
{
    /**
     * 获取制定id的banner信息
     * @url: /banner/:id
     * @htpp get
     * @id banner的id
     */
    public function getBanner($id)
    {
        /**
         * 验证层的学习validate
         */
//        $data = [
//          'name' => 'vendor45565fjgdkj',
//          'email' => 'vendor@qqm'
//        ];
//
//        $validate = new Validate(
//          [
//              'name' => 'require|max:10',
//              'email' => 'email'
//          ]
//        );
//        $result = $validate->batch()->check($data); // 批量验证
//        var_dump($validate->getError());


        /**
         * 自定义验证层学习
         */

//        $data = [
//            'id' => $id
//        ];
//
//        $validate = new IDMustBePositiveInt();
//
//        $ret = $validate->batch()->check($data);
//
//        echo $ret;

        /**
         * goCheck方法的使用
         */
        (new IDMustBePositiveInt())->goCheck();

        /**
         * 以下写法 已经实现了模型的嵌套查询
         * 异常处理没有处理
         */
        //$ret = Banner::with(['items', 'items.img'])->find($id);

        /**
         * 更加清晰易于读的代码
         */
        $ret = BannerModel::getBannerById($id);
        if(!$ret){
            throw new MissException();
        }
        return $ret;
    }
}