<?php
/**
 * Created by PhpStorm.
 * User: zhouchang
 * Date: 2018/12/8
 * Time: 上午12:07
 */

namespace App\Observes;


use App\Trip;

class TripObserve
{
    public function created(Trip $trip)
    {
        $trip->post()->create();
    }
}