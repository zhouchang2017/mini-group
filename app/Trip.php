<?php

namespace App;

use App\Contracts\Postable;
use App\Observes\TripObserve;
use App\Traits\PostableTrait;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Trip
 * @package App
 */
class Trip extends Model implements Postable
{
    use SoftDeletes, PostableTrait;

    /**
     * @var array
     */
    protected $fillable = [ 'description', 'user_id', 'stock' ];

    /**
     * @var array
     */
    protected $dates = [ 'deleted_at' ];

    /**
     *
     */
    protected static function boot()
    {
        parent::boot();
        self::observe(TripObserve::class);
    }


    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function passengers()
    {
        return $this->belongsToMany(User::class)->using(TripUser::class);
    }
}
