<?php

namespace App;

use App\Observes\PostObserve;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    public function postable()
    {
        return $this->morphTo();
    }

    protected static function boot()
    {
        parent::boot();
        self::observe(PostObserve::class);
    }


}
