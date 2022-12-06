<?php
namespace Domain\Subscriber\Models;

use Domain\Shared\Models\BaseModel;

class Tag extends BaseModel {

    protected $fillable = [
        'user_id', 'title'
    ];
}