<?php
/**
 * Created by PhpStorm.
 * User: zhouchang
 * Date: 2018/12/8
 * Time: 上午12:06
 */

namespace App\Observes;


use App\Talk;

class TalkObserve
{
    public function created(Talk $talk)
    {
        $talk->post()->create();
    }
}