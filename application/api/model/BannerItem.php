<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2019/3/30
 * Time: 17:14
 */

namespace app\api\model;


use think\Db;
use think\Model;

class BannerItem extends BaseModel
{
    protected $hidden = ['id','img_id','banner_id','delete_time','update_time']; // 设置返回数据的隐藏字段
    public function img(){
        return $this->belongsTo('image','img_id','id');
    }

    public function getBannerById($id){
        $result = Db::table('banner_item')
            ->where(function ($query) use ($id){
                $query->where('banner_id','=',$id);
            })
            ->select();
        return $result;
    }
}