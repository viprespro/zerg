<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2019/3/30
 * Time: 10:39
 */

namespace app\api\controller\v1;

class Banner
{
    /**
     * @url /getBanner/:id
     */
    public function getBanner($id)
    {
        return 'This is version2';
    }
}