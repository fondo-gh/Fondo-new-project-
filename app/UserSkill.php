<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserSkill extends Model
{
    /**
     * @var array
     */
    protected $fillable = [
        'user_id', 'name'
    ];

    /**
     * Skill belongs to user
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function user() {
        return $this->belongsTo(User::class);
    }
}
