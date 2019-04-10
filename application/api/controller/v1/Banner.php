<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2019/3/30
 * Time: 10:39
 */

namespace app\api\controller\v1;

use app\api\model\Banner as BannerModel;

class Banner
{
    /**
     * @url:
     */
    public function getBanner($id)
    {
        /**
         * 以下写法 已经实现了模型的嵌套查询
         * 异常处理没有处理
         */
        //$ret = Banner::with(['items', 'items.img'])->find($id);

        /**
         * 更加清晰易于读的代码
         */
        $ret = BannerModel::getBannerById($id); // return $ret is an object.
        return $ret;
    }
}