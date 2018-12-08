<?php

namespace App\Contracts;


use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\MorphOne;

interface Postable
{
    /**
     * @return \Illuminate\Database\Eloquent\Relations\MorphOne
     */
    public function post(): MorphOne;

    /**
     * @return bool
     */
    public function canShow(): bool;

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function user(): BelongsTo;
}