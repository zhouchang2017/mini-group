<?php

namespace App;

use App\Contracts\Postable;
use App\Observes\TalkObserve;
use App\Traits\PostableTrait;
use BrianFaust\Commentable\Traits\HasComments;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Talk extends Model implements Postable
{
    use SoftDeletes, PostableTrait, HasComments;

    protected $fillable = [ 'body', 'user_id' ];

    protected $dates = [ 'deleted_at' ];

    protected $with=['comments'];

    protected static function boot()
    {
        parent::boot();
        self::observe(TalkObserve::class);
    }

}
