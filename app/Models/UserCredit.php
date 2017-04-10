<?php

namespace App\Models;


class UserCredit extends \Eloquent
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'amount', 'user_id',
    ];

    public function user() {
        return self::belongsTo(User::class);
    }
}
