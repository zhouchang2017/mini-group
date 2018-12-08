<?php


namespace App\Traits;


use App\Post;
use App\User;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\MorphOne;

/**
 * Trait PostableTrait
 * @package App\Traits
 */
trait PostableTrait
{
    /**
     * @return \Illuminate\Database\Eloquent\Relations\MorphOne
     */
    public function post(): MorphOne
    {
        return $this->morphOne(Post::class, 'postable');
    }

    /**
     * @return bool
     */
    public function canShow(): bool
    {
        return ! !$this->hidden;
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}