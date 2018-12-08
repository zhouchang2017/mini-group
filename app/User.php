<?php

namespace App;

use BrianFaust\Commentable\Models\Comment;
use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function talks()
    {
        return $this->hasMany(Talk::class);
    }

    public function trips()
    {
        return $this->hasMany(Trip::class);
    }

    public function comments()
    {
        return $this->morphMany(Comment::class, 'creator');
    }
}
