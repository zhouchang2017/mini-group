<?php

namespace App;

use Illuminate\Database\Eloquent\Relations\Pivot;
use Spatie\ModelStatus\HasStatuses;

class TripUser extends Pivot
{
    use HasStatuses;

    protected $table = 'trip_user';

    protected $fillable = [ 'trip_id', 'user_id', 'status' ];
}
