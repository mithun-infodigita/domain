<?php

namespace Domain\Subscriber\Models;

use Domain\Shared\Models\BaseModel;
use Domain\Shared\Models\Concerns\HasUser;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Subscriber extends BaseModel{

    use HasUser;

    protected $fillable = [
        'email', 'first_name', 'last_name', 'form_id', 'user_id',
    ];


    /**
     * The tags that belong to the Subscriber
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function tags(): BelongsToMany
    {
        return $this->belongsToMany(Tag::class);
    }

    /**
     * Get the form that owns the Subscriber
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function form(): BelongsTo
    {
        return $this->belongsTo(Form::class);
    }
}