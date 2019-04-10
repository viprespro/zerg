<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2019/4/3
 * Time: 22:40
 */

namespace app\api\model;


use think\Model;

class Banner extends BaseModel
{
    protected $hidden = ['delete_time','update_time']; // 设置返回数据的隐藏字段
    public function items()
    {
        return $this->hasMany('BannerItem', 'banner_id', 'id');
    }

    public static function getBannerById($id)
    {
        $ret = self::with(['items', 'items.img'])->find($id);
        return $ret;
    }

}