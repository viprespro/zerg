<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2019/4/3
 * Time: 22:40
 */

namespace app\api\model;

use think\Db;
use think\Model;

class Banner extends BaseModel
{
    protected $hidden = ['delete_time','update_time']; // 设置返回数据的隐藏字段

    /**
     * @return \think\model\relation\HasMany
     * 定义模型关联  一对多关系hasMany
     */
    public function items()
    {
        return $this->hasMany('BannerItem', 'banner_id', 'id');
    }

    public static function getBannerById($id)
    {

        $ret = self::with(['items', 'items.img'])->find($id);
        return $ret;

        /**
         * 原生查询方式
         */
//        $ret = Db::query('select * from banner_item where banner_id=?',[$id]);
//        return $ret;

        /**
         * Query构造器查询
         */
//        $ret = Db::table('banner_item')->where('banner_id','=',$id)->select();
////
////        var_dump($ret);
//        return $ret;

    }

}